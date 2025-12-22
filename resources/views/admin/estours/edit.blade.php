@extends('layouts.app')
@section('titulo', 'Editar Tour en español')
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Mostrar errores de validación -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-12 mt-2">
            <div class="row" style="padding: 1em; border-radius: 10px;">
                <div class="col-lg-6 float-left">
                    <h3>Editar Tour en español</h3>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('estours.index') }}" class="btn btn-primary float-right">Volver</a>
                </div>
            </div>
            <form action="{{ route('estours.update', $tour->id) }}" method="post" enctype="multipart/form-data"
                class="bg-light">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6 mt-3">
                        <label for="nombre" class="form-label">Nombre del Tour:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required
                            value="{{ old('nombre', $tour->nombre) }}">
                        @error('nombre')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6 mt-3">
                        <label for="recorrido" class="form-label">Recorrido:</label>
                        <input type="text" id="recorrido" name="recorrido" class="form-control form-control-sm" required
                            value="{{ old('recorrido', $tour->recorrido) }}">
                        @error('recorrido')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-3 mt-3">
                        <label for="pais_id" class="form-label">País:</label>
                        <select name="pais_id" id="pais_id" class="form-control form-control-sm" required>
                            <option value="">Seleccione un país</option>

                            @foreach ($paises as $pais)
                                <option value="{{ $pais->id }}"
                                    {{ old('pais_id', $tour->pais_id) == $pais->id ? 'selected' : '' }}>
                                    {{ $pais->nombre }}
                                </option>
                            @endforeach
                        </select>

                        @error('pais_id')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-lg-4 mt-3">
                        <label for="ciudad" class="form-label">Ciudad:</label>
                        <input type="text" id="ciudad" name="ciudad" class="form-control form-control-sm"
                            value="{{ old('ciudad', $tour->ciudad) }}">
                        @error('ciudad')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4 mt-3">
                        <label for="dias" class="form-label">Días:</label>
                        <input type="number" id="dias" name="dias" class="form-control form-control-sm" required
                            value="{{ old('dias', $tour->dias) }}">
                        @error('dias')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12 mt-3">
                        <label for="relacionado_id">Relación de Tousssr en inglés:</label>
                        <select name="relacionado_id" id="relacionado_id" class="form-control form-control-sm" required>
                            <option value="">Seleccione un Tour en inglés</option>
                            @foreach ($entours as $entour)
                                <option value="{{ $entour->id }}"
                                    {{ old('relacionado_id', $tour->relacionado_id) == $entour->id ? 'selected' : '' }}>
                                    {{ $entour->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('relacionado_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12 mt-3">
                        <label for="descripcionCorta" class="form-label">Descripción corta: <small
                                class="text-success">(Max. 25 palabras)</small></label>
                        <input type="text" id="descripcionCorta" name="descripcionCorta"
                            class="form-control form-control-sm" required maxlength="255"
                            value="{{ old('descripcionCorta', $tour->descripcionCorta) }}">
                        @error('descripcionCorta')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-3 mt-3">
                        <label for="imgThumb" class="form-label">Imagen Thumb: <small
                                class="text-success">(420x280)</small></label>
                        <input type="file" id="imgThumb" name="imgThumb" class="form-control" accept="image/*">
                        @error('imgThumb')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <img id="imgThumbPreview" src="{{ asset($tour->imgThumb) }}"
                            style="max-width: 100%; margin-top: 10px; width: 100%; object-fit: cover">
                    </div>
                    <div class="col-lg-3 mt-3">
                        <label for="imgFull" class="form-label">Imagen Full: <small
                                class="text-success">(1920x1080)</small></label>
                        <input type="file" id="imgFull" name="imgFull" class="form-control" accept="image/*">
                        @error('imgFull')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <img id="imgFullPreview" src="{{ asset($tour->imgFull) }}"
                            style="max-width: 100%; margin-top: 10px; width: 100%; object-fit: cover">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <label for="presentacion" class="form-label">Contenido Inicial:</label>
                        <textarea class="ckeditor form-control" name="presentacion" id="presentacion" value="{{ old('presentacion') }}">{{ $tour->presentacion }}</textarea>
                        @error('presentacion')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="itinerario" class="form-label">Itinerario:</label>
                        <textarea class="ckeditor form-control" name="itinerario" id="itinerario">{{ $tour->itinerario }}</textarea>
                        @error('itinerario')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <script type="text/javascript">
                        document.addEventListener("DOMContentLoaded", function() {
                            const itinerarioValue = {!! json_encode($tour->itinerario) !!};
                            CKEDITOR.instances['itinerario'].setData(itinerarioValue);
                        });
                    </script>
                    <div class="col-lg-6 mt-3">
                        <label for="incluye" class="form-label">Incluye:</label>
                        <textarea class="ckeditor form-control" name="incluye" id="incluye">{{ $tour->incluye }}</textarea>
                        @error('incluye')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <label for="importante" class="form-label">Importante: <small>Solo listas</small></label>
                        <textarea class="ckeditor form-control" name="importante" id="importante">{{ $tour->importante }}</textarea>
                        @error('importante')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12 mt-3">
                        <label for="galeria">Galería de imágenes:</label>
                        <input type="file" class="form-control form-control-sm" name="galeria[]" id="galeria"
                            multiple>

                        <!-- Mostrar las imágenes existentes -->
                        @if (isset($tour->galeria) && $tour->galeria)
                            <div class="mt-2">
                                <label>Imágenes actuales:</label>
                                <div class="row">
                                    @foreach (explode(',', $tour->galeria) as $imagen)
                                        <div class="col-3 mb-3">
                                            <img src="{{ asset($imagen) }}" alt="Imagen actual" class="img-thumbnail"
                                                style="width: 100%; height: 100px; object-fit: cover;">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @error('galeria')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="col-lg-12 mt-3">
                        <label for="categorias">Categorías:</label><br>
                        <div class="checkbox-inline">
                            @foreach ($categorias as $id => $nombre)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="categoria{{ $id }}"
                                        name="categorias[]" value="{{ $id }}"
                                        @if ($tour->categorias->contains($id)) checked @endif>
                                    <label class="form-check-label"
                                        for="categoria{{ $id }}">{{ $nombre }}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('categorias')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                     --}}
                    <div class="col-lg-6 mt-3">
                        <label for="categorias" class="font-weight-bold">Categorías:</label><br>
                        <div class="checkbox-inline">
                            @foreach ($categorias as $id => $nombre)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="categoria{{ $id }}"
                                        name="categorias[]" value="{{ $id }}"
                                        {{ in_array($id, $tour->categorias->pluck('id')->toArray()) ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="categoria{{ $id }}">{{ $nombre }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-6 mt-3">
                        <label class="font-weight-bold">Subcategorías:</label>
                        <div id="subcategorias-container" class="checkbox-inline"></div>
                    </div>

                    @php
                        $subcategoriasSeleccionadas = old(
                            'subcategorias',
                            $tour->subcategorias->pluck('id')->toArray(),
                        );
                    @endphp
                    <script>
                        const subcategoriasPorCategoria = @json($subcategorias);
                        const subcategoriasSeleccionadas = @json($subcategoriasSeleccionadas);

                        const categoriasCheckboxes = document.querySelectorAll('input[name="categorias[]"]');
                        const subcategoriasContainer = document.getElementById('subcategorias-container');

                        function renderSubcategorias() {
                            subcategoriasContainer.innerHTML = '';

                            categoriasCheckboxes.forEach(categoria => {
                                if (categoria.checked) {
                                    const catId = categoria.value;

                                    if (subcategoriasPorCategoria[catId]) {
                                        // 🏷️ Título de categoría
                                        const catHeader = document.createElement('div');
                                        catHeader.className = 'mt-2 mb-1 fw-bold font-weight-bold';
                                        catHeader.innerText = subcategoriasPorCategoria[catId][0].category?.nombre || 'Categoría';

                                        subcategoriasContainer.appendChild(catHeader);

                                        subcategoriasPorCategoria[catId].forEach(sub => {
                                            const wrapper = document.createElement('div');
                                            wrapper.className = 'form-check form-check-inline';

                                            const checkbox = document.createElement('input');
                                            checkbox.type = 'checkbox';
                                            checkbox.name = 'subcategorias[]';
                                            checkbox.value = sub.id;
                                            checkbox.id = 'subcategoria' + sub.id;
                                            checkbox.className = 'form-check-input';

                                            if (subcategoriasSeleccionadas.includes(sub.id)) {
                                                checkbox.checked = true;
                                            }

                                            const label = document.createElement('label');
                                            label.className = 'form-check-label';
                                            label.htmlFor = 'subcategoria' + sub.id;
                                            label.innerText = sub.nombre;

                                            wrapper.appendChild(checkbox);
                                            wrapper.appendChild(label);
                                            subcategoriasContainer.appendChild(wrapper);
                                        });
                                    }
                                }
                            });
                        }
                        categoriasCheckboxes.forEach(cb => cb.addEventListener('change', renderSubcategorias));
                        document.addEventListener('DOMContentLoaded', renderSubcategorias);
                    </script>
                    <div class="col-lg-12 mt-3">
                        <label for="keywords" class="form-label">Keywords: <small class="text-success">(Separar cada
                                palabra/frase por una coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control form-control-sm"
                            required value="{{ old('keywords', $tour->keywords) }}">
                        @error('keywords')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12 mt-3">
                        <label for="slug" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control form-control-sm"
                            required value="{{ old('slug', $tour->slug) }}">
                        @error('slug')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <script>
                        const slugInput = document.getElementById('slug');
                        slugInput.addEventListener('input', function() {
                            const originalValue = this.value;
                            const slugValue = originalValue.replace(/\s/g, '-');
                            this.value = slugValue;
                        });
                    </script>

                </div>
                <button class="btn btn-primary mt-4" type="submit">Guardar cambios</button>
                <a href="{{ route('estours.index') }}" class="btn btn-secondary mt-4 float-right">Cancelar</a>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('.ckeditor', {
            extraPlugins: 'youtube',
            toolbar: [
                ['Youtube']
            ]
        });
    </script>
    <script>
        function showPreview(input, previewElement) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewElement.src = e.target.result;
                    previewElement.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        document.getElementById('imgThumb').addEventListener('change', function() {
            showPreview(this, document.getElementById('imgThumbPreview'));
        });

        document.getElementById('imgFull').addEventListener('change', function() {
            showPreview(this, document.getElementById('imgFullPreview'));
        });

        document.getElementById('mapa').addEventListener('change', function() {
            showPreview(this, document.getElementById('mapaPreview'));
        });
    </script>

@endsection
