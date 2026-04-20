@extends('layouts.admin')
@section('contenido')
    <section class="banner-glamping">
        <div class="banner-content container">
            <h1>Glamping in the Andes</h1>
            <p>Luxury camping experience in the mountains of Cusco</p>
            <a href="#empezar" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>

    <section class="bg-light py-5" id="empezar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="dancingShow">Premium Camping Equipment</h2>
                    <p class="lead mt-3 mx-auto" style="max-width: 800px;">
                        Pachatusantrek uses top-quality camping equipment from brands specialized in outdoor activities,
                        ensuring the comfort of our trekkers after the physical efforts of trekking in the Andes mountains.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 shadow-sm">
                        <h3 class="blue mb-4">Elite Standards</h3>
                        <p class="text-justify">
                            We offer two types of services in the mountains: <strong>Deluxe</strong> and
                            <strong>Premium</strong>. For each, we have differentiated camping equipment, guaranteeing
                            complete satisfaction and comfort.
                        </p>
                        <p class="text-justify">
                            Our equipment is renewed every three years. In this way, we protect the quality of service and
                            ensure a home-away-from-home experience for every hiker.
                        </p>
                        <div class="row mt-4 g-3">
                            <div class="col-6">
                                <div class="stats-box p-3 border rounded text-center">
                                    <h4 class="text-warning mb-1">Top Brands</h4>
                                    <small>REI, EUREKA, THERMAREST</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stats-box p-3 border rounded text-center">
                                    <h4 class="text-warning mb-1">100%</h4>
                                    <small>Sustainable & Safe</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="{{ asset('img/glamping/foto01.webp') }}" class="img-fluid rounded-4 shadow"
                        alt="Glamping Equipment">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Premium Sleeping Quarters</h2>
            <div class="row g-4">
                <div class="col-md-7">
                    <div class="equipment-card h-100 p-4 shadow-sm rounded-4 bg-white border-start border-4 border-primary">
                        <h3 class="mb-2">REI CO-OP – KINGDOM 6</h3>
                        <h5 class="text-muted mb-4">Elite Sleeping Tents</h5>
                        <p>
                            This tent offers a comfortable and warm space for the ideal rest during our trek. It features
                            large windows and a mesh roof that offers a wonderful view of the sky and surroundings in the
                            middle of the Andes mountains.
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-success me-2"></i> Folding panels for cold protection</li>
                            <li><i class="fas fa-check text-success me-2"></i> Full rain cover for total safety</li>
                            <li><i class="fas fa-check text-success me-2"></i> Spacious vertical interior</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="equipment-card h-100 p-4 shadow-sm rounded-4 bg-light">
                        <h3 class="mb-2">Beds & Mattresses</h3>
                        <p class="mt-3">
                            <strong>Double or Single Folding Bed:</strong> Strong and light metal structure ensuring comfort
                            in high altitude.
                        </p>
                        <p>
                            <strong>Twin Folding Bed:</strong> Comfort, warmth, and stability. Ideal for guests sharing a
                            tent.
                        </p>
                        <p>
                            <strong>Inflatable Mattresses:</strong> The pinnacle of comfort, providing maximum support during
                            the night.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Accessories & Details</h2>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4">
                            <div class="text-primary mb-3"><i class="fas fa-bed fa-2x"></i></div>
                            <h4>Bedding Accessories</h4>
                            <p class="small text-muted">
                                Hypoallergenic material, hotel sheets, fleece bed covers, down blankets, and decorative
                                cushions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4">
                            <div class="text-primary mb-3"><i class="fas fa-fire fa-2x"></i></div>
                            <h4>Catalytic Heating</h4>
                            <p class="small text-muted">
                                Very safe and effective gas heating, providing the necessary warmth for cold mountain
                                nights.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4">
                            <div class="text-primary mb-3"><i class="fas fa-hot-tub fa-2x"></i></div>
                            <h4>Hot Water Bags</h4>
                            <p class="small text-muted">
                                Sealed lids and fleece protectors. A warm complement for a better sleep in the Andes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}" class="img-fluid rounded-4 shadow"
                        alt="Massage Service">
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <div class="ps-lg-5">
                        <h2 class="dancingShow mb-4">Elite Comfort</h2>
                        <h3 class="blue mb-3">Massage Service</h3>
                        <p class="text-justify">
                            Pachatusantrek includes a <strong>30-minute massage session</strong> in our Deluxe service,
                            available every camping night after a hot shower.
                        </p>
                        <p class="text-justify">
                            Expert hands will relieve muscular pain and revitalize your energy, ensuring you continue your
                            trek with vitality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark text-white py-5">
        <div class="container">
            <h2 class="dancingShow text-center text-white mb-5">Hygienic Excellence</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 rounded-4 bg-secondary-subtle text-dark h-100">
                        <h4 class="mb-3">Toilet Tent – The Pett</h4>
                        <p class="small">
                            We use international ecotourism standards with "The Pett" (Portable Environmental Toilet Tent).
                            Environmentally friendly portable toilets with water flow systems, avoiding chemicals or
                            harmful bags.
                        </p>
                        <p class="small mb-0">
                            Waste is handled by trained personnel and discarded safely into authorized sewage systems.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded-4 bg-secondary-subtle text-dark h-100">
                        <h4 class="mb-3">Shower Tent</h4>
                        <p class="small">
                            Enjoy a hot shower based on solar energy in a spacious tent with a floor. We also use the
                            <strong>Nemo Helio LX</strong> portable pedal-operated shower for high-pressure comfort.
                        </p>
                        <p class="small mb-0">
                            Includes a biodegradable toilet kit with essential oils and aromatic Andean plants.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Dining & Tableware</h2>
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-4">
                    <div class="bg-white p-4 h-100 rounded-4 shadow-sm">
                        <h4 class="blue mb-3">Dining Tents</h4>
                        <p class="small">
                            We use <strong>Eureka</strong> models (Copper Canyon & Titan) with capacity for 4 to 12 people.
                            Spacious, vertical walls and large windows offer a cool environment and great views.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white p-4 h-100 rounded-4 shadow-sm">
                        <h4 class="blue mb-3">Chairs & Tables</h4>
                        <p class="small">
                            <strong>Travel Chair</strong> tables with telescopic legs adjust to any terrain. We also provide
                            comfortable 4-legged chairs (Big Kahuna), including couple chairs for honeymoons.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white p-4 h-100 rounded-4 shadow-sm">
                        <h4 class="blue mb-3">Table Presentation</h4>
                        <p class="small">
                            <strong>Corelle Square Pure White</strong> American tableware, complemented with wood and bamboo
                            decorations. Every breakfast is presented with a beautiful wooden menu card.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Security & Field Services</h2>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="p-4 border rounded-4 h-100">
                        <h4 class="mb-3">Professional Support</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-user-shield text-primary me-2"></i> <strong>Qualified
                                    Guides:</strong> Specialists in first aid in remote areas.</li>
                            <li class="mb-2"><i class="fas fa-clinic-medical text-primary me-2"></i> <strong>O2 Clinic
                                    Agreement:</strong> Medical assistance and rescue partnership.</li>
                            <li class="mb-2"><i class="fas fa-map-marked-alt text-primary me-2"></i> <strong>GPS
                                    Positioning:</strong> Precise geo-location using Garmin technology.</li>
                            <li class="mb-2"><i class="fas fa-phone-alt text-primary me-2"></i> <strong>Satellite
                                    Phones:</strong> Iridium Xtreme phones for remote communication.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 border rounded-4 h-100">
                        <h4 class="mb-3">Kitchen & Staff</h4>
                        <p class="small">
                            Equipped kitchen and storage tents strictly following safety and hygiene standards. Our team
                            includes chefs, waiters, and storage managers using reusable containers to avoid single-use
                            plastics.
                        </p>
                        <div class="alert alert-info py-2 small border-0 rounded-3">
                            <i class="fas fa-info-circle me-2"></i> We use Katadyn gravity filters for fast and safe water
                            purification.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 p-5 bg-white rounded-4 shadow-sm">
                    <h2 class="dancingShow text-center mb-4">Porters & The Inca Trail</h2>
                    <p class="text-center italic">"Following the Porters Law and protecting the Historical Sanctuary of Machu
                        Picchu"</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <p class="small text-justify">
                                Rules prohibit horses or mules on the Inca Trail to protect the stone paths. Only porters
                                are allowed, and we strictly follow weight limits (20kg max/porter) to ensure their
                                well-being.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="small text-justify">
                                We provide our field staff with the best outdoor equipment: tents, backpacks with lumbar
                                support, specialized clothing, and complete sleeping gear.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
