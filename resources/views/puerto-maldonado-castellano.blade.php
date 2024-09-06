@extends('layouts.general-es')
@section('metas')
    <title>Puerto Maldonado - Amazonía de Perú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="tour de 3 días, Luxury amazonas, puerto maldonado tours, Puerto Maldonado" />
    <meta property="og:description"
        content="Nearby are the Manú National Park, Tambopata National Reserve, and Bahuaja-Sonene National Park..." />
    <meta property="og:url" content="https://www.andeanexclusive.com/puerto-maldonado-castellano">
    <meta property="og:title" content="Puerto Maldonado - Amazonía de Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/Puerto-Maldonado-Per%C3%BA.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/puerto-maldonado-castellano" />
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
                                    @include('layouts.menu-castellano')
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="btn botondjm">Language <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a>Español</a></li>
                                            <li><a href="puerto-maldonado">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a>Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="puerto-maldonado">En</a>
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
                                    class="vc_row wpb_row puerto vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1><?php $tour = 'Puerto Maldonado';
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
                                                <div class="col-lg-6 col-sm-12"><a href="/">Home</a> /
                                                    <a href="experiencias">Populares</a> /
                                                    <a>Puerto Maldonado</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="display2">
                                            <div id="similares">
                                                <h1>Tours Similares</h1>
                                                <div id="separador"></div>
                                                <a href="arequipa-3-dias"><img src="img/thumbnail/arequipa-peru.webp"
                                                        alt="arequipa luxury tours"></a>
                                                <h2>Arequipa</h2>
                                                <p>Duración: 4 Días</p>

                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="lima-tour-3-dias"><img src="img/thumbnail/ceviche-gambas.webp"
                                                        alt="Lima tours luxury - Tour"></a>
                                                <h2>Lima</h2>
                                                <p>Duración: 3 Días</p>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puno-3-dias-tour"><img src="img/thumbnail/puno-peru.webp"
                                                        alt="Luxury puno tours"></a>
                                                <h2>Puno</h2>
                                                <p>Duración: 3 Días</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h2 id="titulo1">PUERTO MALDONADO </h2>
                                                <h4> 'DONDE CIENTOS DE AVES, INCLUYENDO GUACAMAYAS, SE ALIMENTAN DE
                                                    ARCILLA'</h4>
                                                <p>Sugerido por: "Andean Exclusive Tours"</p>
                                                <div id="separadordjm2"></div>
                                                <p style="color: #0c8178"><i class="fa fa-map-marker"> Puerto Maldonado
                                                        - Perú</i>
                                                </p>
                                            </center>
                                            <div id="separador"></div>
                                            <h5>Vista General</h5>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>DÍA 01</th>
                                                        <td>Vuelo de Lima a Chiclayo.</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 02</th>
                                                        <td>Lago Oxbow - Recorrido etnobotánico.</td>

                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 03</th>
                                                        <td>Puerto Maldonado - Lima</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div id="separador"></div>
                                            <h5>ITINERARIO:</h5>
                                            <p><strong>Día 01: Vuelo de Lima hacia Chiclayo.</strong></p>
                                            <p>Al llegar a Lima o Cusco. le daremos la bienvenida en el aeropuerto y
                                                lo llevará diez minutos a nuestra sede de Puerto Maldonado. Mientras
                                                Disfruta de su primer contacto con el bosque en nuestros jardines, le
                                                pediremos
                                                empacar solo el equipo necesario para los próximos días, y dejar el
                                                resto en nuestro depósito de seguridad. Esto nos ayuda a mantener las
                                                embarcaciones y la carga livianas.
                                                Bordeando Puerto Maldonado, manejamos 20 kilómetros hasta el río
                                                Tambopata.
                                                puerto, ingresando a la comunidad nativa de infierno. El puerto es
                                                comunal
                                                negocio. Traslado en lancha puerto fluvial Tambopata al refugio
                                                Amazonas, el
                                                Paseo en bote de dos horas y media desde el puerto de Tambopata hasta el
                                                refugio.
                                                Amazonas pasará por la comunidad de Infierno y Tambopata
                                                Puesto de control de reservas nacionales y en la zona de amortiguamiento
                                                de este 1.3
                                                unidad de conservación de un millón de hectáreas. Box lunch, A la
                                                llegada, el albergue
                                                El gerente le dará la bienvenida y le informará sobre la navegación
                                                importante y
                                                consejos de seguridad. Cena, búsqueda de caimanes, saldremos a la orilla
                                                del río.
                                                por la noche, explorando las costas con faros y linternas para
                                                cateterizar a los
                                                destellos rojos de reflejo de ojos de caimán. <strong>Pernocte en el
                                                    refugio
                                                    Amazonas.</strong></p><br>

                                            <p><strong>Día 02: Lago Oxbow - Recorrido etnobotánico.</strong></p>
                                            <p>Desayuno, visita al lago en meandro: Remaremos alrededor del lago en una
                                                canoa o
                                                un catamarán, en busca de vida silvestre junto al lago, como hoatzin,
                                                caiman y
                                                hoatzin, caiman y hornerd screamers, con la esperanza de ver los ofter
                                                que son
                                                visto con poca frecuencia aquí. También será recompensado con gastos
                                                generales
                                                avistamientos de guacamayos. Canopy Tower: Una caminata de treinta
                                                minutos desde el refugio
                                                Amazonas conduce al andamio de 25 metros. Torre de dosel. un treinta
                                                minutos a pie del refugio Amazonas conduce al metro 25
                                                andamio torre con dosel. Una escalera con pasamanos que atraviesa el
                                                medio proporciona un acceso seguro a las plataformas de arriba. la torre
                                                ha sido
                                                construir un terreno alto uopn, por lo tanto aumentando su horizonte de
                                                la
                                                Bosque primario continuo que se extiende hacia fuera. Tambopata Nacional
                                                Reservar. Desde aquí vistas de bandadas de dosel de especies mixtas, así
                                                como
                                                es probable que haya tucanes, guacamayos y aves rapaces. Almuerzo.
                                                Visita a la finca: cinco minutos
                                                abajo de los albergues se encuentra una granja propiedad y administrada
                                                por carismático
                                                Don Manuel de la comunidad vecina de Condenado. Él crece un
                                                variedad de cultivos amazónicos populares y desconocidos, casi todas las
                                                plantas y
                                                El árbol que ves tiene un propósito. <strong>Pernocte en el Refugio
                                                    Amazonas.</strong></p><br>

                                            <p><strong>Día 03: Puerto Maldonado - Lima</strong></p>
                                            <p>Desayuno; Traslado en lancha - Refugio Amazonas a Puerto fluvial Al
                                                Tambopata,
                                                Traslado puerto fluvial Tambopata a Pto. Sede Maldonado, Traslado
                                                punto de referencia Sede Maldonado al aeropuerto. Volvemos a trazar
                                                nuestro río y camino
                                                viaje de regreso a Pto. Maldonado, nuestra oficina y el aeropuerto.
                                                Dependiendo de
                                                horarios de las aerolíneas, esto puede requerir salidas bajas.</p>
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
                                                <div class="fb-comments" data-href="https://puerto-maldonado-castellano"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div><br>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <!-----Booking---------->
                                            <div class="form text-center" id="display2">
                                                @include('layouts.booking-castellano')
                                            </div>
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
                                                                    <a class='entry-link' href="arequipa-3-dias"><img
                                                                            srcset="img/thumbnail/arequipa-peru.webp" /></a>
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
                                                                    <a class='entry-link' href="lima-tour-3-dias"><img
                                                                            width="400" height="400"
                                                                            src="img/thumbnail/ceviche-gambas.webp"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Luxury tour in Lima" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="lima-tour-3-dias" class='button'>Tour
                                                                            en Lima</a>
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
                                                                    <a class='entry-link' href="puno-3-dias-tour"><img
                                                                            width="400" height="400"
                                                                            src="img/thumbnail/puno-peru.webp"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Puno tour in Uros Islands" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="puno-3-dias-tour">Tour
                                                                            en Puno</a>
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
