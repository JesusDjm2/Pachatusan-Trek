@extends('layouts.app')
@section('contenido')
    <div class="container-fluid py-4">
        {{-- Header con título y botón de nuevo --}}
        <div class="row mb-4">
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center">
                    <div class="bg-primary bg-gradient rounded-3 p-3 me-3 shadow-sm">
                        <i class="fas fa-globe text-white" style="font-size: 1.8rem;"></i>
                    </div>
                    <div>
                        <h1 class="fw-bold text-primary mb-1 display-6">
                            Países
                        </h1>
                        <p class="text-muted mb-0">
                            <i class="fas fa-map-marker-alt me-1"></i>
                            Gestión de países para tours en español
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0">
                <a href="{{ route('paises.create') }}" class="btn btn-primary shadow-sm">
                    <i class="fas fa-plus-circle me-2"></i>Nuevo País
                </a>
            </div>
        </div>

        {{-- Alertas --}}
        @if (session('status'))
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        {{-- Tabla de países --}}
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="mb-0 text-primary fw-bold">
                                    <i class="fas fa-list me-2"></i>Listado de Países
                                </h5>
                            </div>
                            <div class="col-auto">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    Total: {{ $paises->count() }} países
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="px-4 py-3 text-uppercase small fw-bold">Nombre</th>
                                        <th class="px-4 py-3 text-uppercase small fw-bold">Bandera</th>
                                        <th class="px-4 py-3 text-uppercase small fw-bold text-center">Vista Pública</th>
                                        <th class="px-4 py-3 text-uppercase small fw-bold text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($paises as $pais)
                                        <tr>
                                            <td class="px-4 py-3">
                                                <div class="fw-bold">{{ $pais->nombre }}</div>
                                                @if ($pais->slug)
                                                    <small class="text-muted">
                                                        <i class="fas fa-link me-1"></i>{{ $pais->slug }}
                                                    </small>
                                                @endif
                                            </td>
                                            <td class="px-4 py-3">
                                                @if ($pais->imagen)
                                                    <div class="d-flex align-items-center">
                                                        <div class="border rounded-3 p-1 shadow-sm"
                                                            style="width: 60px; height: 40px; overflow: hidden;">
                                                            <img src="{{ asset($pais->imagen) }}"
                                                                alt="Bandera {{ $pais->nombre }}"
                                                                class="img-fluid rounded-2"
                                                                style="width: 100%; height: 100%; object-fit: cover;">
                                                        </div>
                                                        <span class="ms-2 small text-muted">
                                                            <i class="fas fa-check-circle text-success me-1"></i>
                                                            Activa
                                                        </span>
                                                    </div>
                                                @else
                                                    <span class="badge bg-light text-dark p-2">
                                                        <i class="fas fa-times-circle text-muted me-1"></i>
                                                        Sin bandera
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-4 py-3 text-center">
                                                <a href="{{ route('pais.show', $pais->slug ?? $pais->id) }}"
                                                    class="btn btn-sm btn-outline-info" target="_blank"
                                                    data-bs-toggle="tooltip" title="Ver vista pública">
                                                    <i class="fa fa-eye me-1"></i> Ver
                                                </a>
                                            </td>
                                            <td class="px-4 py-3">
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a href="{{ route('paises.edit', $pais) }}"
                                                        class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                        title="Editar país">
                                                        <i class="fas fa-edit me-1"></i> Editar
                                                    </a>

                                                    <form action="{{ route('paises.destroy', $pais) }}" method="POST"
                                                        class="d-inline"
                                                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar este país? Esta acción no se puede deshacer.');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="tooltip" title="Eliminar país">
                                                            <i class="fas fa-trash-alt me-1"></i> Eliminar
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-5">
                                                <div class="py-4">
                                                    <i class="fas fa-globe-americas fa-3x text-muted mb-3"></i>
                                                    <h5 class="text-muted">No hay países registrados</h5>
                                                    <p class="text-muted mb-3">Comienza creando tu primer país</p>
                                                    <a href="{{ route('paises.create') }}" class="btn btn-primary">
                                                        <i class="fas fa-plus-circle me-2"></i>Crear País
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Inicializar tooltips
            document.addEventListener('DOMContentLoaded', function() {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                });
            });
        </script>
    @endpush

    @push('styles')
        <style>
            .bg-gradient {
                background: linear-gradient(45deg, var(--bs-primary), #0d6efd);
            }

            .table> :not(caption)>*>* {
                padding: 1rem 0.75rem;
            }

            .btn-outline-info:hover i,
            .btn-warning:hover i,
            .btn-danger:hover i {
                color: white;
            }

            .gap-2 {
                gap: 0.5rem;
            }
        </style>
    @endpush
@endsection