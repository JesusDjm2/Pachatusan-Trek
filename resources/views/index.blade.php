@extends('layouts.admin')
@section('contenido')
    <section class="banner-section">
        <div class="banner-content">
            <h1>With the protection of Mother Earth</h1>
            <h5>Live unforgettable experiences, have surprising adventures, and meet places full of magic and mysticism.
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
                    <h3 style="font-family: 'Dancing Script', cursive;">With the permission of the Apus</h3>
                    <p>
                        Our passion and vocation for service have led to developing our activities professionals in
                        different
                        natural settings of our country. These feelings and skills have been the main motivation to start
                        Pachatusantrek.
                    </p>
                    <a href="{{ route('about') }}" class="btn btn-sm btn-success">Read more</a>
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
                <h5 class="pb-2">EXPERIENCE</h5>
                <h3 class="pb-5">Different types of experiences, which one do you want to live?</h3>
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">TREKS</h5>
                            <p class="card-text text-dark">We travel the ancestral trails in the Andes mountain range;
                                where history, flora, fauna and geography will fill our senses. We will walk among the
                                Andean divinities who will be silent witnesses of our own stories in the mountains.</p>
                            <a href="{{ route('treks') }}" class="btn btn-primary btn-sm">View Tours</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">EXPEDITIONS</h5>
                            <p class="card-text text-dark">
                                We will take you to remote destinations where we can see and feel the strength of the
                                Andean mountains. This experience will take us from the highlands to the mountainous
                                forests near the Amazon plain, areas full of myths, history, flora, fauna and a
                                surprising culture.
                            </p>
                            <a href="{{route('expeditions')}}" class="btn btn-primary btn-sm">View Tours</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 text-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark mb-2">TOURS</h5>
                            <p class="card-text text-dark">
                                Enjoy and know the main tourist destinations of the most important regions of Peru. Our
                                service guarantees an unforgettable experience on the coast, mountains and jungle. We
                                have the best travel options to get to know Peru to the fullest.
                            </p>
                            <a href="{{route('entours')}}" class="btn btn-primary btn-sm">View tours</a>
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
                    <h2 class="dancing">Most popular tours:</h2>
                </div>
                @foreach ($firstTours as $tour)
                    <div class="col-lg-4 tours mb-3">
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
                                {{-- <p class="text-center"> <i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</p> --}}
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} {{ $tour->dias == 1 ? 'day' : 'days' }}</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</span>
                                {{-- <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->precio }}</span> --}}
                            </div>
                            <a href="{{ route('tour.show', $tour->slug) }}" class='button'>More info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="parallax-banner">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="dancing-center">Salkantay – Machu Picchu – 5 Days </h2>
            <p class="mt-4">Located in the Andean Vilcabamba mountain range is the Salkantay Nevada, passing through
                stunning landscapes
                from the cloud forest to high mountains</p>
            <a href="#explore" class="btn">Explore Now</a>
        </div>
    </section>
    <section class="mainTours bg-light">
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2 class="dancing">Most popular tours:</h2>
                </div>
                @foreach ($nextTours as $tour)
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
                                <span style="float: left"><i class="fa fa-clock-o"></i>
                                    {{ $tour->dias }} {{ $tour->dias == 1 ? 'day' : 'days' }}</span>
                                <span style="float: right"><i class="fa fa-map-marker"></i> {{ $tour->recorrido }}</span>
                            </div>
                            <a href="{{ route('tour.show', $tour->slug) }}" class='button'>More info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="review-section">
        <div class="overlay d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="dancing-center">Reviews</h2>
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
