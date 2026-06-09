@extends('layouts.app')
@section('titulo', 'Usuarios')
@section('contenido')
    <div class="container-fluid py-4">
        @include('partials.admin.page-header', [
            'icon' => 'fa-users',
            'title' => 'Usuarios',
            'subtitle' => 'Gestión de cuentas del panel de administración',
            'actions' => '<a href="' . route('users.create') . '" class="btn btn-primary shadow-sm hover-up"><i class="fas fa-user-plus me-1"></i> Nuevo Usuario</a>',
        ])

        <div class="card shadow-sm border-0 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-4">{{ $user->id }}</td>
                                    <td class="px-4 nombre fw-bold">{{ $user->name }}</td>
                                    <td class="px-4 text-center">
                                        <a class="btn btn-sm btn-success me-1"
                                            href="{{ route('users.edit', $user->id) }}">
                                            <i class="fa fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('¿Eliminar usuario?')">
                                                <i class="fa fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
