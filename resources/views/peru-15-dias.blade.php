@extends('layouts.general-es')
@section('metas')
    <title>15 días en Perú - Peru por 15 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 15 días en Perú" />
    <meta name="description"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 15 días en Perú" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-15-dias">
    <meta property="og:title"
        content="15 días en Perú - Peru por 15 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa - Trujillo">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/cusco-maravilloso.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-15-dias" />
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
                                            <li><a href="peru-15-days-tour">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="#">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="peru-15-days-tour">En</a>
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
                                                                <h1><?php $tour = 'TOUR A PERÚ POR 15 DÍAS';
                                                                echo $tour; ?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno -
                                                                    Arequipa -
                                                                    Nasca
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
                <div class="col-lg-6 col-sm-12"><a href="/">Inicio</a> /
                    <a href="alrededor-de-peru">Alrededor de Perú</a> /
                    <a>Arequipa 3 días</a>
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
                        <h1 id="titulo1">PERÚ POR 15 DÍAS </h1>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178">Reservar con 30 días de anticipación </p>
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
                    <p style="padding: 0px 1px 0px 20px;">Un espectacular tour de 15 días alrededor de Perú, conocerás
                        las ciudades más hermosas que ofrece Perú. Lima, Cusco, Trujillo, Puno, Arequipa, Nasca.</p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>Bienvenida en el aeropuerto de Lima, City tour en Lima con visita a la Huaca
                                    Pucllana</td>
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
                                <td>City tour en Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 05</th>
                                <td>Tour en el Cañón del Colca.</td>
                            </tr>
                            <tr>
                                <th>DÍA 06</th>
                                <td>Tour en el Cañón del Colca y Cruz del Cóndor, retorno a Arequipa y viaje a Puno.
                                </td>
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
                                <td>Machupicchu.</td>
                            </tr>
                            <tr>
                                <th>DÍA 11</th>
                                <td>Machupicchu + Huaynapicchu. </td>
                            </tr>
                            <tr>
                                <th>DÍA 12</th>
                                <td>Tour en el Valle Sagrado de los Inkas.</td>
                            </tr>
                            <tr>
                                <th>DÍA 13</th>
                                <td>Día libre en Cusco.</td>
                            </tr>
                            <tr>
                                <th>DÍA 14</th>
                                <td>Viaje de Cusco a Lima.</td>
                            </tr>
                            <tr>
                                <th>DÍA 15</th>
                                <td> Traslado al aeropuerto.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <p><strong>Día 1. Bienvenida en el aeropuerto de Lima, City tour en Lima con visita a la Huaca
                            Pucllana</strong></p>
                    <p>
                        Este día estaremos esperándole en el aeropuerto de la ciudad de Lima a la hora de llegada de su
                        vuelo para darles una cálida bienvenida en el aeropuerto internacional "Jorge Chávez" y
                        trasladarle al Hotel.<br>

                        Por la tarde le recogeremos de su hotel para dar inicio al City tour en <strong> "La Ciudad de
                            Reyes"</strong>
                        Lima, en el trayecto haremos una parada en el distrito más pequeño de Lima, “Barranco” donde
                        destaca su famoso Puente de los Suspiros, la Ermita y el monumento a Isabel Granada Larco
                        "Chabuca Granda". Continuamos nuestro recorrido en el transporte turístico con destino a
                        Miraflores donde conoceremos el Parque del Amor ubicado en el malecón, desde donde podrán
                        tomarse hermosas fotos con vista al Océano Pacífico, tendremos una vista panorámica de la Huaca
                        Pucllana, templo pre-Inca centro religioso y administrativo habitada entre los siglos III Y VIII
                        d.c., luego daremos un paseo por el parque de los olivos, que datan desde el Virreinato con un
                        área de 23 hectáreas.<br>

                        Con 6 km de recorrido llegaremos a puertas de centro histórico de Lima donde apreciaran el
                        Palacio de Justicia, el Paseo de los héroes Navales, el Palacio Francés y edificaciones
                        coloniales tales como la Plaza Mayor, el Palacio de Gobierno, el Palacio Arzobispal, La Basílica
                        Catedral, el Palacio Municipal, la Plaza San Martin, entre otros. Visitamos el Museo BCR, donde
                        podrán apreciar una colección de oro del Perú y una selección de cerámicos, orfebrería y
                        textiles de diversas culturas pre-Colombinas (sujeto a horarios del museo y acceso al centro
                        histórico).<br>

                        Siguiendo nuestro recorrido por la Iglesia y Convento de San Francisco, visitaremos sus
                        impresionantes criptas subterráneas conocidas como Catacumbas. Retorno al hotel.
                    </p>
                    <img src="img/tours/lima-peru-tour.jpg" class="img-fluid" alt="Tour en Lima Perú"><br><br>
                    <p><strong>Día 2. Viaje en Bus de Turismo de Lima a Paracas y Paracas a Nasca.</strong></p>
                    <p>
                        Luego de tomar nuestro desayuno, nos trasladaremos hasta el terminal de la Empresa de turismo
                        Cruz del Sur donde abordaremos el bus en servicio Crucero VIP con destino a Paracas, donde lo
                        estará esperando nuestro personal para trasladarles al puerto de Paracas, donde iniciaremos el
                        tour a las Islas Ballestas pasando por "El Candelabro" una gigantesca imagen en la ladera de un
                        cerro. Al llegar a las “Islas Ballestas”, se visitarán las diferentes islas durante dos horas,
                        observando las diferentes especies de lobos marinos, focas, pingüinos y aves guaneras. Luego de
                        llegar al puerto realizaremos el tour a la reserva de lobos marinos "Paracas". Por la tarde nos
                        dirigiremos al terminal de Paracas, desde donde tomaremos el Bus con destino a la ciudad de
                        Nasca.
                    </p>

                    <p><strong>Día 3. Sobrevuelo en la Líneas de Nazca y Viaje a Arequipa</strong></p>
                    <p>
                        Luego del desayuno, los trasladaremos al aeródromo de <strong> Nasca </strong>, para un
                        sobrevuelo de 45 minutos
                        sobre las “Pampas de Nasca”, en donde los antiguos Pre-Incas dibujaron gigantescas figuras de
                        animales y plantas con un fin aún no descubierto, muchos creen que estas figuras fueron hechas
                        por extraterrestres, entre los que se encuentran el mono, la araña, el colibrí, etc. Luego se
                        hará una visita al "Cementerio de Chauchillas" después se trasladará a los pasajeros al terminal
                        de buses de Nasca para que realicen su viaje hasta la ciudad de "Arequipa" que por lo general
                        demora 9 horas, en donde nuestro personal lo estarán esperando para darles la bienvenida y
                        llevarlos hasta su hotel.
                    </p>
                    <img src="img/blog/lineas-de-nasca-colibri.jpg" class="img-fluid"
                        alt="Lineas de Nazca - Nazca lines"><br><br>
                    <p><strong>Día 04: City tour en Arequipa.</strong></p>
                    <p>
                        Luego del desayuno pasaremos por usted para dirigirnos al centro de la ciudad en donde
                        iniciaremos un interesante recorrido, nuestra primera parada tiene lugar en unos de los
                        monumentos arquitectónicos más impresionantes de la ciudad, se trata del magnífico Monasterio de
                        Santa Catalina, una ciudad en miniatura que albergo a las monjas Arequipeñas por más de 400
                        años. <br> Más tarde pasaremos por la bella Plaza de Armas, bellamente rodeada por hermosos
                        arcos
                        coloniales y visitaremos la hermosa Catedral de Arequipa, a la cual ingresaremos con nuestro
                        guía local para apreciar sus impresionantes obras de arte, tanto como su imponente estructura.
                        Finalmente visitaremos el Museo de Santuarios Andinos en donde veremos los restos de la momia
                        llamada Juanita, un espectacular hallazgo de una niña perteneciente a la nobleza Inca que fue
                        descubierta en las frías faldas del nevado Ampato. <br> Por la tarde tomaremos el bus de turismo
                        que
                        nos llevará a la ciudad de Puno, donde pasaremos la noche en un hotel.
                    </p>

                    <p><strong>Día 05: Tour en el Cañón del Colca</strong></p>
                    <p>
                        Temprano en la mañana, se embarcará en un increíble viaje de 4 horas aproximadamente, con
                        destino al Cañón del Colca, uno de los cañones más profundos del mundo (3,400 mts.), pasando por
                        Pampa Cañahuas, ubicada en la<strong> Reserva Nacional de Aguada Blanca </strong>, hábitat de
                        vicuñas y alpacas
                        (camélidos de América del Sur). <br>El punto más alto del trayecto está a 4,900 msnm. en la ruta
                        apreciaremos terrazas pre- Colombinas que siguen siendo cultivadas por los nativos collaguas.
                        Arribando al <strong> Valle del Colca</strong>, les trasladaremos a su respectivo hotel. <br>
                        En la tarde, le recomendamos descansar y aclimatarse a la altura. Si se encuentra en buen estado
                        físico, tendrá tiempo libre para dar un paseo por los alrededores del hotel o tomar un reparador
                        baño en las aguas termales cercanas.

                    </p>

                    <p><strong>Día 06: Tour en el Cañón del Colca y Cruz del Cóndor, retorno a Arequipa y viaje a
                            Puno.</strong></p>
                    <p>
                        Muy temprano en la mañana partiremos con destino a “La Cruz del Cóndor”, donde usualmente se
                        puede observar el ave más grande del mundo en pleno vuelo. Durante el regreso visitaremos los
                        pueblos de Yanque, Coporaque, Achoma y Maca. <br>Buena ocasión para apreciar la vida de los
                        habitantes de estos pueblos que no ha variado mucho desde tiempos incaicos. Por la tarde, luego
                        del almuerzo, les conduciremos con destino a Puno, donde les estaremos esperando para hacerles
                        su traslado a su hotel en Puno.
                    </p>

                    <p><strong>Día 07: Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.</strong></p>
                    <p>
                        Pasaremos a recogerle a su hotel a las 6:30 a.m. aproximadamente, para trasladarle al Puerto e
                        iniciar el tour en una lancha turística hacia las sorprendentes y majestuosas <strong>“Islas de
                            los
                            Uros”</strong>, llegando a las 07:20 de la mañana aproximadamente. <br>
                        <strong>Uros: </strong> Estas islas son pisos artificiales, fabricados con totora superpuesta y
                        hábilmente
                        entretejida. Durante el trayecto el guía proporciona amplia información sobre el Lago Titicaca,
                        las leyendas de los Uros, sus usos, costumbres y el folklore;
                        <strong>Taquile:</strong> Arribando a Taquile, nos dirigiremos a su Plaza de Armas, tiempo libre
                        para hacer
                        compras. La Isla Taquile nos presenta tejidos de una calidad impresionante comparable solamente
                        con los telares de la cultura Paracas o Egipto, declarados Patrimonio Cultural de la Humanidad.
                        <br>
                        A las 12:40 del mediodía usted degustará un exquisito almuerzo, zarpando del Puerto de Taquile a
                        las 2:30 pm y llegando a Puno a las 5:30 pm aproximadamente, para luego trasladarlos a su hotel.

                    </p>
                    <img src="img/tours/puno-peru-islands.jpg" class="img-fluid" alt="Responsive image"><br><br>

                    <p><strong>Día 08: Circuito Turístico de Puno a Cusco.</strong></p>
                    <p>
                        Después del desayuno, los recogeremos del hotel y los llevaremos a la estación de buses de
                        Turismo donde lo llevará por un recorrido que dura (8 horas aproximadamente) Donde usted
                        disfrutará de 4 excursiones y visitas guiadas, llegando al paso de la Raya a 4,335 msnm y el
                        Museo inca aymara de Pucará, llegando al mediodía a la ciudad de Sicuani teniendo incluido un
                        delicioso almuerzo Buffet. <br>
                        Luego continuaremos con nuestro viaje; donde cada visita tiene una duración de (20 a 40 minutos
                        promedio), visitaremos el <strong>templo Inca de Raqchi</strong>, el templo de Andahuaylillas o
                        Capilla Sixtina
                        de América, haciendo su excursión muy placentera. <br> Al llegar a la ciudad imperial del Cusco
                        lo
                        estaremos esperando para trasladarlo a su hotel, donde pasará la noche.

                    </p>

                    <p><strong>Día 09: City tour en Cusco</strong></p>
                    <p>
                        Por la mañana usted dispondrá de una mañana libre para hacer lo que desee, compras, pasear por
                        las pintorescas calles de la ciudad del Cusco, tomarse fotografías. <br>
                        Luego de su almuerzo lo recogeremos de su hotel a la hora indicada por su agente de viajes para
                        dar inicio y disfrutar de un tour guiado a las 1:35 de la tarde donde usted podrá conocer : La
                        antigua Plaza de Armas del Cusco, la Catedral, el Monasterio de Santo Domingo, Templo del
                        Coricancha y los sitios arqueológicos como : Quenqo, Puca Pucara, Tambomachay y la Gran y
                        maravillosa fortaleza de Sacsayhuamán: Retornando hacia la ciudad del Cusco a las 6:45 pm.
                        Finalmente pasará la noche en un hotel en Cusco.

                    </p>

                    <p><strong>Día 10: Viaje en Tren a Machupicchu, Tour a Machupicchu, noche en hotel en Aguas
                            Calientes.</strong></p>
                    <p>
                        Muy temprano de acuerdo a la elección del servicio de tren elegido: <strong>Tren Expedition
                        </strong>(incluido en
                        el Paquete Turístico) o <strong>Vistadome </strong> (adicionando 45 dólares), pasaremos por su
                        hotel en la ciudad
                        de Cusco para trasladarles a la estación de trenes de Poroy (a 25 minutos de Cusco), donde usted
                        abordará el tren con destino al poblado de Aguas Calientes (altitud 2350 msnm), el tiempo de
                        viaje en ambos trenes es de 3 horas con 40 minutos aproximadamente. <br>
                        En el poblado de Aguas Calientes estará esperándoles nuestro guía profesional en turismo quien
                        les guiará para tomar el bus de subida a la majestuosa e impresionante ciudadela de <strong>
                            Machupicchu</strong>
                        (altitud 2450 msnm); el viaje en bus dura 25 min aproximadamente, junto con el guía harán el
                        ingreso a Machupicchu donde tendrán un tour guiado de 2 horas con 30 minutos aproximadamente
                        pudiendo visitarla Plaza Principal, la Torre Circular, el Sagrado Reloj Solar, Los Cuartos
                        Reales, El Templo de las Tres Ventanas y los Cementerios, finalmente tendrán el tiempo libre
                        para seguir explorando la mágica Ciudadela Inca de Machupicchu y retornar por su cuenta al
                        poblado de Aguas Calientes donde podrán almorzar y dar un paseo en el poblado de Aguas Calientes
                        puede elegir entre caminar alrededor de Aguas calientes, visitar el museo de Machupichu o
                        visitar los baños termales.<br> Finalmente pernocte en el hotel seleccionado de Aguas Calientes
                        -
                        Machupicchu.

                    </p>
                    <img src="img/tours/machupicchu.png" class="img-fluid" alt="Responsive image"><br><br>

                    <p><strong>Día 11: Vista del amanecer en Machupicchu, Opcional: Ascenso a Huaynapicchu y tren de
                            retorno a Cusco.</strong></p>
                    <p>
                        Luego de su desayuno, de acuerdo al horario de su boleto de ingreso a Machupicchu, podrá volver
                        a hacer el ingreso y visita a la ciudadela inca por su cuenta. <br>
                        Antes o después de su horario de
                        ingreso a <strong>Machupicchu</strong>, dependiendo del horario establecido en sus tickets
                        tendrá un tiempo libre
                        para explorar por sí mismo Machupicchu o usar sus tickets para ascender a la Montaña de
                        <strong> Huaynapicchu </strong> o Machupicchu Montaña (Note que en caso quiera ascender a la
                        montaña Huaynapicchu
                        tiene que reservar por lo menos con tres meses de anticipación ya que los espacios son
                        limitados, de no haber espacios en la Montaña Huaynapicchu su reserva será en la Montaña
                        Machupicchu, así mismo el horario de ingreso a cualquiera de las montañas puede variar de
                        acuerdo a disponibilidad de espacios, el horario se le confirmará en su reserva o puede
                        solicitar al momento del contacto). <br>
                        Usted podrá visitar Huaynapicchu Montaña (3 horas de visita)
                        desde donde se aprecia una vista espectacular de todo el valle de Machupicchu; o podrá visitar
                        Machupicchu Montaña (4 horas de visita) la cual le dio el nombre a Machupicchu con una belleza
                        paisajista única y una vista espectacular. <br>
                        Este programa de viaje es ideal para recorrer Machupicchu en su totalidad y tomarse fotografías
                        con tiempo suficiente hasta la hora que usted tome por conveniente retornar en bus a Aguas
                        Calientes y así pueda almorzar en el mismo poblado. <br>
                        Por la tarde usted deberá abordar el tren Expedition (incluido en el Paquete Turístico) con
                        destino a Poroy u Ollantaytambo donde nuestro personal estará esperando por usted en la estación
                        de trenes para trasladarle a su hotel en Cusco.<br>
                        La ventaja de este tour es que usted podrá conocer Machupicchu sin mucha gente y con mucha más
                        disposición de tiempo.

                    </p>

                    <p><strong>Día 12: Tour en el Valle Sagrado de los Inkas.</strong></p>
                    <p>
                        Pasaremos a recogerle de su hotel a la hora indicada por su agente de viajes, iniciando el
                        recorrido a las 9:00 am dirigiéndonos por una carretera asfaltada al pueblo de Pisac, ubicado a
                        32 Km de la ciudad de Cusco, siendo Pisac un pueblo típico andino artesanal y arqueológico donde
                        se realizan las famosas Ferias Artesanales en sus mercados típicos donde usted podrá realizar
                        compras y disfrutar de un tour guiado en los sitios arqueológicos del lugar; continuando con
                        nuestro recorrido de aproximadamente una hora pasaremos por diferentes poblados como: Coya,
                        Lamay, la provincia de Calca, Yucay apreciando la belleza paisajista del Valle Sagrado de los
                        Incas. <br> Pasaremos al poblado de Urubamba donde disfrutaremos de un delicioso almuerzo buffet
                        en
                        el acogedor restaurante "Tunupa". <br>
                        Posteriormente nos dirigiremos hacia el poblado de Ollantaytambo (Es la única ciudad del
                        incanato en el Perú que aún es habitada) para visitar el complejo arqueológico del mismo nombre;
                        retornando a la ciudad de Cusco, visitaremos el sitio arqueológico de Chinchero y su capilla.
                        Retornaremos a la ciudad del Cusco a las 7:00 pm.

                    </p>
                    <p><strong>Día 13: Día libre en Cusco.</strong></p>
                    <p>
                        Desayuno en el Hotel. <br>
                        Opcional: Tour en el corredor del Sur por 25 dólares.<br>
                        Opcional: Tour en las salineras de Maras y Andenes de Moray por 25 dólares.<br>
                        Opcional: Tour en la Laguna de Huamantay ruta Salkantay por 45 dólares.<br>
                        Opcional: Tour en la Montaña de 7 colores Vinincunca por 45 dólares.<br>
                        Noche de Hotel en Cusco.

                    </p>
                    <p><strong>Día 14: Viaje de Cusco a Lima.</strong></p>
                    <p>
                        Desayuno en el Hotel. <br>
                        Traslado del hotel en Cusco al aeropuerto.<br>
                        Viaje en avión de Cusco a Lima.<br>
                        Traslado del aeropuerto de Lima al Hotel.<br>
                        Día Libre en Lima.<br>
                        Noche de Hotel en Lima.

                    </p>
                    <p><strong>Día 15: Traslado al aeropuerto.</strong></p>
                    <p>
                        Desayuno en el Hotel.<br>
                        Traslado del Hotel al aeropuerto Internacional de Lima.
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
                            <i class="fa fa-check" aria-hidden="true"></i> Todos los traslados: Hoteles -
                            aeropuertos-Hoteles, Hoteles - terminal de buses - hoteles, Hoteles-estaciones de trenes -
                            Hoteles.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Todos los ingresos a los atractivos
                            turísticos a visitar: 2 boletos de ingreso para la ciudadela inca de Machupichu mas dos
                            boletos de bus de ida y vuelta para el primer y segundo día.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Boleto de avión: Cusco - Lima<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Viaje en bus de Lima a Paracas<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour a las Islas Ballestas.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour a la reserva de Paracas.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Viaje en bus de Pisco a Nazca.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour a las Enigmáticas líneas de Nazca 40
                            minutos (según tiempo).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Viaje en bus de Nazca a Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> City tour en Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour al Cañón del Colca (el Cañón más
                            Profundo del Mundo), reserva de Vicuñas y Chivay.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour al Cañón del Colca, Cruz del Cóndor
                            Vista de Cóndores y Retorno a Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Viaje en bus de Arequipa a Puno.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour al lago Titicaca el Lago Sagrado de
                            los Incas, Isla de Los Uros, Taquile.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour guiado de Puno a Cusco (Todo el día
                            de 7am a 5pm aproximadamente).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> City Tour en Ciudad del Cusco y
                            Alrededores (Por la tarde de 2:00pm – 6:30pm).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour a Machu Picchu tren Expedition<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour al Valle Sagrado de los Incas (Todo
                            el día de 8:30 am – 7:00 pm).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 01 Almuerzo Buffet en el Valle Sagrado de
                            los Incas Restaurant Tunupa Urubamba.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Boletos de tren ida y vuelta de
                            Ollantaytambo - Machupicchu (Aguas Calientes) - Cusco.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> City tour a la “ Ciudad de los Reyes ”
                            Lima.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 14 noches en hoteles de acuerdo a su
                            acomodación.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 14 Desayunos en los Hoteles.
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus" aria-hidden="true"></i> Vuelos Lima/Cusco/Lima.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Alimentación completa (almuerzos y cenas
                            no especificadas en el programa).
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
        </div>
    </div>
    <div data-onepage-title="Services" data-onepage-slug="services" id="display"
        class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126 text-center">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1461227943574">
                <div class="wpb_wrapper">
                    <div class='heading  text-center'>
                        <div id="separador"></div>
                        <h3>Similar Tours</h3>
                        <div id="separadordjm"></div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner vc_custom_1461228417147">
                            <div class="wpb_wrapper">
                                <div class='travel-item'>
                                    <div class='entry-img'>
                                        <a class='entry-link' href="cusco-5-dias-4-noches">
                                            <img src='img/thumbnail/llama-peru.JPG' alt=" cusco en los andes" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href='cusco-5-dias-4-noches' class='button'>Cusco por 5 días</a>
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
                                        <a class='entry-link' href="cusco-6-dias-5-noches">
                                            <img width="400" height="400" src='img/thumbnail/cusco-01.JPG'
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Cusco tours de 6 días" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href="cusco-6-dias-5-noches" class='button'>Cusco por 6 días</a>
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
                                        <a class='entry-link' href="peru-10-dias-9-noches">
                                            <img width="400" height="400" src="img/thumbnail/chincheros.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas"
                                                srcset="img/thumbnail/chincheros.jpg 400w"
                                                sizes="(max-width: 400px) 100vw, 400px" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="peru-10-dias-9-noches">Perú por 10 días</a>
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
@endsection
