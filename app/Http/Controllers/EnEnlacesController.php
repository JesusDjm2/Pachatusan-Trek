<?php

namespace App\Http\Controllers;

use App\Models\Enblog;
use App\Models\Esblog;
use App\Models\Estour;
use App\Models\Review;
use App\Models\Subcategory;
use App\Models\Tour;
use Illuminate\Http\Request;

class EnEnlacesController extends Controller
{
    public function index()
    {
        $tours = Tour::orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(11)
            ->get();

        $firstTours = $tours->take(3);
        $nextTours = $tours->slice(3, 8);
        $subcategoriasMenu = Subcategory::whereHas('tours')
            ->select('id', 'nombre', 'slug', 'imgThumb')
            ->get();

        $reviews = Review::where('is_public', true)->get();

        return view('index', compact('firstTours', 'nextTours', 'subcategoriasMenu', 'reviews'));
    }
    public function treks()
    {
        $tours = Tour::whereHas('categorias', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['treks']);
        })->get();

        return view('admin.tours.treks', compact('tours'));
    }
    public function expeditions()
    {
        $tours = Tour::whereHas('categorias', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['expeditions']);
        })->get();

        return view('admin.tours.expeditions', compact('tours'));
    }
    public function entours()
    {
        $tours = Tour::whereHas('categorias', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['tours']);
        })->get();

        return view('admin.tours.tours', compact('tours'));
    }
    public function cusco()
    {
        $tours = Tour::find([8, 9, 10]);
        return view('admin.tours.sacred-valley', compact('tours'));
    }
    public function inca()
    {
        $tours = Tour::find([6, 11]);
        return view('admin.tours.inca-trail', compact('tours'));
    }
    public function south()
    {
        $tours = Tour::find([4, 7, 13]);
        return view('admin.tours.south', compact('tours'));
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        $num1 = rand(3, 14);
        $num2 = rand(3, 14);
        $captchaSum = $num1 + $num2;

        session(['captcha_sum' => $captchaSum]);
        /* return view('contact'); */
        return view('contact', ['num1' => $num1, 'num2' => $num2]);
    }
    public function certificates()
    {
        return view('certificates');
    }
    public function social()
    {
        return view('social-projects');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $tours = Tour::where('nombre', 'LIKE', "%{$query}%")
            ->get();
        return view('admin.tours.buscador', compact('tours', 'query'));
    }

    public function inicio()
    {
        $tours = Estour::orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(11)
            ->get();
        $firstTours = $tours->take(3);
        $nextTours = $tours->slice(3, 8);
        $reviews = Review::where('is_public', true)->get();
        return view('inicio', compact('firstTours', 'nextTours', 'reviews'));
    }
    public function expediciones()
    {
        $tours = Estour::whereHas('categorias', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['expediciones']);
        })->get();
        return view('admin.estours.expediciones', compact('tours'));
    }
    public function trekses()
    {
        $tours = Estour::whereHas('categorias', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['caminatas']);
        })->get();
        return view('admin.estours.treks', compact('tours'));
    }
    public function tourses()
    {
        $tours = Estour::whereHas('categorias', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['tours']);
        })->get();
        return view('admin.estours.tours', compact('tours'));
    }

    public function valle()
    {
        $tours = Estour::find([8, 9, 10]);
        return view('admin.estours.valle', compact('tours'));
    }
    public function incaes()
    {
        $tours = Estour::find([6, 11]);
        return view('admin.estours.inca', compact('tours'));
    }
    public function sur()
    {
        $tours = Estour::find([4, 7, 13]);
        return view('admin.estours.norte', compact('tours'));
    }


    public function bloges()
    {
        $lastBlog = Esblog::latest('updated_at')->first();
        $blogs = Esblog::where('updated_at', '<', $lastBlog->updated_at)
            ->latest('updated_at')
            ->get();
        return view('blog-castellano', compact('lastBlog', 'blogs'));
    }
    public function certificados()
    {
        return view('certificados');
    }
    public function nosotros()
    {
        return view('nosotros');
    }
    public function proyectos()
    {
        return view('proyectos-sociales');
    }
    public function contacto()
    {
        $num1 = rand(3, 14); // Número aleatorio para el CAPTCHA
        $num2 = rand(3, 14); // Segundo número
        $captchaSum = $num1 + $num2; // Resultado correcto

        // Guardar la suma correcta en la sesión
        session(['captcha_sum' => $captchaSum]);
        return view('contacto', ['num1' => $num1, 'num2' => $num2]);
        /* return view('contacto'); */
    }

    public function searches(Request $request)
    {
        $query = $request->input('query');

        $tours = Estour::where('nombre', 'LIKE', "%{$query}%")
            ->get();
        return view('admin.estours.buscador', compact('tours', 'query'));
    }
    
    public function glamping()
    {
        return view('glamping-es', [
            'meta_title' => 'Equipo de Campamento Premium - Glamping en los Andes | Pachatusantrek',
            'meta_description' => 'Descubre nuestro equipo de campamento premium para glamping en los Andes. Carpas REI, camas comfortables, baños ecológicos y todos los servicios de lujo en montaña.',
            'meta_keywords' => 'glamping, equipo campamento, carpas, Andes, trekking, lujo, comodidad'
        ]);
    }
    public function glampingen()
    {
        return view('glamping', [
            'meta_title' => 'Premium Camping Equipment – Glamping in the Andes | Pachatusantrek',
            'meta_description' => 'Discover our premium camping equipment for glamping in the Andes. REI tents, comfortable beds, eco-friendly bathrooms, and all the luxury mountain services.',
            'meta_keywords' => 'glamping, camping equipment, tents, Andes, trekking, luxury, comfort',

        ]);
    }
    public function terms(){
        return view('terms');
    }
    public function terminos(){
        return view('terminos');
    }

    public function glampingReviews()
    {
        $reviews = Review::where('is_public', true)->latest()->get();
        return view('glamping-reviews', compact('reviews'));
    }

    public function glampingReviewsEs()
    {
        $reviews = Review::where('is_public', true)->latest()->get();
        return view('glamping-reviews-es', compact('reviews'));
    }

}
