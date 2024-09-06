@extends('layouts.general-en')
@section('metas')
    <title>Puerto Maldonado - Amazonía of Perú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="3 days tour, Luxury amazonas, puerto maldonado tours, Puerto Maldonado" />
    <meta property="og:description"
        content="Nearby are the Manú National Park, Tambopata National Reserve, and Bahuaja-Sonene National Park..." />
    <meta property="og:url" content="https://www.andeanexclusive.com/puerto-maldonado">
    <meta property="og:title" content="Puerto Maldonado - Amazonía of Perú">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/tours/Puerto-Maldonado-Per%C3%BA.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/puerto-maldonado" />
@endsection
@section('contenido')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="/" rel="home" class="logo-text-link"><img
                                        src="img/andean-exclusive-logo.png" id="logo"></a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu')
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="btn botondjm">Language <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a href="puerto-maldonado-castellano">Español</a></li>
                                            <li><a>Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="puerto-maldonado-castellano">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a>EN</a>
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
                                    class="vc_row wpb_row puerto vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                    <h1><?php $tour = 'Puerto Maldonado';
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
                                                    <a href="experiences">Popular</a> /
                                                    <a>Puerto Maldonado</a>
                                                </div>
                                                <div class="col-lg-3 col-sm-2" id="display2">
                                                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="display2">
                                            <h4 class="text-center">Similar Tours</h4>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="arequipa-3-days" class="button">Arequipa for 3 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="lima-3-days-tour" class="button">Lima for 3 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="puno-3-days-tour" class="button">Puno for 3 days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-8-days-7-nights" class="button">Perú for 8
                                                    days</a>
                                            </div>
                                            <div id="similares">
                                                <div id="separador"></div>
                                                <a href="peru-15-days-tour" class="button">Perú for 15 days</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <center>
                                                <h1 id="titulo1">PUERTO MALDONADO</h1>
                                                <h4>WHERE HUNDREDS OF BIRDS, INCLUDING MACAWS, FEED ON CLAY</h4>
                                                <p>Sugessted by: "Andean Exclusive Tours"</p>
                                                <div id="separadordjm2"></div>
                                                <p style="color: #0c8178"><i class="fa fa-map-marker"> Puerto Maldonado
                                                        - Perú</i>
                                                </p>
                                            </center>
                                            <div id="separador"></div>
                                            <h5>Overview</h5>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>DAY 01</th>
                                                        <td>Flight to Chiclayo from Lima.</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DAY 02</th>
                                                        <td>Oxbow lake - Ethnobotanical tour.</td>

                                                    </tr>
                                                    <tr>
                                                        <th>DAY 03</th>
                                                        <td>To Puerto Maldonado - To Lima</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div id="separador"></div>
                                            <h5>ITINERARY:</h5>
                                            <p><strong>Day 01: Flight to Chiclayo from Lima.</strong></p>
                                            <p>Upon arrive to Lima or Cusco. we will welcome you at the airport and
                                                drive you ten minutes to our Puerto Maldonado headquarters. While
                                                enjoying your first taste of the forest in our gardens we will ask you
                                                to pack only the necesary gear for your next few days, and leave the
                                                rest at our safe deposit. This helps us keep the boats and cargo ligth.
                                                Skirting Puerto Maldonado, we drive 20 kilometers to the tambopata river
                                                port, entering the native comunity of inferno. The port is a communal
                                                business. Transfer boat Tambopata river port to refugio Amazonas, the
                                                two and a half hour boat ride from the Tambopata port to refugio
                                                Amazonas will take past the community of Infernoand the Tambopata
                                                National reserves checkpoint and into the buffer zone of this 1.3
                                                million hectare conservation unit.Box lunch, Upon arrival, the lodge
                                                manager will welcome you and brief you with important navigation and
                                                security tips.Dinner, Caiman search, we will be out at the river´s edge
                                                at nigth, scanning the shores with headlamps and flashligths to cath the
                                                red gleams of reflection from caiman eyes. <strong>Overnigth at refugio
                                                    Amazonas.</strong></p><br>

                                            <p><strong>Day 02: Oxbow lake - Ethnobotanical tour.</strong></p>
                                            <p>Breakfast, oxbow lake visit: We will paddle around the lake on a canoe or
                                                a catamaran, looking for lakesaide wildlife such as hoatzin, caiman and
                                                hoatzin, caiman and hornerd screamers, hoping to see the ofter which are
                                                infrequently seen here.You will also be rewarded with overhead
                                                sigthtings of macaws. Canopy tower: A thirty minute walk from refugio
                                                Amazonas leads to the 25 meter scaffolding. Canopy tower. A thirty
                                                minutes walk from refugio Amazonas leads to the 25 meter
                                                scaffolingcanopy tower. A banninstered staircase running througth the
                                                middle provides safe acces to the platforms above. The tower has been
                                                build uopn higth ground, therefore increasing your horizon of the
                                                continuous primary forest extending out towars. the Tambopata Nacional
                                                Reserve. From here views of mixed species canopy flocks as well as
                                                toucans, macaws and raptors are likely. Lunch. Farm visit: five minutes
                                                downdriver from the lodges lies a farm owned and managed by charismatic
                                                Don Manuel from the neigthbouring community of Condenado. He grows a
                                                variety of popular and unknown Amazon crops, just about every plant and
                                                tree you see serves purpose. <strong>Overnigth at Refugio
                                                    Amazonas.</strong></p><br>

                                            <p><strong>Day 03: To Puerto Maldonado - To Lima</strong></p>
                                            <p>Breakfast; Trasfer boat - Refugio Amazonas to To Tambopata river Port,
                                                Transfer Tambopata river port to Pto. Maldonado headquarters, Transfer
                                                Pto. Maldonado headquarters to airport. We reatrace our river and road
                                                journey back to Pto. Maldonado, our iffice and the airport. Depending on
                                                airline schedules, this may require down departures.</p>
                                            <div id="separador"></div>

                                            <!-----Booking---------->
                                            <div class="form text-center"> <br>
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
                                                <div class="fb-comments"
                                                    data-href="https://andeanexclusive.com/puerto-maldonado"
                                                    data-width="100%" data-numposts="5"></div>

                                                <!---------Fin redes sociales------------------------>
                                            </div><br>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <!-----Booking---------->
                                            <div class="form text-center" id="display2">
                                            </div>
                                            <div id="anuncioright">
                                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- Largo derecha -->
                                                <ins class="adsbygoogle"
                                                    style="display:inline-block;width:300px;height:600px"
                                                    data-ad-client="ca-pub-6570209707738783"
                                                    data-ad-slot="7960359151"></ins>
                                                <script>
                                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                                </script>
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
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759 text-center">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner vc_custom_1461228417147">
                                                        <div class="wpb_wrapper">
                                                            <div class='travel-item'>
                                                                <div class='entry-img'>
                                                                    <a class='entry-link' href="peru-8-days-7-nights"><img
                                                                            srcset="img/thumbnail/arequipa-perú.JPG 1000w, img/thumbnail/arequipa-perú.JPG 500w" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href='peru-8-days-7-nights' class='button'>Perú
                                                                            for 8 days</a>
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
                                                                    <a class='entry-link' href="lima-3-days-tour">
                                                                        <img width="400" height="400"
                                                                            src="img/thumbnail/ceviche-gambas.jpg"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Luxury tour in Lima" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a href="lima-3-days-tour" class='button'>Tour
                                                                            In Lima</a>
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
                                                                    <a class='entry-link' href="peru-12-days"><img
                                                                            width="400" height="400"
                                                                            src="img/thumbnail/puno-peru.JPG"
                                                                            class="attachment-post-grid-s size-post-grid-s"
                                                                            alt="Puno tour in Uros Islands" /></a>
                                                                </div>
                                                                <div class='entry-info'>
                                                                    <div class='readmore'>
                                                                        <a class='button' href="peru-12-days">Peru for
                                                                            12 days</a>
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
