@extends('layouts.admin')

@section('metas')

    <title>Inca Trail to Machu Picchu</title>
    <meta name="keywords" content="Inca Trail to Machu Picchu" />
    <meta name="description" content="Inca Trail to Machu Picchu" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Inca Trail to Machu Picchu">
    <meta property="og:type" content="article">
    <meta property="og:image" content="" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@section('contenido')

    <section class="banner-inca">
        <div class="banner-content container">
            <h1>Inca Trail to Machu Picchu</h1>
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

