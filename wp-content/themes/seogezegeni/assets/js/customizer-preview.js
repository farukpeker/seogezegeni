/**
 * SEO Gezegeni – Customizer Live Preview (postMessage)
 */
(function ($) {
    'use strict';

    var settings = {
        'sg_hero_title':    '#hero-heading',
        'sg_hero_subtitle': '.sg-hero p',
        'sg_hero_badge':    '.sg-hero-badge',
        'sg_cta_title':     '#cta-heading',
        'sg_cta_desc':      '.sg-cta p',
    };

    Object.keys(settings).forEach(function (key) {
        wp.customize(key, function (value) {
            value.bind(function (newVal) {
                $(settings[key]).html(newVal);
            });
        });
    });

    /* Color updates */
    wp.customize('sg_color_accent', function (value) {
        value.bind(function (newVal) {
            document.documentElement.style.setProperty('--sg-accent', newVal);
        });
    });
    wp.customize('sg_color_bg', function (value) {
        value.bind(function (newVal) {
            document.documentElement.style.setProperty('--sg-bg-primary', newVal);
        });
    });
    wp.customize('sg_color_card', function (value) {
        value.bind(function (newVal) {
            document.documentElement.style.setProperty('--sg-bg-card', newVal);
        });
    });

})(jQuery);
