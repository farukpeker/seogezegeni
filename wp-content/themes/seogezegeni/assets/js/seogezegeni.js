/**
 * SEO Gezegeni – Main JavaScript
 * Animasyonlar, sticky nav, hamburger menü, sayaç, slider, form
 */
(function ($) {
    'use strict';

    /* ============================================================
       DOCUMENT READY
       ============================================================ */
    $(function () {
        SG.init();
    });

    var SG = {

        /* --------------------------------------------------------
           INIT – tüm modülleri başlat
           -------------------------------------------------------- */
        init: function () {
            this.themeMode();
            this.stickyHeader();
            this.mobileMenu();
            this.scrollReveal();
            this.counterAnimation();
            this.metricBars();
            this.testimonialSlider();
            this.portfolioFilter();
            this.referenceLoadMore();
            this.auditForm();
            this.servicesDropdown();
            this.heroQuoteForm();
            this.contactForm();
            this.smoothScroll();
            this.aosInit();
            this.whatsappFloat();
            this.scrollTopButton();
            this.initFancybox();
        },

        /* --------------------------------------------------------
           THEME MODE
           -------------------------------------------------------- */
        themeMode: function () {
            var storageKey = 'sgThemeMode';
            var $toggles = $('[data-sg-theme-toggle]');
            var isLight = false;

            try {
                isLight = localStorage.getItem(storageKey) === 'light';
            } catch (e) {}

            function applyMode(light) {
                isLight = light;
                $('html, body').toggleClass('sg-theme-light', light);
                $toggles.attr('aria-pressed', light ? 'true' : 'false');
                $toggles.find('i')
                    .toggleClass('fa-moon', !light)
                    .toggleClass('fa-sun', light);

                try {
                    localStorage.setItem(storageKey, light ? 'light' : 'dark');
                } catch (e) {}
            }

            applyMode(isLight);

            $toggles.on('click.themeMode', function () {
                applyMode(!isLight);
            });
        },

        /* --------------------------------------------------------
           STICKY HEADER
           -------------------------------------------------------- */
        stickyHeader: function () {
            var $header   = $('#sg-header');
            var threshold = 80;

            function update() {
                if ($(window).scrollTop() > threshold) {
                    $header.addClass('scrolled');
                } else {
                    $header.removeClass('scrolled');
                }
            }

            update();
            $(window).on('scroll.stickyHeader', update);
        },

        /* --------------------------------------------------------
           MOBILE MENU
           -------------------------------------------------------- */
        mobileMenu: function () {
            var $hamburger = $('#sgHamburger');
            var $nav       = $('#sgMobileNav');
            var $overlay   = $('#sgMobileOverlay');
            var $close     = $('#sgMobileClose');
            var $body      = $('body');

            function openMenu() {
                $hamburger.addClass('active').attr('aria-expanded', 'true');
                $nav.addClass('open');
                $overlay.addClass('open');
                $body.css('overflow', 'hidden');
                $close.focus();
            }

            function closeMenu() {
                $hamburger.removeClass('active').attr('aria-expanded', 'false');
                $nav.removeClass('open');
                $overlay.removeClass('open');
                $body.css('overflow', '');
                $hamburger.focus();
            }

            $hamburger.on('click', function () {
                if ($nav.hasClass('open')) closeMenu();
                else openMenu();
            });

            $close.on('click', closeMenu);
            $overlay.on('click', closeMenu);

            /* ESC key */
            $(document).on('keydown.mobileMenu', function (e) {
                if (e.key === 'Escape' && $nav.hasClass('open')) closeMenu();
            });

            /* Sub-menu toggles */
            $('.sg-mobile-menu .menu-item-has-children > a').on('click', function (e) {
                var $sub = $(this).siblings('.sub-menu');
                if ($sub.length) {
                    e.preventDefault();
                    $sub.toggleClass('open');
                    $(this).find('i.fa-chevron-down').toggleClass('fa-rotate-180');
                }
            });

            /* Close on resize */
            $(window).on('resize.mobileMenu', function () {
                if ($(window).width() > 991) closeMenu();
            });
        },

        /* --------------------------------------------------------
           SCROLL REVEAL (Intersection Observer)
           -------------------------------------------------------- */
        scrollReveal: function () {
            if (!('IntersectionObserver' in window)) {
                /* Fallback: show all */
                $('[data-sg-reveal]').addClass('revealed');
                return;
            }

            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var $el    = $(entry.target);
                        var delay  = parseInt($el.data('delay') || 0, 10);
                        setTimeout(function () {
                            $el.addClass('revealed');
                        }, delay);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            $('[data-sg-reveal]').each(function () {
                observer.observe(this);
            });
        },

        /* --------------------------------------------------------
           COUNTER ANIMATION
           -------------------------------------------------------- */
        counterAnimation: function () {
            var $counters = $('.sg-counter');
            if (!$counters.length) return;

            var animated = false;

            function runCounters() {
                if (animated) return;
                $counters.each(function () {
                    var $el     = $(this);
                    var target  = parseInt($el.data('target'), 10);
                    var duration = 2000;
                    var start   = 0;
                    var step    = target / (duration / 16);

                    var timer = setInterval(function () {
                        start += step;
                        if (start >= target) {
                            $el.text(target);
                            clearInterval(timer);
                        } else {
                            $el.text(Math.floor(start));
                        }
                    }, 16);
                });
                animated = true;
            }

            /* Trigger when first counter is in viewport */
            if ('IntersectionObserver' in window) {
                var obs = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            runCounters();
                            obs.disconnect();
                        }
                    });
                }, { threshold: 0.3 });
                obs.observe($counters.first()[0]);
            } else {
                runCounters();
            }
        },

        /* --------------------------------------------------------
           METRIC PROGRESS BARS (hero card)
           -------------------------------------------------------- */
        metricBars: function () {
            var $bars = $('.sg-metric-fill');
            if (!$bars.length) return;

            if ('IntersectionObserver' in window) {
                var obs = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            var $fill = $(entry.target);
                            $fill.css('width', $fill.data('width') || '0%');
                            obs.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.3 });
                $bars.each(function () { obs.observe(this); });
            } else {
                $bars.each(function () {
                    $(this).css('width', $(this).data('width') || '0%');
                });
            }
        },

        /* --------------------------------------------------------
           TESTIMONIAL SLIDER
           -------------------------------------------------------- */
        testimonialSlider: function () {
            var $track  = $('#sgTesTrack');
            var $cards  = $track.children('.sg-tes-card');
            var $prev   = $('#sgTesPrev');
            var $next   = $('#sgTesNext');
            if (!$track.length) return;

            var current  = 0;
            var visible  = $(window).width() > 767 ? 2 : 1;

            function updateVisible() {
                visible = $(window).width() > 767 ? 2 : 1;
            }

            function goTo(idx) {
                var max = Math.ceil($cards.length / visible) - 1;
                current = Math.max(0, Math.min(idx, max));
                var targetCard = $cards.eq(current * visible)[0];
                var px = targetCard ? targetCard.offsetLeft : 0;
                $track.css({
                    'transform': 'translateX(-' + px + 'px)',
                    'transition': 'transform .5s cubic-bezier(.4,0,.2,1)'
                });
                $prev.prop('disabled', current === 0);
                $next.prop('disabled', current >= max);
            }

            $track.css('display', 'flex');
            $cards.css({
                'min-width': 'calc(' + (100 / visible) + '% - 12px)',
                'flex-shrink': '0'
            });

            $prev.on('click', function () { goTo(current - 1); });
            $next.on('click', function () { goTo(current + 1); });

            /* Auto-play */
            var autoPlay = setInterval(function () {
                var max = Math.ceil($cards.length / visible) - 1;
                goTo(current >= max ? 0 : current + 1);
            }, 5000);

            $track.on('mouseenter', function () { clearInterval(autoPlay); });

            $(window).on('resize.tesSlider', function () {
                updateVisible();
                $cards.css('min-width', 'calc(' + (100 / visible) + '% - 12px)');
                goTo(0);
            });

            goTo(0);
        },

        /* --------------------------------------------------------
           PORTFOLIO FILTER
           -------------------------------------------------------- */
        portfolioFilter: function () {
            var $btns  = $('.sg-filter-btn');
            var $items = $('#sgPortfolioGrid').children('.sg-portfolio-item');
            if (!$btns.length) return;

            $btns.on('click', function () {
                var filter = $(this).data('filter');
                $btns.removeClass('active').attr('aria-selected', 'false');
                $(this).addClass('active').attr('aria-selected', 'true');

                $items.each(function () {
                    var cat = String($(this).data('category') || '').split(' ');
                    if (filter === 'all' || cat.indexOf(filter) !== -1) {
                        $(this).css('display', '');
                        setTimeout(function () {
                            $(this).css('opacity', '1');
                        }.bind(this), 10);
                    } else {
                        $(this).css({'opacity': '0', 'display': 'none'});
                    }
                });
            });
        },

        referenceLoadMore: function () {
            var $grid = $('#sgReferencesArchiveGrid');
            var $btn  = $('.sg-reference-load-more');
            if (!$grid.length || !$btn.length) return;

            $btn.on('click', function () {
                var currentPage = parseInt($btn.data('current-page'), 10) || 1;
                var maxPage     = parseInt($btn.data('max-page'), 10) || 1;
                var nextPage    = currentPage + 1;

                if (nextPage > maxPage || $btn.prop('disabled')) return;

                $btn.prop('disabled', true).addClass('is-loading');
                $btn.find('span').text('Y\u00fckleniyor');
                $btn.find('i').removeClass('fa-arrow-down').addClass('fa-spinner fa-spin');

                $.post(sgData.ajaxUrl, {
                    action: 'sg_load_more_references',
                    nonce: sgData.nonce,
                    page: nextPage
                })
                .done(function (res) {
                    if (!res.success || !res.data.html) {
                        $btn.closest('.sg-reference-load-more-wrap').remove();
                        return;
                    }

                    var $items = $(res.data.html);
                    $grid.append($items);
                    $items.addClass('revealed');
                    $btn.data('current-page', nextPage);

                    if (nextPage >= maxPage || nextPage >= parseInt(res.data.maxPage, 10)) {
                        $btn.closest('.sg-reference-load-more-wrap').remove();
                    }
                })
                .fail(function () {
                    $btn.find('span').text('Tekrar Dene');
                })
                .always(function () {
                    if ($.contains(document, $btn[0])) {
                        $btn.prop('disabled', false).removeClass('is-loading');
                        $btn.find('span').text('Daha Fazla Y\u00fckle');
                        $btn.find('i').removeClass('fa-spinner fa-spin').addClass('fa-arrow-down');
                    }
                });
            });
        },

        /* --------------------------------------------------------
           AUDIT FORM (AJAX)
           -------------------------------------------------------- */
        auditForm: function () {
            var $form = $('#sgAuditForm');
            var $msg  = $('#sgAuditMsg');
            if (!$form.length) return;

            $form.on('submit', function (e) {
                e.preventDefault();
                var url   = $('#sgAuditInput').val().trim();
                var nonce = $('[name="sg_audit_nonce"]').val();
                if (!url) {
                    showMsg($msg, 'error', 'Lütfen geçerli bir URL girin.');
                    return;
                }

                var $btn = $form.find('button[type="submit"]');
                $btn.prop('disabled', true).text('Analiz ediliyor…');

                $.post(sgData.ajaxUrl, {
                    action: 'sg_audit',
                    site_url: url,
                    nonce: sgData.nonce
                })
                .done(function (res) {
                    if (res.success) {
                        showMsg($msg, 'success', res.data.message);
                        $form[0].reset();
                    } else {
                        showMsg($msg, 'error', res.data.message);
                    }
                })
                .fail(function () {
                    showMsg($msg, 'error', 'Bir hata oluştu. Lütfen tekrar deneyin.');
                })
                .always(function () {
                    $btn.prop('disabled', false).text('Ücretsiz Analiz');
                });
            });
        },

        /* --------------------------------------------------------
           SERVICES DROPDOWN (açılır çoktan seçmeli)
           -------------------------------------------------------- */
        servicesDropdown: function () {
            var $dropdowns = $('.sg-hq-dropdown');
            if (!$dropdowns.length) return;

            $dropdowns.each(function () {
                var $dd = $(this);
                var $btn  = $dd.find('.sg-hq-dropdown-btn');
                var $text = $dd.find('.sg-hq-dropdown-text');
                var placeholder = $text.text();

                function updateLabel() {
                    var selected = $dd.find('.sg-hq-option-cb:checked').map(function () {
                        return $(this).closest('.sg-hq-option').find('span:last').text();
                    }).get();
                    $text.text(selected.length ? selected.join(', ') : placeholder);
                }

                $btn.on('click', function (e) {
                    e.stopPropagation();
                    $dropdowns.not($dd).removeClass('is-open').find('.sg-hq-dropdown-btn').attr('aria-expanded', 'false');
                    $dd.toggleClass('is-open');
                    $btn.attr('aria-expanded', $dd.hasClass('is-open'));
                });

                $dd.find('.sg-hq-option-cb').on('change', function () {
                    updateLabel();
                });
            });

            $(document).on('click.sgDropdown', function (e) {
                if (!$(e.target).closest('.sg-hq-dropdown').length) {
                    $dropdowns.removeClass('is-open').find('.sg-hq-dropdown-btn').attr('aria-expanded', 'false');
                }
            });
        },

        /* --------------------------------------------------------
           HERO QUOTE FORM (AJAX)
           -------------------------------------------------------- */
        heroQuoteForm: function () {
            var $form = $('#sgHeroQuoteForm');
            var $msg  = $('#sgHeroQuoteMsg');
            if (!$form.length) return;

            $form.on('submit', function (e) {
                e.preventDefault();
                var data = $form.serialize();
                var $btn = $form.find('[type="submit"]');
                $btn.prop('disabled', true);
                $btn.find('i').removeClass('fa-paper-plane').addClass('fa-spinner fa-spin');

                $.post(sgData.ajaxUrl, data)
                .done(function (res) {
                    if (res.success) {
                        showMsg($msg, 'success', res.data.message);
                        $form[0].reset();
                    } else {
                        showMsg($msg, 'error', res.data.message);
                    }
                })
                .fail(function () {
                    showMsg($msg, 'error', 'Mesaj gönderilemedi. Lütfen tekrar deneyin.');
                })
                .always(function () {
                    $btn.prop('disabled', false);
                    $btn.find('i').removeClass('fa-spinner fa-spin').addClass('fa-paper-plane');
                });
            });
        },

        /* --------------------------------------------------------
           CONTACT FORM (AJAX – native fallback)
           -------------------------------------------------------- */
        contactForm: function () {
            var $form = $('#sgContactForm');
            var $msg  = $('#sgContactMsg');
            if (!$form.length) return;

            $form.on('submit', function (e) {
                e.preventDefault();
                var data = $form.serialize();
                var $btn = $form.find('[type="submit"]');
                $btn.prop('disabled', true);
                $btn.find('i').removeClass('fa-paper-plane').addClass('fa-spinner fa-spin');

                $.post(sgData.ajaxUrl, data)
                .done(function (res) {
                    if (res.success) {
                        showMsg($msg, 'success', res.data.message);
                        $form[0].reset();
                    } else {
                        showMsg($msg, 'error', res.data.message);
                    }
                })
                .fail(function () {
                    showMsg($msg, 'error', 'Mesaj gönderilemedi. Lütfen tekrar deneyin.');
                })
                .always(function () {
                    $btn.prop('disabled', false);
                    $btn.find('i').removeClass('fa-spinner fa-spin').addClass('fa-paper-plane');
                });
            });
        },

        /* --------------------------------------------------------
           SMOOTH SCROLL for anchor links
           -------------------------------------------------------- */
        smoothScroll: function () {
            $(document).on('click', 'a[href^="#"]', function (e) {
                var target = $(this).attr('href');
                if (target === '#' || !$(target).length) return;
                e.preventDefault();
                var offset = parseInt($('#sg-header').outerHeight(), 10) + 20;
                $('html, body').animate({
                    scrollTop: $(target).offset().top - offset
                }, 600, 'swing');
            });
        },

        /* --------------------------------------------------------
           AOS INIT
           -------------------------------------------------------- */
        aosInit: function () {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once:     true,
                    offset:   80,
                    easing:   'ease-out-cubic'
                });
            }
        },

        /* --------------------------------------------------------
           WHATSAPP FLOAT: show after scroll
           -------------------------------------------------------- */
        whatsappFloat: function () {
            var $wa  = $('.sg-whatsapp-float');
            if (!$wa.length) return;
            $wa.css('opacity', '0');
            $(window).on('scroll.waFloat', function () {
                if ($(this).scrollTop() > 300) {
                    $wa.css({'opacity': '1', 'pointer-events': 'auto'});
                } else {
                    $wa.css({'opacity': '0', 'pointer-events': 'none'});
                }
            });
        },

        /* --------------------------------------------------------
           SCROLL TOP BUTTON
           -------------------------------------------------------- */
        scrollTopButton: function () {
            var $btn = $('.sg-scroll-top');
            if (!$btn.length) return;

            function update() {
                $btn.toggleClass('is-visible', $(window).scrollTop() > 500);
            }

            update();
            $(window).on('scroll.scrollTopButton', update);

            $btn.on('click.scrollTopButton', function () {
                $('html, body').animate({ scrollTop: 0 }, 650, 'swing');
            });
        },

        initFancybox: function () {
            if (typeof Fancybox === 'undefined') return;
            Fancybox.bind('[data-fancybox]', {
                animated: true,
                showClass: 'fancybox-zoomIn',
                hideClass: 'fancybox-zoomOut',
            });
        }

    }; /* end SG */

    /* ============================================================
       HELPER: show message
       ============================================================ */
    function showMsg($el, type, text) {
        var bg = type === 'success'
            ? 'rgba(168,230,61,.1)'
            : 'rgba(255,80,80,.1)';
        var border = type === 'success'
            ? 'rgba(168,230,61,.3)'
            : 'rgba(255,80,80,.3)';
        var color = type === 'success' ? '#a8e63d' : '#ff5050';

        $el.css({
            'display':    'block',
            'background': bg,
            'border':     '1px solid ' + border,
            'color':      color
        }).text(text);

        if (type === 'success') {
            setTimeout(function () { $el.fadeOut(400); }, 5000);
        }
    }

})(jQuery);
