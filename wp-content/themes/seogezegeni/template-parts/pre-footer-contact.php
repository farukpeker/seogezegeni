<?php
/**
 * Pre-footer Contact Section – İletişim
 * Blog hariç tüm sayfalarda footer'dan önce gösterilir.
 */
?>
<!-- ============================================================
     İLETİŞİM
     ============================================================ -->
<section class="sg-contact section-pad soft-section" id="iletisim" aria-labelledby="contact-heading">
    <div class="container">
        <div class="row" style="gap:0;">

            <!-- Left: info + map -->
            <div style="flex:0 0 42%;max-width:42%;padding:0 15px;">
                <div data-sg-reveal="left">
                    <?php sg_section_head(
                        __( 'İletişim', 'seogezegeni' ),
                        __( 'Sizinle Çalışmaya Hazırız', 'seogezegeni' ),
                        __( 'Projenizi konuşmak, SEO analizinizi almak veya sadece merhaba demek için bize ulaşın.', 'seogezegeni' )
                    ); ?>

                    <div class="sg-contact-info">
                        <?php
                        $phone   = sg_option('sg_phone', '0555 162 62 11');
                        $email   = sg_option('sg_email', 'info@seogezegeni.com');
                        $offices = [
                            [
                                'district' => __( 'Bayraklı', 'seogezegeni' ),
                                'city'     => __( 'İzmir', 'seogezegeni' ),
                            ],
                            [
                                'district' => __( 'Maslak', 'seogezegeni' ),
                                'city'     => __( 'İstanbul', 'seogezegeni' ),
                            ],
                        ];
                        $hours = sg_option('sg_working_hours', 'Pzt–Cum: 09:00–18:00');
                        ?>

                        <div class="sg-contact-item">
                            <div class="sg-contact-icon" aria-hidden="true">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="sg-contact-detail">
                                <strong><?php _e('Telefon', 'seogezegeni'); ?></strong>
                                <a href="tel:<?php echo esc_attr(preg_replace('/\D/', '', $phone)); ?>">
                                    <?php echo esc_html($phone); ?>
                                </a>
                            </div>
                        </div>

                        <div class="sg-contact-item">
                            <div class="sg-contact-icon" aria-hidden="true">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="sg-contact-detail">
                                <strong><?php _e('E-posta', 'seogezegeni'); ?></strong>
                                <a href="mailto:<?php echo esc_attr(antispambot($email)); ?>">
                                    <?php echo esc_html(antispambot($email)); ?>
                                </a>
                            </div>
                        </div>

                        <div class="sg-contact-item sg-contact-offices">
                            <div class="sg-contact-icon" aria-hidden="true">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="sg-contact-detail">
                                <strong><?php _e('Ofislerimiz', 'seogezegeni'); ?></strong>
                                <div class="sg-office-list" aria-label="<?php esc_attr_e('Ofis konumları', 'seogezegeni'); ?>">
                                    <?php foreach ($offices as $office) : ?>
                                        <span class="sg-office-place">
                                            <i class="fa-solid fa-location-dot sg-office-place-icon" aria-hidden="true"></i>
                                            <span class="sg-office-district"><?php echo esc_html($office['district']); ?></span>
                                            <span class="sg-office-city"><?php echo esc_html($office['city']); ?></span>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <?php if ($hours) : ?>
                        <div class="sg-contact-item sg-contact-hours">
                            <div class="sg-contact-icon" aria-hidden="true">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div class="sg-contact-detail">
                                <strong><?php _e('Çalışma Saatleri', 'seogezegeni'); ?></strong>
                                <span><?php echo esc_html($hours); ?></span>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div><!-- /sg-contact-info -->

                    <!-- Map embed -->
                    <?php
                    $map_url = sg_option('sg_map_embed');
                    if ($map_url) :
                    ?>
                        <div class="sg-map-wrap">
                            <iframe
                                src="<?php echo esc_url($map_url); ?>"
                                title="<?php esc_attr_e('SEO Gezegeni Ofis Konumu', 'seogezegeni'); ?>"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                allowfullscreen>
                            </iframe>
                        </div>
                    <?php else : ?>
                        <div class="sg-map-wrap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3124.5637428195546!2d27.182291599999996!3d38.4515446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b963fc0467457f%3A0xbac51dac81878446!2sSEO%20GEZEGEN%C4%B0%20-%20Dijital%20Pazarlama%20Ajans%C4%B1%20%7C%20%C4%B0zmir!5e0!3m2!1str!2str!4v1782479633402!5m2!1str!2str"
                                title="<?php esc_attr_e('Bayraklı İzmir harita', 'seogezegeni'); ?>"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    <?php endif; ?>

                </div>
            </div><!-- /contact left -->

            <!-- Right: form -->
            <div style="flex:0 0 58%;max-width:58%;padding:0 15px;" data-sg-reveal="right">
                <div class="sg-contact-form-wrap">
                    <h3 style="color:var(--sg-text-primary);margin-bottom:8px;">
                        <?php _e( 'Ücretsiz Teklif Alın', 'seogezegeni' ); ?>
                    </h3>
                    <p style="font-size:.9rem;margin-bottom:28px;">
                        <?php _e( 'Formu doldurun, en kısa sürede size dönelim.', 'seogezegeni' ); ?>
                    </p>

                    <?php
                    if ( function_exists('wpcf7') ) :
                        $forms = get_posts(['post_type' => 'wpcf7_contact_form', 'posts_per_page' => 1, 'post_status' => 'publish']);
                        if ($forms) :
                            echo do_shortcode('[contact-form-7 id="' . esc_attr($forms[0]->ID) . '" title="' . esc_attr($forms[0]->post_title) . '"]');
                        else :
                    ?>
                        <p style="color:var(--sg-text-secondary);">
                            <?php _e('Contact Form 7 formu bulunamadı. Lütfen bir form oluşturun ve buraya kısa kodu ekleyin.', 'seogezegeni'); ?>
                        </p>
                    <?php endif;
                    else :
                    ?>
                    <form class="sg-native-contact-form"
                          id="sgContactForm"
                          action="<?php echo esc_url( admin_url('admin-ajax.php') ); ?>"
                          method="post"
                          novalidate>
                        <?php wp_nonce_field('sg_contact_nonce', 'sg_contact_nonce_field'); ?>
                        <input type="hidden" name="action" value="sg_contact">

                        <div class="sg-form-row">
                            <div class="sg-form-group">
                                <label for="sg_name"><?php _e('Adınız Soyadınız *', 'seogezegeni'); ?></label>
                                <input type="text" id="sg_name" name="sg_name"
                                       placeholder="<?php esc_attr_e('Adınız Soyadınız', 'seogezegeni'); ?>"
                                       required aria-required="true">
                            </div>
                            <div class="sg-form-group">
                                <label for="sg_company"><?php _e('Şirket Adı', 'seogezegeni'); ?></label>
                                <input type="text" id="sg_company" name="sg_company"
                                       placeholder="<?php esc_attr_e('Şirketinizin adı', 'seogezegeni'); ?>">
                            </div>
                        </div>

                        <div class="sg-form-row">
                            <div class="sg-form-group">
                                <label for="sg_email"><?php _e('E-posta Adresiniz *', 'seogezegeni'); ?></label>
                                <input type="email" id="sg_email" name="sg_email"
                                       placeholder="ornek@sirket.com"
                                       required aria-required="true">
                            </div>
                            <div class="sg-form-group">
                                <label for="sg_tel"><?php _e('Telefon Numaranız', 'seogezegeni'); ?></label>
                                <input type="tel" id="sg_tel" name="sg_tel"
                                       placeholder="05xx xxx xx xx">
                            </div>
                        </div>

                        <div class="sg-form-group">
                            <label for="sg_website"><?php _e('Web Siteniz', 'seogezegeni'); ?></label>
                            <input type="url" id="sg_website" name="sg_website"
                                   placeholder="https://www.siteniz.com">
                        </div>

                        <div class="sg-form-group">
                            <span class="sg-form-label"><?php _e('İlgilendiğiniz Hizmetler', 'seogezegeni'); ?></span>
                            <div class="sg-hq-dropdown sg-form-services-dropdown" id="sgContactServicesDropdown">
                                <button type="button" class="sg-hq-dropdown-btn" aria-haspopup="listbox" aria-expanded="false">
                                    <span class="sg-hq-dropdown-text"><?php _e('Hizmet seçin…', 'seogezegeni'); ?></span>
                                    <i class="fa-solid fa-chevron-down sg-hq-dropdown-arrow" aria-hidden="true"></i>
                                </button>
                                <div class="sg-hq-dropdown-panel" role="listbox" aria-multiselectable="true" aria-label="<?php esc_attr_e('İlgilendiğiniz Hizmetler', 'seogezegeni'); ?>">
                                    <?php foreach ( sg_get_quote_services() as $value => $label ) : ?>
                                        <?php $id = 'sg_service_' . esc_attr($value); ?>
                                        <label class="sg-hq-option" for="<?php echo $id; ?>">
                                            <input type="checkbox"
                                                   id="<?php echo $id; ?>"
                                                   name="sg_services[]"
                                                   value="<?php echo esc_attr($value); ?>"
                                                   class="sg-hq-option-cb">
                                            <span class="sg-hq-option-check" aria-hidden="true"></span>
                                            <span><?php echo esc_html($label); ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="sg-form-group">
                            <label for="sg_message"><?php _e('Mesajınız *', 'seogezegeni'); ?></label>
                            <textarea id="sg_message" name="sg_message"
                                      placeholder="<?php esc_attr_e('Projeniz ve hedefleriniz hakkında bilgi verin...', 'seogezegeni'); ?>"
                                      required aria-required="true"></textarea>
                        </div>

                        <button type="submit" class="sg-btn sg-btn-primary w-full" style="justify-content:center;font-size:1rem;padding:16px;">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php _e('Mesaj Gönder', 'seogezegeni'); ?>
                        </button>

                        <div id="sgContactMsg" role="status" aria-live="polite"
                             style="display:none;margin-top:16px;padding:12px 16px;border-radius:8px;font-size:.9rem;"></div>
                    </form>
                    <?php endif; ?>

                </div><!-- /sg-contact-form-wrap -->
            </div><!-- /contact right -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- / İLETİŞİM -->
