@extends('layouts.admin')
@section('contenido')
    <section class="banner-glamping">
        <div class="banner-content container">
            <h1>Glamping en los Andes</h1>
            <p>Experiencia de campamento de lujo en las montañas del Cusco</p>
            <a href="#empezar" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>
    <section class="bg-light contact-section" id="empezar">
        <div class="container">
            <div class="row">
                <!-- HERO SECTION -->
                <div class="col-12">
                    <h2 class="dancingShow mt-4">Premium Camping Equipment</h2>

                    <p class="text-justify">
                        Pachatusantrek uses top-quality camping equipment from brands specialized in outdoor activities,
                        ensuring the comfort of our hikers and meeting the demands of our experiences in the Andes
                        mountains.
                    </p>

                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="stats-box">
                                <h4 class="text-warning">Every 3 Years</h4>
                                <p>Equipment Renewal</p>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <div class="stats-box">
                                <h4 class="text-warning">2 Services</h4>
                                <p>Luxury & Premium</p>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <div class="stats-box">
                                <h4 class="text-warning">100%</h4>
                                <p>Sustainable</p>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <div class="stats-box">
                                <h4 class="text-warning">Top Brands</h4>
                                <p>EUREKA, REI, THERMA REST, THE PETT, THE FORD, TRAVEL CHAIR</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="equipment-section py-5">
        <div class="container">
            <h2 class="dancingShow mb-4 text-center">Camping Equipment</h2>

            <div class="row g-4">
                <div class="col-md-8">
                    <div class="equipment-card shadow-sm rounded overflow-hidden bg-white">
                        <div class="equipment-content p-4">

                            <h3 class="mb-2">Sleeping Tents</h3>
                            <h4 class="blue mb-3">REI CO-OP – KINGDOM 6</h4>
                            <p>
                                This tent provides a warm and comfortable space for ideal rest during the trek.
                                Its large windows and mesh ceiling allow you to enjoy stunning views of the sky
                                and the surrounding Andean landscape.
                            </p>
                            <p class="mb-0">
                                It features foldable panels for cold protection and a durable rain cover.
                            </p>

                            <h3 class="mb-2 mt-4">Beds & Mattresses</h3>

                            <h4 class="blue mb-3 mt-3">Folding Bed – Double or Twin</h4>
                            <p>
                                These beds provide warmth and stability during rest, made with the same materials
                                as the double versions. Ideal for guests who prefer to share a tent.
                            </p>

                            <h4 class="blue mb-3">Folding Bed – Queen or Single</h4>
                            <p>
                                Designed to offer a spacious, comfortable, and stable resting area after a long
                                day of hiking. Built with a lightweight yet durable metal frame, ensuring comfort
                                even in high-mountain environments.
                            </p>

                            <h4 class="blue mb-3">Inflatable Mattresses</h4>
                            <p class="mb-0">
                                Our inflatable mattresses provide maximum comfort overnight, elevating the resting
                                experience in the Andes mountains to a true luxury level.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-items-center">
                    <img src="{{ asset('img/glamping/foto01.webp') }}" class="img-fluid rounded shadow-sm w-100"
                        alt="Beds and mattresses – Glamping">
                </div>
            </div>
        </div>
    </section>

    <section class="equipment-section py-5 bg-light">
        <div class="container">
            <h2 class="dancingShow mb-4 text-center">Accessories & Details</h2>

            <div class="row g-4">
                <!-- MAIN TEXT -->
                <div class="col-md-8">
                    <div class="equipment-card shadow-sm rounded p-4">

                        <!-- BED ACCESSORIES -->
                        <h3 class="mb-2">Bed Accessories</h3>
                        <p>
                            With our service, we want you to feel the comfort of a five-star hotel in the heart of the
                            mountains. We carefully take care of every detail to deliver a high-quality experience,
                            allowing our guests to feel warmth and comfort — a true home away from home.
                        </p>
                        <p>
                            The bed linen we provide is of the highest quality, made from hypoallergenic materials to
                            ensure safety and comfort.
                        </p>
                        <p class="mb-3">
                            <strong>Includes:</strong> Mattress protector, hotel-quality sheets, fleece blanket,
                            down comforter, hotel pillows, and decorative cushions.
                        </p>

                        <!-- HEATING -->
                        <h3 class="mb-2 mt-4">Heating</h3>
                        <p>
                            For cold mountain nights, we offer catalytic gas heating that is safe and highly effective,
                            providing the warmth needed for a restful night.
                        </p>

                        <!-- HOT WATER BOTTLES -->
                        <h3 class="mb-2 mt-4">Hot Water Bottles</h3>
                        <p>
                            As a special touch for our hikers, we provide hot water bottles to ensure a more comfortable
                            rest during cold nights.
                        </p>
                        <p>
                            They feature sealed caps and fleece covers to prevent burns, making this a safe and
                            highly appreciated service among our guests.
                        </p>

                        <!-- DECORATION -->
                        <h3 class="mb-2 mt-4">Decoration & Accessories Inside the Sleeping Tent</h3>
                        <p>
                            Each tent includes basic furniture such as a bedside table and a rug that add warmth and
                            comfort. In addition, we provide brand-new slippers for every guest, and lighting is supplied
                            through solar-powered lamps.
                        </p>

                    </div>
                </div>

                <!-- GALLERY (2 to 4 photos) -->
                <div class="col-md-4 d-flex flex-column justify-content-between">
                    <img src="{{ asset('img/glamping/Foto02.webp') }}" class="img-fluid rounded shadow-sm mb-3 w-100"
                        alt="Bed accessories – Glamping">

                    <img src="{{ asset('img/glamping/Foto02.webp') }}" class="img-fluid rounded shadow-sm mb-3 w-100"
                        alt="Bed accessories – Glamping">
                </div>
            </div>
        </div>
    </section>


    <section class="service-luxury-section py-5">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Luxury Comforts</h2>

            <!-- MASSAGE SERVICE -->
            <div class="row align-items-center mb-5 g-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <h3 class="blue mb-3">Massage Service</h3>
                        <p>
                            Pachatusantrek offers you an unparalleled relaxation experience. Our luxury service includes
                            a 30-minute massage session every night at camp, right after enjoying a hot shower.
                        </p>
                        <p class="mb-0">
                            The expert hands of our massage therapists will relieve muscle fatigue and restore energy
                            and vitality, allowing you to continue the trek with renewed well-being.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded shadow-sm w-100 object-fit-cover" alt="Massage service at camp">
                </div>
            </div>

            <!-- BATHROOM TENTS -->
            <div class="row align-items-center flex-lg-row-reverse mb-5 g-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <h3 class="blue mb-3">Bathroom Tents</h3>
                        <p>
                            Following international ecotourism standards, we use the renowned
                            <strong>“The Pett”</strong> portable environmental bathroom tents.
                        </p>
                        <p>
                            The toilets are manufactured by <strong>Thetford</strong> and are environmentally friendly,
                            operating with a clean water system without chemicals or biodegradable bags.
                        </p>
                        <p class="mb-0">
                            Waste handling is carried out by trained personnel in a hygienic and safe manner.
                            Waste is disposed of through authorized campsite sewage systems, ensuring sustainability
                            and respect for the environment.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded shadow-sm w-100 object-fit-cover" alt="Eco-friendly bathroom tent">
                </div>
            </div>

            <!-- BATHROOM ACCESSORIES -->
            <div class="row align-items-center mb-5 g-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <h3 class="blue mb-3">Bathroom Accessories</h3>
                        <p>
                            On the side table, you will find a mirror and high-quality personal hygiene products,
                            including toilet paper, hand sanitizer, and complementary items to ensure user comfort.
                        </p>
                        <p class="mb-0">
                            Soft fragrances and constant cleanliness details elevate the bathroom experience
                            to hotel standards, even in the heart of nature.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded shadow-sm w-100 object-fit-cover" alt="Luxury camp bathroom accessories">
                </div>
            </div>

            <!-- SHOWER TENT -->
            <div class="row align-items-center flex-lg-row-reverse g-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <h3 class="blue mb-3">Shower Tent</h3>
                        <p>
                            Nothing is more revitalizing than a hot shower after a day of hiking.
                            Our shower system uses solar energy and is set up inside a spacious tent with flooring
                            and ventilation, specially designed to provide comfort and privacy.
                        </p>
                        <p class="mb-0">
                            The system guarantees a constant supply of hot water and a refreshing experience worthy
                            of a premium service.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded shadow-sm w-100 object-fit-cover" alt="Hot shower tent">
                </div>
            </div>

            <!-- TABLEWARE -->
            <div class="row align-items-center g-4 mb-5">
                <div class="col-lg-6">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100">
                        <h3 class="blue mb-3">Tableware & Table Presentation</h3>

                        <p>
                            Our hotel-quality tableware <strong>Corelle® Square™ Pure White</strong>, made in the USA,
                            combines elegance, durability, and resistance to breakage, offering a clean and
                            sophisticated dining experience.
                        </p>

                        <p>
                            The presentation is enhanced with natural elements made of
                            <strong>wood and bamboo</strong>, creating a warm, welcoming, and visually harmonious
                            atmosphere.
                        </p>

                        <p>
                            We use <strong>cloth napkins</strong> to reduce waste and ensure a superior presentation
                            with every service.
                        </p>

                        <p class="mb-0">
                            Breakfast is presented through an <strong>exclusive menu</strong>, carefully displayed
                            in an elegant wooden menu card.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover"
                        alt="Hotel-quality tableware and table presentation">
                </div>
            </div>

            <!-- SERVICES & EQUIPMENT -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="bg-white p-5 rounded-4 shadow-sm">
                        <h3 class="blue text-center mb-4">Included Services & Equipment</h3>

                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Snacks</h6>
                                    <small class="text-muted">Light meals included during the experience</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Water Purification</h6>
                                    <small class="text-muted">Safe system for drinking water on the trail</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Passenger Safety</h6>
                                    <small class="text-muted">Active safety protocols throughout the journey</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Certified Guides</h6>
                                    <small class="text-muted">Highly trained and experienced staff</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">First Aid Kit</h6>
                                    <small class="text-muted">Complete equipment for remote areas</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">O2 Clinic Partnership</h6>
                                    <small class="text-muted">Pachatusantrek SAC – specialized medical support</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Oxygen Tank</h6>
                                    <small class="text-muted">Available for altitude-related symptoms</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Satellite GPS</h6>
                                    <small class="text-muted">Continuous geo-positioning</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Satellite Phone</h6>
                                    <small class="text-muted">Communication in no-coverage areas</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Porters</h6>
                                    <small class="text-muted">Specialized for the Inca Trail</small>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Hiking Equipment</h6>
                                    <small class="text-muted">Complete gear for field staff</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
