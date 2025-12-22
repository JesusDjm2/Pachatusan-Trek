@extends('layouts.admines')

@section('contenido')

    <section class="banner-expeditions">
        <div class="banner-content container">
            <h1>Expediciones en Perú </h1>
            <h5>
                Viaje por rutas menos transitadas en los Andes del Sur, vea y experimente lugares poco visitados. Su

                expedición está acompañada por arrieros, cocineros, tenderos y guías. Estos se convierten en una parte

                integral de su tripulación y se unen durante la expedición convirtiéndose en un equipo y desarrollando

                amistades que perdurarán.

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

@endsection

