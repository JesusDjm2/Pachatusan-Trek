@extends('layouts.general-en')
@section('metas')
    <title>Cusco 6 days - Machu Picchu - Sacred Valley! travel to Cusco this 2022</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="6 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury" />
    <meta name="description"
        content="We present you a detailed tour for 6 days during your stay in Cusco. enjoy an exclusive tour for Perú" />
    <meta property="og:title" content="Cusco 6 days - Machu Picchu - Sacred Valley! travel to Cusco this 2022">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://andeanexclusive.com/cusco-6-days-5-nights" />
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
                                        <a href="{{ route('cusco-6-dias') }}">
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('cusco-6-dias') }}">
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
                                                                <h1><?php $tour = 'PERÚ 6 DAYS / Authentic Cusco';
                                                                echo $tour; ?></h1>
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

            <div class="col-lg-8">
                <div data-onepage-title="Services" style="text-align:justify" data-onepage-slug="services"
                    class="vc_row-fluid vc_custom_1461248392126">
                    <div class="text-center">
                        <h2 id="titulo1">Cusco authentic</h2>
                        <div id="separadordjm2"></div>
                        <p class="text-center"><i class="fa fa-clock-o"></i> 6 days</p>
                        <p class="text-center"><i class="fa fa-map-marker"></i> Lima - Valle Sagrado - Machupicchu -
                            Cusco </p>
                        <p class="text-center" style="color: #0c8178">Reserve 30 days in advance</p>
                    </div>
                    <h5>Cusco:</h5>
                    <p>
                        <i>City of hidden treasures</i><br>
                        Nature and history together, this is at the heart of Peru's attraction, especially in Cusco, a
                        place where visitors can relax and explore to enrich themselves, at the same time, create
                        authentic connections, in one of the most amazing places in South America.
                    </p>
                    <h5>Overview Cusco 6 days</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Arrival in Lima - Flight to Cusco- Trip to the Sacred Valley</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Maras Moray & Salt Mines</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Machu Picchu The Secret of the Incas </td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Machupicchu – optional walks</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Sacsayhuamán – City</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>Transfer to the airport. Flight back home.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <div class="tabs">
                        <button class="tab-button active" data-tab="tab1"><i class="fa fa-list"></i> Detailed
                            Itinerary</button>
                        <button class="tab-button" data-tab="tab2"><i class="fa fa-plus"></i> Includes</button>
                        <button class="tab-button" data-tab="tab2"><i class="fa fa-map-marker"></i> Map</button>
                        <button class="tab-button" data-tab="tab3"><i class="fa fa-exclamation"></i> Important</button>
                    </div>

                    <div class="tab-content">
                        <div id="tab1" class="tab-pane active">
                            <h3 class="h2-tours">Day 1. CITY TOUR AROUND CUSCO AND OUTSKIRTS</h3>
                            <p>Your tour begins in Lima where our representative will be waiting for you at your arrival
                                flight
                                to help you with your connecting flight to Cusco. Shortly after takeoff, the plane climbs
                                over
                                the Andes where the mountain views are spectacular.</p>
                            <img src="{{ asset('img/galeria/valle-sagrado.jpg') }}" width="100%"
                                alt="Sacred Valley of the Incas" loading="lazy">
                            <i>Picture: Archaeological site of Pisaq</i><br><br>
                            <p>
                                Upon arrival in Cusco, our private guide will be waiting for us. Our journey begins towards
                                the
                                Sacred Valley. The first stop is <strong>Awanacancha,</strong> a farm with llamas, alpacas
                                and
                                vicuñas. The tour
                                continues through the Corao River canyon, with spectacular views of the Urubamba Valley. We
                                descend to the bottom of the valley to the typical town of<strong> Pisac,</strong> to visit
                                the
                                archaeological
                                site and the typical town. We will have lunch at a local restaurant in the Sacred Valley of
                                the
                                Incas.<br>
                                <strong>Lodging in Urubamba.</strong>
                            </p>

                            <h2 class="h2-tours">Day 2. Maras Moray & Salt Mines</h2>
                            <p>
                                Departure from the hotel in the direction of visiting the magnificent agricultural terraces
                                of
                                Moray where different levels of terraces are carved into deep bowls/sinks that were used by
                                the
                                Incas to experiment and adapt Andean crops to altitude, then we will have the option to
                                enjoy a
                                nice walk or just drive to visit the town of Maras with the spectacular view of the
                                mountains
                                and enjoy our picnic lunch prepared by a nice outdoor caterer in the middle of the
                                landscapes.
                                <br><br>
                                After lunch, we will drive to visit the salt flats of Maras. A hot spring at the top of the
                                valley discharges a small stream of salt-laden water, which is diverted into salt pans and
                                evaporated to produce a salt that is harvested by local people. We got to see them from the
                                road
                                and then descend to them. Return to the hotel.<br>
                                <strong>Lodging in Urubamba.</strong>
                            </p>
                            <img loading="lazy" alt="Salineras de Maras" width="100%"
                                src="{{ asset('img/galeria/maras-moray-tour-4-dias-cusco-exclusive.webp') }}">
                            <i>Picture: Salineras in Maras</i><br><br>

                            <h2 class="h2-tours">Day 3. Machu Picchu The Secret of the Incas</h2>
                            <p>
                                09:00 am (approx.) Departure from the hotel to the city of Ollantaytambo, to see the
                                spectacular
                                temple-fortress and town of Ollantaytambo, a site that has changed little since the time of
                                the
                                Incas. Huge stones were carried more than 16 kilometers to the site, and the ramps of the
                                building are still there.<br><br>

                                At 10:00 am, we will continue to the train station to board the train to Machupicchu. The
                                train
                                journey is one of the most spectacular in the world. The railway line follows the Urubamba
                                River
                                through the spectacular Vilcanota Canyon to the Lost City of the Incas. We will have 25
                                minutes;
                                to drive to visit the Sacred Center. Our expert guide will share with us the latest
                                information
                                and personal ideas about Machupicchu.<br>
                                <strong>Lodging in Aguas Calientes.</strong>
                            </p>
                            <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                                src="{{ asset('img/galeria/visita-machu-picchu.webp') }}">
                            <i>Picture: Machu Picchu view</i><br><br>
                            <h2 class="h2-tours">Day 4. Machupicchu – optional walks</h2>
                            <p>
                                In the morning we will have optional walks, such as Puerta del Sol, Huaynapicchu, or the
                                Temple
                                of the Moon, which vary in length and difficulty but are undoubtedly a great option to enjoy
                                nature around this unique site.
                            </p>
                            <h3>Huayna Picchu:</h3>
                            <p>
                                It is the imposing mountain behind the actual site of Machupicchu. For many people, climbing
                                Huayna Picchu is one of the highlights when visiting Machu Picchu. you will see how the Inca
                                cut
                                some steps out of the rocks and as it winds around the side of a mountain you will see
                                Machupicchu from different angles, the views are impressive and give you an impression of
                                the
                                magnitude of the site. Before reaching the top you will also have to go through a tunnel
                                carved
                                into the rocks and the higher you get the more structures. Some structures and terraces are
                                built-in impossible places that speak to your imagination.
                            </p>
                            <img src="{{ asset('img/galeria/guia-de-viajes-huayna-picchu-travel.webp') }}" width="100%"
                                alt="Huayna Picchu mountain" loading="lazy">
                            <i>Pisture: Huayna Picchu mountain</i><br><br>
                            <h3>Machu Picchu Mountain:</h3>
                            <p>Mountain trek offers incomparable views of the famous Inca sanctuary and panoramic views of
                                the
                                surrounding mountain landscape. At its summit, Inca priests once performed rituals on
                                special
                                dates, as well as liturgical greetings to the Salkantay Apu, one of the mightiest mountains
                                in
                                the Peruvian Andes. As the trail approaches the base of Machu Picchu Mountain, the steps
                                become
                                steeper and more challenging.<br><br>
                                <strong>Buffet lunch at the Sanctuary Lodge hotel restaurant.</strong><br><br>

                                Free time for independent exploration Board the bus for the 30-minute drive to Aguas
                                Calientes.
                                Collect your luggage and head to the train station to board the Vistadome train to the Poroy
                                train station, where our private car will be waiting for you for a 30-minute ride to our
                                hotel
                                in Cusco.<br><br>

                                <strong>Accommodation in Cusco.</strong>
                            </p>

                            <h2 class="h2-tours">Day 5. Sacsayhuamán – City</h2>
                            <p>
                                In the morning we will visit Sacsayhuamán, which translates as "Decorated Head of the Puma."
                                This was the ruling palace of the Inca containing a temple where the living God led his
                                people.
                                It was called a fortress by Europeans due to the immense pieces of stone that were used in
                                its
                                construction, the oral tradition of Cusco states that around 70,000 people worked in the
                                palace
                                for 50 years. It's lunchtime.
                                <img src="{{ asset('img/galeria/cusco-maravilloso.jpg') }}" width="100%"
                                    alt="Cusco City" loading="lazy">
                                <i>Picture: City of Cusco</i><br><br>
                                After lunch we walk the streets and marvel at the flawless Inca stonework, we imagine a time
                                and
                                place when the Incas once had a great empire. We tour the colonial Plaza de Armas, visiting
                                the
                                Cathedral, which contains one of the largest samples of mestizo paintings in the city from
                                the
                                18th century. Following the Cathedral, we will visit the Inca Historical Museum for a good
                                overview of the history of the Incas.<br><br>

                                <strong>Accommodation in Cusco.</strong>
                            </p>

                            <h2 class="h2-tours">Day 6. Transfer to the airport. Flight back home.</h2>
                            <p>
                                Your Andean Exclusive representative will pick you up from your hotel 2 hours before your
                                flight
                                departure and accompany you to the airport.
                            </p>

                        </div>
                        <div id="tab2" class="tab-pane">
                            <ul>
                                <li>All tickets to the archaeological centers to visit</li>
                                <li>Entrance fees to the citadel of Machu Picchu</li>
                                <li>Private transportation during your entire trip</li>
                                <li>Snack and water available all the time in the private transportationSnack and water
                                    available all the time in the private transportation</li>
                                <li>Private tour guide</li>
                                <li>Personal assistance throughout your visit</li>
                                <li>Breakfast included</li>
                                <li>Lunch on the 01, 02 and 04</li>
                            </ul>
                        </div>
                        <div id="tab3" class="tab-pane">
                            <ul>
                                <li>Tips</li>
                                <li>Flights Lima / Cusco / Lima.</li>
                                <li>Complete meals (lunches and dinners not specified in the
                                    program).</li>
                            </ul>
                        </div>
                    </div>
                    <script>
                        // Obtén los elementos de los botones y el contenido de las tabs
                        const tabButtons = document.querySelectorAll('.tab-button');
                        const tabContent = document.querySelectorAll('.tab-pane');

                        // Agrega el evento click a cada botón de tab
                        tabButtons.forEach(button => {
                            button.addEventListener('click', () => {
                                // Elimina la clase "active" de todos los botones y contenido de las tabs
                                tabButtons.forEach(btn => btn.classList.remove('active'));
                                tabContent.forEach(content => content.classList.remove('active'));

                                // Agrega la clase "active" al botón clickeado y muestra el contenido de la tab correspondiente
                                const tabId = button.getAttribute('data-tab');
                                button.classList.add('active');
                                document.getElementById(tabId).classList.add('active');
                            });
                        });
                    </script>
                    <style>
                        .tabs {
                            display: flex;
                            justify-content: center;
                            border-radius: 5px
                        }

                        .tab-button {
                            flex-grow: 1;
                            background-color: transparent;
                            border: 1px solid #80808080;
                            padding: 10px 20px;
                            cursor: pointer;
                        }

                        .tab-button.active {
                            background-color: #0c8178;
                            color: #fff;
                        }

                        .tab-content .tab-pane {
                            display: none;
                            margin-top: 1em
                        }

                        .tab-content .tab-pane.active {
                            display: block;
                            width: 100%;
                        }
                    </style>


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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/cusco-6-days-5-nights"
                            data-width="100%" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br><br>
                </div>
            </div>
            <div class="col-lg-4" style="padding: 2em;position: sticky;top:3em">
                <div>
                    <div class="card">
                    </div>
                    <div id="similares">
                        <h4 class="text-center">Similar Tours</h4>
                        <div class="separador"></div>
                        <a href="peru-5-days-4-nights"><span>⮞</span> Perú for 5 days</a>
                        <a href="machupicchu-accelerate"><span>⮞</span> Machu Picchu Full Day</a>
                        <a href="{{ route('peru-6-days') }}"><span>⮞</span> Perú for 6 days</a>
                        <a href="peru-8-days-7-nights"><span>⮞</span> Perú for 8 days</a>
                        <a href="peru-15-days-tour"><span>⮞</span> Perú for 15 days</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
