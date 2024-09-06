@extends('layouts.general-en')
@section('metas')
    <title>20 days in Perú- Peru for 20 days - Machu Picchu - Sacred Valley - City Tours - Puno - Arequipa - Trujillo -
        Puerto Maldonado
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Perú for 20 days, 20 days in Perú, Tour in Peru 20 days, Peru 20 days tour" />
    <meta name="description"
        content="Come and enjoy what Peru has to offer its visitors. 20 days tour in Peru. amazing Tour in Perú!" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-20-days-tour">
    <meta property="og:title"
        content="20 days in Perú- Peru for 20 díays - Machu Picchu - Sacred Valley - City Tours - Puno - Arequipa - Trujillo - Puerto Maldonado">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/cusco-maravilloso.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-20-days-tour" />
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
                                            <button type="button" class="botondjm">Language
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                        </a>
                                        <ul>
                                            <li><a href="peru-20-dias-tour">Español</a></li>
                                            <li><a>Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="peru-20-dias-tour">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                <h1><?php $tour="TOUR IN PERÚ FOR 20 DAYS"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
                                                                    - Arequipa - Nasca - Puerto Maldonado </p>
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
                    <a href="around">Around Perú</a> /
                    <a>Perú 20 Days</a>
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
                    <div>
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <h1 class="text-center" style="font-size:22px; font-weight:500; margin-top:30px">
                                    Similar Tours
                                </h1>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-5-days-4-nights" class="button">Perú 5 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-5-days-4-nights" class="button">Cusco 5 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="cusco-6-days-5-nights" class="button">Cusco 6 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-8-days-7-nights" class="button">Perú for 8 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-12-days" class="button">Tour in Perú for 12 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-18-days-tour" class="button">Tour in Perú for 18 days</a>
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
                        <h2 id="titulo1"> PERÚ FOR 20 DayS </h2>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178">Reserve 30 days in advance

                        </p>
                    </center>
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
                    <h5 style="padding: 0px 1px 0px 20px;">Overview</h5>
                    <p style="padding: 0px 1px 0px 20px;">With a spectacular 20-day tour around Peru, you will get to
                        know the most beautiful cities that Peru offers. Lima, Cuzco, Trujillo, Puno, Arequipa, Nasca.
                    </p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Welcome to Lima</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Tour to the "Islas Ballestas" and "Reserva de Paracas".</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Flight over the "Nasca Lines"</td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Flight from Lima Arequipa and City Tour in Arequipa</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Heading to the Colca Canyon and Vicuña Reserve</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td> Colca Canyon and view of the condors</td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Travel by bus from Arequipa to Puno</td>
                            </tr>
                            <tr>
                                <th>DAY 08</th>
                                <td>Tour to Lake Titicaca, Uros and Taquile Islands</td>
                            </tr>
                            <tr>
                                <th>DAY 09</th>
                                <td>Tourist trip from Puno to Cusco visiting "Raqchi"</td>
                            </tr>
                            <tr>
                                <th>DAY 10</th>
                                <td> City tour in Cusco.</td>
                            </tr>
                            <tr>
                                <th>DAY 11</th>
                                <td>Tour to the Sacred Valley of the Incas</td>
                            </tr>
                            <tr>
                                <th>DAY 12</th>
                                <td>Free day in Machu Picchu "The lost city of the Incas"</td>
                            </tr>
                            <tr>
                                <th>DAY 13</th>
                                <td>Sunrise View of Machupicchu and Huaynapicchu"</td>
                            </tr>
                            <tr>
                                <th>DAY 14</th>
                                <td>Free Day in Cusco (Optional Rafting on the Vilcanota River or
                                    Tipón Tour)</td>
                            </tr>
                            <tr>
                                <th>DAY 15</th>
                                <td>Flight from Cusco to Puerto Maldonado and Tour to Monkey Island</td>
                            </tr>
                            <tr>
                                <th>DAY 16</th>
                                <td>Tour to "La Cocha Perdida".</td>
                            </tr>
                            <tr>
                                <th>DAY 17</th>
                                <td> Tour to the Gamitana River (Briolo).</td>
                            </tr>
                            <tr>
                                <th>DAY 18</th>
                                <td>Trip from Puerto Maldonado to Lima and City tour in Lima</td>
                            </tr>
                            <tr>
                                <th>DAY 19</th>
                                <td>Tour to Pachacamac.</td>
                            </tr>
                            <tr>
                                <th>DAY 20</th>
                                <td>Transfer to the airport and farewell</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <h2 class="h2-tours"> DAY 1. Welcome in Lima</h2>
                    <p>
                        After you set foot on Peruvian soil, our staff will welcome you at the Jorge Chávez airport in
                        Lima and we will transfer you to the hotel. After a break at an indicated time, we will transfer
                        you to the chosen Restaurant, where you will receive a Peruvian cooking class, the Chef will
                        prepare three representative dishes of Peruvian cuisine (cause stuffed with chicken, fish
                        ceviche, and lomo saltado), in which He will make a brief explanation of the supplies to be
                        used, cooking techniques for the preparation and decoration of the dish. Then we will enjoy a
                        welcome buffet lunch and at night we will rest at the selected hotel.
                    </p>

                    <h2 class="h2-tours">DAY 2. Tour to the "Islas Ballestas" and "Reserva de Paracas"</h2>
                    <p>
                        After having our breakfast, we will go to the port of Paracas, where we will begin the tour to
                        the Ballestas Islands passing through "El Candelabro" a gigantic image on the side of a hill.
                        Upon arrival at the Ballestas Islands, the different islands will be visited for two hours,
                        observing the different species of sea lions, seals, penguins, and guano birds. After arriving
                        at the port we will make the tour to the Paracas reserve. In the afternoon we will go to the bus
                        terminal of the city of "Paracas" to take your bus to the city of "Nasca" the trip usually lasts
                        3 hours, already in Nasca, our staff will be waiting for you to transfer you to your hotel.
                    </p>

                    <h2 class="h2-tours">DAY 03: Flight over the "Nasca Lines"</h2>
                    <p>
                        In the morning having breakfast, we will transfer you to the Nasca airport, for a 30-minute
                        flight over the Pampas de Nasca, where the ancient pre-Incas drew gigantic figures of animals
                        and plants with a purpose not yet discovered, many believe that These figures were made by
                        extraterrestrials, among which are the figures of the monkey, the spider, the hummingbird, etc.
                        Then you will visit the "Chauchillas Cemetery", which is a necropolis that dates back more than
                        1000 years and belongs to the period of the Ica-Chincha culture. Then at 3:15 pm, you will be
                        transferred to the Nasca bus terminal to make your return trip to the City of Lima, where our
                        staff will be waiting to welcome you and take you to your hotel.
                    </p>
                    <img src="img/tours/rio-tahuayo.jpg" class="img-fluid" alt="Rio Tahuayo"><br><br>
                    <h2 class="h2-tours">DAY 04: Flight from Lima Arequipa and City Tour in Arequipa</h2>
                    <p>
                        After having your breakfast at the hotel, our staff will transfer you to the Lima airport, so
                        that you can board your flight to the city of Arequipa at dawn or in the morning the flight
                        lasts 80 minutes, and our staff will wait for you and transfer you to the hotel of your choice
                        in Arequipa. In the afternoon we will make the tour in the "White City" including the Convent of
                        Santa Catalina, without a doubt "The gem of Arequipa", finally opened to the public in 1970,
                        after having been in seclusion for 400 years, with an innumerable amount of pieces of colonial
                        art. Likewise, you will visit the Plaza de Armas, the cloisters of the Society of Jesus, and the
                        neighborhoods of Cayma and Yanahuara, with a magnificent view of the El Misti volcano, we will
                        also visit a colonial mansion called the Founder's Mansion.
                    </p>

                    <h2 class="h2-tours">DAY 05: Heading to the Colca Canyon and Vicuña Reserve</h2>
                    <p>
                        Early in the morning, departure by private bus to the Colca Canyon, passing through the foot of
                        the Chachani volcano. During the trip, you will cross the Cañahuas and Arrieros pampas where the
                        Vicuñas National Reserve is located, as well as Vizcachani, La Pulpera, Callalli, Sibayo and
                        Tuti Villages. You will reach an altitude of 4,000 meters above sea level where you will
                        appreciate the flora and fauna of the beautiful natural lagoons of Bofedales and Mar Trapped
                        together with giant rocks in the form of castles. At five in the afternoon arrival in Chivay, in
                        the Colca Valley. Lodging in the Colca Valley.
                    </p>

                    <h2 class="h2-tours">DAY 06: Colca Canyon and view of the condors</h2>
                    <p>
                        In the morning (05:30) breakfast at the hotel, to then leave for the Cruz del Cóndor where we
                        will stay for 2 hours approx. Place where you can appreciate in its greatest dimension the depth
                        of the Colca Canyon and also the flight of the Condor at close range. On the way back we will
                        observe archaeological remains, pre-Inca agricultural terraces, and other panoramic views of the
                        Colca Canyon. We will pass through the towns of Pinchollo, Madrigal, Lari, Maca, Achoma, and
                        Yanque, in the latter, we will make a stop, where we will be able to observe its typical Church,
                        its craft center, the typical clothing of its inhabitants, among others. Then we will return to
                        Arequipa to rest.
                    </p>


                    <h2 class="h2-tours">DAY 07:Travel by bus from Arequipa to Puno</h2>
                    <p>
                        We will have the morning free to visit Arequipa on our own. At 1:00 pm, we will take the bus
                        that in approximately 6 hours will take us to the lake city of Puno, on the way we will
                        appreciate the typical landscapes of the High Andean Zone of Peru. After 1 hour of travel, we
                        will make a stop at Pampa Cañahuas, which is a nature reserve that is destined for the
                        protection of South American camelids such as the vicuña, which, due to its fine and soft wool,
                        has been hunted almost to the point of its extinction. Afterward, we will see the great Stone
                        Forest of Imata in the distance, and then we will go to our next stop, the Lagunillas lagoon,
                        located in the Department of Puno at an approximate height of 4174 meters above sea level, a
                        suitable place to appreciate more of the fauna of the region, which in this case is made up
                        mostly of jewels, chocas and especially flamingos. At 7:30 pm we will arrive in Puno, where our
                        staff will pick you up and take you to the hotel.
                    </p>

                    <h2 class="h2-tours">DAY 08: Tour to Lake Titicaca, Uros and Taquile Islands</h2>
                    <p>
                        After having breakfast at the hotel you will be transferred to the port of Puno (Lake Titicaca)
                        where you will board the boat and then visit: "The Floating Islands of the Uros" for a space of
                        45 minutes, you will appreciate the customs of this island and its craft. Then we will also
                        travel by boat to visit: "La Isla Taquile" of great scenic, ethnic, cultural and archaeological
                        value, then we will also return by boat to the Port of Puno, there you will be picked up and
                        taken to the hotel or if you wish we can leave you in the center of Puno, and finally the night
                        will be spent at the selected hotel.
                    </p>
                    <img src="img/blog/linea-nazca-mono.jpg" class="img-fluid" alt="Tour Nazca lines"><br><br>
                    <h2 class="h2-tours">DAY 09: Tourist trip from Puno to Cusco visiting "Raqchi"</h2>
                    <p>
                        Having a good breakfast, we will pick you up from the hotel and take you to the bus station of
                        the company that will take you for a tour that lasts approximately 8 hours, we will have 4
                        excursions and guided visits to the tourist attractions of the southern corridor of the
                        altiplano, Arriving at the pass of La Raya at 4335 masl and the Inca Aymara museum of Pukará, at
                        noon in the city of Sicuani we will have a buffet lunch included in the tour, from there we will
                        continue with the tour. Each visit lasts from 20 to 40 minutes, visiting the Inca temple of
                        Raqchi, the Andahuaylillas temple, or the Sistine Chapel of America, makes our excursions
                        pleasant. Upon arrival at "Cusco", we will be waiting for you to transfer you to the hotel where
                        you will spend the night.
                    </p>

                    <h2 class="h2-tours">DAY 10: City tour in Cusco</h2>
                    <p>
                        After breakfast at the hotel, you will have the morning free to walk around and shop for
                        handicrafts and souvenirs from Cusco on your own. After your lunch, starting at 1:00 p.m. we
                        will begin the guided tour that includes visiting the center of the ancient city of Cusco, the
                        Plaza de Armas, the Cathedral, the Santo Domingo Monastery, the Coricancha Temple, and the
                        nearby ruins. of Qenqo, Puca Pucara, Tambomachay, and the fortress of Sacsayhuamán, built with
                        enormous rocks that until now remain an enigma the mobilization and use of these, there being no
                        stone quarries in the area. At approximately 7:00 pm we return to the selected hotel.
                    </p>

                    <h2 class="h2-tours">DAY 11: Tour to the Sacred Valley of the Incas</h2>
                    <p>
                        On this day we will make the tour to the Sacred Valley of the Incas, a tour that we start at
                        08:00 in the morning, picking you up from the hotel to go to Pisac, which is a typical market,
                        with picturesque terraces cultivated in the mountain. We will visit the archaeological group of
                        Pisac. It is also famous for its Fairs where you can buy beautiful handicrafts. Then we will go
                        to Urubamba where we have a buffet lunch included. Then we will go to the Ollantaytambo
                        Fortress, where there are descendants of the Incas who live in the houses of the Incas. Finally,
                        we go to Chinchero to see its market and the archaeological group with typical Spanish
                        superimpositions to the Inca constructions. The tour will end averaging 7:00 pm in the Plaza de
                        Armas of Cusco. We will spend the night in the selected hotel in Cusco.
                    </p>

                    <h2 class="h2-tours">DAY 12: Free day in Machu Picchu "The lost city of the Incas"</h2>
                    <p>
                        We will pass by your hotel in the city of Cusco 1 hour before the departure of your train, and
                        we will take you to the train station, located in the town of Poroy, then we will board the
                        "PERURAIL" company train and start the trip from Poroy - Cusco to the town of "Aguas Calientes"
                        (2000 masl) which lasts approximately 4 hours. Upon arrival at the town of Aguas Calientes, we
                        will go to our hotel, our guide will look for you at night to provide you with the necessary
                        information for the day of your tour, if you wish you can visit the Hot Springs or buy local
                        handicrafts.
                    </p>
                    <h2 class="h2-tours">DAY 13: Sunrise View of Machupicchu and Huaynapicchu"</h2>
                    <p>
                        After getting up very early and having breakfast, we will go up to the Inca citadel of
                        Machupicchu, followed by an excursion with our guide through the citadel of Machupicchu, for 2
                        hours, on the tour you will visit the most important sites of this city such as the Main Square,
                        the Circular Tower, the Sacred Solar Clock, the Royal Rooms, the Temple of the Three Windows and
                        the Cemeteries. Concluded the tour of the citadel of Machupicchu optionally: you can do the
                        trekking to the summit of Huaynapicchu or the Mountain sector, this will take a few hours, in
                        which you can enjoy the landscape and take in some impressive views (This visit is without a
                        Guide). Then we will go down by bus to Aguas Calientes and in the afternoon we will take the
                        train back to Ollantaytambo, where our staff will be waiting for you, to transport you by bus to
                        the city of Cusco and take you to your hotel.
                    </p>

                    <img src="img/blog/machu-picchu-exclusive.jpg" class="img-fluid"
                        alt="Responsive image"><br><br>
                    <h2 class="h2-tours">DAY 14:Free Day in Cusco (Optional Rafting on the Vilcanota River or
                        Tipón Tour)</h2>
                    <p>
                        After having breakfast, you will have the day off to visit the city of Cusco, you will be able
                        to walk its streets and visit its numerous museums and Colonial Churches, possessors of
                        invaluable treasures (Visits will be made on your own). You will also be able to get to know its
                        people and customs better, as well as acquire handicrafts and souvenirs of your trip. We will
                        spend the night in the selected hotel in Cusco. You can also do optional activities such as the
                        South Valley tour visiting Tipón and Pikillaqta or rafting on the Vilcanota River.
                    </p>
                    <h2 class="h2-tours">DAY 15: Flight from Cusco to Puerto Maldonado and Tour to Monkey Island
                    </h2>
                    <p>
                        After your breakfast at the hotel, we will transport you to the airport to take your flight to
                        Puerto Maldonado "Biodiversity Capital of the World". Arrival and welcome reception. We start a
                        tour of the city on our bus and then head to the Capitanía port to board the boat through the
                        Madre de Dios River. During the trip, we will observe the capybara, alligators, turtles, herons,
                        cormorants, and other species of animals. Accommodation in the lodge, we will have an exquisite
                        welcome drink, installation in our bungalows, and lunch. In the afternoon, accompanied by our
                        specialized guide, we will visit Monkey Island (5 minutes away from the lodge). During the walk,
                        we will observe extraordinary landscapes with an exuberant flora, which shelter in their
                        interior a variety of species of monkeys in their natural habitats such as maqui sapas,
                        capuchins, small lion monkeys, puffins, preserves, as well as other species such as the coati,
                        sloth bears, among others, and a wide variety of birds. We will complete the journey through the
                        island enjoying the sunset, the sunset is the most impressive in the jungle. Then we will return
                        to the lodge, to have dinner and rest.
                    </p>
                    <h2 class="h2-tours">DAY 16: Tour to La Cocha Perdida.</h2>
                    <p>
                        After breakfast, we will make internment walks to reach the Lost Cocha, which constitutes an
                        ecosystem of shelter and food for an immense variety of animals. There is the possibility of
                        observing otters, caimans, turtles, sachavacas, birds with multicolored plumage, the majestic
                        jaguar, and a variety of fish. This area is unique and remains intact, with huge swamps and
                        various aguajales. Then we will arrive at the extraordinary Amazon Viewpoint from where you can
                        appreciate the magical jungle, as well as take a pleasant canoe ride around the Lake. Return to
                        the lodge for lunch. In the afternoon we offer an optional visit to the botanical garden. If you
                        want to relax, we offer the Amazon pool. Then we will return to the lodge, to have dinner and
                        rest.
                    </p>
                    <h2 class="h2-tours">DAY 17: Tour to the Gamitana River (Briolo). </h2>
                    <p>
                        After breakfast, at the appointed time another excursion will be made through the Amazon jungle,
                        navigating the Madre de Dios River, then we will walk towards the Gamitana River, its origins
                        are located in the bowels of the virgin forest, in its journey it forms extensive navigable
                        channels through which we will return by canoe, closely appreciating the flora and fauna of the
                        area such as turtles, alligators, birds and a variety of insects, we can also practice fishing
                        and take a relaxing bath in the river, at night we will rest in our hostel.
                    </p>
                    <img src="img/tours/tour-maras-moray.jpg" class="img-fluid"
                        alt="Tour Maras Moray Cusco"><br><br>
                    <h2 class="h2-tours">DAY 18: Trip from Puerto Maldonado to Lima and City tour in Lima</h2>
                    <p>
                        After breakfast, you will be transferred to the Puerto Maldonado airport so you can board your
                        flight to Lima. The trip lasts approximately 2 hours and will take place in the morning; in
                        Lima, our staff will be waiting for you to transfer you to your hotel in Lima, in the afternoon
                        after a break we will begin our tour of the modern residential districts of Miraflores and San
                        Isidro. We will visit the financial center, the Golf, El Olivar, the Huaca Pucllana (the
                        pre-Inca ceremonial temple in the shape of a pyramid), and the Parque del Amor on the Malecón de
                        Miraflores. Continuing with our tour, we will go to the Historic Center of Lima, we will visit
                        the Plaza San Martin, its balconies and old mansions, the Plaza Mayor with its most important
                        buildings and finally, we will enter one of the most important convents of the 17th century. A
                        complete tour with the comfort and attention of modern tourist service.

                    </p>

                    <h2 class="h2-tours">DAY 19: Tour to Pachacamac</h2>
                    <p>
                        After having breakfast, we will pick you up at 09:00 am from your hotel to visit the Sanctuary
                        and Oracle of God Pachacamac or "Creator God of the World". Located 31 km south of Lima. A
                        sacred place of pilgrimage and ancestral worship, in which the Site Museum, the Pyramidal
                        Complex, of Temples, and Palaces of pre-Inca and Inca cultures stand out. The enigmatic Temples
                        of the Sun and the Moon, a place that was the shelter of the Virgins of the Sun. All this is
                        accompanied by a general view of the various facets of the city and its expansion through space
                        and time. as can be seen in the tour of the beaches of Costa Verde and Salto del Fraile, the
                        nature of the Pantanos de Villa (variety of birds especially in the summer), and the picturesque
                        neighborhoods in the surroundings. Then you will have the afternoon free and at night you will
                        rest in your selected hotel in Lima.
                    </p>
                    <h2 class="h2-tours">DAY 20: Transfer to the airport and farewell</h2>
                    <p>
                        After having breakfast and at the time indicated, we will transfer you from the hotel to Jorge
                        Chávez del Callao airport. We must be two hours before the time of our international flight, we
                        must take into account that we must pay an airport tax of US $ 36.00, after checking in, we will
                        say goodbye and you will take the flight to your respective country.

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
                            <i class="fa fa-check" aria-hidden="true"></i> 2 transfers from Lima airport to the
                            hotel.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 City tour to the "City of Kings"
                            Demonstrative classes of Peruvian Cuisine at the Restaurant "Señorío de Sulco"<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Welcome Buffet Lunch.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 4 nights in a selected hotel in Lima
                            includes breakfast (according to accommodation)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Night in a selected hotel in Nazca
                            includes breakfast (according to accommodation)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 2 nights in a selected hotel in Arequipa
                            includes breakfast (according to accommodation)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Night in a selected hotel in Colca
                            Canyon includes breakfast (according to accommodation)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 2 Night in selected Hotel in Puno includes
                            breakfast (according to accommodation)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 5 Nights in a selected Hotel in Cusco
                            includes breakfast (according to accommodation)<br>
                            <i class="fa fa-check" aria-hidden="true"></i>1 Night at a selected hotel in Aguas
                            Calientes includes breakfast (according to accommodation)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 3 Nights of Lodging at the Eco Amazonia
                            Lodge. (Puerto Maldonado)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Air ticket from Lima-Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Air Ticket from Cusco-Puerto
                            Maldonado.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Air Ticket from Puerto
                            Maldonado-Lima.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Transfer from the hotel in Lima to the
                            bus terminal in Lima<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Bus trip from Lima to Paracas (03:30 hrs
                            - 07:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Bus trip from Paracas to Nasca (17:10
                            hrs - 21:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Bus trip from Nasca to Lima (16:30 hrs -
                            00:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour to the Ballestas Islands<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Flight over the Nasca Lines (30
                            minutes)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 City tour around the City of
                            Arequipa<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour to the Colca Canyon<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Bus trip from Arequipa to Puno (14:00
                            hrs - 20:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour to Lake Titicaca, Island of Los
                            Uros, Taquile<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Guided tour from Puno to Cusco includes
                            1 lunch (All day from 06:30 hrs - 17:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 transfer from the Cusco bus terminal to
                            the selected hotel.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour to the City of Cusco and
                            Surroundings (In the afternoon from 1:00 p.m. - 6:30 p.m.)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour to Machu Picchu by Expedition
                            train (All day from 06:00 hrs - 20:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour to the Sacred Valley of the Incas
                            includes 1 buffet lunch (All day from 08:00 hrs - 19:00 hrs)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 City Tour in Lima<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 Tour to the Sanctuary of Pachacamac<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 16 breakfasts in the hotels<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 03 buffet lunches in Urubamba, Lake
                            Titicaca, and Sicuani.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 02 lunches (01 in the tour to the Sacred
                            Valley and 01 in Aguas Calientes).<br>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus" aria-hidden="true"></i> Flights Lima/Cusco/Lima.<br>
                            International flights<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Full meals (lunches and dinners
                            not specified in the program)
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            Hotel reservations are subject to space availability
                            – Prices do not include VAT for Peruvian passengers and foreign residents in Peru.

                        </div>
                    </div>
                    @include('layouts.payments')
                    <h5>Share</h5>
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
                    <div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-onepage-title="Services" data-onepage-slug="services" id="display"
        class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126 text-center">
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
                                        <a class='entry-link' href="cusco-5-days-4-nights">
                                            <img src='img/thumbnail/llama-peru.JPG' alt=" cusco en los andes" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href='cusco-5-days-4-nights' class='button'>Cusco 5 days tour</a>
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
                                        <a class='entry-link' href="cusco-6-days-5-nights">
                                            <img width="400" height="400" src='img/thumbnail/cusco-01.JPG'
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Cusco tours de 6 días" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href="cusco-6-days-5-nights" class='button'>Cusco 6 days Tour</a>
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
                                        <a class='entry-link' href="peru-9-days-8-nights">
                                            <img width="400" height="400" src="img/thumbnail/chincheros.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="peru-9-days-8-nights">Perú 9 days tour</a>
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