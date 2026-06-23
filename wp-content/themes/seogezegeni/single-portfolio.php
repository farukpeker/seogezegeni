<?php
/**
 * single-portfolio.php – Tekil Portföy Şablonu
 */
get_header();

while ( have_posts() ) : the_post();
    $client   = get_post_meta( get_the_ID(), '_sg_client',   true );
    $duration = get_post_meta( get_the_ID(), '_sg_duration', true );
    $result   = get_post_meta( get_the_ID(), '_sg_result',   true );
    $url      = get_post_meta( get_the_ID(), '_sg_url',      true );
    $terms    = get_the_terms( get_the_ID(), 'portfolio_cat' );
    $tags     = get_the_terms( get_the_ID(), 'portfolio_tag' );
    $cat_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
?>

<main id="sg-main" role="main">

<!-- Page Hero -->
<div class="sg-page-hero">
    <div class="container">
        <div class="sg-page-hero-inner">
            <?php if ( $cat_name ) : ?>
                <div class="sg-portfolio-cat" style="margin-bottom:14px;"><?php echo esc_html( $cat_name ); ?></div>
            <?php endif; ?>

            <h1 style="max-width:800px;"><?php the_title(); ?></h1>

            <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:18px;font-size:.88rem;color:var(--sg-text-secondary);">
                <?php if ( $client ) : ?>
                    <span>
                        <i class="fa-regular fa-user" aria-hidden="true" style="color:var(--sg-accent);margin-right:5px;"></i>
                        <?php echo esc_html( $client ); ?>
                    </span>
                <?php endif; ?>
                <?php if ( $duration ) : ?>
                    <span>
                        <i class="fa-regular fa-clock" aria-hidden="true" style="color:var(--sg-accent);margin-right:5px;"></i>
                        <?php echo esc_html( $duration ); ?>
                    </span>
                <?php endif; ?>
                <?php if ( $result ) : ?>
                    <span style="color:var(--sg-accent);font-weight:700;">
                        📈 <?php echo esc_html( $result ); ?>
                    </span>
                <?php endif; ?>
                <span>
                    <i class="fa-regular fa-calendar" aria-hidden="true" style="margin-right:5px;"></i>
                    <?php echo esc_html( get_the_date() ); ?>
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Bar -->
<div class="sg-breadcrumb-bar">
    <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
</div>

