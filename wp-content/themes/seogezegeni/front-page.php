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
            <div style="flex:0 0 42%;max-width:42%;padding:0 15px;" class="hero-text-col">
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

                    <!-- Stats -->
                    <div class="sg-hero-stats" data-sg-reveal role="list" aria-label="<?php esc_attr_e( 'İstatistikler', 'seogezegeni' ); ?>">
                        <?php
                        $stats = [
                            [ 'key' => 'sg_stat_projects', 'lkey' => 'sg_stat_projects_label', 'default_val' => '1000', 'default_lbl' => __('Tamamlanan Proje', 'seogezegeni') ],
                            [ 'key' => 'sg_stat_clients',  'lkey' => 'sg_stat_clients_label',  'default_val' => '20',   'default_lbl' => __('Ekip Üyesi',        'seogezegeni') ],
                            [ 'key' => 'sg_stat_years',    'lkey' => 'sg_stat_years_label',    'default_val' => '15',   'default_lbl' => __('Yıllık Deneyim',    'seogezegeni') ],
                        ];
                        foreach ( $stats as $i => $stat ) :
                            if ( $i > 0 ) : ?>
                                <div class="sg-stat-divider" aria-hidden="true"></div>
                            <?php endif; ?>
                            <?php
                            $stat_value = sg_stat_option( $stat['key'], $stat['default_val'] );
                            $stat_label = sg_stat_option( $stat['lkey'], $stat['default_lbl'] );
                            ?>
                            <div class="sg-stat-item" role="listitem">
                                <div class="sg-stat-number">
                                    <span class="sg-counter"
                                          data-target="<?php echo esc_attr( $stat_value ); ?>"
                                          aria-label="<?php echo esc_attr( $stat_value . ' ' . $stat_label ); ?>">
                                        0
                                    </span>+
                                </div>
                                <div class="sg-stat-label">
                                    <?php echo esc_html( $stat_label ); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div><!-- /hero text col -->

            <!-- Right: quote form -->
            <div style="flex:0 0 58%;max-width:58%;padding:0 15px;" class="hero-visual-col">
                <div class="sg-hero-visual" data-sg-reveal="right">
                    <div class="sg-hero-quote-card">
                        <p class="sg-hero-card-title">
                            <i class="fa-solid fa-file-invoice-dollar" style="color:var(--sg-accent);margin-right:6px;" aria-hidden="true"></i>
                            <?php _e( 'Ücretsiz Teklif Alın', 'seogezegeni' ); ?>
                        </p>

                        <form class="sg-hero-quote-form" id="sgHeroQuoteForm" novalidate>
                            <?php wp_nonce_field( 'sg_quote_nonce', 'sg_quote_nonce_field' ); ?>
                            <input type="hidden" name="action" value="sg_quote">

                            <div class="sg-hq-field">
                                <input type="text" name="sq_name"
                                       placeholder="<?php esc_attr_e( 'İsim *', 'seogezegeni' ); ?>"
                                       required aria-required="true">
                            </div>
                            <div class="sg-hq-field">
                                <input type="tel" name="sq_phone"
                                       placeholder="<?php esc_attr_e( 'Telefon *', 'seogezegeni' ); ?>"
                                       required aria-required="true">
                            </div>
                            <div class="sg-hq-field">
                                <input type="email" name="sq_email"
                                       placeholder="<?php esc_attr_e( 'Mail *', 'seogezegeni' ); ?>"
                                       required aria-required="true">
                            </div>
                            <div class="sg-hq-field">
                                <input type="url" name="sq_website"
                                       placeholder="<?php esc_attr_e( 'Website', 'seogezegeni' ); ?>">
                            </div>

                            <div class="sg-hq-field">
                                <span class="sg-hq-services-label"><?php _e( 'Teklif istenilen hizmetler:', 'seogezegeni' ); ?></span>
                                <div class="sg-hq-dropdown" id="sgServicesDropdown">
                                    <button type="button" class="sg-hq-dropdown-btn" aria-haspopup="listbox" aria-expanded="false">
                                        <span class="sg-hq-dropdown-text"><?php _e( 'Hizmet seçin…', 'seogezegeni' ); ?></span>
                                        <i class="fa-solid fa-chevron-down sg-hq-dropdown-arrow" aria-hidden="true"></i>
                                    </button>
                                    <div class="sg-hq-dropdown-panel" role="listbox" aria-multiselectable="true" aria-label="<?php esc_attr_e( 'Hizmetler', 'seogezegeni' ); ?>">
                                        <?php
                                        $quote_services = sg_get_quote_services();
                                        foreach ( $quote_services as $val => $label ) :
                                            $id = 'sgSvc_' . esc_attr( $val );
                                        ?>
                                            <label class="sg-hq-option" for="<?php echo $id; ?>">
                                                <input type="checkbox" id="<?php echo $id; ?>"
                                                       name="sq_services[]"
                                                       value="<?php echo esc_attr( $val ); ?>"
                                                       class="sg-hq-option-cb">
                                                <span class="sg-hq-option-check" aria-hidden="true"></span>
                                                <span><?php echo esc_html( $label ); ?></span>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="sg-btn sg-btn-primary" style="width:100%;justify-content:center;margin-top:4px;">
                                <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                                <?php _e( 'Teklif İste', 'seogezegeni' ); ?>
                            </button>
                            <div id="sgHeroQuoteMsg" role="status" aria-live="polite"
                                 style="display:none;margin-top:10px;padding:10px 14px;border-radius:8px;font-size:.85rem;"></div>
                        </form>
                    </div>
                </div>
            </div><!-- /hero visual col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- / HERO -->

<?php get_template_part( 'template-parts/front-references' ); ?>
<?php get_template_part( 'template-parts/front-services' ); ?>

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
<section class="sg-portfolio section-pad alt-section sg-home-legacy-portfolio" id="portfolio" aria-labelledby="portfolio-heading" aria-hidden="true">
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
                <a href="<?php echo esc_url( home_url('/referanslar/') ); ?>"
                   class="sg-btn sg-btn-outline" data-sg-reveal="right">
                    <?php _e( 'Tüm Referanslar', 'seogezegeni' ); ?>
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
     7. BLOG BÖLÜMÜ
     ============================================================ -->
<section class="sg-blog section-pad soft-section" id="blog" aria-labelledby="blog-heading">
    <div class="container">
        <div class="row" style="align-items:center;justify-content:space-between;">
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


<?php get_template_part( 'template-parts/pre-footer-cta' ); ?>
<?php get_template_part( 'template-parts/pre-footer-contact' ); ?>

</main><!-- /#sg-main -->

<?php get_footer();
