</div><!-- /#sg-page-wrap -->

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="sg-footer" role="contentinfo">

    <!-- FOOTER TOP -->
    <div class="sg-footer-top">
        <div class="container">
            <div class="row" style="gap:0;">

                <!-- Col 1: Brand -->
                <div style="flex:0 0 30%;max-width:30%;padding:0 15px;" class="footer-col-brand">
                    <div class="sg-footer-brand">
                        <div class="sg-footer-logo">
                            <?php if ( has_custom_logo() ) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <div class="sg-footer-logo-text">
                                    SEO <span>Gezegeni</span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        <?php else : ?>
                            <p><?php _e( 'SEO Gezegeni, işletmenizi dijital dünyada zirveye taşımak için özelleştirilmiş SEO, SEM ve dijital pazarlama stratejileri sunar.', 'seogezegeni' ); ?></p>
                        <?php endif; ?>

                        <?php
                        $footer_badges = [
                            [
                                'url'   => sg_option( 'sg_google_partner_url', 'https://www.google.com/partners/agency?id=9685918675' ),
                                'image' => sg_option( 'sg_google_partner_badge', 'https://www.gstatic.com/partners/badge/images/2022/PremierBadgeClickable.svg' ),
                                'icon'  => 'fa-brands fa-google',
                                'label' => __( 'Google Partner', 'seogezegeni' ),
                                'class' => 'sg-footer-badge-partner',
                            ],
                            [
                                'url'   => sg_option( 'sg_dmca_url', 'https://www.dmca.com/Protection/Status.aspx' ),
                                'image' => sg_option( 'sg_dmca_badge' ),
                                'icon'  => 'fa-solid fa-shield-halved',
                                'label' => __( 'DMCA Protected', 'seogezegeni' ),
                                'class' => 'sg-footer-badge-small',
                            ],
                            [
                                'url'   => sg_option( 'sg_credit_card_url', home_url( '/kredi-karti-ile-odeme/' ) ),
                                'image' => '',
                                'icon'  => 'fa-regular fa-credit-card',
                                'label' => __( 'Kredi Kartı ile Ödeme', 'seogezegeni' ),
                                'class' => 'sg-footer-badge-small',
                            ],
                        ];
                        ?>
                        <div class="sg-footer-badges" aria-label="<?php esc_attr_e( 'Footer rozetleri', 'seogezegeni' ); ?>">
                            <?php foreach ( $footer_badges as $badge ) : ?>
                                <a class="sg-footer-badge <?php echo esc_attr( $badge['class'] ); ?>"
                                   href="<?php echo esc_url( $badge['url'] ); ?>"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   aria-label="<?php echo esc_attr( $badge['label'] ); ?>">
                                    <?php if ( $badge['image'] ) : ?>
                                        <img src="<?php echo esc_url( $badge['image'] ); ?>" alt="<?php echo esc_attr( $badge['label'] ); ?>">
                                    <?php else : ?>
                                        <i class="<?php echo esc_attr( $badge['icon'] ); ?>" aria-hidden="true"></i>
                                        <span><?php echo esc_html( $badge['label'] ); ?></span>
                                    <?php endif; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div><!-- /col brand -->

                <!-- Col 2: Quick Links -->
                <div style="flex:0 0 20%;max-width:20%;padding:0 15px;" class="footer-col-links">
                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    <?php else : ?>
                        <div class="sg-footer-widget">
                            <h4><?php _e( 'Hızlı Bağlantılar', 'seogezegeni' ); ?></h4>
                            <nav class="sg-footer-links" aria-label="<?php esc_attr_e( 'Hızlı bağlantılar', 'seogezegeni' ); ?>">
                                <?php
                                wp_nav_menu([
                                    'theme_location' => 'footer',
                                    'container'      => false,
                                    'menu_class'     => '',
                                    'depth'          => 1,
                                    'fallback_cb'    => function() {
                                        $links = [
                                            home_url('/')             => __('Ana Sayfa', 'seogezegeni'),
                                            home_url('/biz-kimiz/')  => __('Biz Kimiz', 'seogezegeni'),
                                            home_url('/hizmetler/')   => __('Hizmetler', 'seogezegeni'),
                                            home_url('/referanslar/') => __('Referanslar', 'seogezegeni'),
                                            home_url('/blog/')        => __('Blog', 'seogezegeni'),
                                            home_url('/iletisim/')    => __('İletişim', 'seogezegeni'),
                                        ];
                                        foreach ($links as $url => $label) {
                                            echo '<a href="' . esc_url($url) . '"><i class="fa-solid fa-angle-right" aria-hidden="true"></i> ' . esc_html($label) . '</a>';
                                        }
                                    },
                                    'items_wrap' => '%3$s',
                                ]);
                                ?>
                            </nav>
                        </div>
                    <?php endif; ?>
                </div><!-- /col links -->

                <!-- Col 3: Services -->
                <div style="flex:0 0 22%;max-width:22%;padding:0 15px;" class="footer-col-services">
                    <div class="sg-footer-widget">
                        <h4><?php _e( 'Hizmetlerimiz', 'seogezegeni' ); ?></h4>
                        <nav class="sg-footer-links" aria-label="<?php esc_attr_e( 'Hizmetler', 'seogezegeni' ); ?>">
                            <?php
                            $services = [
                                home_url('/seo/')           => __('SEO Hizmetleri',           'seogezegeni'),
                                home_url('/sem/')           => __('SEM / Google Ads',          'seogezegeni'),
                                home_url('/sosyal-medya/')  => __('Sosyal Medya Yönetimi',     'seogezegeni'),
                                home_url('/web-tasarim/')   => __('Web Tasarım',               'seogezegeni'),
                                home_url('/icerik-pazarlama/') => __('İçerik Pazarlaması',    'seogezegeni'),
                                home_url('/dijital-reklam/') => __('Dijital Reklam',           'seogezegeni'),
                            ];
                            foreach ($services as $url => $label) {
                                echo '<a href="' . esc_url($url) . '"><i class="fa-solid fa-angle-right" aria-hidden="true"></i> ' . esc_html($label) . '</a>';
                            }
                            ?>
                        </nav>
                    </div>
                </div><!-- /col services -->

                <!-- Col 4: Contact -->
                <div style="flex:0 0 28%;max-width:28%;padding:0 15px;" class="footer-col-contact">
                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    <?php else : ?>
                        <div class="sg-footer-widget">
                            <h4><?php _e( 'İletişim Bilgileri', 'seogezegeni' ); ?></h4>
                            <div class="sg-footer-contact">

                                <?php
                                $phone = sg_option( 'sg_phone', '0555 162 62 11' );
                                ?>
                                <div class="sg-footer-contact-item">
                                    <i class="fa-solid fa-phone sg-footer-contact-icon" aria-hidden="true"></i>
                                    <a href="tel:<?php echo esc_attr( preg_replace('/\D/', '', $phone) ); ?>">
                                        <?php echo esc_html( $phone ); ?>
                                    </a>
                                </div>

                                <?php
                                $email = sg_option( 'sg_email', 'info@seogezegeni.com' );
                                ?>
                                <div class="sg-footer-contact-item">
                                    <i class="fa-regular fa-envelope sg-footer-contact-icon" aria-hidden="true"></i>
                                    <a href="mailto:<?php echo esc_attr( antispambot($email) ); ?>">
                                        <?php echo esc_html( antispambot($email) ); ?>
                                    </a>
                                </div>

                                <?php
                                $izmir    = sg_option( 'sg_address_izmir',    'Bayraklı / İZMİR' );
                                $istanbul = sg_option( 'sg_address_istanbul', 'Maslak / İSTANBUL' );
                                ?>
                                <div class="sg-footer-contact-item">
                                    <i class="fa-solid fa-location-dot sg-footer-contact-icon" aria-hidden="true"></i>
                                    <span>
                                        <?php echo esc_html( $izmir ); ?><br>
                                        <?php echo esc_html( $istanbul ); ?>
                                    </span>
                                </div>

                                <?php
                                $hours = sg_option( 'sg_working_hours', 'Pzt–Cum: 09:00–18:00' );
                                if ( $hours ) :
                                ?>
                                <div class="sg-footer-contact-item">
                                    <i class="fa-regular fa-clock sg-footer-contact-icon" aria-hidden="true"></i>
                                    <span><?php echo esc_html( $hours ); ?></span>
                                </div>
                                <?php endif; ?>

                                <div class="sg-footer-socials sg-footer-contact-socials" role="list" aria-label="<?php esc_attr_e( 'Sosyal medya bağlantıları', 'seogezegeni' ); ?>">
                                    <?php
                                    $socials = [
                                        'sg_facebook'  => [ 'icon' => 'fa-brands fa-facebook-f',  'label' => 'Facebook' ],
                                        'sg_instagram' => [ 'icon' => 'fa-brands fa-instagram',    'label' => 'Instagram' ],
                                        'sg_linkedin'  => [ 'icon' => 'fa-brands fa-linkedin-in',  'label' => 'LinkedIn' ],
                                        'sg_twitter'   => [ 'icon' => 'fa-brands fa-x-twitter',    'label' => 'Twitter / X' ],
                                        'sg_youtube'   => [ 'icon' => 'fa-brands fa-youtube',      'label' => 'YouTube' ],
                                        'sg_pinterest' => [ 'icon' => 'fa-brands fa-pinterest-p',  'label' => 'Pinterest' ],
                                        'sg_whatsapp'  => [ 'icon' => 'fa-brands fa-whatsapp',     'label' => 'WhatsApp' ],
                                    ];
                                    $any_social = false;
                                    foreach ( $socials as $key => $data ) :
                                        $url = sg_option( $key );
                                        if ( ! $url ) continue;
                                        $any_social = true;
                                        if ( $key === 'sg_whatsapp' ) {
                                            $url = 'https://wa.me/' . preg_replace( '/\D/', '', $url );
                                        }
                                    ?>
                                        <a href="<?php echo esc_url( $url ); ?>"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           role="listitem"
                                           aria-label="<?php echo esc_attr( $data['label'] ); ?>">
                                            <i class="<?php echo esc_attr( $data['icon'] ); ?>" aria-hidden="true"></i>
                                        </a>
                                    <?php endforeach; ?>
                                    <?php if ( ! $any_social ) : ?>
                                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                                        <a href="#" aria-label="Twitter / X"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                                        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                                        <a href="#" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p" aria-hidden="true"></i></a>
                                        <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    <?php endif; ?>
                </div><!-- /col contact -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /sg-footer-top -->

    <!-- FOOTER BOTTOM -->
    <div class="sg-footer-bottom">
        <div class="container">
            <div class="sg-footer-bottom-inner">

                <p class="sg-copyright">
                    <?php
                    $year = date_i18n( 'Y' );
                    printf(
                        /* translators: 1: year, 2: site name */
                        esc_html__( '© %1$s %2$s – Tüm hakları saklıdır.', 'seogezegeni' ),
                        esc_html( $year ),
                        '<a href="' . esc_url( home_url('/') ) . '">' . esc_html( get_bloginfo('name') ) . '</a>'
                    );
                    ?>
                </p>

                <nav class="sg-footer-legal" aria-label="<?php esc_attr_e( 'Yasal bağlantılar', 'seogezegeni' ); ?>">
                    <a href="<?php echo esc_url( home_url('/gizlilik-politikasi/') ); ?>">
                        <?php _e( 'Gizlilik Politikası', 'seogezegeni' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url('/kullanim-kosullari/') ); ?>">
                        <?php _e( 'Kullanım Koşulları', 'seogezegeni' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url('/kredi-karti-ile-odeme/') ); ?>">
                        <?php _e( 'Kredi Kartı ile Ödeme', 'seogezegeni' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url('/cerez-politikasi/') ); ?>">
                        <?php _e( 'Çerez Politikası', 'seogezegeni' ); ?>
                    </a>
                </nav>

            </div>
        </div>
    </div><!-- /sg-footer-bottom -->

</footer>
<!-- / FOOTER -->

<!-- WhatsApp float button -->
<?php
$whatsapp = sg_option( 'sg_whatsapp' );
$phone    = sg_option( 'sg_phone', '905551626211' );
$wa_number = $whatsapp ?: $phone;
$wa_number = preg_replace( '/\D/', '', $wa_number );
if ( ! $wa_number ) $wa_number = '905551626211';
?>
<a href="https://wa.me/<?php echo esc_attr( $wa_number ); ?>"
   class="sg-whatsapp-float"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="<?php esc_attr_e( 'WhatsApp ile iletişim', 'seogezegeni' ); ?>">
    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
</a>

<button type="button"
        class="sg-scroll-top"
        aria-label="<?php esc_attr_e( 'Sayfanin basina don', 'seogezegeni' ); ?>">
    <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
