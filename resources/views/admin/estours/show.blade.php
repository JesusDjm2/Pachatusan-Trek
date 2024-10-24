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
</style>
@section('contenido')
    @auth
        <a href="{{ route('tours.edit', $tour->id) }}" class="boton-editar" target="_blank">Editar
            Tour</a>
    @endauth
    <section class="bg-light">
        <div class="wrapper">
            <div class="fullscreen-section">
                <picture>
                    <source srcset="{{ asset($tour->imgThumb) }}" media="(max-width: 768px)">
                    <img src="{{ asset($tour->imgFull) }}" alt="{{ $tour->nombre }}" class="fullscreen-img"
                        loading="lazy">
                </picture>

                <div class="content-overlay">
                    <h1>{{ $tour->nombre }}</h1>
                    <p><i class="fa fa-clock"></i> {{ $tour->dias }} {{ $tour->dias == 1 ? 'día' : 'días' }}</p>
                    <p><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</p>
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
                            <a>{{ $tour->nombre }}</a>
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
                                <i class="fa fa-clock-o"></i> {{ $tour->dias }} {{ $tour->dias == 1 ? 'día' : 'días' }}<br>
                                <i class="fa fa-map-marker"></i> {{ $tour->recorrido }}
                            </p>
                        </div>
                        <div class="contenidoInicial" style="margin-top: 2em">
                            {!! $tour->presentacion !!}
                        </div>
                        <div class="tabs mt-4">
                            <button class="tab-button active" data-tab="tab1"><i class="fa fa-list"></i> Itinerario Detallado</button>
                            <button class="tab-button" data-tab="tab2"><i class="fa fa-plus"></i> Incluye</button>
                            {{-- <button class="tab-button" data-tab="tab3"><i class="fa fa-map-marker"></i> Map</button> --}}
                            <button class="tab-button" data-tab="tab4"><i class="fa fa-exclamation"></i> Importante</button>
                        </div>

                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                {!! $tour->itinerario !!}
                            </div>
                            <div id="tab2" class="tab-pane" style="text-align:left">
                                {!! $tour->incluye !!}
                            </div>
                            {{-- <div id="tab3" class="tab-pane">
                                @if ($tour->mapa)
                                    {!! $tour->mapa !!}
                                @endif
                            </div> --}}
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
                            <h3 class="category-title">Categories of tours</h3>
                            @foreach ($categorias as $categoria)
                                <a class="categorias" href="{{ route('category.show', $categoria->slug) }}">
                                    {{ $categoria->nombre }}</a>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="container">
            <div class="row relacionados">
                <h2 class="mt-5">Popular tours</h2>
                @foreach ($tours as $tour)
                    <div class="col-lg-3 tours mb-3">
                        <div class="contImg">
                            <a href='{{ route('tour.show', $tour->slug) }}' class='entry-link'>
                                <img src="{{ asset($tour->imgThumb) }}" class="attachment-post-grid-s size-post-grid-s"
                                    alt="{{ $tour->nombre }}" loading="lazy" style="height: 245px!important" />
                            </a>
                        </div>
                        <div class='info'>
                            <h3>{{ $tour->nombre }}</h3>
                            <p> {{ $tour->descripcionCorta }} </p>
                            <div style="width: 100%;  padding-bottom:50px">
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} days</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i>
                                    {{ $tour->recorrido }}</span>
                            </div>
                            <a href="{{ route('tour.show', $tour->slug) }}" class='button'>More info</a>
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
@endsection
