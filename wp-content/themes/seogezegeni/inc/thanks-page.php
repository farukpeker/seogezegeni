<?php
/**
 * Tesekkur sayfasi (page-tesekkurler.php).
 * Iletisim formu basariyla gonderilince ziyaretci buraya yonlendirilir.
 * Sayfa yoksa otomatik olusturulur; icerigi panelden duzenlenebilir.
 */

defined( 'ABSPATH' ) || exit;

require_once SG_DIR . '/inc/page-fields.php';

function sg_thanks_default_content() {
    return [
        'seo_title'  => '',
        'meta_desc'  => '',
        'hero_badge' => __( 'Mesajınız Bize Ulaştı', 'seogezegeni' ),
        'h_title'    => __( 'Teşekkür Ederiz, *Formunuzu Aldık*', 'seogezegeni' ),
        'hero_text'  => __( 'Mesajınız ekibimize başarıyla iletildi. Hedeflerinizi inceleyip en kısa sürede sizinle iletişime geçeceğiz.', 'seogezegeni' ),
        'steps'      => [
            [
                'icon'  => 'fa-solid fa-envelope-circle-check',
                'title' => __( 'Talebiniz Alındı', 'seogezegeni' ),
                'text'  => __( 'Form bilgileriniz ekibimize e-posta ile iletildi.', 'seogezegeni' ),
            ],
            [
                'icon'  => 'fa-solid fa-magnifying-glass-chart',
                'title' => __( 'İnceleme', 'seogezegeni' ),
                'text'  => __( 'Uzmanlarımız projenizi ve hedeflerinizi değerlendirir.', 'seogezegeni' ),
            ],
            [
                'icon'  => 'fa-solid fa-phone-volume',
                'title' => __( 'Size Dönüyoruz', 'seogezegeni' ),
                'text'  => __( 'Mesai saatleri içinde e-posta veya telefonla ulaşırız.', 'seogezegeni' ),
            ],
        ],
        'redirect_seconds' => '10',
        'redirect_text'    => __( '%s saniye içinde ana sayfaya yönlendirileceksiniz.', 'seogezegeni' ),
        'btn1_text'  => __( 'Ana Sayfaya Dön', 'seogezegeni' ),
        'btn1_url'   => '/',
        'btn2_text'  => __( 'Blogu Keşfet', 'seogezegeni' ),
        'btn2_url'   => '/blog/',
    ];
}

function sg_thanks_fields() {
    return [
        'icerik' => [
            'label'  => 'İçerik',
            'fields' => [
                'hero_badge' => [ 'label' => 'Rozet', 'type' => 'text' ],
                'h_title'    => [ 'label' => 'Başlık (*yıldız* arası yeşil vurgulanır)', 'type' => 'text' ],
                'hero_text'  => [ 'label' => 'Açıklama', 'type' => 'textarea' ],
                'steps'      => [
                    'label' => 'Sonraki adımlar', 'type' => 'repeater', 'item' => 'Adım', 'title' => 'title',
                    'sub'   => [
                        [ 'id' => 'icon',  'label' => 'İkon (Font Awesome sınıfı)', 'type' => 'icon' ],
                        [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                        [ 'id' => 'text',  'label' => 'Metin', 'type' => 'textarea' ],
                    ],
                ],
                'redirect_seconds' => [ 'label' => 'Ana sayfaya otomatik yönlendirme süresi (saniye; 0 yazarsanız kapanır)', 'type' => 'text' ],
                'redirect_text'    => [ 'label' => 'Yönlendirme bilgi metni (%s saniye sayısıyla değişir)', 'type' => 'text' ],
                'btn1_text'  => [ 'label' => '1. buton – yazı', 'type' => 'text' ],
                'btn1_url'   => [ 'label' => '1. buton – adres', 'type' => 'text' ],
                'btn2_text'  => [ 'label' => '2. buton – yazı', 'type' => 'text' ],
                'btn2_url'   => [ 'label' => '2. buton – adres', 'type' => 'text' ],
            ],
        ],
    ];
}

function sg_thanks_is_page( $post ) {
    return $post && ( 'page-tesekkurler.php' === get_page_template_slug( $post ) || 'tesekkurler' === $post->post_name );
}

sg_pf_register( 'thanks', [
    'meta'     => '_sg_thanks_data',
    'input'    => 'sg_thanks_pf',
    'title'    => __( 'Teşekkür Sayfası İçeriği', 'seogezegeni' ),
    'match'    => 'sg_thanks_is_page',
    'fields'   => 'sg_thanks_fields',
    'defaults' => 'sg_thanks_default_content',
] );

function sg_thanks_content( $post_id ) {
    return sg_pf_content( 'thanks', $post_id );
}

/** Teşekkür sayfasının adresi (sayfa yoksa boş döner; form mesajla devam eder). */
function sg_thanks_url() {
    $page = get_page_by_path( 'tesekkurler' );
    return $page && 'publish' === $page->post_status ? get_permalink( $page ) : '';
}

/** Sayfa yoksa bir kez olusturur. */
function sg_thanks_ensure_page() {
    if ( get_option( 'sg_thanks_page_created' ) ) {
        return;
    }
    if ( ! get_page_by_path( 'tesekkurler' ) ) {
        $id = wp_insert_post( [
            'post_title'   => __( 'Teşekkürler', 'seogezegeni' ),
            'post_name'    => 'tesekkurler',
            'post_type'    => 'page',
            'post_status'  => 'publish',
            'post_content' => '',
        ] );
        if ( $id && ! is_wp_error( $id ) ) {
            update_post_meta( $id, '_wp_page_template', 'page-tesekkurler.php' );
        }
    }
    update_option( 'sg_thanks_page_created', 1 );
}
add_action( 'after_switch_theme', 'sg_thanks_ensure_page' );
add_action( 'admin_init', 'sg_thanks_ensure_page' );

/** Teşekkür sayfası arama motorlarına kapalı (dönüşüm sayfası). */
function sg_thanks_noindex( $robots ) {
    if ( is_page() && sg_thanks_is_page( get_queried_object() ) ) {
        $robots['noindex'] = true;
        $robots['follow']  = true;
        unset( $robots['max-image-preview'] );
    }
    return $robots;
}
add_filter( 'wp_robots', 'sg_thanks_noindex' );
