@extends('layouts.admines')
@section('contenido')
    <section class="banner-contact">
        <div class="banner-content">
            <h1>Contacte Pachatusan Trek</h1>
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
                <div class="col-md-6">
                    <h3>Contáctenos</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Asunto:</label>
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje:</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    </form>
                </div>

                <!-- Datos de contacto y mapa -->
                <div class="col-md-6 contact-info">
                    <h3>Nuestra información de contacto</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><strong>Teléfonos:</strong></p>
                            <p>(51-84) 231817</p>
                            <p>(51-84) 984 103757</p>
                            <p>(51-84) 984 702859</p>
                        </div>
                        <div class="col-lg-6">
                            <p><strong>Email:</strong> </p>
                            <p><a href="mailto:jessica@pachatusantrek.com"
                                    style="text-decoration: none">jessica@pachatusantrek.com</a></p>
                            <p><a href="mailto:info@pachatusantrek.com"
                                    style="text-decoration: none">info@pachatusantrek.com</a></p>
                        </div>
                    </div>

                    <p><strong>Contáctenos:</strong></p>
                    <p>Urb. Villa Unión Huancaro G-4 Residencial Los Fresnos Dpto B-502 <br> Santiago – Cusco – Peru</p>

                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2257.0241344033952!2d-71.98183721916573!3d-13.537729145349848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5c39a4e9e6d%3A0x6401858e98eb2f4a!2sPachatusantrek%20SAC!5e0!3m2!1ses!2spe!4v1632877016938!5m2!1ses!2spe"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-banner">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="dancing-center">Empaca con un propósito</h2>
            <p class="mt-4">
                Somos miembros orgullosos de Pack for a Purpose, una iniciativa que permite a viajeros como tú generar un
                impacto duradero en la comunidad de tu destino de viaje. Si ahorras unos pocos kilos de espacio en tu maleta
                y llevas suministros para los proyectos que apoyamos, tendrás un impacto inestimable en las vidas de
                nuestros niños y familias locales. Haz clic aquí para ver qué suministros se necesitan para nuestro/s
                proyecto/s.
            </p>
        </div>
    </section>
@endsection
