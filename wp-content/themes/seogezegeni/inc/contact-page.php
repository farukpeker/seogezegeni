<?php
/**
 * Iletisim (page-iletisim.php) ve Gizlilik/Kullanim Kosullari
 * (page-gizlilik-ve-kullanim-kosullari.php) sayfalari icin panelden duzenlenebilir icerik.
 * Motor: inc/page-fields.php
 */

defined( 'ABSPATH' ) || exit;

require_once SG_DIR . '/inc/page-fields.php';

/* ============================================================
   ILETISIM
   ============================================================ */
function sg_contact_default_content() {
    $email  = sg_option( 'sg_email', 'info@seogezegeni.com' );
    $mobile = sg_option( 'sg_phone', '0555 162 62 11' );

    return [
        'seo_title'    => '',
        'meta_desc'    => __( 'SEO Gezegeni İzmir ve İstanbul ofis adresleri, telefon ve e-posta bilgileri. Teklif ve ücretsiz analiz için bize ulaşın.', 'seogezegeni' ),
        'hero_badge'   => __( 'Çekinmeden Bize Ulaşabilirsiniz', 'seogezegeni' ),
        'hero_title'   => __( 'İletişim', 'seogezegeni' ),
        'hero_accent'  => __( 'İzmir ve İstanbul Ofislerimiz', 'seogezegeni' ),
        'hero_text'    => __( 'Sorularınızı sormak veya teklif almak için iletişim formuna yazabilir, mail atabilir ya da doğrudan bizi telefondan arayabilirsiniz.', 'seogezegeni' ),
        'wa_text'      => __( 'Teklif ve analiz talepleri', 'seogezegeni' ),
        'wa_phone'     => '905551626211',
        'h_offices'    => __( 'Size En Yakın *SEO Gezegeni Ofisi*', 'seogezegeni' ),
        'offices_lead' => __( 'İzmir ve İstanbul ofislerimizden dijital pazarlama ihtiyaçlarınız için destek sağlıyoruz.', 'seogezegeni' ),
        'offices'      => [
            [
                'icon'    => 'fa-solid fa-location-dot',
                'city'    => __( 'İzmir Ofis', 'seogezegeni' ),
                'phone'   => '0232 344 22 72',
                'mobile'  => $mobile,
                'email'   => $email,
                'address' => __( 'Mansuroğlu Mah. 1593/1 Sk. No:10, İnce Plaza, K:7, D:72, 35535, Bayraklı/İzmir', 'seogezegeni' ),
                'map'     => 'https://www.google.com/maps/search/?api=1&query=Mansuroglu%20Mah.%201593%2F1%20Sk.%20No%3A10%20Ince%20Plaza%20Bayrakli%20Izmir',
            ],
            [
                'icon'    => 'fa-solid fa-building',
                'city'    => __( 'İstanbul Ofis', 'seogezegeni' ),
                'phone'   => '0212 909 13 08',
                'mobile'  => '0850 302 04 94',
                'email'   => $email,
                'address' => __( 'Maslak 42 Kolektif House - Maslak Mah. AOS 55. Sk. 42 Maslak Sit. B Blok, No: 4/542, Sarıyer/İstanbul', 'seogezegeni' ),
                'map'     => 'https://www.google.com/maps/search/?api=1&query=Maslak%2042%20Kolektif%20House%20Sariyer%20Istanbul',
            ],
        ],
        'h_form'       => __( 'Bize Yazın, En Kısa Sürede *Dönüş Yapalım*', 'seogezegeni' ),
        'form_lead'    => __( 'Ücretsiz analiz yapmak veya teklif vermek bizim işimizin bir parçasıdır. Projenizi ve hedeflerinizi bizimle paylaşın.', 'seogezegeni' ),
        'form_title'   => __( 'Teklif ve Analiz Formu', 'seogezegeni' ),
        'form_text'    => __( 'Formu doldurun, en kısa sürede sizinle iletişime geçelim.', 'seogezegeni' ),
    ];
}

function sg_contact_fields() {
    return [
        'seo' => [
            'label'  => 'SEO ve Hero',
            'fields' => [
                'seo_title'   => [ 'label' => 'SEO Title (boşsa sayfa başlığı)', 'type' => 'text' ],
                'meta_desc'   => [ 'label' => 'Meta Description', 'type' => 'textarea' ],
                'hero_badge'  => [ 'label' => 'Hero – rozet', 'type' => 'text' ],
                'hero_title'  => [ 'label' => 'Hero – başlık', 'type' => 'text' ],
                'hero_accent' => [ 'label' => 'Hero – vurgulu alt başlık', 'type' => 'text' ],
                'hero_text'   => [ 'label' => 'Hero açıklaması', 'type' => 'textarea' ],
                'wa_text'     => [ 'label' => 'WhatsApp kartı – alt metin (telefon ve e-posta Görünüm > Özelleştir\'den gelir)', 'type' => 'text' ],
                'wa_phone'    => [ 'label' => 'WhatsApp numarası (uluslararası, örn. 905551626211)', 'type' => 'text' ],
            ],
        ],
        'ofis' => [
            'label'  => 'Ofisler',
            'fields' => [
                'h_offices'    => [ 'label' => 'Başlık (*yıldız* arası yeşil vurgulanır)', 'type' => 'text' ],
                'offices_lead' => [ 'label' => 'Açıklama', 'type' => 'textarea' ],
                'offices'      => [
                    'label' => 'Ofisler', 'type' => 'repeater', 'item' => 'Ofis', 'title' => 'city',
                    'sub'   => [
                        [ 'id' => 'icon',    'label' => 'İkon (Font Awesome sınıfı)', 'type' => 'icon' ],
                        [ 'id' => 'city',    'label' => 'Ofis adı', 'type' => 'text' ],
                        [ 'id' => 'phone',   'label' => 'Telefon', 'type' => 'text' ],
                        [ 'id' => 'mobile',  'label' => 'Cep / ikinci telefon', 'type' => 'text' ],
                        [ 'id' => 'email',   'label' => 'E-posta (boşsa genel e-posta)', 'type' => 'text' ],
                        [ 'id' => 'address', 'label' => 'Adres', 'type' => 'textarea' ],
                        [ 'id' => 'map',     'label' => 'Harita bağlantısı', 'type' => 'text' ],
                    ],
                ],
            ],
        ],
        'form' => [
            'label'  => 'Form',
            'fields' => [
                'h_form'     => [ 'label' => 'Sol başlık', 'type' => 'text' ],
                'form_lead'  => [ 'label' => 'Sol açıklama', 'type' => 'textarea' ],
                'form_title' => [ 'label' => 'Form başlığı', 'type' => 'text' ],
                'form_text'  => [ 'label' => 'Form açıklaması', 'type' => 'textarea' ],
            ],
        ],
    ];
}

