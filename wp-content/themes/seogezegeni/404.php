<?php
/**
 * 404.php – Sayfa Bulunamadı
 */
get_header();
?>

<main id="sg-main" role="main">
    <div class="sg-404 section-pad" style="background:var(--sg-bg-primary);min-height:80vh;display:flex;align-items:center;">
        <div class="container">
            <div style="text-align:center;max-width:600px;margin:0 auto;">
                <div class="sg-404-num" aria-hidden="true">404</div>
                <h2 style="color:var(--sg-text-primary);margin-bottom:16px;">
                    <?php _e('Sayfa Bulunamadı', 'seogezegeni'); ?>
                </h2>
                <p style="margin-bottom:40px;">
                    <?php _e('Aradığınız sayfa taşınmış, silinmiş ya da hiç var olmamış olabilir. Endişelenmeyin, doğru yere geri dönelim!', 'seogezegeni'); ?>
                </p>
                <div style="display:flex;justify-content:center;flex-wrap:wrap;gap:14px;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="sg-btn sg-btn-primary">
                        <i class="fa-solid fa-house" aria-hidden="true"></i>
                        <?php _e('Ana Sayfaya Dön', 'seogezegeni'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/iletisim/')); ?>" class="sg-btn sg-btn-outline">
                        <i class="fa-solid fa-phone" aria-hidden="true"></i>
                        <?php _e('İletişime Geç', 'seogezegeni'); ?>
                    </a>
                </div>

                <div style="margin-top:48px;">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
