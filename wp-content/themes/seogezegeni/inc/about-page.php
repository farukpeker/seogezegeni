<?php
/**
 * Hakkimizda sayfasi (page-hakkimizda.php) icin panelden duzenlenebilir icerik.
 * Motor: inc/page-fields.php  |  Varsayilanlar: inc/about-page-defaults.php
 */

defined( 'ABSPATH' ) || exit;

require_once SG_DIR . '/inc/page-fields.php';
require_once SG_DIR . '/inc/about-page-defaults.php';

function sg_about_fields() {
    $icon = [ 'id' => 'icon', 'label' => 'İkon (Font Awesome sınıfı)', 'type' => 'icon' ];

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
                'seo_title'    => [ 'label' => 'SEO Title (tarayıcı sekmesi ve Google başlığı; boşsa sayfa başlığı)', 'type' => 'text' ],
                'meta_desc'    => [ 'label' => 'Meta Description', 'type' => 'textarea' ],
                'hero_badge'   => [ 'label' => 'Hero – rozet metni', 'type' => 'text' ],
                'hero_title'   => [ 'label' => 'Hero – başlık (ilk satır)', 'type' => 'text' ],
                'hero_accent'  => [ 'label' => 'Hero – başlık (vurgulu ikinci satır)', 'type' => 'text' ],
                'hero_text'    => [ 'label' => 'Hero açıklaması', 'type' => 'textarea' ],
                'btn1_text'    => [ 'label' => '1. buton – yazı', 'type' => 'text' ],
                'btn1_url'     => [ 'label' => '1. buton – adres (örn. /iletisim/ veya tam adres)', 'type' => 'text' ],
                'btn2_text'    => [ 'label' => '2. buton – yazı', 'type' => 'text' ],
                'btn2_url'     => [ 'label' => '2. buton – adres', 'type' => 'text' ],
                'hero_stats'   => $rep( 'Hero rakamları', 'Rakam', 'value', [
                    [ 'id' => 'value', 'label' => 'Değer', 'type' => 'text' ],
                    [ 'id' => 'label', 'label' => 'Etiket', 'type' => 'text' ],
                ] ),
            ],
        ],
        'hikaye' => [
            'label'  => 'Hikayemiz',
            'fields' => [
                'h_story'      => [ 'label' => 'Başlık (*yıldız* arası yeşil vurgulanır)', 'type' => 'text' ],
                'story_text'   => [ 'label' => 'Hikaye metni (boş satırla paragraf ayırın)', 'type' => 'paras' ],
                'intro_points' => [ 'label' => 'Madde listesi (her satır bir madde)', 'type' => 'lines' ],
                'visual_items' => $rep( 'Sağdaki kartlar (öne çıkan görsel yoksa görünür)', 'Kart', 'title', [
                    $icon,
                    [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                    [ 'id' => 'text',  'label' => 'Alt metin', 'type' => 'text' ],
                ] ),
            ],
        ],
        'uzmanlik' => [
            'label'  => 'Uzmanlıklar',
            'fields' => [
                'h_exp'           => [ 'label' => 'Başlık', 'type' => 'text' ],
                'exp_lead'        => [ 'label' => 'Açıklama', 'type' => 'textarea' ],
                'expertise_cards' => $rep( 'Uzmanlık kartları', 'Kart', 'title', [
                    $icon,
                    [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                    [ 'id' => 'desc',  'label' => 'Metin', 'type' => 'textarea' ],
                ] ),
            ],
        ],
        'alanlar' => [
            'label'  => 'Çalışma Alanları',
            'fields' => [
                'h_areas'    => [ 'label' => 'Başlık', 'type' => 'text' ],
                'areas_lead' => [ 'label' => 'Açıklama', 'type' => 'textarea' ],
                'work_areas' => $rep( 'Çalışma alanları', 'Alan', 'title', [
                    $icon,
                    [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                    [ 'id' => 'desc',  'label' => 'Metin', 'type' => 'textarea' ],
                    [ 'id' => 'url',   'label' => 'Bağlantı adresi (örn. /seo/)', 'type' => 'text' ],
                ] ),
                'cta_icon'   => [ 'label' => 'Son kart (teklif) – ikon', 'type' => 'icon' ],
                'cta_title'  => [ 'label' => 'Son kart – başlık', 'type' => 'text' ],
                'cta_text'   => [ 'label' => 'Son kart – metin', 'type' => 'textarea' ],
                'cta_url'    => [ 'label' => 'Son kart – adres', 'type' => 'text' ],
            ],
        ],
        'medya' => [
            'label'  => 'Video, Foto, Instagram',
            'fields' => [
                'h_media'         => [ 'label' => 'Başlık', 'type' => 'text' ],
                'media_lead'      => [ 'label' => 'Açıklama', 'type' => 'textarea' ],
                'video_url'       => [ 'label' => 'YouTube video adresi', 'type' => 'text' ],
                'photo_url'       => [ 'label' => 'Ekip fotoğrafı adresi (Ortam Kitaplığı\'ndan yüklediğiniz görselin URL\'si)', 'type' => 'text' ],
                'photo_caption'   => [ 'label' => 'Fotoğraf açıklaması', 'type' => 'text' ],
                'instagram_posts' => $rep( 'Instagram paylaşımları', 'Paylaşım', 'title', [
                    [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                    [ 'id' => 'desc',  'label' => 'Açıklama', 'type' => 'textarea' ],
                    [ 'id' => 'url',   'label' => 'Paylaşım adresi', 'type' => 'text' ],
                    [ 'id' => 'image', 'label' => 'Görsel adresi (Instagram CDN bağlantıları süresi dolabilir; kalıcı için Ortam Kitaplığı\'na yükleyin)', 'type' => 'text' ],
                ] ),
            ],
        ],
        'kalite' => [
            'label'  => 'Kalite',
            'fields' => [
                'h_quality'       => [ 'label' => 'Başlık', 'type' => 'text' ],
                'quality_text'    => [ 'label' => 'Metin', 'type' => 'paras' ],
                'quality_metrics' => $rep( 'Kalite çubukları (değer 0-100)', 'Çubuk', 'a', [
                    [ 'id' => 'a', 'label' => 'Etiket', 'type' => 'text' ],
                    [ 'id' => 'b', 'label' => 'Değer (0-100)', 'type' => 'text' ],
                ], [ 'a', 'b' ] ),
            ],
        ],
    ];
}

function sg_about_is_page( $post ) {
    return $post && ( 'page-hakkimizda.php' === get_page_template_slug( $post ) || 'hakkimizda' === $post->post_name );
}

sg_pf_register( 'about', [
    'meta'     => '_sg_about_data',
    'input'    => 'sg_about',
    'title'    => __( 'Hakkımızda Sayfası İçeriği', 'seogezegeni' ),
    'match'    => 'sg_about_is_page',
    'fields'   => 'sg_about_fields',
    'defaults' => 'sg_about_default_content',
] );

/** Sablonun kullandigi icerik (varsayilan + panelde duzenlenen). */
function sg_about_content( $post_id ) {
    return sg_pf_content( 'about', $post_id );
}

/** Panelden girilen adres: "/yol/" ise site adresine, degilse oldugu gibi. */
function sg_about_url( $url ) {
    $url = trim( (string) $url );
    if ( '' !== $url && '/' === $url[0] && 0 !== strpos( $url, '//' ) ) {
        return home_url( $url );
    }
    return $url;
}
