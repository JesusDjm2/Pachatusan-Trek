@extends('layouts.app')
@section('titulo', 'Dashboard — Pachatusan Trek')

@section('hide_admin_flash', true)
@section('contenido')
    <div class="adm-dashboard">
        <div class="adm-dashboard__hero">
            <h1 class="adm-dashboard__title">Dashboard</h1>
            <p class="adm-dashboard__subtitle">Gestiona tours, contenido, imágenes y reseñas desde un solo lugar.</p>
        </div>

        @include('partials.admin.flash')

        <section class="adm-dash-section">
            <h2 class="adm-dash-section__title">
                <i class="fas fa-globe-americas"></i> Inglés
            </h2>
            <div class="adm-dash-grid">
                <a href="{{ route('tours.index') }}" class="adm-dash-card">
                    <i class="fas fa-route"></i>
                    <span>Tours EN</span>
                </a>
                <a href="{{ route('categories.index') }}" class="adm-dash-card">
                    <i class="fas fa-list"></i>
                    <span>Categorías EN</span>
                </a>
                <a href="{{ route('subcategories.index') }}" class="adm-dash-card">
                    <i class="fas fa-layer-group"></i>
                    <span>Sub-categorías EN</span>
                </a>
                <a href="{{ route('enblogs.index') }}" class="adm-dash-card">
                    <i class="fas fa-blog"></i>
                    <span>Blog EN</span>
                </a>
            </div>
        </section>

        <section class="adm-dash-section">
            <h2 class="adm-dash-section__title">
                <i class="fas fa-map-marked-alt"></i> Español
            </h2>
            <div class="adm-dash-grid">
                <a href="{{ route('estours.index') }}" class="adm-dash-card">
                    <i class="fas fa-route"></i>
                    <span>Tours ES</span>
                </a>
                <a href="{{ route('categorias.index') }}" class="adm-dash-card">
                    <i class="fas fa-list"></i>
                    <span>Categorías ES</span>
                </a>
                <a href="{{ route('subcategorias.index') }}" class="adm-dash-card">
                    <i class="fas fa-layer-group"></i>
                    <span>Sub-categorías ES</span>
                </a>
                <a href="{{ route('esblogs.index') }}" class="adm-dash-card">
                    <i class="fas fa-blog"></i>
                    <span>Blog ES</span>
                </a>
            </div>
        </section>

        <section class="adm-dash-section">
            <h2 class="adm-dash-section__title">
                <i class="fas fa-cog"></i> Administración
            </h2>
            <div class="adm-dash-grid">
                <a href="{{ route('imagenes.index') }}" class="adm-dash-card">
                    <i class="fas fa-images"></i>
                    <span>Imágenes</span>
                </a>
                <a href="{{ route('admin.reviews.index', ['status' => 'pending']) }}" class="adm-dash-card">
                    @if (($pendingReviewsCount ?? 0) > 0)
                        <span class="adm-dash-card__badge">{{ $pendingReviewsCount }}</span>
                    @endif
                    <i class="fas fa-star"></i>
                    <span>Reseñas</span>
                </a>
                <a href="{{ route('users.index') }}" class="adm-dash-card">
                    <i class="fas fa-users"></i>
                    <span>Usuarios</span>
                </a>
                <a href="{{ route('index') }}" target="_blank" rel="noopener noreferrer" class="adm-dash-card">
                    <i class="fas fa-external-link-alt"></i>
                    <span>Sitio público</span>
                </a>
            </div>
        </section>
    </div>
@endsection
