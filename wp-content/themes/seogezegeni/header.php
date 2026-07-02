<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script>
        (function () {
            try {
                if (localStorage.getItem('sgThemeMode') === 'light') {
                    document.documentElement.classList.add('sg-theme-light');
                }
            } catch (e) {}
        })();
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Mobile overlay -->
<div class="sg-mobile-overlay" id="sgMobileOverlay" role="presentation" aria-hidden="true"></div>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header id="sg-header" role="banner">

    <!-- TOP BAR -->
    <div class="sg-topbar" role="complementary" aria-label="<?php esc_attr_e( 'Üst bilgi çubuğu', 'seogezegeni' ); ?>">
        <div class="container">
            <div class="sg-topbar-inner">

                <!-- Left: phone + locations -->
                <div class="sg-topbar-left">
                    <?php
                    $phone = sg_option( 'sg_phone', '0555 162 62 11' );
                    $addr_izmir    = sg_option( 'sg_address_izmir',    'Bayraklı / İZMİR' );
                    $addr_istanbul = sg_option( 'sg_address_istanbul', 'Maslak / İSTANBUL' );
                    ?>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', $phone ) ); ?>"
                       aria-label="<?php echo esc_attr( $phone ); ?>">
                        <i class="fa-solid fa-phone sg-topbar-icon" aria-hidden="true"></i>
                        <?php echo esc_html( $phone ); ?>
                    </a>
                    <span aria-hidden="true">|</span>
                    <span>
                        <i class="fa-solid fa-location-dot sg-topbar-icon" aria-hidden="true"></i>
                        <?php echo esc_html( $addr_izmir ); ?>
                    </span>
                    <span>
                        <i class="fa-regular fa-circle-dot sg-topbar-icon" aria-hidden="true"></i>
                        <?php echo esc_html( $addr_istanbul ); ?>
                    </span>
                </div>

                <!-- Right: social icons -->
                <div class="sg-topbar-right">
                    <div class="sg-topbar-social" role="list" aria-label="<?php esc_attr_e( 'Sosyal medya', 'seogezegeni' ); ?>">
                        <?php
                        $socials = [
                            'sg_facebook'  => [ 'icon' => 'fa-brands fa-facebook-f',  'label' => 'Facebook' ],
                            'sg_instagram' => [ 'icon' => 'fa-brands fa-instagram',    'label' => 'Instagram' ],
                            'sg_linkedin'  => [ 'icon' => 'fa-brands fa-linkedin-in',  'label' => 'LinkedIn' ],
                            'sg_twitter'   => [ 'icon' => 'fa-brands fa-x-twitter',    'label' => 'Twitter / X' ],
                            'sg_youtube'   => [ 'icon' => 'fa-brands fa-youtube',      'label' => 'YouTube' ],
                            'sg_pinterest' => [ 'icon' => 'fa-brands fa-pinterest-p',  'label' => 'Pinterest' ],
                        ];
                        foreach ( $socials as $key => $data ) :
                            $url = sg_option( $key );
                            if ( ! $url ) continue;
                        ?>
                            <a href="<?php echo esc_url( $url ); ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               role="listitem"
                               aria-label="<?php echo esc_attr( $data['label'] ); ?>">
                                <i class="<?php echo esc_attr( $data['icon'] ); ?>" aria-hidden="true"></i>
                            </a>
                        <?php endforeach; ?>
                        <?php
                        /* Fallback: default social icons when nothing is saved yet */
                        $any_social = false;
                        foreach ( array_keys( $socials ) as $k ) { if ( sg_option( $k ) ) { $any_social = true; break; } }
                        if ( ! $any_social ) : ?>
                            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                            <a href="#" aria-label="Twitter / X"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- / TOP BAR -->

    <!-- MAIN NAVBAR -->
    <nav class="sg-navbar" aria-label="<?php esc_attr_e( 'Ana navigasyon', 'seogezegeni' ); ?>">
        <div class="container">
            <div class="sg-navbar-inner">

                <!-- Logo -->
                <div class="sg-logo">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                           rel="home"
                           aria-label="<?php bloginfo( 'name' ); ?> <?php esc_attr_e( 'Ana Sayfa', 'seogezegeni' ); ?>">
                            SEO <span>Gezegeni</span>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Desktop nav -->
                <?php
                wp_nav_menu([
                    'theme_location'  => 'primary',
                    'menu_class'      => 'sg-nav',
                    'container'       => false,
                    'depth'           => 3,
                    'fallback_cb'     => 'seogezegeni_default_menu',
                    'items_wrap'      => '<ul id="sg-primary-menu" class="%2$s" role="menubar" aria-label="' . esc_attr__( 'Ana menü', 'seogezegeni' ) . '">%3$s</ul>',
                ]);
                ?>

                <!-- Header actions -->
                <div class="sg-header-actions">
                    <button type="button"
                            class="sg-theme-toggle"
                            data-sg-theme-toggle
                            aria-label="Tema modunu degistir"
                            aria-pressed="false">
                        <i class="fa-solid fa-moon" aria-hidden="true"></i>
                    </button>

                    <a href="<?php echo esc_url( sg_option( 'sg_hero_btn1_url', '/iletisim/' ) ); ?>"
                       class="sg-cta-btn d-none d-lg-inline-flex"
                       aria-label="<?php esc_attr_e( 'Ücretsiz SEO Analizi', 'seogezegeni' ); ?>">
                        <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
                        <?php _e( 'Ücretsiz SEO Analizi', 'seogezegeni' ); ?>
                    </a>

                    <!-- Hamburger (mobile) -->
                    <button class="sg-hamburger"
                            id="sgHamburger"
                            aria-expanded="false"
                            aria-controls="sgMobileNav"
                            aria-label="<?php esc_attr_e( 'Menüyü aç/kapat', 'seogezegeni' ); ?>">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

            </div>
        </div>
    </nav>
    <!-- / MAIN NAVBAR -->

