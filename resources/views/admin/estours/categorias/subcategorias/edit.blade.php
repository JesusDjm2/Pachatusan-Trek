@extends('layouts.app')
@section('titulo', 'Editar Subcategoría')
@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Editar subcategoría español</h3>
                <form action="{{ route('subcategorias.update', $subcategoria) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('admin.estours.categorias.subcategorias.form')
                </form>
            </div>
        </div>
    </section>
@endsection