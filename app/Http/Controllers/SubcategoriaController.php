<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategory;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SubcategoriaController extends Controller
{
    public function index()
    {
        $subcategorias = Subcategory::with('category')->latest()->get();
        return view('admin.tours.categorias.subcategorias.index', compact('subcategorias'));
    }

    public function create()
    {
        $categories = Categoria::all();
        return view('admin.tours.categorias.subcategorias.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'imgThumb' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $galeriaPath = 'img/galeriaTours/subs/';

        if (!File::exists(public_path($galeriaPath))) {
            File::makeDirectory(public_path($galeriaPath), 0755, true);
        }

        $img = $request->file('imgThumb');
        $galeriaName = $img->getClientOriginalName();
        $img->move(public_path($galeriaPath), $galeriaName);

        Subcategory::create([
            'nombre' => $request->nombre,
            'slug' => Str::slug($request->nombre),
            'category_id' => $request->category_id,
            'imgThumb' => $galeriaPath . $galeriaName,
        ]);
        return redirect()->route('subcategories.index')->with('success', 'Subcategoría creada correctamente.');
    }    
    public function show($slug)
    {
        $subcategoria = Subcategory::where('slug', $slug)->firstOrFail();
        /* $tours = $subcategoria->tours()->with('categorias')->get(); */
        $tours = $subcategoria->tours()->with('categorias')->orderBy('dias', 'asc')->get();
        return view('admin.tours.categorias.subcategorias.show', compact('subcategoria', 'tours'));
    }

    public function edit(Subcategory $subcategoria)
    {
        $categories = Categoria::all();
        return view('admin.tours.categorias.subcategorias.edit', compact('subcategoria', 'categories'));
    }

    public function update(Request $request, Subcategory $subcategoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $subcategoria->update([
            'nombre' => $request->nombre,
            'slug' => Str::slug($request->nombre),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('subcategories.index')->with('success', 'Subcategoría actualizada.');
    }

    public function destroy($id)
    {
        $subcategoria = Subcategory::find($id);
        $subcategoria->delete();
        return redirect()->route('subcategories.index')
            ->with('success', 'SubCategoria borrada exitosamente!');
    }
}
