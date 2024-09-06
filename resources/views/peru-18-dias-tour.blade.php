@extends('layouts.general-es')
@section('metas')
    <title>18 días en Perú - Peru por 18 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa - Trujillo
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 18 días en Perú" />
    <meta name="description"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 18 días en Perú" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-18-dias-tour">
    <meta property="og:title"
        content="18 días en Perú - Peru por 18 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa - Trujillo">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/cusco-maravilloso.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel ="canonical" href = "https://www.andeanexclusive.com/peru-18-dias-tour"/>
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
                                        src="img/andean-exclusive-logo.png" id="logo" alt="andean exclusive tours"></a>
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
                                            <li><a href="peru-18-days-tour">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="#">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="peru-18-days-tour">EN</a>
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
                                                                <h1><?php $tour="TOUR EN PERÚ POR 18 DÍAS"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Trujillo
                                                                    -Nasca - Puno
                                                                    - Arequipa - Machupicchu </p>
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
                    <a href="around">Al rededor de Perú</a> /
                    <a>Perú 18 Días</a>
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
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <h4 class="text-center">Tours Similares en Perú</h4>
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
                                    <a href="peru-12-dias" class="button">Perú por 12 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-20-dias-tour" class="button">Perú por 20 días</a>
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
                        <h1 id="titulo1">PERÚ POR 18 DÍAS </h1>
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
                    <p style="padding: 0px 1px 0px 20px;">Un espectacular tour de 18 días alrededor de Perú, conocerás
                        las ciudades mas hermosas que ofrece <strong> Perú</strong>. Lima, Cusco, Trujillo, Puno,
                        Arequipa, Nasca.</p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>Bienvenida a Lima y City tour</td>
                            </tr>
                            <tr>
                                <th>DÍA 02</th>
                                <td>Viaje en avión de Lima a Chiclayo y City tour en Chiclayo</td>

                            </tr>
                            <tr>
                                <th>DÍA 03</th>
                                <td>Tour Huaca Rajada, Museo Señor de Sipán y Pirámides de Tucumé</td>
                            </tr>
                            <tr>
                                <th>DÍA 04</th>
                                <td>Viaje de Chiclayo a Trujillo y City tour en Trujillo.</td>
                            </tr>
                            <tr>
                                <th>DÍA 05</th>
                                <td>Visita al Templo del Sol y la Luna y Chan Chan.</td>
                            </tr>
                            <tr>
                                <th>DÍA 06</th>
                                <td>Viaje en avión de Trujillo a Lima.</td>
                            </tr>
                            <tr>
                                <th>DÍA 07</th>
                                <td>Viaje en Bus de Lima a Paracas, tour Islas Ballestas y Paracas a Nasca.</td>
                            </tr>
                            <tr>
                                <th>DÍA 08</th>
                                <td>Sobrevuelo en la Líneas de Nasca y Viaje a Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 09</th>
                                <td>City tour en Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 10</th>
                                <td>Tour en el Cañón del Colca.</td>
                            </tr>
                            <tr>
                                <th>DÍA 11</th>
                                <td>Cruz del Cóndor y Viaje en Bus de Chivay a Puno.
                                </td>
                            </tr>
                            <tr>
                                <th>DÍA 12</th>
                                <td>Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.</td>
                            </tr>
                            <tr>
                                <th>DÍA 13</th>
                                <td>Circuito Turístico de Puno a Cusco.</td>
                            </tr>
                            <tr>
                                <th>DÍA 14</th>
                                <td>City tour en Cusco.</td>
                            </tr>
                            <tr>
                                <th>DÍA 15</th>
                                <td>Valle Sagrado de los Inkas y viaje en tren a Machupicchu.</td>
                            </tr>
                            <tr>
                                <th>DÍA 16</th>
                                <td>Machupicchu Opcional: Huaynapicchu.</td>
                            </tr>
                            <tr>
                                <th>DÍA 17</th>
                                <td>Viaje en avión de Cusco a Lima y Tour en Pachacamac.</td>
                            </tr>
                            <tr>
                                <th>DÍA 18</th>
                                <td>Traslado del hotel al aeropuerto y despedida.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <p><strong>Day 1. Bienvenida en el aeropuerto de Lima y City tour por la tarde.</strong></p>
                    <p>
                        Este día estaremos esperándole en el aeropuerto de la ciudad de<strong> Lima</strong> a la hora
                        de llegada de su vuelo para darles una cálida bienvenida en el aeropuerto internacional "Jorge
                        Chávez" y
                        trasladarle al Hotel.<br>

                        Por la tarde realizaremos el City Tour en la<strong> “Ciudad de los Reyes”</strong> Lima: la
                        Catedral, la Tumba de Pizarro, las Catacumbas de San Francisco, pasando por el Congreso de la
                        República, el Palacio
                        de Torre Tagle, Como también visitaremos el sitio arqueológico de La Huaca Pucllana . Barranco
                        en donde disfrutará de una sorprendente vista al Océano Pacífico. Luego visitará el Museo Rafael
                        Larco Herrera donde usted podrá apreciar una gran cantidad de cerámica pre incaica incluyendo la
                        colección más grande del mundo de huacos eróticos.
                    </p>

                    <p><strong>Day 2. Viaje en avión de Lima a Chiclayo y City tour en Chiclayo.</strong></p>
                    <p>
                        Pasaremos a recogerles de su hotel para trasladarles al aeropuerto de Lima donde tomaran un
                        vuelo con destino a la ciudad de Chiclayo, nuestro personal le dará la bienvenida y les harán el
                        respectivo traslado a su hotel, por la tarde luego de su almuerzo, pasaremos a las 2 de la tarde
                        por su hotel para dar inicio al City Tour en la ciudad de Chiclayo.<br>

                        El recorrido les llevara por las iglesias de Santa Verónica, Basílica de San Antonio, Paseo Las
                        Musas, parque Principal, Municipalidad, paseo artesanal, casonas republicanas, mercado
                        herbolario.
                    </p>

                    <p><strong>Día 03: Tour Huaca Rajada, Museo Señor de Sipán y Pirámides de Tucumé.</strong></p>
                    <p>
                        Luego del desayuno pasaremos a su hotel a las 10:00 am para realizar el tour en el Complejo
                        arqueológico Huaca Rajada.<br>

                        Complejo arqueológico Huaca Rajada (Señor de Sipán), ubicado a 35 kilómetros de Chiclayo. Lugar
                        donde se descubrió en 1987 los restos intactos de un dignatario de la jerarquía mochica,
                        sacerdote guerrero ;<br>

                        El importante descubrimiento sólo se compara con el hallazgo de la tumba del faraón egipcio
                        Tutankamón, en 1922.<br>

                        La construcción está formada por una plataforma baja y dos pirámides de adobe.
                        En el hallazgo se encontró que la tumba del dignatario estaban acompañados de restos de un
                        guerrero, un sacerdote, dos mujeres, un niño, una llama y un guardián con los pies amputados.
                        Además de numerosas joyas de oro y plata.<br>

                        Museo Tumbas del señor de Sipán: Museo de reciente inauguración, conserva todo el material
                        recolectado por el Dr. Walter Alva en las excavaciones arqueológicas del Complejo Sipán Huaca
                        Rajada, la exhibición muestra al Señor de Sipán junto a todas sus joyas, algunas tumbas de
                        guerreros Moches y piezas importantes de oro. La arquitectura del museo, está inspirada en los
                        antiguos Santuarios Mochicas donde se combinan plataformas. Actualmente es considerado uno de
                        los mejores museos de Sudamérica. Almuerzo en Lambayeque.<br>

                        Pirámides de Tucumé Complejo arqueológico de Tucumé o Valle de las Pirámides se caracteriza por
                        sus 26 pirámides; entre las que se destacan: La Huaca del Pueblo, La Raya, El Sol y Las Estacas.
                        Está ubicado a solo un kilómetro del pueblo de Tucumé, comunidad que está muy involucrada con la
                        conservación de su patrimonio natural y cultural. Este complejo se remonta a 700 años d.C. y
                        constituyo un segundo centro político de los SICAN después del Bosque de Pomac.
                    </p>
                    <p><strong>Día 04: Viaje de Chiclayo a Trujillo y City tour en Trujillo.</strong></p>
                    <p>
                        Luego del desayuno en el hotel, les trasladaremos al terminal de buses para su viaje con destino
                        a Trujillo, donde les daremos la bienvenida y les haremos el respectivo traslado a su hotel.<br>

                        Por la tarde, visitaremos los siguientes lugares La Muralla Perimetral(Baluarte Herrera),
                        Plazuela el Recreo, Museo Arqueológico, Palacio Iturregui, Casa de la Emancipación, Iglesia La
                        Merced, Casa Mariscal de Orbegoso, Casa Calonge Urquiaga, La Catedral, Casa del Mayorazgo, Plaza
                        Mayor.
                    </p>

                    <p><strong>Día 05:Visita al Templo del Sol y la Luna y Chan Chan .</strong></p>
                    <p>
                        Por la mañana haremos una excursión por el<strong> Valle Moche,</strong> visitando la Campiña de
                        Moche, en esta
                        campiña se ubica el templo de adobe más alto de América: el templo del Sol y el Templo de La
                        Luna, cuyas paredes se encuentran ornamentadas con hermosos arabescos en alto relieve con
                        motivos de la mitología Mochica. Por la tarde: Visita al Complejo Arqueológico Chan-Chan,
                        visitando el Templo Arco Iris o Huaca el Dragón, el Palacio Tschudi, una de las nueve ciudadelas
                        mejor conservadas, sus paredes están decoradas con frisos de alto relieve, recorreremos sus
                        plazas ceremoniales, adoratorios, reservorios, graneros, templetes o audiencias, plataforma
                        funeraria.
                    </p>

                    <p><strong>Día 06: Viaje en avión de Trujillo a Lima.</strong></p>
                    <p>
                        Desayuno en el hotel.<br>
                        Traslado del hotel al aeropuerto de Trujillo.<br>
                        Viaje en avión de Trujillo a Lima (1 hora).<br>
                        Traslado del aeropuerto de Lima al Hotel.<br>
                        Tarde Libre.<br>
                        Noche de Hotel en Lima.
                    </p>
                    <img src="img/tours/islas-ballestas-lobos-marinos.jpg" class="img-fluid"
                        alt="Islas ballestas, Ballestas Islands"><br><br>

                    <p><strong>Día 07: Viaje en Bus de Turismo de Lima a Paracas, tour Islas Ballestas y Paracas a
                            Nazca.</strong></p>
                    <p>
                        Luego de tomar nuestro desayuno, nos trasladaremos hasta el terminal de la Empresa de turismo
                        Cruz del Sur donde abordaremos el bus en servicio Crucero VIP con destino a Paracas, donde
                        estará esperando nuestro personal para trasladarles al puerto de Paracas, donde iniciaremos el
                        tour a las Islas Ballestas pasando por<strong> "El Candelabro"</strong> una gigantesca imagen en
                        la ladera de un
                        cerro. Al llegar a las Islas Ballestas, se visitarán las diferentes islas durante dos horas,
                        observando las diferentes especies de lobos marinos, focas, pingüinos y aves guaneras. Luego de
                        llegar al puerto realizaremos el tour a la reserva de lobos marinos "Paracas". Por la tarde nos
                        dirigiremos al terminal de Paracas, desde donde tomaremos el Bus con destino a la ciudad de
                        Nazca.
                    </p>

                    <p><strong>Día 08: Sobrevuelo en la Líneas de Nazca y Viaje a Arequipa.</strong></p>
                    <p>
                        Luego del desayuno, los trasladaremos al aeródromo de<strong> Nazca,</strong> para un sobrevuelo
                        de 45 minutos
                        sobre las Pampas de Nazca, en donde los antiguos preincas dibujaron gigantescas figuras de
                        animales y plantas con un fin aún no descubierto, muchos creen que estas figuras fueron echas
                        por extraterrestres, entre los que se encuentran el mono, la araña, el colibrí, etc. Luego se
                        hará una visita al<strong> "Cementerio de Chauchillas"</strong> después se trasladará a los
                        pasajeros al terminal
                        de buses de Nazca para que realicen su viaje hasta la ciudad de "Arequipa" que por lo general
                        demora 9 horas, en donde nuestro personal los estarán esperando para darles la bienvenida y
                        llevarlos hasta su hotel.
                    </p>

                    <p><strong>Día 09: City tour en Arequipa.</strong></p>
                    <p>
                        Luego del desayuno pasaremos por usted para dirigirnos al centro de la ciudad en donde
                        iniciaremos un interesante recorrido, nuestra primera parada tiene lugar en unos de los
                        monumentos arquitectónicos más impresionantes de la ciudad, se trata del magnífico Monasterio de
                        <strong>Santa Catalina,</strong> una ciudad en miniatura que albergo a las monjas Arequipeñas
                        por más de 400
                        años. Más tarde pasaremos por la bella Plaza de Armas, bellamente rodeada por hermosos arcos
                        coloniales y visitaremos la hermosa Catedral de Arequipa, a la cual ingresaremos con nuestro
                        guía local para apreciar sus impresionante obras de arte, tanto como su imponente estructura.
                        Finalmente visitaremos el Museo de Santuarios Andinos en donde veremos los restos de la momia
                        llamada Juanita, un espectacular hallazgo de una niña perteneciente a la nobleza Inca que fue
                        descubierta en las frías faldas del nevado Ampato.
                    </p>
                    <p><strong>Día 10: Tour en el Cañón del Colca.</strong></p>
                    <p>
                        Temprano en la mañana, se embarcará en un increíble viaje de 4 horas aproximadamente, con
                        destino al Cañón del Colca, uno de los cañones más profundos del mundo ( 3,400 mts.), pasando
                        por Pampa Cañahuas, ubicada en la Reserva Nacional de Aguada Blanca, hábitat de vicuñas y
                        alpacas (camélidos de América del Sur). El punto más alto del trayecto está a 4,900 msnm. en la
                        ruta apreciaremos terrazas pre colombinas que siguen siendo cultivadas por los nativos
                        Collaguas. Arribando al Valle del Colca, les trasladaremos a su respectivo hotel.<br>

                        En la tarde, le recomendamos descansar y aclimatarse a la altura. Si se encuentra en buen estado
                        físico, tendrá tiempo libre para dar un paseo por los alrededores del hotel o tomar un reparador
                        baño en las aguas termales cercanas.
                    </p>

                    <p><strong>Día 11: Cruz del Cóndor y Viaje en Bus de Chivay a Puno.</strong></p>
                    <p>
                        A las 06.00 am, desayuno en el hotel y salida rumbo a la cruz del Cóndor donde permaneceremos
                        por un lapso de 1 ½ horas aproximadamente, desde este Punto se puede apreciar en su mayor
                        dimensión la profundidad del Cañón del Colca y también el vuelo del Cóndor a corta
                        distancia.<br>

                        Retornando podremos observar restos arqueológicos y otras vistas panorámicas del Cañón del Colca
                        como la preciosa andenería pre-inca, pasaremos por los pueblos de Pinchollo , Maca, Achoma,
                        Yanque (en este último hacemos una parada), para observar sus construcciones típicas , su
                        pequeño centro artesanal, la vestimenta típica, entre otros. Llegada a Chivay y almuerzo y
                        finalmente viaje de Chivay con destino Puno.<br>
                        19.00 Llegada a Puno aproximadamente.
                    </p>
                    <p><strong>Día 12: Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.</strong></p>
                    <p>
                        Pasaremos a recogerle a su hotel a las 6:30 a.m; aprox. para trasladarle al Puerto e iniciar el
                        tour en una lancha turística hacia las sorprendentes y majestuosas “Islas de los Uros”, llegando
                        a las 07:20 de la mañana aprox.<strong> Uros:</strong> Estas islas son pisos artificiales,
                        fabricados con totora
                        superpuesta y hábilmente entretejida. Durante el trayecto el guía proporciona amplia información
                        sobre el Lago Titicaca, las leyendas de los Uros, sus usos, costumbre y el folklore;<br>

                        Taquile: Arribando a Taquile, nos dirigiremos a su Plaza de Armas, tiempo libre para hacer
                        compras. La Isla Taquile nos presenta tejidos de una calidad impresionante comparable solamente
                        con los telares de la cultura Paracas o Egipto, declarados Patrimonio Cultural de la Humanidad.
                        A las 12:40 del medio día usted degustará un exquisito almuerzo, zarpando del Puerto de<strong>
                            Taquile</strong>
                        a las 2:30pm y llegando a Puno a las 5:30 pm aprox. para seguidamente trasladarles a su hotel.
                    </p>
                    <img src="img/tours/puno-peru-islands.jpg" class="img-fluid"
                        alt="Tour en el lago titicaca lake"><br><br>
                    <p><strong>Día 13: Circuito Turístico de Puno a Cusco.</strong></p>
                    <p>
                        Después del desayuno, los recogeremos del hotel y los llevaremos a la estación de buses de
                        Turismo donde lo llevará por un recorrido que dura (8 horas aprox.) Donde usted disfrutará de 4
                        excursiones y visitas guiadas, llegando al paso de la Raya a 4,335 m.s.n.m y el Museo inca
                        Aymara de Pucará, llegando al medio día a la ciudad de Sicuani teniendo incluido un delicioso
                        almuerzo Buffet.<br>

                        Luego continuaremos con nuestro viaje; donde cada visita tiene una duración de ( 20 a 40 minutos
                        promedio ), visitaremos el templo Inca de Raqchi, el templo de Andahuaylillas o Capilla Sixtina
                        de América, haciendo su excursión muy placentera. Al llegar a la ciudad imperial del Cusco lo
                        estaremos esperando para trasladarlo a su hotel, donde pasará la noche.
                    </p>
                    <p><strong>Día 14: City tour en Cusco.</strong></p>
                    <p>
                        Por la mañana usted dispondrá de una mañana libre para hacer lo que desee, compras, pasear por
                        las pintorescas calles de la ciudad del Cusco, tomarse fotografías.<br>

                        Luego de su almuerzo lo recogeremos de su hotel a las 1:10 aproximadamente de la tarde para dar
                        inicio y disfrutar de un tour guiado a las 1:35pm de la tarde donde usted podrá conocer: La
                        antigua Plaza de Armas del Cusco, la Catedral, el Monasterio de Santo Domingo, Templo del
                        Qoricancha y los sitios arqueológicos como : Quenko, Puka Pukará, Tambomachay y la Gran y
                        maravillosa fortaleza de Sacsayhuaman:<br>

                        Retornando hacia la ciudad del Cusco a las 6 :45 de la tarde.
                    </p>
                    <p><strong>Día 15: Tour en el Valle Sagrado de los Inkas y viaje en tren a Machupicchu (Aguas
                            Calientes.</strong></p>
                    <p>
                        Pasaremos a recogerle de su hotel a la hora indicada por su agente de viajes, iniciando el
                        recorrido a las 8:35 a.m dirigiéndonos por una carretera asfaltada al pueblo de<strong>
                            Pisac,</strong> Pasaremos
                        a recogerle de su hotel a la hora indicada por su agente de viajes, iniciando el recorrido a las
                        8:35 a.m dirigiéndonos por una carretera asfaltada al pueblo de Pisac,
                    </p>
                    <p><strong>Día 16: Vista del amanecer y Tour guiado en Machupicchu y Opcional: Ascenso al
                            Huaynapicchu.</strong></p>
                    <p>
                        Luego de su desayuno, de acuerdo al horario de su boleto de ingreso a Machupicchu, En
                        coordinación con el guía, quien le visitará un día antes en su hotel en Aguas Calientes deberá
                        tomar el bus de subida de Aguas Calientes a Machupicchu (altitud 2450 m.s.n.m) que dura 30
                        minutos de subida aproximadamente, excelente oportunidad para levantarse temprano y observar un
                        lindo amanecer en Machupicchu, a la hora programada con el guía un día antes, tendrá su tour
                        guiado de aproximadamente 2 horas, pudiendo visitar: la Plaza Principal, la Torre Circular, el
                        Sagrado Reloj Solar, Los Cuartos Reales, El Templo de las Tres Ventanas y los Cementerios.<br>

                        Antes o después de su tour Guiado en Machupicchu, dependiendo del horario establecido en sus
                        tickets tendrá un tiempo libre para explorar por si mismo Machupicchu o usar sus tickets para
                        ascender a la Montaña de Huaynapicchu o Machupicchu Montaña (Note que en caso quiera ascender a
                        la montaña Huaynapicchu tiene que reservar por lo menos con tres meses de anticipación ya que
                        los espacios son limitados, consultar espacios y horarios). Usted podrá visitar Huaynapicchu
                        Montaña (3 horas de visita) desde donde se aprecia una vista espectacular de todo el valle de
                        Machupicchu; o podrá visitar Machupicchu Montaña (4 horas de visita) la cual le dio el nombre a
                        Machupicchu con una belleza paisajista única y una vista espectacular.<br>
                        <img src="img/blog/machu-picchu-exclusive.jpg" class="img-fluid"
                            alt="Machu Picchu tour Peru"><br><br>

                        Este programa de viaje es ideal para recorrer Machupicchu en su totalidad y tomarse fotografías
                        con tiempo suficiente hasta la hora que usted tome por conveniente retornar en bus a Aguas
                        Calientes y así pueda almorzar en el mismo poblado.<br>

                        Por la tarde usted deberá abordar el tren Expedition (incluido en el Paquete Turístico) con
                        destino a Poroy u Ollantaytambo donde nuestro personal estará esperando por usted en la estación
                        de trenes para trasladarle a su hotel en Cusco.<br>

                        La ventaja de este tour es que usted podrá conocer Machupicchu sin mucha gente y con mucha más
                        disposición de tiempo.
                    </p>
                    <p><strong>Día 17: Viaje en avión de Cusco a Lima y Tour en Pachacamac.</strong></p>
                    <p>
                        Estaremos esperando por usted con un cartel con su nombre, en el aeropuerto internacional,
                        "Jorge Chávez" de la ciudad de Lima a la hora de llegada de su vuelo para darles una cálida
                        bienvenida y trasladarle al Hotel.<br>

                        Por la tarde, les conduciremos al sitio Arqueológico de Pachacamac, tendremos una visita guiada
                        a la esplendida y extensa ciudadela arqueológica de Pachacamac. Santuario del dios Pachacamac,
                        el creador del universo divinidad adorada por los antiguos pueblos andinos. Lugar sagrado y
                        ceremonial de principios de la Era Cristiana donde llegaban millares de peregrinos para
                        presentar sus ofrendas y consultar al oráculo de Pachacamac, que miraba el pasado, el futuro y
                        el destino.
                    </p>
                    <p><strong>Día 18: Traslado del hotel al aeropuerto y despedida.</strong></p>
                    <p>
                        Luego del desayuno en el hotel, de acuerdo al horario de su vuelo, le recogeremos de su hotel
                        para trasladarle al aeropuerto de Lima con tres horas de anticipación, donde le ayudaremos a
                        realizar todo el proceso para el aborde de su vuelo y finalmente abordándolos a su vuelo de
                        destino deseándoles un Feliz Viaje.
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
                    </ul>
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <i class="fa fa-minus" aria-hidden="true"></i> Boletos de avión de Cusco a Lima.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Boletos de avión de Lima a Chiclayo.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Boletos de avión de de Trujillo a
                            Lima.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Todos los ingresos a todos los atractivos
                            turísticos a visitar dentro del Paquete Turístico.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Todos los traslados al hotel, aeropuerto,
                            estaciones de tren y atractivos turísticos.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Guía profesional de turismo en idioma que
                            usted prefiera: inglés o español.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> City Tour en Lima.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Boleto de bus Chiclayo a Trujillo.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Visita a las Tumbas Reales del Señor de
                            Sipán.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Visita al Complejo Arqueológico de Huaca
                            Rajada.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> City Tour en Trujillo<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour a las Pirámides del Sol y la
                            Luna.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour a la Ciudad de Barro más Grande del
                            Mundo; Chan-Chan.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en bus de Lima a Paracas<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour a las Islas Ballestas.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour a la reserva de Paracas.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en bus de Paracas a Nazca.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Sobrevuelo a las Enigmáticas líneas de
                            Nazca<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en bus de Nazca a Arequipa.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> City tour en Arequipa.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour al Cañón del Colca, Cruz del Cóndor
                            Vista de Cóndores y chivay 2 días y 1 noche.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en bus Arequipa a Puno.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour al Lago Titicaca, Isla de Los Uros y
                            Taquile.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour guiado de Puno a Cusco (Todo el día
                            de 8am - 5pm aproximadamente).<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> City Tour en Ciudad del Cusco y
                            Alrededores.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour al Valle Sagrado de los Incas.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour a Machu Picchu , tren Expedition<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 01 Almuerzo Buffet en el Valle Sagrado de
                            los Incas.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 01 Almuerzo Buffet en el viaje en bus
                            turístico de Puno a Cusco.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 01 Almuerzo en el Lago Titicaca.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Boletos de tren ida y vuelta de
                            Cusco/Machupicchu (Aguas Calientes)/Cusco.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Todos los Tickets de ingreso a los
                            atractivos turísticos a visitar.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 17 noches de Hotel con desayunos buffets
                            incluidos.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 17 desayunos buffets en los hoteles.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Asistencia y Orientación diaria por parte
                            de nuestro personal profesional en Turismo.
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus" aria-hidden="true"></i> Propinas<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Vuelos extranjeros
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
                    <div class="card">
                        <div class="card-body">
                            @include('layouts.booking-castellano')
                        </div>
                    </div>
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
                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759 text-center">
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
                                            <a href='cusco-5-dias-4-noches' class='button'>Cusco 5 días</a>
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
                                        <a class='entry-link' href="peru-9-dias-8-noches">
                                            <img width="400" height="400" src="img/thumbnail/chincheros.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas"
                                                srcset="img/thumbnail/chincheros.jpg 400w"
                                                sizes="(max-width: 400px) 100vw, 400px" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="peru-9-dias-8-noches">Perú por 9 días</a>
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
