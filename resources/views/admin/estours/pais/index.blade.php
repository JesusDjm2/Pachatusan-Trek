@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 float-left mb-4">
                <h2 class="text-primary">Lista países en español: </h2>
            </div>

            <div class="col-6">
                <a href="{{ route('paises.create') }}" class="btn btn-primary btn-sm float-right mr-2">Nuevo País</a>
            </div>
            <div class="col-lg-12">
                @if (session('status'))
                    <div class="text-success">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paises as $pais)
                            <tr>
                                <td>{{ $pais->nombre }}</td>
                                <td>
                                    @if ($pais->imagen)
                                        <img src="{{ asset($pais->imagen) }}" width="80">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('paises.edit', $pais) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ route('paises.destroy', $pais) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
