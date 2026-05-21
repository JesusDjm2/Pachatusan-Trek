@php
    $toEs = request()->routeIs('glampingen', 'glamping.reviews');
    $otherLabel = $toEs ? 'Español' : 'English';
    $otherTitle = $toEs ? 'Ver la misma página en español' : 'View this page in English';
@endphp
<p class="mb-0 mt-2 small glamp-lang-pill" lang="{{ $toEs ? 'es' : 'en' }}">
    <a href="{{ $routeToOtherLang ?? '#' }}"
        class="text-white text-decoration-none glamp-lang-link d-inline-flex align-items-center gap-1 px-3 py-1 rounded-pill"
        style="background: rgba(0,0,0,.2); border: 1px solid rgba(255,255,255,.25);"
        title="{{ $otherTitle }}">
        <i class="fas fa-language" aria-hidden="true"></i>
        <span>{{ $otherLabel }}</span>
    </a>
</p>