<!-- Main Content -->
<div class="section-pad dark-section">
    <div class="container">
        <div class="row" style="gap:0;">

            <!-- Content column -->
            <div style="flex:0 0 66.666%;max-width:66.666%;padding:0 15px;" class="sg-portfolio-main">

                <?php if ( has_post_thumbnail() ) : ?>
                    <div style="margin-bottom:36px;border-radius:var(--sg-radius-lg);overflow:hidden;border:1px solid var(--sg-border-light);">
                        <?php the_post_thumbnail( 'sg-hero-thumb', [
                            'loading' => 'eager',
                            'alt'     => get_the_title(),
                            'style'   => 'width:100%;height:auto;display:block;',
                        ] ); ?>
                    </div>
                <?php endif; ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'sg-post-body' ); ?>>
                    <?php the_content(); ?>
                    <?php
                    wp_link_pages( [
                        'before' => '<div class="sg-page-links">' . __( 'Sayfalar:', 'seogezegeni' ),
                        'after'  => '</div>',
                    ] );
                    ?>
                </article>

                <!-- Tags -->
                <?php if ( $tags && ! is_wp_error( $tags ) ) : ?>
                    <div class="sg-post-tags" style="margin-top:32px;" aria-label="<?php esc_attr_e( 'Proje etiketleri', 'seogezegeni' ); ?>">
                        <span style="color:var(--sg-text-secondary);font-size:.85rem;align-self:center;">
                            <i class="fa-solid fa-tag" aria-hidden="true"></i>
                        </span>
                        <?php foreach ( $tags as $tag ) : ?>
                            <a href="<?php echo esc_url( get_term_link( $tag ) ); ?>">
                                <?php echo esc_html( $tag->name ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Social share -->
                <div style="display:flex;align-items:center;gap:12px;margin-top:36px;padding-top:28px;border-top:1px solid var(--sg-border-light);">
                    <span style="color:var(--sg-text-secondary);font-size:.85rem;font-weight:600;"><?php _e( 'Paylaş:', 'seogezegeni' ); ?></span>
                    <?php
                    $share_url   = urlencode( get_permalink() );
                    $share_title = urlencode( get_the_title() );
                    $shares = [
                        [ 'https://twitter.com/intent/tweet?url=' . $share_url . '&text=' . $share_title, 'fa-brands fa-x-twitter', 'X (Twitter)' ],
                        [ 'https://www.linkedin.com/shareArticle?mini=true&url=' . $share_url . '&title=' . $share_title, 'fa-brands fa-linkedin-in', 'LinkedIn' ],
                        [ 'https://www.facebook.com/sharer/sharer.php?u=' . $share_url, 'fa-brands fa-facebook-f', 'Facebook' ],
                        [ 'https://wa.me/?text=' . $share_title . '%20' . $share_url, 'fa-brands fa-whatsapp', 'WhatsApp' ],
                    ];
                    foreach ( $shares as $s ) : ?>
                        <a href="<?php echo esc_url( $s[0] ); ?>"
                           target="_blank" rel="noopener noreferrer"
                           aria-label="<?php echo esc_attr( $s[2] ); ?> <?php esc_attr_e( 'paylaş', 'seogezegeni' ); ?>"
                           style="width:36px;height:36px;border-radius:50%;border:1px solid var(--sg-border-light);display:inline-flex;align-items:center;justify-content:center;color:var(--sg-text-secondary);font-size:.85rem;transition:var(--sg-transition);"
                           onmouseenter="this.style.borderColor='var(--sg-accent)';this.style.color='var(--sg-accent)';"
                           onmouseleave="this.style.borderColor='var(--sg-border-light)';this.style.color='var(--sg-text-secondary)';">
                            <i class="<?php echo esc_attr( $s[1] ); ?>" aria-hidden="true"></i>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Prev / Next portfolio nav -->
                <?php
                $prev_portfolio = get_adjacent_post( false, '', true,  'portfolio_cat' );
                $next_portfolio = get_adjacent_post( false, '', false, 'portfolio_cat' );
                if ( $prev_portfolio || $next_portfolio ) : ?>
                    <div class="sg-post-nav" style="margin-top:36px;">
                        <?php if ( $prev_portfolio ) : ?>
                            <a href="<?php echo esc_url( get_permalink( $prev_portfolio ) ); ?>" class="sg-post-nav-item prev">
                                <div class="sg-post-nav-label">
                                    <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                                    <?php _e( 'Önceki Proje', 'seogezegeni' ); ?>
                                </div>
                                <div class="sg-post-nav-title"><?php echo esc_html( get_the_title( $prev_portfolio ) ); ?></div>
                            </a>
                        <?php else : ?>
                            <div></div>
                        <?php endif; ?>

                        <?php if ( $next_portfolio ) : ?>
                            <a href="<?php echo esc_url( get_permalink( $next_portfolio ) ); ?>" class="sg-post-nav-item next">
                                <div class="sg-post-nav-label">
                                    <?php _e( 'Sonraki Proje', 'seogezegeni' ); ?>
                                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                                </div>
                                <div class="sg-post-nav-title"><?php echo esc_html( get_the_title( $next_portfolio ) ); ?></div>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div><!-- /content column -->

            <!-- Sidebar -->
            <div style="flex:0 0 33.333%;max-width:33.333%;padding:0 15px;">
                <aside role="complementary" aria-label="<?php esc_attr_e( 'Proje detayları', 'seogezegeni' ); ?>">

                    <!-- Project Details Card -->
                    <div class="sg-post-sidebar-widget" style="margin-bottom:24px;">
                        <h4 style="display:flex;align-items:center;gap:8px;">
                            <i class="fa-solid fa-circle-info" style="color:var(--sg-accent);" aria-hidden="true"></i>
                            <?php _e( 'Proje Detayları', 'seogezegeni' ); ?>
                        </h4>

                        <ul style="display:flex;flex-direction:column;gap:0;">
                            <?php
                            $details = [];
                            if ( $client )   $details[] = [ 'fa-regular fa-user',    __( 'Müşteri',         'seogezegeni' ), esc_html( $client ) ];
                            if ( $cat_name ) $details[] = [ 'fa-solid fa-tag',        __( 'Kategori',        'seogezegeni' ), esc_html( $cat_name ) ];
                            if ( $duration ) $details[] = [ 'fa-regular fa-clock',    __( 'Proje Süresi',    'seogezegeni' ), esc_html( $duration ) ];
                            if ( $result )   $details[] = [ 'fa-solid fa-chart-line', __( 'Elde Edilen Sonuç','seogezegeni' ), esc_html( $result ) ];
                            $details[]                  = [ 'fa-regular fa-calendar', __( 'Tarih',           'seogezegeni' ), esc_html( get_the_date() ) ];

                            foreach ( $details as $d ) :
                            ?>
                                <li style="padding:12px 0;border-bottom:1px solid var(--sg-border-light);display:flex;align-items:flex-start;gap:12px;">
                                    <i class="<?php echo esc_attr( $d[0] ); ?>" style="color:var(--sg-accent);margin-top:2px;width:16px;flex-shrink:0;" aria-hidden="true"></i>
                                    <span>
                                        <span style="display:block;font-size:.76rem;color:var(--sg-text-secondary);text-transform:uppercase;letter-spacing:.05em;margin-bottom:2px;">
                                            <?php echo esc_html( $d[1] ); ?>
                                        </span>
                                        <strong style="font-size:.9rem;color:var(--sg-text-primary);"><?php echo $d[2]; ?></strong>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <?php if ( $url ) : ?>
                            <a href="<?php echo esc_url( $url ); ?>"
                               target="_blank" rel="noopener noreferrer"
                               class="sg-btn sg-btn-primary w-full"
                               style="margin-top:20px;justify-content:center;font-size:.88rem;">
                                <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                                <?php _e( 'Canlı Siteyi Ziyaret Et', 'seogezegeni' ); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <!-- Categories -->
                    <?php if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) : ?>
                        <div class="sg-post-sidebar-widget" style="margin-bottom:24px;">
                            <h4><?php _e( 'Kategori', 'seogezegeni' ); ?></h4>
                            <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:12px;">
                                <?php foreach ( $terms as $term ) : ?>
                                    <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"
                                       style="display:inline-flex;padding:5px 14px;border-radius:20px;border:1px solid var(--sg-border);color:var(--sg-accent);font-size:.8rem;font-weight:600;transition:var(--sg-transition);"
                                       onmouseenter="this.style.background='var(--sg-accent)';this.style.color='var(--sg-text-dark)';"
                                       onmouseleave="this.style.background='transparent';this.style.color='var(--sg-accent)';">
                                        <?php echo esc_html( $term->name ); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- CTA Widget -->
                    <div class="sg-post-sidebar-widget" style="background:var(--sg-accent);border:none;margin-bottom:24px;">
                        <h4 style="color:var(--sg-text-dark);border-color:rgba(0,0,0,.1);">
                            <?php _e( 'Siz de Bu Başarıyı Yaşayın', 'seogezegeni' ); ?>
                        </h4>
                        <p style="color:rgba(0,0,0,.7);font-size:.88rem;margin-bottom:16px;">
                            <?php _e( 'Markanız için benzer sonuçlar elde etmek ister misiniz? Ücretsiz danışmanlık için hemen iletişime geçin.', 'seogezegeni' ); ?>
                        </p>
                        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>"
                           class="sg-btn sg-btn-dark w-full" style="justify-content:center;font-size:.88rem;">
                            <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                            <?php _e( 'Ücretsiz Danışmanlık Al', 'seogezegeni' ); ?>
                        </a>
                    </div>

                    <!-- All Projects link -->
                    <div style="text-align:center;">
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'portfolio' ) ); ?>"
                           style="color:var(--sg-text-secondary);font-size:.85rem;display:inline-flex;align-items:center;gap:6px;transition:var(--sg-transition);"
                           onmouseenter="this.style.color='var(--sg-accent)';"
                           onmouseleave="this.style.color='var(--sg-text-secondary)';">
                            <i class="fa-solid fa-grid-2" aria-hidden="true"></i>
                            <?php _e( 'Tüm Projelere Dön', 'seogezegeni' ); ?>
                        </a>
                    </div>

                </aside>
            </div><!-- /sidebar -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<!-- Related Projects -->
