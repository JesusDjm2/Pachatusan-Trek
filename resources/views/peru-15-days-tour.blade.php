@extends('layouts.general-en')
@section('metas')
    <title>15 days in Perú - Peru for 15 days - Machu Picchu - Sacred Valley - City Tours - Puno - Arequipa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Perú for 15 days, 15 days in Perú, Tour in Peru 15 days, Peru 15 days tour, exclusive Peru tour, luxury tour in Peru" />
    <meta name="description"
        content="Come and enjoy what Peru has to offer its visitors. 15 days tour in Peru. amazing Tour in Perú!" />
	<meta propertye="og:description"
        content="Come and enjoy what Peru has to offer its visitors. 15 days tour in Peru, amazing Tour in Perú!" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-15-days-tour">
    <meta property="og:title"
        content="15 days in Perú - Peru for 15 days - Machu Picchu - Sacred Valley - City Tours - Puno - Arequipaa">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/cusco-maravilloso.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-15-days-tour" />
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
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="botondjm">Language
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                        </a>
                                        <ul>
                                            <li><a href="peru-15-dias">ES</a></li>
                                            <li><a>EN</a></li>
                                        </ul>
                                    </li>
                                    <li id=" wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="peru-15-dias">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                <h1><?php $tour="TOUR IN PERÚ FOR 15 DAYS"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
                                                                    - Arequipa - Nasca</p>
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
                    <a>Perú 15 Days</a>
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
                        <h1 id="titulo1"> TOUR IN PERÚ FOR 15 DAYS </h1>
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

                    <h5>Overview</h5>
                    <p>
                        With a spectacular 15-day tour around Peru, you will get to know the most beautiful cities that
                        Peru offers. Lima, Cuzco, Trujillo, Puno, Arequipa, Nasca.</p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Welcome in the Lima airport, City tour & Huaca Pucllana:</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Travel by Touristic Bus from Lima to Paracas and from Paracas to Nazca.</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Flight over the Nazca Lines and Travel to Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Flight over the Nazca Lines and Travel to Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Tour in the Colca Canyon.</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>Colca Canyon tour & return to Arequipa & travel to
                                    Puno.</td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Lake Titicaca Tour, Floating Islands of Uros and Taquile.</td>
                            </tr>
                            <tr>
                                <th>DAY 08</th>
                                <td>Guided trip by Bus from Puno to Cusco.</td>
                            </tr>
                            <tr>
                                <th>DAY 09</th>
                                <td>City Tour in Cusco.</td>
                            </tr>
                            <tr>
                                <th>DAY 10</th>
                                <td>Travel by Train to Machupicchu, Overnight stay in Aguas Calientes.</td>
                            </tr>
                            <tr>
                                <th>DAY 11</th>
                                <td>View of the Sunrise - Machu Picchu, optional: Huaynapicchu Mountain.</td>
                            </tr>
                            <tr>
                                <th>DAY 12</th>
                                <td>Sacred Valley of the Incas.</td>
                            </tr>
                            <tr>
                                <th>DAY 13</th>
                                <td>Free Day in Cusco.</td>
                            </tr>
                            <tr>
                                <th>DAY 14</th>
                                <td>Trip from Cusco to Lima.</td>
                            </tr>
                            <tr>
                                <th>DAY 15</th>
                                <td> Transfer from the Hotel to the Airport.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <h2 class="h2-tours">DAY 1. Welcome to the Lima airport, City tour in Lima with a visit to the
                        Huaca
                        Pucllana</h2>
                    <p>
                        On this day we will be waiting for you at the airport in the city of Lima at the arrival time of
                        your flight to give you a warm welcome at the "Jorge Chávez" international airport and transfer
                        you to the Hotel.<br><br>
                        In the afternoon we will pick you up from your hotel to start the City tour in <strong> "The
                            City of
                            Kings" </strong> Lima, on the way we will make a stop in the smallest district of Lima,
                        "Barranco" where
                        its famous Bridge of Sighs stands out, the Hermitage and the monument to Isabel Granada Larco
                        "Chabuca Granda". We continue our tour in the tourist transport to Miraflores where we will
                        visit the “Parque del Amor” located on the boardwalk, from where beautiful photos can be taken
                        overlooking the Pacific Ocean, we will have a panoramic view of the Huaca Pucllana, a pre-Inca
                        temple religious center and administrative area inhabited between the 3rd and 8th centuries AD,
                        then we will take a walk through the park of olive trees, which date back to the Viceroyalty
                        with an area of 23 hectares.<br><br>
                        With 6 km of travel, we will arrive at the gates of the historic center of Lima where you will
                        appreciate the Palace of Justice, the Walk of Naval Heroes, the French Palace, and colonial
                        buildings such as the Plaza Mayor, the Government Palace, the Archbishop's Palace, the Basilica
                        Cathedral, the Municipal Palace, Plaza San Martin, among others. We visit the BCR Museum, where
                        you can see a collection of gold from Peru and a selection of ceramics, goldsmiths, and textiles
                        from various pre-Columbian cultures (subject to museum hours and access to the historic center).
                        Following our tour of the Church and Convent of San Francisco, we will visit its impressive
                        underground crypts known as Catacombs. Return to the hotel.

                    </p>
                    <img src="img/tours/lima-peru-tour.jpg" class="img-fluid" alt="Tour en Lima Perú"><br><br>
                    <h2 class="h2-tours">DAY 2. Travel by Touristic Bus from Lima to Paracas and from Paracas to
                        Nasca.</h2>
                    <p>
                        After having our breakfast, we will go to the terminal of the Cruz del Sur tourism company where
                        we will board the bus in VIP Cruise service to <strong> Paracas </strong>, where our staff will
                        be waiting for you
                        to transfer you to the port of Paracas, where we will start the tour to <strong>the Ballestas
                            Islands</strong>
                        passing through "El Candelabro" a gigantic image on the slope of a hill. Arriving at the "Islas
                        Ballestas", the different islands will be visited for two hours, observing the different species
                        of sea lions, seals, penguins, and guano birds. After arriving at the port we will make the tour
                        to the "Paracas" sea lion reserve. In the afternoon we will go to the Paracas terminal, from
                        where we will take the bus to the city of Nasca.
                    </p>

                    <h2 class="h2-tours">DAY 03: Flight over the Nasca Lines and Trip to Arequipa.</h2>
                    <p>
                        After breakfast, we will transfer you to the Nasca aerodrome, for a 45-minute flight over the
                        "Pampas de Nasca", where the ancient Pre-Incas drew gigantic figures of animals and plants with
                        a purpose not yet discovered, many believe that these figures were made by aliens, among which
                        are the monkey, the spider, the hummingbird, etc. <br> Then there will be a visit to the
                        "Chauchillas
                        Cemetery" after which passengers will be transferred to the Nasca bus terminal to make their
                        trip to the city of "Arequipa" which usually takes 9 hours, where our staff will be waiting for
                        you. to welcome them and take them to their hotel.
                    </p>

                    <h2 class="h2-tours">DAY 04: City tour in Arequipa.</h2>
                    <p>
                        After breakfast we will pick you up to go to the city center where we will start an interesting
                        tour, our first stop takes place in one of the most impressive architectural monuments of the
                        city, is the magnificent Monastery of Santa Catalina, a city in miniature that sheltered the
                        Arequipeñan nuns for more than 400 years.<br> Later we will pass through the beautiful Plaza de
                        Armas, beautifully surrounded by beautiful colonial arches and we will visit the beautiful
                        Cathedral of Arequipa, which we will enter with our local guide to appreciate its impressive
                        works of art, as well as its imposing structure. <br>Finally, we will visit the Museum of Andean
                        Sanctuaries where we will see the remains of the mummy called Juanita, a spectacular find of a
                        girl belonging to the Inca nobility that was discovered on the cold slopes of the snowy
                        Ampato.<br>
                        In the afternoon we will take the tourist bus that will take us to the city of Puno, where we
                        will spend the night in a hotel.
                    </p>

                    <h2 class="h2-tours">DAY 05: Tour the Colca Canyon.</h2>
                    <p>
                        Early in the morning, you will embark on an incredible journey of approximately 4 hours, bound
                        for the Colca Canyon, one of the deepest canyons in the world (3,400 meters), passing through
                        Pampa Cañahuas, located in the Aguada Blanca National Reserve, habitat of vicuñas and alpacas
                        (camelids from South America).
                        <br>The highest point of the route is 4,900 meters above sea level.
                        On the route, we will appreciate pre-Columbian terraces that are still cultivated by the native
                        Collaguas. Arriving at the Colca Valley, we will transfer you to your respective hotel.
                        In the afternoon, we recommend you rest and acclimatize to the altitude.<br> If you are in good
                        physical condition, you will have free time to take a walk around the hotel or take a refreshing
                        bath in the nearby hot springs.

                    </p>
                    <img src="img/condor.png" class="img-fluid" alt="Mirador del Condor"><br><br>
                    <h2 class="h2-tours">DAY 06: Tour in the Colca Canyon and Cruz del Cóndor, return to Arequipa
                        and travel to
                        Puno.</h2>
                    <p>
                        Very early in the morning, we will leave for <strong> "La Cruz del Cóndor"</strong>, where you
                        can usually see the
                        largest bird in the world in full flight. During the return, we will visit the towns of Yanque,
                        Coporaque, Achoma, and Maca. A good opportunity to appreciate the life of the inhabitants of
                        these towns, which has not changed much since Inca times. In the afternoon, after lunch, we will
                        drive you to Puno, where we will be waiting for you to transfer to your hotel in Puno.
                    </p>


                    <h2 class="h2-tours">DAY 07: Lake Titicaca Tour, Floating Islands of Uros and Taquile.</h2>
                    <p>
                        We will pick you up at your hotel at 6:30 a.m. approximately, to transfer you to the Port and
                        start the tour in a tourist boat to the surprising and majestic "Uros Islands", arriving at
                        approximately 07:20 in the morning.<br>
                        <strong>Uros:</strong> These islands are artificial floors, made with superimposed and
                        skillfully interwoven
                        totora. During the journey the guide provides extensive information about Lake Titicaca, the
                        legends of the Uros, their uses, customs, and folklore;
                        <strong>Taquile:</strong> Arriving in Taquile, we will go to its Plaza de Armas, free time to
                        shop. Taquile
                        Island presents us with fabrics of an impressive quality comparable only with the looms of the
                        Paracas or Egyptian culture, declared Cultural Patrimony of Humanity. <br>At 12:40 noon you will
                        taste an exquisite lunch, setting sail from the Port of Taquile at 2:30 pm and arriving in Puno
                        at approximately 5:30 pm, to then transfer you to your hotel.


                    </p>
                    <img src="img/tours/puno-peru-islands.jpg" class="img-fluid" alt="Tour Nazca lines"><br><br>

                    <h2 class="h2-tours">DAY 08: Tourist Circuit from Puno to Cusco.</h2>
                    <p>
                        After breakfast, we will pick you up from the hotel and take you to the Tourism bus station
                        where it will take you on a tour that lasts (approximately 8 hours) where you will enjoy 4
                        excursions and guided tours, reaching the pass of La Raya at 4,335 meters above sea level. and
                        the Inca Aymara Museum of Pucará, arriving at the city of Sicuani at noon, including a delicious
                        buffet lunch. <br>
                        Then we will continue with our trip; where each visit has a duration of (20 to 40 minutes on
                        average), we will visit the Inca temple of Raqchi, the Andahuaylillas temple, or the Sistine
                        Chapel of America, making your excursion very pleasant. Upon arrival at the imperial city of
                        Cusco, we will be waiting for you to transfer you to your hotel, where you will spend the night.

                    </p>

                    <h2 class="h2-tours">DAY 09: City Tour in Cusco</h2>
                    <p>
                        In the morning you will have a free morning to do what you want, shopping, walking through the
                        picturesque streets of the city of Cusco, taking pictures. <br>
                        After your lunch we will pick you up from your hotel at the time indicated by your travel agent
                        to start and enjoy a guided tour at 1:35 in the afternoon where you will be able to see: The old
                        Plaza de Armas of Cusco, the Cathedral, the Santo Domingo Monastery, the Coricancha Temple and
                        archaeological sites such as Quenqo, Puca Pucara, Tambomachay and the great fortress of
                        Sacsayhuamán: Returning to the city of Cusco at 6:45 pm. Finally, you will spend the night in a
                        hotel in Cusco.

                    </p>

                    <h2 class="h2-tours">DAY 10: Travel by Train to Machupicchu, Tour Machupicchu, night in a
                        hotel in Aguas Calientes.</h2>
                    <p>
                        Very early according to the choice of the chosen train service: <strong> Expedition Train
                        </strong> (included in
                        the Tourist Package) or <strong>Vistadome </strong> (adding 45 dollars), we will go through your
                        hotel in the city
                        of Cusco to transfer you to the Poroy train station (at 25 minutes from Cusco), where you will
                        board the train to the town of Aguas Calientes (altitude 2350 masl), the travel time on both
                        trains is approximately 3 hours and 40 minutes. <br>
                        In the town of Aguas Calientes, our professional tour guide will be waiting for you, who will
                        guide you to take the bus up to the majestic and impressive citadel of Machupicchu (altitude
                        2450 masl); the bus trip lasts approximately 25 minutes, together with the guide they will enter
                        Machupicchu where they will have a guided tour of 2 hours with approximately 30 minutes being
                        able to visit the Main Square, the Circular Tower, the Sacred Solar Clock, the Royal Rooms, the
                        Temple of the Three Windows and the Cemeteries, finally, you will have free time to continue
                        exploring the magical Inca Citadel of Machupicchu and return on your own to the town of Aguas
                        Calientes where you can have lunch and take a walk in the town of Aguas Calientes you can choose
                        between walking around from Aguas Calientes, visit the Machupicchu museum or visit the thermal
                        baths. <br> Finally, spend the night in the selected hotel in Aguas Calientes - Machupicchu.

                    </p>

                    <h2 class="h2-tours">DAY 11: View of the sunrise in Machupicchu, Optional: Ascent to
                        Huaynapicchu and return train to Cusco.</h2>
                    <p>
                        After your breakfast, according to the time of your entrance ticket to Machupicchu, you will be
                        able to return to the entrance and visit the Inca citadel on your own. Before or after your time
                        of entry to Machupicchu, depending on the time established in your tickets, you will have free
                        time to explore Machupicchu by yourself or use your tickets to ascend to the Huaynapicchu
                        Mountain or Machupicchu Mountain (Note that in case you want to ascend to the
                        <strong>Huaynapicchu
                            mountain</strong> has to reserve at least three months in advance since the spaces are
                        limited, if there
                        are no spaces in the Huaynapicchu Mountain, your reservation will be in the Machupicchu
                        Mountain, likewise the time of entry to any of the mountains may vary according to availability
                        of spaces, the schedule will be confirmed in your reservation or you can request at the time of
                        contact). <br> You can visit Huaynapicchu Mountain (3 hours of visit) from where you can see a
                        spectacular view of the entire Machupicchu valley, or you can visit Machupicchu Mountain (4
                        hours of visit) which gave the name to Machupicchu with a unique landscape beauty and a
                        spectacular view.<br>
                        This travel program is ideal to tour Machupicchu in its entirety and take pictures with enough
                        time until the time that you consider convenient to return by bus to Aguas Calientes and thus
                        have lunch in the same town.<br>
                        In the afternoon you must board the Expedition train (included in the Tourist Package) to Poroy
                        or Ollantaytambo where our staff will be waiting for you at the train station to transfer you to
                        your hotel in Cusco.<br>
                        The advantage of this tour is that you will be able to get to know Machupicchu without many
                        people and with much more time available.

                    </p>
                    <img src="img/blog/machu-picchu-exclusive.jpg" class="img-fluid"
                        alt="Responsive image"><br><br>

                    <h2 class="h2-tours">DAY 12: Tour the Sacred Valley of the Incas.</h2>
                    <p>
                        We will pick you up from your hotel at the time indicated by your travel agent, starting the
                        tour at 9:00 am, heading along a paved road to the town of Pisac, located 32 km from the city of
                        Cusco, Pisac being a typical town. artisanal and archaeological Andean where the famous Craft
                        Fairs are held in their typical markets where you can make purchases and enjoy a guided tour of
                        the archaeological sites of the place; Continuing with our tour of approximately one hour we
                        will pass through different towns such as Coya, Lamay, the province of Calca, Yucay appreciating
                        the scenic beauty of the Sacred Valley of the Incas. <br>We will go to the town of Urubamba
                        where we
                        will enjoy a delicious buffet lunch in the cozy restaurant "Tunupa".<br>
                        Later we will go to the town of Ollantaytambo (It is the only Inca city in Peru that is still
                        inhabited) to visit the archaeological complex of the same name; Returning to the city of Cusco,
                        we will visit the archaeological site of Chinchero and its chapel.<br> We will return to the
                        city of
                        Cusco at 7:00 pm.

                    </p>
                    <h2 class="h2-tours">DAY 13: Free Day in Cusco. </h2>
                    <p>
                        Breakfast at the Hotel.<br>
                        Optional: Tour in the South Corridor for 25 dollars.<br>
                        Optional: Tour the salt mines of Maras and Andenes de Moray for 25 dollars.<br>
                        Optional: Tour in the Laguna de Huamantay Salkantay route for 45 dollars.<br>
                        Optional: Tour in the Mountain of 7 colors Vinincunca for 45 dollars.<br>
                        Hotel night in Cusco.

                    </p>
                    <h2 class="h2-tours">DAY 14: Travel from Cusco to Lima.</h2>
                    <p>
                        Breakfast at the Hotel.<br>
                        Transfer from the hotel in Cusco to the airport.<br>
                        Travel by plane from Cusco to Lima.<br>
                        Transfer from Lima airport to the Hotel.<br>
                        Free day in Lima.<br>
                        Hotel night in Lima.

                    </p>
                    <h2 class="h2-tours">DAY 15: Transfer to the airport.</h2>
                    <p>
                        Breakfast at the Hotel.<br>
                        Transfer from the Hotel to the Lima International Airport.

                    </p>

                    <div id="separador"></div>
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                        style="text-transform: uppercase; font-size: 12px; font-weight: 700">
                        <li class="nav-item">
                            <a class="nav-link active" id="drop" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">Include</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Not Include</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Important</a>
                        </li>
                    </ul>
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <i class="fa fa-check" aria-hidden="true"></i>All transfers: Hotels - Airports-Hotels,
                            Hotels - Bus terminal - hotels, Hotels-train stations - Hotels.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> All income to the tourist attractions to
                            visit: 2 entrance tickets for the Inca citadel of
                            Machupicchu plus two round trip bus tickets for the first and second day.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Plane ticket: Cusco - Lima.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Travel by bus from Lima to Paracas.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour to the Ballestas Islands.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tour to the Paracas reserve.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Travel by bus from Pisco to Nazca.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Tour to the Enigmatic Nazca lines 40
                            minutes (according to time).<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Travel by bus from Nazca to Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>City tour in Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Tour to the Colca Canyon (the deepest
                            canyon in the world), Vicuñas, and Chivay reserve.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Tour to the Colca Canyon, Cruz del Cóndor
                            View of Condors and Return to Arequipa.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Travel by bus from Arequipa to Puno.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Tour to Lake Titicaca the Sacred Lake of
                            the Incas, Island of Los Uros, Taquile.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Guided tour from Puno to Cusco (All day
                            from 7 am to 5 pm approximately).<br>
                            <i class="fa fa-check" aria-hidden="true"></i>City Tour in the City of Cusco and
                            Surroundings (In the afternoon from 2:00 p.m. to 6:30
                            p.m.).<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Tour to Machu Picchu Expedition train.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Tour to the Sacred Valley of the Incas (All
                            day from 8:30 am – 7:00 pm).<br>
                            <i class="fa fa-check" aria-hidden="true"></i>01 Buffet Lunch in the Sacred Valley of the
                            Incas Restaurant Tunupa Urubamba.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>Round trip train tickets from Ollantaytambo
                            - Machupicchu (Aguas Calientes) - Cusco.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>City tour to the “City of Kings” Lima.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>14 nights in hotels according to your
                            accommodation.<br>
                            <i class="fa fa-check" aria-hidden="true"></i>14 Breakfasts at the Hotels.<br>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus" aria-hidden="true"></i> Flights Lima/Cusco/Lima.<br>
                            International flights<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Full board (lunches and dinners
                            not specified in the program)
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus" aria-hidden="true"></i> – Hotel reservations are subject to space
                            availability.
                            – Prices do not include VAT for Peruvian passengers and foreign residents in Peru.

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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-15-days-tour"
                            data-width="100%" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br>
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
                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759 text-center">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner vc_custom_1461228417147">
                            <div class="wpb_wrapper">
                                <div class='travel-item'>
                                    <div class='entry-img'>
                                        <a class='entry-link' href="cusco-5-dias-4-noches">
                                            <img src='img/thumbnail/llama-peru.JPG' alt=" cusco en los andes" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href='cusco-5-dias-4-noches' class='button'>5 days in Cusco</a>
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
                                        <a class='entry-link' href="cusco-6-dias-5-noches">
                                            <img width="400" height="400" src='img/thumbnail/cusco-01.JPG'
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Cusco tours de 6 días" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href="cusco-6-dias-5-noches" class='button'>6 days in Cusco</a>
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
                                        <a class='entry-link' href="peru-10-days-9-nights">
                                            <img width="400" height="400" src="img/thumbnail/chincheros.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas"
                                                srcset="img/thumbnail/chincheros.jpg 400w"
                                                sizes="(max-width: 400px) 100vw, 400px" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="peru-10-days-9-nights">Perú for 10 days</a>
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
