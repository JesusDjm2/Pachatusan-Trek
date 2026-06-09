@extends('layouts.app')
@section('hide_admin_flash', true)
@section('titulo', 'Gestión de Reseñas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/css/reviews-admin.css') }}">
@endpush

@section('contenido')
    <div class="rv-admin">

        {{-- Header --}}
        <header class="rv-header">
            <div>
                <div class="rv-header__badge">
                    <i class="fas fa-shield-alt"></i> Moderación
                </div>
                <h1 class="rv-header__title">Reseñas de clientes</h1>
                <p class="rv-header__subtitle">Aprueba, oculta o elimina comentarios enviados desde la web pública.</p>
            </div>
            <div class="rv-header__meta">
                <span class="rv-header__chip">
                    <i class="fas fa-clock"></i>
                    {{ now()->translatedFormat('d M Y') }}
                </span>
                @if (($stats['pending'] ?? 0) > 0)
                    <span class="rv-header__chip" style="color: var(--rv-warning);">
                        <i class="fas fa-bell"></i>
                        {{ $stats['pending'] }} pendiente{{ $stats['pending'] === 1 ? '' : 's' }}
                    </span>
                @endif
            </div>
        </header>

        @include('partials.admin.flash')

        {{-- Stats --}}
        <div class="rv-stats">
            <div class="rv-stat rv-stat--total">
                <div class="rv-stat__icon"><i class="fas fa-layer-group"></i></div>
                <div>
                    <div class="rv-stat__label">Total</div>
                    <div class="rv-stat__value" data-rv-count="{{ $stats['total'] ?? $reviews->count() }}">0</div>
                </div>
            </div>
            <div class="rv-stat rv-stat--pending">
                <div class="rv-stat__icon"><i class="fas fa-hourglass-half"></i></div>
                <div>
                    <div class="rv-stat__label">Pendientes</div>
                    <div class="rv-stat__value" data-rv-count="{{ $stats['pending'] ?? 0 }}">0</div>
                </div>
            </div>
            <div class="rv-stat rv-stat--approved">
                <div class="rv-stat__icon"><i class="fas fa-globe-americas"></i></div>
                <div>
                    <div class="rv-stat__label">Publicadas</div>
                    <div class="rv-stat__value" data-rv-count="{{ $stats['approved'] ?? 0 }}">0</div>
                </div>
            </div>
        </div>

        {{-- Toolbar --}}
        <div class="rv-toolbar">
            <nav class="rv-filters" aria-label="Filtrar reseñas">
                <a href="{{ route('admin.reviews.index', ['status' => 'all']) }}"
                    class="rv-filters__link {{ ($status ?? 'all') === 'all' ? 'is-active' : '' }}">
                    Todas
                </a>
                <a href="{{ route('admin.reviews.index', ['status' => 'pending']) }}"
                    class="rv-filters__link {{ ($status ?? 'all') === 'pending' ? 'is-active' : '' }}">
                    Pendientes
                    @if (($stats['pending'] ?? 0) > 0)
                        <span class="rv-filters__count">{{ $stats['pending'] }}</span>
                    @endif
                </a>
                <a href="{{ route('admin.reviews.index', ['status' => 'approved']) }}"
                    class="rv-filters__link {{ ($status ?? 'all') === 'approved' ? 'is-active' : '' }}">
                    Aprobadas
                </a>
            </nav>
            <div class="rv-search">
                <i class="fas fa-search rv-search__icon"></i>
                <input type="search" id="rv-buscador" class="rv-search__input"
                    placeholder="Buscar por nombre, comentario o acompañante…"
                    aria-label="Buscar reseñas" autocomplete="off">
            </div>
        </div>

        {{-- Panel --}}
        <div class="rv-panel">
            <div class="rv-panel__head">
                <h2 class="rv-panel__title">
                    <i class="fas fa-comments"></i>
                    Listado de reseñas
                </h2>
                <span class="rv-panel__count">{{ $reviews->count() }} resultado{{ $reviews->count() === 1 ? '' : 's' }}</span>
            </div>

            @if ($reviews->isEmpty())
                <div class="rv-empty">
                    <div class="rv-empty__icon"><i class="fas fa-inbox"></i></div>
                    <div class="rv-empty__title">
                        @if (($status ?? 'all') === 'pending')
                            Sin reseñas pendientes
                        @elseif (($status ?? 'all') === 'approved')
                            Sin reseñas publicadas
                        @else
                            Aún no hay reseñas
                        @endif
                    </div>
                    <p class="rv-empty__text">
                        @if (($status ?? 'all') === 'pending')
                            Cuando un cliente envíe una reseña desde la web, aparecerá aquí para tu aprobación.
                        @elseif (($status ?? 'all') === 'approved')
                            Las reseñas aprobadas se muestran en la página pública del sitio.
                        @else
                            Los comentarios enviados desde el formulario web llegarán a este panel.
                        @endif
                    </p>
                </div>
            @else
                {{-- Desktop table --}}
                <div class="rv-table-wrap">
                    <table class="rv-table" id="rv-tabla">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Calificación</th>
                                <th>Comentario</th>
                                <th>Fecha de viaje</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review)
                                @php
                                    $searchText = strtolower($review->name . ' ' . $review->travel_with . ' ' . $review->comment);
                                @endphp
                                <tr data-rv-review data-rv-search="{{ e($searchText) }}">
                                    <td>
                                        <div class="rv-client nombre">
                                            @if ($review->image)
                                                <img src="{{ asset($review->image) }}" alt="{{ $review->name }}" class="rv-avatar">
                                            @else
                                                <div class="rv-avatar rv-avatar--placeholder">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            @endif
                                            <div>
                                                <div class="rv-client__name">{{ $review->name }}</div>
                                                <div class="rv-client__meta">Con: {{ $review->travel_with }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rv-stars" aria-label="{{ $review->rating }} de 5 estrellas">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="fa{{ $i < $review->rating ? 's' : 'r' }} fa-star"></i>
                                            @endfor
                                        </div>
                                    </td>
                                    <td class="comentario">
                                        <div class="rv-comment">{{ trim($review->comment) }}</div>
                                    </td>
                                    <td>
                                        <div class="rv-date">
                                            {{ $review->travel_date ? $review->travel_date->format('d/m/Y') : 'N/A' }}
                                            <small>Enviada {{ $review->created_at->diffForHumans() }}</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        @if ($review->is_public)
                                            <span class="rv-status rv-status--approved">
                                                <i class="fas fa-check-circle"></i> Aprobado
                                            </span>
                                        @else
                                            <span class="rv-status rv-status--pending">Pendiente</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="rv-actions">
                                            <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="button"
                                                    class="rv-btn-action {{ $review->is_public ? 'rv-btn-action--hide' : 'rv-btn-action--approve' }}"
                                                    title="{{ $review->is_public ? 'Ocultar de la web' : 'Aprobar y publicar' }}"
                                                    data-rv-confirm="{{ $review->is_public ? 'hide' : 'approve' }}"
                                                    data-rv-name="{{ $review->name }}">
                                                    <i class="fas fa-{{ $review->is_public ? 'eye-slash' : 'check' }}"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="rv-btn-action rv-btn-action--delete"
                                                    title="Eliminar reseña"
                                                    data-rv-confirm="delete"
                                                    data-rv-name="{{ $review->name }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Mobile cards --}}
                <div class="rv-cards">
                    @foreach ($reviews as $review)
                        @php
                            $searchText = strtolower($review->name . ' ' . $review->travel_with . ' ' . $review->comment);
                        @endphp
                        <article class="rv-card" data-rv-review data-rv-search="{{ e($searchText) }}">
                            <div class="rv-card__top">
                                @if ($review->image)
                                    <img src="{{ asset($review->image) }}" alt="{{ $review->name }}" class="rv-avatar">
                                @else
                                    <div class="rv-avatar rv-avatar--placeholder">
                                        <i class="fas fa-user"></i>
                                    </div>
                                @endif
                                <div class="rv-flex-1">
                                    <div class="rv-client__name">{{ $review->name }}</div>
                                    <div class="rv-client__meta mb-1">Con: {{ $review->travel_with }}</div>
                                    <div class="rv-stars">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa{{ $i < $review->rating ? 's' : 'r' }} fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                @if ($review->is_public)
                                    <span class="rv-status rv-status--approved">Aprobado</span>
                                @else
                                    <span class="rv-status rv-status--pending">Pendiente</span>
                                @endif
                            </div>
                            <div class="rv-card__body comentario">
                                <div class="rv-comment" style="max-width: none;">{{ trim($review->comment) }}</div>
                            </div>
                            <div class="rv-card__footer">
                                <div class="rv-date">
                                    {{ $review->travel_date ? $review->travel_date->format('d/m/Y') : 'N/A' }}
                                    <small>{{ $review->created_at->diffForHumans() }}</small>
                                </div>
                                <div class="rv-card__actions">
                                    <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="button"
                                            class="rv-btn-action {{ $review->is_public ? 'rv-btn-action--hide' : 'rv-btn-action--approve' }}"
                                            data-rv-confirm="{{ $review->is_public ? 'hide' : 'approve' }}"
                                            data-rv-name="{{ $review->name }}">
                                            <i class="fas fa-{{ $review->is_public ? 'eye-slash' : 'check' }}"></i>
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="rv-btn-action rv-btn-action--delete"
                                            data-rv-confirm="delete"
                                            data-rv-name="{{ $review->name }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div id="rv-search-empty" class="rv-empty" style="display: none;">
                    <div class="rv-empty__icon"><i class="fas fa-search"></i></div>
                    <div class="rv-empty__title">Sin resultados</div>
                    <p class="rv-empty__text">Prueba con otro nombre o fragmento del comentario.</p>
                </div>
            @endif
        </div>
    </div>

@endsection

@push('modals')
    @include('partials.admin.reviews-confirm-modal')
@endpush

@push('scripts')
    <script src="{{ asset('admin/js/reviews-admin.js') }}"></script>
@endpush
