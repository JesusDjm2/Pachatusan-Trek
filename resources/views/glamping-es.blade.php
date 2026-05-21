@extends('layouts.admines')
@section('metas')
    <title>{{ $meta_title ?? 'Equipo de camping &mdash; Pachatusantrek' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Equipo de glamping y campamento Pachatusantrek: REI, Eureka, The Pett, Travel Chair, filtrado Katadyn, convenio Clínica O2, ley de porteadores, Camino Inca.' }}">
    <meta name="keywords" content="{{ $meta_keywords ?? 'glamping, camping, Andes, porteador, Carpa, Cusco' }}">
@endsection
@section('contenido')
    <section class="banner-glamping">
        <div class="banner-content container">
            <h1>Glamping en los Andes</h1>
            <p>Experiencia de lujo, equipamiento e infraestructura al detalle</p>
            @include('partials.glamping-lang-link')
            <a href="#empezar" class="scroll-down-btn" aria-label="Bajar al contenido principal">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>

    @include('glamping.body-es')
@endsection
