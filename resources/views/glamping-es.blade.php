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
    <section class="bg-light contact-section" id="empezar">
        <div class="container">
            <div class="row">
                <!-- HERO SECTION -->
                <div class="col-12">
                    <h2 class="dancingShow mt-4">Equipo de Campamento Premium</h2>
                    <p class="text-justify">Pachatusantrek utiliza equipo de campamento de la mejor calidad, de
                        las marcas especialistas en actividades al aire libre asegurando
                        de este modo la comodidad de nuestros caminantes, según las
                        exigencias que presenta nuestras actividades en las
                        montañas de los Andes.</p>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="stats-box">
                                <h4 class="text-warning">Cada 3 Años</h4>
                                <p>Renovación de equipo</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="stats-box">
                                <h4 class="text-warning">2 Servicios</h4>
                                <p>Lujo & Premium</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="stats-box">
                                <h4 class="text-warning">100%</h4>
                                <p>Sostenible</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="stats-box">
                                <h4 class="text-warning">Marcas Top</h4>
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
            <h2 class="dancingShow mb-4 text-center">Equipo de Campamento</h2>
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="equipment-card shadow-sm rounded overflow-hidden bg-white">
                        <div class="equipment-content p-4">
                            <h3 class="mb-2">Carpas Dormitorio</h3>
                            <h4 class="blue mb-3">REI CO-OP – KINGDOM 6</h4>
                            <p>
                                Esta carpa ofrece un espacio cómodo y cálido para el descanso ideal durante la
                                caminata. Sus amplias ventanas y techo de malla permiten disfrutar una vista
                                maravillosa del cielo y del entorno andino.
                            </p>
                            <p class="mb-0">
                                Cuenta con paneles plegables para proteger del frío y un cobertor resistente
                                para la lluvia.
                            </p>
                            <h3 class="mb-2 mt-4">Camas y Colchones</h3>
                            <h4 class="blue mb-3 mt-3">Cama Plegable – Doble o Twin</h4>
                            <p>
                                Estas camas brindan calidez y estabilidad durante el descanso, elaboradas con los
                                mismos materiales que las versiones matrimoniales. Perfectas para quienes
                                desean compartir la carpa.
                            </p>
                            <h4 class="blue mb-3">Cama Plegable – Matrimonial o Simple</h4>
                            <p>
                                Su diseño ofrece un espacio amplio, cómodo y estable para un descanso merecido
                                luego de la caminata. Fabricada en estructura metálica ligera y resistente,
                                asegura confort incluso en plena montaña.
                            </p>
                            <h4 class="blue mb-3">Colchones Inflables</h4>
                            <p class="mb-0">
                                Nuestros colchones inflables ofrecen máxima comodidad durante el pernocte,
                                elevando la experiencia de descanso en las montañas de los Andes al nivel de un
                                servicio de lujo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <img src="{{ asset('img/glamping/foto01.webp') }}" class="img-fluid rounded shadow-sm w-100"
                        alt="Camas y colchones - Glamping">
                </div>
            </div>
        </div>
    </section>

    <section class="equipment-section py-5 bg-light">
        <div class="container">
            <h2 class="dancingShow mb-4 text-center">Accesorios y Detalles</h2>

            <div class="row g-4">
                <!-- TEXTO PRINCIPAL -->
                <div class="col-md-8">
                    <div class="equipment-card shadow-sm rounded p-4">
                        <!-- ACCESORIOS DE CAMA -->
                        <h3 class="mb-2">Accesorios de Cama</h3>
                        <p>
                            En nuestro servicio, deseamos que se sientan en la comodidad de un hotel de 5 estrellas,
                            en medio de las montañas. Cuidamos al mínimo los detalles que nos permiten ofrecer un
                            servicio de alta calidad, donde nuestros clientes sentirán calidez y comodidad
                            encontrando su hogar lejos del hogar.
                        </p>
                        <p>
                            La lencería de cama que ofrecemos es de la mejor calidad, confeccionada en material
                            hipoalergénico para garantizar seguridad y confort.
                        </p>
                        <p class="mb-3">
                            <strong>Incluye:</strong> Protector de colchón, sábanas hoteleras, cobertor polar, cobertor de
                            plumas,
                            almohadas hoteleras y cojines decorativos.
                        </p>

                        <!-- CALEFACCION -->
                        <h3 class="mb-2 mt-4">Calefacción</h3>
                        <p>
                            Para las noches frías en las montañas, contamos con calefacción catalítica a gas,
                            muy segura y efectiva, proporcionando la calidez necesaria para disfrutar del descanso.
                        </p>

                        <!-- BOLSAS DE AGUA CALIENTE -->
                        <h3 class="mb-2 mt-4">Bolsas con Agua Caliente</h3>
                        <p>
                            Como un detalle especial hacia nuestros caminantes, ofrecemos bolsas con agua caliente
                            para un descanso más confortable en noches frías.
                        </p>
                        <p>
                            Cuentan con tapas selladas y protector de polar para evitar quemaduras:
                            un servicio seguro y muy bien recibido por nuestros clientes.
                        </p>

                        <!-- DECORACIÓN -->
                        <h3 class="mb-2 mt-4">Decoración y Accesorios en la Carpa Dormitorio</h3>
                        <p>
                            Cada carpa cuenta con mobiliario básico como mesa de noche y alfombra que aportan
                            calidez y comodidad. Además, ofrecemos pantuflas nuevas para cada cliente y la
                            iluminación se realiza con lámparas solares.
                        </p>
                    </div>
                </div>

                <!-- GALERÍA (2 a 4 fotos) -->
                <div class="col-md-4 d-flex flex-column justify-content-between">
                    <img src="{{ asset('img/glamping/Foto02.webp') }}" class="img-fluid rounded shadow-sm mb-3 w-100"
                        alt="Accesorios de cama - Glamping" height="100px">
                    <img src="{{ asset('img/glamping/Foto02.webp') }}" class="img-fluid rounded shadow-sm mb-3 w-100"
                        alt="Accesorios de cama - Glamping">
                </div>
            </div>
        </div>
    </section>

    <section class="service-luxury-section py-5">
        <div class="container">

            <h2 class="dancingShow text-center mb-5">Comodidades de Lujo</h2>

            <!-- SERVICIO DE MASAJE -->
            <div class="row align-items-center mb-5 g-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <h3 class="blue mb-3">Servicio de Masaje</h3>
                        <p>
                            Pachatusantrek te brinda una experiencia de relajación incomparable. Nuestro servicio de lujo
                            incluye una sesión de masaje de 30 minutos todas las noches de campamento, justo después de
                            disfrutar una ducha caliente.
                        </p>
                        <p class="mb-0">
                            Las manos expertas de nuestras masajistas aliviarán el cansancio muscular y devolverán energía
                            y vitalidad para continuar la caminata con renovado bienestar.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded shadow-sm w-100 object-fit-cover" alt="Servicio de masaje en campamento">
                </div>
            </div>

            <!-- CARPAS BAÑO -->
            <div class="row align-items-center flex-lg-row-reverse mb-5 g-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <h3 class="blue mb-3">Carpas Baño</h3>
                        <p>
                            Siguiendo estándares internacionales de ecoturismo, utilizamos las reconocidas carpas baño
                            “The Pett” (Carpa Baño Ambiental Portátil).
                        </p>
                        <p>
                            Los sanitarios son de la marca <strong>Thetford</strong>, amigables con el medio ambiente, ya
                            que funcionan con un
                            sistema de agua corriente sin químicos ni bolsas biodegradables.
                        </p>
                        <p class="mb-0">
                            La manipulación de residuos, realizada por personal capacitado, es higiénica y segura. Los
                            desechos se eliminan mediante los sistemas de aguas servidas de los campamentos autorizados,
                            garantizando sostenibilidad y respeto al medio ambiente.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded shadow-sm w-100 object-fit-cover" alt="Carpa baño ecológica">
                </div>
            </div>

            <!-- ACCESORIOS EN EL BAÑO -->
            <div class="row align-items-center mb-5 g-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <h3 class="blue mb-3">Accesorios en el Baño</h3>
                        <p>
                            En la mesa auxiliar encontrarás un espejo y productos de higiene personal
                            de la mejor calidad: papel higiénico, alcohol en gel y elementos complementarios
                            para asegurar la comodidad del usuario.
                        </p>
                        <p class="mb-0">
                            Aromatizantes suaves y detalles de limpieza constante elevan la experiencia del baño
                            a un estándar de hotel, incluso en plena naturaleza.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded shadow-sm w-100 object-fit-cover"
                        alt="Accesorios de baño en campamento de lujo">
                </div>
            </div>

            <!-- CARPA DUCHA -->
            <div class="row align-items-center flex-lg-row-reverse g-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded shadow-sm bg-white h-100">
                        <h3 class="blue mb-3">Carpa Ducha</h3>
                        <p>
                            No hay nada más revitalizante que una ducha caliente después de un día de caminata.
                            Nuestra ducha utiliza energía solar y se realiza en una carpa amplia, con piso y ventilación,
                            especialmente diseñada para brindar comodidad y privacidad.
                        </p>
                        <p class="mb-0">
                            El sistema garantiza agua caliente constante y una experiencia refrescante digna de un servicio
                            premium.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded shadow-sm w-100 object-fit-cover" alt="Carpa de ducha caliente">
                </div>
            </div>




            <div class="row align-items-center g-4 mb-5">
                <div class="col-lg-6">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100">
                        <h3 class="blue mb-3">Vajilla & Presentación en Mesa</h3>

                        <p>
                            Nuestra vajilla hotelera <strong>Corelle® Square™ Pure White</strong>,
                            de origen estadounidense, combina elegancia, durabilidad y resistencia
                            a caídas, ofreciendo una experiencia de mesa limpia y sofisticada.
                        </p>

                        <p>
                            La presentación se complementa con elementos naturales en
                            <strong>madera y bamboo</strong>, creando un ambiente cálido,
                            familiar y visualmente armonioso.
                        </p>

                        <p>
                            Utilizamos <strong>servilletas de tela</strong> para reducir residuos
                            y garantizar una presentación superior en cada servicio.
                        </p>

                        <p class="mb-0">
                            El desayuno se presenta mediante un <strong>menú exclusivo</strong>,
                            cuidadosamente dispuesto en una elegante carta elaborada en madera.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('img/glamping/campamento-01.png') }}"
                        class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover"
                        alt="Vajilla hotelera y presentación en mesa">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="bg-white p-5 rounded-4 shadow-sm">
                        <h3 class="blue text-center mb-4">Servicios & Equipamiento Incluido</h3>

                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Snacks</h6>
                                    <small class="text-muted">Alimentos ligeros incluidos durante la experiencia</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Purificación de Agua</h6>
                                    <small class="text-muted">Sistema seguro para consumo en ruta</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Seguridad para Pasajeros</h6>
                                    <small class="text-muted">Protocolos activos durante toda la travesía</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Guías Calificados</h6>
                                    <small class="text-muted">Personal certificado y con amplia experiencia</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Botiquín en Zonas Remotas</h6>
                                    <small class="text-muted">Equipo de primeros auxilios completo</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Convenio Clínica O2</h6>
                                    <small class="text-muted">PachatusanTrek SAC – atención especializada</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Balón de Oxígeno</h6>
                                    <small class="text-muted">Disponible ante síntomas de altura</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">GPS Satelital</h6>
                                    <small class="text-muted">Geoposicionamiento constante</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Teléfono Satelital</h6>
                                    <small class="text-muted">Comunicación en zonas sin cobertura</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Porteadores</h6>
                                    <small class="text-muted">Especializados en el Camino Inca</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="border rounded-3 p-3 h-100">
                                    <h6 class="mb-1">Equipo de Caminata</h6>
                                    <small class="text-muted">Implementos completos para personal de campo</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
