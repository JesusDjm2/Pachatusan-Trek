@extends('layouts.admin')

@section('metas')
    <meta name="description"
        content="{{ $meta_description ?? 'Premium Camping Equipment – Glamping in the Andes | Pachatusantrek' }}">
    <meta name="keywords" content="{{ $meta_keywords ?? 'glamping, camping equipment, Andes, trekking, luxury' }}">
    <title>{{ $meta_title ?? 'Premium Camping Equipment – Glamping in the Andes | Pachatusantrek' }}</title>
    <style>
        /* ── Header fix: always visible on glamping page ── */
        .header {
            background-color: rgba(15, 25, 50, 0.88) !important;
            backdrop-filter: blur(4px);
        }

        /* ─────────────── GLAMPING PAGE STYLES ─────────────── */

        /* Banner */
        .banner-glamping .banner-content h1 {
            font-size: clamp(2rem, 5vw, 3.4rem);
        }

        /* Section wrappers */
        .glamp-section {
            padding: 4.5rem 0;
        }

        .glamp-section-alt {
            background-color: #f4f6fa;
        }

        /* Titles */
        .glamp-main-title {
            font-size: clamp(1.5rem, 3vw, 2.1rem);
            font-weight: 800;
            color: #1c253b;
            padding-left: 1rem;
            border-left: 5px solid #1a6aba;
            line-height: 1.25;
            margin-bottom: 0.5rem;
        }

        .glamp-divider {
            height: 3px;
            width: 80px;
            background: linear-gradient(to right, #1a6aba, #5fa8e0);
            border: none;
            margin: 0.5rem 0 2rem 1rem;
        }

        .glamp-sub-title {
            font-size: 1rem;
            font-weight: 700;
            color: #1a6aba;
            text-transform: uppercase;
            letter-spacing: .06em;
            margin-bottom: .5rem;
        }

        .glamp-text {
            color: #444;
            font-size: .97rem;
            line-height: 1.75;
            text-align: justify;
        }

        /* Image grid helpers */
        .img-glamping {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
        }

        .img-glamping-tall {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 8px;
        }

        .img-placeholder {
            background: #d8dde8;
            border-radius: 8px;
            width: 100%;
            height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: .85rem;
            font-style: italic;
        }

        .img-placeholder-tall {
            height: 320px;
        }

        /* Feature check list */
        .check-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .check-list li {
            padding: .3rem 0;
            color: #444;
            font-size: .95rem;
        }

        .check-list li::before {
            content: "✓ ";
            color: #1a6aba;
            font-weight: 700;
        }

        /* Brand badges */
        .brand-badge {
            display: inline-block;
            background: #1c253b;
            color: #fff;
            font-size: .75rem;
            font-weight: 600;
            letter-spacing: .05em;
            padding: .3rem .75rem;
            border-radius: 20px;
            margin: .2rem;
        }

        /* Icon cards */
        .icon-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, .07);
            transition: transform .25s;
            height: 100%;
        }

        .icon-card:hover {
            transform: translateY(-4px);
        }

        .icon-card .icon-wrap {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: #e8f0fc;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .icon-card .icon-wrap i {
            font-size: 1.4rem;
            color: #1a6aba;
        }

        /* Full-width quote banner */
        .glamp-quote {
            background: linear-gradient(135deg, #1c253b 60%, #1a6aba);
            color: #fff;
            padding: 3rem 2rem;
            text-align: center;
        }

        .glamp-quote p {
            font-size: 1.15rem;
            font-style: italic;
            max-width: 760px;
            margin: 0 auto;
        }

        /* Security grid */
        .security-card {
            background: #fff;
            border-left: 4px solid #1a6aba;
            border-radius: 6px;
            padding: 1.25rem 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .06);
            height: 100%;
        }

        .security-card h5 {
            color: #1c253b;
            font-weight: 700;
            margin-bottom: .5rem;
        }

        /* Staff cards */
        .staff-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 18px rgba(0, 0, 0, .08);
        }

        .staff-card .staff-img-wrap {
            height: 260px;
            overflow: hidden;
            background: #d8dde8;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .staff-card .staff-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .staff-card .staff-img-wrap span {
            color: #6c757d;
            font-style: italic;
            font-size: .85rem;
        }

        /* ── Responsive ── */
        @media (max-width: 768px) {
            .glamp-section {
                padding: 2.5rem 0;
            }

            .img-glamping,
            .img-placeholder {
                height: 180px;
            }

            .img-glamping-tall,
            .img-placeholder-tall {
                height: 220px;
            }
        }
    </style>
