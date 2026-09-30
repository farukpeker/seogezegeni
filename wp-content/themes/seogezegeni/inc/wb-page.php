<?php
/**
 * Web Tasarim ve Yazilim sayfasi (page-web-tasarim-ve-yazilim.php) icin
 * panelden duzenlenebilir icerik.
 * Motor: inc/page-fields.php  |  Varsayilanlar: inc/wb-page-defaults.php
 */

defined( 'ABSPATH' ) || exit;

require_once SG_DIR . '/inc/page-fields.php';
require_once SG_DIR . '/inc/page-blocks.php';
require_once SG_DIR . '/inc/wb-page-defaults.php';

/** Iki listeli bolum: baslik, metin, 1. liste (giris+liste), 2. liste (giris+liste), kapanis. */
function sg_wb_duo( $key, $label ) {
    return [
        'h_' . $key                => [ 'label' => $label . ' – başlık (*yıldız* arası vurgulanır)', 'type' => 'text' ],
        't_' . $key                => [ 'label' => $label . ' – metin', 'type' => 'paras' ],
        't_' . $key . '_lead'      => [ 'label' => $label . ' – 1. liste giriş cümlesi', 'type' => 'paras' ],
        $key . '_list'             => [ 'label' => $label . ' – 1. liste (her satır bir madde)', 'type' => 'lines' ],
        't_' . $key . '_lead2'     => [ 'label' => $label . ' – 2. liste giriş cümlesi', 'type' => 'paras' ],
        $key . '_list2'            => [ 'label' => $label . ' – 2. liste (her satır bir madde)', 'type' => 'lines' ],
        't_' . $key . '_foot'      => [ 'label' => $label . ' – kapanış', 'type' => 'paras' ],
    ];
}

