<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estour;
use App\Models\Subcategory;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('admin.tours.index', compact('tours'));
    }
    public function create()
    {
        $categorias = TourCategory::pluck('nombre', 'id');
        /* $subcategorias = Subcategory::all(); */
        $subcategorias = Subcategory::with('category')->get()->groupBy('category_id');
        return view('admin.tours.create', compact('categorias', 'subcategorias'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'recorrido' => 'nullable',
            'dias' => 'required|integer',
            'imgThumb' => 'required|max:2048',
            'imgFull' => 'required|max:2048',
            'descripcionCorta' => 'required',
            'presentacion' => 'required',
            'itinerario' => 'required',
            'incluye' => 'required',
            'importante' => 'required',

            //Galeria
            'galeria' => 'nullable|array',
            'galeria.*' => 'image|mimes:jpeg,jpg,png,gif,bmp,svg,webp|max:2048',

            'slug' => 'required|unique:tours',
            'keywords' => 'required',
        ]);

        $tour = new Tour();
        $tour->nombre = $request->input('nombre');
        $tour->recorrido = $request->input('recorrido');
        $tour->dias = $request->input('dias');

        if ($request->hasFile('imgThumb')) {
            $img = $request->file('imgThumb');
            $rutaImg = public_path('img/Thumbs');
            $imgThumb = $img->getClientOriginalName();
            $img->move($rutaImg, $imgThumb);
            $tour->imgThumb = 'img/Thumbs/' . $imgThumb;
        }


        if ($request->hasFile('imgFull')) {
            $img = $request->file('imgFull');
            $rutaImg = public_path('img/Fondos');
            $imgFull = $img->getClientOriginalName();
            $img->move($rutaImg, $imgFull);
            $tour->imgFull = 'img/Fondos/' . $imgFull;
        }

        if ($request->has('galeria')) {
            $galeriaFiles = $request->file('galeria');
            $galeriaNames = [];
            $galeriaPath = 'img/galeriaTours/';

            if (!File::exists(public_path($galeriaPath))) {
                File::makeDirectory(public_path($galeriaPath), 0755, true);
            }

            foreach ($galeriaFiles as $galeriaFile) {
                if ($galeriaFile->isValid() && in_array($galeriaFile->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $galeriaName = time() . '_' . $galeriaFile->getClientOriginalName();
                    $galeriaFile->move(public_path($galeriaPath), $galeriaName);
                    $galeriaNames[] = asset($galeriaPath . $galeriaName);
                }
            }
            $tour->galeria = implode(',', $galeriaNames);
        }

        $tour->descripcionCorta = $request->input('descripcionCorta');
        $tour->presentacion = $request->input('presentacion');
        $tour->itinerario = $request->input('itinerario');
        $tour->incluye = $request->input('incluye');
        $tour->importante = $request->input('importante');
        $tour->keywords = $request->input('keywords');
        $tour->slug = $request->input('slug');

        $tour->save();

        $categorias = $request->input('categorias');
        $tour->categorias()->attach($categorias);
        $tour->subcategorias()->sync($request->input('subcategorias', []));

        return redirect()->route('tours.index')->with('success', 'Tour creado exitosamente!');
    }
    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        $categorias = TourCategory::pluck('nombre', 'id');
        $subcategorias = Subcategory::with('category')->get()->groupBy('category_id');
        return view('admin.tours.edit', compact('tour', 'categorias', 'subcategorias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'recorrido' => 'required',
            'dias' => 'required|integer',
            'imgThumb' => 'nullable|max:2048',
            'imgFull' => 'nullable|max:2048',
            'descripcionCorta' => 'required',
            'presentacion' => 'required',
            'itinerario' => 'required',
            'incluye' => 'required',
            'importante' => 'required',
            'galeria' => 'nullable|array',
            'galeria.*' => 'image|mimes:jpeg,jpg,png,gif,bmp,svg,webp|max:2048',
            'slug' => 'required|unique:tours,slug,' . $id,
            'keywords' => 'required',
        ]);

        $tour = Tour::findOrFail($id);
        $tour->nombre = $request->input('nombre');
        $tour->recorrido = $request->input('recorrido');
        $tour->dias = $request->input('dias');

        if ($request->hasFile('imgThumb')) {
            $img = $request->file('imgThumb');
            $rutaImg = public_path('img/Thumbs');
            $imgThumb = $img->getClientOriginalName();
            $img->move($rutaImg, $imgThumb);
            $tour->imgThumb = 'img/Thumbs/' . $imgThumb;
        }

        if ($request->has('galeria')) {
            // Elimina las imágenes existentes si las hay
            if ($tour->galeria) {
                $existingImages = explode(',', $tour->galeria);
                foreach ($existingImages as $image) {
                    $imagePath = public_path(str_replace(url('/'), '', $image));
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }
        
            $galeriaFiles = $request->file('galeria');
            $galeriaNames = [];
            $galeriaPath = 'img/galeriaTours/';
        
            if (!File::exists(public_path($galeriaPath))) {
                File::makeDirectory(public_path($galeriaPath), 0755, true);
            }
        
            foreach ($galeriaFiles as $galeriaFile) {
                if ($galeriaFile->isValid() && in_array($galeriaFile->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $galeriaName = time() . '_' . $galeriaFile->getClientOriginalName();
                    $galeriaFile->move(public_path($galeriaPath), $galeriaName);
                    $galeriaNames[] = asset($galeriaPath . $galeriaName);
                }
            }
        
            $tour->galeria = implode(',', $galeriaNames);
        }

        $tour->descripcionCorta = $request->input('descripcionCorta');
        $tour->presentacion = $request->input('presentacion');
        $tour->itinerario = $request->input('itinerario');
        $tour->incluye = $request->input('incluye');
        $tour->importante = $request->input('importante');
        $tour->keywords = $request->input('keywords');
        $tour->slug = $request->input('slug');

        $tour->save();

        $tour->categorias()->sync($request->input('categorias'));
        $tour->subcategorias()->sync($request->input('subcategorias', []));

        return redirect()->route('tours.index')->with('success', 'Tour actualizado exitosamente!');
    }
    public function show($slug)
    {
        $tour = Tour::where('slug', $slug)->firstOrFail();
        $tours = Tour::where('id', '!=', $tour->id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        $estour = $tour->estour;
        $categorias = TourCategory::all();

        return view('admin.tours.show', compact('tour', 'tours', 'estour', 'categorias'));
    }
    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        if (Storage::exists($tour->imgThumb)) {
            Storage::delete($tour->imgThumb);
        }
        if (Storage::exists($tour->imgFull)) {
            Storage::delete($tour->imgFull);
        }
        if (Storage::exists($tour->mapa)) {
            Storage::delete($tour->mapa);
        }

        $tour->categorias()->detach();
        $tour->delete();

        return redirect()->route('tours.index')->with('success', 'Tour eliminado exitosamente!');
    }
}
