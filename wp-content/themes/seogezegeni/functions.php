<?php
/**
 * SEO Gezegeni – functions.php
 * Text Domain: seogezegeni
 */

defined( 'ABSPATH' ) || exit;

/* ============================================================
   CONSTANTS
   ============================================================ */
define( 'SG_VER',  '1.0.0' );
define( 'SG_DIR',  get_template_directory() );
define( 'SG_URI',  get_template_directory_uri() );

/* ============================================================
   THEME SETUP
   ============================================================ */
function seogezegeni_setup() {
    load_theme_textdomain( 'seogezegeni', SG_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', [ 'search-form','comment-form','comment-list','gallery','caption','style','script' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ]);
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wp-block-styles' );

    // Thumbnail sizes
    add_image_size( 'sg-blog-thumb',      800, 450, true );
    add_image_size( 'sg-portfolio-thumb', 700, 440, true );
    add_image_size( 'sg-hero-thumb',     1400, 700, true );

    // Navigation menus
    register_nav_menus([
        'primary' => __( 'Ana Menü',     'seogezegeni' ),
        'footer'  => __( 'Alt Menü',     'seogezegeni' ),
        'mobile'  => __( 'Mobil Menü',   'seogezegeni' ),
    ]);
}
add_action( 'after_setup_theme', 'seogezegeni_setup' );

/* ============================================================
   CONTENT WIDTH
   ============================================================ */
function seogezegeni_content_width() {
    $GLOBALS['content_width'] = 1240;
}
add_action( 'after_setup_theme', 'seogezegeni_content_width', 0 );

/* ============================================================
   ENQUEUE STYLES & SCRIPTS
   ============================================================ */
function seogezegeni_assets() {

    /* ---- Google Fonts ---- */
    wp_enqueue_style(
        'sg-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        [],
        null
    );

    /* ---- Font Awesome ---- */
    wp_enqueue_style(
        'sg-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );

    /* ---- Bootstrap ---- */
    wp_enqueue_style(
        'sg-bootstrap',
        SG_URI . '/assets/css/bootstrap.min.css',
        [],
        '5.3.0'
    );

    /* ---- AOS (Animate on Scroll) ---- */
    wp_enqueue_style(
        'sg-aos',
        'https://unpkg.com/aos@2.3.4/dist/aos.css',
        [],
        '2.3.4'
    );

    /* ---- Main theme stylesheet ---- */
    wp_enqueue_style(
        'seogezegeni-style',
        get_stylesheet_uri(),
        [ 'sg-google-fonts', 'sg-fontawesome', 'sg-bootstrap', 'sg-aos' ],
        SG_VER
    );

    /* ---- Custom theme CSS ---- */
    wp_enqueue_style(
        'sg-theme-css',
        SG_URI . '/assets/css/seogezegeni.css',
        [ 'seogezegeni-style' ],
        SG_VER
    );

    /* ---- Swiper Slider ---- */
    wp_enqueue_style( 'sg-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', [], '11.0' );

    /* ---- Scripts ---- */
    wp_enqueue_script( 'sg-bootstrap-js',
        SG_URI . '/assets/js/bootstrap.bundle.min.js', [ 'jquery' ], '5.3.0', true );

    wp_enqueue_script( 'sg-aos-js',
        'https://unpkg.com/aos@2.3.4/dist/aos.js', [], '2.3.4', true );

    wp_enqueue_script( 'sg-swiper-js',
        'https://unpkg.com/swiper/swiper-bundle.min.js', [], '11.0', true );

    wp_enqueue_script( 'sg-main',
        SG_URI . '/assets/js/seogezegeni.js',
        [ 'jquery', 'sg-aos-js', 'sg-swiper-js' ],
        SG_VER,
        true
    );

    // Pass data to JS
    wp_localize_script( 'sg-main', 'sgData', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'sg_nonce' ),
        'homeUrl' => home_url(),
    ]);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'seogezegeni_assets' );

/* ============================================================
   SVG UPLOAD SUPPORT
   ============================================================ */
function seogezegeni_allow_svg_uploads( $mimes ) {
    if ( current_user_can( 'manage_options' ) ) {
        $mimes['svg'] = 'image/svg+xml';
    }

    return $mimes;
}
add_filter( 'upload_mimes', 'seogezegeni_allow_svg_uploads' );

function seogezegeni_fix_svg_filetype( $data, $file, $filename, $mimes ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        return $data;
    }

    $ext = pathinfo( $filename, PATHINFO_EXTENSION );
    if ( 'svg' === strtolower( $ext ) ) {
        $data['ext']  = 'svg';
        $data['type'] = 'image/svg+xml';
    }

    return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'seogezegeni_fix_svg_filetype', 10, 4 );

