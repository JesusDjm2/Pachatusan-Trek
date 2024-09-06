@extends('layouts.general-en')
@section('metas')
    <title>18 days in Perú- Peru for 18 days - Machu Picchu - Sacred Valley - City Tours - Puno - Arequipa - Trujillo -
        Puerto Maldonado
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Perú for 18 days, 18 days in Perú, Tour in Peru 18 days, Peru 18 days tour" />
    <meta name="description"
        content="Come and enjoy what Peru has to offer its visitors. 20 days tour in Peru. amazing Tour in Perú!" />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-18-days-tour">
    <meta property="og:title"
        content="18 days in Perú- Peru for 18 díays - Machu Picchu - Sacred Valley - City Tours - Puno - Arequipa - Trujillo - Puerto Maldonado">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/tours/cusco-maravilloso.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-18-days-tour" />
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
                                            <li><a href="peru-18-dias-tour">Español</a></li>
                                            <li><a>Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="peru-18-dias-tour">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                <h1><?php $tour="TOUR IN PERÚ FOR 18 DAYS"; echo $tour?></h1>
                                                                <p><i class="fa fa-map-marker"></i> Lima - Trujillo
                                                                    -Nasca - Puno
                                                                    - Arequipa - Machupicchu </p>
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
                    <a>Perú 18 Days</a>
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
                                    <a href="biking" class="button">Biking in the mountains</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="adventures/rafting-tour" class="button">Rafting</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="adventures/islands-palomino-tour" class="button">Swim with sea
                                        lions</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-8-days-7-nights" class="button">Perú for 8 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-12-days" class="button">Tour in Perú for 12 days</a>
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
                        <h2 id="titulo1">PERÚ FOR 18 DAYS TOUR</h2>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178">Reserve 30 days in advance

                        </p>
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
                    <p style="padding: 0px 1px 0px 20px;">
                        This tour to Choquequirao of 4 days is one of the most beautiful ones. Most of the people who
                        already made this tour say that it is tiring, but the effort is always worth it. The landscapes
                        that are appreciated are unique and the ancestral energy is felt from the first step. It is not
                        said in vain that Choquequirao is the only attraction in Cusco at the height of competing with
                        Machu Picchu.
                    </p>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Welcome in Lima and City tour</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Flight from Lima to Chiclayo and City tour in Chiclayo</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Huaca Rajada, Museo Señor de Sipán and Pirámides de Tucumé Tour</td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Travel from Chiclayo to Trujillo and city tour in Trujillo.</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Visit to the Sun and Moon Temple and Chan Chan.</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>Flight from Trujillo to Lima.</td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Travel by bus from Lima to Paracas, tour Ballestas Islands and Paracas to Nazca.
                                </td>
                            </tr>
                            <tr>
                                <th>DAY 08</th>
                                <td>Overflight in the Nazca Lines and Travel to Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DAY 09</th>
                                <td>City tour in Arequipa.</td>
                            </tr>
                            <tr>
                                <th>DAY 10</th>
                                <td>Colca Canyon tour.</td>
                            </tr>
                            <tr>
                                <th>DAY 11</th>
                                <td>Cross of the Condor and bus trip from Chivay to Puno.</td>
                            </tr>
                            <tr>
                                <th>DAY 12</th>
                                <td>Tour in Lake Titicaca, Floating Island of Uros and Taquile.</td>
                            </tr>
                            <tr>
                                <th>DAY 13</th>
                                <td>Touristic circuit from Puno to Cusco.</td>
                            </tr>
                            <tr>
                                <th>DAY 14</th>
                                <td>City tour in Cusco.</td>
                            </tr>
                            <tr>
                                <th>DAY 15</th>
                                <td>Sacred Valley of the Inkas and train trip to Machu Picchu.</td>
                            </tr>
                            <tr>
                                <th>DAY 16</th>
                                <td>Optional Machupicchu: Huayna Picchu.</td>
                            </tr>
                            <tr>
                                <th>DAY 17</th>
                                <td>Flight from Cusco to Lima and Pachacamac Tour.</td>
                            </tr>
                            <tr>
                                <th>DAY 18</th>
                                <td>Transfer from hotel to airport and goodbye.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARIO:</h5>
                    <h2 class="h2-tours"> DAY 1. WELCOME TO THE LIMA AIRPORT AND CITY TOUR IN THE AFTERNOON.</h2>
                    <p>
                        On this day we will be waiting for you at the airport in the city of Lima at the arrival time of
                        your flight to give you a warm welcome at the "Jorge Chávez" international airport and transfer
                        you to the Hotel.
                        In the afternoon we will make the City Tour in the "City of Kings" Lima, where we will visit:
                        the Cathedral, the Tomb of Pizarro, the Catacombs of San Francisco, passing through the Congress
                        of the Republic, the Palace of Torre Tagle, as well as We will visit the archaeological site of
                        La Huaca Pucllana, Barranco where you will enjoy an amazing view of the Pacific Ocean. Then you
                        will visit the Rafael Larco Herrera Museum where you will be able to appreciate a large amount
                        of pre-Inca pottery including the world's largest collection of erotic huacos.

                    </p>

                    <h2 class="h2-tours">DAY 2. FLIGHT FROM LIMA TO CHICLAYO AND CITY TOUR IN CHICLAYO.</h2>
                    <p>
                        We will pick you up from your hotel to transfer you to the Lima airport where you will take a
                        flight to the city of Chiclayo, our staff will welcome you and transfer you to your hotel, in
                        the afternoon after lunch, we will pass at 2 o'clock the afternoon by your hotel to start the
                        City Tour in the city of Chiclayo.
                        The tour will take you through the churches of Santa Veronica, Basilica of San Antonio; as well
                        as the Paseo Las Musas, Parque Principal, Municipalidad, Paseo Artesanal, Republican mansions,
                        and the herbal market.

                    </p>

                    <h2 class="h2-tours">DAY 03: HUACA RAJADA TOUR, LORD OF SIPÁN MUSEUM AND TUCUMÉ PYRAMIDS.</h2>
                    <p>
                        After breakfast, we will go to your hotel at 10:00 am to tour the Huaca Rajada Archaeological
                        Complex (Lord of Sipán), located 35 kilometers from Chiclayo. Place where the intact remains of
                        a dignitary of the Mochica hierarchy, a warrior priest, were discovered in 1987.
                        The important discovery is only compared to the discovery of the tomb of the Egyptian pharaoh
                        Tutankhamun, in 1922.<br>
                        The construction is made up of a low platform and two adobe pyramids. In the discovery, it was
                        found that the tomb of the dignitary has the remains of a warrior, a priest, two women, a child,
                        a llama, and a guardian with amputated feet. In addition to numerous gold and silver jewelry.
                        Museum Tombs of the Lord of Sipán: Museum of the recent inauguration, preserves all the material
                        collected by Dr. Walter Alva in the archaeological excavations of the Sipán Huaca Rajada
                        Complex, the exhibition shows the Lord of Sipán along with all his jewels, some tombs of
                        warriors Moches and important pieces of gold. The architecture of the museum is inspired by the
                        ancient Mochica Sanctuaries where platforms are combined. It is currently considered one of the
                        best museums in South America. Lunch in Lambayeque.<br>
                        Pyramids of Tucumé Archaeological complex of Tucumé or Valley of the Pyramids is characterized
                        by its 26 pyramids; among which stand out: La Huaca del Pueblo, La Raya, El Sol, and Las
                        Estacas. It is located just one kilometer from the town of Tucumé, a community that is very
                        involved in the conservation of its natural and cultural heritage. This complex dates back to
                        700 AD. and constituted a second political center of the SICAN after the Pomac Forest.

                    </p>
                    <img src="img/tours/arequipa-peru.jpg" class="img-fluid" alt="Tour Nazca lines"><br><br>
                    <h2 class="h2-tours">DAY 04: TRIP FROM CHICLAYO TO TRUJILLO AND CITY TOUR IN TRUJILLO.</h2>
                    <p>
                        After breakfast at the hotel, we will transfer you to the bus terminal for your trip to
                        Trujillo, where we will welcome you and transfer you to your hotel.
                        In the afternoon, we will visit the following places: The Perimeter Wall (Baluarte Herrera),
                        Plazuela El Recreo, Archaeological Museum, Iturregui Palace, Emancipation House, La Merced
                        Church, Mariscal de Orbegoso House, Calonge Urquiaga House, The Cathedral, House of the
                        Mayorazgo and the Plaza Mayor.

                    </p>
                    <h2 class="h2-tours">DAY 05: VISIT THE TEMPLE OF THE SUN AND THE MOON AND CHAN CHAN.</h2>
                    <p>
                        In the morning we will make an excursion through the Moche Valley, visiting the Campiña de
                        Moche, in this countryside is located the highest adobe temple in America, the Temple of the
                        Sun, and the Temple of the Moon, whose walls are decorated with beautiful arabesques. in high
                        relief with motifs from Mochica mythology. In the afternoon: Visit the Chan-Chan Archaeological
                        Complex, visit the Rainbow Temple or Huaca el Dragón, the Tschudi Palace, one of the nine
                        best-preserved citadels, its walls are decorated with high relief friezes, we will visit its
                        ceremonial squares, shrines, reservoirs, barns, pavilions or audiences, funerary platforms.

                    </p>
                    <h2 class="h2-tours">DAY 06: TRAVEL BY PLANE FROM TRUJILLO TO LIMA.</h2>
                    <p>
                        <li>Breakfast at the hotel.</li>
                        <li>Transfer from hotel to Trujillo airport.</li>
                        <li> Travel by plane from Trujillo to Lima (1 hour).</li>
                        <li> Transfer from Lima airport to the Hotel.</li>
                        <li> Free afternoon.</li>
                        <li> Hotel night in Lima.</li>


                    </p>
                    <h2 class="h2-tours">DAY 07:TRAVEL BY TOURIST BUS FROM LIMA TO PARACAS, BALLESTAS ISLANDS
                        TOUR, AND PARACAS TO NASCA.</h2>
                    <p>
                        After having our breakfast, we will go to the terminal of the Cruz del Sur tourism company where
                        we will board the bus in VIP Cruise service bound for Paracas, where our staff will be waiting
                        to transfer you to the port of Paracas, where we will start the tour at Ballestas Islands
                        passing through "El Candelabro" a gigantic image on the side of a hill. Upon arrival at the
                        Ballestas Islands, the different islands will be visited for two hours, observing the different
                        species of sea lions, seals, penguins, and guano birds. After arriving at the port we will make
                        the tour to the "Paracas" sea lion reserve. In the afternoon we will go to the Paracas terminal,
                        from where we will take the bus to the city of Nasca.

                    </p>
                    <h2 class="h2-tours">DAY 08: FLIGHT OVER THE NASCA LINES AND TRIP TO AREQUIPA.</h2>
                    <p>
                        After breakfast, we will transfer you to the Nasca aerodrome, for a 45-minute flight over the
                        Pampas de Nasca, where the ancient pre-Incas drew gigantic figures of animals and plants with a
                        purpose not yet discovered, many believe that these figures were made by extraterrestrials,
                        among which are the monkey, the spider, the hummingbird, etc. Then there will be a visit to the
                        "Chauchillas Cemetery", then passengers will be transferred to the Nasca bus terminal to make
                        their trip to the city of "Arequipa" which usually takes 9 hours, where our staff will be
                        waiting to welcome you and take you to your hotel.

                    </p>
                    <h2 class="h2-tours">DAY 09: CITY TOUR IN AREQUIPA.</h2>
                    <p>
                        After breakfast we will pick you up to go to the city center where we will start an interesting
                        tour, our first stop takes place in one of the most impressive architectural monuments of the
                        city, is the magnificent Monastery of Santa Catalina, a city in miniature that sheltered the
                        Arequipeñan nuns for more than 400 years. Later we will pass through the beautiful Plaza de
                        Armas, beautifully surrounded by beautiful colonial arches and we will visit the beautiful
                        Cathedral of Arequipa, which we will enter with our local guide to appreciate its impressive
                        works of art, as well as its imposing structure. Finally, we will visit the Museum of Andean
                        Sanctuaries where we will see the remains of the mummy called Juanita, a spectacular find of a
                        girl belonging to the Inca nobility that was discovered on the cold slopes of the snowy Ampato.

                    </p>
                    <h2 class="h2-tours">DAY 10: TOUR THE COLCA CANYON.</h2>
                    <p>
                        Early in the morning, you will embark on an incredible journey of approximately 4 hours, bound
                        for the Colca Canyon, one of the deepest canyons in the world (3,400 meters), passing through
                        Pampa Cañahuas, located in the Aguada Blanca National Reserve, habitat of vicuñas and alpacas
                        (camelids from South America). The highest point of the route is 4,900 meters above sea level.
                        On the route, we will appreciate pre-Columbian terraces that are still cultivated by the native
                        Collaguas. Arriving at the Colca Valley, we will transfer you to your respective hotel.
                        In the afternoon, we recommend you rest and acclimatize to the altitude. If you are in good
                        physical condition, you will have free time to take a walk around the hotel or take a refreshing
                        bath in the nearby hot springs.


                    </p>
                    <h2 class="h2-tours">DAY 11: CRUZ DEL CÓNDOR AND BUS TRIP FROM CHIVAY TO PUNO.</h2>
                    <p>
                        At 06.00 am, breakfast at the hotel and departure to the Cruz del Cóndor where we will stay for
                        approximately 1 ½ hour, from this point you can appreciate in its greatest dimension the depth
                        of the Colca Canyon and also the flight of the Condor short distance
                        Returning we will be able to observe archaeological remains and other panoramic views of the
                        Colca Canyon such as the beautiful pre-Inca terraces, we will pass through the towns of
                        Pinchollo, Maca, Achoma, Yanque (in the latter we make a stop), to observe its typical
                        constructions, its small craft center, typical clothing, among others. Arrive at Chivay and here
                        we will have lunch. Finally, travel from Chivay to Puno, arriving at approximately 7:00 p.m.


                    </p>
                    <h2 class="h2-tours">DAY 12: TOUR LAKE TITICACA, FLOATING ISLAND OF THE UROS, AND TAQUILE.
                    </h2>
                    <p>
                        We will pick you up at your hotel at 6:30 a.m. approx. to transfer you to the port and start the
                        tour in a tourist boat to the amazing and majestic "Islas de Los Uros", arriving at 07:20 in the
                        morning approx. Uros: These islands are artificial floors, made with superimposed and skillfully
                        interwoven totora. <br>During the journey the guide provides extensive information about Lake
                        Titicaca, the legends of the Uros, their uses, customs, and folklore;
                        Taquile: Arriving in Taquile, we will go to its Plaza de Armas, free time to shop. Taquile
                        Island presents us with fabrics of an impressive quality comparable only with the looms of the
                        Paracas or Egyptian culture, declared Cultural Patrimony of Humanity. At 12:40 noon you will
                        taste an exquisite lunch, setting sail from the Port of Taquile at 2:30 pm and arriving in Puno
                        at 5:30 pm approx. and then transfer them to their hotel.


                    </p>
                    <h2 class="h2-tours">DAY 13: TOURIST CIRCUIT FROM PUNO TO CUSCO.</h2>
                    <p>
                        After breakfast, we will pick you up from the hotel and take you to the Tourism bus station
                        where it will take you on a tour that lasts (approx. 8 hours), where you will enjoy 4 excursions
                        and guided tours, reaching the pass of La Raya at 4,335 meters above sea level and the Aymara
                        Inca Museum of Pucará, arriving at noon to the city of Sicuani, including a delicious buffet
                        lunch.<br>
                        Then we will continue with our trip; where each visit has a duration of (20 to 40 minutes on
                        average), we will visit the Inca temple of Raqchi, the Andahuaylillas temple, or the Sistine
                        Chapel of America, making your excursion very pleasant. Upon arrival at the imperial city of
                        Cusco, we will be waiting for you to transfer you to your hotel, where you will spend the night.



                    </p>
                    <h2 class="h2-tours">DAY 14: CITY TOUR IN CUSCO.</h2>
                    <p>
                        In the morning you will have a free morning to do what you want, shopping, walking through the
                        picturesque streets of the city of Cusco, taking pictures.
                        After your lunch we will pick you up from your hotel at approximately 1:10 in the afternoon to
                        start and enjoy a guided tour at 1:35 pm where you will be able to see: The old Plaza de Armas
                        of Cusco, the Cathedral, the Monastery of Santo Domingo, Koricancha Temple and archaeological
                        sites such as Quenko, Puca Pucara, Tambomachay and the wonderful fortress of Sacsayhuamán.
                        Returning to the city of Cusco at 6:45 in the afternoon.


                    </p>
                    <h2 class="h2-tours">DAY 15: TOUR THE SACRED VALLEY OF THE INCAS AND TRAVEL BY TRAIN TO
                        MACHUPICCHU (AGUAS CALIENTES).</h2>
                    <p>
                        We will pick you up from your hotel at the time indicated by your travel agent, starting the
                        tour at 8:35 am, heading along a paved road to the town of Pisac, located 32 km from the city of
                        Cusco, Pisac being a typical town. artisanal and archaeological Andean where the famous Craft
                        Fairs are held in their typical markets where you can make purchases and enjoy a guided tour of
                        the archaeological sites of the place; Continuing with our tour of approximately one hour we
                        will pass through different towns such as Coya, Lamay, the province of Calca, Yucay appreciating
                        the scenic beauty of the Sacred Valley of the Incas. We will go to the town of Urubamba where we
                        will enjoy a delicious buffet lunch in the cozy restaurant "Tunupa" Later we will go to the town
                        of Ollantaytambo (It is the only Inca city in Peru that is still inhabited) to visit the
                        archaeological complex of the same name; Having been an agricultural, administrative, social,
                        religious and military complex in Tahuantinsuyo, ending the tour at approximately 4:00 pm, you
                        will have free time in the town of Ollantaytambo, where you can visit its craft market with more
                        time, visit its streets that still keeps the layout of the Inca streets, seeing the water flow
                        through its ancient channels, is like going back in time, ideal for taking pictures or having a
                        coffee in its Plaza de Armas. <br>At the indicated time, you must take the train from
                        Ollantaytambo
                        that leaves at 7:00 p.m. to the town of Aguas Calientes, where our staff will be waiting for you
                        to transfer you to the selected hotel.

                    </p>
                    <h2 class="h2-tours">DAY 16: VIEW OF THE SUNRISE AND GUIDED TOUR IN MACHUPICCHU AND OPTIONAL:
                        ASCENT TO HUAYNAPICCHU.</h2>
                    <p>
                        After your breakfast, according to the time of your entrance ticket to Machupicchu, in
                        coordination with the guide, who will visit you the day before at your hotel in Aguas Calientes,
                        you must take the bus from Aguas Calientes to Machupicchu (altitude 2450 m.a.s.l. ) that lasts
                        approximately 30 minutes of ascent, an excellent opportunity to get up early and observe a
                        beautiful sunrise in Machupicchu, at the scheduled time with the guide the day before, you will
                        have your guided tour of approximately 2 hours, being able to visit: the Main Square, the
                        Circular Tower, the Sacred Solar Clock, The Royal Rooms, The Temple of the Three Windows and the
                        Cemeteries.<br>
                        Before or after your guided tour in Machupicchu, depending on the schedule established in your
                        tickets, you will have free time to explore Machupicchu by yourself or use your tickets to
                        ascend to the Huaynapicchu Mountain or Machupicchu Mountain (Note that in case you want to
                        ascend to the Huaynapicchu mountain you have to reserve at least three months in advance since
                        spaces are limited, check spaces and schedules).<br> You can visit Huaynapicchu Mountain (3
                        hours of
                        visit) from where you can see a spectacular view of the entire Machupicchu valley, or you can
                        visit Machupicchu Mountain (4 hours of visit). This travel program is ideal to tour Machupicchu
                        in its entirety and take pictures with enough time until the time that you consider convenient
                        to return by bus to Aguas Calientes and thus have lunch in the same town.<br>
                        In the afternoon you must board the Expedition train (included in the Tourist Package) to Poroy
                        or Ollantaytambo where our staff will be waiting for you at the train station to transfer you to
                        your hotel in Cusco.<br>
                        The advantage of this tour is that you will be able to get to know Machupicchu without many
                        people and with much more free time available to Machupicchu with a unique landscape beauty and
                        a spectacular view.

                    </p>
                    <h2 class="h2-tours">DAY 17: TRAVEL BY PLANE FROM CUSCO TO LIMA AND TOUR IN PACHACAMAC.</h2>
                    <p>
                        We will be waiting for you with a sign with your name, at the international airport, "Jorge
                        Chávez" in the city of Lima at the time of arrival of your flight to give you a warm welcome and
                        transfer you to the Hotel.<br>
                        In the afternoon, we will drive you to the Archaeological site of Pachacamac, we will have a
                        guided tour of the splendid and extensive archaeological citadel of Pachacamac. Sanctuary of the
                        god Pachacamac, the creator of the universe, a divinity adored by the ancient Andean peoples.
                        The sacred and ceremonial place from the beginning of the Christian Era where thousands of
                        pilgrims arrived to present their offerings and consult the oracle of Pachacamac, who looked at
                        the past, the future, and destiny.


                    </p>
                    <h2 class="h2-tours">DAY 18: TRANSFER FROM THE HOTEL TO THE AIRPORT AND FAREWELL.</h2>
                    <p>
                        After breakfast at the hotel, according to the time of your flight, we will pick you up from
                        your hotel to transfer you to the Lima airport three hours in advance, where we will help you
                        carry out the entire process to board your flight and finally board you at your destination
                        flight wishing you a Happy Trip!

                    </p>

                    <img src="img/tours/puno-peru-islands.jpg" class="img-fluid" alt="Tour En Puno"><br><br>


                    <img src="img/tours/camino-inca-inca-trail.jpg" class="img-fluid"
                        alt="Tour En Cusco - Machu Picchu"><br><br>

                    <div id="separador"></div>
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                        style="text-transform: uppercase; font-size: 12px; font-weight: 700">
                        <li class="nav-item">
                            <a class="nav-link active" id="drop" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">Include</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">No Include</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Importante</a>
                        </li>
                    </ul>
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <i class="fa fa-check" aria-hidden="true"></i> Information session prior to
                            departure.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Pick up from your hotel in the morning and
                            transfer by private transport to Cachora- starting point of the walk.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Entrance ticket to Choquequirao, for
                            visitors and staff of the agency.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Tents.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Professional guide (Spanish and
                            English).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Cook and kitchen equipment.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Pack of animals (to carry the equipment
                            tents, food and kitchen).<br>
                            <i class="fa fa-check" aria-hidden="true"></i> 1 emergency horse.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Meals (03B, 04L, 03D). Vegetarian or
                            special menus are available at no additional cost.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> First aid kit.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Private transportation from Cusco to
                            Cachora.
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus"></i> Hotel reservation is subject to space availability – Prices
                            do not include VAT
                            for Peruvian passengers and foreign residents in Peru.
                        </div>
                    </div>
                    @include('layouts.payments')
                    <h5>Share </h5>
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
                                            <a href='cusco-5-days-4-nights' class='button'>Cusco for 5 days</a>
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
                                            <a href="cusco-6-days-5-nights" class='button'>Cusco por 6 días</a>
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
                                        <a class='entry-link' href="peru-9-dias-8-noches">
                                            <img width="400" height="400" src="img/thumbnail/chincheros.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas"
                                                srcset="img/thumbnail/chincheros.jpg 400w"
                                                sizes="(max-width: 400px) 100vw, 400px" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="peru-9-dias-8-noches">Perú por 9 días</a>
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
