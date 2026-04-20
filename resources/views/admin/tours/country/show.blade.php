@extends('layouts.admin')

@section('metas')
    <title>{{ $country->nombre }} - Destinos en PachatusanTrek</title>
    <meta name="description"
        content="Explora todos nuestros tours en {{ $country->nombre }}. Descubre las mejores experiencias de viaje." />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $country->nombre }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset($country->imagen ?? 'img/default-country.jpg') }}" />
    <meta name="author" content="PachatusanTrek" />
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('contenido')
    @auth
        <a href="{{ route('countries.edit', $country->id) }}" class="boton-editar" target="_blank">
            Editar País
        </a>
    @endauth

    <section class="bg-light">
        <div class="wrapper">
            <div class="fullscreen-section">
                <picture>
                    <source srcset="{{ asset($country->imagen ?? 'img/default-country.jpg') }}" alt="{{ $country->nombre }}"
                        media="(max-width: 768px)">
                    <img src="{{ asset($country->imagen ?? 'img/default-country.jpg') }}" alt="{{ $country->nombre }}"
                        class="fullscreen-img">
                </picture>
                <div class="content-overlay">
                    <h1>{{ $country->nombre }}</h1>
                    <p><i class="fa fa-globe"></i> Descubre nuestros tours en {{ $country->nombre }}</p>
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
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Tours en {{ $country->nombre }}</h2>
                    <p>Descubre todas nuestras experiencias disponibles en este destino</p>
                </div>
            </div>

            <div class="row">
                @forelse ($country->tours as $tour)
                    <div class="col-lg-4 tours mb-3">
                        <div class="contImg">
                            <a href='{{ route('tour.show', $tour->slug) }}' class='entry-link'>
                                <img src="{{ asset($tour->imgThumb) }}" class="attachment-post-grid-s size-post-grid-s"
                                    alt="{{ $tour->nombre }}" loading="lazy" style="height: 245px!important" />
                            </a>
                        </div>
                        <div class='info'>
                            <h3>{{ $tour->nombre }}</h3>
                            <p> {{ Str::limit($tour->descripcionCorta, 100) }} </p>
                            <div style="width: 100%; padding-bottom:50px">
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} {{ $tour->dias == 1 ? 'day' : 'days' }}</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</span>
                            </div>
                            <a href="{{ route('tour.show', $tour->slug) }}" class='button'>More info</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <div class="alert alert-info">
                            <h4>Próximamente</h4>
                            <p>Estamos preparando nuevos tours en {{ $country->nombre }}. ¡Vuelve pronto!</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
