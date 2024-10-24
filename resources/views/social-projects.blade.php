@extends('layouts.admin')
@section('contenido')
    <section class="banner-social">
        <div class="banner-content">
            <h1>Social Projects</h1>
            <h5>
                CORPORATE SOCIAL RESPONSIBILITY OF PACHATUSANTREK SAC
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
                                        Volunteer with Children in Peru to be part of an inspirational and holistic
                                        after-school
                                        educational programme for 80 children in a mountain village near Cusco. The project
                                        gives free classes and homework help to under-privileged children. The project is
                                        also a
                                        safe place to play, to learn traditional music and dance. The children are provided
                                        free
                                        fruit, clean drinking water and a nutritious lunch daily. Join us at Picaflor House
                                        Community Project and make a difference!
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-community-project-page/"
                                        target="_blank" class="btn btn-primary btn-sm">Read more <i
                                            class="fa fa-external-link fa-sm"></i></a>
                                    <h4 class="mt-3"> Picaflor House Wish List</h4>
                                    <li>Educational DVD videos in English (Peru is in Region 4). These can be cartoons, too,
                                        like Peppa Pig and Dora the Explorer</li>
                                    <li>Children’s books in English (simple)</li>
                                    <li>Children’s books in Spanish</li>
                                    <li>Durable Fisher Price toys for the Kindergarten</li>
                                    <li>Durable toys for the sand area</li>
                                    <li>Children’s clothing sizes 3-12 (used or new)</li>
                                    <li>Unique art supplies (including white poster paint, pastels, sequins, feathers, pipe
                                        cleaners)</li>
                                    <li>Simple board games or cards games</li>
                                    <li>Go Fish cards using numbers or anything else that requires English</li>
                                    <li>Poster paints (in bottles)</li>
                                    <li>White printer paper</li>
                                    <li>Colored paper</li>
                                    <li>Stationery (sharpeners, erasers, pencils, red pencils, coloring pencils, colored
                                        markers, rulers, etc.)</li>
                                    <li>Stickers</li>
                                    <li>Puzzles</li>
                                    <li>Spanish Dictionaries</li>
                                    <li>Note books</li>
                                    <li>Markers</li>
                                    <li>Individual whiteboards</li>
                                    <li>Children’s shoes</li>
                                    <li>Volley Balls</li>
                                    <li>Soccer Balls</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            CUSCO DOG PROJECT
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
                                    <h4>CUSCO DOG PROJECT </h4>
                                    <p style="text-align: justify">Stray dogs are commonplace in Peru and this wonderful
                                        project provides a humane and
                                        long term solution to this ongoing problem. The main objective of the Peru Dog
                                        Rescue Shelter is to nurture the dogs back to health through receiving veterinary
                                        treatment at the hands of partner veterinarians, as well as loving care from
                                        veterinary students and volunteers. Whenever possible the animals from the dog
                                        shelter are re-homed with loving families.</p>
                                    <p style="text-align: justify">
                                        All of the dogs at the shelter are routinely vaccinated against rabies, distemper,
                                        parvovirus, coronavirus, hepatitis and leptospirosis. They are also de-wormed and
                                        de-flead approximately every 45 days. In addition dogs are neutered when funding is
                                        available to help control the population of unwanted dogs.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-dog-rescue/"
                                        target="_blank" class="btn btn-primary btn-sm">Read more <i
                                            class="fa fa-external-link fa-sm"></i></a>
                                    <h4 class="mt-2">Dog Shelter Wish List</h4>
                                    <li>Dog Treats</li>
                                    <li>Dog food</li>
                                    <li>Pet shampoo</li>
                                    <li>Metal dog bowls</li>
                                    <li>Blankets</li>
                                    <li>Durable dog bedding</li>
                                    <li>Dog nail clippers</li>
                                    <li>Sponges/scrub brushes</li>
                                    <li>Strong dog toys i.e. Kong</li>
                                    <li>Dog grooming brushes</li>
                                    <li>Heavy duty Gloves</li>
                                    <li>Dust masks</li>
                                    <li>Collars and leashes</li>
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
            <h2 class="dancing-center">Pack for a Purpose </h2>
            <p class="mt-4">We are proud members of Pack for a Purpose, an initiative that allows travelers like you to
                make a lasting impact in the community at your travel destination. If you save just a few kilos of space in
                your suitcase and take supplies for the projects we support in need, you’ll make a priceless impact in the
                lives of our local children and families. Please click here to see what supplies are needed for our
                project/projects.</p>
        </div>
    </section>
    <section class="bg-light">
        <div class="container pt-5">
            <div class="accordion company-info-accordion pb-2" id="companyAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            PERU RAINFOREST WILDLIFE SANCTUARY
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
                                    <h4>PERU RAINFOREST WILDLIFE SANCTUARY</h4>
                                    <p style="text-align: justify">
                                        This one-of-a-kind project is a lifeline for abused and endangered animals in the
                                        Southern Peruvian Amazon rainforest. Many of the animals at the centre are rescued
                                        from the illegal trafficking and pet trade or abusive homes; the animals often
                                        arrive injured or stressed. Animals are also brought in sick or dying by local
                                        people because of hunting accidents.<br>

                                        Animals rescued by the sanctuary include sloths, howler monkeys, birds and more.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-rainforest-wildlife-sanctuary/form-peru-rainforest-wildlife-sanctuary-application/"
                                        class="text-primary" target="_blank" style="text-decoration: none">Peru
                                        Rainforest Wildlife Sanctuary <i class="fa fa-external-link fa-sm"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            PERU HORSE SHELTER
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
                                    <h4>PERU HORSE SHELTER</h4>
                                    <p style="text-align: justify">
                                        The horse sanctuary is set up to be an equestrian refuge for horses rescued from bad
                                        working conditions or a fate of being slaughtered for meat. The Peruvian Andes
                                        Highlander Horse is smaller and not considered as ‘attractive’ as Peru’s national
                                        horse (the Peruvian Paso). Due to this they are not popular among horse owners &
                                        riders and large numbers of them are slaughtered for meat.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-horse-sanctuary/"
                                        class="text-primary" target="_blank" style="text-decoration: none">
                                        Peru Horse Shelter <i class="fa fa-external-link fa-sm"></i>
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
                            PERU AMAZON JUNGLE CONSERVATION
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
                                    <h4>PERU AMAZON JUNGLE CONSERVATION</h4>
                                    <p style="text-align: justify">
                                        The project focuses on promoting and contributing to the conservation of the
                                        marine ecosystems off the North Coast of Peru. This programme takes a holistic
                                        approach to conservation; through scientific research, sustainability
                                        management, environmental education and inter-agency collaboration.<br>

                                        Research projects include studies on sea turtles, whale sharks, sharks, rays,
                                        sea lions, sea birds and other marine life.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-amazon-conservation-project/"
                                        class="text-primary" target="_blank" style="text-decoration: none">
                                        Peru Amazon Jungle Conservation <i class="fa fa-external-link fa-sm"></i>
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
                            PERU MARINE CONSERVATION
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
                                    <h4>PERU MARINE CONSERVATION</h4>
                                    <p style="text-align: justify">
                                        The project focuses on promoting and contributing to the conservation of the marine
                                        ecosystems off the North Coast of Peru. This programme takes a holistic approach to
                                        conservation; through scientific research, sustainability management, environmental
                                        education and inter-agency collaboration.<br>

                                        Research projects include studies on sea turtles, whale sharks, sharks, rays, sea
                                        lions, sea birds and other marine life.
                                    </p>
                                    <a href="https://www.globalteer.org/volunteer-programmes/peru-marine-conservation-project/"
                                        class="text-primary" target="_blank" style="text-decoration: none">
                                        Peru Marine Conservation <i class="fa fa-external-link fa-sm"></i>
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
                                        For us, the work we develop with our field collaborators in the community of
                                        Pacchanta goes beyond the hiring of tourist services for muleteers and freight
                                        carriers. In our quest to preserve our ancestral customs, we also involve the
                                        community members in the tourist activity by buying handmade textiles.
                                        In this process, artisans use the techniques and tools transmitted by their
                                        ancestors from generation to generation. In this way we have the great
                                        opportunity to have the correct interpretation of the iconography represented in
                                        textiles, since textiles are made with a very personal vision of the artisan.
                                        This artistic representation in textiles talks about the worldview of the Andean
                                        man, talks about the knowledge and understanding of the social and environmental
                                        environment of the community.
                                        For Pachatusantrek it is vitally important to preserve the customs and
                                        traditions of the Andean world, since the formation and development of this
                                        important civilization is based on its close relationship with its environment,
                                        where the landscape and natural resources serve as a balance point for its
                                        worldview.
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
                            HUARAN – SACRED VALLEY OF THE INCAS
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
                                    <h4>HUARAN – SACRED VALLEY OF THE INCAS</h4> 
                                    <p style="text-align: justify">
                                        One of Pachatusantrek’s objectives is to preserve the customs and ancestral
                                        knowledge acquired by the community members in the communities where we provide our
                                        adventure tourism services. In this case, we work with residents of the community of
                                        Huaran – Sacred Valley of the Incas. In addition to working with us as kitchen
                                        staff, we acquire textile crafts from their families to give to our customers as
                                        gifts. The artisans of this community masterfully use the techniques and tools
                                        inherited from their ancestors throughout the generations, thus maintaining the
                                        cosmogony and worldview of the community, through the personalized vision of the
                                        artisan.<br>
                                        For Pachatusantrek it is vitally important to preserve the customs and traditions of
                                        the Andean world, since the formation and development of this important civilization
                                        is based on its close relationship with its environment, where the landscape and
                                        natural resources serve as a balance for its worldview.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
