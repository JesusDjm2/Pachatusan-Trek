@extends('layouts.app')
@section('titulo', 'Listado de blog en inglés')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
@endpush

@section('contenido')
    <div class="container-fluid py-4">
        @include('partials.admin.page-header', [
            'icon' => 'fa-blog',
            'title' => 'Blog',
            'badge' => 'EN',
            'subtitle' => 'Gestión de artículos en inglés',
            'actions' => '<a href="' . route('enblogs.create') . '" class="btn btn-primary shadow-sm hover-up"><i class="fas fa-plus-circle me-1"></i> Nuevo Blog</a>',
        ])

        {{-- Buscador y Tabla --}}
        <div class="card shadow-sm border-0 overflow-hidden">
            <div class="card-header bg-white py-3 border-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="mb-0 text-primary fw-bold">
                            <i class="fas fa-list me-2"></i>Listado de Artículos
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
                                <th class="px-4 py-3">Tags</th>
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
                                        @foreach ($registro->tags as $tag)
                                            <span class="badge bg-light text-info border me-1 mb-1">{{ $tag->nombre }}</span>
                                        @endforeach
                                    </td>
                                    <td class="px-4 text-center text-nowrap">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('enblog.show', $registro->slug) }}" class="btn btn-sm btn-outline-primary" target="_blank" title="Ver">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('enblogs.edit', $registro->id) }}" class="btn btn-sm btn-info text-white" title="Editar">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('enblogs.destroy', $registro->id) }}" method="POST" class="d-inline">
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
