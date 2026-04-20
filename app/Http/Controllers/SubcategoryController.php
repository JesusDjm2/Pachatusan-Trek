<?php

namespace App\Http\Controllers;

use App\Models\EsCategoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategorias = Subcategoria::with('categoria')->latest()->get();
        return view('admin.estours.categorias.subcategorias.index', compact('subcategorias'));
    }

    public function create()
    {
        $categorias = EsCategoria::all();

        return view('admin.estours.categorias.subcategorias.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:escategorias,id',
            'imgThumb' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $galeriaPath = 'img/galeriaTours/subs/';

        if (! File::exists(public_path($galeriaPath))) {
            File::makeDirectory(public_path($galeriaPath), 0755, true);
        }

        $img = $request->file('imgThumb');
        $galeriaName = $img->getClientOriginalName();
        $img->move(public_path($galeriaPath), $galeriaName);

        Subcategoria::create([
            'nombre' => $request->nombre,
            'slug' => Str::slug($request->nombre),
            'categoria_id' => $request->categoria_id,
            'imgThumb' => $galeriaPath.$galeriaName,
        ]);

        return redirect()->route('subcategorias.index')->with('success', 'Subcategoría creada correctamente.');
    }

    public function show($slug)
    {
        $subcategoria = Subcategoria::where('slug', $slug)->firstOrFail();
        /* $tours = $subcategoria->tours()->with('categorias')->get(); */
        $tours = $subcategoria->tours()->with('categorias')->orderBy('dias', 'asc')->get();

        return view('admin.estours.categorias.subcategorias.show', compact('subcategoria', 'tours'));
    }

    /* public function edit(Subcategoria $subcategoria)
    {
        $categorias = EsCategoria::all();
        return view('admin.estours.categorias.subcategorias.edit', compact('subcategoria', 'categorias'));
    } */

    public function edit($id)
    {
        $subcategoria = Subcategoria::findOrFail($id);
        $categorias = EsCategoria::all();

        return view('admin.estours.categorias.subcategorias.edit', compact('subcategoria', 'categorias'));
    }

    public function update(Request $request, Subcategoria $subcategoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categories,id',
            'imgThumb' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048', // nullable porque es opcional
        ]);

        $data = [
            'nombre' => $request->nombre,
            'slug' => Str::slug($request->nombre),
            'categoria_id' => $request->categoria_id,
        ];

        // SOLO si viene una nueva imagen
        if ($request->hasFile('imgThumb')) {
            $galeriaPath = 'img/galeriaTours/subs/';

            // Crear directorio si no existe (igual que en store)
            if (! File::exists(public_path($galeriaPath))) {
                File::makeDirectory(public_path($galeriaPath), 0755, true);
            }

            // Eliminar imagen anterior (para no acumular archivos)
            if ($subcategoria->imgThumb && File::exists(public_path($subcategoria->imgThumb))) {
                File::delete(public_path($subcategoria->imgThumb));
            }

            // Subir nueva imagen (EXACTAMENTE IGUAL que en store)
            $img = $request->file('imgThumb');
            $galeriaName = $img->getClientOriginalName(); // Mismo nombre original
            $img->move(public_path($galeriaPath), $galeriaName);

            // Guardar la ruta (EXACTAMENTE IGUAL que en store)
            $data['imgThumb'] = $galeriaPath.$galeriaName;
        }

        // Actualizar con los datos
        $subcategoria->update($data);

        return redirect()->route('subcategorias.index')->with('success', 'Subcategoría actualizada correctamente.');
    }

    public function destroy($id)
    {
        $subcategoria = Subcategoria::find($id);
        $subcategoria->delete();

        return redirect()->route('subcategorias.index')
            ->with('success', 'SubCategoria borrada exitosamente!');
    }
}
