@extends('layouts.general-en')
@section('metas')
    <title>Lima - The city of kings - Capital of Perú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content=" 3 days tour, Luxury lima, Lima tours, Lima" />
    <meta name="description" content="Enjoy this tour in the capital of Perú. Known as the city of kings." />
    <meta property="og:url" content="https://www.andeanexclusive.com/lima-3-days-tour">
    <meta property="og:title" content="Lima -  The citiy of kings - Capital of Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/lima-peru-tour.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/lima-3-days-tour" />
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
                                        <a href="{{ route('lima-tour-3-dias') }}">
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="{{ route('lima-tour-3-dias') }}">
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
                                    class="vc_row wpb_row lima vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1><?php $tour = 'LIMA 3 DAYS TOUR';
                                                                    echo $tour; ?></h1>
                                                                    <p><i class="fa fa-map-marker"></i> Lima - Perú </p>
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
                                                    <a>Lima 3 Days Tour</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="display2">
                                            <h4 class=text-center> Similar Tours</h4>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="arequipa-3-days" class="button">Tour in Arequipa</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puno-3-days-tour" class="button">Tour in Puno</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puerto-maldonado" class="button">Tour in Puerto Maldonado</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-8-days-7-nights" class="button">Perú for 8 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-12-days" class="button">Perú for 12 days</a>
                                            </div>
                                            <div id="separador"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h1 id="titulo1">LIMA "THE CITY OF THE KINGS"</h1>
                                                <div id="separadordjm2"></div>
                                                <p class="text-center"><i class="fa fa-clock-o"></i> 3 days</p>
                                                <p class="text-center"><i class="fa fa-map-marker"></i> Lima - Perú</p>
                                                <p class="text-center" style="color: #0c8178">Reserve 30 days in
                                                    advance </p>
                                            </center>
                                            <h5>Overview</h5>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>DAY 01</th>
                                                        <td>Lima City Tour.</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DAY 02</th>
                                                        <td>Larco Museum - Enrico Poly.</td>

                                                    </tr>
                                                    <tr>
                                                        <th>DAY 03</th>
                                                        <td>Pachacamac - Amano Museum- Homeward bound.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div id="separador"></div>
                                            <h5>ITINERARY:</h5>
                                            <p><strong>Day 01: Lima City Tour</strong></p>
                                            <p>Upon your arrival to Lima, your local guide greets you to drive you to hotel.
                                                After you have had a chance to check-in to your hotel and freshen up you
                                                will meet up with your guide to begin with an overview of the historic parts
                                                of Lima, now undergoing restoration which include the PLaza de Armas
                                                recently has undergone a renaissance where you will see elegant wooden
                                                balconies and colonial buildings you will also see the Cathedral and the
                                                Franciscan Monastery and its catacombs. Then visit of modern Lima with the
                                                beautiful district of Miraflores. In miraflores the visit of lover´s park
                                                with a nice view of the beaches of Lima. <strong>Overnigth in Lima.</strong>
                                            </p><br>

                                            <p><strong>Day 02: Larco Museum - Enrico Poly</strong></p>
                                            <p>In the morning you will begin the visit with the Larco Herrera Museum founded
                                                in 1926, on an old mansion built in 1707. This museum harbors the biggest
                                                private collection of pre-columbine art that exists in the world. Exhibition
                                                of archeological pieces of ceramic, gold , stone, wood and textile of
                                                pre-Hispanic culture, especially the peruvian northen cultures. Outstanding
                                                the "Sala de arte Textil", the "gran sala de cultura",. It also exhibits the
                                                only collection of world of "Erotic Huacos"... After lunch you proceed to
                                                the Enrico Poly Museum, where we view an impressive collection of
                                                pre-columbian silver and gold colonial artifacts. <strong>Overnigth in
                                                    Lima.</strong></p><br>

                                            <p><strong>Day 03: Pachacamac - Amano Museum- Homeward bound.</strong></p>
                                            <p>In the morning we drive to visit Pachacamac, an important Inca religious
                                                complex dedicated to worship of the sun god. Then on the way back to Lima we
                                                visit the incomparable collection of ancient, central - coast textiles at
                                                the by appointment only Museum Amano. According your departure flight back
                                                to home transfer to the airport, Is highly recommended to be at the airport
                                                03 hours before of the fly.</p>
                                            <div id="separador"></div>

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
                                                    data-href="https://andeanexclusive.com/lima-3-days-tour"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div><br>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div id="anuncioright">
                                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- Largo derecha -->
                                                <ins class="adsbygoogle"
                                                    style="display:inline-block;width:300px;height:600px"
                                                    data-ad-client="ca-pub-6570209707738783"
                                                    data-ad-slot="7960359151"></ins>
                                                <script>
                                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                                </script>
                                            </div>
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
                                                                            srcset="img/thumbnail/arequipa-perú.JPG 1000w, img/thumbnail/arequipa-perú.JPG 500w" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='arequipa-3-days' class='button'>Arequipa
                                                                            Tour</a>
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
                                                                            alt=""
                                                                            srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="Hiram_bingham" class='button'>Machu
                                                                            Picchu by Hiram Bingham</a>
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
                                                                            alt="Tour in Lima Perú" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="Sacred_Valley">Sacred
                                                                            Valley Tour</a>
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
                                                                            src="img/thumbnail/motocros-atv-peru.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="hiram bingham"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='peru-10-days-9-nights'
                                                                            class='button'>Perú for 10 days</a>
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
