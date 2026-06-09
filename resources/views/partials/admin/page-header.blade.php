{{--
    Uso: @include('partials.admin.page-header', [
        'icon' => 'fa-route',
        'title' => 'Tours',
        'subtitle' => 'Gestión de tours en inglés',
        'badge' => 'EN', // opcional
        'actions' => '<a href="..." class="btn btn-primary">...</a>', // opcional, HTML
    ])
--}}
<header class="adm-header">
    <div class="adm-header__left">
        <div class="adm-header__icon">
            <i class="fas {{ $icon ?? 'fa-folder' }}"></i>
        </div>
        <div>
            <h1 class="adm-header__title">
                {{ $title }}
                @if (!empty($badge))
                    <small style="font-size: 0.55em; color: var(--adm-muted); font-weight: 600;">({{ $badge }})</small>
                @endif
            </h1>
            @if (!empty($subtitle))
                <p class="adm-header__subtitle">{{ $subtitle }}</p>
            @endif
        </div>
    </div>
    @if (!empty($actions))
        <div class="adm-header__actions">
            {!! $actions !!}
        </div>
    @endif
</header>
