@if (session('flash'))
    <div class="adm-toast adm-toast--{{ session('flash')['type'] == 'success' ? 'success' : 'danger' }}" role="alert">
        <div class="adm-toast__icon">
            <i class="fas fa-{{ session('flash')['type'] == 'success' ? 'check' : 'exclamation-triangle' }}"></i>
        </div>
        <div style="flex:1">{{ session('flash')['message'] }}</div>
        <button type="button" class="adm-toast__close" data-adm-dismiss aria-label="Cerrar">
            <i class="fas fa-times"></i>
        </button>
    </div>
@endif

@if (session('status'))
    <div class="adm-toast adm-toast--success" role="alert">
        <div class="adm-toast__icon">
            <i class="fas fa-check"></i>
        </div>
        <div style="flex:1">{{ session('status') }}</div>
        <button type="button" class="adm-toast__close" data-adm-dismiss aria-label="Cerrar">
            <i class="fas fa-times"></i>
        </button>
    </div>
@endif

@if (session('success'))
    <div class="adm-toast adm-toast--success" role="alert">
        <div class="adm-toast__icon">
            <i class="fas fa-check"></i>
        </div>
        <div style="flex:1">{{ session('success') }}</div>
        <button type="button" class="adm-toast__close" data-adm-dismiss aria-label="Cerrar">
            <i class="fas fa-times"></i>
        </button>
    </div>
@endif
