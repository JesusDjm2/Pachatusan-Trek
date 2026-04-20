<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        $paises = Pais::latest()->get();
        return view('admin.estours.pais.index', compact('paises'));
    }
    public function create()
    {
        return view('admin.estours.pais.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|unique:paises,nombre',
            'imagen' => 'nullable|image|max:2048',
            'slug' => 'required|unique:paises,slug',
        ]);

        if ($request->hasFile('imagen')) {
            $img = $request->file('imagen');
            $rutaImg = public_path('img/es/Thumbs');
            $imgName = $img->getClientOriginalName();

            $img->move($rutaImg, $imgName);

            $data['imagen'] = 'img/es/Thumbs/'.$imgName;
        }
        Pais::create($data);

        return redirect()->route('paises.index')->with('status', 'País creado correctamente');
    }

    public function show(Pais $pais)
    {
        return view('admin.estours.pais.show', compact('pais'));
    }

    public function edit(Pais $pai)
    {
        return view('admin.estours.pais.edit', compact('pai'));
    }

    public function update(Request $request, Pais $pai)
    {
        $data = $request->validate([
            'nombre' => 'required|unique:paises,nombre,'.$pai->id,
            'imagen' => 'nullable|image|max:2048',
            'slug' => 'required|unique:paises,slug,'.$pai->id,
        ]);

        if ($request->hasFile('imagen')) {

            // eliminar imagen anterior solo si existe
            if ($pai->imagen && file_exists(public_path($pai->imagen))) {
                unlink(public_path($pai->imagen));
            }

            $img = $request->file('imagen');
            $rutaImg = public_path('img/es/Thumbs');
            $imgName = $img->getClientOriginalName();

            $img->move($rutaImg, $imgName);

            $data['imagen'] = 'img/es/Thumbs/'.$imgName;
        }

        $pai->update($data);

        return redirect()
            ->route('paises.index')
            ->with('status', 'País actualizado correctamente');
    }

    public function destroy(Pais $pai)
    {
        if ($pai->imagen && file_exists(public_path($pai->imagen))) {
            unlink(public_path($pai->imagen));
        }

        $pai->delete();

        return redirect()
            ->route('paises.index')
            ->with('status', 'País eliminado correctamente');
    }
}
