<?php
/**
 * Template Name: Teşekkür Sayfası
 * Template Post Type: page
 *
 * İletişim formu gönderildikten sonra gösterilen teşekkür sayfası.
 * Icerik: inc/thanks-page.php (panelden duzenlenebilir)
 */
get_header();

if ( have_posts() ) {
    the_post();
}

extract( sg_thanks_content( get_the_ID() ) );

$redirect_seconds = max( 0, min( 120, (int) $redirect_seconds ) );
?>

<main id="sg-main" class="sg-thanks-page" role="main">

    <section class="sg-page-hero sg-thanks-hero" aria-labelledby="thanks-heading">
        <div class="container">
            <div class="sg-page-hero-inner">
                <div class="sg-thanks-card" data-sg-reveal>
                    <span class="sg-thanks-check" aria-hidden="true">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="sg-hero-badge">
                        <i class="fa-regular fa-paper-plane" aria-hidden="true"></i>
                        <?php echo esc_html( $hero_badge ); ?>
                    </span>
                    <h1 id="thanks-heading"><?php echo sg_pf_heading( $h_title ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
                    <p><?php echo esc_html( $hero_text ); ?></p>

                    <div class="sg-thanks-actions">
                        <?php if ( $btn1_text ) : ?>
                            <a href="<?php echo esc_url( sg_about_url( $btn1_url ) ); ?>" class="sg-btn sg-btn-primary">
                                <i class="fa-solid fa-house" aria-hidden="true"></i>
                                <?php echo esc_html( $btn1_text ); ?>
                            </a>
                        <?php endif; ?>
                        <?php if ( $btn2_text ) : ?>
                            <a href="<?php echo esc_url( sg_about_url( $btn2_url ) ); ?>" class="sg-btn sg-btn-outline">
                                <i class="fa-solid fa-newspaper" aria-hidden="true"></i>
                                <?php echo esc_html( $btn2_text ); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <?php if ( $redirect_seconds ) : ?>
                        <p class="sg-thanks-countdown"
                           data-seconds="<?php echo esc_attr( $redirect_seconds ); ?>"
                           data-url="<?php echo esc_url( home_url( '/' ) ); ?>"
                           data-text="<?php echo esc_attr( $redirect_text ); ?>"
                           role="status" aria-live="polite">
                            <i class="fa-regular fa-clock" aria-hidden="true"></i>
                            <span><?php echo esc_html( sprintf( $redirect_text, $redirect_seconds ) ); ?></span>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if ( ! empty( $steps ) ) : ?>
    <section class="sg-thanks-steps section-pad light-section" aria-label="<?php esc_attr_e( 'Sonraki adımlar', 'seogezegeni' ); ?>">
        <div class="container">
            <div class="sg-thanks-step-grid">
                <?php foreach ( $steps as $i => $step ) : ?>
                    <article class="sg-service-card" data-sg-reveal data-delay="<?php echo esc_attr( $i * 100 ); ?>">
                        <div class="sg-service-icon" aria-hidden="true">
                            <i class="<?php echo esc_attr( $step['icon'] ); ?>"></i>
                        </div>
                        <h3><?php echo esc_html( $step['title'] ); ?></h3>
                        <p><?php echo esc_html( $step['text'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php if ( $redirect_seconds ) : ?>
<script>
(function () {
    var el = document.querySelector('.sg-thanks-countdown');
    if (!el) return;
    var left = parseInt(el.dataset.seconds, 10);
    var label = el.querySelector('span');
    var timer = setInterval(function () {
        left--;
        if (left <= 0) {
            clearInterval(timer);
            window.location.href = el.dataset.url;
            return;
        }
        label.textContent = el.dataset.text.replace('%s', left);
    }, 1000);
})();
</script>
<?php endif; ?>

<?php get_footer(); ?>
