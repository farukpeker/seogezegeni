<?php
/**
 * Ana Sayfa Şablonu – SEO Gezegeni
 */
get_header();

$sg_hero_video_url = sg_option( 'sg_hero_video_url', '' );
$sg_hero_video_id  = sg_youtube_video_id_from_url( $sg_hero_video_url );
?>

<main id="sg-main" role="main">

<!-- ============================================================
     1. HERO BÖLÜMÜ
     ============================================================ -->
<section class="sg-hero<?php echo $sg_hero_video_id ? ' has-video' : ''; ?>" id="hero" aria-labelledby="hero-heading">
    <?php if ( $sg_hero_video_id ) : ?>
        <div class="sg-hero-video" aria-hidden="true">
            <iframe
                src="<?php echo esc_url( sprintf( 'https://www.youtube-nocookie.com/embed/%1$s?autoplay=1&mute=1&controls=0&loop=1&playlist=%1$s&playsinline=1&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1', rawurlencode( $sg_hero_video_id ) ) ); ?>"
                title="<?php esc_attr_e( 'Hero background video', 'seogezegeni' ); ?>"
                allow="autoplay; encrypted-media; picture-in-picture"
                loading="eager"
                tabindex="-1"></iframe>
        </div>
    <?php endif; ?>
    <div class="sg-hero-grid" aria-hidden="true"></div>
    <div class="sg-hero-glow" aria-hidden="true"></div>

    <div class="container">
        <div class="row align-items-center" style="align-items:center;">

            <!-- Left: content -->
            <div style="flex:0 0 55%;max-width:55%;padding:0 15px;" class="hero-text-col">
                <div class="sg-hero-content">

                    <div class="sg-hero-badge" data-sg-reveal>
                        <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                        <?php echo esc_html( sg_option( 'sg_hero_badge', __( 'SEO & Dijital Pazarlama Ajansı', 'seogezegeni' ) ) ); ?>
                    </div>

                    <h1 id="hero-heading" data-sg-reveal>
                        <?php echo wp_kses_post( sg_option( 'sg_hero_title',
                            __( 'Dijital Varlığınızı <span>Güçlendirin</span>', 'seogezegeni' )
                        ) ); ?>
                    </h1>

                    <p data-sg-reveal>
                        <?php echo esc_html( sg_option( 'sg_hero_subtitle',
                            __( 'SEO, SEM ve dijital pazarlama stratejileriyle markanızı zirveye taşıyoruz. Bayraklı/İzmir ve Maslak/İstanbul ofislerimizle Türkiye genelinde hizmet veriyoruz.', 'seogezegeni' )
                        ) ); ?>
                    </p>

                    <!-- Audit form -->
                    <form class="sg-audit-form" id="sgAuditForm" aria-label="<?php esc_attr_e( 'Web sitesi analiz formu', 'seogezegeni' ); ?>" data-sg-reveal>
                        <?php wp_nonce_field( 'sg_nonce', 'sg_audit_nonce' ); ?>
                        <label for="sgAuditInput" class="screen-reader-text">
                            <?php _e( 'Web sitenizin adresi', 'seogezegeni' ); ?>
                        </label>
                        <input type="url"
                               id="sgAuditInput"
                               name="site_url"
                               placeholder="<?php esc_attr_e( 'Web sitenizin adresini girin...', 'seogezegeni' ); ?>"
                               required
                               aria-required="true">
                        <button type="submit">
                            <?php _e( 'Ücretsiz Analiz', 'seogezegeni' ); ?>
                        </button>
                    </form>
                    <div class="sg-audit-message" id="sgAuditMsg" role="status" aria-live="polite" style="display:none;margin-top:12px;padding:10px 16px;background:rgba(168,230,61,.1);border:1px solid rgba(168,230,61,.3);border-radius:8px;color:#a8e63d;font-size:.9rem;"></div>

                    <!-- Stats -->
                    <div class="sg-hero-stats" data-sg-reveal role="list" aria-label="<?php esc_attr_e( 'İstatistikler', 'seogezegeni' ); ?>">
                        <?php
                        $stats = [
                            [ 'key' => 'sg_stat_projects', 'lkey' => 'sg_stat_projects_label', 'default_val' => '250', 'default_lbl' => __('Tamamlanan Proje', 'seogezegeni') ],
                            [ 'key' => 'sg_stat_clients',  'lkey' => 'sg_stat_clients_label',  'default_val' => '180', 'default_lbl' => __('Mutlu Müşteri',   'seogezegeni') ],
                            [ 'key' => 'sg_stat_years',    'lkey' => 'sg_stat_years_label',    'default_val' => '8',   'default_lbl' => __('Yıllık Deneyim',  'seogezegeni') ],
                        ];
                        foreach ( $stats as $i => $stat ) :
                            if ( $i > 0 ) : ?>
                                <div class="sg-stat-divider" aria-hidden="true"></div>
                            <?php endif; ?>
                            <div class="sg-stat-item" role="listitem">
                                <div class="sg-stat-number">
                                    <span class="sg-counter"
                                          data-target="<?php echo esc_attr( sg_option( $stat['key'], $stat['default_val'] ) ); ?>"
                                          aria-label="<?php echo esc_attr( sg_option($stat['key'], $stat['default_val']) ) . ' ' . esc_attr( sg_option($stat['lkey'], $stat['default_lbl']) ); ?>">
                                        0
                                    </span>+
                                </div>
                                <div class="sg-stat-label">
                                    <?php echo esc_html( sg_option( $stat['lkey'], $stat['default_lbl'] ) ); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div><!-- /hero text col -->

            <!-- Right: visual card -->
            <div style="flex:0 0 45%;max-width:45%;padding:0 15px;" class="hero-visual-col">
                <div class="sg-hero-visual" data-sg-reveal="right">
                    <div class="sg-hero-card" role="img" aria-label="<?php esc_attr_e( 'SEO performans göstergesi', 'seogezegeni' ); ?>">
                        <p class="sg-hero-card-title">
                            <i class="fa-solid fa-chart-line" style="color:var(--sg-accent);margin-right:6px;" aria-hidden="true"></i>
                            <?php _e( 'SEO Performans Göstergesi', 'seogezegeni' ); ?>
                        </p>

                        <?php
                        $metrics = [
                            [ 'label' => __('Organik Trafik', 'seogezegeni'), 'value' => '92', 'pct' => '92%' ],
                            [ 'label' => __('Anahtar Kelime Sıralaması', 'seogezegeni'), 'value' => '85', 'pct' => '85%' ],
                            [ 'label' => __('Dönüşüm Oranı', 'seogezegeni'), 'value' => '78', 'pct' => '78%' ],
                            [ 'label' => __('Sayfa Hızı', 'seogezegeni'), 'value' => '96', 'pct' => '96%' ],
                        ];
                        foreach ( $metrics as $m ) : ?>
                            <div class="sg-metric-item">
                                <div class="sg-metric-label">
                                    <span><?php echo esc_html( $m['label'] ); ?></span>
                                    <span><?php echo esc_html( $m['pct'] ); ?></span>
                                </div>
                                <div class="sg-metric-bar" role="progressbar"
                                     aria-valuenow="<?php echo esc_attr( $m['value'] ); ?>"
                                     aria-valuemin="0" aria-valuemax="100">
                                    <div class="sg-metric-fill" style="width:0"
                                         data-width="<?php echo esc_attr( $m['pct'] ); ?>"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="sg-hero-badge-float" aria-label="<?php esc_attr_e('%320 Trafik Artışı', 'seogezegeni'); ?>">
                            📈 %320 <?php _e( 'Trafik Artışı', 'seogezegeni' ); ?>
                        </div>
                    </div>
                </div>
            </div><!-- /hero visual col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- / HERO -->


