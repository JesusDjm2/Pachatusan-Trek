@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font-weight-bold">Dashboard de Pachatusan Trek</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- ===== Botones Principales ===== -->

                        <!-- ====== DASHBOARD MENÚ PRINCIPAL ====== -->



                        <div class="container">
                            <div class="dash-section-title">Inglés</div>
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('tours.index') }}" class="dash-card d-block">
                                        <i class="fas fa-route"></i>
                                        <div>Tours EN</div>
                                    </a>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('categories.index') }}" class="dash-card d-block">
                                        <i class="fas fa-list"></i>
                                        <div>Categorías EN</div>
                                    </a>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('subcategories.index') }}" class="dash-card d-block">
                                        <i class="fas fa-layer-group"></i>
                                        <div>Sub-Categorías EN</div>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <!-- Español -->
                            <div class="dash-section-title">Español</div>
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('estours.index') }}" class="dash-card d-block">
                                        <i class="fas fa-route"></i>
                                        <div>Tours ES</div>
                                    </a>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('categorias.index') }}" class="dash-card d-block">
                                        <i class="fas fa-list"></i>
                                        <div>Categorías ES</div>
                                    </a>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('subcategorias.index') }}" class="dash-card d-block">
                                        <i class="fas fa-layer-group"></i>
                                        <div>Sub-Categorías ES</div>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <!-- Imágenes -->
                            <div class="dash-section-title">Administración</div>
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('imagenes.index') }}" class="dash-card d-block">
                                        <i class="fas fa-images"></i>
                                        <div>Imágenes</div>
                                    </a>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('admin.reviews.index') }}" class="dash-card d-block">
                                        <i class="fas fa-star"></i>
                                        <div>Reseñas</div>
                                    </a>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('users.index') }}" class="dash-card d-block">
                                        <i class="fas fa-user"></i>
                                        <div>Usuarios</div>
                                    </a>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <a href="{{ route('home') }}" class="dash-card d-block">
                                        <i class="fas fa-home"></i>
                                        <div>Home</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