@endsection

@section('contenido')
    {{-- ═══════════════════════════════════════════════════════════
     BANNER
═══════════════════════════════════════════════════════════ --}}
    <section class="banner-glamping">
        <div class="banner-content container">
            <h1>Glamping Service</h1>
            <p>Luxury in the heart of the Andes</p>
            <a href="#intro" class="scroll-down-btn" aria-label="Scroll down">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     1. INTRO — CAMPING EQUIPMENT
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section" id="intro">
        <div class="container">
            <div class="row align-items-center g-5">

                {{-- Text --}}
                <div class="col-lg-5">
                    <h2 class="glamp-main-title">Camping Equipment<br>Pachatusantrek</h2>
                    <hr class="glamp-divider">
                    <p class="glamp-text">
                        Pachatusantrek uses camping equipment of the highest quality, with outdoor specialist brands
                        ensuring the comfort of our trekkers after the physical efforts of trekking in the Andes mountains.
                    </p>
                    <p class="glamp-text mt-3">
                        We offer two types of services in the mountains, for which we have differentiated camping equipment,
                        thus guaranteeing the complete satisfaction of our clients: <strong>Deluxe</strong> and
                        <strong>Premium</strong> service.
                    </p>
                    <p class="glamp-text mt-3">
                        Our equipment is renewed every three years, protecting the quality of service and the comfort of
                        our hikers.
                    </p>
                    <div class="mt-4">
                        <span class="brand-badge">EUREKA</span>
                        <span class="brand-badge">REI</span>
                        <span class="brand-badge">THERM-A-REST</span>
                        <span class="brand-badge">THE PETT</span>
                        <span class="brand-badge">TRAVEL CHAIR</span>
                    </div>
                </div>

                {{-- Images --}}
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/equipo-de-campamento-pachatusantrek.webp') }}"
                                alt="Camping Equipment Pachatusantrek" class="img-glamping">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/comedor-1.webp') }}" alt="Dining setup in the Andes"
                                class="img-glamping">
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Food & gourmet image ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Hygiene kit image ]</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     2. SLEEPING TENTS
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section glamp-section-alt">
        <div class="container">
            <h2 class="glamp-main-title">Sleeping Tents</h2>
            <hr class="glamp-divider">

            {{-- REI Kingdom 6 --}}
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-7 order-2 order-lg-1">
                    <div class="row g-3">
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/tiendas-de-dormir-glamping.webp') }}"
                                alt="REI Kingdom 6 tent in the Andes" class="img-glamping">
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ REI Kingdom 6 exterior ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Tent interior view ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Tent with mountain view ]</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <p class="glamp-sub-title">REI CO-OP — KINGDOM 6</p>
                    <p class="glamp-text">
                        This tent offers a comfortable and warm space for the ideal rest during our trek. It has large
                        windows and a mesh roof that offers a wonderful view of the sky and our surroundings in the
                        middle of the Andes mountains.
                    </p>
                    <p class="glamp-text mt-3">
                        The windows and roof have folding panels to protect against the cold, and the tent includes a
                        full rain cover for complete protection.
                    </p>
                    <ul class="check-list mt-3">
                        <li>Large panoramic windows &amp; mesh roof</li>
                        <li>Folding cold-protection panels</li>
                        <li>Full rain cover included</li>
                        <li>Spacious vertical interior</li>
                    </ul>
                </div>
            </div>

            {{-- Beds & Mattresses --}}
            <h2 class="glamp-main-title mt-3">Beds &amp; Mattresses</h2>
            <hr class="glamp-divider">

            <div class="row align-items-start g-5">
                <div class="col-lg-5">
                    <p class="glamp-sub-title">Folding Bed — Double or Single</p>
                    <p class="glamp-text">
                        The design of this bed offers a wide, comfortable and stable space to share and enjoy a
                        well-deserved rest after a day of walking. With a strong and light metal structure, it
                        ensures comfort in the middle of the mountains.
                    </p>

                    <p class="glamp-sub-title mt-4">Folding Bed — Twin</p>
                    <p class="glamp-text">
                        This bed offers comfort, warmth and stability during your well-deserved rest. Made with
                        the same material as the double beds, ideal for people who want to share a tent.
                    </p>

                    <p class="glamp-sub-title mt-4">Mattresses</p>
                    <p class="glamp-text">
                        When we talk about comfort we cannot fail to mention our inflatable mattresses, which allow
                        us to offer maximum comfort during the night.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="img-placeholder">[ Double bed inside tent ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Single folding bed ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Twin beds in tent ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Inflatable mattress ]</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     3. ACCESSORIES & DETAILS
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section">
        <div class="container">
            <h2 class="glamp-main-title">Accessories &amp; Details</h2>
            <hr class="glamp-divider">

            <div class="row align-items-center g-5 mb-5">
                {{-- Bedding Accessories --}}
                <div class="col-lg-5">
                    <p class="glamp-sub-title">Bedding Accessories</p>
                    <p class="glamp-text">
                        In our service, we want you to feel the comfort of a 5-star hotel but in the middle of
                        the mountains. We take care of the minimum details that allow us to offer a high quality
                        service, where our clients will feel warmth and comfort — finding their home away from home.
                    </p>
                    <p class="glamp-text mt-2">
                        The bed linen we offer is of the highest quality, made of hypoallergenic material,
                        guaranteeing the safety and comfort of our customers.
                    </p>
                    <ul class="check-list mt-3">
                        <li>Mattress protector</li>
                        <li>Hotel-quality sheets</li>
                        <li>Fleece bed cover</li>
                        <li>Down blanket</li>
                        <li>Hotel pillows &amp; decorative cushions</li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="img-placeholder img-placeholder-tall">[ Luxury bed inside tent — hotel-quality linen
                                ]</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Heating + Hot Water Bags + Decoration --}}
            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="card icon-card p-4">
                        <div class="icon-wrap"><i class="fas fa-fire"></i></div>
                        <p class="glamp-sub-title">Heating</p>
                        <p class="glamp-text small">
                            For cold nights in the mountains, we have catalytic gas heating, which is very safe and
                            effective, providing the necessary warmth to enjoy our sleep and rest.
                        </p>
                        <div class="img-placeholder mt-3" style="height:150px;">[ Catalytic heater ]</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card icon-card p-4">
                        <div class="icon-wrap"><i class="fas fa-tint"></i></div>
                        <p class="glamp-sub-title">Hot Water Bags</p>
                        <p class="glamp-text small">
                            As a way to pamper our hikers, we offer hot water bags to rest better on a cold night.
                            They have sealed lids and a fleece protector to prevent burns — a very safe and
                            welcome service.
                        </p>
                        <div class="img-placeholder mt-3" style="height:150px;">[ Hot water bags ]</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card icon-card p-4">
                        <div class="icon-wrap"><i class="fas fa-home"></i></div>
                        <p class="glamp-sub-title">Tent Decoration</p>
                        <p class="glamp-text small">
                            Each tent features a bedside table and a rug, providing warmth and comfort. We also
                            offer new slippers for each client and solar lamps for lighting.
                        </p>
                        <div class="img-placeholder mt-3" style="height:150px;">[ Tent interior decoration ]</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     4. MASSAGE SERVICE
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section glamp-section-alt">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="img-placeholder img-placeholder-tall">[ Massage tent interior ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder img-placeholder-tall">[ Massage session ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Essential oils ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Aromatherapy setup ]</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <h2 class="glamp-main-title">Massage Service</h2>
                    <hr class="glamp-divider">
                    <p class="glamp-text">
                        Pachatusantrek offers you the best comfort and service. That is why we include in our
                        <strong>Deluxe service</strong> a 30-minute massage session after having enjoyed a hot shower —
                        available during all nights of camping.
                    </p>
                    <p class="glamp-text mt-3">
                        The expert hands of our masseurs will relieve any muscular pain and help you to continue
                        walking with much more energy and vitality.
                    </p>
                    <ul class="check-list mt-3">
                        <li>30-minute professional massage every night</li>
                        <li>After hot shower — fully revitalizing</li>
                        <li>Relieves muscle pain from trekking</li>
                        <li>Essential oils &amp; Andean aromatherapy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     5. BATHROOM TENTS
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section">
        <div class="container">
            <h2 class="glamp-main-title">Bathroom Tents</h2>
            <hr class="glamp-divider">

            {{-- Toilet Tent --}}
            <div class="row align-items-start g-5 mb-5">
                <div class="col-lg-5">
                    <p class="glamp-sub-title">Toilet Tent — The Pett · Cleanwaste · Thetford</p>
                    <p class="glamp-text">
                        Developing our activity under international ecotourism standards, Pachatusantrek uses the
                        famous bathroom tents <strong>"The Pett"</strong> (Portable Environmental Toilet Tent).
                    </p>
                    <p class="glamp-text mt-3">
                        The toilets are from the <strong>Thetford</strong> brand, proving to be environmentally
                        friendly. This system does not use chemicals — only a water flow system. The tent comes with
                        a "toilet chair" providing comfort and hygiene.
                    </p>
                    <p class="glamp-text mt-3">
                        Our portable toilets are ecological and work with running water, leaving aside uncomfortable
                        biodegradable bags and coagulants harmful to the environment. All bathrooms have permanent
                        air freshener aromas.
                    </p>
                    <ul class="check-list mt-3">
                        <li>No chemicals — water flow system only</li>
                        <li>Trained personnel handles waste hygienically</li>
                        <li>Residues discarded into sewage systems</li>
                        <li>Permanent air freshener</li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/carpa-de-banio-1.webp') }}" alt="Bathroom tent setup"
                                class="img-glamping">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/carpa-de-banio-2.webp') }}" alt="Portable ecological toilet"
                                class="img-glamping">
                        </div>
                        <div class="col-12">
                            <img src="{{ asset('img/glamping/carpa-de-banio-3.webp') }}" alt="Bathroom tent interior"
                                class="img-glamping">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Eco commitment quote --}}
            <div class="glamp-quote rounded-4 mb-5">
                <p>"As a company certified in Sustainable Tourism, we are committed to developing our activities in the
                    most environmentally friendly way, minimizing the environmental impact of our activities. Our hygienic
                    services guarantee responsibility towards the environment, comfort and hygiene for the user, and maximum
                    safety in the management of waste."</p>
            </div>

            {{-- Bathroom Accessories + Shower --}}
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <p class="glamp-sub-title">Accessories in the Bathroom Tent</p>
                    <p class="glamp-text">
                        In the auxiliary table you will find a mirror and personal hygiene products of the best
                        quality, such as toilet paper and alcohol in disinfectant gel — providing hygiene and
                        comfort in this service.
                    </p>

                    <p class="glamp-sub-title mt-4">Shower Tent</p>
                    <p class="glamp-text">
                        There is nothing more comforting than a hot shower after a day of hiking, after seeing
                        landscapes and living unforgettable moments. Our service offers a <strong>hot shower based
                            on solar energy</strong> in a spacious and comfortable tent with a floor.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="img-placeholder">[ Bathroom accessories ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Mirror &amp; hygiene kit ]</div>
                        </div>
                        <div class="col-12">
                            <div class="img-placeholder">[ Shower tent exterior ]</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     6. SOLAR SHOWER + BIODEGRADABLE KIT
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section glamp-section-alt">
        <div class="container">
            <h2 class="glamp-main-title">Accessories &amp; Details</h2>
            <hr class="glamp-divider">
            <div class="row align-items-start g-5">
                <div class="col-lg-6">
                    <p class="glamp-sub-title">Solar Pressure Shower</p>
                    <p class="glamp-text">
                        The <strong>Nemo Helio LX</strong> is a portable pedal-operated shower that, when activated,
                        provides considerable water pressure — allowing a nice and comforting hot shower. It is ideal
                        to take a hot shower at the end of a day's walk in the mountains… like at home.
                    </p>
                    <div class="row g-3 mt-3">
                        <div class="col-6">
                            <div class="img-placeholder">[ Nemo Helio LX shower ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Shower head detail ]</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="glamp-sub-title">Biodegradable Toilet Kit</p>
                    <p class="glamp-text">
                        We offer a personal hygiene kit that contains: liquid soap, bar soap, shampoo, body cream,
                        insect repellent, lip balm, essential oil and individual wipes.
                    </p>
                    <p class="glamp-text mt-3">
                        These products are <strong>biodegradable</strong> and made with herbs and aromatic plants
                        from the Andes — an entire Andean experience you will take to the surface of your skin.
                        In this way our hikers collaborate with the care of the environment, avoiding chemical
                        products that can damage the mountains.
                    </p>
                    <div class="row g-3 mt-3">
                        <div class="col-6">
                            <div class="img-placeholder">[ Biodegradable kit ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Andean herbs &amp; products ]</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     7. DINING TENTS
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section">
        <div class="container">
            <h2 class="glamp-main-title">Dining Tents</h2>
            <hr class="glamp-divider">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <p class="glamp-sub-title">Eureka — Cooper Canyon &amp; Titan</p>
                    <p class="glamp-text">
                        We have chosen the <strong>Eureka</strong> brand in the Cooper Canyon models with capacities
                        of 4, 6 and 12 people; and in the Titan model for 8 people.
                    </p>
                    <p class="glamp-text mt-3">
                        Spacious, with almost vertical walls, large windows and doors — these tents offer a cool
                        environment and a great view during breakfast and lunch. Warmth and comfort during the nights
                        while sharing our dinner.
                    </p>
                    <ul class="check-list mt-3">
                        <li>Capacity from 4 to 12 people</li>
                        <li>Vertical walls &amp; large windows</li>
                        <li>Cool in the day, warm at night</li>
                        <li>Panoramic mountain views</li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/comedor-1.webp') }}" alt="Dining tent exterior"
                                class="img-glamping">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/comedor-2.webp') }}" alt="Breakfast in the mountains"
                                class="img-glamping">
                        </div>
                        <div class="col-12">
                            <img src="{{ asset('img/glamping/comedor-3.webp') }}" alt="Dining setup with tableware"
                                class="img-glamping">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     8. CHAIRS & TABLES
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section glamp-section-alt">
        <div class="container">
            <h2 class="glamp-main-title">Chairs &amp; Tables</h2>
            <hr class="glamp-divider">
            <div class="row align-items-start g-5">
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="img-placeholder">[ Travel Chair tables ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Chef at table ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Big Kahuna chairs in camp ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ REI Flex Lite Boss Chair ]</div>
                        </div>
                        <div class="col-12">
                            <div class="img-placeholder">[ Couple chair — honeymoon ]</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <p class="glamp-sub-title">Tables — Travel Chair</p>
                    <p class="glamp-text">
                        Our tables are very stable, allowing us to enjoy our meals safely. They have telescopic legs
                        that make it possible to adjust them to any terrain. The <strong>Travel Chair</strong> brand
                        provides durable tables and great stability in the middle of the mountains.
                    </p>

                    <p class="glamp-sub-title mt-4">Chairs</p>
                    <p class="glamp-text">
                        We use chairs from the <strong>Travel Chair</strong> and <strong>REI Co-Op</strong> brands.
                        The <em>Big Kahuna</em> models — with 4 legs, armrests and backrests — are spacious and very
                        comfortable, allowing you to better enjoy your meals.
                    </p>
                    <p class="glamp-text mt-2">
                        On the Inca Trail, we use the <em>REI Flex Lite Boss Chair</em> — a light 4-legged chair
                        providing comfort and stability.
                    </p>

                    <p class="glamp-sub-title mt-4">Couple Chairs — For Honeymoons</p>
                    <p class="glamp-text">
                        For eternal lovers of outdoor life, we offer this cozy double chair (REI brand), ideal to
                        enjoy an afternoon of relaxation and memories with that special person.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     9. KITCHEN & STORAGE TENTS
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h2 class="glamp-main-title">Kitchen Tents</h2>
                    <hr class="glamp-divider">
                    <p class="glamp-text">
                        Our kitchen staff works in a comfortable, spacious and safe environment, guaranteeing the
                        preparation of food in a hygienic, orderly and above all safe way.
                    </p>
                    <p class="glamp-text mt-3">
                        We have a kitchen tent where only our kitchen staff (cooks, assistants and waiters) enter,
                        properly clean and complying with all safety and innocuousness standards.
                    </p>
                    <div class="row g-3 mt-4">
                        <div class="col-6">
                            <div class="img-placeholder">[ Chef in kitchen tent ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Kitchen staff preparing food ]</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="glamp-main-title">Storage Tents</h2>
                    <hr class="glamp-divider">
                    <p class="glamp-text">
                        Within our staff, we always have a storekeeper and a storage tent. The warehouse manager
                        orders the products and ingredients of the meals, facilitating the work of the kitchen team.
                        In this way we avoid cross-contamination of food and keep it in good condition.
                    </p>
                    <p class="glamp-text mt-3">
                        All containers we use are <strong>reusable and ecological</strong> — with cloth bags for
                        transporting groceries and plastic containers for other supplies, avoiding the use of
                        single-use plastic bags at all times.
                    </p>
                    <div class="row g-3 mt-4">
                        <div class="col-6">
                            <div class="img-placeholder">[ Storage tent with ingredients ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Reusable cloth bags ]</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     10. TABLEWARE — CUTLERY — TABLE PRESENTATION
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section glamp-section-alt">
        <div class="container">
            <h2 class="glamp-main-title">Tableware — Cutlery — Table Presentation</h2>
            <hr class="glamp-divider">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <p class="glamp-text">
                        Our tableware is hotel-quality, from the American brand <strong>Corelle</strong>, from the
                        <em>"Corelle® Square™ Pure White"</em> line — ceramic resistant to falls and with a very
                        nice presentation.
                    </p>
                    <p class="glamp-text mt-3">
                        We complement our tableware with <strong>wood and bamboo decoration</strong>, giving a
                        pleasant and familiar presentation to our table.
                    </p>
                    <p class="glamp-text mt-3">
                        We use <strong>cloth napkins</strong> to avoid generating waste and to guarantee a better
                        presentation. Every breakfast is presented with a beautiful menu card made of wood.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="img-placeholder img-placeholder-tall">[ Table set in dining tent ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder img-placeholder-tall">[ Corelle tableware detail ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Gourmet main course ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder">[ Andean dessert ]</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     11. SNACKS + WATER PURIFICATION
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="glamp-main-title">Snacks</h2>
                    <hr class="glamp-divider">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="img-placeholder img-placeholder-tall">[ Variety of trail snacks ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder img-placeholder-tall">[ Pachatusantrek snack bags ]</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="glamp-main-title">Water Purification</h2>
                    <hr class="glamp-divider">
                    <p class="glamp-text">
                        We entrust this delicate process to the prestigious brand of water filters for outdoor
                        activities, <strong>Katadyn</strong>. These gravity filters are fast and eliminate all
                        possible contamination of the liquid element. Our hydration is assured.
                    </p>
                    <div class="row g-3 mt-3">
                        <div class="col-6">
                            <div class="img-placeholder img-placeholder-tall">[ Katadyn gravity filter ]</div>
                        </div>
                        <div class="col-6">
                            <div class="img-placeholder img-placeholder-tall">[ Water filtration in the field ]</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     12. SECURITY SERVICES FOR PASSENGERS
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section glamp-section-alt">
        <div class="container">
            <h2 class="glamp-main-title">Security Services for Passengers</h2>
            <hr class="glamp-divider">
            <p class="glamp-text mb-5" style="max-width:700px;">
                The safety of our hikers is an objective of permanent attention for our organization. The fulfillment
                of this objective requires the provision of the following services:
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="security-card">
                        <h5><i class="fas fa-user-shield me-2 text-primary"></i> Highly Qualified Guides</h5>
                        <p class="glamp-text small">
                            Professional tour guides specialized in hiking, with the appropriate training for adventure
                            tourism. Our guides are qualified in <strong>First Aid in remote areas</strong>.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="security-card">
                        <h5><i class="fas fa-first-aid me-2 text-primary"></i> First Aid Kit</h5>
                        <p class="glamp-text small">
                            Our First Aid kit is designed and equipped under the advice of the <strong>O2 Clinic</strong>,
                            to deal with any incident in remote areas.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="security-card">
                        <h5><i class="fas fa-wind me-2 text-primary"></i> Oxygen Bottle</h5>
                        <p class="glamp-text small">
                            The guide always carries a medical oxygen balloon to be professionally supplied to whoever
                            needs it in case of respiratory problems at altitude.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="security-card">
                        <h5><i class="fas fa-map-marker-alt me-2 text-primary"></i> GPS Positioning</h5>
                        <p class="glamp-text small">
                            <strong>Garmin</strong> equipment determines the exact location of the user to transmit it
                            to the rescue team in case evacuation of an accident is needed.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="security-card">
                        <h5><i class="fas fa-hospital me-2 text-primary"></i> Pachatusantrek SAC — O2 Clinic Agreement</h5>
                        <p class="glamp-text small">
                            We have an agreement for medical assistance and land and air rescue with the O2 Clinic, with
                            offices in Aguas Calientes (Machu Picchu), Yanahuara (Sacred Valley) and Cusco. The agreement
                            also includes assignment of a family doctor for any necessary medical consultation during our
                            walks.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="security-card">
                        <h5><i class="fas fa-satellite-dish me-2 text-primary"></i> Satellite Phone</h5>
                        <p class="glamp-text small">
                            Pachatusantrek SAC uses the latest technology in satellite communication.
                            Our <strong>Iridium Xtreme</strong> phones guarantee communication from remote areas in
                            case of an emergency event during the walk — an important line of communication with our GP
                            as well as our operations office.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Security images --}}
            <div class="row g-3 mt-5">
                <div class="col-md-4">
                    <div class="img-placeholder">[ Guide with group at Machu Picchu ]</div>
                </div>
                <div class="col-md-4">
                    <div class="img-placeholder">[ O2 Clinic — ICU unit ]</div>
                </div>
                <div class="col-md-4">
                    <div class="img-placeholder">[ Iridium Xtreme satellite phone ]</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     13. PORTERS — INCA TRAIL
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section">
        <div class="container">
            <h2 class="glamp-main-title">Porters — Inca Trail</h2>
            <hr class="glamp-divider">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <p class="glamp-sub-title">Background</p>
                    <p class="glamp-text">
                        The Peruvian government protects the Historical Sanctuary of Machu Picchu through the Ministry
                        of Culture, Ministry of Environment and Ministry of Labour. These state institutions regulate
                        tourism within the <strong>Historical Sanctuary of Machu Picchu (SHMP)</strong>.
                    </p>

                    <p class="glamp-sub-title mt-4">Our Activities Inside the SHMP</p>
                    <p class="glamp-text">
                        For Pachatusantrek S.A.C., being respectful towards our staff, the laws of our country and
                        the quality of service we provide are of supreme importance. Our camping equipment has been
                        carefully chosen to fulfill these three basic requirements.
                    </p>
                    <p class="glamp-text mt-3">
                        Rules of the SHMP prohibit the use of horses or mules on the Inca Trail as their hooves
                        damage the stone path. <strong>Only porters are allowed.</strong>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="glamp-sub-title">Porter Law — Weight Limits</p>
                    <p class="glamp-text">
                        The Porters Law states the weight limits each Porter is allowed to carry:
                    </p>
                    <ul class="check-list mt-2">
                        <li>Maximum weight per Porter: <strong>20 kg / 44 lb</strong></li>
                        <li>Weight permitted per trekker: <strong>5 kg / 11 lb</strong> (including sleeping bag)</li>
                        <li>Any excess weight can be carried by trekkers in their day packs</li>
                    </ul>
                    <p class="glamp-text mt-3">
                        Following the Porters Law, Pachatusantrek provides porters with all necessary equipment to
                        do their job in the best way.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     14. CAMPING EQUIPMENT FOR OUTDOOR STAFF
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section glamp-section-alt">
        <div class="container">
            <h2 class="glamp-main-title">Camping Equipment for Outdoor Staff</h2>
            <hr class="glamp-divider">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <p class="glamp-text">
                        Following the Porter Law, Pachatusantrek provides the porters with the necessary equipment
                        so they can carry out their work in the best way. The equipment required by law is:
                    </p>
                    <div class="row mt-4 g-3">
                        <div class="col-6">
                            <ul class="check-list">
                                <li>Tents</li>
                                <li>Trekking shoes</li>
                                <li>Backpacks with waist straps</li>
                                <li>Fleece jacket</li>
                                <li>Lumbar support</li>
                                <li>Foam mattress</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="check-list">
                                <li>Sleeping bag</li>
                                <li>Torch</li>
                                <li>Water bottle</li>
                                <li>Work uniform</li>
                                <li>Raincoat &amp; poncho</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/campamento-glamping.webp') }}" alt="Pachatusantrek campsite"
                                class="img-glamping">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/glamping/foto01.webp') }}" alt="Field staff on the Inca Trail"
                                class="img-glamping">
                        </div>
                        <div class="col-12">
                            <img src="{{ asset('img/glamping/campamento-01.png') }}" alt="Full team at camp"
                                class="img-glamping">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════
     15. OUR FIELD STAFF
