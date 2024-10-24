@extends('layouts.admin')
@section('contenido')
    <section class="banner-contact">
        <div class="banner-content container">
            <h1>Treks in Perú </h1>
            <h5>
                Trek the Inca Trail but also trail on less travelled but equally impressive alternative treks & trek to
                places like Choquequirao, a stunning Incan complex as important as Machu Picchu, or trek through Salkantay
                mountain passes or the stunning Lares trail to continue through to Machu Picchu. Or head to the lesser known
                trails of Ausangate & Vilcabamba to explore deeper into the middle of the Andes and trek through traditional
                heartlands.
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
