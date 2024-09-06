@extends('layouts.general-es')
@section('metas')
    <title>Puno - Lago Titikaka - sierra de Perú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="tour de 3 días, Puno d elujo, Puno tours, Puno 2022" />
    <meta name="description" content="Disfrute de este tour en Puno. Conozca la capital folklorica de Perú." />
    <meta property="og:url" content="https://www.andeanexclusive.com/puno-3-dias-tour">
    <meta property="og:title" content="Puno - Lago Titikaka  - sierra de Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/puno-peru-islands.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/puno-3-dias-tour" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="index-castellano" rel="home" class="logo-text-link">
                                    <div class="logo2"></div>
                                </a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu-castellano')
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="botondjm">Idioma <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a>Español</a></li>
                                            <li><a href="puno-3-days-tour">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="#">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="puno-3-days-tour">En</a>
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
                                                                    <h1><?php $tour = 'Ciudad de Puno';
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
                                                    <a href="experiencias">Popular</a> /
                                                    <a>Puno</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="display2">
                                            <h1>Tours Similares </h1>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="arequipa-3-dias" class="button">Arequipa por 3 días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="cusco-6-dias-5-noches" class="button">Cusco por 6
                                                    días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-8-dias-7-noches" class="button">Perú por 8
                                                    días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-10-dias-9-noches" class="button">Perú por 10
                                                    días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-18-dias-tour" class="button">Perú por 18 días</a>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h2 id="titulo1">Puno<br>
                                                    Capital del folklore peruano</h2>
                                                <p>Sugerido por: "Andean Exclusive Tours"</p>
                                                <div id="separadordjm2"></div>
                                                <p style="color: #0c8178"><i class="fa fa-map-marker"> Puno - Perú</i>
                                                </p>
                                            </center>
                                            <h5>Visión General</h5>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>DÍA 01</th>
                                                        <td>Vuelo a Juliaca – Sillustani –Puno</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 02</th>
                                                        <td>Bote privado a Taquile & las islas de Uros.</td>

                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 03</th>
                                                        <td>Barco a charcas a Copacabana.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h5>ITINERARIO:</h5>
                                            <p><strong>Día 01: Vuelo a Juliaca - Sillustani –Puno </strong> </p>
                                            <p> Al llegar a Juliaca, estaremos armando para que lo lleve a Puno. En el
                                                camino visitaremos Sillustani, un cementerio sagrado de Colla, ubicado
                                                al norte de Puno, junto a la hermosa laguna de Umayo y cerca del pueblo
                                                de Hatun Colla, apreciaremos las chullpas o recintos funerarios,
                                                construidos con piedras pulidas para mantener las momias de su ancestro.
                                                <strong> Pernocte en Puno. </strong>
                                            </p> <br>
                                            <p> <strong> Día 02: Barco privado a Taquile y la isla de los Uros.
                                                </strong> </p>
                                            <p> Pernocte en Puno. Día 02: Barco privado a Taquile y la isla de los Uros.
                                                Realizaremos nuestro almuerzo privado para navegar en el origen místico
                                                de la civilización andina, visitaremos las islas de caña flotante de los
                                                Uros y caminaremos en las terrazas de Taquile, un día memorable que
                                                experimenta la vida comunitaria y su hospitalidad en el lago Titikaka.
                                                <strong> Alojamiento en la casa de los isleños. </strong>
                                            </p> <br>

                                            <p> <strong> Día 03: Barco a charcas a Copacabana. </strong> </p>
                                            <p> Por la mañana tendremos la opción de caminar en la isla desde la casa
                                                donde pasamos la noche hasta el otro extremo de la isla. Luego navegamos
                                                a la península aymara de Charcas. Subiremos al mirador para apreciar el
                                                hermoso paisaje con una vista panorámica del lago. En Charcas, nuestro
                                                automóvil privado se dirigirá a drivo a Copacabana. <strong> Pernocte en
                                                    Copacabana.</strong></p>
                                            <div id="separador"></div>

                                            <!-----Booking---------->
                                            <div class="form text-center">
                                                <div class="form text-center">
                                                    @include('layouts.payments')
                                                    <h5>Compartir</h5>
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
                                                        data-href="https://andeanexclusive.com/puno-3-dias-tour"
                                                        data-width="100%" data-numposts="5"></div>

                                                    <!---------Fin redes sociales------------------------>
                                                </div><br>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            @include('layouts.booking-castellano')
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
                                                    <h3>Tours Similares</h3>
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
                                                                    <a class='entry-link text-center'
                                                                        href="arequipa-3-dias">
                                                                        <img srcset="img/thumbnail/arequipa-peru.JPG"
                                                                            alt="Tour en Arequipa de lujo" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='arequipa-3-dias' class='button'>Tour in
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
                                                                    <a class='entry-link text-center'
                                                                        href="hiram-bingham"><img width="400"
                                                                            height="400"
                                                                            src="img/thumbnail/Machupicchu.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Machu Picchu por Hiram Binhgam"
                                                                            srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="hiram-bingham" class='button'>Machu
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
                                                                    <a class='entry-link text-center'
                                                                        href="lima-tour-3-dias"><img width="400"
                                                                            height="400"
                                                                            src="img/thumbnail/ceviche-gambas.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Lima tour exclusivo de lujo en Perú" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="lima-tour-3-dias">Tour
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
