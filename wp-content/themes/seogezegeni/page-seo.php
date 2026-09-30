<?php
/**
 * Template Name: SEO Hizmeti Sayfasi
 * Template Post Type: page
 *
 * SEO hizmet sayfasi ozel sablonu.
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
    the_post();
}

extract( sg_seo_content( get_the_ID() ) );
?>

<main id="sg-main" class="sg-seo-page" role="main">

    <section class="sg-page-hero sg-seo-hero" aria-labelledby="seo-page-heading">
        <div class="container">
            <div class="sg-seo-hero-grid">
                <div class="sg-seo-hero-copy" data-sg-reveal="left">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i>
                        <?php esc_html_e( 'Profesyonel SEO Hizmeti', 'seogezegeni' ); ?>
                    </span>
                    <h1 id="seo-page-heading">
                        <?php esc_html_e( 'SEO Ajansı ile Profesyonel', 'seogezegeni' ); ?>
                        <span><?php esc_html_e( 'SEO Danışmanlığı', 'seogezegeni' ); ?></span>
                    </h1>
                    <p>
                        <?php esc_html_e( 'Teknik SEO, içerik optimizasyonu, kurumsal SEO, yerel SEO ve Google SEO danışmanlığı hizmetleriyle organik görünürlüğünüzü güçlendiren sürdürülebilir bir büyüme planı oluşturuyoruz.', 'seogezegeni' ); ?>
                    </p>
                    <div class="sg-seo-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Ücretsiz SEO Analizi Al', 'seogezegeni' ); ?>
                        </a>
                        <a href="#seo-sureci" class="sg-btn sg-btn-outline">
                            <i class="fa-solid fa-route" aria-hidden="true"></i>
                            <?php esc_html_e( 'Süreci İncele', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

                <div class="sg-seo-hero-visual" data-sg-reveal="right" aria-hidden="true">
                    <div class="sg-seo-orbit">
                        <span><i class="fa-brands fa-google"></i></span>
                        <span><i class="fa-solid fa-chart-line"></i></span>
                        <span><i class="fa-solid fa-code"></i></span>
                        <span><i class="fa-solid fa-link"></i></span>
                    </div>
                    <div class="sg-seo-dashboard">
                        <div class="sg-seo-searchbar"><i class="fa-solid fa-magnifying-glass"></i><span>seo hizmeti</span></div>
                        <div class="sg-seo-result is-active"><strong>#1</strong><span>Organik görünürlük</span><em>+%84</em></div>
                        <div class="sg-seo-result"><strong>#3</strong><span>Teknik performans</span><em>+%62</em></div>
                        <div class="sg-seo-chart"><span style="height:42%"></span><span style="height:68%"></span><span style="height:54%"></span><span style="height:82%"></span><span style="height:96%"></span></div>
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
                <?php
                $toc = [
                    'seo-nedir'      => __( 'SEO Nedir?', 'seogezegeni' ),
                    'seo-hizmetleri' => __( 'Hizmetler', 'seogezegeni' ),
                    'seo-sureci'     => __( 'Süreç', 'seogezegeni' ),
                    'yapay-zeka'     => __( 'Yapay Zeka', 'seogezegeni' ),
                    'danismanlik'    => __( 'Danışmanlık', 'seogezegeni' ),
                    'uzmanlik'       => __( 'Uzmanlık Alanları', 'seogezegeni' ),
                    'sektorler'      => __( 'Sektörler', 'seogezegeni' ),
                    'olcum'          => __( 'Ölçüm', 'seogezegeni' ),
                    'sss'            => __( 'SSS', 'seogezegeni' ),
                ];
                foreach ( $toc as $anchor => $label ) :
                ?>
                    <li><a href="#<?php echo esc_attr( $anchor ); ?>"><?php echo esc_html( $label ); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <!-- SEO Ajansı ile Profesyonel SEO Hizmeti + SEO Nedir? -->
    <section id="seo-nedir" class="sg-seo-intro section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'SEO Nedir?', 'seogezegeni' ),
                        __( 'Arama Motorlarında <span class="text-accent">Güçlü ve Kalıcı Görünürlük</span>', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( array_slice( $seo_text['intro_a'], 0, 2 ) ); ?>
                    </div>
                </div>
                <aside class="sg-seo-stat-panel" data-sg-reveal="right">
                    <?php foreach ( $seo_stats as $stat ) : ?>
                        <div class="sg-seo-stat">
                            <strong><?php echo esc_html( $stat['value'] ); ?></strong>
                            <span><?php echo esc_html( $stat['label'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </aside>
            </div>
            <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                <?php sg_seo_p( array_slice( $seo_text['intro_a'], 2 ) ); ?>

                <h3><?php esc_html_e( 'SEO Nedir?', 'seogezegeni' ); ?></h3>
                <?php sg_seo_p( $seo_text['intro_b'] ); ?>
            </div>
        </div>
    </section>

    <!-- SEO Neden İşletmeler İçin Vazgeçilmezdir? -->
    <section class="sg-seo-benefits section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Neden SEO?', 'seogezegeni' ),
                __( 'SEO Neden İşletmeler İçin <span class="text-accent">Vazgeçilmezdir?</span>', 'seogezegeni' ),
                __( 'Dijital dünyada rekabet artarken kullanıcıların büyük çoğunluğu satın alma kararlarını arama motorlarında yaptıkları araştırmalar sonucunda veriyor. Arama sonuçlarında görünür olmayan bir web sitesi, potansiyel müşterilerinin önemli bir bölümünü daha ilk aşamada kaybedebilir.', 'seogezegeni' ),
                true
            );
            ?>
            <?php sg_seo_p( $seo_text['benefits_lead'], 'class="sg-seo-lead"' ); ?>
            <div class="sg-seo-benefit-grid">
                <?php
                foreach ( $benefits as $index => $benefit ) :
                ?>
                    <article class="sg-seo-mini-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 120 ); ?>">
                        <i class="<?php echo esc_attr( $benefit[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $benefit[1] ); ?></h3>
                    </article>
                <?php endforeach; ?>
            </div>
            <?php sg_seo_p( $seo_text['benefits_foot'], 'class="sg-seo-lead text-center" style="margin-top:38px;"' ); ?>
        </div>
    </section>

    <!-- SEO Hizmeti Nedir? -->
    <section class="sg-seo-hizmet section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'SEO Hizmeti', 'seogezegeni' ),
                        __( 'SEO Hizmeti <span class="text-accent">Nedir?</span>', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( array_slice( $seo_text['hizmet'], 0, 2 ) ); ?>
                    </div>
                </div>
                <div class="sg-seo-fill" data-sg-reveal="right">
                    <?php sg_seo_p( $seo_text['hizmet_lead'], 'class="sg-seo-lead"' ); ?>
                    <div class="sg-seo-ai-list is-grid-2">
                        <?php foreach ( $hizmet_bilesenleri as $item ) : ?>
                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php if ( count( $seo_text['hizmet'] ) > 2 ) : ?>
                <div class="sg-seo-richtext sg-seo-intro-rest" data-sg-reveal>
                    <?php sg_seo_p( array_slice( $seo_text['hizmet'], 2 ) ); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Profesyonel SEO Hizmetleri Nelerdir? -->
    <section id="seo-hizmetleri" class="sg-seo-components section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Kapsamlı Hizmetler', 'seogezegeni' ),
                __( 'Profesyonel SEO Hizmetleri <span class="text-accent">Neleri Kapsar?</span>', 'seogezegeni' ),
                __( 'Başarılı bir SEO çalışması tek bir optimizasyon yöntemine dayanmaz. Teknik altyapının doğru yapılandırılması, kullanıcı odaklı içeriklerin hazırlanması, site otoritesinin güçlendirilmesi ve performansın sürekli analiz edilmesi gerekir. Her başlığa tıklayarak detaylarını inceleyebilirsiniz.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-detail-grid is-stack">
                <?php foreach ( $service_details as $i => $service ) : ?>
                    <details class="sg-seo-detail-item" data-sg-reveal<?php echo 0 === $i ? ' open' : ''; ?>>
                        <summary>
                            <i class="sg-detail-icon <?php echo esc_attr( $service['icon'] ); ?>" aria-hidden="true"></i>
                            <span class="sg-detail-title"><?php echo esc_html( $service['title'] ); ?></span>
                            <i class="fa-solid fa-plus sg-detail-toggle" aria-hidden="true"></i>
                        </summary>
                        <div class="sg-seo-detail-body<?php echo ! empty( $service['list'] ) ? ' has-side' : ''; ?>">
                            <div class="sg-seo-detail-text">
                                <?php foreach ( $service['paras'] as $para ) : ?>
                                    <p><?php echo esc_html( $para ); ?></p>
                                <?php endforeach; ?>
                                <p><?php echo esc_html( $service['closing'] ); ?></p>
                            </div>
                            <?php if ( ! empty( $service['list'] ) ) : ?>
                                <div class="sg-seo-detail-side">
                                    <p><strong><?php echo esc_html( $service['list_intro'] ); ?></strong></p>
                                    <div class="sg-seo-ai-list is-grid-2">
                                        <?php foreach ( $service['list'] as $item ) : ?>
                                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html( $item ); ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Google SEO Süreci Nasıl Yönetilir? -->
    <section id="seo-sureci" class="sg-seo-process section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'SEO Süreci', 'seogezegeni' ),
                __( 'Google SEO Süreci <span class="text-accent">Nasıl Yönetilir?</span>', 'seogezegeni' ),
                __( 'Google\'da üst sıralarda yer almak, tek bir optimizasyon çalışmasıyla elde edilebilecek bir başarı değildir. Arama sonuçlarında kalıcı görünürlük sağlayabilmek için teknik altyapı, içerik kalitesi, kullanıcı deneyimi ve otorite çalışmalarının düzenli olarak analiz edilmesi gerekir. Profesyonel bir SEO süreci genellikle şu aşamalardan oluşur:', 'seogezegeni' ),
                true,
                true
            );
            ?>
            <div class="sg-seo-ai-list is-grid-3" style="margin-top:46px;">
                <?php foreach ( $google_sureci as $adim ) : ?>
                    <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html( $adim ); ?></div>
                <?php endforeach; ?>
            </div>
            <?php sg_seo_p( $seo_text['surec_foot'], 'class="sg-seo-lead" style="margin-top:32px;text-align:center;"' ); ?>
        </div>
    </section>

    <!-- Google Algoritmaları -->
    <section class="sg-seo-algoritma section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Algoritmalar', 'seogezegeni' ),
                __( 'Google Algoritmaları SEO\'yu <span class="text-accent">Nasıl Etkiler?</span>', 'seogezegeni' ),
                '',
                true
            );
            ?>
            <div class="sg-seo-richtext">
                <?php sg_seo_p( $seo_text['algoritma'] ); ?>
            </div>
        </div>
    </section>

    <!-- SEO'da Yapay Zeka ve AI Overviews Dönemi -->
    <section id="yapay-zeka" class="sg-seo-ai section-pad dark-section">
        <div class="container">
            <div class="sg-seo-ai-grid">
                <div class="sg-seo-ai-card" data-sg-reveal="left">
                    <i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>
                    <h2><?php esc_html_e( 'SEO\'da Yapay Zeka ve AI Overviews Dönemi', 'seogezegeni' ); ?></h2>
                    <?php sg_seo_p( $seo_text['ai_intro'] ); ?>
                </div>
                <div class="sg-seo-ai-list" data-sg-reveal="right">
                    <?php
                    foreach ( $ai_points as $point ) :
                    ?>
                        <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html( $point ); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php sg_seo_p( $seo_text['ai_foot'], 'class="sg-seo-lead" style="margin-top:38px;text-align:center;"' ); ?>
        </div>
    </section>

    <!-- Profesyonel SEO Danışmanlığı + Uzmanla Çalışmanın Avantajları -->
    <section id="danismanlik" class="sg-seo-danismanlik section-pad light-section">
        <div class="container">
            <div class="sg-seo-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'SEO Danışmanlığı', 'seogezegeni' ),
                        __( 'Profesyonel SEO Danışmanlığı <span class="text-accent">Nedir ve Neden Önemlidir?</span>', 'seogezegeni' ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-seo-richtext">
                        <?php sg_seo_p( $seo_text['danis'] ); ?>
                    </div>
                </div>
                <div class="sg-seo-success-card sg-seo-advantage-card" data-sg-reveal="right">
                    <h3><?php esc_html_e( 'SEO Uzmanı ile Çalışmanın Avantajları', 'seogezegeni' ); ?></h3>
                    <?php sg_seo_p( $seo_text['uzman_intro'] ); ?>
                    <div class="sg-seo-ai-list">
                        <?php foreach ( $uzman_avantajlari as $item ) : ?>
                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                    <?php sg_seo_p( $seo_text['uzman_foot'], 'style="margin-top:18px;"' ); ?>
                </div>
            </div>

            <div class="sg-seo-work" data-sg-reveal>
                <?php sg_seo_p( $seo_text['danis_lead'], 'class="sg-seo-work-title"' ); ?>
                <div class="sg-seo-work-grid">
                    <?php foreach ( $danismanlik_calismalari as $item ) : ?>
                        <div><span><?php echo esc_html( $item ); ?></span></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Türleri / Uzmanlık Alanları -->
    <section id="uzmanlik" class="sg-seo-types section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Uzmanlık Alanları', 'seogezegeni' ),
                __( 'İşletmenize Özel <span class="text-accent">SEO Uzmanlık Alanları</span>', 'seogezegeni' ),
                __( 'Kurumsal, yerel, uluslararası, WordPress ve e-ticaret projelerinin her biri farklı dinamiklere sahiptir. Detayları görmek için başlıklara tıklayın.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-detail-grid is-stack">
                <?php foreach ( $seo_types as $i => $type ) : ?>
                    <details class="sg-seo-detail-item" data-sg-reveal<?php echo 0 === $i ? ' open' : ''; ?>>
                        <summary>
                            <i class="sg-detail-icon <?php echo esc_attr( $type['icon'] ); ?>" aria-hidden="true"></i>
                            <span class="sg-detail-title"><?php echo esc_html( $type['title'] ); ?></span>
                            <i class="fa-solid fa-plus sg-detail-toggle" aria-hidden="true"></i>
                        </summary>
                        <div class="sg-seo-detail-body<?php echo ! empty( $type['list'] ) ? ' has-side' : ''; ?>">
                            <div class="sg-seo-detail-text">
                                <?php foreach ( $type['paras'] as $para ) : ?>
                                    <p><?php echo esc_html( $para ); ?></p>
                                <?php endforeach; ?>
                                <p><?php echo esc_html( $type['closing'] ); ?></p>
                            </div>
                            <?php if ( ! empty( $type['list'] ) ) : ?>
                                <div class="sg-seo-detail-side">
                                    <p><strong><?php echo esc_html( $type['list_intro'] ); ?></strong></p>
                                    <div class="sg-seo-ai-list is-grid-2">
                                        <?php foreach ( $type['list'] as $item ) : ?>
                                            <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html( $item ); ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SEO Çalışması Nasıl Planlanır? -->
    <section class="sg-seo-planlama section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Metodoloji', 'seogezegeni' ),
                __( 'SEO Çalışması Nasıl <span class="text-accent">Planlanır?</span>', 'seogezegeni' ),
                __( 'SEO başarısı rastgele yapılan optimizasyonlarla elde edilmez. Başarılı projelerin ortak noktası, veriye dayalı planlama ve sürdürülebilir geliştirme süreçleridir. SEO Gezegeni\'nde her proje aşağıdaki aşamalar doğrultusunda ilerler.', 'seogezegeni' ),
                true,
                true
            );
            ?>
            <div class="sg-seo-timeline">
                <?php foreach ( $planlama_adimlari as $index => $step ) : ?>
                    <article class="sg-seo-step" data-sg-reveal>
                        <span><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
                        <div>
                            <h3><?php echo esc_html( $step[0] ); ?></h3>
                            <p><?php echo esc_html( $step[1] ); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sektörel SEO Stratejileri -->
    <section id="sektorler" class="sg-seo-sektorel section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Sektörel Stratejiler', 'seogezegeni' ),
                __( 'Sektöre Özel <span class="text-accent">SEO Stratejileri</span>', 'seogezegeni' ),
                __( 'Her sektörün rekabet yapısı, kullanıcı davranışları ve satın alma süreci birbirinden farklıdır. SEO Gezegeni olarak her projeye standart paketler yerine işletmenin faaliyet alanını, hedef kitlesini ve rekabet seviyesini analiz ederek özel bir yol haritası oluşturuyoruz.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-acc" data-sg-acc>
                <?php foreach ( $sektorel_stratejiler as $i => $sektor ) : ?>
                    <?php
                    $row_start = (int) floor( $i / 2 ) * 10;
                    $col       = $i % 2;
                    ?>
                    <button type="button" class="sg-seo-acc-item" id="sg-acc-btn-<?php echo (int) $i; ?>" aria-expanded="false" aria-controls="sg-acc-panel-<?php echo (int) $i; ?>" style="--od:<?php echo esc_attr( $row_start + $col ); ?>;--om:<?php echo esc_attr( $i * 2 ); ?>;" data-sg-reveal>
                        <i class="sg-detail-icon <?php echo esc_attr( $sektor['icon'] ); ?>" aria-hidden="true"></i>
                        <span class="sg-detail-title"><?php echo esc_html( $sektor['title'] ); ?></span>
                        <i class="fa-solid fa-plus sg-detail-toggle" aria-hidden="true"></i>
                    </button>
                    <div class="sg-seo-acc-panel" id="sg-acc-panel-<?php echo (int) $i; ?>" role="region" aria-labelledby="sg-acc-btn-<?php echo (int) $i; ?>" style="--od:<?php echo esc_attr( $row_start + 5 ); ?>;--om:<?php echo esc_attr( $i * 2 + 1 ); ?>;">
                        <p><?php echo esc_html( $sektor['text'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SEO'da Sık Yapılan Hatalar + Başarı Faktörleri -->
    <section class="sg-seo-errors section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'SEO Hataları', 'seogezegeni' ),
                __( 'SEO\'da Sık Yapılan <span class="text-accent">Hatalar</span>', 'seogezegeni' ),
                __( 'SEO çalışmalarında yapılan bazı hatalar yalnızca sıralama kaybına değil, uzun vadeli organik görünürlüğün zayıflamasına da neden olabilir. En sık karşılaşılan hatalar şunlardır:', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-acc is-warn" data-sg-acc>
                <?php foreach ( $mistakes as $i => $mistake ) : ?>
                    <?php
                    $row_start = (int) floor( $i / 2 ) * 10;
                    $col       = $i % 2;
                    ?>
                    <button type="button" class="sg-seo-acc-item" id="sg-mis-btn-<?php echo (int) $i; ?>" aria-expanded="false" aria-controls="sg-mis-panel-<?php echo (int) $i; ?>" style="--od:<?php echo esc_attr( $row_start + $col ); ?>;--om:<?php echo esc_attr( $i * 2 ); ?>;" data-sg-reveal>
                        <i class="sg-detail-icon fa-solid fa-triangle-exclamation" aria-hidden="true"></i>
                        <span class="sg-detail-title"><?php echo esc_html( $mistake[0] ); ?></span>
                        <i class="fa-solid fa-plus sg-detail-toggle" aria-hidden="true"></i>
                    </button>
                    <div class="sg-seo-acc-panel" id="sg-mis-panel-<?php echo (int) $i; ?>" role="region" aria-labelledby="sg-mis-btn-<?php echo (int) $i; ?>" style="--od:<?php echo esc_attr( $row_start + 5 ); ?>;--om:<?php echo esc_attr( $i * 2 + 1 ); ?>;">
                        <p><?php echo esc_html( $mistake[1] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="sg-seo-factors" data-sg-reveal>
                <div class="sg-seo-factors-copy">
                    <h3><?php esc_html_e( 'SEO Başarısını Belirleyen Faktörler', 'seogezegeni' ); ?></h3>
                    <?php sg_seo_p( $seo_text['success_intro'] ); ?>
                    <?php sg_seo_p( $seo_text['success_foot'] ); ?>
                    <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-service-link">
                        <?php esc_html_e( 'SEO planı iste', 'seogezegeni' ); ?>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="sg-seo-factors-list">
                    <?php foreach ( $success_factors as $item ) : ?>
                        <div><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html( $item ); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Performansı Nasıl Ölçülür? -->
    <section id="olcum" class="sg-seo-measure section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Performans', 'seogezegeni' ),
                __( 'SEO Performansı <span class="text-accent">Nasıl Ölçülür?</span>', 'seogezegeni' ),
                __( 'SEO çalışmalarının başarısı yalnızca belirli anahtar kelimelerde üst sıralara çıkmakla ölçülmez. Gerçek başarı, organik görünürlüğün işletmenin ticari hedeflerine katkı sağlamasıyla değerlendirilir. Profesyonel projelerde takip edilen başlıca performans göstergeleri:', 'seogezegeni' ),
                true,
                true
            );
            ?>
            <div class="sg-seo-metric-grid">
                <?php foreach ( $metrics as $metric ) : ?>
                    <article class="sg-seo-metric-card" data-sg-reveal>
                        <i class="<?php echo esc_attr( $metric[0] ); ?>" aria-hidden="true"></i>
                        <h3><?php echo esc_html( $metric[1] ); ?></h3>
                        <p><?php echo esc_html( $metric[2] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
            <?php sg_seo_p( $seo_text['metrics_foot'], 'class="sg-seo-lead" style="margin-top:32px;text-align:center;"' ); ?>
        </div>
    </section>

    <!-- SEO Gezegeni ile Çalıştığınızda Sizi Neler Bekler? -->
    <section class="sg-seo-journey section-pad soft-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Çalışma Süreci', 'seogezegeni' ),
                __( 'SEO Gezegeni ile Çalıştığınızda <span class="text-accent">Sizi Neler Bekler?</span>', 'seogezegeni' ),
                __( 'Başarılı bir SEO projesi, doğru analizlerle başlayan ve sürekli gelişen bir iş ortaklığıdır. Çalışma sürecimizi yalnızca optimizasyon yapan bir hizmet modeli olarak değil, işletmenizin dijital büyümesini destekleyen stratejik bir danışmanlık süreci olarak planlıyoruz.', 'seogezegeni' ),
                true
            );
            ?>
            <div class="sg-seo-timeline is-stepper">
                <?php foreach ( $process_steps as $index => $step ) : ?>
                    <article class="sg-seo-step" data-sg-reveal>
                        <span><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
                        <div>
                            <h3><?php echo esc_html( $step[0] ); ?></h3>
                            <p><?php echo esc_html( $step[1] ); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <?php sg_seo_p( $seo_text['journey_foot'], 'class="sg-seo-lead" style="margin-top:32px;text-align:center;"' ); ?>
        </div>
    </section>

    <!-- Neden SEO Gezegeni? -->
    <section class="sg-seo-neden section-pad dark-section">
        <div class="container">
            <div class="sg-seo-split sg-seo-neden-split">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Neden Biz?', 'seogezegeni' ),
                        __( 'Neden <span class="text-accent">SEO Gezegeni?</span>', 'seogezegeni' ),
                        __( '<strong>SEO</strong> çalışmalarında kullanılan yöntemler kadar, bu yöntemlerin hangi stratejiyle uygulandığı da önemlidir. Her işletmenin hedef kitlesi, rekabet ortamı ve büyüme planı farklı olduğu için tek tip SEO paketleri uzun vadede beklenen başarıyı sağlamayabilir. SEO Gezegeni olarak her projeye şu prensiplerle yaklaşıyoruz:', 'seogezegeni' ),
                        false
                    );
                    ?>
                    <?php sg_seo_p( $seo_text['neden_foot'], 'class="sg-seo-lead"' ); ?>
                    <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary" style="margin-top:26px;">
                        <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        <?php esc_html_e( 'Ücretsiz SEO Analizi Al', 'seogezegeni' ); ?>
                    </a>
                </div>
                <ol class="sg-seo-neden-list" data-sg-reveal="right">
                    <?php foreach ( $neden_seo_gezegeni as $item ) : ?>
                        <li><span><?php echo esc_html( $item ); ?></span></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </section>

    <!-- Sık Sorulan Sorular -->
    <section id="sss" class="sg-seo-faq section-pad light-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Sık Sorulan Sorular', 'seogezegeni' ),
                __( 'SEO Hakkında <span class="text-accent">Merak Edilenler</span>', 'seogezegeni' ),
                '',
                true,
                true
            );
            ?>
            <div class="sg-seo-faq-grid">
                <?php foreach ( $faqs as $faq ) : ?>
                    <details class="sg-seo-faq-item" data-sg-reveal>
                        <summary><?php echo esc_html( $faq[0] ); ?></summary>
                        <p><?php echo esc_html( $faq[1] ); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Kapanış -->
    <section class="sg-seo-final-cta section-pad soft-section">
        <div class="container">
            <div class="sg-seo-cta-panel" data-sg-reveal>
                <div class="sg-seo-cta-main">
                    <span class="sg-hero-badge">
                        <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                        <?php esc_html_e( 'Sürdürülebilir Organik Büyüme', 'seogezegeni' ); ?>
                    </span>
                    <h2><?php esc_html_e( 'Dijital Büyümenizi Doğru SEO Stratejisiyle Planlayın', 'seogezegeni' ); ?></h2>
                    <?php sg_seo_p( array_slice( $seo_text['cta'], 0, 1 ) ); ?>
                </div>
                <div class="sg-seo-cta-side">
                    <?php sg_seo_p( array_slice( $seo_text['cta'], 1 ) ); ?>
                    <div class="sg-seo-cta-actions">
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e( 'Bizimle İletişime Geçin', 'seogezegeni' ); ?>
                        </a>
                        <a href="#seo-sureci" class="sg-seo-cta-link">
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
