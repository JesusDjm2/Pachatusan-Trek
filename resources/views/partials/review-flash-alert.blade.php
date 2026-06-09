@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('flash') && (session('flash')['type'] ?? null) === 'success')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: @json(($locale ?? 'en') === 'es' ? '¡Gracias!' : 'Thank you!'),
                    html: @json(
                        ($locale ?? 'en') === 'es'
                            ? '¡Tu reseña fue enviada con éxito!<br><strong>Nuestro equipo la revisará</strong> y pronto estará visible en nuestra página.<br><br><em>¡Gracias por tu aportación!</em>'
                            : 'Your review has been submitted successfully!<br><strong>Our team will review it</strong> and it will soon be visible on our page.<br><br><em>Thank you for your contribution!</em>'
                    ),
                    confirmButtonText: @json(($locale ?? 'en') === 'es' ? '¡Entendido!' : 'Got it!'),
                    confirmButtonColor: '#0c8178',
                    background: '#fff',
                    width: '480px',
                    padding: '2.5rem',
                });
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: @json(($locale ?? 'en') === 'es' ? 'No se pudo enviar' : 'Could not submit'),
                    html: @json(implode('<br>', $errors->all())),
                    confirmButtonText: @json(($locale ?? 'en') === 'es' ? 'Revisar datos' : 'Review form'),
                    confirmButtonColor: '#0c8178',
                }).then(function() {
                    var modalEl = document.getElementById(@json($modalId ?? 'reviewModal'));
                    if (modalEl && window.bootstrap) {
                        bootstrap.Modal.getOrCreateInstance(modalEl).show();
                    }
                });
            });
        </script>
    @endif
@endpush
