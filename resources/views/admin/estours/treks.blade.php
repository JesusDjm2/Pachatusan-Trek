@extends('layouts.admines')
@section('contenido')
    <section class="banner-contact">
        <div class="banner-content container">
            <h1>Treks en Perú </h1>
            <h5>
                Camine por el Camino Inca, pero también recorra caminatas alternativas menos transitadas pero igualmente
                impresionantes y camine a lugares como Choquequirao, un impresionante complejo Inca tan importante como
                Machu Picchu, o camine a través de la montaña Salkantay o el impresionante sendero a Lares para continuar
                hasta Machu Picchu. Diríjase a los senderos menos conocidos de Ausangate y Vilcabamba para explorar más
                profundamente en el medio de los Andes y caminar a través de las tierras tradicionales.
            </h5>
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
                                    {{ $tour->dias }} days</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</span>
                            </div>
                            <a href="{{ route('tour.show', $tour->slug) }}" class='button'>Más info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
