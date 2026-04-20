@extends('layouts.app')
@section('titulo', 'Gestión de Reseñas')
@section('contenido')
    <div class="container-fluid py-4">
        {{-- Header con título --}}
        <div class="row mb-4 align-items-center">
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center">
                    <div class="bg-primary bg-gradient rounded-3 p-3 me-3 shadow-sm">
                        <i class="fas fa-star text-white" style="font-size: 1.8rem;"></i>
                    </div>
                    <div>
                        <h1 class="fw-bold text-primary mb-1 display-6">
                            Reseñas <small class="text-muted">(Reviews)</small>
                        </h1>
                        <p class="text-muted mb-0">
                            <i class="fas fa-check-circle me-1"></i>
                            Moderación de comentarios de clientes
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Alertas --}}
        @if (session('flash'))
            <div class="alert alert-{{ session('flash')['type'] == 'success' ? 'success' : 'danger' }} alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fas fa-{{ session('flash')['type'] == 'success' ? 'check-circle' : 'exclamation-circle' }} me-2 fs-4"></i>
                    <div>{{ session('flash')['message'] }}</div>
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
                            <i class="fas fa-list me-2"></i>Listado de Reseñas
                        </h5>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
                            <input type="text" id="buscador" class="form-control bg-light border-0" 
                                placeholder="Buscar por nombre o comentario...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="tabladatos" class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="px-4 py-3">Cliente</th>
                                <th class="px-4 py-3">Calificación</th>
                                <th class="px-4 py-3">Comentario</th>
                                <th class="px-4 py-3">Fecha de Viaje</th>
                                <th class="px-3 py-3 text-center">Estado</th>
                                <th class="px-4 py-3 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                    <td class="px-4 nombre text-dark">
                                        <div class="d-flex align-items-center">
                                            @if($review->image)
                                                <img src="{{ asset($review->image) }}" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                            @else
                                                <div class="rounded-circle bg-secondary me-2 d-flex align-items-center justify-content-center text-white" style="width: 40px; height: 40px;">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            @endif
                                            <div>
                                                <div class="fw-bold">{{ $review->name }}</div>
                                                <small class="text-muted">Con: {{ $review->travel_with }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        <div class="text-warning">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa{{ $i < $review->rating ? 's' : 'r' }} fa-star"></i>
                                            @endfor
                                        </div>
                                    </td>
                                    <td class="px-4 comentario">
                                        <div class="text-truncate" style="max-width: 300px;" title="{{ $review->comment }}">
                                            {{ $review->comment }}
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        {{ $review->travel_date ? $review->travel_date->format('d/m/Y') : 'N/A' }}
                                    </td>
                                    <td class="px-3 text-center">
                                        @if($review->is_public)
                                            <span class="badge bg-success px-3 py-2 rounded-pill">Aprobado</span>
                                        @else
                                            <span class="badge bg-warning px-3 py-2 rounded-pill">Pendiente</span>
                                        @endif
                                    </td>
                                    <td class="px-4 text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-sm {{ $review->is_public ? 'btn-outline-warning' : 'btn-success' }}" title="{{ $review->is_public ? 'Ocultar' : 'Aprobar' }}">
                                                    <i class="fas fa-{{ $review->is_public ? 'eye-slash' : 'check' }}"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Eliminar reseña?')">
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
                    Total: {{ $reviews->count() }} registros
                </span>
            </div>
        </div>
    </div>

    <script>
        // Buscador en tiempo real
        document.getElementById('buscador').addEventListener('keyup', function() {
            const searchText = this.value.toLowerCase();
            const rows = document.querySelectorAll('#tabladatos tbody tr');

            rows.forEach(row => {
                const nombre = row.querySelector('.nombre').textContent.toLowerCase();
                const comentario = row.querySelector('.comentario').textContent.toLowerCase();

                if (nombre.includes(searchText) || comentario.includes(searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
@endsection