</header>
<!-- / HEADER -->

<!-- ============================================================
     MOBILE NAV DRAWER
     ============================================================ -->
<aside class="sg-mobile-nav"
       id="sgMobileNav"
       role="dialog"
       aria-modal="true"
       aria-label="<?php esc_attr_e( 'Mobil navigasyon', 'seogezegeni' ); ?>">

    <div class="sg-mobile-nav-header">
        <div class="sg-logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">SEO <span>Gezegeni</span></a>
            <?php endif; ?>
        </div>
        <button class="sg-mobile-nav-close"
                id="sgMobileClose"
                aria-label="<?php esc_attr_e( 'Menüyü kapat', 'seogezegeni' ); ?>">
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
        </button>
    </div>

    <?php
    wp_nav_menu([
        'theme_location'  => 'primary',
        'menu_class'      => 'sg-mobile-menu',
        'container'       => false,
        'depth'           => 3,
        'fallback_cb'     => 'seogezegeni_default_mobile_menu',
        'walker'          => new SG_Mobile_Walker(),
    ]);
    ?>

    <div style="margin-top:28px;">
        <button type="button"
                class="sg-theme-toggle sg-theme-toggle-mobile"
                data-sg-theme-toggle
                aria-label="Tema modunu degistir"
                aria-pressed="false">
            <i class="fa-solid fa-moon" aria-hidden="true"></i>
            <span>Dark / White</span>
        </button>

        <a href="<?php echo esc_url( sg_option( 'sg_hero_btn1_url', '/iletisim/' ) ); ?>"
           class="sg-btn sg-btn-primary w-full" style="justify-content:center;">
            <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
            <?php _e( 'Ücretsiz SEO Analizi', 'seogezegeni' ); ?>
        </a>
        <?php
        $phone = sg_option( 'sg_phone', '0555 162 62 11' );
        ?>
        <a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', $phone ) ); ?>"
           style="display:flex;align-items:center;gap:8px;justify-content:center;margin-top:12px;color:var(--sg-text-secondary);font-size:.9rem;">
            <i class="fa-solid fa-phone" style="color:var(--sg-accent);" aria-hidden="true"></i>
            <?php echo esc_html( $phone ); ?>
        </a>
    </div>

</aside>
<!-- / MOBILE NAV DRAWER -->

<?php

/* ============================================================
   DEFAULT MENU FALLBACK
   ============================================================ */