<?php
$related_args = [
    'post_type'      => 'portfolio',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'post__not_in'   => [ get_the_ID() ],
    'orderby'        => 'rand',
];

if ( $terms && ! is_wp_error( $terms ) ) {
    $related_args['tax_query'] = [[
        'taxonomy' => 'portfolio_cat',
        'field'    => 'slug',
        'terms'    => wp_list_pluck( $terms, 'slug' ),
    ]];
}

$related = new WP_Query( $related_args );

if ( $related->have_posts() ) : ?>
    <div class="section-pad alt-section">
        <div class="container">
            <div style="text-align:center;margin-bottom:40px;">
                <?php sg_section_head(
                    __( 'Benzer Projeler', 'seogezegeni' ),
                    __( 'İlgili Çalışmalarımız', 'seogezegeni' ),
                    '',
                    true
                ); ?>
            </div>

            <div class="sg-portfolio-grid">
                <?php while ( $related->have_posts() ) : $related->the_post();
                    $r_terms  = get_the_terms( get_the_ID(), 'portfolio_cat' );
                    $r_cat    = ( $r_terms && ! is_wp_error( $r_terms ) ) ? $r_terms[0]->name : '';
                    $r_result = get_post_meta( get_the_ID(), '_sg_result', true );
                ?>
                    <article class="sg-portfolio-item" data-sg-reveal>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="sg-portfolio-img">
                                <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                                    <?php the_post_thumbnail( 'sg-portfolio-thumb', [ 'loading' => 'lazy', 'alt' => get_the_title() ] ); ?>
                                </a>
                                <div class="sg-portfolio-overlay" aria-hidden="true">
                                    <a href="<?php the_permalink(); ?>" class="sg-portfolio-overlay-btn" tabindex="-1">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="sg-portfolio-img sg-portfolio-img-placeholder">
                                <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                    <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="sg-portfolio-content">
                            <?php if ( $r_cat ) : ?>
                                <div class="sg-portfolio-cat"><?php echo esc_html( $r_cat ); ?></div>
                            <?php endif; ?>
                            <h3 style="font-size:1.05rem;margin:8px 0 10px;line-height:1.4;">
                                <a href="<?php the_permalink(); ?>" style="color:var(--sg-text-primary);"><?php the_title(); ?></a>
                            </h3>
                            <?php if ( $r_result ) : ?>
                                <div class="sg-portfolio-result">📈 <?php echo esc_html( $r_result ); ?></div>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="sg-portfolio-more">
                                <?php _e( 'Projeyi İncele', 'seogezegeni' ); ?>
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

</main>

<?php endwhile; ?>
<?php get_footer(); ?>
