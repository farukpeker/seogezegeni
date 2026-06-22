<?php
/**
 * SEO Gezegeni – WordPress Customizer Ayarları
 */

defined( 'ABSPATH' ) || exit;

function seogezegeni_customizer( WP_Customize_Manager $wp_customize ) {

    /* ============================================================
       PANEL: SEO Gezegeni Ayarları
       ============================================================ */
    $wp_customize->add_panel( 'sg_panel', [
        'title'       => __( 'SEO Gezegeni Ayarları', 'seogezegeni' ),
        'priority'    => 30,
        'description' => __( 'Tema genelindeki içerik ve renk ayarları.', 'seogezegeni' ),
    ]);

    /* ============================================================
       BÖLÜM 1: Genel / İletişim Bilgileri
       ============================================================ */
    $wp_customize->add_section( 'sg_contact_section', [
        'title'    => __( 'İletişim Bilgileri', 'seogezegeni' ),
        'panel'    => 'sg_panel',
        'priority' => 10,
    ]);

    $contact_settings = [
        'sg_phone'       => [ 'default' => '0555 162 62 11',   'label' => 'Telefon Numarası' ],
        'sg_phone2'      => [ 'default' => '',                  'label' => 'Telefon 2 (opsiyonel)' ],
        'sg_email'       => [ 'default' => 'info@seogezegeni.com', 'label' => 'E-posta Adresi' ],
        'sg_address_izmir'   => [ 'default' => 'Bayraklı / İZMİR', 'label' => 'Adres – İzmir' ],
        'sg_address_istanbul' => [ 'default' => 'Maslak / İSTANBUL', 'label' => 'Adres – İstanbul' ],
        'sg_working_hours'   => [ 'default' => 'Pzt–Cum: 09:00–18:00', 'label' => 'Çalışma Saatleri' ],
        'sg_map_embed'       => [ 'default' => '', 'label' => 'Google Maps Embed URL' ],
    ];

    foreach ( $contact_settings as $key => $args ) {
        $wp_customize->add_setting( $key, [
            'default'           => $args['default'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control( $key, [
            'label'   => __( $args['label'], 'seogezegeni' ),
            'section' => 'sg_contact_section',
            'type'    => 'text',
        ]);
    }


    /* ============================================================
       BÖLÜM 2: Sosyal Medya
       ============================================================ */
    $wp_customize->add_section( 'sg_social_section', [
        'title'    => __( 'Sosyal Medya Bağlantıları', 'seogezegeni' ),
        'panel'    => 'sg_panel',
        'priority' => 20,
    ]);

    $social = [
        'sg_facebook'  => 'Facebook URL',
        'sg_instagram' => 'Instagram URL',
        'sg_linkedin'  => 'LinkedIn URL',
        'sg_twitter'   => 'Twitter / X URL',
        'sg_youtube'   => 'YouTube URL',
        'sg_whatsapp'  => 'WhatsApp Numarası (örn: 905551626211)',
    ];
    foreach ( $social as $key => $label ) {
        $wp_customize->add_setting( $key, [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control( $key, [
            'label'   => __( $label, 'seogezegeni' ),
            'section' => 'sg_social_section',
            'type'    => 'url',
        ]);
    }

    /* ============================================================
       BÖLÜM 3: Hero Alanı
       ============================================================ */
    $wp_customize->add_section( 'sg_hero_section', [
        'title'    => __( 'Ana Sayfa – Hero Alanı', 'seogezegeni' ),
        'panel'    => 'sg_panel',
        'priority' => 30,
    ]);

    $hero_settings = [
        'sg_hero_badge'    => [ 'default' => 'SEO & Dijital Pazarlama Ajansı',           'label' => 'Hero Rozeti' ],
        'sg_hero_title'    => [ 'default' => 'Dijital Varlığınızı <span>Güçlendirin</span>', 'label' => 'Hero Başlığı (HTML destekli)' ],
        'sg_hero_subtitle' => [ 'default' => 'SEO, SEM ve dijital pazarlama stratejileriyle markanızı zirveye taşıyoruz. Bayraklı/İzmir ve Maslak/İstanbul ofislerimizle Türkiye genelinde hizmet veriyoruz.', 'label' => 'Hero Alt Açıklama' ],
        'sg_hero_btn1_text' => [ 'default' => 'Ücretsiz SEO Analizi',    'label' => 'Buton 1 Metni' ],
        'sg_hero_btn1_url'  => [ 'default' => '/iletisim/',              'label' => 'Buton 1 Bağlantısı' ],
        'sg_hero_btn2_text' => [ 'default' => 'Hizmetlerimiz',           'label' => 'Buton 2 Metni' ],
        'sg_hero_btn2_url'  => [ 'default' => '/hizmetler/',             'label' => 'Buton 2 Bağlantısı' ],
    ];
    foreach ( $hero_settings as $key => $args ) {
        $wp_customize->add_setting( $key, [
            'default'           => $args['default'],
            'sanitize_callback' => 'wp_kses_post',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control( $key, [
            'label'   => __( $args['label'], 'seogezegeni' ),
            'section' => 'sg_hero_section',
            'type'    => 'text',
        ]);
    }

    /* ============================================================
       BÖLÜM 4: İstatistik Sayaçları
       ============================================================ */
    $wp_customize->add_setting( 'sg_hero_video_url', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ]);
    $wp_customize->add_control( 'sg_hero_video_url', [
        'label'       => __( 'Hero YouTube Video URL', 'seogezegeni' ),
        'description' => __( 'Bos birakilirsa mevcut hero arka plani kullanilir. URL girilirse video sessiz ve otomatik oynar.', 'seogezegeni' ),
        'section'     => 'sg_hero_section',
        'type'        => 'url',
    ]);

    $wp_customize->add_section( 'sg_stats_section', [
        'title'    => __( 'İstatistik Sayaçları', 'seogezegeni' ),
        'panel'    => 'sg_panel',
        'priority' => 40,
    ]);

    $stats = [
        'sg_stat_projects' => [ 'default' => '250', 'label' => 'Tamamlanan Proje Sayısı' ],
        'sg_stat_clients'  => [ 'default' => '180', 'label' => 'Mutlu Müşteri Sayısı' ],
        'sg_stat_years'    => [ 'default' => '8',   'label' => 'Yıllık Deneyim' ],
        'sg_stat_projects_label' => [ 'default' => 'Tamamlanan Proje', 'label' => 'Proje Etiketi' ],
        'sg_stat_clients_label'  => [ 'default' => 'Mutlu Müşteri',    'label' => 'Müşteri Etiketi' ],
        'sg_stat_years_label'    => [ 'default' => 'Yıllık Deneyim',   'label' => 'Yıl Etiketi' ],
    ];
    foreach ( $stats as $key => $args ) {
        $wp_customize->add_setting( $key, [
            'default'           => $args['default'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control( $key, [
            'label'   => __( $args['label'], 'seogezegeni' ),
            'section' => 'sg_stats_section',
            'type'    => 'text',
        ]);
    }

    /* ============================================================
       BÖLÜM 5: CTA Bölümü
       ============================================================ */
    $wp_customize->add_section( 'sg_cta_section', [
        'title'    => __( 'CTA – Çağrı Alanı', 'seogezegeni' ),
        'panel'    => 'sg_panel',
        'priority' => 50,
    ]);

    $cta_settings = [
        'sg_cta_title'    => [ 'default' => 'İşletmenizi Büyütmeye Hazır mısınız?', 'label' => 'CTA Başlığı' ],
        'sg_cta_desc'     => [ 'default' => 'Ücretsiz SEO analizi ile dijital büyüme yolculuğunuzu bugün başlatın. Uzman ekibimiz sizi bekliyor.', 'label' => 'CTA Açıklaması' ],
        'sg_cta_btn_text' => [ 'default' => 'Ücretsiz Analiz Al',  'label' => 'CTA Buton Metni' ],
        'sg_cta_btn_url'  => [ 'default' => '/iletisim/',           'label' => 'CTA Buton Bağlantısı' ],
        'sg_cta_btn2_text' => [ 'default' => '0555 162 62 11',     'label' => 'CTA İkincil Buton' ],
        'sg_cta_btn2_url'  => [ 'default' => 'tel:05551626211',    'label' => 'CTA İkincil Buton Bağlantısı' ],
    ];
    foreach ( $cta_settings as $key => $args ) {
        $wp_customize->add_setting( $key, [
            'default'           => $args['default'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control( $key, [
            'label'   => __( $args['label'], 'seogezegeni' ),
            'section' => 'sg_cta_section',
            'type'    => 'text',
        ]);
    }

    /* ============================================================
       BÖLÜM 6: Renkler
       ============================================================ */
    $wp_customize->add_section( 'sg_colors_section', [
        'title'    => __( 'Tema Renkleri', 'seogezegeni' ),
        'panel'    => 'sg_panel',
        'priority' => 60,
    ]);

    $colors = [
        'sg_color_accent' => [ 'default' => '#a8e63d', 'label' => 'Vurgu Rengi (Neon Yeşil)' ],
        'sg_color_bg'     => [ 'default' => '#0a0a0a', 'label' => 'Ana Arka Plan Rengi' ],
        'sg_color_card'   => [ 'default' => '#1a1a1a', 'label' => 'Kart Arka Plan Rengi' ],
    ];
    foreach ( $colors as $key => $args ) {
        $wp_customize->add_setting( $key, [
            'default'           => $args['default'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, [
            'label'   => __( $args['label'], 'seogezegeni' ),
            'section' => 'sg_colors_section',
        ]));
    }

    /* ============================================================
       BÖLÜM 7: Hakkımızda
       ============================================================ */
    $wp_customize->add_section( 'sg_about_section', [
        'title'    => __( 'Hakkımızda Bölümü', 'seogezegeni' ),
        'panel'    => 'sg_panel',
        'priority' => 70,
    ]);

    $about_settings = [
        'sg_about_label'    => [ 'default' => 'Hakkımızda',          'label' => 'Bölüm Etiketi' ],
        'sg_about_title'    => [ 'default' => 'Sonuçlar Kendisi Konuşuyor', 'label' => 'Başlık' ],
        'sg_about_desc'     => [ 'default' => 'SEO Gezegeni olarak yalnızca bir ajans değiliz – ölçülebilir büyüme hedeflerinizde gerçek ortağınızız. Özelleştirilmiş stratejiler ve son teknoloji araçlarla başarı hikayeleri yaratıyoruz.', 'label' => 'Açıklama' ],
        'sg_about_btn_text' => [ 'default' => 'Birlikte Çalışalım', 'label' => 'Buton Metni' ],
        'sg_about_btn_url'  => [ 'default' => '/hakkimizda/',       'label' => 'Buton URL' ],
    ];
    foreach ( $about_settings as $key => $args ) {
        $wp_customize->add_setting( $key, [
            'default'           => $args['default'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control( $key, [
            'label'   => __( $args['label'], 'seogezegeni' ),
            'section' => 'sg_about_section',
            'type'    => 'text',
        ]);
    }

}
add_action( 'customize_register', 'seogezegeni_customizer' );

/* ============================================================
   CUSTOMIZER LIVE PREVIEW (postMessage)
   ============================================================ */
function seogezegeni_customize_preview_js() {
    wp_enqueue_script(
        'sg-customizer-preview',
        SG_URI . '/assets/js/customizer-preview.js',
        [ 'customize-preview' ],
        SG_VER,
        true
    );
}
add_action( 'customize_preview_init', 'seogezegeni_customize_preview_js' );

/* ============================================================
   OUTPUT DYNAMIC CSS (color variables)
   ============================================================ */
function seogezegeni_dynamic_css() {
    $accent = sanitize_hex_color( get_theme_mod( 'sg_color_accent', '#a8e63d' ) );
    $bg     = sanitize_hex_color( get_theme_mod( 'sg_color_bg',     '#0a0a0a' ) );
    $card   = sanitize_hex_color( get_theme_mod( 'sg_color_card',   '#1a1a1a' ) );

    if (
        $accent === '#a8e63d' &&
        $bg     === '#0a0a0a' &&
        $card   === '#1a1a1a'
    ) return; // defaults – no override needed

    echo '<style id="sg-dynamic-css">:root{';
    if ( $accent ) echo '--sg-accent:' . esc_html( $accent ) . ';';
    if ( $bg     ) echo '--sg-bg-primary:' . esc_html( $bg ) . ';';
    if ( $card   ) echo '--sg-bg-card:' . esc_html( $card ) . ';';
    echo '}</style>';
}
add_action( 'wp_head', 'seogezegeni_dynamic_css' );
