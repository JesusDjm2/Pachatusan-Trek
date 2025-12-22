@extends('layouts.app')
@section('titulo', 'Crear Subcategoría')
@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Crear nueva subcategoría en español</h3>
                <p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>¡Oops! Algo salió mal:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </p>
                <form action="{{ route('subcategorias.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.estours.categorias.subcategorias.form')
                </form>
            </div>
        </div>
    </section>
@endsection
