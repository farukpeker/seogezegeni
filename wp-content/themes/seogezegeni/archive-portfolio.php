<?php
/**
 * archive-portfolio.php – Portföy Arşiv Şablonu
 */
get_header();

$paged     = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$all_cats  = get_terms( [ 'taxonomy' => 'portfolio_cat', 'hide_empty' => true ] );
$active_cat = isset( $_GET['kategori'] ) ? sanitize_text_field( wp_unslash( $_GET['kategori'] ) ) : 'all';
?>

<main id="sg-main" role="main">

<!-- Page Hero -->
<div class="sg-page-hero sg-portfolio-archive-hero">
    <div class="container">
        <div class="sg-page-hero-inner">
            <div class="sg-portfolio-hero-row">
                <div class="sg-portfolio-hero-left">
                    <span class="sg-portfolio-hero-eyebrow" aria-hidden="true">
                        <i class="fa-solid fa-briefcase"></i>
                        <?php _e( 'Vaka Analizleri', 'seogezegeni' ); ?>
                    </span>
                    <h1 class="sg-portfolio-hero-title">
                        <?php _e( 'Başarı', 'seogezegeni' ); ?>
                        <span><?php _e( 'Hikayelerimiz', 'seogezegeni' ); ?></span>
                    </h1>
                    <p class="sg-portfolio-hero-desc">
                        <?php _e( 'Müşterilerimiz için hayata geçirdiğimiz projeler ve ölçülebilir sonuçlar.', 'seogezegeni' ); ?>
                    </p>
                </div>

                <div class="sg-portfolio-hero-right">
                    <?php
                    $total     = wp_count_posts( 'portfolio' )->publish;
                    $cat_count = ! is_wp_error( $all_cats ) ? count( $all_cats ) : 0;
                    $stats = [
                        [ $total,     __( 'Proje',     'seogezegeni' ) ],
                        [ $cat_count, __( 'Kategori',  'seogezegeni' ) ],
                        [ '100%',     __( 'Memnuniyet','seogezegeni' ) ],
                    ];
                    foreach ( $stats as $s ) : ?>
                        <div class="sg-portfolio-hero-stat">
                            <strong><?php echo esc_html( $s[0] ); ?></strong>
                            <span><?php echo esc_html( $s[1] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Bar -->
<div class="sg-breadcrumb-bar">
    <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
</div>

<!-- Archive Content -->
<div class="section-pad dark-section">
    <div class="container">

        <!-- Filter tabs -->
        <?php if ( ! is_wp_error( $all_cats ) && ! empty( $all_cats ) ) : ?>
            <div class="sg-filter-tabs" role="tablist" aria-label="<?php esc_attr_e( 'Portföy filtrele', 'seogezegeni' ); ?>" style="margin-bottom:48px;">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'portfolio' ) ); ?>"
                   class="sg-filter-btn<?php echo ( $active_cat === 'all' ) ? ' active' : ''; ?>"
                   role="tab"
                   aria-selected="<?php echo ( $active_cat === 'all' ) ? 'true' : 'false'; ?>">
                    <?php _e( 'Tümü', 'seogezegeni' ); ?>
                </a>
                <?php foreach ( $all_cats as $cat ) : ?>
                    <a href="<?php echo esc_url( add_query_arg( 'kategori', $cat->slug, get_post_type_archive_link( 'portfolio' ) ) ); ?>"
                       class="sg-filter-btn<?php echo ( $active_cat === $cat->slug ) ? ' active' : ''; ?>"
                       role="tab"
                       aria-selected="<?php echo ( $active_cat === $cat->slug ) ? 'true' : 'false'; ?>">
                        <?php echo esc_html( $cat->name ); ?>
                        <span style="font-size:.75rem;opacity:.7;margin-left:4px;">(<?php echo absint( $cat->count ); ?>)</span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php
        /* Build query */
        $tax_query = [];
        if ( $active_cat !== 'all' && ! is_wp_error( $all_cats ) ) {
            $tax_query = [[
                'taxonomy' => 'portfolio_cat',
                'field'    => 'slug',
                'terms'    => $active_cat,
            ]];
        }

        $portfolio_query = new WP_Query( [
            'post_type'      => 'portfolio',
            'posts_per_page' => 9,
            'paged'          => $paged,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'tax_query'      => $tax_query,
        ] );
        ?>

        <?php if ( $portfolio_query->have_posts() ) : ?>
            <div class="sg-portfolio-grid" id="sgPortfolioGrid">
                <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                    $terms    = get_the_terms( get_the_ID(), 'portfolio_cat' );
                    $cat_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : __( 'Proje', 'seogezegeni' );
                    $result   = get_post_meta( get_the_ID(), '_sg_result', true );
                    $client   = get_post_meta( get_the_ID(), '_sg_client', true );
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
                                <div class="sg-portfolio-overlay" aria-hidden="true">
                                    <a href="<?php the_permalink(); ?>" class="sg-portfolio-overlay-btn" tabindex="-1">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="sg-portfolio-content">
                            <div class="sg-portfolio-cat"><?php echo esc_html( $cat_name ); ?></div>
                            <h3 style="font-size:1.1rem;margin:8px 0 10px;line-height:1.4;">
                                <a href="<?php the_permalink(); ?>" style="color:var(--sg-text-primary);">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p style="font-size:.88rem;color:var(--sg-text-secondary);line-height:1.6;">
                                <?php echo wp_trim_words( get_the_excerpt(), 16, '…' ); ?>
                            </p>

                            <?php if ( $client ) : ?>
                                <div style="margin-top:10px;font-size:.8rem;color:var(--sg-text-secondary);">
                                    <i class="fa-regular fa-user" aria-hidden="true" style="color:var(--sg-accent);margin-right:4px;"></i>
                                    <?php echo esc_html( $client ); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ( $result ) : ?>
                                <div class="sg-portfolio-result">
                                    📈 <?php echo esc_html( $result ); ?>
                                </div>
                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>" class="sg-portfolio-more" aria-label="<?php echo esc_attr( get_the_title() ); ?> <?php esc_attr_e( 'projesini incele', 'seogezegeni' ); ?>">
                                <?php _e( 'Projeyi İncele', 'seogezegeni' ); ?>
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- Pagination -->
            <?php if ( $portfolio_query->max_num_pages > 1 ) : ?>
                <div class="sg-pagination" style="margin-top:48px;">
                    <?php
                    echo paginate_links( [
                        'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'format'    => '?paged=%#%',
                        'current'   => $paged,
                        'total'     => $portfolio_query->max_num_pages,
                        'prev_text' => '<i class="fa-solid fa-chevron-left" aria-hidden="true"></i>',
                        'next_text' => '<i class="fa-solid fa-chevron-right" aria-hidden="true"></i>',
                    ] );
                    ?>
                </div>
            <?php endif; ?>

        <?php else : ?>
            <div style="text-align:center;padding:80px 0;">
                <i class="fa-solid fa-briefcase" style="font-size:4rem;color:var(--sg-text-secondary);margin-bottom:24px;display:block;opacity:.4;" aria-hidden="true"></i>
                <h3 style="color:var(--sg-text-primary);margin-bottom:12px;"><?php _e( 'Henüz proje eklenmemiş', 'seogezegeni' ); ?></h3>
                <p style="color:var(--sg-text-secondary);"><?php _e( 'Bu kategori için proje bulunamadı. Diğer kategorileri inceleyin.', 'seogezegeni' ); ?></p>
                <a href="<?php echo esc_url( get_post_type_archive_link( 'portfolio' ) ); ?>"
                   class="sg-btn sg-btn-primary" style="margin-top:28px;display:inline-flex;">
                    <i class="fa-solid fa-grid-2" aria-hidden="true"></i>
                    <?php _e( 'Tüm Projeleri Gör', 'seogezegeni' ); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</div>

<!-- CTA Band -->
<div style="background:linear-gradient(135deg,rgba(168,230,61,.08) 0%,rgba(168,230,61,.03) 100%);border-top:1px solid var(--sg-border);border-bottom:1px solid var(--sg-border);padding:60px 0;">
    <div class="container" style="text-align:center;">
        <h2 style="font-size:1.75rem;margin-bottom:14px;">
            <?php _e( 'Projenizi Birlikte Hayata Geçirelim', 'seogezegeni' ); ?>
        </h2>
        <p style="color:var(--sg-text-secondary);max-width:520px;margin:0 auto 28px;">
            <?php _e( 'Markanız için benzer başarılar elde etmek ister misiniz? Ücretsiz danışmanlık için bugün iletişime geçin.', 'seogezegeni' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" class="sg-btn sg-btn-primary" style="font-size:1rem;padding:14px 32px;">
            <i class="fa-solid fa-rocket" aria-hidden="true"></i>
            <?php _e( 'Ücretsiz Danışmanlık Al', 'seogezegeni' ); ?>
        </a>
    </div>
</div>

</main>

<?php get_footer(); ?>
