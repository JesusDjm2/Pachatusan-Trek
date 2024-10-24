@extends('layouts.admines')
@section('contenido')
    <section class="banner-certificate">
        <div class="banner-content">
            <h1>Certificados y reconocimientos</h1>
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
                <div class="col-lg-6 mb-3">
                    <div class="card p-4 m-3">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/certificados/tourcert.png') }}" class="certificate-image">
                            </div>
                            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                                <h4>Tourcert</h4>
                                <p class="text-center">
                                    Pachatusantrek SAC siempre ha respetado y seguido los lineamientos del desarrollo
                                    sostenible, y nos tocó certificarlo. Para lograrlo, contamos con la asesoría de la
                                    empresa certificadora alemana TourCert, con quienes alcanzamos un alto nivel de
                                    entendimiento, logrando calificar nuestros procesos administrativos y operativos dentro
                                    de sus estándares. El desarrollo turístico sostenible está en el ADN de nuestra empresa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card m-3 p-4">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/certificados/caltur.jpg') }}" class="certificate-image">
                            </div>
                            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                                <h4>Caltour</h4>
                                <p class="text-center">
                                    Para Pachatusantrek SAC, la calidad del servicio a nuestros viajeros, es uno de los
                                    aspectos más importantes de nuestra filosofía de organización laboral. Fuimos elegidos
                                    por las autoridades del sector turístico de nuestro país, es decir, nuestros procesos de
                                    atención al cliente fueron evaluados y calificados. Luego de este proceso de evaluación
                                    obtuvimos un puntaje muy alto, lo que nos permitió obtener el reconocimiento de Calidad
                                    Turística por parte del Ministerio de Turismo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card m-3 p-4">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/certificados/sernanp.jpg') }}" class="certificate-image">
                            </div>
                            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                                <h4>Senarp – Inca Trail</h4>
                                <p class="text-center">
                                    Pachatusantrek SAC se enorgullece de ser operador autorizado por el Estado peruano de la
                                    Red de Caminos Inca, con nuestro proyecto aprobado “Gestión Turística Sostenible en el
                                    desarrollo de caminatas en la Red de Caminos Inca de Machu Picchu”. Asimismo, también
                                    hemos sido reconocidos por SERNANP por nuestras buenas prácticas ambientales en la Red
                                    de Caminos Inca del Santuario Histórico de Machu Picchu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card m-3 p-4">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/certificados/sernanp2.jpg') }}" class="certificate-image">
                            </div>
                            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                                <h4>Senarp</h4>
                                <p class="text-center">
                                    SERNANP nos ha reconocido por nuestras buenas prácticas operacionales dentro de la Red
                                    de Caminos Inca del Santuario Histórico de Machu Picchu. Este reconocimiento nos motiva
                                    a mejorar nuestras buenas prácticas en beneficio de nuestro medio ambiente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card m-3 p-4">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/certificados/codigo-essna.jpg') }}" class="certificate-image">
                            </div>
                            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                                <h4>ESSNA Code</h4>
                                <p class="text-center">
                                    Proteger a la población, especialmente a los niños, niñas y adolescentes, de los efectos
                                    negativos de la actividad turística es una de las principales preocupaciones de
                                    Pachatusantrek. Nuestra empresa ha firmado el Código de Conducta para la Prevención de
                                    la Explotación Sexual de Niños, Niñas y Adolescentes – ESNNA. Esta adhesión voluntaria
                                    nos compromete a tener una acción a favor de la protección de nuestra niñez y
                                    adolescencia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card m-3 p-4">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/certificados/ogd-reconocimiento.jpg') }}" class="certificate-image">
                            </div>
                            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                                <h4>OGD – Recognition</h4>
                                <p class="text-center">
                                    Instituciones como la Destination Management Organization (OGD) y la Asociación de
                                    Agencias de Turismo del Cusco (AATC), han reconocido de manera conjunta nuestros
                                    esfuerzos por desarrollar y promover la sostenibilidad y la responsabilidad social
                                    empresarial del sector turístico del Cusco. Este reconocimiento nos motiva y compromete
                                    a profundizar nuestra convicción sobre la sostenibilidad en nuestro sector y reafirma
                                    nuestro compromiso social en los lugares donde desarrollamos nuestras operaciones
                                    turísticas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="card m-3 p-4">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/certificados/indecopi.jpg') }}" class="certificate-image">
                            </div>
                            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                                <h4>INDECOPI</h4>
                                <p class="text-center">
                                    El INDECOPI, organismo que vela por los derechos de los consumidores en nuestro país,
                                    convocó a empresas de todos los rubros a nivel nacional para que concursaran en el
                                    evento denominado “Primeros Clientes”. Pachatusantrek se presentó a este concurso con el
                                    proyecto denominado “Caminando ecológicamente”, y obtuvo un honroso segundo lugar,
                                    reafirmándose como una de las empresas líderes en el desarrollo del turismo sostenible.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="parallax-about">
        <div class="overlay"></div>
        <div class="content mt-5 mb-5">
            <div class="row">
                <div class="col-lg-4">
                    <h3>MOTIVATION</h3>
                    <p>
                        Our passion and vocation to service has led us to develop our professional activities in different
                        natural places in our country. These feelings and abilities have been the principal motivation to
                        start Pachatusantrek.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>VISION</h3>
                    <p>
                        Throughout this period our company will seek to lead in the adventure tourism market in mountain
                        trekking and traditional tourism in the Cusco region. Our emphasis is in the social, economic, and
                        environmental aspects combined with the development of sustainable tourism.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>MISION</h3>
                    <p>
                        The mission of our organization is to lead in the development of sustainable tourism in the Cusco
                        region, as well as nationally, always seeking to fulfill our clients and collaborators expectations
                        by complying with quality and sustainability standards.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
