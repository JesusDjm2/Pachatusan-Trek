@extends('layouts.admin')
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
    {{-- @auth
        <a href="{{ route('tours.edit', $tour->id) }}" class="boton-editar" target="_blank">Editar
            Tour</a>
    @endauth --}}
    @php
        switch ($categoria->id) {
            case 1:
                $bannerClass = 'banner-expeditions';
                $text =
                    'For those seeking an authentic adventure beyond the conventional routes, Pachatusantrek has designed an exclusive selection of expeditions to some of Peru’s least-explored destinations. Experience the magic of Vilcabamba, journey through the sacred landscapes of Ausangate, and discover the Rainbow Mountain from a different perspective. Delve into the deep history of Espiritupampa, connecting Choquequirao with Huancacalle on a journey filled with nature, culture, and mystery. All of this is accompanied by attentive service, comfort at every stage, and high safety standards, so you can enjoy an unforgettable experience.';
                break;
            case 2:
                $bannerClass = 'banner-tours';
                $text =
                    'Discover the most iconic tourist destinations in Peru and neighboring countries such as Bolivia, Brazil, Chile, and Argentina. We design unique travel experiences through Patagonia, the Brazilian Amazon, and the majestic Uyuni Salt Flats, combining adventure, culture, and nature with outstanding service.';
                break;
            case 3:
                $bannerClass = 'banner-treks';
                $text = 'Discover our selection of the most spectacular treks in the mountains of Peru. From short acclimatization experiences in the Sacred Valley to unforgettable routes such as the Inca Trail to Machu Picchu, Choquequirao, Huaran, Lares, Huchuy Qosqo, Ancascocha, and Ausangate, each journey invites you to experience the Andean adventure through breathtaking landscapes, living history, and an authentic connection with nature.

We carefully design each route so you can enjoy a safe, seamless, and memorable experience. We consider altitude, distances, and the ideal hiking pace, combining them with personalized service, attention to detail, and the quality you deserve at every moment of your journey through the mountains.';
                break;
            default:
                $bannerClass = 'banner-contact';
                break;
        }
    @endphp

    <section class="{{ $bannerClass }}">
        <div class="banner-content container">
            <h1>{{ $categoria->nombre }}</h1>
            <h5> {{ $text }} </h5>
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
                                    {{ $tour->dias }} {{ $tour->dias == 1 ? 'day' : 'days' }}</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</span>
                            </div>
                            <a href="{{ route('tour.show', $tour->slug) }}" class='button'>More info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
