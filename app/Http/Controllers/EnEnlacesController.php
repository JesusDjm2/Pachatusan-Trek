<?php

namespace App\Http\Controllers;

use App\Models\Enblog;
use App\Models\Esblog;
use App\Models\Estour;
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

        return view('index', compact('firstTours', 'nextTours'));
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

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
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



    /*  public function testimonials()
     {
         return view('testimonials');
     }
     public function terms()
     {
         return view('terms-conditions-aet');
     }
     public function faqs()
     {
         return view('faqs');
     } */


    //Tours en español
    public function inicio()
    {
        $tours = Estour::latest()->take(4)->get();
        $tours2 = Estour::whereNotIn('id', $tours->pluck('id'))->latest()->get();
        /* $blogs = Esblog::latest()->take(4)->get(); */
        return view('inicio', compact('tours', 'tours2'));
    }
    public function expediciones()
    {
        $tours = Estour::all();
        return view('admin.estours.expediciones', compact('tours'));
    }
    public function trekses()
    {
        $tours = Estour::all();
        return view('admin.estours.treks', compact('tours'));
    }
    public function tourses()
    {
        $tours = Estour::all();
        return view('admin.estours.tours', compact('tours'));
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
        return view('contacto');
    }

    public function searches(Request $request)
    {
        $query = $request->input('query');

        $tours = Estour::where('nombre', 'LIKE', "%{$query}%")
            ->get();
        return view('admin.estours.buscador', compact('tours', 'query'));
    }
}
