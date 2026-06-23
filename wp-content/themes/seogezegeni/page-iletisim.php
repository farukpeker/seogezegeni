<?php
/**
 * Template Name: İletişim Sayfası
 * Template Post Type: page
 *
 * SEO Gezegeni iletişim sayfası özel şablonu.
 */
get_header();

if ( have_posts() ) {
    the_post();
}

$email          = sg_option( 'sg_email', 'info@seogezegeni.com' );
$mobile_phone   = sg_option( 'sg_phone', '0555 162 62 11' );
$working_hours  = sg_option( 'sg_working_hours', 'Hafta İçi 09.00 / 18.00' );
$contact_forms  = function_exists( 'wpcf7' ) ? get_posts( [
    'post_type'      => 'wpcf7_contact_form',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
] ) : [];

$offices = [
    [
        'city'    => __( 'İzmir Ofis', 'seogezegeni' ),
        'icon'    => 'fa-solid fa-location-dot',
        'phone'   => '0232 344 22 72',
        'mobile'  => $mobile_phone,
        'email'   => $email,
        'address' => __( 'Mansuroğlu Mah. 1593/1 Sk. No:10, İnce Plaza, K:7, D:72, 35535, Bayraklı/İzmir', 'seogezegeni' ),
        'map'     => 'https://www.google.com/maps/search/?api=1&query=Mansuroglu%20Mah.%201593%2F1%20Sk.%20No%3A10%20Ince%20Plaza%20Bayrakli%20Izmir',
    ],
    [
        'city'    => __( 'İstanbul Ofis', 'seogezegeni' ),
        'icon'    => 'fa-solid fa-building',
        'phone'   => '0212 909 13 08',
        'mobile'  => '0850 302 04 94',
        'email'   => $email,
        'address' => __( 'Maslak 42 Kolektif House - Maslak Mah. AOS 55. Sk. 42 Maslak Sit. B Blok, No: 4/542, Sarıyer/İstanbul', 'seogezegeni' ),
        'map'     => 'https://www.google.com/maps/search/?api=1&query=Maslak%2042%20Kolektif%20House%20Sariyer%20Istanbul',
    ],
];

$channels = [
    [ 'fa-solid fa-phone', __( 'Telefon', 'seogezegeni' ), $mobile_phone, 'tel:' . preg_replace( '/\D/', '', $mobile_phone ) ],
    [ 'fa-regular fa-envelope', __( 'E-posta', 'seogezegeni' ), $email, 'mailto:' . antispambot( $email ) ],
    [ 'fa-brands fa-whatsapp', __( 'WhatsApp', 'seogezegeni' ), __( 'Teklif ve analiz talepleri', 'seogezegeni' ), 'https://api.whatsapp.com/send?phone=905551626211' ],
];
?>

