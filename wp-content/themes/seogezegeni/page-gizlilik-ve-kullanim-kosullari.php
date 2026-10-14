<?php
/**
 * Gizlilik ve Kullanım Koşulları sayfası.
 */
get_header();

if ( have_posts() ) {
    the_post();
}

extract( sg_legal_content( get_the_ID() ) );
?>

<main id="sg-main" class="sg-legal-page" role="main">

    <section class="sg-page-hero sg-legal-hero" aria-labelledby="legal-page-heading">
        <div class="container">
            <div class="sg-page-hero-inner">
                <div class="sg-legal-hero-grid">
                    <div class="sg-legal-hero-copy" data-sg-reveal="left">
                        <span class="sg-hero-badge">
                            <i class="fa-solid fa-scale-balanced" aria-hidden="true"></i>
                            <?php echo esc_html( $hero_badge ); ?>
                        </span>
                        <h1 id="legal-page-heading"><?php the_title(); ?></h1>
                        <p>
                            <?php echo esc_html( $hero_text ); ?>
                        </p>
                    </div>

                    <div class="sg-legal-hero-panel" data-sg-reveal="right" aria-label="<?php esc_attr_e( 'Sayfa özeti', 'seogezegeni' ); ?>">
                        <?php foreach ( $legal_items as $item ) : ?>
                            <div class="sg-legal-summary-item">
                                <span aria-hidden="true"><i class="<?php echo esc_attr( $item['icon'] ); ?>"></i></span>
                                <div>
                                    <strong><?php echo esc_html( $item['title'] ); ?></strong>
                                    <em><?php echo esc_html( $item['desc'] ); ?></em>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <section class="sg-legal-content section-pad dark-section">
        <div class="container">
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'sg-post-body sg-legal-body' ); ?>>
                <div class="sg-post-body-content">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    </section>

    <?php get_template_part( 'template-parts/pre-footer-cta' ); ?>
    <?php get_template_part( 'template-parts/pre-footer-contact' ); ?>

</main>

<?php get_footer(); ?>
