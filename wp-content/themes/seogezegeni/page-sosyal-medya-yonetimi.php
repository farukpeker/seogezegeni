<?php
/**
 * Template Name: Sosyal Medya Yonetimi Sayfasi
 * Template Post Type: page
 *
 * Sosyal medya yonetimi hizmet sayfasi ozel sablonu.
 * Icerik: inc/sm-page-defaults.php (panelden duzenlenebilir: inc/sm-page.php)
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

extract( sg_sm_content( get_the_ID() ) );

$contact_url = home_url( '/iletisim/' );
$plain       = static function ( $text ) {
    return str_replace( '*', '', $text );
};

$toc = [
    'sm-nedir'    => __( 'Nedir?', 'seogezegeni' ),
    'sm-avantaj'  => __( 'Avantajlar', 'seogezegeni' ),
    'sm-hizmet'   => __( 'Hizmetler', 'seogezegeni' ),
    'sm-strateji' => __( 'Strateji', 'seogezegeni' ),
    'sm-isletme'  => __( 'İşletmeler', 'seogezegeni' ),
    'sm-olcum'    => __( 'Ölçüm', 'seogezegeni' ),
    'sosyal-surec' => __( 'Süreç', 'seogezegeni' ),
    'sm-faq'      => __( 'SSS', 'seogezegeni' ),
];
?>

<main id="sg-main" class="sg-seo-page sg-social-page" role="main">

    <section class="sg-page-hero sg-seo-hero sg-social-hero" aria-labelledby="social-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-share-nodes" aria-hidden="true"></i>
                        <?php esc_html_e( 'Profesyonel Sosyal Medya Ajansı', 'seogezegeni' ); ?>
                    </span>
                    <h1 id="social-page-heading"><?php echo sg_pf_heading( $hero_title ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
                    <p><?php echo esc_html( $hero_text ); ?></p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Sosyal Medya Planı Al', 'seogezegeni' ); ?>
                        </a>
                        <a href="#sosyal-surec" class="sg-btn sg-btn-outline">
                            <i class="fa-solid fa-route" aria-hidden="true"></i>
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual sg-social-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-social-phone">
                        <div class="sg-social-phone-head"></div>
                        <div class="sg-social-post">
                            <span><i class="fa-brands fa-instagram"></i></span>
                            <strong>Reels</strong>
                            <em>+%68 etkileşim</em>
                        </div>
                        <div class="sg-social-post">
                            <span><i class="fa-brands fa-linkedin-in"></i></span>
                            <strong>LinkedIn</strong>
                            <em>B2B görünürlük</em>
                        </div>
                        <div class="sg-social-post">
                            <span><i class="fa-brands fa-facebook-f"></i></span>
                            <strong>Topluluk</strong>
                            <em>Mesaj & yorum</em>
                        </div>
                    </div>
                    <div class="sg-seo-dashboard sg-social-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-chart-line"></i><span>social performance</span></div>
                        <div class="sg-seo-result is-active"><strong>ER</strong><span>Etkileşim oranı</span><em>+%44</em></div>
                        <div class="sg-seo-result"><strong>CTR</strong><span>Web sitesi tıklaması</span><em>+%31</em></div>
                        <div class="sg-seo-chart"><span style="height:44%"></span><span style="height:58%"></span><span style="height:72%"></span><span style="height:88%"></span><span style="height:96%"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <nav class="sg-seo-toc" aria-label="<?php esc_attr_e( 'Sayfa içi menü', 'seogezegeni' ); ?>">
        <div class="container">
            <ul>
                <?php foreach ( $toc as $anchor => $label ) : ?>
                    <li><a href="#<?php echo esc_attr( $anchor ); ?>"><?php echo esc_html( $label ); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <!-- 1. Giriş -->
    <section class="sg-seo-intro section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Sosyal Medya Yönetimi', 'seogezegeni' ), sg_pf_heading( $h_intro ), '', false, true ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['intro_a'] ); ?>
                    </div>
                </div>
                <aside class="sg-seo-stat-panel" data-sg-reveal="right">
                    <?php foreach ( $stats as $stat ) : ?>
                        <div class="sg-seo-stat">
                            <strong><?php echo esc_html( $stat['value'] ); ?></strong>
                            <span><?php echo esc_html( $stat['label'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </aside>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['intro_b'] ); ?>
            </div>
        </div>
    </section>

    <!-- 2. Nedir? -->
    <section id="sm-nedir" class="sg-dp-nedir section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Tanım', 'seogezegeni' ), sg_pf_heading( $h_nedir ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['nedir'] ); ?>
                        <?php sg_seo_p( $seo_text['nedir_foot'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['nedir_lead'], 'class="sg-seo-lead sg-dp-list-lead" style="margin-bottom:20px"' ); ?>
                    <?php sg_pb_numbered( $nedir_list ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Neden gerekli? -->
    <section class="sg-dp-compact section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Profesyonel Yönetim', 'seogezegeni' ), sg_pf_heading( $h_gerek ), '', false, true ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['gerek'] ); ?>
                        <?php sg_seo_p( $seo_text['gerek_foot'] ); ?>
                    </div>
                </div>
                <div class="sg-gm-panel" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['gerek_lead'], 'class="sg-gm-panel-lead"' ); ?>
                    <?php sg_pb_check_list( $gerek_list, 'sg-seo-ai-list' ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Avantajlar -->
    <section id="sm-avantaj" class="sg-seo-benefits section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Avantajlar', 'seogezegeni' ), sg_pf_heading( $h_avantaj ), '', true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['avantaj'] ); ?>
            </div>
            <?php sg_pb_metric_cards( $avantaj_cards ); ?>
        </div>
    </section>

    <!-- 5. Stratejik süreç -->
    <section class="sg-dp-basari section-pad light-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Strateji', 'seogezegeni' ), sg_pf_heading( $h_soru ), '', false, true ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['soru'] ); ?>
                </div>
            </div>
            <div class="sg-gm-panel sg-gm-wide" data-sg-reveal>
                <?php sg_seo_p( $seo_text['soru_lead'], 'class="sg-gm-panel-lead"' ); ?>
                <?php sg_pb_numbered_grid( $soru_list, 4 ); ?>
            </div>
            <?php sg_pb_callout( $seo_text['soru_foot'] ); ?>
        </div>
    </section>

    <!-- 6. Hizmetler -->
    <section id="sm-hizmet" class="sg-dp-hizmet section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Hizmet Kapsamı', 'seogezegeni' ), sg_pf_heading( $h_hiz ), '', true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['hiz'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['hiz'] ); ?>
            </div>
            <?php sg_pb_tabs( $services, 'sm-s', 'h3', __( 'Sosyal medya yönetimi hizmetleri', 'seogezegeni' ) ); ?>
        </div>
    </section>

    <!-- 7. Strateji nasıl oluşturulur? -->
    <section id="sm-strateji" class="sg-dp-features section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Strateji', 'seogezegeni' ), sg_pf_heading( $h_strateji ), '', true, true ); ?>
            <div class="sg-seo-richtext is-cols-2">
                <?php sg_seo_p( $seo_text['strateji'] ); ?>
            </div>
            <?php sg_pb_stack_acc( $strategy_cards, 'sm-st' ); ?>
        </div>
    </section>

    <!-- 8. Sürekli analiz ve optimizasyon -->
    <section class="sg-dp-hedef sg-dp-compact section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Optimizasyon', 'seogezegeni' ), sg_pf_heading( $h_opt ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['opt'] ); ?>
                    </div>
                </div>
                <div class="sg-gm-panel" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['opt_lead'], 'class="sg-gm-panel-lead"' ); ?>
                    <?php sg_pb_check_list( $opt_list, 'sg-seo-ai-list' ); ?>
                </div>
            </div>
            <?php sg_pb_callout( $seo_text['opt_foot'] ); ?>
        </div>
    </section>

    <!-- 9. Hangi işletmeler? -->
    <section id="sm-isletme" class="sg-dp-isletme section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Kimler İçin?', 'seogezegeni' ), sg_pf_heading( $h_isletme ), '', true, true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['isletme'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['isletme'] ); ?>
            </div>
            <?php sg_pb_acc( $sectors, 'sm-sec' ); ?>
        </div>
    </section>

    <!-- 10. Başarı nasıl ölçülür? -->
    <section id="sm-olcum" class="sg-dp-basari section-pad dark-section">
        <div class="container">
            <div class="sg-sm-metrics">
                <div class="sg-sm-metrics-copy" data-sg-reveal="left">
                    <?php sg_section_head( __( 'Performans', 'seogezegeni' ), sg_pf_heading( $h_olcum ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['olcum'] ); ?>
                    </div>
                    <?php sg_pb_callout( $seo_text['olcum_foot'] ); ?>
                </div>
                <div class="sg-sm-metrics-panel" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['olcum_lead'], 'class="sg-sm-metrics-lead"' ); ?>
                    <?php
                    $metric_icons = [ 'signal', 'eye', 'heart', 'bookmark', 'user', 'link', 'user-plus', 'bullseye', 'circle-play', 'people-arrows' ];
                    ?>
                    <ul class="sg-sm-metric-list">
                        <?php foreach ( array_values( $olcum_list ) as $i => $metric ) : ?>
                            <li><i class="fa-solid fa-<?php echo esc_attr( $metric_icons[ $i % count( $metric_icons ) ] ); ?>" aria-hidden="true"></i><span><?php echo sg_pf_inline( $metric ); // phpcs:ignore WordPress.Security.EscapeOutput ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Süreç -->
    <section id="sosyal-surec" class="sg-seo-journey section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Çalışma Süreci', 'seogezegeni' ), sg_pf_heading( $h_surec ), '', true, true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['surec'] ); ?>
            </div>
            <?php sg_pb_steps( $steps ); ?>
            <?php sg_seo_p( $seo_text['surec_foot'], 'class="sg-seo-lead text-center" style="margin-top:32px;"' ); ?>
        </div>
    </section>

    <!-- 12. Neden SEO Gezegeni? -->
    <section class="sg-seo-neden section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Neden Biz?', 'seogezegeni' ), sg_pf_heading( $h_why ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['why'] ); ?>
                    </div>
                    <?php sg_seo_p( $seo_text['why_foot'], 'class="sg-seo-lead" style="margin-top:18px;"' ); ?>
                    <a href="<?php echo esc_url( $contact_url ); ?>" class="sg-btn sg-btn-primary" style="margin-top:26px;">
                        <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        <?php esc_html_e( 'Sosyal Medya Planı Al', 'seogezegeni' ); ?>
                    </a>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['why_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <?php sg_pb_numbered( $why_list ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 13. Sık sorulan sorular -->
    <section id="sm-faq" class="sg-seo-faq section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Sık Sorulan Sorular', 'seogezegeni' ), sg_pf_heading( $h_faq ), '', true, true ); ?>
            <div class="sg-seo-faq-grid" data-faq-limit="10">
                <?php foreach ( $faqs as $faq ) : ?>
                    <details class="sg-seo-faq-item">
                        <summary><?php echo sg_pf_inline( $faq[0] ); ?></summary>
                        <p><?php echo sg_pf_inline( $faq[1] ); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 14. Kapanış -->
    <section class="sg-seo-final-cta section-pad dark-section">
        <div class="container">
            <div class="sg-seo-cta-panel" data-sg-reveal>
                <div class="sg-seo-cta-main">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                        <?php esc_html_e( 'Güçlü Marka Konumlandırması', 'seogezegeni' ); ?>
                    </span>
                    <h2><?php echo esc_html( $plain( $h_cta ) ); ?></h2>
                    <?php sg_seo_p( array_slice( $seo_text['cta'], 0, 1 ) ); ?>
                </div>
                <div class="sg-seo-cta-side">
                    <?php sg_seo_p( array_slice( $seo_text['cta'], 1 ) ); ?>
                    <div class="sg-seo-cta-actions">
                        <a href="<?php echo esc_url( $contact_url ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Bizimle İletişime Geçin', 'seogezegeni' ); ?>
                        </a>
                        <a href="#sosyal-surec" class="sg-seo-cta-link">
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php sg_seo_faq_schema( $faqs ); ?>

<?php
get_template_part( 'template-parts/pre-footer-contact' );
get_footer();
