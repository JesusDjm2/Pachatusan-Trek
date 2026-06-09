<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="robots" content="nofollow">

    <title>@yield('titulo', 'Panel de administración')</title>

    <link rel="icon" type="image/png" href="{{ asset('img/pachatusan-icon.png') }}">

    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/admin-premium.css') }}" rel="stylesheet">

    @stack('styles')

</head>



<body id="page-top" class="adm-body">

    <div id="wrapper">

        <ul class="navbar-nav sidebar sidebar-dark accordion adm-sidebar" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">

                <img src="{{ asset('img/logo-pachatusan-trek.png') }}" width="100%" alt="Pachatusan Trek" style="padding: 0.6em">

            </a>



            <hr>

            <div class="sidebar-heading">Panel</div>

            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">

                <a class="nav-link" href="{{ route('home') }}">

                    <i class="fas fa-fw fa-th-large"></i>

                    <span>Dashboard</span>

                </a>

            </li>



            <hr>

            <div class="sidebar-heading">Inglés</div>

            <li class="nav-item">

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuEn"

                    aria-expanded="false" aria-controls="menuEn">

                    <i class="fas fa-fw fa-globe-americas"></i>

                    <span>Tours EN</span>

                </a>

                <div id="menuEn" class="collapse" data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{ route('tours.index') }}">Tours</a>

                        <a class="collapse-item" href="{{ route('categories.index') }}">Categorías</a>

                        <a class="collapse-item" href="{{ route('subcategories.index') }}">Sub-categorías</a>

                        <a class="collapse-item" href="{{ route('enblogs.index') }}">Blog EN</a>

                    </div>

                </div>

            </li>



            <hr>

            <div class="sidebar-heading">Español</div>

            <li class="nav-item">

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuEs"

                    aria-expanded="false" aria-controls="menuEs">

                    <i class="fas fa-fw fa-map-marked-alt"></i>

                    <span>Tours ES</span>

                </a>

                <div id="menuEs" class="collapse" data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{ route('estours.index') }}">Tours</a>

                        <a class="collapse-item" href="{{ route('paises.index') }}">Países</a>

                        <a class="collapse-item" href="{{ route('categorias.index') }}">Categorías</a>

                        <a class="collapse-item" href="{{ route('subcategorias.index') }}">Sub-categorías</a>

                        <a class="collapse-item" href="{{ route('esblogs.index') }}">Blog ES</a>

                    </div>

                </div>

            </li>



            <hr>

            <div class="sidebar-heading">Administración</div>

            <li class="nav-item {{ request()->routeIs('imagenes.*') ? 'active' : '' }}">

                <a class="nav-link" href="{{ route('imagenes.index') }}">

                    <i class="fas fa-fw fa-images"></i>

                    <span>Imágenes</span>

                </a>

            </li>

            <li class="nav-item {{ request()->routeIs('admin.reviews.*') ? 'active' : '' }}">

                <a class="nav-link" href="{{ route('admin.reviews.index') }}">

                    <i class="fas fa-fw fa-star"></i>

                    <span>Reseñas</span>

                    @if (($pendingReviewsCount ?? 0) > 0)

                        <span class="badge badge-danger badge-counter ml-1">{{ $pendingReviewsCount }}</span>

                    @endif

                </a>

            </li>

            <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">

                <a class="nav-link" href="{{ route('users.index') }}">

                    <i class="fas fa-fw fa-users"></i>

                    <span>Usuarios</span>

                </a>

            </li>



            <div class="adm-sidebar__public">

                <a href="{{ route('index') }}" target="_blank" rel="noopener noreferrer" class="adm-sidebar__public-link">

                    <i class="fas fa-external-link-alt"></i>

                    <span>Sitio web (EN)</span>

                </a>

                <a href="{{ route('inicio') }}" target="_blank" rel="noopener noreferrer"

                    class="adm-sidebar__public-link mt-2">

                    <i class="fas fa-external-link-alt"></i>

                    <span>Sitio web (ES)</span>

                </a>

            </div>



            <div class="text-center d-none d-md-inline mt-3">

                <button class="rounded-circle border-0" id="sidebarToggle"></button>

            </div>

        </ul>



        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top adm-topbar">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

                        <i class="fa fa-bars"></i>

                    </button>



                    <div class="adm-topbar__actions">

                        <a href="{{ route('index') }}" target="_blank" rel="noopener noreferrer" class="adm-btn-public">

                            <i class="fas fa-external-link-alt"></i>

                            <span class="adm-btn-public__label">Ver sitio público</span>

                        </a>

                        <a href="{{ route('inicio') }}" target="_blank" rel="noopener noreferrer"

                            class="adm-btn-public adm-btn-public--ghost d-none d-sm-inline-flex">

                            <i class="fas fa-globe"></i>

                            <span class="adm-btn-public__label">Versión ES</span>

                        </a>

                        <div class="adm-topbar__user">

                            <span class="adm-topbar__name d-none d-md-inline">{{ Auth::user()->name }}</span>

                            <a class="adm-btn-logout" href="{{ route('logout') }}"

                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                <i class="fas fa-sign-out-alt"></i>

                                <span class="d-none d-sm-inline">Salir</span>

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                                @csrf

                            </form>

                        </div>

                    </div>

                </nav>



                <div class="container-fluid">

                    <div class="adm-page">
                        @unless(View::hasSection('hide_admin_flash'))
                            @include('partials.admin.flash')
                        @endunless
                        @yield('contenido')
                    </div>

                </div>

            </div>



            <footer class="sticky-footer">

                <div class="container my-auto">

                    <div class="copyright text-center my-auto">

                        <span>Pachatusan Trek &copy; {{ date('Y') }} — Panel de administración</span>

                    </div>

                </div>

            </footer>

        </div>

    </div>



    <a class="scroll-to-top rounded" href="#page-top">

        <i class="fas fa-angle-up"></i>

    </a>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"></script>

    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

    <script src="{{ asset('admin/js/admin-premium.js') }}"></script>

    @stack('modals')
    @stack('scripts')

</body>



</html>

