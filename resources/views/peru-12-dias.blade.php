@extends('layouts.general-es')
@section('metas')
    <title>12 días en Perú - Peru por 12 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 12 días en Perú" />
    <meta name="description"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 12 días en Perú" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-12-dias">
    <meta property="og:title"
        content="10 días en Perú - Peru por 12 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/hermoso-peru.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-12-dias" />
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
                                            <button type="button" class="botondjm">Idioma
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                        </a>
                                        <ul>
                                            <li><a>Español</a></li>
                                            <li><a href="peru-12-days">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="#">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="peru-12-days">En</a>
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
                                                                        <div class="alert alert-success"
                                                                            id="alerta" style="width: 60%;">
                                                                            {{ session()->get('flash') }}<button
                                                                                type="button" onclick="bye()"
                                                                                style="float: right;">X</button>
                                                                        </div>
                                                                    </center>
                                                                @endif
                                                                <h1><?php $tour="PERÚ 12 DÍAS"; echo $tour?></h1>
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
                <div class="col-lg-6 col-sm-12"><a href="/">Home</a> /
                    <a href="experiencias">Populares</a> /
                    <a>Perú por 12 Días</a>
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
                                <a href="peru-5-dias-4-noches" class="button">Perú por 5 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-6-dias-5-noches" class="button">Cusco por 6 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-8-dias-7-noches" class="button">Perú por 8 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-15-dias" class="button">Perú por 15 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="adventures/vinicunca-tour" class="button">Cerro de 7 colores</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="adventures/tour-choquequirao" class="button">Choquequirao trek</a>
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
                        <h2 id="titulo1">PERÚ 12 DÍAS </h2>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178"><i class="fa fa-map-marker"></i> Lima - Cusco - Puno - Arequipa
                        </p>
                    </center>
                    <div id="separador"></div>
                    <h5 style="padding: 0px 1px 0px 20px;">Overview</h5>
                    <p style="padding: 0px 1px 0px 20px;">Tour Perú Machupicchu 12 días: City tour en Lima, City tour
                        en
                        Cusco, tour al Valle Sagrado de los Inkas, Tour en Machupicchu con Huaynapicchu, Tour en el
                        Cañón del Colca en 2 días y 1 noche, Tour en el Lago Titicaca, Isla de los Uros e Isla Taquile.
                    </p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>Bienvenida en Lima, City tour con visita a la Huaca
                                    Pucllana.</td>
                            </tr>
                            <tr>
                                <th>DÍA 02</th>
                                <td>Viaje en Bus de Turismo de Lima a Paracas y Paracas a Nazca.</td>

                            </tr>
                            <tr>
                                <th>DÍA 03</th>
                                <td>Sobrevuelo en la Líneas de Nazca y Viaje a Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 04</th>
                                <td>Tour en el Cañón del Colca.</td>
                            </tr>
                            <tr>
                                <th>DÍA 05</th>
                                <td>Tour en el Cañón del Colca y Cruz del Cóndor, retorno a Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 06</th>
                                <td> Viaje de Arequipa a Puno.</td>
                            </tr>
                            <tr>
                                <th>DÍA 07</th>
                                <td>Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.</td>
                            </tr>
                            <tr>
                                <th>DÍA 08</th>
                                <td>Circuito Turístico de Puno a Cusco.</td>
                            </tr>
                            <tr>
                                <th>DÍA 09</th>
                                <td>City tour en Cusco.</td>
                            </tr>
                            <tr>
                                <th>DÍA 10</th>
                                <td>Tour Valle Sagrado de los Inkas y tren a Machupicchu</td>
                            </tr>
                            <tr>
                                <th>DÍA 11</th>
                                <td>Vista y Tour guiado en Machupicchu, opcional: Huaynapicchu.
                                </td>
                            </tr>
                            <tr>
                                <th>DÍA 12</th>
                                <td>Viaje en avión de Cusco a Lima.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <p><strong>Day 1. City tour en Cusco</strong></p>
                    <p>Este día estaremos esperándole en el aeropuerto de la ciudad de Lima a la hora de llegada de su
                        vuelo para darles una cálida bienvenida en el aeropuerto internacional "Jorge Chávez" y
                        trasladarle al Hotel.<br>

                        Por la tarde realizaremos el City Tour en la “Ciudad de los Reyes” Lima: la Catedral, la Tumba
                        de Pizarro, las Catacumbas de San Francisco, pasando por el Congreso de la República, el Palacio
                        de Torre Tagle, Como también visitaremos el sitio arqueológico de La Huaca Pucllana . Barranco
                        en donde disfrutará de una sorprendente vista al Océano Pacífico. Luego visitará el Museo Rafael
                        Larco Herrera donde usted podrá apreciar una gran cantidad de cerámica pre incaica incluyendo la
                        colección más grande del mundo de huacos eróticos.</p>

                    <p><strong>Day 2. Tour a Machupicchu "La ciudad perdida de los incas"</strong></p>
                    <p>Luego de tomar nuestro desayuno, nos trasladaremos hasta el terminal de la Empresa de turismo
                        Cruz del Sur donde abordaremos el bus en servicio Crucero VIP con destino a Paracas, donde
                        estará esperando nuestro personal para trasladarles al puerto de Paracas, donde iniciaremos el
                        tour a las Islas Ballestas pasando por "El Candelabro" una gigantesca imagen en la ladera de un
                        cerro. Al llegar a las Islas Ballestas, se visitarán las diferentes islas durante dos horas,
                        observando las diferentes especies de lobos marinos, focas, pingüinos y aves guaneras. Luego de
                        llegar al puerto realizaremos el tour a la reserva de lobos marinos "Paracas". Por la tarde nos
                        dirigiremos al terminal de Paracas, desde donde tomaremos el Bus con destino a la ciudad de
                        Nazca.</p>

                    <p><strong>Día 03: Sobrevuelo en la Líneas de Nazca y Viaje a Arequipa</strong></p>
                    <p>Luego del desayuno, los trasladaremos al aeródromo de Nazca, para un sobrevuelo de 45 minutos
                        sobre las Pampas de Nazca, en donde los antiguos preincas dibujaron gigantescas figuras de
                        animales y plantas con un fin aún no descubierto, muchos creen que estas figuras fueron echas
                        por extraterrestres, entre los que se encuentran el mono, la araña, el colibrí, etc. Luego se
                        hará una visita al "Cementerio de Chauchillas" después se trasladará a los pasajeros al terminal
                        de buses de Nazca para que realicen su viaje hasta la ciudad de "Arequipa" que por lo general
                        demora 9 horas, en donde nuestro personal los estarán esperando para darles la bienvenida y
                        llevarlos hasta su hotel.</p>
                    <img src="img/blog/lineas-de-nasca-colibri.jpg" class="img-fluid" alt="Responsive image"><br><br>
                    <p><strong>Día 04: Tour en el Cañón del Colca</strong></p>
                    <p>Temprano en la mañana, se embarcará en un increíble viaje de 4 horas aproximadamente, con destino
                        al Cañón del Colca, uno de los cañones más profundos del mundo ( 3,400 mts.), pasando por Pampa
                        Cañahuas, ubicada en la Reserva Nacional de Aguada Blanca, hábitat de vicuñas y alpacas
                        (camélidos de América del Sur). El punto más alto del trayecto está a 4,900 msnm. en la ruta
                        apreciaremos terrazas pre colombinas que siguen siendo cultivadas por los nativos collaguas.
                        Arribando al Valle del Colca, les trasladaremos a su respectivo hotel.<br>

                        En la tarde, le recomendamos descansar y aclimatarse a la altura. Si se encuentra en buen estado
                        físico, tendrá tiempo libre para dar un paseo por los alrededores del hotel o tomar un reparador
                        baño en las aguas termales cercanas.</p>

                    <p><strong>Día 05: Tour en el Cañón del Colca y Cruz del Cóndor, retorno a Arequipa</strong></p>
                    <p>Muy temprano en la mañana partiremos con destino a La Cruz del Cóndor, donde usualmente se puede
                        observar el ave más grande del mundo en pleno vuelo. Durante el regreso visitaremos los pueblos
                        de Yanque, Coporaque, Achoma y Maca. Buena ocasión para apreciar la vida de los habitantes de
                        estos pueblos que no ha variado mucho desde tiempos incaicos. Finalmente, por la tarde, retorno
                        a la ciudad Blanca de Arequipa.</p>

                    <p><strong>Día 06: Viaje de Arequipa a Puno</strong></p>
                    <p>Luego del desayuno le recogeremos de para dar inicio al City Tour, nuestra primera parada será el
                        Monasterio de Santa Catalina, una ciudad en miniatura que albergo a las monjas Arequipeñas por
                        más de 400 años. Más tarde pasaremos por la bella Plaza de Armas, bellamente rodeada por
                        hermosos arcos coloniales y visitaremos la Catedral de Arequipa, a la cual ingresaremos para
                        apreciar sus impresionantes obras de arte, tanto como su imponente estructura. Finalmente
                        visitaremos el Museo de Santuarios Andinos en donde veremos los restos de la momia llamada
                        Juanita, un espectacular hallazgo de una niña perteneciente a la nobleza Inca que fue
                        descubierta en las frías faldas del nevado Ampato. Por la tarde tomaremos el bus de turismo que
                        nos llevara a la ciudad de Puno, donde pasaremos la noche en un Hotel.</p>
                    <img src="img/tours/puno-peru-islands.jpg" class="img-fluid" alt="Responsive image"><br><br>

                    <p><strong>Día 07: Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.</strong></p>
                    <p>Pasaremos a recogerle a su hotel a las 7:00 a.m; aproximadamente para trasladarle al Puerto e
                        iniciar el tour en una lancha turística hacia las sorprendentes y majestuosas “Islas de los
                        Uros”, llegando a las 07:20 de la mañana aproximadamente.<br>

                        <strong> Uros:</strong> Estas islas son pisos artificiales, fabricados con totora superpuesta y
                        hábilmente
                        entretejida. Durante el trayecto el guía proporciona amplia información sobre el Lago Titicaca,
                        las leyendas de los Uros, sus usos, costumbre y el folklore.
                        <strong> Taquile:</strong> Arribando a Taquile, nos
                        dirigiremos a su Plaza de Armas, tiempo libre para hacer compras. La Isla Taquile nos presenta
                        tejidos de una calidad impresionante comparable solamente con los telares de la cultura Paracas
                        o Egipto, declarados Patrimonio Cultural de la Humanidad. A las 12:40 del medio día usted
                        degustará un exquisito almuerzo, zarpando del Puerto de Taquile a las 2:30pm y llegando a Puno a
                        las 5:30 pm aprox. para seguidamente trasladarles a su hotel.
                    </p>

                    <p><strong>Día 08: Circuito Turístico de Puno a Cusco.</strong></p>
                    <p>Después del desayuno, los recogeremos del hotel y los llevaremos a la estación de buses de
                        Turismo donde lo llevará por un recorrido que dura (8 horas aprox.).<br>
                        Donde usted disfrutará de 4 excursiones y visitas guiadas, llegando al paso de la Raya a 4,335
                        m.s.n.m y el Museo inca aymara de Pucará, llegando al medio día a la ciudad de Sicuani teniendo
                        incluido un delicioso almuerzo Buffet.<br>
                        Luego continuaremos con nuestro viaje; donde cada visita tiene una duración de ( 20 a 40 minutos
                        promedio ), visitaremos el templo Inca de Raqchi, el templo de Andahuaylillas o Capilla Sixtina
                        de América, haciendo su excursión muy placentera. Al llegar a la ciudad imperial del Cusco lo
                        estaremos esperando para trasladarlo a su hotel, donde pasará la noche.</p>

                    <p><strong>Día 09: City tour en Cusco.</strong></p>
                    <p>Por la mañana usted dispondrá de una mañana libre para hacer lo que desee, compras, pasear por
                        las pintorescas calles de la ciudad del Cusco, tomarse fotografías.<br>
                        Luego de su almuerzo lo recogeremos de su hotel a las 1:10 de la tarde para dar inicio y
                        disfrutar de un tour guiado a las 1:35 de la tarde donde usted podrá conocer : La antigua Plaza
                        de Armas del Cusco, la Catedral, el Monasterio de Santo Domingo, Templo del Qoricancha y los
                        sitios arqueológicos como: Kenko, Puka Pukará, Tambomachay y la Gran y maravillosa fortaleza de
                        Sacsayhuaman. Retornando hacia la ciudad del Cusco a las 6:45 de la tarde. Finalmente noche de
                        pernocte en el
                        Hotel en Cusco.</p>
                    <p><strong>Día 10: Tour en el Valle Sagrado de los Inkas y viaje en tren a Machupicchu (Aguas
                            Calientes)</strong></p>
                    <p>
                        Pasaremos a recogerle de su hotel a la hora indicada por su agente de viajes, iniciando el
                        recorrido a las 9:00 a.m dirigiéndonos por una carretera asfaltada al pueblo de Pisac, ubicado a
                        32 Km de la ciudad de Cusco, siendo Pisac un pueblo típico andino artesanal y
                        arqueológico donde se realizan las famosas Ferias Artesanales en sus mercados típicos donde
                        usted podrá realizar compras y disfrutar de un tour guiado en los sitios arqueológicos del
                        lugar; continuando con nuestro recorrido de aproximadamente una hora pasaremos por diferentes
                        poblados como: Coya, Lamay, la provincia de Calca, Yucay apreciando la belleza paisajística del
                        Valle Sagrado de los Incas. Pasaremos al poblado de Urubamba donde disfrutaremos de un delicioso
                        almuerzo buffet en el acogedor restaurante "Tunupa" Posteriormente nos dirigiremos hacia el
                        poblado de Ollantaytambo (Es la única ciudad del incanato en el Perú que aún es habitada) para
                        visitar el complejo arqueológico del mismo nombre; habiendo sido un: Complejo agrícola,
                        administrativo, social, religioso y militar en el Tahuantinsuyo, finalizando el tour a las 4:00
                        pm aproximadamente, tendrán tiempo libre en el poblado de Ollantaytambo, donde podrán visitar su
                        mercado artesanal con más tiempo, visitar sus callecitas que guarda todavía el trazado de las
                        calles incas, viendo discurrir el agua por sus antiguos canales, es como retroceder en el tiempo
                        ideales para tomarse fotografías o tomar un café en su Plaza de Armas. A la hora indicada,
                        deberán tomar el tren de Ollantaytambo que sale a las 19:00 pm con destino al poblado de Aguas
                        Calientes donde nuestro personal le estará esperando para trasladarlo al hotel seleccionado.
                    </p>
                    <img src="img/blog/machu-picchu-exclusive.jpg" class="img-fluid" alt="Responsive image"><br><br>
                    <p><strong>Día 11: Vista del amanecer y Tour guiado en Machupicchu y Opcional: Ascenso al
                            Huaynapicchu.</strong></p>
                    <p>
                        Luego de su desayuno, de acuerdo al horario de su boleto de ingreso a Machupicchu, En
                        coordinación con el guía, quien le visitará un día antes en su hotel en Aguas Calientes deberá
                        tomar el bus de subida de Aguas Calientes a Machupicchu (altitud 2450 m.s.n.m) que dura 30
                        minutos de subida aproximadamente, a la hora programada con el guía un día antes, tendrá su tour
                        guiado de aproximadamente 2 horas, pudiendo visitar: la Plaza Principal, la Torre Circular, el
                        Sagrado Reloj Solar, Los Cuartos Reales, El Templo de las Tres Ventanas y los Cementerios.<br>

                        Antes o después de su tour Guiado en Machupicchu, dependiendo del horario establecido en sus
                        tickets tendrá un tiempo libre para explorar por si mismo Machupicchu o usar sus tickets para
                        ascender a la Montaña de Huaynapicchu o Machupicchu Montaña <strong> (Note que en caso quiera
                            ascender a
                            la montaña Huaynapicchu tiene que reservar por lo menos con tres meses de anticipación ya
                            que
                            los espacios son limitados, consultar espacios y horarios).</strong> Usted podrá visitar
                        Huaynapicchu
                        Montaña (3 horas de visita) desde donde se aprecia una vista espectacular de todo el valle de
                        Machupicchu; o podrá visitar Machupicchu Montaña (4 horas de visita) la cual le dio el nombre a
                        Machupicchu con una belleza paisajista única y una vista espectacular.<br>

                        Este programa de viaje es ideal para recorrer Machupicchu en su totalidad y tomarse fotografías
                        con tiempo suficiente hasta la hora que usted tome por conveniente retornar en bus a Aguas
                        Calientes y así pueda almorzar en el mismo poblado.<br>

                        Por la tarde usted deberá abordar el tren Expedition (incluido en el Paquete Turístico) con
                        destino a Poroy u Ollantaytambo donde nuestro personal estará esperando por usted en la estación
                        de trenes para trasladarle a su hotel en Cusco.<br>

                        <em>La ventaja de este tour es que usted podrá conocer Machupicchu sin mucha gente y con mucha
                            más
                            disposición de tiempo.</em>
                    </p>
                    <p><strong>Día 12: Viaje en avión de Cusco a Lima</strong></p>
                    <p>
                        Este día de acuerdo al horario de vuelo de la ciudad de Cusco con destino a Lima se le hará el
                        traslado del Hotel en Cusco al aeropuerto con 2 horas de anticipación al horario de su vuelo
                        para llegar a tiempo y realizar los respectivos trámites de embarque al avión.<br>

                        <strong> Fin de los servicios.</strong>
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
                            <i class="fa fa-minus" aria-hidden="true"></i> Todos los traslados al hotel, aeropuerto,
                            terminal, estaciones y atractivos.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tours a Machu Picchu, Valle Sagrado de los
                            Incas, ciudad del Cusco y city tour en la
                            “Ciudad de los Reyes”.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Todos los transportes para los tours.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Pasajes en Tren ida y vuelta Ollantaytambo
                            – Aguas Calientes – Ollantaytambo.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Pasajes de bus subida y bajada Aguas
                            Calientes – Machu Picchu – Aguas Calientes.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Guía profesional de turismo en idioma
                            inglés o español.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en bus de Ollantaytambo a Cusco.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Ingresos a los atractivos turísticos a
                            visitar: Machu Picchu, Huaynapicchu, Valle Sagrado
                            de los Incas, ciudad del Cusco y ciudad de los reyes.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Transfer en todos los despachos.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 05 noches en hotel.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 05 desayunos.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 02 almuerzos (01 en el tour al Valle
                            Sagrado y 01 en Aguas Calientes).
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
                    @include('layouts.payments')
                    <!-----Booking---------->
                    <div class="form text-center">
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-12-dias"
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
                        <a href="peru-5-dias-4-noches" class="button">Perú por 5 días</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="cusco-6-dias-5-noches" class="button">Cusco por 6 días</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-8-dias-7-noches" class="button">Perú por 8 días</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-15-dias" class="button">Perú por 15 días</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="adventures/vinicunca-tour" class="button">Cerro de 7 colores</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="adventures/tour-choquequirao" class="button">Choquequirao trek</a>
                    </div>
                    <div id="separador"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
