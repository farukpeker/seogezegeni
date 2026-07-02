<?php
/**
 * Pre-footer CTA Banner – Harekete Geç
 * Blog hariç tüm sayfalarda footer'dan önce gösterilir.
 */
?>
<!-- ============================================================
     CTA BANNER – Harekete Geç
     ============================================================ -->
<section class="sg-cta section-pad dark-section" id="cta" aria-labelledby="cta-heading">
    <div class="container">
        <div class="sg-cta-inner" data-sg-reveal>

            <div class="sg-label" style="display:inline-flex;justify-content:center;margin:0 auto 24px;">
                <span class="sg-label-dot" aria-hidden="true"></span>
                <?php _e( 'Harekete Geç', 'seogezegeni' ); ?>
            </div>

            <h2 id="cta-heading">
                <?php echo wp_kses_post( sg_option( 'sg_cta_title',
                    __( 'İşletmenizi Büyütmeye <span class="text-accent">Hazır mısınız?</span>', 'seogezegeni' )
                ) ); ?>
            </h2>

            <p>
                <?php echo esc_html( sg_option( 'sg_cta_desc',
                    __( 'Ücretsiz SEO analizi ile dijital büyüme yolculuğunuzu bugün başlatın. Uzman ekibimiz sizi bekliyor.', 'seogezegeni' )
                ) ); ?>
            </p>

            <div class="sg-cta-actions">
                <?php $cta_email = sg_option('sg_email', 'info@seogezegeni.com'); ?>
                <a href="mailto:<?php echo esc_attr( antispambot( $cta_email ) ); ?>"
                   class="sg-btn sg-btn-primary">
                    <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                    <?php echo esc_html( antispambot( $cta_email ) ); ?>
                </a>
                <a href="<?php echo esc_url( sg_option('sg_cta_btn2_url', 'tel:05551626211') ); ?>"
                   class="sg-btn sg-btn-outline">
                    <i class="fa-solid fa-phone" aria-hidden="true"></i>
                    <?php echo esc_html( sg_option('sg_cta_btn2_text', sg_option('sg_phone', '0555 162 62 11')) ); ?>
                </a>
            </div>

            <!-- Trust badges -->
            <div style="margin-top:48px;display:flex;justify-content:center;flex-wrap:wrap;gap:24px;opacity:.6;" aria-label="<?php esc_attr_e('Güven rozetleri', 'seogezegeni'); ?>">
                <?php
                $badges = [
                    'fa-brands fa-google'       => __('Google Partner', 'seogezegeni'),
                    'fa-brands fa-meta'         => __('Meta Business Partner', 'seogezegeni'),
                    'fa-solid fa-shield-halved' => __('SSL Güvenli', 'seogezegeni'),
                    'fa-solid fa-award'         => __('ISO Sertifikalı', 'seogezegeni'),
                ];
                foreach ($badges as $icon => $label) : ?>
                    <div style="display:flex;align-items:center;gap:8px;color:var(--sg-text-secondary);font-size:.85rem;">
                        <i class="<?php echo esc_attr($icon); ?>" style="color:var(--sg-accent);" aria-hidden="true"></i>
                        <?php echo esc_html($label); ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div><!-- /sg-cta-inner -->
    </div><!-- /.container -->
</section>
<!-- / CTA -->
