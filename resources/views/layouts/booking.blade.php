<!-----Booking---------->
<div class="fondo-book">
    <h3 class="text-center mb-3">Request Info</h3>
    <!--<form action="{{ route('mensaje01') }}" method="post" role="form" class="book1">
        @csrf
        <div class="row">
            <div class="col-lg-6 mb-2">
                <label class="form-label text-white">Name:</label>
                <input type="text" name="name" required class="form-control form-control-sm"
                    placeholder="Required*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            </div>
            <div class="col-lg-6 mb-2">
                <label class="form-label text-white">E-Mail:</label>
                <input type="email" class="form-control form-control-sm" required name="email" id="email"
                    placeholder="Required*" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
            </div>
            <div class="col-lg-6 mb-2">
                <label class="form-label text-white">Adults:</label>
                <input class="form-control form-control-sm" name="adultos" id="adultos" type="number" placeholder="0"
                    data-error="Valid email is required.">
                <div class="validation"></div>
            </div>
            <div class="col-lg-6 mb-2">
                <label class="form-label text-white">Children:</label>
                <input class="form-control form-control-sm" name="child" id="child" type="number" placeholder="0"
                    data-error="Valid email is required.">
                <div class="validation"></div>
            </div>
            <div class="col-lg-6 mb-2">
                <label for="da" class="form-label text-white">Date Arrive:</label>
                <input class="form-control form-control-sm" name="da" id="da" type="date">
                <div class="validation"></div>
            </div>
            <div class="col-lg-6 mb-2">
                <label for="tour" class="form-label text-white">Tour:</label>
                <input id="tour" type="text" name="tour" required class="form-control form-control-sm"
                    value="{{ $tour->nombre }}" readonly>
            </div>
            <div class="col-lg-12 mb-2">
                <label class="form-label text-white">Send us a message:</label>
                <textarea class="form-control form-control-sm" name="mensaje" id="mensaje" rows="3" data-rule="required"
                    data-msg="Write here your message." placeholder="Message"></textarea>
                <div class="validation"></div>
            </div>
            <div class="col-lg-12">
                <p id="checkmark" style="color:#fff;display: none; text-align:center; transition: opacity 0.5s ease">
                    Correct answer! &#10004;</p>
                <div id="captcha" class="text-center" style="opacity: 1; transition: opacity 0.5s ease;">
                    <span for="suma"><i> Solve the Captcha before submitting:</i></span><br>
                    <span id="num1"></span> <span>+</span> <span id="num2"></span> <span>=</span>
                    <span>
                        <label for="respuesta" style="display: none"></label>
                        <input type="number" id="respuesta" name="respuesta" required style="width: 120px; color:#000">
                    </span>
                    <span>
                        <button type="button" id="verificar"
                            style="background:#fff; color:#000;border:1px solid grey">verify</button>
                    </span>
                    <input type="hidden" id="valorCorrecto" name="valorCorrecto">
                </div>
            </div>
            <div class="text-center mt-2">
                <input id="botonEnviar" class="btn btn-sm btn-info" type="submit" name="submit" value="Send"
                    disabled />
            </div>
        </div>
    </form>-->
	<form action="{{ route('mensaje01') }}" method="post" role="form" class="book1">
    @csrf
    <div class="row">
        <div class="col-lg-6 mb-2">
            <label class="form-label text-white">Name:</label>
            <input type="text" name="name" required class="form-control form-control-sm"
                placeholder="Required*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
        </div>
        <div class="col-lg-6 mb-2">
            <label class="form-label text-white">E-Mail:</label>
            <input type="email" class="form-control form-control-sm" required name="email" id="email"
                placeholder="Required*" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
        </div>
        <div class="col-lg-6 mb-2">
            <label class="form-label text-white">Adults:</label>
            <input class="form-control form-control-sm" name="adultos" id="adultos" type="number" placeholder="0"
                data-error="Valid email is required.">
            <div class="validation"></div>
        </div>
        <div class="col-lg-6 mb-2">
            <label class="form-label text-white">Children:</label>
            <input class="form-control form-control-sm" name="child" id="child" type="number" placeholder="0"
                data-error="Valid email is required.">
            <div class="validation"></div>
        </div>
        <div class="col-lg-6 mb-2">
            <label for="da" class="form-label text-white">Date Arrive:</label>
            <input class="form-control form-control-sm" name="da" id="da" type="date">
            <div class="validation"></div>
        </div>
        <div class="col-lg-6 mb-2">
            <label for="tour" class="form-label text-white">Tour:</label>
            <input id="tour" type="text" name="tour" required class="form-control form-control-sm"
                value="{{ $tour->nombre }}" readonly>
        </div>
        <div class="col-lg-12 mb-2">
            <label class="form-label text-white">Send us a message:</label>
            <textarea class="form-control form-control-sm" name="mensaje" id="mensaje" rows="3" data-rule="required"
                data-msg="Write here your message." placeholder="Message"></textarea>
            <div class="validation"></div>
        </div>
        <div class="col-lg-12">
            <p id="checkmark" style="color:#fff;display: none; text-align:center; transition: opacity 0.5s ease">
                Correct answer! &#10004;</p>
            <div id="captcha" class="text-center" style="opacity: 1; transition: opacity 0.5s ease;">
                <span for="suma"><i> Solve the Captcha before submitting:</i></span><br>
                <span id="num1"></span> <span>+</span> <span id="num2"></span> <span>=</span>
                <span>
                    <label for="respuesta" style="display: none"></label>
                    <input type="number" id="respuesta" name="respuesta" required style="width: 120px; color:#000">
                </span>
                <input type="hidden" id="valorCorrecto" name="valorCorrecto">
            </div>
        </div>
        <div class="text-center mt-2">
            <input id="botonEnviar" class="btn btn-sm btn-info" type="submit" name="submit" value="Send"
                disabled />
        </div>
    </div>
</form>
    <!---<script>
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
                document.getElementById("botonEnviar").disabled = false; // Corregido aquí
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
    </script>-->
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

    document.getElementById("verificar").addEventListener("click", function () {
        var respuestaUsuario = parseInt(document.getElementById("respuesta").value);
        var valorCorrecto = parseInt(document.getElementById("valorCorrecto").value);

        if (respuestaUsuario === valorCorrecto) {
            var captchaDiv = document.getElementById("captcha");
            captchaDiv.style.opacity = "0";
            setTimeout(function () {
                captchaDiv.style.display = "none";
            }, 500);
            document.getElementById("botonEnviar").disabled = false;
            document.getElementById('checkmark').style.display = 'block';
            setTimeout(function () {
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
</script>

</div>
