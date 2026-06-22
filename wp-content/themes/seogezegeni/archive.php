<?php
/**
 * archive.php – Arşiv Şablonu (Kategori, Etiket, Tarih, Yazar)
 */
get_header();
?>

<main id="sg-main" role="main">

    <!-- Page Hero -->
    <div class="sg-page-hero">
        <div class="container">
            <div class="sg-page-hero-inner">
                <?php seogezegeni_breadcrumb(); ?>
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
                        echo get_the_date('Y');
                    } elseif ( is_month() ) {
                        echo '<i class="fa-regular fa-calendar" style="color:var(--sg-accent);margin-right:10px;" aria-hidden="true"></i>';
                        echo get_the_date('F Y');
                    } elseif ( is_post_type_archive('portfolio') ) {
                        echo '<i class="fa-solid fa-briefcase" style="color:var(--sg-accent);margin-right:10px;" aria-hidden="true"></i>';
                        _e('Portföy', 'seogezegeni');
                    } else {
                        _e('Arşiv', 'seogezegeni');
                    }
                    ?>
                </h1>

                <?php if ( is_category() && category_description() ) : ?>
                    <p style="margin-top:12px;max-width:600px;"><?php echo category_description(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Archive Content -->
    <div class="section-pad dark-section">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <div class="sg-blog-grid" style="margin-bottom:48px;">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php sg_post_card(); ?>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="sg-pagination">
                    <?php
                    echo paginate_links([
                        'prev_text' => '<i class="fa-solid fa-chevron-left" aria-hidden="true"></i>',
                        'next_text' => '<i class="fa-solid fa-chevron-right" aria-hidden="true"></i>',
                    ]);
                    ?>
                </div>

            <?php else : ?>
                <div style="text-align:center;padding:60px 0;">
                    <i class="fa-solid fa-file-lines" style="font-size:4rem;color:var(--sg-text-secondary);margin-bottom:20px;" aria-hidden="true"></i>
                    <h3 style="color:var(--sg-text-primary);"><?php _e('İçerik bulunamadı', 'seogezegeni'); ?></h3>
                    <p><?php _e('Bu arşiv kategorisinde henüz içerik yayınlanmamış.', 'seogezegeni'); ?></p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="sg-btn sg-btn-primary" style="margin-top:24px;display:inline-flex;">
                        <i class="fa-solid fa-house" aria-hidden="true"></i>
                        <?php _e('Ana Sayfaya Dön', 'seogezegeni'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
