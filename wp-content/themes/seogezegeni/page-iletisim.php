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

    <section class="sg-contact-main section-pad soft-section" aria-labelledby="contact-form-heading">
        <div class="container">
            <div class="sg-contact-main-grid">
                <div class="sg-contact-map-col" data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Bizimle İletişime Geçin', 'seogezegeni' ),
                        __( 'Bize Yazın, En Kısa Sürede <span class="text-accent">Dönüş Yapalım</span>', 'seogezegeni' ),
                        __( 'Ücretsiz analiz yapmak veya teklif vermek bizim işimizin bir parçasıdır. Projenizi ve hedeflerinizi bizimle paylaşın.', 'seogezegeni' )
                    );
                    $map_url = sg_option( 'sg_map_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3124.5637428195546!2d27.182291599999996!3d38.4515446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b963fc0467457f%3A0xbac51dac81878446!2sSEO%20GEZEGEN%C4%B0%20-%20Dijital%20Pazarlama%20Ajans%C4%B1%20%7C%20%C4%B0zmir!5e0!3m2!1str!2str!4v1782479633402!5m2!1str!2str' );
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
                                <span class="sg-form-label"><?php esc_html_e( 'İlgilendiğiniz Hizmetler', 'seogezegeni' ); ?></span>
                                <div class="sg-hq-dropdown sg-form-services-dropdown" id="sgContactServicesDropdown">
                                    <button type="button" class="sg-hq-dropdown-btn" aria-haspopup="listbox" aria-expanded="false">
                                        <span class="sg-hq-dropdown-text"><?php esc_html_e( 'Hizmet seçin…', 'seogezegeni' ); ?></span>
                                        <i class="fa-solid fa-chevron-down sg-hq-dropdown-arrow" aria-hidden="true"></i>
                                    </button>
                                    <div class="sg-hq-dropdown-panel" role="listbox" aria-multiselectable="true" aria-label="<?php esc_attr_e( 'İlgilendiğiniz Hizmetler', 'seogezegeni' ); ?>">
                                        <?php foreach ( sg_get_quote_services() as $value => $label ) :
                                            $id = 'sg_svc_' . esc_attr( $value );
                                        ?>
                                            <label class="sg-hq-option" for="<?php echo $id; ?>">
                                                <input type="checkbox"
                                                       id="<?php echo $id; ?>"
                                                       name="sg_services[]"
                                                       value="<?php echo esc_attr( $value ); ?>"
                                                       class="sg-hq-option-cb">
                                                <span class="sg-hq-option-check" aria-hidden="true"></span>
                                                <span><?php echo esc_html( $label ); ?></span>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
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

<?php get_template_part( 'template-parts/pre-footer-cta' ); ?>

</main>

<?php get_footer(); ?>
