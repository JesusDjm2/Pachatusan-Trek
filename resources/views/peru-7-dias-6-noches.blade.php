@extends('layouts.general-es')
@section('metas')
    <title>7 días en Perú - Peru por 7 días 6 noches - Machu Picchu - Valle Sagrado - City Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Tour de 7 días, Luxury Cusco, Peru tours, Machu Picchu luxury" />
    <meta name="description" content="Disfruta de Perú en 7 dias alrededor del país." />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-7-dias-6-noches">
    <meta property="og:title" content="Perú 7 dias y 6 noches">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-7-dias-6-noches" />
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
                                        <a>
                                            <button type="button" class="botondjm">Idioma <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a>Español</a></li>
                                            <li><a href="peru-7-days-6-nights">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="peru-7-days-6-nights">EN</a>
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
                                                                <h1><?php $tour = 'PERÚ 7 DÍAS 6 NOCHES';
                                                                echo $tour; ?></h1>
                                                                <p><i class="fa fa-map-marker"> Lima - Cusco - Puno</i>
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
                <div class="col-lg-3 col-sm-2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-10"><a href="index-castellano">Inicio</a> /
                    <a href="experiencias">Popular</a> /
                    <a>Perú 7 días - 6 noches</a>
                </div>
                <div class="col-lg-3 col-sm-2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" id="display2">
                <div data-onepage-title="Services" data-onepage-slug="services"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                    <h4 class="text-center">Tours Similares</h4>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="cusco-4-dias-3-noches" class="button">Cusco for 4 days</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-5-dias-4-noches" class="button">Tour in Perú for 5 days</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="cusco-6-dias-5-noches" class="button">Cusco for 6 days</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-8-dias-7-noches" class="button">Tour in perú for 8 days</a>
                    </div>
                    <div id="separador"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div data-onepage-title="Services" style="text-align:justify" data-onepage-slug="services"
                    class="vc_row-fluid vc_custom_1461248392126">
                    <div class="text-center">
                        <h2 id="titulo1"> PERÚ POR 7 DÍAS </h2>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178">Reservar con 30 días de anticipación
                        </p>
                    </div>
                    <div id="separador"></div>

                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>Bienvenida y City Tour en la ciudad de los Reyes.</td>
                            </tr>
                            <tr>
                                <th>DÏA 02</th>
                                <td>City tour por Cusco y alrededores</td>

                            </tr>
                            <tr>
                                <th>DÏA 03</th>
                                <td>Tour a Machupicchu "La Ciudad perdida de los Incas" </td>
                            </tr>
                            <tr>
                                <th>DÏA 04</th>
                                <td>Tour al Valle Sagrado de los Incas</td>
                            </tr>
                            <tr>
                                <th>DÏA 05</th>
                                <td> Viaje turístico de Cusco a Puno, visitando Raqchi.</td>
                            </tr>
                            <tr>
                                <th>DÏA 06</th>
                                <td> Tour al lago Titicaca, isla de Los Uros y Taquile.</td>
                            </tr>
                            <tr>
                                <th>DÏA 07</th>
                                <td> Chullpas de Sillustani y vuelo de Juliaca a Lima.</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5>ITINERARIO:</h5>
                    <h2 class="h2-tours">Day 1. Bienvenida y City Tour en la ciudad de los Reyes. </h2>
                    <p>El día de su arribo al aeropuerto internacional Jorge Chávez, nuestro personal estará esperando
                        por ustedes, con un cartel el cual llevará su nombre, para luego transportarlos al hotel
                        seleccionado. Se les brindará tiempo libre para que puedan degustar de nuestra gastronomía. Por
                        la tarde iniciaremos nuestro tour haciendo una parada en el distrito más pequeño de Lima que es
                        Barranco, donde destaca su famoso Puente de los Suspiros, la Ermita y el monumento a Isabel
                        Granada Larco “Chabuca Granda”. <br>Llegamos a Miraflores a conocer el Parque del Amor con una
                        vista
                        panorámica de la Huaca Pucllana, templo pre-Inca centro religioso y administrativo habitada
                        entre los siglos III Y VIII d.c. daremos un paseo por el parque de los olivos, que datan desde
                        el Virreinato con un área de 23 hectáreas y con 6 km de recorrido llegaremos a puertas de centro
                        histórico donde apreciarán el Palacio de Justicia, el Paseo de los héroes Navales, el Palacio
                        Francés y edificaciones coloniales tales como la Plaza Mayor, el Palacio de Gobierno, el Palacio
                        Arzobispal, La Basílica Catedral, el Palacio Municipal, la Plaza San Martin, entre otros.
                        Visitamos el Museo de la Nación, donde podrán divisar una colección de oro del Perú y una
                        selección de cerámicos, orfebrería y textiles de diversas culturas pre-Colombinas. Prosiguiendo
                        nuestro recorrido por la Iglesia y Convento de San Francisco, destaca la visita a sus criptas
                        subterráneas conocidas como catacumbas y luego retornaremos al hotel.</p>


                    <h2 class="h2-tours"> Day 2. City tour por Cusco y alrededores.</h2>
                    <p>Debes estar en el aeropuerto de Lima al menos dos horas antes de que salga tu vuelo a Cusco, solo
                        debes acercarte al mostrador de la aerolínea y mostrar tu identificación para hacer el check in,
                        el vuelo a Cusco tiene una duración de 1 hr y 10 minutos, en Cusco” La Capital Arqueológica de
                        América”, nuestro personal lo estará esperando para trasladarlo al hotel, donde tomará mate de
                        coca (infusión que lo ayudará a su organismo, contra el mal de altura), luego podrá descansar un
                        rato.<br> Alrededor de las 13:30 hrs lo recogeremos de su hotel para que comience a visitar los
                        siguientes atractivos turísticos con un guía profesional este tour finaliza a las 18:30 hrs
                        aproximadamente:<br>
                        <strong>El Palacio y Convento de Koricancha de Santo Domingo:</strong> Centro religioso conocido
                        como "El Templo
                        del Sol", donde admirarás la impresionante ingeniería utilizada en su construcción. <br>
                        <strong> La Catedral:</strong> Monumento religioso colonial de extraordinario valor
                        artístico.<br>
                        <strong>Sacsayhuamán: </strong> a 3 Km. de la ciudad del Cusco, impresionante fortaleza de
                        piedra con
                        una excelente arquitectura, famosa por sus enormes piedras talladas algunas de las cuales miden
                        9 m/ 30 pies de altura, con un peso de 350 toneladas. Aquí es donde se lleva a cabo el Inti
                        Raymi o Fiesta del Sol en junio de cada año. <br>
                        <strong> Qenqo:</strong> Centro ceremonial y ritual, anfiteatro donde se realizaban sacrificios.
                        Puca-Pucara: Antiguo Tambo (lugar de descanso), lugar de vigilancia a lo largo de las Rutas del
                        Imperio Inca.<br>
                        <strong>Tambomachay:</strong> A 7 Km. de la ciudad del Cusco, centro ceremonial de culto al
                        agua, conocido
                        tradicionalmente como el lugar donde descansa el agua.<br>
                        Al regreso a Cusco, podemos dejarlos cerca de la plaza principal o en el Centro Qosqo de Arte
                        Nativo, donde puede ver los bailes típicos de Cusco.
                    </p>

                    <h2 class="h2-tours">Day 3. Tour a Machupicchu "La Ciudad perdida de los Incas"</h2>
                    <p>De 05:45 hrs a 06:00 hrs., lo recogemos de su hotel en Cusco (3400 msnm) y lo trasladamos a la
                        Estación de Trenes, ubicada en Poroy, luego abordamos el tren y se inicia el viaje desde Cusco a
                        Aguas Calientes (2000 msnm). Allí nos estará esperando nuestro Guía, nos conducirá a la estación
                        de buses, para subir por un camino zigzagueante por 30 minutos hasta llegar a la maravilla
                        mundial “El Santuario de Machupicchu”, conocida como <strong> “La Ciudad perdida de los
                            Incas”.</strong> <br> Una vez
                        que lleguemos a Machupicchu, pasaremos por el control, donde entregaremos nuestros boletos de
                        ingreso y donde comenzará nuestra visita guiada, visitando la Plaza Principal, la Torre
                        Circular, el Reloj Solar Sagrado, las Salas Reales, el Templo de las Tres Ventanas y los
                        cementerios, dura unas dos horas aproximadamente. Luego, se le dará tiempo suficiente para dar
                        un paseo por la ciudadela y tomar sus comidas, en cualquier restaurante de Aguas Calientes o si
                        lo desea en Sanctuary Lodge (esto no está incluido). Por la tarde, entre las 15:30 hrs y las
                        17:00 hrs, regresaremos en tren a Cusco, lo estaremos esperando en la estación de trenes y luego
                        lo llevaremos de regreso a su hotel.

                    </p>
                    <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                        src="{{ asset('img/galeria/visita-machu-picchu.webp') }}"><br><br>

                    <h2 class="h2-tours">Day 4. Tour al Valle Sagrado de los Incas</h2>
                    <p>Los recogemos entre las 08:00 hrs a 08:20 hrs, el tour se iniciará haciendo una parada en el
                        mirador natural de Corao donde el guía les dará una introducción sobre el Valle Sagrado,
                        continuará el recorrido disfrutando de un bello paisaje, el primer lugar de visita será el
                        tradicional mercado indio de Pisaq aquí usted podrá hacer algunas compras de souvenirs o
                        artesanías, ascenderán al Centro Arqueológico de Pisaq donde después de una pequeña caminata
                        llegarán a principales recintos Incas. <br>Continuando con el viaje se dirigirán a la ciudad de
                        Urubamba donde en un exclusivo restaurant podrá degustar de la gastronomía local. Por la tarde
                        visitaremos la Fortaleza y Ciudadela de Ollantaytambo, construida para vigilar el ingreso a esta
                        parte del valle y protegerlo de posibles invasiones de los pobladores de la selva, en la
                        actualidad Ollantaytambo es considerada como el pueblo Inca viviente por la conservación de las
                        costumbres y estilo urbanístico que aún tienen sus calles.<br> En el camino de regreso a Cusco
                        visitaremos el pintoresco pueblito de Chinchero, donde se encuentran los restos de la hacienda
                        real de Túpac Inca Yupanqui. Admirará También su bien preservado Muro Inca en la plaza principal
                        y visitará el hermoso templo colonial con interesantes frescos en el pórtico.</p>
                    <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                        src="{{ asset('img/galeria/valle-sagrado.jpg') }}"><br><br>

                    <h2 class="h2-tours">Day 5. Viaje turístico de Cusco a Puno.</h2>
                    <p>Luego de tomar un buen desayuno, lo recogeremos de su hotel y lo llevaremos a la estación de bus
                        para iniciar con el tour a Puno (8 horas) tendrá 4 visitas guiadas a los lugares de interés
                        turístico: Templo de Andahuaylillas o Capilla Sixtina de América, El templo Inca de Raqchi, La
                        Raya a 4335 msnm y El Museo Inca Aymara de Pukara.<br> Cada visita tiene una duración de 20 a 40
                        minutos, tendremos un almuerzo buffet en Sicuani (incluido). El pasajero podrá hacer preguntas,
                        tomar fotos y caminar un rato. Cuando llegue a Puno, nuestro personal lo estará esperando y lo
                        llevará al hotel donde se hospedará.

                    </p>

                    <h2 class="h2-tours">Day 6. Tour al Lago Titicaca, isla de Los Uros y Taquile.</h2>
                    <p>Temprano en la mañana, nuestro guía local lo recogerá de su hotel y luego lo trasladará al
                        puerto. Comenzamos nuestra excursión en bote por el lago Titicaca visitando Los Uros Flotantes,
                        una pequeña comunidad que ha vivido en estas islas de totora durante décadas. Hace siglos, la
                        pequeña tribu indígena de los Uros concibió las islas como una forma de aislarse y protegerse de
                        las tribus rivales, los collas y los incas. La gente de los Uros cosechó las totoras en las
                        aguas poco profundas del lago, los ató bien apretados y construyó plataformas de islas flotantes
                        completas con casas de totoras y canoas, creando así su pequeño mundo. Después de pasear por las
                        islas flotantes, continuamos nuestro viaje hacia la isla del Taquile (2 horas aprox.), una
                        comunidad tradicional de habla quechua, llena de antiguas terrazas agrícolas y algunas ruinas
                        que datan de la época pre-Incaica.<br> La población de Taquile estuvo relativamente aislada del
                        continente hasta la década de 1950, y la noción de comunidad y familia aún es muy fuerte entre
                        ellos. En la parte superior de la isla, tendrá tiempo libre para explorar este lugar por su
                        cuenta y, luego, se reunirá con el grupo para almorzar en un restaurante local. Después del
                        almuerzo, descenderemos al puerto para tomar nuestro bote de regreso a Puno. Estaremos de
                        regreso en Puno a las 17:00 hrs. aproximadamente.</p>
                    <img loading="lazy" alt="Visit the city of Puno" width="100%"
                        src="{{ asset('img/galeria/visit-the-city-of-puno.webp') }}"><br><br>

                    <h2 class="h2-tours">Day 7. Chullpas de sillustani y vuelo de Juliaca a Lima.</h2>
                    <p>Luego de desayunar, nos dirigiremos al Aeropuerto de Juliaca (1hr de Puno), pero de camino al
                        aeropuerto, visitaremos las Chullpas de Sillustani por alrededor de 30 minutos. El sitio
                        arqueológico de Sillustani se encuentra ubicado a 35 kilómetros de la ciudad de Puno (34 Km., 35
                        minutos de viaje) ya una altura de 12.858 pies (3.840 mts.) sobre el nivel del mar. Esta visita
                        permite a los visitantes disfrutar de impresionantes paisajes de altura e imponente arquitectura
                        preincaica. El sitio está estratégicamente ubicado en la cima de una península rodeada por una
                        hermosa laguna llamada laguna Umayo. <br>
                        El sitio arqueológico de Sillustani fue un cementerio construido en el siglo XIII por una
                        civilización que ocupó la zona antes de la dominación Inca. Los creadores de las imponentes
                        torres funerarias son conocidos como el pueblo Kolla. Las torres funerarias más imponentes
                        fueron construidas para los jefes y sacerdotes. Para nuestras antiguas culturas, los cementerios
                        eran importantes lugares de descanso para las personas fallecidas. Por lo tanto, nuestros
                        antepasados elegían estratégicamente cementerios en lugares excepcionalmente hermosos. Los
                        cementerios eran considerados lugares sagrados.<br> Después de todo esto llegaremos al
                        aeropuerto de
                        Juliaca, mostraremos nuestras identificaciones y nos registraremos, luego volaremos a Lima. Y
                        nuestra aventura termina.
                    </p>
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
                    <div class="tab-content pb-5 panel" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab"> <br>
                            <i class="fa fa-check"></i> Todos los traslados al hotel, aeropuerto, terminal, estaciones y
                            atractivos.<br>
                            <i class="fa fa-check"></i> Tours a Machu Picchu, Valle Sagrado de los Incas, ciudad del Cusco
                            y city tour en la
                            “Ciudad de los Reyes”.<br>
                            <i class="fa fa-check"></i> Todos los transportes para los tours.<br>
                            <i class="fa fa-check"></i> Pasajes en Tren ida y vuelta Ollantaytambo – Aguas Calientes –
                            Ollantaytambo.<br>
                            <i class="fa fa-check"></i> Pasajes de bus subida y bajada Aguas Calientes – Machu Picchu –
                            Aguas Calientes.<br>
                            <i class="fa fa-check"></i> Guía profesional de turismo en idioma inglés o español.<br>
                            <i class="fa fa-check"></i> Viaje en bus de Ollantaytambo a Cusco.<br>
                            <i class="fa fa-check"></i> Ingresos a los atractivos turísticos a visitar: Machu Picchu,
                            Huaynapicchu, Valle Sagrado
                            de los Incas, ciudad del Cusco y ciudad de los reyes.<br>
                            <i class="fa fa-check"></i> Transfer en todos los despachos.<br>
                            <i class="fa fa-check"></i> 06 noches en hotel.<br>
                            <i class="fa fa-check"></i> 07 desayunos.<br>
                            <i class="fa fa-check"></i> 02 almuerzos (01 en el tour al Valle Sagrado y 01 en Aguas
                            Calientes).
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus"></i> Vuelos Lima/Cusco/Lima.<br>
                            <i class="fa fa-minus"></i> Alimentación completa (almuerzos y cenas no especificadas en el
                            programa)
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus"></i> Nuestros precios incluyen servicio de Tren Ejecutivo Inca Rail para
                            su viaje a Machupicchu.
                            <i class="fa fa-minus"></i> La reserva de hotel está sujeta a disponibilidad de espacio - Los
                            precios no
                            incluyen IVA para pasajeros peruanos y extranjeros residentes en Perú.
                            <i class="fa fa-minus"></i> Las personas de nacionalidad peruana, ecuatoriana, boliviana y
                            colombiana tienen acceso a
                            un descuento especial, por ser miembros de la CAN.


                        </div>
                    </div>
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-7-dias-6-noches"
                            data-width="100%" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br>
                </div>
            </div>
            <div class="col-lg-3">

                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div class="card-body">
                            @include('layouts.booking-castellano')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="display">
                <div data-onepage-title="Services" data-onepage-slug="services"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                    <h4 class="text-center">Tours Similares</h4>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="cusco-4-dias-3-noches" class="button">Cusco for 4 days</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-5-dias-4-noches" class="button">Tour in Perú for 5 days</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="cusco-6-dias-5-noches" class="button">Cusco for 6 days</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-8-dias-7-noches" class="button">Tour in perú for 8 days</a>
                    </div>
                    <div id="separador"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