function sg_contact_is_page( $post ) {
    return $post && ( 'page-iletisim.php' === get_page_template_slug( $post ) || 'iletisim' === $post->post_name );
}

sg_pf_register( 'contact', [
    'meta'     => '_sg_contact_data',
    'input'    => 'sg_contact_pf',
    'title'    => __( 'İletişim Sayfası İçeriği', 'seogezegeni' ),
    'match'    => 'sg_contact_is_page',
    'fields'   => 'sg_contact_fields',
    'defaults' => 'sg_contact_default_content',
] );

function sg_contact_content( $post_id ) {
    return sg_pf_content( 'contact', $post_id );
}

/* ============================================================
   GIZLILIK VE KULLANIM KOSULLARI
   (asil metin sayfa editorunden gelir; burada hero alani)
   ============================================================ */
function sg_legal_default_content() {
    return [
        'seo_title'   => '',
        'meta_desc'   => '',
        'hero_badge'  => __( 'Yasal Bilgilendirme', 'seogezegeni' ),
        'hero_text'   => __( 'SEO Gezegeni web sitesini kullanırken kişisel veriler, çerezler ve hizmet koşulları hakkında bilmeniz gerekenleri tek sayfada topladık.', 'seogezegeni' ),
        'legal_items' => [
            [
                'icon'  => 'fa-solid fa-shield-halved',
                'title' => __( 'Veri Güvenliği', 'seogezegeni' ),
                'desc'  => __( 'Kişisel verilerin korunmasına ve güvenli işlenmesine önem veriyoruz.', 'seogezegeni' ),
            ],
            [
                'icon'  => 'fa-solid fa-cookie-bite',
                'title' => __( 'Çerez Kullanımı', 'seogezegeni' ),
                'desc'  => __( 'Site deneyimi ve reklam ölçümleme süreçlerinde çerezlerden yararlanıyoruz.', 'seogezegeni' ),
            ],
            [
                'icon'  => 'fa-solid fa-file-signature',
                'title' => __( 'Kullanım Şartları', 'seogezegeni' ),
                'desc'  => __( 'Web sitemizi kullanırken geçerli olan temel koşulları burada topladık.', 'seogezegeni' ),
            ],
        ],
    ];
}

function sg_legal_fields() {
    return [
        'hero' => [
            'label'  => 'Hero',
            'fields' => [
                'seo_title'   => [ 'label' => 'SEO Title (boşsa sayfa başlığı)', 'type' => 'text' ],
                'meta_desc'   => [ 'label' => 'Meta Description', 'type' => 'textarea' ],
                'hero_badge'  => [ 'label' => 'Hero – rozet', 'type' => 'text' ],
                'hero_text'   => [ 'label' => 'Hero açıklaması (başlık sayfa başlığıdır; asıl metin sayfa editöründen düzenlenir)', 'type' => 'textarea' ],
                'legal_items' => [
                    'label' => 'Özet kartları', 'type' => 'repeater', 'item' => 'Kart', 'title' => 'title',
                    'sub'   => [
                        [ 'id' => 'icon',  'label' => 'İkon (Font Awesome sınıfı)', 'type' => 'icon' ],
                        [ 'id' => 'title', 'label' => 'Başlık', 'type' => 'text' ],
                        [ 'id' => 'desc',  'label' => 'Açıklama', 'type' => 'textarea' ],
                    ],
                ],
            ],
        ],
    ];
}

function sg_legal_is_page( $post ) {
    return $post && ( 'page-gizlilik-ve-kullanim-kosullari.php' === get_page_template_slug( $post ) || 'gizlilik-ve-kullanim-kosullari' === $post->post_name );
}

sg_pf_register( 'legal', [
    'meta'     => '_sg_legal_data',
    'input'    => 'sg_legal_pf',
    'title'    => __( 'Gizlilik Sayfası Üst Alanı', 'seogezegeni' ),
    'match'    => 'sg_legal_is_page',
    'fields'   => 'sg_legal_fields',
    'defaults' => 'sg_legal_default_content',
] );

function sg_legal_content( $post_id ) {
    return sg_pf_content( 'legal', $post_id );
}