function seogezegeni_default_menu() {
    $current = get_permalink();
    $hizmetler_urls = [
        home_url( '/seo/' ),
        home_url( '/360-dijital-pazarlama/' ),
        home_url( '/sosyal-medya-yonetimi/' ),
        home_url( '/google-meta-reklamlari/' ),
        home_url( '/web-tasarim-ve-yazilim/' ),
    ];
    $hizmetler_active = in_array( $current, $hizmetler_urls ) ? ' current-page-ancestor' : '';

    $top_links = [
        home_url( '/' )            => __( 'Anasayfa',   'seogezegeni' ),
        home_url( '/biz-kimiz/' ) => __( 'Biz Kimiz?', 'seogezegeni' ),
        home_url( '/referanslar/' )=> __( 'Referanslar','seogezegeni' ),
        home_url( '/iletisim/' )   => __( 'İletişim',   'seogezegeni' ),
    ];

    $hizmetler_sub = [
        home_url( '/seo/' )                    => __( 'SEO',                        'seogezegeni' ),
        home_url( '/360-dijital-pazarlama/' )  => __( '360° DİJİTAL PAZARLAMA',    'seogezegeni' ),
        home_url( '/sosyal-medya-yonetimi/' )  => __( 'SOSYAL MEDYA YÖNETİMİ',     'seogezegeni' ),
        home_url( '/google-meta-reklamlari/' ) => __( 'GOOGLE & META REKLAMLARI',   'seogezegeni' ),
        home_url( '/web-tasarim-ve-yazilim/' ) => __( 'WEB TASARIM ve YAZILIM',     'seogezegeni' ),
    ];

    echo '<ul class="sg-nav" role="menubar">';

    // Anasayfa
    $a = ( $current === home_url( '/' ) ) ? ' class="current-menu-item"' : '';
    echo '<li' . $a . ' role="none"><a href="' . esc_url( home_url( '/' ) ) . '" role="menuitem">' . __( 'Anasayfa', 'seogezegeni' ) . '</a></li>';

    // Biz Kimiz?
    $a = ( $current === home_url( '/biz-kimiz/' ) ) ? ' class="current-menu-item"' : '';
    echo '<li' . $a . ' role="none"><a href="' . esc_url( home_url( '/biz-kimiz/' ) ) . '" role="menuitem">' . __( 'Biz Kimiz?', 'seogezegeni' ) . '</a></li>';

    // Hizmetler (dropdown)
    echo '<li class="menu-item-has-children' . $hizmetler_active . '" role="none">';
    echo '<a href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">';
    echo __( 'Hizmetler', 'seogezegeni' );
    echo '<i class="fa-solid fa-chevron-down" style="font-size:.6rem;margin-left:5px;" aria-hidden="true"></i>';
    echo '</a>';
    echo '<ul class="sub-menu" role="menu">';
    foreach ( $hizmetler_sub as $url => $label ) {
        $a = ( $current === $url ) ? ' class="current-menu-item"' : '';
        echo '<li' . $a . ' role="none"><a href="' . esc_url( $url ) . '" role="menuitem">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
    echo '</li>';

    // Referanslar
    $a = ( $current === home_url( '/referanslar/' ) ) ? ' class="current-menu-item"' : '';
    echo '<li' . $a . ' role="none"><a href="' . esc_url( home_url( '/referanslar/' ) ) . '" role="menuitem">' . __( 'Referanslar', 'seogezegeni' ) . '</a></li>';

    // İletişim
    $a = ( $current === home_url( '/iletisim/' ) ) ? ' class="current-menu-item"' : '';
    echo '<li' . $a . ' role="none"><a href="' . esc_url( home_url( '/iletisim/' ) ) . '" role="menuitem">' . __( 'İletişim', 'seogezegeni' ) . '</a></li>';

    echo '</ul>';
}

function seogezegeni_default_mobile_menu() {
    $hizmetler_sub = [
        home_url( '/seo/' )                    => __( 'SEO',                       'seogezegeni' ),
        home_url( '/360-dijital-pazarlama/' )  => __( '360° DİJİTAL PAZARLAMA',   'seogezegeni' ),
        home_url( '/sosyal-medya-yonetimi/' )  => __( 'SOSYAL MEDYA YÖNETİMİ',    'seogezegeni' ),
        home_url( '/google-meta-reklamlari/' ) => __( 'GOOGLE & META REKLAMLARI',  'seogezegeni' ),
        home_url( '/web-tasarim-ve-yazilim/' ) => __( 'WEB TASARIM ve YAZILIM',    'seogezegeni' ),
    ];

    echo '<ul class="sg-mobile-menu">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . __( 'Anasayfa', 'seogezegeni' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/biz-kimiz/' ) ) . '">' . __( 'Biz Kimiz?', 'seogezegeni' ) . '</a></li>';
    echo '<li class="menu-item-has-children">';
    echo '<a href="#">' . __( 'Hizmetler', 'seogezegeni' ) . '<i class="fa-solid fa-chevron-down" style="font-size:.7rem;" aria-hidden="true"></i></a>';
    echo '<ul class="sub-menu">';
    foreach ( $hizmetler_sub as $url => $label ) {
        echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
    echo '</li>';
    echo '<li><a href="' . esc_url( home_url( '/referanslar/' ) ) . '">' . __( 'Referanslar', 'seogezegeni' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/iletisim/' ) ) . '">' . __( 'İletişim', 'seogezegeni' ) . '</a></li>';
    echo '</ul>';
}

/* ============================================================
   MOBILE NAV WALKER
   ============================================================ */
class SG_Mobile_Walker extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $has_children = in_array( 'menu-item-has-children', $item->classes );
        $output .= '<li class="' . implode( ' ', $item->classes ) . '">';
        $output .= '<a href="' . esc_url( $item->url ) . '">';
        $output .= esc_html( $item->title );
        if ( $has_children ) {
            $output .= '<i class="fa-solid fa-chevron-down" style="font-size:.7rem;" aria-hidden="true"></i>';
        }
        $output .= '</a>';
    }
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="sub-menu">';
    }
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}
?>

<div id="sg-page-wrap">
