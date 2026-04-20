@extends('layouts.admines')
@section('contenido')

    {{-- BANNER --}}
    <section class="banner-glamping">
        <div class="banner-content container">
            <h1>Reseñas de Glamping</h1>
            <p>Lo que dicen nuestros aventureros sobre su experiencia en los Andes</p>
            <a href="#resenas-section" class="scroll-down-btn">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>

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
        }
        .star-filled { color: #ffc107; }
        .star-empty  { color: #dee2e6; }
        .review-comment {
            font-style: italic;
            color: #555;
            line-height: 1.7;
            font-size: 0.95rem;
        }
        .review-meta {
            font-size: 0.82rem;
            color: #888;
        }
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
    </style>

    {{-- STATS STRIP --}}
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

    {{-- REVIEWS GRID --}}
    <section class="py-5 bg-light" id="resenas-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="dancingShow">Lo Que Dicen Nuestros Aventureros</h2>
                <p class="text-muted mt-2">Experiencias auténticas compartidas por nuestros caminantes</p>
            </div>

            @if($reviews->isEmpty())
                <div class="empty-state">
                    <i class="fas fa-comments"></i>
                    <h4 class="text-muted">Aún no hay reseñas</h4>
                    <p class="text-muted">¡Sé el primero en compartir tu experiencia de glamping!</p>
                    <button class="btn btn-branding mt-3" data-bs-toggle="modal" data-bs-target="#reviewModalEs">
                        <i class="fas fa-pen me-2"></i>Dejar una Reseña
                    </button>
                </div>
            @else
                <div class="row g-4">
                    @foreach($reviews as $review)
                        <div class="col-md-6 col-lg-4">
                            <div class="review-card p-4">
                                {{-- Encabezado --}}
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    @if($review->image)
                                        <img src="{{ asset($review->image) }}" alt="{{ $review->name }}" class="review-avatar">
                                    @else
                                        <div class="review-avatar-placeholder flex-shrink-0">
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

                                {{-- Comentario --}}
                                <p class="review-comment mb-3">"{{ $review->comment }}"</p>

                                {{-- Meta --}}
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

                {{-- CTA --}}
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
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalEsLabel">
                            <i class="fas fa-pen me-2 text-primary"></i>Comparte Tu Experiencia
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        {{-- SweetAlert se dispara al cargar la página abajo --}}
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
                                    placeholder="Cuéntanos sobre tu experiencia de glamping..." required></textarea>
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('flash') && session('flash.type') === 'success')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: '\uD83C\uDF89 \u00a1Gracias!',
                html: '<p style="font-size:1rem;color:#444;line-height:1.7">\u00a1Tu rese\u00f1a fue enviada con \u00e9xito!<br><strong>Nuestro equipo la revisar\u00e1</strong> y pronto estar\u00e1 visible en nuestra p\u00e1gina.<br><br><em>\u00a1Gracias por tu aportaci\u00f3n! \uD83C\uDFD4\uFE0F</em></p>',
                confirmButtonText: '\u00a1Entendido!',
                confirmButtonColor: '#0c8178',
                background: '#fff',
                width: '480px',
                padding: '2.5rem',
                showClass: { popup: 'swal2-show' },
                hideClass: { popup: 'swal2-hide' }
            });
        });
    <\/script>
    @endif
@endpush
