@extends('layouts.general-es')
@section('metas')
    <title>Lima - Ciudad de los reyes - Capital de Perú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="tour de 3 dias, Luxury lima, Lima tours, Lima, Perú" />
    <meta name="description" content="Disfruta de este tour en la capital del Perú. Conocida como la ciudad de los reyes." />
    <meta property="og:url" content="https://www.andeanexclusive.com/lima-tour-3-dias">
    <meta property="og:title" content="Lima -  Ciudad de los reyes - Capital de Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/lima-peru-tour.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/lima-tour-3-dias" />
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
                                    <li id="display">
                                        <a href="{{ route('lima-3-days-tour') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="{{ route('lima-3-days-tour') }}<">
                                            <button type="button" class="botondjm">English</button>
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
                                                                    <h1><?php $tour = 'TOUR DE 3 DÍAS EN LIMA';
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
                                                    <a href="experiencias">Populares</a> /
                                                    <a>Lima Tour 3 Días</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="display2">
                                            <h4 class="text-center">Tours Similares</h4>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="arequipa-3-days" class="button">Arequipa 3 dias</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puno-3-dias-tour" class="button">Puno 3 dias</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puerto-maldonado-castellano" class="button">Puerto Maldonado</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-13-dias" class="button">Perú por 13 días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-20-dias-tour" class="button">Perú por 20 días</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h1 id="titulo1">LIMA "LA CIUDAD DE LOS REYES"</h1>
                                                <div id="separadordjm2"></div>
                                                <p class="text-center"><i class="fa fa-clock-o"></i> 3 días</p>
                                                <p class="text-center"><i class="fa fa-map-marker"></i> Lima - Perú</p>
                                                <p class="text-center" style="color: #0c8178">Reservar con 30 días de
                                                    anticipación</p>
                                            </center>
                                            <h5>Vista general</h5>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>DÍA 01</th>
                                                        <td>Lima City Tour.</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 02</th>
                                                        <td>Museo Larco - Enrico Poli.</td>

                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 03</th>
                                                        <td>Pachacamac - Museo Textil Amano - Regreso a casa.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div id="separador"></div>
                                            <h5>ITINERARIO:</h5>
                                            <p><strong>Día 01: Lima City Tour</strong></p>
                                            <p>A su llegada a Lima, su guía local lo recibe para llevarlo al hotel. Después
                                                de haber tenido la oportunidad de registrarse en su hotel y refrescarse, se
                                                reunirá con su guía para comenzar con una descripción general de las partes
                                                históricas de Lima, que ahora están en proceso de restauración, que incluyen
                                                la Plaza de Armas que recientemente ha experimentado un renacimiento, donde
                                                verá elegantes balcones de madera y edificios coloniales, también verá la
                                                Catedral y el Monasterio Franciscano y sus catacumbas. Luego visita de la
                                                moderna Lima con el hermoso distrito de Miraflores. En miraflores se visita
                                                el parque de los enamorados con una linda vista de las playas de Lima.
                                                <strong> Pernocte en Lima.</strong>
                                            </p><br>

                                            <p><strong>Día 02: Museo Larco - Enrico Poli </strong> </p>
                                            <p> Por la mañana comenzará la visita al Museo Larco Herrera, fundado en 1926,
                                                en una antigua mansión construida en 1707. Este museo alberga la mayor
                                                colección privada de arte precolombino que existe en el mundo. Exposición de
                                                piezas arqueológicas de cerámica, oro, piedra, madera y textiles de la
                                                cultura prehispánica, especialmente las culturas del norte peruano. Destaca
                                                la "Sala de arte Textil", la "gran sala de cultura". También exhibe la única
                                                colección del mundo de "Huacos eróticos"... Después del almuerzo, se dirige
                                                al Museo Enrico Poly, donde vemos una impresionante colección de artefactos
                                                coloniales precolombinos de plata y oro. <strong> Pernocte en Lima.</strong>
                                            </p><br>

                                            <p><strong>Día 03: Pachacamac - Museo Textil Amano - Regreso a casa. </strong>
                                            </p>
                                            <p> En la mañana conducimos para visitar Pachacamac, un importante complejo
                                                religioso inca dedicado a la adoración del dios del sol. Luego, en el camino
                                                de regreso a Lima, visitamos la incomparable colección de textiles antiguos
                                                de la costa central en el Museo Amano, con cita previa. Según su vuelo de
                                                regreso a casa, traslado al aeropuerto, se recomienda estar en el aeropuerto
                                                03 horas antes del vuelo.</p>
                                            <div id="separador"></div>

                                            <!-----Booking---------->
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
                                                    data-href="https://andeanexclusive.com/lima-tour-3-dias"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div><br>
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
                                                                    <a class='entry-link' href="arequipa-3-dias">
                                                                        <img srcset="img/thumbnail/arequipa-peru.JPG"
                                                                            alt="Topur en Arequipa 4 dias" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='arequipa-3-dias' class='button'>Tour en
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
                                                                    <a class='entry-link' href="puno-3-dias-tour">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/puno-peru.JPG"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Tour en Puno 3 dias" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="puno-3-dias-tour" class='button'>Tour en
                                                                            Puno</a>
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
                                                                    <a class='entry-link'
                                                                        href="puerto-maldonado-castellano">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/mono-amazonas.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Tour en Puerto Maldonado de lujo" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button'
                                                                            href="puerto-maldonado-castellano">Puerto
                                                                            Maldonado</a>
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
