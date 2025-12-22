@csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control"
        value="{{ old('nombre', $subcategoria->nombre ?? '') }}" required>
    @error('nombre')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="slug" class="form-control"
        value="{{ old('slug', $subcategoria->slug ?? '') }}" readonly>
    @error('slug')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="category_id">Categoría</label>
    <select name="category_id" id="category_id" class="form-control" required>
        <option value="">Seleccione una categoría</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id', $subcategoria->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->nombre }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="imgThumb">Imagen (Thumbnail)</label>
    <input type="file" name="imgThumb" id="imgThumb" class="form-control-file" accept="image/*">
    @error('imgThumb')
        <div class="text-danger">{{ $message }}</div>
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
