@extends('layouts.general-en')
@section('metas')
    <title>Cusco 3 days tour for machu Picchu - Machu Picchu Accelerate</title>
    <meta name="keywords" content="Cusco tours, Luxury Cusco, Peru tours, Machu Picchu luxury" />
    <meta name="description" content="We present you a detailed tour for 3 days during your stay in Cusco." />
    <meta property="og:url" content="https://www.andeanexclusive.com/machupicchu-accelerate">
    <meta property="og:image" content="https://andeanexclusive.com/img/Machu-Picchu-exclusive.jpg" />
    <meta property="title" content="Cusco 3 days - Machu Picchu Accelerate">
    <meta property="og:type" content="article">
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/machupicchu-accelerate" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="/" rel="home" class="logo-text-link"><img
                                        src="img/andean-exclusive-logo.png" id="logo"></a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu')
                                    <li id="display">
                                        <a href="{{ route('machupicchu-acelerado') }}">
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('machupicchu-acelerado') }}">
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                </ul>
                                <a href="javascript:;" id="mobile-menu"><span></span></a>
                                <a href="javascript:;" id="close-menu"></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <article class="blog-item blog-single">
                        <div class="entry-excerpt">
                            <div data-vc-full-width="true" data-vc-full-width-init="false" data-onepage-title="Home"
                                data-onepage-slug="home"
                                class="vc_row wpb_row days01 vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1461317698190">
                                        <div class="wpb_wrapper">
                                            <div class='carousel-headings '>
                                                <div class='swiper-container'>
                                                    <div class='swiper-wrapper'>
                                                        <div class='swiper-slide'>
                                                            <div class='cover-text ph5 text-light text-center pv8 pvb0'>
                                                                @if (session()->has('flash'))
                                                                    <center>
                                                                        <div class="alert alert-success" id="alerta"
                                                                            style="width: 60%;">
                                                                            {{ session()->get('flash') }}<button
                                                                                type="button" onclick="bye()"
                                                                                style="float: right;">X</button>
                                                                        </div>
                                                                    </center>
                                                                @endif
                                                                <h1><?php $tour="Machu Picchu Accelerated"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Machupicchu -
                                                                    Cusco - Sacred Valley
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div id="separador"></div>
    <div class="container">
        <div class="location">
            <div class="row text-center">
                <div class="col-lg-3 col-sm-2" id="display2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 text-center"><a href="{{ route('index') }}">Home</a> /
                    <a href="{{ route('experiences') }}">Popular</a> /
                    <a>Cusco tour for 6 days</a>
                </div>
                <div class="col-lg-3 col-sm-2" id="display2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" id="display2">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div data-onepage-title="Services" data-onepage-slug="services"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                            <h4 class="text-center">Similar Tours</h4>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-5-days-4-nights" class="button">Perú for 5 days</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="machupicchu-accelerate" class="button">Machu Picchu Full Day</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="{{ route('peru-6-days') }}" class="button">Perú for 6 days</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-8-days-7-nights" class="button">Perú for 8 days</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-15-days-tour" class="button">Perú for 15 days</a>
                            </div>
                            <div id="separador"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <center>
                    <h2 id="titulo1">Machu Picchu Accelerated </h2>
                    <div id="separadordjm2"></div>
                    <p class="text-center"><i class="fa fa-clock-o"></i> 3 days</p>
                    <p class="text-center"><i class="fa fa-map-marker"></i> Cusco - Machu Picchu</p>
                    <p class="text-center" style="color: #0c8178">Reserve 30 days in advance </p>
                </center>
                <h5>Machupicchu</h5>
                <i>Hidden City of the Incas </i> <br>
                <p>
                    This program can show the largest manifestation of the Inca culture.
                    Large and impressive stone blocks united without any amalgamation form
                    one of the most important religious, political and cultural centers of
                    the Inca empire. A place where you can feel the energy and peace that
                    you need. All covered by the history and techniques of mystic farming.
                </p><br><br>
                <h5>Overview</h5>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>DAY 01</th>
                            <td>Saqsayhuaman and Cusco City </td>
                        </tr>
                        <tr>
                            <th>DAY 02</th>
                            <td>Machupicchu Full Day </td>

                        </tr>
                        <tr>
                            <th>DAY 03</th>
                            <td>Trip Back Home</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="h2-tours">Detailed Itinerary Cusco 3 days:</h2>
                <h3>Day 1. Visit to Saqsayhuamán and city tour of Cusco</h3>
                <p>In the afternoon of your arrival, we will visit Sacsayhuamán, which
                    translates as "Decorated Head of the Puma." This was the ruling
                    palace
                    of the Inca that contained a temple where the living god led his
                    people.
                    It was called a fortress by Europeans due to the immense pieces of
                    stone
                    that were used in its construction, the oral tradition of Cusco
                    states
                    that around 70,000 people worked in the palace for 50 years.<br>
                    It's lunchtime. Afterward, we walk through the main streets and
                    marvel
                    at the flawless Inca stonework, and imagine a time and place when
                    the
                    Inca once had a great empire.<br>
                    <strong>Accommodation in Cusco.</strong>
                </p><br>

                <img src="https://andeanexclusive.com/img/galeria/cusco-maravilloso.webp" alt="Wonderful Cusco"
                    loading="lazy" class="img-fluid"><span>Picture: Main Square - Cusco</span><br><br>

                <h3>Day 2. Machupicchu Full Day </h3>
                <p>A full day in the wonder of the Peruvian world, to see the majesty
                    and spirituality of the place, learn some history and spend the best
                    time at the top of the manifestation of the culture of the Incas.
                </p>
                <img src="https://andeanexclusive.com/img/galeria/visita-machu-picchu.webp"
                    alt="Machu Picchu exclusivo" loading="lazy" class="img-fluid"><br><br>
                <p>
                    09:00 am (approx.) Depart from the hotel to the city of
                    Ollantaytambo, to see the spectacular temple-fortress and town of
                    Ollantaytambo, a site that has changed little since the days of the
                    Incas. Huge stones were carried more than 16 kilometers to the site,
                    and the ramps of the building are still there.<br>
                    10:00 a.m. We will continue to the train station to board the train
                    to Machupicchu.<br>
                    The train journey is one of the most spectacular in the world. The
                    railway line follows the Urubamba River through the spectacular
                    Vilcanota Canyon to the Lost City of the Incas. <br>We will have 25
                    minutes; to drive to visit the Sacred Center. Our expert guide will
                    share with us the latest information and personal ideas about
                    Machupicchu. <br>
                    Hop on the bus for the 30-minute drive to Aguas Calientes. Collect
                    luggage and head to the train station to board the Vistadome train to
                    Poroy train station, where our private car will be waiting for you for a
                    30-minute ride to our hotel in Cusco. <br><br>
                    <strong>Lodging in Cusco. </strong>
                </p>

                <h3>Day 3. Transfer to the airport. Flight back home. </h3>
                <p>Your Andean Exclusive representative will visit your hotel 2 hours
                    before the departure of your flight and will accompany you to the
                    airport to give you your final assistance in boarding your flight.
                </p>

                <div class="form text-center">
                    <!---------redes sociales------------------------>
                    <script type="text/javascript"
                        src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                        async="async"></script>
                    <div class="sharethis-inline-share-buttons"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                        nonce="RA0e6tQN"></script>
                    <div class="fb-comments" data-href="https://andeanexclusive.com/machupicchu-accelerate"
                        data-width="100%" data-numposts="5"></div>

                    <!---------Fin redes sociales------------------------>
                </div><br><br>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="display">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <h4 class="text-center">Similar Tours</h4>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-5-days-4-nights" class="button">Perú for 5 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="machupicchu-accelerate" class="button">Machu Picchu Full Day</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="{{ route('peru-6-days') }}" class="button">Perú for 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-8-days-7-nights" class="button">Perú for 8 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-15-days-tour" class="button">Perú for 15 days</a>
                                </div>
                                <div id="separador"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
