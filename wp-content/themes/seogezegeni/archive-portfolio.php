<?php
/**
 * Reference archive template.
 */

get_header();

$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
?>

<main id="sg-main" role="main">

<div class="sg-page-hero sg-portfolio-archive-hero">
    <div class="container">
        <div class="sg-page-hero-inner">
            <div class="sg-portfolio-hero-row">
                <div class="sg-portfolio-hero-left">
                    <span class="sg-portfolio-hero-eyebrow" aria-hidden="true">
                        <i class="fa-solid fa-briefcase"></i>
                        <?php _e( 'Referanslar', 'seogezegeni' ); ?>
                    </span>
                    <h1 class="sg-portfolio-hero-title">
                        <?php _e( 'Tüm', 'seogezegeni' ); ?>
                        <span><?php _e( 'Referanslarımız', 'seogezegeni' ); ?></span>
                    </h1>
                    <p class="sg-portfolio-hero-desc">
                        <?php _e( 'Birlikte çalıştığımız markalar ve onlar için ürettiğimiz ölçülebilir sonuçlar.', 'seogezegeni' ); ?>
                    </p>
                </div>

                <div class="sg-portfolio-hero-right">
                    <?php
                    $total = wp_count_posts( 'portfolio' )->publish;
                    $stats = [
                        [ $total, __( 'Referans', 'seogezegeni' ) ],
                        [ '1000+', __( 'Proje', 'seogezegeni' ) ],
                        [ '15+', __( 'Yıl Deneyim', 'seogezegeni' ) ],
                    ];
                    foreach ( $stats as $s ) :
                        ?>
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

<div class="sg-breadcrumb-bar">
    <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
</div>

<div class="section-pad dark-section">
    <div class="container">
        <?php
        $references_query = new WP_Query( [
            'post_type'      => 'portfolio',
            'posts_per_page' => 12,
            'paged'          => $paged,
            'post_status'    => 'publish',
            'orderby'        => [ 'menu_order' => 'ASC', 'date' => 'DESC' ],
        ] );
        ?>

        <?php if ( $references_query->have_posts() ) : ?>
            <div class="sg-portfolio-grid" id="sgReferencesArchiveGrid">
                <?php
                while ( $references_query->have_posts() ) :
                    $references_query->the_post();
                    sg_reference_logo_card();
                endwhile; wp_reset_postdata(); ?>
            </div>

            <?php if ( $references_query->max_num_pages > 1 ) : ?>
                <div class="sg-reference-load-more-wrap">
                    <button type="button"
                            class="sg-btn sg-btn-outline sg-reference-load-more"
                            data-current-page="<?php echo esc_attr( $paged ); ?>"
                            data-max-page="<?php echo esc_attr( $references_query->max_num_pages ); ?>">
                        <span>Daha Fazla Y&uuml;kle</span>
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    </button>
                </div>
            <?php endif; ?>

        <?php else : ?>
            <div style="text-align:center;padding:80px 0;">
                <i class="fa-solid fa-briefcase" style="font-size:4rem;color:var(--sg-text-secondary);margin-bottom:24px;display:block;opacity:.4;" aria-hidden="true"></i>
                <h3 style="color:var(--sg-text-primary);margin-bottom:12px;"><?php _e( 'Henüz referans eklenmemiş', 'seogezegeni' ); ?></h3>
                <p style="color:var(--sg-text-secondary);"><?php _e( 'Referanslar eklendiğinde burada listelenecek.', 'seogezegeni' ); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_template_part( 'template-parts/pre-footer-cta' ); ?>
<?php get_template_part( 'template-parts/pre-footer-contact' ); ?>

</main>

<?php get_footer(); ?>
