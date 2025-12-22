@extends('layouts.admines')
@section('metas')
    <title>{{ $categoria->nombre }}</title>
    <meta name="keywords" content="Listado de tour con la categoria: {{ $categoria->nombre }}" />
    <meta name="description" content="Listado de tour con la categoria: {{ $categoria->nombre }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $categoria->nombre }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="{{ url()->current() }}" />
@endsection
@section('contenido')
    @php
        $nombre = strtolower($categoria->nombre);

        if (str_contains($nombre, 'exped')) {
            $bannerClass = 'banner-expeditions';
        } elseif (str_contains($nombre, 'tour')) {
            $bannerClass = 'banner-tours';
        } elseif (str_contains($nombre, 'trek')) {
            $bannerClass = 'banner-treks';
        } else {
            $bannerClass = 'banner-contact';
        }
    @endphp

    <section class="{{ $bannerClass }}">
        {{-- <section class="banner-contact"> --}}
        <div class="banner-content container">
            <h1>{{ $categoria->nombre }}</h1>
            @if ($categoria->nombre == 'Caminatas')
                <h5>
                    Camine por el Camino Inca, pero también recorra caminatas alternativas menos transitadas pero
                    igualmente
                    impresionantes y camine a lugares como Choquequirao, un impresionante complejo Inca tan importante
                    como
                    Machu Picchu, o camine a través de la montaña Salkantay o el impresionante sendero a Lares para
                    continuar hasta Machu Picchu. Diríjase a los senderos menos conocidos de Ausangate y Vilcabamba para
                    explorar más profundamente en el medio de los Andes y caminar a través de las tierras tradicionales.
                </h5>
            @elseif($categoria->nombre == 'Expediciones')
                <h5>
                    Viaje por rutas menos transitadas en los Andes del Sur, vea y experimente lugares poco visitados. Su
                    expedición está acompañada por arrieros, cocineros, tenderos y guías. Estos se convierten en una
                    parte
                    integral de su tripulación y se unen durante la expedición convirtiéndose en un equipo y
                    desarrollando
                    amistades que perdurarán.
                </h5>
            @else
                <h5>
                    Recorra muchos de los lugares importantes de Cusco y el Valle Sagrado que lo rodea. Visite lugares
                    que
                    tienen una importancia religiosa significativa para los incas y las comunidades locales que aún
                    existen
                    allí. Visite Cusco, Sacsayhuaman, el Valle Sagrado – Pisac, Ollantaytambo, Yucay y muchos más de los
                    hermosos pueblos que existen aquí.
                </h5>
            @endif

            <a href="#empezar" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>
    <section class="bg-light contact-section" id="empezar">
        <div class="container">
            <div class="row">
                @foreach ($tours as $tour)
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
@endsection
