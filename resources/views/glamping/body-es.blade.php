@php
    $glampTocItems = [
        ['intro', 'Intro'],
        ['deluxe', 'Deluxe'],
        ['accessories-sleep', 'Cama y detalles'],
        ['massage', 'Masajes'],
        ['bathroom', 'Baño y ducha'],
        ['dining', 'Comedor y cocina'],
        ['safety', 'Seguridad y rescate'],
        ['porters', 'Porteadores y personal'],
    ];
@endphp
@include('partials.glamping-page-styles')
<div class="container-fluid glamping-long py-2 py-md-4" id="empezar">
    <div class="container">
        @include('partials.glamping-toc-mobile', [
            'tocTitle' => 'En esta página',
            'tocUid' => 'es',
            'tocItems' => $glampTocItems,
        ])
        <div class="row g-4 g-xl-5 glamp-toc-wrap align-items-stretch">
            <div class="col-12 col-lg-3 d-none d-lg-flex flex-lg-column glamp-toc-col pe-lg-1">
                @include('partials.glamping-toc-aside', [
                    'tocTitle' => 'En esta página',
                    'tocItems' => $glampTocItems,
                ])
            </div>
            <div class="col-12 col-lg-9 min-w-0 glamp-article">
                <div class="prose glamp-prose" id="glamping-main">

                    <section class="glamping-sec" id="intro">
                        <div class="p-3 p-md-4 rounded-4 border bg-light mb-4">
                            <h1 class="section-title display-6 mb-0">EQUIPO DE CAMPING &mdash; Pachatusantrek</h1>
                        </div>
                        <p class="h6 text-uppercase text-primary small" style="letter-spacing:.1em">Equipo de
                            campamento
                        </p>
                        <p>Pachatusantrek utiliza equipamiento de campamento de la más alta calidad, con marcas
                            especializadas
                            outdoor como <strong>EUREKA</strong>, <strong>REI</strong>, <strong>THERM-A-REST</strong>,
                            <strong>THE PETT</strong> y <strong>TRAVEL CHAIR</strong>, garantizando el confort de
                            nuestros
                            caminantes tras el esfuerzo del trekking en los Andes.</p>
                        <p>Ofrecemos dos servicios de montaña con equipamiento diferenciado para cada uno, con la plena
                            satisfacción del cliente: servicio <strong>Deluxe</strong> y
                            <strong>Premium</strong>.
                        </p>
                        <p>Renovamos nuestro equipo cada tres años, protegiendo calidad de servicio y comodidad.
                        </p>
                    </section>

                    <section class="glamping-sec text-center my-4" aria-label="Espacio para imagen">
                        @include('partials.glamping-photo', [
                            'label' => 'Foto general (ruta: path=img/glamping/equipo-de-campamento-pachatusantrek.webp en el @include de la plantilla)',
                            'path' => 'img/glamping/equipo-de-campamento-pachatusantrek.webp',
                        ])
                    </section>

                    <section class="glamping-sec py-4" id="deluxe">
                        <div class="glamping-badge-line mx-auto"></div>
                        <h2 class="section-title text-uppercase text-center h3">EQUIPO DE CAMPING PARA EL SERVICIO
                            DELUXE
                        </h2>

                        <h3 class="kicker text-uppercase mt-4">Carpas de dormir</h3>
                        <h2 class="sub h5">REI CO-OP &mdash; KINGDOM 6</h2>
                        <p>Ofrece un espacio cómodo y cálido para un descanso ideal en <strong>nuestro
                                trekking</strong>. Grandes ventanas y techo de malla: vistas al cielo y al paisaje
                            andino;
                            paneles
                            plegables frente al frío y lona de lluvia.</p>
                        <div class="row g-4 align-items-start mt-2">
                            <div class="col-md-6">@include('partials.glamping-photo', ['label' => 'Carpa REI Kingdom 6', 'path' => 'img/glamping/tiendas-de-dormir-glamping.webp'])</div>
                            <div class="col-md-6">@include('partials.glamping-photo', ['label' => 'Interior o vistas de carpa', 'path' => 'img/glamping/campamento-glamping.webp'])</div>
                        </div>

                        <h3 class="kicker text-uppercase mt-5" id="beds-mattresses">Camas y colchones</h3>
                        <h2 class="sub h6">Cama plegable &mdash; doble o simple</h2>
                        <p>Diseño amplio, cómodo y estable para compartir y descansar luego de un día de
                            caminata. Estructura metálica resistente y ligera: confort en plena cordillera.</p>
                        <h2 class="sub h6">Cama plegable &mdash; twin (dos plazas individuales)</h2>
                        <p>Comodidad, abrigo y estabilidad. Mismo criterio de calidad; ideal quienes comparten
                            carpa.
                        </p>
                        <h2 class="sub h6">Colchones</h2>
                        <p>Colchones inflables para máximo confort en la noche.</p>
                        
                    </section>

                    @include('glamping.segments.es')
                </div>
            </div>
        </div>
    </div>
</div>
