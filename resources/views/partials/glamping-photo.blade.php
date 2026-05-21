{{--
  Espacio para imagen: pasá path cuando tengas el archivo en public/, ej:
  @include('partials.glamping-photo', ['label' => 'Carpa REI', 'path' => 'img/glamping/carpa-rei.jpg', 'alt' => 'Carpa', 'caption' => 'Opcional'])
--}}
@php
    $gLabel = $label ?? 'Photo';
    $gPath = $path ?? null;
    $gAlt = $alt ?? $gLabel;
    $gCaption = $caption ?? null;
@endphp
<figure class="glamping-figure w-100 mb-0 not-prose">
    @if($gPath)
        <img src="{{ asset($gPath) }}" class="img-fluid rounded-4 shadow w-100" alt="{{ $gAlt }}"
            style="object-fit: cover; max-height: 28rem; width: 100%;" loading="lazy">
        @if($gCaption)
            <figcaption class="small text-secondary text-center mt-2 mb-0">{{ $gCaption }}</figcaption>
        @endif
    @else
        <div class="glamping-photo-placeholder rounded-4 w-100 d-flex flex-column align-items-center justify-content-center p-3 p-md-4 text-center not-prose"
            style="min-height: 12rem; background: linear-gradient(160deg, #f4f6f8 0%, #e2e6ea 100%); border: 2px dashed #9aa0a6;">
            <i class="fas fa-camera text-secondary opacity-50 mb-2" style="font-size:1.6rem" aria-hidden="true"></i>
            <span class="fw-semibold text-secondary small px-2 text-wrap">{{ $gLabel }}</span>
        </div>
    @endif
</figure>
