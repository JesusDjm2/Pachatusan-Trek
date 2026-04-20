@extends('layouts.app')
@section('titulo', 'Listado de blog en inglés')
@section('contenido')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <div class="container-fluid py-4">
        {{-- Header con título y botón de nuevo --}}
        <div class="row mb-4 align-items-center">
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center">
                    <div class="bg-primary bg-gradient rounded-3 p-3 me-3 shadow-sm">
                        <i class="fas fa-blog text-white" style="font-size: 1.8rem;"></i>
                    </div>
                    <div>
                        <h1 class="fw-bold text-primary mb-1 display-6">
                            Blog <small class="text-muted">(ES)</small>
                        </h1>
                        <p class="text-muted mb-0">
                            <i class="fas fa-pen-nib me-1"></i>
                            Gestión de artículos en español
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0 d-flex justify-content-md-end gap-2">
                <a href="{{ route('esblogs.create') }}" class="btn btn-primary shadow-sm hover-up">
                    <i class="fas fa-plus-circle me-1"></i> Nuevo Blog
                </a>
            </div>
        </div>

        {{-- Alertas --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle me-2 fs-4"></i>
                    <div>{{ session('success') }}</div>
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
                            <i class="fas fa-list me-2"></i>Listado de Artículos (ES)
                        </h5>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
                            <input type="text" id="buscador" class="form-control bg-light border-0" 
                                placeholder="Buscar por nombre o slug...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="tabladatos" class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="px-4 py-3">Artículo</th>
                                <th class="px-4 py-3 text-center">Imágenes</th>
                                <th class="px-4 py-3">Relación EN</th>
                                <th class="px-4 py-3 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $registro)
                                <tr>
                                    <td class="px-4 nombre">
                                        <div class="fw-bold text-dark">{{ $registro->nombre }}</div>
                                        <small class="text-muted d-block slug">{{ $registro->slug }}</small>
                                    </td>
                                    <td class="px-4">
                                        <div class="d-flex justify-content-center gap-2">
                                            <div class="rounded-3 shadow-sm overflow-hidden" style="width: 60px; height: 40px;" title="Thumb">
                                                <img src="{{ asset($registro->imgThumb) }}" class="w-100 h-100" style="object-fit: cover;">
                                            </div>
                                            <div class="rounded-3 shadow-sm overflow-hidden" style="width: 60px; height: 40px;" title="Full">
                                                <img src="{{ asset($registro->imgFull) }}" class="w-100 h-100" style="object-fit: cover;">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        @if ($registro->blog)
                                            <div class="small fw-bold">{{ $registro->blog->nombre }}</div>
                                            <small class="text-muted">{{ $registro->blog->slug }}</small>
                                        @else
                                            <span class="text-muted italic">Sin relación</span>
                                        @endif
                                    </td>
                                    <td class="px-4 text-center text-nowrap">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('esblog.show', $registro->slug) }}" class="btn btn-sm btn-outline-primary" target="_blank" title="Ver">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('esblogs.edit', $registro->id) }}" class="btn btn-sm btn-info text-white" title="Editar">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('esblogs.destroy', $registro->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar artículo?')">
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
                    Total: {{ $blogs->count() }} registros
                </span>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        var j = jQuery.noConflict();
        j(document).ready(function() {
            j('#tabladatos').DataTable();
        });
    </script>
@endsection
