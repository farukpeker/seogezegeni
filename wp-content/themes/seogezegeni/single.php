<?php
/**
 * single.php – Tekil Blog Yazısı Şablonu
 */
get_header();
?>

<main id="sg-main" role="main">

    <!-- Page Hero -->
    <div class="sg-page-hero">
        <div class="container">
            <div class="sg-page-hero-inner">
                <?php seogezegeni_breadcrumb(); ?>
                <h1 style="max-width:800px;"><?php the_title(); ?></h1>

                <?php if ( have_posts() ) : the_post(); ?>
                    <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:16px;font-size:.85rem;color:var(--sg-text-secondary);">
                        <span>
                            <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                            <?php echo esc_html(get_the_date()); ?>
                        </span>
                        <span>
                            <i class="fa-regular fa-user" aria-hidden="true"></i>
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                               style="color:var(--sg-accent);">
                                <?php the_author(); ?>
                            </a>
                        </span>
                        <?php $cats = get_the_category(); if ($cats) : ?>
                            <span>
                                <i class="fa-regular fa-folder" aria-hidden="true"></i>
                                <a href="<?php echo esc_url(get_category_link($cats[0]->term_id)); ?>"
                                   style="color:var(--sg-accent);">
                                    <?php echo esc_html($cats[0]->name); ?>
                                </a>
                            </span>
                        <?php endif; ?>
                        <span>
                            <i class="fa-regular fa-clock" aria-hidden="true"></i>
                            <?php
                            $words = str_word_count(strip_tags(get_the_content()));
                            $minutes = max(1, ceil($words / 200));
                            printf(_n('%d dakika okuma', '%d dakika okuma', $minutes, 'seogezegeni'), $minutes);
                            ?>
                        </span>
                    </div>
                <?php rewind_posts(); endif; ?>
            </div>
        </div>
    </div>

    <!-- Post Content -->
    <div class="sg-post-content section-pad">
        <div class="container">
            <div class="row" style="gap:0;">

                <!-- Main content -->
                <div style="flex:0 0 70%;max-width:70%;padding:0 15px;">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin-bottom:36px;border-radius:var(--sg-radius-lg);overflow:hidden;">
                                <?php the_post_thumbnail('sg-hero-thumb', ['loading'=>'eager','alt'=>get_the_title()]); ?>
                            </div>
                        <?php endif; ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('sg-post-body'); ?>>
                            <?php the_content(); ?>

                            <?php
                            wp_link_pages([
                                'before' => '<div class="sg-page-links">' . __('Sayfalar:', 'seogezegeni'),
                                'after'  => '</div>',
                            ]);
                            ?>
                        </article>

                        <!-- Tags -->
                        <?php $tags = get_the_tags(); if ($tags) : ?>
                            <div class="sg-post-tags" aria-label="<?php esc_attr_e('Etiketler', 'seogezegeni'); ?>">
                                <span style="color:var(--sg-text-secondary);font-size:.85rem;align-self:center;">
                                    <i class="fa-solid fa-tag" aria-hidden="true"></i>
                                </span>
                                <?php foreach ($tags as $tag) : ?>
                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                                        <?php echo esc_html($tag->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Post navigation -->
                        <div class="sg-post-nav">
                            <?php
                            $prev = get_previous_post();
                            $next = get_next_post();
                            if ($prev) : ?>
                                <a href="<?php echo esc_url(get_permalink($prev)); ?>" class="sg-post-nav-item prev">
                                    <div class="sg-post-nav-label">
                                        <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                                        <?php _e('Önceki Yazı', 'seogezegeni'); ?>
                                    </div>
                                    <div class="sg-post-nav-title"><?php echo esc_html(get_the_title($prev)); ?></div>
                                </a>
                            <?php else : ?>
                                <div></div>
                            <?php endif;

                            if ($next) : ?>
                                <a href="<?php echo esc_url(get_permalink($next)); ?>" class="sg-post-nav-item next">
                                    <div class="sg-post-nav-label">
                                        <?php _e('Sonraki Yazı', 'seogezegeni'); ?>
                                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <div class="sg-post-nav-title"><?php echo esc_html(get_the_title($next)); ?></div>
                                </a>
                            <?php endif; ?>
                        </div>

                        <!-- Comments -->
                        <?php if ( comments_open() || get_comments_number() ) : ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div><!-- /main content -->

                <!-- Sidebar -->
                <div style="flex:0 0 30%;max-width:30%;padding:0 15px;">
                    <aside id="sg-sidebar" role="complementary" aria-label="<?php esc_attr_e('Kenar çubuğu', 'seogezegeni'); ?>">
                        <?php if ( is_active_sidebar('sidebar') ) : ?>
                            <?php dynamic_sidebar('sidebar'); ?>
                        <?php else : ?>
                            <div class="sg-post-sidebar-widget">
                                <h4><?php _e('Son Yazılar', 'seogezegeni'); ?></h4>
                                <?php
                                $recent = new WP_Query(['post_type'=>'post','posts_per_page'=>5,'post_status'=>'publish','post__not_in'=>[get_the_ID()]]);
                                if ($recent->have_posts()) :
                                    echo '<ul style="display:flex;flex-direction:column;gap:14px;">';
                                    while ($recent->have_posts()) : $recent->the_post(); ?>
                                        <li style="padding-bottom:14px;border-bottom:1px solid var(--sg-border-light);">
                                            <a href="<?php the_permalink(); ?>" style="color:var(--sg-text-primary);font-size:.88rem;font-weight:500;line-height:1.4;display:block;margin-bottom:4px;"><?php the_title(); ?></a>
                                            <span style="font-size:.76rem;color:var(--sg-text-secondary);"><?php echo get_the_date(); ?></span>
                                        </li>
                                    <?php endwhile;
                                    echo '</ul>';
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>

                            <div class="sg-post-sidebar-widget">
                                <h4><?php _e('Hizmetlerimiz', 'seogezegeni'); ?></h4>
                                <ul style="display:flex;flex-direction:column;gap:10px;">
                                    <?php
                                    $services = [
                                        [home_url('/seo/'),          __('SEO Hizmetleri', 'seogezegeni')],
                                        [home_url('/sem/'),          __('SEM / Google Ads', 'seogezegeni')],
                                        [home_url('/sosyal-medya/'), __('Sosyal Medya', 'seogezegeni')],
                                        [home_url('/web-tasarim/'),  __('Web Tasarım', 'seogezegeni')],
                                        [home_url('/dijital-reklam/'), __('Dijital Reklam', 'seogezegeni')],
                                    ];
                                    foreach ($services as $svc) {
                                        echo '<li style="padding-bottom:10px;border-bottom:1px solid var(--sg-border-light);">';
                                        echo '<a href="' . esc_url($svc[0]) . '" style="color:var(--sg-text-secondary);font-size:.88rem;display:flex;align-items:center;gap:6px;">';
                                        echo '<i class="fa-solid fa-angle-right" style="color:var(--sg-accent);font-size:.7rem;" aria-hidden="true"></i>';
                                        echo esc_html($svc[1]) . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div class="sg-post-sidebar-widget" style="background:var(--sg-accent);border:none;">
                                <h4 style="color:var(--sg-text-dark);border-color:rgba(0,0,0,.1);"><?php _e('Ücretsiz SEO Analizi', 'seogezegeni'); ?></h4>
                                <p style="color:rgba(0,0,0,.7);font-size:.88rem;margin-bottom:16px;"><?php _e('Web sitenizin SEO puanını öğrenin, eksiklerinizi keşfedin.', 'seogezegeni'); ?></p>
                                <a href="<?php echo esc_url(home_url('/iletisim/')); ?>" class="sg-btn sg-btn-dark w-full" style="justify-content:center;font-size:.88rem;">
                                    <?php _e('Ücretsiz Analiz Al', 'seogezegeni'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </aside>
                </div><!-- /sidebar -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

</main>

<?php get_footer(); ?>
