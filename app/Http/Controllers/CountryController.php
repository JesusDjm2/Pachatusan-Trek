<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    public function index()
    {
        $paises = Country::latest()->get();

        return view('admin.tours.country.index', compact('paises'));
    }

    public function create()
    {
        return view('admin.tours.country.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|unique:countries,nombre',
            'imagen' => 'nullable|image|max:2048',
            'slug' => 'required|unique:countries,slug',
        ]);
        if ($request->hasFile('imagen')) {
            $img = $request->file('imagen');
            $rutaImg = public_path('img/es/Thumbs');
            $imgName = $img->getClientOriginalName();

            $img->move($rutaImg, $imgName);

            $data['imagen'] = 'img/es/Thumbs/'.$imgName;
        }
        Country::create($data);

        return redirect()->route('countries.index')->with('status', 'País en inglés creado correctamente.');
    }

    public function show($country)
    {
        $country = is_numeric($country)
            ? Country::with('tours')->findOrFail($country)
            : Country::with('tours')->where('slug', $country)->firstOrFail();

        return view('admin.tours.country.show', compact('country'));
    }

    public function edit(Country $country)
    {
        return view('admin.tours.country.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $data = $request->validate([
            'nombre' => 'required|unique:countries,nombre,'.$country->id,
            'imagen' => 'nullable|image|max:2048',
        ]);

        $data['slug'] = Str::slug($request->nombre);

        if ($request->hasFile('imagen')) {

            if ($country->imagen && file_exists(public_path($country->imagen))) {
                unlink(public_path($country->imagen));
            }

            $img = $request->file('imagen');
            $rutaImg = public_path('img/es/Thumbs');
            $imgName = $img->getClientOriginalName();

            $img->move($rutaImg, $imgName);

            $data['imagen'] = 'img/es/Thumbs/'.$imgName;
        }

        $country->update($data);

        return redirect()
            ->route('countries.index')
            ->with('status', 'País en inglés actualizado correctamente');
    }

    public function destroy(Country $country)
    {
        if ($country->imagen && file_exists(public_path($country->imagen))) {
            unlink(public_path($country->imagen));
        }

        $country->delete();

        return redirect()
            ->route('countries.index')
            ->with('status', 'País eliminado correctamente');
    }
}
