<?php
/**
 * single.php – Tekil Blog Yazısı Şablonu
 */
get_header();
?>

<div id="sg-reading-progress" aria-hidden="true"><div id="sg-reading-progress-bar"></div></div>

<main id="sg-main" role="main">

    <!-- Page Hero -->
    <div class="sg-page-hero sg-single-hero">
        <div class="container">
            <div class="sg-page-hero-inner">
                <?php if ( have_posts() ) : the_post(); ?>

                    <?php $cats = get_the_category(); if ($cats) : ?>
                        <div class="sg-single-cat-badge">
                            <a href="<?php echo esc_url(get_category_link($cats[0]->term_id)); ?>">
                                <?php echo esc_html($cats[0]->name); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <h1 class="sg-single-title"><?php the_title(); ?></h1>

                    <div class="sg-single-meta">
                        <span class="sg-single-meta-item">
                            <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo esc_html(get_the_date()); ?></time>
                        </span>
                        <span class="sg-single-meta-sep"></span>
                        <span class="sg-single-meta-item">
                            <i class="fa-regular fa-user" aria-hidden="true"></i>
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                <?php the_author(); ?>
                            </a>
                        </span>
                        <span class="sg-single-meta-sep"></span>
                        <span class="sg-single-meta-item">
                            <i class="fa-regular fa-clock" aria-hidden="true"></i>
                            <?php
                            $words   = str_word_count(strip_tags(get_the_content()));
                            $minutes = max(1, ceil($words / 200));
                            printf(_n('%d dakika okuma', '%d dakika okuma', $minutes, 'seogezegeni'), $minutes);
                            ?>
                        </span>
                    </div>

                <?php rewind_posts(); endif; ?>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Bar -->
    <div class="sg-breadcrumb-bar">
        <div class="container"><?php seogezegeni_breadcrumb(); ?></div>
    </div>

    <!-- Post Content -->
    <div class="sg-post-content section-pad">
        <div class="container">
            <div class="sg-single-layout">

                <!-- Main -->
                <div class="sg-single-main">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="sg-single-thumb">
                                <?php the_post_thumbnail('sg-hero-thumb', ['loading' => 'eager', 'alt' => get_the_title()]); ?>
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
                                <span class="sg-post-tags-label">
                                    <i class="fa-solid fa-tag" aria-hidden="true"></i>
                                </span>
                                <?php foreach ($tags as $tag) : ?>
                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                                        <?php echo esc_html($tag->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Author Box -->
                        <div class="sg-author-box">
                            <div class="sg-author-avatar">
                                <?php echo get_avatar(get_the_author_meta('ID'), 80, '', get_the_author(), ['class' => 'sg-author-img']); ?>
                            </div>
                            <div class="sg-author-info">
                                <div class="sg-author-name-row">
                                    <span class="sg-author-label"><?php _e('Yazar', 'seogezegeni'); ?></span>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="sg-author-name">
                                        <?php the_author(); ?>
                                    </a>
                                </div>
                                <?php $bio = get_the_author_meta('description'); if ($bio) : ?>
                                    <p class="sg-author-bio"><?php echo esc_html($bio); ?></p>
                                <?php else : ?>
                                    <p class="sg-author-bio"><?php _e('SEO Gezegeni içerik ekibi.', 'seogezegeni'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Post Nav -->
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
                </div><!-- /main -->

                <!-- Sidebar -->
                <aside id="sg-sidebar" class="sg-single-sidebar" role="complementary" aria-label="<?php esc_attr_e('Kenar çubuğu', 'seogezegeni'); ?>">
                    <?php if ( is_active_sidebar('sidebar') ) : ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php else : ?>

                        <!-- Son Yazılar -->
                        <div class="sg-post-sidebar-widget">
                            <h4 class="sg-sidebar-widget-title">
                                <i class="fa-solid fa-pen-nib" aria-hidden="true"></i>
                                <?php _e('Son Yazılar', 'seogezegeni'); ?>
                            </h4>
                            <?php
                            $recent = new WP_Query(['post_type' => 'post', 'posts_per_page' => 5, 'post_status' => 'publish', 'post__not_in' => [get_the_ID()]]);
                            if ($recent->have_posts()) :
                                echo '<ul class="sg-sidebar-recent-list">';
                                while ($recent->have_posts()) : $recent->the_post(); ?>
                                    <li class="sg-sidebar-recent-item">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <a href="<?php the_permalink(); ?>" class="sg-sidebar-recent-thumb" tabindex="-1" aria-hidden="true">
                                                <?php the_post_thumbnail('thumbnail', ['alt' => '']); ?>
                                            </a>
                                        <?php endif; ?>
                                        <div class="sg-sidebar-recent-text">
                                            <a href="<?php the_permalink(); ?>" class="sg-sidebar-recent-title"><?php the_title(); ?></a>
                                            <span class="sg-sidebar-recent-date"><?php echo get_the_date(); ?></span>
                                        </div>
                                    </li>
                                <?php endwhile;
                                echo '</ul>';
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>

                        <!-- Hizmetler -->
                        <div class="sg-post-sidebar-widget">
                            <h4 class="sg-sidebar-widget-title">
                                <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                                <?php _e('Hizmetlerimiz', 'seogezegeni'); ?>
                            </h4>
                            <ul class="sg-sidebar-service-list">
                                <?php
                                $services = [
                                    [home_url('/seo/'),            'fa-magnifying-glass-chart', __('SEO Hizmetleri', 'seogezegeni')],
                                    [home_url('/sem/'),            'fa-bullseye',               __('SEM / Google Ads', 'seogezegeni')],
                                    [home_url('/sosyal-medya/'),   'fa-thumbs-up',              __('Sosyal Medya', 'seogezegeni')],
                                    [home_url('/web-tasarim/'),    'fa-code',                   __('Web Tasarım', 'seogezegeni')],
                                    [home_url('/dijital-reklam/'), 'fa-chart-line',             __('Dijital Reklam', 'seogezegeni')],
                                ];
                                foreach ($services as $svc) :
                                ?>
                                    <li>
                                        <a href="<?php echo esc_url($svc[0]); ?>" class="sg-sidebar-service-link">
                                            <i class="fa-solid <?php echo esc_attr($svc[1]); ?>" aria-hidden="true"></i>
                                            <?php echo esc_html($svc[2]); ?>
                                            <i class="fa-solid fa-angle-right sg-sidebar-service-arrow" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <div class="sg-post-sidebar-widget sg-sidebar-cta">
                            <div class="sg-sidebar-cta-icon">
                                <i class="fa-solid fa-chart-bar" aria-hidden="true"></i>
                            </div>
                            <h4><?php _e('Ücretsiz SEO Analizi', 'seogezegeni'); ?></h4>
                            <p><?php _e('Web sitenizin SEO puanını öğrenin, eksiklerinizi keşfedin.', 'seogezegeni'); ?></p>
                            <a href="<?php echo esc_url(home_url('/iletisim/')); ?>" class="sg-btn sg-btn-dark w-full">
                                <?php _e('Ücretsiz Analiz Al', 'seogezegeni'); ?>
                            </a>
                        </div>

                    <?php endif; ?>
                </aside><!-- /sidebar -->

            </div><!-- /.sg-single-layout -->
        </div><!-- /.container -->
    </div>

</main>

<script>
(function(){
    var bar = document.getElementById('sg-reading-progress-bar');
    if (!bar) return;
    function update(){
        var d  = document.documentElement;
        var s  = d.scrollTop || document.body.scrollTop;
        var h  = d.scrollHeight - d.clientHeight;
        bar.style.width = (h > 0 ? (s / h * 100) : 0) + '%';
    }
    window.addEventListener('scroll', update, { passive: true });
})();
</script>

<?php get_footer(); ?>
