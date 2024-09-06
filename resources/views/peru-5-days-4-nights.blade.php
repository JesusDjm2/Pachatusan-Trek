@extends('layouts.general-en')
@section('metas')
    <title>5 days in Perú - Peru for 5 days 4 nights - Machu Picchu - Sacred Valley! - City Tours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="5 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury, reserve machu picchu 2022, travel to peru this 2022" />
    <meta name="description" content="We present you a detailed tour for 5 days during your stay in Perú." />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-5-days-4-nights">
    <meta property="og:title" content="Cusco 5 days - Machu Picchu - Sacred Valley!">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-5-days-4-nights" />
@endsection
@section('contenido')
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-wrapper">
                        <div class="site-branding">
                            <a href="/" rel="home" class="logo-text-link"><img src="img/andean-exclusive-logo.png"
                                    id="logo"></a>
                        </div>
                        <nav class="main-nav">
                            <ul class="one-page-menu">
                                @include('layouts.menu')
                                <li id="display">
                                    <a href="{{ route('peru-5-dias') }}">
                                        <button type="button" class="botondjm">Español</button>
                                    </a>
                                </li>
                                <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr' target="_blank">+51
                                        979 721 194</a></li>
                                <li id="display2">
                                    <a href="{{ route('peru-5-dias') }}">
                                        <button type="button" class="botondjm">Español</button>
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
                                                                        {{ session()->get('flash') }}<button type="button"
                                                                            onclick="bye()" style="float: right;">X</button>
                                                                    </div>
                                                                </center>
                                                            @endif
                                                            <h1><?php $tour = 'PERÚ 5 DAYS 4 NIGHTS';
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
                <div class="col-lg-6 col-sm-12 text-center"><a href="/">Home</a> /
                    <a href="around">Around Perú</a> /
                    <a>Perú for 5 days</a>
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
                            <h4 class="text-center">Similar Tours</h4>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-4-days-3-nights" class="button">Cusco for 4 days</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="machupicchu-accelerate" class="button">Machu Picchu full day</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="cusco-6-days-5-nights" class="button">Cusco for 6 days</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-10-days-9-nights" class="button">Perú for 10 days</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-15-days-tour" class="button">Perú for 15 days</a>
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
                        <h1 id="titulo1">Perú Espectacular</h1>
                        <div id="separadordjm2"></div>
                        <i class="fa fa-clock-o"></i> 5 days<br>
                        <i class="fa fa-map-marker"></i> Lima - Sacred Valley - Machu Picchu
                        - Cusco <br>
                        <i class="fa fa-exclamation-circle"></i> Reserve 30 days in advance
                    </center>
                    <div id="separador"></div>
                    <h5>Overview</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Welcome on Lima airport and City tour in afternoon</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Fly to Cusco and city tour in afternoon </td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Sacred Valley of the incas & Aguas Calientes </td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Machupicchu citadel</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td> Cusco & Transfer Out </td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARY:</h5>
                    <p><strong>Day 1. Welcome and City Tour in the city of the Kings.</strong></p>
                    <p>On the day of your arrival at Jorge Chávez International Airport, our staff will be waiting for
                        you, with a sign bearing your name, and then transport you to the selected hotel. They will be
                        given free time so that they can taste our gastronomy. In the afternoon we will start our tour
                        making a stop in the smallest district of Lima, Barranco where its famous Bridge of Sighs, the
                        Hermitage, and the monument to Isabel Granada Larco “Chabuca Granda” stand out. We arrive in
                        Miraflores to visit the Parque del Amor with a panoramic view of the Huaca Pucllana, a pre-Inca
                        temple religious and administrative center inhabited between the 3rd and 8th centuries AD. We
                        will take a walk through the park of olive trees, dating from the Viceroyalty with an area of 23
                        hectares. With 6 km of travel, we will arrive at the gates of the historic center where you will
                        appreciate the Palace of Justice, The walk of Naval Heroes, the French Palace, and
                        colonial buildings such as the Plaza Mayor, the Government Palace, the Archbishop's Palace, the
                        Cathedral Basilica, the Municipal Palace, the Plaza San Martín, among others. We visit the
                        Museum of the Nation, where you can see a collection of gold from Peru and a selection of
                        ceramics, goldsmiths, and textiles from various Pre-Columbian cultures. Continuing our tour of
                        the Church and Convent of San Francisco, the visit to its underground crypts known as The
                        Catacombs
                        stands out, and then we will return to the hotel.</p>

                    <p><strong>Day 2. Travel by plane from Lima to Cusco and City tour in Cusco.</strong></p>
                    <p>After breakfast, our staff will appear at the hotel to transfer you to the airport and board you
                        by plane from Lima to Cusco upon arrival in the city of Cusco our staff will be waiting for
                        you, with a sign that will bear your name, and then transport you to the hotel of your choice.
                        You will have free time to rest, adjust to the altitude, and eat your meals. Between 1:00 p.m.
                        and 1:30 p.m., we will be passing by your hotel to start the tour, we will visit: The Cathedral,
                        a colonial religious monument of extraordinary artistic value, the Korikancha or Temple of the
                        Sun, where you can appreciate the fine work that the Incas carried out with the stone.
                        Continuing
                        with the tour we will go to Sacsayhuamán, a fortress with a strategic location, which offers an
                        unparalleled view of the city, in this place the Inti Raymi or "Fiesta del Sol" is held every
                        June 24, later we will visit Qenqo, Tambomachay, and Puca Pucara, archaeological complexes of a
                        religious nature.</p>

                    <p><strong>Day 3. Tour the Sacred Valley of the Incas and Aguas Calientes.</strong></p>
                    <p>Sacred Valley here I come! We start the tour by passing by your hotel at the agreed time and
                        together with the group we set off to visit the impressive archaeological center of Pisaq and
                        its beautiful town with very friendly local people, here you can buy gifts and typical souvenirs
                        of the area at a very good price. At noon we arrive in Urubamba, where we will taste the most
                        exquisite Andean gastronomy in a local restaurant, we continue our tour to Ollantaytambo, the
                        last Inca town that maintains its original architectural structure, to end this magical tour we
                        will go to the train station, travel towards Aguas Calientes will be a pleasant experience with
                        the most attentive staff. Upon arrival in Aguas Calientes, the hotel staff will wait for you to
                        go to the hotel, where our guide will visit you and give you the explanation and tips for the
                        next day's tour.</p>
                    <p><strong>Day 4. Tour Machu Picchu "The lost city of the Incas" and hike to
                            Huaynapicchu.</strong></p>
                    <p>
                        The big day has arrived! We have breakfast and go to the bus station at dawn, we will board the
                        bus to the main entrance of the Machu Picchu Sanctuary. Entering with the group, we will have a
                        guide in the lost city of the Incas, for an approximate time of 2:30 hrs, making stops at the
                        most important and energetic points to relax and take the best souvenir photos. At the end of
                        the guided tour, our guide says goodbye and we will have free time to enjoy the impressive
                        landscape, according to your train schedule we will go down to Aguas Calientes and board the
                        train to Ollantaytambo, where our transport awaits you to transfer you to your hotel in the
                        Cusco city. Important: There is no time limit to stay in Machu Picchu, but if you leave the
                        citadel you will not be able to enter again unless you have an additional entrance or an
                        entrance to Huaynapicchu or Machupicchu Mountain, the same one that we have included for you in
                        this tour and you can do this tour on your own.
                    </p>
                    <p><strong>Day 5. Homecoming</strong></p>
                    <p>Two hours before your flight departure, we will pick you up from your hotel and then transport
                        you to the airport, where we will say goodbye and end our services.</p>
                    <div id="separador"></div>
                    <!----sliders------>
                    <center>
                        <h4>Images</h4>
                    </center>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/CHINCHERO.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/responsive/cusco-nigth-tour.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/responsive/valle-sagrado-sacred-valley.jpg"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!----End sliders------>
                    <div id="separador"></div>
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                        style="text-transform: uppercase; font-size: 12px; font-weight: 700">
                        <li class="nav-item">
                            <a class="nav-link active" id="drop" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Includes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Not Includes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Important</a>
                        </li>
                    </ul>
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <i class="fa fa-check" aria-hidden="true"></i> All transfers to the hotel, airport,
                            terminal, stations, and attractions.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tours to Machu Picchu, Sacred Valley of
                            the Incas, city of Cusco, and city tour in the
                            "City of the Kings".<br>
                            <i class="fa fa-check" aria-hidden="true"></i> All transportation for the tours.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Roundtrip train tickets Ollantaytambo -
                            Aguas Calientes - Ollantaytambo.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Bus tickets up and down Aguas Calientes -
                            Machu Picchu - Aguas Calientes.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Professional tour guide in English or
                            Spanish.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Travel by bus from Ollantaytambo to
                            Cusco.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Income to the tourist attractions to
                            visit: Machu Picchu, Huayna Picchu, Sacred Valley of
                            the Incas, city of Cusco, and city of the kings.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Transfer in all offices.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 04 nights in a hotel.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 04 breakfasts.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 02 lunches (01 in the Sacred Valley tour
                            and 01 in Aguas Calientes).
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus"></i> Flights Lima / Cusco / Lima.<br>
                            <i class="fa fa-minus"></i> Complete meals (lunches and dinners not specified in the
                            program).
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus"></i> Our prices include Inca Rail Executive Train service for your
                            trip to Machupicchu.<br>
                            <i class="fa fa-minus"></i> Important: The hotel reservation is subject to space
                            availability - Prices do not include
                            VAT for Peruvian passengers and foreigners residing in Peru.<br>
                            <i class="fa fa-minus"></i> People of Peruvian, Ecuadorian, Bolivian, and Colombian
                            nationalities have access to a
                            special discount, for being members of the CAN.
                        </div>
                    </div>
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-5-days-4-nights"
                            data-width="100%" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="display">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <h4 class="text-center">Similar Tours</h4>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-4-days-3-nights" class="button">Cusco for 4 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="machupicchu-accelerate" class="button">Machu Picchu full day</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-6-days-5-nights" class="button">Cusco for 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-10-days-9-nights" class="button">Perú for 10 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-15-days-tour" class="button">Perú for 15 days</a>
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
