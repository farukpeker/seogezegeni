<?php
/**
 * Sosyal Medya Yonetimi sayfasi (page-sosyal-medya-yonetimi.php) icin
 * panelden duzenlenebilir icerik.
 * Motor: inc/page-fields.php  |  Varsayilanlar: inc/sm-page-defaults.php
 */

defined( 'ABSPATH' ) || exit;

require_once SG_DIR . '/inc/page-fields.php';
require_once SG_DIR . '/inc/page-blocks.php';
require_once SG_DIR . '/inc/sm-page-defaults.php';

function sg_sm_fields() {
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
                sg_gm_std( 'gerek', 'Neden gerekli?' )
            ),
        ],
        'avantaj' => [
            'label'  => 'Avantajlar ve Strateji',
            'fields' => array_merge(
                [
                    'h_avantaj'     => [ 'label' => 'Avantajlar – başlık', 'type' => 'text' ],
                    't_avantaj'     => [ 'label' => 'Avantajlar – giriş', 'type' => 'paras' ],
                    'avantaj_cards' => $rep( 'Avantaj kartları', 'Kart', 'title', $icon_card ),
                ],
                sg_gm_std( 'soru', 'Stratejik süreç' )
            ),
        ],
        'hizmet' => [
            'label'  => 'Hizmetler',
            'fields' => [
                'h_hiz'    => [ 'label' => 'Hizmetler – başlık', 'type' => 'text' ],
                't_hiz'    => [ 'label' => 'Hizmetler – giriş metni', 'type' => 'paras' ],
                'services' => $rep( 'Hizmetler (sekmeler)', 'Hizmet', 'title', $detail_sub ),
            ],
        ],
        'strateji' => [
            'label'  => 'Strateji Oluşturma',
            'fields' => [
                'h_strateji'     => [ 'label' => 'Strateji – başlık', 'type' => 'text' ],
                't_strateji'     => [ 'label' => 'Strateji – giriş metni', 'type' => 'paras' ],
                'strategy_cards' => $rep( 'Strateji başlıkları (kartlar)', 'Kart', 'title', $detail_sub ),
            ],
        ],
        'isletme' => [
            'label'  => 'Optimizasyon, İşletmeler, Ölçüm',
            'fields' => array_merge(
                sg_gm_std( 'opt', 'Sürekli analiz ve optimizasyon' ),
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

function sg_sm_is_page( $post ) {
    return $post && ( 'page-sosyal-medya-yonetimi.php' === get_page_template_slug( $post ) || 'sosyal-medya-yonetimi' === $post->post_name );
}

sg_pf_register( 'sm', [
    'meta'     => '_sg_sm_data',
    'input'    => 'sg_sm',
    'title'    => __( 'Sosyal Medya Yönetimi Sayfası İçeriği', 'seogezegeni' ),
    'match'    => 'sg_sm_is_page',
    'fields'   => 'sg_sm_fields',
    'defaults' => 'sg_sm_default_content',
] );

/** Sablonun kullandigi icerik (varsayilan + panelde duzenlenen). */
function sg_sm_content( $post_id ) {
    return sg_pf_split_text( sg_pf_content( 'sm', $post_id ) );
}