<!-- ============================================================
     2. HAKKIMIZDA
     ============================================================ -->
<section class="sg-about section-pad" id="hakkimizda" aria-labelledby="about-heading">
    <div class="container">
        <div class="row" style="gap:0;align-items:center;">

            <!-- Left: text -->
            <div style="flex:0 0 50%;max-width:50%;padding:0 15px 0 0;">
                <div data-sg-reveal="left">
                    <?php sg_section_head(
                        sg_option( 'sg_about_label', __( 'Hakkımızda', 'seogezegeni' ) ),
                        sg_option( 'sg_about_title', __( 'Sonuçlar Kendisi Konuşuyor', 'seogezegeni' ) ),
                        '',
                        false,
                        true
                    ); ?>

                    <div class="sg-about-text">
                        <p>
                            <?php echo esc_html( sg_option( 'sg_about_desc',
                                __( 'SEO Gezegeni olarak yalnızca bir ajans değiliz – ölçülebilir büyüme hedeflerinizde gerçek ortağınızız. Özelleştirilmiş stratejiler ve son teknoloji araçlarla başarı hikayeleri yaratıyoruz.', 'seogezegeni' )
                            ) ); ?>
                        </p>
                        <ul class="sg-about-list" style="margin-top:20px;">
                            <li><?php _e( 'Sektöre özel, ölçülebilir SEO stratejileri', 'seogezegeni' ); ?></li>
                            <li><?php _e( 'Google sertifikalı uzman kadro', 'seogezegeni' ); ?></li>
                            <li><?php _e( 'Şeffaf raporlama ve 7/24 destek', 'seogezegeni' ); ?></li>
                            <li><?php _e( 'Bayraklı/İzmir & Maslak/İstanbul – Türkiye geneli hizmet', 'seogezegeni' ); ?></li>
                        </ul>
                    </div>

                    <a href="<?php echo esc_url( sg_option('sg_about_btn_url', home_url('/hakkimizda/')) ); ?>"
                       class="sg-btn sg-btn-outline"
                       style="margin-top:32px;display:inline-flex;">
                        <?php echo esc_html( sg_option('sg_about_btn_text', __('Birlikte Çalışalım', 'seogezegeni')) ); ?>
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <!-- Right: stat cards -->
            <div style="flex:0 0 50%;max-width:50%;padding:0 0 0 15px;">
                <div class="row" style="gap:0;margin:0;">
                    <?php
                    $about_cards = [
                        [
                            'num'   => sg_option( 'sg_stat_clients', '180' ) . '+',
                            'title' => __( 'Mutlu Müşteri', 'seogezegeni' ),
                            'desc'  => __( 'Türkiye genelinde hizmet verdiğimiz memnun müşteri sayımız.', 'seogezegeni' ),
                        ],
                        [
                            'num'   => sg_option( 'sg_stat_projects', '250' ) . '+',
                            'title' => __( 'Tamamlanan Proje', 'seogezegeni' ),
                            'desc'  => __( 'Başarıyla teslim ettiğimiz dijital pazarlama projeleri.', 'seogezegeni' ),
                        ],
                        [
                            'num'   => '%' . '320',
                            'title' => __( 'Ort. Trafik Artışı', 'seogezegeni' ),
                            'desc'  => __( 'Müşterilerimiz için elde ettiğimiz ortalama organik trafik büyümesi.', 'seogezegeni' ),
                        ],
                        [
                            'num'   => sg_option( 'sg_stat_years', '8' ),
                            'title' => __( 'Yıllık Deneyim', 'seogezegeni' ),
                            'desc'  => __( 'Dijital dünyada sektör bilgisi ve kanıtlanmış uzmanlık.', 'seogezegeni' ),
                        ],
                    ];
                    foreach ( $about_cards as $i => $card ) :
                        $delay = $i * 100;
                    ?>
                        <div style="flex:0 0 50%;max-width:50%;padding:12px;" data-sg-reveal data-delay="<?php echo esc_attr($delay); ?>">
                            <div class="sg-stat-card">
                                <div class="num sg-counter-static"><?php echo esc_html( $card['num'] ); ?></div>
                                <h5><?php echo esc_html( $card['title'] ); ?></h5>
                                <p><?php echo esc_html( $card['desc'] ); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- / HAKKIMIZDA -->


