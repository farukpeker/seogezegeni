<?php
/**
 * Google Ads & Meta Reklam sayfasi (page-google-meta-reklamlari.php) icin
 * panelden duzenlenebilir icerik.
 * Motor: inc/page-fields.php  |  Varsayilanlar: inc/gm-page-defaults.php
 */

defined( 'ABSPATH' ) || exit;

require_once SG_DIR . '/inc/page-fields.php';
require_once SG_DIR . '/inc/page-blocks.php';
require_once SG_DIR . '/inc/gm-page-defaults.php';

/** Standart bolum alanlari: baslik, metin, liste giris cumlesi, liste, kapanis. */
function sg_gm_std( $key, $label, $with_list = true, $with_foot = true ) {
    $f = [
        'h_' . $key => [ 'label' => $label . ' – başlık (*yıldız* arası vurgulanır)', 'type' => 'text' ],
        't_' . $key => [ 'label' => $label . ' – metin', 'type' => 'paras' ],
    ];
    if ( $with_list ) {
        $f[ 't_' . $key . '_lead' ] = [ 'label' => $label . ' – liste giriş cümlesi', 'type' => 'paras' ];
        $f[ $key . '_list' ]        = [ 'label' => $label . ' – liste (her satır bir madde)', 'type' => 'lines' ];
    }
    if ( $with_foot ) {
        $f[ 't_' . $key . '_foot' ] = [ 'label' => $label . ' – kapanış', 'type' => 'paras' ];
    }
    return $f;
}