function sg_wb_fields() {
    $icon = [ 'id' => 'icon', 'label' => 'İkon (Font Awesome sınıfı)', 'type' => 'icon' ];

    $detail_sub = [
        $icon,
        [ 'id' => 'title',      'label' => 'Başlık',                                    'type' => 'text' ],
        [ 'id' => 'paras',      'label' => 'Paragraflar (boş satırla ayırın)',          'type' => 'paras' ],
        [ 'id' => 'list_intro', 'label' => 'Liste giriş cümlesi',                       'type' => 'text' ],
        [ 'id' => 'list',       'label' => 'Liste maddeleri (her satır bir madde)',     'type' => 'lines' ],
        [ 'id' => 'closing',    'label' => 'Kapanış paragrafları (boş satırla ayırın)', 'type' => 'paras' ],
    ];
    $title_text = [
        [ 'id' => 'a', 'label' => 'Başlık',   'type' => 'text' ],
        [ 'id' => 'b', 'label' => 'Açıklama', 'type' => 'textarea' ],
    ];
    $icon_card = [
        $icon,
        [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
        [ 'id' => 'text',  'label' => 'Metin',  'type' => 'textarea' ],
    ];
    $rep = static function ( $label, $item, $title, $sub, $shape = null ) {
        $r = [ 'label' => $label, 'type' => 'repeater', 'item' => $item, 'title' => $title, 'sub' => $sub ];
        if ( $shape ) {
            $r['shape'] = $shape;
        }
        return $r;
    };

    return [
        'seo' => [
            'label'  => 'SEO ve Hero',
            'fields' => [
                'seo_title'  => [ 'label' => 'SEO Title (tarayıcı sekmesi ve Google başlığı)', 'type' => 'text' ],
                'meta_desc'  => [ 'label' => 'Meta Description', 'type' => 'textarea' ],
                'hero_title' => [ 'label' => 'Hero başlığı (*yıldız* arası yeşil vurgulanır)', 'type' => 'text' ],
                'hero_text'  => [ 'label' => 'Hero açıklaması', 'type' => 'textarea' ],
                'stats'      => $rep( 'Giriş bölümü rakamları', 'Rakam', 'value', [
                    [ 'id' => 'value', 'label' => 'Değer', 'type' => 'text' ],
                    [ 'id' => 'label', 'label' => 'Etiket', 'type' => 'text' ],
                ] ),
                'h_intro'    => [ 'label' => 'Giriş – başlık', 'type' => 'text' ],
                't_intro_a'  => [ 'label' => 'Giriş – üstteki metin (rakam panelinin yanı)', 'type' => 'paras' ],
                't_intro_b'  => [ 'label' => 'Giriş – devam metni (tam genişlik)', 'type' => 'paras' ],
            ],
        ],
        'temel' => [
            'label'  => 'Temel Bilgiler',
            'fields' => array_merge(
                sg_gm_std( 'yatirim', 'Dijital yatırım' ),
                sg_gm_std( 'gerek', 'Neden profesyonel?' ),
                [
                    'h_ozel'   => [ 'label' => 'Modern site özellikleri – başlık', 'type' => 'text' ],
                    't_ozel'   => [ 'label' => 'Modern site özellikleri – giriş', 'type' => 'paras' ],
                    'features' => $rep( 'Modern site özellikleri (kartlar)', 'Özellik', 'title', $detail_sub ),
                ],
                sg_gm_std( 'marka', 'Marka algısı', false, true ),
                sg_gm_std( 'yeter', 'Tek başına yeterli değil' )
            ),
        ],
        'hizmet' => [
            'label'  => 'Web Tasarım Hizmetleri',
            'fields' => array_merge(
                [
                    'h_hiz'    => [ 'label' => 'Web tasarım hizmetleri – başlık', 'type' => 'text' ],
                    't_hiz'    => [ 'label' => 'Web tasarım hizmetleri – giriş', 'type' => 'paras' ],
                    'services' => $rep( 'Web tasarım hizmetleri (sekmeler)', 'Hizmet', 'title', $detail_sub ),
                ],
                sg_wb_duo( 'donus', 'Dönüşüm odaklı yaklaşım' ),
                sg_gm_std( 'birlikte', 'Tasarım ve yazılım birlikte' )
            ),
        ],
        'yazilim' => [
            'label'  => 'Özel Yazılım',
            'fields' => array_merge(
                [
                    'h_yaz' => [ 'label' => 'Özel yazılım hizmetleri – başlık', 'type' => 'text' ],
                    't_yaz' => [ 'label' => 'Özel yazılım hizmetleri – metin', 'type' => 'paras' ],
                ],
                sg_gm_std( 'yazned', 'Özel yazılım nedir?' ),
                sg_wb_duo( 'hazir', 'Hazır mı özel mi?' ),
                sg_gm_std( 'isl', 'İşletmeye özel çözümler' ),
                [
                    'solutions' => $rep( 'İşletmeye özel çözüm türleri (akordiyon)', 'Çözüm', 'title', $detail_sub ),
                ],
                sg_gm_std( 'mimari', 'Ölçeklenebilir mimari' ),
                [
                    't_ozet' => [ 'label' => 'Mimari – bütüncül yaklaşım metni (tam genişlik)', 'type' => 'paras' ],
                ]
            ),
        ],
        'teknik' => [
            'label'  => 'Teknik Konular',
            'fields' => [
                'h_teknik'    => [ 'label' => 'Teknik konular – bölüm başlığı', 'type' => 'text' ],
                'tech_topics' => $rep( 'Teknik konular (sekmeler: UX, UI, SEO, CWV, CRO, GA4…)', 'Konu', 'title', $detail_sub ),
            ],
        ],
        'tekno' => [
            'label'  => 'Teknolojiler ve Sektörler',
            'fields' => [
                'h_tek'         => [ 'label' => 'Teknolojiler – başlık', 'type' => 'text' ],
                't_tek'         => [ 'label' => 'Teknolojiler – giriş', 'type' => 'paras' ],
                'tech_cards'    => $rep( 'Teknolojiler (kartlar)', 'Teknoloji', 'title', $detail_sub ),
                'h_sek'         => [ 'label' => 'Sektörel çözümler – başlık', 'type' => 'text' ],
                't_sek'         => [ 'label' => 'Sektörel çözümler – giriş', 'type' => 'paras' ],
                'sektor'        => $rep( 'Sektörel çözümler (akordiyon)', 'Sektör', 'title', $icon_card ),
                'h_isletme'     => [ 'label' => 'Hangi işletmeler? – başlık', 'type' => 'text' ],
                't_isletme'     => [ 'label' => 'Hangi işletmeler? – metin', 'type' => 'paras' ],
                'isletme_cards' => $rep( 'İşletme türleri (kartlar)', 'İşletme', 'title', $icon_card ),
            ],
        ],
        'surec' => [
            'label'  => 'Süreç ve Neden Biz',
            'fields' => array_merge(
                [
                    'h_surec' => [ 'label' => 'Süreç – başlık', 'type' => 'text' ],
                    't_surec' => [ 'label' => 'Süreç – giriş', 'type' => 'paras' ],
                    'steps'   => $rep( 'Süreç adımları', 'Adım', 'a', $title_text, [ 'a', 'b' ] ),
                ],
                sg_gm_std( 'why', 'Neden SEO Gezegeni?' )
            ),
        ],
        'sss' => [
            'label'  => 'SSS ve Kapanış',
            'fields' => [
                'h_faq' => [ 'label' => 'SSS – başlık', 'type' => 'text' ],
                'faqs'  => $rep( 'Sık Sorulan Sorular (sayfaya FAQ schema da eklenir)', 'Soru', 'a', [
                    [ 'id' => 'a', 'label' => 'Soru', 'type' => 'text' ],
                    [ 'id' => 'b', 'label' => 'Cevap', 'type' => 'textarea' ],
                ], [ 'a', 'b' ] ),
                'h_cta' => [ 'label' => 'Kapanış paneli – başlık', 'type' => 'text' ],
                't_cta' => [ 'label' => 'Kapanış paneli – metin', 'type' => 'paras' ],
            ],
        ],
    ];
}

function sg_wb_is_page( $post ) {
    return $post && ( 'page-web-tasarim-ve-yazilim.php' === get_page_template_slug( $post ) || 'web-tasarim-ve-yazilim' === $post->post_name );
}

sg_pf_register( 'wb', [
    'meta'     => '_sg_wb_data',
    'input'    => 'sg_wb',
    'title'    => __( 'Web Tasarım ve Yazılım Sayfası İçeriği', 'seogezegeni' ),
    'match'    => 'sg_wb_is_page',
    'fields'   => 'sg_wb_fields',
    'defaults' => 'sg_wb_default_content',
] );

/** Sablonun kullandigi icerik (varsayilan + panelde duzenlenen). */
function sg_wb_content( $post_id ) {
    return sg_pf_split_text( sg_pf_content( 'wb', $post_id ) );
}
