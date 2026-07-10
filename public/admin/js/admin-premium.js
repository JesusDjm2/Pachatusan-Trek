(function () {
    'use strict';

    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function initGsap() {
        if (reduced || typeof gsap === 'undefined') return;
        // La página de reseñas tiene sus propias animaciones (reviews-admin.js)
        if (document.querySelector('.rv-admin')) return;

        var tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        if (document.querySelector('.adm-sidebar')) {
            tl.from('.adm-sidebar .nav-item', {
                x: -16,
                opacity: 0,
                duration: 0.4,
                stagger: 0.04,
                clearProps: 'transform',
            });
        }

        tl.from('.adm-topbar', { y: -12, opacity: 0, duration: 0.4, clearProps: 'transform' }, '-=0.2')
            .from('.adm-page > .adm-dashboard, .adm-page > .rv-admin, .adm-page > .container-fluid, .adm-page > .container, .adm-page > .row', {
                y: 20,
                opacity: 0,
                duration: 0.45,
                stagger: 0.06,
                clearProps: 'transform',
            }, '-=0.15')
            .from('.adm-page .card, .adm-page .rv-panel, .adm-page .rv-stat, .adm-dash-card', {
                y: 16,
                opacity: 0,
                duration: 0.4,
                stagger: 0.05,
                clearProps: 'transform',
            }, '-=0.2')
            .from('.adm-page table tbody tr, .adm-page .rv-card', {
                opacity: 0,
                y: 10,
                duration: 0.3,
                stagger: 0.03,
                clearProps: 'transform',
            }, '-=0.15');
    }

    function initSearchTables() {
        document.querySelectorAll('#buscador, #rv-buscador').forEach(function (input) {
            if (input.id === 'rv-buscador') return;

            input.addEventListener('keyup', function () {
                var q = this.value.toLowerCase();
                var table = document.getElementById('tabladatos');
                if (!table) return;

                table.querySelectorAll('tbody tr').forEach(function (row) {
                    var nombre = row.querySelector('.nombre');
                    var slug = row.querySelector('.slug');
                    var text = (
                        (nombre ? nombre.textContent : row.textContent) +
                        (slug ? slug.textContent : '')
                    ).toLowerCase();

                    row.style.display = !q || text.indexOf(q) !== -1 ? '' : 'none';
                });
            });
        });
    }

    function initToastDismiss() {
        document.querySelectorAll('[data-adm-dismiss]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var toast = btn.closest('.adm-toast');
                if (!toast) return;
                if (typeof gsap !== 'undefined' && !reduced) {
                    gsap.to(toast, {
                        opacity: 0,
                        y: -8,
                        duration: 0.25,
                        onComplete: function () { toast.remove(); },
                    });
                } else {
                    toast.remove();
                }
            });
        });
    }

    function initCounters() {
        document.querySelectorAll('[data-adm-count]').forEach(function (el) {
            var target = parseInt(el.getAttribute('data-adm-count'), 10) || 0;
            if (reduced || typeof gsap === 'undefined') {
                el.textContent = target;
                return;
            }
            var obj = { val: 0 };
            gsap.to(obj, {
                val: target,
                duration: 1.1,
                ease: 'power2.out',
                onUpdate: function () {
                    el.textContent = Math.round(obj.val);
                },
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initGsap();
        initSearchTables();
        initToastDismiss();
        initCounters();
    });
})();
