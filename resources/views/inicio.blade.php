@extends('layouts.admines')
@section('contenido')
    <section class="banner-section">
        <div class="banner-content">
            <h1>Con la protección de la Madre Tierra</h1>
            <h5>Vive experiencias inolvidables, vive aventuras sorprendentes y conoce lugares llenos de magia y misticismo.
            </h5>
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
                    <h3 style="font-family: 'Dancing Script', cursive;">Con permiso de los Apus</h3>
                    <p>
                        Nuestra pasión y vocación de servicio nos han llevado a desarrollar nuestras actividades
                        profesionales en diferentes escenarios naturales de nuestro país. Estos sentimientos y habilidades
                        han sido la principal motivación para iniciar Pachatusantrek.
                    </p>
                    <a href="{{ route('about') }}" class="btn btn-sm btn-success">Leer más</a>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('img/staff/about-us-pachatusan.jpg') }}" alt="Staff Pachatusan Trek"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-image d-flex flex-column justify-content-center align-items-center text-center text-white">
        <div class="container">
            <div class="row">
                <h5 class="pb-2">EXPERIENCIA</h5>
                <h3 class="pb-5">Diferentes tipos de experiencias, ¿cuál quieres vivir?</h3>
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">TREKKING</h5>
                            <p class="card-text text-dark">Recorreremos los senderos ancestrales de la cordillera de los
                                Andes, donde la historia, la flora, la fauna y la geografía llenarán nuestros sentidos.
                                Caminaremos entre las divinidades andinas que serán testigos silenciosos de nuestras propias
                                historias en las montañas..</p>
                            <a href="{{ route('treks') }}" class="btn btn-primary btn-sm">Ver Tours</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">EXPEDICIONES</h5>
                            <p class="card-text text-dark">
                                Te llevaremos a destinos remotos donde podremos ver y sentir la fuerza de las montañas
                                andinas. Esta experiencia nos llevará desde las tierras altas hasta los bosques montañosos
                                cercanos a la llanura amazónica, zonas llenas de mitos, historia, flora, fauna y una cultura
                                sorprendente.
                            </p>
                            <a href="{{ route('expeditions') }}" class="btn btn-primary btn-sm">Ver Tours</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">TOURS</h5>
                            <p class="card-text text-dark">
                                Disfruta y conoce los principales destinos turísticos de las regiones más importantes del
                                Perú. Nuestro servicio te garantiza una experiencia inolvidable en la costa, sierra y selva.
                                Contamos con las mejores opciones de viaje para que conozcas el Perú al máximo.
                            </p>
                            <a href="{{ route('entours') }}" class="btn btn-primary btn-sm">View tours</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mainTours bg-light">
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-lg-12 mb-5"> 
                    <h2 class="dancing">Tours más populares:</h2>
                </div>
                @foreach ($tours as $tour)
                    <div class="col-lg-4 tours mb-3">
                        <div class="contImg">
                            <a href='{{ route('estour.show', $tour->slug) }}' class='entry-link'>
                                <img src="{{ asset($tour->imgThumb) }}" class="attachment-post-grid-s size-post-grid-s"
                                    alt="{{ $tour->nombre }}" loading="lazy" style="height: 245px!important" />
                            </a>
                        </div>
                        <div class='info'>
                            <h3>{{ $tour->nombre }}</h3>
                            <p> {{ $tour->descripcionCorta }} </p>
                            <div style="width: 100%;  padding-bottom:50px">
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} days</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</span>
                            </div>
                            <a href="{{ route('estour.show', $tour->slug) }}" class='button'>More info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="parallax-banner">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="dancing-center">Salkantay – Machu Picchu – 5 Días </h2>
            <p class="mt-4">
                Ubicado en la cordillera andina de Vilcabamba se encuentra la Nevada de Salkantay, pasando por
                impresionantes paisajes desde el bosque nuboso hasta altas montañas.
            </p>
            <a href="#explore" class="btn">Explorar ahora</a>
        </div>
    </section>
    <section class="mainTours bg-light">
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2 class="dancing">Tours más populares:</h2>
                </div>
                {{-- @foreach ($nextTours as $tour)
                    <div class="col-lg-3 tours mb-3">
                        <div class="contImg">
                            <a href='{{ route('tour.show', $tour->slug) }}' class='entry-link'>
                                <img src="{{ asset($tour->imgThumb) }}" class="attachment-post-grid-s size-post-grid-s"
                                    alt="{{ $tour->nombre }}" loading="lazy" style="height: 245px!important" />
                            </a>
                        </div>
                        <div class='info'>
                            <h3>{{ $tour->nombre }}</h3>
                            <p> {{ $tour->descripcionCorta }} </p>
                            <div style="width: 100%;  padding-bottom:50px">
                                <p class="text-center"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</p>
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} days</span>
                                <span style="float: right"><i class="fa fa-usd"></i>
                                    {{ $tour->precio }}.00</span>
                            </div>
                            <a href="{{ route('tour.show', $tour->slug) }}" class='button'>More info</a>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </section>


    <section class="review-section">
        <div class="overlay d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="dancing-center">Reseñas</h2>
                    </div>
                    <div id="carouselReviews" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="review text-center text-white">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/Thumbs/Anaka.jpg') }}" alt="Client Image"
                                            class="rounded-circle">
                                        <div class="ms-3 text-start">
                                            <h5 class="mb-0">Anaka Aiyar</h5>
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3">
                                        This company was great! Jessica was a really great coordinator. Right from the get
                                        go
                                        she
                                        was quick to answer questions, and alleviate concerns with appropriate information
                                        and
                                        options (when we were planning). She also worked with constraints I faced and was
                                        very
                                        flexible on last minute change requests or inputs. When we reached Cusco, every
                                        Morning
                                        we
                                        received detailed information on what to expect for the day. This included ideas on
                                        clothes,
                                        food, weather in addition to the itinerary. This was useful as it allowed us to
                                        focus on
                                        the
                                        trip and enjoying ourselves instead of worrying about transitions or food etc.
                                        Jessica
                                        also
                                        organized things outside of the itinerary that we require - like a laundry service
                                        that
                                        we
                                        needed help with and the service provider offered us pick up and drop off at the
                                        hotel.
                                        Jessica gave us great suggestions for food, shopping and things to do beyond our
                                        itinerary.
                                        She was quick to respond to messages and respond to any concerns or questions that I
                                        had. We
                                        really enjoyed meeting her recommended guides - they were very knowledgeable! We
                                        could
                                        not
                                        have asked for a better experience! Thanks Jessica!
                                    </p>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="review text-center text-white">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/Thumbs/Michael-Thompson.jpg') }}"
                                            alt="Client Pachatusan trek" class="rounded-circle">
                                        <div class="ms-3 text-start">
                                            <h5 class="mb-0">Michael Thompson</h5>
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3">
                                        We have just returned from our classic 4 day Inca Trail trek. Rolfi &amp; Percy were
                                        our
                                        very knowledgeable &amp; entertaining guides. They kept the group going with
                                        encouragement &amp; fascinating tales of the trail discovery &amp; Inca
                                        civilization.
                                        The food was so good and the porters that carried all of our food, tents &amp;
                                        supplies
                                        were amazing. We couldn't believe that they could provide the quality of food and
                                        small
                                        comforts like a toilet tent, morning coca tea, hot water bottles for sleeping bag
                                        warmth
                                        &amp; notes with a good night candy on our sleeping bag at night.
                                        It was an experience of a lifetime &amp; a physical challenge. I highly recommend
                                        Pachatusantrek Touring Company!!
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="review text-center text-white">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/Thumbs/Stewart-Wyatt.jpg') }}"
                                            alt="Client Pachatusan trek" class="rounded-circle">
                                        <div class="ms-3 text-start">
                                            <h5 class="mb-0">Stewart Wyatt</h5>
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3">
                                        We took the Cusco Cultural Tour from Pachatusantrek. Jessica was extremely helpful
                                        and flexible in rescheduling our reservation after the pandemic and working around
                                        our changing schedules. They were really well organized and we felt very comfortable
                                        traveling with them. Sergio met us at the airport and kept in contact with us to
                                        ensure things went well. Rolfi and Vilma were exceptionally good guides, being
                                        knowledgeable and communicated well. Oscar was an awesome driver. The tours were
                                        amazing, but we were very surprised at how good the food was – some of the best
                                        meals I have had in my life, especially the meals in locations arranged by
                                        Pachatusantrek. Our guides provided recommendations for meals and places to visit on
                                        our own that were very helpful. We felt like our agenda had an excellent mix of
                                        guided tour time in Cusco Sacred Valley, and Machu Picchu versus personal time to
                                        explore downtown Cusco.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="review text-center text-white">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/Thumbs/Mariella-Pajuelo.jpg') }}"
                                            alt="Client Pachatusan trek" class="rounded-circle">
                                        <div class="ms-3 text-start">
                                            <h5 class="mb-0">Mariella pajuelo</h5>
                                            <div class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3">
                                        Pachatusan Trek provided a very well organized, very easy going tour of all the
                                        major
                                        hot spots around the Valle Sagrado, Cusco and Machu Picchu. This included very nice
                                        and private meals in spectacular locations. They were able to acoomodate a
                                        relatively large group of people (19) that consisted of all ages, from 2 to 77 years
                                        old. Initially, there was a miscommunication about organization but they more than
                                        compensated for this very slight initial problem, and likewise it was understood
                                        dealing with a group so large. Our tour guides, Manuel and Elena, were very patient,
                                        knowledgable, and very accomodating when it came to hikingand touring each
                                        archeological site. Overall, we were happy to see that Pachatusantrek put a lot of
                                        thought into making our visit to Cusco a memorable one. Details such as making
                                        everybody seat together in the train to and from Machu Picchu or providing water
                                        during the tours speaks about how they strive to make you feel comfortable and
                                        relaxed. This was an unforgetable trip. We definitely recommend them !!
                                    </p>
                                </div>
                            </div>
                            <!-- Add more slides as needed -->
                        </div>
                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselReviews"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselReviews"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
