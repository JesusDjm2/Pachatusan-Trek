@extends('layouts.admines')
@section('contenido')
    {{-- <section class="banner-section">
        <div class="banner-content">
            <h1>Con la protección de la Madre Tierra</h1>
            <h5>Vive experiencias inolvidables, vive aventuras sorprendentes y conoce lugares llenos de magia y misticismo.
            </h5>
            <a href="#empezar" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section> --}}
    <section class="banner-section">
        <div class="background-layer next"></div>
        <div class="background-layer"></div>
        <div class="banner-content">
            <h1>Con la protección de la Madre Tierra</h1>
            <h5>Vive experiencias inolvidables, vive aventuras sorprendentes y conoce lugares llenos de magia y misticismo.
            </h5>
            <a href="#empezar" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>
    <style>
        .banner-section {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .background-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .background-layer.next {
            opacity: 1;
        }

        .banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #ffffff;
        }

        .btn-branding {
            background-color: #0c8178;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-branding:hover {
            background-color: #09ccbd;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const bannerSection = document.querySelector(".banner-section");
            const backgroundLayers = bannerSection.querySelectorAll(".background-layer");

            const largeImages = [
                "../img/carusel/Pachatusan-Trek-1.webp",
                "../img/carusel/Pachatusan-Trek-2.webp",
                "../img/carusel/Pachatusan-Trek-3.webp",
                "../img/carusel/Pachatusan-Trek-4.webp",
                "../img/carusel/Pachatusan-Trek-5.webp",
                "../img/carusel/Pachatusan-Trek-6.webp"
            ];

            const smallImages = [
                "../img/carusel/Pachatusan-Trek-1-thumb.webp",
                "../img/carusel/Pachatusan-Trek-2-thumb.webp",
                "../img/carusel/Pachatusan-Trek-3-thumb.webp",
                "../img/carusel/Pachatusan-Trek-4-thumb.webp",
                "../img/carusel/Pachatusan-Trek-5-thumb.webp",
                "../img/carusel/Pachatusan-Trek-6-thumb.webp"
            ];

            let currentIndex = 0;
            let activeLayer = 0;

            function getImageSource() {
                if (window.innerWidth <= 768) {
                    return smallImages;
                } else {
                    return largeImages;
                }
            }

            let images = getImageSource();
            backgroundLayers[0].style.backgroundImage = `url(${images[currentIndex]})`;
            backgroundLayers[1].style.backgroundImage = `url(${images[(currentIndex + 1) % images.length]})`;

            function changeBackground() {
                currentIndex = (currentIndex + 1) % images.length;
                const nextLayer = (activeLayer + 1) % 2;

                images = getImageSource();

                backgroundLayers[nextLayer].style.backgroundImage = `url(${images[currentIndex]})`;

                backgroundLayers[activeLayer].classList.remove("next");
                backgroundLayers[nextLayer].classList.add("next");

                activeLayer = nextLayer;
            }

            setTimeout(() => {
                setInterval(changeBackground, 4000);
            }, 1000);

            window.addEventListener("resize", () => {
                images = getImageSource();
                backgroundLayers[0].style.backgroundImage = `url(${images[currentIndex]})`;
                backgroundLayers[1].style.backgroundImage =
                    `url(${images[(currentIndex + 1) % images.length]})`;
            });
        });
    </script>
    <section id="empezar" class="decorative-box d-flex align-items-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-start align-self-center">
                    <h3 style="font-family: 'Dancing Script', cursive;">Con permiso de los Apus</h3>
                    <p>
                        Nuestra pasión y vocación de servicio nos han llevado a desarrollar nuestras actividades
                        profesionales en diferentes escenarios naturales de nuestro país. Estos sentimientos y habilidades
                        han sido la principal motivación para iniciar Pachatusantrek.
                    </p>
                    <a href="{{ route('about') }}" class="btn btn-sm btn-success">Leer más</a>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('img/staff/about-us-pachatusan.jpg') }}" alt="Staff Pachatusan Trek"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-image d-flex flex-column justify-content-center align-items-center text-center text-white">
        <div class="container">
            <div class="row">
                <h5 class="pb-2">EXPERIENCIA</h5>
                <h3 class="pb-5">Diferentes tipos de experiencias, ¿cuál quieres vivir?</h3>
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">TREKKING</h5>
                            <p class="card-text text-dark">Recorreremos los senderos ancestrales de la cordillera de los
                                Andes, donde la historia, la flora, la fauna y la geografía llenarán nuestros sentidos.
                                Caminaremos entre las divinidades andinas que serán testigos silenciosos de nuestras propias
                                historias en las montañas..</p>
                            <a href="{{ route('treks') }}" class="btn btn-primary btn-sm">Ver Tours</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">EXPEDICIONES</h5>
                            <p class="card-text text-dark">
                                Te llevaremos a destinos remotos donde podremos ver y sentir la fuerza de las montañas
                                andinas. Esta experiencia nos llevará desde las tierras altas hasta los bosques montañosos
                                cercanos a la llanura amazónica, zonas llenas de mitos, historia, flora, fauna y una cultura
                                sorprendente.
                            </p>
                            <a href="{{ route('expeditions') }}" class="btn btn-primary btn-sm">Ver Tours</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">TOURS</h5>
                            <p class="card-text text-dark">
                                Disfruta y conoce los principales destinos turísticos de las regiones más importantes del
                                Perú. Nuestro servicio te garantiza una experiencia inolvidable en la costa, sierra y selva.
                                Contamos con las mejores opciones de viaje para que conozcas el Perú al máximo.
                            </p>
                            <a href="{{ route('entours') }}" class="btn btn-primary btn-sm">View tours</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mainTours bg-light">
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2 class="dancing">Tours más populares:</h2>
                </div>
                @foreach ($firstTours as $tour)
                    <div class="col-lg-4 tours mb-3">
                        <div class="contImg">
                            <a href='{{ route('estour.show', $tour->slug) }}' class='entry-link'>
                                <img src="{{ asset($tour->imgThumb) }}" class="attachment-post-grid-s size-post-grid-s"
                                    alt="{{ $tour->nombre }}" loading="lazy" style="height: 245px!important" />
                            </a>
                        </div>
                        <div class='info'>
                            <h3>{{ $tour->nombre }}</h3>
                            <p> {{ $tour->descripcionCorta }} </p>
                            <div style="width: 100%;  padding-bottom:50px">
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} {{ $tour->dias == 1 ? 'día' : 'días' }}</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</span>
                            </div>
                            <a href="{{ route('estour.show', $tour->slug) }}" class='button'>Más info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="parallax-banner">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="dancing-center">Choqekiraw – Huancacalle 10 Días </h2>
            <p class="mt-4">
                El camino Inka utilizado por Manco Inka II y su ejército, en su huida de los españoles, pasa por estos 2 magníficos sitios arqueológicos en el Vilcabamba.
            </p>
            <a href="https://pachatusantrek.com/Choqekiraw-Huancacalle-10d" class="btn">Explorar ahora</a>
        </div>
    </section>
    <section class="mainTours bg-light">
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2 class="dancing">Tours más populares:</h2>
                </div>
                @foreach ($nextTours as $tour)
                    <div class="col-lg-3 tours mb-3">
                        <div class="contImg">
                            <a href='{{ route('estour.show', $tour->slug) }}' class='entry-link'>
                                <img src="{{ asset($tour->imgThumb) }}" class="attachment-post-grid-s size-post-grid-s"
                                    alt="{{ $tour->nombre }}" loading="lazy" style="height: 245px!important" />
                            </a>
                        </div>
                        <div class='info'>
                            <h3>{{ $tour->nombre }}</h3>
                            <p> {{ $tour->descripcionCorta }} </p>
                            <div style="width: 100%;  padding-bottom:50px">
                                <p class="text-center"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</p>
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} {{ $tour->dias == 1 ? 'día' : 'días' }}</span>
                                <span style="float: right"><i class="fa fa-usd"></i>
                                    {{ $tour->precio }}.00</span>
                            </div>
                            <a href="{{ route('estour.show', $tour->slug) }}" class='button'>More info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="review-section">
        <div class="overlay d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="dancing-center">Reseñas</h2>
                    </div>
                    <div id="carouselReviews" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($reviews as $key => $review)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="review text-center text-white px-3 px-md-5">
                                        <div class="mb-3">
                                            @if ($review->image)
                                                <img src="{{ asset($review->image) }}" alt="Imagen del Cliente"
                                                    class="rounded-circle mx-auto d-block" style="width: 80px; height: 80px; object-fit: cover;">
                                            @else
                                                <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white mx-auto"
                                                    style="width: 80px; height: 80px;">
                                                    <i class="fas fa-user fa-2x"></i>
                                                </div>
                                            @endif
                                            <h5 class="mt-3 mb-1">{{ $review->name }}</h5>
                                            <div class="text-warning mb-1">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa{{ $i < $review->rating ? 's' : 'r' }} fa-star"></i>
                                                @endfor
                                            </div>
                                            <small class="text-white-50 d-block">
                                                <i class="far fa-calendar-alt me-1"></i>
                                                Fecha de viaje: {{ $review->travel_date ? $review->travel_date->translatedFormat('M Y') : 'N/A' }}
                                            </small>
                                        </div>
                                        <p class="mt-3 review-text" style="max-width: 800px; margin: 0 auto; font-style: italic;">
                                            "{{ $review->comment }}"
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            @if ($reviews->isEmpty())
                                <div class="carousel-item active">
                                    <div class="review text-center text-white">
                                        <p class="mt-3">No hay reseñas disponibles aún. ¡Sé el primero en dejar una!</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselReviews"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselReviews"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button type="button" class="btn btn-branding" data-bs-toggle="modal"
                            data-bs-target="#reviewModal">
                            Dejar una reseña
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form action="{{ route('reviews.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="reviewModalLabel">Deja tu reseña</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start text-dark">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name" class="form-label">Nombre Completo</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="travel_date" class="form-label">Fecha de Viaje</label>
                                                <input type="date" class="form-control" id="travel_date"
                                                    name="travel_date" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="travel_with" class="form-label">¿Con quién viajó?</label>
                                                <input type="text" class="form-control" id="travel_with"
                                                    name="travel_with" placeholder="Familia, amigos, pareja..." required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="rating" class="form-label">Puntuación</label>
                                                <select class="form-select" id="rating" name="rating" required>
                                                    <option value="5">5 Estrellas</option>
                                                    <option value="4">4 Estrellas</option>
                                                    <option value="3">3 Estrellas</option>
                                                    <option value="2">2 Estrellas</option>
                                                    <option value="1">1 Estrella</option>
                                                </select>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="comment" class="form-label">Tu Comentario</label>
                                                <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="image" class="form-label">Foto (Opcional)</label>
                                                <input type="file" class="form-control" id="image" name="image"
                                                    accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-branding">Enviar Reseña</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
