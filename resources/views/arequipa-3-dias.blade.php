@extends('layouts.general-es')
@section('metas')
    <title>Arequipa - La ciudad blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="4 days tour, Luxury arequipa, arequipa tours, Arequipa" />
    <meta name="description" content="Noble and Volcanic Peru’s ashlar (white stone) city with snow-capped mountains" />
    <meta property="og:url" content="https://www.andeanexclusive.com/arequipa-3-dias">
    <meta property="og:title" content="Tours en Arequipa Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/arequipa-peru.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/arequipa-3-dias" />
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
                                    @include('layouts.menu')
                                    <li id="display">
                                        <a href="{{ route('arequipa-4-days') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="{{ route('arequipa-4-days') }}">
                                            <button type="button" class="botondjm">English</button>
                                        </a>
                                </ul>
                                <a href="javascript:;" id="mobile-menu"><span></span></a>
                                <a href="javascript:;" id="close-menu"></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section-content no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <article class="blog-item blog-single">
                            <div class="entry-excerpt">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-onepage-title="Home"
                                    data-onepage-slug="home"
                                    class="vc_row wpb_row arequipa vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1> <?php $tour = 'AREQUIPA - LA CIUDAD BLANCA';
                                                                    echo $tour; ?></h1>
                                                                    <p><i class="fa fa-map-marker"></i> Perú - Arequipa
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
                                <div data-onepage-title="Services" data-onepage-slug="services"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                    <div id="separador"></div>
                                    <div class="row" id="rowdjm">
                                        <div class="location">
                                            <div class="row text-center">
                                                <div class="col-lg-3 col-sm-2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-10"><a href="index-castellano">Inicio</a>
                                                    /
                                                    <a href="experiencias">Popular</a> /
                                                    <a>Arequipa 3 días</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="display2">
                                            <div id="similares">
                                                <h1>Tours Similares</h1>
                                                <div id="separador"></div>
                                                <a href="puerto-maldonado" class="button">Puerto Maldonado</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="lima-3-days-tour" class="button">Lima 3 días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puno-3-dias-tour" class="button">Puno 3 dias</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-6-dias-5-noches" class="button">Peru por 6
                                                    días</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-10-dias-9-noches" class="button">Peru por 10
                                                    días</a>
                                            </div>
                                            <div id="separador"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h2 id="titulo1">AREQUIPA </h2>
                                                <div id="separadordjm2"></div>
                                                <p class="text-center"><i class="fa fa-clock-o"></i> 4 días</p>
                                                <p class="text-center"><i class="fa fa-map-marker"></i> Sta. Catalina
                                                    - Colca canyon - Vuelo de cóndores</p>
                                                <p class="text-center" style="color: #0c8178">Reservar con 30 días de
                                                    anticipación</p>
                                            </center><br>
                                            <p>
                                                <strong>Arequipa</strong> lo tiene todo. Sí, absolutamente todo lo que
                                                puedas imaginar, lo encuentras en el territorio de la 'Ciudad Blanca'.
                                                Historia, aventura, paisajes fabulosos, vida silvestre, gastronomía,
                                                arte y mucho más se esconde en la Villa de Nuestra Señora de la Asunta
                                                de Arequipa -nombre con el cual fue fundado, en 1540-, que está
                                                custodiada firmemente por su atractivo natural más imponente: el volcán
                                                Misti. <br><br>
                                                ¿Aún no te convences? No te preocupes, aquí te expondremos razones de
                                                sobra para que la próxima vez que organices tus vacaciones, tengas a
                                                Arequipa como principal destino turístico.<br><br>
                                                Si lo que quieres es cambiar la rutina de la ciudad y respirar un poco
                                                de naturaleza, Arequipa es lo que necesitas. La campiña espera por ti,
                                                para que puedas apreciar la moderna ciudad desde sus exteriores -donde
                                                aún se conservan tradiciones y locaciones antiguas- rodeada de bellos
                                                paisajes llenos de verde. <br><br>
                                                En los miradores de Yanahuara, Sachaca o Carmen Alto, puedes apreciar
                                                los fabulosos escenarios que te brinda Arequipa.
                                            </p>
                                            <img src="{{ asset('img/galeria/arequipa-peru-exclusive.webp') }}"
                                                alt="ciudad de Arequipa">
                                            <h2>Vista General tour Arequipa</h2>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>DÍA 01</th>
                                                        <td>Arequipa, Santa Catalina y Juanita</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 02</th>
                                                        <td>Cañón del Colca</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 03</th>
                                                        <td>Aguas Termales y los cóndores</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DÍA 04</th>
                                                        <td>De regreso a casa. Arequipa a Lima</td>
                                                    </tr>
                                                </tbody>
                                            </table><br><br>
                                            <h2>Itinerario Arequipa:</h2>
                                            <h3>Día 01: Arequipa, Santa Catalina y Juanita</h3>
                                            <p>
                                                A su llegada a Arequipa, su guía local lo recibirá para llevarlo a su
                                                hotel. Después de haber tenido la oportunidad de registrarse y
                                                refrescarse en el hotel, se reunirá con su guía para conocer desde
                                                dentro el maravilloso Convento de Santa Catalina y el Museo Santuarios
                                                de Altura para ver a la famosa Doncella de Hielo, la momia Juanita. Se
                                                cree firmemente que fue sacrificado a los dioses hace unos 500 años.
                                                Juanita fue descubierta en la cima del monte Ampato, ha brindado a los
                                                científicos una mirada retrospectiva única en el tiempo, ya que está
                                                increíblemente bien conservada y vestida con algunas de las telas más
                                                finas de Cusco. <br> Pernocte en Arequipa.
                                            </p>
                                            <h3>Día 02: Cañon del Colca</h3>
                                            <p>
                                                Hoy partirá de Arequipa a través de la reserva de Aquada Blanca, donde
                                                verá vicuñas y varias especies de aves acuáticas de altura. Podrá ver al
                                                majestuoso
                                                volcan Misti como domina el paisaje. Se continuará subiendo hasta llegar
                                                al punto más alto de todo el viaje en el
                                                Mirador de los volcanes. Desde este punto de vista, experimentará
                                                la impresionante cordillera volcánica, incluyendo el famoso
                                                Coropuna.<br>
                                                Pernocte en Colca.
                                            </p>

                                            <h3>Día 03: Los Cóndores y Aguas Termales</h3>
                                            <p>Es temprano en la mañana mientras conduce hacia la Cruz de los Cóndores,
                                                un balcón de roca sobre la sección más profunda del cañón. Es aquí donde
                                                serás testigo del majestuoso vuelo de los cóndores andinos gigantes. Su
                                                caminata de regreso cerca del cráter de un volcán también pasa por un
                                                bosque de cactus. También en ruta a Chivay, visitará parada colorida y
                                                talleres de bordado. Después del almuerzo hay un paseo en bicicleta
                                                opcional seguido de un baño en las aguas termales de la región. Si no va
                                                en bicicleta, se dirigirá directamente a las aguas termales.<strong>
                                                    Pernocte en Colca.</strong></p>

                                            <h3>Day 04: De vuelta a casa: Arequipa - Lima</h3>
                                            <p>Tendrás la opción de una mirada más a los magníficos cóndores
                                                antes de su traslado de regreso a Arequipa, para tomar un vuelo por la
                                                tarde a
                                                Lima, antes de su vuelo de conexión con destino a casa.</p>
                                            <div id="separador"></div>

                                            <!-----Booking---------->
                                            <div class="form text-center">
                                                @include('layouts.payments')
                                                <h5> Compartir <h5>
                                                        <!---------redes sociales------------------------>
                                                        <script type="text/javascript"
                                                            src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                                                            async="async"></script>
                                                        <div class="sharethis-inline-share-buttons"></div>
                                                        <div id="fb-root"></div>
                                                        <script async defer crossorigin="anonymous"
                                                            src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                                                            nonce="RA0e6tQN"></script>
                                                        <div class="fb-comments"
                                                            data-href="https://andeanexclusive.com/arequipa-3-dias"
                                                            data-width="100%" data-numposts="5"></div>

                                                        <!---------Fin redes sociales------------------------>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <!-----Booking---------->
                                            @include('layouts.booking')
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
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759 text-center">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner vc_custom_1461228417147">
                                                        <div class="wpb_wrapper">
                                                            <div class='travel-item'>
                                                                <div class='entry-img'>
                                                                    <a class='entry-link'
                                                                        href="puerto-maldonado-castellano">
                                                                        <img alt="Amazonas jungle Perú"
                                                                            srcset="img/thumbnail/otorongo-jaguar.jpg 1000w, img/thumbnail/otorongo-jaguar.png 500w" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='puerto-maldonado-castellano'
                                                                            class='button'>Puerto Maldonado Tour</a>
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
                                                                    <a class='entry-link' href="puno-3-dias-tour">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/puno-peru.JPG"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Tour in Puno" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="puno-3-dias-tour" class='button'>Puno
                                                                            Tour</a>
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
                                                                    <a class='entry-link' href="valle-sagrado">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/chincheros.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt=""
                                                                            srcset="img/thumbnail/chincheros.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="valle-sagrado">Valle
                                                                            Sagrado</a>
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
                                <div class="vc_row-full-width vc_clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <div id="separador"></div>
    </div>
@endsection