function seogezegeni_svg_admin_preview_css() {
    echo '<style>.attachment-266x266[src$=".svg"], .thumbnail img[src$=".svg"]{width:100%!important;height:auto!important;}</style>';
}
add_action( 'admin_head', 'seogezegeni_svg_admin_preview_css' );

/* ============================================================
   WIDGET AREAS
   ============================================================ */
function seogezegeni_widgets_init() {
    $defaults = [
        'before_widget' => '<div id="%1$s" class="sg-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="sg-widget-title">',
        'after_title'   => '</h4>',
    ];

    register_sidebar( array_merge( $defaults, [
        'name' => __( 'Footer 1 – Hakkımızda', 'seogezegeni' ),
        'id'   => 'footer-1',
        'description' => __( 'Footer sol sütun', 'seogezegeni' ),
    ]));
    register_sidebar( array_merge( $defaults, [
        'name' => __( 'Footer 2 – Hızlı Bağlantılar', 'seogezegeni' ),
        'id'   => 'footer-2',
        'description' => __( 'Footer orta sütun', 'seogezegeni' ),
    ]));
    register_sidebar( array_merge( $defaults, [
        'name' => __( 'Footer 3 – İletişim', 'seogezegeni' ),
        'id'   => 'footer-3',
        'description' => __( 'Footer sağ sütun', 'seogezegeni' ),
    ]));
    register_sidebar( array_merge( $defaults, [
        'name' => __( 'Blog Kenar Çubuğu', 'seogezegeni' ),
        'id'   => 'sidebar',
        'description' => __( 'Blog / yazı kenar çubuğu', 'seogezegeni' ),
    ]));
}
add_action( 'widgets_init', 'seogezegeni_widgets_init' );

/* ============================================================
   INCLUDE FILES
   ============================================================ */
require SG_DIR . '/inc/customizer.php';
require SG_DIR . '/inc/custom-post-types.php';

/* ============================================================
   OUTPUT BUFFERING
   ============================================================ */
function seogezegeni_safe_ob_end_flush_all() {
    $levels = ob_get_level();

    for ( $i = 0; $i < $levels; $i++ ) {
        $status = ob_get_status();
        $handler = isset( $status['name'] ) ? strtolower( (string) $status['name'] ) : '';

        if ( false !== strpos( $handler, 'zlib' ) ) {
            break;
        }

        if ( ob_get_length() ) {
            ob_end_flush();
        } else {
            ob_end_clean();
        }
    }
}

function seogezegeni_fix_zlib_ob_shutdown_notice() {
    if ( ini_get( 'zlib.output_compression' ) ) {
        remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
        add_action( 'shutdown', 'seogezegeni_safe_ob_end_flush_all', 1 );
    }
}
add_action( 'init', 'seogezegeni_fix_zlib_ob_shutdown_notice' );

/* ============================================================
   SHORTCODES
   ============================================================ */

/* [sg_seo_audit] – Audit form shortcode */
function sg_audit_form_sc( $atts ) {
    $a = shortcode_atts([
        'placeholder' => __( 'Web sitenizin adresini girin...', 'seogezegeni' ),
        'button'      => __( 'Ücretsiz Analiz', 'seogezegeni' ),
    ], $atts );
    ob_start(); ?>
    <div class="sg-audit-shortcode">
        <form class="sg-audit-form" action="<?php echo esc_url( home_url( '/seo-analizi/' ) ); ?>" method="get">
            <input type="url" name="site_url"
                   placeholder="<?php echo esc_attr( $a['placeholder'] ); ?>"
                   required>
            <?php wp_nonce_field( 'sg_audit', 'sg_audit_nonce' ); ?>
            <button type="submit"><?php echo esc_html( $a['button'] ); ?></button>
        </form>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'sg_seo_audit', 'sg_audit_form_sc' );

