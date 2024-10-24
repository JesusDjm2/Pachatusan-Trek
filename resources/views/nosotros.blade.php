@extends('layouts.admines')
@section('contenido')
    <section class="banner-about">
        <div class="banner-content">
            <h1>¿Qué es la Pachatusan?</h1>
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
                    <h3 style="font-family: 'Dancing Script', cursive;">Con el permiso de los Apus</h3>
                    <p>
                        En la cosmovisión andina, el concepto de Pacha no se refiere únicamente a la Madre Tierra. El otro
                        significado está ligado al concepto de tiempo y espacio representado por la serpiente llamada
                        Chocora. El término original Tusay significa apuntalar o apoyar. Pachatusan, por lo tanto, puede
                        interpretarse como el concepto de la permanencia del tiempo y el espacio en el infinito. El Apu
                        Pachatusan es una de las montañas sagradas o guardianas de la ciudad del Cusco, ubicada al oriente
                        (en la zona del Antisuyo).

                        Según los cronistas de la invasión española, este monte era venerado con muchas ofrendas, lo que
                        indica que el lugar era de gran importancia. En la base del Pachatusan se encuentra el complejo
                        arqueológico de Tipón, que se cree fue principalmente un lugar de culto al agua y la fertilidad.
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
                    <h3>MOTIVACIÓN</h3>
                    <p>
                        Nuestra pasión y vocación de servicio nos ha llevado a desarrollar nuestras actividades
                        profesionales en diferentes parajes naturales de nuestro país. Estos sentimientos y habilidades han
                        sido la principal motivación para iniciar Pachatusantrek.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>VISIÓN</h3>
                    <p>
                        A lo largo de este período nuestra empresa buscará liderar en el mercado de turismo de aventura en
                        trekking de montaña y turismo tradicional en la región Cusco. Nuestro énfasis está en los aspectos
                        sociales, económicos y ambientales combinados con el desarrollo del turismo sostenible.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>MISIÓN</h3>
                    <p>
                        La misión de nuestra organización es liderar en el desarrollo del turismo sostenible en la región
                        Cusco, así como a nivel nacional, buscando siempre cumplir con las expectativas de nuestros clientes
                        y colaboradores cumpliendo con estándares de calidad y sostenibilidad.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="our-values">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <h3 class="text-secondary">Servicios</h3>
                    <h2>Te ofrecemos:</h2>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Consultores de viajes</h4>
                    <p>Te acercamos las mejores opciones de servicios turísticos para que tu viaje supere tus expectativas.
                    </p>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Operaciones de oficina y de campo</h4>
                    <p>Ofrecemos la opción de viajes tradicionales y de aventura, todos con transporte, guía, personal de
                        oficina y de campo.</p>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Guías tradicionales y de trekking</h4>
                    <p>
                        Te traemos guías calificados, con amplios conocimientos, que te llevarán a un fantástico viaje por
                        la historia y geografía de los Andes.
                    </p>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Viajes a medida</h4>
                    <p>Adaptamos nuestros servicios a su horario, presupuesto, destino y planificación del viaje.</p>
                </div>
                <div class="col-lg-2 card p-3">
                    <h4>Reservas</h4>
                    <p>Puede reservar vuelos, hoteles, traslados, restaurantes y excursiones con la seguridad de que
                        obtendrá el servicio acordado.</p>
                </div>
                <div class="col-lg-12 mt-5">
                    <h2 class="">Nuestros Valores:</h2>
                    <div class="values-list">
                        <div class="value-item">Respeto</div>
                        <div class="value-item">Honestidad</div>
                        <div class="value-item">Compromiso</div>
                        <div class="value-item">Responsibilidad</div>
                        <div class="value-item">Calidad de servicio</div>
                        <div class="value-item">Empatía</div>
                        <div class="value-item">Trabajoen equuipo</div>
                        <div class="value-item">Confianza</div>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <h3 class="text-secondary">¡Por qué elegirnos?</h3>
                    <h2>Grandes Razones</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container">
            <div class="accordion company-info-accordion pb-2" id="companyAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            SOMOS UNA EMPRESA REGISTRADA
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Somos una empresa legal y formalmente constituida, registrada en todas las instancias requeridas
                            por las leyes peruanas en la materia. Pachatusantrek desarrolla sus caminatas de acuerdo a la
                            Ley de Turismo Aventura promulgada por el Gobierno Peruano.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            SOMOS UNA OPERADORA CON LICENCIA EN LAS RUTAS INCAS
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Somos operadores autorizados por el Gobierno Peruano para desarrollar nuestro Proyecto
                            Turístico: “Gestión Turística Sostenible en la Operación de Caminatas en la Red de Caminos Inca
                            del Santuario Histórico de Machu Picchu”. Al desarrollar nosotros mismos nuestra operación
                            turística sustentable en la Red de Caminos Incas del Santuario Histórico de Machu Picchu,
                            podemos garantizar la calidad del servicio que ofrecemos ya que nuestras caminatas son
                            supervisadas en el campo, durante las caminatas.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            PRACTICAMOS EL TURISMO SOSTENIBLE
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Somos operadores autorizados por el Gobierno Peruano para desarrollar nuestro Proyecto
                            Turístico: “Gestión Turística Sostenible en la Operación de Caminatas en la Red de Caminos Inca
                            del Santuario Histórico de Machu Picchu”. Al desarrollar nosotros mismos nuestra operación
                            turística sustentable en la Red de Caminos Incas del Santuario Histórico de Machu Picchu,
                            podemos garantizar la calidad del servicio que ofrecemos ya que nuestras caminatas son
                            supervisadas en el campo, durante las caminatas.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            PERSONAL CAPACITADO PROFESIONALMENTE
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Nuestro personal de campo cuenta con varios años de experiencia desarrollando caminatas de
                            montaña, y en Pachatusantrek capacitamos periódicamente a nuestro personal de campo y oficina
                            para el óptimo desarrollo de nuestras actividades.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            EQUIPO DE CAMPING DE PRIMERA CALIDAD
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            El equipo de campamento que utilizamos es de la más alta calidad, ofreciendo a nuestros
                            caminantes la comodidad necesaria para enfrentar el desafío físico de nuestra actividad. carpas
                            de 4 estaciones; sacos de dormir diseñados para soportar temperaturas de -10 °C/14 °F; sábanas
                            polares para una mayor retención térmica o sábanas de algodón para climas más cálidos;
                            Colchonetas inflables que brindan un mejor descanso. Todos estos productos son de las marcas más
                            conocidas en actividades al aire libre.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            MENÚ FRESCO BIEN EQUILIBRADO
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            La comida que proporcionamos es de primera calidad utilizando suministros frescos y orgánicos.
                            Asimismo, los menús que ofrecemos han sido diseñados por un nutricionista, equilibrando la dieta
                            con el esfuerzo físico a realizar. Ofrecemos opciones vegetarianas a requerimiento de nuestros
                            clientes, sin costo adicional. Ven y disfruta de nuestros paseos con el más delicioso y
                            nutritivo servicio de comida con vista a maravillosos paisajes.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            GUÍAS DE SENDERISMO EXPERIMENTADOS
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Nuestro equipo de guías de trekking cuenta con una amplia experiencia y están altamente
                            capacitados en diferentes aspectos, como cultura, historia, geografía, primeros auxilios y otras
                            materias. Queremos asegurar un excelente tiempo de aprendizaje y recreación.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            SALUD Y SEGURIDAD
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Nuestro botiquín de primeros auxilios está supervisado por un especialista en mal de altura y
                            marcha. Contamos con tanque de oxígeno, botiquín de primeros auxilios, inmovilizadores de
                            fracturas, tensiómetro, estetoscopio; siguiendo los estándares establecidos por las autoridades
                            competentes. De acuerdo a las necesidades de los clientes, tenemos convenios con las mejores
                            clínicas especializadas en mal de altura y medicina general.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            INFORMACIÓN PRECISA Y ACTUALIZADA SOBRE NUESTRAS CAMINATAS
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Todas las rutas que ofrecemos han sido georreferenciadas y reconocidas por Pachatusantrek SAC.
                            Por lo tanto, podemos responder a cualquier pregunta que tenga sobre ellos, y podemos ampliar la
                            información proporcionada para cualquier ruta solicitada. Al conocer todas las rutas podemos
                            asesorar a nuestros compañeros de aventura de la mejor manera.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            TAMAÑOS DE GRUPOS LIMITADOS
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            El tamaño de nuestros grupos en servicios compartidos es de 4 a 10 personas, garantizando un
                            servicio personalizado, con guía asistente para 8 pasajeros o más.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            AMENIDADES CINCO ESTRELLAS
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            En caminatas privadas ofrecemos servicios como ducha solar, bolsas de agua caliente, almohadas y
                            kit de aseo personal biodegradable elaborado con hierbas andinas.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            TRANSPORTE SEGURO Y CONFIABLE
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Utilizamos transporte turístico amplio y cómodo, con conductores profesionales experimentados.
                            Todos los vehículos cuentan con tanque de oxígeno y botiquín de primeros auxilios. También
                            tienen la documentación necesaria para las autoridades locales.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThirteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                            SERVICIOS DE NIVEL PREMIER
                        </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Nuestros servicios están al nivel de los mejores tour operadores de aventura en el Perú. Le
                            aseguramos que al elegir nuestros servicios, sus expectativas y las de sus clientes serán
                            superadas.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFourteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                            CONCIENCIA AMBIENTAL
                        </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            Porque tenemos como filosofía de trabajo el respeto y amor por la naturaleza, contando siempre
                            con… “La protección de la Pachamama (Madre Tierra) y el permiso de los Apus (Montañas Sagradas)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section bg-light">
        <div class="container">
            <h2 class="section-title">Conóce nuestro equipo</h2>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Jessica.jpg') }}" alt="Jessica Llontop">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Jessica Llontop</h3>
                    <p class="team-position"> CONSULTORA DE VIAJES</p>
                    <p class="team-description">
                        Desde muy joven siempre le interesó viajar, y sintiendo que era su vocación, decidió estudiar y
                        trabajar en turismo. Esta actividad la llevó a conocer muchos lugares del Perú, y algunos del
                        exterior, ya formarse una adecuada percepción de los servicios turísticos que se ofrecen a nuestros
                        visitantes.<br>

                        Ha trabajado en el aeropuerto de Lima, agencias de viajes y operadores turísticos líderes en Lima,
                        Cusco y Puerto Maldonado.<br>

                        Jessica se especializa en asesoramiento y organización de viajes, y siempre trata de brindar a
                        nuestros clientes el alto nivel de servicio que ella misma esperaría recibir.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Sergio.jpg') }}" alt="Sergio Cuba">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Sergio Cuba</h3>
                    <p class="team-position">GUÍA Y CONSULTOR DE TREKKING</p>
                    <p class="team-description">
                        Nació en la ciudad de Lima, en el hermoso distrito de Miraflores, que fuera el Curacazgo de Sulco,
                        perteneciente al Señor de Ichsma (Pachacamaq).<br>

                        Siempre ha sentido una abrumadora atracción por la naturaleza, la cual ha desarrollado en el mar, la
                        costa, la montaña y la selva.<br>

                        Sergio ha tenido la suerte de haber trabajado en varios lugares como Lima, Arequipa, Cañón del
                        Colca, Puerto Maldonado, Lago Sandoval – Tambopata, Cuzco y sus magníficos alrededores.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Monica.jpg') }}" alt="Monica Jurado Gil">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Monica Jurado Gil</h3>
                    <p class="team-position"> ÁREA DE RESERVAS</p>
                    <p class="team-description">
                        Nació en Lima y es nuestra oficial de reservas de servicios, donde ha desarrollado sus funciones con
                        eficiencia. Amante de la naturaleza, le gusta correr por el campo y pasar tiempo con su familia y
                        amigos. Habiéndose enamorado de la ciudad del Cusco, la ha adoptado como su residencia permanente.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Mayling.jpg') }}" alt="Maylin La Rosa Espinoza">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Maylin La Rosa Espinoza</h3>
                    <p class="team-position">DEPARTAMENTO DE VENTAS</p>
                    <p class="team-description">
                        Amante de los viajes, nació en la ciudad de Lima, desde el 2014 forma parte del equipo de
                        Pachatusantrek, desarrollándose como ejecutiva de ventas en mostrador y su pasión es viajar y
                        descubrir nuevas costumbres. Ama al Perú y quiere mostrárselo al mundo.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Gloria.jpg') }}" alt="Gloria Muñoz">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Gloria Muñoz</h3>
                    <p class="team-position">CONTADORA</p>
                    <p class="team-description">
                        Nuestra contadora Gloria nació en la cálida ciudad de Santa Ana – Quillabamba – Cusco, donde
                        disfrutó de su infancia rodeada de la maravillosa naturaleza. Vive en la ciudad del Cusco con su
                        familia, dedica su tiempo tanto a sus compromisos familiares como a estudiar la carrera de
                        Contabilidad en la Universidad San Antonio Abad del Cusco. Parte de su satisfacción laboral es poder
                        desarrollarse como profesional en el sector turístico. Ella entiende la historia y la naturaleza de
                        nuestro país y ama y disfruta todo lo que tiene para ofrecer.<br>

                        Como madre y esposa comparte con su familia el sueño de poder conocer más de la naturaleza de
                        nuestro país, como el Parque Nacional del Manu; así como otras áreas naturales protegidas alrededor
                        del mundo.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Martha.jpg') }}" alt="Martha Orozco Castro">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Martha Orozco Castro</h3>
                    <p class="team-position">MANTENIMIENTO</p>
                    <p class="team-description">
                        Nacida en Cusco en el tradicional barrio de San Blas, Martha hace nuestra limpieza en la oficina.
                        Debido a su comportamiento agradable, así como a su eficiencia, se ha ganado nuestro respeto y
                        cuidado. Martha ha dedicado su esfuerzo a criar a su hija, quien tiene estudios para ser bióloga. Su
                        pasatiempo es disfrutar de la música y pasar tiempo con su familia.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Gerardo.jpg') }}" alt="Gerardo Condori Mamani">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Gerardo Condori Mamani</h3>
                    <p class="team-position">CHEF DE CAMPO</p>
                    <p class="team-description">
                        Lucio nació en la comunidad de Qeswarani y se dedica a complacer a los pasajeros con su cocina.
                        Hombre de familia con tres hijos vive en el Valle Sagrado de los Inkas, en Huarán donde cría
                        pequeños animales como gallinas y cuyes. En su tiempo libre lo pasa con su familia y juega al fútbol
                        con pasión. Conseguir una sonrisa en los pasajeros es su mayor recompensa.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Wilfred.jpg') }}" alt="Wilfredo Condori Sicus">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Wilfredo Condori Sicus</h3>
                    <p class="team-position">JEFE DE PORTEROS</p>
                    <p class="team-description">
                        Nacido en la comunidad de Cuncani, es jefe de porteadores desde hace mucho tiempo. Ha integrado a
                        personas de su comunidad a su equipo. Casado y padre de una niña, sigue viviendo en Cuncani, cría
                        llamas, caballos y pequeños animales. Le gusta aprender inglés y jugar al fútbol. Es un trabajador
                        comprometido que quiere que el pasajero se sienta cómodo.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Roberto.jpg') }}" alt="Robert Condori">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Robert Condori</h3>
                    <p class="team-position">CHEF DE CAMPO</p>
                    <p class="team-description">
                        Nacido en la comunidad de Cuncani – Lares, es el tercero de 5 hermanos. Durante su infancia colabora
                        con la familia en actividades agrícolas y de pastoreo de animales. En su adolescencia se trasladó a
                        la ciudad de Urubamba para continuar con sus estudios secundarios. Ya en la ciudad del Cusco es que
                        inicia sus estudios profesionales de turismo, buscando la especialización como guía. Actualmente,
                        Robert se desempeña como ayudante de cocina, a la espera de completar sus estudios y participar en
                        actividades guiadas.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Alex.jpg') }}" alt="Alex Jimenez Llanos">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Alex Jimenez Llanos</h3>
                    <p class="team-position">CAMARERO</p>
                    <p class="team-description">
                        Nació en la ciudad de Lima. De niño su familia se mudó al famoso Valle Sagrado de los Incas. El
                        pueblo de Urubamba lo adoptó de inmediato como un hijo nacido en este sagrado territorio. De joven
                        se dedicó a la agricultura y la construcción civil, descubriendo años después su pasión por el
                        turismo. Hombre de familia y apasionado del fútbol, ​​ha desempeñado diferentes roles en el Camino
                        Inca, donde últimamente se destaca por su habilidad en el área de la cocina.
                    </p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo m-auto">
                    <img src="{{ asset('img/staff/Jeremias.jpg') }}" alt="Jeremias Sicus">
                </div>
                <div class="team-info p-3">
                    <h3 class="team-name">Jeremias Sicus</h3>
                    <p class="team-position">CAMARERO</p>
                    <p class="team-description">
                        Nació en el distrito de Lares, provincia de Calca. A Jeremias le encanta estar en contacto con la
                        naturaleza y dar largas caminatas, principalmente Choquequirao. En su tiempo libre le gusta salir a
                        jugar fútbol con sus amigos. Su vocación de servicio lo ha llevado a estudiar la carrera de guía
                        oficial de turismo, pues quiere llevar turistas a la montaña y enseñar todo lo aprendido. Estamos
                        seguros de que será una gran guía.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
