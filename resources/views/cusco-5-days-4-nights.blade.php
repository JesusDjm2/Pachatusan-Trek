@extends('layouts.general-en')
@section('metas')
    <title>Cusco 5 days - Machu Picchu - Sacred Valley - City Tour</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="5 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury, cusco 5 days visit, travel cusco for 5 days, private tour cusco" />
    <meta name="description" content="We present you an exclusive and detailed tour for 5 days during your stay in Cusco." />
    <meta property="og:title" content="Cusco 5 days - Machu Picchu - Sacred Valley - City tour">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/cusco-5-days-4-nights" />
@endsection
@section('contenido')
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-wrapper">
                        <div class="site-branding">
                            <a href="/" rel="home" class="logo-text-link"><img src="img/andean-exclusive-logo.png"
                                    id="logo"></a>
                        </div>
                        <nav class="main-nav">
                            <ul class="one-page-menu">
                                @include('layouts.menu')
                                <li id="display">
                                    <a href="{{ route('cusco-5-dias') }}">
                                        <button type="button" class="botondjm">Español</button>
                                    </a>
                                </li>
                                <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr' target="_blank">+51
                                        979 721 194</a></li>
                                <li id="display2">
                                    <a href="{{ route('cusco-5-dias') }}">
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
    <section class="section-content no-padding">
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
                                                                <h1><?php $tour = 'CUSCO 5 DAYS / MAJESTIC CUSCO';
                                                                echo $tour; ?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Cusco - Sacred
                                                                    Valley - Maras - Moray -
                                                                    Machupicchu </p>
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
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <div id="separador"></div>
                                <div class="row" id="rowdjm">
                                    <div class="location">
                                        <div class="row text-center">
                                            <div class="col-lg-3 col-sm-2" id="display2">
                                                <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 text-center"><a href="/">Home</a>
                                                /
                                                <a href="experiences">Populars</a> /
                                                <a>Cusco tour 5 days</a>
                                            </div>
                                            <div class="col-lg-3 col-sm-2" id="display2">
                                                <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="separador"></div>
                                    <div class="col-lg-3" id="display2">
                                        <h4 class="text-center">Similar Tours</h4>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="cusco-4-days-3-nights" class="button">Cusco for 4
                                                days</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="machupicchu-accelerate" class="button">Machu Picchu
                                                Full day</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="cusco-6-days-5-nights" class="button">Cusco for 6
                                                days</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="peru-8-days-7-nights" class="button">Perú for 8
                                                days</a>
                                        </div>
                                        <div id="similares">
                                            <div id="separador"></div>
                                            <a href="peru-18-days-tour" class="button">Perú for 18 days</a>
                                        </div>
                                        <div id="separador"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <center>
                                            <h2 id="titulo1">CUSCO 5 DAYS TOUR</h2>
                                            <div id="separadordjm2"></div>
                                            <i class="fa fa-clock-o"></i> 5 days<br>
                                            <i class="fa fa-map-marker"></i> Lima - Sacred Valley - Machu Picchu
                                            - Cusco </p>
                                            <i class="fa fa-exclamation-circle"></i> Reserve 30 days in advance

                                        </center><br>
                                        <h5>Cusco</h5>
                                        <i> City of hidden treasures
                                        </i>
                                        <p>
                                            Nature and history together, this is at the heart of Peru's attraction,
                                            especially in Cusco, a place where visitors can relax and explore to
                                            enrich themselves, at the same time, create authentic connections, in
                                            one of the most amazing places in South America.

                                        </p>

                                        <h5>Overview</h5>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>DAY 01</th>
                                                    <td>Arrival in Lima - Flight to Cusco- Trip to the Sacred Valley
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>DAY 02</th>
                                                    <td>Maras Moray & Salt Mines </td>

                                                </tr>
                                                <tr>
                                                    <th>DAY 03</th>
                                                    <td>Machu Picchu The Secret of the Incas</td>
                                                </tr>
                                                <tr>
                                                    <th>DAY 04</th>
                                                    <td>Machupicchu – optional walks</td>
                                                </tr>
                                                <tr>
                                                    <th>DAY 05</th>
                                                    <td> Transfer to the airport. Flight back home. </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h5>Detailed itinerary Cusco 6 days:</h5>
                                        <h2>Day 1. Arrival in Lima - Flight to Cusco- Trip to the Sacred Valley</h2>
                                        <p> Your tour begins in Lima where our representative will be waiting for
                                            you at your arrival flight to help you with your connecting flight to
                                            Cusco. Shortly after takeoff, the plane climbs over the Andes where the
                                            mountain views are spectacular.<br>

                                            <img class="img-fluid" loading="lazy" alt="Sitio Arqueologico de pisaq"
                                                src="{{ asset('img/galeria/valle-sagrado.jpg') }}"><i>
                                                Foto:Archaeological site of Pisaq</i><br><br>

                                            Upon arrival in Cusco, our private guide
                                            will be waiting for us. Our journey begins towards the Sacred Valley.
                                            The first stop is <strong> Awanacancha</strong>, a farm with llamas,
                                            alpacas and vicuñas.
                                            The tour continues through the Corao River canyon, with spectacular
                                            views of the Urubamba Valley. We descend to the bottom of the valley to
                                            the typical town of <strong>Pisac</strong>, to visit the archaeological
                                            site and the
                                            typical town. We will have lunch at a local restaurant in the Sacred
                                            Valley of the Incas.
                                        <p style="text-align: left"><strong>Lodging in Urubamba.</strong></p>
                                        </p>

                                        <h2>Day 2. Maras Moray & Salt Mines </h2>
                                        <p> Departure from the hotel in the direction of visiting the magnificent
                                            agricultural terraces of <strong>Moray</strong> where different levels
                                            of terraces are
                                            carved into deep bowls/sinks that were used by the Incas to experiment
                                            and adapt Andean crops to altitude, then we will have the option to
                                            enjoy a nice walk or just drive to visit the town of Maras with the
                                            spectacular view of the mountains and enjoy our picnic lunch prepared by
                                            a nice outdoor caterer in the middle of the landscapes.<br><br>
                                            After lunch, we
                                            will drive to visit the <strong>salt flats of Maras</strong>. A hot
                                            spring at the top of
                                            the valley discharges a small stream of salt-laden water, which is
                                            diverted into salt pans and evaporated to produce a salt that is
                                            harvested by local people. We got to see them from the road and then
                                            descend to them. Return to the hotel.</p>
                                        <p style="text-align: left"><strong>Lodging in Urubamba.</strong></p>
                                        <img class="img-fluid" loading="lazy" alt="Maras Salt mines"
                                            src="{{ asset('img/galeria/maras-moray-tour-4-dias-cusco-exclusive.webp') }}"><i>Picture:
                                            Salineras of Maras</i><br><br>

                                        <h2>Day 3. Machu Picchu The Secret of the Incas</h2>
                                        <p> 09:00 am (approx.) Departure from the hotel to the city of
                                            <strong>Ollantaytambo</strong>, to see the spectacular temple-fortress
                                            and town of
                                            Ollantaytambo, a site that has changed little since the time of the
                                            Incas. Huge stones were carried more than 16 kilometers to the site, and
                                            the ramps of the building are still there.<br><br>
                                            At 10:00 am, we will continue
                                            to the train station to board the train to <strong>Machupicchu.</strong>
                                            The train
                                            journey is one of the most spectacular in the world. The railway line
                                            follows the Urubamba River through the spectacular Vilcanota Canyon to
                                            the Lost City of the Incas. We will have 25 minutes; to drive to visit
                                            the Sacred Center. Our expert guide will share with us the latest
                                            information and personal ideas about Machupicchu. <br>
                                            <strong> Lodging in Aguas Calientes.</strong>
                                        </p>
                                        <img class="img-fluid" loading="lazy" alt="Machu Picchu exclusive"
                                            src="{{ asset('img/galeria/visita-machu-picchu.webp') }}"><br><br>

                                        <h2>Day 4. Machupicchu – optional walks</h2>

                                        <p> In the morning we will have optional walks, such as Puerta del Sol,
                                            Huaynapicchu, or the Temple of the Moon, which vary in length and
                                            difficulty but are undoubtedly a great option to enjoy nature around
                                            this unique site.</p>

                                        <h3> Huayna Picchu:</h3>
                                        <p> It is the imposing mountain behind the
                                            actual site of Machupicchu. For many people, climbing Huayna Picchu is
                                            one of the highlights when visiting Machu Picchu. you will see how the
                                            Inca cut some steps out of the rocks and as it winds around the side of
                                            a mountain you will see Machupicchu from different angles, the views are
                                            impressive and give you an impression of the magnitude of the site.
                                            Before reaching the top you will also have to go through a tunnel carved
                                            into the rocks and the higher you get the more structures. Some
                                            structures and terraces are built-in impossible places that speak to
                                            your imagination.</p>
                                        <img src="{{ asset('img/galeria/guia-de-viajes-huayna-picchu-travel.webp') }}"
                                            width="100%" alt="Huayna Picchu Tour" loading="lazy"><i>Picture:
                                            Huayna Picchu mountain</i><br>
                                        <h3> Machu Picchu Mountain: </h3>
                                        <p>Mountain trek offers
                                            incomparable views of the famous Inca sanctuary and panoramic views of
                                            the surrounding mountain landscape. At its summit, Inca priests once
                                            performed rituals on special dates, as well as liturgical greetings to
                                            the Salkantay Apu, one of the mightiest mountains in the Peruvian Andes.
                                            As the trail approaches the base of Machu Picchu Mountain, the steps
                                            become steeper and more challenging.<br><br>
                                            <strong> Buffet lunch at the Sanctuary Lodge
                                                hotel restaurant.</strong>
                                            <br><br>
                                            Free time for independent exploration Board the bus
                                            for the 30-minute drive to Aguas Calientes. Collect your luggage and
                                            head to the train station to board the Vistadome train to the Poroy
                                            train station, where our private car will be waiting for you for a
                                            30-minute ride to our hotel in Cusco. <br><br>
                                            <strong> Accommodation in Cusco.</strong>

                                        <h2>Day 5. Transfer to the airport. Flight back home.</h2>
                                        <p>Your Andean Exclusive representative will pick you up from your hotel 2
                                            hours before your flight departure and accompany you to the airport.</p>
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
                                        <div id="separador"></div>

                                        <!-----Booking---------->
                                        <div class="form text-center">
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
                                            <div class="fb-comments"
                                                data-href="https://andeanexclusive.com/cusco-5-days-4-nights"
                                                data-width="100%" data-numposts="5"></div>

                                            <!---------Fin redes sociales------------------------>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                    </div>
                                </div>

                            </div>
                            <div data-onepage-title="Services" data-onepage-slug="services" id="display"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1461227943574">
                                        <div class="wpb_wrapper">
                                            <div class='heading  text-center'>
                                                <div id="separador"></div>
                                                <h3>Similar Tours</h3>
                                                <div id="separadordjm"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759 text-center">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner vc_custom_1461228417147">
                                                    <div class="wpb_wrapper">
                                                        <div class='travel-item'>
                                                            <div class='entry-img'>
                                                                <a class='entry-link' href="cusco-4-days-3-nights"><img
                                                                        src="img/thumbnail/destino-per.JPG" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <div class='readmore'>
                                                                    <a href='cusco-4-days-3-nights' class='button'>Cusco
                                                                        for 4 days</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner vc_custom_1461228442150">
                                                    <div class="wpb_wrapper">
                                                        <div class='travel-item'>
                                                            <div class='entry-img'>
                                                                <a class='entry-link' href="cusco-6-days-5-nights"><img
                                                                        width="400" height="400"
                                                                        src='img/thumbnail/cusco-01.JPG'
                                                                        class="attachment-post-grid-s size-post-grid-s"
                                                                        alt="Cusco tours 6 days" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <div class='readmore'>
                                                                    <a href="cusco-6-days-5-nights" class='button'>Cusco
                                                                        for 6 days</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner vc_custom_1461228449756">
                                                    <div class="wpb_wrapper">
                                                        <div class='travel-item'>
                                                            <div class='entry-img'>
                                                                <a class='entry-link' href="peru-10-days-9-nights">
                                                                    <img width="400" height="400"
                                                                        src='img/thumbnail/llama-peru.JPG'
                                                                        class="attachment-post-grid-s size-post-grid-s"
                                                                        alt="Cusco sensational" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <div class='readmore'>
                                                                    <a class='button' href="peru-10-days-9-nights">Peru
                                                                        for 10
                                                                        days</a>
                                                                </div>
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
    </section>
@endsection