<!-- ============================================================
     3. HİZMETLER
     ============================================================ -->
<section class="sg-services section-pad alt-section" id="hizmetler" aria-labelledby="services-heading">
    <div class="container">
        <?php sg_section_head(
            __( 'Hizmetlerimiz', 'seogezegeni' ),
            __( 'Dijital Başarı İçin <span class="text-accent">Tam Çözüm</span>', 'seogezegeni' ),
            __( 'İşletmenizin dijital büyümesini desteklemek için kapsamlı SEO ve dijital pazarlama hizmetleri sunuyoruz.', 'seogezegeni' ),
            true
        ); ?>

        <div class="row" style="gap:0;margin-top:40px;">
            <?php
            $services = [
                [
                    'icon'  => 'fa-solid fa-magnifying-glass-chart',
                    'title' => __( 'SEO Hizmetleri', 'seogezegeni' ),
                    'desc'  => __( 'Teknik SEO, sayfa içi optimizasyon ve link building stratejileriyle Google\'da üst sıralara çıkın. Rakiplerinizi geride bırakın.', 'seogezegeni' ),
                    'url'   => home_url('/seo/'),
                ],
                [
                    'icon'  => 'fa-brands fa-google',
                    'title' => __( 'SEM / Google Ads', 'seogezegeni' ),
                    'desc'  => __( 'Google Ads ve ücretli arama kampanyalarıyla hedef kitlenize anında ulaşın. ROI odaklı reklam yönetimi.', 'seogezegeni' ),
                    'url'   => home_url('/sem/'),
                ],
                [
                    'icon'  => 'fa-solid fa-share-nodes',
                    'title' => __( 'Sosyal Medya Yönetimi', 'seogezegeni' ),
                    'desc'  => __( 'Instagram, Facebook, LinkedIn ve diğer platformlarda markanızı büyütün. İçerik üretimi ve topluluk yönetimi.', 'seogezegeni' ),
                    'url'   => home_url('/sosyal-medya/'),
                ],
                [
                    'icon'  => 'fa-solid fa-laptop-code',
                    'title' => __( 'Web Tasarım', 'seogezegeni' ),
                    'desc'  => __( 'SEO uyumlu, hızlı ve mobil dostu web siteleri tasarlıyoruz. Dönüşüm odaklı kullanıcı deneyimi.', 'seogezegeni' ),
                    'url'   => home_url('/web-tasarim/'),
                ],
                [
                    'icon'  => 'fa-solid fa-pen-nib',
                    'title' => __( 'İçerik Pazarlaması', 'seogezegeni' ),
                    'desc'  => __( 'SEO uyumlu blog yazıları, ürün içerikleri ve dijital içerik stratejisi ile organik trafiğinizi artırın.', 'seogezegeni' ),
                    'url'   => home_url('/icerik-pazarlama/'),
                ],
                [
                    'icon'  => 'fa-solid fa-bullhorn',
                    'title' => __( 'Dijital Reklam', 'seogezegeni' ),
                    'desc'  => __( 'Display, video, yeniden hedefleme ve programatik reklamcılıkla markanızı geniş kitlelere ulaştırın.', 'seogezegeni' ),
                    'url'   => home_url('/dijital-reklam/'),
                ],
            ];

            foreach ( $services as $i => $svc ) :
                $delay = ( $i % 3 ) * 150;
            ?>
                <div style="flex:0 0 33.333%;max-width:33.333%;padding:12px;"
                     data-sg-reveal
                     data-delay="<?php echo esc_attr($delay); ?>">
                    <div class="sg-service-card">
                        <div class="sg-service-icon" aria-hidden="true">
                            <i class="<?php echo esc_attr($svc['icon']); ?>"></i>
                        </div>
                        <h4><?php echo esc_html($svc['title']); ?></h4>
                        <p><?php echo esc_html($svc['desc']); ?></p>
                        <a href="<?php echo esc_url($svc['url']); ?>" class="sg-service-link">
                            <?php _e('Detaylı Bilgi', 'seogezegeni'); ?>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- / HİZMETLER -->


