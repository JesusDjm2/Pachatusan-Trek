@extends('layouts.general-en')
@section('metas')
    <title>Arequipa. NOBLE AND VOLCANIC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="4 days tour, Luxury arequipa, arequipa tours, Arequipa" />
    <meta name="description" content="Noble and Volcanic Peru’s ashlar (white stone) city with snow-capped mountains" />
    <meta property="og:url" content="https://www.andeanexclusive.com/arequipa-3-days">
    <meta property="og:title" content="Tours en Arequipa Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/arequipa-peru.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/arequipa-3-days" />
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
                                        <a href="{{ route('arequipa-3-dias') }}">
                                            <button type="button" class="botondjm">Español </button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('arequipa-3-dias') }}">
                                            <button type="button" class="botondjm">Español </button>
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
                                    class="vc_row wpb_row arequipa vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1> <?php $tour = 'AREQUIPA - THE WHITE CITY';
                                                                    echo $tour; ?></h1>
                                                                    <p><i class="fa fa-map-marker"></i> Perú - Arequipa
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
                                                <div class="col-lg-6 col-sm-10"><a href="../">Home</a> /
                                                    <a href="experiences">Popular</a> /
                                                    <a>Arequipa 4 Days</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3" id="display2">
                                            <h4 class="text-center">Similar Tours</h4>
                                            <div id="similares">
                                                <a href="puerto-maldonado" class="button">Puerto Maldonado
                                                    Tour</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="lima-3-days-tour" class="button">Tour in Lima</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puno-3-days-tour" class="button">Tour in Puno</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="cusco-6-days-5-nights" class="button">Cusco 6 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-10-days-9-nights" class="button">Perú for 10
                                                    days</a>
                                            </div>
                                            <div id="separador"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h2 id="titulo1">AREQUIPA</h2>
                                                <div id="separadordjm2"></div>
                                                <p class="text-center"><i class="fa fa-clock-o"></i> 4 days</p>
                                                <p class="text-center"><i class="fa fa-map-marker"></i> Sta. Catalina
                                                    - Colca canyon - Condors fly</p>
                                                <p class="text-center" style="color: #0c8178">Reserve 30 days in
                                                    advance </p>
                                            </center>

                                            <h5>Overview</h5>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>DAY 01</th>
                                                        <td>Arequipa, Santa Catalina and Juanita</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DAY 02</th>
                                                        <td>Colca Canyon</td>

                                                    </tr>
                                                    <tr>
                                                        <th>DAY 03</th>
                                                        <td>The Condors & hot Springs</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DAY 04</th>
                                                        <td>Homeward Bound—Arequipa to Lima</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h5>ITINERARY:</h5>
                                            <p><strong>Day 01: Arequipa, Santa Catalina and Juanita</strong></p>
                                            <p>Upon your arrival to Arequipa, your local guide greets you to drive you
                                                to the hotel. After you have had a chance to check-in to your hotel and
                                                freshen up you will meet up with your guide for an insider’s look at the
                                                wonderful Convent of Santa Catalina and the Museum Santuarios de Altura
                                                to see the famous Ice Maiden the mummy Juanita strongly believed to have
                                                been sacrificed to the gods some 500 years ago. <br> Juanita was
                                                discovered
                                                on the summit of Mount Ampato, she’s provided scientists a unique look
                                                back in time as she is amazingly well preserved and clothed in some of
                                                the finest fabric from Cusco. <strong> Overnight in Arequipa.</strong>
                                            </p><br>
                                            <p><strong>Day 02: Colca Canyon</strong></p>
                                            <p>Today you will depart Arequipa via the reserve of Aquada Blanca, where
                                                you will see Vicunas and several species of highland water birds. The
                                                majestic volcanoes, such as Misti dominate the landscape as you will
                                                continue climbing until the highest point in the entire trip at el
                                                Mirador de Los volcanoes. <br> From this vantage point, you will
                                                experience
                                                the impressive volcanic range including the famous Coropuna. Overnight
                                                in Colca.</p><br>

                                            <p><strong>Day 03: The Condors & hot Springs</strong></p>
                                            <p>It is early morning as you drive to the Cross of the Condors, a rock
                                                balcony over the deepest section of the canyon. It is here you will
                                                witness the majestic flight of the giant Andean condors. Your return
                                                hike near the crater of a volcano also passes by a cactus forest. Also
                                                en route to Chivay, you will visit colorful stops and ateliers of
                                                embroidery. After lunch, there is an optional bike ride followed by a
                                                dip in the region’s hot springs. If not biking, then you will head over
                                                directly to the hot springs.<strong> Overnight in Colca. </strong></p>
                                            <br>

                                            <p><strong>Day 04: Homeward Bound - Arequipa to Lima</strong></p>
                                            <p>You will have the option for one more look at the magnificent Condors
                                                before your transfer back to Arequipa to catch an afternoon flight to
                                                Lima before your connecting flight homeward bound.</p>
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
                                                    data-href="https://andeanexclusive.com/arequipa-3-days"
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
                                                                    <a class='entry-link' href="puerto-maldonado">
                                                                        <img alt="Amazonas jungle Perú"
                                                                            srcset="img/thumbnail/otorongo-jaguar.jpg 1000w, img/thumbnail/otorongo-jaguar.png 500w" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='puerto-maldonado' class='button'>Puerto
                                                                            Maldonado Tour</a>
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
                                                                    <a class='entry-link' href="puno-3-days-tour"><img
                                                                            width="400" height="400"
                                                                            src="img/thumbnail/puno-peru.JPG"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Tour in Puno" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="puno-3-days-tour" class='button'>Puno
                                                                            Tours</a>
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
                                                                    <a class='entry-link' href="Sacred_Valley"><img
                                                                            width="400" height="400"
                                                                            src="img/thumbnail/chincheros.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt=""
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
