@extends('layouts.admines')
@section('contenido')
    <section class="banner-social banner-reglamento-camino-inca">
        <div class="banner-content">
            <h1>Reglamento</h1>
            <h5>
                Uso Turístico en la Red de Camino Inca
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
            <div class="accordion company-info-accordion pb-2" id="reglamentoAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            PROHIBICIONES
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#reglamentoAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-start">
                                <div class="col-lg-12 d-flex flex-column justify-content-center">
                                    <p style="text-align: justify">
                                        Con la finalidad de garantizar la integridad física de los turistas y la conservación
                                        del patrimonio natural y cultural de la Nación, en la Red de Caminos Inca del Santuario
                                        Histórico de Machu Picchu, quedan prohibidas las siguientes conductas, de acuerdo con
                                        las competencias sectoriales de cada entidad:
                                    </p>
                                    <ol style="text-align: justify">
                                        <li>Ingreso de turistas libres y/o prestadores de servicios sin la autorización respectiva.</li>
                                        <li>Desplazamiento por la vía férrea y/o rutas no autorizadas.</li>
                                        <li>Ingreso de menores de edad que no figuren en el anexo, así como parientes de guías y/o personal de apoyo.</li>
                                        <li>Alterar o contaminar el paisaje natural y/o cultural, así como los monumentos arqueológicos.</li>
                                        <li>Acampar o pasar la noche fuera del campamento asignado, salvo situaciones de fuerza mayor previa determinación del personal guardaparque y/o vigilante.</li>
                                        <li>Ingresar y/o utilizar elementos que atenten contra la conservación del patrimonio natural y cultural, así como los bienes de uso público.</li>
                                        <li>Hacer fogatas en la Red de Caminos Inka, en los monumentos arqueológicos y/o zonas aledañas del entorno natural.</li>
                                        <li>Subir a los muros, realizar trazos en los pisos de tierra y/o rayaduras en los monumentos arqueológicos.</li>
                                        <li>Realizar cualquier tipo de grafiti.</li>
                                        <li>Perturbar y/o afectar las especies flora y fauna silvestre.</li>
                                        <li>Realizar sobrevuelos y/o usar el espacio aéreo sin autorización previa de la DDC-CUSCO y la JSHM-SERNANP.</li>
                                        <li>La ingesta de alimentos dentro de los monumentos arqueológicos.</li>
                                        <li>Colocar anuncios de carácter político y comercial en la Red de Caminos Inka.</li>
                                        <li>Transitar y trabajar en estado etílico o bajo efectos de otros estupefacientes (drogas entre otros).</li>
                                        <li>Ingreso y tránsito de vehículos motorizados.</li>
                                        <li>Realizar traspasos de turistas de un grupo a otro.</li>
                                        <li>El abandono del grupo de turistas por parte del guía de turismo y/o Licenciado en turismo.</li>
                                        <li>Los actos obscenos contrarios a la moral y las buenas costumbres.</li>
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
                            ELEMENTOS NO PERMITIDOS
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#reglamentoAccordion">
                        <div class="accordion-body">
                            <div class="row d-flex align-items-start">
                                <div class="col-lg-12 d-flex flex-column justify-content-center">
                                    <p style="text-align: justify">No está permitido el ingreso de los siguientes elementos:</p>
                                    <ol style="text-align: justify">
                                        <li>Armas de fuego o de aire comprimido, arcos y flechas, implementos de caza y pesca, hachas, machetes, cuchillos de monte cuya hoja de acero sobrepase los 07 cm de largo, picos, palas u otras herramientas.</li>
                                        <li>Cualquier tipo de trampa para la captura o colección de especímenes de fauna y flora silvestre.</li>
                                        <li>Combustibles fósiles como: petróleo, diesel, gasolina.</li>
                                        <li>Bebidas alcohólicas, estimulantes, psicotrópicos, estupefacientes y otras drogas no permitidas por la legislación nacional vigente.</li>
                                        <li>Bebidas y productos con envases de vidrio.</li>
                                        <li>Equipos de sonido y otros generadores de ruidos molestos (instrumentos musicales).</li>
                                        <li>Animales domésticos y exóticos.</li>
                                        <li>Bastones con punta metálica que no tenga protector de goma, así como de bastones de madera de especies nativas.</li>
                                        <li>Vehículos de transporte como bicicletas, triciclos u otros.</li>
                                        <li>Drones o cualquier tipo de nave menor y equipos de filmación profesionales con fines comerciales no autorizados.</li>
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
