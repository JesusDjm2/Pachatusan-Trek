@extends('layouts.general-es')
@section('metas')
    <title>6 días en Perú - Peru por 6 días 5 noches - Machu Picchu - Valle Sagrado - City Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="6 días en Perú, Peru por 6 días 5 noches, Machu Picchu, Valle Sagrado, City Tours" />
    <meta name="description" content="atrévete a conocer Perú en 6 días." />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-6-dias-5-noches">
    <meta property="og:title" content="Perú por 6 días, Lima, Cusco, Arequipa">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-6-dias-5-noches" />
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
                                    <li id="display" class="menu-has-children">
                                        <a href="{{ route('peru-6-days') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="{{ route('peru-6-days') }}">
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
                                                                <h1><?php $tour = 'PERÚ 6 DÍAS 5 NOCHES';
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
                                <a href="cusco-4-dias-3-noches" class="button">Cusco por 6 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-5-dias-4-noches" class="button">Perú por 5 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-6-days-5-nights" class="button">Cusco por 6 días</a>
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
                        <h1 id="titulo1">La excelencia de Perú</h1>
                        <div id="separadordjm2"></div>
                        <i class="fa fa-clock-o"></i> 6 días<br>
                        <i class="fa fa-map-marker"></i> Cusco - Machupicchu - Puno<br>
                        <i class="fa fa-exclamation-circle"></i> Reservar con 30 días de anticipación
                    </center>
                    <div id="separador"></div>
                    <h3>Vista general del Tour 6 días</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>City tour en Cusco</td>
                            </tr>
                            <tr>
                                <th>DÏA 02</th>
                                <td>Tour a Machupicchu "La ciudad perdida de los incas"</td>

                            </tr>
                            <tr>
                                <th>DÏA 03</th>
                                <td>Tour al Valle Sagrado de los Inkas </td>
                            </tr>
                            <tr>
                                <th>DÏA 04</th>
                                <td>Viaje turístico de Cusco a Puno visitando "Raqchi"</td>
                            </tr>
                            <tr>
                                <th>DÏA 05</th>
                                <td> Tour al Lago Titi Caca, Islas de Los Urus y Taquile</td>
                            </tr>
                            <tr>
                                <th>DÏA 06</th>
                                <td> Chullpas de Sillustani y Vuelo de avión de Juliaca a Li</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <p><strong>Day 1. City tour en Cusco</strong></p>
                    <p>Deberán estar en el aeropuerto de Lima, por lo menos dos horas antes de la hora del vuelo a
                        Cusco, tendrán que acercarse al counter de la aerolínea que le indicaremos donde se chequearán y
                        les entregarán sus boletos aéreos presentando sus documentos y tomaran un vuelo de una hora a la
                        ciudad del Cusco "Capital Arqueológica de América", ahí nuestro personal le dará la bienvenida y
                        lo trasladará al hotel seleccionado, al llegar al hotel podrá degustar del famoso mate de Coca,
                        esta planta posee propiedades que ayudara a su organismo contra el mal de altura, luego podrá
                        descansar y aclimatarse un poco en el hotel o si desea salir a hacer una caminata suave por las
                        principales calles de la ciudad. Al promediar las 13:00hrs min lo recogeremos del hotel para
                        empezar el tour en la ciudad de Cusco y alrededores. Usted visiatara el centro de la ciudad
                        milenaria del Cusco, la Plaza de Armas, la Catedral, el Monasterio de Santo Domingo, Templo del
                        Koricancha y las ruinas cercanas de Kenko, Puka Pukará, Tambomachay y la fortaleza de
                        Sacsayhuaman, construido con enormes rocas, hasta el momento sigue siendo un enigma la
                        movilización y uso de éstas, no habiendo canteras de piedra por la zona. A las 19:00 hrs.</p>

                    <p><strong>Day 2. Tour a Machupicchu "La ciudad perdida de los incas"</strong></p>
                    <p>Después de tomar un buen desayuno los recogeremos del hotel y los trasladaremos hasta la estación
                        de Trenes de Cusco para iniciar la excursión a Machupicchu, la Ciudad perdida de los Incas.
                        Tendremos un viaje de 4 horas de duración hasta llegar al poblado turístico de Aguas Calientes,
                        de ahí tomaremos un bus, en media hora llegaremos a la ciudadela de Machupicchu. Con nuestro
                        guía recorreremos la ciudad Inca entre 2 a 3 horas. Luego tendremos tiempo para bajar a Aguas
                        Calientes y almorzar, por la tarde tomaremos el Tren de regreso a Cusco. Al llegar como siempre
                        nuestro personal los espera y los llevara al hotel para pernoctar.</p>
                    <img src="{{ asset('img/tours/machupicchu.png') }}" loading="lazy"
                        alt="exclusivo y de lujo Machu Picchu"><br><br>

                    <p><strong>Day 3. Tour al Valle Sagrado de los Inkas</strong></p>
                    <p>Los recogemos entre las 08:00 hrs a 08:20 hrs, el tour se iniciara haciendo una parada en el
                        mirador natural de Corao donde el guía les dará una introducción sobre el Valle Sagrado,
                        continuara el recorrido disfrutando de un bello paisaje, el primer lugar de visita será el
                        tradicional mercado indio de Pisaq aquí usted podrá hacer algunas compras de suvenires o
                        artesanías, ascenderán al Centro Arqueológico de Pisaq donde después de una pequeña caminata
                        llegaran a principales recintos Incas. Continuando con el viaje se dirigirán a la ciudad de
                        Urubamba donde en un exclusivo restaurant podrá degustar de la gastronomía local. Por la tarde
                        visitaremos la Fortaleza y Ciudadela de Ollantaytambo, construida para vigilar el ingreso a esta
                        parte del valle y protegerlo de posibles invasiones de los pobladores de la selva, en la
                        actualidad Ollantaytambo es considerada como el pueblo Inca viviente por la conservación de las
                        costumbres y estilo urbanístico aún tienen sus calles. En el camino de regreso a Cusco
                        visitaremos el pintoresco pueblito de Chinchero, donde se encuentran los restos de la hacienda
                        real de Túpac Inca Yupanqui. Admirará También su bien preservado Muro Inca en la plaza principal
                        y visitará el hermoso templo colonial con interesantes frescos en el pórtico.</p>
                    <img src="{{ asset('img/tours/valle-sagrado.jpg') }}" loading="lazy"
                        alt="Tour exclusivo en el valle sagrado"><br><br>

                    <p><strong>Day 4. Viaje turístico de Cusco a Puno visitando "Raqchi"</strong></p>
                    <p>Descripción del viaje: El tour se inicia a las 06:00 hrs en la que deberá presentarse en el
                        terminal de buses para poder chequearse y abordar en bus que saldrá a la 07:00 hrs, el
                        desplazamiento del bus será hacia la zona sur de la ciudad, lo que le permitirá visualizar las
                        periferias de Cusco. El primer lugar de visita será el Templo de Andahuaylillas conocido
                        mundialmente como la Capilla Sixtina de América. A la hora de almuerzo nos detendremos en la
                        ciudad de Sicuani donde degustarán de un almuerzo típico tipo buffet. Al continuar visitaremos
                        el templo inca de Raqchi, el paso de la Raya a 4335 msnm y el museo inca Aymara de Pucara. Al
                        llegar a la ciudad de Puno el personal de nuestra agencia lo esperará para conducirlo al hotel
                        donde pasará la noche.</p>

                    <p><strong>Day 5. Tour al Lago Titi Caca, Islas de Los Urus y Taquile</strong></p>
                    <p>Lo llevaremos al puerto de Puno (Lago Titicaca) donde se embarcara en el bote que los llevara a
                        visitar las Islas Flotantes de los Uros por un espacio de 45 minutos, apreciara las costumbres
                        de esta isla y su artesanía. Continuando con el recorrido en bote visitara la Isla Taquile de
                        gran valor paisajístico, étnico, cultural y arqueológico, retornaremos al Puerto de Puno, ahí se
                        les recogerá y se les llevara al Hotel o si desean podrán quedarse en el centro de Puno,
                        finalmente la noche la pasara en el hotel seleccionado.</p>
                    <img src="{{ asset('img/tours/puno-peru-islands.jpg') }}" loading="lazy"
                        alt="Tour en Puno exclusivo de lujo"><br><br>

                    <p><strong>Day 6. Chullpas de Sillustani y Vuelo de avión de Juliaca a Lima</strong></p>
                    <p>Luego de tomar el desayuno en el hotel, tendrán algunas horas libres para visitar el centro de la
                        ciudad de Puno, a la hora pactada la noche anterior los recogeremos del hotel y los
                        trasladaremos a las Chullpas de Sillustani, torres funerarias pre-incas, la más alta mide
                        aproximadamente 12 ms. luego nos dirigiremos al aeropuerto de Juliaca que esta a una hora de
                        Puno, ahí se chequearan en el counter del aeropuerto, les entregaran sus boletos aéreos y luego
                        tomaran el vuelo hacia Lima.</p>
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
                            - Tours a Machu Picchu, Valle Sagrado de los Incas, ciudad del Cusco y city tour en la
                            “Ciudad de los Reyes”.<br>
                            - Todos los transportes para los tours.<br>
                            - Pasajes en Tren ida y vuelta Ollantaytambo – Aguas Calientes – Ollantaytambo.<br>
                            - Pasajes de bus subida y bajada Aguas Calientes – Machu Picchu – Aguas Calientes.<br>
                            - Guía profesional de turismo en idioma inglés o español.<br>
                            - Viaje en bus de Ollantaytambo a Cusco.<br>
                            - Ingresos a los atractivos turísticos a visitar: Machu Picchu, Huaynapicchu, Valle Sagrado
                            de los Incas, ciudad del Cusco y ciudad de los reyes.<br>
                            - Transfer en todos los despachos.<br>
                            - 05 noches en hotel.<br>
                            - 05 desayunos.<br>
                            - 02 almuerzos (01 en el tour al Valle Sagrado y 01 en Aguas Calientes).
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            - Vuelos Lima/Cusco/Lima.<br>
                            - Alimentación completa (almuerzos y cenas no especificadas en el programa)</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            La reserva de hoteles esta sujeta a disponibilidad de espacios – Los precios no incluyen IGV
                            para pasajeros Peruanos y extranjeros residentes en Perú.
                        </div>
                    </div>
                    <!-----Booking---------->
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-6-dias-5-noches"
                            data-width="100%" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br><br>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        @include('layouts.booking-castellano')
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="display">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div data-onepage-title="Services" data-onepage-slug="services"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                            <h4 class="text-center">Tours Similares</h4>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-4-dias-3-noches" class="button">Cusco por 6 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-5-dias-4-noches" class="button">Perú por 5 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-6-days-5-nights" class="button">Cusco por 6 días</a>
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
@endsection
