@extends('layouts.general-en')
@section('metas')
    <title>9 days in Perú - Peru for 9 days 8 nights - Machu Picchu - Sacred Valley - City Tours - Lima - Nazca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="9 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury, Travel to perú, how to travel to peru, tours in peru, exclusive tours in peru" />
    <meta name="description"
        content="We present you a detailed tour for 9 days during your stay in Perú, Travel around Perú with an exclusive travel agency." />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-9-days-8-nights">
    <meta property="og:title" content="Perú for 9 days - Machu Picchu - Sacred Valley - Cusco - Lima - Puno">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-9-days-8-nights" />
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
                                <li id="display" class="menu-has-children">
                                    <a>
                                        <button type="button" class="botondjm">Language <i
                                                class="fa fa-chevron-down"></i></button>
                                    </a>
                                    <ul>
                                        <li><a href="peru-9-dias-8-noches">Español</a></li>
                                        <li><a>Ingles</a></li>
                                    </ul>
                                </li>
                                <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr' target="_blank">+51
                                        979 721 194</a></li>
                                <li id="display2" class="menu-has-children">
                                    <a href="peru-9-dias-8-noches">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                        {{ session()->get('flash') }}<button type="button"
                                                                            onclick="bye()" style="float: right;">X</button>
                                                                    </div>
                                                                </center>
                                                            @endif
                                                            <h1><?php $tour = 'PERÚ 9 DAYS 8 NIGHTS';
                                                            echo $tour; ?></h1>
                                                            <p><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
                                                                - Arequipa </p>
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
                    <div style="width: 90%; height:1px; background:grey; margin-top:0.6em"></div>
                </div>
                <div class="col-lg-6 col-sm-10"><a href="/">Home</a> /
                    <a href="around">Around Perú</a> /
                    <a>Perú 9 days tour</a>
                </div>
                <div class="col-lg-3 col-sm-2" id="display2">
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
                                    <a href="peru-7-days-6-nights" class="button">Perú for 7 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-10-days-9-nights" class="button">Perú for 10 days</a>
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
                        <h2 id="titulo1">PERÚ 9 DAYS TOUR </h2>
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
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Welcome at the Lima airport, City tour in the afternoon</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Welcome at the Airport and City tour in Cusco.</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Tour in the Sacred Valley of the Incas & Train to Machupicchu</td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Guided Tour in Machu Picchu, optional ascent to Huaynapicchu.</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Guided Trip in a Touristic bus from Cusco to Puno.</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td> Tour in the Titicaca Lake, Los Uros and Taquile.</td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Travel by Bus from Puno to Colca Canyon.</td>
                            </tr>
                            <tr>
                                <th>DAY 08</th>
                                <td> Colca Canyon tour & Travel by bus to Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DAY 09</th>
                                <td>Transfer from your hotel to Arequipa Airport.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>DETAILED ITINERARY:</h5>
                    <h2 class="h2-tours">Day 01. Welcome at the Lima airport, City tour in Lima with visit to the
                        Huaca
                        Pucllana</h2>
                    <p>
                        On this day we will be waiting for you at the Lima airport at the time of your flight arrival to
                        give you a warm welcome at the international airport "Jorge Chávez" and transfer you to the
                        Hotel.<br><br>
                        In the afternoon we will pick you up from your hotel to start the City tour in "The City of
                        Kings" Lima, on the way we will make a stop in the smallest district of Lima “Barranco”, which
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
                        textiles from various pre-Columbian cultures (subject to museum hours and access to the historic
                        center). Following our tour of the Church and Convent of San Francisco, we will visit its
                        impressive subterranean crypts known as Catacombs. Return to the hotel.
                    </p>
                    <img src="{{ asset('img/blog/museo-larco.webp') }}" alt="Lima, beautiful place to visit"
                        width="100%" loading="lazy"><span>Picture: Larco Museum, Lima</span><br><br>

                    <h2 class="h2-tours">Day 02. Welcome at the Airport and City tour in Cusco.</h2>
                    <p>This day begins with the pick up in your hotel for your flight from Lima to Cusco that you will
                        take at the "Jorge Chávez" airport in the city of Lima 2 hours in advance of your flight to the
                        "Archaeological Capital of America" Cusco (Altitude 3350 m.a.s.l.), where our staff will be
                        waiting for you at the airport with a sign with your name to transfer you to the selected hotel,
                        where you will be offered coca leaves tea which is good for the acclimatization of Cusco. After
                        your lunch, we will pick you up from your hotel at the time indicated by your travel agent, to
                        start and enjoy a guided tour at 1:35 pm where you will be able to know the following tourist
                        attractions of the city of Cusco:<br><br>

                        <strong>The Temple of the Sun or Qoricancha:</strong> The convent of Santo Domingo in Cusco is
                        the oldest religious building in South America, known as the "Temple of the Sun". Currently, you
                        can see the wonderful Inca architecture linked to Spanish architecture which is a sample of our
                        mestizo culture.<br>
                        <strong>The Cathedral:</strong> The Cathedral Basilica of the city of Cusco was built by native
                        Cusco workers and led by the Spaniards. It also has the finest expressions of colonial
                        goldsmithing as well as wood carving and a valuable collection of canvases of the "Escuela
                        Cusqueña" (School of Cusco). Saqsayhuaman: It is one of the Inca constructions that most
                        astonishes tourists who, according to new hypotheses, point out that it would have been an
                        important Inca ceremonial center and not a fortress as previously believed. Its construction
                        took more than seven decades and required the strength of about 20,000 men.<br>
                        <strong>Qenqo:</strong> Ceremonial and ritual center, it was an amphitheater where sacrifices
                        were made, it is said that it was an Inca shrine. Its construction is made of stones. There are
                        passages, canals, and staircases with engravings that represent the cougar, a very sacred animal
                        for the Incas.
                        <br>
                        <strong> Puca Pucara:</strong> Former Tambo guard place along the Inca roads, this
                        archaeological site has: enclosures, interior plazas, baths, aqueducts, watchtowers and an
                        easily recognizable Inca trail in synthesis the urban layout is highly adequate and
                        functional.<br>
                        <strong>Tambomachay:</strong>Through its stairways, you can see crystalline waterfalls and,
                        according to what is affirmed here, the liquid element for the Incas, "the water", was
                        worshiped. Returning to Cusco at 6:45 pm.
                    </p>
                    <img src="{{ asset('img/galeria/cusco-maravilloso.webp') }}" alt="Plaza de armas del Cusco"
                        width="100%" loading="lazy"> <span>Picture: Main square of Cusco</span><br><br>

                    <h2 class="h2-tours">Day 3. Tour in the Sacred Valley of the Incas & Travel by Train to
                        Machupicchu</h2>
                    <p>
                        The Sacred Valley of the Incas tour begins at 8:40 am, but we will come to pick you up at your
                        hotel lobby before the tour starts. On this tour, you will visit the town of Pisac. Located 32
                        km from the city of Cusco.<br><br>

                        Pisaq is a typical Andean artisan and the archaeological town where the famous Handicraft Fairs
                        are held in their typical markets where you can make purchases and enjoy a guided tour of the
                        archaeological sites of the place; continuing with our tour of approximately one hour we will
                        pass through different towns such as Coya, Lamay, the province of Calca and Yucay appreciating
                        the beauty of the Sacred Valley of the Incas. We will pass to the town of Urubamba where we will
                        enjoy a delicious buffet lunch in the cozy restaurant “Tunupa”; Later we will go to the town of
                        Ollantaytambo (It is the only Incan city in Peru that is still inhabited) to visit the
                        archaeological complex of the same name; having been an agricultural, administrative, social,
                        religious and military complex in the Tahuantinsuyo, ending the tour at approximately 4:00 pm,
                        then you will have free time in the town of Ollantaytambo, where you can visit their craft
                        market, their small streets that still keeps the layout of the Inca streets, seeing the water
                        run through its old canals, is like going back in time, ideal for taking pictures or having a
                        coffee in its Main Square.<br><br>

                        At the indicated time you must take the Ollantaytambo train leaving at 7:00 p.m. to the town of
                        Aguas Calientes where our staff will be waiting for you to transfer you to the selected hotel.
                    </p>

                    <h2 class="h2-tours"> Day 4. View of the Sunrise and Guided Tour in Machu Picchu with optional
                        ascent to Huaynapicchu Mountain.</h2>
                    <p>
                        After your breakfast at the hotel, excellent opportunity to get up early and observe a beautiful
                        sunrise in Machu Picchu, in coordination with your guide, you will take the bus from Aguas
                        Calientes Town to Machu Picchu (altitude 2450 meters on sea level) (approximately 25 minutes).
                        May observe the sunrise in Machu Picchu by taking your guided tour at 7:00 am 3 hours
                        approximately, being able to visit: the Main Square, the Circular Tower, the Sacred Solar Clock,
                        the Royal Room, the Temple of the Three Windows, and the Cemeteries.

                        <br><br>

                        Before or after the guided tour in Machu Picchu, depending on your tickets schedule, You will
                        have time to explore on your own or use your tickets to climb Huayna Picchu or Machu Picchu
                        Mountain (Notice that if you want to climb Huaynapicchu mountain, it must be booked at least 3
                        months in advance because of availability, the entrance times may vary depending on the time of
                        booking). Besides having the guided tour in Machu Picchu citadel, you can also visit one of the
                        following mountains (without a guide): Huaynapicchu Mountain (from where a spectacular view of
                        the entire valley of Machu Picchu is appreciated) or Machu Picchu Mountain (the mountain that
                        gave its name to Machu Picchu with a unique landscape beauty) the entrance ticket to one of the
                        Mountains will be included and you can do it optionally, any of them will take you 3 hours
                        approximately - round trip. This travel program is ideal for touring Machu Picchu in its
                        entirety and taking pictures with enough time until the time you make it convenient to return by
                        bus to Aguas Calientes so you can have lunch in the same town. In the afternoon you will have to
                        board the train to Poroy or Ollantaytambo. Once you arrive at one of these Train stations our
                        staff will be waiting for you to transfer you to your Hotel in Cusco.<br><br>

                        The advantage of this tour is that you can get to know Machu Picchu without many people and with
                        much more time available.
                    </p>
                    <img src="{{ asset('img/galeria/visita-machu-picchu.webp') }}" alt="Travel to Machu Picchu"
                        loading="lazy" width="100%"><span>Picture: Machu Picchu, Cusco</span><br><br>

                    <h2 class="h2-tours"> Day 5. Guided Trip in a Touristic bus from Cusco to Puno.</h2>
                    <p>
                        - Breakfast at the hotel. Cusco Puno Inka Express.<br>
                        - 6:20 AM. Transfer from your hotel in Cusco to the Inca Express bus terminal.<br>
                        - 6:50 AM. To 5:00 PM -Guided Bus ride from Cusco to Puno - Inka Express Bus.<br>
                        - 5:00 PM. Transfer from the Inka Express bus terminal to your Hotel in Puno.<br>
                        - Overnight stay in a Hotel in Puno.<br>
                        - We will pick you up from your hotel at 6:20 am to transfer you to the bus terminal for your
                        trip to Puno (altitude 3818 m.a.s.l.) <br> Our Comfortable bus is equipped with toilets and is
                        run by
                        three people: a driver, a professional bilingual guide, and an attendant. We will make a small
                        visit to the church of Andahuaylillas, the church that dates from the early seventeenth century
                        It is known as the Sistine of South America for the magnificent paintings it has and for its
                        altar chiseled in gold.<br> After our visit, we will keep going 218 km to Raqchi, where the Inca
                        temple of Wiracocha is located.<br><br>
                        After visiting Raqchi we will continue our way to Sicuani where we will enjoy a delicious buffet
                        lunch to go after to La Raya, located 4,335 meters high. Our next destination will be Pucara,
                        where we will visit the Lithic Museum and finally our tour will be through high Andean
                        esplanades under an unreal clarity.<br>
                        In the city of Puno, our staff will be waiting for you to take you to your Hotel.

                    </p>

                    <h2 class="h2-tours"> Day 6. Tour in the Titicaca Lake, Los Uros and Taquile.</h2>
                    <p>
                        We will pick you up at your hotel at 7:00 a.m. approximately to go to the port to start the tour
                        in a boat to the amazing and majestic "Uros Islands", arriving there at 07:20 a.m.
                        approximately.<br>
                        <strong>The Uros:</strong> These islands are made of artificial floors, made with totora
                        superimposed and
                        skillfully interwoven. During the trip, the guide provides extensive information about Lake
                        Titicaca, the legends of the Uros, their uses, customs, and folklore. <br>
                        <strong>Taquile: </strong> at Taquile, we will go to the Plaza de Armas, and then have free time
                        to make
                        purchases.<br>
                        The Taquile Island presents textile art of an impressive quality comparable only to the looms of
                        the Paracas or Egypt culture and was declared Cultural Patrimony of Humanity. At 12:40 at noon
                        you will taste an exquisite lunch, after all, we will be leaving from the Port of Taquile at
                        2:30 p.m. and arriving in Puno at 5:30 p.m. to then transfer you to your hotel.

                    </p>
                    <img src="{{ asset('img/galeria/visit-the-city-of-puno.webp') }}" alt="Visit the city of Puno"
                        width="100%" loading="lazy" title="Titicaca Lake"><span>Picture: Titicaca lake,
                        Puno</span><br><br>
                    <h2 class="h2-tours">Day 7. Travel by Bus from Puno to Colca Canyon</h2>
                    <p>
                        Early in the morning, you will travel by bus to have an incredible 6-hours trip to the Colca
                        Canyon, one of the deepest canyons in the world (3,400 mts.), passing through Pampa Cañahuas,
                        located in the Aguada Blanca National Reserve, habitat of vicuñas and alpacas (camelids of South
                        America). The highest point of the route is 4,900 masl, on the route we will appreciate
                        pre-Columbian terraces that are still cultivated by the native collaguas. Arriving at the Colca
                        Valley, we will transfer you to your respective hotel.
                        <br><br>

                        In the afternoon, we recommend you rest and acclimate to the height. If you are in good physical
                        condition, you will have free time to take a walk around the hotel or take a refreshing bath in
                        the nearby hot springs.
                    </p>
                    <h2 class="h2-tours">Day 8. Colca Canyon tour and Travel by bus to Arequipa</h2>
                    <p>
                        Very early in the morning, we will go to <strong> “La Cruz del Cóndor”,</strong> where you can
                        usually observe the
                        largest bird in the world in mid-flight. During the return, we will visit the villages of
                        Yanque, Coporaque, Achoma, and Maca. Good opportunity to appreciate the life of the inhabitants
                        of these towns that have not changed much since the Inca times. In the afternoon, we will return
                        to “The White City of Arequipa”.
                    </p>
                    <img src="{{ asset('img/galeria/Visit-to-colca-canyon-arequipa-peru.webp') }}"
                        alt="Visit the city of Puno" width="100%" loading="lazy"
                        title="Mirador del cóndor, Arequipa"><span>Picture: Mirador del Cóndor, Arequipa</span><br><br>
                    <h2 class="h2-tours">Day 9. Transfer from your hotel to Arequipa Airport</h2>
                    <p>
                        - Breakfast at the hotel.<br>
                        - Transfer from your hotel to Arequipa Airport.<br>
                        - Travel by flight from Arequipa to Lima (80 minutes) (from 8:50 am to 10:20 am).<br>
                        - Travel by Flight from Lima to your destination country (on your own).<br>
                        - End of Services.<br>
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
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            ✓ Flight Tickets from Lima to Cusco. (1 hour and 10 minutes).<br>
                            ✓ Flight Tickets from Arequipa to Lima. (1 hour and 20 minutes).<br>
                            ✓ Transfers to hotels, airports, train stations, bus terminal and tourist attractions. <br>
                            ✓ All entrance tickets to all tourist attractions to visit. <br>
                            ✓ All transportation for tours. <br>
                            ✓ Machu Picchu Expedition train Tour.<br>
                            ✓ Sacred Valley of the Incas Tour.<br>
                            ✓ City Tour in Cusco.<br>
                            ✓ City tour in Lima "City of the Kings".<br>
                            ✓ Titicaca Lake Tour, Uros Islands and Taquile Island.<br>
                            ✓ Guided tour from Cusco to Puno, (8:00 a.m. to 5:00 p.m.).<br>
                            ✓ Colca Canyon Tour in 2 days and 1 night.<br>
                            ✓ Travel by bus from Puno to Arequipa.<br>
                            ✓ 1 Night Hotel Stay in Lima.<br>
                            ✓ 2 Nights Hotel Stay in Cusco.<br>
                            ✓ 1 Night Hotel Stay in Aguas Calientes- Machupicchu.<br>
                            ✓ 1 Night Hotel Stay in Puno.<br>
                            ✓ 2 Nights hotel Stay in Arequipa.<br>
                            ✓ 1 Night hotel Saty in Colca.<br>
                            ✓ 8 buffet breakfasts in hotels.<br>
                            ✓ Train tickets Ollantaytambo - Aguas Calientes (Machupicchu) - Poroy (Cusco).<br>
                            ✓ Professional bilingual guide for all tours.<br>
                            ✓ 1 Buffet lunch in the Sacred Valley of the Incas, restaurant "Tunupa".<br>
                            ✓ 1 Buffet Lunch on the trip from Cusco to Puno.<br>
                            ✓ 1 Lunch on Titicaca Lake.<br>
                            ✓ 1 Lunch included in Aguas Calientes Machu Picchu in the Café Inkaterra Restaurant.<br>
                            ✓ Assistance and daily guidance by our professional staff in Tourism.<br>
                            ✓ All taxes.<br>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus"></i> Meals: Lunch and Dinner not described in the Tourist Package.
                            <br>
                            <i class="fa fa-minus"></i> International flights.
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus"></i> You can request Vistadome Executive train service Increasing
                            $ 45 Dollars per person.<br>
                            <i class="fa fa-minus"></i> You can request Hiram Bingham the luxury train service
                            Increasing $ 820 Dollars per person.<br>
                            <i class="fa fa-minus"></i> You can request the tour package in private service.
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-9-days-8-nights"
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
                                    <a href="peru-7-days-6-nights" class="button">Perú for 7 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-10-days-9-nights" class="button">Perú for 10 days</a>
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
