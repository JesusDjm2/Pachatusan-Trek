@extends('layouts.admines')

@section('metas')
<meta name="description" content="{{ $meta_description ?? 'Equipo de campamento premium – Glamping en los Andes | Pachatusantrek' }}">
<meta name="keywords" content="{{ $meta_keywords ?? 'glamping, equipo campamento, carpas, Andes, trekking, lujo, comodidad' }}">
<title>{{ $meta_title ?? 'Equipo de Campamento Premium – Glamping en los Andes | Pachatusantrek' }}</title>
<style>
    /* ── Header fix: siempre visible en la página de glamping ── */
    .header {
        background-color: rgba(15, 25, 50, 0.88) !important;
        backdrop-filter: blur(4px);
    }

    /* ─────────────── GLAMPING PAGE STYLES ─────────────── */

    /* Banner */
    .banner-glamping .banner-content h1 { font-size: clamp(2rem, 5vw, 3.4rem); }

    /* Secciones */
    .glamp-section       { padding: 4.5rem 0; }
    .glamp-section-alt   { background-color: #f4f6fa; }

    /* Títulos */
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

    /* Imágenes */
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
    .img-placeholder-tall { height: 320px; }

    /* Lista con check */
    .check-list { list-style: none; padding: 0; margin: 0; }
    .check-list li { padding: .3rem 0; color: #444; font-size: .95rem; }
    .check-list li::before { content: "✓ "; color: #1a6aba; font-weight: 700; }

    /* Badges de marcas */
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

    /* Tarjetas de íconos */
    .icon-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 18px rgba(0,0,0,.07);
        transition: transform .25s;
        height: 100%;
    }
    .icon-card:hover { transform: translateY(-4px); }
    .icon-card .icon-wrap {
        width: 54px; height: 54px;
        border-radius: 50%;
        background: #e8f0fc;
        display: flex; align-items: center; justify-content: center;
        margin-bottom: 1rem;
    }
    .icon-card .icon-wrap i { font-size: 1.4rem; color: #1a6aba; }

    /* Banner de cita */
    .glamp-quote {
        background: linear-gradient(135deg, #1c253b 60%, #1a6aba);
        color: #fff;
        padding: 3rem 2rem;
        text-align: center;
    }
    .glamp-quote p { font-size: 1.15rem; font-style: italic; max-width: 760px; margin: 0 auto; }

    /* Tarjetas de seguridad */
    .security-card {
        background: #fff;
        border-left: 4px solid #1a6aba;
        border-radius: 6px;
        padding: 1.25rem 1.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,.06);
        height: 100%;
    }
    .security-card h5 { color: #1c253b; font-weight: 700; margin-bottom: .5rem; }

    /* Tarjetas de personal */
    .staff-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 18px rgba(0,0,0,.08);
    }
    .staff-card .staff-img-wrap {
        height: 260px; overflow: hidden;
        background: #d8dde8;
        display: flex; align-items: center; justify-content: center;
    }
    .staff-card .staff-img-wrap img { width:100%; height:100%; object-fit: cover; }
    .staff-card .staff-img-wrap span { color:#6c757d; font-style:italic; font-size:.85rem; }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .glamp-section { padding: 2.5rem 0; }
        .img-glamping, .img-placeholder { height: 180px; }
        .img-glamping-tall, .img-placeholder-tall { height: 220px; }
    }
</style>
@endsection

@section('contenido')

{{-- ═══════════════════════════════════════════════════════════
     BANNER
═══════════════════════════════════════════════════════════ --}}
<section class="banner-glamping">
    <div class="banner-content container">
        <h1>Equipo de Campamento</h1>
        <p>Servicio de Lujo — Comodidad en el Corazón de los Andes</p>
        <a href="#intro" class="scroll-down-btn" aria-label="Bajar al contenido">
            <i class="fas fa-chevron-down"></i>
            <i class="fas fa-chevron-down additional-arrow"></i>
            <i class="fas fa-chevron-down third-arrow"></i>
        </a>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     1. INTRO — EQUIPO DE CAMPAMENTO
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section" id="intro">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- Texto --}}
            <div class="col-lg-5">
                <h2 class="glamp-main-title">Equipo de Campamento<br>Pachatusantrek</h2>
                <hr class="glamp-divider">
                <p class="glamp-text">
                    Pachatusantrek utiliza equipo de campamento de la mejor calidad, de las marcas especialistas en
                    actividades al aire libre, asegurando de este modo la comodidad de nuestros caminantes según las
                    exigencias del trekking en las montañas de los Andes.
                </p>
                <p class="glamp-text mt-3">
                    Brindamos dos tipos de servicios en el campo, para lo cual contamos con equipo de campamento
                    diferenciado, garantizando así la completa satisfacción de nuestros clientes:
                    <strong>Servicio de Lujo</strong> y <strong>Premium</strong>.
                </p>
                <p class="glamp-text mt-3">
                    Nuestro equipo es renovado cada tres años, de esta forma protegemos la calidad de servicio y
                    la comodidad de nuestros caminantes.
                </p>
                <div class="mt-4">
                    <span class="brand-badge">EUREKA</span>
                    <span class="brand-badge">REI</span>
                    <span class="brand-badge">THERM-A-REST</span>
                    <span class="brand-badge">THE PETT</span>
                    <span class="brand-badge">THETFORD</span>
                    <span class="brand-badge">TRAVEL CHAIR</span>
                </div>
            </div>

            {{-- Imágenes --}}
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/equipo-de-campamento-pachatusantrek.webp') }}"
                             alt="Equipo de Campamento Pachatusantrek" class="img-glamping">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/comedor-1.webp') }}"
                             alt="Comedor en los Andes" class="img-glamping">
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Imagen de platos gourmet ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Kit de higiene Pachatusantrek ]</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     2. CARPAS DORMITORIO
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section glamp-section-alt">
    <div class="container">
        <h2 class="glamp-main-title">Equipo de Campamento para Caminatas del Servicio de Lujo</h2>
        <hr class="glamp-divider">

        {{-- REI Kingdom 6 --}}
        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/tiendas-de-dormir-glamping.webp') }}"
                             alt="Carpas dormitorio REI Kingdom 6" class="img-glamping">
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Exterior carpa REI Kingdom 6 ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Interior de la carpa ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Carpa con vista a la montaña ]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <p class="glamp-sub-title">Carpas Dormitorio</p>
                <p class="glamp-sub-title" style="color:#1c253b; font-size:1.05rem;">REI CO-OP — KINGDOM 6</p>
                <p class="glamp-text">
                    Esta carpa ofrece un espacio cómodo y cálido para el descanso ideal durante nuestra caminata.
                    Cuenta con amplias ventanas y techo de malla que ofrece una maravillosa vista del cielo y de
                    nuestro entorno en medio de las montañas de los Andes.
                </p>
                <p class="glamp-text mt-3">
                    Las ventanas y techo cuentan con paneles plegables de protección para el frío, y la carpa
                    incluye un cobertor para la lluvia.
                </p>
                <ul class="check-list mt-3">
                    <li>Amplias ventanas panorámicas y techo de malla</li>
                    <li>Paneles plegables de protección contra el frío</li>
                    <li>Cobertor completo para la lluvia</li>
                    <li>Interior espacioso y vertical</li>
                </ul>
            </div>
        </div>

        {{-- Camas y Colchones --}}
        <h2 class="glamp-main-title mt-3">Camas y Colchones</h2>
        <hr class="glamp-divider">

        <div class="row align-items-start g-5">
            <div class="col-lg-5">
                <p class="glamp-sub-title">Cama Plegable — Matrimonial o Simple</p>
                <p class="glamp-text">
                    El diseño de esta cama nos ofrece un amplio espacio, cómodo y estable para compartir y
                    disfrutar de un merecido descanso luego de nuestro día de caminata. De estructura metálica
                    fuerte y liviana, nos permite asegurar la comodidad en medio de las montañas.
                </p>

                <p class="glamp-sub-title mt-4">Cama Plegable — Doble o Twin</p>
                <p class="glamp-text">
                    Esta cama te ofrece comodidad, calidez y estabilidad durante tu merecido descanso. Fabricadas
                    con el mismo material que las camas matrimoniales, ideal para personas que desean compartir
                    una carpa.
                </p>

                <p class="glamp-sub-title mt-4">Colchones</p>
                <p class="glamp-text">
                    Cuando hablamos de comodidad no podemos dejar de mencionar nuestros colchones inflables, que
                    nos permiten ofrecer máxima comodidad durante el pernocte.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="img-placeholder">[ Cama matrimonial en carpa ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Cama simple plegable ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Camas twin en carpa ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Colchón inflable ]</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     3. ACCESORIOS Y DETALLES
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section">
    <div class="container">
        <h2 class="glamp-main-title">Accesorios y Detalles</h2>
        <hr class="glamp-divider">

        <div class="row align-items-center g-5 mb-5">
            {{-- Accesorios de Cama --}}
            <div class="col-lg-5">
                <p class="glamp-sub-title">Accesorios de Cama</p>
                <p class="glamp-text">
                    En nuestro servicio, deseamos que se sientan en la comodidad de un hotel de 5 estrellas en
                    medio de las montañas. Cuidamos al mínimo los detalles que nos permiten ofrecer un servicio
                    de alta calidad, donde nuestros clientes sentirán calidez y comodidad encontrando su hogar
                    lejos del hogar.
                </p>
                <p class="glamp-text mt-2">
                    La lencería de cama que ofrecemos es de la mejor calidad, confeccionada en material
                    hipoalergénico, garantizando la seguridad y confort de nuestros clientes.
                </p>
                <ul class="check-list mt-3">
                    <li>Protector de colchón</li>
                    <li>Sábanas hoteleras</li>
                    <li>Cobertor polar de cama</li>
                    <li>Cobertor de plumas</li>
                    <li>Almohadas hoteleras y cojines decorativos</li>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="img-placeholder img-placeholder-tall">[ Cama con lencería hotelera dentro de la carpa ]</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Calefacción + Bolsas de agua + Decoración --}}
        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="card icon-card p-4">
                    <div class="icon-wrap"><i class="fas fa-fire"></i></div>
                    <p class="glamp-sub-title">Calefacción</p>
                    <p class="glamp-text small">
                        Para las noches frías en las montañas, contamos con calefacción catalítica a gas, la cual
                        es muy segura y efectiva, brindando la calidez necesaria para disfrutar de nuestro sueño
                        y descanso.
                    </p>
                    <div class="img-placeholder mt-3" style="height:150px;">[ Calefactor catalítico ]</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card icon-card p-4">
                    <div class="icon-wrap"><i class="fas fa-tint"></i></div>
                    <p class="glamp-sub-title">Bolsas con Agua Caliente</p>
                    <p class="glamp-text small">
                        Como una forma de engreír a nuestros caminantes, les brindamos este complemento de bolsas
                        con agua caliente para descansar mejor en una noche fría. Cuentan con tapas selladas y
                        protector de polar para evitar quemaduras.
                    </p>
                    <div class="img-placeholder mt-3" style="height:150px;">[ Bolsas de agua caliente ]</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card icon-card p-4">
                    <div class="icon-wrap"><i class="fas fa-home"></i></div>
                    <p class="glamp-sub-title">Decoración en Carpa Dormitorio</p>
                    <p class="glamp-text small">
                        Para mayor comodidad, cada carpa cuenta con inmobiliario básico como mesa de noche y
                        alfombra, brindando calidez en este espacio. Ofrecemos pantuflas nuevas para cada cliente
                        e iluminación con lámparas solares.
                    </p>
                    <div class="img-placeholder mt-3" style="height:150px;">[ Decoración interior de carpa ]</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     4. SERVICIO DE MASAJE
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section glamp-section-alt">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="img-placeholder img-placeholder-tall">[ Interior carpa de masaje ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder img-placeholder-tall">[ Sesión de masaje ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Aromaterapia andina ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Aceites esenciales ]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h2 class="glamp-main-title">Servicio de Masaje</h2>
                <hr class="glamp-divider">
                <p class="glamp-text">
                    Pachatusantrek te ofrece la mejor comodidad y servicio. Es por eso que nuestro
                    <strong>servicio de lujo</strong> incluye una sesión de masaje de <strong>30 minutos</strong>
                    después de haber disfrutado de una ducha caliente, todas las noches de campamento.
                </p>
                <p class="glamp-text mt-3">
                    Las manos expertas de nuestras masajistas aliviarán cualquier dolor muscular y te ayudarán
                    a seguir caminando con mucha más energía y vitalidad.
                </p>
                <ul class="check-list mt-3">
                    <li>Sesión de masaje profesional de 30 minutos cada noche</li>
                    <li>Después de la ducha caliente — completamente revitalizador</li>
                    <li>Alivia el dolor muscular del trekking</li>
                    <li>Aceites esenciales y aromaterapia andina</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     5. CARPAS BAÑO
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section">
    <div class="container">
        <h2 class="glamp-main-title">Carpas Baño</h2>
        <hr class="glamp-divider">

        {{-- Carpa Baño --}}
        <div class="row align-items-start g-5 mb-5">
            <div class="col-lg-5">
                <p class="glamp-sub-title">Carpa Baño — The Pett · Cleanwaste · Thetford</p>
                <p class="glamp-text">
                    Desarrollando nuestra actividad bajo estándares internacionales de ecoturismo, Pachatusantrek
                    utiliza las ya famosas carpas baño <strong>"The Pett"</strong> (Carpa Baño Ambiental Portátil).
                </p>
                <p class="glamp-text mt-3">
                    Los sanitarios son de la marca <strong>Thetford</strong>, demostrando ser amigables con el
                    medio ambiente, ya que este sistema no utiliza químicos, solo un sistema de flujo de agua.
                    Esta carpa viene con una "silla de baño", que brinda comodidad e higiene al usuario.
                </p>
                <p class="glamp-text mt-3">
                    Nuestros inodoros portátiles son ecológicos y funcionan con agua corriente, dejando de lado
                    las incómodas bolsas biodegradables y los coagulantes que son dañinos para el medio ambiente.
                    Todos los baños cuentan con ambientadores de ricos aromas permanentemente.
                </p>
                <ul class="check-list mt-3">
                    <li>Sin químicos — solo sistema de flujo de agua</li>
                    <li>Personal capacitado maneja los residuos de forma higiénica</li>
                    <li>Residuos desechados al sistema de aguas servidas</li>
                    <li>Ambientador permanente</li>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/carpa-de-banio-1.webp') }}"
                             alt="Interior carpa baño" class="img-glamping">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/carpa-de-banio-2.webp') }}"
                             alt="Sanitario portátil ecológico" class="img-glamping">
                    </div>
                    <div class="col-12">
                        <img src="{{ asset('img/glamping/carpa-de-banio-3.webp') }}"
                             alt="Manejo de residuos carpa baño" class="img-glamping">
                    </div>
                </div>
            </div>
        </div>

        {{-- Cita de compromiso ambiental --}}
        <div class="glamp-quote rounded-4 mb-5">
            <p>"Como empresa certificada en Turismo Sostenible, nos comprometemos a desarrollar nuestras actividades
            de la forma más respetuosa con el medio ambiente, minimizando el impacto ambiental. La implantación y
            gestión de nuestros servicios higiénicos garantizan la responsabilidad con el medio ambiente, el confort
            e higiene del usuario, y la máxima seguridad en la gestión de residuos."</p>
        </div>

        {{-- Accesorios en el baño + Carpa Ducha --}}
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="glamp-sub-title">Accesorios en el Baño</p>
                <p class="glamp-text">
                    En la mesa auxiliar encontrarán un espejo y los productos de higiene personal que proveemos
                    a nuestros clientes, como papel higiénico y alcohol en gel desinfectante, son de la mejor
                    calidad; proveyendo higiene y comodidad en este servicio.
                </p>

                <p class="glamp-sub-title mt-4">Carpa Ducha</p>
                <p class="glamp-text">
                    No hay nada más reconfortante que una ducha caliente después de un día de caminata, luego
                    de ver paisajes y vivir momentos inolvidables. Nuestro servicio ofrece una
                    <strong>ducha caliente en base a energía solar</strong> en una carpa con piso, amplia y
                    cómoda.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="img-placeholder">[ Accesorios en el baño ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Espejo y kit de higiene ]</div>
                    </div>
                    <div class="col-12">
                        <div class="img-placeholder">[ Carpa ducha exterior ]</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     6. DUCHA SOLAR + KIT BIODEGRADABLE
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section glamp-section-alt">
    <div class="container">
        <h2 class="glamp-main-title">Accesorios y Detalles</h2>
        <hr class="glamp-divider">
        <div class="row align-items-start g-5">
            <div class="col-lg-6">
                <p class="glamp-sub-title">Ducha Solar a Presión</p>
                <p class="glamp-text">
                    <strong>Nemo Helio LX</strong> es una ducha portátil a pedal que, al accionarlo, proporciona
                    una considerable presión de agua; permitiendo una agradable y reconfortante ducha caliente.
                    Es ideal el poder tomar una ducha caliente al finalizar una jornada de caminata en las
                    montañas… como en casa.
                </p>
                <div class="row g-3 mt-3">
                    <div class="col-6">
                        <div class="img-placeholder">[ Ducha Nemo Helio LX ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Detalle del cabezal de ducha ]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="glamp-sub-title">Kit Biodegradable de Aseo</p>
                <p class="glamp-text">
                    Ofrecemos un kit de aseo personal que contiene: jabón líquido, jabón en barra, champú, crema
                    de cuerpo, repelente de insectos, bálsamo labial, aceite esencial y toallitas individuales.
                </p>
                <p class="glamp-text mt-3">
                    Estos productos son <strong>biodegradables</strong> y elaborados con hierbas y plantas
                    aromáticas de los Andes. Toda una experiencia andina que llevarás a flor de piel. De esta
                    manera nuestros caminantes colaboran con el cuidado del medio ambiente, evitando productos
                    químicos que puedan dañar las montañas.
                </p>
                <div class="row g-3 mt-3">
                    <div class="col-6">
                        <div class="img-placeholder">[ Kit biodegradable de aseo ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Hierbas y plantas andinas ]</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     7. CARPAS COMEDOR
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section">
    <div class="container">
        <h2 class="glamp-main-title">Carpas Comedor</h2>
        <hr class="glamp-divider">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="glamp-sub-title">Carpas Comedor — Eureka · Cooper Canyon &amp; Titan</p>
                <p class="glamp-text">
                    Hemos escogido la marca <strong>Eureka</strong> en los modelos Cooper Canyon de capacidades
                    de 04, 06 y 12 personas; y en el modelo Titan para 08 personas.
                </p>
                <p class="glamp-text mt-3">
                    Espaciosas, de paredes casi verticales, grandes ventanas y puertas; estas carpas nos ofrecen
                    un ambiente fresco y una gran vista durante los desayunos y almuerzos. Calidez y confort
                    durante las noches compartiendo nuestra cena.
                </p>
                <ul class="check-list mt-3">
                    <li>Capacidad de 4 a 12 personas</li>
                    <li>Paredes verticales y grandes ventanas</li>
                    <li>Fresco de día, cálido de noche</li>
                    <li>Vistas panorámicas a la montaña</li>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/comedor-1.webp') }}"
                             alt="Exterior carpa comedor" class="img-glamping">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/comedor-2.webp') }}"
                             alt="Desayuno en las montañas" class="img-glamping">
                    </div>
                    <div class="col-12">
                        <img src="{{ asset('img/glamping/comedor-3.webp') }}"
                             alt="Mesa puesta en carpa comedor" class="img-glamping">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     8. MESAS Y SILLAS
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section glamp-section-alt">
    <div class="container">
        <h2 class="glamp-main-title">Mesas y Sillas</h2>
        <hr class="glamp-divider">
        <div class="row align-items-start g-5">
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="img-placeholder">[ Mesas Travel Chair ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Chef en la mesa de preparación ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Sillas Big Kahuna en el campamento ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Silla REI Flex Lite Boss Chair ]</div>
                    </div>
                    <div class="col-12">
                        <div class="img-placeholder">[ Silla doble para lunas de miel ]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <p class="glamp-sub-title">Mesas — Travel Chair</p>
                <p class="glamp-text">
                    Nuestras mesas tienen una excelente estabilidad, lo que nos permite disfrutar de manera
                    segura nuestras comidas. Además, cuentan con patas telescópicas, adaptando la altura a la
                    comodidad de nuestros clientes. La marca <strong>Travel Chair</strong> nos provee de mesas
                    durables y de gran estabilidad en medio de las montañas.
                </p>

                <p class="glamp-sub-title mt-4">Sillas</p>
                <p class="glamp-text">
                    Utilizamos sillas de las marcas <strong>Travel Chair</strong> y <strong>REI Co-Op</strong>,
                    que nos ofrecen mucha comodidad y estabilidad. Los modelos <em>Big Kahuna</em> de 4 patas,
                    posa brazo y respaldar son amplias y muy cómodas para disfrutar de mejor manera los alimentos.
                </p>
                <p class="glamp-text mt-2">
                    En el Camino Inca, utilizamos el modelo <em>REI Flex Lite Boss Chair</em>, una silla ligera
                    de 4 patas que brinda comodidad y estabilidad.
                </p>

                <p class="glamp-sub-title mt-4">Sillas Dobles — Para Lunas de Miel</p>
                <p class="glamp-text">
                    Para los eternos enamorados de la vida y de las actividades al aire libre, ofrecemos esta
                    acogedora silla doble, marca REI, ideal para disfrutar de una tarde llena de recuerdos con
                    esa persona tan especial.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     9. CARPAS COCINA Y ALMACÉN
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="glamp-main-title">Carpas Cocina</h2>
                <hr class="glamp-divider">
                <p class="glamp-text">
                    Nuestro personal de cocina trabaja en un ambiente cómodo, amplio y seguro, para poder
                    garantizar la preparación de los alimentos de forma higiénica, ordenada y sobre todo segura.
                </p>
                <p class="glamp-text mt-3">
                    Contamos con una carpa cocina donde solo ingresa nuestro personal de cocina (cocineros,
                    asistentes y mozos), debidamente limpios y cumpliendo con todos los estándares de seguridad
                    e inocuidad.
                </p>
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="img-placeholder">[ Chef en carpa cocina ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Personal de cocina preparando alimentos ]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="glamp-main-title">Carpas Almacén</h2>
                <hr class="glamp-divider">
                <p class="glamp-text">
                    Dentro de nuestro personal, siempre contamos con un almacenero y con una carpa almacén.
                    El encargado de almacén ordena los productos e ingredientes de las comidas, para facilitar
                    el trabajo del equipo de cocina. De esta forma evitamos la contaminación cruzada de alimentos.
                </p>
                <p class="glamp-text mt-3">
                    Todos los contenedores que utilizamos son <strong>reutilizables y ecológicos</strong>, con
                    bolsas de tela para el transporte de abarrotes y contenedores de plástico para otros insumos,
                    evitando en todo momento el uso de bolsas de plástico de un solo uso.
                </p>
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="img-placeholder">[ Carpa almacén con ingredientes ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Bolsas de tela reutilizables ]</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     10. VAJILLA — CUBIERTOS — PRESENTACIÓN EN MESA
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section glamp-section-alt">
    <div class="container">
        <h2 class="glamp-main-title">Vajilla — Cubiertos — Presentación en Mesa</h2>
        <hr class="glamp-divider">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="glamp-text">
                    Nuestra vajilla es hotelera, de la marca estadounidense <strong>Corelle</strong>, de la línea
                    <em>"Corelle® Square™ Pure White"</em>, una vajilla de cerámica resistente a caídas y con una
                    presentación muy agradable.
                </p>
                <p class="glamp-text mt-3">
                    Complementamos nuestras vajillas con <strong>decoración en madera y bamboo</strong>, la misma
                    que le da una presentación agradable y familiar a nuestra mesa.
                </p>
                <p class="glamp-text mt-3">
                    Utilizamos <strong>servilletas de tela</strong>, para evitar generar desechos y para
                    garantizar una mejor presentación. Contamos con un menú para el desayuno presentado en
                    una linda carta hecha de madera.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="img-placeholder img-placeholder-tall">[ Mesa servida en carpa comedor ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder img-placeholder-tall">[ Detalle vajilla Corelle ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Plato principal gourmet ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder">[ Postre andino ]</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     11. SNACKS + PURIFICACIÓN DE AGUA
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="glamp-main-title">Snacks</h2>
                <hr class="glamp-divider">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="img-placeholder img-placeholder-tall">[ Variedad de snacks en tazones ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder img-placeholder-tall">[ Bolsas de snacks Pachatusantrek ]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="glamp-main-title">Purificación de Agua</h2>
                <hr class="glamp-divider">
                <p class="glamp-text">
                    Este delicado proceso se lo confiamos a la prestigiosa marca de filtros de agua para
                    actividades al aire libre, <strong>Katadyn</strong>. Estos filtros por gravedad son rápidos
                    y eliminan toda posible contaminación del líquido elemento. Nuestra hidratación está asegurada.
                </p>
                <div class="row g-3 mt-3">
                    <div class="col-6">
                        <div class="img-placeholder img-placeholder-tall">[ Filtro por gravedad Katadyn ]</div>
                    </div>
                    <div class="col-6">
                        <div class="img-placeholder img-placeholder-tall">[ Filtración de agua en campo ]</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     12. SERVICIOS DE SEGURIDAD PARA PASAJEROS
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section glamp-section-alt">
    <div class="container">
        <h2 class="glamp-main-title">Servicios de Seguridad para Pasajeros</h2>
        <hr class="glamp-divider">
        <p class="glamp-text mb-5" style="max-width:700px;">
            La seguridad de nuestros caminantes es un objetivo de permanente atención para nuestra organización.
            El cumplimiento de este objetivo demanda prestar los siguientes servicios:
        </p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="security-card">
                    <h5><i class="fas fa-user-shield me-2 text-primary"></i> Guías Altamente Calificados</h5>
                    <p class="glamp-text small">
                        Guías turísticos profesionales especializados en caminatas, con la capacitación idónea para
                        el desarrollo de esta actividad. Nuestros guías son calificados en
                        <strong>Primeros Auxilios en zonas remotas</strong>.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="security-card">
                    <h5><i class="fas fa-first-aid me-2 text-primary"></i> Botiquín de Primeros Auxilios</h5>
                    <p class="glamp-text small">
                        Nuestro botiquín de Primeros Auxilios está diseñado y equipado bajo la asesoría de la
                        <strong>Clínica O2</strong>, para enfrentar cualquier incidente en zonas remotas.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="security-card">
                    <h5><i class="fas fa-wind me-2 text-primary"></i> Balón de Oxígeno</h5>
                    <p class="glamp-text small">
                        El guía siempre es responsable del traslado y uso de un balón de oxígeno medicinal para
                        ser suministrado profesionalmente a quien lo necesite en caso de problemas respiratorios.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="security-card">
                    <h5><i class="fas fa-map-marker-alt me-2 text-primary"></i> GPS — Geoposicionamiento Satelital</h5>
                    <p class="glamp-text small">
                        Equipo <strong>Garmin</strong> que determina la ubicación exacta del usuario para
                        transmitirla al equipo de rescate en caso de necesitarse la evacuación de un accidentado.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="security-card">
                    <h5><i class="fas fa-hospital me-2 text-primary"></i> Convenio Pachatusantrek SAC — Clínica O2</h5>
                    <p class="glamp-text small">
                        Tenemos un convenio de asistencia médica y rescate terrestre y aéreo con la Clínica O2,
                        con sedes en Aguas Calientes (Machu Picchu), Yanahuara (Valle Sagrado) y la ciudad de
                        Cusco. El convenio también considera la asignación de un médico de cabecera a cargo de
                        cualquier consulta médica necesaria durante nuestras caminatas.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="security-card">
                    <h5><i class="fas fa-satellite-dish me-2 text-primary"></i> Teléfono Satelital</h5>
                    <p class="glamp-text small">
                        Pachatusantrek SAC utiliza última tecnología en comunicación satelital. Nuestros teléfonos
                        <strong>Iridium Xtreme</strong> garantizan la comunicación desde zonas remotas en caso de
                        algún suceso de emergencia durante la caminata — importante línea con nuestro médico de
                        cabecera y nuestra oficina de operaciones.
                    </p>
                </div>
            </div>
        </div>

        {{-- Imágenes de seguridad --}}
        <div class="row g-3 mt-5">
            <div class="col-md-4">
                <div class="img-placeholder">[ Guía con el grupo en Machu Picchu ]</div>
            </div>
            <div class="col-md-4">
                <div class="img-placeholder">[ Clínica O2 — Unidad de cuidados intensivos ]</div>
            </div>
            <div class="col-md-4">
                <div class="img-placeholder">[ Teléfono satelital Iridium Xtreme ]</div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     13. PORTEADORES — CAMINO INCA
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section">
    <div class="container">
        <h2 class="glamp-main-title">Porteadores — Camino Inca</h2>
        <hr class="glamp-divider">
        <div class="row g-5 align-items-start">
            <div class="col-lg-6">
                <p class="glamp-sub-title">Antecedentes</p>
                <p class="glamp-text">
                    El estado peruano protege el Santuario Histórico de Machu Picchu desde la perspectiva
                    cultural, por medio del Ministerio de Cultura; ambiental a través del Ministerio del Ambiente
                    y social bajo el control del Ministerio de Trabajo. Estas instituciones son las que regulan
                    la actividad turística dentro del <strong>Santuario Histórico Machu Picchu (SHMP)</strong>.
                </p>

                <p class="glamp-sub-title mt-4">Nuestras Actividades en el Santuario Histórico de Machu Picchu</p>
                <p class="glamp-text">
                    Para Pachatusantrek S.A.C., es de suprema importancia el respeto a la persona-trabajador,
                    a las leyes que rigen en nuestro país y a la calidad del servicio que prestamos. El
                    reglamento del SHMP establece la prohibición del uso de acémilas en el Camino Inca.
                    <strong>Solo está permitido el trabajo de los porteadores.</strong>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="glamp-sub-title">Ley del Porteador — Límites de Peso</p>
                <p class="glamp-text">
                    La Ley del Porteador establece limitaciones en el peso y carga para el desarrollo de esta
                    actividad:
                </p>
                <ul class="check-list mt-2">
                    <li>Peso máximo por porteador: <strong>20 kg / 44 lb</strong></li>
                    <li>Peso permitido por caminante: <strong>5 kg / 11 lb</strong> (incluye bolsa de dormir)</li>
                    <li>El exceso de peso puede ser llevado por el caminante en su day pack</li>
                </ul>
                <p class="glamp-text mt-3">
                    Siguiendo la Ley del Porteador, Pachatusantrek provee a los porteadores todo el equipo
                    necesario para realizar su trabajo de la mejor manera.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     14. EQUIPO DE CAMINATA PARA PERSONAL DE CAMPO
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section glamp-section-alt">
    <div class="container">
        <h2 class="glamp-main-title">Equipo de Caminata para Personal de Campo</h2>
        <hr class="glamp-divider">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <p class="glamp-text">
                    Siguiendo la Ley del Porteador, Pachatusantrek SAC provee a los porteadores el equipo
                    necesario para que puedan desarrollar su trabajo de la mejor manera. Este equipo exigido por
                    la ley consta de:
                </p>
                <div class="row mt-4 g-3">
                    <div class="col-6">
                        <ul class="check-list">
                            <li>Carpas</li>
                            <li>Zapatos de trekking</li>
                            <li>Mochilas reforzadas</li>
                            <li>Casaca de polar</li>
                            <li>Faja lumbar</li>
                            <li>Colchoneta de espuma</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="check-list">
                            <li>Bolsa de dormir</li>
                            <li>Linterna</li>
                            <li>Cantimplora para agua</li>
                            <li>Uniforme de trabajo</li>
                            <li>Casaca de lluvia y poncho</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/campamento-glamping.webp') }}"
                             alt="Campamento Pachatusantrek" class="img-glamping">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/glamping/foto01.webp') }}"
                             alt="Personal de campo en el Camino Inca" class="img-glamping">
                    </div>
                    <div class="col-12">
                        <img src="{{ asset('img/glamping/campamento-01.png') }}"
                             alt="Equipo completo en campamento" class="img-glamping">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     15. NUESTROS COLABORADORES EN CAMPO
═══════════════════════════════════════════════════════════ --}}
<section class="glamp-section">
    <div class="container">
        <h2 class="glamp-main-title">Nuestros Colaboradores en Campo</h2>
        <hr class="glamp-divider">
        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="staff-card">
                    <div class="staff-img-wrap">
                        <span>[ Chef — foto ]</span>
                    </div>
                    <div class="p-3 text-center">
                        <p class="glamp-sub-title mb-0">Chef</p>
                        <p class="small text-muted">Cocina gourmet en las montañas</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="staff-card">
                    <div class="staff-img-wrap">
                        <span>[ Mozo — foto ]</span>
                    </div>
                    <div class="p-3 text-center">
                        <p class="glamp-sub-title mb-0">Mozo</p>
                        <p class="small text-muted">Servicio profesional en campo</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="staff-card">
                    <div class="staff-img-wrap">
                        <span>[ Porteadores / Asistentes en Campo — foto ]</span>
                    </div>
                    <div class="p-3 text-center">
                        <p class="glamp-sub-title mb-0">Porteadores &amp; Asistentes en Campo</p>
                        <p class="small text-muted">El pilar de cada expedición</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Cita de cierre --}}
        <div class="glamp-quote rounded-4 mt-5">
            <p>"Con la protección de la Pachamama y el permiso de los Apus"</p>
        </div>
    </div>
</section>

@endsection
