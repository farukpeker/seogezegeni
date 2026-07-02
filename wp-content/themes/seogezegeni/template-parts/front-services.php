<?php
/**
 * Front page services section.
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="sg-services section-pad soft-section" id="hizmetler" aria-labelledby="services-heading">
    <div class="container">
        <?php sg_section_head(
            __( 'Hizmetlerimiz', 'seogezegeni' ),
            __( 'Dijital Başarı İçin <span class="text-accent">360° Dijital Çözüm</span>', 'seogezegeni' ),
            __( 'İşletmenizin dijital büyümesini desteklemek için 360° SEO, Sosyal Medya, Web Tasarım ve dijital pazarlama hizmetleri sunuyoruz.', 'seogezegeni' ),
            true
        ); ?>

        <div class="row" style="gap:0;margin-top:40px;">
            <?php
            $services = [
                [
                    'icon'  => 'fa-solid fa-magnifying-glass-chart',
                    'title' => __( 'SEO', 'seogezegeni' ),
                    'desc'  => __( 'Teknik SEO, içerik optimizasyonu ve otorite çalışmalarıyla organik görünürlüğünüzü artırın.', 'seogezegeni' ),
                    'url'   => home_url('/seo/'),
                ],
                [
                    'icon'  => 'fa-solid fa-chart-pie',
                    'title' => __( '360° DİJİTAL PAZARLAMA', 'seogezegeni' ),
                    'desc'  => __( 'Markanızın tüm dijital kanallarını tek strateji altında büyüme hedeflerinize göre planlayın.', 'seogezegeni' ),
                    'url'   => home_url('/dijital-reklam/'),
                ],
                [
                    'icon'  => 'fa-solid fa-share-nodes',
                    'title' => __( 'SOSYAL MEDYA YÖNETİMİ', 'seogezegeni' ),
                    'desc'  => __( 'İçerik üretimi, topluluk yönetimi ve düzenli raporlamayla sosyal medya varlığınızı güçlendirin.', 'seogezegeni' ),
                    'url'   => home_url('/sosyal-medya/'),
                ],
                [
                    'icon'  => 'fa-brands fa-google',
                    'title' => __( 'GOOGLE & META REKLAMLARI', 'seogezegeni' ),
                    'desc'  => __( 'Google, Instagram ve Facebook reklamlarında dönüşüm odaklı kampanya kurguları oluşturun.', 'seogezegeni' ),
                    'url'   => home_url('/sem/'),
                ],
                [
                    'icon'  => 'fa-solid fa-laptop-code',
                    'title' => __( 'WEB TASARIM ve YAZILIM', 'seogezegeni' ),
                    'desc'  => __( 'SEO uyumlu, hızlı, mobil dostu ve dönüşüm odaklı web siteleri ile yazılım çözümleri geliştirin.', 'seogezegeni' ),
                    'url'   => home_url('/web-tasarim/'),
                ],
                [
                    'icon'  => 'fa-solid fa-paper-plane',
                    'title' => __( 'Teklif Alın', 'seogezegeni' ),
                    'desc'  => __( 'Hedeflerinize uygun dijital büyüme planını birlikte çıkaralım. Ekibimiz kısa sürede sizinle iletişime geçsin.', 'seogezegeni' ),
                    'url'   => '#sgHeroQuoteForm',
                    'cta'   => true,
                ],
            ];

            foreach ( $services as $i => $svc ) :
                $delay = ( $i % 3 ) * 150;
            ?>
                <div style="flex:0 0 33.333%;max-width:33.333%;padding:12px;"
                     data-sg-reveal
                     data-delay="<?php echo esc_attr($delay); ?>">
                    <div class="sg-service-card<?php echo ! empty( $svc['cta'] ) ? ' sg-service-card-cta' : ''; ?>">
                        <div class="sg-service-icon" aria-hidden="true">
                            <i class="<?php echo esc_attr($svc['icon']); ?>"></i>
                        </div>
                        <h4><?php echo esc_html($svc['title']); ?></h4>
                        <p><?php echo esc_html($svc['desc']); ?></p>
                        <a href="<?php echo esc_url($svc['url']); ?>" class="sg-service-link">
                            <?php echo ! empty( $svc['cta'] ) ? esc_html__( 'Teklif İste', 'seogezegeni' ) : esc_html__( 'Detaylı Bilgi', 'seogezegeni' ); ?>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
