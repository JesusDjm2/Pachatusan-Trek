@extends('layouts.app')
@section('titulo', 'Crear Subcategoría')
@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Crear nueva subcategoría</h3>
                <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.tours.categorias.subcategorias.form')
                </form>
            </div>
        </div>
    </section>
@endsection