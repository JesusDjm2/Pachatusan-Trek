@extends('layouts.general-en')
@section('metas')
    <title>12 days in Perú - Peru for 12 - Machu Picchu - Sacred Valley - City Tours - Lima - Nazca
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="12 days tour,tours in Peru, Luxury Cusco, Peru tours, Machu Picchu luxury, travel around Peru, travel agency for Perú." />
    <meta name="description"
        content="We present you a detailed tour for 12 days in Perú. travel around Perú for 12 days. Tour in perú 12 days. Arequipa, Lima, Cusco, Machu Picchu, Puno." />
    <meta property="og:url" content="https://www.andeanexclusive.com/peru-12-days">
    <meta property="og:title" content="Perú for 12 days - Machu Picchu - Sacred Valley - Lima - Puno - Arequipa">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://andeanexclusive.com/img/hermoso-peru.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link rel="canonical" href="https://www.andeanexclusive.com/peru-12-days" />
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
                                            <li><a href="peru-12-dias">Español</a></li>
                                            <li><a>Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="peru-12-dias">Es</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                <h1><?php $tour="12 DAYS TOUR IN PERÚ"; echo $tour?></h1>
                                                                <P><i class="fa fa-map-marker"></i> Lima - Cusco - Puno
                                                                    - Arequipa</P>
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
                    <a>Perú 12 Days</a>
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
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <div id="similares">
                                    <h4>Similar Tours</h3>
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
                                    <a href="biking" class="button">Biking in the andes</a>
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
                        <h2 id="titulo1">PERÚ 12 DAYS </h2>
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
                                <td>Arrival in Lima</td>
                            </tr>
                            <tr>
                                <th>DAY 02</th>
                                <td>Nazca Lines & Huacachina Adventure</td>

                            </tr>
                            <tr>
                                <th>DAY 03</th>
                                <td>Free Day in Lima</td>
                            </tr>
                            <tr>
                                <th>DAY 04</th>
                                <td>Arrival in Arequipa & Arequipa City Tour</td>
                            </tr>
                            <tr>
                                <th>DAY 05</th>
                                <td>Colca Canyon Tour: Arequipa - Chivay - Cabanaconde</td>
                            </tr>
                            <tr>
                                <th>DAY 06</th>
                                <td>Colca Canyon & Puno Arrival </td>
                            </tr>
                            <tr>
                                <th>DAY 07</th>
                                <td>Lake Titicaca Tour: Uros Floating Islands & Taquile Island</td>
                            </tr>
                            <tr>
                                <th>DAY 08</th>
                                <td>Arriving in Cusco: Puno - Cusco </td>
                            </tr>
                            <tr>
                                <th>DAY 09</th>
                                <td>Sacred Valley Tour: Cusco - Chinchero - Ollantaytambo</td>
                            </tr>
                            <tr>
                                <th>DAY 10</th>
                                <td>Short Inca Trail to Machu Picchu: Ollantaytambo - Aguas Calientes</td>
                            </tr>
                            <tr>
                                <th>DAY 11</th>
                                <td>Machu Picchu Excursion: Aguas Calientes - Machu Picchu - Cusco</td>
                            </tr>
                            <tr>
                                <th>DAY 12</th>
                                <td>Departing Cusco</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="separador"></div>
                    <h5>ITINERARY:</h5>
                    <h2 class="h2-tours"> Day 1: Arrival in Lima</h2>
                    <p>¡Bienvenidos! Welcome to Lima, Peru's largest city and central metropolitan hub, and home to
                        one-third of the country's population. Located at the site of a pre-Columbian indigenous Ychsma
                        settlement, which was conquered by the Inca empire in the 15th century and later by the Spanish
                        conquistadores, Lima has a fascinating history and a diverse mix of cultures. Amerindian,
                        European, Afro Peruvian, and Asian especially Chinese and Japanese influences make Lima a
                        dynamic and exciting city to explore.<br>

                        Lima's breezy location on the Pacific Ocean and mild desert climate make it the perfect city for
                        exploring on foot. Head downtown to mingle with locals, stretch your legs, and grab a bite to
                        eat in one of the many award-winning restaurants.<br>

                        <strong> Suggested activities include:</strong><br>

                        - Explore the historic center of Lima, a UNESCO World Heritage Site packed with fascinating
                        Spanish architecture. Start with a scenic tour of the colonial downtown, which emanates from the
                        main square. Stroll over to the 16th-century Cathedral, which took 80 years to construct and was
                        built in the grandiose style of the Spanish Empire.<br>
                        - Visit the Casa Aliaga, a colonial mansion granted by chief conquistador Francisco Pizarro to
                        Jerónimo de Aliaga, one of his captains, in 1535. This is the only house from that era that
                        still belongs to the same family.<br>
                        - Stroll around the Pueblo Libre district to the privately owned Larco Museum of pre-Columbian
                        art, housed in a beautifully restored viceregal mansion built over a 7th-century pre-Columbian
                        pyramid. The museum boasts a vast pre-Colonial collection of gold and silver artifacts, as well
                        as pieces of erotic art.<br>
                        - In the evening, head to the eclectic <strong> "Love Park" </strong> in the upscale coastal
                        district of Miraflores,
                        where you can admire a huge kissing statue and beautiful mosaic walls. The park is built on the
                        cliffs of Chorrillos and is a perfect place to enjoy a spectacular sunset over the Pacific.
                        Enjoy a nightcap at an open-air cafe or restaurant in the diverse Miraflores neighborhood.
                    </p>

                    <h2 class="h2-tours"> Day 2: Nazca Lines & Huacachina Adventure</h2>
                    <p>
                        Your day begins with a 6:30 AM pick-up from your hotel in Lima, followed by a scenic 4-hour
                        drive along the coast south to the seaside town of Paracas. After arriving, transfer to the
                        nearby airport in Pisco. From here you will take a 90-minute flight south aboard a 12-passenger
                        Cessna Grand Caravan to view the sprawling Nazca Lines. You will get a chance to see many of the
                        most famous geoglyphs, including the hummingbird, dog, tree, whale, lizard, and more.<br>

                        These massive images, the longest of which are 1,200 ft (370 m), vary from geometric lines to
                        figures of animals and people. Due to the stable environment of the Nazca desert, these
                        geoglyphs which were created by removing the top layer of iron oxide coated pebbles to reveal
                        the light colored clay underneath have been remarkably well preserved.<br>

                        After the flight head to Huacachina for an adventure in the desert dunes. Hop on a
                        sandboard to surf down the larger dunes.<br>

                        <strong> In the evening, transfer to your hotel in Paracas.</strong>
                    </p>

                    <h2 class="h2-tours"> Day 3: Free Day in Lima</h2>
                    <p>
                        Today you will transfer from your hotel in Paracas back to Lima. Upon arrival, take the day to
                        explore the city. Lima's breezy location on the Pacific Ocean and mild desert climate make it
                        the perfect city for exploring on foot. Head downtown to mingle with locals, stretch your legs,
                        and grab a bite to eat in one of the many award-winning restaurants.<br>

                        <strong> Suggested activities include:</strong><br>

                        - Explore the historic center of Lima, a UNESCO World Heritage Site packed with fascinating
                        Spanish architecture. Start with a scenic tour of the colonial downtown, which emanates from the
                        main square. Stroll over to the 16th-century Cathedral, which took 80 years to construct and was
                        built in the grandiose style of the Spanish Empire.<br>
                        - Visit the Casa Aliaga, a colonial mansion granted by chief conquistador Francisco Pizarro to
                        Jerónimo de Aliaga, one of his captains, in 1535. This is the only house from that era that
                        still belongs to the same family.<br>
                        - Stroll around the Pueblo Libre district to the privately owned Larco Museum of pre-Columbian
                        art, housed in a beautifully restored viceregal mansion built over a 7th-century pre-Columbian
                        pyramid. The museum boasts a vast pre-Colonial collection of gold and silver artifacts, as well
                        as pieces of erotic art.<br>
                        - In the evening, head to the eclectic "Love Park" in the upscale coastal district of
                        Miraflores,
                        where you can admire a huge kissing statue and beautiful mosaic walls. The park is built on the
                        cliffs of Chorrillos and is a perfect place to enjoy a spectacular sunset over the Pacific.
                        Enjoy a nightcap at an open-air cafe or restaurant in the diverse Miraflores neighborhood.
                    </p>
                    <img src="img/tours/lima-peru-tour.jpg" class="img-fluid max-width: 100%"
                        alt="Lima Perú, Tour en Lima, tour 12 días"><br><br>

                    <h2 class="h2-tours"> Day 4: Arrival in Arequipa & Arequipa City Tour </h2>
                    <p>This morning you will be transferred to the airport to catch the flight to Arequipa. Upon arrival
                        in Arequipa, you will be greeted and taken to your hotel to settle in.<br>

                        In the afternoon, you will start your city tour with an escape to the past, walking through the
                        Monastery Santa Catalina. Then continue the visit toward to the Compañia Church, famous because
                        of its incredible baroque style and the colorful Cupula of Saint Ignacio. Then head to
                        Arequipa’s Main Square, visiting its peculiar Cathedral with their Neo-renaissance style. After,
                        head towards the traditional district of Yanahuara, with its beautiful plaza and views of the
                        volcanoes Misti, Chachani and Pichu Pichu.<br>

                        After your tour, head back to your hotel in Arequipa for the evening.</p>

                    <h2 class="h2-tours"> Day 5: Colca Canyon Tour: Arequipa - Chivay - Cabanaconde </h2>
                    <p>
                        Start the day early with a filling breakfast at your hotel in Arequipa before setting off on a
                        scenic drive to <strong> Colca Canyon.</strong> This drive will last around 3 hours and will
                        take you through
                        spectacular high - altitude landscapes.<br>

                        As the road climbs up to the Reserva Nacional de <strong> Salinas y Aguada Blanca,</strong> keep
                        your eyes open
                        for wild vicuñas (smaller cousins of the llama) and viscachas (small rodents that resemble
                        rabbits). At the highest point of your journey, you’ll reach <strong> Patapampa Pass, </strong>
                        located at a
                        breathtaking 15,300 feet (4,820 m) above sea level. On the descent into the town of Chivay,
                        you’ll begin to see pre-Inca agricultural terraces that characterize the landscape of the
                        canyon. You’ll also see the Ampato, Sabancaya, and Misti volcanoes towering in the distance. In
                        Chivay, you’ll visit the main square and stop for lunch.<br>

                        After lunch, ride to the Calera Hot Springs, renowned for the therapeutic effects of its thermal
                        waters. You can either take a dip in the natural baths or just take in the stunning scenery.<br>

                        In the evening, transfer to your hotel in Cabanaconde to rest.
                    </p>
                    <img src="img/responsive/arequipa-peru-tours-tour.jpg" class="img-fluid max-width: 100%"
                        alt="cuidad de Arequipa"><br><br>

                    <h2 class="h2-tours"> Day 6: Colca Canyon & Puno Arrival </h2>
                    <p>
                        Early this morning, you’ll meet your guide and drive to <strong> Mirador Cruz del
                            Condor,</strong> one of the best
                        viewpoints over the canyon and home to the famed condors that gracefully soar on the thermal
                        currents. The road leads past picturesque villages and pre-Inca ruins dominated by the Ampato
                        and Hualca glaciers, both visible in the distance. Once you reach Cruz del Condor, you can stand
                        at the viewpoint and gaze into the depths of the canyon, which stretches nearly 4,000 feet
                        below.<br>

                        You will return to Chivay where you can enjoy lunch and browse the local market before starting
                        the journey by land to your Puno hotel. Puno is located 5-6 hours from Colca Canyon by car, and
                        you will be able to enjoy spectacular views of the Andes on the way.
                    </p>

                    <h2 class="h2-tours"> Day 7: Lake Titicaca Tour: Uros Floating Islands & Taquile Island </h2>
                    <p>
                        Be sure to fuel up at breakfast this morning, as this full-day experience will last around 9
                        hours.<br>

                        Your first stop will be to one of the floating <strong> Uros Islands.</strong> It is believed
                        that the Uros were
                        one of the first ethnic groups to populate the Andean region. The Uros people live on man-made
                        floating islands on Lake Titicaca. These islands are constructed out of the totora reeds that
                        grow in abundance around the lake. During your visit to these islands, you'll learn about the
                        everyday life and traditions of the Uros people.<br>

                        After your visit the floating island, you'll head to lunch at a local restaurant on <strong>
                            Taquile</strong>
                        Island*. Quinoa soup, fresh fish caught in the lake, and vegetables are typical lunchtime meals
                        in Taquile. After lunch, we'll explore Taquile Island. This island remained mostly isolated from
                        the outside world until the 1950s. As a result, the Taquileños follow a very different way of
                        life. On the island, decisions are made communally, there are no cars, and there is very little
                        electricity just the way the Taquileños like it. Taquile is also famous for the exquisite
                        weavings the locals produce. Traditionally, the men spin the thread, and the women design and
                        weave each piece. You'll have the opportunity to learn about the lives and traditions of the
                        Taquileños and appreciate the stunning views of Lake Titicaca from the island's shores.<br>

                        In the evening, walk back to the main dock in Taquile and board a boat back to Puno. Upon
                        arrival in Puno, transfer to your hotel for the evening.<br>

                        <strong> *Note: </strong> Taquile requires a strenuous climb up 500 steps to the main part of
                        the island.
                        Elevation ranges from around 12,000 ft at the lakeshore up to 13,000 ft at the highest point.
                    </p>

                    <h2 class="h2-tours"> Day 8: Arriving in Cusco: Puno - Cusco </h2>
                    <p>
                        In the morning, transfer to the Juliaca airport for your flight to Cusco. This ancient city is
                        the former capital of the Inca empire, which reigned from the 13th to 16th centuries after
                        conquering the Killke settlement the same location.<br>

                        Remember: you will be 11,000 feet (3,000 m) above sea level, so take it easy and remember to
                        drink lots of water. Since Cusco was designed by the Incas as a city for walking, start your
                        exploration of the narrow stone alleyways on foot. Take a walk through the plaza if the
                        weather is beautiful, it's a perfect place to sit on a balcony and have a cup of coca tea while
                        adjusting to the elevation.<br>

                        <strong> Suggested activities include:</strong><br>

                        * Visit the Coricancha, also known as "The
                        Temple of the Sun." The temple was built by the Incan
                        Emperor Pachacutec (1438 - 1572), and after the arrival of the Spaniards became the basis for
                        the construction of the Santo Domingo Convent.<br>
                        * See the Cathedral, the most imposing monument
                        in the central Plaza de Armas and a repository for
                        Cusco's colonial art. Its construction lasted for almost 100 years, beginning in 1560 and ending
                        in 1654.<br>
                        * Walk to Sacsayhuamán and next-door Quenqo,
                        both archaeological complexes used mostly for
                        religious and agricultural rituals, located 2.5 miles (4 km) from the city of Cusco. Built by
                        the Killke people, Sacsayhuamán is a marvel of ancient architecture, a monolithic fortress built
                        from giant blocks of stone, the origins and assembly of which remain a mystery.<br>
                        * Discover the elaborate Puca Pucara ruins an
                        architectural complex of alleged military use with
                        multiple plazas, baths, aqueducts, walls, and towers. It is believed that the entourage of the
                        Incan emperor used it while he stayed at Tambomachay, the elaborate estate and baths nearby.
                        Explore San Blas, an old bohemian quarter famous for its picturesque white walls, blue doors,
                        and creative artisan community.<br>
                        * Experience the legendary Mercado Central de
                        San Pedro, a large and diverse market famous for its
                        mouth-watering fruit juices, home-style meals, medicinal herb stalls, and rows of various meats,
                        bread, vegetables, and other necessities.<br>
                        * Eat dinner at a local Peruvian restaurant and
                        sample local flavors and cooking
                        techniques crackling pork, pickled vegetables, seasonal flavors, bread baked in earthen ovens,
                        roasted vegetables, and sweet donuts make for a delicious filling meal.
                    </p>

                    <h2 class="h2-tours"> Day 9: Sacred Valley Tour: Cusco - Chinchero - Ollantaytambo</h2>
                    <p>
                        This morning you will depart from your hotel in Cusco and travel to the town of Chinchero, which
                        the Inca believed to be the birthplace of the rainbow. In this typical Andean village you can
                        see extensive Inca terracing and some pretty colonial-era churches. The town is also known for
                        its weaving studios you'll have a chance to see the weavers producing handmade products.<br>

                        From Chinchero you'll continue to Moray, an incredible complex of stone amphitheaters developed
                        by the Inca. While the exact reason for the construction of this site remains unknown,
                        historians believe the Inca were constructed to experiment with crop production in different
                        micro-climates.<br>

                        From Moray, you will walk through farmlands (or take a bus if you prefer) to Salineras, an
                        incredible patchwork of stone pools and paths developed by the Inca as a means to harvest salt.
                        Spend the night in Ollantaytambo, a historic town in the Sacred Valley, set on the Urubamba
                        River, overlooked by massive stone fortresses. You'll have a chance to explore this charming
                        village, its cobbled streets, and pretty central plazas.
                    <p>
                        <img src="img/responsive/valle-sagrado-sacred-valley.jpg" class="img-fluid max-width: 100%"
                            alt="Sacred valley od the incas">
                    <h2 class="h2-tours"> Day 10: Short Inca Trail to Machu Picchu: Ollantaytambo - Km 104 - Aguas
                        Calientes </h2>
                    <p>
                        Early in the morning, we will take the train from <strong> Ollantaytambo</strong> to Km 104
                        where the short Inca
                        Trail starts. By train, we see how the valley turns into a canyon and the scenery begins to
                        alter as the cloud forests appear on our approach to Machu Picchu. We will disembark the
                        train
                        at Km 104 and start the hike along a challenging uphill path.<br>

                        Start the trek to your first archeological <strong> site—Chachabamba.</strong> This
                        beautiful
                        site is very well
                        preserved thanks to its location in the valley and was likely used for religious purposes
                        and as
                        a gatekeeping point for this entrance to Machu Picchu.<br>

                        From here ascend for 3 hours to the ruins of Wiñay Wayna (2732 m / 8964 ft), an ancient rest
                        area for travelers on the Inca trail. Here, we'll stop to enjoy our delicious boxed lunch,
                        with
                        superb views of the massive green mountains and native orchids.<br>

                        The trail then becomes gentler and continues through the semi-tropical cloud forest to
                        Intipunku
                        (Sun Gate) where you'll enjoy your first panoramic views of Machu Picchu. Descend half an
                        hour
                        to the citadel for a short break and an opportunity for photos.<br>

                        We won't be exploring the ruins today, as it will be getting dark. After passing through the
                        Sun
                        Gate, we'll cross the site to take the bus down to Aguas Calientes, where you'll check into
                        our
                        hotel to rest and relax in anticipation of a full-day visit to Machu Picchu tomorrow.<br>

                        * Maximum Altitude: 2732 m / 8964 ft<br>
                        * Minimum Altitude: 2088 m / 6850 ft<br>
                        * Distance Travelled: 10.79 km / 6.67 ml (to
                        Inti Punku)<br>
                        * Approximate Walking Time: 7 hours
                    <p>
                        <img src="img/responsive/llama-from-cusco.jpg" class="img-fluid max-width: 100%"
                            alt="Llama de cusco animal">
                    <h2 class="h2-tours"> Day 11: Machu Picchu Excursion: Aguas Calientes - Machu Picchu - Cusco
                    </h2>
                    <p>
                        Get an early start to beat the crowds and get the best views of the ancient ruins. From
                        Aguas
                        Calientes, it's an easy 25-minute bus ride up to the <strong> Machu Picchu </strong>
                        ruins.<br>

                        This 15th-century Inca citadel is located at 7,970ft (2,430 m) and is a masterpiece of
                        engineering that served as a sanctuary and retreat for the Incan Emperor Pachacutec and his
                        royal court. Machu Picchu, which means "Old Mountain," is considered a World Heritage Site
                        by
                        UNESCO and is one of the new Seven Wonders of the World.<br>

                        Built as a seasonal residence for the Inca family, Machu Picchu was rarely home to more than
                        800
                        people, and during the royals' absence, a mere 100 servants would remain at the site to
                        maintain
                        the grounds. Machu Picchu was abandoned 100 years after construction due to the Spanish
                        conquest
                        and remained largely hidden from the outside world until the early 20th century.<br>

                        Your guide will lead you around the site and explain the different buildings and curious
                        corners
                        of the building complex. Approximately one-third of the site has been reconstructed into its
                        original structure, giving visitors a sense of the grandeur and artistry of the original
                        citadel.<br>

                        After the tour, take the bus back to <strong> Aguas Calientes</strong> for lunch and then
                        board
                        the train to
                        Ollantaytambo. Upon arrival in <strong> Ollantaytambo,</strong> meet your driver for your
                        transfer back to Cusco.
                    <p>
                    <h2 class="h2-tours"> Day 12: Departing Cusco </h2>
                    <p>
                        Today is your last day in Peru! You will be met at your hotel for a transfer to Cusco
                        Airport,
                        where you will transfer to your international departure. ¡Buen Viaje!
                    <p>

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
                            <span class="check">✓</span> Transfers to and from the Hotel, airport, train station, and attractions.<br>
                            <span class="check">✓</span> Bus transportation for all the tours.<br>
                            <span class="check">✓</span> Round trip train tickets- Cusco - Machupicchu - Cusco<br>
                            <span class="check">✓</span> Round trip Bus tickets- Aguas Calientes - Machupicchu - Aguas Calientes.<br>
                            <span class="check">✓</span> Profesional Guide (English-Spanish)<br>
                            <span class="check">✓</span> Entrance tickets for all the attractions Machupicchu, Sacred Valley, city,
                            Museums, and
                            churches.<br>
                            <span class="check">✓</span> 3 nights in a hotel in Cusco.<br>
                            <span class="check">✓</span> 2 nights in a hotel in Puno.<br>
                            <span class="check">✓</span> 4 BREAKFASTS/BUFFET at the Hotel, 1 LUNCH/BUFFET in the Sacred Valley.<br>
                            <span class="check">✓</span> Music and dance night show in the theater.
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus"></i>  Flights Lima / Cusco / Lima.<br>
                            <i class="fa fa-minus"></i>  Complete meals (lunches and dinners not specified in the program).</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <i class="fa fa-minus"></i>  Our prices include Inca Rail the Executive Train service for your trip to
                            Machupicchu.<br>
                            <i class="fa fa-minus"></i>  Important: The hotel reservation is subject to space availability - Prices do not
                            include VAT for Peruvian passengers and foreigners residing in Peru.<br>
                            <i class="fa fa-minus"></i>  You can request Vistadome Executive train service Increasing 45 Dollars per
                            person.<br>
                            <i class="fa fa-minus"></i>  You can request Hiram Bingham the luxury train service Increasing 820 Dollars per
                            person.<br>
                            <i class="fa fa-minus"></i>  You can request the tour package in private service. (Check rates with us).<br>
                            <i class="fa fa-minus"></i>  People of Peruvian, Ecuadorian, Bolivian, and Colombian nationalities have access
                            to a special discount, for being members of the CAN.
                        </div>
                    </div>
                    @include('layouts.payments')
                    <div id="separador"></div>
                    <!-----Booking---------->
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
                        <div class="fb-comments" data-href="https://andeanexclusive.com/peru-12-days"
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
                                        <a class='entry-link text-center' href="peru-18-days-tour">
                                            <img width="400" height="400" src='img/thumbnail/cusco-01.JPG'
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Cusco tours de 6 días" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href="peru-18-days-tour" class='button'>Tour in Perú for 18 days</a>
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
                                        <a class='entry-link text-center' href="peru-12-days">
                                            <img width="400" height="400" src="img/thumbnail/chincheros.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="peru-12-days">Perú for 12 days</a>
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
@include('layouts.footer')
