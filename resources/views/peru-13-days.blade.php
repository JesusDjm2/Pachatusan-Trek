@extends('layouts.general-en')
@section('metas')
    <title>13 days in Perú - Peru for 13 - Machu Picchu - Sacred Valley - City Tours - Lima - Nazca
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="13 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury" />
    <meta name="description" content="We present you a detailed tour for 13 days in Perú" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-13-days">
    <meta property="og:title" content="Perú for 13 days - Machu Picchu - Sacred Valley - Lima - Puno - Arequipa">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/hermoso-peru.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-13-days" />
@endsection
@section('contenido')
    <div class="wrapper">
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
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="botondjm">Language <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a href="peru-13-dias">Español</a></li>
                                            <li><a>Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="peru-13-dias">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a>En</a>
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
                                                                <h1><?php $tour="13 DAYS AROUND PERÚ"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
                                                                    - Arequipa - Nazca</p>
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
                <div class="col-lg-6 col-sm-12"><a href="/">Home</a> /
                    <a href="experiences">Popular</a> /
                    <a>Perú 13 Days</a>
                </div>
                <div class="col-lg-3 col-sm-2" id="display2">
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="rowdjm">
            <div class="col-lg-3" id="display2">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div class="card">
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <h4 class="text-center">Similar Tours</h4>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="adventures/choquequirao-tour" class="button">Choquequiro Trek 4
                                        days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="adventures/rainbow-mountain" class="button">Rainbow Mountain</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="adventures/humantay-lake" class="button">Humantay Lake</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-6-days-5-nights" class="button">Perú for 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-6-days-5-nights" class="button">Cusco 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-7-days-6-nights" class="button">Perú for 7 days</a>
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
                        <h1 id="titulo1">PERÚ 13 DAYS </h1>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178">Reserve 30 days in advance
                        </p>
                    </center>
                    <div id="separador"></div>
                    <h5>Overview</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Welcome in Lima airport, City tour.</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Welcome at the Airport and City tour in Cusco.</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Sacred Valley of the Incas.</td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Machu Picchu, optional ascent to Huaynapicchu Mountain.</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Cusco Free Day.</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>Guided trip by Bus from Cusco to Puno.</td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Lake Titicaca tour, Los Uros and Taquile.</td>
                            </tr>
                            <tr>
                                <th>DAY 08</th>
                                <td>Travel by Bus from Puno to Colca Canyon.</td>
                            </tr>
                            <tr>
                                <th>DAY 09</th>
                                <td>Colca Canyon tour and Travel by bus to Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DAY 10</th>
                                <td>Free Morning and City tour Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DAY 11</th>
                                <td>Nasca Lines Overflight.</td>
                            </tr>
                            <tr>
                                <th>DAY 12</th>
                                <td>Ballestas Islands Tour & Huacachina Oasis.</td>
                            </tr>
                            <tr>
                                <th>DAY 13</th>
                                <td>Transfer from the Hotel to the Lima airport.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>About Perú</h5>
                    <p>
                        Peru is one of the most complete countries in the world that can be visited. It has the great
                        fortune of having a coast, mountains, and jungle and having a high variety of climate types,
                        which allows it to enjoy a great biological diversity. Tourism in Peru is one of the best
                        options. <br><br>
                        Also, Peru stands out for its history, tradition, culture, and crafts. Do you want even
                        more reasons to visit it? Peruvian gastronomy is one of the most diverse that exists. In recent
                        years, Peruvian chefs have become experts in experiencing new flavors and their gastronomy is
                        recognized as one of the best in the world.<br><br>
                        As if all this were not enough, the best of the
                        country remains to be named: the kindness and hospitality of its inhabitants.
                    </p>
                    <img src="{{ asset('img/galeria/Perú-un-lugar-mágico-en-los-andes.webp') }}"
                        alt="Peru, un país magico, magical country" loading="lazy" width="100%"><br><br>
                    <h5>ITINERARY:</h5>
                    <h2 class="h2-tours"> Day 1: Welcome to the Lima airport, City tour in Lima with a visit to
                        the Huaca Pucllana </h2>
                    <p>
                        On this day we will be waiting for you at the Lima airport at the time of your flight arrival to
                        give you a warm welcome at the "Jorge Chavez" international airport and transfer you to the
                        Hotel.<br>
                        In the afternoon we will pick you up from your hotel to start the City tour in <strong>"The City
                            of
                            Kings"</strong> Lima, on the way we will make a stop in one of the smallest districts of
                        Lima "Barranco",
                        where its famous Bridge of Sighs stands out, the Hermitage and the monument to Isabel Granada
                        Larco "Chabuca Granda".<br> We will continue our tour in the tourist transport to Miraflores
                        where
                        we will see the Parque del Amor located on the boardwalk from where you can take beautiful
                        photos overlooking the Pacific Ocean, we will have a panoramic view of the Huaca Pucllana which
                        is a pre-Inca religious temple and administrative center inhabited between the 3rd and 8th
                        centuries A.D., then we will take a walk through the park of olive trees, which date back to the
                        Viceroyalty with an area of 23 hectares.<br>
                        With a route of 6 km, we will arrive at the historic center of Lima where we will appreciate the
                        Palace of Justice, the Paseo de Los Héroes Navales, the French Palace, and colonial buildings
                        such as the Plaza Mayor, the Government Palace, the Archbishop's Palace, Basilica Cathedral,
                        Municipal Palace, Plaza San Martín, among others. <br> We will visit the BCR Museum, where you
                        will
                        be able to appreciate a collection of gold from Peru and a selection of ceramics, goldsmithing,
                        and textiles from various pre-Columbian cultures (subject to museum hours and access to the
                        historic center). Following our tour of the Church and Convent of San Francisco, we will visit
                        its impressive underground crypts known as Catacombs.
                        Then we return to the hotel.

                    </p>
                    <img src="img/tours/lima-peru-tour.jpg" width="100%" alt="Lima Perú, Tour en Lima, tour 12 días"
                        loading="lazy">
                    <span>Picture: Main square of Lima</span><br><br>

                    <h2 class="h2-tours"> Day 2: Welcome to the Airport and City tour in Cusco. </h2>
                    <p>
                        This day begins with the pick up in your hotel for your flight from Lima to Cusco that you will
                        take at the "Jorge Chávez" airport in the city of Lima 2 hours in advance of your flight to
                        the "Archaeological Capital of America" Cusco (Altitude 3350 m.a.s.l.), where our staff will be
                        waiting for you at the airport with a sign with your name to transfer you to the selected hotel,
                        where you will be offered coca leaves tea which is good for the acclimatization of Cusco.
                        After your lunch, we will pick you up from your hotel at the time indicated by your travel
                        agent, to start and enjoy a guided tour at 1:35 pm where you will be able to know the following
                        tourist attractions of the city of Cusco:<br>
                        <strong> The Temple of the Sun or Qoricancha:</strong> The convent of Santo Domingo in Cusco is
                        the oldest
                        religious building in South America, known as the "Temple of the Sun". Currently, you can see
                        the
                        wonderful Inca architecture linked to Spanish architecture which is a sample of our mestizo
                        culture.<br>
                        <strong> The Cathedral:</strong> The Cathedral Basilica of the city of Cusco was built by native
                        Cusco workers and
                        led by the Spaniards. It also has the finest expressions of colonial goldsmithing as well as
                        wood carving and a valuable collection of canvases of the "Escuela Cusqueña" (School of Cusco).
                        Saqsayhuaman: It is one of the Inca constructions that most astonishes tourists who, according
                        to new hypotheses, point out that it would have been an important Inca ceremonial center and not
                        a fortress as previously believed. Its construction took more than seven decades and required
                        the strength of about 20,000 men.<br>
                        <strong>Qenqo:</strong> Ceremonial and ritual center, it was an amphitheater where sacrifices
                        were made, it is
                        said that it was an Inca shrine. Its construction is made of stones. There are passages, canals,
                        Incas.<br>
                        <strong>Puca Pucara:</strong> Former Tambo guard place along the Inca roads, this archaeological
                        site has:
                        enclosures, interior plazas, baths, aqueducts, watchtowers and an easily recognizable Inca trail
                        in synthesis the urban layout is highly adequate and functional.<br>
                        <strong>Tambomachay:</strong> Through its stairways, you can see crystalline waterfalls and,
                        according to what is
                        affirmed here, the liquid element for the Incas, "the water", was worshiped.
                        Returning to Cusco at 6:45 pm.
                    </p>
                    <img src="img/galeria/Qoricancha-cusco.webp" width="100%" alt="Qoricancha Temple" loading="lazy">
                    <span>Picture: Qoricancha temple, Cusco</span><br><br>

                    <h2 class="h2-tours"> Day 3: Tour of the Sacred Valley of the Incas and train trip to
                        Machupicchu (Aguas Calientes).</h2>
                    <p>
                        Pisac is a typical Andean artisan and the archaeological town where the famous Craft Fairs are
                        held in their typical markets where you can make purchases and enjoy a guided tour of the
                        archaeological zones of the place; Continuing with our tour of approximately one hour we will
                        pass through different towns such as Coya, Lamay, the province of Calca and Yucay appreciating
                        the beauty of the <strong> Sacred Valley of the Incas</strong>. We will go to the town of
                        Urubamba where we will
                        enjoy a delicious buffet lunch in the cozy restaurant "Tunupa"; later we will go to the town of
                        Ollantaytambo to visit the archaeological complex of the same name; having been an agricultural,
                        administrative, social, religious and military complex in Tahuantinsuyo, ending the tour at
                        approximately 4:00 p.m., then you will have free time in the town of Ollantaytambo, where you
                        can visit its craft market, its alleys that still preserve the layout of the Inca streets,
                        seeing the water run through its ancient channels, is like going back in time, ideal for taking
                        pictures or having a coffee in its Plaza de Armas. At the indicated time you must take the
                        Ollantaytambo train leaving at 7:00 p.m. to the town of Aguas Calientes where our staff will be
                        waiting for you to transfer you to the selected hotel.
                    </p>
                    <img src="img/responsive/valle-sagrado-sacred-valley.jpg" width="100%"
                        alt="Sacred valley od the incas" loading="lazy">
                    <span>Picture: Pisaq, Sacred Valley of the Incas</span><br><br>
                    <h2 class="h2-tours"> Day 4: Sunrise View and Guided Tour in Machupicchu with an optional
                        ascent to Huaynapicchu Mountain. </h2>
                    <p>
                        After your breakfast at the hotel, excellent opportunity to get up early and watch a beautiful
                        sunrise in Machupicchu. In coordination with your guide, you will take the bus from the town of
                        Aguas Calientes to Machupicchu (altitude 2450 meters above sea level; approximately 25 minutes).
                        You will be able to observe the sunrise in Machupicchu doing your guided tour at 7:00 am (for
                        approximately 3 hours), being able to visit: the Plaza de Armas, the circular tower, the Sacred
                        Solar Clock, the Royal Hall, the Temple of the Three Windows, and the Cemeteries. <br>
                        Before or after the guided tour in Machupicchu, depending on the time of your tickets, you will
                        have time to explore on your own or use your tickets to climb Huayna Picchu or Machupicchu
                        Mountain (if you want to climb Huaynapicchu mountain, you must reserve at least 3 months in
                        advance due to availability, check-in times may vary depending on the time of booking). <br>In
                        addition to having the guided tour in the citadel of Machupicchu, you can also visit one of the
                        following mountains (without a guide): Huaynapicchu Mountain (from where you can see a
                        spectacular view of the entire Machupicchu valley) or Machupicchu Mountain (the mountain that
                        gave name to Machupicchu with a unique landscape beauty) the entrance ticket to one of the
                        Mountains will be included and you can do it optionally, any of them will take approximately 3
                        hours round trip.<br>This travel program is ideal to tour Machupicchu in its entirety and take
                        pictures with enough time until the time that is convenient for you to return by bus to Aguas
                        Calientes to have lunch in the same town. In the afternoon you should board the train to Poroy
                        or Ollantaytambo. <br>Once you arrive at one of these train stations, our staff will be waiting
                        for
                        you to transfer you to your Hotel in Cusco.
                        The advantage of this tour is that you can get to know Machupicchu without many people and with
                        much more time available.

                    </p>
                    <img src="{{ asset('img/galeria/visita-machu-picchu.webp') }}" alt="Machu Picchu view"
                        loading="lazy" width="100%"><span>Picture:Machu Picchu, Cusco</span><br><br>
                    <h2 class="h2-tours"> Day 5: Free day in Cusco.</h2>
                    <p>
                        Breakfast included.<br>
                        Free Day.<br>
                        Optional: Tour in the South Corridor for US$25.<br>
                        Optional: Tour the salt mines of Maras and Andenes de Moray for US$25.<br>
                        Optional: Tour in Lake Huamantay Salkantay route for US$45. <br>
                        Optional: Tour to the Mountain of Colors Vinincunca for US$45.
                        Stay in a hotel in Cusco.

                    </p>


                    <h2 class="h2-tours">Day 6: Guided bus trip from Cusco to Puno.</h2>
                    <p>
                        We will pick you up from your hotel at 6:20 am to transfer you to the bus terminal for your trip
                        to Puno (altitude 3818 m.a.s.l.). <br>
                        Our comfortable bus is equipped with bathrooms and is operated by three people: a driver, a
                        professional bilingual guide, and an assistant. We will make a short visit to the church of
                        <strong>Andahuaylillas</strong>, the church that dates from the early seventeenth century, and
                        is known as the
                        Sistine of South America for the magnificent paintings it has and for its altar carved in gold.
                        After our visit, we will continue 218 km to Raqchi, where the Inca temple of Wiracocha is
                        located.<br>
                        After visiting Raqchi, we will continue our way to Sicuani where we will enjoy a delicious
                        buffet lunch to continue to La Raya, located at 4,335 meters high. Our next destination will be
                        Pucará, where we will visit the "Lithic Museum" and finally our tour will be through high Andean
                        esplanades under unreal clarity.<br>
                        In the city of Puno, our staff will be waiting for you to take you to your Hotel.

                    </p>

                    <h2 class="h2-tours">Day 7: Tour Lake Titicaca, Los Uros and Taquile.</h2>
                    <p>
                        We will pick you up from your hotel at 7:00 am. approximately to go to the port and start the
                        boat tour to the amazing and majestic <strong> "Islas de Los Uros"</strong>, arriving there at
                        07:20 a.m. <br>
                        <strong>Los Uros:</strong> These islands are made of artificial floors, made with cattails
                        superimposed and
                        skillfully interwoven. During the trip, the guide provides extensive information about Lake
                        Titicaca, the legends of the Uros, their uses, customs, and folklore.
                        <strong> Taquile:</strong> Arriving in Taquile, we will go to the Plaza de Armas, then we will
                        have free time to
                        shop.<br>
                        Taquile Island presents a textile art of an impressive quality only comparable to the looms of
                        the Paracas or Egyptian culture and was declared a Cultural Heritage of Humanity. At 12:40 noon
                        you will taste an exquisite lunch, then we will be leaving from the Port of Taquile at 2:30 p.m.
                        and arriving in Puno at 5:30 p.m. and then transferring you to your hotel.

                    </p>
                    <img src="img/galeria/visit-the-city-of-puno.webp" width="100%" alt="Titicaca Lake, Puno">
                    <span>Picture: titicaca lake, Puno</span><br><br>

                    <h2 class="h2-tours">Day 8: Travel by bus from Puno to the Colca Canyon.</h2>
                    <p>
                        Early in the morning, you will travel by bus to have an incredible 6-hour trip to the Colca
                        Canyon, one of the deepest canyons in the world (3,400 meters), passing through Pampa Cañahuas,
                        located in the Aguada Blanca National Reserve, habitat of vicuñas and alpacas (camelids from
                        South America).<br>The highest point of the route is 4,900 meters above sea level. On the way,
                        we
                        will appreciate pre-Columbian terraces that are still cultivated by the native Collaguas.
                        Arriving at the Colca Valley, we will transfer you to your respective hotel.
                        In the afternoon, we recommend you rest and acclimatize to the altitude. <br>If you are in good
                        physical condition, you can take advantage of your free time to take a walk around the hotel or
                        take a refreshing bath in the nearby hot springs.

                    </p>

                    <h2 class="h2-tours">Day 9: Colca Canyon Tour and bus trip to Arequipa.</h2>
                    <p>
                        Very early in the morning, we will go to La Cruz del Cóndor, where you can usually see the
                        largest bird in the world in full flight called El Cóndor. During the return, we will visit the
                        towns of Yanque, Coporaque, Achoma, and Maca. Good opportunity to appreciate the life of the
                        inhabitants of these towns that have not changed much since the time of the Incas. Finally, in
                        the afternoon, we will return to the White City of Arequipa.
                    <p>

                    <h2 class="h2-tours">Day 10: Free Morning and City tour around Arequipa.</h2>
                    <p>
                        On this day you will have the morning free to rest or take a walk. In the afternoon, we will
                        tour the "White City" including the Convent of Santa Catalina, undoubtedly the gem of Arequipa,
                        finally opened to the public in 1970, after having been in seclusion for 400 years, with an
                        innumerable amount of pieces of colonial art. <br>Also visit the Plaza de Armas (Main Square),
                        the
                        cloisters of the Society of Jesus, and the neighborhoods of Cayma and Yanahuara, with a
                        magnificent view of the Misti volcano, and visit a traditional colonial mansion called the
                        "Mansión del Fundador". <br>At night, we will transfer you from your hotel to the bus station to
                        travel by bus from Arequipa to Nasca.
                    <p>

                        <img src="img/responsive/arequipa-peru-tours-tour.jpg" width="100%"
                            alt="cuidad de Arequipa"><span>Picture: Misti volcano, Arequipa</span><br><br>
                    <h2 class="h2-tours">Day 11: Flight over the Nasca Lines.</h2>
                    <p>
                        We will pick you up from the bus station at 7:00 am to transfer you to the Nasca aerodrome and
                        begin the flight over the Nasca lines for an approximate time of 45 minutes.
                        The Nasca Lines are mysterious traces made on the sand that covers an area of 350 km, they
                        represent figures of different animals and plants such as the Spider, the Monkey, the Dog, the
                        Lizard, and the Hummingbird, among others, in large dimensions. that reach 15,300 meters each
                        and with a depth of approximately 30 centimeters.
                        According to Dr. María Reiche, who has dedicated a large part of her life to the study of these
                        lines, it is the largest astronomical calendar in the world.
                        In the afternoon we will take the bus to Paracas, 3 hours from Nasca, where our staff will be
                        waiting for you.

                    <p>
                        <img src="{{ asset('img/galeria/linea-nazca-mono.webp') }}" alt="Nazca lines in Ica, Perú"
                            width="100%" loading="lazy"><span>Picture: Nazca lines(Mono), Ica - Perú</span><br><br>

                    <h2 class="h2-tours">Day 12: Ballestas Islands Tour, Reserve of sea Lions of Paracas and
                        Huacachina Oasis.
                    </h2>
                    <p>
                        After you will enjoy breakfast at your hotel, we will pick you up from your hotel to begin
                        the
                        Tour in the Islands Ballestas, we will pass the Chandelier “Candelabro” a giant image on the
                        side of a hill.<br>

                        Arriving at the Ballestas Islands, you will visit the different islands for two hours
                        observing
                        the different species of sea lions, seals penguins, and guano birds, ending the tour we will
                        go
                        to the Paracas station for our trip to Ica where you will have lunch by yourself and where
                        you
                        will make the City tour in Ica, visit the vineyard farm and later we will cross the desert
                        of
                        the Huacachina Oasis in tubular buggies climbing immense sand dunes, in this ride, the
                        adrenaline
                        will be our accomplice to free ourselves from stress and live a truly unforgettable
                        experience. During this trip, you will also have the opportunity to practice
                        sandboarding.<br>

                        If the weather conditions are favorable we will have the opportunity to see the sunset in
                        the desert of Ica. Finally, at 19:30 we will take a bus to Lima where we will spend the night in
                        a hotel.
                    <p>
                        <img src="{{ asset('img/galeria/paracas-islas-ballestas.webp') }}"
                            alt="Ballestas islands tour" width="100%" loading="lazy"> <span>Picture: Ballestas
                            islands</span><br><br>
                    <h2 class="h2-tours">Day 13: Transfer from the Hotel to the Lima airport.</h2>
                    <p>
                        Breakfast is included in the hotel.<br>
                        Transfer from your hotel to the airport.<br>
                        End of Services.
                    </p>

                    <div id="separador"></div>
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                        style="text-transform: uppercase; font-size: 12px; font-weight: 700">
                        <li class="nav-item">
                            <a class="nav-link active" id="drop" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">Includes</a>
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
                            <i class="fa fa-check" aria-hidden="true"></i> Flight tickets from Lima to Cusco. (1
                            hour
                            with 15 minutes).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> All transfers to hotels, airports,
                            train
                            stations, bus terminals, and tourist attractions.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> All entrance tickets to all tourist
                            attractions to visit.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> All transportation for tours.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Professional bilingual guide.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Machu Picchu Tour with Expedition
                            train.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Sacred Valley of the Incas Tour.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> City Tour in Cusco.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> City tour in Lima ”City of the
                            Kings”.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Titicaca lake Tour , Uros Islands and
                            Taquile Island.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Colca Canyon Tour 2 days.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Arequipa City tour<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Nasca Lines overflight.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour in the Ballestas Islands.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> City tour in Ica, visit the
                            vineyards.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour in the Huacachina Oasis, ride in
                            the
                            sand car, and Sandboarding.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> A guided trip by bus from Cusco to
                            Puno,
                            (6:50 a.m to 5:00 p.m).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Roundtrip train tickets Ollantaytambo
                            -
                            Aguas Calientes (Machupicchu) - Poroy (Cusco).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Bus tickets up and down Aguas
                            Calientes -
                            Machupicchu - Aguas Calientes.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Buffet lunch in the Sacred Valley of
                            the
                            Incas.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Buffet lunch on the trip from Cusco
                            to
                            Puno.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Lunch at Titicaca Lake.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Lunch in Aguas Calientes Machu
                            Picchu in
                            Café Inkaterra Restaurant.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Trip by bus from Puno to Chivay
                            Colca.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Trip by Bus from Arequipa to
                            Nasca.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Trip by bus from Nasca to
                            Paracas.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Trip by Bus from Paracas to Ica and
                            Ica
                            to Lima.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Trip by Bus from Paracas to
                            Lima.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 3 Nights Hotel Stay in Cusco<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 2 Nights Hotel Stay in Puno.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Night Hotel Stay in Aguas Calientes
                            -
                            Machu Picchu.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Night Hotel Stay in Lima City.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 NiightHotel Stay in Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Night Hotel Stay in Colca.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 2 Nights Hotel Stay in Paracas.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 11 Buffet breakfast at the
                            Hotels.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Assistance and daily guidance by our
                            professional staff in Tourism.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> All taxes of Law.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> The tours are in group service.
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus"></i> Meals: Lunch and Dinner not described in the Tourist
                            Package.<br>
                            <i class="fa fa-minus"></i> *International flights.
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus"></i> Our prices include Inca Rail the Executive Train service for
                            your trip to
                            Machupicchu.<br>
                            <i class="fa fa-minus"></i> Important: The hotel reservation is subject to space
                            availability - Prices do not
                            include VAT for Peruvian passengers and foreigners residing in Peru.<br>
                            <i class="fa fa-minus"></i> You can request the Vistadome Executive train service
                            Increasing 45 Dollars per
                            person.<br>
                            <i class="fa fa-minus"></i> You can request Hiram Bingham the luxury train service
                            Increasing 820 Dollars per
                            person<br>
                            <i class="fa fa-minus"></i> You can request the tour package in private service. (Check
                            rates with us).<br>
                            <i class="fa fa-minus"></i> People of Peruvian, Ecuadorian, Bolivian, and Colombian
                            nationalities have access
                            to a special discount, for being members of the CAN.
                        </div>
                    </div>
                    @include('layouts.payments')
                    <div id="separador"></div>
                    <div class="form text-center">
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-13-days"
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
                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner vc_custom_1461228417147">
                            <div class="wpb_wrapper">
                                <div class='travel-item'>
                                    <div class='entry-img'>
                                        <a class='entry-link text-center' href="peru-20-days-tour">
                                            <img src='img/thumbnail/llama-peru.JPG' alt=" Peru, cusco en los andes" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href='peru-20-days-tour' class='button'>Perú for 20 days</a>
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
                                        <a class='entry-link text-center' href="cusco-6-days-5-nights">
                                            <img width="400" height="400" src='img/thumbnail/cusco-01.JPG'
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Cusco tours de 6 días" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href="cusco-6-days-5-nights" class='button'>Cusco for 6 days</a>
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
                                        <a class='entry-link text-center' href="Sacred_Valley">
                                            <img width="400" height="400" src="img/thumbnail/chincheros.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas"
                                                srcset="img/thumbnail/chincheros.jpg 400w"
                                                sizes="(max-width: 400px) 100vw, 400px" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="Sacred_Valley">Sacred Valley</a>
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