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
                <form method="POST" action="{{ route('paises.update', $pai) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="nombre">Nombre <span class="text-danger">*</span></label>
                        <input id="nombre" name="nombre" value="{{ old('nombre', $pai->nombre) }}"
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
                            value="{{ $pai->slug ?? Str::slug($pai->nombre) }}" class="form-control bg-light" readonly>
                        <small class="text-muted">
                            <i class="fa fa-info-circle"></i>
                            Se genera automáticamente desde el nombre
                        </small>
                        @if ($pai->slug)
                            <small class="text-muted d-block mt-1">
                                URL pública: <a href="{{ route('pais.show', $pai->slug) }}" target="_blank">
                                    {{ route('pais.show', $pai->slug) }}
                                </a>
                            </small>
                        @endif
                    </div>

                    @if ($pai->imagen)
                        <div class="form-group mb-3">
                            <label>Imagen actual</label>
                            <div>
                                <img src="{{ asset($pai->imagen) }}" width="120" height="90"
                                    style="object-fit: cover; border-radius: 4px;" class="img-thumbnail"
                                    alt="{{ $pai->nombre }}">
                                <br>
                                <small class="text-muted">{{ $pai->imagen }}</small>
                            </div>
                        </div>
                    @endif

                    <div class="form-group mb-3">
                        <label for="imagen">Nueva imagen (opcional)</label>
                        <input id="imagen" type="file" name="imagen"
                            class="form-control @error('imagen') is-invalid @enderror"
                            accept="image/jpeg,image/jpg,image/png,image/webp">
                        <small class="text-muted">Formatos permitidos: jpg, jpeg, png, webp. Máx 2MB</small>

                        @error('imagen')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Actualizar País
                        </button>
                        <a href="{{ route('paises.index') }}" class="btn btn-secondary">
                            <i class="fa fa-arrow-left"></i> Cancelar
                        </a>
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

            // Vista previa de la imagen
            const imagenInput = document.getElementById("imagen");
            if (imagenInput) {
                imagenInput.addEventListener("change", function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            // Buscar o crear elemento de vista previa
                            let preview = document.getElementById("imagePreview");
                            if (!preview) {
                                const previewContainer = document.createElement("div");
                                previewContainer.className = "form-group mb-3";
                                previewContainer.innerHTML = `
                                    <label>Vista previa</label>
                                    <div>
                                        <img id="imagePreview" width="120" height="90" 
                                             style="object-fit: cover; border-radius: 4px;" 
                                             class="img-thumbnail">
                                    </div>
                                `;
                                imagenInput.closest('.form-group').after(previewContainer);
                                preview = document.getElementById("imagePreview");
                            }
                            preview.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>
@endsection
