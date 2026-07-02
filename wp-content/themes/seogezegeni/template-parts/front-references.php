<?php
/**
 * Front page references section.
 */

defined( 'ABSPATH' ) || exit;

$references_url = home_url( '/referanslar/' );
?>

<section class="sg-portfolio section-pad alt-section" id="referanslar" aria-labelledby="references-heading">
    <div class="container">
        <div class="row" style="align-items:center;justify-content:space-between;">
            <div style="flex:0 0 60%;max-width:60%;padding:0 15px;">
                <?php sg_section_head(
                    __( 'Referanslarımız', 'seogezegeni' ),
                    __( 'Birlikte Büyüttüğümüz Markalar', 'seogezegeni' ),
                    '',
                    false
                ); ?>
            </div>
            <div style="padding:0 15px;text-align:right;">
                <a href="<?php echo esc_url( $references_url ); ?>"
                   class="sg-btn sg-btn-outline" data-sg-reveal="right">
                    <?php _e( 'Tüm Referanslar', 'seogezegeni' ); ?>
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="sg-portfolio-grid sg-reference-logo-grid" id="sgReferencesGrid">
            <?php
            $references_query = new WP_Query( [
                'post_type'      => 'portfolio',
                'posts_per_page' => 8,
                'post_status'    => 'publish',
                'orderby'        => [ 'menu_order' => 'ASC', 'date' => 'DESC' ],
            ] );

            if ( $references_query->have_posts() ) :
                while ( $references_query->have_posts() ) :
                    $references_query->the_post();
                    ?>
                    <article class="sg-portfolio-item sg-reference-logo-card" data-sg-reveal>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="sg-portfolio-img">
                                <a href="<?php echo esc_url( $references_url ); ?>"
                                   aria-label="<?php the_title(); ?>">
                                    <?php the_post_thumbnail( 'sg-portfolio-thumb', [ 'loading' => 'lazy', 'alt' => get_the_title() ] ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                for ( $i = 0; $i < 8; $i++ ) :
                    ?>
                    <article class="sg-portfolio-item sg-reference-logo-card" data-sg-reveal>
                        <div class="sg-portfolio-img sg-portfolio-img-placeholder">
                            <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
                        </div>
                    </article>
                    <?php
                endfor;
            endif;
            ?>
        </div>
    </div>
</section>
