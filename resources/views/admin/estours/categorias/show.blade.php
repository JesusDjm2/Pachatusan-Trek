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
                    Descubre nuestra selección de las caminatas más espectaculares en las montañas del Perú. Desde
                    experiencias cortas de aclimatación en el Valle Sagrado hasta rutas inolvidables como el Camino Inca a
                    Machu Picchu, Choquequirao, Huarán, Lares, Huchuy Qosqo, Ancascocha y Ausangate, cada recorrido te
                    invita a vivir la aventura andina con paisajes únicos, historia viva y una conexión auténtica con la
                    naturaleza.

                    Diseñamos cada ruta cuidadosamente para que disfrutes una experiencia segura, fluida y memorable.
                    Consideramos la altitud, las distancias y el ritmo ideal de caminata, combinándolo con un servicio
                    personalizado, atención al detalle y la calidad que mereces en cada momento de tu viaje por las
                    montañas.
                </h5>
            @elseif($categoria->nombre == 'Expediciones')
                <h5>
                    Para quienes buscan una aventura auténtica y fuera de las rutas convencionales, Pachatusantrek ha
                    diseñado una exclusiva selección de expediciones hacia destinos poco explorados del Perú. Vive la magia
                    de Vilcabamba, recorre los paisajes sagrados del Ausangate y descubre la Montaña de Colores desde una
                    perspectiva diferente. Adéntrate en la historia profunda de Espiritupampa, conectando Choqekiraw con
                    Huancacalle en una travesía llena de naturaleza, cultura y misterio. Todo ello acompañado por un
                    servicio cuidadoso, comodidad en cada etapa y altos estándares de seguridad para que disfrutes una
                    experiencia inolvidable.
                </h5>
            @else
                <h5>
                    Descubre los destinos turísticos más emblemáticos del Perú y de países vecinos como Bolivia, Brasil,
                    Chile y Argentina. Diseñamos experiencias de viaje únicas por la Patagonia, la Amazonía brasileña y el
                    majestuoso Salar de Uyuni, combinando aventura, cultura y naturaleza con un servicio de excelencia.
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
