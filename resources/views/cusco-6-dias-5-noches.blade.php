@extends('layouts.general-es')
@section('metas')
    <title>Cusco 6 días en privado - Lima - Cusco - Machu Picchu - Valle Sagrado!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Tour de 6 días privado, Cusco de lujo, tours en Perú, lujo en Machu Picchu, 6 dias en cusco, cusco por 6 dias, andean travel experience, your exclusive tours" />
    <meta name="description"
        content="Le presentamos un recorrido detallado durante 6 días para disfrutar de su estadía en Cusco. Viaja a Cusco este 2022. Tours en Cusco Perú - Machu Picchu." />
    <meta property="og:url" content="https://www.andeanexclusive.com/cusco-6-dias-5-noches">
    <meta property="og:title" content="Cusco 6 días - Machu Picchu - Valle Sagrado!">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="{{ route('inicio') }}" rel="home" class="logo-text-link"><img
                                        src="img/andean-exclusive-logo.png" id="logo"></a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu')
                                    <li id="display">
                                        <a href="{{ route('cusco-6-days') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('cusco-6-days') }}">
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
                                                                <h1><?php $tour = 'PERÚ 6 DÍAS / Cusco Auténtico';
                                                                echo $tour; ?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Machupicchu -
                                                                    Cusco - Valle Sagrado
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
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div id="separador"></div>
    <div class="container">
        <div class="location">
            <div class="row text-center">
                <div class="col-lg-3 col-sm-2" id="display2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 text-center"><a href="{{ route('inicio') }}">Inicio</a> /
                    <a href="{{ route('experiencias') }}">Populares</a> /
                    <a>Cusco por 6 días</a>
                </div>
                <div class="col-lg-3 col-sm-2" id="display2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" id="display2">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div data-onepage-title="Services" data-onepage-slug="services"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                            <h4 class="text-center">Tours Similares</h4>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="{{ route('peru-5-dias') }}" class="button">Perú por 5 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="{{ route('machupicchu-acelerado') }}" class="button">Machu Picchu Full
                                    Day</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="{{ route('peru-6-dias') }}" class="button">Perú por 6 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="{{ route('peru-8-dias') }}" class="button">Perú por 8 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="{{ route('peru-15-dias') }}" class="button">Perú por 15 días</a>
                            </div>
                            <div id="separador"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-tours">
                <div class="text-center">
                    <h2 id="titulo1">Cusco Auténtico</h2>
                    <div id="separadordjm2"></div>
                    <p class="text-center"><i class="fa fa-clock-o"></i> 6 días</p>
                    <p class="text-center"><i class="fa fa-map-marker"></i> Lima - Valle Sagrado - Machupicchu -
                        Cusco </p>
                    <p class="text-center" style="color: #0c8178">Reservar con 30 días de anticipación </p>
                </div><br>
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
                <h2>Visión general Cusco 6 dias</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>DÍA 01</th>
                            <td>Llegada a Lima - Vuelo a Cusco- Viaje al Valle Sagrado
                            </td>
                        </tr>
                        <tr>
                            <th>DÍA 02</th>
                            <td>Moray – Maras – Salineras</td>

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
                            <td>Sacsayhuaman – Ciudad</td>
                        </tr>
                        <tr>
                            <th>DÍA 06</th>
                            <td>Traslado al aeropuerto. Vuelo de regreso a casa.</td>
                        </tr>
                    </tbody>
                </table>
                <h5>Itinerario detallado Cusco 6 días:</h5>
                <h2>Día 1.- Llegada a Lima - Vuelo a Cusco- Viaje al Valle Sagrado</h2>
                <p>Su tour comienza en Lima donde nuestro representante le estará esperando
                    en su vuelo de llegada para ayudarle con su vuelo de conexión a Cusco.
                    Poco después del despegue, el avión sube sobre los Andes donde las
                    vistas de las montañas son espectaculares.
                    <br>
                    <img class="img-fluid" loading="lazy" alt="Sitio Arqueologico de pisaq"
                        src="https://andeanexclusive.com/img/galeria/valle-sagrado.jpg"><i>
                        Foto: Sitio Arqueológico de Pisaq</i><br><br>
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
                <img class="img-fluid" loading="lazy" alt="Salineras de Maras Moray tour"
                    src="https://andeanexclusive.com/img/galeria/maras-moray-tour-4-dias-cusco-exclusive.webp"><i>Foto:
                    Salineras de Maras</i><br><br>

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
                    src="https://andeanexclusive.com/img/galeria/visita-machu-picchu.webp"><br><br>
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
                <img src="https://andeanexclusive.com/img/galeria/guia-de-viajes-huayna-picchu-travel.webp" width="100%"
                    alt="Tour de subida al Huayna Picchu" loading="lazy"><i>Foto:Huayna Picchu</i><br>
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

                <h2>Día 5.- Sacsayhuaman – Ciudad</h2>

                <p>
                    Por la mañana visitaremos <strong>Sacsayhuaman,</strong> que
                    literalmente se traduce como "Cabeza decorada del Puma." Este era el
                    palacio gobernante del Inca que contenía un templo donde el dios vivo
                    dirigía a su pueblo. Fue llamada fortaleza por los europeos debido a las
                    inmensas piezas de piedra que se utilizaron en su construcción, la
                    tradición oral de Cusco afirma que alrededor de 70.000 personas
                    trabajaron en el palacio durante 50 años. Es hora de almorzar.<br><br>
                    Después del almuerzo, caminamos por las calles y nos maravillamos de la
                    impecable piedra incaica y nos imaginamos un tiempo y un lugar cuando
                    los incas una vez tuvieron un gran imperio. Recorremos la Plaza de Armas
                    colonial, visitando la<strong> Catedral,</strong> que contiene una de
                    las mayores muestras de pintura mestiza de la ciudad del siglo XVIII.
                    Siguiendo la Catedral visitaremos el Museo Histórico Inca para una buena
                    visión de la historia de los Incas.<br><br>
                    <strong>Alojamiento en Cusco. </strong>
                </p>
                <img class="img-fluid" loading="lazy" alt="Vista de la ciudad del Cusco"
                    src="https://andeanexclusive.com/img/galeria/cusco-maravilloso.jpg"><br><br>
                <h2> Día 6.- Traslado al aeropuerto. Vuelo de regreso a casa.</h2>
                <p> Su representante de Andean Exclusive pasará por su hotel 2 horas
                    antes de la salida de su vuelo y lo acompañará al aeropuerto para darle
                    su última asistencia en el embargue de su vuelo.</p><br><br>

                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                    style="text-transform: uppercase; font-size: 12px; font-weight: 700">
                    <li class="nav-item">
                        <a class="nav-link active" id="drop" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true">Incluye:</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                            role="tab" aria-controls="pills-profile" aria-selected="false">No Incluye</a>
                    </li>
                </ul>
                <div class="tab-content pb-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <ul>
                            <li>Todas las entradas a los centros arqueológicos a visitar</li>
                            <li>Entradas a la ciudadela de Machu Picchu</li>
                            <li>Transporte privado durante todo su viaje</li>
                            <li>Snack y agua disponible todo el tiempo en el transporte privado</li>
                            <li>Guía privado para todos sus tours</li>
                            <li>Personal de asistencia durante toda su visita</li>
                            <li>Desayunos incluidos</li>
                            <li>Almuerzo del día 01, 02 y 04</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <ul>
                            <li>Propinas</li>
                            <li>Comida no especificada en el programa</li>
                        </ul>
                    </div>
                </div>
                <div class="form text-center">
                    <div class="row text-center">
                        <div class="col-lg-4"><img class="img-fluid"
                                src="https://andeanexclusive.com/img/Payments/Mastercard-logo.webp" width="110px">
                        </div>
                        <div class="col-lg-4"><img class="img-fluid"
                                src="https://andeanexclusive.com/img/Payments/paypal.webp"></div>
                        <div class="col-lg-4"><img class="img-fluid"
                                src="https://andeanexclusive.com/img/Payments/visa-logo.webp" width="100px"
                                style="margin-top: 1.5em"></div>
                    </div><br><br>
                    <h5>Compartir</h5>
                    <!---------redes sociales------------------------>
                    <script async="" src="https://buttons-config.sharethis.com/js/6232ae6fcdbe0200193e185e.js"></script>
                    <script src="https://connect.facebook.net/es_LA/sdk.js?hash=c55af652c091f31219cc57cc0b1ea22e" async=""
                        crossorigin="anonymous"></script>
                    <script type="text/javascript"
                        src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&amp;product=inline-share-buttons"
                        async="async"></script>
                    <div class="sharethis-inline-share-buttons st-center  st-inline-share-buttons st-animated"
                        id="st-1">
                        <div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
                            <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">

                        </div>
                        <div class="st-btn" data-network="whatsapp" style="display: inline-block;">
                            <img alt="whatsapp sharing button" src="https://platform-cdn.sharethis.com/img/whatsapp.svg">

                        </div>
                        <div class="st-btn" data-network="twitter" style="display: inline-block;">
                            <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">

                        </div>
                        <div class="st-btn" data-network="email" style="display: inline-block;">
                            <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">

                        </div>
                        <div class="st-btn st-last" data-network="sharethis" style="display: inline-block;">
                            <img alt="sharethis sharing button"
                                src="https://platform-cdn.sharethis.com/img/sharethis.svg">

                        </div>
                    </div>
                    <div id="fb-root" class=" fb_reset">
                        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                            <div></div>
                        </div>
                    </div>
                    <script async="" defer="" crossorigin="anonymous"
                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&amp;version=v13.0&amp;appId=588015035734857&amp;autoLogAppEvents=1"
                        nonce=""></script>
                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"
                        data-href="https://andeanexclusive.com/cusco-6-dias-5-noches" data-width="100%" data-numposts="5"
                        style="width: 100%;" fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="app_id=588015035734857&amp;container_width=525&amp;height=100&amp;href=https%3A%2F%2Fandeanexclusive.com%2Fcusco-6-dias-5-noches&amp;locale=es_LA&amp;numposts=5&amp;sdk=joey&amp;version=v13.0&amp;width=">
                        <span style="vertical-align: bottom; width: 100%; height: 213px;"><iframe name="f3b5b732438ed84"
                                width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin"
                                title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                src="https://www.facebook.com/v13.0/plugins/comments.php?app_id=588015035734857&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df18f64c94a9acd4%26domain%3Dandeanexclusive.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fandeanexclusive.com%252Ff14341cee1c8ed4%26relation%3Dparent.parent&amp;container_width=525&amp;height=100&amp;href=https%3A%2F%2Fandeanexclusive.com%2Fcusco-6-dias-5-noches&amp;locale=es_LA&amp;numposts=5&amp;sdk=joey&amp;version=v13.0&amp;width="
                                style="border: none; visibility: visible; width: 100%; height: 213px;"
                                class=""></iframe></span>
                    </div>

                    <!---------Fin redes sociales------------------------>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        @include('layouts.booking-castellano')
                    </div>
                </div>
                <div class="col-lg-3" id="display">
                    <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                        <div class="card">
                            <div class="card-body">
                                <div data-onepage-title="Services" data-onepage-slug="services"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                    <h4 class="text-center">Similar Tours</h4>
                                    <div id="similares">
                                        <div id="separador"></div>
                                        <a href="peru-5-days-4-nights" class="button">Perú for 5 days</a>
                                    </div>
                                    <div id="similares">
                                        <div id="separador"></div>
                                        <a href="machupicchu-accelerate" class="button">Machu Picchu Full Day</a>
                                    </div>
                                    <div id="similares">
                                        <div id="separador"></div>
                                        <a href="{{ route('peru-6-days') }}" class="button">Perú for 6 days</a>
                                    </div>
                                    <div id="similares">
                                        <div id="separador"></div>
                                        <a href="peru-8-days-7-nights" class="button">Perú for 8 days</a>
                                    </div>
                                    <div id="similares">
                                        <div id="separador"></div>
                                        <a href="peru-15-days-tour" class="button">Perú for 15 days</a>
                                    </div>
                                    <div id="separador"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
