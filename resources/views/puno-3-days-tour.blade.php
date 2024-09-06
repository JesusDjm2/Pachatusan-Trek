@extends('layouts.general-en')
@section('metas')
    <title>Puno - Titikaka Lake - Perú saw</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content=" 3 days tour, Luxury Puno, Puno tours, Puno 2022" />
    <meta name="description" content="Enjoy this tour in Puno. Known as the peruvian folklore capital." />
    <meta property="og:url" content="https://www.andeanexclusive.com/puno-3-days-tour">
    <meta property="og:title" content="Puno -  Lago Titikaka - Sierra de Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/puno-peru-islands.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/puno-3-days-tour" />
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
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="botondjm">Language <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a href="puno-3-dias-tour">Español</a></li>
                                            <li><a>Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="puno-3-dias-tour">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                    class="vc_row wpb_row puno vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461317698190">
                                            <div class="wpb_wrapper">
                                                <div class='carousel-headings'>
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
                                                                    <h1><?php $tour = 'City of Puno';
                                                                    echo $tour; ?></h1>
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
                                                    <a>Puno 3 días</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3" id="display2">
                                            <div id="similares">
                                                <h1>Similar Tours </h1>
                                                <div id="separador"></div>
                                                <a href="arequipa-3-days" class="button">Arequipa for 3 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="lima-3-days-tour" class="button">Lima for 3 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puerto-maldonado" class="button">Puerto Maldonado for 3
                                                    days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-10-days-9-nights" class="button">Perú for 10
                                                    days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-18-days-tour" class="button">Perú for 18 days</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h2 id="titulo1">Puno<br>
                                                    Peruvian folklore capital</h2>
                                                <p>Sugessted by: "Andean Exclusive Tours"</p>
                                                <div id="separadordjm2"></div>
                                                <p style="color: #0c8178"><i class="fa fa-map-marker"> Puno - Perú</i>
                                                </p>
                                            </center>
                                            <h5>Overview</h5>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>DAY 01</th>
                                                        <td>Fligth to Juliaca – Sillustani –Puno</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DAY 02</th>
                                                        <td>Private boat to Taquile and Uros island.</td>

                                                    </tr>
                                                    <tr>
                                                        <th>DAY 03</th>
                                                        <td>Boat to charcas to Copacabana.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h5>ITINERARY:</h5>
                                            <p><strong>Day 01: Fligth to Juliaca – Sillustani –Puno</strong></p>
                                            <p>Upon your arrive to Juliaca we will be weaiting for you to drive you to
                                                Puno. In the way we will visit Sillustani a sacrey Colla´s cementery,
                                                localed to the north of Puno, next to the beautifull Umayo lagoon and
                                                close to the village of Hatun Colla, we will appreciate the chullpas or
                                                funerary enclosures, constructed of polished stones to keep the mummies
                                                of their ancestor.<strong>Overnight in Puno.</strong></p><br>

                                            <p><strong>Day 02: Private boat to Taquile and Uros island.</strong></p>
                                            <p>Overnight in Puno. Day 02: Private boat to Taquile and Uros island. We
                                                wiil b ard our private lunch to navigate in the mystical origin of the
                                                Andean civilization, we will the Uros floating reed islands and hike in
                                                the terraces of Taquile, a memorable day experiencing the community life
                                                and their hospitality in the Titikaka lake.<strong>Overnight at
                                                    Islander´s house.</strong></p><br>

                                            <p><strong>Day 03: Boat to charcas to Copacabana.</strong></p>
                                            <p>In the morning we will have the option to hike in the islad from the
                                                house where we stayed overnight to the other end of the island.
                                                Afterward we navigate to the Aymara peninsula of Charcas. We will go up
                                                to the viewpoint to appreciate the beautifull landscape with a panoramic
                                                view of the lake. In Charcas our private car will be eaiting to drivo to
                                                Copacabana. <strong>Overnigth in copacabana</strong></p>
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
                                                    data-href="https://andeanexclusive.com/puno-3-days-tour"
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
                                                                    <a class='entry-link' href="arequipa-3-days"><img
                                                                            srcset="img/thumbnail/arequipa-peru.JPG 500w" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='arequipa-3-days' class='button'>Tour in
                                                                            Arequipa</a>
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
                                                                    <a class='entry-link' href="peru-8-days-7-nights"><img
                                                                            src="img/thumbnail/Machupicchu.jpg"
                                                                            alt="Tour to Puno Tour in Puno" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="peru-8-days-7-nights" class='button'>Perú
                                                                            for 8 days</a>
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
                                                                    <a class='entry-link' href="lima-3-days-tour"><img
                                                                            src="img/thumbnail/ceviche-gambas.jpg"
                                                                            alt="Lima luxury tour in Perú" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="lima-3-days-tour">Tour
                                                                            in Lima</a>
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
