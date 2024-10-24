<!-----Booking---------->
<div class="fondo-book">
    <h3 class="text-center mb-3">Solicitar información</h3>
    <form action="{{ route('mensaje01') }}" method="post" role="form" class="book1">
        @csrf
        <div class="row">
            <div class="col-lg-6 mb-2">
                <span class="form-label">Nombre:</span>
                <input type="text" name="name" required class="form-control form-control-sm" placeholder="Required*"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            </div>
            <div class="col-lg-6 mb-2">
                <span class="form-label">E-Mail:</span>
                <input type="email" class="form-control form-control-sm" required name="email" id="email"
                    placeholder="Required*" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
            </div>
            <div class="col-lg-6 mb-2">
                <span class="form-label">Adultos:</span>
                <input class="form-control form-control-sm" name="adultos" id="adultos" type="number" placeholder="0"
                    data-error="Valid email is required.">
                <div class="validation"></div>
            </div>
            <div class="col-lg-6 mb-2">
                <span class="form-label">Niños:</span>
                <input class="form-control form-control-sm" name="child" id="child" type="number" placeholder="0"
                    data-error="Valid email is required.">
                <div class="validation"></div>
            </div>
            <div class="col-lg-6 mb-2">
                <span class="form-label">Fecha de llegada:</span>
                <input class="form-control form-control-sm" name="da" id="da" type="date">
                <div class="validation"></div>
            </div>
            <div class="col-lg-6 mb-2">
                <span class="form-label">Tour:</span>
                <input type="text" name="tour" required class="form-control form-control-sm" value="{{ $tour->nombre }}" readonly>
            </div>
            <div class="col-lg-12 mb-2">
                <span class="form-label">Mensaje:</span>
                <textarea class="form-control form-control-sm" name="mensaje" id="mensaje" rows="3" data-rule="required"
                    data-msg="Write here your message." placeholder="Mensaje..."></textarea>
                <div class="validation"></div>
            </div>
            <div class="col-lg-12">
                <p id="checkmark" style="color:#fff;display: none; text-align:center; transition: opacity 0.5s ease">
                    ¡Respuesta correcta! &#10004;</p>
                <div id="captcha" class="text-center" style="opacity: 1; transition: opacity 0.5s ease;">
                    <span for="suma"><i> Resuelva el Captcha antes de enviar:</i></span><br>
                    <span id="num1"></span> <span>+</span> <span id="num2"></span> <span>=</span>
                    <span>
                        <input type="number" id="respuesta" name="respuesta" required style="width: 120px; color:#000">
                    </span>
                    <span>
                        <button type="button" id="verificar"
                            style="background:#fff; color:#000;border:1px solid grey">verificar</button>
                    </span>
                    <input type="hidden" id="valorCorrecto" name="valorCorrecto">
                </div>
            </div>
            <div class="text-center mt-2">
                <input class="btn btn-sm btn-info" type="submit" name="submit" value="Enviar" disabled />
            </div>
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
                document.getElementById("botondjm2").disabled = false;
                document.getElementById('checkmark').style.display = 'block';
                setTimeout(function() {
                    document.getElementById('checkmark').style.display =
                        'none';
                }, 1200);
            } else {
                intentos++;
                if (intentos === 3) {
                    alert("Has fallado 3 veces. Se te redirigirá a la página de error.");
                    window.location.href = "404";
                } else {
                    alert("Respuesta incorrecta. Intento " + intentos + " de 3. Por favor, verifica tu respuesta.");
                    generarSumaAleatoria();
                }
            }
        });
    </script>
</div>
