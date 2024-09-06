@extends('layouts.general-en')
@section('metas')
    <title>10 days in Perú - Peru for 10 days 9 nights - Machu Picchu - Sacred Valley - City Tours - Lima - Nazca
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="10 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury" />
    <meta name="description"
        content="We present you a detailed tour for 10 days in Perú, Exclusive tour for 10 days ein Perú" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-10-days-9-nights">
    <meta property="og:title" content="Perú 10 days - Machu Picchu - Sacred Valley - Lima - Puno">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/hermoso-peru.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-10-days-9-nights" />
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
                                    <li id="display">
                                        <a href='{{ route('peru-por-10-dias') }}'>
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2">
                                        <a href='{{ route('peru-por-10-dias') }}'>
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
                                                                <h1><?php $tour="PERÚ 10 DAYS 9 NIGHTS TOUR"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
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
                    <a>Perú 10 days tour</a>
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
                                <a href="peru-9-days-8-nights" class="button">Perú for 9 days</a>
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
                        <h1 id="titulo1">PERÚ 10 DAYS TOUR </h1>
                        <div id="separadordjm2"></div>
                        <p class="text-center"><i class="fa fa-clock-o"></i> 10 days</p>
                        <p class="text-center"><i class="fa fa-map-marker"></i> Lima - Cusco - Puno - Arequipa </p>
                        <p class="text-center" style="color: #0c8178">Reserve 30 days in advance</p>
                    </center>
                    <div id="separador"></div>
                    <h5>Overview</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Welcome in Lima, City tour with visit to the Huaca Pucllana.
                                </td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Welcome at the Airport and City tour in Cusco.</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Tour in the Sacred Valley & Travel by Train to Machu Picchu</td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>View of the Sunrise & Tour in Machu Picchu,
                                    Huaynapicchu Optional.</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Guided bus trip from Cusco to Puno.</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>Lake Titicaca tour, Floating Island of Uros and Taquile. </td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Travel by Bus from Puno to Colca Canyon.</td>
                            </tr>
                            <tr>
                                <th>DAY 08</th>
                                <td>Colca Canyon tour and Travel by bus to Arequipa. </td>
                            </tr>
                            <tr>
                                <th>DAY 09</th>
                                <td>Free Morning and City tour Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DAY 10</th>
                                <td>Transfer from the Hotel to the Arequipa airport.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARY:</h5>
                    <h2 class="h2-tours">Day 01: Welcome to the Lima airport, City tour in Lima with a visit to
                        the Huaca
                        Pucllana:</h2>
                    <p>On this day we will be waiting for you at the Lima airport at the time of your flight arrival to
                        give you a warm welcome at the international airport "Jorge Chávez" and transfer you to the
                        Hotel.<br><br>
                        In the afternoon we will pick you up from your hotel to start the City tour in "The City of
                        Kings" Lima, on the way we will make a stop in the smallest district of Lima, Barranco which
                        highlights its famous Bridge of Sighs, the Hermitage and the monument to Isabel Granada Larco
                        "Chabuca Granda". We will continue our tour in the tourist transportation to Miraflores where we
                        will see the Park of Love located on the boardwalk from where you can take beautiful photos
                        overlooking the Pacific Ocean, we will have a panoramic view of the Huaca Pucllana which is a
                        Pre-Inca religious temple and administrative center inhabited between the III and VIII centuries
                        A.C, then we will take a walk through the park of the olive trees, which date from the
                        Viceroyalty with an area of 23 hectares.<br><br>

                        With a route of 6 km, we will arrive at the historical center of Lima where we will appreciate
                        the Palace of Justice, the Walk of the Naval Heroes, the French Palace, and colonial buildings
                        such as the Plaza Mayor, the Government Palace, the Archbishop's Palace, the Basilica Cathedral,
                        the Municipal Palace, Plaza San Martín, among others. We will visit the BCR Museum, where you
                        can appreciate a collection of gold from Peru and a selection of ceramics, goldsmiths, and
                        textiles from various Pre-Columbian cultures (subject to museum hours and access to the historic
                        center). Following our Church and Convent of San Francisco tour, we will visit its
                        impressive subterranean crypts known as Catacombs.
                        Then, we will return to the hotel. </p>
                    <img src="{{ asset('img/galeria/huaca-pukllana-lima-tour.webp') }}" width="100%" loading="lazy"
                        alt="Huaca pucllana Tour in Lima">
                    <span>Picture: Huaca Pucllana</span><br><br>

                    <h2 class="h2-tours">Day 2. Welcome at the Airport and City tour in Cusco.</h2>
                    <p>On this day we will pick you up at your hotel to go to the Jorge Chavez international airport in
                        Lima to take the flight from Lima to Cusco, “The Archaeological Capital of America” (elevation
                        3350 meters on sea level), where you will be received at the airport by our staff with a sign
                        with your name to transfer you to your hotel, once in the hotel you will be offered a coca leaf
                        tea for the acclimatization of the place.<br><br>

                        After lunch, we will pick you up from your hotel to start and enjoy a guided Cusco tour at 1:35
                        pm where you can see the following tourist attractions:
                    </p>
                    <ul>
                        <li><strong> Temple of the Sun or Qoricancha:</strong> The convent of Santo Domingo in Cusco is
                            the
                            oldest
                            religious building in South America, known as the "Temple of the Sun". Currently, you can
                            see
                            the
                            wonderful Inca architecture linked to Spanish architecture which is a sample of our mestizo
                            culture.</li>
                        <li><strong> Cathedral:</strong> The Cathedral Basilica of the city of Cusco was built by native
                            Cusco workers and led by the Spaniards. It also has the finest expressions of colonial
                            goldsmithing as well as
                            wood carving and a valuable collection of canvases of the "Escuela Cusqueña" (School of
                            Cusco). Saqsayhuaman: It is one of the Inca constructions that most astonishes tourists who,
                            according to new hypotheses, point out that it would have been an important Inca ceremonial
                            center and not a fortress as previously believed. Its construction took more than seven
                            decades and required the strength of about 20,000 men.</li>
                        <li><strong>Qenqo:</strong> Ceremonial and ritual center, it was an amphitheater where
                            sacrifices were made, it is said that it was an Inca shrine. Its construction is made of
                            stones. There are passages,
                            canals, and staircases with engravings that represent the cougar, a very sacred animal for
                            the
                            Incas. El Qoricancha Cusco.</li>
                        <li><strong> Pucara:</strong> Former Tambo guard place along the Inca roads, this archaeological
                            site has:
                            enclosures, interior plazas, baths, aqueducts, watchtowers and an easily recognizable Inca
                            trail in synthesis the urban layout is highly adequate and functional.</li>
                        <li><strong>Tambomachay:</strong> Through its stairways, you can see crystalline waterfalls and,
                            according to what is
                            affirmed here, the liquid element for the Incas, "the water", was worshiped.
                            Returning to Cusco at 6:45 pm.</li>
                    </ul>


                    <h2 class="h2-tours">Day 3: Tour the Sacred Valley of the Incas and Travel by Train to Machu
                        Picchu.</h2>
                    <p> The Sacred Valley of the Incas tour begins at 8:40 am, but we will come to pick you up at your
                        hotel lobby before the tour starts. On this tour, you will visit the town of Pisac. Located 32
                        km from the city of Cusco.<br><br>
                        Pisac is a typical Andean artisan and the archaeological town where the famous Handicraft Fairs
                        are
                        held in their typical markets where you can make purchases and enjoy a guided tour of the
                        archaeological sites of the place; continuing with our tour of approximately one hour we will
                        pass through different towns such as: Coya, Lamay, the province of Calca, Yucay appreciating the
                        beauty of the Sacred Valley of the Incas. We will pass to the town of Urubamba where we will
                        enjoy a Valle Sagrado de los Incas delicious buffet lunch in the cozy restaurant “Tunupa”; Later
                        we will go to the town of Ollantaytambo (It is the only incan city in Peru that is still
                        inhabited) to visit the archaeological complex of the same name; having been an agricultural,
                        administrative, social, religious and military complex in the Tahuantinsuyo, ending the tour at
                        approximately 4:00 pm, then you will have free time in the town of Ollantaytambo, where you can
                        visit their craft market, their small streets that still keeps the layout of the Inca streets,
                        seeing the water run through its old canals, is like going back in time, ideal for taking
                        pictures or having a coffee in its Main Square.<br><br>
                        At the indicated time you must take the Ollantaytambo train leaving at 19:00 p.m. to the town
                        of Aguas Calientes where our staff will be waiting to transfer you to the selected
                        hotel.</p>
                    <img alt="ollantaytambo fortress" loading="lazy" width="100%"
                        src="{{ asset('img/galeria/ollantaytambo-sacred-valley-of-the-incas-exclusive.webp') }}">
                    <i>Picture: Ollantaytambo fortress</i><br><br>

                    <h2 class="h2-tours">Day 4: View of the Sunrise and Guided Tour in Machu Picchu with an
                        optional ascent
                        to Huaynapicchu Mountain.</h2>
                    <p>After your breakfast at the hotel, it’s an excellent opportunity to get up early and
                        observe a beautiful sunrise in Machu Picchu. In coordination with the guide, who will
                        visit you a day before at your hotel in Aguas Calientes, at about 5:30 a.m. you will
                        take the bus that will take you from Aguas Calientes Town to Machu Picchu (altitude 2450
                        m.a.s.l., approximately 25 minutes). Observe the sunrise in Machu Picchu by taking your
                        guided tour of approximately 2 to 3 hours, being able to visit: the Main Square, the
                        Circular Tower, the Sacred Solar Clock, the Royal Rooms, the Temple of the Three Windows,
                        and the Cemeteries.<br><br>

                        Before or after the guided tour in Machu Picchu, depending on your tickets schedule, You
                        will have time to explore on your own or use your tickets to climb Huayna Picchu or
                        Machu Picchu Mountain (Notice that if you want to climb Huaynapicchu mountain, it must
                        be booked at least 3 months in advance because of availability, the entrance times may
                        vary depending on the time of booking). Besides having the guided tour in Machu Picchu
                        citadel, You can also visit one of the following mountains (without a guide): Huaynapicchu
                        Mountain (from where a spectacular view of the entire valley of Machu Picchu is
                        appreciated) or Machu Picchu Mountain (the mountain that gave its name to Machu Picchu
                        with a unique landscape beauty) the entrance ticket to one of the Mountains will be
                        included and you can do it optionally, any of them will take you 3 hours approximately -
                        round trip.<br>
                        <img alt="Huayna Picchu mountain en Machu Picchu" loading="lazy" width="100%"
                            src="{{ asset('img/galeria/guia-de-viajes-huayna-picchu-travel.webp') }}">
                        <i>Picture: Huayna Picchu mountain en Machu Picchu</i><br><br>

                        This travel program is ideal for touring Machu Picchu in its entirety and taking
                        pictures with enough time until the time you think is convenient to return by bus to
                        Aguas Calientes where you can have lunch. In the afternoon you will have to board the
                        train to Poroy - Cusco where we will be waiting for you to transfer you to your hotel in
                        Cusco.<br><br>
                        The advantage of this tour is that you can get to know Machu Picchu without many people
                        and with much more time available.
                    </p>

                    <h2 class="h2-tours">Day 05: Guided bus trip from Cusco to Puno.</h2>
                    <p>We will pick you up from your hotel at 6:20 am to transfer you to the bus terminal for
                        your trip to Puno, (altitude 3818 meters above sea level).<br><br>

                        Our bus is equipped with toilets and is run by three people: a driver, a bilingual guide,
                        and an attendant. We will make a small visit to the church of Andahuaylillas, a church
                        dating from the early seventeenth century. It is known as the Sistine of South America
                        for the magnificent paintings it has and for its altar chiseled in gold. After 218 km we
                        will arrive at Raqchi, where the Inca temple of Wiracocha is located.<br><br>

                        After visiting Raqchi We will continue our way to Sicuani where we will enjoy a
                        delicious buffet lunch to go after to La Raya, located 4,335 meters high. Our next
                        destination will be Pucara, where we will visit the Lithic Museum and finally our tour
                        will be through high Andean esplanades under an unreal clarity.
                        In the city of Puno, our staff will be waiting for you to take you to your Hotel.</p>

                    <h2 class="h2-tours">Day 06: Lake Titicaca tour, Floating Island of Uros and Taquile. </h2>
                    <p>We will pick you up at your hotel at 7:00 a.m. approximately to go to the port to start the tour
                        in a boat to the amazing and majestic "Uros Islands", arriving there at 07:20 a.m.
                        approximately.<br><br>
                        The Uros: These islands are made of artificial floors, made with totora superimposed and
                        skillfully interwoven. During the trip, the guide provides extensive information about the Lake
                        Titicaca, the legends of the Uros, their uses, customs, and folklore Tour Lago Titicaca
                        Taquile: Arriving at Taquile, we will go to the Plaza de Armas, and then have free time to make
                        purchases.<br><br>
                        The Taquile Island presents textile art of an impressive quality comparable only to the looms of
                        the Paracas or Egypt culture and was declared Cultural Patrimony of Humanity. At 12:40 at noon
                        you will taste an exquisite lunch, after all, we will be leaving from the Port of Taquile at
                        2:30 p.m. and arriving in Puno at 5:30 p.m. to then transfer you to your hotel.</p>
                    <img alt="Titicaca Lake Puno" loading="lazy" width="100%"
                        src="{{ asset('img/galeria/Lago-Titicaca-Peru.webp') }}">
                    <i>Picture: Uros islands in Titicaca lake</i><br><br>

                    <h2 class="h2-tours">Day 07: Travel by Bus from Puno to Colca Canyon. </h2>
                    <p>Early in the morning, you will travel by bus to have an incredible 6-hour trip to the Colca
                        Canyon, one of the deepest canyons in the world (3,400 mts.), Passing through Pampa Cañahuas,
                        located in the Aguada Blanca National Reserve, habitat of vicuñas and alpacas (camelids of
                        South America). The highest point of the route is 4,900 m.a.s.l. on the route we will appreciate
                        pre-Columbian terraces that are still cultivated by the native collaguas. Arriving at the Colca
                        Valley, we will transfer you to your respective hotel.<br><br>

                        In the afternoon, we recommend you rest and acclimate to the height. If you are in good
                        physical condition, you will have free time to take a walk around the hotel or take a
                        refreshing bath in the nearby hot springs. </p>

                    <h2 class="h2-tours">Day 08: Colca Canyon tour and Travel by bus to Arequipa. </h2>
                    <p>Very early in the morning, we will go to La Cruz del Cóndor, where you can usually observe the
                        Condor which is the largest bird in the world in mid-flight. During the return, we will visit
                        the
                        villages of Yanque, Coporaque, Achoma, and Maca. Good opportunity to appreciate the life of the
                        inhabitants of these towns that have not changed much since Inca times. Finally, in the
                        afternoon, we will go to the White City of Arequipa.</p>

                    <h2 class="h2-tours">DAY 09: Free Morning and City tour of Arequipa. </h2>
                    <p>On this day you will have the morning, free to rest or to go for a walk.

                        In the afternoon, we will make the tour of the "White City" including the Convent of Santa
                        Catalina, without a doubt the gem of Arequipa, finally opened to the public in the year 1970,
                        after having been for 400 years in seclusion, with an innumerable amount of pieces of colonial
                        art. Also, visit the Plaza de Armas, the cloisters of the Company of Jesus, and the
                        neighborhoods
                        of Cayma and Yanahuara, with a magnificent view of the Misti volcano, and visit a traditional
                        colonial mansion called the Founder's Mansion. At night we will rest at the hotel.</p>
                    <img alt="Mirador del Cóndor Arequipa" loading="lazy" width="100%"
                        src="{{ asset('img/galeria/Visit-to-colca-canyon-arequipa-peru.webp') }}">
                    <i>Picture: Mirador del cóndor, Colca canyon - Arequipaa</i><br><br>

                    <h2 class="h2-tours">DAY 10: Transfer from the Hotel to the Arequipa airport. </h2>
                    <p>Breakfast at the hotel.<br><br>
                        Transfer from the hotel to Arequipa Airport.<br><br>
                        Travel by Plane from Arequipa to Lima (80 minutes) (from 8:50 am to 10:20 am)<br>
                        Travel by plane from Lima to your destination country (On your own)</p>

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
                            <ul>
                                <li>Transfers to and from the hotel, airport, train station, and
                                    attractions.</li>
                                <li>Bus transportation for all the tours.</li>
                                <li>Round trip train tickets- Cusco - Machupicchu - Cusco</li>
                                <li>Round trip Bus tickets- Aguas Calientes - Machupicchu - Aguas
                                    Calientes.</li>
                                <li>Profesional Guide (English-Spanish)</li>
                                <li>Entrance tickets for all the attractions Machupicchu, Sacred
                                    Valley, city, Museums, and Churches.</li>
                                <li>3 nights in a Hotel in Cusco.</li>
                                <li>2 nights in a Hotel in Puno.</li>
                                <li>4 BREAKFASTS/BUFFET at the Hotel, 1 LUNCH/BUFFET in the
                                    Sacred Valley.</li>
                                <li>Music and dance night show in the theater.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <ul>
                                <li>Flights Lima / Cusco / Lima.</li>
                                <li>Complete meals (lunches and dinners not specified in the
                                    program).</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <ul>
                                <li>Our prices include Inca Rail the Executive Train service for
                                    your trip to Machupicchu.</li>
                                <li>Important: The hotel reservation is subject to space
                                    availability - Prices do not include VAT for Peruvian passengers and foreigners
                                    residing in Peru.</li>
                                <li>You can request Vistadome Executive train service Increasing 45
                                    Dollars per person.</li>
                                <li>You can request Hiram Bingham the luxury train service
                                    Increasing 820 Dollars per person.</li>
                                <li>You can request the tour package in private service. (Check
                                    rates with us).</li>
                                <li>People of Peruvian, Ecuadorian, Bolivian, and Colombian
                                    nationalities have access to a special discount, for being members of the CAN.</li>
                            </ul>
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-10-days-9-nights"
                            data-width="100%" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br><br>
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
                                    <a href="peru-5-days-4-nights" class="button">Perú 5 days tour</a>
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
                                    <a href="peru-7-days-6-nights" class="button">Perú for 7 days</a>
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