<!-- ============================================================
     4. NEDEN SEO GEZEGENİ?
     ============================================================ -->
<section class="sg-why section-pad dark-section" id="neden-biz" aria-labelledby="why-heading">
    <div class="container">
        <?php sg_section_head(
            __( 'Neden Biz?', 'seogezegeni' ),
            __( 'Bizi Tercih Etmeniz İçin <span class="text-accent">6 Güçlü Neden</span>', 'seogezegeni' ),
            __( 'Müşterilerimizin başarısı bizim başarımızdır. İşte fark yaratmamızın arkasındaki sebepler.', 'seogezegeni' ),
            true
        ); ?>

        <div class="row" style="gap:0;margin-top:40px;">
            <?php
            $reasons = [
                [
                    'icon' => 'fa-solid fa-bullseye',
                    'num'  => '01',
                    'title'=> __( 'Sonuç Odaklı Yaklaşım', 'seogezegeni' ),
                    'desc' => __( 'Her stratejimizi ölçülebilir KPI\'lara göre kurguluyoruz. Trafik, dönüşüm ve gelir artışı temel hedeflerimizdir.', 'seogezegeni' ),
                ],
                [
                    'icon' => 'fa-solid fa-certificate',
                    'num'  => '02',
                    'title'=> __( 'Sertifikalı Uzman Ekip', 'seogezegeni' ),
                    'desc' => __( 'Google, Meta ve HubSpot sertifikalı uzmanlardan oluşan deneyimli ekibimiz her zaman yanınızda.', 'seogezegeni' ),
                ],
                [
                    'icon' => 'fa-solid fa-chart-bar',
                    'num'  => '03',
                    'title'=> __( 'Şeffaf Raporlama', 'seogezegeni' ),
                    'desc' => __( 'Aylık detaylı raporlar ve anlık dashboard erişimi ile kampanya performansınızı her an takip edin.', 'seogezegeni' ),
                ],
                [
                    'icon' => 'fa-solid fa-handshake',
                    'num'  => '04',
                    'title'=> __( 'Kişiselleştirilmiş Strateji', 'seogezegeni' ),
                    'desc' => __( 'Her müşteri için sektör ve rekabete özel, özgün dijital pazarlama stratejisi geliştiriyoruz.', 'seogezegeni' ),
                ],
                [
                    'icon' => 'fa-solid fa-headset',
                    'num'  => '05',
                    'title'=> __( '7/24 Destek', 'seogezegeni' ),
                    'desc' => __( 'Sorularınıza ve ihtiyaçlarınıza hızlı cevap verebilmek için her zaman ulaşılabilir bir ekibiz.', 'seogezegeni' ),
                ],
                [
                    'icon' => 'fa-solid fa-location-dot',
                    'num'  => '06',
                    'title'=> __( 'İzmir & İstanbul Ofisleri', 'seogezegeni' ),
                    'desc' => __( 'Bayraklı/İzmir ve Maslak/İstanbul ofislerimizle yüz yüze görüşme imkânı sunuyoruz.', 'seogezegeni' ),
                ],
            ];

            foreach ( $reasons as $i => $r ) :
                $delay = ( $i % 3 ) * 150;
            ?>
                <div style="flex:0 0 50%;max-width:50%;padding:12px;"
                     data-sg-reveal
                     data-delay="<?php echo esc_attr($delay); ?>">
                    <div class="sg-why-card">
                        <div class="sg-why-num" aria-hidden="true"><?php echo esc_html($r['num']); ?></div>
                        <div class="sg-why-body">
                            <h5><?php echo esc_html($r['title']); ?></h5>
                            <p><?php echo esc_html($r['desc']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- / NEDEN BİZ -->


<!-- ============================================================
     5. PORTFÖY / VAKA ANALİZLERİ
     ============================================================ -->
<section class="sg-portfolio section-pad alt-section" id="portfolio" aria-labelledby="portfolio-heading">
    <div class="container">
        <div class="row" style="align-items:center;justify-content:space-between;margin-bottom:40px;">
            <div style="flex:0 0 60%;max-width:60%;padding:0 15px;">
                <?php sg_section_head(
                    __( 'Portföyümüz', 'seogezegeni' ),
                    __( 'Başarı Hikayelerimiz', 'seogezegeni' ),
                    '',
                    false
                ); ?>
            </div>
            <div style="padding:0 15px;text-align:right;">
                <a href="<?php echo esc_url( home_url('/portfolio/') ); ?>"
                   class="sg-btn sg-btn-outline" data-sg-reveal="right">
                    <?php _e( 'Tüm Projeler', 'seogezegeni' ); ?>
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <!-- Filter tabs -->
        <div class="sg-filter-tabs" role="tablist" aria-label="<?php esc_attr_e('Portföy filtrele', 'seogezegeni'); ?>">
            <button class="sg-filter-btn active" data-filter="all" role="tab" aria-selected="true">
                <?php _e( 'Tümü', 'seogezegeni' ); ?>
            </button>
            <?php
            $cats = get_terms([ 'taxonomy' => 'portfolio_cat', 'hide_empty' => true ]);
            if ( ! is_wp_error($cats) ) :
                foreach ( $cats as $cat ) :
            ?>
                <button class="sg-filter-btn"
                        data-filter="<?php echo esc_attr($cat->slug); ?>"
                        role="tab"
                        aria-selected="false">
                    <?php echo esc_html($cat->name); ?>
                </button>
            <?php endforeach; endif; ?>
            <!-- Fallback: default filter buttons if no categories -->
            <?php if ( is_wp_error($cats) || empty($cats) ) : ?>
                <button class="sg-filter-btn" data-filter="seo">SEO</button>
                <button class="sg-filter-btn" data-filter="sem">SEM</button>
                <button class="sg-filter-btn" data-filter="web">Web Tasarım</button>
                <button class="sg-filter-btn" data-filter="sosyal">Sosyal Medya</button>
            <?php endif; ?>
        </div>

        <!-- Portfolio grid -->
        <div class="sg-portfolio-grid" id="sgPortfolioGrid">
            <?php
            $portfolio_query = new WP_Query([
                'post_type'      => 'portfolio',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ( $portfolio_query->have_posts() ) :
                while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                    $terms    = get_the_terms( get_the_ID(), 'portfolio_cat' );
                    $cat_slug = ( $terms && ! is_wp_error($terms) ) ? implode( ' ', wp_list_pluck( $terms, 'slug' ) ) : '';
                    $cat_name = ( $terms && ! is_wp_error($terms) ) ? $terms[0]->name : __('Proje', 'seogezegeni');
                    $result   = get_post_meta( get_the_ID(), '_sg_result', true );
                    $client   = get_post_meta( get_the_ID(), '_sg_client', true );
            ?>
                <article class="sg-portfolio-item"
                         data-category="<?php echo esc_attr($cat_slug); ?>"
                         data-sg-reveal>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="sg-portfolio-img">
                            <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                                <?php the_post_thumbnail('sg-portfolio-thumb', ['loading' => 'lazy']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="sg-portfolio-content">
                        <div class="sg-portfolio-cat"><?php echo esc_html($cat_name); ?></div>
                        <h4>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 14, '…' ); ?></p>
                        <?php if ( $result ) : ?>
                            <div style="margin-top:12px;padding:8px 14px;background:rgba(168,230,61,.08);border:1px solid rgba(168,230,61,.2);border-radius:6px;font-size:.82rem;color:var(--sg-accent);font-weight:700;">
                                📈 <?php echo esc_html($result); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                /* Placeholder cards when no portfolio posts */
                $placeholders = [
                    [ 'cat' => 'SEO',          'title' => 'E-Ticaret SEO Projesi',     'result' => '%280 Trafik Artışı', 'filter' => 'seo' ],
                    [ 'cat' => 'SEM',          'title' => 'Google Ads Kampanyası',     'result' => '%45 Dönüşüm Artışı', 'filter' => 'sem' ],
                    [ 'cat' => 'Web Tasarım',  'title' => 'Kurumsal Web Sitesi',       'result' => '98 PageSpeed Skoru', 'filter' => 'web' ],
                    [ 'cat' => 'Sosyal Medya', 'title' => 'Instagram Büyüme Projesi',  'result' => '50K+ Yeni Takipçi',  'filter' => 'sosyal' ],
                    [ 'cat' => 'SEO',          'title' => 'Yerel SEO Optimizasyonu',   'result' => '#1 Sıralama',        'filter' => 'seo' ],
                    [ 'cat' => 'SEM',          'title' => 'Remarketing Kampanyası',    'result' => '%60 ROAS İyileştirme','filter' => 'sem' ],
                ];
                foreach ( $placeholders as $p ) :
            ?>
                <article class="sg-portfolio-item" data-category="<?php echo esc_attr($p['filter']); ?>" data-sg-reveal>
                    <div class="sg-portfolio-img" style="background:var(--sg-bg-primary);aspect-ratio:16/10;display:flex;align-items:center;justify-content:center;">
                        <i class="fa-solid fa-chart-line" style="font-size:3rem;color:var(--sg-accent);opacity:.4;" aria-hidden="true"></i>
                    </div>
                    <div class="sg-portfolio-content">
                        <div class="sg-portfolio-cat"><?php echo esc_html($p['cat']); ?></div>
                        <h4><?php echo esc_html($p['title']); ?></h4>
                        <p><?php _e('Müşterimizin dijital büyümesine katkı sağladığımız başarılı proje.', 'seogezegeni'); ?></p>
                        <div style="margin-top:12px;padding:8px 14px;background:rgba(168,230,61,.08);border:1px solid rgba(168,230,61,.2);border-radius:6px;font-size:.82rem;color:var(--sg-accent);font-weight:700;">
                            📈 <?php echo esc_html($p['result']); ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; endif; ?>
        </div><!-- /sg-portfolio-grid -->

    </div><!-- /.container -->
</section>
<!-- / PORTFÖY -->


<!-- ============================================================
     6. MÜŞTERİ YORUMLARI
     ============================================================ -->
<section class="sg-testimonials section-pad dark-section" id="yorumlar" aria-labelledby="tes-heading">
    <div class="container">
        <div class="row" style="align-items:center;justify-content:space-between;margin-bottom:40px;">
            <div style="flex:0 0 60%;max-width:60%;padding:0 15px;">
                <?php sg_section_head(
                    __( 'Müşteri Yorumları', 'seogezegeni' ),
                    __( 'Müşterilerimiz Ne Diyor?', 'seogezegeni' ),
                    '',
                    false
                ); ?>
            </div>
            <div style="padding:0 15px;" data-sg-reveal="right">
                <div class="sg-tes-nav" aria-label="<?php esc_attr_e('Yorum slayt kontrolleri', 'seogezegeni'); ?>">
                    <button id="sgTesPrev" aria-label="<?php esc_attr_e('Önceki yorum', 'seogezegeni'); ?>">
                        <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                    </button>
                    <button id="sgTesNext" aria-label="<?php esc_attr_e('Sonraki yorum', 'seogezegeni'); ?>">
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="sg-tes-slider-wrap">
            <div class="sg-tes-track" id="sgTesTrack">
                <?php
                $tes_query = new WP_Query([
                    'post_type'      => 'testimonial',
                    'posts_per_page' => 8,
                    'post_status'    => 'publish',
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                ]);

                if ( $tes_query->have_posts() ) :
                    while ( $tes_query->have_posts() ) : $tes_query->the_post();
                        $role    = get_post_meta( get_the_ID(), '_sg_tes_role', true );
                        $company = get_post_meta( get_the_ID(), '_sg_tes_company', true );
                        $rating  = get_post_meta( get_the_ID(), '_sg_tes_rating', true ) ?: 5;
                        $initial = mb_substr( get_the_title(), 0, 1, 'UTF-8' );
                ?>
                    <div class="sg-tes-card" role="article">
                        <div class="sg-tes-stars" aria-label="<?php echo esc_attr($rating); ?> yıldız">
                            <?php echo str_repeat( '★', intval($rating) ); ?>
                            <?php echo str_repeat( '☆', 5 - intval($rating) ); ?>
                        </div>
                        <p class="sg-tes-text"><?php the_content(); ?></p>
                        <div class="sg-tes-author">
                            <div class="sg-tes-avatar">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('thumbnail', ['loading' => 'lazy']); ?>
                                <?php else : ?>
                                    <?php echo esc_html($initial); ?>
                                <?php endif; ?>
                            </div>
                            <div>
                                <div class="sg-tes-name"><?php the_title(); ?></div>
                                <div class="sg-tes-role">
                                    <?php if ($role) echo esc_html($role); ?>
                                    <?php if ($role && $company) echo ' · '; ?>
                                    <?php if ($company) echo esc_html($company); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    /* Placeholder testimonials */
                    $placeholders = [
                        [ 'name' => 'Ahmet Yılmaz',   'role' => 'E-Ticaret Girişimcisi',    'rating' => 5, 'text' => 'SEO Gezegeni sayesinde web sitemizin organik trafiği 6 ayda %280 arttı. Profesyonel ekip ve şeffaf raporlama için teşekkürler.' ],
                        [ 'name' => 'Selin Kaya',     'role' => 'Pazarlama Müdürü',          'rating' => 5, 'text' => 'Google Ads kampanyalarımızı yönetmelerinden sonra dönüşüm oranımız %45 yükseldi. Kesinlikle tavsiye ediyorum.' ],
                        [ 'name' => 'Mehmet Demir',   'role' => 'Restoran İşletmecisi',      'rating' => 5, 'text' => 'Yerel SEO çalışmaları sonucunda "İzmir restoran" aramasında ilk sıraya çıktık. Müşteri sayımız inanılmaz arttı.' ],
                        [ 'name' => 'Fatma Özçelik',  'role' => 'Butik Mağaza Sahibi',       'rating' => 5, 'text' => 'Sosyal medya yönetimi hizmeti almaya başladıktan sonra Instagram takipçi sayımız 3 ayda 50.000\'e ulaştı.' ],
                        [ 'name' => 'Burak Şahin',    'role' => 'Yazılım Şirketi CEO\'su',   'rating' => 5, 'text' => 'Web tasarım ve SEO hizmetleri için mükemmel bir ekip. Sonuçlar beklentilerimizin çok üzerinde oldu.' ],
                        [ 'name' => 'Zeynep Arslan',  'role' => 'Muhasebe Firması Ortağı',   'rating' => 5, 'text' => 'B2B SEO stratejileri ile anahtar kelimelerimizde kısa sürede çok iyi sıralamalar elde ettik. Harika bir iş ortağı.' ],
                    ];
                    foreach ( $placeholders as $p ) :
                        $initial = mb_substr($p['name'], 0, 1, 'UTF-8');
                ?>
                    <div class="sg-tes-card" role="article">
                        <div class="sg-tes-stars" aria-label="<?php echo esc_attr($p['rating']); ?> yıldız">
                            <?php echo str_repeat('★', $p['rating']); ?>
                        </div>
                        <p class="sg-tes-text">"<?php echo esc_html($p['text']); ?>"</p>
                        <div class="sg-tes-author">
                            <div class="sg-tes-avatar"><?php echo esc_html($initial); ?></div>
                            <div>
                                <div class="sg-tes-name"><?php echo esc_html($p['name']); ?></div>
                                <div class="sg-tes-role"><?php echo esc_html($p['role']); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
            </div><!-- /sg-tes-track -->
        </div><!-- /sg-tes-slider-wrap -->

    </div><!-- /.container -->
</section>
<!-- / YORUMLAR -->


<!-- ============================================================
     7. BLOG BÖLÜMÜ
     ============================================================ -->
<section class="sg-blog section-pad alt-section" id="blog" aria-labelledby="blog-heading">
    <div class="container">
        <div class="row" style="align-items:center;justify-content:space-between;margin-bottom:48px;">
            <div style="flex:0 0 60%;max-width:60%;padding:0 15px;">
                <?php sg_section_head(
                    __( 'Blog', 'seogezegeni' ),
                    __( 'SEO ve Dijital Pazarlama Dünyasından <span class="text-accent">Güncel İçerikler</span>', 'seogezegeni' ),
                    '',
                    false
                ); ?>
            </div>
            <div style="padding:0 15px;text-align:right;" data-sg-reveal="right">
                <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ?: home_url('/blog/') ); ?>"
                   class="sg-btn sg-btn-outline">
                    <?php _e( 'Tüm Yazılar', 'seogezegeni' ); ?>
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="row" style="gap:0;">
            <?php
            $blog_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'ignore_sticky_posts' => true,
            ]);

            if ( $blog_query->have_posts() ) :
                $delay = 0;
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
            ?>
                <div style="flex:0 0 33.333%;max-width:33.333%;padding:12px;"
                     data-sg-reveal
                     data-delay="<?php echo esc_attr($delay); ?>">
                    <?php sg_post_card(); ?>
                </div>
                <?php $delay += 150; endwhile; wp_reset_postdata();
            else : ?>
                <!-- No posts yet: placeholder -->
                <?php for ($pi = 0; $pi < 3; $pi++) : ?>
                    <div style="flex:0 0 33.333%;max-width:33.333%;padding:12px;" data-sg-reveal data-delay="<?php echo $pi * 150; ?>">
                        <div class="sg-blog-card">
                            <div class="sg-blog-thumb sg-blog-thumb-placeholder" style="aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;background:var(--sg-bg-primary);">
                                <i class="fa-solid fa-newspaper" style="font-size:2.5rem;color:var(--sg-text-secondary);opacity:.4;" aria-hidden="true"></i>
                            </div>
                            <div class="sg-blog-body">
                                <span class="sg-blog-cat">SEO</span>
                                <div class="sg-blog-meta">
                                    <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> <?php echo esc_html(date_i18n('d.m.Y')); ?></span>
                                </div>
                                <h4><?php _e('Yakında yeni içerikler yayınlanacak', 'seogezegeni'); ?></h4>
                                <p><?php _e('SEO, dijital pazarlama ve web dünyasından güncel içerikler için takipte kalın.', 'seogezegeni'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; endif; ?>
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
<!-- / BLOG -->


<!-- ============================================================
     8. CTA BANNER
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
                <a href="<?php echo esc_url( sg_option('sg_cta_btn_url', home_url('/iletisim/')) ); ?>"
                   class="sg-btn sg-btn-primary">
                    <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                    <?php echo esc_html( sg_option('sg_cta_btn_text', __('Ücretsiz Analiz Al', 'seogezegeni')) ); ?>
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
                    'fa-brands fa-google'    => __('Google Partner', 'seogezegeni'),
                    'fa-brands fa-meta'      => __('Meta Business Partner', 'seogezegeni'),
                    'fa-solid fa-shield-halved' => __('SSL Güvenli', 'seogezegeni'),
                    'fa-solid fa-award'      => __('ISO Sertifikalı', 'seogezegeni'),
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


<!-- ============================================================
     9. İLETİŞİM
     ============================================================ -->
<section class="sg-contact section-pad alt-section" id="iletisim" aria-labelledby="contact-heading">
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

                    <div class="sg-contact-info" style="margin-top:32px;">
                        <?php
                        $phone = sg_option('sg_phone', '0555 162 62 11');
                        $email = sg_option('sg_email', 'info@seogezegeni.com');
                        $izmir = sg_option('sg_address_izmir', 'Bayraklı / İZMİR');
                        $istanbul = sg_option('sg_address_istanbul', 'Maslak / İSTANBUL');
                        $hours = sg_option('sg_working_hours', 'Pzt–Cum: 09:00–18:00');
                        ?>

                        <div class="sg-contact-item">
                            <div class="sg-contact-icon" aria-hidden="true">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="sg-contact-detail">
                                <strong><?php _e('Telefon', 'seogezegeni'); ?></strong>
                                <a href="tel:<?php echo esc_attr(preg_replace('/\D/','',$phone)); ?>">
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

                        <div class="sg-contact-item">
                            <div class="sg-contact-icon" aria-hidden="true">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="sg-contact-detail">
                                <strong><?php _e('Ofislerimiz', 'seogezegeni'); ?></strong>
                                <span><?php echo esc_html($izmir); ?></span>
                                <span><?php echo esc_html($istanbul); ?></span>
                            </div>
                        </div>

                        <?php if ($hours) : ?>
                        <div class="sg-contact-item">
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
                        <div class="sg-map-wrap" style="margin-top:32px;">
                            <iframe
                                src="<?php echo esc_url($map_url); ?>"
                                title="<?php esc_attr_e('SEO Gezegeni Ofis Konumu', 'seogezegeni'); ?>"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                allowfullscreen>
                            </iframe>
                        </div>
                    <?php else : ?>
                        <div class="sg-map-wrap" style="margin-top:32px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3121.02!2d27.17!3d38.45!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDI3JzAwLjAiTiAyN8KwMTAnMDAuMCJF!5e0!3m2!1str!2str!4v1"
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
                    /* Contact Form 7 shortcode – [contact-form-7 id="…"] */
                    if ( function_exists('wpcf7') ) :
                        /* Try to find the first CF7 form */
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
                    /* Fallback native form */
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
                            <label for="sg_service"><?php _e('İlgilendiğiniz Hizmet', 'seogezegeni'); ?></label>
                            <select id="sg_service" name="sg_service">
                                <option value=""><?php _e('Seçiniz...', 'seogezegeni'); ?></option>
                                <option value="seo"><?php _e('SEO Hizmetleri', 'seogezegeni'); ?></option>
                                <option value="sem"><?php _e('SEM / Google Ads', 'seogezegeni'); ?></option>
                                <option value="sosyal"><?php _e('Sosyal Medya Yönetimi', 'seogezegeni'); ?></option>
                                <option value="web"><?php _e('Web Tasarım', 'seogezegeni'); ?></option>
                                <option value="icerik"><?php _e('İçerik Pazarlaması', 'seogezegeni'); ?></option>
                                <option value="reklam"><?php _e('Dijital Reklam', 'seogezegeni'); ?></option>
                                <option value="diger"><?php _e('Diğer', 'seogezegeni'); ?></option>
                            </select>
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

</main><!-- /#sg-main -->

<?php
/* AJAX: Native contact form handler */
add_action('wp_ajax_sg_contact',        'sg_handle_contact');
add_action('wp_ajax_nopriv_sg_contact', 'sg_handle_contact');
function sg_handle_contact() {
    check_ajax_referer('sg_contact_nonce', 'sg_contact_nonce_field');

    $name    = isset($_POST['sg_name'])    ? sanitize_text_field(wp_unslash($_POST['sg_name'])) : '';
    $email   = isset($_POST['sg_email'])   ? sanitize_email(wp_unslash($_POST['sg_email']))     : '';
    $tel     = isset($_POST['sg_tel'])     ? sanitize_text_field(wp_unslash($_POST['sg_tel']))  : '';
    $company = isset($_POST['sg_company']) ? sanitize_text_field(wp_unslash($_POST['sg_company'])) : '';
    $website = isset($_POST['sg_website']) ? esc_url_raw(wp_unslash($_POST['sg_website']))      : '';
    $service = isset($_POST['sg_service']) ? sanitize_text_field(wp_unslash($_POST['sg_service'])) : '';
    $message = isset($_POST['sg_message']) ? sanitize_textarea_field(wp_unslash($_POST['sg_message'])) : '';

    if (!$name || !$email || !$message) {
        wp_send_json_error(['message' => __('Lütfen zorunlu alanları doldurun.', 'seogezegeni')]);
    }
    if (!is_email($email)) {
        wp_send_json_error(['message' => __('Geçerli bir e-posta adresi giriniz.', 'seogezegeni')]);
    }

    $to      = get_option('admin_email');
    $subject = sprintf(__('[SEO Gezegeni] %s – İletişim Formu', 'seogezegeni'), $name);
    $body    = "Ad Soyad: $name\nE-posta: $email\nTelefon: $tel\nŞirket: $company\nWeb: $website\nHizmet: $service\n\nMesaj:\n$message";
    $headers = ["Content-Type: text/plain; charset=UTF-8", "From: $name <$email>"];

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success(['message' => __('Mesajınız iletildi. En kısa sürede dönüş yapacağız!', 'seogezegeni')]);
    } else {
        wp_send_json_error(['message' => __('Mesaj gönderilemedi. Lütfen daha sonra tekrar deneyin.', 'seogezegeni')]);
    }
}

get_footer();