function sg_gm_fields() {
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
                sg_gm_std( 'nedir', 'Nedir?' ),
                sg_gm_std( 'gerek', 'Neden gerekli?' ),
                sg_gm_std( 'perf', 'Performans pazarlaması' )
            ),
        ],
        'avantaj' => [
            'label'  => 'Avantajlar',
            'fields' => [
                'h_avantaj'     => [ 'label' => 'Avantajlar – başlık', 'type' => 'text' ],
                't_avantaj'     => [ 'label' => 'Avantajlar – giriş', 'type' => 'paras' ],
                'avantaj_cards' => $rep( 'Avantaj kartları', 'Kart', 'title', $icon_card ),
                'h_birlikte'    => [ 'label' => 'Birlikte güçlü – başlık', 'type' => 'text' ],
                't_birlikte'    => [ 'label' => 'Birlikte güçlü – metin', 'type' => 'paras' ],
                't_birlikte_ex' => [ 'label' => 'Birlikte güçlü – örnek (vurgu kutusu)', 'type' => 'paras' ],
                't_birlikte_foot' => [ 'label' => 'Birlikte güçlü – SEO Gezegeni yaklaşımı (vurgu kutusu)', 'type' => 'paras' ],
            ],
        ],
        'google' => [
            'label'  => 'Google Ads',
            'fields' => [
                'h_gads'        => [ 'label' => 'Google Ads – başlık', 'type' => 'text' ],
                't_gads'        => [ 'label' => 'Google Ads – giriş metni', 'type' => 'paras' ],
                'gads_services' => $rep( 'Google Ads hizmetleri (sekmeler)', 'Hizmet', 'title', $detail_sub ),
            ],
        ],
        'meta' => [
            'label'  => 'Meta Reklamları',
            'fields' => [
                'h_meta'        => [ 'label' => 'Meta – başlık', 'type' => 'text' ],
                't_meta'        => [ 'label' => 'Meta – giriş metni', 'type' => 'paras' ],
                'meta_services' => $rep( 'Meta reklam hizmetleri (sekmeler)', 'Hizmet', 'title', $detail_sub ),
            ],
        ],
        'strateji' => [
            'label'  => 'Strateji',
            'fields' => array_merge(
                [
                    'h_strateji' => [ 'label' => 'Reklam stratejisi – başlık', 'type' => 'text' ],
                    't_strateji' => [ 'label' => 'Reklam stratejisi – metin', 'type' => 'paras' ],
                    'h_hedef'    => [ 'label' => 'Hedef kitle – başlık', 'type' => 'text' ],
                    't_hedef'    => [ 'label' => 'Hedef kitle – metin', 'type' => 'paras' ],
                    'h_funnel'   => [ 'label' => 'Pazarlama hunisi – başlık', 'type' => 'text' ],
                    't_funnel'   => [ 'label' => 'Pazarlama hunisi – giriş', 'type' => 'paras' ],
                    'funnel'     => $rep( 'Huni aşamaları', 'Aşama', 'a', $title_text, [ 'a', 'b' ] ),
                ],
                sg_gm_std( 'kreatif', 'Kreatifler' ),
                sg_gm_std( 'landing', 'Açılış sayfası' )
            ),
        ],
        'yontem' => [
            'label'  => 'Yöntemler',
            'fields' => array_merge(
                [
                    'h_nasil'      => [ 'label' => 'Birlikte nasıl çalışır? – başlık', 'type' => 'text' ],
                    't_nasil'      => [ 'label' => 'Birlikte nasıl çalışır? – giriş', 'type' => 'paras' ],
                    'nasil_cards'  => $rep( 'Meta / Google kartları', 'Kart', 'title', $icon_card ),
                    't_nasil_lead' => [ 'label' => 'Birlikte nasıl çalışır? – liste giriş cümlesi', 'type' => 'paras' ],
                    'nasil_list'   => [ 'label' => 'Birlikte nasıl çalışır? – liste', 'type' => 'lines' ],
                    't_nasil_foot' => [ 'label' => 'Birlikte nasıl çalışır? – kapanış', 'type' => 'paras' ],
                ],
                sg_gm_std( 'remark', 'Remarketing' ),
                sg_gm_std( 'abtest', 'A/B testleri' ),
                sg_gm_std( 'veri', 'Veriye dayalı optimizasyon' )
            ),
        ],
        'ai' => [
            'label'  => 'Yapay Zeka ve Ölçüm',
            'fields' => [
                'h_ai'       => [ 'label' => 'Yapay zeka – başlık', 'type' => 'text' ],
                't_ai'       => [ 'label' => 'Yapay zeka – metin', 'type' => 'paras' ],
                't_ai_foot'  => [ 'label' => 'Yapay zeka – SEO Gezegeni yaklaşımı', 'type' => 'paras' ],
                'auto_cards' => $rep( 'Performance Max / Smart Bidding kartları', 'Kart', 'title', $detail_sub ),
                'h_infra'    => [ 'label' => 'Ölçüm altyapısı – bölüm başlığı', 'type' => 'text' ],
                'infra'      => $rep( 'Ölçüm altyapısı sekmeleri (GA4, GTM, Pixel…)', 'Sekme', 'title', $detail_sub ),
            ],
        ],
        'olcum' => [
            'label'  => 'Optimizasyon ve Ölçüm',
            'fields' => array_merge(
                sg_gm_std( 'opt', 'Sürekli optimizasyon' ),
                [
                    'h_isletme' => [ 'label' => 'Hangi işletmeler? – başlık', 'type' => 'text' ],
                    't_isletme' => [ 'label' => 'Hangi işletmeler? – metin', 'type' => 'paras' ],
                    'sectors'   => $rep( 'İşletme türleri', 'İşletme', 'title', $icon_card ),
                ],
                sg_gm_std( 'olcum', 'Başarı ölçümü' )
            ),
        ],
        'surec' => [
            'label'  => 'Süreç ve Neden Biz',
            'fields' => array_merge(
                [
                    'h_surec'      => [ 'label' => 'Süreç – başlık', 'type' => 'text' ],
                    't_surec'      => [ 'label' => 'Süreç – giriş', 'type' => 'paras' ],
                    'steps'        => $rep( 'Süreç adımları', 'Adım', 'a', $title_text, [ 'a', 'b' ] ),
                    't_surec_foot' => [ 'label' => 'Süreç – kapanış', 'type' => 'paras' ],
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

function sg_gm_is_page( $post ) {
    return $post && ( 'page-google-meta-reklamlari.php' === get_page_template_slug( $post ) || 'google-meta-reklamlari' === $post->post_name );
}

sg_pf_register( 'gm', [
    'meta'     => '_sg_gm_data',
    'input'    => 'sg_gm',
    'title'    => __( 'Google & Meta Reklamları Sayfası İçeriği', 'seogezegeni' ),
    'match'    => 'sg_gm_is_page',
    'fields'   => 'sg_gm_fields',
    'defaults' => 'sg_gm_default_content',
] );

/** Sablonun kullandigi icerik (varsayilan + panelde duzenlenen). */
function sg_gm_content( $post_id ) {
    return sg_pf_split_text( sg_pf_content( 'gm', $post_id ) );
}
