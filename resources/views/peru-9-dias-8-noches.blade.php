@extends('layouts.general-es')
@section('metas')
    <title>9 días en Perú - Peru por 9 días, 8 noches - Machu Picchu - Valle Sagrado - City Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content=" tour de 9 días, Cusco lujoso, Peru tours, Machu Picchu de lujo" />
    <meta name="description"
        content="8 días en Perú - Peru por 8 días, 7 noches - Machu Picchu - Valle Sagrado - City Tours" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-9-dias-8-noches">
    <meta property="og:title" content="Perú 8 días - Machu Picchu - Sacred Valley - Lima - Puno">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-9-dias-8-noches" />
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
                                            <li><a href="peru-9-days-8-nights">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="">
                                            Es
                                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="peru-9-days-8-nights">
                                            En
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
                                                                <h1><?php $tour="PERÚ 9 DÍAS 8 NOCHES"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
                                                                    - Arequipa </p>
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
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em"></div>
                </div>
                <div class="col-lg-6 col-sm-10"><a href="/">Inicio</a> /
                    <a href="alrededor-de-peru">Alrededor de Perú</a> /
                    <a>Perú 9 días</a>
                </div>
                <div class="col-lg-3 col-sm-2" id="display2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" id="display2">
                <div class="sticky-top" style="padding-top: 95px; z-index: 40">
                    <div data-onepage-title="Services" data-onepage-slug="services"
                        class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                        <h4 class="text-center">Tours Similares</h4>
                        <div id="similares">
                            <div id="separador"></div>
                            <a href="cusco-4-dias-3-noches" class="button">Cusco por 4 días</a>
                        </div>
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
                            <a href="peru-12-dias" class="button">Perú por 12 días</a>
                        </div>
                        <div id="similares">
                            <div id="separador"></div>
                            <a href="adventures/vinicunca-tour" class="button">Montaña de 7 colores</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div data-onepage-title="Services" style="text-align:justify" data-onepage-slug="services"
                    class="vc_row-fluid vc_custom_1461248392126">
                    <center>
                        <h2 id="titulo1">PERÚ 9 DÍAS TOUR</h2>
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
                    <h5>Overview</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>Bienvenida en el aeropuerto de Lima, City tour por la tarde.</td>
                            </tr>
                            <tr>
                                <th>DÍA 02</th>
                                <td>Bienvenida y City tour en Cusco.</td>

                            </tr>
                            <tr>
                                <th>DÍA 03</th>
                                <td>Tour en el Valle Sagrado de los Inkas y viaje a Machupicchu.</td>
                            </tr>
                            <tr>
                                <th>DÍA 04</th>
                                <td>Tour en Machupicchu y Opcional: Ascenso al Huaynapicchu.</td>
                            </tr>
                            <tr>
                                <th>DÍA 05</th>
                                <td>Viaje en Bus Turístico guiado de Cusco a Puno.</td>
                            </tr>
                            <tr>
                                <th>DÍA 06</th>
                                <td>Tour en el Lago Titicaca, Islas Flotantes de los Uros e Isla Taquile.</td>
                            </tr>
                            <tr>
                                <th>DÍA 07</th>
                                <td>Viaje de Puno al Cañón del Colca.</td>
                            </tr>
                            <tr>
                                <th>DÍA 08</th>
                                <td>Tour en el Cañón del Colca y Cruz del Cóndor y Viaje a Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DÍA 09</th>
                                <td>Traslado del Hotel en Arequipa al aeropuerto.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO DETALLADO:</h5>
                    <h2 class="h2-tours">Día 01. Bienvenida en el aeropuerto de Lima, City tour en Lima con visita
                        a la Huaca Pucllana</h2>
                    <p>
                        Este día lo estaremos esperando en el aeropuerto de Lima a la hora de la llegada de su vuelo
                        para darle una cálida bienvenida en el aeropuerto internacional “Jorge Chávez” y trasladarlo al
                        hotel.v<br><br>
                        Por la tarde lo recogeremos de su hotel para iniciar el City tour en "La Ciudad de los Reyes"
                        Lima, en el camino haremos una parada en el distrito más pequeño de Lima, Barranco donde destaca
                        su famoso Puente de los Suspiros, La Ermita y el monumento a Isabel Granada Larco "Chabuca
                        Granda". Continuaremos nuestro recorrido en el transporte turístico hacia Miraflores donde
                        veremos el Parque del Amor ubicado en el malecón, desde donde podrá tomar hermosas fotos con
                        vista al Océano Pacífico, tendremos una vista panorámica de la Huaca Pucllana que es un pre-
                        Templo religioso inca y centro administrativo habitado entre los siglos III y VIII D.C., luego
                        daremos un paseo por el parque de los olivos, que datan del Virreinato con una extensión de 23
                        hectáreas. <br><br>
                        Con un recorrido de 6 km llegaremos al centro histórico de Lima donde apreciaremos el Palacio de
                        Justicia, el Paseo de los Héroes Navales, el Palacio Francés y edificios coloniales como la
                        Plaza Mayor, el Palacio de Gobierno, el Palacio Arzobispal, la Basílica de la Catedral, el
                        Palacio Municipal, la Plaza San Martín, entre otros. Visitaremos el Museo BCR, donde podrá
                        apreciar una colección de oro del Perú y una selección de cerámica, orfebrería y textiles de
                        diversas culturas pre-Colombinas (sujeto a horario del museo y acceso al centro histórico).
                        Siguiendo nuestro recorrido por la Iglesia y Convento de San Francisco, visitaremos sus
                        impresionantes criptas subterráneas conocidas como Catacumbas.
                        Luego regresamos al hotel.
                        <br><br>
                    </p>
                    <img src="{{ asset('img/blog/museo-larco.webp') }}" alt="Lima, beautiful place to visit"
                        width="100%" loading="lazy"><span>Foto: Museo Larco, Lima</span><br><br>

                    <h2 class="h2-tours">Día 02. Bienvenida y City tour en Cusco</h2>
                    <p>
                        Este día lo recogeremos de su hotel para dirigirnos al aeropuerto internacional Jorge Chávez de
                        Lima para tomar el vuelo de Lima a Cusco, “Capital Arqueológica de América” (altitud 3350 metros
                        sobre el nivel del mar), donde será recibido en el aeropuerto por nuestro personal con un cartel
                        con su nombre para trasladarlo a su hotel, una vez en el hotel se le ofrecerá un mate de coca
                        para la aclimatación del lugar.<br><br>

                        Luego del almuerzo, lo recogeremos de su hotel para iniciar y disfrutar de un tour guiado de
                        Cusco a la 1:30 pm donde podrá conocer los siguientes atractivos turísticos: <br><br>
                        <strong>Templo del Sol o Koricancha:</strong> El convento de Santo Domingo en Cusco es el
                        edificio religioso más
                        antiguo de Sudamérica, conocido como el “Templo del Sol”. Actualmente se puede apreciar la
                        maravillosa arquitectura Inca ligada a la arquitectura española la cual es una muestra de
                        nuestra cultura mestiza.<br>
                        <strong> Catedral: </strong> La Catedral Basílica de la ciudad del Cusco fue construida por
                        trabajadores cusqueños
                        nativos y dirigida por los españoles. También cuenta con las más finas expresiones de la
                        orfebrería colonial así como con la talla en madera y una valiosa colección de lienzos de la
                        "Escuela Cusqueña".<br>
                        <strong>Sacsayhuamán: </strong> una de las construcciones incas que más asombra a los turistas
                        quienes según
                        nuevas hipótesis, señalan que habría sido un importante centro ceremonial inca y no una
                        fortaleza como se creía anteriormente. Su construcción tomó más de siete décadas y requirió la
                        fuerza de unos 20.000 hombres.<br>
                        <strong>Qenqo:</strong> Centro ceremonial y ritual, era un anfiteatro donde se realizaban
                        sacrificios, se dice
                        que fue un adoratorio Inca. Su construcción es de piedras. Hay pasadizos, canales y escaleras
                        con grabados que representan al puma, un animal muy sagrado para los incas.
                        Puca Pucara: Antiguo lugar de guardia del Tambo a lo largo de los caminos incas, este sitio
                        arqueológico cuenta con recintos, plazas interiores, baños, acueductos, torres de vigilancia y
                        un camino inca fácilmente reconocible en síntesis el trazado urbano es altamente adecuado y
                        funcional.<br>
                        <strong>Tambomachay:</strong> A través de sus escalinatas se pueden observar cascadas
                        cristalinas y, según aquí
                        se afirma, se rendía culto al elemento líquido para los Incas, "el agua". Regresando a Cusco a
                        las 6:45pm.<br><br>


                    </p>
                    <img src="{{ asset('img/galeria/cusco-maravilloso.webp') }}" alt="Plaza de armas del Cusco"
                        width="100%" loading="lazy"> <span>Foto: Plaza central del Cusco</span><br><br>

                    <h2 class="h2-tours">Día 3. Tour en el Valle Sagrado de los Inkas y viaje en tren a
                        Machupicchu (Aguas Calientes).</h2>
                    <p>
                        El tour del Valle Sagrado de los Incas comienza a las 8:40 am, pero lo recogeremos en el lobby
                        de su hotel antes de que comience el tour. En este tour visitará el pueblo de Pisac, ubicado a
                        32 km de la ciudad del Cusco. <br> Pisac es un típico artesano andino pueblo arqueológico donde
                        se
                        realizan las famosas Ferias Artesanales en sus mercados típicos donde podrá realizar compras y
                        disfrutar de un recorrido guiado por las zonas arqueológicas del lugar; continuando con nuestro
                        recorrido de aproximadamente una hora pasaremos por diferentes pueblos como Coya, Lamay, la
                        provincia de Calca, Yucay apreciando la belleza del Valle Sagrado de los Incas. <br>
                        Pasaremos al
                        pueblo de Urubamba donde disfrutaremos de un delicioso almuerzo buffet en el Valle Sagrado de
                        Los Incas en el acogedor restaurante “Tunupa”. Posteriormente nos dirigiremos al pueblo de
                        Ollantaytambo para visitar el complejo arqueológico del mismo nombre; habiendo sido un complejo
                        agrícola, administrativo, social, religioso y militar en el Tahuantinsuyo, finalizando el
                        recorrido aproximadamente a las 16:00 horas, luego tendrá tiempo libre en el poblado de
                        Ollantaytambo, donde podrá visitar su mercado artesanal, sus pequeños calles que aún mantiene el
                        trazado de las calles incas, ver correr el agua por sus antiguos canales, es como retroceder en
                        el tiempo, ideal para tomar fotografías o tomar un café en su Plaza de Armas. <br>
                        A la hora indicada debe tomar el tren de Ollantaytambo saliendo a las 7:00 p.m. al pueblo de
                        Aguas Calientes donde nuestro personal lo estará esperando para trasladarlo al hotel
                        seleccionado. <br><br>

                    </p>

                    <h2 class="h2-tours"> Día 4. Tour guiado en Machupicchu y Opcional: Ascenso al Huaynapicchu o
                        Machupicchu Montaña</h2>
                    <p>
                        Después de su desayuno en el hotel, es una excelente oportunidad para levantarse temprano y
                        observar un hermoso amanecer en Machu Picchu. En coordinación con el guía, quien lo visitará un
                        día antes en su hotel en Aguas Calientes, aproximadamente a las 5:30 a.m. tomará el bus que lo
                        llevará del pueblo de Aguas Calientes a Machu Picchu (altitud 2450 m.s.n.m., aproximadamente 25
                        min). <br> Observe el amanecer en Machu Picchu realizando su visita guiada de aproximadamente 2
                        a 3
                        horas, pudiendo visitar: la Plaza de Armas, la Torre Circular, el Sagrado Reloj Solar, las Salas
                        Reales, el Templo de las Tres Ventanas y los Cementerios. <br>
                        Antes o después de la visita guiada en Machu Picchu, dependiendo del horario de sus boletos,
                        tendrá tiempo para explorar por su cuenta o usar sus boletos para escalar Huayna Picchu o
                        Montaña Machu Picchu (observe si desea escalar la montaña Huaynapicchu, debe reservar con al
                        menos 3 meses de antelación debido a la disponibilidad, los horarios de entrada pueden variar
                        según el momento de la reserva). <br> Además de tener la visita guiada en la ciudadela de Machu
                        Picchu, también puede visitar una de las siguientes montañas (sin guía), Montaña Huaynapicchu
                        (desde donde se aprecia una vista espectacular de todo el valle de Machu Picchu) o Montaña Machu
                        Picchu (la montaña que le dio nombre a Machu Picchu con una belleza paisajística única) se le
                        incluirá el ticket de ingreso a una de las montañas y lo puede realizar opcionalmente,
                        cualquiera de ellas le tomará 3 horas aproximadamente ida y vuelta. <br>
                        Este programa de viaje es ideal para recorrer Machu Picchu en su totalidad y tomar fotografías
                        con tiempo suficiente hasta la hora que crea conveniente para regresar en bus a Aguas Calientes
                        donde podrá almorzar. Por la tarde tendrá que abordar el tren a Poroy - Cusco donde lo estaremos
                        esperando para trasladarlo a su hotel en Cusco.<br>
                        La ventaja de este tour es que puedes conocer Machu Picchu sin mucha gente y con mucho más
                        tiempo disponible.<br><br>

                    </p>
                    <img src="{{ asset('img/galeria/visita-machu-picchu.webp') }}" alt="Travel to Machu Picchu"
                        loading="lazy" width="100%"><span>Foto: Machu Picchu, Cusco</span><br><br>

                    <h2 class="h2-tours"> Día 5. Viaje en Bus Turístico guiado de Cusco a Puno.</h2>
                    <p>
                        Lo recogeremos de su hotel a las 6:20 am para trasladarlo al terminal de buses para su viaje a
                        Puno (altitud 3818 msnm).<br><br>

                        Nuestro autobús está equipado con baños y lo manejan tres personas: un conductor, un guía
                        bilingüe y un asistente. Haremos una pequeña visita a la iglesia de Andahuaylillas, iglesia que
                        data de principios del siglo XVII. <br> Es conocida como la Sixtina de Sudamérica por las
                        magníficas
                        pinturas que posee y por su altar cincelado en oro. <br><br>
                        Luego de 218 km llegaremos a Raqchi, donde se encuentra el templo inca de Wiracocha, después de
                        visitar Raqchi, continuaremos nuestro camino hacia Sicuani donde disfrutaremos de un delicioso
                        almuerzo buffet para seguir a La Raya, ubicada a 4.335 metros de altura. <br><br> Nuestro
                        próximo destino
                        será Pucará, donde visitaremos el Museo Lítico y finalmente nuestro recorrido será por
                        explanadas alto andinas bajo una claridad irreal. <br><br> En la ciudad de Puno, nuestro
                        personal lo
                        estará esperando para llevarlo a su Hotel.


                    </p>

                    <h2 class="h2-tours"> Día 6. Tour en el Lago Titicaca, Islas Flotantes de los Uros e Isla
                        Taquile.</h2>
                    <p>
                        Lo recogeremos de su hotel a las 7:00 a.m. aproximadamente para dirigirnos al puerto e iniciar
                        el tour en bote a las asombrosas y majestuosas "Islas de los Uros", llegando allí a las 07:20
                        a.m. aproximadamente.<br><br>
                        <strong> Los Uros: </strong> islas están hechas de pisos artificiales, hechos con totora
                        superpuesta y
                        hábilmente entretejida. Durante el viaje el guía brinda amplia información sobre el lago
                        Titicaca, las leyendas de los Uros, sus usos, costumbres y folklore Tour.
                        <strong>Taquile:</strong> Llegando a Taquile nos dirigiremos a la Plaza de Armas, luego
                        tendremos tiempo libre
                        para hacer compras. <br> La Isla Taquile presenta un arte textil de una calidad impresionante
                        solo
                        comparable a los telares de la cultura Paracas o Egipto y fue declarada Patrimonio Cultural de
                        la Humanidad. <br><br>
                        A las 12:40 del mediodía degustará un exquisito almuerzo, después de todo estaremos saliendo
                        desde el Puerto de Taquile a las 2:30 p.m. y llegando a Puno a las 5:30 p.m. para luego
                        trasladarlo a su hotel.<br><br>

                    </p>
                    <img src="{{ asset('img/galeria/visit-the-city-of-puno.webp') }}"
                        alt="Visita la ciudad de Puno en Perú" width="100%" loading="lazy"
                        title="Lago Titicaca en Puno"><span>Foto: Lago Titicaca,
                        Puno</span><br><br>
                    <h2 class="h2-tours">Día 7. Viaje de Puno al Cañón del Colca.</h2>
                    <p>
                        Temprano por la mañana, viajará en bus para tener un increíble viaje de 6 horas al Cañón del
                        Colca, uno de los cañones más profundos del mundo (3,400 mts.), pasando por Pampa Cañahuas,
                        ubicada en la Reserva Nacional Aguada Blanca, hábitat de vicuñas y alpacas (camélidos de América
                        del Sur). <br><br>El punto más alto de la ruta es de 4.900 m.s.n.m. en el recorrido apreciaremos
                        terrazas pre-Colombinas que aún son cultivadas por los nativos collaguas. Llegando al Valle del
                        Colca, lo trasladaremos a su respectivo hotel. <br><br>
                        Por la tarde, le recomendamos descansar y aclimatarse a la altura. Si te encuentras en buenas
                        condiciones físicas, tendrás tiempo libre para dar un paseo por los alrededores del hotel o
                        tomar un refrescante baño en las termas cercanas. <br><br>


                    </p>
                    <h2 class="h2-tours">Día 8. Tour en el Cañón del Colca y Cruz del Cóndor y Viaje a Arequipa.
                    </h2>
                    <p>
                        Muy temprano en la mañana, nos dirigiremos a La Cruz del Cóndor, donde usualmente se puede
                        observar al Cóndor que es el ave más grande del mundo en pleno vuelo. Durante el regreso
                        visitaremos los pueblos de Yanque, Coporaque, Achoma y Maca. <br>Buena oportunidad para apreciar
                        la
                        vida de los habitantes de estos pueblos que no ha cambiado mucho desde la época de los incas.
                        Finalmente, por la tarde, nos dirigiremos a la Ciudad Blanca de Arequipa. <br><br>
                    </p>
                    <img src="{{ asset('img/galeria/Visit-to-colca-canyon-arequipa-peru.webp') }}"
                        alt="Cañon del Colca en Arequipa" width="100%" loading="lazy"
                        title="Mirador del cóndor, Arequipa"><span>Foto: Mirador del Cóndor, Arequipa</span><br><br>
                    <h2 class="h2-tours">Día 9. Traslado del Hotel en Arequipa al aeropuerto.</h2>
                    <p>
                        Luego del desayuno en el hotel, realizaremos un recorrido por la "Ciudad Blanca" incluyendo el
                        Convento de Santa Catalina, sin duda la gema de Arequipa, que finalmente se abrió al público en
                        el año 1970, luego de haber estado durante 400 años en reclusión, con una innumerable cantidad
                        de piezas de arte colonial. <br> Además, visite la Plaza de Armas, los claustros de la Compañía de
                        Jesús y los barrios de Cayma y Yanahuara, con una magnífica vista del volcán Misti, y visite una
                        tradicional casona colonial llamada la “Mansión del Fundador”. <br>Por la tarde lo trasladaremos al
                        Aeropuerto de Arequipa, viaje en avión a la ciudad de Lima (80 minutos). Viaje en avión desde
                        Lima a su país de destino (por su cuenta). <br><br>
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
                                role="tab" aria-controls="pills-profile" aria-selected="false">No incluye</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Importante</a>
                        </li>
                    </ul>
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            ✓ Boletos de Avión de Lima a Cusco. (1 hora y 10 minutos).<br>
                            ✓ Boletos de Avión de Arequipa a Lima. (1 hora y 20 minutos).<br>
                            ✓ Todos los traslados indicados en el itinerario.(Hoteles, aeropuertos, tours, estaciones de
                            tren, terminales de buses).<br>
                            ✓ Todos los transportes para todos los tours.<br>
                            ✓ Todas las ingresos para todos los atractivos turísticos a visitar dentro del Paquete
                            Turístico.<br>
                            ✓ Tour a Machu Picchu tren Expedition.<br>
                            ✓ Tour al Valle Sagrado de los Incas.<br>
                            ✓ City Tour en Cusco.<br>
                            ✓ City tour en la ciudad de Lima “Ciudad de los Reyes”.<br>
                            ✓ Tour al lago Titicaca, Isla de los Uros e Isla de Taquile.<br>
                            ✓ Tour guiado de Cusco a Puno, (De 8:00 a.m. a 5:00 p.m).<br>
                            ✓ Tour en el Cañón del Colca en 2 días y 1 noche.<br>
                            ✓ Tour guiado en el viaje de Cusco a Puno.<br>
                            ✓ Viaje en Bus de Turismo de Cusco a Puno.<br>
                            ✓ Viaje en Bus de turismo de Puno a Chivay.<br>
                            ✓ 1 Noche de Hotel en Lima.<br>
                            ✓ 2 Noche de Hotel en Cusco.<br>
                            ✓ 1 Noche de Hotel en Aguas Calientes- Machupicchu.<br>
                            ✓ 1 Noche de Hotel en Puno.<br>
                            ✓ 2 Noches de Hotel en Arequipa.<br>
                            ✓ 1 Noche de Hotel en Colca.<br>
                            ✓ 8 desayunos buffet en los hoteles.<br>
                            ✓ Boletos de tren Ollantaytambo - Aguas Calientes (Machupicchu) - Poroy (Cusco).<br>
                            ✓ Guía profesional en Turismo en todos los tours a realizarse, en el idioma que usted
                            prefiera: Inglés o Español.<br>
                            ✓ 1 Almuerzo Buffet en el Valle Sagrado de los Incas.<br>
                            ✓ 1 Almuerzo Buffet en el Viaje de Cusco a Puno.<br>
                            ✓ 1 Almuerzo en el Lago Titicaca.<br>
                            ✓ Asistencia y Orientación diaria por parte de nuestro personal profesional en Turismo.<br>
                            ✓ Todos los impuestos de Ley.<br>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus"></i> Alimentación: Almuerzo y Cena no descritos en el Paquete
                            Turístico.<br>
                            <i class="fa fa-minus"></i> Vuelos Internacionales.
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus"></i> Puede solicitar el servicio de tren Ejecutivo Vistadome o
                            Panorámico Incrementando USD 45 Dólares americanos por persona.<br>
                            <i class="fa fa-minus"></i> Puede solicitar el servicio de tren de lujo Hiram Bingham
                            Incrementando USD 820 Dólares por persona.<br>
                            <i class="fa fa-minus"></i> Almuerzo a la Carta en Aguas Calientes (Machupicchu Pueblo)
                            en el Restaurant Café Inkaterra incrementando USD 22 dólares por persona.<br>
                            <i class="fa fa-minus"></i> Almuerzo buffet ubicado en el mismo Machu Picchu en Tinkuy
                            Restaurant del hotel Sanctuary Lodge es USD 45 dólares por persona.
                        </div>
                    </div>
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-9-dias-8-noches"
                            data-width="100%" data-numposts="5"></div>

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
            <div class="col-lg-3" id="display">
                <div data-onepage-title="Services" data-onepage-slug="services"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                    <h4 class="text-center">Tours Similares</h4>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="cusco-4-dias-3-noches" class="button">Cusco por 4 días</a>
                    </div>
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
                        <a href="peru-12-dias" class="button">Perú por 12 días</a>
                    </div>
                    <div id="separador"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
