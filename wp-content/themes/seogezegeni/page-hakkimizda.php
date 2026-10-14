<?php
/**
 * Template Name: Hakkımızda Sayfası
 * Template Post Type: page
 *
 * SEO Gezegeni hakkında sayfası özel şablonu.
 */
get_header();

if ( have_posts() ) {
    the_post();
}

extract( sg_about_content( get_the_ID() ) );

$about_video_id = sg_youtube_video_id_from_url( $video_url );
?>

<main id="sg-main" class="sg-about-page" role="main">

    <section class="sg-page-hero sg-about-hero" aria-labelledby="about-page-heading">
        <div class="container">
            <div class="sg-page-hero-inner">
                <div class="sg-about-hero-grid">
                    <div class="sg-about-hero-copy" data-sg-reveal="left">
                        <span class="sg-hero-badge">
                            <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                            <?php echo esc_html( $hero_badge ); ?>
                        </span>
                        <h1 id="about-page-heading">
                            <?php echo esc_html( $hero_title ); ?>
                            <span><?php echo esc_html( $hero_accent ); ?></span>
                        </h1>
                        <p>
                            <?php echo esc_html( $hero_text ); ?>
                        </p>
                        <div class="sg-about-hero-actions">
                            <?php if ( $btn1_text ) : ?>
                                <a href="<?php echo esc_url( sg_about_url( $btn1_url ) ); ?>" class="sg-btn sg-btn-primary">
                                    <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                                    <?php echo esc_html( $btn1_text ); ?>
                                </a>
                            <?php endif; ?>
                            <?php if ( $btn2_text ) : ?>
                                <a href="<?php echo esc_url( sg_about_url( $btn2_url ) ); ?>" class="sg-btn sg-btn-outline">
                                    <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
                                    <?php echo esc_html( $btn2_text ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sg-about-hero-panel" data-sg-reveal="right" aria-label="<?php esc_attr_e( 'Ajans özeti', 'seogezegeni' ); ?>">
                        <div class="sg-about-orbit" aria-hidden="true">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <?php foreach ( $hero_stats as $stat ) : ?>
                            <div class="sg-about-hero-stat">
                                <strong><?php echo esc_html( $stat['value'] ); ?></strong>
                                <span><?php echo esc_html( $stat['label'] ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Bar -->
    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <section class="sg-about-story section-pad light-section">
        <div class="container">
            <div class="sg-about-story-grid">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Hikayemiz', 'seogezegeni' ),
                        sg_pf_heading( $h_story ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <div class="sg-about-story-text">
                        <?php sg_seo_p( $story_text ); ?>
                        <ul class="sg-about-list">
                            <?php foreach ( $intro_points as $point ) : ?>
                                <li><?php echo esc_html( $point ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="sg-about-story-visual" data-sg-reveal="right">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'sg-hero-thumb', [ 'loading' => 'eager', 'alt' => get_the_title() ] ); ?>
                    <?php else : ?>
                        <div class="sg-about-visual-card">
                            <?php
                                                        foreach ( $visual_items as $item ) : ?>
                                <div class="sg-about-visual-item">
                                    <span class="sg-about-visual-icon" aria-hidden="true">
                                        <i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
                                    </span>
                                    <span class="sg-about-visual-text">
                                        <strong><?php echo esc_html( $item['title'] ); ?></strong>
                                        <small><?php echo esc_html( $item['text'] ); ?></small>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="sg-about-expertise section-pad alt-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Uzmanlıklarımız', 'seogezegeni' ),
                sg_pf_heading( $h_exp ),
                $exp_lead,
                true
            );
            ?>

            <div class="sg-about-card-grid">
                <?php foreach ( $expertise_cards as $index => $card ) : ?>
                    <article class="sg-service-card" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 4 ) * 100 ); ?>">
                        <div class="sg-service-icon" aria-hidden="true">
                            <i class="<?php echo esc_attr( $card['icon'] ); ?>"></i>
                        </div>
                        <h3><?php echo esc_html( $card['title'] ); ?></h3>
                        <p><?php echo esc_html( $card['desc'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-about-areas section-pad dark-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Çalışma Alanlarımız', 'seogezegeni' ),
                sg_pf_heading( $h_areas ),
                $areas_lead,
                true
            );
            ?>

            <div class="sg-about-area-grid sg-about-service-grid">
                <?php
                $cta_card = [ 'icon' => $cta_icon, 'title' => $cta_title, 'desc' => $cta_text, 'url' => $cta_url, 'cta' => true ];
                $areas_all = $work_areas;
                if ( $cta_title ) {
                    $areas_all[] = $cta_card;
                }
                foreach ( $areas_all as $index => $area ) :
                    $is_cta = ! empty( $area['cta'] );
                ?>
                    <div data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                        <a href="<?php echo esc_url( sg_about_url( $area['url'] ) ); ?>" class="sg-service-card<?php echo $is_cta ? ' sg-service-card-cta' : ''; ?>">
                            <div class="sg-service-icon" aria-hidden="true">
                                <i class="<?php echo esc_attr( $area['icon'] ); ?>"></i>
                            </div>
                            <h3><?php echo esc_html( $area['title'] ); ?></h3>
                            <p><?php echo esc_html( $area['desc'] ); ?></p>
                            <span class="sg-service-link">
                                <?php echo $is_cta ? esc_html__( 'Teklif İste', 'seogezegeni' ) : esc_html__( 'Detaylı Bilgi', 'seogezegeni' ); ?>
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-about-media section-pad alt-section">
        <div class="container">
            <?php
            sg_section_head(
                __( 'Biz Kimiz?', 'seogezegeni' ),
                sg_pf_heading( $h_media ),
                $media_lead,
                true
            );
            ?>

            <div class="sg-about-media-grid">
                <div class="sg-about-video-card" data-sg-reveal="left">
                    <?php if ( $about_video_id ) : ?>
                        <iframe
                            src="<?php echo esc_url( sprintf( 'https://www.youtube-nocookie.com/embed/%s', rawurlencode( $about_video_id ) ) ); ?>"
                            title="<?php esc_attr_e( 'SEO Gezegeni tanıtım videosu', 'seogezegeni' ); ?>"
                            loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    <?php else : ?>
                        <a href="<?php echo esc_url( $video_url ); ?>" class="sg-about-video-placeholder" target="_blank" rel="noopener">
                            <i class="fa-solid fa-play" aria-hidden="true"></i>
                            <span><?php esc_html_e( 'Tanıtım videosunu izleyin', 'seogezegeni' ); ?></span>
                        </a>
                    <?php endif; ?>
                </div>

                <?php if ( $photo_url ) : ?>
                <div class="sg-about-photo-card" data-sg-reveal="right">
                    <a
                        href="<?php echo esc_url( $photo_url ); ?>"
                        data-fancybox="about-gallery"
                        data-caption="<?php echo esc_attr( $photo_caption ); ?>">
                        <img
                            src="<?php echo esc_url( $photo_url ); ?>"
                            alt="<?php echo esc_attr( $photo_caption ); ?>"
                            loading="lazy">
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <div class="sg-about-instagram-grid" aria-label="<?php esc_attr_e( 'Instagram paylaşımları', 'seogezegeni' ); ?>">
                <?php foreach ( $instagram_posts as $index => $ig ) : ?>
                    <a class="sg-about-instagram-card" href="<?php echo esc_url( $ig['url'] ); ?>" target="_blank" rel="noopener" data-sg-reveal data-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                        <div class="sg-about-instagram-media">
                            <?php if ( ! empty( $ig['image'] ) ) : ?>
                                <img src="<?php echo esc_url( $ig['image'] ); ?>" alt="<?php echo esc_attr( $ig['title'] ); ?>" loading="lazy">
                            <?php else : ?>
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            <?php endif; ?>
                        </div>
                        <div class="sg-about-instagram-body">
                            <h3><?php echo esc_html( $ig['title'] ); ?></h3>
                            <p><?php echo esc_html( $ig['desc'] ); ?></p>
                            <span class="sg-about-instagram-link">
                                <?php esc_html_e( 'Instagram’da Gör', 'seogezegeni' ); ?>
                                <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="sg-about-quality section-pad light-section">
        <div class="container">
            <div class="sg-about-quality-grid">
                <div data-sg-reveal="left">
                    <?php
                    sg_section_head(
                        __( 'Kaliteli Hizmet', 'seogezegeni' ),
                        sg_pf_heading( $h_quality ),
                        '',
                        false,
                        true
                    );
                    ?>
                    <?php sg_seo_p( $quality_text ); ?>
                </div>

                <div class="sg-about-progress-list" data-sg-reveal="right">
                    <?php foreach ( $quality_metrics as $metric ) :
                        $metric[1] = max( 0, min( 100, (int) $metric[1] ) );
                    ?>
                        <div class="sg-about-progress-item">
                            <div class="sg-about-progress-label">
                                <span><?php echo esc_html( $metric[0] ); ?></span>
                                <strong><?php echo esc_html( $metric[1] ); ?>%</strong>
                            </div>
                            <div class="sg-about-progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?php echo esc_attr( $metric[1] ); ?>">
                                <span style="width:<?php echo esc_attr( $metric[1] ); ?>%;"></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_template_part( 'template-parts/pre-footer-cta' ); ?>
<?php get_template_part( 'template-parts/pre-footer-contact' ); ?>

</main>

<?php get_footer(); ?>
