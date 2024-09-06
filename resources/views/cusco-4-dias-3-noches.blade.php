@extends('layouts.general-es')
@section('metas')
    <title>Cusco 4 días | Cusco Sensacional - Lima - Machu Picchu - Valle Sagrado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Tour de 6 días,Cusco de lujo, Peru tours, Machu Picchu exclusivo" />
    <meta name="description"
        content="Le presentamos un tour detallado por 4 días en Cusco para disfrutar su estadía en Perú." />
    <meta property="og:url" content="https://www.andeanexclusive.com/cusco-4-dias-3-noches">
    <meta property="og:title" content="Cusco 4 days - Machu Picchu - Sacred Valley!">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/cusco-4-dias-3-noches" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="index-castellano" rel="home" class="logo-text-link"><img
                                        src="img/andean-exclusive-logo.png" id="logo"></a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu-castellano')
                                    <li id="display">
                                        <a href="{{ route('cusco-4-days') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="{{ route('cusco-4-days') }}">
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
                                                                <h1>
                                                                    <?php
                                                                    $tour = 'Cusco 4 Días - Cusco Sensacional';
                                                                    echo $tour;
                                                                    ?>
                                                                </h1>
                                                                <p><i class="fa fa-map-marker"></i> Cusco - Valle
                                                                    Sagrado - Machupicchu </p>
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

    </div>
    <div id="separador"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3" id="display2">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div data-onepage-title="Services" data-onepage-slug="services"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                            <h4 class="text-center">Tours Similares</h4>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-4-dias-3-noches" class="button">Cusco por 4 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="machupicchu-acelerado" class="button">Machu Picchu fulll day</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-6-dias-5-noches" class="button">Cusco por 6 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-10-dias-9-noches" class="button">Perú por 10 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-15-dias" class="button">Perú por 15 días</a>
                            </div>
                            <div id="separador"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <center>
                    <h2 id="titulo1">CUSCO SENSACIONAL</h2>
                    <div id="separadordjm2"></div>
                    <i class="fa fa-clock-o"></i> 4 días<br>
                    <i class="fa fa-map-marker"></i> Cusco - Valle Sagrado - Machupicchu -
                    <br>
                    <i class="fa fa-exclamation-circle"></i> Reservar con 30 días de anticiación
                </center><br>
                <h5>Cusco</h5>
                <i>Ombligo del mundo </i>
                <p>
                    Este programa tiene la fusión de los estilos arquitectónicos inca y
                    español en todo el Valle Sagrado y la ciudad del Cusco. <br>La riqueza
                    de su
                    gente en su folklore y artesanía, su forma de vida, su ropa, lo
                    convierten en un lugar que te dejará recuerdos inolvidables. <br><br>
                    Ven a
                    disfrutar de la belleza de la gente local y todas las tradiciones de
                    aquí.


                </p>
                <h5>Visión general</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>DÍA 01</th>
                            <td>Saqsayhuamán y Ciudad.</td>
                        </tr>
                        <tr>
                            <th>DÍA 02</th>
                            <td>Valle Sagrado. </td>

                        </tr>
                        <tr>
                            <th>DÍA 03</th>
                            <td>Machu Picchu. </td>
                        </tr>
                        <tr>
                            <th>DÍA 04</th>
                            <td>Viaje de regreso a casa. </td>
                        </tr>
                    </tbody>
                </table>
                <h5>ITINERARIO:</h5>
                <h2>Día 1. Visita a Sacsayhuamán y Recorrido por la ciudad del Cusco.</h2>
                <p>
                    Por la tarde de su llegada, visitaremos Sacsayhuaman, que literalmente
                    se traduce como
                    "Cabeza decorada del Puma." Este era el palacio gobernante del Inca que
                    contenía un templo donde el dios vivo dirigía a su pueblo. Fue llamada
                    fortaleza por los europeos debido a las inmensas piezas de piedra que se
                    utilizaron en su construcción, la tradición oral de Cusco afirma que
                    alrededor de 70.000 personas trabajaron en el palacio durante 50 años.
                    Es hora de almorzar. <br><br>
                    Después, caminamos por las principales calles y nos maravillamos de la
                    impecable piedra incaica y nos imaginamos un tiempo y un lugar cuando
                    los incas una vez tuvieron un gran imperio.<br><br>
                    <strong>Alojamiento en Cusco. </strong>
                </p>
                <img src="{{ asset('img/galeria/cusco-maravilloso.webp') }}" alt="Cusco Maravilloso" loading="lazy"
                    class="img-fluid"><span>Picture: Main Square Cusco -
                    Perú</span><br>

                <h2>Día 2. Visita al Valle Sagrado de los Incas.</h2>
                <p>
                    Salida desde el hotel a la mañana siguiente con dirección a Pisac y
                    Ollantaytambo para
                    ver las técnicas que los incas utilizan para cuidar la comida en las
                    terrazas, luego dirigirse a las salinas de Maras, una
                    fuente termal en la parte superior del valle descarga una pequeña
                    corriente de agua cargada de sal, que se desvía en sartenes de sal y se
                    evapora para producir una sal que se cosecha para la población local.
                    <br>
                    Llegamos a verlos desde la carretera y luego descender a ellos.
                    Después nos dirigiremos a visitar las magníficas terrazas
                    agrícolas de Moray donde se tallan diferentes niveles de terrazas en
                    hondos cuencos/sumideros que fueron utilizados por el Inca para
                    experimentar y adaptar los cultivos andinos a la altitud, entonces
                    tendremos la opción de disfrutar de una bonita caminata o simplemente
                    conducir para visitar el pueblo de Maras con la espectacular vista de
                    las montañas y disfrutar de nuestro almuerzo de picnic preparado por un
                    agradable catering al aire libre en medio de los paisajes.<br><br>
                    <strong>Alojamiento en Urubamba. </strong>
                </p>
                <img src="{{ asset('img/galeria/ollantaytambo-sacred-valley-of-the-incas-exclusive.webp') }}"
                    alt="Valle Sagrado de los incas" loading="lazy" class="img-fluid"><span>Picture: Ollantaytambo
                    fortress, Sacred
                    Valley of the incas</span><br>

                <h2>Día 3.- Machu Picchu El Secreto de los Incas </h2>
                <p>
                    Un día completo en la maravilla del mundo peruano, para ver la
                    majestuosidad y espiritualidad del lugar, aprender algo de historia y
                    pasar el mejor tiempo en la cima de la manifestación de la cultura
                    Incas. <br>

                    09:00am (aprox.) Salida del hotel a la ciudad de Ollantaytambo, para ver
                    el espectacular templo-fortaleza y pueblo de Ollantaytambo, un sitio que
                    ha cambiado poco desde los días de los Incas. Enormes piedras fueron
                    llevadas más de 16 kilómetros al sitio, las rampas del edificio todavía
                    están allí.<br><br>
                    10:00 am. Continuaremos a la estación de tren para abordar el tren a
                    Machupicchu.
                    El viaje en tren es uno de los más espectaculares del mundo. La línea de
                    ferrocarril sigue el río Urubamba a través del espectacular Cañón de
                    Vilcanota hasta la Ciudad Perdida de los Incas. Tendremos 25 minutos;
                    conducir para visitar el Centro Sagrado. Nuestro guía experto,
                    compartirá con nosotros la información más actual y las ideas personales
                    de Machupicchu.<br>
                    Suba al autobús para el viaje de 30 minutos a Aguas Calientes. Recoja el
                    equipaje y diríjase a la estación de tren para abordar el tren de
                    Vistadome a la estación de tren de Poroy, donde nuestro coche privado
                    los estará esperando para un viaje de 30 minutos a nuestro hotel en
                    Cusco.
                    <br><br>
                    <strong>Alojamiento en Cusco</strong>
                </p>
                <img src="{{ asset('img/galeria/visita-machu-picchu.webp') }}" alt="Exclusive Machu Picchu"
                    loading="lazy" class="img-fluid"><br>

                <h2>Día 4.- Traslado al aeropuerto. Vuelo de regreso a casa.</h2>

                <p> Su representante de Andean Exclusive pasará por su hotel 2 horas
                    antes de la salida de su vuelo y lo acompañará al aeropuerto para darle
                    su última asistencia en el embargue de su vuelo.</p>
                </p>

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

                <!---------redes sociales------------------------>
                <div class="form text-center"> <br>
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
                    <div class="fb-comments" data-href="https://andeanexclusive.com/cusco-4-dias-3-noches"
                        data-width="100%" data-numposts="5"></div>

                    <!---------Fin redes sociales------------------------>
                </div><br>
            </div>
            <div class="col-lg-3" id="display2">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        @include('layouts.booking-castellano')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
