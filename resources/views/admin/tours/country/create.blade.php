@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center font-weight-bold">
                <span class="text-primary">Nuevo País en inglés</span>
                <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm">
                    ← Volver
                </a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('countries.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
                            value="{{ old('nombre') }}" required>

                        @error('nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="slug">Slug</label>
                        <input id="slug" name="slug" class="form-control" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label for="imagen">Imagen</label>
                        <input id="imagen" type="file" name="imagen"
                            class="form-control @error('imagen') is-invalid @enderror">

                        @error('imagen')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const nombre = document.getElementById("nombre");
            const slug = document.getElementById("slug");

            function generarSlug(texto) {
                return texto
                    .toLowerCase()
                    .normalize("NFD") // quita tildes
                    .replace(/[\u0300-\u036f]/g, "")
                    .replace(/[^a-z0-9\s-]/g, "") // elimina símbolos
                    .trim()
                    .replace(/\s+/g, "-") // espacios → guiones
                    .replace(/-+/g, "-"); // evita guiones dobles
            }

            nombre.addEventListener("input", function() {
                slug.value = generarSlug(this.value);
            });

        });
    </script>
@endsection
