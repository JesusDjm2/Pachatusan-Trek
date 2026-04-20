@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="card">
            <div class="card-header font-weight-bold">Editar País</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ups! Hay algunos problemas:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div> 
            @endif
            <div class="card-body">
                <form method="POST" action="{{ route('countries.update', $country) }}" enctype="multipart/form-data">
                    @csrf @method('PUT')

                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" name="nombre" value="{{ old('nombre', $country->nombre) }}"
                            class="form-control @error('nombre') is-invalid @enderror" required>

                        @error('nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Slug generado automáticamente (solo lectura) -->
                    <div class="form-group mb-3">
                        <label for="slug">Slug (URL amigable)</label>
                        <input id="slug" name="slug" type="text"
                            value="{{ $country->slug ?? Str::slug($country->nombre) }}" class="form-control" readonly>
                        <small class="text-muted">Se genera automáticamente desde el nombre</small>
                    </div>

                    @if ($country->imagen)
                        <div class="form-group mb-3">
                            <label>Imagen actual</label>
                            <div>
                                <img src="{{ asset($country->imagen) }}" width="120" class="img-thumbnail">
                            </div>
                        </div>
                    @endif

                    <div class="form-group mb-3">
                        <label for="imagen">Nueva imagen (opcional)</label>
                        <input id="imagen" type="file" name="imagen"
                            class="form-control @error('imagen') is-invalid @enderror">
                        <small class="text-muted">Formatos permitidos: jpg, jpeg, png, gif. Máx 2MB</small>

                        @error('imagen')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Actualizar País</button>
                        <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
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
    </script>s
@endsection
