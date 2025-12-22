<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pachatusan Trek - Agencia de viajes y Turismo en Perú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('styles/font-awesome.minbb49.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('megamenu/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/estilos.css') }}">
    <link rel="icon" href="{{ asset('img/pachatusan-icon.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&amp;display=swap" rel="stylesheet">
    @yield('metas')
</head>

<body>
    <a href="https://wa.me/51984103757?text=%F0%9F%91%8B%20%C2%A1Hola!%20Estoy%20interesado(a)%20en%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20las%20experiencias%20de%20Pachatusan%20Trek.%20%C2%BFPodr%C3%ADan%20ayudarme%20con%20los%20detalles,%20por%20favor%3F"
        class="whatsapp-float" target="_blank" aria-label="Chatea con nosotros por WhatsApp">
        <i class="fab fa-whatsapp fa-sm"></i>
    </a>
    <style>
        /* Botón flotante de WhatsApp */
        .whatsapp-float {
            position: fixed;
            bottom: 4em;
            right: 20px;
            z-index: 999;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-float::after {
            text-decoration: none
        }

        .whatsapp-float i {
            color: #fff;
            font-size: 1.8em
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #1ebe57;
        }
    </style>
    <div class="container-fluid contactInfo">
        <p><i class="fa fa-phone"></i> Llamar <strong> +51 984 103 757</strong> | <i class="fa fa-envelope"></i> <a
                href="mailto:info@pachatusantrek.com">jessica@pachatusantrek.com</a></p>
    </div>
    <header class="header">
        <div class="container">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="{{ route('inicio') }}">
                            <img src="{{ asset('img/logo-Pachatusan-Trek-blanco.png') }}" alt="Logo Pachatusan Trek"
                                width="170px">
                        </a>
                    </div>
                </div>
                <!-- menu start here -->
                <div class="header-item item-center">
                    <div class="menu-overlay">
                    </div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <style>
                            .country-item {
                                position: relative;
                            }

                            /* oculto por defecto */
                            .country-tours {
                                position: absolute;
                                top: 100%;
                                left: 0;
                                width: 100%;
                                background: #fff;
                                padding: 10px;
                                display: none;
                                z-index: 100;
                                box-shadow: 0 8px 20px rgba(0, 0, 0, .15);
                            }

                            /* mostrar en hover */
                            .country-item:hover .country-tours {
                                display: block;
                            }

                            /* links */
                            .tour-link {
                                display: flex;
                                justify-content: space-between;
                                padding: 6px 8px;
                                font-size: 13px;
                                border-radius: 4px;
                            }

                            .tour-link:hover {
                                background: #f0f0f0;
                            }
                        </style>
                        <ul class="menu-main">
                            @foreach ($categoriasConSubcategorias as $categoria)
                                <li class="menu-item-has-children">
                                    <a href="{{ route('categoria.show', $categoria->slug) }}"
                                        title="{{ $categoria->nombre }}">
                                        {{ $categoria->nombre }} <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="sub-menu mega-menu mega-menu-column-4">
                                        @if ($categoria->subcategorias->count() > 2)
                                            @foreach ($categoria->subcategorias as $sub)
                                                <div class="list-item text-center">
                                                    <a href="{{ route('subcategorias.show', $sub->slug) }}"
                                                        title="{{ $sub->nombre }}">
                                                        <div style="width: 100%; overflow: hidden; height:110px">
                                                            <img src="{{ asset($sub->imgThumb ?? 'img/default.jpg') }}"
                                                                alt="{{ $sub->nombre }}" loading="lazy">
                                                        </div>
                                                        <h4 class="title">{{ $sub->nombre }}</h4>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                            @foreach ($paisesConTours as $pais)
                                                <div class="list-item text-center country-item">
                                                    <div class="country-img">
                                                        <img src="{{ asset($pais->imagen ?? 'img/default.jpg') }}"
                                                            alt="{{ $pais->nombre }}" loading="lazy">
                                                    </div>
                                                    <h4 class="title country-title">{{ $pais->nombre }}</h4>
                                                    <div class="country-tours">
                                                        @foreach ($pais->estours as $tour)
                                                            <a href="{{ route('estour.show', $tour->slug) }}"
                                                                class="tour-link">
                                                                <span>{{ $tour->nombre }}</span>
                                                                <strong>{{ $tour->dias }}d</strong>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </li>
                            @endforeach


                            <li class="menu-item-has-children">
                                <a title="About Us" href="{{ route('nosotros') }}">Nosotros<i
                                        class="fas fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    <div class="list-item text-center">
                                        <a href="{{ route('nosotros') }}" title="Cusco">
                                            <div style="width: 100%; overflow: hidden; height:110px">
                                                <img src="{{ asset('img/thumbnail/saced-valley-cusco.webp') }}"
                                                    alt="Tours Cusco" loading="lazy">
                                            </div>
                                            <h4 class="title">Nosotros</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="{{ route('certificados') }}" title="Inca trails">
                                            <div style="width: 100%; overflow: hidden; height:110px">
                                                <img src="{{ asset('img/certificados/sernanp.jpg') }}"
                                                    alt="Inca trail tours" loading="lazy">
                                            </div>
                                            <h4 class="title">Certificados & Reconocimientos</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="{{ route('proyectos') }}" title="South of Cusco">
                                            <div style="width: 100%; overflow: hidden; height:110px">
                                                <img src="{{ asset('img/thumb/Picaflor-2.jpg') }}"
                                                    alt="South of Cusco" loading="lazy">
                                            </div>
                                            <h4 class="title">Proyectos Sociales</h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a title="About Us" href="">Gampling <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    <div class="list-item text-center">
                                        <a href="{{ route('glamping') }}" title="Cusco">
                                            <div style="width: 100%; overflow: hidden; height:110px">
                                                <img src="{{ asset('img/thumbnail/saced-valley-cusco.webp') }}"
                                                    alt="Tours Cusco" loading="lazy">
                                            </div>
                                            <h4 class="title">Servicio de Glamping</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="{{ route('certificates') }}" title="Inca trails">
                                            <div style="width: 100%; overflow: hidden; height:110px">
                                                <img src="{{ asset('img/certificados/sernanp.jpg') }}"
                                                    alt="Inca trail tours" loading="lazy">
                                            </div>
                                            <h4 class="title">Reviews</h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('contacto') }}" title="Contactenos">Contacto</a>
                            </li>
                        </ul>

                    </nav>
                </div>
                <div class="header-item item-right" style="flex: 0 0 16%;">
                    <a href="#" id="search-icon" title="Search Tours"><i class="fas fa-search"></i></a>
                    {{-- <a href="{{ isset($entour) ? route('tour.show', $entour->slug) : route('index') }}"
                        class="translate-button">
                        <img src="{{ asset('img/ingles.png') }}" alt="Traducción al inglés Pachatusan"
                            width="25px" title="Translate to English" style="margin-top: 2px; margin-left: 10px">
                    </a> --}}
                    @php
                        $isTour = isset($entour); // Detectamos si estamos en una página de tour en español
                    @endphp
                    <a href="{{ $isTour ? route('tour.show', $entour->slug) : $routeToOtherLang }}"
                        class="translate-button">
                        <img src="{{ asset('img/ingles.png') }}" alt="Traducción al inglés Pachatusan"
                            width="25px" title="Translate to English" style="margin-top: 2px; margin-left: 10px">
                    </a>
                    {{-- <a href="{{ $routeToOtherLang }}" class="translate-button">
                        <img src="{{ asset('img/ingles.png') }}" alt="Cambiar idioma" width="25px"
                            title="Cambiar idioma" style="margin-top: 2px; margin-left: 10px">
                    </a> --}}
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>

                <div id="search-popup" class="search-popup" style="display: none;">
                    <div class="popup-content">
                        <span class="close-popup">&times;</span>
                        <p>Encuentre su destino</p>
                        <form action="{{ route('searches') }}" method="GET">
                            <input type="text" id="search-input" class="search-input" name="query"
                                placeholder="Search..." autocomplete="off">
                            <button type="submit" class="btn btn-sm btn-primary mt-2">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    @yield('contenido')

    <footer class="bg-dark text-white py-4">
        <div class="container py-4">
            <div id="logoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <!-- Cada item del carrusel debe ser un set de logos. Asegúrate de tener 8 logos -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-1 col-2 mb-4">
                                <a href="https://www.aatccusco.com/socios/pachatusantrek-s-a-c" target="_blank"><img
                                        src="{{ asset('img/aatc.png') }}" class="img-fluid" alt="AATC Cusco"></a>
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <a href="https://www.aptae.pe/asociados/" target="_blank">
                                    <img src="{{ asset('img/aptae.png') }}" class="img-fluid" loading="lazy"
                                        alt="Aptae">
                                </a>
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <a href="https://cartuc.org/" target="_blank">
                                    <img src="{{ asset('img/cartuc.png') }}" class="img-fluid" loading="lazy"
                                        alt="Cartuc">
                                </a>
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <a
                                    href="https://www.gob.pe/15106-ministerio-de-comercio-exterior-y-turismo-prevencion-de-la-explotacion-sexual-de-ninas-ninos-y-adolescentes-en-el-ambito-del-turismo-esnna">
                                    <img src="{{ asset('img/codigoesssna.png') }}" class="img-fluid" loading="lazy"
                                        alt="Código ESSSNA">
                                </a>
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <a href="https://visitacusco.gercetur.com.pe/operadores-verificados" target="_blank">
                                    <img src="{{ asset('img/GERCETUR.png') }}" class="img-fluid" loading="lazy"
                                        alt="GERCETUR">
                                </a>
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <a href="https://www.promperu.gob.pe/" target="_blank">
                                    <img src="{{ asset('img/marca-peru.png') }}" class="img-fluid" loading="lazy"
                                        alt="Marca Peru">
                                </a>
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <a href="https://consultasenlinea.mincetur.gob.pe/directoriodeserviciosturisticos/DirPrestadores/DirBusquedaPrincipal"
                                    target="_blank">
                                    <img src="{{ asset('img/mincetur.png') }}" class="img-fluid" loading="lazy"
                                        alt="Mincetur">
                                </a>
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <a href="https://www.packforapurpose.org/">
                                    <img src="{{ asset('img/pfp.png') }}" class="img-fluid" loading="lazy"
                                        alt="PFP">
                                </a>
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <a href="https://www.sernanp.gob.pe/" target="_blank">
                                    <img src="{{ asset('img/sernanp.png') }}" class="img-fluid" loading="lazy"
                                        alt="Sernanp">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-4 contact pt-4">
                    <h4 class="text-white">CONTÁCTENOS:</h4>
                    <p>
                        <i class="fa fa-map-marker"></i> {{-- Urb. Villa Unión Huancaro G-4 Residencial Los Fresnos Dpto
                        B-502 --}}
                        Santiago – Cusco – Perú
                    </p>
                    <p><i class="fa fa-phone fa-sm"></i> (51-84) 231817 </p>
                    <p><i class="fab fa-whatsapp fa-sm"></i> (51-84) 984 103757</p>
                    <p><i class="fa fa-phone fa-sm"></i> (51-84) 984 702859</p>
                    <p><i class="fa fa-envelope fa-sm"></i> jessica@pachatusantrek.com</p>
                </div>
                <div class="col-lg-4 socials pt-4">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="text-white">SOCIALES:</h4>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/pachatusantrekcusco" target="_blank"
                                    class="text-white" title="Facebook">
                                    <i class="fab fa-facebook fa-1x"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/pachatusantrek/" target="_blank"
                                    class="text-white" title="Instagram">
                                    <i class="fab fa-instagram fa-1x"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/@pachatusantrekcusco8587" target="_blank"
                                    class="text-white" title="Youtube">
                                    <i class="fab fa-youtube fa-1x"></i>
                                </a>
                            </li>
                            <h4 class="text-white mt-4">Terminos & Condiciones</h4>
                            <a href="{{ route('terminos') }}" class="text-white"
                                style="text-decoration: none; font-size: 14px;">
                                Terminos y Condiciones
                            </a>
                        </div>
                        <div class="col-6">
                            <h4>TOURCERT:</h4>
                            <p> <img src="{{ asset('img/TourCert.png') }}" class="img-fluid" width="80px"
                                    alt="Tour Cert"> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <img src="{{ asset('img/logo-Pachatusan-Trek-blanco.png') }}" alt="Logo Pachatusan trek"
                        class="img-fluid mb-2" width="220px">
                    <p class="text-justify" style="text-align: justify">
                        PachatusanTrek es el operador turístico de lujo galardonado que está detrás de su experiencia
                        en Sudamérica. Con sede en Cusco, contribuimos a las economías locales, preservando la cultura y
                        el patrimonio y devolviendo algo a la naturaleza.
                    </p>
                </div>
            </div>
        </div>
        <div class="container pt-4" style="border-top:1px solid grey">
            <p class="text-center">
                &copy; {{ date('Y') }} Todos los derechos reservados | Pachatusantrek {{-- | Hecho por
                <a class="linkKantu" href="https://www.facebook.com/kantustudio" target="_blank">Kantu Studio</a> --}}
            </p>
        </div>
    </footer>

    <script src="{{ asset('megamenu/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('body').addClass('scrolled');
            } else {
                $('body').removeClass('scrolled');
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollBtn = document.querySelector('.scroll-down-btn');
            const target = document.querySelector('#empezar');

            scrollBtn.addEventListener('click', function(event) {
                event.preventDefault();
                window.scrollTo({
                    top: target.offsetTop +
                        -70,
                    behavior: 'smooth'
                });
            });
        });

        document.getElementById('search-icon').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            document.getElementById('search-popup').style.display = 'flex';
            document.getElementById('search-input').focus(); // Enfoca el campo de búsqueda
        });

        // Cerrar el popup cuando se hace clic en la "X" o fuera del contenido
        document.querySelector('.close-popup').addEventListener('click', function() {
            document.getElementById('search-popup').style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            var popup = document.getElementById('search-popup');
            if (event.target === popup) {
                popup.style.display = 'none';
            }
        });
    </script>
</body>

</html>
