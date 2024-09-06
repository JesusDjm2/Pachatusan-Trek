@extends('layouts.general-en')
@section('metas')
    <title>6 days in Perú - Peru for 6 days 5 nights - Machu Picchu - Sacred Valley! - City Tours - Lima</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="6 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury" />
    <meta name="description" content="We present you a detailed tour for 5 days during your stay in Cusco." />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-6-days-5-nights">
    <meta property="og:title" content="PERU FOR 6 DAYS - Machu Picchu - Lima - Cusco ">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-6-days-5-nights" />
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
                                        <a href="{{ route('peru-6-dias') }}">
                                            <button type="button" class="botondjm">Español</button>
                                        </a>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="{{ route('peru-6-dias') }}">
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
                                                                            {{ session()->get('flash') }}<button
                                                                                type="button" onclick="bye()"
                                                                                style="float: right;">X</button>
                                                                        </div>
                                                                    </center>
                                                                @endif
                                                                <h1><?php $tour = 'PERÚ 6 DAYS 5 NIGHTS TOUR';
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
                    <a href="around">Around</a> /
                    <a>Perú tour for 6 days</a>
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
                                <a href="peru-5-days-4-nights" class="button">Perú for 5 days</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="machupicchu-accelerate" class="button">Machu Picchu Full Day</a>
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
                        <h2 id="titulo1">The excellence of Peru</h2>
                        <div id="separadordjm2"></div>
                        <i class="fa fa-clock-o"></i> 6 days<br>
                        <i class="fa fa-map-marker"></i> Cusco - Machupicchu - Puno
                        Cusco <br>
                        <i class="fa fa-exclamation-circle"></i> Reserve 30 days in advance
                    </center>
                    <div id="separador"></div>
                    <h5>Overview</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>CITY TOUR AROUND CUSCO AND OUTSKIRTS</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>TOUR TO MACHUPICCHU</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>TOUR TO THE SACRED VALLEY </td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>TOURIST TRIP FROM CUSCO TO PUNO, VISITING</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td> TOUR TO THE TITICACA LAKE, UROS ISLAND AND TAQUILE</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>CHULLPAS OF SILLUSTANI AND FLIGHT</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARY:</h5>
                    <h2 class="h2-tours">Day 1. CITY TOUR AROUND CUSCO AND OUTSKIRTS</h2>
                    <p>You must be in the airport of Lima at least two hours before your flight leaves for <a
                            href="cusco-4-days-3-nights" target="_blank" title="Cusco for 6 days"><strong>
                                Cusco,</strong></a> you
                        only have to approach the airline counter and display your ID to check in, the flight to Cusco
                        lasts 1 hr and 10 minutes, In Cusco " The Archaeological Capital of America ", Our staff will be
                        waiting for you to drive you to the Hotel, where you will drink coca tea then you can rest for a
                        while, around 13:30 hrs we'll pick you up from your Hotel to start visiting the following
                        attractives with a professional guide. this tour ends at 18:30 hrs:<br>
                        The Koricancha Palace and Convent of Santo Domingo: Religious center is known as "The Temple of
                        the
                        Sun" where you will admire the impressive engineering used in its construction.<br>
                        The Cathedral: Colonial religious monument of extraordinary artistic value.<br>
                        Sacsayhuaman: Built 3 Km. from the city of Cusco, an impressive stone fortress with excellent
                        architecture, famous for its huge carved stones some of which are at 9 m/ 30 feet high, with a
                        weight of 350 tons. Here is where the Inty Raymi or Fiesta del Sol is held in June Every
                        year.<br>
                        Qenqo: Ceremonial and ritual center, an amphitheatre where sacrifices were made.<br>
                        Puca-Pucara: An old Tambo (resting place), monitoring place throughout the Inka Empire
                        Routes.<br>
                        Tambomachay: At 7 Km. from the city of Cusco, the ceremonial center of the cult to the water,
                        known
                        traditionally as the place where water rests.<br>
                        On the return to Cusco we can be dropped off near to main Square or at The Dance and Music Show
                        to watch typical dances of Cusco.</p>

                    <h2 class="h2-tours">Day 2. TOUR TO MACHUPICCHU.</h2>
                    <p>From 05:45 hrs to 06:00 hrs., we pick you up from your Hotel in Cusco (3400 mosl) and drive you
                        to the Train Station, located in Poroy, then we get aboard the train and the trip from Cusco
                        starts heading to Aguas Calientes (2000 mosl). Our Guide Will be waiting there, he will lead us
                        to the bus station, to go up by a zigzag way for 30 minutes to reach the worldwide marvel The
                        Sanctuary of Machupicchu, known as the lost city of the Incas. Once we get to Machu-Picchu,
                        We'll pass through the control, where we'll hand in our entrance tickets and where our guided
                        tour will start, visiting the main square, the Circular Tower, the sacred solar watch, the royal
                        rooms, the temple of the three windows and the cemeteries, it lasts around two hours.
                        Afterward you'll be given enough time to have a walk around the citadel and have your meals, at
                        any restaurant in Aguas Calientes or if you wish at Sanctuary Lodge (this is not included).
                        In the afternoon, between 15:30 hrs and 17:00 hrs, we'll return on train to Cusco, we'll be
                        waiting for you at the train station and then we'll drive you back to your hotel.</p>
                    <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                        src="{{ asset('img/galeria/visita-machu-picchu.webp') }}"><br><br>

                    <h2 class="h2-tours">Day 3. TOUR TO THE SACRED VALLEY</h2>
                    <p>This tour starts around 09:00 hrs., we pick you up from your hotel, we have a guided tour to the
                        Sacred Valley of the Incas, over the Vilcanota River, with a panoramic view of Pisac an old Inca
                        City, and a visit to the Inka market in this village, where we will have the chance to know in a
                        closer way its people customs and get good bargains with the handicrafts and souvenirs sellers,
                        afterward we'll head for Urubamba, traveling on the borders of the river Vilcanota.<br>
                        We'll have lunch at a restaurant in the Sacred Valley of the Incas. In the afternoon we visit
                        the fortress and citadel of Ollantaytambo, built to watch the entrance to this part of the
                        valley and protect it from the jungle habitants invasions. We'll have the chance to walk by the
                        narrow streets and have a clear knowledge of how this military, religious and cultural center
                        was
                        during the Inca empire.<br>
                        On the way back to Cusco we will stop by the colorful village of Chinchero, where we will find
                        the ruins of the Tupac Inca Yupanqui Royal House, we will appreciate its well preserve Inca wall
                        in the man square and you will visit the beautiful Colonial Temple with invaluable portraits,
                        built
                        over Inca Bases. Then we return to Cusco.</p>
                    <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                        src="{{ asset('img/galeria/ollantaytambo-sacred-valley-of-the-incas-exclusive.webp') }}"><br><br>

                    <h2 class="h2-tours">Day 4. TOURIST TRIP FROM CUSCO TO PUNO, VISITING</h2>
                    <p>RAQCHI: After having a good breakfast, we'll pick you up from your hotel and we will take you to
                        the bus station to start with the tour to Puno (8 hours) you will have 4 guided visits to the
                        places of tourist interest: Andahuaylillas's temple or Sixtine Chapel of America, the Inka
                        temple of Raqchi,La Raya to 4335 masl and the museum Inka Aymara of Pukara. Every visit has a
                        duration to 20 to 40 minutes, we will have a buffet lunch in Sicuani (included). The passenger
                        will be able to make questions, take photos and walk for a while When you arrive in Puno, our
                        personnel will be waiting for you and they will take you to the hotel where you will stay.
                        (Photo: Raqchi).</p>

                    <h2 class="h2-tours">Day 5. TOUR TO THE TITICACA LAKE, UROS ISLAND AND TAQUILE.</h2>
                    <p>Early in the morning, you will be picked up from your hotel by our local guide and then
                        transferred to the harbor. We start our boat excursion of Lake Titicaca by visiting The Uros
                        Floating, a small community that has lived on these reed Islands for decades. Centuries ago the
                        small indigenous Uros tribe conceived of the islands as a way to isolate and protect themselves
                        from rival tribes, the Collas and the Incas. The Uros people harvested the reeds in the shallows
                        of the lake, bundled them together tightly, and built floating island platforms complete with
                        reed houses and canoes, creating in this way their little world. After strolling around the
                        floating Islands, we continue our journey towards Taquile Island (2 hours approx.), a
                        traditional speaking community, full of ancient agricultural terraces and some ruins dating back
                        to
                        the pre-Inca times. The Taquile population was relatively isolated from the mainland until the
                        1950s, and the notion of the community and family is still very strong among them. At the top of
                        the Island, you will have free time to explore this place on your own, and afterward you will
                        meet the group for lunch at one local restaurant. After lunch, we will descend to the harbor to
                        take our boat back to Puno. We will be back in Puno by 17:00 hrs. approximately. (Photo : Uros
                        Island on the Titicaca Lake in Puno)</p>

                    <h2 class="h2-tours">Day 6. CHULLPAS OF SILLUSTANI AND FLIGHT</h2>
                    <p>JULIACA TO LIMA After Having breakfast and once we're ready we will head to Juliaca's Airport (
                        1hr from Puno), but on the way to the Airport we will visit the Chullpas of Sillustani for
                        around 30 minutes.The archaeological site of Sillustani has located 22.3 miles away from the
                        city
                        of Puno (34 Km., 35 minutes drive) and at an altitude of 12,858 feet (3,840mts.) above sea
                        level. This visit allows visitors to enjoy stunning highland landscapes and imposing pre-Inca
                        architecture. The site is strategically positioned on the top of a peninsula surrounded by a
                        beautiful lagoon called Umayo lagoon.<br>
                        The archaeological site of Sillustani was a cemetery built in the XIII century by a civilization
                        that occupied the area before the Inka domination. The creators of the imposing burial towers
                        are known as the Kolla people. The most imposing burial towers were built for the chiefs and
                        priests. For our ancient cultures, the cemeteries were important resting places for the deceased
                        people. Therefore, our ancestors would strategically choose burial grounds in exceptionally
                        beautiful spots. Cemeteries were considered sacred places.
                        After all this we will get to Juliaca's Airport, we will display our IDs and get checked in,
                        then we will fly to Lima as our adventure ends.</p>
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
                                <li> Transfers to and from the Hotel, airport, train station and
                                    attractions.</li>
                                <li> Bus transportation for all the tours.</li>
                                <li> Round trip train tickets- Cusco - Machupicchu - Cusco</li>
                                <li> Round trip Bus tickets- Aguas Calientes - Machupicchu - Aguas
                                    Calientes.</li>
                                <li> Profesional Guide (English-Spanish)</li>
                                <li> Entrance tickets for all the attractions Machupicchu, Sacred
                                    Valley, city, Museums and churches.</li>
                                <li> 3 nights in a Hotel in Cusco.</li>
                                <li> 2 nights in a Hotel in Puno.</li>
                                <li> 4 BREAKFASTS/BUFFET at the Hotel, 1 LUNCH/BUFFET in the
                                    Sacred Valley.</li>
                                <li> Music and dance night show in the theater.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <ul>
                                <li> Flights Lima / Cusco / Lima.</li>
                                <li> Complete meals (lunches and dinners not specified in the
                                    program).</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <ul>
                                <li> Our prices include Inca Rail Executive Train service for your
                                    trip to Machupicchu.</li>
                                <li> Important: The hotel reservation is subject to space
                                    availability - Prices do not include</li>
                                VAT for Peruvian passengers and foreigners residing in Peru.</li>
                                <li> People of Peruvian, Ecuadorian, Bolivian, and Colombian
                                    nationalities have access to a special discount, for being members of the CAN.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="form text-center">
                        <!---------redes sociales------------------------>
                        <script type="text/javascript"
                            src="https://platform-api.sharethis.com/js/sharethis.js#property=6232ae6fcdbe0200193e185e&product=inline-share-buttons"
                            async="async"></script>
                        <div class="sharethis-inline-share-buttons"></div>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                            nonce="RA0e6tQN"></script>
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-6-days-5-nights"
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
                        <div data-onepage-title="Services" data-onepage-slug="services"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                            <h4 class="text-center">Similar Tours</h4>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="peru-5-days-4-nights" class="button">Perú for 5 days</a>
                            </div>
                            <div id="similares">
                                <div id="separador"></div>
                                <a href="machupicchu-accelerate" class="button">Machu Picchu Full Day</a>
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
                                <a href="peru-15-days-tour" class="button">Perú for 15 days</a>
                            </div>
                            <div id="separador"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
