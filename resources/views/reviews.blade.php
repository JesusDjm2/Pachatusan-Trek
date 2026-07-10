@extends('layouts.admin')
@section('metas')
    <meta name="description" content="Read authentic reviews from our travelers. Discover what our clients say about their experiences with Pachatusantrek in Peru.">
    <meta name="keywords" content="reviews, testimonials, Pachatusantrek, Peru tours, travel reviews">
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
        .banner-text-col h1 { margin-bottom: 8px; }
        .banner-text-col h5 { margin-bottom: 0; opacity: 0.9; }
        .banner-flex-row .btn-banner-cta {
            margin-top: -18px;
            margin-right: -10px;
            flex-shrink: 0;
        }
        @media (max-width: 575.98px) {
            .banner-flex-row { flex-direction: column; align-items: center; text-align: center; gap: 16px; }
            .banner-flex-row .btn-banner-cta { margin-top: 0; margin-right: 0; }
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
                    <h1>Reviews</h1>
                    <h5>What our adventurers say about their experiences in the Andes</h5>
                </div>
                <button class="btn-banner-cta" data-bs-toggle="modal" data-bs-target="#reviewModal">
                    <i class="fas fa-pen me-2"></i>Write a Review
                </button>
            </div>
            <br>
            <a href="#reviews-section" class="scroll-down-btn" style="margin-top:18px">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-down additional-arrow"></i>
                <i class="fas fa-chevron-down third-arrow"></i>
            </a>
        </div>
    </section>

    {{-- STATS --}}
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
                    <p class="mb-0 opacity-75">Total Reviews</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold mb-0">{{ $avgRating }} <i class="fas fa-star fa-sm"></i></h2>
                    <p class="mb-0 opacity-75">Average Rating</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold mb-0">{{ $fiveStar }}</h2>
                    <p class="mb-0 opacity-75">5-Star Reviews</p>
                </div>
            </div>
        </div>
    </section>

    {{-- REVIEWS GRID --}}
    <section class="py-5 bg-light" id="reviews-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="dancingShow">What Our Travelers Say</h2>
                <p class="text-muted mt-2">Authentic experiences shared by our clients</p>
            </div>

            {{-- CTA STRIP --}}
            <div class="cta-invite-strip">
                <div>
                    <h5 class="fw-bold mb-1 text-dark"><i class="fas fa-star me-2" style="color:#ffc107"></i>Share your experience with us!</h5>
                    <p class="mb-0 text-muted">Your review helps other travelers choose their perfect adventure in the Andes.</p>
                </div>
                <button class="btn btn-branding flex-shrink-0" data-bs-toggle="modal" data-bs-target="#reviewModal">
                    <i class="fas fa-pen me-2"></i>Write a Review
                </button>
            </div>

            @if($reviews->isEmpty())
                <div class="empty-state">
                    <i class="fas fa-comments"></i>
                    <h4 class="text-muted">No reviews yet</h4>
                    <p class="text-muted">Be the first to share your experience with us!</p>
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
                    <p class="text-muted mb-3">Had a great experience with us? We'd love to hear from you!</p>
                    <button class="btn btn-branding" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="fas fa-pen me-2"></i>Write a Review
                    </button>
                </div>
            @endif
        </div>
    </section>

    {{-- MODAL --}}
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_rendered_at" value="{{ time() }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">
                            <i class="fas fa-pen me-2 text-primary"></i>Share Your Experience
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div style="position:absolute; left:-9999px; top:-9999px" aria-hidden="true">
                            <label for="website">Leave this field empty</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="travel_date" class="form-label fw-semibold">Travel Date</label>
                                <input type="date" class="form-control" id="travel_date" name="travel_date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="travel_with" class="form-label fw-semibold">Traveled With</label>
                                <input type="text" class="form-control" id="travel_with" name="travel_with"
                                    placeholder="Family, friends, couple..." required>
                            </div>
                            <div class="col-md-6">
                                <label for="rating" class="form-label fw-semibold">Rating</label>
                                <select class="form-select" id="rating" name="rating" required>
                                    <option value="5">⭐⭐⭐⭐⭐ – Excellent</option>
                                    <option value="4">⭐⭐⭐⭐ – Very Good</option>
                                    <option value="3">⭐⭐⭐ – Good</option>
                                    <option value="2">⭐⭐ – Fair</option>
                                    <option value="1">⭐ – Poor</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="comment" class="form-label fw-semibold">Your Comment</label>
                                <textarea class="form-control" id="comment" name="comment" rows="4"
                                    placeholder="Tell us about your experience with Pachatusantrek..." required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="image" class="form-label fw-semibold">Photo <span class="text-muted fw-normal">(Optional)</span></label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-top">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-branding">
                            <i class="fas fa-paper-plane me-2"></i>Submit Review
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.review-flash-alert', ['locale' => 'en'])
@endsection
