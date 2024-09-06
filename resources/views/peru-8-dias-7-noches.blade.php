@extends('layouts.general-es')
@section('metas')
    <title>8 días en Perú - Peru por 8 días, 7 noches - Machu Picchu - Valle Sagrado - City Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content=" tour de 8 días, Cusco lujoso, Peru tours, Machu Picchu de lujo" />
    <meta name="description"
        content="8 días en Perú - Peru por 8 días, 7 noches - Machu Picchu - Valle Sagrado - City Tours" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-8-dias-7-noches">
    <meta property="og:title" content="Perú 8 días - Machu Picchu - Sacred Valley - Lima - Puno">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-8-dias-7-noches" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="{{route('inicio')}}" rel="home" class="logo-text-link"><img
                                        src="img/andean-exclusive-logo.png" id="logo"></a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu-castellano')
                                    <li id="display">
                                        <a href="{{route('peru-8-days')}}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="{{route('peru-8-days')}}">
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
                                                                        <div class="alert alert-success"
                                                                            id="alerta" style="width: 60%;">
                                                                            {{ session()->get('flash') }}<button
                                                                                type="button" onclick="bye()"
                                                                                style="float: right;">X</button>
                                                                        </div>
                                                                    </center>
                                                                @endif
                                                                <h1><?php $tour="PERÚ 8 DÍAS 7 NOCHES"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Machu Picchu</p>
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
                                <a href="cusco-4-dias-3-noches" class="button">Cusco 4 días</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-5-dias-4-noches" class="button">Perú 5 días tour</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-6-dias-5-noches" class="button">Cusco 6 días tour</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-7-dias-6-noches" class="button">Perú 7 días tour</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-15-dias" class="button">Perú 15 días tour</a>
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
                        <h2 id="titulo1">Perú de maravilla</h2>
                        <div id="separadordjm2"></div>
                        <i class="fa fa-clock-o"></i> 8 días <br>
                        <i class="fa fa-map-marker"></i> Lima - Cusco - Machu Picchu <br>
                        <i class="fa fa-exclamation-circle"></i> Reservar con 30 dias de anticipación
                    </center>
                    <div id="separador"></div>
                    <h3>Vista general del tour</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DÍA 01</th>
                                <td>Llegada a Lima</td>
                            </tr>
                            <tr>
                                <th>DÍA 02</th>
                                <td>Lima city tour y Tour gastronomico</td>

                            </tr>
                            <tr>
                                <th>DÍA 03</th>
                                <td>Llegada a Cusco, Traslado al Hotel</td>
                            </tr>
                            <tr>
                                <th>DÍA 04</th>
                                <td>Cusco: Día libre para explorar</td>
                            </tr>
                            <tr>
                                <th>DÍA 05</th>
                                <td>Tour Valle Sagrado: Cusco - Chinchero - Ollantaytambo</td>
                            </tr>
                            <tr>
                                <th>DÍA 06</th>
                                <td>Camino Inca Corto a Machu Picchu: Ollantaytambo - Aguas Calientes</td>
                            </tr>
                            <tr>
                                <th>DÍA 07</th>
                                <td>Machu Picchu Excursion: Aguas Calientes - Machu Picchu - Cusco</td>
                            </tr>
                            <tr>
                                <th>DÍA 08</th>
                                <td>Saliendo de Cusco</td>
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
                    <h2 class="h2-tours">Día 1. Arribo a Lima</h2>
                    <p>
                        Bienvenido a Lima, la ciudad más grande y centro metropolitano central de Perú, y hogar de un
                        tercio de la
                        la población del país. Ubicado en el sitio de un asentamiento indígena precolombino Ychsma, que
                        fue conquistada por el imperio Inca en el siglo XV y luego por los conquistadores españoles,
                        Lima tiene una historia fascinante y una mezcla diversa de culturas. amerindios, europeos,
                        Las influencias afroperuana y asiática, especialmente china y japonesa, hacen de Lima una ciudad
                        dinámica y
                        emocionante ciudad para explorar.<br><br>

                        La ubicación ventosa de Lima en el Océano Pacífico y el clima templado del desierto la
                        convierten en la ciudad perfecta para
                        explorando a pie. Diríjase al centro para mezclarse con los lugareños, estirar las piernas y
                        tomar un bocado para
                        comer en uno de los muchos restaurantes galardonados.<br><br>
                    </p>

                    <h2 class="h2-tours">Día 2. Lima City & Tour Gastronómico</h2>
                    <p>
                        Pasa el día descubriendo Lima a través de su comida. Con una vibrante combinación de indígenas
                        Con influencias culinarias americanas, africanas, asiáticas y europeas, Lima es una de las
                        ciudades más
                        impresionantes centros gastronómicos y culturales.<br><br>

                        Comience el día temprano en el centro histórico de Lima para visitar un mercacado local, una
                        comida fresca
                        mercado—para degustar los productos locales y degustar especias, frutas y varios panes
                        horneados. Gusto
                        diferentes tipos de Piscos—un brandy de alta graduación producido localmente en las regiones
                        vitivinícolas de
                        Perú y Chile. Asista a una clase de cocina y aprenda a hacer ceviche, un plato de mariscos
                        frescos.
                        marinado con sal y jugo de limón, y el tradicional pisco sour, un clásico peruano.<br><br>

                        Haz una parada para almorzar en uno de los mejores restaurantes de Lima y disfruta de una
                        deliciosa comida en un patio
                        con vista al océano Pacífico. Pasee hasta el distrito bohemio de Barranco, un popular lugar
                        junto al mar
                        barrio para artistas, turistas y lugareños por igual, para una tarde relajada tomando café y
                        degustación de postres peruanos.</p>
                    <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                        src="{{ asset('img/galeria/Ceviche-peruano-tour-gastronomico.webp') }}">
                    <span>Ceviche peruano</span><br><br>

                    <h2 class="h2-tours">Día 3. Llegada a Cusco</h2>
                    <p>
                        Nuestro aistente de Andean Exclusive le acompañará al aeropuerto de Lima para tomar su vuelo de
                        traslado a Cusco.<br><br>

                        Recuerde: estará a 11,000 pies (3,000 m) sobre el nivel del mar, así que tómelo con calma y
                        recuerde
                        beber mucha agua. Dar un paseo por la plaza si hace buen tiempo, es un perfecto
                        lugar para sentarse y tomar una taza de té de coca mientras se ajusta a la elevación.<br><br>

                        Por la noche, aproveche la oportunidad de experimentar el célebre patrimonio culinario de Cusco
                        en un
                        restaurante local.
                    </p>
                    </p>

                    <h2 class="h2-tours">Día 4. Día libre en Cusco</h2>
                    <p>
                        Hoy explorará Cusco y las ruinas antiguas de los alrededores. Dado que Cusco fue diseñado por el
                        Incas como ciudad para caminar, comienza tu exploración a pie por las estrechas callejuelas de
                        piedra.
                    </p>
                    <p><strong>Actividades sugeridas: </strong></p>
                    <ul>
                        <li>Visite el <strong>Coricancha</strong>, también conocido como "El Templo del Sol". El templo
                            fue construido por los incas
                            Emperador Pachacutec (1438 - 1572), y tras la llegada de los españoles se convirtió en la
                            base
                            por
                            la construcción del Convento de Santo Domingo.
                        </li>
                        <li>
                            Contempla la<strong> Catedral</strong>, el monumento más imponente de la céntrica Plaza de
                            Armas
                            y un depósito para
                            El arte colonial del Cusco. Su construcción duró casi 100 años, comenzando en 1560 y
                            finalizando
                            en 1654.
                        </li>
                        <li>
                            Camine a <strong>Sacsayhuamán</strong> y al lado Quenqo, ambos complejos arqueológicos
                            utilizado principalmente para
                            rituales religiosos y agrícolas, ubicado a 4 km de la ciudad del Cusco. Construido
                            por
                            del pueblo Killke, Sacsayhuamán es una maravilla de la arquitectura antigua, una fortaleza
                            monolítica
                            construido
                            de gigantescos bloques de piedra, cuyo origen y montaje siguen siendo un misterio.
                        </li>
                        <li>
                            Descubra las elaboradas ruinas de <strong>Puca Pucara</strong>, un complejo arquitectónico
                            de
                            presunto uso militar con
                            múltiples plazas, baños, acueductos, murallas y torres. Se cree que el séquito de
                            la
                            El emperador inca lo usó mientras estuvo en Tambomachay, la finca elaborada y los baños
                            cercanos.
                        </li>
                        <li>
                            Explore <strong>San Blas</strong>, un antiguo barrio bohemio famoso por su pintoresca arena
                            blanca
                            paredes, puertas azules,
                            y comunidad de artesanos creativos.
                        </li>
                        <li>
                            Experimente el legendario<strong> Mercado Central de San Pedro,</strong> un amplio y diverso
                            mercado famoso por su
                            deliciosos jugos, comidas caseras, puestos de hierbas medicinales y filas de varias carnes,
                            hogazas de pan, verduras y otras necesidades.
                        </li>
                        <li>
                            <strong>Almuerce en un restaurante peruano local</strong> y pruebe los sabores locales y
                            Cocinando
                            técnicas: chicharrón de cerdo, verduras en escabeche, sabores de temporada, pan horneado en
                            barro
                            hornos,
                            las verduras asadas y las rosquillas dulces son una comida deliciosa y abundante.
                        </li>
                    </ul>
                    <img loading="lazy" alt="Tour to Cusco Perú" width="100%"
                        src="{{ asset('img/galeria/cusco-maravilloso.webp') }}">
                    <span>Peruvian ceviche</span><br><br>


                    <h2 class="h2-tours">Día 5. Tour Valle Sagrado - Cusco, Chinchero, Ollantaytambo</h2>
                    <p>
                        Hoy partirá de su hotel en Cusco para visitar el pueblo de Chinchero, que se cree
                        por el Inca para ser el lugar de nacimiento del arco iris. Verá extensas terrazas incas y
                        varias pequeñas iglesias de la época colonial, antes de explorar la famosa producción textil de
                        Chinchero y
                        artesanías de tejido. Visite el estudio de un tejedor y aprenda sobre el proceso de limpieza y
                        producción del
                        lana, luego explore la selección de textiles vibrantes para el regalo perfecto hecho a
                        mano.<br><br>

                        Continúe hacia Moray, una serie de increíbles anfiteatros de piedra construidos por los incas.
                        considerado uno
                        de las culturas más innovadoras y arquitectónicamente avanzadas del mundo, los incas
                        probablemente usaron estos
                        complejos de piedra para agricultura experimental en microclimas.<br><br>

                        Desde Moray camine (o tome un autobús) hasta las Salineras, el Salar de Moray, una intrincada
                        red de
                        piscinas de piedra desarrolladas por los incas para cosechar sal a través de la evaporación.
                        Estas salinas son
                        todavía en uso hoy en día y son mantenidos cuidadosamente por una comunidad cercana con
                        regulaciones y reglas
                        que datan de la época de los Incas.<br><br>

                        Pase la noche en el pequeño pueblo histórico de Ollantaytambo, en lo alto del Valle Sagrado.
                        Explorar
                        las fortalezas de piedra circundantes, las ruinas arqueológicas y las calles empedradas de la
                        ciudad,
                        que permanecen notablemente intactos similares a sus apariencias originales después de la
                        construcción por el
                        Inca.
                    </p>
                    <img loading="lazy" alt="Fortaleza de Ollantaytambo en el Valle Sagrado de los Incas"
                        width="100%"
                        src="{{ asset('img/galeria/ollantaytambo-sacred-valley-of-the-incas-exclusive.webp') }}">
                    <span>Fortaleza de Ollantaytambo</span><br><br>

                    <h2 class="h2-tours">Día 6. Camino Inca Corto a Machu Picchu - Ollantaytambo a Aguas
                        Calientes</h2>
                    <p>
                        Temprano por la mañana, tomaremos el tren de Ollantaytambo hasta el Km. 104 donde se encuentra
                        el corto Inca
                        Comienza el sendero. En tren, vemos como el valle se convierte en un cañón y el paisaje comienza
                        a
                        cambiar a medida que aparecen los bosques nubosos en nuestro acercamiento a Machu Picchu.
                        Desembarcaremos del tren.
                        en el Km. 104 y comienza la caminata por un desafiante camino cuesta arriba.<br><br>

                        Comience la caminata hacia su primer sitio arqueológico: Chachabamba. Este hermoso sitio esta
                        muy bien
                        conservado gracias a su ubicación en el valle y probablemente fue utilizado con fines religiosos
                        y como
                        un punto de control para esta entrada a Machu Picchu.<br><br>

                        Desde aquí asciende durante 3 horas a las ruinas de Wiñay Wayna (2732 m / 8964 ft), un antiguo
                        descanso
                        zona para los viajeros del camino inca. Aquí, nos detendremos para disfrutar de nuestro
                        delicioso almuerzo en caja, con
                        magníficas vistas de las enormes montañas verdes y las orquídeas nativas.<br><br>

                        Luego, el sendero se vuelve más suave y continúa a través del bosque nuboso semitropical hasta
                        Intipunku.
                        (Puerta del Sol) donde disfrutará de sus primeras vistas panorámicas de Machu Picchu. Descenso
                        media hora
                        a la ciudadela para un breve descanso y una oportunidad para tomar fotos.<br><br>

                        No exploraremos las ruinas hoy, ya que oscurecerá. Después de pasar por el Sol
                        Gate, cruzaremos el sitio para tomar el autobús a Aguas Calientes, donde se registrará en
                        nuestro
                        hotel para descansar y relajarse en previsión de una visita de día completo a Machu Picchu
                        mañana.
                    </p>
                    <h2 class="h2-tours">Día 7. Excursión Machu Picchu: Aguas Calientes - Machu Picchu - Cusco
                    </h2>
                    <p>
                        Hoy tomaremos el bus hasta Machu Picchu para disfrutar de las ruinas. Es un viaje en autobús de
                        25 minutos a
                        el santuario de Machu Picchu (2400 m). Nuestro guía nos guiará en nuestra exploración y
                        descubrimiento.
                        de los muchos rincones curiosos dentro de la enigmática Ciudadela de Machu Picchu. La visita
                        guiada se
                        tienen una duración media de 2 horas.<br><br>

                        Después, todavía tendrá algo de tiempo para visitar otros lugares que no vio con su
                        guía. Por ejemplo, en dirección oeste desde el centro de Machu Picchu, el puente Inca está a 30
                        minutos
                        / 2 Km más o menos caminando por un sendero estrecho. Si te apetece un reto cuesta arriba,
                        tienes la opción
                        escalar la infame montaña Huayna Picchu o Machu Picchu. Es importante saber que para
                        para escalar estos picos, debe comprar boletos por separado con anticipación.<br><br>

                        Al final de nuestra visita, tomaremos el bus de bajada a Aguas Calientes para almorzar y luego
                        abordaremos.
                        el tren a Ollantaytambo. A nuestra llegada, nuestro conductor nos recibirá y nos trasladará a
                        nuestro
                        hotel en Cuzco.
                    </p>
                    <h2 class="h2-tours">Día 8. Salida de Cusco</h2>
                    <p>
                        Hoy es tu último día en Perú. Será recibido en su hotel para un traslado al aeropuerto de Cusco,
                        donde será trasladado a su salida internacional. ¡Buen viaje!
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
                            <ul>
                                <li>Traslados desde y hacia el hotel, aeropuerto, estación de tren
                                    y atracciones.</li>
                                <li>Transporte en bus para todos los tours.</li>
                                <li>Boletos de tren ida y vuelta- Cusco - Machupicchu - Cusco</li>
                                <li>Boletos de Bus ida y vuelta- Aguas Calientes - Machupicchu -
                                    Aguas Calientes.</li>
                                <li>Guía Profesional (Inglés-Español)</li>
                                <li> Entradas a todos los atractivos Machupicchu, Valle Sagrado,
                                    ciudad, Museos y Iglesias.</li>
                                <li>4 DESAYUNOS/BUFFET en el Hotel, 1 ALMUERZO/BUFFET en el Valle
                                    Sagrado.</li>
                                <li>Espectáculo nocturno de música y baile en el teatro.</li>
                            </ul> 
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <ul>
                                <li>Vuelos Lima / Cusco / Lima. (Vuelos internos)</li>
                                <li>Alimentación completa (almuerzos y cenas no especificados en el
                                    programa).</li>
                            </ul> 
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus"></i> Nuestros precios incluyen servicio de tren Expeditions hacia
                            Machu Picchu.<br>
                            <i class="fa fa-minus"></i> Importante: La reserva del hotel está sujeta a disponibilidad
                            de espacio - Los precios no incluyen
                            IVA para pasajeros peruanos y extranjeros residentes en Perú.<br>
                            <i class="fa fa-minus"></i> Las personas de nacionalidad peruana, ecuatoriana, boliviana y
                            colombiana tienen acceso a un
                            descuento especial, por ser socios de la CAN.
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-8-dias-7-noches"
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
                <div data-onepage-title="Services" data-onepage-slug="services"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                    <h4 class="text-center">Tours Similares</h4>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="cusco-4-dias-3-noches" class="button">Cusco 4 días</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-5-dias-4-noches" class="button">Perú 5 días tour</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="cusco-6-dias-5-noches" class="button">Cusco 6 días tour</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-7-dias-6-noches" class="button">Perú 7 días tour</a>
                    </div>
                    <div id="similares">
                        <div id="separador"></div>
                        <a href="peru-15-dias" class="button">Perú 15 días tour</a>
                    </div>
                    <div id="separador"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
