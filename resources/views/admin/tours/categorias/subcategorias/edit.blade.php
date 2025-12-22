@extends('layouts.app')
@section('titulo', 'Editar Subcategoría')
@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Editar subcategoría: {{ $subcategoria->nombre }}</h4>
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-danger">
                        Volver
                    </a>
                </div>
                <form action="{{ route('subcategories.update', $subcategoria) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('admin.tours.categorias.subcategorias.form')
                </form>
            </div>
        </div>
    </section>
@endsection
