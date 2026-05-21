@extends('layouts.admin')
@section('contenido')
    <section class="banner-social banner-reglamento-camino-inca">
        <div class="banner-content">
            <h1>Guidelines</h1>
            <h5>
                For the Tourist use on the Inca Trail Network
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
            <div class="accordion company-info-accordion pb-2" id="guidelinesAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            PROHIBITIONS
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#guidelinesAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-start">
                                <div class="col-lg-12 d-flex flex-column justify-content-center">
                                    <p style="text-align: justify">
                                        In order to guarantee the physical safety of tourists and the conservation of the
                                        nation's natural and cultural heritage, the following actions are prohibited on the
                                        Inca Trail Network of the Historic Sanctuary of Machu Picchu, in accordance with
                                        the sectoral responsibilities of each entity:
                                    </p>
                                    <ol style="text-align: justify">
                                        <li>Entry of independent tourists and/or service providers without the respective authorization.</li>
                                        <li>Travel on the railway and/or unauthorized routes.</li>
                                        <li>Entry of minors not listed in the annex, as well as relatives of guides and/or support staff.</li>
                                        <li>Altering or contaminating the natural and/or cultural landscape, as well as archaeological monuments.</li>
                                        <li>Camping or spending the night outside the assigned campsite—except in cases of force majeure, as determined by park rangers and/or security personnel.</li>
                                        <li>Bringing in and/or using items that threaten the conservation of natural and cultural heritage, as well as public property.</li>
                                        <li>Making campfires on the Inca Trail Network, at archaeological sites, and/or in surrounding natural areas.</li>
                                        <li>Climbing walls, drawing on earthen floors, and/or scratching archaeological sites.</li>
                                        <li>Creating any type of graffiti.</li>
                                        <li>Disturbing and/or affecting wild flora and fauna.</li>
                                        <li>Conducting overflights and/or using airspace without prior authorization from the DDC-CUSCO and the JSHM-SERNANP.</li>
                                        <li>Eating food within archaeological sites.</li>
                                        <li>Placing political and commercial advertisements on the Inca Trail Network.</li>
                                        <li>Traveling or working while intoxicated or under the influence of other drugs.</li>
                                        <li>Entry and transit of motorized vehicles.</li>
                                        <li>Transferring tourists from one group to another.</li>
                                        <li>Abandonment of the tourist group by the tour guide and/or licensed tourism professional.</li>
                                        <li>Obscene acts contrary to morality and good customs.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            PROHIBITED ITEMS
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#guidelinesAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-start">
                                <div class="col-lg-12 d-flex flex-column justify-content-center">
                                    <p style="text-align: justify">The following items are prohibited:</p>
                                    <ol style="text-align: justify">
                                        <li>Firearms or air guns, bows and arrows, hunting and fishing equipment, axes, machetes, hunting knives with steel blades longer than 7 cm, picks, shovels, or other tools.</li>
                                        <li>Any type of trap for capturing or collecting specimens of wild fauna and flora.</li>
                                        <li>Fossil fuels such as oil, diesel, and gasoline.</li>
                                        <li>Alcoholic beverages, stimulants, psychotropic substances, narcotics, and other drugs prohibited by current national legislation.</li>
                                        <li>Beverages and products in glass containers.</li>
                                        <li>Sound equipment and other noise generators (musical instruments).</li>
                                        <li>Domestic and exotic animals.</li>
                                        <li>Walking sticks with metal tips that do not have rubber protectors, as well as walking sticks made of native wood.</li>
                                        <li>Transportation vehicles such as bicycles, tricycles, or others.</li>
                                        <li>Drones or any type of small craft and professional filming equipment for unauthorized commercial purposes.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
