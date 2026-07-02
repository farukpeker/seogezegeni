<?php
/**
 * index.php - Blog / fallback template
 */
get_header();
?>

<main id="sg-main" role="main">

    <!-- Page Hero -->
    <div class="sg-page-hero">
        <div class="container">
            <div class="sg-page-hero-inner">
                <h1><?php
                    if ( is_home() && ! is_front_page() ) {
                        single_post_title();
                    } else {
                        _e( 'Blog', 'seogezegeni' );
                    }
                ?></h1>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Bar -->
    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <!-- Blog Content -->
    <div class="sg-blog-page section-pad">
        <div class="container">
            <div class="sg-blog-page-head">
                <div>
                    <span class="sg-label">
                        <span class="sg-label-dot" aria-hidden="true"></span>
                        <?php _e( 'İçerikler', 'seogezegeni' ); ?>
                    </span>
                    <h2><?php _e( 'SEO ve Dijital Pazarlama Yazıları', 'seogezegeni' ); ?></h2>
                    <p><?php _e( 'Güncel stratejiler, pratik rehberler ve dijital büyüme notları.', 'seogezegeni' ); ?></p>
                </div>

                <?php
                $blog_categories = get_categories( [
                    'hide_empty' => true,
                    'number'     => 6,
                ] );

                if ( $blog_categories ) :
                    $posts_page_id  = (int) get_option( 'page_for_posts' );
                    $posts_page_url = $posts_page_id ? get_permalink( $posts_page_id ) : home_url( '/blog/' );
                    ?>
                    <nav class="sg-blog-cat-nav" aria-label="<?php esc_attr_e( 'Blog kategorileri', 'seogezegeni' ); ?>">
                        <a href="<?php echo esc_url( $posts_page_url ); ?>" class="is-active">
                            <?php _e( 'Tümü', 'seogezegeni' ); ?>
                        </a>
                        <?php foreach ( $blog_categories as $blog_category ) : ?>
                            <a href="<?php echo esc_url( get_category_link( $blog_category->term_id ) ); ?>">
                                <?php echo esc_html( $blog_category->name ); ?>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            </div>

            <?php if ( have_posts() ) : ?>
                <div class="sg-blog-grid sg-blog-grid-main">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php sg_post_card(); ?>
                    <?php endwhile; ?>
                </div>

                <div class="sg-pagination">
                    <?php
                    echo paginate_links( [
                        'prev_text'          => '<i class="fa-solid fa-chevron-left" aria-hidden="true"></i>',
                        'next_text'          => '<i class="fa-solid fa-chevron-right" aria-hidden="true"></i>',
                        'type'               => 'list',
                        'before_page_number' => '',
                    ] );
                    ?>
                </div>

            <?php else : ?>
                <div class="sg-empty-state">
                    <i class="fa-solid fa-face-sad-tear" aria-hidden="true"></i>
                    <h3><?php _e( 'İçerik bulunamadı', 'seogezegeni' ); ?></h3>
                    <p><?php _e( 'Aradığınız içerik henüz yayınlanmamış ya da kaldırılmış olabilir.', 'seogezegeni' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sg-btn sg-btn-primary">
                        <i class="fa-solid fa-house" aria-hidden="true"></i>
                        <?php _e( 'Ana Sayfaya Dön', 'seogezegeni' ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
