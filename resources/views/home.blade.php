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

                        <style>
                            .dash-section-title {
                                font-weight: bold;
                                font-size: 1.2rem;
                                margin-top: 1.5rem;
                                color: #0d6efd;
                            }

                            .dash-card {
                                border: 1px solid #dcdcdc;
                                padding: 1rem;
                                border-radius: 10px;
                                transition: 0.2s;
                                text-align: center;
                                background: white;
                                text-decoration: none;
                                color:#636363
                            }

                            .dash-card:hover {
                                transform: translateY(-3px);
                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                text-decoration: none
                            }

                            .dash-card i {
                                font-size: 1.8rem;
                                margin-bottom: 0.3rem;
                                color: #636363;
                            }
                            .dash-card:hover i{
                                color: #0d6efd;
                            }
                        </style>

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
