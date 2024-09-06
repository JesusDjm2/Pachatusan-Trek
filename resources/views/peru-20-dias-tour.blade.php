@extends('layouts.general-es')
@section('metas')
    <title>20 días en Perú - Peru por 20 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa - Trujillo
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 20 días en Perú" />
    <meta name="description"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 20 días en Perú" />
    <meta property="og:url" content="https://andeanexclusive.com/peru-20-dias-tour">
    <meta property="og:title"
        content="20 días en Perú - Peru por 20 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa - Trujillo">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/cusco-maravilloso.jpg" />
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
                                            <li><a href="peru-20-days-tour">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="#">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="peru-20-days-tour">En</a>
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
                                class="vc_row wpb_row tours-varios-dias vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                <h1><?php $tour="TOUR A PERÚ POR 20 DÍAS"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
                                                                    - Arequipa - Nasca - Puerto Maldonado </p>
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
                <div class="col-lg-6 col-sm-12"><a href="/">Inicio</a> /
                    <a href="alrededor-de-peru">Al rededor de Perú</a> /
                    <a>Perú 20 Días</a>
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
                    <div>
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <h1 class="text-center"
                                    style="font-size:18px; text-transform:uppercase; font-weight:600; margin-top:30px">
                                    Tours Similares
                                </h1>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-5-dias-4-noches" class="button">Perú 5 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-5-dias-4-noches" class="button">Cusco por 5 días</a>
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
                                    <a href="peru-12-dias" class="button">Tour en Perú por 12 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-18-dias-tour" class="button">Tour en Perú por 18 días</a>
                                </div>
                                <div id="separador"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div data-onepage-title="Services" style="text-align:justify" data-onepage-slug="services"
                    class="vc_row-fluid vc_custom_1461248392126">
                    <center>
                        <h1 id="titulo1">PERÚ POR 20 DÍAS </h1>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178">Reservar con 30 días de anticipación

                        </p>
                    </center>
                    <div id="separador"></div>
                    <h5>Sobre Perú</h5>
                    <p> 
                        Perú es uno de los países del mundo más completo que se pueden visitar. Tiene la gran fortuna de
                        poseer costa, sierra y selva, además de tener una alta variedad de tipos de clima, lo cual le
                        permite disfrutar de una gran diversidad biológica. Hacer turismo en Perú es una de las mejores
                        opciones.<br><br>

                        También, Perú destaca por su historia, tradición, cultura y artesanías. ¿Queréis todavía más
                        motivos para visitarlo? La gastronomía peruana es de las más diversas que existen. En los
                        últimos años los cocineros peruanos se han vuelto expertos en experimentar nuevos sabores y su
                        gastronomía es reconocida cómo una de las mejores a nivel mundial.<br><br>

                        Por si todo ésto fuera poco, falta por nombrar lo mejor del país: la amabilidad y hospitalidad
                        de sus habitantes.
                    </p>
                    <img src="{{ asset('img/galeria/Perú-un-lugar-mágico-en-los-andes.webp') }}"
                        alt="Peru, un país magico, magical country" loading="lazy" width="100%"><br><br>
                    <h5 style="padding: 0px 1px 0px 20px;">Overview</h5>
                    <p style="padding: 0px 1px 0px 20px;">Un espectacular tour de 20 días alrededor de Perú, conocerás
                        las ciudades mas hermosas que ofrece <strong> Perú</strong>. Lima, Cusco, Trujillo, Puno,
                        Arequipa, Nazca.</p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>"Bienvenida en Lima".</td>
                            </tr>
                            <tr>
                                <th>DÍA 02</th>
                                <td>Tour a las "Islas Ballestas" y "Reserva de Paracas".</td>

                            </tr>
                            <tr>
                                <th>DÍA 03</th>
                                <td>Sobre vuelo a las "Líneas de Nasca".</td>
                            </tr>
                            <tr>
                                <th>DÍA 04</th>
                                <td>Vuelo de Lima Arequipa y City Tour en Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 05</th>
                                <td>Rumbo al Cañón del Colca y Reserva de Vicuñas.</td>
                            </tr>
                            <tr>
                                <th>DÍA 06</th>
                                <td>Cañón del Colca y vista de los cóndores.</td>
                            </tr>
                            <tr>
                                <th>DÍA 07</th>
                                <td>Viaje en bus de Arequipa a Puno.</td>
                            </tr>
                            <tr>
                                <th>DÍA 08</th>
                                <td>Tour al Lago Titicaca, Islas de Los Uros y Taquile.</td>
                            </tr>
                            <tr>
                                <th>DÍA 09</th>
                                <td>Viaje turístico de Puno a Cusco visitando "Raqchi".</td>
                            </tr>
                            <tr>
                                <th>DÍA 10</th>
                                <td> City tour en Cusco.</td>
                            </tr>
                            <tr>
                                <th>DÍA 11</th>
                                <td>Tour al Valle Sagrado de los Incas.</td>
                            </tr>
                            <tr>
                                <th>DÍA 12</th>
                                <td>Día libre en Machu Picchu "La ciudad perdida de los Incas".</td>
                            </tr>
                            <tr>
                                <th>DÍA 13</th>
                                <td>Vista al Amanecer de Machupicchu y el Huaynapicchu.</td>
                            </tr>
                            <tr>
                                <th>DÍA 14</th>
                                <td>Día Libre en Cusco (Opcional Canotaje en el Rio Vilcanota ó Tour a Tipón).</td>
                            </tr>
                            <tr>
                                <th>DÍA 15</th>
                                <td>Vuelo de Cusco a Puerto Maldonado y Tour a la Isla Monkey.</td>
                            </tr>
                            <tr>
                                <th>DÍA 16</th>
                                <td>Tour a La Cocha Perdida.</td>
                            </tr>
                            <tr>
                                <th>DÍA 17</th>
                                <td> Tour al rio Gamitana(Briolo).</td>
                            </tr>
                            <tr>
                                <th>DÍA 18</th>
                                <td>Viaje de Puerto Maldonado a Lima y City tour en Lima.</td>
                            </tr>
                            <tr>
                                <th>DÍA 19</th>
                                <td>Tour a Pachacamac.</td>
                            </tr>
                            <tr>
                                <th>DÍA 20</th>
                                <td>Traslado al aeropuerto y despedida.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <p><strong>Día 1. "Bienvenida en Lima"</strong></p>
                    <p>
                        Luego de que pisen suelo peruano nuestro personal le dará la bienvenida en el aeropuerto Jorge
                        Chávez de Lima y los trasladaremos al hotel. Luego de un descanso a una hora indicada, los
                        trasladaremos al Restaurant elegido, donde recibirán una clase de cocina peruana, el
                        Chef preparará tres platos representativos de la cocina peruana ( causa rellena de pollo,
                        ceviche de pescado y lomo saltado ), en la que hará una breve explicación de los insumos a
                        utilizarse, técnicas de cocina para la preparación y decoración del plato. Luego disfrutáremos
                        de un almuerzo buffet de bienvenida y por la noche descansaremos en el hotel seleccionado.
                    </p>

                    <p><strong>Día 2. Segundo día: Tour a las "Islas Ballestas" y "Reserva de Paracas"</strong></p>
                    <p>
                        Luego de tomar nuestro desayuno, nos trasladaremos hasta el puerto de <strong> Paracas,</strong>
                        donde iniciaremos
                        el tour a las Islas Ballestas pasando por <strong> "El Candelabro"</strong> una gigantesca
                        imagen en la ladera de
                        un cerro. Al llegar a las Islas Ballestas, se visitarán las diferentes islas durante dos horas,
                        observando las diferentes especies de lobos marinos, focas, pingüinos y aves guaneras. Luego de
                        llegar al puerto realizaremos el tour a la reserva de Paracas. Por la tarde nos dirigiremos al
                        terminal de buses de la ciudad de "Paracas" para que tomen su bus a la ciudad de "Nasca" el
                        viaje dura generalmente 3 horas, ya en Nazca nuestro personal lo estará esperando para
                        trasladarlo hasta su hotel.
                    </p>

                    <p><strong>Día 03: Sobre vuelo a las "Líneas de Nasca"</strong></p>
                    <p>
                        Por la mañana tomando el desayuno, los trasladaremos al aeropuerto de Nasca, para un sobrevuelo
                        de 30 minutos sobre las Pampas de Nazca, en donde los antiguos pre incas dibujaron gigantescas
                        figuras de animales y plantas con un fin aún no descubierto, muchos creen que estas figuras
                        fueron hechas por extraterrestres, entre los que se encuentran las figuras del mono, la araña,
                        el colibrí, etc. Luego se visitara al <strong> "Cementerio de Chauchillas",</strong> es una
                        necrópolis que data de
                        más de 1000 años de antigüedad y pertenece al periodo de la cultura Ica-Chincha. Luego a horas
                        15:15 pm se les trasladara al terminal de buses de Nazca para que realicen su viaje de retorno
                        al Ciudad de Lima, en donde nuestro personal los estarán esperando para darles la bienvenida y
                        llevarlos hasta su hotel.
                    </p>
                    <img src="img/blog/lineas-de-nasca-colibri.jpg" class="img-fluid"
                        alt="Lineas de Nazca - Nazca lines"><br><br>
                    <p><strong>Día 04: Vuelo de Lima Arequipa y City Tour en Arequipa</strong></p>
                    <p>
                        Luego de tomar su desayuno en el hotel, nuestro personal los trasladara al aeropuerto de Lima,
                        para que aborden su vuelo hacia la ciudad de Arequipa por la madrugada ó por la mañana el vuelo
                        dura 80 minutos, donde nuestro personal esperara por Ustedes y los trasladara al hotel de su
                        elección en Arequipa. Por la tarde realizaremos el tour a la "Ciudad Blanca" incluyendo el
                        Convento de Santa Catalina, sin duda alguna la gema de Arequipa, finalmente abierta al público
                        en el año 1970, después de haber estado durante 400 años en reclusión, con una innumerable
                        cantidad de piezas de arte colonial. Asimismo, visitará la Plaza de Armas, los claustros de la
                        Compañía de Jesús y los barrios de Cayma y Yanahuara, con una vista magnífica del volcán El
                        Misti, también visitaremos una casona colonial llamada la Mansión del Fundador. (Foto Plaza de
                        Armas de Arequipa).
                    </p>

                    <p><strong>Día 05: Rumbo al Cañón del Colca y Reserva de Vicuñas</strong></p>
                    <p>
                        Temprano por la mañana, partida en bus privado rumbo al Cañón del Colca, pasando por los pies
                        del volcán Chachani. Durante el viaje, se atravesará las pampas de Cañahuas y Arrieros en donde
                        se encuentran la Reserva Nacional de Vicuñas, así como Vizcachani, La Pulpera, Callalli, Sibayo
                        y Tuti Villages. Llegará a una altitud de 4,000 metros sobre el nivel del mar en donde se
                        apreciará la flora y fauna de las hermosas lagunas naturales de Bofedales y Mar Atrapado junto
                        con rocas gigantes en forma de castillos. A las cinco de la tarde llegada a Chivay, en el Valle
                        del Colca. Alojamiento en el Valle del Colca.
                    </p>

                    <p><strong>Día 06: Sexto día: Cañón del Colca y vista de los cóndores</strong></p>
                    <p>
                        Por la mañana (05.30) desayuno en el hotel, para luego salir rumbo a la Cruz del Cóndor donde
                        permaneceremos por un lapso de 2 horas aprox. Lugar donde se puede apreciar en su mayor
                        dimensión la profundidad del Cañón del Colca y también el vuelo del Cóndor a corta distancia. De
                        retorno observaremos restos arqueológicos, terrazas agrícolas pre Inca y otras vistas
                        panorámicas del Cañon del Colca. Pasaremos por los pueblos de Pinchollo . Madrigal, Lari, Maca,
                        Achoma, Yanque en este último haremos una parada, donde podremos observar su Iglesias típica, su
                        centro artesanal, la vestimenta típica de sus pobladores, entre otros. Luego retornaremos hacia
                        Arequipa para poder descansar.
                    </p>
                    

                    <p><strong>Día 07: Viaje en bus de Arequipa a Puno</strong></p>
                    <p>
                        Dispondremos de la mañana libre para visitar Arequipa por nuestra cuenta. Por la tarde a horas
                        1.00 pm, tomaremos el bus que en 6 horas aproximadamente, nos llevara hasta la ciudad lacustre
                        de Puno, en el trayecto apreciaremos los paisajes típicos de la Zona Alto Andina de Perú. Luego
                        de 1 hora de viaje haremos una parada en Pampa Cañahuas, que es una reserva natural que se
                        encuentra destinada a la protección de camélidos sudamericanos como la vicuña, la cual, debido a
                        su fina y suave lana, ha sido cazada casi al punto de su extinción. A continuación pasamos a
                        divisar a lo lejos el grandioso Bosque de Piedras de Imata, para luego dirigirnos a nuestra
                        próxima parada, la laguna de Lagunillas, ubicada en el Departamento de Puno a una altura
                        aproximada de 4174 msnm, lugar adecuado para poder apreciar más de la fauna de la región, que en
                        este caso la conforman en su mayoría ajoyas, chocas y sobre todo flamencos. A las 7.30 pm
                        llegaremos a Puno donde nuestro personal los recogerá y llevara al hotel.
                    </p>
                    <img src="img/tours/puno-peru-islands.jpg" class="img-fluid" alt="Responsive image"><br><br>

                    <p><strong>Día 08: Tour al Lago Titicaca, Islas de Los Uros y Taquile</strong></p>
                    <p>
                        Después de tomar desayuno en el hotel será trasladado al puerto de Puno(Lago Titicaca) donde se
                        embarcara en el bote para luego visitar las Islas Flotantes de los Uros por un espacio de 45
                        minutos, apreciara las costumbres de esta isla y su artesanía. Después nos trasladaremos también
                        en bote para visitar la Isla Taquile de gran valor paisajístico, étnico, cultural y
                        arqueológico, luego retornaremos también en bote al Puerto de Puno, ahí se les recogerá y se les
                        llevara al Hotel o si desean podemos dejarles en el centro de Puno, y finalmente la noche la
                        pasara en el hotel seleccionado.
                    </p>

                    <p><strong>Día 09: Viaje turístico de Puno a Cusco visitando "Raqchi"</strong></p>
                    <p>
                        Tomando un buen desayuno , los recogeremos del hotel y los llevaremos a la estación de buses de
                        la empresa que los llevará por un recorrido que dura 8 horas aproximadamente, tendremos 4
                        excursiones y visitas guiadas a los lugares de interés turístico del corredor sur del altiplano,
                        llegando al paso de la Raya a 4335 msnm y el museo inca aymara de Pukara, al medio día en la
                        ciudad de Sicuani tendremos incluido en el tour un almuerzo Buffet, de allí continuaremos; Cada
                        visita tiene una duración de 20 a 40 minutos a próximamente, visitando el templo Inca de Raqchi,
                        el templo de Andahuaylillas o Capilla Sixtina de América, haciendo nuestras excursiones
                        placenteras. Al llegar al "Cusco" lo estaremos esperando para trasladarlo al hotel en donde
                        pasará la noche.
                    </p>

                    <p><strong>Día 10: City tour en Cusco</strong></p>
                    <p>
                        Luego del desayuno en el hotel, Usted tendrá la mañana libre, para pasear y hacer compras de
                        artesanías y recuerdos del Cusco por su cuenta. Luego de su almuerzo, a partir de las 13:00 hrs
                        empezaremos el tour guiado que incluye visitar el centro de la ciudad milenaria del Cusco, la
                        Plaza de Armas, la Catedral, el Monasterio de Santo Domingo, Templo del Koricancha y las ruinas
                        cercanas de Kenko, Puka Pukará, Tambomachay y la fortaleza de Sacsayhuaman, construido con
                        enormes rocas que hasta el momento sigue siendo un enigma la movilización y uso de éstas, no
                        habiendo canteras de piedra por la zona. A las 7:00 pm.
                    </p>
                    
                    <p><strong>Día 11: Tour al Valle Sagrado de los Incas</strong></p>
                    <p>
                        Este día realizaremos el tour al Valle Sagrado de los Incas, tour que lo iniciamos a las 08:00
                        de la mañana, recogiéndoles del hotel para dirigirnos a Pisaq, el cual es un típico mercado, con
                        pintorescas terrazas cultivadas en la montaña. Visitaremos el grupo arqueológico de Pisaq.
                        También es famoso por sus Ferias donde se pueden comprar hermosas artesanías. Después nos
                        dirigiremos hasta Urubamba donde tenemos incluido un almuerzo buffet. Luego nos dirigiremos a la
                        Fortaleza de Ollantaytambo, donde hay descendientes de los Incas que viven en las casa de los
                        Incas. Finalmente nos dirigimos a Chinchero para ver su mercado y el grupo arqueológico con
                        típica superposiciones españolas a las construcciones incas. El tour acabara promediando las
                        19:00 hrs en la Plaza de Armas de Cusco. Pernoctaremos en hotel seleccionado en Cusco.
                    </p>

                    <p><strong>Día 12: Día libre en Machu Picchu "La ciudad perdida de los Incas"</strong></p>
                    <p>
                        Pasaremos por su hotel en la ciudad del Cusco 1 hora antes de la salida de su tren, y lo
                        llevaremos a la estación de trenes, ubicada en la localidad de Poroy, luego abordaremos el tren
                        de la empresa "PERURAIL" y empezaremos el viaje desde Poroy - Cusco hacia el poblado de "Aguas
                        Calientes" (2000 msnm) que tiene una duración de 4 horas. Al llegar al poblado de aguas
                        calientes, nos dirigiremos a nuestro Hotel, nuestro guia los buscara por la noche para
                        brindarles información necesaria para el dia de su tour, si desean pueden visitar las Aguas
                        Termales o comprar artesania de lugar.
                    </p>
                    <p><strong>Día 13: "Vista al Amanecer de Machupicchu y el Huaynapicchu"</strong></p>
                    <p>
                        Luego de levantarnos muy temprano y tomar desayuno, subiremos a la ciudadela Inca de Machu
                        Picchu, seguidamente se realizará excursión con nuestro guía por la ciudadela de Machu Picchu,
                        por espacio de 2 horas, en el recorrido visitará los recintos más importantes de esta ciudad
                        como son: la Plaza Principal, la Torre Circular, el Sagrado Reloj Solar, Los Cuartos Reales, el
                        templo de las Tres Ventanas y Los Cementerios. Concluido en recorrido por la ciudadela de
                        Machupicchu opcionalmente: pueden hacer el trekking hasta la cumbre del Huaynapicchu o el sector
                        Montaña, esto les tomará unas horas, en las cuales podrá disfrutar del paisaje y tomar algunas
                        vistas impresionantes (Esta visita es sin Guía). Luego bajaremos en bus a Aguas Calientes y por
                        la tarde tomaremos el tren de regreso a Ollantaytambo, donde nuestro personal estará esperando
                        por Usted, para transportarlo en bus hacia la ciudad del Cusco y llevarlo a su hotel.
                    </p>

                    <img src="img/blog/machu-picchu-exclusive.jpg" class="img-fluid"
                        alt="Responsive image"><br><br>
                    <p><strong>Día 14: Día Libre en Cusco (Opcional Canotaje en el Rio Vilcanota ó Tour a
                            Tipón)</strong></p>
                    <p>
                        Luego de tomar el desayuno, Ustedes dispondrán del día libre para poder visitar la ciudad del
                        Cusco, podrán recorrer sus calles y visitar sus numerosos museos e Iglesias Coloniales,
                        poseedoras de invalorables tesoros (Las visitas se realizaran por su cuenta). También podrá
                        conocer mejor a su gente y costumbres, así como adquirir artesanías y recuerdos de su viaje.
                        Pernoctaremos en hotel seleccionado en Cusco. (Foto: Tipón y el Valle Sur del Cusco). Usted
                        también puede realizar actividades opcionales como el tour al Valle Sur visitando Tipon y
                        Pikillacta o el canotaje en el rio Vilcanota.
                    </p>
                    <p><strong>Día 15: Vuelo de Cusco a Puerto Maldonado y Tour a la Isla Monkey.</strong></p>
                    <p>
                        Luego de su desayuno en el hotel, los transportaremos al aeropuerto para tomar su vuelo a Puerto
                        Maldonado "Capital de la biodiversidad del mundo". Llegada y recepción de bienvenida. Iniciamos
                        un recorrido por la ciudad en nuestro bus para luego dirigirnos al puerto Capitanía para
                        embarcarnos en el bote a través del Río Madre de Dios. Durante el viaje, observaremos al
                        ronsoco, caimanes, tortugas, garzas, cormoranes y otras especies de animales. Acomodación en el
                        albergue, tomaremos un exquisito trago de bienvenida, instalación en nuestros bungalows y
                        almuerzo. Por la tarde acompañados de nuestro guía especializado, visitaremos la Isla Monkey, a
                        5 minutos de distancia del albergue. Durante la caminata observaremos extraordinarios paisajes
                        con una exuberante flora, la cual cobija en su interior una variedad de especies de monos en su
                        hábitat natural; como maqui sapas, capuchinos, pequeños monos leoncitos, frailecillos, cotos,
                        además de otras especies como el coatí, osos perezosos, entre otros, y una gran variedad de
                        aves. Completaremos la travesía por la isla disfrutando de la puesta de sol siendo el ocaso lo
                        más impresionante de la selva. Luego retornaremos al albergue, para cenar y descansar.
                    </p>
                    <p><strong>Día 16: Tour a La Cocha Perdida.</strong></p>
                    <p>
                        Luego del desayuno, realizaremos caminatas de internamiento para llegar a la Cocha Perdida, la
                        cual constituye un ecosistema de refugio y alimentación de una inmensa variedad de animales. Hay
                        la posibilidad de observar nutrias, caimanes, tortugas, sachavacas, aves de plumaje multicolor,
                        el majestuoso jaguar y variedad de peces. Esta zona es única y se mantiene intacta, con inmensos
                        pantanos y diversos aguajales. Luego llegaremos al extraordinario Mirador Amazónico desde donde
                        se podrá apreciar la mágica selva, así mismo dar un placentero paseo en canoa alrededor del
                        Lago. Retorno al albergue. Almuerzo. Por la tarde ofrecemos como opcional una visita jardín
                        botánico. Si desea un relax ofrecemos la piscina amazónica. Luego retornaremos al albergue, para
                        cenar y descansar.
                    </p>
                    <p><strong>Día 17: Tour al rio Gamitana(Briolo). </strong></p>
                    <p>
                        Luego del desayuno, a la hora determinada se realizara otra excursión por la selva amazónica,
                        navegando por el rio Madre de Dios, luego caminaremos con dirección al rio Gamitana, sus
                        orígenes se ubican en las entrañas de la selva virgen, en su recorrido forma extensos canales
                        navegables por donde retornaremos en canoa, apreciando de muy cerca la flora y fauna de la zona
                        como tortugas, caimanes, aves y una variedad de insectos, también podremos practicar la pesca y
                        darnos un baño relajante en el rio, por la noche descansaremos en nuestro albergue.
                    </p>
                    <p><strong>Día 18: Viaje de Puerto Maldonado a Lima y City tour en Lima</strong></p>
                    <p>
                        Luego del desayuno, se le trasladara al aeropuerto de Puerto Maldonado para que pueda abordar su
                        vuelo hacia Lima, el viaje dura aproximadamente 2 horas y se realizara por la mañana, en Lima
                        nuestro personal le estará esperando para trasladarles a su hotel en Lima, por la tarde luego de
                        un descanso iniciaremos nuestro tour por los distritos residenciales modernos de Miraflores y
                        San Isidro.Recorreremos el centro financiero, el Golf, El Olivar, la Huaca Pucllana (el templo
                        ceremonial pre-inca en forma de pirámide) y el parque del Amor en el Malecón de Miraflores.
                        Continuando con nuestro recorrido, nos dirigiremos hacia el Centro Histórico de Lima,
                        conoceremos la Plaza San Martin, sus balcones y viejas casonas, la Plaza Mayor con sus edificios
                        más importantes y finalmente ingresaremos a uno de los conventos más importantes del siglo XVII.
                        Un completo recorrido con el confort y la atención de un moderno servicio turístico.
                    </p>
                    <img src="img/blog/pacaya-samiria.jpg" class="img-fluid"
                        alt="Responsive image"><br><br>
                    <p><strong>Día 19: Tour a Pachacamac</strong></p>
                    <p>
                        Luego de tomar el desayuno, los recogeremos a las 09:00 hrs de su hotel para conocer el
                        Santuario y Oráculo del Dios Pachacamac o "Dios Creador del Mundo" Luego de tomar el desayuno,
                        los recogeremos a las 09:00 hrs de su hotel para conocer el Santuario y Oráculo del Dios
                        Pachacamac o "Dios Creador del Mundo" . Ubicado a 31 Km al sur de Lima. Lugar sagrado de
                        peregrinación y culto ancestral, en el que destaca el Museo de Sitio, El Conjunto Piramidal, de
                        Templos y Palacios de culturas Pre-Incas e Inca. Los enigmáticos Templos del Sol y de la Luna,
                        lugar que fuera albergue de las Vírgenes del Sol. Todo esto, va acompañado de una vista general
                        de las diversas caras de la ciudad y la expansión de la misma, a través del espacio y el tiempo
                        como se puede apreciar en el recorrido por las playas de Costa Verde y el Salto del Fraile, la
                        naturaleza de los Pantanos de Villa (variedad de aves especialmente en el verano) y pintorescos
                        barrios de los alrededores. Luego Usted dispondrá la tarde libre y por la noche descansará en su
                        hotel Lima.
                    </p>
                    <p><strong>Día 20: Traslado al aeropuerto y despedida</strong></p>
                    <p>
                        Después de tomar el desayuno y a la hora que nos indiquen, los trasladaremos del hotel al
                        aeropuerto Jorge Chávez del Callao. Debemos estar dos horas antes, de la hora de nuestro vuelo
                        internacional, debemos tomar en cuenta que debemos pagar un impuesto de aeropuerto de US$ 36.00,
                        luego de chequearse, nos despediremos y ustedes tomaran vuelo a su país.
                    </p>
                    <div id="separador"></div>
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                        style="text-transform: uppercase; font-size: 12px; font-weight: 700">
                        <li class="nav-item">
                            <a class="nav-link active" id="drop" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">Incluye</a>
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
                            <i class="fa fa-check" aria-hidden="true"></i> 2 traslados del aeropuerto de Lima al Hotel <br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 City tour a la "Ciudad de los Reyes" Clases demostrativas de Cocina Peruana en el Restaurant "Señorío de Sulco"<br>
                            Almuerzo Buffet de Bienvenida.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 4 Noches en hotel seleccionado en Lima incluye desayuno (según acomodación)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Noche en hotel seleccionado en Nazca incluye desayuno (según acomodación)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 2 Noches en hotel seleccionado en Arequipa incluye desayuno (según acomodación)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Noche en hotel seleccionado en Cañon del Colca incluye desayuno (según acomodación)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 2 Noche en Hotel seleccionado en Puno incluye desayuno (según acomodación)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 5 Noches en Hotel seleccionado en Cusco incluye desayuno (según acomodación)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Noche de hotel seleccionado en Aguas Calientes incluye desayuno (según acomodación)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 3 Noches de Hospedaje en el Eco Amazonía Lodge. (Puerto Maldonado)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Ticket Aéreo de Lima-Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Ticket Aéreo de Cusco-Puerto Maldonado.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Ticket Aéreo de Puerto Maldonado-Lima.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Traslado del hotel en Lima al terminal de buses en Lima<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Viaje en Bus de Lima a Paracas (03:30 hrs - 07:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Viaje en Bus de Paracas a Nazca (17:10 hrs - 21:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Viaje en Bus de Nazca a Lima (16:30 hrs - 00:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour a las Islas ballestas<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Sobre Vuelo a las Líneas de Nazca (30 minutos)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 City tour por la Ciudad de Arequipa<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour al Cañón del Colca<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Viaje en Bus de Arequipa a Puno (14:00 hrs - 20:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour al Lago Titicaca, Isla de Los Uros, Taquile<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour guiado de Puno a Cusco incluye 1 almuerzo (Todo el día de 06:30 hrs - 17:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 traslado del Terminal de buses de Cusco al hotel seleccionado.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour a Ciudad del Cusco y Alrededores (Por la tarde a partir de las 13:00 hrs - 18:30 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour a Machu Picchu en tren Expedition(Todo el día de 06:00 hrs - 20:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour al Valle Sagrado de los Incas incluye 1 almuerzo buffet (Todo el día de 08:00 hrs -
                            19:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 City Tour en Lima<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour al Santuario de Pachacamac<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 16 desayunos en los hoteles<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 03 almuerzos buffet en Urubamba, el Lago Titicaca y en Sicuani.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 02 almuerzos (01 en el tour al Valle
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
                    <h5>Compartir</h5>
                    <!-----Booking---------->
                    <div class="form text-center">
                        <!---------redes sociales------------------------>
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                            data-show-count="false">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0&appId=366341694202025&autoLogAppEvents=1">
                        </script>
                        <div class="fb-like" data-href="https://andeanexclusive.com/cusco-5-days-4-nights.php"
                            data-width="" data-layout="button_count" data-action="like" data-size="small"
                            data-show-faces="false" data-share="true"></div>

                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0&appId=366341694202025&autoLogAppEvents=1">
                        </script>
                        <div class="fb-comments" data-href="https://andeanexclusive.com/cusco-5-days-4-nights.php"
                            data-width="" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br><br>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div>
                        <div class="card-body">
                            @include('layouts.booking-castellano')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="display">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div>
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <h1 class="text-center"
                                    style="font-size:18px; text-transform:uppercase; font-weight:600; margin-top:30px">
                                    Tours Similares
                                </h1>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-5-dias-4-noches" class="button">Perú 5 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-5-dias-4-noches" class="button">Cusco por 5 días</a>
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
                                    <a href="peru-12-dias" class="button">Tour en Perú por 12 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-18-dias-tour" class="button">Tour en Perú por 18 días</a>
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
