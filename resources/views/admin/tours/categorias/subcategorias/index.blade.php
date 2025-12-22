@extends('layouts.app')
@section('titulo', 'Lista de Subcategorías')
@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="row mb-2">
                    <div class="col-lg-6">
                        <h3 class="text-primary">Lista de Sub-Categorías</h3>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('subcategories.create') }}" class="btn btn-primary btn-sm float-right">
                            Crear nueva subcategoría
                        </a>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Categoría</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subcategorias as $subcategoria)
                                    <tr>
                                        <td>{{ $subcategoria->id }}</td>
                                        <td>{{ $subcategoria->nombre }}</td>
                                        <td>{{ $subcategoria->slug }}</td>
                                        <td>{{ $subcategoria->category->nombre ?? 'Sin categoría' }}</td>
                                        <td>
                                            <a href="{{ route('subcategories.edit', $subcategoria->id) }}"
                                                class="btn btn-warning btn-sm">Editar</a>
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('subcategories.show', $subcategoria->slug) }}" target="_blank"><i
                                                    class="fa fa-fw fa-eye"></i> Show</a>
                                            <form action="{{ route('subcategories.destroy', $subcategoria) }}"
                                                method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('¿Eliminar esta subcategoría?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
