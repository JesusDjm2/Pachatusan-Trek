@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="card">
            <div class="card-header font-weight-bold">Editar País</div>
            <div class="card-body">
                <form method="POST" action="{{ route('paises.update', $pai) }}" enctype="multipart/form-data">
                    @csrf @method('PUT')

                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" value="{{ $pai->nombre }}" class="form-control" required>
                    </div>

                    @if ($pai->imagen)
                        <div class="form-group">
                            <label>Imagen actual</label><br>
                            <img src="{{ asset($pai->imagen) }}" width="120">
                        </div>
                    @endif

                    <div class="form-group">
                        <label>Nueva imagen (opcional)</label>
                        <input type="file" name="imagen" class="form-control">
                    </div>

                    <button class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
