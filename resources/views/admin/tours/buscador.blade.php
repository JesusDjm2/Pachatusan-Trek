@extends('layouts.admin')
@section('contenido')
    <section class="banner-contact">
        <div class="banner-content">
            <h1>Search Results for "{{ $query }}"</h1>
            <h5>
                {{ $tours->count() }} {{ $tours->count() == 1 ? 'result' : 'results' }} found for "{{ $query }}"
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
                @if ($tours->isEmpty())
                    <form action="{{ route('search') }}" method="GET">
                       <div class="row m-3">
                        <input type="text" id="search-input" class="form-control form-control-sm" name="query" placeholder="No tours found, try again..." autocomplete="off" autofocus>
                        <button type="submit" class="btn btn-sm btn-primary">Search</button>
                       </div>
                    </form>
                @else
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
                                    {{-- <p class="text-center"> <i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</p> --}}
                                    <span style="float: left"><i class="fa fa-clock-o"></i>
                                        {{ $tour->dias }} days</span>
                                    <span style="float: right"><i class="fa fa-map-marker"></i>
                                        {{ $tour->recorrido }}</span>
                                    {{-- <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->precio }}</span> --}}
                                </div>
                                <a href="{{ route('tour.show', $tour->slug) }}" class='button'>More info</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
