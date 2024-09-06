@extends('layouts.general-en')
@section('metas')
    <title>Biking Cusco Perú - Enjoy this amazing biking in the mountains</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Biking Cusco, biking tour, biking Sacred Valley" />
    <meta name="description" content="Biking tour in the mountains of Cusco. Sacred Valley" />
    <meta property="og:url" content="https://www.andeanexclusive.com/biking">
    <meta property="og:title" content="Biking Cusco Perú - Enjoy this amazing biking in the mountains">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/biking-cusco-tour.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/biking" />
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
                                        <a href="{{ route('ciclismo') }}">
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('ciclismo') }}">
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
                                    class="vc_row wpb_row biking vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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

                                                                    <h1><?php $tour = ' BIKING TOUR IN CUSCO';
                                                                    echo $tour; ?></h1>
                                                                    <p><i class="fa fa-map-marker"></i> Chinchero -
                                                                        Maras - Moray - Salt Ponds - Sacred
                                                                        Valley </p>
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
                                                <div class="col-lg-6 col-sm-10"><a href="/">Home</a> /
                                                    <a href="experiences">Popular</a> /
                                                    <a>Biking</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="display2">
                                            <div class="sticky-top" style="padding-top: 95px; z-index: 40">
                                                <div data-onepage-title="Services" data-onepage-slug="services"
                                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                                    <h4 class="text-center">Similar Tours</h4>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="cusco-4-dias-3-noches" class="button">Cusco por
                                                            4 días</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="peru-5-dias-4-noches" class="button">Perú por 5
                                                            días</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="cusco-6-dias-5-noches" class="button">Cusco por
                                                            6 días</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="peru-7-dias-6-noches" class="button">Perú por 7
                                                            días</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="peru-12-dias" class="button">Perú por 12
                                                            días</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="adventures/vinicunca-tour" class="button">Montaña de
                                                            7 colores</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <center>
                                                <h2 id="titulo1" class="text-center">BIKING IN THE ANDES</h2>
                                                <div id="separadordjm2"></div>
                                                <p class="text-center"><i class="fa fa-clock-o"></i> Full Day</p>
                                                <p class="text-center"><i class="fa fa-map-marker"></i> Lima - Cusco -
                                                    Puno - Arequipa </p>
                                                <p class="text-center" style="color: #0c8178">Reserve 30 days in
                                                    advance</p>
                                            </center>
                                            <h3>Itinerary:</h3>
                                            <p>We leave by our private car to the lake of Huaypo, located about
                                                1 hour away. The scenery is wonderful, with rolling hills and a big
                                                mountain range in the background, as we use an old dirt road very seldom
                                                used, all in the middle of Andean crops, mainly grains. We will do a
                                                combination of driving and biking. It takes about an hour to
                                                pass above the town of <strong>Maras.</strong> From there we will
                                                continue to the magnificent agricultural terraces of Moray where
                                                different levels of terraces are carved into deep bowls/sink holes that
                                                were used by the Inca to experiment with and adapt Andean crops to the
                                                altitude.<br>
                                                We will enjoy a special <strong>picnic lunch,</strong> prepared with
                                                product from the
                                                region.<br><br>
                                                <img src="{{ asset('img/galeria/tour-de-ciclismo-en-Cusco.webp') }}"
                                                    width="100%" alt="Tour de Ciclismo en Cusco"
                                                    loading="lazy"><br><br>
                                                There and then return a few kilometers toward Maras
                                                where we will then ride to the terraced <strong> Salinas salt</strong>
                                                pans. A hot spring at the top of the valley discharges a small stream of
                                                heavily salt-laden water, which is diverted into salt pans and
                                                evaporated to produce a salt that is used for cattle licks. We get to
                                                see them from the road and then descend to them. Here we leave the bikes
                                                and hike in the middle of the salt ponds to the valley of the
                                                <strong>Urubamba</strong> river below.
                                            </p>


                                            @include('layouts.payments')

                                            <div class="form text-center">
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
                                                <div class="fb-comments" data-href="https://andeanexclusive.com/biking"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div><br>
                                        </div>
                                        <div class="col-lg-3 col-md-3">

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
                                                        class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1461228417147">
                                                                <div class="wpb_wrapper">
                                                                    <div class='travel-item'>
                                                                        <div class='entry-img'>
                                                                            <a class='entry-link text-center'
                                                                                href='adventures/tour-atv'>
                                                                                <img src="img/thumbnail/motocros-atv-peru.jpg"
                                                                                    alt="Urubamba Market - Sacred Valley">
                                                                            </a>
                                                                        </div>
                                                                        <div class='entry-info'>
                                                                            <div class='readmore'>
                                                                                <a href='adventures/tour-atv'
                                                                                    class='button'>ATV in the sky</a>
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
                                                                            <a class='entry-link text-center'
                                                                                href="Hiram_bingham">
                                                                                <img width="400" height="400"
                                                                                    src="img/thumbnail/Machupicchu.jpg"
                                                                                    class="attachment-post-grid-s size-post-grid-s"
                                                                                    alt="tour de motocross atv en Cusco"
                                                                                    srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                                    sizes="(max-width: 400px) 100vw, 400px" />
                                                                            </a>
                                                                        </div>
                                                                        <div class='entry-info'>
                                                                            <div class='readmore'>
                                                                                <a href="Hiram_bingham"
                                                                                    class='button'>Hiram Bingham</a>
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
                                                                            <a class='entry-link text-center'
                                                                                href="peru-10-days-9-nights">
                                                                                <img width="400" height="400"
                                                                                    src="img/thumbnail/chincheros.jpg"
                                                                                    class="attachment-post-grid-s size-post-grid-s"
                                                                                    alt="Tour for 10 days Perú"
                                                                                    srcset="img/thumbnail/chincheros.jpg 400w"
                                                                                    sizes="(max-width: 400px) 100vw, 400px" />
                                                                            </a>
                                                                        </div>
                                                                        <div class='entry-info'>
                                                                            <div class='readmore'>
                                                                                <a class='button'
                                                                                    href="peru-10-days-9-nights">Perú
                                                                                    for 10 days</a>
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
                                                                            <a class='entry-link text-center'
                                                                                href='machupicchu-accelerate'>
                                                                                <img width="400" height="400"
                                                                                    src="img/thumbnail/Machupicchu_AET.jpg"
                                                                                    class="attachment-post-grid-s size-post-grid-s"
                                                                                    alt="Tour in Machu Picchu - Cusco" />
                                                                            </a>
                                                                        </div>
                                                                        <div class='entry-info'>
                                                                            <div class='readmore'>
                                                                                <a href='machupicchu-accelerate'
                                                                                    class='button'>Machu Picchu full
                                                                                    day</a>
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
