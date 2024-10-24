@extends('layouts.admin')
@section('contenido')
    <section class="banner-certificate">
        <div class="banner-content">
            <h1>Certificates & Recognitions</h1>
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
                                    Pachatusantrek SAC has always respected and followed the sustainable development
                                    guidelines, and we had to certify it. To achieve this goal, we counted on the counseling
                                    from the German certification company TourCert, with whom we reached a high level of
                                    understanding, achieving to qualify our administrative and operational processes within
                                    their standards. Sustainable tourism development is in the DNA of our company.
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
                                    For Pachatusantrek SAC, the quality of service to our travelers, is one of the most
                                    important aspects of our working organization philosophy. We were chosen by the
                                    authorities of the
                                    tourism sector in our country, meaning our customer service processes were evaluated and
                                    qualified.
                                    After this evaluation process we obtained a very high score, which allowed us to obtain
                                    the
                                    Quality Tourism recognition by the Ministry of Tourism.
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
                                    Pachatusantrek SAC is proud to be an authorized operator for the Peruvian tate, of the
                                    Inca road network, with our approved project “Sustainable Tourism Management in the
                                    development of hikes in the Inca Road Network of Machu Picchu”. Also, we have also been
                                    recognized by SERNANP for our good environmental practices in the Inca Trail Network of
                                    the Historic Sanctuary of Machu Picchu.
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
                                    SERNANP has recognized us for our good operational practices within the Inca Road
                                    Network of the Historic Sanctuary of Machu Picchu. This recognition motivates us to
                                    improve our good practices for the benefit of our environment.
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
                                    Protecting the population, especially children and adolescents, from the negative
                                    effects of tourism activity is one of Pachatusantrek’s main concerns. Our company has
                                    signed the Code of Conduct for the Prevention of Sexual Exploitation of Children and
                                    Adolescents – ESNNA. This voluntary adhesion commits us to have an action in favor of
                                    the protection of our childhood and adolescence.
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
                                    Institutions such as the Destination Management Organization (OGD) and the Association
                                    of Tourism Agencies Cusco (AATC), have jointly recognized our efforts to develop and
                                    promote the sustainability and corporate social responsibility of the tourism sector in
                                    Cusco. This recognition motivates us and commits to deepen our conviction about
                                    sustainability in our sector and reaffirms our social commitment in the places where we
                                    develop our tourist operations.
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
                                    INDECOPI protects consumer rights in our country, and made a call for companies from all
                                    areas nationwide to compete in the event know as, “First Customers.” Pachatusantrek
                                    submitted to this contest with the project called “Walking ecologically”, and we
                                    obtained an honorable second place, reaffirming ourselves as one of the leading
                                    companies in the development of sustainable tourism.
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
