@extends('layouts.app')
@section('titulo', 'Banco de imagenes')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
@endpush

@section('contenido')
    <div class="container-fluid py-4">
        @include('partials.admin.page-header', [
            'icon' => 'fa-images',
            'title' => 'Imágenes',
            'subtitle' => 'Banco de imágenes general',
            'actions' => '<a href="' . route('imagenes.create') . '" class="btn btn-primary shadow-sm hover-up"><i class="fas fa-upload me-1"></i> Subir Imagen</a>',
        ])

        {{-- Buscador y Tabla --}}
        <div class="card shadow-sm border-0 overflow-hidden">
            <div class="card-header bg-white py-3 border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="mb-0 text-primary fw-bold">
                            <i class="fas fa-list me-2"></i>Listado de Archivos
                        </h5>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
                            <input type="text" id="buscador" class="form-control bg-light border-0" 
                                placeholder="Filtrar por nombre de archivo...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="tabladatos" class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="px-4 py-3">Vista Previa</th>
                                <th class="px-4 py-3">URL del Archivo</th>
                                <th class="px-4 py-3 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imagenes as $imagen)
                                <tr>
                                    <td class="px-4">
                                        <div class="rounded-3 shadow-sm border overflow-hidden" style="width: 100px; height: 60px;">
                                            <img src="{{ asset('img/galeria/' . $imagen->img) }}" class="w-100 h-100" style="object-fit: cover;">
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        <div class="input-group input-group-sm mb-0">
                                            <input type="text" class="form-control bg-light border-0 small url-text" value="{{ asset('img/galeria/' . $imagen->img) }}" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="button" onclick="copiarTexto(this)" title="Copiar URL">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <small class="text-muted filename">{{ $imagen->img }}</small>
                                    </td>
                                    <td class="px-4 text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ asset('img/galeria/' . $imagen->img) }}" target="_blank" class="btn btn-sm btn-outline-success" title="Ver original">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('imagenes.edit', $imagen->id) }}" class="btn btn-sm btn-info text-white" title="Editar">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('imagenes.destroy', $imagen->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Eliminar imagen definitivamente?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-0 py-3 text-center">
                <span class="badge bg-primary rounded-pill px-3 py-2">
                    Total: {{ $imagenes->count() }} imágenes
                </span>
            </div>
        </div>
    </div>

    <script>
        function copiarTexto(btn) {
            const input = btn.closest('.input-group').querySelector('.url-text');
            input.select();
            document.execCommand("copy");
            
            // Efecto visual simple
            const icon = btn.querySelector('i');
            icon.classList.remove('fa-copy');
            icon.classList.add('fa-check');
            btn.classList.replace('btn-outline-primary', 'btn-success');
            
            setTimeout(() => {
                icon.classList.replace('fa-check', 'fa-copy');
                btn.classList.replace('btn-success', 'btn-outline-primary');
            }, 1000);
        }

        // Buscador en tiempo real
        document.getElementById('buscador').addEventListener('keyup', function() {
            const searchText = this.value.toLowerCase();
            const rows = document.querySelectorAll('#tabladatos tbody tr');

            rows.forEach(row => {
                const filename = row.querySelector('.filename').textContent.toLowerCase();
                if (filename.includes(searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
@endsection
