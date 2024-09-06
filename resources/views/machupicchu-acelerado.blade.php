@extends('layouts.general-es')
@section('metas')
    <title>Cusco tour de 3 días por machu picchu - Machu Picchu Accelerate</title>
    <meta name="keywords" content="Cusco tours, Luxury Cusco, Peru tours, Machu Picchu luxury" />
    <meta name="description" content="We present you a detailed tour for 3 days during your stay in Cusco." />
    <meta property="og:url" content="https://www.andeanexclusive.com/machupicchu-acelerado">
    <meta property="og:image" content="https://andeanexclusive.com/img/Machu-Picchu-exclusive.jpg" />
    <meta property="title" content="Cusco 3 days - Machu Picchu Accelerate">
    <meta property="og:type" content="article">
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/machupicchu-acelerado" />
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
                                        <a href="{{ route('machupicchu-accelerate') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href="{{ route('machupicchu-accelerate') }}">
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
                                                                <h1><?php $tour="Machu Picchu Acelerado"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Machupicchu -
                                                                    Cusco - Sacred Valley
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
                    <a>Machu Picchu acelerado</a>
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
                <h2 class="text-center" id="titulo1">Machu Picchu acelerado</h2>
                <div id="separadordjm2"></div>
                <p class="text-center"><i class="fa fa-clock-o"></i> 3 días</p>
                <p class="text-center"><i class="fa fa-map-marker"></i> Cusco - Machu Picchu</p>
                <p class="text-center" style="color: #0c8178">Reservar con 30 días de anticipación </p>

                <h5>Machupicchu</h5>
                <i>Ciudad Escondida de los Incas </i> <br>
                <p>
                    Este programa puede mostrar la manifestación más grande de la cultura inca. Grandes e impresionantes
                    bloques de piedra unidos sin ninguna amalgama forman uno de los centros religiosos, políticos y
                    culturales más importantes del imperio inca. Un lugar donde sentir la energía y la paz que
                    necesitas. Todo cubierto por la historia y las técnicas de agricultura mística .
                </p><br><br>
                <h5>Vista General</h5>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>DÍA 01</th>
                            <td>Saqsayhuaman & Cusco Ciudad</td>
                        </tr>
                        <tr>
                            <th>DÍA 02</th>
                            <td>Machupicchu Full Day </td>

                        </tr>
                        <tr>
                            <th>DÍA 03</th>
                            <td>Viaje de Regreso</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="h2-tours">Itinerario detallado Cusco 3 días:</h2>
                <h3>Día 1. Visita a Saqsayhuamán y recorrido por la ciudad del Cusco</h3>
                <p>
                    Por la tarde de su llegada, visitaremos Sacsayhuaman, que literalmente se traduce como "Cabeza
                    decorada del Puma." Este era el palacio gobernante del Inca que contenía un templo donde el dios
                    vivo dirigía a su pueblo. Fue llamada fortaleza por los europeos debido a las inmensas piezas de
                    piedra que se utilizaron en su construcción, la tradición oral de Cusco afirma que alrededor de
                    70.000 personas trabajaron en el palacio durante 50 años. Es hora de almorzar.<br><br>

                    Después, caminamos por las principales calles y nos maravillamos de la impecable piedra incaica y
                    nos imaginamos un tiempo y un lugar cuando los incas una vez tuvieron un gran imperio.<br><br>

                    <strong>Alojamiento en Cusco. </strong>
                </p>

                <img src="{{ asset('img/galeria/cusco-maravilloso.webp') }}" alt="Plaza de Armas Cusco - Perú"
                    loading="lazy" class="img-fluid"><span>Foto: Plaza de Armas Cusco - Perú</span><br><br>

                <h3>Día 2. Machu Picchu día Completo </h3>
                <p>Un día completo en la maravilla del mundo peruano, para ver la majestuosidad y espiritualidad del
                    lugar, aprender algo de historia y pasar el mejor tiempo en la cima de la manifestación de la
                    cultura Incas.
                </p>
                <img src="{{ asset('img/galeria/visita-machu-picchu.webp') }}" alt="Machu Picchu exclusivo"
                    loading="lazy" class="img-fluid"><br><br>
                <p>
                    09:00am (aprox.) Salida del hotel a la ciudad de Ollantaytambo, para ver el espectacular
                    templo-fortaleza y pueblo de Ollantaytambo, un sitio que ha cambiado poco desde los días de los
                    Incas. Enormes piedras fueron llevadas más de 16 kilómetros al sitio, las rampas del edificio
                    todavía están allí.<br><br>

                    10:00 am. Continuaremos a la estación de tren para abordar el tren a Machupicchu. El viaje en tren
                    es uno de los más espectaculares del mundo. La línea de ferrocarril sigue el río Urubamba a través
                    del espectacular Cañón de Vilcanota hasta la Ciudad Perdida de los Incas. Tendremos 25 minutos;
                    conducir para visitar el Centro Sagrado. Nuestro guía experto, compartirá con nosotros la
                    información más actual y las ideas personales de Machupicchu.<br><br>
                    Suba al autobús para el viaje de 30 minutos a Aguas Calientes. Recoja el equipaje y diríjase a la
                    estación de tren para abordar el tren de Vistadome a la estación de tren de Poroy, donde nuestro
                    coche privado los estará esperando para un viaje de 30 minutos a nuestro hotel en Cusco.<br><br>
                    <strong>Alojamiento en Cusco
                    </strong>
                </p>

                <h3>Día 3.- Traslado al aeropuerto. Vuelo de regreso a casa.</h3>
                <p>
                    Su representante de Andean Exclusive pasará por su hotel 2 horas antes de la salida de su vuelo y lo
                    acompañará al aeropuerto para darle su última asistencia en el embargue de su vuelo.
                </p>

                <div class="form text-center">
                    <!---------redes sociales------------------------>
                    <script type="text/javascript"
                        src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                        async="async"></script>
                    <div class="sharethis-inline-share-buttons"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                        nonce="RA0e6tQN"></script>
                    <div class="fb-comments" data-href="https://andeanexclusive.com/machupicchu-acelerado"
                        data-width="100%" data-numposts="5"></div>

                    <!---------Fin redes sociales------------------------>
                </div><br><br>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        @include('layouts.booking')
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="display">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div class="card-body">
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

            </div>
        </div>
    </div>
@endsection