═══════════════════════════════════════════════════════════ --}}
    <section class="glamp-section">
        <div class="container">
            <h2 class="glamp-main-title">Our Field Staff</h2>
            <hr class="glamp-divider">
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="staff-card">
                        <div class="staff-img-wrap">
                            <span>[ Chef — photo ]</span>
                        </div>
                        <div class="p-3 text-center">
                            <p class="glamp-sub-title mb-0">Chef</p>
                            <p class="small text-muted">Gourmet cooking in the mountains</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="staff-card">
                        <div class="staff-img-wrap">
                            <span>[ Waiter — photo ]</span>
                        </div>
                        <div class="p-3 text-center">
                            <p class="glamp-sub-title mb-0">Waiter</p>
                            <p class="small text-muted">Professional service at camp</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="staff-card">
                        <div class="staff-img-wrap">
                            <span>[ Porters / Field Assistants — photo ]</span>
                        </div>
                        <div class="p-3 text-center">
                            <p class="glamp-sub-title mb-0">Porters &amp; Field Assistants</p>
                            <p class="small text-muted">The backbone of every expedition</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Closing quote --}}
            <div class="glamp-quote rounded-4 mt-5">
                <p><em>"Con la protección de la Pachamama y el permiso de los Apus"</em><br>
                    <small style="opacity:.75;">— With the protection of Pachamama and the permission of the Apus</small>
                </p>
            </div>
        </div>
    </section>
@endsection
