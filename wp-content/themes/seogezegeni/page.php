<?php
/**
 * page.php – Genel Sayfa Şablonu
 */
get_header();
?>

<main id="sg-main" role="main">

    <!-- Page Hero -->
    <div class="sg-page-hero">
        <div class="container">
            <div class="sg-page-hero-inner">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Bar -->
    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <!-- Page Content -->
    <div class="section-pad dark-section">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('sg-post-body'); ?>>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div style="margin-bottom:36px;border-radius:var(--sg-radius-lg);overflow:hidden;">
                            <?php the_post_thumbnail('sg-hero-thumb', ['loading'=>'eager']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="sg-post-body-content">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    wp_link_pages([
                        'before' => '<div class="sg-page-links">' . __('Sayfalar:', 'seogezegeni'),
                        'after'  => '</div>',
                    ]);
                    ?>

                </article>

                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <?php comments_template(); ?>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>
    </div>

<?php get_template_part( 'template-parts/pre-footer-cta' ); ?>
<?php get_template_part( 'template-parts/pre-footer-contact' ); ?>

</main>

<?php get_footer(); ?>
