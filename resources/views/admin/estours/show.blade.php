@extends('layouts.admines')
@section('metas')
    <title>{{ $tour->nombre }} - {{ $tour->dias }} days</title>
    <meta name="keywords" content="{{ $tour->keywords }}" />
    <meta name="description" content="{{ $tour->descripcionCorta }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $tour->nombre }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ asset($tour->imgThumb) }}" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
<style>
    .tab-content .tab-pane ul {
        list-style-type: disc;
        text-align: left
    }

    #tab4>ul {
        list-style-type: disc;
        text-align: left
    }

    .tab-content>#tab1>h2 {
        font-size: 1.5em;
        font-weight: bold;
        position: relative;
        margin-top: 1em;
    }

    .tab-content>#tab1>h3 {
        font-size: 1.2em;
        font-weight: bold;
    }

    .tab-content>#tab1>h2::after {
        content: '';
        display: block;
        width: 50px;
        height: 2px;
        background-color: #32659a;
        position: absolute;
        bottom: -5px;
        left: 0;
    }

    .tab-content>#tab1>p>img {
        padding: 0.5em;
    }

    .carousel-inner img {
        width: 100%;
        height: auto;
    }

    .carousel-indicators li {
        list-style: none;
        /* Elimina cualquier estilo de lista */
    }

    .carousel-indicators li::before {
        content: '';
        /* Elimina el contenido numérico */
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: black;
        /* Cambia el color del punto si es necesario */
        display: block;
    }

    @media (max-width: 768px) {
        .carousel-inner img {
            max-height: 300px;
        }
    }
	
