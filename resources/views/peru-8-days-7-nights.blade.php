@extends('layouts.general-en')
@section('metas')
    <title>8 days in Perú - Peru for 8 days 7 nights - Machu Picchu - Sacred Valley - City Tours - Lima - Nazca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="8 days tour, Luxury Cusco, Peru tours, Machu Picchu luxury, VISIT pERU FOR 8 DAYS, reserve peru for 8 days, 8 days around Perú" />
    <meta name="description" content="We present you a detailed tour for 5 days during your stay in Cusco." />
    <meta property="og:title" content="Perú for 8 days - Machu Picchu - Sacred Valley - Cusco - Lima">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-8-days-7-nights" />
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
                                    <a href="{{ route('peru-8-dias') }}">
                                        <button type="button" class="botondjm">Español</button>
                                    </a>
                                </li>
                                <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr' target="_blank">+51
                                        979 721 194</a></li>
                                <li id="display2" class="menu-has-children">
                                    <a href="{{ route('peru-8-dias') }}">
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
                                                            <h1><?php $tour = 'PERÚ 8 DAYS 7 NIGHTS';
                                                            echo $tour; ?></h1>
                                                            <p><i class="fa fa-map-marker"></i> Lima - Cusco -
                                                                Machu Picchu</p>
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
                <div class="col-lg-6 col-sm-10"><a href="{{ route('index') }}">Home</a> /
                    <a href="around">Popular</a> /
                    <a>Perú 8D - 7N</a>
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
                                <a href="adventures/tour-atv" class="button">Motocross en los cielos</a>
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
                        <h1 id="titulo1">Marvelous Perú</h1>
                        <div id="separadordjm2"></div>
                        <i class="fa fa-clock-o"></i> 8 days <br>
                        <i class="fa fa-map-marker"></i> Lima - Cusco - Machu Picchu <br>
                        <i class="fa fa-exclamation-circle"></i> Reserve 30 days in advance
                    </center>
                    <div id="separador"></div>
                    <h5>Overview</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>DAY 01</th>
                                <td>Arrival in Lima</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Lima City & Food Tour</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Arrival in Cusco, Transfer to Hotel </td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Cusco: Free day to Explore</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Sacred Valley Tour: Cusco - Chinchero - Ollantaytambo</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>Short Inca Trail to Machu Picchu: Ollantaytambo - Aguas Calientes</td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Machu Picchu Excursion: Aguas Calientes - Machu Picchu - Cusco</td>
                            </tr>
                            <tr>
                                <th>DAY 08</th>
                                <td>Departing Cusco</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARY:</h5>
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
                    <h2 class="h2-tours">Day 1. Arrival in Lima</h2>
                    <p>
                        Welcome to Lima, Peru's largest city and central metropolitan hub, and home to one-third of the
                        country's population. Located at the site of a pre-Columbian indigenous Ychsma settlement, which
                        was conquered by the Inca empire in the 15th century and later by the Spanish conquistadores,
                        Lima has a fascinating history and a diverse mix of cultures. Amerindian, European,
                        Afro-Peruvian, and Asian—especially Chinese and Japanese—influences make Lima a dynamic and
                        exciting city to explore.<br><br>

                        Lima's breezy location on the Pacific Ocean and mild desert climate make it the perfect city for
                        exploring on foot. Head downtown to mingle with locals, stretch your legs, and grab a bite to
                        eat in one of the many award-winning restaurants. <br><br>
                    </p>

                    <h2 class="h2-tours">Day 2. Lima City & Food Tour</h2>
                    <p>Spend the day discovering Lima through its food. With a vibrant combination of Indigenous
                        American, African, Asian, and European culinary influences, Lima is one of the world's most
                        impressive gastronomic and cultural centers.<br><br>

                        Start the day early in Lima's historical center to visit a local mercacado—a fresh food
                        market—to taste the local produce and sample spices, fruits, and various baked bread. Taste
                        different types of Piscos—a high proof brandy produced locally in the wine-making regions of
                        Peru and Chile. Attend a cooking class and learn how to make ceviche, a fresh seafood dish
                        marinated with salt and lime juice, and the traditional pisco sour—a Peruvian classic.<br><br>

                        Stop for lunch at one of Lima's top restaurants and enjoy a delicious meal on a patio
                        overlooking the Pacific ocean. Stroll to the bohemian district of Barranco—a popular oceanside
                        neighborhood for artists, tourists, and locals alike—for a relaxed afternoon drinking coffee and
                        sampling Peruvian desserts.</p>
                    <img loading="lazy" alt="Tour to Machu Picchu Perú" width="100%"
                        src="{{ asset('img/galeria/Ceviche-peruano-tour-gastronomico.webp') }}">
                    <span>Peruvian ceviche</span><br><br>

                    <h2 class="h2-tours">Day 3. Arrival in Cusco</h2>
                    <p>
                        Head to the Lima airport for your transfer flight to Cusco.<br><br>

                        Remember: you will be 11,000 feet (3,000 m) above sea level, so take it easy and remember to
                        drink lots of water. Take a walk through the plaza if the weather is beautiful, it's a perfect
                        place to sit and have a cup of coca tea while adjusting to the elevation.<br><br>

                        In the evening, take the opportunity to experience Cusco's celebrated culinary heritage at a
                        local restaurant.
                    </p>
                    </p>

                    <h2 class="h2-tours">Day 4. Free day in Cusco</h2>
                    <p>
                        Today you will explore Cusco and the surrounding ancient ruins. Since Cusco was designed by the
                        Incas as a city for walking, start your exploration of the narrow stone alleyways on foot.
                    </p>
                    <p><strong>Suggested activities: </strong></p>
                    <ul>
                        <li>Visit the <strong> Coricancha,</strong> also known as "The Temple of the Sun." The temple
                            was built by the Incan
                            Emperor Pachacutec (1438 - 1572), and after the arrival of the Spaniards became the basis
                            for
                            the construction of the Santo Domingo Convent.
                        </li>
                        <li>
                            See the<strong> Cathedral,</strong> the most imposing monument in the central Plaza de Armas
                            and a repository for
                            Cusco's colonial art. Its construction lasted for almost 100 years, beginning in 1560 and
                            ending
                            in 1654.
                        </li>
                        <li>
                            Walk to <strong>Sacsayhuamán</strong> and next-door Quenqo, both archaeological complexes
                            used mostly for
                            religious and agricultural rituals, located 2.5 miles (4 km) from the city of Cusco. Built
                            by
                            the Killke people, Sacsayhuamán is a marvel of ancient architecture, a monolithic fortress
                            built
                            from giant blocks of stone, the origins and assembly of which remain a mystery.
                        </li>
                        <li>
                            Discover the elaborate<strong> Puca Pucara</strong> ruins—an architectural complex of
                            alleged military use with
                            multiple plazas, baths, aqueducts, walls, and towers. It is believed that the entourage of
                            the
                            Incan emperor used it while he stayed at Tambomachay, the elaborate estate and baths nearby.
                        </li>
                        <li>
                            Explore <strong>San Blas,</strong> an old bohemian quarter famous for its picturesque white
                            walls, blue doors,
                            and creative artisan community.
                        </li>
                        <li>
                            Experience the legendary<strong> Mercado Central de San Pedro,</strong> a large and diverse
                            market famous for its
                            mouth-watering juices, home-style meals, medicinal herb stalls, and rows of various meats,
                            loaves of bread, vegetables, and other necessities.
                        </li>
                        <li>
                            <strong>Eat lunch at a local Peruvian restaurant</strong> and sample local flavors and
                            cooking
                            techniques—crackling pork, pickled vegetables, seasonal flavors, bread baked in earthen
                            ovens,
                            roasted vegetables, and sweet donuts make for a delicious and filling meal.
                        </li>
                    </ul>
                    <img loading="lazy" alt="Tour to Cusco Perú" width="100%"
                        src="{{ asset('img/galeria/cusco-maravilloso.webp') }}">
                    <span>Peruvian ceviche</span><br><br>


                    <h2 class="h2-tours">Day 5. Sacred Valley Tour - Cusco, Chinchero, Ollantaytambo</h2>
                    <p>
                        Today you will depart from your hotel in Cusco for a visit to the village of Chinchero, believed
                        by the Inca to be the birthplace of the rainbow. You will see extensive Inca terraces and
                        several small colonial-era churches, before exploring Chinchero's famous textile production and
                        weaving crafts. Tour a weaver's studio and learn about the process of cleaning and producing the
                        wool, then browse the selection of vibrant textiles for the perfect handmade gift.<br><br>

                        Continue to Moray, a series of incredible stone amphitheaters built by the Inca. Considered one
                        of the world's most innovative and architecturally advanced cultures, the Inca likely used these
                        stone complexes for experimental agriculture in micro-climates.<br><br>

                        From Moray walk (or take a bus) to the Salineras—the Moray Salt Flats—an intricate network of
                        stone pools developed by the Inca to harvest salt through evaporation. These salt flats are
                        still in use today and are carefully maintained by a close community with regulations and rules
                        that date back to the time of the Inca.<br><br>

                        Spend the night in the small historic town of Ollantaytambo, high in the Sacred Valley. Explore
                        the surrounding stone fortresses, archeological ruins, and cobblestone streets of the town,
                        which remain remarkably intact similar to their original appearances after construction by the
                        Inca.
                    </p>
                    <img loading="lazy" alt="Ollantaytambo Fortress in Sacred Valley" width="100%"
                        src="{{ asset('img/galeria/ollantaytambo-sacred-valley-of-the-incas-exclusive.webp') }}">
                    <span>Ollantaytambo Fortress</span><br><br>

                    <h2 class="h2-tours">Day 6. Short Inca Trail to Machu Picchu - Ollantaytambo to Aguas
                        Calientes</h2>
                    <p>
                        Early in the morning, we will take the train from Ollantaytambo to Km 104 where the short Inca
                        Trail starts. By train, we see how the valley turns into a canyon and the scenery begins to
                        alter as the cloud forests appear on our approach to Machu Picchu. We will disembark the train
                        at Km 104 and start the hike along a challenging uphill path.<br><br>

                        Start the trek to your first archeological site—Chachabamba. This beautiful site is very well
                        preserved thanks to its location in the valley and was likely used for religious purposes and as
                        a gatekeeping point for this entrance to Machu Picchu.<br><br>

                        From here ascend for 3 hours to the ruins of Wiñay Wayna (2732 m / 8964 ft), an ancient rest
                        area for travelers on the Inca trail. Here, we'll stop to enjoy our delicious boxed lunch, with
                        superb views of the massive green mountains and native orchids.<br><br>

                        The trail then becomes gentler and continues through the semi-tropical cloud forest to Intipunku
                        (Sun Gate) where you'll enjoy your first panoramic views of Machu Picchu. Descend half an hour
                        to the citadel for a short break and an opportunity for photos.<br><br>

                        We won't be exploring the ruins today, as it will be getting dark. After passing through the Sun
                        Gate, we'll cross the site to take the bus down to Aguas Calientes, where you'll check into our
                        hotel to rest and relax in anticipation of a full-day visit to Machu Picchu tomorrow.
                    </p>
                    <h2 class="h2-tours">Day 7. Machu Picchu excursion: Aguas Calientes - Machu Picchu - Cusco
                    </h2>
                    <p>
                        Today we will catch the bus up to Machu Picchu to enjoy the ruins. It is a 25-minute bus ride to
                        the sanctuary of Machu Picchu (2400 m). Our guide will lead us in our exploration and discovery
                        of the many curious corners within the enigmatic Citadel of Machu Picchu. The guided tour will
                        have an average duration of 2 hours.<br><br>

                        Afterward, you will still have some time to visit other places that you did not see with your
                        guide. For example, heading west from the center of Machu Picchu, the Inca bridge is a 30 minute
                        / 2 Km or so walk along a narrow path. If you feel like an uphill challenge, you have the option
                        to climb the infamous Huayna Picchu or Machu Picchu mountain. It is important to know that to
                        climb these peaks, you need to buy separate tickets in advance.<br><br>

                        At the end of our visit, we will take the bus down to Aguas Calientes for lunch and then board
                        the train to Ollantaytambo. On arrival, we will be met by our driver who will transfer us to our
                        hotel in Cusco.
                    </p>
                    <h2 class="h2-tours">Day 8. Departing Cusco</h2>
                    <p>
                        Today is your last day in Peru. You will be met at your hotel for a transfer to Cusco Airport,
                        where you will transfer to your international departure. ¡Buen viaje!
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
                            <ul>
                                <li>Transfers to and from the hotel, airport, train station, and
                                    attractions.</li>
                                <li> Bus transportation for all the tours.</li>
                                <li> Round trip train tickets- Cusco - Machupicchu - Cusco</li>
                                <li> Round trip Bus tickets- Aguas Calientes - Machupicchu - Aguas
                                    Calientes.</li>
                                <li> Profesional Guide (English-Spanish)</li>
                                <li> Entrance tickets for all the attractions Machupicchu, Sacred
                                    Valley, city , Museums, and
                                    Churches.</li>
                                <li> 3 nights in a hotel in Cusco.</li>
                                <li> 2 nights in a hotel in Puno.</li>
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
                                    availability - Prices do not include
                                    VAT for Peruvian passengers and foreigners residing in Peru.</li>
                                <li> People of Peruvian, Ecuadorian, Bolivian and Colombian
                                    nationalities have access to a
                                    special discount, for being members of the CAN.</li>
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-8-days-7-nights"
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
                                    <a href="adventures/tour-atv" class="button">Motocross en los cielos</a>
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
