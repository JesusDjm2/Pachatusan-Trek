@extends('layouts.admines')
@section('title', $meta_title)
@section('meta-description', $meta_description)
@section('meta-keywords', $meta_keywords)
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

    <section class="bg-light py-5" id="empezar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="dancingShow">Equipo de Campamento Premium</h2>
                    <p class="lead mt-3 mx-auto" style="max-width: 800px;">
                        Pachatusantrek utiliza equipo de campamento de la más alta calidad, de marcas especialistas como
                        EUREKA, REI, THERM A REST, THE PETT y TRAVEL CHAIR, asegurando la comodidad de nuestros caminantes.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 shadow-sm">
                        <h3 class="blue mb-4">Estándares de Élite</h3>
                        <p class="text-justify">
                            Ofrecemos dos tipos de servicios en las montañas: <strong>Deluxe</strong> y
                            <strong>Premium</strong>. Para cada uno, contamos con equipo diferenciado, garantizando la
                            completa satisfacción de nuestros clientes.
                        </p>
                        <p class="text-justify">
                            Nuestro equipo se renueva cada tres años. De esta manera, protegemos la calidad del servicio y
                            aseguramos una experiencia de confort total para cada excursionista.
                        </p>
                        <div class="row mt-4 g-3">
                            <div class="col-6">
                                <div class="stats-box p-3 border rounded text-center">
                                    <h4 class="text-warning mb-1">Marcas Top</h4>
                                    <small>REI, EUREKA, THERMAREST</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stats-box p-3 border rounded text-center">
                                    <h4 class="text-warning mb-1">100%</h4>
                                    <small>Sostenible y Seguro</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="{{ asset('img/glamping/foto01.webp') }}" class="img-fluid rounded-4 shadow"
                        alt="Equipo de Glamping">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Dormitorios Premium</h2>
            <div class="row g-4">
                <div class="col-md-7">
                    <div class="equipment-card h-100 p-4 shadow-sm rounded-4 bg-white border-start border-4 border-primary">
                        <h3 class="mb-2">REI CO-OP – KINGDOM 6</h3>
                        <h5 class="text-muted mb-4">Carpas Dormitorio de Élite</h5>
                        <p>
                            Esta carpa ofrece un espacio cómodo y cálido para el descanso ideal durante la caminata. Cuenta
                            con amplias ventanas y un techo de malla que ofrece una vista maravillosa del cielo y del
                            entorno andino.
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-success me-2"></i> Paneles plegables contra el frío</li>
                            <li><i class="fas fa-check text-success me-2"></i> Cobertor de lluvia para total seguridad</li>
                            <li><i class="fas fa-check text-success me-2"></i> Interior espacioso con paredes casi verticales</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="equipment-card h-100 p-4 shadow-sm rounded-4 bg-light">
                        <h3 class="mb-2">Camas y Colchones</h3>
                        <p class="mt-3">
                            <strong>Cama Plegable Doble o Simple:</strong> Estructura metálica fuerte y ligera que asegura el
                            confort en plena montaña.
                        </p>
                        <p>
                            <strong>Cama Twin:</strong> Calidez y estabilidad para un descanso merecido. Ideal para quienes
                            desean compartir carpa.
                        </p>
                        <p>
                            <strong>Colchones Inflables:</strong> El máximo nivel de comodidad, brindando soporte óptimo
                            durante la noche.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Accesorios y Detalles</h2>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4">
                            <div class="text-primary mb-3"><i class="fas fa-bed fa-2x"></i></div>
                            <h4>Accesorios de Cama</h4>
                            <p class="small text-muted">
                                Material hipoalergénico, sábanas hoteleras, cobertores polar, mantas de plumas y cojines
                                decorativos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4">
                            <div class="text-primary mb-3"><i class="fas fa-fire fa-2x"></i></div>
                            <h4>Calefacción Catalítica</h4>
                            <p class="small text-muted">
                                Calefacción a gas muy segura y efectiva, proporcionando la calidez necesaria en las frías
                                noches andinas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4">
                            <div class="text-primary mb-3"><i class="fas fa-hot-tub fa-2x"></i></div>
                            <h4>Bolsas de Agua Caliente</h4>
                            <p class="small text-muted">
                                Tapas selladas y protectores de polar. Un detalle para descansar mejor en noches gélidas.
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
                        alt="Servicio de Masajes">
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <div class="ps-lg-5">
                        <h2 class="dancingShow mb-4">Confort de Élite</h2>
                        <h3 class="blue mb-3">Servicio de Masajes</h3>
                        <p class="text-justify">
                            Pachatusantrek incluye una <strong>sesión de masajes de 30 minutos</strong> en nuestro servicio
                            Deluxe, disponible cada noche de campamento después de una ducha caliente.
                        </p>
                        <p class="text-justify">
                            Manos expertas aliviarán cualquier dolor muscular y revitalizarán tu energía para continuar la
                            caminata con bienestar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark text-white py-5">
        <div class="container">
            <h2 class="dancingShow text-center text-white mb-5">Excelencia Higiénica</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 rounded-4 bg-secondary-subtle text-dark h-100">
                        <h4 class="mb-3">Carpa Baño – The Pett</h4>
                        <p class="small">
                            Siguiendo estándares de ecoturismo, utilizamos "The Pett" (Portable Environmental Toilet Tent).
                            Sanitarios ecológicos con sistema de flujo de agua, sin químicos ni bolsas dañinas.
                        </p>
                        <p class="small mb-0">
                            Los residuos son manejados por personal capacitado y eliminados de forma segura en sistemas de
                            aguas servidas autorizados.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded-4 bg-secondary-subtle text-dark h-100">
                        <h4 class="mb-3">Carpa Ducha</h4>
                        <p class="small">
                            Disfruta de una ducha caliente con energía solar en una carpa espaciosa con piso. También usamos
                            la ducha de presión <strong>Nemo Helio LX</strong> para un confort inigualable.
                        </p>
                        <p class="small mb-0">
                            Incluye un kit de aseo biodegradable con aceites esenciales y plantas aromáticas de los Andes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Comedor y Vajilla</h2>
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-4">
                    <div class="bg-white p-4 h-100 rounded-4 shadow-sm">
                        <h4 class="blue mb-3">Carpas Comedor</h4>
                        <p class="small">
                            Usamos modelos <strong>Eureka</strong> (Copper Canyon y Titan) con capacidad para 4 a 12
                            personas. Paredes verticales y grandes ventanas ofrecen un ambiente fresco y grandes vistas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white p-4 h-100 rounded-4 shadow-sm">
                        <h4 class="blue mb-3">Sillas y Mesas</h4>
                        <p class="small">
                            Mesas <strong>Travel Chair</strong> con patas telescópicas que se ajustan al terreno. Sillas
                            cómodas de 4 patas (Big Kahuna), incluyendo sillas dobles para lunas de miel.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white p-4 h-100 rounded-4 shadow-sm">
                        <h4 class="blue mb-3">Presentación de Mesa</h4>
                        <p class="small">
                            Vajilla americana <strong>Corelle Square Pure White</strong>, complementada con decoraciones de
                            madera y bambú. Cada desayuno se presenta con una elegante carta de madera.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="dancingShow text-center mb-5">Seguridad y Servicios de Campo</h2>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="p-4 border rounded-4 h-100">
                        <h4 class="mb-3">Soporte Profesional</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-user-shield text-primary me-2"></i> <strong>Guías
                                    Calificados:</strong> Especialistas en primeros auxilios en zonas remotas.</li>
                            <li class="mb-2"><i class="fas fa-clinic-medical text-primary me-2"></i> <strong>Convenio
                                    Clínica O2:</strong> Alianza para asistencia médica y rescate.</li>
                            <li class="mb-2"><i class="fas fa-map-marked-alt text-primary me-2"></i> <strong>Posicionamiento
                                    GPS:</strong> Localización precisa mediante tecnología Garmin.</li>
                            <li class="mb-2"><i class="fas fa-phone-alt text-primary me-2"></i> <strong>Teléfonos
                                    Satelitales:</strong> Equipos Iridium Xtreme para comunicación en áreas remotas.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 border rounded-4 h-100">
                        <h4 class="mb-3">Cocina y Personal</h4>
                        <p class="small">
                            Carpas de cocina y almacenamiento que siguen estrictos estándares de higiene. Nuestro equipo
                            incluye chefs, mozos y encargados de almacén que utilizan recipientes reutilizables.
                        </p>
                        <div class="alert alert-info py-2 small border-0 rounded-3">
                            <i class="fas fa-info-circle me-2"></i> Utilizamos filtros de gravedad Katadyn para una
                            purificación de agua rápida y segura.
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
                    <h2 class="dancingShow text-center mb-4">Porteadores y el Camino Inca</h2>
                    <p class="text-center italic">"Cumpliendo con la Ley del Porteador y protegiendo el Santuario Histórico de
                        Machu Picchu"</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <p class="small text-justify">
                                Las normas prohíben caballos en el Camino Inca para proteger los senderos de piedra. Solo se
                                permiten porteadores, y cumplimos estrictamente los límites de peso (20kg máx) para su
                                bienestar.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="small text-justify">
                                Brindamos a nuestro personal de campo el mejor equipo: carpas, mochilas con soporte lumbar y
                                ropa técnica adecuada para su labor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
