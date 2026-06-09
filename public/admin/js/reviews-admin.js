(function () {
    'use strict';

    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function animateCounters() {
        document.querySelectorAll('[data-rv-count]').forEach(function (el) {
            var target = parseInt(el.getAttribute('data-rv-count'), 10) || 0;
            if (prefersReducedMotion || typeof gsap === 'undefined') {
                el.textContent = target;
                return;
            }
            var obj = { val: 0 };
            gsap.to(obj, {
                val: target,
                duration: 1.2,
                ease: 'power2.out',
                onUpdate: function () {
                    el.textContent = Math.round(obj.val);
                },
            });
        });
    }

    function initEntrance() {
        if (prefersReducedMotion || typeof gsap === 'undefined') return;

        var targets = '.rv-header, .adm-toast, .rv-stat, .rv-toolbar, .rv-panel, .rv-table tbody tr, .rv-card';
        gsap.set(targets, { clearProps: 'opacity,transform,visibility' });

        var tl = gsap.timeline({
            defaults: { ease: 'power3.out' },
            onComplete: function () {
                gsap.set(targets, { clearProps: 'all' });
            },
        });

        tl.from('.rv-header', { y: 24, autoAlpha: 0, duration: 0.55 })
            .from('.adm-toast, .rv-toast', { y: -12, autoAlpha: 0, duration: 0.4 }, '-=0.2')
            .from('.rv-stat', { y: 28, autoAlpha: 0, duration: 0.5, stagger: 0.1 }, '-=0.15')
            .from('.rv-toolbar', { y: 20, autoAlpha: 0, duration: 0.45 }, '-=0.2')
            .from('.rv-panel', { y: 24, autoAlpha: 0, duration: 0.5 }, '-=0.25')
            .from('.rv-table tbody tr, .rv-card', {
                y: 16,
                autoAlpha: 0,
                duration: 0.4,
                stagger: 0.05,
            }, '-=0.2');
    }

    function initSearch() {
        var input = document.getElementById('rv-buscador');
        if (!input) return;

        input.addEventListener('input', function () {
            var q = this.value.toLowerCase().trim();
            var rows = document.querySelectorAll('[data-rv-review]');
            var visible = 0;

            rows.forEach(function (row) {
                var text = (row.getAttribute('data-rv-search') || '').toLowerCase();
                var match = !q || text.indexOf(q) !== -1;
                row.classList.toggle(row.classList.contains('rv-card') ? 'rv-card-hidden' : 'rv-row-hidden', !match);
                if (match) visible++;
            });

            var empty = document.getElementById('rv-search-empty');
            if (empty) {
                empty.style.display = visible === 0 && q ? 'block' : 'none';
            }
        });
    }

    function initConfirmDialog() {
        var overlay = document.getElementById('rvConfirmOverlay');
        if (!overlay) return;

        document.body.appendChild(overlay);

        var titleEl = document.getElementById('rvConfirmTitle');
        var bodyEl = document.getElementById('rvConfirmBody');
        var iconEl = document.getElementById('rvConfirmIcon');
        var confirmBtn = document.getElementById('rvConfirmBtn');
        var cancelBtn = document.getElementById('rvConfirmCancel');
        var closeBtn = document.getElementById('rvConfirmClose');
        var pendingForm = null;

        function closeDialog() {
            overlay.classList.remove('is-open');
            overlay.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('rv-confirm-open');
            pendingForm = null;
        }

        function openDialog() {
            overlay.classList.add('is-open');
            overlay.setAttribute('aria-hidden', 'false');
            document.body.classList.add('rv-confirm-open');
            if (cancelBtn) cancelBtn.focus();
        }

        var backdrop = document.getElementById('rvConfirmBackdrop');

        function onBackdropClick(e) {
            if (e.target === overlay || e.target === backdrop) {
                closeDialog();
            }
        }

        document.querySelectorAll('[data-rv-confirm]').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                pendingForm = btn.closest('form');
                if (!pendingForm || !titleEl || !bodyEl || !iconEl || !confirmBtn) return;

                var action = btn.getAttribute('data-rv-confirm');
                var name = btn.getAttribute('data-rv-name') || 'esta reseña';

                if (action === 'approve') {
                    titleEl.textContent = '¿Aprobar reseña?';
                    bodyEl.innerHTML = 'La reseña de <strong>' + name + '</strong> será visible públicamente en la web.';
                    iconEl.className = 'rv-modal__icon rv-modal__icon--approve';
                    iconEl.innerHTML = '<i class="fas fa-check"></i>';
                    confirmBtn.className = 'btn btn-confirm';
                    confirmBtn.textContent = 'Aprobar y publicar';
                } else if (action === 'hide') {
                    titleEl.textContent = '¿Ocultar reseña?';
                    bodyEl.innerHTML = 'La reseña de <strong>' + name + '</strong> dejará de mostrarse en la web.';
                    iconEl.className = 'rv-modal__icon rv-modal__icon--hide';
                    iconEl.innerHTML = '<i class="fas fa-eye-slash"></i>';
                    confirmBtn.className = 'btn btn-confirm';
                    confirmBtn.textContent = 'Ocultar';
                } else {
                    titleEl.textContent = '¿Eliminar reseña?';
                    bodyEl.innerHTML = 'Se eliminará permanentemente la reseña de <strong>' + name + '</strong>. Esta acción no se puede deshacer.';
                    iconEl.className = 'rv-modal__icon rv-modal__icon--delete';
                    iconEl.innerHTML = '<i class="fas fa-trash-alt"></i>';
                    confirmBtn.className = 'btn btn-confirm btn-confirm--danger';
                    confirmBtn.textContent = 'Eliminar';
                }

                openDialog();
            });
        });

        if (confirmBtn) {
            confirmBtn.addEventListener('click', function () {
                if (pendingForm) {
                    pendingForm.submit();
                }
                closeDialog();
            });
        }

        if (cancelBtn) cancelBtn.addEventListener('click', closeDialog);
        if (closeBtn) closeBtn.addEventListener('click', closeDialog);
        overlay.addEventListener('click', onBackdropClick);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && overlay.classList.contains('is-open')) {
                closeDialog();
            }
        });
    }

    function initToastDismiss() {
        document.querySelectorAll('[data-rv-dismiss]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var toast = btn.closest('.rv-toast');
                if (!toast) return;
                if (typeof gsap !== 'undefined' && !prefersReducedMotion) {
                    gsap.to(toast, {
                        opacity: 0,
                        y: -10,
                        duration: 0.3,
                        onComplete: function () { toast.remove(); },
                    });
                } else {
                    toast.remove();
                }
            });
        });
    }

    function cleanupBootstrapModalArtifacts() {
        document.querySelectorAll('.modal-backdrop').forEach(function (el) {
            el.remove();
        });
        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('padding-right');
    }

    document.addEventListener('DOMContentLoaded', function () {
        cleanupBootstrapModalArtifacts();
        initEntrance();
        animateCounters();
        initSearch();
        initConfirmDialog();
        initToastDismiss();
    });
})();
