<?php
/**
 * Template Name: Web Tasarim ve Yazilim Sayfasi
 * Template Post Type: page
 *
 * Web tasarim ve yazilim gelistirme hizmet sayfasi ozel sablonu.
 * Icerik: inc/wb-page-defaults.php (panelden duzenlenebilir: inc/wb-page.php)
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

extract( sg_wb_content( get_the_ID() ) );

$contact_url = home_url( '/iletisim/' );
$plain       = static function ( $text ) {
    return str_replace( '*', '', $text );
};

$toc = [
    'wb-yatirim' => __( 'Yatırım', 'seogezegeni' ),
    'wb-hizmet'  => __( 'Web Tasarım', 'seogezegeni' ),
    'wb-yazilim' => __( 'Özel Yazılım', 'seogezegeni' ),
    'wb-teknik'  => __( 'Teknik', 'seogezegeni' ),
    'wb-tekno'   => __( 'Teknolojiler', 'seogezegeni' ),
    'wb-sektor'  => __( 'Sektörler', 'seogezegeni' ),
    'web-sureci' => __( 'Süreç', 'seogezegeni' ),
    'wb-faq'     => __( 'SSS', 'seogezegeni' ),
];
?>

<main id="sg-main" class="sg-seo-page sg-web-page" role="main">

    <section class="sg-page-hero sg-seo-hero sg-web-hero" aria-labelledby="web-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge"><i class="fa-solid fa-laptop-code" aria-hidden="true"></i><?php esc_html_e( 'Web Tasarım ve Yazılım Geliştirme', 'seogezegeni' ); ?></span>
                    <h1 id="web-page-heading"><?php echo sg_pf_heading( $hero_title ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
                    <p><?php echo esc_html( $hero_text ); ?></p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary"><i class="fa-solid fa-paper-plane" aria-hidden="true"></i><?php esc_html_e( 'Proje Teklifi Al', 'seogezegeni' ); ?></a>
                        <a href="#web-sureci" class="sg-btn sg-btn-outline"><i class="fa-solid fa-route" aria-hidden="true"></i><?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?></a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual sg-web-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-web-browser">
                        <div class="sg-web-layout">
                            <strong>UX</strong><strong>SEO</strong><strong>CRO</strong>
                            <em><i class="fa-solid fa-bolt" aria-hidden="true"></i><?php esc_html_e( 'Hızlı yükleme', 'seogezegeni' ); ?></em><em><i class="fa-solid fa-mobile-screen" aria-hidden="true"></i><?php esc_html_e( 'Mobil', 'seogezegeni' ); ?></em><em><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i><?php esc_html_e( 'SEO uyumlu yapı', 'seogezegeni' ); ?></em><em><i class="fa-solid fa-bullseye" aria-hidden="true"></i><?php esc_html_e( 'Dönüşüm', 'seogezegeni' ); ?></em>
                        </div>
                    </div>
                    <div class="sg-seo-dashboard sg-web-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-code"></i><span>performant website</span></div>
                        <div class="sg-seo-result is-active"><strong>LCP</strong><span>Hızlı yükleme</span><em>1.8s</em></div>
                        <div class="sg-seo-result"><strong>CRO</strong><span>Dönüşüm odaklı akış</span><em>+%39</em></div>
                        <div class="sg-seo-chart"><span style="height:48%"></span><span style="height:66%"></span><span style="height:72%"></span><span style="height:86%"></span><span style="height:98%"></span></div>
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
                    <?php sg_section_head( __( 'Web Tasarım ve Yazılım', 'seogezegeni' ), sg_pf_heading( $h_intro ), '', false, true ); ?>
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

    <!-- 2. Dijital yatırım -->
    <section id="wb-yatirim" class="sg-dp-nedir section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Dijital Yatırım', 'seogezegeni' ), sg_pf_heading( $h_yatirim ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['yatirim'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['yatirim_lead'], 'class="sg-seo-lead sg-dp-list-lead" style="margin-bottom:20px"' ); ?>
                    <?php sg_pb_numbered( $yatirim_list ); ?>
                </div>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['yatirim_foot'] ); ?>
            </div>
        </div>
    </section>

    <!-- 3. Neden profesyonel? -->
    <section class="sg-dp-compact section-pad light-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Profesyonel Yaklaşım', 'seogezegeni' ), sg_pf_heading( $h_gerek ), '', false, true ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['gerek'] ); ?>
                </div>
            </div>
            <div class="sg-gm-panel sg-gm-wide" data-sg-reveal>
                <?php sg_seo_p( $seo_text['gerek_lead'], 'class="sg-gm-panel-lead"' ); ?>
                <?php sg_pb_numbered_grid( $gerek_list, 4 ); ?>
            </div>
            <?php sg_pb_callout( $seo_text['gerek_foot'] ); ?>
        </div>
    </section>

    <!-- 4. Modern site özellikleri -->
    <section class="sg-dp-features section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Modern Web Siteleri', 'seogezegeni' ), sg_pf_heading( $h_ozel ), '', true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['ozel'] ); ?>
            </div>
            <?php sg_pb_stack_acc( $features, 'wb-f' ); ?>
        </div>
    </section>

    <!-- 5. Marka algısı -->
    <section class="sg-seo-ai section-pad light-section">
        <div class="container">
            <div class="sg-seo-ai-grid">
                <div class="sg-seo-ai-card" data-sg-reveal="left">
                    <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    <h2><?php echo sg_pf_heading( $h_marka ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
                    <?php sg_seo_p( $seo_text['marka'] ); ?>
                </div>
                <aside class="sg-dp-aside" data-sg-reveal="right">
                    <span class="sg-dp-aside-tag"><i class="fa-solid fa-lightbulb" aria-hidden="true"></i><?php esc_html_e( 'Öne çıkan fikir', 'seogezegeni' ); ?></span>
                    <?php sg_seo_p( $seo_text['marka_foot'] ); ?>
                    <i class="fa-solid fa-quote-right sg-dp-aside-q" aria-hidden="true"></i>
                </aside>
            </div>
        </div>
    </section>

    <!-- 6. Tek başına yeterli değil -->
    <section class="sg-dp-basari section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Bütüncül Yaklaşım', 'seogezegeni' ), sg_pf_heading( $h_yeter ), '', false ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['yeter'] ); ?>
                </div>
            </div>
            <div class="sg-gm-panel sg-gm-wide" data-sg-reveal>
                <?php sg_seo_p( $seo_text['yeter_lead'], 'class="sg-gm-panel-lead"' ); ?>
                <?php sg_pb_check_list( $yeter_list, 'sg-seo-ai-list is-grid-2' ); ?>
            </div>
            <?php sg_pb_callout( $seo_text['yeter_foot'] ); ?>
        </div>
    </section>

    <!-- 7. Web tasarım hizmetleri -->
    <section id="wb-hizmet" class="sg-dp-hizmet section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Web Tasarım', 'seogezegeni' ), sg_pf_heading( $h_hiz ), '', true, true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['hiz'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['hiz'] ); ?>
            </div>
            <?php sg_pb_tabs( $services, 'wb-s', 'h3', __( 'Web tasarım hizmetleri', 'seogezegeni' ) ); ?>
        </div>
    </section>

    <!-- 8. Dönüşüm odaklı yaklaşım -->
    <section class="sg-dp-basari section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Dönüşüm', 'seogezegeni' ), sg_pf_heading( $h_donus ), '', false ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['donus'] ); ?>
                </div>
            </div>
            <div class="sg-wb-cro">
                <div class="sg-gm-panel" data-sg-reveal>
                    <?php sg_seo_p( $seo_text['donus_lead'], 'class="sg-gm-panel-lead"' ); ?>
                    <?php $cro_icons = [ 'file-signature', 'phone', 'comment-dots', 'bag-shopping', 'calendar-check', 'laptop-code' ]; ?>
                    <ul class="sg-wb-tiles">
                        <?php foreach ( array_values( $donus_list ) as $i => $item ) : ?>
                            <li><i class="fa-solid fa-<?php echo esc_attr( $cro_icons[ $i % count( $cro_icons ) ] ); ?>" aria-hidden="true"></i><span><?php echo sg_pf_inline( $item ); // phpcs:ignore WordPress.Security.EscapeOutput ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="sg-gm-panel sg-wb-flow" data-sg-reveal>
                    <?php sg_seo_p( $seo_text['donus_lead2'], 'class="sg-gm-panel-lead"' ); ?>
                    <?php sg_pb_numbered_grid( $donus_list2, 5 ); ?>
                </div>
            </div>
            <?php sg_pb_callout( $seo_text['donus_foot'] ); ?>
        </div>
    </section>

    <!-- 9. Tasarım ve yazılım birlikte -->
    <section class="sg-dp-compact section-pad light-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Bütüncül Geliştirme', 'seogezegeni' ), sg_pf_heading( $h_birlikte ), '', false, true ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['birlikte'] ); ?>
                </div>
            </div>
            <div class="sg-gm-panel sg-gm-wide" data-sg-reveal>
                <?php sg_seo_p( $seo_text['birlikte_lead'], 'class="sg-gm-panel-lead"' ); ?>
                <?php sg_pb_numbered_grid( $birlikte_list, 4 ); ?>
            </div>
            <?php sg_pb_callout( $seo_text['birlikte_foot'] ); ?>
        </div>
    </section>

    <!-- 10. Özel yazılım hizmetleri -->
    <section id="wb-yazilim" class="sg-dp-hizmet section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Özel Yazılım', 'seogezegeni' ), sg_pf_heading( $h_yaz ), '', true ); ?>
            <div class="sg-gm-panel sg-wb-lead" data-sg-reveal>
                <div class="sg-seo-richtext is-cols-2">
                    <?php sg_seo_p( $seo_text['yaz'] ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Özel yazılım nedir? -->
    <section class="sg-dp-nedir section-pad light-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Tanım', 'seogezegeni' ), sg_pf_heading( $h_yazned ), '', false, true ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['yazned'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['yazned_lead'], 'class="sg-seo-lead sg-dp-list-lead" style="margin-bottom:20px"' ); ?>
                    <?php sg_pb_numbered( $yazned_list ); ?>
                </div>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['yazned_foot'] ); ?>
            </div>
        </div>
    </section>

    <!-- 12. Hazır mı özel mi? -->
    <section class="sg-dp-basari section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Karşılaştırma', 'seogezegeni' ), sg_pf_heading( $h_hazir ), '', true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['hazir'] ); ?>
            </div>
            <div class="sg-gm-duo">
                <div class="sg-gm-panel" data-sg-reveal="left">
                    <?php sg_seo_p( $seo_text['hazir_lead'], 'class="sg-gm-panel-lead"' ); ?>
                    <?php sg_pb_check_list( $hazir_list, 'sg-seo-ai-list' ); ?>
                </div>
                <div class="sg-gm-panel is-warn" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['hazir_lead2'], 'class="sg-gm-panel-lead"' ); ?>
                    <?php sg_pb_warn_list( $hazir_list2 ); ?>
                </div>
            </div>
            <?php sg_pb_callout( $seo_text['hazir_foot'] ); ?>
        </div>
    </section>

    <!-- 13. İşletmeye özel çözümler -->
    <section class="sg-dp-features section-pad light-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'İşletmeye Özel', 'seogezegeni' ), sg_pf_heading( $h_isl ), '', false, true ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['isl'] ); ?>
                </div>
            </div>
            <div class="sg-gm-panel sg-gm-wide" data-sg-reveal>
                <?php sg_seo_p( $seo_text['isl_lead'], 'class="sg-gm-panel-lead"' ); ?>
                <?php sg_pb_numbered_grid( $isl_list, 5 ); ?>
            </div>
            <?php sg_pb_callout( $seo_text['isl_foot'] ); ?>
            <?php sg_pb_stack_acc( $solutions, 'wb-sol' ); ?>
        </div>
    </section>

    <!-- 14. Ölçeklenebilir mimari -->
    <section class="sg-dp-hedef sg-dp-compact section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Yazılım Mimarisi', 'seogezegeni' ), sg_pf_heading( $h_mimari ), '', false ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['mimari'] ); ?>
                </div>
            </div>
            <div class="sg-gm-panel sg-gm-wide" data-sg-reveal>
                <?php sg_seo_p( $seo_text['mimari_lead'], 'class="sg-gm-panel-lead"' ); ?>
                <?php sg_pb_numbered_grid( $mimari_list, 4 ); ?>
            </div>
            <?php sg_pb_callout( $seo_text['mimari_foot'] ); ?>
            <div class="sg-seo-richtext is-cols-2 sg-wb-ozet" data-sg-reveal>
                <?php sg_seo_p( $seo_text['ozet'] ); ?>
            </div>
        </div>
    </section>

    <!-- 15. Teknik konular -->
    <section id="wb-teknik" class="sg-dp-hizmet section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Teknik Yaklaşım', 'seogezegeni' ), sg_pf_heading( $h_teknik ), '', true, true ); ?>
            <?php sg_pb_stack_acc( $tech_topics, 'wb-t' ); ?>
        </div>
    </section>

    <!-- 16. Teknolojiler -->
    <section id="wb-tekno" class="sg-dp-features section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Teknoloji Yığını', 'seogezegeni' ), sg_pf_heading( $h_tek ), '', true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['tek'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['tek'] ); ?>
            </div>
            <?php sg_pb_stack_acc( $tech_cards, 'wb-tc' ); ?>
        </div>
    </section>

    <!-- 17. Sektörel çözümler -->
    <section id="wb-sektor" class="sg-dp-isletme section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Sektörler', 'seogezegeni' ), sg_pf_heading( $h_sek ), '', true, true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['sek'] ); ?>
            </div>
            <?php sg_pb_acc( $sektor, 'wb-sek' ); ?>
        </div>
    </section>

    <!-- 18. Hangi işletmeler? -->
    <section class="sg-seo-benefits section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Kimler İçin?', 'seogezegeni' ), sg_pf_heading( $h_isletme ), '', true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['isletme'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['isletme'] ); ?>
            </div>
            <?php sg_pb_metric_cards( $isletme_cards ); ?>
        </div>
    </section>

    <!-- 19. Süreç -->
    <section id="web-sureci" class="sg-seo-journey section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Çalışma Süreci', 'seogezegeni' ), sg_pf_heading( $h_surec ), '', true, true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['surec'] ); ?>
            </div>
            <?php sg_pb_steps( $steps, 3 ); ?>
        </div>
    </section>

    <!-- 20. Neden SEO Gezegeni? -->
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
                        <?php esc_html_e( 'Proje Teklifi Al', 'seogezegeni' ); ?>
                    </a>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['why_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <?php sg_pb_numbered( $why_list ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 21. Sık sorulan sorular -->
    <section id="wb-faq" class="sg-seo-faq section-pad light-section">
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

    <!-- 22. Kapanış -->
    <section class="sg-seo-final-cta section-pad dark-section">
        <div class="container">
            <div class="sg-seo-cta-panel" data-sg-reveal>
                <div class="sg-seo-cta-main">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                        <?php esc_html_e( 'Güçlü Dijital Altyapı', 'seogezegeni' ); ?>
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
                        <a href="#web-sureci" class="sg-seo-cta-link">
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
