@extends('layouts.general-es')
@section('metas')
    <title>10 días en Perú - Peru por 10 días, 9 noches - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Ven a disfrutar de lo que Perú tiene para ofrecer a sus visitantes. Tour de 10 días en Perú" />
    <meta name="description"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 10 días en Perú" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-10-dias-9-noches">
    <meta property="og:title"
        content="10 días en Perú - Peru por 10 días, 9 noches - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/hermoso-peru.jpg" />
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
                                    @include('layouts.menu-castellano')
                                    <li id="display">
                                        <a href='{{ route('peru-10-days') }}'>
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href='{{ route('peru-10-days') }}'>
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
                                class="vc_row wpb_row hermoso vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                <h1><?php $tour="PERÚ 10 DÍAS 9 NOCHES"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
                                                                    - Arequipa
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
        <div class="row">
            <div class="col-lg-3" id="display2">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div data-onepage-title="Services" data-onepage-slug="services"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126 text-center">
                            <h4 class="text-center">Tours Similares</h4>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-5-dias-4-noches" class="button">Perú por 5 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-6-dias-5-noches" class="button">Cusco por 6 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-7-dias-6-noches" class="button">Perú por 7 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-8-dias-7-noches" class="button">Perú por 8 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-18-dias-tour" class="button">Perú por 18 días</a>
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
                        <h1 id="titulo1">PERÚ 10 DÍAS </h1>
                        <div id="separadordjm2"></div>
                        <p class="text-center"><i class="fa fa-clock-o"></i> 10 días<br>
                            <i class="fa fa-map-marker"></i> Lima - Cusco - Puno - Arequipa<br>
                            <span style="color: #0c8178"> Reserve con 30 días de anticipación</span>
                        </p>
                    </center>
                    <h5 style="padding: 0px 1px 0px 20px;">Overview</h5>
                    <p style="padding: 0px 1px 0px 20px;">Turismo Perú en 10 días visita: City tour en Lima, City tour
                        en Cusco, tour al Valle Sagrado de los Inkas, Tour a Machupicchu con Huaynapicchu, tour en el
                        Lago Titicaca, Isla flotante de los
                        Uros , Isla Taquile, tour Cañón del Colca en 2 días y 1 noche.</p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>City tour en Lima</td>
                            </tr>
                            <tr>
                                <th>DÍA 02</th>
                                <td>Bienvenida y City tour en Cusco.</td>

                            </tr>
                            <tr>
                                <th>DÍA 03</th>
                                <td>Tour en el Valle Sagrado de los Inkas y viaje en tren a Machupicchu.</td>
                            </tr>
                            <tr>
                                <th>DÍA 04</th>
                                <td>Tour en Machupicchu, Opcional: Huaynapicchu</td>
                            </tr>
                            <tr>
                                <th>DÍA 05</th>
                                <td>Viaje en Bus Turístico guiado de Cusco a Puno.</td>
                            </tr>
                            <tr>
                                <th>DÍA 06</th>
                                <td>Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.</td>
                            </tr>
                            <tr>
                                <th>DÍA 07</th>
                                <td>Mañana Libre y city tour en Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 08</th>
                                <td>Tour en el Cañón del Colca.</td>
                            </tr>
                            <tr>
                                <th>DÍA 09</th>
                                <td> Tour en el Cañón del Colca y Cruz del Cóndor, retorno a Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 10</th>
                                <td> Traslado del Hotel en Arequipa al aeropuerto y fin de los servicios.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h2 class="h2-tours">Itinerario Perú 10 días:</h2>
                    <h3>Day 1. City tour en Lima</h3>
                    <p>Este día estaremos esperándole en el aeropuerto de la ciudad de Lima a la hora de llegada de su
                        vuelo para darles una cálida bienvenida en el aeropuerto internacional "Jorge Chávez" y
                        trasladarle al Hotel.<br>

                        Por la tarde le recogeremos de su hotel para dar inicio al City tour en "La Ciudad de Reyes"
                        Lima, en el trayecto haremos una parada en el distrito más pequeño de Lima, Barranco donde
                        destaca su famoso Puente de los Suspiros, la Ermita y el monumento a Isabel Granada Larco
                        "Chabuca Granda". Continuamos nuestro recorrido en el transporte turístico con destino a
                        Miraflores donde conoceremos el Parque del Amor ubicado en el malecón, desde donde podrán
                        tomarse hermosas fotos con vista al Océano Pacífico, tendremos una vista panorámica de la Huaca
                        Pucllana, templo Pre Inca centro religioso y administrativo habitada entre los siglos III Y VIII
                        d.c., luego daremos un paseo por el parque de los olivos, que datan desde el Virreinato con un
                        área de 23 hectáreas.<br><br>
                        <img alt="City tour en Lima" loading="lazy" width="100%"
                            src="{{ asset('img/galeria/Ceviche-peruano-tour-gastronomico.webp') }}">
                        <i>Foto: Ceviche, plato tipico de Perú</i><br><br>

                        Con 6 km de recorrido llegaremos a puertas de centro histórico de Lima donde apreciaran el
                        Palacio de Justicia, el Paseo de los héroes Navales, el Palacio Francés y edificaciones
                        coloniales tales como la Plaza Mayor, el Palacio de Gobierno, el Palacio Arzobispal, La Basílica
                        Catedral, el Palacio Municipal, la Plaza San Martin, entre otros. Visitamos el Museo BCR,donde
                        podrán apreciar una colección de oro del Perú y una selección de cerámicos, orfebrería y
                        textiles de diversas culturas Precolombinas. (sujeto a horarios del museo y acceso al centro
                        histórico).<br><br>

                        Siguiendo nuestro recorrido por la Iglesia y Convento de San Francisco, visitaremos sus
                        impresinantes criptas subterráneas conocidas como Catacumbas.<br><br>

                        Retorno al hotel
                    </p>

                    <h3>Day 2. Tour a Machupicchu "La ciudad perdida de los incas"</h3>
                    <p>Este día se inicia con el vuelo de Lima a Cusco que usted tomará en el aeropuerto "Jorge Chávez"
                        de la ciudad de Lima con 2 horas de anticipación a su vuelo con destino hacia la “Capital
                        arqueológica de América” Cusco (altitud 3350 m.s.n.m), donde le estará esperando nuestro
                        personal en el aeropuerto con un cartel con su nombre para trasladarle al hotel seleccionado,
                        donde se les ofrecerá un mate de hojas de coca bueno para la aclimatación del lugar.<br><br>

                        Luego de su almuerzo, lo recogeremos de su hotel a la hora indicada por su agente de viajes,
                        para dar inicio y disfrutar de un tour guiado a las 1:35 pm de la tarde donde usted podrá
                        conocer los siguientes atractivos turísticos de la ciudad del Cusco:El templo del sol o
                        Qoricancha, La Catedral del Cusco, Sacsayhuaman, Qenqo, Pukapukara y Tambomachay.<br>
                        Estará retornando a la ciudad de Cusco a las 6:45 pm.<br><br>

                        <strong>Noche en Hotel seleccionado.</strong>
                    </p>

                    <h3>Day 3. Tour al Valle Sagrado de los Inkas</h3>
                    <p>Pasaremos a recogerle de su hotel a la hora indicada por su agente de viajes, iniciando el
                        recorrido a las 9:00 a.m dirigiéndonos por una carretera asfaltada al pueblo de Pisac, ubicado a
                        32 Km de la ciudad de Cusco, siendo Pisac un pueblo típico andino artesanal y arqueológico donde
                        se realizan las famosas Ferias Artesanales en sus mercados típicos donde usted podrá realizar
                        compras y disfrutar de un tour guiado en los sitios arqueológicos del lugar; continuando con
                        nuestro recorrido de aproximadamente una hora pasaremos por diferentes poblados como: Coya,
                        Lamay, la provincia de Calca, Yucay apreciando la belleza paisajística del Valle Sagrado de los
                        Incas. Pasaremos al poblado de Urubamba donde disfrutaremos de un delicioso almuerzo buffet en
                        el acogedor restaurante "Tunupa".<br><br>
                        <img alt="tour en el Valle Sagrado de los Incas" loading="lazy" width="100%"
                            src="{{ asset('img/galeria/ollantaytambo-sacred-valley-of-the-incas-exclusive.webp') }}">
                        <i>Foto: fortaleza de Ollantaytambo</i><br><br>
                        Posteriormente nos dirigiremos hacia el poblado de
                        Ollantaytambo (Es la única ciudad del incanato en el Perú que aún es habitada) para visitar el
                        complejo arqueológico del mismo nombre; habiendo sido un: Complejo agrícola, administrativo,
                        social, religioso y militar en el Tahuantinsuyo, finalizando el tour a las 4:00 pm
                        aproximadamente, tendrán tiempo libre en el poblado de Ollantaytambo, donde podrán visitar su
                        mercado artesanal con más tiempo, visitar sus callecitas que guarda todavía el trazado de las
                        calles incas, viendo discurrir el agua por sus antiguos canales, es como retroceder en el tiempo
                        ideales para tomarse fotografías o tomar un café en su Plaza de Armas. A la hora indicada,
                        deberán tomar el tren de Ollantaytambo que sale a las 19:00 pm con destino al poblado de Aguas
                        Calientes donde nuestro personal le estará esperando para trasladarlo al hotel seleccionado.
                    </p>

                    <h3>Day 4. Tour en Machupicchu, Opcional: Huaynapicchu</h3>
                    <p>Luego de su desayuno, de acuerdo al horario de su boleto de ingreso a Machupicchu, En
                        coordinación con el guía, quien le visitará un día antes en su hotel en Aguas Calientes deberá
                        tomar el bus de subida de Aguas Calientes a Machupicchu (altitud 2450 m.s.n.m) que dura 30
                        minutos de subida aproximadamente, a la hora programada con el guía un día antes, tendrá su tour
                        guiado de aproximadamente 2 horas, pudiendo visitar: la Plaza Principal, la Torre Circular, el
                        Sagrado Reloj Solar, Los Cuartos Reales, El Templo de las Tres Ventanas y los
                        Cementerios.<br><br>

                        Antes o después de su tour Guiado en Machupicchu, dependiendo del horario establecido en sus
                        tickets tendrá un tiempo libre para explorar por si mismo Machupicchu o usar sus tickets para
                        ascender a la Montaña de Huaynapicchu o Machupicchu Montaña (Note que en caso quiera ascender a
                        la montaña Huaynapicchu tiene que reservar por lo menos con tres meses de anticipación ya que
                        los espacios son limitados). Usted podrá visitar Huaynapicchu Montaña (3 horas de visita) desde
                        donde se aprecia una vista espectacular de todo el valle de Machupicchu; o podrá visitar
                        Machupicchu Montaña (4 horas de visita) la cual le dio el nombre a Machupicchu con una belleza
                        paisajista única y una vista espectacular.<br><br>

                        Este programa de viaje es ideal para recorrer Machupicchu en su totalidad y tomarse fotografías
                        con tiempo suficiente hasta la hora que usted tome por conveniente retornar en bus a Aguas
                        Calientes y así pueda almorzar en el mismo poblado.<br><br>

                        Por la tarde usted deberá abordar el tren Expedition (incluido en el Paquete Turístico) con
                        destino a Poroy u Ollantaytambo donde nuestro personal estará esperando por usted en la estación
                        de trenes para trasladarle a su hotel en Cusco.<br>

                        La ventaja de este tour es que usted podrá conocer Machupicchu sin mucha gente y con mucha más
                        disposición de tiempo.</p><br><br>
                    <img alt="Montaña de Huayna Picchu en Machu Picchu" loading="lazy" width="100%"
                        src="{{ asset('img/galeria/guia-de-viajes-huayna-picchu-travel.webp') }}">
                    <i>Foto: Vistade Huayna Picchu</i><br><br>

                    <h3>Day 5. Viaje en Bus Turístico guiado de Cusco a Puno.</h3>
                    <p>Le recogeremos de su hotel a las 6:20 am para trasladarles al terminal de buses de turismo, para
                        su viaje con destino a Puno, (altitud 3818 m.s.n.m).<br><br>

                        Nuestro bus está equipado con baños y es dirigido por tres personas: un chofer, una guía
                        bilingüe y una terramoza. Haremos una pequeña visita a la iglesia de Andahuaylillas, la iglesia
                        que data desde comienzos del siglo XVII. Es conocida con el nombre de La Sixtina de América del
                        Sur por los magníficos cuadros que posee y por su altar cincelado en oro. Luego de 218 Km.
                        habremos llegado a Raqchi, donde se sitúa el templo inca de Wiracocha.<br><br>

                        Continuaremos nuestro camino hasta Sicuani donde podremos degustar de un delicioso almuerzo
                        buffet.<br><br>

                        Nos dirigimos a la Raya, punto culminante de nuestro recorrido ubicado a 4,335 metros de altura.
                        Nuestro próximo destino es Pucara, donde visitaremos el Museo Lítico y finalmente nuestro
                        recorrido será a través de altas explanadas andinas bajo una claridad irreal.<br><br>

                        En la ciudad de Puno estará esperando por usted nuestro personal para hacerle el traslado a su
                        Hotel.
                    </p>

                    <h3>Day 6. Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.</h3>
                    <p>Pasaremos a recogerle a su hotel a las 7:00 a.m; aproximadamente para trasladarle al Puerto e
                        iniciar el tour en una lancha turística hacia las sorprendentes y majestuosas “Islas de los
                        Uros”, llegando a las 07:20 de la mañana aproximadamente. Uros :Estas islas son pisos
                        artificiales, fabricados con totora superpuesta y hábilmente entretejida. Durante el trayecto el
                        guía proporciona amplia información sobre el Lago Titicaca, las leyendas de los Uros, sus usos,
                        costumbre y el folklore.<br><br>
                        <img alt="Lago Titicaca en Puno" loading="lazy" width="100%"
                            src="{{ asset('img/galeria/Lago-Titicaca-Peru.webp') }}">
                        <i>Foto: Islas Uros en el Lago Titicaca</i><br><br>

                        Taquile: Arribando a Taquile, nos dirigiremos a su Plaza de Armas, tiempo libre para hacer
                        compras. La Isla Taquile nos presenta tejidos de una calidad impresionante comparable solamente
                        con los telares de la cultura Paracas o Egipto, declarados Patrimonio Cultural de la Humanidad.
                        A las 12:40 del medio día usted degustará un exquisito almuerzo, zarpando del Puerto de Taquile
                        a las 2:30pm y llegando a Puno a las 5:00 pm aprox. para seguidamente trasladarles a su hotel.
                        Finalmente pasaremos por su hotel para trasladarle al terminal de buses para su viaje a
                        Arequipa.
                    </p>

                    <h3>Día 07. Mañana Libre y city tour en Arequipa.</h3>
                    <p>Este día tendrán la mañana libre para descansar o salir a pasear.<br>

                        Por la tarde, realizaremos el tour a la "Ciudad Blanca" incluyendo el Convento de Santa
                        Catalina, sin duda alguna la gema de Arequipa, finalmente abierta al público en el año 1970,
                        después de haber estado durante 400 años en reclusión, con una innumerable cantidad de piezas de
                        arte colonial. Asimismo, visitará la Plaza de Armas, los claustros de la Compañía de Jesús y los
                        barrios de Cayma y Yanahuara, con una vista magnífica del volcán El Misti, y visitar una
                        tradicional casona colonial llamada la Mansión del Fundador. Por la noche descansaremos en el
                        hotel.</p>
                    <h3>Día 08. Tour en el Cañón del Colca.</h3>
                    <p>Temprano en la mañana, se embarcará en un increíble viaje de 4 horas aproximadamente, con destino
                        al Cañón del Colca, uno de los cañones más profundos del mundo ( 3,400 mts.), pasando por Pampa
                        Cañahuas, ubicada en la Reserva Nacional de Aguada Blanca, hábitat de vicuñas y alpacas
                        (camélidos de América del Sur). El punto más alto del trayecto está a 4,900 msnm. en la ruta
                        apreciaremos terrazas pre colombinas que siguen siendo cultivadas por los nativos collaguas,
                        apreciaremos el nevado Chucura , las lagunillas de Toqra y Patapampa conocido como el Mirador de
                        los Andes, desde donde de aprecia el Nevado Ampato, Hualca-Hualca, y la Cordillera de los Andes
                        , llegada a Chivay, acomodfación en el hotel y Almuerzo (no incluido) En la tarde, le
                        recomendamos descansar y aclimatarse a la altura. Si se encuentra en buen estado físico, tendrá
                        tiempo libre para dar un paseo por los alrededores del hotel o tomar un reparador baño en las
                        aguas termales cercanas. Noche de Peña folclórica
                        Cena por cuenta del pasajero.</p>
                    <img alt="Mirador del Cóndor Arequipa" loading="lazy" width="100%"
                        src="{{ asset('img/galeria/Visit-to-colca-canyon-arequipa-peru.webp') }}">
                    <i>Foto: Mirador del cóndor, Cañon del Colca - Arequipaa</i><br><br>
                    <h3>Día 09. Tour en el Cañón del Colca y Cruz del Cóndor, retorno a Arequipa</h3>
                    <p>Muy temprano en la mañana partiremos con destino a La Cruz del Cóndor, donde usualmente se puede
                        observar el ave más grande del mundo en pleno vuelo. Durante el regreso visitaremos los pueblos
                        de Yanque, Coporaque, Achoma y Maca. Buena ocasión para apreciar la vida de los habitantes de
                        estos pueblos que no ha variado mucho desde tiempos incaicos. Finalmente, por la tarde, retorno
                        a la ciudad Blanca de Arequipa.</p>
                    <h3>Día 10. Traslado del Hotel en Arequipa al aeropuerto y fin de los servicios.</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Desayuno en el hotel.<br>
                        <i class="fa fa-check" aria-hidden="true"></i> Traslado del hotel al Aeropuerto de
                        Arequipa.<br>
                        <i class="fa fa-check" aria-hidden="true"></i> Viaje en Avión de Arequipa a Lima (80
                        minutos)(de 8:50 am a 10:20am)<br>
                        <i class="fa fa-check" aria-hidden="true"></i> Viaje en avión de Lima a su país de destino
                        (Por su cuenta)
                    </p>

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
                            <ul>
                                <li>Todos los traslados al hotel, aeropuerto,
                                    terminal, estaciones y atractivos.</li>
                                <li>Tours a Machu Picchu, Valle Sagrado de los
                                    Incas, ciudad del Cusco y city tour en la “Ciudad de los Reyes”.</li>
                                <li>Todos los transportes para los tours.</li>
                                <li>Pasajes en Tren ida y vuelta Ollantaytambo
                                    – Aguas Calientes – Ollantaytambo.</li>
                                <li>Pasajes de bus subida y bajada Aguas
                                    Calientes – Machu Picchu – Aguas Calientes.</li>
                                <li>Guía profesional de turismo en idioma
                                    inglés o español.</li>
                                <li>Viaje en bus de Ollantaytambo a Cusco.</li>
                                <li>Ingresos a los atractivos turísticos a
                                    visitar: Machu Picchu, Huaynapicchu, Valle Sagrado de los Incas, ciudad del Cusco y
                                    ciudad
                                    de los reyes.</li>
                                <li>Transfer en todos los despachos.</li>
                                <li>05 noches en hotel.</li>
                                <li>05 desayunos.</li>
                                <li>02 almuerzos (01 en el tour al Valle
                                    Sagrado y 01 en Aguas Calientes).</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus" aria-hidden="true"></i> Vuelos Lima/Cusco/Lima.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Alimentación completa (almuerzos y cenas
                            no especificadas en el programa)
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            La reserva de hoteles esta sujeta a disponibilidad de espacios – Los precios no incluyen IGV
                            para pasajeros Peruanos y extranjeros residentes en Perú.
                        </div>
                    </div>
                    <!-----Booking---------->
                    <div class="form text-center">
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-10-dias-9-noches"
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
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126 text-center">
                                <h4 class="text-center">Tours Similares</h4>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-5-dias-4-noches" class="button">Perú por 5 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-6-dias-5-noches" class="button">Cusco por 6 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-7-dias-6-noches" class="button">Perú por 7 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-8-dias-7-noches" class="button">Perú por 8 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-18-dias-tour" class="button">Perú por 18 días</a>
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
