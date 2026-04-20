@extends('layouts.admin')
@section('contenido')

    {{-- BANNER --}}
    <section class="banner-glamping">
        <div class="banner-content container">
            <h1>Glamping Reviews</h1>
            <p>What our adventurers say about their experience in the Andes</p>
            <a href="#reviews-section" class="scroll-down-btn">
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
        $total   = $reviews->count();
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
                <h2 class="dancingShow">What Our Adventurers Say</h2>
                <p class="text-muted mt-2">Authentic experiences shared by our trekkers</p>
            </div>

            @if($reviews->isEmpty())
                <div class="empty-state">
                    <i class="fas fa-comments"></i>
                    <h4 class="text-muted">No reviews yet</h4>
                    <p class="text-muted">Be the first to share your glamping experience!</p>
                    <button class="btn btn-branding mt-3" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="fas fa-pen me-2"></i>Leave a Review
                    </button>
                </div>
            @else
                <div class="row g-4">
                    @foreach($reviews as $review)
                        <div class="col-md-6 col-lg-4">
                            <div class="review-card p-4">
                                {{-- Header --}}
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

                                {{-- Comment --}}
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
                    <p class="text-muted mb-3">Had a great experience with us? We'd love to hear from you!</p>
                    <button class="btn btn-branding" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="fas fa-pen me-2"></i>Leave a Review
                    </button>
                </div>
            @endif
        </div>
    </section>

    {{-- REVIEW MODAL --}}
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">
                            <i class="fas fa-pen me-2 text-primary"></i>Share Your Experience
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- SweetAlert is triggered on load below --}}
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
                                    placeholder="Tell us about your glamping experience..." required></textarea>
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('flash') && session('flash.type') === 'success')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: '\uD83C\uDF89 Thank you!',
                html: '<p style="font-size:1rem;color:#444;line-height:1.7">Your review has been submitted successfully!<br><strong>Our team will review it</strong> and it will soon be visible on our page.<br><br><em>Thank you for your contribution! \uD83C\uDFD4\uFE0F</em></p>',
                confirmButtonText: 'Got it!',
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
