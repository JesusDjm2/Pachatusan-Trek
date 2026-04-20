<?php

namespace App\Http\Controllers;

use App\Mail\NewReviewNotification;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function update(Request $request, Review $review)
    {
        $review->is_public = !$review->is_public;
        $review->save();

        return back()->with('flash', [
            'type' => 'success',
            'message' => 'Review status updated successfully!',
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
            'message' => 'Review deleted successfully!',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'travel_date' => 'required|date',
            'travel_with' => 'required|string|max:255',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $reviewData = $request->except('image');

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
            'message' => 'Review submitted successfully! It will be reviewed by our team.',
        ]);
    }
}
