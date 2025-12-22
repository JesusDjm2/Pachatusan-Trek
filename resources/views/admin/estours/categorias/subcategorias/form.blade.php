@csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror"
        value="{{ old('nombre', $subcategoria->nombre ?? '') }}" required>
    @error('nombre')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
        value="{{ old('slug', $subcategoria->slug ?? '') }}" readonly>
    @error('slug')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="categoria_id">Categoría</label>
    <select name="categoria_id" id="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror"
        required>
        <option value="">Seleccione una categoría</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}"
                {{ old('categoria_id', $subcategoria->categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>
    @error('categoria_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="imgThumb">Imagen (Thumbnail)</label>
    <input type="file" name="imgThumb" id="imgThumb"
        class="form-control-file @error('imgThumb') is-invalid @enderror" accept="image/*">
    @error('imgThumb')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
    @if (!empty($subcategoria->imgThumb))
        <div class="mt-2">
            <img src="{{ asset($subcategoria->imgThumb) }}" alt="Imagen actual" style="max-width: 200px;">
        </div>
    @endif
</div>
<button type="submit" class="btn btn-primary">Guardar</button>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const nombreInput = document.getElementById('nombre');
        const slugInput = document.getElementById('slug');

        nombreInput.addEventListener('input', () => {
            const slug = nombreInput.value.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9\-]/g,
                '');
            slugInput.value = slug;
        });
    });
</script>
