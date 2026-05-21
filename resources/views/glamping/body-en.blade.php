@php
    $glampTocItems = [
        ['intro', 'Intro'],
        ['deluxe', 'Deluxe'],
        ['accessories-sleep', 'Bedding & details'],
        ['massage', 'Massage'],
        ['bathroom', 'Bath & shower'],
        ['dining', 'Dining & kitchen'],
        ['safety', 'Safety & rescue'],
        ['porters', 'Porters & field staff'],
    ];
@endphp
@include('partials.glamping-page-styles')
<div class="container-fluid glamping-long py-2 py-md-4" id="empezar">
    <div class="container">
        @include('partials.glamping-toc-mobile', [
            'tocTitle' => 'On this page',
            'tocUid' => 'en',
            'tocItems' => $glampTocItems,
        ])
        <div class="row g-4 g-xl-5 glamp-toc-wrap align-items-stretch">
            <div class="col-12 col-lg-3 d-none d-lg-flex flex-lg-column glamp-toc-col pe-lg-1">
                @include('partials.glamping-toc-aside', [
                    'tocTitle' => 'On this page',
                    'tocItems' => $glampTocItems,
                ])
            </div>
            <div class="col-12 col-lg-9 min-w-0 glamp-article">
                <div class="prose glamp-prose" id="glamping-main">

                    <section class="glamping-sec" id="intro">
                        <div class="p-3 p-md-4 rounded-4 border bg-light mb-4">
                            <h1 class="section-title display-6 mb-0">CAMPING EQUIPMENT &mdash; Pachatusantrek</h1>
                        </div>
                        <p>Pachatusantrek uses camping equipment of the highest quality, using outdoor specialist brands
                            such
                            as <strong>EUREKA</strong>, <strong>REI</strong>, <strong>THERM-A-REST</strong>, <strong>THE
                                PETT</strong> and <strong>TRAVEL CHAIR</strong>, ensuring the comfort of our trekkers, after
                            the
                            physical efforts of trekking in the Andes mountains.</p>
                        <p>We offer two types of services in the mountains, for which we have differentiated camping equipment,
                            thus
                            guaranteeing the complete satisfaction of our clients: <strong>Deluxe</strong> and
                            <strong>Premium</strong> service.</p>
                        <p>Our equipment is renewed every three years; in this way we protect the quality of service and the
                            comfort of our hikers.</p>
                    </section>

                    <section class="glamping-sec text-center my-4" aria-label="Image placeholder">
                        @include('partials.glamping-photo', [
                            'label' => 'Overview (add your main photo: pass path=… in partial)',
                            'path' => 'img/glamping/equipo-de-campamento-pachatusantrek.webp',
                        ])

                    </section>

                    <section class="glamping-sec py-4" id="deluxe">
                        <div class="glamping-badge-line mx-auto"></div>
                        <h2 class="section-title text-uppercase text-center h3">CAMPING EQUIPMENT FOR DELUXE SERVICE</h2>

                        <h3 class="kicker text-uppercase mt-4">SLEEPING TENTS</h3>
                        <h2 class="sub h5">REI CO-OP &mdash; KINGDOM 6</h2>
                        <p>This tent offers a comfortable and warm space for the ideal rest during <strong>our
                                trek</strong>. It has large windows and a mesh roof that offers a wonderful view of the
                            sky and our surroundings in the middle of the Andes mountains. The windows and roof have folding
                            panels to protect against the cold and the tent has a rain cover.</p>
                        <div class="row g-4 align-items-start mt-2">
                            <div class="col-md-6">@include('partials.glamping-photo', ['label' => 'REI Kingdom 6 (sleeping tent)', 'path' => 'img/glamping/tiendas-de-dormir-glamping.webp'])</div>
                            <div class="col-md-6">@include('partials.glamping-photo', ['label' => 'Tent interior / views', 'path' => 'img/glamping/campamento-glamping.webp'])</div>
                        </div>

                        <h3 class="kicker text-uppercase mt-5" id="beds-mattresses">BEDS AND MATTRESSES</h3>
                        <h2 class="sub h6">FOLDING BED &mdash; DOUBLE OR SINGLE</h2>
                        <p>The design of this bed offers us a wide, comfortable and stable space to share and enjoy a
                            well-deserved
                            rest after our day of walking.</p>
                        <p>With a strong and light metal structure, it allows us to ensure comfort in the middle of the
                            mountains.
                        </p>
                        <h2 class="sub h6">FOLDING BED &mdash; TWIN</h2>
                        <p>This bed offers you comfort, warmth and stability during your well-deserved rest after a day of
                            hiking. Made
                            with the same material as the double beds, it allows us to ensure rest in the middle of the
                            Andes
                            mountains. Ideal for people who want to share a tent.</p>
                        <h2 class="sub h6">MATTRESSES</h2>
                        <p>When we talk about comfort we cannot fail to mention our inflatable mattresses, which allow us to
                            offer
                            maximum comfort during the night.</p>
                        {{-- <div class="row g-3 mt-2">
                            <div class="col-md-4">@include('partials.glamping-photo', ['label' => 'Folding beds', 'path' => 'img/glamping/camas-y-colchones-glamping.webp'])</div>
                            <div class="col-md-4">@include('partials.glamping-photo', ['label' => 'Inflatable mattress', 'path' => 'img/glamping/colchon-inflable-glamping.webp'])</div>
                            <div class="col-md-4">@include('partials.glamping-photo', ['label' => 'Sleep setup in camp', 'path' => 'img/glamping/campamento-glamping.webp'])</div>
                        </div> --}}
                    </section>

                    @include('glamping.segments.en')
                </div>
            </div>
        </div>
    </div>
</div>
