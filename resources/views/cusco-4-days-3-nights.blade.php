@extends('layouts.general-en')
@section('metas')
    <title>Cusco 4 days - Machu Picchu - Sacred Valley!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="4 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury" />
    <meta name="description" content="We present you a detailed tour for 4 days during your stay in Cusco." />
    <meta property="og:url" content="https://www.andeanexclusive.com/cusco-4-days-3-nights">
    <meta property="og:title" content="Cusco 4 days">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/cusco-4-days-3-nights" />
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
                                        <a href="{{ route('cusco-4-dias') }}">
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('cusco-4-dias') }}">
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
                                                                <h1> <?php $tour = 'CUSCO 4 DAYS / CUSCO SENSATIONAL';
                                                                echo $tour; ?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Cusco - Sacred
                                                                    Valley - Machupicchu </p>
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
                    <a>Cusco 4 days</a>
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
                                <a href="cusco-6-days-5-nights" class="button">Cusco for 6 days</a>
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
                    <h2 id="titulo1">Cusco Sensational</h2>
                    <div id="separadordjm2"></div>
                    <i class="fa fa-clock-o"></i> 4 days<br>
                    <i class="fa fa-map-marker"></i> Cusco - Sacred Valley - Machupicchu
                    <br>
                    <i class="fa fa-exclamation-circle"></i> Reserve 30 days in advance
                </center><br>
                <h5>Cusco</h5>
                <i>World Navel </i><br>
                This program has the fusion of the Inca and Spanish architectural styles
                throughout the Sacred Valley and the city of Cusco. The richness of its
                people in their folklore and crafts, their way of life, and their clothing
                make it a place that will leave you with unforgettable memories.
                Come enjoy the beauty of the local people and all the traditions here.
                </p>
                <h5>Overview</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>DAY 01</th>
                            <td>Visit Sacsayhuamán and Tour the city of Cusco.</td>
                        </tr>
                        <tr>
                            <th>DAY 02</th>
                            <td>Visit the Sacred Valley of the Incas. </td>

                        </tr>
                        <tr>
                            <th>DAY 03</th>
                            <td>Machu Picchu The Secret of the Incas </td>
                        </tr>
                        <tr>
                            <th>DAY 04</th>
                            <td>Transfer to the airport. Flight back home. </td>
                        </tr>
                    </tbody>
                </table>
                <h5>Detailed Itineray:</h5>
                <h2>Day 1. Visit Sacsayhuamán and Tour the city of Cusco.</h2>
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
                </p>
                <img src="{{ asset('img/tours/cusco-maravilloso.jpg') }}" alt="Wonderful Cusco" loading="lazy"
                    class="img-fluid">
                <br><br>
                <h2>Day 2. Visit the Sacred Valley of the Incas.</h2>
                <p> Departure from the hotel the next morning in the direction of Pisac
                    and Ollantaytambo to see the techniques that the Incas used to take
                    care of food on the terraces, then go to the salt flats of Maras, a
                    thermal spring in the upper part of the valley that discharges a
                    small stream of salt-laden water, which is diverted into salt pans
                    and evaporated to produce a salt that is harvested for the local
                    population.<br>
                    We got to see them from the road and then descend to them.<br>

                    Then we will go to visit the magnificent agricultural terraces of
                    Moray where different levels of terraces are carved into deep
                    bowls/sinks that were used by the Inca to experiment and adapt
                    Andean crops to altitude, then we will have the option to enjoy a
                    nice walk or just drive to visit the town of Maras with the
                    spectacular view of the mountains and enjoy our picnic lunch
                    prepared by a nice outdoor catering in the middle of the
                    landscapes.<br>
                    <strong> Lodging in Urubamba. </strong>
                </p>
                <img src="{{ asset('img/galeria/ollantaytambo-sacred-valley-of-the-incas-exclusive.webp') }}"
                    alt="Valle Sagrado de los incas" loading="lazy" class="img-fluid"><span>Picture: Ollantaytambo
                    fortress, Sacred
                    Valley of the incas</span><br>


                <h2>Day 3. Machu Picchu The Secret of the Incas</h2>
                <p>A full day in the wonder of the Peruvian world, to see the majesty
                    and spirituality of the place, learn some history and spend the best
                    time at the top of the manifestation of the culture of the Incas.
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
                <img src="{{ asset('img/galeria/machu-picchu-exclusivo.png') }}" alt="Exclusive Machu Picchu"
                    loading="lazy" class="img-fluid"><br><br>

                <h2>Day 4. Transfer to the airport. Flight back home. </h2>
                <p>Your Andean Exclusive representative will visit your hotel 2 hours
                    before the departure of your flight and will accompany you to the
                    airport to give you your final assistance in boarding your flight.
                </p>
                <h3>Include:</h3>
                <ul>
                    <li>Tickets entrance for City tour</li>
                    <li>Tickets entrance for Machu Picchu</li>
                    <li>Bus to machu Picchu</li>
                    <li>All private transport</li>
                    <li>Private tour guide</li>
                    <li>Snack in route</li>
                </ul>
                <h3>Not Include</h3>
                <ul>
                    <li>Tips</li>
                    <li>Food not specified in the program</li>
                </ul>
                <div class="form text-center"> <br>
                    @include('layouts.payments')
                    <h5>Share</h5>
                    <!---------redes sociales------------------------>
                    <script type="text/javascript"
                        src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                        async="async"></script>
                    <div class="sharethis-inline-share-buttons"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                        nonce="RA0e6tQN"></script>
                    <div class="fb-comments" data-href="https://andeanexclusive.com/cusco-4-days-3-nights"
                        data-width="100%" data-numposts="5"></div>

                    <!---------Fin redes sociales------------------------>
                </div><br>
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
                                <a href="cusco-6-days-5-nights" class="button">Cusco for 6 days</a>
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
@endsection
