@extends('layouts.general-es')
@section('metas')
    <title>Mercado local de Urubamba & tour de degustación de cerveza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="mercado Urubamba, cusco tours, viajes de lujo exclusivos" />
    <meta name="description" content="Mercado local de Urubamba y tour de degustación de cerveza" />
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/urubamba-market.png" />
    <meta property="og:title" content="Mercado local de Urubamba & tour de degustación de cerveza">
    <meta property="og:url" content="https://www.andeanexclusive.com/mercado-urubamba">
    <meta property="og:type" content="article">
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/mercado-urubamba" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="index-castellano" rel="home" class="logo-text-link">
                                    <img src="img/andean-exclusive-logo.png" alt="Andean Exclusive Logo" id="logo">
                                </a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu-castellano')
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="btn botondjm">Idioma <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a>Español</a></li>
                                            <li><a href="urubamba-market">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a>Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="urubamba-market">En</a>
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
        <section class="section-content no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <article class="blog-item blog-single">
                            <div class="entry-excerpt">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-onepage-title="Home"
                                    data-onepage-slug="home"
                                    class="vc_row wpb_row urubamba vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1><?php $tour = 'Urubamba Local Market & Beer Tasting Tour';
                                                                    echo $tour; ?></h1>
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
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12"><a href="/">Home</a> /
                                                    <a href="experiencias">Populares</a> /
                                                    <a>Mercado Local Urubamba</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <h5 class="text-center">"Las multitudes, los materiales, los artesanos y
                                                las bellas historias.
                                                se combinan en un solo lugar dando la sensación del país."</h5>
                                            <div id="separador"></div>
                                            <div id="display2">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <h2 id="titulo1" class="text-center">Valle Sagrado<br>
                                                Tour del mercado local de Urumbamba y degustación de cerveza</h2>
                                            <div id="separador"></div>
                                            <p class="text-center" style="color: #0c8178"><i class="fa fa-map-marker">
                                                    Cusco - Perú</i>
                                            </p>
                                            <br>
                                            <p>Para comenzar nos dirigiremos al mercado local de Urubamba, que es uno de
                                                los lugares más auténticos que puedes encontrar en el Valle Sagrado.
                                                Desde queso hasta frutas endémicas, este mercado local puede brindarle
                                                una mejor comprensión del país que los recorridos turísticos que a
                                                menudo se perfeccionan de acuerdo con las necesidades de los turistas.
                                                Continuando, dejaremos atrás el colorido mercado y nos uniremos al mundo
                                                de la Cerveza Artesanal visitando la Cervecería Willkamayu, donde
                                                aprenderemos el proceso de elaboración de la cerveza y degustaremos sus
                                                diferentes estilos de cerveza, cervezas elaboradas con insumos locales.
                                                Después de compartir con lo mejor de la cerveza local, lo llevaremos de
                                                regreso a su hotel.</p> <br>

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
                                                <div class="fb-comments"
                                                    data-href="https://andeanexclusive.com/mercado-urubamba"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div><br>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <!-----Booking---------->
                                            <div class="form text-center">
                                                @include('layouts.booking-castellano')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-onepage-title="Services" data-onepage-slug="services"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461227943574">
                                            <div class="wpb_wrapper">
                                                <div class='heading  text-center '>
                                                    <h3>Tours Similares</h3>
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
                                                                    <a class='entry-link' href="ciclismo">
                                                                        <img src="img/thumbnail/biking-cusco.jpg"
                                                                            alt="Ciclismo en Cusco -Perú" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='ciclismo' class='button'>Ciclismo en
                                                                            los andes</a>
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
                                                                    <a class='entry-link' href="hiram-bingham">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/Machupicchu.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt=""
                                                                            srcset="img/thumbnail/Machupicchu.jpg 400w"
                                                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="hiram-bingham" class='button'>Machu
                                                                            Picchu By Hiram Bingham</a>
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
                                                                    <a class='entry-link' href="valle-sagrado"><img
                                                                            width="400" height="400"
                                                                            src="img/thumbnail/chincheros.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Chincheros Cusco Peru" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="valle-sagrado">Valle
                                                                            Sagrado de los Incas</a>
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
                                                                    <a class='entry-link'
                                                                        href="machupicchu-acelerado"><img width="400"
                                                                            height="400"
                                                                            src="img/thumbnail/Machupicchu_AET.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Machu Picchu acelerado tour de 3 días" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='machupicchu-acelerado'
                                                                            class='button'>Machu Picchu Full Day</a>
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
    </div>
@endsection
