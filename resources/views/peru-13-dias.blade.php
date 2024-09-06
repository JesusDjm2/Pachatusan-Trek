@extends('layouts.general-es')
@section('metas')
    <title>13 días en Perú - Peru por 13 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 13 días en Perú" />
    <meta name="description"
        content="Ven a disfrutar de lo que Perú tiene para ofrecr a sus visitantes. Tour de 13 días en Perú" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-13-dias">
    <meta property="og:title"
        content="13 días en Perú - Peru por 13 días - Machu Picchu - Valle Sagrado - City Tours - Puno - Arequipa">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/hermoso-peru.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-13-dias" />
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
                                            <li><a href="peru-13-days">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="#">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="peru-13-days">En</a>
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
                                                                <h1><?php $tour="TOUR EN PERÚ POR 13 DÍAS"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Paracas -
                                                                    Nazca - Arequipa - Puno - Cusco</p>
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
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em"></div>
                </div>
                <div class="col-lg-6 col-sm-10"><a href="index-castellano">Inicio</a> /
                    <a href="experiencias">Populares</a> /
                    <a>Perú por 13 días</a>
                </div>
                <div class="col-lg-3 col-sm-2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em"></div>
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
                                <h4 class="text-center">Tours Similares</h4>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-5-dias-4-noches" class="button">Perú 5 días</a>
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
                                    <a href="peru-18-dias-tour" class="button">Perú por 18 días</a>
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
                        <h1 id="titulo1">PERÚ 13 DÍAS </h1>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178">Reservar con 30 días de anticipación</p>
                    </center>
                    <div id="separador"></div>
                    <h5 style="padding: 0px 1px 0px 20px;">Vista General</h5>
                    <p style="padding: 0px 1px 0px 20px;">Tour Perú Machupicchu 13 días: City tour en Lima, Tour en
                        Nazca, City tour en
                        Cusco, tour al Valle Sagrado de los Inkas, Tour en Machupicchu con Huaynapicchu, Tour en el
                        Cañón del Colca, Tour en el Lago Titicaca, Isla de los Uros e Isla Taquile.
                    </p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>Bienvenida en Lima, City tour en Lima con visita a la Huaca Pucllana</td>
                            </tr>
                            <tr>
                                <th>DÍA 02</th>
                                <td>Bienvenida en el aeropuerto y City tour en Cusco.</td>

                            </tr>
                            <tr>
                                <th>DÍA 03</th>
                                <td>Valle Sagrado de los Incas</td>
                            </tr>
                            <tr>
                                <th>DÍA 04</th>
                                <td>Machu Picchu, subida opcional a la montaña Huaynapicchu.</td>
                            </tr>
                            <tr>
                                <th>DÍA 05</th>
                                <td>Día libre en Cusco</td>
                            </tr>
                            <tr>
                                <th>DÍA 06</th>
                                <td>Viaje en bus de Cusco a Puno</td>
                            </tr>
                            <tr>
                                <th>DÍA 07</th>
                                <td>Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.</td>
                            </tr>
                            <tr>
                                <th>DÍA 08</th>
                                <td>Viaje en bus de Puno al Cañón del Colca</td>
                            </tr>
                            <tr>
                                <th>DÍA 09</th>
                                <td>Tour Cañón del Colca y viaje en Bus hacia Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 10</th>
                                <td>Mañana libre y City tour en Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 11</th>
                                <td>Sobre vuelo líneas de Nasca
                                </td>
                            </tr>
                            <tr>
                                <th>DÍA 12</th>
                                <td>Tour Islas Ballestas y Huacachina.</td>
                            </tr>
                            <tr>
                                <th>DÍA 13</th>
                                <td>Traslado del hotel al aeropuerto de Lima</td>
                            </tr>
                        </tbody>
                    </table>
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
                    <h5>ITINERARIO:</h5>
                    <h2 class="h2-tours">Día 1. Bienvenida en el aeropuerto de Lima, City tour en Lima con visita
                        a la Huaca
                        Pucllana</h2>
                    <p>
                        En este día lo estaremos esperando en el aeropuerto de Lima a la hora de la llegada de su vuelo
                        para darle una cálida bienvenida en el aeropuerto internacional “Jorge Chávez” y trasladarlo al
                        Hotel.<br>

                        Por la tarde lo recogeremos de su hotel para iniciar el City tour en Lima: "La Ciudad de los
                        Reyes", en el camino haremos una parada en uno de los distritos más pequeño de Lima “Barranco”,
                        donde destaca su famoso Puente de los Suspiros, el Ermita y el monumento a Isabel Granada Larco
                        (Chabuca Granda). Continuaremos nuestro recorrido en el transporte turístico hacia Miraflores
                        donde veremos el Parque del Amor ubicado en el malecón desde donde podrá tomar hermosas fotos
                        con vista al Océano Pacífico, tendremos una vista panorámica de la Huaca Pucllana que es un pre-
                        Templo religioso inca y centro administrativo habitado entre los siglos III y VIII D.C., luego
                        daremos un paseo por el parque de los olivos, que datan del Virreinato con una extensión de 23
                        hectáreas.<br>

                        Con un recorrido de 6 km llegaremos al centro histórico de Lima donde apreciaremos el Palacio de
                        Justicia, el Paseo de los Héroes Navales, el Palacio Francés, y edificios coloniales como la
                        Plaza Mayor, el Palacio de Gobierno, el Palacio Arzobispal, Catedral Basílica, Palacio
                        Municipal, Plaza San Martín, entre otros. Visitaremos el Museo BCR, donde podrá apreciar una
                        colección de oro del Perú y una selección de cerámica, orfebrería y textiles de diversas
                        culturas pre-Colombinas (sujeto a horario del museo y acceso al centro histórico).
                        <br><br>Siguiendo
                        nuestro recorrido por la Iglesia y Convento de San Francisco, visitaremos sus impresionantes
                        criptas subterráneas conocidas como Catacumbas. <br>
                        Luego regresamos al hotel.

                    </p>

                    <h2 class="h2-tours">Día 2. Bienvenida al Aeropuerto y City tour en Cusco.</h2>
                    <p>
                        Este día comienza con el recojo en su hotel para su vuelo de Lima a Cusco que tomará en el
                        aeropuerto "Jorge Chávez" de la ciudad de Lima 2 horas antes de su vuelo a la "Capital
                        Arqueológica de América" Cusco (altitud 3350 m.s.n.m.), donde nuestro personal lo estará
                        esperando en el aeropuerto con un cartel con su nombre para trasladarlo al hotel seleccionado,
                        donde se le ofrecerá mate de coca que es bueno para la aclimatación del Cusco. Luego de su
                        almuerzo, lo recogeremos de su hotel a la hora indicada por su agente de viajes, para iniciar y
                        disfrutar de una visita guiada a la 1:35 pm donde podrá conocer los siguientes atractivos
                        turísticos de la ciudad del Cusco: <br>
                        <strong> El Templo del Sol o Qoricancha:</strong> El convento de Santo Domingo en Cusco es el
                        edificio religioso
                        más antiguo de Sudamérica, conocido como el “Templo del Sol”. Actualmente se puede apreciar la
                        maravillosa arquitectura Inca ligada a la arquitectura española la cual es una muestra de
                        nuestra cultura mestiza.
                        <strong>La Catedral:</strong> La Catedral Basílica de la ciudad del Cusco fue construida por
                        trabajadores
                        cusqueños nativos y dirigida por los españoles. También cuenta con las más finas expresiones de
                        la orfebrería colonial, así como con la talla en madera y una valiosa colección de lienzos de la
                        "Escuela Cusqueña".
                        <strong>Sascayhuamán:</strong> Es una de las construcciones incas que más asombra a los turistas
                        quienes, según
                        nuevas hipótesis, señalan que habría sido un importante centro ceremonial inca y no una
                        fortaleza como se creía anteriormente. Su construcción tomó más de siete décadas y requirió la
                        fuerza de unos 20.000 hombres.
                        <strong>Qenqo: </strong> ceremonial y ritual, era un anfiteatro donde se realizaban sacrificios,
                        se dice
                        que fue un adoratorio Inca. Su construcción es de piedras. Hay pasadizos, canales y escaleras
                        con grabados que representan al puma, un animal muy sagrado para los incas.
                        <strong>Puca Pucara:</strong> Antiguo lugar de guardia de Tambo a lo largo de los caminos incas,
                        este sitio
                        arqueológico cuenta con: recintos, plazas interiores, baños, acueductos, torres de vigilancia y
                        un camino inca fácilmente reconocible en síntesis el trazado urbano es muy adecuado y funcional.
                        <strong>Tambomachay: </strong> través de sus escalinatas se pueden apreciar cataratas
                        cristalinas y según se
                        afirma aquí se rendía culto al elemento líquido para los Incas, "el agua". Regresando a Cusco a
                        las 6:45 pm.

                    </p>
                    <img src="{{ asset('img/galeria/cusco-maravilloso.webp') }}" alt="Tour en las islas Ballestas"
                        width="100%" loading="lazy"> <span>Foto: Plaza de Armas, Cusco - Perú</span><br><br>

                    <h2 class="h2-tours">Día 03: Recorrido por el Valle Sagrado de los Incas y Viaje en Tren a
                        Machupicchu (Aguas Calientes).</h2>
                    <p>
                        Pisac, es un típico artesano andino y pueblo arqueológico donde se realizan las famosas Ferias
                        Artesanales en sus mercados típicos donde se pueden realizar compras y disfrutar de un recorrido
                        guiado por las zonas arqueológicas del lugar; continuando con nuestro recorrido de
                        aproximadamente una hora pasaremos por diferentes pueblos como Coya, Lamay, la provincia de
                        Calca y Yucay apreciando la belleza del Valle Sagrado de los Incas.<br> Pasaremos al pueblo de
                        Urubamba donde disfrutaremos de un delicioso almuerzo buffet en el acogedor restaurante
                        “Tunupa”; posteriormente nos dirigiremos al pueblo de Ollantaytambo para visitar el complejo
                        arqueológico del mismo nombre; habiendo sido un complejo agrícola, administrativo, social,
                        religioso y militar en el Tahuantinsuyo, finalizando el recorrido aproximadamente a las 16:00
                        horas, luego tendrá tiempo libre en el poblado de Ollantaytambo, donde podrá visitar su mercado
                        artesanal, sus callejuelas que aún conserva el trazado de las calles incas, ver correr el agua
                        por sus antiguos canales, es como retroceder en el tiempo, ideal para tomarse fotografías o
                        tomar un café en su Plaza de Armas. <br> A la hora indicada debe tomar el tren de Ollantaytambo
                        saliendo a las 7:00 p.m. al pueblo de Aguas Calientes donde nuestro personal lo estará esperando
                        para trasladarlo al hotel seleccionado.
                    </p>
                    <img src="img/blog/Tour-al-Valle-Sagrado-de-los-Incas.webp" class="img-fluid"
                        alt="Responsive image"><span>Foto: Valle Sagrado de los Incas</span><br><br>
                    <h2 class="h2-tours">Día 04: City tour en Arequipa.</h2>
                    <p>
                        Luego del almuerzo que sería por su cuenta, pasaremos por usted para dirigirnos al centro de la
                        ciudad en donde iniciaremos un interesante recorrido, nuestra primera parada tiene lugar en unos
                        de los monumentos arquitectónicos más impresionantes de la ciudad, se trata del magnífico
                        Monasterio de<strong> Santa Catalina,</strong> una ciudad en miniatura que albergo a las monjas
                        Arequipeñas por
                        más de 400 años. Más tarde pasaremos por la bella Plaza de Armas, bellamente rodeada por
                        hermosos arcos coloniales y visitaremos la hermosa Catedral de Arequipa, a la cual ingresaremos
                        con nuestro guía local para apreciar sus impresionante obras de arte, tanto como su imponente
                        estructura. Finalmente visitaremos el Museo de Santuarios Andinos en donde veremos los restos de
                        la momia llamada<strong> Juanita,</strong> un espectacular hallazgo de una niña perteneciente a
                        la nobleza Inca
                        que fue descubierta en las frías faldas del nevado Ampato.
                    </p>

                    <h2 class="h2-tours">Día 05: Tour en el Cañón del Colca.</h2>
                    <p>
                        Temprano en la mañana, se embarcará en un increíble viaje de 4 horas aproximadamente, con
                        destino al<strong> Cañón del Colca,</strong> uno de los cañones más profundos del mundo ( 3,400
                        mts.), pasando
                        por Pampa Cañahuas, ubicada en la Reserva Nacional de Aguada Blanca, hábitat de vicuñas y
                        alpacas (camélidos de América del Sur). El punto más alto del trayecto está a 4,900 msnm. en la
                        ruta apreciaremos terrazas pre colombinas que siguen siendo cultivadas por los nativos
                        collaguas. Arribando al Valle del Colca, les trasladaremos a su respectivo hotel.<br>

                        En la tarde, le recomendamos descansar y aclimatarse a la altura. Si se encuentra en buen estado
                        físico, tendrá tiempo libre para dar un paseo por los alrededores del hotel o tomar un reparador
                        baño en las aguas termales cercanas.
                    </p>

                    <h2 class="h2-tours">Día 06: Tour en el Cañón del Colca y Cruz del Cóndor, retorno a Arequipa.
                    </h2>
                    <p>
                        Muy temprano en la mañana partiremos con destino a La<strong> Cruz del Cóndor,</strong> donde
                        usualmente se puede
                        observar el ave más grande del mundo en pleno vuelo. Durante el regreso visitaremos los pueblos
                        de Yanque, Coporaque, Achoma y Maca. Buena ocasión para apreciar la vida de los habitantes de
                        estos pueblos que no ha variado mucho desde tiempos incaicos. Finalmente, por la tarde, retorno
                        a la ciudad Blanca de Arequipa.
                    </p>
                    <img src="{{ asset('img/galeria/mirador-del-condor-Arequipa.webp') }}"
                        alt="Colca canyon tour, Arequipa" width="100%" loading="lazy"><span>Foto: Mirador del Cóndor,
                        Cañon del Colca - Arequipa</span><br><br>


                    <h2 class="h2-tours">Día 07: Viaje de Arequipa a Puno.</h2>
                    <p>
                        Luego del desayuno le recogeremos de su hotel para dirigirnos al terminal terrestre y abordar el
                        bus con destino a Puno donde pasaremos la noche en el hotel escogido.<br>
                        Este día tendrá la tarde Libre.
                    </p>

                    <h2 class="h2-tours">Día 08: Tour en el Lago Titicaca, Isla Flotante de los Uros y Taquile.
                    </h2>
                    <p>
                        Pasaremos a recogerle a su hotel a las 6:20 a.m; aprox. para trasladarle al Puerto e iniciar el
                        tour en una lancha turística hacia las sorprendentes y majestuosas<strong> “Islas de los
                            Uros”,</strong> llegando
                        a las 07:20 de la mañana aprox.<strong> Uros:</strong> Estas islas son pisos
                        artificiales,fabricados con totora
                        superpuesta y hábilmente entretejida. Durante el trayecto el guía proporciona amplia información
                        sobre el<strong> Lago Titicaca,</strong> las leyendas de los Uros, sus usos, costumbre y el
                        folklore; Taquile:
                        Arribando a Taquile, nos dirigiremos a su Plaza de Armas, tiempo libre para hacer compras. La
                        Isla Taquile nos presenta tejidos de una calidad impresionante comparable solamente con los
                        telares de la cultura Paracas o Egipto, declarados Patrimonio Cultural de la Humanidad. A las
                        12:40 del medio día usted degustará un exquisito almuerzo, zarpando del Puerto de Taquile a las
                        2:30pm y llegando a Puno a las 5:30 pm aproximadamente. para seguidamente trasladarles a su
                        hotel.
                    </p>
                    <img src="img/tours/puno-peru-islands.jpg" width="100%" alt="Lago Titicaca, Puno" loading="lazy">
                    <span>Foto: Lago Titicaca, Puno</span><br><br>

                    <h2 class="h2-tours">Día 09: Circuito Turístico de Puno a Cusco.</h2>
                    <p>
                        Después del desayuno, los recogeremos del hotel y los llevaremos a la estación de buses de
                        Turismo donde lo
                        llevará por un recorrido que dura (8 horas aprox.) Donde usted disfrutará de 4 excursiones y
                        visitas guiadas, llegando al paso de la Raya a 4,335 m.s.n.m y el Museo inca aymara de Pucará,
                        llegando al medio día a la ciudad de Sicuani teniendo incluido un delicioso almuerzo Buffet.

                        Luego continuaremos con nuestro viaje; donde cada visita tiene una duración de ( 20 a 40 minutos
                        promedio ), visitaremos el templo Inca de Raqchi, el templo de Andahuaylillas o Capilla Sixtina
                        de América, haciendo su excursión muy placentera. Al llegar a la ciudad imperial del Cusco lo
                        estaremos esperando para trasladarlo a su hotel, donde pasará la noche.
                    </p>
                    <h2 class="h2-tours">Día 10: City tour en Cusco.</h2>
                    <p>
                        Por la mañana usted dispondrá de una mañana libre para hacer lo que desee, compras, pasear por
                        las pintorescas calles de la ciudad del Cusco, tomarse fotografías.<BR>
                        Luego de su almuerzo lo recogeremos de su hotel a las 1:10 de la tarde para dar inicio y
                        disfrutar de un tour guiado a la 1:35 de la tarde donde usted podrá conocer : La antigua Plaza
                        de Armas del Cusco, la Catedral, el Monasterio de Santo Domingo, Templo del Qoricancha y los
                        sitios arqueológicos como : Kenko, Puka Pukará, Tambomachay y la Gran y maravillosa fortaleza de
                        Sacsayhuaman.<br>

                        Retornando hacia la ciudad del Cusco a las 6:45 de la tarde. Finalmente noche de pernocte en el
                        Hotel en Cusco.
                    </p>
                    <img src="{{ asset('img/galeria/cusco-maravilloso.webp') }}" alt="Plaza de armas del Cusco"
                        width="100%" loading="lazy"><span>Foto: Plaza de armas del Cusco</span><br><br>

                    <h2 class="h2-tours">Día 11: Tour en el Valle Sagrado de los Inkas y viaje en tren a
                        Machupicchu (Aguas
                        Calientes).</h2>
                    <p>
                        Pasaremos a recogerle de su hotel a la hora indicada por su agente de viajes, iniciando el
                        recorrido a las 8:40 a.m dirigiéndonos por una carretera asfaltada al pueblo de Pisac, ubicado a
                        32 Km de la ciudad de Cusco, siendo Pisac un pueblo típico andino artesanal y arqueológico donde
                        se realizan las famosas Ferias Artesanales en sus mercados típicos donde usted podrá realizar
                        compras y disfrutar de un tour guiado en los sitios arqueológicos del lugar; continuando con
                        nuestro recorrido de aproximadamente una hora pasaremos por diferentes poblados como: Coya,
                        Lamay, la provincia de Calca, Yucay apreciando la belleza paisajística del Valle Sagrado de los
                        Incas. Pasaremos al poblado de Urubamba donde disfrutaremos de un delicioso almuerzo buffet en
                        el acogedor restaurante "Tunupa" Posteriormente nos dirigiremos hacia el poblado de
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
                    <img src="{{ asset('img/galeria/Tour-al-Valle-Sagrado-de-los-Incas.webp') }}"
                        alt="Tour al Valle Sagrado de los Incas Pisaq" loading="lazy" width="100%"><span>Foto: Ciudadela
                        de Pisaq ene lVallle Sagrado de los Incas</span><br><br>
                    <h2 class="h2-tours">Día 12: Tour guiado en Machupicchu y Opcional: Ascenso al Huaynapicchu o
                        Machupicchu
                        Montaña.</h2>
                    <p>
                        Luego de su desayuno, de acuerdo al horario de su boleto de ingreso a<strong>
                            Machupicchu,</strong> En
                        coordinación con el guía, quien le visitará un día antes en su hotel en Aguas Calientes deberá
                        tomar el bus de subida de <strong> Aguas Calientes</strong> a Machupicchu (altitud 2450 m.s.n.m)
                        que dura 30
                        minutos de subida aproximadamente, a la hora programada con el guía un día antes, tendrá su tour
                        guiado de aproximadamente 2 horas, pudiendo visitar: la Plaza Principal, la Torre Circular, el
                        Sagrado Reloj Solar, Los Cuartos Reales, El Templo de las Tres Ventanas y los Cementerios.

                        Antes o después de su tour Guiado en Machupicchu, dependiendo del horario establecido en sus
                        tickets tendrá un tiempo libre para explorar por si mismo Machupicchu o usar sus tickets para
                        ascender a la Montaña de Huaynapicchu o Machupicchu Montaña (Note que en caso quiera ascender a
                        la montaña Huaynapicchu tiene que reservar por lo menos con tres meses de anticipación ya que
                        los espacios son limitados, consulktar espacios y horarios). Usted podrá visitar Huaynapicchu
                        Montaña (3 horas de visita) desde donde se aprecia una vista espectacular de todo el valle de
                        Machupicchu; o podrá visitar Machupicchu Montaña (4 horas de visita) la cual le dio el nombre a
                        Machupicchu con una belleza paisajista única y una vista espectacular.<br>

                        Este programa de viaje es ideal para recorrer Machupicchu en su totalidad y tomarse fotografías
                        con tiempo suficiente hasta la hora que usted tome por conveniente retornar en bus a Aguas
                        Calientes y así pueda almorzar en el mismo poblado.<br>

                        Por la tarde usted deberá abordar el tren Expedition (incluido en el Paquete Turístico) con
                        destino a Poroy u Ollantaytambo donde nuestro personal estará esperando por usted en la estación
                        de trenes para trasladarle a su hotel en Cusco.<br>

                        La ventaja de este tour es que usted podrá conocer Machupicchu sin mucha gente y con mucha más
                        disposición de tiempo.
                    </p>
                    <img src="img/blog/machu-picchu-exclusive.jpg" width="100%" loading="lazy"
                        alt="La grandiosa ciudadela de Machu Picchu"><span>Foto: La ciudadela de Machu Picchu,
                        Cusco</span><br><br>
                    <h2 class="h2-tours">Día 13: Viaje en avión de Cusco a Lima.</h2>
                    <p>
                        Este día de acuerdo al horario de vuelo de la ciudad de Cusco con destino a Lima se le hará el
                        traslado del Hotel en Cusco al aeropuerto con 2 horas de anticipación al horario de su vuelo
                        para llegar a tiempo y realizar los respectivos trámites de embarque al avión.
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
                            <i class="fa fa-minus" aria-hidden="true"></i> Boletos de Avión de Cusco a Lima. (1 hora
                            y 20 minutos).<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Todos los traslados indicados en el
                            itinerario.(Hoteles, aeropuertos, tours, estaciones de
                            tren, terminales de buses).<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Todos los transportes para todos los
                            tours.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Todas las ingresos para todos los
                            atractivos turísticos a visitar dentro del Paquete
                            Turístico.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour a Machu Picchu tren Expedition. (de
                            7:00am a 8:30 pm aprox.)<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour Valle Sagrado de los Incas. (De
                            9:00p.m a 4:30 p.m aprox.)<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> City Tour en Cusco. (De 2:00p.m a 6:30 p.m
                            aprox)<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> City tour en la ciudad de Lima “Ciudad de
                            los Reyes” (De 2:00 p.m a 5:00 p.m aprox).<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> City tour en la ciudad blanca de
                            Arequipa.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour lago Titicaca, Isla de los Uros e
                            Isla de Taquile.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour guiado de Cusco a Puno, (De 8:00 a.m.
                            a 5:00 p.m).<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour Cañón del Colca en 2 días y 1
                            noche.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour guiado en el viaje de Puno a
                            Cusco.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour en las Islas Ballestas.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tour en la Reserva Paracas.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Sobrevuelo en las Líneas de Nazca.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en Bus de Turismo de Puno a
                            Cusco.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en Bus cama de Arequipa a Puno.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en Bus cama, servicio crucero de
                            Lima a Paracas.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Viaje en Bus cama, servicio crucero de
                            Paracas a Nazca.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 1 Noche de Hotel en Lima.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 3 Noche de Hotel en Cusco.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 1 Noche de Hotel en Aguas Calientes-
                            Machupicchu.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 2 Noche de Hotel en Puno.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 3 Noches de Hotel en Arequipa.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 1 Noche de Hotel en Colca.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 1 Noche de Hotel en Nazca.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 12 desayunos buffet en los hoteles.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Boletos de tren Ollantaytambo - Aguas
                            Calientes (Machupicchu) - Poroy (Cusco).<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Guía profesional en Turismo en todos los
                            tours a realizarse, en el idioma que usted
                            prefiera: Inglés o Español.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 1 Almuerzo Buffet en el Valle Sagrado de
                            los Incas, restaurant "Tunupa".<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 1 Almuerzo Buffet en el Viaje de Puno a
                            Cusco.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> 1 Almuerzo en el Lago Titicaca.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Asistencia y Orientación diaria por parte
                            de nuestro personal profesional en Turismo.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Todos los impuestos de Ley.
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-13-dias"
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
        </div>
    </div>
    <div data-onepage-title="Services" data-onepage-slug="services" id="display"
        class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1461227943574">
                <div class="wpb_wrapper">
                    <div class='heading  text-center'>
                        <div id="separador"></div>
                        <h3>Tours Similares</h3>
                        <div id="separadordjm"></div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner vc_custom_1461228417147">
                            <div class="wpb_wrapper">
                                <div class='travel-item'>
                                    <div class='entry-img'>
                                        <a class='entry-link text-center' href="peru-8-dias-7-noches">
                                            <img src='img/thumbnail/llama-peru.JPG' alt=" cusco en los andes" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href='peru-8-dias-7-noches' class='button'>Perú por 8 días</a>
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
                                        <a class='entry-link text-center' href="peru-12-dias">
                                            <img width="400" height="400" src='img/thumbnail/cusco-01.JPG'
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Cusco tours de 6 días" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href="peru-12-dias" class='button'>Perú por 12 días</a>
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
                                        <a class='entry-link text-center' href="peru-15-dias">
                                            <img width="400" height="400" src="img/thumbnail/chincheros.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="peru-15-dias">Perú por 15 días</a>
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