</style>
@section('contenido')
    @auth
        <a href="{{ route('estours.edit', $tour->id) }}" class="boton-editar" target="_blank">Editar
            Tour</a>
    @endauth
    <section class="bg-light">
        <div class="wrapper">
            <div class="fullscreen-section">
               <picture>
                    <source srcset="{{ asset($tour->imgThumb) }}" alt="{{$tour->nombre}}" media="(max-width: 768px)">
                    <img src="{{ asset($tour->imgFull) }}" alt="{{ $tour->nombre }}" class="fullscreen-img">
                </picture>  

                <div class="content-overlay">
                    <h1>{{ $tour->nombre }}</h1>
                    <p><i class="fa fa-clock"></i> {{ $tour->dias }} {{ $tour->dias == 1 ? 'día' : 'días' }}</p>
                    <p><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</p>
                    @if (session('flash'))
                        <div class="alert alert-{{ session('flash')['type'] }} alert-dismissible fade show" role="alert">
                            {{ session('flash')['message'] }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div id="separador"></div>
        <div class="container">
            <div class="migas pt-3 pb-3">
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-2" id="display2">
                        <div class="linea"></div>
                    </div>
                    <div class="col-lg-6 col-sm-12 text-center">
                        <span><a href="{{ route('index') }}">Inicio</a> <span>⮞</span>
                            <span>
                                @foreach ($tour->categorias as $cat)
                                    <a href="{{ route('category.show', $cat->slug) }}">{{ $cat->nombre }}</a>
                                    @if (!$loop->last)
                                        -
                                    @endif
                                @endforeach
                            </span><span>⮞</span>
                            <a title="{{ $tour->nombre }}">{{ $tour->nombre }}</a>
                    </div>
                    <div class="col-lg-3 col-sm-2" id="display2">
                        <div class="linea"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div data-onepage-title="Services" style="text-align:justify" data-onepage-slug="services"
                        class="vc_row-fluid vc_custom_1461248392126">
                        <div class="text-center">
                            <h2 class="dancingShow mt-4">{{ $tour->nombre }}</h2>
                            <div id="separadordjm2"></div>
                            <p class="text-center">
                                <i class="fa fa-clock-o"></i> {{ $tour->dias }}
                                {{ $tour->dias == 1 ? 'día' : 'días' }}<br>
                                <i class="fa fa-map-marker"></i> {{ $tour->recorrido }}
                            </p>
                        </div>
                        <div class="contenidoInicial" style="margin-top: 2em">
                            {!! $tour->presentacion !!}
                        </div>
                        <div class="tabs mt-4 d-flex flex-wrap">
                            <button class="tab-button active" data-tab="tab1"><i class="fa fa-list"></i> Itinerario
                                </button>
                            <button class="tab-button" data-tab="tab2"><i class="fa fa-plus"></i> Incluye</button>
                            <button class="tab-button" data-tab="tab3">
                                <i class="fa fa-images"></i> Galería
                            </button>
                            <button class="tab-button" data-tab="tab4"><i class="fa fa-exclamation"></i> Importante</button>
                        </div>

                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                {!! $tour->itinerario !!}
                            </div>
                            <div id="tab2" class="tab-pane" style="text-align:left">
                                {!! $tour->incluye !!}
                            </div>
                            <div id="tab3" class="tab-pane">
                                <div class="row">
                                     @if (!empty($tour->galeria))
    @foreach (explode(',', $tour->galeria) as $index => $imagen)
        <div class="col-3 mb-3">
            <a href="#galeria" data-toggle="modal" data-slide-to="{{ $index }}">
                <img src="{{ asset($imagen) }}" 
                     alt="{{ $tour->nombre }} {{ $index + 1 }}"
                     class="img-thumbnail"
                     style="width: 100%; height: 100px; object-fit: cover;" loading="lazy">
            </a>
        </div>
    @endforeach
@else
    <p>No photo gallery</p>
@endif
                                </div>
                                <div id="galeria" class="modal fade" tabindex="-1" role="dialog" aria-label="Galeria de fotos">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div id="carouselGaleria" class="carousel slide" data-bs-ride="carousel">
                                                    <!-- Indicadores (puntos) -->
                                                    <ol class="carousel-indicators">
                                                        @foreach (explode(',', $tour->galeria) as $index => $imagen)
                                                            <li data-bs-target="#carouselGaleria"
                                                                data-bs-slide-to="{{ $index }}"
                                                                class="{{ $loop->first ? 'active' : '' }}"></li>
                                                        @endforeach
                                                    </ol>
                                                    <!-- Imágenes del carrusel -->
                                                    <div class="carousel-inner">
                                                        @foreach (explode(',', $tour->galeria) as $index => $imagen)
                                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                <img src="{{ asset($imagen) }}"
                                                                    alt="{{ $tour->nombre }} {{ $index + 1 }}"
                                                                    class="d-block w-100 img-fluid"
                                                                    style="object-fit: cover; max-height: 500px;"
                                                                    loading="lazy">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <!-- Controles con flechas de FontAwesome -->
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselGaleria" data-bs-slide="prev">
                                                        <i class="fas fa-chevron-left"
                                                            style="color: black; font-size: 30px;"></i>
                                                        <span class="visually-hidden">Anterior</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselGaleria" data-bs-slide="next">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: black; font-size: 30px;"></i>
                                                        <span class="visually-hidden">Siguiente</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab4" class="tab-pane">
                                {!! $tour->importante !!}
                            </div>
                        </div>

                        <div class="socialesShare mb-2 mt-4">
                            <h3>Share</h3>
                            <div id="separadordjm2"></div>
                            <div class="redes-sociales">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('/' . $tour->slug)) }}"
                                    target="_blank" title="Compartir en Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="mailto:?subject=Recomendación de tour&body={{ urlencode('Te recomiendo este increíble tour: ' . url('/' . $tour->slug)) }}"
                                    title="Compartir por correo electrónico">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a href="https://www.pinterest.com/pin/create/button/?url={{ urlencode(url('/' . $tour->slug)) }}"
                                    target="_blank" title="Compartir en Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a href="whatsapp://send?text={{ urlencode(url('/' . $tour->slug)) }}"
                                    title="Compartir en WhatsApp" data-action="share/whatsapp/share">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url('/' . $tour->slug)) }}"
                                    target="_blank" title="Compartir en Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 booking">
                    <div class="card sticky-card">
                        <div class="text-center">
                            {{-- <h4 class="price-title">
                                <small class="small-text">From:</small> ${{ $tour->precio }}.00
                            </h4> --}}
                        </div>
                        @include('layouts.booking-castellano')

                        <div class="similares">
                            <h3 class="category-title">Categorias de tours</h3>
                            @foreach ($categorias as $categoria)
                                <a class="categorias" href="{{ route('categoria.show', $categoria->slug) }}">
                                    {{ $categoria->nombre }}</a>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="container">
            <div class="row relacionados">
                <h2 class="mt-5">Vea más tours</h2>
                @foreach ($tours->random(4) as $tour)
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
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} {{ $tour->dias == 1 ? 'día' : 'días' }}</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i>
                                    {{ $tour->recorrido }}</span>
                            </div>
                            <a href="{{ route('estour.show', $tour->slug) }}" class='button'>Más info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContent = document.querySelectorAll('.tab-pane');
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContent.forEach(content => content.classList.remove('active'));
                const tabId = button.getAttribute('data-tab');
                button.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('a[data-slide-to]').forEach(item => {
            item.addEventListener('click', function() {
                const slideTo = this.getAttribute('data-slide-to');
                $('#carouselGaleria').carousel(parseInt(slideTo));
                $('#galeria').modal('show');
            });
        });
    </script>
@endsection
