@extends('layouts.general-en')
@section('metas')
    <title>Urubamba local market & Beer Tasting Tour in the Sacred Vlley of the Incas - Inkas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Urubamba market, cusco tours, luxury travel" />
    <meta property="og:description" content="Urubamba local market & Beer Tasting Tour" />
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/urubamba-market.png" />
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://andeanexclusive.com/urubamba-market">
    <meta property="og:title" content="Urubamba local market & Beer Tasting Tour">
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/urubamba-market">
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="/" rel="home" class="logo-text-link">
                                    <img src="img/andean-exclusive-logo.png" id="logo" alt="Andean Exclusive Logo">
                                </a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu')
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="botondjm">Language <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a href="mercado-urubamba">Español</a></li>
                                            <li><a>Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="mercado-urubamba">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a>EN</a>
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
                                    class="vc_row wpb_row urubamba vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1><?php $tour = 'URUBAMBA LOCAL MARKET & BEER TASTING TOUR';
                                                                    echo $tour; ?></h1>
                                                                    <p><i class="fa fa-map-marker"></i> Cusco - Urubamba
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
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12"><a href="/">Home</a> /
                                                    <a href="experiences">Popular</a> /
                                                    <a>Urubamba Market</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <h4 class="text-center">Similar Tours</h4>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="arequipa-3-days" class="button">Arequipa for 3 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="lima-3-days-tour" class="button">Lima for 3 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puno-3-days-tour" class="button">Puno for 3 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-8-days-7-nights" class="button">Perú for 8
                                                    days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-15-days-tour" class="button">Perú for 15 days</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <h2 id="titulo1" class="text-center">URUBAMBA LOCAL MARKET TOUR</h2>
                                            <div id="separadordjm2"></div>
                                            <p style="color: #0c8178">Reserve 30 days in advance
                                            </p>
                                            <br>
                                            <p>To start we will go to Urubamba local market., which is one of the most
                                                authentic places you can find in the Sacred Valley. From cheese to
                                                endemic fruits, this local market might give you a better understanding
                                                of the country, than sightseeing tours that are often polished according
                                                to the tourist needs. Cotinuing, we will leave behind the colorfull
                                                market and joing the world of Craft Beer by visiting Willkamayu Brewery,
                                                where we will learn the process of brewing beer and taste its different
                                                beer styles, beers made out of local supplies. After sharing with the
                                                best of the local beer, we will take you back to your hotel.</p> <br>

                                            <!-----Booking---------->
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
                                                <div class="fb-comments"
                                                    data-href="https://andeanexclusive.com/urubamba-market"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div><br>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <!-----Booking---------->
                                            <div class="sticky">
                                                <div class="card">
                                                    <div class="card-body">
                                                    </div>
                                                </div>
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
                                                                    <a class='entry-link' href="biking">
                                                                        <img src="img/thumbnail/biking-cusco.jpg" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='biking' class='button'>Biking in the
                                                                            andes</a>
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
                                                                    <a class='entry-link' href="Hiram_bingham">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/Machupicchu.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Machu Picchu 1 day"
                                                                            srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="Hiram_bingham" class='button'>Machu
                                                                            Picchu By Hiram Bingham</a>
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
                                                                            alt=""
                                                                            srcset="img/thumbnail/chincheros.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="Sacred_Valley">Sacred
                                                                            Valley of the incas</a>
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
                                                                    <a class='entry-link' href="cusco-4-days-3-nights">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/llamas.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Cusco Sensational" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='cusco-4-days-3-nights'
                                                                            class='button'>Cusco 4 days</a>
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
