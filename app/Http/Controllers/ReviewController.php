<?php

namespace App\Http\Controllers;

use App\Mail\NewReviewNotification;
use App\Models\Review;
use App\Services\RecaptchaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status', 'all');

        $query = Review::query();

        if ($status === 'pending') {
            $query->where('is_public', false);
        } elseif ($status === 'approved') {
            $query->where('is_public', true);
        }

        $reviews = $query
            ->orderBy('is_public')
            ->orderByDesc('created_at')
            ->get();

        $stats = [
            'total' => Review::count(),
            'pending' => Review::where('is_public', false)->count(),
            'approved' => Review::where('is_public', true)->count(),
        ];

        return view('admin.reviews.index', compact('reviews', 'stats', 'status'));
    }

    public function update(Request $request, Review $review)
    {
        $review->is_public = !$review->is_public;
        $review->save();

        return back()->with('flash', [
            'type' => 'success',
            'message' => $review->is_public
                ? 'Reseña aprobada y publicada en la web.'
                : 'Reseña ocultada de la web.',
        ]);
    }

    public function destroy(Review $review)
    {
        if ($review->image && file_exists(public_path($review->image))) {
            unlink(public_path($review->image));
        }

        $review->delete();

        return back()->with('flash', [
            'type' => 'success',
            'message' => 'Reseña eliminada correctamente.',
        ]);
    }

    public function store(Request $request)
    {
        if (!RecaptchaService::verify($request->input('g-recaptcha-response'))) {
            return back()->withErrors(['captcha' => 'No pudimos verificar que eres humano. Intenta nuevamente.'])->withInput();
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'travel_date' => 'required|date',
            'travel_with' => 'required|string|max:255',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $reviewData = $request->except('image');
        $reviewData['is_public'] = false;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $path = public_path('img/reviews/');
            
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            $image->move($path, $imageName);
            $reviewData['image'] = 'img/reviews/' . $imageName;
        }

        $review = Review::create($reviewData);

        $notify = config('mail.review_notify_address');
        if (! empty($notify)) {
            try {
                Mail::to($notify, 'Pachatusan Admin')->send(new NewReviewNotification($review));
            } catch (\Throwable $e) {
                // No interrumpir el flujo si falla el SMTP
                Log::error('Error al enviar notificación de review: ' . $e->getMessage(), [
                    'exception' => $e,
                ]);
            }
        }


        return back()->with('flash', [
            'type' => 'success',
            'message' => '¡Gracias! Tu reseña fue enviada y será revisada por nuestro equipo antes de publicarse.',
        ]);
    }
}
