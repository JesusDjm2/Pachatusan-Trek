@extends('layouts.app')
@section('titulo', 'Lista de Tours en español')
@section('contenido')
    <div class="container-fluid py-4">
        {{-- Header con título y botón de nuevo --}}
        <div class="row mb-4 align-items-center">
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center">
                    <div class="bg-primary bg-gradient rounded-3 p-3 me-3 shadow-sm">
                        <i class="fas fa-route text-white" style="font-size: 1.8rem;"></i>
                    </div>
                    <div>
                        <h1 class="fw-bold text-primary mb-1 display-6">
                            Tours <small class="text-muted">(ES)</small>
                        </h1>
                        <p class="text-muted mb-0">
                            <i class="fas fa-map-marker-alt me-1"></i>
                            Gestión de tours en español
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0 d-flex justify-content-md-end gap-2">
                <a href="{{ route('estours.create') }}" class="btn btn-primary shadow-sm hover-up">
                    <i class="fas fa-plus-circle me-1"></i> Nuevo Tour
                </a>
            </div>
        </div>

        {{-- Alertas --}}
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle me-2 fs-4"></i>
                    <div>{{ session('status') }}</div>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        {{-- Buscador y Tabla --}}
        <div class="card shadow-sm border-0 overflow-hidden">
            <div class="card-header bg-white py-3 border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="mb-0 text-primary fw-bold">
                            <i class="fas fa-list me-2"></i>Listado de Tours (ES)
                        </h5>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
                            <input type="text" id="buscador" class="form-control bg-light border-0" 
                                placeholder="Buscar por nombre, recorrido o slug...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="tabladatos" class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="px-4 py-3">Tour</th>
                                <th class="px-4 py-3">Imagen</th>
                                <th class="px-4 py-3">Categorías</th>
                                <th class="px-4 py-3">Detalles</th>
                                <th class="px-4 py-3 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tours as $tour)
                                <tr>
                                    <td class="px-4 nombre text-dark">
                                        <div class="fw-bold">{{ $tour->nombre }}</div>
                                        <small class="text-muted slug d-block">{{ $tour->slug }}</small>
                                    </td>
                                    <td class="px-4">
                                        <div class="rounded-3 shadow-sm overflow-hidden" style="width: 80px; height: 50px;">
                                            <img src="{{ asset($tour->imgThumb) }}" class="w-100 h-100" style="object-fit: cover;">
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        @foreach ($tour->categorias as $categoria)
                                            <span class="badge bg-light text-primary border me-1 mb-1">{{ $categoria->nombre }}</span>
                                        @endforeach
                                    </td>
                                    <td class="px-4">
                                        <div class="small">
                                            <div class="recorrido"><i class="fas fa-map-marker-alt text-muted me-1"></i>{{ $tour->recorrido }}</div>
                                            <div><i class="fas fa-globe text-muted me-1"></i>{{ $tour->pais->nombre ?? 'Sin asignar' }}</div>
                                            <div><i class="fas fa-clock text-muted me-1"></i>{{ $tour->dias }} días</div>
                                        </div>
                                    </td>
                                    <td class="px-4 text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('estour.show', $tour->slug) }}" class="btn btn-sm btn-outline-primary" title="Ver" target="_blank">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('estours.edit', $tour->id) }}" class="btn btn-sm btn-info text-white" title="Editar">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('estours.destroy', $tour->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Eliminar tour?')">
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
                    Total: {{ $tours->count() }} registros
                </span>
            </div>
        </div>
    </div>

        <script>
            function alerta() {
                alert('¿Desea eliminar?');
            }
            // Buscador en tiempo real
            document.getElementById('buscador').addEventListener('keyup', function() {
                const searchText = this.value.toLowerCase();
                const rows = document.querySelectorAll('#tabladatos tbody tr');

                rows.forEach(row => {
                    const nombre = row.querySelector('.nombre').textContent.toLowerCase();
                    const recorrido = row.querySelector('.recorrido').textContent.toLowerCase();
                    const slug = row.querySelector('.slug').textContent.toLowerCase();

                    // Muestra la fila si coincide con el texto de búsqueda
                    if (nombre.includes(searchText) || recorrido.includes(searchText) || slug.includes(
                            searchText)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        </script>

@endsection
