<?php
/**
 * archive.php - Archive template for categories, tags, dates and authors.
 */
get_header();

$queried_object = get_queried_object();
$active_cat_id  = is_category() && $queried_object instanceof WP_Term ? (int) $queried_object->term_id : 0;
$archive_title  = wp_strip_all_tags( get_the_archive_title() );
$archive_desc   = get_the_archive_description();

if ( is_category() || is_tag() || is_tax() ) {
    $archive_title = single_term_title( '', false );
} elseif ( is_author() ) {
    $archive_title = get_the_author();
} elseif ( is_year() ) {
    $archive_title = get_the_date( 'Y' );
} elseif ( is_month() ) {
    $archive_title = get_the_date( 'F Y' );
}
?>

<main id="sg-main" role="main">

    <!-- Page Hero -->
    <div class="sg-page-hero">
        <div class="container">
            <div class="sg-page-hero-inner">
                <h1>
                    <?php
                    if ( is_category() ) {
                        echo '<i class="fa-regular fa-folder" style="color:var(--sg-accent);margin-right:10px;" aria-hidden="true"></i>';
                        single_cat_title();
                    } elseif ( is_tag() ) {
                        echo '<i class="fa-solid fa-tag" style="color:var(--sg-accent);margin-right:10px;" aria-hidden="true"></i>';
                        single_tag_title();
                    } elseif ( is_author() ) {
                        echo '<i class="fa-regular fa-user" style="color:var(--sg-accent);margin-right:10px;" aria-hidden="true"></i>';
                        the_author();
                    } elseif ( is_year() ) {
                        echo '<i class="fa-regular fa-calendar" style="color:var(--sg-accent);margin-right:10px;" aria-hidden="true"></i>';
                        echo esc_html( get_the_date( 'Y' ) );
                    } elseif ( is_month() ) {
                        echo '<i class="fa-regular fa-calendar" style="color:var(--sg-accent);margin-right:10px;" aria-hidden="true"></i>';
                        echo esc_html( get_the_date( 'F Y' ) );
                    } elseif ( is_post_type_archive( 'portfolio' ) ) {
                        echo '<i class="fa-solid fa-briefcase" style="color:var(--sg-accent);margin-right:10px;" aria-hidden="true"></i>';
                        _e( 'Referanslar', 'seogezegeni' );
                    } else {
                        _e( 'Arşiv', 'seogezegeni' );
                    }
                    ?>
                </h1>

                <?php if ( $archive_desc ) : ?>
                    <p style="margin-top:12px;max-width:600px;"><?php echo wp_kses_post( $archive_desc ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Bar -->
    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <!-- Archive Content -->
    <div class="sg-blog-page section-pad">
        <div class="container">
            <div class="sg-blog-page-head">
                <div>
                    <span class="sg-label">
                        <span class="sg-label-dot" aria-hidden="true"></span>
                        <?php _e( 'İçerikler', 'seogezegeni' ); ?>
                    </span>
                    <h2><?php echo esc_html( $archive_title ); ?></h2>
                    <p>
                        <?php
                        if ( $archive_desc ) {
                            echo wp_kses_post( wp_strip_all_tags( $archive_desc ) );
                        } else {
                            _e( 'SEO, dijital pazarlama ve büyüme odağındaki yazıları kategoriye göre inceleyin.', 'seogezegeni' );
                        }
                        ?>
                    </p>
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
                        <a href="<?php echo esc_url( $posts_page_url ); ?>" class="<?php echo $active_cat_id ? '' : 'is-active'; ?>">
                            <?php _e( 'Tümü', 'seogezegeni' ); ?>
                        </a>
                        <?php foreach ( $blog_categories as $blog_category ) : ?>
                            <a href="<?php echo esc_url( get_category_link( $blog_category->term_id ) ); ?>"
                               class="<?php echo (int) $blog_category->term_id === $active_cat_id ? 'is-active' : ''; ?>">
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
                        'prev_text' => '<i class="fa-solid fa-chevron-left" aria-hidden="true"></i>',
                        'next_text' => '<i class="fa-solid fa-chevron-right" aria-hidden="true"></i>',
                    ] );
                    ?>
                </div>

            <?php else : ?>
                <div class="sg-empty-state">
                    <i class="fa-solid fa-file-lines" aria-hidden="true"></i>
                    <h3><?php _e( 'İçerik bulunamadı', 'seogezegeni' ); ?></h3>
                    <p><?php _e( 'Bu arşiv kategorisinde henüz içerik yayınlanmamış.', 'seogezegeni' ); ?></p>
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
