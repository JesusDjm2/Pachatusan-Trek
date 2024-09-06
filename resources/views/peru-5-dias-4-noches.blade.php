@extends('layouts.general-es')
@section('metas')
    <title>5 días en Perú - Peru por 5 días 4 noches - Machu Picchu - Valle Sagrado! - City Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="5 dias en Perú, tour alrededor de Peru" />
    <meta name="description" content="Tour de 5 dias en Perú, disfruta de los lugares mas populares." />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-5-dias-4-noches">
    <meta property="og:title" content="Peru por 5 días en los mejores lugares.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-5-dias-4-noches" />
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
                                        <a href="{{ route('peru-5-days') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="peru-5-days-4-nights">
                                            En</a>
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
                                                                <h1><?php $tour = 'PERÚ 5 DÍAS 4 NOCHES';
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
                <div data-onepage-title="Services" style="text-align:justify" data-onepage-slug="services"
                    class="vc_row-fluid vc_custom_1461248392126">
                    <center>
                        <h1 id="titulo1">CUSCO 5 DÍAS </h1>
                        <div id="separadordjm2"></div>
                        <i class="fa fa-clock-o"></i> 5 días<br>
                        <i class="fa fa-map-marker"></i> Lima - Valle Sagrado - Machupicchu -
                        Cusco <br>
                        <i class="fa fa-exclamation-circle"></i> Reservar con 30 días de
                        anticipación
                    </center>
                    <div id="separador"></div>
                    <h5>Overview</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>Bienvenida en el Apto. de Lima y por la tarde city tour</td>
                            </tr>
                            <tr>
                                <th>DÏA 02</th>
                                <td>Vuelo a Cusco y por la tarde city tour</td>

                            </tr>
                            <tr>
                                <th>DÏA 03</th>
                                <td>Valle Sagrado de los Incas & Aguas Calientes </td>
                            </tr>
                            <tr>
                                <th>DÏA 04</th>
                                <td>Ciudadela de Machupicchu</td>
                            </tr>
                            <tr>
                                <th>DÏA 05</th>
                                <td> Cusco & traslado al Apto. </td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <p><strong>Day 1. Bienvenida y City Tour en la ciudad de los Reyes.</strong></p>
                    <p>El día de su arribo al aeropuerto internacional Jorge Chávez, nuestro personal estará esperando
                        por ustedes, con un cartel el cual llevará su nombre, para luego transportarlos al hotel
                        seleccionado. Se les brindará tiempo libre para que puedan degustar de nuestra gastronomía. Por
                        la tarde iniciaremos nuestro tour haciendo una parada en el distrito más pequeño de Lima,
                        Barranco donde destaca su famoso Puente de los Suspiros, la Ermita y el monumento a Isabel
                        Granada Larco “Chabuca Granda”. Llegamos a Miraflores a conocer el Parque del Amor con una vista
                        panorámica de la Huaca Pucllana, templo Pre Inca centro religioso y administrativo habitada
                        entre los siglos III Y VIII d.c. daremos un paseo por el parque de los olivos, que datan desde
                        el Virreinato con un área de 23 hectáreas. Con 6 km de recorrido llegaremos a puertas de centro
                        histórico donde apreciaran el Palacio de Justicia, el Paseo de los héroes Navales, el Palacio
                        Francés y edificaciones coloniales tales como la Plaza Mayor, el Palacio de Gobierno, el Palacio
                        Arzobispal, La Basílica Catedral, el Palacio Municipal, la Plaza San Martin, entre otros.
                        Visitamos el Museo de la Nación, donde podrán divisar una colección de oro del Perú y una
                        selección de cerámicos, orfebrería y textiles de diversas culturas Precolombinas. Prosiguiendo
                        nuestro recorrido por la Iglesia y Convento de San Francisco, destaca la visita a sus criptas
                        subterráneas conocidas como Catacumbas y luego retornaremos al hotel.</p>

                    <p><strong>Day 2. Viaje en Avión de Lima a Cusco y City tour en Cusco.</strong></p>
                    <p>Luego del desayuno, nuestro personal se presentará en el hotel para trasladarlo al aeropuerto y
                        embarcarlo en Avión de Lima a Cusco y al llegar a la ciudad de Cusco nuestro personal estará
                        esperando por ustedes, con un cartel el cual llevará su nombre, para luego transportarlos al
                        hotel de su elección. Tendrá un tiempo libre para descansar, adaptarse a la altura, y tomar sus
                        alimentos. Entre la 1:00pm y 01:30pm, estaremos pasando por su hotel para poder dar inicio al
                        tour, visitaremos: La Catedral, Monumento religioso colonial de extraordinario valor artístico,
                        el Korikancha o Templo del Sol, donde podrá apreciar el finísimo trabajo que los incas
                        realizaban con las piedras. Continuando con el tour nos dirigiremos hacia Sacsayhuamán,
                        fortaleza con ubicación estratégica, que ofrece una visión sin igual de la ciudad, en este lugar
                        se realiza el Inti Raymi o “Fiesta del Sol” cada 24 de Junio, posteriormente visitaremos Qenqo,
                        Tambomachay, y Puca Pucara, complejos arqueológicos de carácter religioso.</p>

                    <p><strong>Day 3. Tour en el Valle Sagrado de los Inkas y Aguas Calientes.</strong></p>
                    <p>¡Valle Sagrado allá voy! Iniciamos el tour pasando por su hotel a la hora acordada y junto al
                        grupo partimos a visitar el impresionante centro arqueológico de Pisaq y su bello pueblo con
                        gente local muy amable, aquí podrás comprar regalos y recuerdos típicos de la zona a muy buen
                        precio. Al mediodía llegamos a Urubamba lugar donde degustaremos de la más exquisita gastronomía
                        andina en un restaurant local, continuamos nuestro tour a Ollantaytambo el ultimo pueblo Inca
                        que mantiene su estructura arquitectónica original, para finalizar este mágico recorrido nos
                        dirigiremos a la estación de trenes, viajar rumbo a Aguas calientes será una experiencia
                        placentera con el personal más atento, a su arribo en Aguas Calientes el personal del hotel lo
                        espera para dirigirnos al hotel, lugar donde le visitara nuestro guía y darle la explicación y
                        tips del tour del día siguiente.</p>
                    <p><strong>Day 4. Tour a Machu Picchu “La ciudad perdida de los incas” y caminata a
                            Huaynapicchu.</strong></p>
                    <p>¡El gran día llegó! Desayunamos y nos dirigimos de madrugada a la estación de buses, abordaremos
                        el bus rumbo al ingreso principal del Santuario de Machu Picchu. Ingresando junto al grupo,
                        tendremos un guiado en la ciudad perdida de los incas, por un tiempo aproximado de 2:30 hrs
                        realizando paradas en los puntos más importantes y energéticos para relajarnos y tomarnos las
                        mejores fotos de recuerdo. Culminado el tour guiado nuestro guía se despide y contaremos con
                        tiempo libre para poder disfrutar del impresionante paisaje, según su horario de tren bajaremos
                        a Aguas Calientes y abordaremos el tren rumbo a Ollantaytambo, lugar donde nuestro transporte lo
                        espera para trasladarlo a su hotel en la ciudad de Cusco. Importante: No hay un tiempo límite de
                        permanencia en MachuPicchu, pero sí usted sale de la ciudadela no podrá ingresar nuevamente, a
                        menos que cuente con un ingreso adicional o un ingreso a Huaynapicchu o Machu Picchu Montaña, la
                        misma que tenemos incluido para usted en este tour y podrá hacer este recorrido por su cuenta.
                    </p>
                    <p><strong>Day 5. Despedida</strong></p>
                    <p>Dos horas antes de la salida de su vuelo, los recogeremos de su hotel para luego transportarlos
                        al aeropuerto, lugar donde nos despediremos y daremos fin a nuestros servicios.</p>
                    <div id="separador"></div>
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                        style="text-transform: uppercase; font-size: 12px; font-weight: 700">
                        <li class="nav-item">
                            <a class="nav-link active" id="drop" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Incluye</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">No Incluye</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Importante</a>
                        </li>
                    </ul>
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            - Todos los traslados al hotel, aeropuerto, terminal, estaciones y atractivos.<br>
                            - Tours a Machu Picchu, Valle Sagrado de los Incas, ciudad del Cusco, y city tour en la
                            “Ciudad de los Reyes”.<br>
                            - Todos los transportes para los tours.<br>
                            - Pasajes en Tren ida y vuelta Ollantaytambo – Aguas Calientes – Ollantaytambo.<br>
                            - Pasajes de bus subida y bajada Aguas Calientes – Machu Picchu – Aguas Calientes.<br>
                            - Guía profesional de turismo en idioma inglés o español.<br>
                            - Viaje en bus de Ollantaytambo a Cusco.<br>
                            - Ingresos a los atractivos turísticos a visitar: Machu Picchu, Huaynapicchu, Valle Sagrado
                            de los Incas, ciudad del Cusco, y ciudad de los reyes.<br>
                            - Transfer en todos los despachos.<br>
                            - 04 noches en el hotel.<br>
                            - 04 desayunos.<br>
                            - 02 almuerzos (01 en el tour al Valle Sagrado y 01 en Aguas Calientes).
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            - Vuelos Lima/Cusco/Lima.<br>
                            - Alimentación completa (almuerzos y cenas no especificadas en el programa)</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            - La reserva de hoteles esta sujeta a disponibilidad de espacios. <br>
                            - Los precios no incluyen IGV para pasajeros Peruanos y extranjeros residentes en Perú. <br>
                            - Las personas de nacionalidad peruana, ecuatoriana, boliviana y colombiana tienen acceso a
                            un descuento
                            especial, por ser miembros de la CAN.
                        </div>
                    </div>
                    <div class="form text-center"> <br>
                        @include('layouts.payments')
                        <h5>Share</h5>
                        <!---------redes sociales------------------------>
                        <script type="text/javascript"
                            src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                            async="async"></script>
                        <div class="sharethis-inline-share-buttons"></div>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                            nonce="RA0e6tQN"></script>
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-5-dias-4-noches"
                            data-width="100%" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br>
                </div>
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
