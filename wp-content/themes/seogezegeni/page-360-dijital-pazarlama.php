<?php
/**
 * Template Name: 360 Dijital Pazarlama Sayfasi
 * Template Post Type: page
 *
 * 360 derece dijital pazarlama hizmet sayfasi ozel sablonu.
 * Icerik: inc/dijital-page-defaults.php (panelden duzenlenebilir: inc/dijital-page.php)
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

extract( sg_dp_content( get_the_ID() ) );

$contact_url = home_url( '/iletisim/' );

$toc = [
    'dp-nedir'    => __( 'Nedir?', 'seogezegeni' ),
    'dp-neden'    => __( 'Neden Önemli?', 'seogezegeni' ),
    'dp-tek'      => __( 'Kanallar', 'seogezegeni' ),
    'dp-hizmet'   => __( 'Hizmetler', 'seogezegeni' ),
    'dp-veri'     => __( 'Strateji', 'seogezegeni' ),
    'dp-ai'       => __( 'Yapay Zeka', 'seogezegeni' ),
    'dp-isletme'  => __( 'İşletmeler', 'seogezegeni' ),
    'dijital-surec' => __( 'Süreç', 'seogezegeni' ),
    'dp-faq'      => __( 'SSS', 'seogezegeni' ),
];
?>

<main id="sg-main" class="sg-seo-page sg-digital-page" role="main">

    <section class="sg-page-hero sg-seo-hero sg-digital-hero" aria-labelledby="digital-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-chart-pie" aria-hidden="true"></i>
                        <?php esc_html_e( '360° Dijital Pazarlama Ajansı', 'seogezegeni' ); ?>
                    </span>
                    <h1 id="digital-page-heading"><?php echo sg_pf_heading( $hero_title ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
                    <p><?php echo sg_pf_inline( $hero_text ); ?></p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Dijital Büyüme Planı Al', 'seogezegeni' ); ?>
                        </a>
                        <a href="#dijital-surec" class="sg-btn sg-btn-outline">
                            <i class="fa-solid fa-route" aria-hidden="true"></i>
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual sg-digital-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-digital-orbit">
                        <span><i class="fa-brands fa-google"></i></span>
                        <span><i class="fa-brands fa-instagram"></i></span>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        <span><i class="fa-solid fa-chart-line"></i></span>
                    </div>
                    <div class="sg-digital-hub">
                        <i class="fa-solid fa-chart-pie"></i>
                        <strong>360°</strong>
                        <span><?php esc_html_e( 'Tek strateji, çok kanal', 'seogezegeni' ); ?></span>
                    </div>
                    <div class="sg-seo-dashboard sg-digital-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-layer-group"></i><span>omnichannel growth</span></div>
                        <div class="sg-seo-result is-active"><strong>SEO</strong><span>Organik büyüme</span><em>+%72</em></div>
                        <div class="sg-seo-result"><strong>ADS</strong><span>Reklam verimliliği</span><em>+%48</em></div>
                        <div class="sg-seo-chart"><span style="height:46%"></span><span style="height:62%"></span><span style="height:74%"></span><span style="height:88%"></span><span style="height:96%"></span></div>
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
                    <li><a href="#<?php echo esc_attr( $anchor ); ?>"><?php echo sg_pf_inline( $label ); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <!-- 1. Giriş -->
    <section class="sg-seo-intro section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( '360° Dijital Pazarlama', 'seogezegeni' ),
                        sg_pf_heading( $h_intro ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['intro_a'] ); ?>
                    </div>
                </div>
                <aside class="sg-seo-stat-panel" data-sg-reveal="right">
                    <?php foreach ( $stats as $stat ) : ?>
                        <div class="sg-seo-stat">
                            <strong><?php echo sg_pf_inline( $stat['value'] ); ?></strong>
                            <span><?php echo sg_pf_inline( $stat['label'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </aside>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['intro_b'] ); ?>
            </div>
        </div>
    </section>

    <!-- 2. 360° Dijital Pazarlama Nedir? -->
    <section id="dp-nedir" class="sg-dp-nedir section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Tanım', 'seogezegeni' ),
                        sg_pf_heading( $h_nedir ),
                        '',
                        false
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['nedir'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['nedir_lead'], 'class="sg-seo-lead sg-dp-list-lead" style="margin-bottom:20px"' ); ?>
                    <ol class="sg-seo-neden-list">
                        <?php foreach ( $nedir_list as $item ) : ?>
                            <li><span><?php echo sg_pf_inline( $item ); ?></span></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['nedir_foot'] ); ?>
            </div>
        </div>
    </section>

    <!-- 3. Neden vazgeçilmez? -->
    <section id="dp-neden" class="sg-dp-neden section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Neden Dijital Pazarlama?', 'seogezegeni' ),
                        sg_pf_heading( $h_neden ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['neden'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['neden_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <div class="sg-dp-benefit-grid">
                        <?php foreach ( $benefits as $benefit ) : ?>
                            <article class="sg-seo-mini-card">
                                <i class="<?php echo esc_attr( $benefit[0] ); ?>" aria-hidden="true"></i>
                                <h3><?php echo sg_pf_inline( $benefit[1] ); ?></h3>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['neden_foot'] ); ?>
            </div>
        </div>
    </section>

    <!-- 4. Tek kanal yeterli değil -->
    <section id="dp-tek" class="sg-dp-tek section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Çok Kanallı Yolculuk', 'seogezegeni' ),
                        sg_pf_heading( $h_tek ),
                        '',
                        false
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['tek'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['tek_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <ol class="sg-dp-vtl">
                        <?php foreach ( $tek_steps as $step ) : ?>
                            <li><span><?php echo sg_pf_inline( $step ); ?></span></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
            <div class="sg-seo-richtext<?php echo count( $seo_text['tek_foot'] ) > 1 ? ' is-cols-2' : ''; ?> sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['tek_foot'] ); ?>
            </div>
        </div>
    </section>

    <!-- 5. Hizmetler neleri kapsar? -->
    <section class="sg-dp-kapsam sg-dp-compact section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Kapsam', 'seogezegeni' ),
                sg_pf_heading( $h_kapsam ),
                '',
                true,
                true
            );
            ?>
            <div class="sg-seo-richtext sg-seo-narrow">
                <?php sg_seo_p( $seo_text['kapsam'] ); ?>
            </div>
            <?php sg_seo_p( $seo_text['kapsam_lead'], 'class="sg-seo-lead sg-dp-list-lead text-center" style="margin-top:26px;"' ); ?>
            <div class="sg-seo-ai-list is-grid-3" style="margin-top:22px;" data-sg-reveal>
                <?php foreach ( $kapsam_list as $item ) : ?>
                    <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                <?php endforeach; ?>
            </div>
            <div class="sg-seo-richtext is-cols-2 sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( $seo_text['kapsam_foot'] ); ?>
            </div>
        </div>
    </section>

    <!-- 6. 360° Dijital Pazarlama Hizmetlerimiz -->
    <section id="dp-hizmet" class="sg-seo-components sg-dp-tabs-sec section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Hizmetlerimiz', 'seogezegeni' ),
                sg_pf_heading( $h_hizmet ),
                '',
                true
            );
            ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['hizmet'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['hizmet'] ); ?>
            </div>
            <div class="sg-dp-tabs" data-sg-tabs data-sg-reveal>
                <div class="sg-dp-tablist" role="tablist" aria-orientation="vertical" aria-label="<?php esc_attr_e( 'Hizmetler', 'seogezegeni' ); ?>">
                    <?php foreach ( $services as $i => $service ) : ?>
                        <button type="button" role="tab" class="sg-dp-tab<?php echo 0 === $i ? ' is-active' : ''; ?>" id="dp-tab-<?php echo (int) $i; ?>" aria-selected="<?php echo 0 === $i ? 'true' : 'false'; ?>" aria-controls="dp-tabpanel-<?php echo (int) $i; ?>" tabindex="<?php echo 0 === $i ? '0' : '-1'; ?>">
                            <i class="<?php echo esc_attr( $service['icon'] ); ?>" aria-hidden="true"></i>
                            <span><?php echo esc_html( $service['title'] ); ?></span>
                            <i class="fa-solid fa-chevron-right sg-dp-tab-arrow" aria-hidden="true"></i>
                        </button>
                    <?php endforeach; ?>
                </div>
                <div class="sg-dp-tabpanels">
                    <?php foreach ( $services as $i => $service ) : ?>
                        <?php $has_side = ! empty( $service['list'] ); ?>
                        <div class="sg-dp-tabpanel<?php echo 0 === $i ? ' is-active' : ''; ?>" role="tabpanel" id="dp-tabpanel-<?php echo (int) $i; ?>" aria-labelledby="dp-tab-<?php echo (int) $i; ?>">
                            <h3><?php echo esc_html( $service['title'] ); ?></h3>
                            <div class="sg-dp-tabpanel-body<?php echo $has_side ? ' has-side' : ''; ?>">
                                <div class="sg-seo-detail-text">
                                    <?php sg_seo_p( $service['paras'] ); ?>
                                    <?php sg_seo_p( $service['closing'] ); ?>
                                </div>
                                <?php if ( $has_side ) : ?>
                                    <div class="sg-seo-detail-side">
                                        <?php if ( ! empty( $service['list_intro'] ) ) : ?>
                                            <p><strong><?php echo esc_html( $service['list_intro'] ); ?></strong></p>
                                        <?php endif; ?>
                                        <div class="sg-seo-ai-list">
                                            <?php foreach ( $service['list'] as $item ) : ?>
                                                <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Veriye dayalı strateji + temel bileşenler -->
    <section id="dp-veri" class="sg-seo-danismanlik section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Veri Odaklı Strateji', 'seogezegeni' ),
                        sg_pf_heading( $h_veri ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['veri'] ); ?>
                    </div>
                </div>
                <div class="sg-seo-success-card sg-seo-advantage-card" data-sg-reveal="right">
                    <h3><?php echo sg_pf_heading( $h_comp ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h3>
                    <?php sg_seo_p( $seo_text['comp'] ); ?>
                    <div class="sg-seo-ai-list">
                        <?php foreach ( $comp_list as $item ) : ?>
                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                    <?php sg_seo_p( $seo_text['comp_foot'], 'style="margin-top:18px;"' ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Hedef kitle -->
    <section class="sg-dp-hedef sg-dp-compact section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Hedef Kitle', 'seogezegeni' ),
                        sg_pf_heading( $h_hedef ),
                        '',
                        false
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['hedef'] ); ?>
                    </div>
                </div>
                <div class="sg-seo-fill" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['hedef_lead'], 'class="sg-seo-lead"' ); ?>
                    <div class="sg-seo-ai-list is-grid-2">
                        <?php foreach ( $hedef_list as $item ) : ?>
                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="sg-dp-callout">
                        <?php sg_seo_p( $seo_text['hedef_foot'] ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Rakip analizi -->
    <section class="sg-dp-rakip sg-dp-compact section-pad light-section">
        <div class="container">
            <div class="sg-seo-split is-reverse">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Rakip Analizi', 'seogezegeni' ),
                        sg_pf_heading( $h_rakip ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['rakip'] ); ?>
                        <?php sg_seo_p( $seo_text['rakip_foot'] ); ?>
                    </div>
                </div>
                <div class="sg-seo-fill" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['rakip_lead'], 'class="sg-seo-lead"' ); ?>
                    <div class="sg-seo-ai-list is-grid-2">
                        <?php foreach ( $rakip_list as $item ) : ?>
                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Omnichannel -->
    <section class="sg-dp-omni section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Omnichannel', 'seogezegeni' ),
                        sg_pf_heading( $h_omni ),
                        '',
                        false
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['omni'] ); ?>
                        <?php sg_seo_p( $seo_text['omni_mid'] ); ?>
                        <?php sg_seo_p( $seo_text['omni_foot'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['omni_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <ol class="sg-seo-neden-list">
                        <?php foreach ( $omni_list as $item ) : ?>
                            <li><span><?php echo sg_pf_inline( $item ); ?></span></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Yapay zeka -->
    <section id="dp-ai" class="sg-seo-ai section-pad light-section">
        <div class="container">
            <div class="sg-seo-ai-grid">
                <div class="sg-seo-ai-card" data-sg-reveal="left">
                    <i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>
                    <h2><?php echo sg_pf_heading( $h_ai ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
                    <?php sg_seo_p( $seo_text['ai'] ); ?>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['ai_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <div class="sg-seo-ai-list">
                        <?php foreach ( $ai_list as $item ) : ?>
                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                    <?php sg_seo_p( $seo_text['ai_foot'], 'class="sg-seo-lead" style="margin-top:18px;"' ); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. Growth Marketing + Marketing Automation -->
    <section class="sg-dp-features section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Büyüme ve Otomasyon', 'seogezegeni' ),
                sg_pf_heading( $h_features ),
                '',
                true
            );
            ?>
            <div class="sg-dp-card-grid">
                <?php foreach ( $features as $card ) : ?>
                    <article class="sg-dp-card" data-sg-reveal>
                        <header>
                            <i class="<?php echo esc_attr( $card['icon'] ); ?>" aria-hidden="true"></i>
                            <h3><?php echo sg_pf_inline( $card['title'] ); ?></h3>
                        </header>
                        <?php sg_seo_p( $card['paras'] ); ?>
                        <?php if ( ! empty( $card['list'] ) ) : ?>
                            <?php if ( ! empty( $card['list_intro'] ) ) : ?>
                                <p><strong><?php echo sg_pf_inline( $card['list_intro'] ); ?></strong></p>
                            <?php endif; ?>
                            <div class="sg-seo-ai-list">
                                <?php foreach ( $card['list'] as $item ) : ?>
                                    <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo sg_pf_inline( $item ); ?></div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php sg_seo_p( $card['closing'] ); ?>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 13. Veri analitiği -->
    <section class="sg-dp-analitik section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Analitik', 'seogezegeni' ),
                sg_pf_heading( $h_analitik ),
                '',
                true,
                true
            );
            ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['analitik'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['analitik'] ); ?>
            </div>
            <div class="sg-seo-work-grid" style="margin-top:34px;" data-sg-reveal>
                <?php foreach ( $analitik_list as $item ) : ?>
                    <div><span><?php echo sg_pf_inline( $item ); ?></span></div>
                <?php endforeach; ?>
            </div>
            <?php sg_seo_p( $seo_text['analitik_foot'], 'class="sg-seo-lead text-center" style="margin-top:30px;"' ); ?>
        </div>
    </section>

    <!-- 14. Sürekli optimizasyon -->
    <section class="sg-dp-opt section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Sürekli Gelişim', 'seogezegeni' ),
                sg_pf_heading( $h_opt ),
                '',
                true
            );
            ?>
            <div class="sg-seo-factors" data-sg-reveal>
                <div class="sg-seo-factors-copy">
                    <?php sg_seo_p( $seo_text['opt'] ); ?>
                    <?php sg_seo_p( $seo_text['opt_foot'] ); ?>
                    <a href="<?php echo esc_url( $contact_url ); ?>" class="sg-service-link">
                        <?php esc_html_e( 'Dijital büyüme planı iste', 'seogezegeni' ); ?>
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

    <!-- 15. Hangi işletmeler için uygun? -->
    <section id="dp-isletme" class="sg-dp-isletme section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Sektörler', 'seogezegeni' ),
                sg_pf_heading( $h_isletme ),
                '',
                true,
                true
            );
            ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['isletme'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['isletme'] ); ?>
            </div>
            <div class="sg-seo-acc" data-sg-acc>
                <?php foreach ( $sectors as $i => $sector ) : ?>
                    <?php
                    $row_start = (int) floor( $i / 2 ) * 10;
                    $col       = $i % 2;
                    ?>
                    <button type="button" class="sg-seo-acc-item" id="sg-dp-btn-<?php echo (int) $i; ?>" aria-expanded="false" aria-controls="sg-dp-panel-<?php echo (int) $i; ?>" style="--od:<?php echo esc_attr( $row_start + $col ); ?>;--om:<?php echo esc_attr( $i * 2 ); ?>;" data-sg-reveal>
                        <i class="sg-detail-icon <?php echo esc_attr( $sector['icon'] ); ?>" aria-hidden="true"></i>
                        <span class="sg-detail-title"><?php echo sg_pf_inline( $sector['title'] ); ?></span>
                        <i class="fa-solid fa-plus sg-detail-toggle" aria-hidden="true"></i>
                    </button>
                    <div class="sg-seo-acc-panel" id="sg-dp-panel-<?php echo (int) $i; ?>" role="region" aria-labelledby="sg-dp-btn-<?php echo (int) $i; ?>" style="--od:<?php echo esc_attr( $row_start + 5 ); ?>;--om:<?php echo esc_attr( $i * 2 + 1 ); ?>;">
                        <p><?php echo sg_pf_inline( $sector['text'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 16. Başarı nasıl ölçülür? -->
    <section class="sg-dp-basari section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Performans', 'seogezegeni' ),
                        sg_pf_heading( $h_basari ),
                        '',
                        false
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['basari'] ); ?>
                        <?php sg_seo_p( $seo_text['basari_foot'] ); ?>
                    </div>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['basari_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <div class="sg-dp-kpis">
                        <?php foreach ( $basari_list as $item ) : ?>
                            <div><span><?php echo sg_pf_inline( $item ); ?></span></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 17. Çalışma süreci -->
    <section id="dijital-surec" class="sg-seo-journey section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Çalışma Süreci', 'seogezegeni' ),
                sg_pf_heading( $h_surec ),
                '',
                true,
                true
            );
            ?>
            <div class="sg-seo-richtext<?php echo count( $seo_text['surec'] ) > 1 ? ' is-cols-2' : ''; ?>">
                <?php sg_seo_p( $seo_text['surec'] ); ?>
            </div>
            <div class="sg-seo-timeline is-stepper is-cards" style="--cols:<?php echo (int) count( $steps ); ?>;">
                <?php foreach ( $steps as $index => $step ) : ?>
                    <article class="sg-seo-step" data-sg-reveal>
                        <span><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
                        <div>
                            <h3><?php echo esc_html( $step[0] ); ?></h3>
                            <p><?php echo sg_pf_inline( $step[1] ); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 18. Neden SEO Gezegeni? -->
    <section class="sg-seo-neden section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Neden Biz?', 'seogezegeni' ),
                        sg_pf_heading( $h_why ),
                        '',
                        false
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['why'] ); ?>
                    </div>
                    <?php sg_seo_p( $seo_text['why_foot'], 'class="sg-seo-lead" style="margin-top:18px;"' ); ?>
                    <a href="<?php echo esc_url( $contact_url ); ?>" class="sg-btn sg-btn-primary" style="margin-top:26px;">
                        <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        <?php esc_html_e( 'Dijital Büyüme Planı Al', 'seogezegeni' ); ?>
                    </a>
                </div>
                <div data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['why_lead'], 'class="sg-seo-lead sg-dp-list-lead"' ); ?>
                    <ol class="sg-seo-neden-list">
                        <?php foreach ( $why_list as $item ) : ?>
                            <li><span><?php echo sg_pf_inline( $item ); ?></span></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- 19. Sık sorulan sorular -->
    <section id="dp-faq" class="sg-seo-faq section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Sık Sorulan Sorular', 'seogezegeni' ),
                sg_pf_heading( $h_faq ),
                '',
                true,
                true
            );
            ?>
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

    <!-- 20. Kapanış -->
    <section class="sg-seo-final-cta section-pad dark-section">
        <div class="container">
            <div class="sg-seo-cta-panel" data-sg-reveal>
                <div class="sg-seo-cta-main">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                        <?php esc_html_e( 'Sürdürülebilir Dijital Büyüme', 'seogezegeni' ); ?>
                    </span>
                    <h2><?php echo esc_html( str_replace( '*', '', $h_cta ) ); ?></h2>
                    <?php sg_seo_p( array_slice( $seo_text['cta'], 0, 1 ) ); ?>
                </div>
                <div class="sg-seo-cta-side">
                    <?php sg_seo_p( array_slice( $seo_text['cta'], 1 ) ); ?>
                    <div class="sg-seo-cta-actions">
                        <a href="<?php echo esc_url( $contact_url ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Bizimle İletişime Geçin', 'seogezegeni' ); ?>
                        </a>
                        <a href="#dijital-surec" class="sg-seo-cta-link">
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