/* [sg_stats] – Animated counter shortcode */
function sg_stats_sc( $atts ) {
    $a = shortcode_atts([
        'projects'    => get_theme_mod( 'sg_stat_projects', '250' ),
        'clients'     => get_theme_mod( 'sg_stat_clients',  '180' ),
        'years'       => get_theme_mod( 'sg_stat_years',    '8' ),
    ], $atts );
    ob_start(); ?>
    <div class="sg-hero-stats" role="list">
        <div class="sg-stat-item" role="listitem">
            <div class="sg-stat-number" aria-label="<?php echo esc_attr( $a['projects'] ); ?> proje">
                <span class="sg-counter" data-target="<?php echo esc_attr( $a['projects'] ); ?>">0</span><span>+</span>
            </div>
            <div class="sg-stat-label"><?php _e( 'Tamamlanan Proje', 'seogezegeni' ); ?></div>
        </div>
        <div class="sg-stat-divider" aria-hidden="true"></div>
        <div class="sg-stat-item" role="listitem">
            <div class="sg-stat-number" aria-label="<?php echo esc_attr( $a['clients'] ); ?> müşteri">
                <span class="sg-counter" data-target="<?php echo esc_attr( $a['clients'] ); ?>">0</span><span>+</span>
            </div>
            <div class="sg-stat-label"><?php _e( 'Mutlu Müşteri', 'seogezegeni' ); ?></div>
        </div>
        <div class="sg-stat-divider" aria-hidden="true"></div>
        <div class="sg-stat-item" role="listitem">
            <div class="sg-stat-number" aria-label="<?php echo esc_attr( $a['years'] ); ?> yıl">
                <span class="sg-counter" data-target="<?php echo esc_attr( $a['years'] ); ?>">0</span>
            </div>
            <div class="sg-stat-label"><?php _e( 'Yıllık Deneyim', 'seogezegeni' ); ?></div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'sg_stats', 'sg_stats_sc' );

/* ============================================================
   BREADCRUMBS
   ============================================================ */
function seogezegeni_breadcrumb() {
    if ( is_front_page() ) return;

    echo '<nav class="sg-breadcrumb" aria-label="' . esc_attr__( 'Gezinme yolu', 'seogezegeni' ) . '">';
    echo '<a href="' . esc_url( home_url() ) . '">' . __( 'Ana Sayfa', 'seogezegeni' ) . '</a>';
    echo '<span class="sep" aria-hidden="true">›</span>';

    if ( is_category() ) {
        echo '<span>' . single_cat_title( '', false ) . '</span>';
    } elseif ( is_tag() ) {
        echo '<span>' . single_tag_title( '', false ) . '</span>';
    } elseif ( is_singular( 'portfolio' ) ) {
        echo '<a href="' . esc_url( home_url( '/portfolio/' ) ) . '">' . __( 'Portföy', 'seogezegeni' ) . '</a>';
        echo '<span class="sep" aria-hidden="true">›</span>';
        echo '<span>' . get_the_title() . '</span>';
    } elseif ( is_singular( 'post' ) ) {
        $cats = get_the_category();
        if ( $cats ) {
            echo '<a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_html( $cats[0]->name ) . '</a>';
            echo '<span class="sep" aria-hidden="true">›</span>';
        }
        echo '<span>' . get_the_title() . '</span>';
    } elseif ( is_page() ) {
        if ( $post->post_parent ) {
            echo '<a href="' . esc_url( get_permalink( $post->post_parent ) ) . '">' . get_the_title( $post->post_parent ) . '</a>';
            echo '<span class="sep" aria-hidden="true">›</span>';
        }
        echo '<span>' . get_the_title() . '</span>';
    } elseif ( is_archive() ) {
        echo '<span>' . get_the_archive_title() . '</span>';
    } elseif ( is_search() ) {
        echo '<span>' . sprintf( __( '"%s" için arama sonuçları', 'seogezegeni' ), esc_html( get_search_query() ) ) . '</span>';
    } elseif ( is_404() ) {
        echo '<span>' . __( 'Sayfa Bulunamadı', 'seogezegeni' ) . '</span>';
    }

    echo '</nav>';
}

/* ============================================================
   CUSTOM EXCERPT LENGTH
   ============================================================ */
function seogezegeni_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'seogezegeni_excerpt_length', 999 );

function seogezegeni_excerpt_more( $more ) {
    return '…';
}
add_filter( 'excerpt_more', 'seogezegeni_excerpt_more' );

/* ============================================================
   DOCUMENT TITLE SEPARATOR
   ============================================================ */
add_filter( 'document_title_separator', function() { return '–'; } );

/* ============================================================
   BODY CLASSES
   ============================================================ */
function seogezegeni_body_classes( $classes ) {
    if ( is_front_page() ) $classes[] = 'home-page';
    if ( is_singular() )   $classes[] = 'singular-page';
    return $classes;
}
add_filter( 'body_class', 'seogezegeni_body_classes' );

/* ============================================================
   AJAX: SEO AUDIT FORM HANDLER
   ============================================================ */
