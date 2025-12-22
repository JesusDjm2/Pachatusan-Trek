<?php

namespace App\Http\Controllers;

use App\Models\EsCategoria;
use App\Models\Estour;
use App\Models\Pais;
use App\Models\Subcategoria;
use App\Models\Tour;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class EsTourController extends Controller
{
    public function index()
    {
        $tours = Estour::all();
        return view('admin.estours.index', compact('tours'));
    }
    public function create()
    {
        $categorias = EsCategoria::pluck('nombre', 'id');
        $entours = Tour::all();
        $paises = Pais::orderBy('nombre')->get();
        return view('admin.estours.create', compact('categorias', 'entours', 'paises'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:estours',
            'recorrido' => 'required',
            'dias' => 'required|integer',
            'pais_id' => 'required|exists:paises,id', 
            'imgThumb' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'imgFull' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'descripcionCorta' => 'required',
            'presentacion' => 'required',
            'itinerario' => 'required',
            'incluye' => 'required',
            'importante' => 'required',
            'galeria' => 'nullable',
            'slug' => 'required|unique:estours',
            'keywords' => 'required',
            'relacionado_id' => 'required|exists:tours,id',
        ]);

        $tour = new Estour();
        $tour->nombre = $request->input('nombre');
        $tour->recorrido = $request->input('recorrido');
        $tour->dias = $request->input('dias');

        if ($request->hasFile('imgThumb')) {
            $img = $request->file('imgThumb');
            $rutaImg = "img/es/Thumbs/";
            $imgThumb = $rutaImg . $img->getClientOriginalName();
            $img->move($rutaImg, $imgThumb);
            $tour->imgThumb = $imgThumb;
        }

        if ($request->hasFile('imgFull')) {
            $img = $request->file('imgFull');
            $rutaImg = "img/es/Fondos/";
            $imgFull = $rutaImg . $img->getClientOriginalName();
            $img->move($rutaImg, $imgFull);
            $tour->imgFull = $imgFull;
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
        $tour->relacionado_id = $request->input('relacionado_id');
        $tour->pais_id = $request->input('pais_id');
        $tour->save();

        $categorias = $request->input('categorias');
        $tour->categorias()->attach($categorias);

        return redirect()->route('estours.index')->with('success', 'Tour creado exitosamente!');
    }
    public function edit($id)
    {
        $entours = Tour::all();
        $tour = Estour::findOrFail($id);
        $categorias = EsCategoria::pluck('nombre', 'id');
        $subcategorias = Subcategoria::with('categoria')->get()->groupBy('categoria_id');
        $paises = Pais::orderBy('nombre')->get();
        return view('admin.estours.edit', compact('tour', 'categorias', 'subcategorias', 'entours', 'paises'));
    }

    public function update(Request $request, $id)
    {
        // Validación
        $request->validate([
            'nombre' => 'required',
            'recorrido' => 'required',
            'pais_id' => 'required|exists:paises,id',
            'ciudad' => 'nullable',
            'dias' => 'required|integer',
            'imgThumb' => 'sometimes|image|mimes:jpg,jpeg,png,webp|max:2048',
            'imgFull' => 'sometimes|image|mimes:jpg,jpeg,png,webp|max:2048',
            'descripcionCorta' => 'required',
            'presentacion' => 'required',
            'itinerario' => 'required',
            'incluye' => 'required',
            'importante' => 'required',
            'slug' => [
                'required',
                Rule::unique('tours')->ignore($id),
            ],
            'keywords' => 'required',
            'relacionado_id' => 'required|exists:tours,id',
        ]);

        // Encontrar el tour
        $tour = Estour::findOrFail($id);
        $tour->nombre = $request->input('nombre');
        $tour->recorrido = $request->input('recorrido');
        $tour->ciudad = $request->input('ciudad');
        $tour->dias = $request->input('dias');
        $tour->pais_id = $request->input('pais_id');

        if ($request->hasFile('imgThumb')) {
            $img = $request->file('imgThumb');
            $rutaImg = public_path('img/es/Thumbs');
            $imgThumb = $img->getClientOriginalName();
            $img->move($rutaImg, $imgThumb);
            $tour->imgThumb = 'img/es/Thumbs/' . $imgThumb;
        }

        if ($request->hasFile('imgFull')) {
            $img = $request->file('imgFull');
            $rutaImg = public_path('img/es/Fondos');
            $imgFull = $img->getClientOriginalName();
            $img->move($rutaImg, $imgFull);
            $tour->imgFull = 'img/es/Fondos/' . $imgFull;
        }

        if ($request->has('galeria')) {
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

            // Verifica si la carpeta existe, si no, la crea
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
        // Actualizar campos
        $tour->descripcionCorta = $request->input('descripcionCorta');
        $tour->presentacion = $request->input('presentacion');
        $tour->itinerario = $request->input('itinerario');
        $tour->incluye = $request->input('incluye');
        $tour->importante = $request->input('importante');
        $tour->keywords = $request->input('keywords');
        $tour->slug = $request->input('slug');
        $tour->relacionado_id = $request->input('relacionado_id');

        $tour->save();
        
        $categorias = $request->input('categorias');
        $tour->categorias()->sync($categorias);
        $tour->subcategorias()->sync($request->input('subcategorias', []));
        
        return redirect()->route('estours.index')->with('success', 'Tour actualizado exitosamente!');
    }
    public function show($slug)
    {
        $tour = Estour::where('slug', $slug)->firstOrFail();
        /* $tours = Estour::where('id', '!=', $tour->id)->orderByDesc('updated_at')->get(); */
        $tours = Estour::where('id', '!=', $tour->id)
            ->orderBy('dias', 'asc')   
            ->get();
        $entour = Tour::findOrFail($tour->relacionado_id);
        $categorias = EsCategoria::all();
        return view('admin.estours.show', compact('tour', 'tours', 'entour', 'categorias'));
    }
    public function destroy($id)
    {
        $tour = Estour::findOrFail($id);
        if (Storage::exists($tour->imgThumb)) {
            Storage::delete($tour->imgThumb);
        }
        if (Storage::exists($tour->imgFull)) {
            Storage::delete($tour->imgFull);
        }

        $tour->categorias()->detach();
        $tour->delete();

        return redirect()->route('estours.index')->with('success', 'Tour eliminado exitosamente!');
    }
}
