@if (config('recaptcha.api_site_key'))
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('recaptcha.api_site_key') }}" async defer></script>
    <script>
        (function () {
            var siteKey = @json(config('recaptcha.api_site_key'));

            function showRecaptchaError(form) {
                var msg = form.querySelector('.recaptcha-error-msg');
                if (!msg) {
                    msg = document.createElement('div');
                    msg.className = 'recaptcha-error-msg text-danger mt-2';
                    msg.textContent = 'No se pudo verificar el formulario (reCAPTCHA). Revisa tu conexion o desactiva el bloqueador de anuncios e intentalo de nuevo.';
                    form.appendChild(msg);
                }
            }

            function bindForm(form) {
                if (form.dataset.recaptchaBound) {
                    return;
                }
                form.dataset.recaptchaBound = '1';

                form.addEventListener('submit', function (event) {
                    if (form.dataset.recaptchaToken) {
                        return;
                    }

                    event.preventDefault();

                    if (typeof grecaptcha === 'undefined') {
                        showRecaptchaError(form);
                        return;
                    }

                    grecaptcha.ready(function () {
                        grecaptcha.execute(siteKey, { action: form.dataset.recaptcha || 'submit' })
                            .then(function (token) {
                                var input = form.querySelector('input[name="g-recaptcha-response"]');
                                if (!input) {
                                    input = document.createElement('input');
                                    input.type = 'hidden';
                                    input.name = 'g-recaptcha-response';
                                    form.appendChild(input);
                                }
                                input.value = token;
                                form.dataset.recaptchaToken = '1';
                                form.submit();
                            })
                            .catch(function () {
                                showRecaptchaError(form);
                            });
                    });
                });
            }

            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('form[data-recaptcha]').forEach(bindForm);
            });
        })();
    </script>
@endif