function sg_handle_audit_ajax() {
    check_ajax_referer( 'sg_nonce', 'nonce' );
    $url = isset( $_POST['site_url'] ) ? esc_url_raw( wp_unslash( $_POST['site_url'] ) ) : '';
    if ( ! $url ) wp_send_json_error( [ 'message' => __( 'Lütfen geçerli bir URL girin.', 'seogezegeni' ) ] );
    // Gerçek analiz entegrasyonu buraya eklenebilir
    wp_send_json_success( [ 'message' => __( 'Analiziniz hazırlanıyor, kısa süre içinde size ulaşacağız!', 'seogezegeni' ) ] );
}
add_action( 'wp_ajax_sg_audit',        'sg_handle_audit_ajax' );
add_action( 'wp_ajax_nopriv_sg_audit', 'sg_handle_audit_ajax' );

/* ============================================================
   ADMIN – REMOVE DEFAULT JQUERY UI DATEPICKER
   ============================================================ */
function seogezegeni_admin_enqueue( $hook ) {
    if ( 'widgets.php' !== $hook ) return;
    wp_enqueue_style( 'sg-admin-style', SG_URI . '/assets/css/admin.css', [], SG_VER );
}
add_action( 'admin_enqueue_scripts', 'seogezegeni_admin_enqueue' );

/* ============================================================
   HELPER: get option with fallback
   ============================================================ */
function sg_option( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

function sg_youtube_video_id_from_url( $url ) {
    $url = trim( (string) $url );
    if ( '' === $url ) {
        return '';
    }

    $parts = wp_parse_url( $url );
    if ( empty( $parts['host'] ) ) {
        return '';
    }

    $host = preg_replace( '/^www\./', '', strtolower( $parts['host'] ) );

    if ( 'youtu.be' === $host && ! empty( $parts['path'] ) ) {
        return sanitize_text_field( trim( $parts['path'], '/' ) );
    }

    if ( in_array( $host, [ 'youtube.com', 'm.youtube.com', 'youtube-nocookie.com' ], true ) ) {
        if ( ! empty( $parts['query'] ) ) {
            parse_str( $parts['query'], $query );
            if ( ! empty( $query['v'] ) ) {
                return sanitize_text_field( $query['v'] );
            }
        }

        if ( ! empty( $parts['path'] ) && preg_match( '#/(embed|shorts)/([^/?]+)#', $parts['path'], $matches ) ) {
            return sanitize_text_field( $matches[2] );
        }
    }

    return '';
}

/* ============================================================
   HELPER: render post card
   ============================================================ */
function sg_post_card( $post_obj = null ) {
    if ( $post_obj ) setup_postdata( $post_obj );
    $thumb = has_post_thumbnail()
        ? get_the_post_thumbnail_url( null, 'sg-blog-thumb' )
        : false;
    $cats = get_the_category();
    ?>
    <article <?php post_class( 'sg-blog-card' ); ?> role="article">
        <a href="<?php the_permalink(); ?>" class="sg-blog-thumb" aria-label="<?php the_title_attribute(); ?>">
            <?php if ( $thumb ) : ?>
                <img src="<?php echo esc_url( $thumb ); ?>"
                     alt="<?php the_title_attribute(); ?>"
                     loading="lazy">
            <?php else : ?>
                <div class="sg-blog-thumb-placeholder" aria-hidden="true">
                    <i class="fa-regular fa-image"></i>
                </div>
            <?php endif; ?>
        </a>
        <div class="sg-blog-body">
            <?php if ( $cats ) : ?>
                <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"
                   class="sg-blog-cat">
                    <?php echo esc_html( $cats[0]->name ); ?>
                </a>
            <?php endif; ?>
            <div class="sg-blog-meta">
                <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> <?php echo esc_html( get_the_date() ); ?></span>
                <span><i class="fa-regular fa-user" aria-hidden="true"></i> <?php the_author(); ?></span>
            </div>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php echo wp_trim_words( get_the_excerpt(), 18, '…' ); ?></p>
            <a href="<?php the_permalink(); ?>" class="sg-blog-more">
                <?php _e( 'Devamını Oku', 'seogezegeni' ); ?>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </article>
    <?php
    if ( $post_obj ) wp_reset_postdata();
}

/* ============================================================
   HELPER: section heading
   ============================================================ */
function sg_section_head( $label, $title, $desc = '', $center = false, $dark = false ) {
    $center_class = $center ? ' center' : '';
    $title_class  = $dark   ? ' dark'   : '';
    ?>
    <div class="sg-section-head<?php echo esc_attr( $center_class ); ?>">
        <div class="sg-label">
            <span class="sg-label-dot" aria-hidden="true"></span>
            <?php echo esc_html( $label ); ?>
        </div>
        <h2 class="section-title<?php echo esc_attr( $title_class ); ?>"><?php echo wp_kses_post( $title ); ?></h2>
        <?php if ( $desc ) : ?>
            <p><?php echo wp_kses_post( $desc ); ?></p>
        <?php endif; ?>
    </div>
    <?php
}
