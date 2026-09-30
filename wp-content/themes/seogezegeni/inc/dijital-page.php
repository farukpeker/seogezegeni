<?php
/**
 * 360° Dijital Pazarlama sayfasi (page-360-dijital-pazarlama.php) icin
 * panelden duzenlenebilir icerik.
 * Motor: inc/page-fields.php  |  Varsayilanlar: inc/dijital-page-defaults.php
 */

defined( 'ABSPATH' ) || exit;

require_once SG_DIR . '/inc/page-fields.php';
require_once SG_DIR . '/inc/dijital-page-defaults.php';

/* ============================================================
   ALAN TANIMLARI
   ============================================================ */
function sg_dp_fields() {
    $icon = [ 'id' => 'icon', 'label' => 'İkon (Font Awesome sınıfı)', 'type' => 'icon' ];

    $detail_sub = [
        $icon,
        [ 'id' => 'title',      'label' => 'Başlık',                                 'type' => 'text' ],
        [ 'id' => 'paras',      'label' => 'Paragraflar (boş satırla ayırın)',       'type' => 'paras' ],
        [ 'id' => 'list_intro', 'label' => 'Liste giriş cümlesi',                    'type' => 'text' ],
        [ 'id' => 'list',       'label' => 'Liste maddeleri (her satır bir madde)',  'type' => 'lines' ],
        [ 'id' => 'closing',    'label' => 'Kapanış paragrafları (boş satırla ayırın)', 'type' => 'paras' ],
    ];
    $title_text = [
        [ 'id' => 'a', 'label' => 'Başlık',   'type' => 'text' ],
        [ 'id' => 'b', 'label' => 'Açıklama', 'type' => 'textarea' ],
    ];
    $head = static function ( $label = 'Bölüm başlığı (*yıldız* arası vurgulanır)' ) {
        return [ 'label' => $label, 'type' => 'text' ];
    };
    $paras = static function ( $label ) {
        return [ 'label' => $label, 'type' => 'paras' ];
    };
    $lines = static function ( $label ) {
        return [ 'label' => $label, 'type' => 'lines' ];
    };

    return [
        'seo' => [
            'label'  => 'SEO ve Hero',
            'fields' => [
                'seo_title'  => [ 'label' => 'SEO Title (tarayıcı sekmesi ve Google başlığı)', 'type' => 'text' ],
                'meta_desc'  => [ 'label' => 'Meta Description', 'type' => 'textarea' ],
                'hero_title' => $head( 'Hero başlığı (*yıldız* arası yeşil vurgulanır)' ),
                'hero_text'  => [ 'label' => 'Hero açıklaması', 'type' => 'textarea' ],
                'stats'      => [ 'label' => '“Ölçülebilir Dijital Büyüme” yanındaki rakamlar', 'type' => 'repeater', 'item' => 'Rakam', 'title' => 'value', 'sub' => [
                    [ 'id' => 'value', 'label' => 'Değer (ör. 360°)', 'type' => 'text' ],
                    [ 'id' => 'label', 'label' => 'Etiket', 'type' => 'text' ],
                ] ],
            ],
        ],
        'giris' => [
            'label'  => 'Giriş',
            'fields' => [
                'h_intro'        => $head( 'Giriş – başlık' ),
                't_intro_a'      => $paras( 'Giriş – üstteki metin (rakam panelinin yanı)' ),
                't_intro_b'      => $paras( 'Giriş – devam metni (tam genişlik)' ),
                'h_nedir'        => $head( '360° Dijital Pazarlama Nedir? – başlık' ),
                't_nedir'        => $paras( 'Nedir? – metin' ),
                't_nedir_lead'   => $paras( 'Nedir? – liste giriş cümlesi' ),
                'nedir_list'     => $lines( 'Nedir? – liste (her satır bir madde)' ),
                't_nedir_foot'   => $paras( 'Nedir? – kapanış' ),
                'h_neden'        => $head( 'Vazgeçilmezdir? – başlık' ),
                't_neden'        => $paras( 'Vazgeçilmezdir? – giriş metni' ),
                't_neden_lead'   => $paras( 'Vazgeçilmezdir? – kartlar öncesi cümle' ),
                'benefits'       => [ 'label' => 'Vazgeçilmezdir? – avantaj kartları', 'type' => 'repeater', 'item' => 'Kart', 'title' => 'text', 'shape' => [ 'icon', 'text' ], 'sub' => [
                    $icon,
                    [ 'id' => 'text', 'label' => 'Metin', 'type' => 'text' ],
                ] ],
                't_neden_foot'   => $paras( 'Vazgeçilmezdir? – kapanış' ),
            ],
        ],
        'kanal' => [
            'label'  => 'Kanallar ve Kapsam',
            'fields' => [
                'h_tek'         => $head( 'Tek Kanal – başlık' ),
                't_tek'         => $paras( 'Tek Kanal – giriş' ),
                't_tek_lead'    => $paras( 'Tek Kanal – kullanıcı yolculuğu giriş cümlesi' ),
                'tek_steps'     => $lines( 'Tek Kanal – yolculuk adımları (her satır bir adım)' ),
                't_tek_foot'    => $paras( 'Tek Kanal – kapanış metni' ),
                'h_kapsam'      => $head( 'Hizmetler Neleri Kapsar? – başlık' ),
                't_kapsam'      => $paras( 'Kapsam – metin' ),
                't_kapsam_lead' => $paras( 'Kapsam – liste giriş cümlesi' ),
                'kapsam_list'   => $lines( 'Kapsam – liste (her satır bir madde)' ),
                't_kapsam_foot' => $paras( 'Kapsam – kapanış' ),
            ],
        ],
        'hizmetler' => [
            'label'  => 'Hizmetlerimiz',
            'fields' => [
                'h_hizmet'   => $head( 'Hizmetlerimiz – başlık' ),
                't_hizmet'   => $paras( 'Hizmetlerimiz – giriş metni' ),
                'services'   => [ 'label' => 'Hizmet akordiyonları', 'type' => 'repeater', 'item' => 'Hizmet', 'title' => 'title', 'sub' => $detail_sub ],
            ],
        ],
        'strateji' => [
            'label'  => 'Strateji',
            'fields' => [
                'h_veri'        => $head( 'Veriye Dayalı Strateji – başlık' ),
                't_veri'        => $paras( 'Veriye Dayalı Strateji – metin' ),
                'h_comp'        => $head( 'Temel Bileşenler – başlık' ),
                't_comp'        => $paras( 'Temel Bileşenler – giriş' ),
                'comp_list'     => $lines( 'Temel Bileşenler – adımlar (her satır bir madde)' ),
                't_comp_foot'   => $paras( 'Temel Bileşenler – kapanış' ),
                'h_hedef'       => $head( 'Hedef Kitle – başlık' ),
                't_hedef'       => $paras( 'Hedef Kitle – metin' ),
                't_hedef_lead'  => $paras( 'Hedef Kitle – liste giriş cümlesi' ),
                'hedef_list'    => $lines( 'Hedef Kitle – liste' ),
                't_hedef_foot'  => $paras( 'Hedef Kitle – kapanış' ),
                'h_rakip'       => $head( 'Rakip Analizi – başlık' ),
                't_rakip'       => $paras( 'Rakip Analizi – metin' ),
                't_rakip_lead'  => $paras( 'Rakip Analizi – liste giriş cümlesi' ),
                'rakip_list'    => $lines( 'Rakip Analizi – liste' ),
                't_rakip_foot'  => $paras( 'Rakip Analizi – kapanış' ),
                'h_omni'        => $head( 'Omnichannel – başlık' ),
                't_omni'        => $paras( 'Omnichannel – giriş' ),
                't_omni_lead'   => $paras( 'Omnichannel – liste giriş cümlesi' ),
                'omni_list'     => $lines( 'Omnichannel – liste' ),
                't_omni_mid'    => $paras( 'Omnichannel – liste sonrası cümle' ),
                't_omni_foot'   => $paras( 'Omnichannel – kapanış' ),
            ],
        ],
        'ai' => [
            'label'  => 'Yapay Zeka ve Growth',
            'fields' => [
                'h_ai'       => $head( 'Yapay Zeka – başlık' ),
                't_ai'       => $paras( 'Yapay Zeka – metin' ),
                't_ai_lead'  => $paras( 'Yapay Zeka – liste giriş cümlesi' ),
                'ai_list'    => $lines( 'Yapay Zeka – liste' ),
                't_ai_foot'  => $paras( 'Yapay Zeka – kapanış' ),
                'h_features' => $head( 'Growth / Otomasyon – bölüm başlığı' ),
                'features'   => [ 'label' => 'Growth Marketing ve Otomasyon kartları', 'type' => 'repeater', 'item' => 'Kart', 'title' => 'title', 'sub' => $detail_sub ],
            ],
        ],
        'olcum' => [
            'label'  => 'Ölçüm ve Optimizasyon',
            'fields' => [
                'h_analitik'      => $head( 'Veri Analitiği – başlık' ),
                't_analitik'      => $paras( 'Veri Analitiği – metin' ),
                'analitik_list'   => $lines( 'Veri Analitiği – metrikler (her satır bir madde)' ),
                't_analitik_foot' => $paras( 'Veri Analitiği – kapanış' ),
                'h_opt'           => $head( 'Sürekli Optimizasyon – başlık' ),
                't_opt'           => $paras( 'Sürekli Optimizasyon – metin' ),
                't_opt_lead'      => $paras( 'Sürekli Optimizasyon – liste giriş cümlesi' ),
                'opt_list'        => $lines( 'Sürekli Optimizasyon – liste' ),
                't_opt_foot'      => $paras( 'Sürekli Optimizasyon – kapanış' ),
            ],
        ],
        'isletme' => [
            'label'  => 'İşletmeler ve Başarı',
            'fields' => [
                'h_isletme'     => $head( 'Hangi İşletmeler İçin? – başlık' ),
                't_isletme'     => $paras( 'Hangi İşletmeler İçin? – metin' ),
                'sectors'       => [ 'label' => 'İşletme türleri', 'type' => 'repeater', 'item' => 'İşletme', 'title' => 'title', 'sub' => [
                    $icon,
                    [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                    [ 'id' => 'text',  'label' => 'Metin', 'type' => 'textarea' ],
                ] ],
                'h_basari'      => $head( 'Başarı Nasıl Ölçülür? – başlık' ),
                't_basari'      => $paras( 'Başarı – metin' ),
                't_basari_lead' => $paras( 'Başarı – liste giriş cümlesi' ),
                'basari_list'   => $lines( 'Başarı – göstergeler (her satır bir madde)' ),
                't_basari_foot' => $paras( 'Başarı – kapanış' ),
            ],
        ],
        'surec' => [
            'label'  => 'Süreç ve Neden Biz',
            'fields' => [
                'h_surec'      => $head( 'Çalışma Süreci – başlık' ),
                't_surec'      => $paras( 'Çalışma Süreci – giriş' ),
                'steps'        => [ 'label' => 'Çalışma süreci adımları', 'type' => 'repeater', 'item' => 'Adım', 'title' => 'a', 'shape' => [ 'a', 'b' ], 'sub' => $title_text ],
                'h_why'        => $head( 'Neden SEO Gezegeni? – başlık' ),
                't_why'        => $paras( 'Neden SEO Gezegeni? – metin' ),
                't_why_lead'   => $paras( 'Neden SEO Gezegeni? – liste giriş cümlesi' ),
                'why_list'     => $lines( 'Neden SEO Gezegeni? – prensipler (her satır bir madde)' ),
                't_why_foot'   => $paras( 'Neden SEO Gezegeni? – kapanış' ),
            ],
        ],
        'sss' => [
            'label'  => 'SSS ve Kapanış',
            'fields' => [
                'h_faq' => $head( 'SSS – başlık' ),
                'faqs'  => [ 'label' => 'Sık Sorulan Sorular (sayfaya FAQ schema da eklenir)', 'type' => 'repeater', 'item' => 'Soru', 'title' => 'a', 'shape' => [ 'a', 'b' ], 'sub' => [
                    [ 'id' => 'a', 'label' => 'Soru', 'type' => 'text' ],
                    [ 'id' => 'b', 'label' => 'Cevap', 'type' => 'textarea' ],
                ] ],
                'h_cta' => $head( 'Kapanış paneli – başlık' ),
                't_cta' => $paras( 'Kapanış paneli – metin' ),
            ],
        ],
    ];
}

/* ============================================================
   KAYIT
   ============================================================ */
function sg_dp_is_page( $post ) {
    return $post && ( 'page-360-dijital-pazarlama.php' === get_page_template_slug( $post ) || '360-dijital-pazarlama' === $post->post_name );
}

sg_pf_register( 'dp', [
    'meta'     => '_sg_dp_data',
    'input'    => 'sg_dp',
    'title'    => __( '360° Dijital Pazarlama Sayfası İçeriği', 'seogezegeni' ),
    'match'    => 'sg_dp_is_page',
    'fields'   => 'sg_dp_fields',
    'defaults' => 'sg_dp_default_content',
] );

/** Sablonun kullandigi icerik (varsayilan + panelde duzenlenen). */
function sg_dp_content( $post_id ) {
    return sg_pf_split_text( sg_pf_content( 'dp', $post_id ) );
}
