@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center font-weight-bold">
                <span>Nuevo País</span>
                <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm">
                    ← Volver
                </a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('paises.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Imagen</label>
                        <input type="file" name="imagen" class="form-control">
                    </div>
                    <button class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
