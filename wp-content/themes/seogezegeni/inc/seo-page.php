<?php
/**
 * SEO sayfasi (page-seo.php) icin panelden duzenlenebilir icerik.
 * Motor: inc/page-fields.php  |  Varsayilanlar: inc/seo-page-defaults.php
 */

defined( 'ABSPATH' ) || exit;

require_once SG_DIR . '/inc/page-fields.php';
require_once SG_DIR . '/inc/seo-page-defaults.php';

/* ============================================================
   ALAN TANIMLARI
   type: paras (bos satirla ayrilan paragraflar) | lines (her satir bir madde) | repeater
   ============================================================ */
function sg_seo_fields() {
    $icon = [ 'id' => 'icon', 'label' => 'İkon (Font Awesome sınıfı)', 'type' => 'icon' ];

    $detail_sub = [
        $icon,
        [ 'id' => 'title',      'label' => 'Başlık',                'type' => 'text' ],
        [ 'id' => 'paras',      'label' => 'Paragraflar (boş satırla ayırın)', 'type' => 'paras' ],
        [ 'id' => 'list_intro', 'label' => 'Liste giriş cümlesi',   'type' => 'text' ],
        [ 'id' => 'list',       'label' => 'Liste maddeleri (her satır bir madde)', 'type' => 'lines' ],
        [ 'id' => 'closing',    'label' => 'Kapanış paragrafı',     'type' => 'textarea' ],
    ];
    $title_text = [
        [ 'id' => 'a', 'label' => 'Başlık', 'type' => 'text' ],
        [ 'id' => 'b', 'label' => 'Açıklama', 'type' => 'textarea' ],
    ];

    return [
        'genel' => [
            'label'  => 'Giriş ve Genel',
            'fields' => [
                'seo_stats'     => [ 'label' => 'Sağ paneldeki rakamlar', 'type' => 'repeater', 'item' => 'Rakam', 'title' => 'value', 'sub' => [
                    [ 'id' => 'value', 'label' => 'Değer (ör. 360°)', 'type' => 'text' ],
                    [ 'id' => 'label', 'label' => 'Etiket', 'type' => 'text' ],
                ] ],
                't_intro_a'     => [ 'label' => 'SEO Nedir? – 1. bölüm metni', 'type' => 'paras' ],
                't_intro_b'     => [ 'label' => 'SEO Nedir? – 2. bölüm metni (alt başlıktan sonra)', 'type' => 'paras' ],
                't_benefits_lead' => [ 'label' => 'Neden SEO? – giriş paragrafı', 'type' => 'paras' ],
                'benefits'      => [ 'label' => 'Neden SEO? – avantaj kartları', 'type' => 'repeater', 'item' => 'Kart', 'title' => 'text', 'shape' => [ 'icon', 'text' ], 'sub' => [
                    $icon,
                    [ 'id' => 'text', 'label' => 'Metin', 'type' => 'text' ],
                ] ],
                't_benefits_foot' => [ 'label' => 'Neden SEO? – kapanış paragrafı', 'type' => 'paras' ],
            ],
        ],
        'hizmet' => [
            'label'  => 'SEO Hizmeti',
            'fields' => [
                't_hizmet'      => [ 'label' => 'SEO Hizmeti Nedir? – metin', 'type' => 'paras' ],
                't_hizmet_lead' => [ 'label' => 'Bileşenler listesi giriş cümlesi', 'type' => 'paras' ],
                'hizmet_bilesenleri' => [ 'label' => 'Bileşenler listesi (her satır bir madde)', 'type' => 'lines' ],
                'service_details' => [ 'label' => 'Profesyonel SEO Hizmetleri – akordiyonlar', 'type' => 'repeater', 'item' => 'Hizmet', 'title' => 'title', 'sub' => $detail_sub ],
                'google_sureci' => [ 'label' => 'Google SEO Süreci maddeleri (her satır bir madde)', 'type' => 'lines' ],
                't_surec_foot'  => [ 'label' => 'Google SEO Süreci – kapanış', 'type' => 'paras' ],
            ],
        ],
        'algoritma' => [
            'label'  => 'Algoritma ve Yapay Zeka',
            'fields' => [
                't_algoritma' => [ 'label' => 'Google Algoritmaları – metin', 'type' => 'paras' ],
                't_ai_intro'  => [ 'label' => 'AI Overviews – kart metni', 'type' => 'paras' ],
                'ai_points'   => [ 'label' => 'AI Overviews – maddeler (her satır bir madde)', 'type' => 'lines' ],
                't_ai_foot'   => [ 'label' => 'AI Overviews – kapanış', 'type' => 'paras' ],
            ],
        ],
        'danismanlik' => [
            'label'  => 'Danışmanlık',
            'fields' => [
                't_danis'      => [ 'label' => 'SEO Danışmanlığı – metin', 'type' => 'paras' ],
                't_danis_lead' => [ 'label' => 'Danışmanlık listesi giriş cümlesi', 'type' => 'paras' ],
                'danismanlik_calismalari' => [ 'label' => 'Danışmanlık çalışmaları (her satır bir madde)', 'type' => 'lines' ],
                't_uzman_intro' => [ 'label' => 'Uzmanla çalışmanın avantajları – giriş', 'type' => 'paras' ],
                'uzman_avantajlari' => [ 'label' => 'Uzman avantajları (her satır bir madde)', 'type' => 'lines' ],
                't_uzman_foot'  => [ 'label' => 'Uzmanla çalışmanın avantajları – kapanış', 'type' => 'paras' ],
            ],
        ],
        'uzmanlik' => [
            'label'  => 'Uzmanlık ve Sektörler',
            'fields' => [
                'seo_types' => [ 'label' => 'SEO Uzmanlık Alanları – akordiyonlar', 'type' => 'repeater', 'item' => 'Uzmanlık', 'title' => 'title', 'sub' => $detail_sub ],
                'planlama_adimlari' => [ 'label' => 'SEO Çalışması Nasıl Planlanır? – adımlar', 'type' => 'repeater', 'item' => 'Adım', 'title' => 'a', 'shape' => [ 'a', 'b' ], 'sub' => $title_text ],
                'sektorel_stratejiler' => [ 'label' => 'Sektörel SEO Stratejileri – akordiyonlar', 'type' => 'repeater', 'item' => 'Sektör', 'title' => 'title', 'sub' => [
                    $icon,
                    [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                    [ 'id' => 'text',  'label' => 'Metin', 'type' => 'textarea' ],
                ] ],
            ],
        ],
        'hatalar' => [
            'label'  => 'Hatalar ve Ölçüm',
            'fields' => [
                'mistakes' => [ 'label' => 'SEO’da sık yapılan hatalar', 'type' => 'repeater', 'item' => 'Hata', 'title' => 'a', 'shape' => [ 'a', 'b' ], 'sub' => $title_text ],
                't_success_intro' => [ 'label' => 'Başarı faktörleri – giriş', 'type' => 'paras' ],
                'success_factors' => [ 'label' => 'Başarı faktörleri (her satır bir madde)', 'type' => 'lines' ],
                't_success_foot'  => [ 'label' => 'Başarı faktörleri – kapanış', 'type' => 'paras' ],
                'metrics' => [ 'label' => 'SEO Performansı – ölçüm kartları', 'type' => 'repeater', 'item' => 'Kart', 'title' => 'title', 'shape' => [ 'icon', 'title', 'text' ], 'sub' => [
                    $icon,
                    [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                    [ 'id' => 'text',  'label' => 'Metin', 'type' => 'textarea' ],
                ] ],
                't_metrics_foot' => [ 'label' => 'SEO Performansı – kapanış', 'type' => 'paras' ],
            ],
        ],
        'surec' => [
            'label'  => 'Süreç ve Neden Biz',
            'fields' => [
                'process_steps' => [ 'label' => 'Çalışma süreci adımları', 'type' => 'repeater', 'item' => 'Adım', 'title' => 'a', 'shape' => [ 'a', 'b' ], 'sub' => $title_text ],
                't_journey_foot' => [ 'label' => 'Çalışma süreci – kapanış', 'type' => 'paras' ],
                'neden_seo_gezegeni' => [ 'label' => 'Neden SEO Gezegeni? (her satır bir madde)', 'type' => 'lines' ],
                't_neden_foot'  => [ 'label' => 'Neden SEO Gezegeni? – kapanış', 'type' => 'paras' ],
            ],
        ],
        'sss' => [
            'label'  => 'SSS ve Kapanış',
            'fields' => [
                'faqs' => [ 'label' => 'Sık Sorulan Sorular (sayfaya FAQ schema da eklenir)', 'type' => 'repeater', 'item' => 'Soru', 'title' => 'a', 'shape' => [ 'a', 'b' ], 'sub' => [
                    [ 'id' => 'a', 'label' => 'Soru', 'type' => 'text' ],
                    [ 'id' => 'b', 'label' => 'Cevap', 'type' => 'textarea' ],
                ] ],
                't_cta' => [ 'label' => 'Kapanış paneli metni', 'type' => 'paras' ],
            ],
        ],
    ];
}

/* ============================================================
   FAQ SCHEMA
   ============================================================ */
function sg_seo_faq_schema( $faqs ) {
    $items = [];
    foreach ( $faqs as $faq ) {
        $items[] = [
            '@type'          => 'Question',
            'name'           => str_replace( '*', '', wp_strip_all_tags( $faq[0] ) ),
            'acceptedAnswer' => [ '@type' => 'Answer', 'text' => str_replace( '*', '', wp_strip_all_tags( $faq[1] ) ) ],
        ];
    }
    if ( ! $items ) {
        return;
    }
    echo '<script type="application/ld+json">' . wp_json_encode( [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}


sg_pf_register( 'seo', [
    'meta'     => '_sg_seo_data',
    'input'    => 'sg_seo',
    'title'    => __( 'SEO Sayfası İçeriği', 'seogezegeni' ),
    'match'    => static function ( $post ) {
        return 'page-seo.php' === get_page_template_slug( $post ) || 'seo' === $post->post_name;
    },
    'fields'   => 'sg_seo_fields',
    'defaults' => 'sg_seo_default_content',
] );

/** Sablonun kullandigi icerik (varsayilan + panelde duzenlenen). */
function sg_seo_content( $post_id ) {
    return sg_pf_split_text( sg_pf_content( 'seo', $post_id ) );
}

