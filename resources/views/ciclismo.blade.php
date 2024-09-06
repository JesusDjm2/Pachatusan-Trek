@extends('layouts.general-es')
@section('metas')
    <title>Ciclismo Cusco Perú - Disfruta de este increíble ciclismo en las montañas.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Ciclismo Cusco, tour en bicicleta, ciclismo Valle Sagrado" />
    <meta name="description" content="Disfrute este tour de Ciclismo en Cusco, tour en bicicleta, ciclismo Valle Sagrado" />
    <meta property="og:url" content="https://www.andeanexclusive.com/ciclismo">
    <meta property="og:title" content="Ciclismo Cusco Perú - Disfruta de este increíble ciclismo en las montañas.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/biking-cusco-tour.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/ciclismo" />
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
                                        <a href="{{ route('biking') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('biking') }}">
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
                                                                    <h1><?php $tour = ' TOUR DE CICLISMO EN CUSCO';
                                                                    echo $tour; ?></h1>
                                                                    <p><i class="fa fa-map-marker"></i> Chinchero -
                                                                        Maras - Moray - Valle Sagrado </p>
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
                                                <div class="col-lg-6 col-sm-12 text-center"><a
                                                        href="index-castellano">Inicio</a> /
                                                    <a href="experiencias">Popular</a> /
                                                    <a>Ciclismo</a>
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
                                                    <h4 class="text-center">Tours Similares</h4>
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
                                                <h2 id="titulo1" class="text-center">CICLISMO EN LOS ANDES</h2>
                                                <div id="separadordjm2"></div>
                                                <p class="text-center"><i class="fa fa-clock-o"></i> Día completo</p>
                                                <p class="text-center"><i class="fa fa-map-marker"></i> Valle Sagrado
                                                    de los Incas - Cusco</p>
                                                <p class="text-center" style="color: #0c8178">Reservar hasta con 15
                                                    días de anticipación</p>
                                            </center>
                                            <h4>Itinerario:</h4>
                                            <p>Salimos en nuestro automóvil privado hacia el lago de Huaypo, ubicado
                                                aproximadamente a 1 hora de distancia. El paisaje es maravilloso, con
                                                colinas ondulantes y una gran cadena montañosa en el fondo, ya que
                                                usamos un viejo camino de tierra muy poco utilizado, todo en medio de
                                                cultivos andinos, principalmente granos. Haremos una combinación de
                                                conducción y ciclismo. Se tarda aproximadamente una hora en pasar por
                                                encima de la ciudad de <strong> Maras.</strong> Desde allí continuaremos
                                                hasta las magníficas terrazas agrícolas de Moray, donde diferentes
                                                niveles de terrazas están talladas en cuencos profundos / agujeros
                                                hundidos que fueron utilizados por los incas para experimentar y adaptar
                                                los cultivos andinos a la altitud. Allí disfrutaremos de un exclusivo
                                                almuerzo campestre, preparado con productos típicos de la
                                                region.<br><br>
                                                <img src="{{ asset('img/galeria/tour-de-ciclismo-en-Cusco.webp') }}"
                                                    width="100%" alt="Tour de Ciclismo en Cusco"
                                                    loading="lazy"><br><br>
                                                Luego regresaremos unos kilómetros hacia Maras, donde luego iremos a las
                                                <strong>salineras de Sal.</strong> Una fuente termal en la parte
                                                superior del valle Sagrado de los Incas
                                                descarga una pequeña corriente de agua fuertemente cargada de sal, que
                                                se desvía hacia las salinas y se evapora para producir una sal que se
                                                usa para lamer el ganado. Podemos verlos desde el camino y luego
                                                descender a ellos. Aquí dejamos las bicicletas y caminamos en medio de
                                                los estanques de sal hasta el valle del río Urubamba.
                                            </p>
                                            <!-----Booking---------->
                                            <div class="form text-center">

                                            </div>
                                            <div class="form text-center">
                                                <div id="separador"></div>
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
                                                <div class="fb-comments" data-href="https://andeanexclusive.com/ciclismo"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div><br>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            @include('layouts.booking-castellano')
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
                                                                    <a class='entry-link' href="mercado-urubamba"><img
                                                                            src="img/thumbnail/motocros-atv-peru.jpg"
                                                                            alt="Motocros - Valle Sagrado"></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='mercado-urubamba' class='button'>ATV
                                                                            in
                                                                            the andess</a>
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
                                                                    <a class='entry-link' href="hiram-bingham">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/Machupicchu.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Machu Picchu por Hiram Bingham"
                                                                            srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="hiram-bingham" class='button'>Machu
                                                                            Picchu en Hiram Bingham</a>
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
                                                                    <a class='entry-link' href="valle-sagrado"><img
                                                                            width="400" height="400"
                                                                            src="img/thumbnail/chincheros.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Valle Sagrado tour en Cusco"
                                                                            srcset="img/thumbnail/chincheros.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="valle-sagrado">Valle
                                                                            Sagrado de los Incas</a>
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
                                                                        href='machupicchu-acelerado'><img width="400"
                                                                            height="400"
                                                                            src="img/thumbnail/Machupicchu_AET.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Tour en Machu Picchu - Cusco" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='machupicchu-acelerado'
                                                                            class='button'>Machu Picchu Full Day</a>
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
        <div id="separador"></div>
    </div>
@endsection
