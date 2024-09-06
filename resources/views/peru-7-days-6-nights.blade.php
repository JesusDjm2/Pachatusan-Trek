@extends('layouts.general-en')
@section('metas')
    <title>7 days in Perú - Peru for 7 days 6 nights - Machu Picchu - Sacred Valley - City Tours - Lima - Nazca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="7 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury, visit Perú for 7 days, how to travel to Perú, amazing Perú 7 days" />
    <meta name="description"
        content="If you want to know the wonders of Peru, this 7-day circuit will take you through Lima, Cusco, Machu Picchu and the Sacred Valley. You will discover the..." />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-7-days-6-nights">
    <meta property="og:title" content="Perú for 7 days - Machu Picchu - Sacred Valley - Lima - Cusco">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-7-days-6-nights" />
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
                                            <button type="button" class="botondjm">Language <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a href="peru-7-dias-6-noches">Español</a></li>
                                            <li><a>Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="peru-7-dias-6-noches">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                <h1><?php $tour = 'AROUND PERÚ FOR 7 DAYS';
                                                                echo $tour; ?></h1>
                                                                <p><i class="fa fa-map-marker"> Lima - Cusco - Puno</i>
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
                <div class="col-lg-3 col-sm-2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em"></div>
                </div>
                <div class="col-lg-6 col-sm-10"><a href="/">Home</a> /
                    <a href="around">Popular</a> /
                    <a>Perú 7D - 6N</a>
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
                                <h4 class="text-center">Similar Tours</h4>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-5-days-4-nights" class="button">Perú for 5 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-6-days-5-nights" class="button">Perú for 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-6-days-5-nights" class="button">Cusco for 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-8-days-7-nights" class="button">Perú for 8 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-13-days" class="button">Perú for 13 days</a>
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
                        <h2 id="titulo1">PERÚ 7 DAYS TOUR </h2>
                        <div id="separadordjm2"></div>
                        <p>Reserve 30 days in advance</i>
                        </p>
                    </center>
                    <h5>Overview</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Welcome and City Tour in the city of the Kings.</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>City tour of cusco and outskirts.</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Tour to Machupicchu "The Lost City of the Incas" </td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Tour to the Sacred Valley of the Incas</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Tourist trip from cusco to puno, visiting raqchi.</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>Tour to the titicaca lake, uros island and taquile.</td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Chullpas of sillustani and flight juliaca to lima.</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5>ITINERARY:</h5>
                    <h2 class="h2-tours">Day 1. Welcome and City Tour in the city of the Kings.</h2>
                    <p>On the day of your arrival at Jorge Chávez International Airport, our staff will be waiting for
                        you, with a sign that will bear your name, and then transport you to the selected hotel. They
                        will be given free time so that they can taste our gastronomy. In the afternoon we will start
                        our tour by making a stop in the smallest district of Lima, which is Barranco, where its famous
                        Bridge of Sighs, the Hermitage, and the monument to Isabel Granada Larco "Chabuca Granda" stand
                        out. We arrive in Miraflores to see the Parque del Amor with a panoramic view of the Huaca
                        Pucllana, a pre-Inca temple, a religious and administrative center inhabited between the 3rd and
                        8th centuries AD. We will take a walk through the park of the olive trees, which date from the
                        Viceroyalty with an area of 23 hectares and with a 6 km route, we will arrive at the gates of
                        the historic center where you will appreciate the Palace of Justice, the Walk of Naval Heroes,
                        the French Palace and colonial buildings such as the Plaza Mayor, the Government Palace, the
                        Archbishop's Palace, the Basilica Cathedral, the Municipal Palace, the Plaza San Martin, among
                        others. We visit the Museum of the Nation, where you can see a collection of gold from Peru and
                        a selection of ceramics, goldsmiths, and textiles from various pre-Columbian cultures.
                        Continuing our tour of the Church and Convent of San Francisco, we highlight the visit to its
                        underground crypts known as catacombs and then we will return to the hotel.</p>

                    <h2 class="h2-tours">Day 2. City tour of cusco and outskirts.</h2>
                    <p>You must be in the airport of Lima at least two hours before your flight leaves for Cusco, you
                        only have to approach the airline counter and display your ID to check in, the flight to Cusco
                        lasts 1 hr and 10 minutes, In Cusco " The Archaeological Capital of America ", Our staff will be
                        waiting for you to drive you to the Hotel, where you will drink coca tea then you can rest for a
                        while, around 13:30 hrs we'll pick you up from your Hotel to start visiting the following
                        attractive with a professional guide. this tour ends at 18:30 hrs:<br>
                        <strong>The Koricancha Palace and Convent of Santo Domingo:</strong> Religious center is known
                        as "The Temple of
                        the
                        Sun" where you will admire the impressive engineering used in its construction.<br>
                        <strong>The Cathedral:</strong> Colonial religious monument of extraordinary artistic value.<br>
                        <strong>Sacsayhuaman:</strong> Built 3 Km. from the city of Cusco, an impressive stone fortress
                        with excellent
                        architecture, famous for its huge carved stones some of which are at 9 m/ 30 feet high, with a
                        weight of 350 tons. Here is where the Inty Raymi or Fiesta del Sol is held in June Every
                        year.<br>
                        <strong>Qenqo:</strong> Ceremonial and ritual center, an amphitheatre where sacrifices were
                        made.<br>
                        <strong> Puca-Pucara:</strong> An old Tambo (resting place), monitoring place throughout the
                        Inka Empire
                        Routes.<br>
                        <strong>Tambomachay:</strong> At 7 Km. from the city of Cusco, the ceremonial center of the cult
                        to the water,
                        known
                        traditionally as the place where water rests.<br>
                        On the return to Cusco, we can be dropped off near to main Square or at The Dance and Music Show
                        to watch typical dances of Cusco.
                    </p>
                    <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                        src="{{ asset('img/galeria/visita-machu-picchu.webp') }}"><br><br>

                    <h2 class="h2-tours">Day 3. Tour to Machupicchu "The Lost City of the Incas"</h2>
                    <p>From 05:45 a.m. to 06:00 a.m., we pick you up from your hotel in Cusco (3400 masl) and transfer
                        you to the Train Station, located in Poroy, then we board the train and the trip from Cusco to
                        Aguas Calientes begins (2000 masl). Our guide will be waiting for us there, he will take us to
                        the bus station, to go up a zigzagging path for 30 minutes until we reach the world wonder "The
                        Sanctuary of Machupicchu", known as <strong>"The Lost City of the Incas".</strong> Once we
                        arrive at Machupicchu,
                        we will go through the control, where we will deliver our entrance tickets and where our guided
                        tour will begin, visiting the Main Square, the Circular Tower, the Sacred Solar Clock, the Royal
                        Rooms, the Temple of the Three Windows and Cemeteries, lasts approximately two hours. Afterward,
                        you will be given enough time to take a walk around the citadel and have your meals, at any
                        restaurant in Aguas Calientes or if you wish at the Sanctuary Lodge (this is not included). In
                        the afternoon, between 3:30 p.m. and 5:00 p.m., we will return by train to Cusco, we will be
                        waiting for you at the train station and then we will take you back to your hotel.</p>
                    <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                        src="{{ asset('img/galeria/valle-sagrado.jpg') }}"><br><br>

                    <h2 class="h2-tours">Day 4. Tour to the Sacred Valley of the Incas</h2>
                    <p>We pick you up between 08:00 a.m. to 08:20 a.m., the tour will begin with a stop at the Corao
                        natural viewpoint where the guide will give you an introduction to the Sacred Valley, the tour
                        will continue enjoying a beautiful landscape, the first place of the visit will be the
                        traditional Indian market of Pisaq where you can do some shopping for souvenirs or handicrafts,
                        you will ascend to the Archaeological Center of Pisaq where after a short walk you will reach
                        the main Inca sites. Continuing with the trip, they will go to the city of Urubamba wherein an
                        exclusive restaurant you will be able to taste the local gastronomy. <br>In the afternoon we
                        will
                        visit the Fortress and Citadel of Ollantaytambo, built to guard the entrance to this part of the
                        valley and protect it from possible invasions by the inhabitants of the jungle, currently,
                        Ollantaytambo is considered the living Inca town for the conservation of customs and urban style
                        that its streets still have. On the way back to Cusco we will visit the picturesque town of
                        Chinchero, where the remains of the royal hacienda of Túpac Inca Yupanqui are located. You will
                        also admire its well-preserved Inca Wall in the main square and visit the beautiful colonial
                        temple with interesting frescoes on the portico.</p>


                    <h2 class="h2-tours">Day 5. Tourist trip from Cusco to Puno, visiting Raqchi.</h2>
                    <p>After having a good breakfast, we'll pick you up from your hotel and we will take you to the bus
                        station to start with the tour to Puno (8 hours) you will have 4 guided visits to the places of
                        tourist interest: Andahuaylillas's temple or Sixtine Chapel of America, The Inca temple of
                        Raqchi, The Raya to 4335 masl and The Museum Inka Aymara of Pukara. Every visit has a duration
                        of 20 to 40 minutes, we will have a buffet lunch in Sicuani (included). The passenger will be
                        able to make questions, take photos and walk for a while. When you arrive in Puno, our personnel
                        will be waiting for you, and they will take you to the hotel where you will stay.</p>
                    <img loading="lazy" alt="Visit the city of Puno" width="100%"
                        src="{{ asset('img/galeria/visit-the-city-of-puno.webp') }}"><br><br>

                    <h2 class="h2-tours">Day 6. Tour to the Titicaca Lake, Uros Island and Taquile.</h2>
                    <p>Early in the morning, you will be picked up from your hotel by our local guide and then
                        transferred to the harbor. We start our boat excursion of Titicaca Lake by visiting The Uros
                        Floating, a small community that has lived on these cattail Islands for decades. Centuries ago
                        the small indigenous Uros tribe conceived of the islands as a way to isolate and protect
                        themselves from rival tribes, the Collas and the Incas. The Uros people harvested the cattails
                        in the shallows of the lake, bundled them together tightly, and built floating island platforms
                        complete with cattail houses and canoes, creating in this way their little world. After
                        strolling around the floating Islands, we continue our journey towards the Taquile Island (2
                        hours approx.), a traditional Quechua-speaking community, full of ancient agricultural terraces
                        and some ruins dating back to the pre-Inca times. The Taquile population was relatively isolated
                        from the mainland until the 1950s, and the notion of the community and family is still very
                        strong among them. <br>At the top of the Island, you will have free time to explore this place
                        on
                        your own, and afterward, you will meet the group for lunch at one local restaurant. After lunch,
                        we will descend to the harbor to take our boat back to Puno. We will be back in Puno by 17:00
                        hrs. approximately.</p>
                    <h2 class="h2-tours">Day 7. Chullpas of sillustani and flight juliaca to lima.</h2>
                    <p>
                        After having breakfast, we will head to Juliaca's Airport (1hr from Puno), but on the way to the
                        airport, we will visit the Chullpas of Sillustani for around 30 minutes. The archaeological site
                        of Sillustani has located 22.3 miles away from the city of Puno (34 Km., 35 minutes drive) and
                        at an altitude of 12,858 feet (3,840mts.) above sea level. This visit allows visitors to enjoy
                        stunning highland landscapes and imposing pre-Inca architecture. The site is strategically
                        positioned on the top of a peninsula surrounded by a beautiful lagoon called Umayo lagoon.
                        The archaeological site of Sillustani was a cemetery built in the XIII century by a civilization
                        that occupied the area before the Inca domination. The creators of the imposing burial towers
                        are known as the Kolla people.<br> The most imposing burial towers were built for the chiefs and
                        priests. For our ancient cultures, the cemeteries were important resting places for the deceased
                        people. Therefore, our ancestors would strategically choose burial grounds in exceptionally
                        beautiful spots. Cemeteries were considered sacred places. <br>After all this we will get to
                        Juliaca's Airport, we will display our IDs and get checked in, then we will fly to Lima. And our
                        adventure ends.

                    </p>

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
                    <div class="tab-content pb-5 panel" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <i class="fa fa-check"></i> All transfers to the hotel, airport, terminal, stations, and
                            attractions.br>
                            <i class="fa fa-check"></i> Tours to Machu Picchu, Sacred Valley of the Incas, city of
                            Cusco, and city tour in the "City of Kings".<br>
                            <i class="fa fa-check"></i> All transportation for the tours.<br>
                            <i class="fa fa-check"></i> Round trip train tickets Ollantaytambo – Aguas Calientes –
                            Ollantaytambo.<br>
                            <i class="fa fa-check"></i> Bus tickets up and down Aguas Calientes – Machu Picchu –
                            Aguas Calientes.<br>
                            <i class="fa fa-check"></i> Professional tour guide in English or Spanish.<br>
                            <i class="fa fa-check"></i> Travel by bus from Ollantaytambo to Cusco.<br>
                            <i class="fa fa-check"></i> Income to the tourist attractions to visit: Machupicchu,
                            Huaynapicchu, Sacred Valley of the Incas, city of Cusco, and city of the kings.<br>
                            <i class="fa fa-check"></i> Transfer to all offices.<br>
                            <i class="fa fa-check"></i> 06 nights in a hotel.
                            <i class="fa fa-check"></i> 07 breakfasts.
                            <i class="fa fa-check"></i> 02 lunches (01 in the tour to the Sacred Valley and 01 in
                            Aguas Calientes).

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
                            <i class="fa fa-minus"></i> People of Peruvian, Ecuadorian, Bolivian and Colombian
                            nationalities have access to a
                            special discount, for being members of the CAN.
                        </div>
                    </div>

                    <div class="form text-center">
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-7-days-6-nights"
                            data-width="100%" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br><br>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div class="card-body">
                        </div>
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
                                    <a href="peru-5-days-4-nights" class="button">Perú for 5 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-6-days-5-nights" class="button">Perú for 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-6-days-5-nights" class="button">Cusco for 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-8-days-7-nights" class="button">Perú for 8 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-13-days" class="button">Perú for 13 days</a>
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
