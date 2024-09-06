@extends('layouts.general-en')
@section('metas')
    <title>Enjoy the luxury Hiram Bingham Train to Machu Picchu</title>
    <meta name="keywords" content="Cusco tours, Luxury Cusco, Hiram Bingham, luxury train" />
    <meta name="description"
        content="Head to Machu Picchu in 1st Class while aboard the delightful Belmond Hiram Bingham Train." />
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/Hiram-bingham.jpg" />
    <meta property="og:url" content="https://www.andeanexclusive.com/Hiram_bingham">
    <meta property="og:title" content="Enjoy the luxury Hiram Bingham Train to Machu Picchu">
    <meta property="og:type" content="webside">
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/Hiram_bingham" />
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
                                        <a href="{{ route('hiram-bingham-es') }}">
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('hiram-bingham-es') }}">
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
                                    class="vc_row wpb_row hiram vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1><?php $tour = 'HIRAM BINGHAM LUXURY TRAIN';
                                                                    echo $tour; ?></h1>
                                                                    <p><i class="fa fa-map-marker"></i> Cusco - Perú
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
                                <div data-onepage-title="Services" data-onepage-slug="services"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                    <div id="separador"></div>
                                    <div class="row" id="rowdjm">
                                        <div class="location">
                                            <div class="row text-center">
                                                <div class="col-lg-3 col-sm-2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-10"><a href="/">Home</a> /
                                                    <a href="experiences">Popular</a> /
                                                    <a>Hiram Bingham Train</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="display2">
                                            <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                                                <div class="card">
                                                    <div data-onepage-title="Services" data-onepage-slug="services"
                                                        class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                                        <h4 class="text-center">Similar Tours</h4>
                                                        <div id="similares">
                                                            <div id="separador"></div>
                                                            <a href="sacred_valley" class="button">Sacred Valley
                                                                Tour</a>
                                                        </div>
                                                        <div id="similares">
                                                            <div id="separador"></div>
                                                            <a href="urubamba-market" class="button">Urubamba
                                                                Market Tour</a>
                                                        </div>
                                                        <div id="similares">
                                                            <div id="separador"></div>
                                                            <a href="puno-3-days-tour" class="button">Puno for 3
                                                                days</a>
                                                        </div>
                                                        <div id="similares">
                                                            <div id="separador"></div>
                                                            <a href="peru-7-days-6-nights" class="button">Perú for
                                                                7 days</a>
                                                        </div>
                                                        <div id="similares">
                                                            <div id="separador"></div>
                                                            <a href="peru-10-days-9-nights" class="button">Perú
                                                                for 10 days</a>
                                                        </div>
                                                        <div id="similares">
                                                            <div id="separador"></div>
                                                            <a href="peru-13-days" class="button">Perú for 13
                                                                days</a>
                                                        </div>
                                                        <div id="separador"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="text-center">
                                                <h2 id="titulo1">DELUXE BELMOND HIRAM BINGHAMN TRAIN</h2>
                                                <div id="separadordjm2"></div>
                                                <p class="text-center"><i class="fa fa-clock-o"></i> Full Day</p>
                                                <p class="text-center"><i class="fa fa-map-marker"></i> Cusco - Sacred
                                                    Valley - Machu Picchu</p>
                                                <p class="text-center" style="color: #0c8178">Reserve 30 days in advance
                                                </p>
                                            </div>
                                            <p>This 1920s Pullman-inspired train will take you through the Andes giving
                                                you unparalleled views of the passing scenery. Once arriving at Machu
                                                Picchu, skip the long lines and head straight to the citadel to take a
                                                guided tour of the ruins before heading back to Cusco.</p>
                                            <ul>
                                                <li>Admire the unparalleled views of the passing scenery from the train.
                                                </li>
                                                <li>Skip the long lines at Machu Picchu and take a private guided tour.
                                                </li>
                                                <li>Try delicious, gourmet meal, wine & pisco during your journey</li>
                                                <li>Enjoy traditional music and dances during the Hiram Bingham
                                                    experience.</li>
                                            </ul>

                                            <div class="text-center">
                                                <img src="../img/galeria/hiram-bingham-comida.webp" loading="lazy"
                                                    alt="hiram bingham tren">
                                            </div> <br><br>
                                            <h3>Itinerary:</h3>
                                            <p>Your Machupicchu Experience begins as we pick you up at you hotel, to
                                                drive you to Poroy train station, 30 min away from Cusco City. Here you
                                                board the Hiram Binghan train journeying through the Sacred Valley of
                                                the Incas to the Lost City of Machu Picchu, a trip on the Hiram Bingham
                                                takes you across of the most beautiful and stunning scenery in Peru.
                                                <br><br>
                                                On
                                                the way from Cusco to the miythical lost city of Machu Picchu, the Hiram
                                                Bingham goes through Ollantaytambo in the Sacred Valley of the Incas. As
                                                you trundle through the spectacular Peruvian countryside, in the comfort
                                                of a beautifully restored Pullman wagon, we will serve you a
                                                delicious meal from our Andean inspired menu. <br>
                                                To the rhythm of Peruvian cajon and tambourines, and throughout the
                                                tour, a unique show will accompany you with typical and international
                                                music, framing what will be an unforgettable trip to the citadel of
                                                Machu Picchu – Aguas Calientes.
                                                <br><br>

                                            <div class="text-center">
                                                <img src="../img/galeria/hiram-bingham-paseo.webp" loading="lazy"
                                                    alt="hiram bingham tren">
                                            </div> <br><br>

                                            Upon your arrival at Aguas Calientes, board the a bus specially
                                            reserved for Hiram Bingham passengers for the quick ride up to Machu
                                            Picchu, avoiding long lines for regular bus service. After enjoying the
                                            views, will have a guided tour in Machu Picchu. Afterwards, you have
                                            free time to explore the citadel, hike up a little, go to the Temple of
                                            the Moon and Inca Bridge, or simply relax and soak in the atmosphere. In
                                            the afternoon we will return to Aguas Calientes to catch the train to
                                            return to Cusco. In the evening, on the journey from Machu Picchu to
                                            Poroy you will be served a luxurious four-course menu, complete with
                                            Pisco Sour and Peruvian delicacies. Once in Poroy we will drive you back
                                            to the comforts of your hotel in Cusco City. <br> Cusco Arrival at about
                                            9:40pm</p> <br>

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
                                                    data-href="https://andeanexclusive.com/Hiram_bingham"
                                                    data-width="100%" data-numposts="5"></div>


                                                <!---------Fin redes sociales------------------------>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <!-----Booking---------->
                                            <div class="form text-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-onepage-title="Services" data-onepage-slug="services"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461227943574">
                                            <div class="wpb_wrapper">
                                                <div class='heading  text-center '>
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
                                                                    <a class='entry-link' href="cusco-6-days-5-nights">
                                                                        <img src='img/thumbnail/cusco-01.JPG'
                                                                            alt="6 days tour"></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='cusco-6-days-5-nights'
                                                                            class='button'>Cusco 6 days tour</a>
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
                                                                    <a class='entry-link' href="biking">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/biking-cusco.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="biking tour in Cusco"></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="biking" class='button'>Biking in the
                                                                            sky</a>
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
                                                                    <a class='entry-link' href="Sacred_Valley">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/chincheros.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="sacred valley"
                                                                            srcset="img/thumbnail/chincheros.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="Sacred_Valley">Sacred
                                                                            Valley</a>
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
                                                                    <a class='entry-link' href="urubamba-market"><img
                                                                            width="400" height="400"
                                                                            src='img/thumbnail/urubamba-market.png'
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="urubamba - rio vilvanota" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='urubamba-market' class='button'>Urubamba
                                                                            market</a>
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
    </div>
@endsection
