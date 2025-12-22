@extends('layouts.admin')
@section('contenido')
    <section class="banner-contact">
        <div class="banner-content">
            <h1>Contact PachatusanTrek</h1>
            @if (session('flash'))
                <div class="alert alert-{{ session('flash')['type'] }} alert-dismissible fade show" role="alert">
                    {{ session('flash')['message'] }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
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
                    <h3>Contact Us</h3>
                    {{-- <form action="{{ route('bookindex2') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Your Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Message:</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <p id="checkmark"
                                style="color:#393939;display: none; text-align:center; transition: opacity 0.5s ease">
                                Correct answer! &#10004;</p>
                            <div id="captcha" style="opacity: 1; transition: opacity 0.5s ease;">
                                <span for="suma"><i> Solve the Captcha before submitting:</i></span><br>
                                <span id="num1"></span> <span>+</span> <span id="num2"></span> <span>=</span>
                                <span>
                                    <label for="respuesta" style="display: none"></label>
                                    <input type="number" id="respuesta" name="respuesta" required
                                        style="width: 120px; color:#000">
                                </span>
                                <span>
                                    <button type="button" id="verificar"
                                        style="background:#fff; color:#000;border:1px solid grey">
                                        verify
                                    </button>
                                </span>
                                <input type="hidden" id="valorCorrecto" name="valorCorrecto">
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="botonEnviar" class="btn btn-primary" type="submit" name="submit"
                                value="Enviar mensaje" disabled />
                        </div>
                    </form>

                    <script>
                        var intentos = 0;
                        function generarSumaAleatoria() {
                            var num1 = Math.floor(Math.random() * 12) + 3;
                            var num2 = Math.floor(Math.random() * (15 - num1)) + num1;
                            var suma = num1 + num2;
                            var num1Elemento = document.getElementById("num1");
                            var num2Elemento = document.getElementById("num2");
                            num1Elemento.textContent = num1;
                            num2Elemento.textContent = num2;
                            var valorCorrecto = document.getElementById("valorCorrecto");
                            valorCorrecto.value = suma;
                        }
                        window.onload = generarSumaAleatoria;

                        document.getElementById("verificar").addEventListener("click", function() {
                            var respuestaUsuario = parseInt(document.getElementById("respuesta").value);
                            var valorCorrecto = parseInt(document.getElementById("valorCorrecto").value);

                            if (respuestaUsuario === valorCorrecto) {
                                var captchaDiv = document.getElementById("captcha");
                                captchaDiv.style.opacity = "0";
                                setTimeout(function() {
                                    captchaDiv.style.display = "none";
                                }, 500);
                                document.getElementById("botonEnviar").disabled = false;
                                document.getElementById('checkmark').style.display = 'block';
                                setTimeout(function() {
                                    document.getElementById('checkmark').style.display = 'none';
                                }, 1200);
                            } else {
                                intentos++;
                                if (intentos === 3) {
                                    alert("Failed 3 times. You will be redirected to the error page.");
                                    window.location.href = "404";
                                } else {
                                    alert("Incorrect answer. Attempt " + intentos + " of 3. Please check your answer.");
                                    generarSumaAleatoria();
                                }
                            }
                        });
                    </script> --}}
                    <form action="{{ route('bookindex2') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Your Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Message:</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Your Message" required></textarea>
                        </div>

                        <!-- CAPTCHA -->
                        <div class="form-group">
                            <p style="display: flex; align-items: center; gap: 5px;">
                                Solve the CAPTCHA:
                                <strong>{{ $num1 }}</strong> +
                                <strong>{{ $num2 }}</strong> =
                                <input type="number" id="respuesta" name="respuesta"
                                    style="width: 120px; border-radius: 5px; border-color: #81818149" required>
                            </p>

                            @error('captcha')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Honeypot -->
                        <div style="display: none;">
                            <label for="honeypot">Leave this field empty:</label>
                            <input type="text" id="honeypot" name="honeypot">
                        </div>

                        <div class="mt-2">
                            <input id="botonEnviar" class="btn btn-primary" type="submit" name="submit"
                                value="Send">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 contact-info">
                    <h3>Our Contact Information</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><strong>Phone Numbers:</strong></p>
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

                    <p><strong>Contact us:</strong></p>
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

    <!--<section class="parallax-banner">
        <div class="overlay"></div>
        <div class="content">
            <h2 class="dancing-center">Pack for a Purpose </h2>
            <p class="mt-4">We are proud members of Pack for a Purpose, an initiative that allows travelers like you to
                make a lasting impact in the community at your travel destination. If you save just a few kilos of space in
                your suitcase and take supplies for the projects we support in need, you’ll make a priceless impact in the
                lives of our local children and families. Please click here to see what supplies are needed for our
                project/projects.</p>
        </div>
    </section>-->
@endsection
