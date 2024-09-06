@extends('layouts.general-es')
@section('metas')
    <title>El corazón del valle sagrado de los Incas - Inkas | Cusco Perú | Destino Seguro</title>
    <meta name="keywords" content="Experiencias en Perú, tours de lujo, Lima, Cusco, Cusco exclusivo" />
    <meta property="og:description" content="Conoce el increíble Valle Sagrado de los Incas en el centro de Cusco." />
    <meta property="og:title" content="El corazón del valle sagrado">
    <meta property="og:type" content="webside">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/valle-sagrado.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/valle-sagrado">
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
                                            <li><a>ES</a></li>
                                            <li><a href="Sacred_Valley">EN</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="Sacred_Valley">En</a>
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
                                    class="vc_row wpb_row valle vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1><?php $tour = 'Valle Sagrado de los Incas';
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
                                                <div class="col-lg-6 col-sm-10"><a href="index-castellano">Inicio</a> /
                                                    <a href="experiencias">Popular</a> /
                                                    <a>Valle Sagrado </a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="text-center" id="titulo1" class="text-center">El corazón del valle
                                            sagrado</h2>

                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="text-center">"Disfruta de una experiencia única en el corazón
                                                del Valle Sagrado de los Incas y descubre lugares como: Pisaq,
                                                Ollantaytambo, Maras entre otros."</h5>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <p class="text-center" style="color: #0c8178"><i class="fa fa-map-marker"></i>
                                                Cusco - Perú <br>Duracion: 11 horas
                                            </p>
                                            <p style="font-style: italic">*Tarifa para niños válida entre los 6 y 12
                                                años. Tour liberado para niños
                                                de 0 a 5 años. Una vez que hayas reservado, escribe a
                                                reservas@denomades.com para indicar nombre, RUT o pasaporte, y
                                                nacionalidad del menor que viaja sin costo.</p>
                                            <h4>Vista general:</h4>
                                            <p>
                                                Restos arqueológicos, paisajes, poblados, costumbres… Con esta excursión
                                                visitarás el pueblo de Písac, la fortaleza de Ollantaytambo y numerosos
                                                vestigios de la civilización inca. ¿Te vienes a explorar el Valle
                                                Sagrado?
                                            </p>
                                            <h4>Itinerario: </h4>
                                            <p>
                                                Nuestro transfer lo visitara en su Hotel para trasladarlo al lugar de
                                                inicio de su Tour, entre las 08:00 hrs y 08:30 hrs. Realizaremos un
                                                viaje de 30 minutos hasta llegar a Pisac ubicado al oriente de la ciudad
                                                del Cusco. En Pisac visitaremos las ruinas situadas en la parte superior
                                                de la ciudad, así como el mercado artesanal ubicado en los alrededores
                                                de la Plaza de Armas. En Pisac podremos apreciar cómo los pobladores
                                                utilizan las técnicas agrarias Incas para resolver el problema de
                                                sembrar en las pendientes de los cerros y así lograr la mejor
                                                productividad. Los visitantes quedarán impresionados ante la
                                                distribución urbana de una construcción hecha con grandes bloques
                                                pétreos pulidos en simetría, también visitaremos el actual mercado
                                                artesanal lleno de color en el cual podemos encontrar una diversidad de
                                                trabajos artesanales a la venta. Al medio día tendremos un almuerzo
                                                buffet en un restaurant turístico en la localidad de Urubamba. Terminado
                                                el almuerzo nos dirigiremos a Ollantaytambo: ubicado a 76 km de la
                                                ciudad de Cusco, construido en un área aproximada de 600 hectáreas, está
                                                establecida en medio de tres valles que da paso a la ceja de selva donde
                                                se encuentra Machupicchu siguiendo el curso del rio, posee lugares de
                                                control estratégicos establecidos en el relieve geográfico accidentado
                                                convirtiendo al lugar arqueológico en una fortaleza. Contiene evidencias
                                                arqueológicas que muestran fines astronómicos, administrativos, urbanos,
                                                ganaderos y agrícolas. Además la ciudad de Ollantaytambo es considerada
                                                una ciudad suspendida en el tiempo por el adecuamiento urbano inca
                                                colonial con gran uso de la ingeniería hidráulica distribuyendo el agua
                                                mediante canales que cruzan sus calles manteniendo su paisaje original.
                                                De retorno a la ciudad del Cusco visitaremos Chinchero: ubicado al
                                                noroeste de la ciudad del Cusco, en la actualidad es un atractivo
                                                turístico porque mantiene viva las tradiciones ancestrales en la
                                                agricultura manteniendo la mayor variedad de producción de papas andinas
                                                y el manejo del tejido con iconografía i simbología inca el cual es
                                                expuesto por mujeres locales a la usanza tradicional, siendo un punto
                                                importante para la visita de los viajeros. Regresamos a Cusco, nuestro
                                                tour finaliza aprox. a las 18:30 horas en Cusco, finalizando así este
                                                valle sagrado de los Incas Tour.
                                            </p>
                                            <h4>Incluye:</h4>
                                            <p>
                                                &#10004; Ingresos al sitio arqueológico de Pisac, Ollantaytambo y
                                                Chinchero.<br>
                                                &#10004; Traslado a todos los lugares mencionados.<br>
                                                &#10004; Guía en grupo profesional Inglés - Español.<br>
                                                &#10004; Almuerzo Buffet
                                            </p>
                                            <h4>No Incluye:</h4>
                                            <p>
                                                &#88; Desayuno y cena.<br>
                                                &#88; Propinas.<br>
                                                &#88; Impuesto IGV.<br>
                                                &#88; Otros servicios no mencionados en el programa.
                                            </p>
                                            <h4>Para reservar:</h4>
                                            <p>
                                                ✤ Puede reservar su programa con el 50% de mínimo del total. <br>
                                                ✤ Puede pagar con tarjeta de credito/debito, PayPal, o deposito
                                                bancario.<br>
                                                ✤ Pregunte por la disponibilidad del programa antes de pagar.<br>
                                                ✤ El precio de los tours varian de acuerdo al tipo de acomodación.<br>
                                                ✤ Reservar en:<a href="mailto:reservas@andeanexclusive.com">
                                                    reservas@andeanexclusive.com</a>
                                            </p>
                                            <br>
                                            @include('layouts.payments')
                                            <h5 class="text-center">Compartir</h5>
                                            <!---------redes sociales------------------------>
                                            <script type="text/javascript"
                                                src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                                                async="async"></script>
                                            <div class="sharethis-inline-share-buttons"></div>
                                            <div id="fb-root"></div>
                                            <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                                                nonce="RA0e6tQN"></script>
                                            <div class="fb-comments" data-href="https://andeanexclusive.com/valle-sagrado"
                                                data-width="100%" data-numposts="5"></div>

                                            <!---------Fin redes sociales------------------------>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form text-center">
                                                <div class="form text-center">
                                                    @include('layouts.booking-castellano')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>

                                <div data-onepage-title="Services" data-onepage-slug="services"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461227943574">
                                            <div class="wpb_wrapper">
                                                <div class='heading  text-center '>
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
                                                                    <a class='entry-link' href="mercado-urubamba"><img
                                                                            src="img/thumbnail/urubamba-market.png"
                                                                            alt="Urubamba Market - Sacred Valley"></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='mercado-urubamba' class='button'>Urubamba
                                                                            market</a>
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
                                                                            alt=""
                                                                            srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="hiram-bingham" class='button'>Machu
                                                                            Picchu By Hiram Binghan</a>
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
                                                                        href="peru-10-dias-9-noches"><img width="400"
                                                                            height="400"
                                                                            src="img/thumbnail/chincheros.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt=""
                                                                            srcset="img/thumbnail/chincheros.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button'
                                                                            href="peru-10-dias-9-noches">Perú por 10
                                                                            días</a>
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
                                                                        href="cusco-4-dias-3-noches"><img width="400"
                                                                            height="400"
                                                                            src="img/thumbnail/Machupicchu_AET.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Tour in Machu Picchu - Cusco" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='cusco-4-dias-3-noches'
                                                                            class='button'>Cusco por 4 días</a>
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
