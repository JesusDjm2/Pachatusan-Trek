@extends('layouts.admin')
@section('contenido')
    <section class="banner-about">
        <div class="banner-content">
            <h1>What is the Pachatusan?</h1>
            {{-- <h5>Live unforgettable experiences, have surprising adventures, and meet places full of magic and mysticism.
            </h5> --}}
            <a href="#empezar" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>  
    <section id="empezar" class="decorative-box d-flex align-items-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-start align-self-center">
                    <h5>About Us</h5>
                    <h3 style="font-family: 'Dancing Script', cursive;">With the permission of the Apus</h3>
                    <p>
                        In Andean cosmo-vision, the concept of Pacha does not only refer to Mother Earth. The other meaning
                        is linked to the concept of time and space represented by the serpent called Chocora. The original
                        term Tusay means to prop-up or to support. Pachatusan, therefore, can be interpreted as the concept
                        of the permanency of time and space in infinity. The Apu Pachatusan is one of the sacred or guardian
                        mountains of the city of Cusco, located to the east (in the Antisuyo area).

                        According to chroniclers of the Spanish invasion this mountain was worshipped with many offerings,
                        indicating that the place was of great importance. At the base of the Pachatusan the archaeological
                        complex of Tipon is found, which is believed to have been principally a place to worship water and
                        fertility.
                    </p>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('img/staff/about-us-pachatusan.jpg') }}" alt="Staff Pachatusan Trek"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="parallax-about">
        <div class="overlay"></div>
        <div class="content mt-5 mb-5">
            <div class="row">
                <div class="col-lg-4">
                    <h3>MOTIVATION</h3>
                    <p>
                        Our passion and vocation to service has led us to develop our professional activities in different
                        natural places in our country. These feelings and abilities have been the principal motivation to
                        start Pachatusantrek.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>VISION</h3>
                    <p>
                        Throughout this period our company will seek to lead in the adventure tourism market in mountain
                        trekking and traditional tourism in the Cusco region. Our emphasis is in the social, economic, and
                        environmental aspects combined with the development of sustainable tourism.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>MISION</h3>
                    <p>
                        The mission of our organization is to lead in the development of sustainable tourism in the Cusco
                        region, as well as nationally, always seeking to fulfill our clients and collaborators expectations
                        by complying with quality and sustainability standards.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="our-values">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <h3 class="text-secondary">Services</h3>
                    <h2>We offer you:</h2>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Travel Consultants</h4>
                    <p>We bring you the best choices of tourist services so that your trip exceeds your expectations.</p>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Office and field operations</h4>
                    <p>We offer the choice of traditional and adventure trips, all with transport, guide, office and field
                        staff.</p>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Traditional and trekking guides</h4>
                    <p>We bring you qualified guides, with extensive knowledge, who will take you on a fantastic trip
                        through the history and geography of the Andes.</p>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Tailor-made trips</h4>
                    <p>We adapt our services to suit your timeframe, budget, destination and trip planning.</p>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Reservations</h4>
                    <p>You can reserve flights, hotels, transfers, restaurants and excursions with the security of knowing
                        you will get the service agreed upon.</p>
                </div>
                <div class="col-lg-12 mt-5">
                    <h2 class="">Our Values:</h2>
                    <div class="values-list">
                        <div class="value-item">Respect</div>
                        <div class="value-item">Honesty</div>
                        <div class="value-item">Commitment</div>
                        <div class="value-item">Responsibility</div>
                        <div class="value-item">Quality Service</div>
                        <div class="value-item">Empathy</div>
                        <div class="value-item">Team Work</div>
                        <div class="value-item">Trust</div>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <h3 class="text-secondary">Why to choose us?</h3>
                    <h2>Great Reasons</h2>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="company-info">
        <div class="container">
            <div class="info-section">
                <h2>We are a Registered Company</h2>
                <p>We are a legally and formally constituted company, registered in all the instances required by the
                    Peruvian pertinent law requirements. Pachatusantrek develops its treks according to the Adventure
                    Tourism Law enacted by the Peruvian Government.</p>
            </div>

            <div class="info-section">
                <h2>We are a Licensed Inca Trail Operator</h2>
                <p>We are licensed operators by the Peruvian Government to develop our Tourism Project: “Sustainable Tourism
                    Management in the Operation of Treks in the Inca Trail Network of the Historic Sanctuary of Machu
                    Picchu”. By developing, ourselves, our sustainable tourist operation in the Inca Road Network of the
                    Historic Sanctuary of Machu Picchu, we can guarantee the quality of the service we offer since our walks
                    are supervised in the countryside, during the treks.</p>
            </div>

            <div class="info-section">
                <h2>We Practice Sustainable Tourism</h2>
                <p>We are licensed operators by the Peruvian Government to develop our Tourism Project: “Sustainable Tourism
                    Management in the Operation of Treks in the Inca Trail Network of the Historic Sanctuary of Machu
                    Picchu”. By developing, ourselves, our sustainable tourist operation in the Inca Road Network of the
                    Historic Sanctuary of Machu Picchu, we can guarantee the quality of the service we offer since our walks
                    are supervised in the countryside, during the treks.</p>
            </div>
            <div class="info-section">
                <h2>PROFESIONALLY TRAINED STAFF</h2>
                <p>Our field staff has several years of experience developing mountain walks, and in Pachatusantrek we
                    regularly train our field and office personel for the optimal development of our activities.</p>
            </div>
            <div class="info-section">
                <h2>FIRST QUALITY CAMPING EQUIPMENT</h2>
                <p>The camping equipment we use is of the highest quality, offering our walkers the necessary comfort to
                    face the physical challenge of our activity. 4 season tents; sleeping bags designed to withstand
                    temperatures of -10 ° C / 14 ° F; polar sheets for greater thermal retention or cotton sheets for warmer
                    climates; inflatable mats that provide a better rest. All these products are of the best known brands in
                    outdoor activities.</p>
            </div>
            <div class="info-section">
                <h2>FRESH WELL BALANCED MENU</h2>
                <p>The food we provide is top quality using fresh and organic supplies. Likewise, the menus we offer have
                    been designed by a nutritionist, balancing the diet with the physical effort to be made. We offer
                    vegetarian options as required by our customers, at no additional cost. Come and enjoy our walks with
                    the most delicious and nutritious food service overlooking wonderful landscapes.</p>
            </div>

            <div class="info-section">
                <h2>SEASONED TREKKING GUIDES</h2>
                <p>Our trekking guide team has extensive experience and are highly trained in different aspects, such as
                    culture, history, geography, first aid and other matters. We want to ensure an excellent time for
                    learning and recreation.</p>
            </div>
            <div class="info-section">
                <h2>HEALTH AND SAFETY</h2>
                <p>Our first aid kit is supervised by a specialist in altitude sickness and walking. We have an oxygen tank,
                    first aid kit, fracture immobilizers, tensiometer, stethoscope; following the standards established by
                    the competent authorities. According to the clients’ needs, we have agreements with the best clinics
                    specializing in altitude sickness and general medicine.</p>
            </div>
            <div class="info-section">
                <h2>ACCURATE AND UPDATED INFORMATION ABOUT OUR TREKS</h2>
                <p>All the routes we offer have been geo-referenced and recognized by Pachatusantrek SAC. We can therefore
                    reply to any questions you have about them, and we can expand upon the information given for any route
                    requested. By knowing all the routes we can advise our adventure partners in the best way.</p>
            </div>
        </div>
    </section> --}}
    <section class="bg-light">
        <div class="container">
            <div class="accordion company-info-accordion pb-2" id="companyAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            We are a Registered Company
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            We are a legally and formally constituted company, registered in all the instances required by
                            the
                            Peruvian pertinent law requirements. Pachatusantrek develops its treks according to the
                            Adventure
                            Tourism Law enacted by the Peruvian Government.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            We are a Licensed Inca Trail Operator
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            We are licensed operators by the Peruvian Government to develop our Tourism Project:
                            “Sustainable
                            Tourism Management in the Operation of Treks in the Inca Trail Network of the Historic Sanctuary
                            of
                            Machu Picchu”. By developing, ourselves, our sustainable tourist operation in the Inca Road
                            Network
                            of
                            the Historic Sanctuary of Machu Picchu, we can guarantee the quality of the service we offer
                            since
                            our
                            walks are supervised in the countryside, during the treks.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            We Practice Sustainable Tourism
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            We are licensed operators by the Peruvian Government to develop our Tourism Project:
                            “Sustainable
                            Tourism Management in the Operation of Treks in the Inca Trail Network of the Historic Sanctuary
                            of
                            Machu Picchu”. By developing, ourselves, our sustainable tourist operation in the Inca Road
                            Network
                            of
                            the Historic Sanctuary of Machu Picchu, we can guarantee the quality of the service we offer
                            since
                            our
                            walks are supervised in the countryside, during the treks.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Professionally Trained Staff
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Our field staff has several years of experience developing mountain walks, and in Pachatusantrek
                            we
                            regularly train our field and office personnel for the optimal development of our activities.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            First Quality Camping Equipment
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            The camping equipment we use is of the highest quality, offering our walkers the necessary
                            comfort
                            to face the physical challenge of our activity. 4 season tents; sleeping bags designed to
                            withstand
                            temperatures of -10 ° C / 14 ° F; polar sheets for greater thermal retention or cotton sheets
                            for
                            warmer climates; inflatable mats that provide a better rest. All these products are of the best
                            known brands in outdoor activities.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Fresh Well Balanced Menu
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            The food we provide is top quality using fresh and organic supplies. Likewise, the menus we
                            offer
                            have been designed by a nutritionist, balancing the diet with the physical effort to be made. We
                            offer vegetarian options as required by our customers, at no additional cost. Come and enjoy our
                            walks with the most delicious and nutritious food service overlooking wonderful landscapes.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Seasoned Trekking Guides
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Our trekking guide team has extensive experience and are highly trained in different aspects,
                            such
                            as culture, history, geography, first aid and other matters. We want to ensure an excellent time
                            for
                            learning and recreation.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Health and Safety
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Our first aid kit is supervised by a specialist in altitude sickness and walking. We have an
                            oxygen
                            tank, first aid kit, fracture immobilizers, tensiometer, stethoscope; following the standards
                            established by the competent authorities. According to the clients’ needs, we have agreements
                            with
                            the best clinics specializing in altitude sickness and general medicine.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Accurate and Updated Information About Our Treks
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            All the routes we offer have been geo-referenced and recognized by Pachatusantrek SAC. We can
                            therefore reply to any questions you have about them, and we can expand upon the information
                            given
                            for any route requested. By knowing all the routes we can advise our adventure partners in the
                            best
                            way.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Limited Group Sizes
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            The size of our groups in shared services is between 4 and 10 people, guaranteeing a
                            personalized
                            service, with an assistant guide for 8 passengers or more.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            Five Star Amenities
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            On private treks we offer services such as solar shower, hot water bottles, pillows, and
                            biodegradable personal toiletries kit made from Andean herbs.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            Safe and Reliable Transportation
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            We use spacious and comfortable tourist transport, with professional experienced drivers. All
                            vehicles have an oxygen tank and first aid kit. They also have the necessary documentation for
                            the
                            local authorities.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThirteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                            Premier Level Services
                        </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Our services are at the level of the best adventure tour operators in Peru. We assure you that
                            by
                            choosing our services your expectations, and those of your clients, will be surpassed.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFourteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                            Environmentally Conscious
                        </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Because we have as work philosophy the respect and love for the nature, counting always with …
                            “The
                            protection of Pachamama (Mother Earth) and the permission of the Apus (Sacred Mountains).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section bg-light">
        <div class="container">
            <h2 class="section-title">Get to Know Our Team</h2>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Jessica.jpg') }}" alt="Jessica Llontop">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Jessica Llontop</h3>
                    <p class="team-position">Travel Consultant</p>
                    <p class="team-description">
                        Since she was very young she has always been interested in travel, and feeling it to be her
                        vocation, she decided to study and work in tourism. This activity led her to get to know many places
                        in Peru, and some abroad, and to form an adequate perception of tourist services offered to our
                        visitors.
                        <br>
                        She has worked in Lima airport, travel agencies and leading tour operators in Lima, Cusco and Puerto
                        Maldonado.
                        <br>
                        Jessica specializes in travel advice and organization of trips, and always tries to give our clients
                        the high standard of service that she would expect to receive herself.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Sergio.jpg') }}" alt="Sergio Cuba">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Sergio Cuba</h3>
                    <p class="team-position">Guide and Trekking Consultant</p>
                    <p class="team-description">
                        He was born in the city of Lima, in the beautiful district of Miraflores, which used to be the
                        Curacazgo de Sulco, belonging to the Lord of Ichsma (Pachacamaq).
                        <br><br>
                        He has always felt an overwhelming attraction towards nature, which he has developed in the sea,
                        coast, mountains and jungle.
                        <br><br>
                        Sergio has been lucky enough to have experienced working in various places including Lima, Arequipa,
                        Colca Canyon, Puerto Maldonado, Lake Sandoval – Tambopata, Cuzco and its magnificent surroundings.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Monica.jpg') }}" alt="Monica Jurado Gil">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Monica Jurado Gil</h3>
                    <p class="team-position">Booking Area</p>
                    <p class="team-description">
                        She was born in Lima and is our service reservation officer, where she has developed her duties with
                        efficiency. Lover of nature, she enjoys running in the country and spending time with her family and
                        friends. Having fallen in love with the city of Cusco she has adopted it as her permanent residence.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Mayling.jpg') }}" alt="Maylin La Rosa Espinoza">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Maylin La Rosa Espinoza</h3>
                    <p class="team-position">Sales Department</p>
                    <p class="team-description">
                        A travel lover, she was born in the city of Lima, since 2014 she has been part of the Pachatusantrek
                        team, developing as an over-the-counter sales executive and her passion is traveling and discovering
                        new customs. She loves Peru and wants to show it to the world.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Gloria.jpg') }}" alt="Gloria Muñoz">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Gloria Muñoz</h3>
                    <p class="team-position">Accountant</p>
                    <p class="team-description">
                        Our accountant, Gloria was born in the warm city of Santa Ana – Quillabamba – Cusco, where she
                        enjoyed her childhood surrounded by the wonderful nature. Living in the city of Cusco with her
                        family, she dedicates her time with both her family commitments and studying for her accounting
                        career at the San Antonio Abad University in Cusco. Part of her job satisfaction is being able to
                        develop as a professional in the tourism sector. She understands the history and nature of our
                        country and loves and enjoys all that it has to offer.
                        <br><br>
                        As a mother and wife, she shares with her family the dream of being able to learn more about the
                        nature of our country, such as the Manu National Park; as well as other protected natural areas
                        around the world.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Martha.jpg') }}" alt="Martha Orozco Castro">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Martha Orozco Castro</h3>
                    <p class="team-position">Maintenance</p>
                    <p class="team-description">
                        Born in Cusco in the San Blas traditional neighborhood, Martha does our cleaning in the office. Due
                        to her agreeable demeanor as well as her efficiency she has earned our respect and care. Martha has
                        dedicated her effort towards raising her daughter, who has studies to be a biologist. Her pastime is
                        enjoying music and spending time with her family.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Gerardo.jpg') }}" alt="Gerardo Condori Mamani">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Gerardo Condori Mamani</h3>
                    <p class="team-position">Field Chef</p>
                    <p class="team-description">
                        Lucio was born in the community of Qeswarani, and makes it his business to please passengers with
                        his cooking. A family man with three children, he lives in the Sacred Valley of the Incas, in
                        Huaran, where he raises small animals such as hens and guinea pigs. In his free time, he spends it
                        with his family and playing football with passion. To get a smile from passengers is his greatest
                        reward.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Wilfred.jpg') }}" alt="Wilfredo Condori Sicus">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Wilfredo Condori Sicus</h3>
                    <p class="team-position">Chief of Porters</p>
                    <p class="team-description">
                        Born in the Cuncani community, he is chief of porters from way back. He has integrated people from
                        his community into his team. Married and father of a little girl, he continues living in Cuncani,
                        raising llamas, horses, and small animals. He likes to learn English and play football. He is a
                        committed worker who wants to make passengers comfortable.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Roberto.jpg') }}" alt="Robert Condori">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Robert Condori</h3>
                    <p class="team-position">Field Chef</p>
                    <p class="team-description">
                        Born in the community of Cuncani – Lares, he is the third of 5 brothers. During his childhood, he
                        collaborated with the family in agricultural and animal grazing activities. In his teens, he moved
                        to the city of Urubamba to continue his secondary studies. He began his professional tourism studies
                        in Cusco, seeking specialization as a guide. Currently, Robert is serving as a kitchen assistant,
                        waiting to complete his studies and engage in guided activities.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Alex.jpg') }}" alt="Alex Jimenez Llanos">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Alex Jimenez Llanos</h3>
                    <p class="team-position">Waiter</p>
                    <p class="team-description">
                        He was born in the city of Lima. As a child, his family moved to the famous Sacred Valley of the
                        Incas. The town of Urubamba immediately adopted him as a son born in this sacred territory. As a
                        young man, he worked in agriculture and civil construction, discovering his passion for tourism
                        years later. A family man and passionate about soccer, he has played different roles on the Inca
                        Trail, where lately he stands out for his ability in the kitchen area.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Jeremias.jpg') }}" alt="Jeremias Sicus">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Jeremias Sicus</h3>
                    <p class="team-position">Waiter</p>
                    <p class="team-description">
                        He was born in the district of Lares, province of Calca. Jeremias loves to be in touch with nature
                        and take long walks, mainly Choquequirao. In his free time, he likes to go out to play soccer with
                        his friends. His vocation of service has led him to study the career of official tourist guide,
                        because he wants to take tourists to the mountains and teach everything he has learned. We are sure
                        it will be a great guide.
                    </p>
                </div>
            </div>


        </div>
        <!-- Repeat .team-member for other staff members -->
    </section>
@endsection
