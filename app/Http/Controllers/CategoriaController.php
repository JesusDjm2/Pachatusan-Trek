<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoriaController
 * @package App\Http\Controllers
 */
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate();
        $proveedor = Proveedor::all();
        return view('categoria.index', compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * $categorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new Categoria();
        return view('categoria.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Categoria::$rules);

        $categoria = Categoria::create($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar()
    {
        return 'Hola mundo';
    }
    public function show($id)
    {
        $categorias = Categoria::find($id)->proveedors;
        return view('categoria.show', compact('categorias'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        request()->validate(Categoria::$rules);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria actualizada exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id)->delete();

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria borrada exitosamente!');
    }
}
