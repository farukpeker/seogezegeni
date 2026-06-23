<?php
/**
 * index.php – Blog / fallback şablonu
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
            <div class="row" style="gap:0;">

                <!-- Posts -->
                <div style="flex:0 0 70%;max-width:70%;padding:0 15px;">
                    <?php if ( have_posts() ) : ?>
                        <div class="sg-blog-grid">
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
                                'type'      => 'list',
                                'before_page_number' => '',
                            ]);
                            ?>
                        </div>

                    <?php else : ?>
                        <div style="text-align:center;padding:60px 0;">
                            <i class="fa-solid fa-face-sad-tear" style="font-size:4rem;color:var(--sg-text-secondary);margin-bottom:20px;" aria-hidden="true"></i>
                            <h3 style="color:var(--sg-text-primary);"><?php _e('İçerik bulunamadı', 'seogezegeni'); ?></h3>
                            <p><?php _e('Aradığınız içerik henüz yayınlanmamış ya da kaldırılmış olabilir.', 'seogezegeni'); ?></p>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="sg-btn sg-btn-primary" style="margin-top:24px;display:inline-flex;">
                                <i class="fa-solid fa-house" aria-hidden="true"></i>
                                <?php _e('Ana Sayfaya Dön', 'seogezegeni'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div><!-- /posts col -->

                <!-- Sidebar -->
                <div style="flex:0 0 30%;max-width:30%;padding:0 15px;">
                    <aside id="sg-sidebar" role="complementary" aria-label="<?php esc_attr_e('Kenar çubuğu', 'seogezegeni'); ?>">
                        <?php if ( is_active_sidebar('sidebar') ) : ?>
                            <?php dynamic_sidebar('sidebar'); ?>
                        <?php else : ?>
                            <!-- Default sidebar widgets -->
                            <div class="sg-post-sidebar-widget">
                                <h4><?php _e('Son Yazılar', 'seogezegeni'); ?></h4>
                                <?php
                                $recent = new WP_Query(['post_type'=>'post','posts_per_page'=>5,'post_status'=>'publish']);
                                if ($recent->have_posts()) :
                                    echo '<ul style="display:flex;flex-direction:column;gap:14px;">';
                                    while ($recent->have_posts()) : $recent->the_post(); ?>
                                        <li style="padding-bottom:14px;border-bottom:1px solid var(--sg-border-light);">
                                            <a href="<?php the_permalink(); ?>" style="color:var(--sg-text-primary);font-size:.9rem;font-weight:500;line-height:1.4;display:block;margin-bottom:4px;"><?php the_title(); ?></a>
                                            <span style="font-size:.78rem;color:var(--sg-text-secondary);"><?php echo get_the_date(); ?></span>
                                        </li>
                                    <?php endwhile;
                                    echo '</ul>';
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>

                            <div class="sg-post-sidebar-widget">
                                <h4><?php _e('Kategoriler', 'seogezegeni'); ?></h4>
                                <ul style="display:flex;flex-direction:column;gap:10px;">
                                    <?php wp_list_categories(['show_count'=>true,'title_li'=>'','before'=>'<li style="border-bottom:1px solid var(--sg-border-light);padding-bottom:10px;">','after'=>'</li>']); ?>
                                </ul>
                            </div>

                            <div class="sg-post-sidebar-widget">
                                <h4><?php _e('Ücretsiz SEO Analizi', 'seogezegeni'); ?></h4>
                                <p style="font-size:.88rem;margin-bottom:16px;"><?php _e('Web sitenizi ücretsiz analiz edelim, büyüme fırsatlarınızı keşfedin.', 'seogezegeni'); ?></p>
                                <a href="<?php echo esc_url(home_url('/iletisim/')); ?>" class="sg-btn sg-btn-primary w-full" style="justify-content:center;font-size:.88rem;">
                                    <?php _e('Ücretsiz Analiz Al', 'seogezegeni'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </aside>
                </div><!-- /sidebar col -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

</main>

<?php get_footer(); ?>
