<?php
/**
 * Template Name: Google Meta Reklamlari Sayfasi
 * Template Post Type: page
 *
 * Google Ads ve Meta reklam yonetimi hizmet sayfasi ozel sablonu.
 * Icerik: inc/gm-page-defaults.php (panelden duzenlenebilir: inc/gm-page.php)
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

extract( sg_gm_content( get_the_ID() ) );

$contact_url = home_url( '/iletisim/' );
$plain       = static function ( $text ) {
    return str_replace( '*', '', $text );
};

$toc = [
    'gm-nedir'     => __( 'Nedir?', 'seogezegeni' ),
    'gm-avantaj'   => __( 'Avantajlar', 'seogezegeni' ),
    'gm-google'    => __( 'Google Ads', 'seogezegeni' ),
    'gm-meta'      => __( 'Meta Reklamları', 'seogezegeni' ),
    'gm-strateji'  => __( 'Strateji', 'seogezegeni' ),
    'gm-infra'     => __( 'Ölçüm', 'seogezegeni' ),
    'gm-isletme'   => __( 'İşletmeler', 'seogezegeni' ),
    'reklam-sureci' => __( 'Süreç', 'seogezegeni' ),
    'gm-faq'       => __( 'SSS', 'seogezegeni' ),
];
?>

<main id="sg-main" class="sg-seo-page sg-ads-page" role="main">

    <section class="sg-page-hero sg-seo-hero sg-ads-hero" aria-labelledby="ads-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-rectangle-ad" aria-hidden="true"></i>
                        <?php esc_html_e( 'Google Ads & Meta Reklam Ajansı', 'seogezegeni' ); ?>
                    </span>
                    <h1 id="ads-page-heading"><?php echo sg_pf_heading( $hero_title ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
                    <p><?php echo esc_html( $hero_text ); ?></p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Reklam Planı Al', 'seogezegeni' ); ?>
                        </a>
                        <a href="#reklam-sureci" class="sg-btn sg-btn-outline">
                            <i class="fa-solid fa-route" aria-hidden="true"></i>
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual sg-ads-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-ads-stack">
                        <div class="sg-ads-platform is-google"><i class="fa-brands fa-google"></i><strong>Google Ads</strong><span>Search, PMax, Shopping</span></div>
                        <div class="sg-ads-platform is-meta"><i class="fa-brands fa-meta"></i><strong>Meta Ads</strong><span>Instagram, Facebook, Reels</span></div>
                    </div>
                    <div class="sg-seo-dashboard sg-ads-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-bullseye"></i><span>performance ads</span></div>
                        <div class="sg-seo-result is-active"><strong>ROAS</strong><span>Yatırım getirisi</span><em>+%58</em></div>
                        <div class="sg-seo-result"><strong>CPA</strong><span>Müşteri edinme maliyeti</span><em>-%32</em></div>
                        <div class="sg-seo-chart"><span style="height:52%"></span><span style="height:64%"></span><span style="height:76%"></span><span style="height:84%"></span><span style="height:94%"></span></div>
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
                    <?php sg_section_head( __( 'Google & Meta Reklamları', 'seogezegeni' ), sg_pf_heading( $h_intro ), '', false, true ); ?>
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
    <section id="gm-nedir" class="sg-dp-nedir section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Tanım', 'seogezegeni' ), sg_pf_heading( $h_nedir ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['nedir'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['nedir_lead'], 'class="sg-seo-lead sg-dp-list-lead" style="margin-bottom:20px"' ); ?>
                    <?php sg_pb_numbered( $nedir_list ); ?>
                </div>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['nedir_foot'] ); ?>
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
                <div class="sg-gm-panel is-warn" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['gerek_lead'], 'class="sg-gm-panel-lead"' ); ?>
                    <?php sg_pb_warn_list( $gerek_list ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Performans pazarlaması -->
    <section class="sg-dp-tek section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Performans Pazarlaması', 'seogezegeni' ), sg_pf_heading( $h_perf ), '', false ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['perf'] ); ?>
                </div>
            </div>
            <?php sg_seo_p( $seo_text['perf_lead'], 'class="sg-gm-panel-lead sg-gm-mid"' ); ?>
            <?php sg_pb_numbered_grid( $perf_list ); ?>
            <?php sg_pb_callout( $seo_text['perf_foot'] ); ?>
        </div>
    </section>

    <!-- 5. Avantajlar -->
    <section id="gm-avantaj" class="sg-seo-benefits section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Avantajlar', 'seogezegeni' ), sg_pf_heading( $h_avantaj ), '', true, true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['avantaj'] ); ?>
            </div>
            <?php sg_pb_metric_cards( $avantaj_cards ); ?>
        </div>
    </section>

    <!-- 6. Birlikte neden daha güçlü? -->
    <section class="sg-dp-omni section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Birlikte Güçlü', 'seogezegeni' ), sg_pf_heading( $h_birlikte ), '', true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['birlikte'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['birlikte'] ); ?>
            </div>
            <div class="sg-dp-callout-row" data-sg-reveal>
                <?php sg_pb_callout( $seo_text['birlikte_ex'] ); ?>
                <?php sg_pb_callout( $seo_text['birlikte_foot'] ); ?>
            </div>
        </div>
    </section>

    <!-- 7. Google Ads hizmetleri -->
    <section id="gm-google" class="sg-dp-tabs-sec section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Google Ads', 'seogezegeni' ), sg_pf_heading( $h_gads ), '', true, true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['gads'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['gads'] ); ?>
            </div>
            <?php sg_pb_tabs( $gads_services, 'gm-g', 'h3', __( 'Google Ads hizmetleri', 'seogezegeni' ) ); ?>
        </div>
    </section>

    <!-- 8. Meta reklam hizmetleri -->
    <section id="gm-meta" class="sg-dp-tabs-sec section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Meta Reklamları', 'seogezegeni' ), sg_pf_heading( $h_meta ), '', true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['meta'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['meta'] ); ?>
            </div>
            <?php sg_pb_tabs( $meta_services, 'gm-m', 'h3', __( 'Meta reklam hizmetleri', 'seogezegeni' ) ); ?>
        </div>
    </section>

    <!-- 9. Strateji + hedef kitle -->
    <section id="gm-strateji" class="sg-dp-features section-pad light-section">
        <div class="container">
            <div class="sg-dp-card-grid">
                <?php
                sg_pb_card( [ 'icon' => 'fa-solid fa-chess', 'title' => $plain( $h_strateji ), 'paras' => $seo_text['strateji'] ], 'h2' );
                sg_pb_card( [ 'icon' => 'fa-solid fa-users-viewfinder', 'title' => $plain( $h_hedef ), 'paras' => $seo_text['hedef'] ], 'h2' );
                ?>
            </div>
        </div>
    </section>

    <!-- 10. Pazarlama hunisi -->
    <section class="sg-dp-funnel section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Pazarlama Hunisi', 'seogezegeni' ), sg_pf_heading( $h_funnel ), '', true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['funnel'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['funnel'] ); ?>
            </div>
            <?php sg_pb_steps( $funnel ); ?>
        </div>
    </section>

    <!-- 11. Reklam kreatifleri -->
    <section class="sg-dp-opt section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Kreatifler', 'seogezegeni' ), sg_pf_heading( $h_kreatif ), '', true, true ); ?>
            <div class="sg-seo-factors" data-sg-reveal>
                <div class="sg-seo-factors-copy">
                    <?php sg_seo_p( $seo_text['kreatif'] ); ?>
                    <?php sg_seo_p( $seo_text['kreatif_foot'] ); ?>
                </div>
                <div>
                    <?php sg_seo_p( $seo_text['kreatif_lead'], 'class="sg-dp-factors-lead"' ); ?>
                    <div class="sg-seo-factors-list">
                        <?php foreach ( $kreatif_list as $item ) : ?>
                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. Açılış sayfası -->
    <section class="sg-dp-hedef sg-dp-compact section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Landing Page', 'seogezegeni' ), sg_pf_heading( $h_landing ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['landing'] ); ?>
                    </div>
                </div>
                <div class="sg-seo-fill" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['landing_lead'], 'class="sg-seo-lead"' ); ?>
                    <?php sg_pb_check_list( $landing_list, 'sg-seo-ai-list is-grid-2' ); ?>
                    <?php sg_pb_callout( $seo_text['landing_foot'] ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 13. Google + Meta birlikte nasıl çalışır? -->
    <section class="sg-dp-features sg-dp-compact section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Bütüncül Kampanya', 'seogezegeni' ), sg_pf_heading( $h_nasil ), '', true, true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['nasil'] ); ?>
            </div>
            <div class="sg-dp-card-grid">
                <?php foreach ( $nasil_cards as $card ) : ?>
                    <?php sg_pb_card( [ 'icon' => $card['icon'], 'title' => $card['title'], 'paras' => [ $card['text'] ] ], 'h3' ); ?>
                <?php endforeach; ?>
            </div>
            <div class="sg-gm-panel sg-gm-wide" data-sg-reveal>
                <?php sg_seo_p( $seo_text['nasil_lead'], 'class="sg-gm-panel-lead"' ); ?>
                <?php sg_pb_check_list( $nasil_list, 'sg-seo-ai-list is-grid-4' ); ?>
            </div>
            <?php sg_pb_callout( $seo_text['nasil_foot'] ); ?>
        </div>
    </section>

    <!-- 14. Remarketing -->
    <section id="gm-remark" class="sg-dp-omni section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Remarketing', 'seogezegeni' ), sg_pf_heading( $h_remark ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['remark'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['remark_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <?php sg_pb_numbered( $remark_list ); ?>
                </div>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['remark_foot'] ); ?>
            </div>
        </div>
    </section>

    <!-- 15. A/B testleri -->
    <section class="sg-dp-basari section-pad light-section">
        <div class="container">
            <div class="sg-seo-split sg-gm-top">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Test ve Gelişim', 'seogezegeni' ), sg_pf_heading( $h_abtest ), '', false, true ); ?>
                </div>
                <div class="sg-seo-richtext" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['abtest'] ); ?>
                    <?php sg_seo_p( $seo_text['abtest_foot'] ); ?>
                </div>
            </div>
            <div class="sg-gm-panel sg-gm-wide" data-sg-reveal>
                <?php sg_seo_p( $seo_text['abtest_lead'], 'class="sg-gm-panel-lead"' ); ?>
                <?php sg_pb_numbered_grid( $abtest_list, 4 ); ?>
            </div>
        </div>
    </section>

    <!-- 16. Veriye dayalı optimizasyon -->
    <section class="sg-dp-hedef sg-dp-compact section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Veri Odaklı', 'seogezegeni' ), sg_pf_heading( $h_veri ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['veri'] ); ?>
                    </div>
                </div>
                <div class="sg-seo-fill" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['veri_lead'], 'class="sg-seo-lead"' ); ?>
                    <?php sg_pb_check_list( $veri_list, 'sg-seo-ai-list is-grid-2' ); ?>
                    <?php sg_pb_callout( $seo_text['veri_foot'] ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 17. Yapay zeka -->
    <section class="sg-seo-ai section-pad light-section">
        <div class="container">
            <div class="sg-seo-ai-grid">
                <div class="sg-seo-ai-card" data-sg-reveal="left">
                    <i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>
                    <h2><?php echo sg_pf_heading( $h_ai ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
                    <?php sg_seo_p( $seo_text['ai'] ); ?>
                </div>
                <aside class="sg-dp-aside" data-sg-reveal="right">
                    <span class="sg-dp-aside-tag"><i class="fa-solid fa-robot" aria-hidden="true"></i><?php esc_html_e( 'SEO Gezegeni yaklaşımı', 'seogezegeni' ); ?></span>
                    <?php sg_seo_p( $seo_text['ai_foot'] ); ?>
                    <i class="fa-solid fa-quote-right sg-dp-aside-q" aria-hidden="true"></i>
                </aside>
            </div>
        </div>
    </section>

    <!-- 18. Performance Max + Smart Bidding -->
    <section class="sg-dp-features section-pad dark-section">
        <div class="container">
            <div class="sg-dp-card-grid">
                <?php foreach ( $auto_cards as $card ) : ?>
                    <?php sg_pb_card( $card, 'h2' ); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 19. Ölçüm ve veri altyapısı -->
    <section id="gm-infra" class="sg-dp-tabs-sec section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Ölçümleme', 'seogezegeni' ), sg_pf_heading( $h_infra ), '', true, true ); ?>
            <?php sg_pb_tabs( $infra, 'gm-i', 'h2', __( 'Ölçüm ve veri altyapısı', 'seogezegeni' ) ); ?>
        </div>
    </section>

    <!-- 20. Sürekli optimizasyon -->
    <section class="sg-dp-opt section-pad dark-section">
        <div class="container">
            <?php sg_section_head( __( 'Sürekli Gelişim', 'seogezegeni' ), sg_pf_heading( $h_opt ), '', true ); ?>
            <div class="sg-seo-factors" data-sg-reveal>
                <div class="sg-seo-factors-copy">
                    <?php sg_seo_p( $seo_text['opt'] ); ?>
                    <?php sg_seo_p( $seo_text['opt_foot'] ); ?>
                    <a href="<?php echo esc_url( $contact_url ); ?>" class="sg-service-link">
                        <?php esc_html_e( 'Reklam planı iste', 'seogezegeni' ); ?>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div>
                    <?php sg_seo_p( $seo_text['opt_lead'], 'class="sg-dp-factors-lead"' ); ?>
                    <div class="sg-seo-factors-list">
                        <?php foreach ( $opt_list as $item ) : ?>
                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 21. Hangi işletmeler? -->
    <section id="gm-isletme" class="sg-dp-isletme section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Sektörler', 'seogezegeni' ), sg_pf_heading( $h_isletme ), '', true, true ); ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['isletme'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['isletme'] ); ?>
            </div>
            <?php sg_pb_acc( $sectors, 'gm-sec' ); ?>
        </div>
    </section>

    <!-- 22. Başarı nasıl ölçülür? -->
    <section class="sg-dp-basari section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php sg_section_head( __( 'Performans', 'seogezegeni' ), sg_pf_heading( $h_olcum ), '', false ); ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['olcum'] ); ?>
                        <?php sg_seo_p( $seo_text['olcum_foot'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['olcum_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <?php sg_pb_kpis( $olcum_list ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 23. Süreç -->
    <section id="reklam-sureci" class="sg-seo-journey section-pad light-section">
        <div class="container">
            <?php sg_section_head( __( 'Çalışma Süreci', 'seogezegeni' ), sg_pf_heading( $h_surec ), '', true, true ); ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['surec'] ); ?>
            </div>
            <?php sg_pb_steps( $steps ); ?>
            <?php sg_seo_p( $seo_text['surec_foot'], 'class="sg-seo-lead text-center" style="margin-top:32px;"' ); ?>
        </div>
    </section>

    <!-- 24. Neden SEO Gezegeni? -->
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
                        <?php esc_html_e( 'Reklam Planı Al', 'seogezegeni' ); ?>
                    </a>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['why_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <?php sg_pb_numbered( $why_list ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 25. Sık sorulan sorular -->
    <section id="gm-faq" class="sg-seo-faq section-pad light-section">
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

    <!-- 26. Kapanış -->
    <section class="sg-seo-final-cta section-pad dark-section">
        <div class="container">
            <div class="sg-seo-cta-panel" data-sg-reveal>
                <div class="sg-seo-cta-main">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                        <?php esc_html_e( 'Sürdürülebilir Performans', 'seogezegeni' ); ?>
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
                        <a href="#reklam-sureci" class="sg-seo-cta-link">
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