<main id="sg-main" class="sg-contact-page" role="main">

    <section class="sg-page-hero sg-contact-hero" aria-labelledby="contact-page-heading">
        <div class="container">
            <div class="sg-page-hero-inner">
                <div class="sg-contact-hero-grid">
                    <div class="sg-contact-hero-copy" data-sg-reveal="left">
                        <span class="sg-hero-badge">
                            <i class="fa-regular fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Çekinmeden Bize Ulaşabilirsiniz', 'seogezegeni' ); ?>
                        </span>
                        <h1 id="contact-page-heading">
                            <?php esc_html_e( 'İletişim', 'seogezegeni' ); ?>
                            <span><?php esc_html_e( 'İzmir ve İstanbul Ofislerimiz', 'seogezegeni' ); ?></span>
                        </h1>
                        <p>
                            <?php esc_html_e( 'Sorularınızı sormak veya teklif almak için iletişim formuna yazabilir, mail atabilir ya da doğrudan bizi telefondan arayabilirsiniz.', 'seogezegeni' ); ?>
                        </p>
                    </div>

                    <div class="sg-contact-quick-grid" data-sg-reveal="right">
                        <?php foreach ( $channels as $channel ) : ?>
                            <a class="sg-contact-quick-card" href="<?php echo esc_url( $channel[3] ); ?>">
                                <span aria-hidden="true"><i class="<?php echo esc_attr( $channel[0] ); ?>"></i></span>
                                <strong><?php echo esc_html( $channel[1] ); ?></strong>
                                <em><?php echo esc_html( $channel[2] ); ?></em>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Bar -->
    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <section class="sg-contact-offices section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Ofislerimiz', 'seogezegeni' ),
                __( 'Size En Yakın <span class="text-accent">SEO Gezegeni Ofisi</span>', 'seogezegeni' ),
                __( 'İzmir ve İstanbul ofislerimizden dijital pazarlama ihtiyaçlarınız için destek sağlıyoruz.', 'seogezegeni' ),
                true
            );
            ?>

            <div class="sg-contact-office-grid">
                <?php foreach ( $offices as $index => $office ) : ?>
                    <article class="sg-contact-office-card" data-sg-reveal data-delay="<?php echo esc_attr( $index * 120 ); ?>">
                        <div class="sg-contact-office-head">
                            <div class="sg-contact-office-icon" aria-hidden="true">
                                <i class="<?php echo esc_attr( $office['icon'] ); ?>"></i>
                            </div>
                            <h2><?php echo esc_html( $office['city'] ); ?></h2>
                        </div>

                        <div class="sg-contact-office-list">
                            <a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', $office['phone'] ) ); ?>">
                                <i class="fa-solid fa-phone" aria-hidden="true"></i>
                                <?php echo esc_html( $office['phone'] ); ?>
                            </a>
                            <a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', $office['mobile'] ) ); ?>">
                                <i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i>
                                <?php echo esc_html( $office['mobile'] ); ?>
                            </a>
                            <a href="mailto:<?php echo esc_attr( antispambot( $office['email'] ) ); ?>">
                                <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                                <?php echo esc_html( antispambot( $office['email'] ) ); ?>
                            </a>
                            <p>
                                <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i>
                                <?php echo esc_html( $office['address'] ); ?>
                            </p>
                        </div>

                        <a class="sg-service-link" href="<?php echo esc_url( $office['map'] ); ?>" target="_blank" rel="noopener">
                            <?php esc_html_e( 'Haritada Aç', 'seogezegeni' ); ?>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-contact-main section-pad alt-section" aria-labelledby="contact-form-heading">
        <div class="container">
            <div class="sg-contact-main-grid">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Bizimle İletişime Geçin', 'seogezegeni' ),
                        __( 'Bize Yazın, En Kısa Sürede <span class="text-accent">Dönüş Yapalım</span>', 'seogezegeni' ),
                        __( 'Ücretsiz analiz yapmak veya teklif vermek bizim işimizin bir parçasıdır. Projenizi ve hedeflerinizi bizimle paylaşın.', 'seogezegeni' )
                    );
                    ?>

                    <div class="sg-contact-info">
                        <div class="sg-contact-item">
                            <div class="sg-contact-icon" aria-hidden="true"><i class="fa-regular fa-clock"></i></div>
                            <div class="sg-contact-detail">
                                <strong><?php esc_html_e( 'Çalışma Saatleri', 'seogezegeni' ); ?></strong>
                                <span><?php echo esc_html( $working_hours ); ?></span>
                                <span><?php esc_html_e( 'Diğer saatlerde mail gönderebilirsiniz.', 'seogezegeni' ); ?></span>
                            </div>
                        </div>

                        <div class="sg-contact-item">
                            <div class="sg-contact-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></div>
                            <div class="sg-contact-detail">
                                <strong><?php esc_html_e( 'Ne İçin Ulaşabilirsiniz?', 'seogezegeni' ); ?></strong>
                                <span><?php esc_html_e( 'SEO, Google Ads, sosyal medya, web tasarım ve dijital pazarlama talepleriniz için bize yazabilirsiniz.', 'seogezegeni' ); ?></span>
                            </div>
                        </div>
                    </div>

                    <?php
                    $map_url = sg_option( 'sg_map_embed' );
                    if ( $map_url ) :
                    ?>
                        <div class="sg-map-wrap">
                            <iframe
                                src="<?php echo esc_url( $map_url ); ?>"
                                title="<?php esc_attr_e( 'SEO Gezegeni ofis konumu', 'seogezegeni' ); ?>"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                allowfullscreen>
                            </iframe>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="sg-contact-form-wrap" data-sg-reveal="right">
                    <h2 id="contact-form-heading"><?php esc_html_e( 'Teklif ve Analiz Formu', 'seogezegeni' ); ?></h2>
                    <p><?php esc_html_e( 'Formu doldurun, en kısa sürede sizinle iletişime geçelim.', 'seogezegeni' ); ?></p>

                    <?php if ( $contact_forms ) : ?>
                        <?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $contact_forms[0]->ID ) . '" title="' . esc_attr( $contact_forms[0]->post_title ) . '"]' ); ?>
                    <?php else : ?>
                        <form class="sg-native-contact-form" id="sgContactForm" action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" method="post" novalidate>
                            <?php wp_nonce_field( 'sg_contact_nonce', 'sg_contact_nonce_field' ); ?>
                            <input type="hidden" name="action" value="sg_contact">

                            <div class="sg-form-row">
                                <div class="sg-form-group">
                                    <label for="sg_name"><?php esc_html_e( 'Adınız Soyadınız *', 'seogezegeni' ); ?></label>
                                    <input type="text" id="sg_name" name="sg_name" placeholder="<?php esc_attr_e( 'Adınız Soyadınız', 'seogezegeni' ); ?>" required aria-required="true">
                                </div>
                                <div class="sg-form-group">
                                    <label for="sg_company"><?php esc_html_e( 'Şirket Adı', 'seogezegeni' ); ?></label>
                                    <input type="text" id="sg_company" name="sg_company" placeholder="<?php esc_attr_e( 'Şirketinizin adı', 'seogezegeni' ); ?>">
                                </div>
                            </div>

                            <div class="sg-form-row">
                                <div class="sg-form-group">
                                    <label for="sg_email"><?php esc_html_e( 'E-posta Adresiniz *', 'seogezegeni' ); ?></label>
                                    <input type="email" id="sg_email" name="sg_email" placeholder="ornek@sirket.com" required aria-required="true">
                                </div>
                                <div class="sg-form-group">
                                    <label for="sg_tel"><?php esc_html_e( 'Telefon Numaranız', 'seogezegeni' ); ?></label>
                                    <input type="tel" id="sg_tel" name="sg_tel" placeholder="05xx xxx xx xx">
                                </div>
                            </div>

                            <div class="sg-form-group">
                                <label for="sg_website"><?php esc_html_e( 'Web Siteniz', 'seogezegeni' ); ?></label>
                                <input type="url" id="sg_website" name="sg_website" placeholder="https://www.siteniz.com">
                            </div>

                            <div class="sg-form-group">
                                <label for="sg_service"><?php esc_html_e( 'İlgilendiğiniz Hizmet', 'seogezegeni' ); ?></label>
                                <select id="sg_service" name="sg_service">
                                    <option value=""><?php esc_html_e( 'Seçiniz...', 'seogezegeni' ); ?></option>
                                    <option value="seo"><?php esc_html_e( 'SEO Hizmetleri', 'seogezegeni' ); ?></option>
                                    <option value="sem"><?php esc_html_e( 'SEM / Google Ads', 'seogezegeni' ); ?></option>
                                    <option value="sosyal"><?php esc_html_e( 'Sosyal Medya Yönetimi', 'seogezegeni' ); ?></option>
                                    <option value="web"><?php esc_html_e( 'Web Tasarım', 'seogezegeni' ); ?></option>
                                    <option value="icerik"><?php esc_html_e( 'İçerik Pazarlaması', 'seogezegeni' ); ?></option>
                                    <option value="reklam"><?php esc_html_e( 'Dijital Reklam', 'seogezegeni' ); ?></option>
                                    <option value="diger"><?php esc_html_e( 'Diğer', 'seogezegeni' ); ?></option>
                                </select>
                            </div>

                            <div class="sg-form-group">
                                <label for="sg_message"><?php esc_html_e( 'Mesajınız *', 'seogezegeni' ); ?></label>
                                <textarea id="sg_message" name="sg_message" placeholder="<?php esc_attr_e( 'Projeniz ve hedefleriniz hakkında bilgi verin...', 'seogezegeni' ); ?>" required aria-required="true"></textarea>
                            </div>

                            <button type="submit" class="sg-btn sg-btn-primary w-full">
                                <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                                <?php esc_html_e( 'Mesaj Gönder', 'seogezegeni' ); ?>
                            </button>

                            <div id="sgContactMsg" role="status" aria-live="polite"></div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
