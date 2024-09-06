@extends('layouts.general-es')
@section('metas')
    <title>Cusco 5 días - Machu Picchu - Valle Sagrado!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Tour de 5 dias días, Cusco lujoso, Peru tours, Machu Picchu exclusivo" />
    <meta name="description" content="Le presentamos un tour de 5 días y 4 noches para su estadía en la ciudad del Cusco" />
    <meta property="og:url" content="https://www.andeanexclusive.com/cusco-5-dias-4-noches">
    <meta property="og:title" content="Cusco 5 días - Machu Picchu - Valle Sagrado!">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/cusco-5-dias-4-noches" />
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
                                        <a href="{{ route('cusco-5-days') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('cusco-5-days') }}">
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
                                    class="vc_row wpb_row days01 vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1><?php $tour = 'CUSCO 5 DÍAS / CUSCO MAJESTUOSO';
                                                                    echo $tour; ?></h1>
                                                                    <p><i class="fa fa-map-marker"></i> Cusco -
                                                                        Valle Sagrado - Maras - Moray - Salineras -
                                                                        Machupicchu </p>
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
                                                    <a href="experiencias">Populares</a> /
                                                    <a>Cusco tour 5 days</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="separador"></div>
                                        <div class="col-lg-3" id="display2">
                                            <h4 class="text-center">Tours Similares</h4>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="cusco-4-dias-3-noches" class="button">Cusco 4 días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-6-dias-5-noches" class="button">Perú por 6
                                                    días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="cusco-6-dias-5-noches" class="button">Cusco por 6
                                                    días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="adventures/tour-laguna-humantay" class="button">Laguna
                                                    Humantay</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-10-dias-9-noches" class="button">Perú por 10
                                                    días</a>
                                            </div>
                                            <div id="separador"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h2 id="titulo1"> CUSCO Majestuoso </h2>
                                                <div id="separadordjm2"></div>
                                                <i class="fa fa-clock-o"></i> 5 días<br>
                                                <i class="fa fa-map-marker"></i> Lima - Valle Sagrado - Machupicchu -
                                                Cusco <br>
                                                <i class="fa fa-exclamation-circle"></i> Reservar con 30 días de
                                                anticipación

                                            </center><br>
                                            <h5>Cusco</h5>
                                            <i>Ciudad de tesoros escondidos
                                            </i>
                                            <p>
                                                Naturaleza e historia juntos, este es el corazón de la atracción del
                                                Perú, especialmente en Cusco, un lugar donde los visitantes pueden
                                                relajarse y explorar para enriquecerse, al mismo tiempo, crear
                                                conexiones auténticas, en uno de los lugares más sorprendentes de
                                                América del Sur.
                                            </p>
                                            <h5>Visión general</h5>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>DÍA 01</th>
                                                        <td>Llegada a Lima - Vuelo a Cusco- Viaje al Valle Sagrado</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 02</th>
                                                        <td>Maras Moray & Salineras</td>

                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 03</th>
                                                        <td>Machu Picchu El Secreto de los Incas </td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 04</th>
                                                        <td>Machupicchu – caminatas opcionales</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 05</th>
                                                        <td> Traslado al aeropuerto. Vuelo de regreso a casa. </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div id="separador"></div>
                                            <h5>Itinerario detallado Cusco 5 días:</h5>
                                            <h2>Día 1. Llegada a Lima - Vuelo a Cusco- Viaje al Valle Sagrado</h2>
                                            <p>Su tour comienza en Lima donde nuestro representante le estará esperando
                                                en su vuelo de llegada para ayudarle con su vuelo de conexión a Cusco.
                                                Poco después del despegue, el avión sube sobre los Andes donde las
                                                vistas de las montañas son espectaculares.
                                                <br><br>
                                                <img class="img-fluid" loading="lazy" alt="Sitio Arqueologico de pisaq"
                                                    src="{{ asset('img/galeria/valle-sagrado.jpg') }}"><i>
                                                    <strong>Foto:Sitio Arqueológico de Pisac</strong></i><br><br>

                                                Al llegar a Cusco, nuestro guía privado nos estará esperando. Nuestro
                                                viaje comienza hacia el Valle Sagrado. La primera parada es <strong>
                                                    Awanacancha,</strong> una finca con llamas, alpacas y vicuñas. El
                                                recorrido continúa por el cañón del río Corao, con espectaculares vistas
                                                del valle del Urubamba. Descendemos al fondo del valle hasta el típico
                                                pueblo de <strong>Pisac</strong> para visitar el sitio arqueológico y el
                                                típico pueblo.<br><br>
                                                Almorzaremos en un restaurante local en el Valle Sagrado de los
                                                Incas<br><br>
                                                <strong>Alojamiento en Urubamba. </strong>
                                            </p>

                                            <h2>Día 2.- Moray – Maras – Salineras. </h2>
                                            <p>
                                                Salida desde el hotel en dirección a visitar las magníficas terrazas
                                                agrícolas de <strong>Moray</strong> donde se tallan diferentes niveles
                                                de terrazas en hondos cuencos/sumideros que fueron utilizados por el
                                                Inca para experimentar y adaptar los cultivos andinos a la altitud,
                                                entonces tendremos la opción de disfrutar de una bonita caminata o
                                                simplemente conducir para visitar el pueblo de Maras con la espectacular
                                                vista de las montañas y disfrutar de nuestro almuerzo de picnic
                                                preparado por un agradable catering al aire libre en medio de los
                                                paisajes.<br><br>
                                                Después del almuerzo conduciremos a visitar las<strong> salinas de
                                                    Maras.</strong> Una fuente termal en la parte superior del valle
                                                descarga una pequeña corriente de agua cargada de sal, que se desvía en
                                                sartenes de sal y se evapora para producir una sal que se cosecha para
                                                la población local. Llegamos a verlos desde la carretera y luego
                                                descender a ellos. Volver al hotel.
                                                <br><br><strong>Alojamiento en Urubamba. </strong>
                                            </p>
                                            <img class="img-fluid" loading="lazy" alt="Salineras de Maras-Moray"
                                                src="{{ asset('img/galeria/maras-moray-tour-4-dias-cusco-exclusive.webp') }}"><i>
                                                <strong>Foto: Salineras de Maras</strong></i><br><br>

                                            <h2>Día 3.- Machu Picchu El Secreto de los Incas </h2>
                                            <p>
                                                09:00am (aprox.) Salida del hotel a la ciudad de
                                                <strong>Ollantaytambo,</strong> para ver el espectacular
                                                templo-fortaleza y pueblo de Ollantaytambo, un sitio que ha cambiado
                                                poco desde los días de los Incas. Enormes piedras fueron llevadas más de
                                                16 kilómetros al sitio, las rampas del edificio todavía están
                                                allí.<br><br>
                                                10:00 am. Continuaremos a la estación de tren para abordar el tren a
                                                <strong>Machu Picchu.</strong>
                                                El viaje en tren es uno de los más espectaculares del mundo. La línea de
                                                ferrocarril sigue el río Urubamba a través del espectacular Cañón de
                                                Vilcanota hasta la Ciudad Perdida de los Incas. Tendremos 25 minutos;
                                                conducir para visitar el Centro Sagrado. Nuestro guía experto,
                                                compartirá con nosotros la información más actual y las ideas personales
                                                de Machupicchu.<br><br>
                                                <strong>Alojamiento en Aguas Calientes. </strong>
                                            </p>
                                            <img class="img-fluid" loading="lazy" alt="Machu Picchu exclusivo"
                                                src="{{ asset('img/galeria/visita-machu-picchu.webp') }}"><br><br>

                                            <h2> Día 4.- Machu Picchu – caminatas opcionales</h2>

                                            <p>
                                                Por la mañana tendremos caminatas opcionales, como a la Puerta del Sol,
                                                Huaynapicchu o El Templo de la Luna, que varían en su longitud y
                                                dificultad, pero sin duda son una gran opción para disfrutar de la
                                                naturaleza alrededor de este sitio único.
                                            </p>

                                            <h3>Huayna Picchu:</h3>
                                            <p>
                                                Es la imponente montaña detrás del sitio real de Machupicchu. Para
                                                muchas personas, escalar Huayna Picchu es uno de los puntos más
                                                destacados al visitar Machu Picchu. usted verá cómo el Inca cortó
                                                algunos pasos de las rocas y como el viento alrededor del lado de una
                                                montaña verá Machu Picchu desde diferentes ángulos, las vistas son
                                                impresionantes y realmente le dan una impresión de la magnitud del
                                                sitio. Antes de llegar a la cima también tendrás que pasar por un túnel
                                                tallado en las rocas y cuanto más alto consigas más estructuras. Algunas
                                                estructuras y terrazas están construidas en lugares imposibles que
                                                realmente hablan a su imaginación.</p>
                                            <img src="{{ asset('img/galeria/guia-de-viajes-huayna-picchu-travel.webp') }}"
                                                width="100%" alt="Tour Subida a Huayna Picchu"
                                                loading="lazy"><i>Picture: Montaña Huayna Picchu</i><br>
                                            <h3>Montaña Machu Picchu:</h3>
                                            <p>
                                                El trek de montaña ofrece vistas incomparables del famoso santuario inca
                                                y vistas panorámicas del paisaje de montaña circundante. En su cumbre
                                                los sacerdotes incas una vez realizaron rituales en fechas especiales,
                                                así como saludos litúrgicos al Salkantay Apu, una de las montañas más
                                                poderosas de los Andes peruanos.
                                                A medida que el sendero se acerca a la base de la montaña Machu Picchu,
                                                los pasos se vuelven más empinados y más desafiantes.
                                                <br><br>
                                                <strong>Almuerzo buffet en el restaurante del hotel Sanctuary
                                                    Lodge</strong>
                                                <br><br>
                                                Tiempo libre para la exploración independiente
                                                Suba al autobús para el viaje de 30 minutos a Aguas Calientes. Recoja el
                                                equipaje y diríjase a la estación de tren para abordar el tren de
                                                Vistadome a la estación de tren de Poroy, donde nuestro coche privado
                                                los estará esperando para un viaje de 30 minutos a nuestro hotel en
                                                Cusco.<br><br>
                                                <strong>Alojamiento en Cusco. </strong>
                                            </p>
                                            <h2> Día 5.- Traslado al aeropuerto. Vuelo de regreso a casa.</h2>
                                            <p> Su representante de Andean Exclusive pasará por su hotel 2 horas
                                                antes de la salida de su vuelo y lo acompañará al aeropuerto para darle
                                                su última asistencia en el embargue de su vuelo.</p>
                                            <h3>Incluye:</h3>
                                            <ul>
                                                <li>Todas las entradas a los centros arqueológicos a visitar</li>
                                                <li>Entradas a la ciudadela de Machu Picchu</li>
                                                <li>Transporte privado durante todo su viaje</li>
                                                <li>Snack y agua disponible todo el tiempo en el transporte privado</li>
                                                <li>Guía privado para todos sus tours</li>
                                                <li>Personal de asistencia durante toda su visita</li>
                                            </ul>
                                            <h3>No Incluye:</h3>
                                            <ul>
                                                <li>Propinas</li>
                                                <li>Comida no especificada en el programa</li>
                                            </ul>
                                            <div id="separador"></div>

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
                                                    data-href="https://andeanexclusive.com/cusco-5-dias-4-noches"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            @include('layouts.booking-castellano')
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
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner vc_custom_1461228417147">
                                                        <div class="wpb_wrapper">
                                                            <div class='travel-item'>
                                                                <div class='entry-img'>
                                                                    <a class='entry-link text-center'
                                                                        href="cusco-4-dias-3-noches"><img
                                                                            src="img/thumbnail/destino-per.JPG" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='cusco-4-dias-3-noches'
                                                                            class='button'>Cusco 4 days tour</a>
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
                                                                        href="cusco-6-dias-5-noches"><img width="400"
                                                                            height="400"
                                                                            src='img/thumbnail/cusco-01.JPG'
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Cusco tours 6 days" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <h3>CUSCO AUTENTICO</h3>
                                                                    <div class='info'>
                                                                        <br> Duración: 6 días
                                                                    </div>
                                                                    <div class='readmore'>
                                                                        <a href="cusco-6-dias-5-noches" class='button'>Más
                                                                            info</a>
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
                                                                        href="valle-sagrado"><img width="400"
                                                                            height="400"
                                                                            src='img/thumbnail/llama-peru.JPG'
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Cusco sensational" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <h3>Magesthic Cusco</h3>
                                                                    <div class='info'>
                                                                        <br> Duration: 5 day
                                                                    </div>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="valle-sagrado">Read
                                                                            more</a>
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
