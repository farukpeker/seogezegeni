<?php
/**
 * Blog / arşiv hero alanı (index.php ve archive.php ortak kullanır).
 *
 * @param array $args { badge, icon, title, accent, desc, stats[] = [value, label] }
 */
$args = wp_parse_args( $args ?? [], [
    'badge'  => __( 'Blog', 'seogezegeni' ),
    'icon'   => 'fa-newspaper',
    'title'  => '',
    'accent' => '',
    'desc'   => '',
    'stats'  => [],
] );
?>
    <section class="sg-page-hero sg-about-hero sg-blog-hero" aria-labelledby="blog-page-heading">
        <div class="container">
            <div class="sg-page-hero-inner">
                <div class="sg-blog-hero-grid">
                    <div class="sg-about-hero-copy" data-sg-reveal="left">
                        <span class="sg-hero-badge">
                            <i class="fa-solid <?php echo esc_attr( $args['icon'] ); ?>" aria-hidden="true"></i>
                            <?php echo esc_html( $args['badge'] ); ?>
                        </span>
                        <h1 id="blog-page-heading">
                            <?php echo esc_html( $args['title'] ); ?>
                            <?php if ( $args['accent'] ) : ?>
                                <span><?php echo esc_html( $args['accent'] ); ?></span>
                            <?php endif; ?>
                        </h1>
                        <?php if ( $args['desc'] ) : ?>
                            <p><?php echo wp_kses_post( $args['desc'] ); ?></p>
                        <?php endif; ?>
                    </div>

                    <?php if ( $args['stats'] ) : ?>
                    <div class="sg-blog-hero-stats" data-sg-reveal="right" aria-label="<?php esc_attr_e( 'Blog özeti', 'seogezegeni' ); ?>">
                        <?php foreach ( $args['stats'] as $stat ) : ?>
                            <div class="sg-blog-hero-stat">
                                <strong><?php echo esc_html( $stat[0] ); ?></strong>
                                <span><?php echo esc_html( $stat[1] ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
