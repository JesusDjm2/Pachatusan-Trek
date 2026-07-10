@extends('layouts.admines')
@section('metas')
    <meta name="description" content="Lee reseñas auténticas de nuestros viajeros. Descubre lo que dicen nuestros clientes sobre sus experiencias con Pachatusantrek en Perú.">
    <meta name="keywords" content="reseñas, testimonios, Pachatusantrek, tours Perú, opiniones de viajes">
@endsection
@section('contenido')

    <style>
        .review-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            background: #fff;
            height: 100%;
        }
        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.14);
        }
        .review-avatar {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #0c8178;
            flex-shrink: 0;
        }
        .review-avatar-placeholder {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0c8178, #09ccbd);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.6rem;
            flex-shrink: 0;
        }
        .star-filled { color: #ffc107; }
        .star-empty  { color: #dee2e6; }
        .review-comment {
            font-style: italic;
            color: #555;
            line-height: 1.7;
            font-size: 0.95rem;
            white-space: pre-line;
            word-break: break-word;
        }
        .review-meta { font-size: 0.82rem; color: #888; }
        .review-badge {
            background: linear-gradient(135deg, #0c8178, #09ccbd);
            color: white;
            font-size: 0.75rem;
            padding: 3px 10px;
            border-radius: 20px;
        }
        .btn-branding {
            background: linear-gradient(135deg, #0c8178, #09ccbd);
            color: white;
            border: none;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-branding:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(12,129,120,0.4);
            color: white;
        }
        .stats-strip {
            background: linear-gradient(135deg, #0c8178, #09ccbd);
            color: white;
            padding: 40px 0;
        }
        .empty-state {
            padding: 80px 20px;
            text-align: center;
        }
        .empty-state i {
            font-size: 4rem;
            color: #dee2e6;
            margin-bottom: 20px;
        }
        .btn-banner-cta {
            background: white;
            color: #0c8178;
            border: none;
            padding: 14px 38px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.05rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 24px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.25);
            cursor: pointer;
            animation: pulse-cta 2.5s infinite;
        }
        .btn-banner-cta:hover {
            background: #0c8178;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.35);
        }
        @keyframes pulse-cta {
            0%   { box-shadow: 0 0 0 0 rgba(255,255,255,0.55); }
            70%  { box-shadow: 0 0 0 14px rgba(255,255,255,0); }
            100% { box-shadow: 0 0 0 0 rgba(255,255,255,0); }
        }
        .cta-invite-strip {
            background: #fff;
            border-left: 5px solid #0c8178;
            border-radius: 12px;
            padding: 22px 28px;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            box-shadow: 0 2px 14px rgba(12,129,120,0.12);
        }
    </style>

    {{-- BANNER --}}
    <section class="banner-social" style="background-image: url('{{ asset('img/full/reviews-background-Pachatusantrek.jpeg') }}')">
        <div class="banner-content">
            <div class="banner-flex-row">
                <div class="banner-text-col">
                    <h1>Reseñas</h1>
                    <h5>Lo que dicen nuestros aventureros sobre sus experiencias en los Andes</h5>
                </div>
                <button class="btn-banner-cta" data-bs-toggle="modal" data-bs-target="#reviewModalEs">
                    <i class="fas fa-pen me-2"></i>Dejar Reseña
                </button>
            </div>
            <br>
            <a href="#resenas-section" class="scroll-down-btn" style="margin-top:18px">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>

    <style>
        .banner-flex-row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
        }
        .banner-text-col {
            flex: 1;
            min-width: 200px;
        }
        .banner-text-col h1 {
            margin-bottom: 8px;
        }
        .banner-text-col h5 {
            margin-bottom: 0;
            opacity: 0.9;
        }
        .banner-flex-row .btn-banner-cta {
            margin-top: -18px;
            margin-right: -10px;
            flex-shrink: 0;
        }
        @media (max-width: 575.98px) {
            .banner-flex-row {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 16px;
            }
            .banner-flex-row .btn-banner-cta {
                margin-top: 0;
                margin-right: 0;
            }
        }
    </style>

    {{-- ESTADÍSTICAS --}}
    @php
        $total     = $reviews->count();
        $avgRating = $total > 0 ? round($reviews->avg('rating'), 1) : 0;
        $fiveStar  = $reviews->where('rating', 5)->count();
    @endphp
    <section class="stats-strip">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <h2 class="fw-bold mb-0">{{ $total }}</h2>
                    <p class="mb-0 opacity-75">Total de Reseñas</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold mb-0">{{ $avgRating }} <i class="fas fa-star fa-sm"></i></h2>
                    <p class="mb-0 opacity-75">Calificación Promedio</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold mb-0">{{ $fiveStar }}</h2>
                    <p class="mb-0 opacity-75">Reseñas de 5 Estrellas</p>
                </div>
            </div>
        </div>
    </section>

    {{-- GRILLA DE RESEÑAS --}}
    <section class="py-5 bg-light" id="resenas-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="dancingShow">Lo Que Dicen Nuestros Viajeros</h2>
                <p class="text-muted mt-2">Experiencias auténticas compartidas por nuestros clientes</p>
            </div>

            {{-- FRANJA INVITACIÓN --}}
            <div class="cta-invite-strip">
                <div>
                    <h5 class="fw-bold mb-1 text-dark"><i class="fas fa-star me-2" style="color:#ffc107"></i>¡Comparte tu experiencia con nosotros!</h5>
                    <p class="mb-0 text-muted">Tu reseña ayuda a otros viajeros a elegir su aventura perfecta en los Andes.</p>
                </div>
                <button class="btn btn-branding flex-shrink-0" data-bs-toggle="modal" data-bs-target="#reviewModalEs">
                    <i class="fas fa-pen me-2"></i>Dejar una Reseña
                </button>
            </div>

            @if($reviews->isEmpty())
                <div class="empty-state">
                    <i class="fas fa-comments"></i>
                    <h4 class="text-muted">Aún no hay reseñas</h4>
                    <p class="text-muted">¡Sé el primero en compartir tu experiencia con nosotros!</p>
                </div>
            @else
                <div class="row g-4">
                    @foreach($reviews as $review)
                        <div class="col-md-6 col-lg-4">
                            <div class="review-card p-4">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    @if($review->image)
                                        <img src="{{ asset($review->image) }}" alt="{{ $review->name }}" class="review-avatar">
                                    @else
                                        <div class="review-avatar-placeholder">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <h6 class="mb-0 fw-bold">{{ $review->name }}</h6>
                                        <div class="my-1">
                                            @for($i = 0; $i < 5; $i++)
                                                <i class="fas fa-star fa-sm {{ $i < $review->rating ? 'star-filled' : 'star-empty' }}"></i>
                                            @endfor
                                        </div>
                                        <span class="review-badge">{{ $review->rating }}/5</span>
                                    </div>
                                </div>

                                <p class="review-comment mb-3">&ldquo;{{ trim($review->comment) }}&rdquo;</p>

                                <div class="review-meta d-flex flex-wrap gap-3 pt-3 border-top">
                                    @if($review->travel_date)
                                        <span>
                                            <i class="far fa-calendar-alt me-1 text-primary"></i>
                                            {{ $review->travel_date->format('M Y') }}
                                        </span>
                                    @endif
                                    @if($review->travel_with)
                                        <span>
                                            <i class="fas fa-users me-1 text-primary"></i>
                                            {{ $review->travel_with }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-5">
                    <p class="text-muted mb-3">¿Tuviste una gran experiencia con nosotros? ¡Nos encantaría saberlo!</p>
                    <button class="btn btn-branding" data-bs-toggle="modal" data-bs-target="#reviewModalEs">
                        <i class="fas fa-pen me-2"></i>Dejar una Reseña
                    </button>
                </div>
            @endif
        </div>
    </section>

    {{-- MODAL DE RESEÑA --}}
    <div class="modal fade" id="reviewModalEs" tabindex="-1" aria-labelledby="reviewModalEsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_rendered_at" value="{{ time() }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalEsLabel">
                            <i class="fas fa-pen me-2 text-primary"></i>Comparte Tu Experiencia
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <div style="position:absolute; left:-9999px; top:-9999px" aria-hidden="true">
                            <label for="websiteEs">Deja este campo vacío</label>
                            <input type="text" id="websiteEs" name="website" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nameEs" class="form-label fw-semibold">Nombre Completo</label>
                                <input type="text" class="form-control" id="nameEs" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="travel_dateEs" class="form-label fw-semibold">Fecha de Viaje</label>
                                <input type="date" class="form-control" id="travel_dateEs" name="travel_date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="travel_withEs" class="form-label fw-semibold">Viajó Con</label>
                                <input type="text" class="form-control" id="travel_withEs" name="travel_with"
                                    placeholder="Familia, amigos, pareja..." required>
                            </div>
                            <div class="col-md-6">
                                <label for="ratingEs" class="form-label fw-semibold">Calificación</label>
                                <select class="form-select" id="ratingEs" name="rating" required>
                                    <option value="5">⭐⭐⭐⭐⭐ – Excelente</option>
                                    <option value="4">⭐⭐⭐⭐ – Muy Bueno</option>
                                    <option value="3">⭐⭐⭐ – Bueno</option>
                                    <option value="2">⭐⭐ – Regular</option>
                                    <option value="1">⭐ – Malo</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="commentEs" class="form-label fw-semibold">Tu Comentario</label>
                                <textarea class="form-control" id="commentEs" name="comment" rows="4"
                                    placeholder="Cuéntanos sobre tu experiencia con Pachatusantrek..." required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="imageEs" class="form-label fw-semibold">Foto <span class="text-muted fw-normal">(Opcional)</span></label>
                                <input type="file" class="form-control" id="imageEs" name="image" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-top">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-branding">
                            <i class="fas fa-paper-plane me-2"></i>Enviar Reseña
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.review-flash-alert', ['locale' => 'es', 'modalId' => 'reviewModalEs'])
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion || typeof gsap === 'undefined') return;

    const btn = document.querySelector('.btn-banner-cta');
    if (!btn) return;

    const icon = btn.querySelector('i');

    // Entrance animation
    gsap.fromTo(btn,
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, ease: 'power3.out', delay: 0.4 }
    );

    // GSAP hover timeline
    const hoverTl = gsap.timeline({ paused: true, reversed: true });
    hoverTl
        .to(btn, {
            scale: 1.05,
            duration: 0.3,
            ease: 'power2.out',
            boxShadow: '0 8px 30px rgba(0,0,0,0.35)'
        })
        .to(icon, {
            rotation: -10,
            scale: 1.2,
            duration: 0.3,
            ease: 'back.out(1.7)'
        }, '-=0.1');

    btn.addEventListener('mouseenter', () => hoverTl.play());
    btn.addEventListener('mouseleave', () => hoverTl.reverse());
});
</script>
@endpush
