<!DOCTYPE html>
<html>

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
</head>

<body>
    <!-- header start -->
    <div class="container-fluid contactInfo">
        <p><i class="fa fa-phone"></i> Llamar <strong> +51 984 103 757</strong> | <i class="fa fa-envelope"></i> <a
                href="mailto:info@pachatusantrek.com">info@pachatusantrek.com</a></p>
    </div>
    <header class="header">
        <div class="container">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="{{ route('inicio') }}">
                            <img src="{{ asset('img/logo-pachatusan-trek.png') }}" alt="Logo Pachatusan Trek"
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
                        <ul class="menu-main">
                            <li class="menu-item-has-children">
                                <a href="{{ route('trekses') }}">Caminatas <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    @foreach ($globalTreksEs as $tour)
                                        <div class="list-item text-center">
                                            <a href="{{ route('tour.show', $tour->slug) }}">
                                                <div style="width: 100%; overflow: hidden; height:110px">
                                                    <img src="{{ asset($tour->imgThumb) }}" alt="{{ $tour->nombre }}">
                                                </div>
                                                <h4 class="title">{{ $tour->nombre }}</h4>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('expediciones') }}">Expediciones <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    @foreach ($globalExpeditionsEs as $tour)
                                        <div class="list-item text-center">
                                            <a href="{{ route('tour.show', $tour->slug) }}">
                                                <div style="width: 100%; overflow: hidden; height:110px">
                                                    <img src="{{ asset($tour->imgThumb) }}" alt="{{ $tour->nombre }}">
                                                </div>
                                                <h4 class="title">{{ $tour->nombre }}</h4>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('tourses') }}">Tours <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    @foreach ($globalToursEs as $tour)
                                        <div class="list-item text-center">
                                            <a href="{{ route('tour.show', $tour->slug) }}">
                                                <div style="width: 100%; overflow: hidden; height:110px">
                                                    <img src="{{ asset($tour->imgThumb) }}" alt="{{ $tour->nombre }}">
                                                </div>
                                                <h4 class="title">{{ $tour->nombre }}</h4>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a>Nosotros <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul class="mx-auto">
                                        <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                                        <li><a href="{{ route('certificados') }}">Certificados & Reconocimientos</a>
                                        </li>
                                        <li><a href="{{ route('proyectos') }}">Proyectos Sociales</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('contacto') }}">Contacto</a>
                            </li>
                        </ul>

                    </nav>
                </div>
                <div class="header-item item-right">
                    <a href="#" id="search-icon"><i class="fas fa-search"></i></a>
                    <a href="{{ route('index') }}" class="translate-button">
                        <img src="{{ asset('img/ingles.png') }}" alt="Traducción al español Pachatusan" width="25px"
                            title="Translate to english" style="margin-top: 2px; margin-left: 10px">
                    </a>
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
                        {{-- <input type="text" id="search-input" class="search-input" placeholder="Search..."> --}}
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
                                <img src="{{ asset('img/aatc.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <img src="{{ asset('img/aptae.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <img src="{{ asset('img/cartuc.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <img src="{{ asset('img/codigoesssna.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <img src="{{ asset('img/GERCETUR.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <img src="{{ asset('img/marca-peru.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <img src="{{ asset('img/mincetur.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <img src="{{ asset('img/pfp.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-1 col-4 mb-2">
                                <img src="{{ asset('img/sernanp.png') }}" class="img-fluid">
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
                                <a href="https://www.facebook.com/tu-pagina-facebook" target="_blank"
                                    class="text-white">
                                    <i class="fab fa-facebook fa-1x"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/tu-pagina-instagram" target="_blank"
                                    class="text-white">
                                    <i class="fab fa-instagram fa-1x"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/tu-canal-youtube" target="_blank"
                                    class="text-white">
                                    <i class="fab fa-youtube fa-1x"></i>
                                </a>
                            </li>
                        </div>
                        <div class="col-6">
                            <h4>TOUR CERT:</h4>
                            <p> <img src="{{ asset('img/TourCert.png') }}" class="img-fluid" width="80px"> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <img src="{{ asset('img/logo-pachatusan-trek.png') }}" alt="Logo Pachatusan trek"
                        class="img-fluid" width="220px">
                    <p class="text-justify" style="text-align: justify">
                        Pachatusan Trek es el operador turístico de lujo galardonado que está detrás de su experiencia
                        en Sudamérica. Con sede en Cusco, contribuimos a las economías locales, preservando la cultura y
                        el patrimonio y devolviendo algo a la naturaleza.
                    </p>
                </div>
            </div>
        </div>
        <div class="container pt-4" style="border-top:1px solid grey">
            <p class="text-center">
                &copy; {{ date('Y') }} Todos los derechso reservados | Pachatusan Trek | Hecho por
                <a class="linkKantu" href="https://www.facebook.com/kantustudio" target="_blank">Kantu Studio</a>
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
