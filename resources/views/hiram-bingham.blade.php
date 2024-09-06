@extends('layouts.general-es')
@section('metas')
    <title>Disfruta del lujoso y exclusivo tren "Hiram Bingham" hacia Machu Picchu</title>
    <meta name="keywords" content="Cusco tours, Tren de loju Cusco, Hiram Bingham, tren de lujo" />
    <meta name="description"
        content="Dirígete a Machu Picchu en primera clase mientras abordas el encantador tren Belmond Hiram Bingham." />
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/Hiram-bingham.jpg" />
    <meta property="og:url" content="https://www.andeanexclusive.com/hiram-bingham">
    <meta property="og:title" content="Disfruta del lujoso tren Hiram Bingham hacia Machu Picchu">
    <meta property="og:type" content="webside">
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/hiram-bingham" />
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
                                        <a href="{{ route('hiram-bingham-en') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('hiram-bingham-en') }}">
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
                                                                    <h1><?php $tour = 'TREN DE LUJO HIRAM BINGHAM';
                                                                    echo $tour; ?> </h1>
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
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-10"><a href="index-castellano">Inicio</a>
                                                    /
                                                    <a href="experiencias">Populares</a> /
                                                    <a>Tren Hiram Bingham</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="separador"></div>
                                        <div class="col-lg-3" id="display2">
                                            <div class="sticky-top" style="padding-top: 95px; z-index: 40">
                                                <div data-onepage-title="Services" data-onepage-slug="services"
                                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                                    <h4 class="text-center">Tours Similares</h4>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="mercado-urubamba" class="button">Tour Mercado de
                                                            Urubamba</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="valle-sagrado" class="button">Tour Valle Sagrado</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="cusco-6-dias-5-noches" class="button">Cusco por 6
                                                            días</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="peru-7-dias-6-noches" class="button">Perú por 7
                                                            días</a>
                                                    </div>
                                                    <div id="similares">
                                                        <div id="separador"></div>
                                                        <a href="peru-12-dias" class="button">Perú por 12 días</a>
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
                                            <div class="text-center">
                                                <h2 id="titulo1">TREN DE LUJO BELMOND HIRAM BINGHAM</h2>
                                                <div id="separadordjm2"></div>
                                                <p class="text-center"><i class="fa fa-clock-o"></i> Full day</p>
                                                <p class="text-center"><i class="fa fa-map-marker"></i> Cusco - Valle
                                                    Sagrado - Machupicchu </p>
                                                <p class="text-center" style="color: #0c8178">Reservar con 30 días de
                                                    anticipación </p>
                                            </div>
                                            <div id="separador"></div>
                                            <p>Este tren inspirado en Pullman de la década de 1920 lo llevará a través
                                                de los Andes y le dará vistas incomparables del paisaje que pasa. Una
                                                vez que llegue a Machu Picchu, omita las largas colas y diríjase
                                                directamente a la ciudadela para realizar una visita guiada por las
                                                ruinas antes de regresar a Cusco.</p>
                                            <ul>
                                                <li> Admire las vistas incomparables del paisaje que pasa desde el tren.
                                                </li>
                                                <li> Evite las largas colas en Machu Picchu y realice una visita guiada
                                                    privada. </li>
                                                <li> Pruebe deliciosa comida gourmet, vino y pisco durante su viaje
                                                </li>
                                                <li> Disfrute de la música y los bailes tradicionales durante la
                                                    experiencia de Hiram Bingham. </li>
                                            </ul>

                                            <div class="text-center">
                                                <img src="../img/galeria/hiram-bingham-comida.webp" loading="lazy"
                                                    alt="hiram bingham tren">
                                            </div> <br><br>
                                            <h3>Itinerario:</h3>
                                            <p>Su experiencia en Machupicchu comienza cuando lo recogemos en su hotel,
                                                para llevarlo a la estación de tren de Poroy, a 30 minutos de la ciudad
                                                de Cusco. Aquí abordas el tren Hiram Binghan que viaja a través del
                                                Valle Sagrado de los Incas hasta la Ciudad Perdida de Machu Picchu, un
                                                viaje en el Hiram Bingham te lleva a través de los paisajes más bellos e
                                                impresionantes del Perú. <br><br>
                                                En el camino desde Cusco a la mítica ciudad
                                                perdida de Machu Picchu, el Hiram Bingham atraviesa Ollantaytambo en el
                                                Valle Sagrado de los Incas. Mientras recorre la espectacular campiña
                                                peruana, en la comodidad de un vagón Pullman bellamente restaurado, le
                                                serviremos una deliciosa comida de nuestro menú inspirado en los
                                                Andes.<br>
                                                A ritmo de cajón peruano y panderetas, y durante todo el recorrido, un
                                                show único lo acompañará con música típica e internacional, enmarcando
                                                lo que será un viaje inolvidable a la ciudadela de Machu Picchu – Aguas
                                                Calientes.
                                                <br><br>

                                            <div class="text-center">
                                                <img src="../img/galeria/hiram-bingham-paseo.webp" loading="lazy"
                                                    alt="hiram bingham tren">
                                            </div> <br><br>

                                            A su llegada a Aguas
                                            Calientes, aborde un autobús especialmente reservado para los pasajeros
                                            de Hiram Bingham para el viaje rápido a Machu Picchu, evitando largas
                                            colas para el servicio regular de autobuses. Luego de disfrutar de las
                                            vistas, tendremos una visita guiada en Machu Picchu. Después, tiene
                                            tiempo libre para explorar la ciudadela, caminar un poco, ir al Templo
                                            de la Luna y el Puente Inca, o simplemente relajarse y sumergirse en la
                                            atmósfera. Por la tarde regresaremos a Aguas Calientes para tomar el
                                            tren para regresar a Cusco. Por la noche, en el viaje de Machu Picchu a
                                            Poroy, se le servirá un lujoso menú de cuatro platos, completo con Pisco
                                            Sour y exquisiteces peruanas. Una vez en Poroy, lo llevaremos de regreso
                                            a las comodidades de su hotel en la ciudad de Cusco. <br> Cusco Llegada
                                            alrededor de las 9:40 p.m.</p> <br>

                                            <!---------redes sociales------------------------>
                                            @include('layouts.payments')
                                            <h5 class="text-center">Compartir</h5>
                                            <script type="text/javascript"
                                                src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                                                async="async"></script>
                                            <div class="sharethis-inline-share-buttons"></div>
                                            <div id="fb-root"></div>
                                            <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                                                nonce="RA0e6tQN"></script>
                                            <div class="fb-comments" data-href="https://andeanexclusive.com/hiram-bingham"
                                                data-width="100%" data-numposts="5"></div>

                                            <!---------Fin redes sociales------------------------>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <!-----Booking---------->
                                            @include('layouts.booking-castellano')
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
                                                                <a class='entry-link' href="cusco-6-dias-5-noches">
                                                                    <img src='img/thumbnail/cusco-01.JPG'
                                                                        alt="6 dias tour en Cusco"></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <h3>Cusco Auténtico</h3>
                                                                <div class='info'>
                                                                    Duración: 6 días
                                                                </div>
                                                                <div class='readmore'>
                                                                    <a href='cusco-6-dias-5-noches' class='button'>RLeer
                                                                        más</a>
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
                                                                <a class='entry-link' href="ciclismo">
                                                                    <img width="400" height="400"
                                                                        src="img/thumbnail/biking-cusco.jpg"
                                                                        class="attachment-post-grid-s size-post-grid-s"
                                                                        alt="ciclismo tour en Cusco"></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <h3>Ciclismo en los Andes</h3>
                                                                <div class='info'>
                                                                    Duración: 1 día
                                                                </div>
                                                                <div class='readmore'>
                                                                    <a href="ciclismo" class='button'>Leer más</a>
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
                                                                <a class='entry-link' href="valle-sagrado">
                                                                    <img width="400" height="400"
                                                                        src="img/thumbnail/chincheros.jpg"
                                                                        class="attachment-post-grid-s size-post-grid-s"
                                                                        alt="sacred valley"
                                                                        srcset="img/thumbnail/chincheros.jpg 400w"
                                                                        sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <h3>Valle Sagrado</h3>
                                                                <div class='info'>
                                                                    Duración: 1 día
                                                                </div>
                                                                <div class='readmore'>
                                                                    <a class='button' href="valle-sagrado">Leer
                                                                        más</a>
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
                                                                <a class='entry-link' href="mercado-urubamba">
                                                                    <img width="400" height="400"
                                                                        src='img/thumbnail/urubamba-market.png'
                                                                        class="attachment-post-grid-s size-post-grid-s"
                                                                        alt="urubamba - rio vilvanota" /></a>
                                                            </div>
                                                            <div class='entry-info'>
                                                                <h3>Mercado Urubamba</h3>
                                                                <div class='info'>
                                                                    Duración: 1 día
                                                                </div>
                                                                <div class='readmore'>
                                                                    <a href='mercado-urubamba' class='button'>Leer
                                                                        más</a>
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
        </section>
    </div>
@endsection
