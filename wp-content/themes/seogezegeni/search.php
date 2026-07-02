<?php
/**
 * search.php – Arama Sonuçları Sayfası
 */
get_header();

$search_query = get_search_query();
$result_count = $GLOBALS['wp_query']->found_posts;
?>

<main id="sg-main" role="main">

    <!-- Page Hero -->
    <div class="sg-page-hero">
        <div class="container">
            <div class="sg-page-hero-inner">
                <h1>
                    <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                    <?php
                    if ( $search_query ) {
                        printf(
                            /* translators: %s: search query */
                            esc_html__( '"%s" için Sonuçlar', 'seogezegeni' ),
                            $search_query
                        );
                    } else {
                        _e( 'Arama', 'seogezegeni' );
                    }
                    ?>
                </h1>

                <?php if ( $search_query ) : ?>
                    <div>
                        <span>
                            <i class="fa-solid fa-chart-simple" aria-hidden="true"></i>
                            <?php printf(
                                esc_html( _n( '%d sonuç bulundu', '%d sonuç bulundu', $result_count, 'seogezegeni' ) ),
                                $result_count
                            ); ?>
                        </span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Bar -->
    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <!-- Search Content -->
    <div class="sg-search-page section-pad">
        <div class="container">

            <!-- Arama Formu Kutusu -->
            <div class="sg-search-box">
                <div class="sg-search-box-inner">
                    <span class="sg-label">
                        <span class="sg-label-dot" aria-hidden="true"></span>
                        <?php _e( 'Yeni Arama', 'seogezegeni' ); ?>
                    </span>
                    <p><?php _e( 'Farklı bir konu aramak için aşağıya yazabilirsiniz.', 'seogezegeni' ); ?></p>
                    <form role="search" method="get" class="sg-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <label for="sg-search-input" class="screen-reader-text"><?php _e( 'Ara', 'seogezegeni' ); ?></label>
                        <div class="sg-search-input-wrap">
                            <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                            <input
                                type="search"
                                id="sg-search-input"
                                name="s"
                                value="<?php echo esc_attr( $search_query ); ?>"
                                placeholder="<?php esc_attr_e( 'Anahtar kelime, konu veya içerik ara...', 'seogezegeni' ); ?>"
                                autocomplete="off"
                            />
                        </div>
                        <button type="submit" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            <?php _e( 'Ara', 'seogezegeni' ); ?>
                        </button>
                    </form>
                </div>
            </div>

            <?php if ( have_posts() ) : ?>

                <div class="sg-search-results-head">
                    <h2>
                        <?php printf(
                            esc_html__( 'Bulunan İçerikler (%d)', 'seogezegeni' ),
                            $result_count
                        ); ?>
                    </h2>
                </div>

                <div class="sg-search-results-list">
                    <?php while ( have_posts() ) : the_post();
                        $cats = get_the_category();
                    ?>
                    <article <?php post_class( 'sg-search-result-item' ); ?>>
                        <div class="sg-search-result-meta">
                            <?php if ( $cats ) : ?>
                                <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="sg-blog-cat" style="margin-bottom:4px;">
                                    <?php echo esc_html( $cats[0]->name ); ?>
                                </a>
                            <?php endif; ?>
                            <span><i class="fa-regular fa-calendar" aria-hidden="true"></i><?php echo esc_html( get_the_date() ); ?></span>
                            <span><i class="fa-regular fa-user" aria-hidden="true"></i><?php the_author(); ?></span>
                        </div>
                        <h3 class="sg-search-result-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="sg-search-result-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 24, '…' ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="sg-blog-more">
                            <?php _e( 'Devamını Oku', 'seogezegeni' ); ?>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </article>
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

                <div class="sg-search-empty">
                    <div class="sg-search-empty-icon" aria-hidden="true">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <h3>
                        <?php
                        if ( $search_query ) {
                            printf(
                                esc_html__( '"%s" için sonuç bulunamadı', 'seogezegeni' ),
                                $search_query
                            );
                        } else {
                            _e( 'Arama terimi giriniz', 'seogezegeni' );
                        }
                        ?>
                    </h3>
                    <p><?php _e( 'Farklı anahtar kelimeler deneyin veya daha kısa bir ifade kullanın.', 'seogezegeni' ); ?></p>

                    <div class="sg-search-empty-tips">
                        <h4><?php _e( 'İpuçları', 'seogezegeni' ); ?></h4>
                        <ul>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i><?php _e( 'Yazım hatası olup olmadığını kontrol edin', 'seogezegeni' ); ?></li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i><?php _e( 'Daha genel kelimeler kullanmayı deneyin', 'seogezegeni' ); ?></li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i><?php _e( 'Anahtar kelime sayısını azaltın', 'seogezegeni' ); ?></li>
                        </ul>
                    </div>

                    <div class="sg-search-empty-actions">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sg-btn sg-btn-primary">
                            <i class="fa-solid fa-house" aria-hidden="true"></i>
                            <?php _e( 'Ana Sayfaya Dön', 'seogezegeni' ); ?>
                        </a>
                        <?php
                        $blog_page_url = get_option( 'page_for_posts' )
                            ? get_permalink( (int) get_option( 'page_for_posts' ) )
                            : home_url( '/blog/' );
                        ?>
                        <a href="<?php echo esc_url( $blog_page_url ); ?>" class="sg-btn sg-btn-outline">
                            <i class="fa-regular fa-newspaper" aria-hidden="true"></i>
                            <?php _e( 'Tüm Yazılara Göz At', 'seogezegeni' ); ?>
                        </a>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    </div>

</main>

<?php get_footer(); ?>
