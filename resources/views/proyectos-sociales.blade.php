@extends('layouts.admines')
@section('contenido')
    <section class="banner-social">
        <div class="banner-content">
            <h1>Proyectos sociales</h1>
            <h5>
                RESPONSABILIDAD SOCIAL CORPORATIVA DE PACHATUSANTREK SAC
            </h5>
            <a href="#empezar" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>

    <section class="bg-light" id="empezar">
        <div class="container pt-5">
            <div class="accordion company-info-accordion pb-2" id="companyAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            PICAFLOR HOUSE
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/thumb/Picaflor-2.jpg') }}" alt="Jessica Llontop"
                                        class="img-fluid rounded mb-2">
                                    <img src="{{ asset('img/thumb/pack-for-a-purspose.jpg') }}" alt="Jessica Llontop"
                                        class="img-fluid rounded mb-2">
                                </div>
                                <div class="col-lg-9 d-flex flex-column justify-content-center text-justify">
                                    <h4>PICAFLOR HOUSE </h4>
                                    <p style="text-align: justify">
                                        Ofrécete como voluntario con niños en Perú para formar parte de un programa
                                        educativo extraescolar inspirador y holístico para 80 niños en un pueblo de montaña
                                        cerca de Cuzco. El proyecto ofrece clases gratuitas y ayuda con los deberes a niños
                                        desfavorecidos. El proyecto también es un lugar seguro para jugar, aprender música y
                                        danzas tradicionales. Los niños reciben fruta gratis, agua potable y un almuerzo
                                        nutritivo todos los días. ¡Únete a nosotros en el Proyecto Comunitario Picaflor
                                        House y marca la diferencia!
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-community-project-page/"
                                        target="_blank" class="btn btn-primary btn-sm">Leer más <i
                                            class="fa fa-external-link fa-sm"></i></a>
                                    <h4 class="mt-3">Lista de deseos de la Casa Picaflor</h4>
                                    <li>Videos educativos en DVD en inglés (Perú se encuentra en la Región 4). También
                                        pueden ser dibujos animados, como Peppa Pig y Dora la Exploradora</li>
                                    <li>Libros infantiles en inglés (sencillos)</li>
                                    <li>Libros infantiles en español</li>
                                    <li>Juguetes duraderos de Fisher Price para el jardín de infantes</li>
                                    <li>Juguetes duraderos para el área de arena</li>
                                    <li>Ropa para niños tallas 3 a 12 (usada o nueva)</li>
                                    <li>Materiales de arte únicos (incluida pintura blanca para carteles, pasteles,
                                        lentejuelas, plumas, limpiapipas)</li>
                                    <li>Juegos de mesa simples o juegos de cartas</li>
                                    <li>Tarjetas de Go Fish que usen números o cualquier otra cosa que requiera inglés</li>
                                    <li>Pinturas para carteles (en botellas)</li>
                                    <li>Papel blanco para impresora</li>
                                    <li>Papel de colores</li>
                                    <li>Papelería (sacapuntas, borradores, lápices, lápices rojos, lápices de colores,
                                        lápices de colores, marcadores, reglas, etc.)</li>
                                    <li>Pegatinas</li>
                                    <li>Rompecabezas</li>
                                    <li>Diccionarios de español</li>
                                    <li>Libretas</li>
                                    <li>Rotuladores</li>
                                    <li>Pizarras individuales</li>
                                    <li>Zapatillas de niños</li>
                                    <li>Balones de voleibol</li>
                                    <li>Balones de fútbol</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            PROYECTO PERRO CUSCO
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/thumb/Dog-shelter-3.jpg') }}" style="display: block;"
                                        class="img-fluid rounded mb-2">
                                    <img src="{{ asset('img/thumb/Dog-shelter-2.jpg') }}" style="display: block;"
                                        class="img-fluid rounded mb-2">

                                </div>
                                <div class="col-lg-9 d-flex flex-column justify-content-center text-justify">
                                    <h4>PROYECTO PERRO CUSCO</h4>
                                    <p style="text-align: justify">Los perros callejeros son algo común en Perú y este
                                        maravilloso
                                        proyecto ofrece una solución humana y
                                        a largo plazo a este problema constante. El objetivo principal del refugio de
                                        rescate de perros de Perú es cuidar a los perros hasta que recuperen su salud
                                        mediante el tratamiento veterinario
                                        de manos de veterinarios asociados, así como el cuidado cariñoso de estudiantes de
                                        veterinaria y voluntarios. Siempre que es posible, los animales del refugio
                                        de perros son reubicados con familias amorosas.</p>
                                    <p style="text-align: justify">
                                        Todos los perros del refugio son vacunados rutinariamente contra la rabia, el
                                        moquillo,
                                        el parvovirus, el coronavirus, la hepatitis y la leptospirosis. También son
                                        desparasitados y despulgados aproximadamente cada 45 días. Además, los perros son
                                        castrados cuando hay fondos disponibles para ayudar a controlar la población de
                                        perros no deseados.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-dog-rescue/"
                                        target="_blank" class="btn btn-primary btn-sm">Leer más more <i
                                            class="fa fa-external-link fa-sm"></i></a>
                                    <h4 class="mt-2">Lista de deseos de refugios para perros</h4>
                                    <li>Golosinas para perros</li>
                                    <li>Comida para perros</li>
                                    <li>Champú para mascotas</li>
                                    <li>Cuencos de metal para perros</li>
                                    <li>Mantas</li>
                                    <li>Ropa de cama duradera para perros</li>
                                    <li>Cortaúñas para perros</li>
                                    <li>Esponjas/cepillos para fregar</li>
                                    <li>Juguetes resistentes para perros, p. ej., Kong</li>
                                    <li>Cepillos para el cuidado de perros</li>
                                    <li>Guantes resistentes</li>
                                    <li>Mascarillas antipolvo</li>
                                    <li>Collares y correas</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parallax-banner">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="dancing-center">Empaca con un propósito</h2>
            <p class="mt-4">Estamos orgullosos de ser miembros de Pack for a Purpose, una iniciativa que permite a
                viajeros como tú tener un impacto duradero en la comunidad de tu destino de viaje. Si ahorras unos pocos
                kilos de espacio en tu maleta y llevas suministros para los proyectos que apoyamos que lo necesitan, tendrás
                un impacto inestimable en las vidas de nuestros niños y familias locales. Haz clic aquí para ver qué
                suministros se necesitan para nuestro/s proyecto/s.</p>
        </div>
    </section>
    <section class="bg-light">
        <div class="container pt-5">
            <div class="accordion company-info-accordion pb-2" id="companyAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            SANTUARIO DE VIDA SILVESTRE DE LA SELVA TROPICAL DEL PERÚ
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/thumb/Peru-WIldlife-2.jpg') }}" style="display: block;"
                                        class="img-fluid rounded mb-2">

                                </div>
                                <div class="col-lg-9 d-flex flex-column justify-content-center text-justify">
                                    <h4>SANTUARIO DE VIDA SILVESTRE DE LA SELVA TROPICAL DEL PERÚ</h4>
                                    <p style="text-align: justify">
                                        Este proyecto único en su tipo es un salvavidas para los animales maltratados y en
                                        peligro de extinción en la selva amazónica del sur de Perú. Muchos de los animales
                                        del centro son rescatados del tráfico ilegal y el comercio de mascotas o de hogares
                                        abusivos; los animales a menudo llegan heridos o estresados. Los animales también
                                        son traídos enfermos o moribundos por la gente local debido a accidentes de caza.
                                        Los animales rescatados por el santuario incluyen perezosos, monos aulladores,
                                        pájaros y más.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-rainforest-wildlife-sanctuary/form-peru-rainforest-wildlife-sanctuary-application/"
                                        class="text-primary" target="_blank" style="text-decoration: none">Perú
                                        Santuario de vida silvestre de la selva tropical del Perú <i
                                            class="fa fa-external-link fa-sm"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            REFUGIO DE CABALLOS DEL PERÚ
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/thumb/Peru-Horse-Shelter-3.jpg') }}" style="display: block;"
                                        class="img-fluid rounded mb-2">

                                </div>
                                <div class="col-lg-9 d-flex flex-column justify-content-center text-justify">
                                    <h4>REFUGIO DE CABALLOS DEL PERÚ</h4>
                                    <p style="text-align: justify">
                                        El santuario de caballos está diseñado para ser un refugio ecuestre para caballos
                                        rescatados de malas condiciones de trabajo o del destino de ser sacrificados para
                                        obtener carne. El caballo peruano de los Andes es más pequeño y no se lo considera
                                        tan "atractivo" como el caballo nacional del Perú (el caballo peruano de paso).
                                        Debido a esto, no son populares entre los propietarios y jinetes de caballos y un
                                        gran número de ellos son sacrificados para obtener carne.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-horse-sanctuary/"
                                        class="text-primary" target="_blank" style="text-decoration: none">
                                        Regugio de caballos del Perú<i class="fa fa-external-link fa-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            CONSERVACIÓN DE LA SELVA AMAZÓNICA PERUANA
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/thumb/Amazon-Conservation-1.jpg') }}" style="display: block;"
                                        class="img-fluid rounded mb-2">
                                </div>
                                <div class="col-lg-9 d-flex flex-column justify-content-center text-justify">
                                    <h4>CONSERVACIÓN DE LA SELVA AMAZÓNICA PERUANA</h4>
                                    <p style="text-align: justify">
                                        El proyecto se centra en promover y contribuir a la conservación de los ecosistemas
                                        marinos de la costa norte del Perú. Este programa adopta un enfoque holístico de la
                                        conservación; a través de la investigación científica, la gestión de la
                                        sostenibilidad, la educación ambiental y la colaboración entre agencias.<br>
                                        Los proyectos de investigación incluyen estudios sobre tortugas marinas, tiburones
                                        ballena, tiburones, rayas, leones marinos, aves marinas y otras formas de vida
                                        marina.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-amazon-conservation-project/"
                                        class="text-primary" target="_blank" style="text-decoration: none">
                                        Leer más <i class="fa fa-external-link fa-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            CONSERVACIÓN MARINA DEL PERÚ
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/thumb/Peru-Marine-2.jpg') }}" style="display: block;"
                                        class="img-fluid rounded mb-2">
                                </div>
                                <div class="col-lg-9 d-flex flex-column justify-content-center text-justify">
                                    <h4>CONSERVACIÓN MARINA DEL PERÚ</h4>
                                    <p style="text-align: justify">
                                        El proyecto se centra en promover y contribuir a la conservación de los ecosistemas
                                        marinos de la costa norte del Perú. Este programa adopta un enfoque holístico de la
                                        conservación; a través de la investigación científica, la gestión de la
                                        sostenibilidad, la educación ambiental y la colaboración entre agencias.<br>
                                        Los proyectos de investigación incluyen estudios sobre tortugas marinas, tiburones
                                        ballena, tiburones, rayas, leones marinos, aves marinas y otras formas de vida
                                        marina.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-marine-conservation-project/"
                                        class="text-primary" target="_blank" style="text-decoration: none">
                                        Leer más <i class="fa fa-external-link fa-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            PACCHANTA – AUSANGATE
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/thumb/Pacchanta1.jpg') }}" style="display: block;"
                                        class="img-fluid rounded mb-2">
                                </div>
                                <div class="col-lg-9 d-flex flex-column justify-content-center text-justify">
                                    <h4>PACCHANTA – AUSANGATE</h4>
                                    <p style="text-align: justify">
                                        Para nosotros, el trabajo que desarrollamos con nuestros colaboradores de campo en
                                        la comunidad de Pacchanta va más allá de la contratación de servicios turísticos
                                        para arrieros y arrieros de carga. En nuestra búsqueda por preservar nuestras
                                        costumbres ancestrales, también involucramos a los comuneros en la actividad
                                        turística mediante la compra de textiles hechos a mano. En este proceso, los
                                        artesanos utilizan las técnicas y herramientas transmitidas por sus antepasados ​​de
                                        generación en generación. De esta manera tenemos la gran oportunidad de tener la
                                        correcta interpretación de la iconografía representada en los textiles, ya que los
                                        textiles son elaborados con una visión muy personal del artesano. Esta
                                        representación artística en los textiles habla de la cosmovisión del hombre andino,
                                        habla del conocimiento y entendimiento del entorno social y ambiental de la
                                        comunidad. Para Pachatusantrek es de vital importancia preservar las costumbres y
                                        tradiciones del mundo andino, ya que la formación y desarrollo de esta importante
                                        civilización se basa en su estrecha relación con su entorno, donde el paisaje y los
                                        recursos naturales sirven como punto de equilibrio para su cosmovisión.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            HUARAN – VALLE SAGRADO DE LOS INCAS
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#companyAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/thumb/Huaran-4.jpg') }}" style="display: block;"
                                        class="img-fluid rounded mb-2">
                                </div>
                                <div class="col-lg-9 d-flex flex-column justify-content-center text-justify">
                                    <h4>HUARAN – VALLE SAGRADO DE LOS INCAS</h4>
                                    <p style="text-align: justify">
                                        Uno de los objetivos de Pachatusantrek es preservar las costumbres y conocimientos
                                        ancestrales adquiridos por los comuneros en las comunidades donde brindamos nuestros
                                        servicios de turismo de aventura. En este caso, trabajamos con pobladores de la
                                        comunidad de Huaran – Valle Sagrado de los Incas. Además de trabajar con nosotros
                                        como personal de cocina, adquirimos artesanías textiles de sus familias para
                                        obsequiarlas a nuestros clientes como obsequio. Los artesanos de esta comunidad
                                        utilizan con maestría las técnicas y herramientas heredadas de sus antepasados ​​a
                                        lo largo de las generaciones, manteniendo así la cosmogonía y cosmovisión de la
                                        comunidad, a través de la visión personalizada del artesano.<br>
                                        Para Pachatusantrek es de vital importancia preservar las costumbres y tradiciones
                                        del mundo andino, ya que la formación y desarrollo de esta importante civilización
                                        se basa en su estrecha relación con su entorno, donde el paisaje y los recursos
                                        naturales sirven de equilibrio para su cosmovisión.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
