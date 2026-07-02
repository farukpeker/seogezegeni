<?php
/**
 * SEO Gezegeni – functions.php
 * Text Domain: seogezegeni
 */

defined( 'ABSPATH' ) || exit;

/* ============================================================
   CONSTANTS
   ============================================================ */
define( 'SG_VER', '1.0.14' );
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

    /* ---- Fancybox ---- */
    wp_enqueue_style( 'sg-fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox/fancybox.css', [], '5' );

    /* ---- Scripts ---- */
    wp_enqueue_script( 'sg-bootstrap-js',
        SG_URI . '/assets/js/bootstrap.bundle.min.js', [ 'jquery' ], '5.3.0', true );

    wp_enqueue_script( 'sg-aos-js',
        'https://unpkg.com/aos@2.3.4/dist/aos.js', [], '2.3.4', true );

    wp_enqueue_script( 'sg-swiper-js',
        'https://unpkg.com/swiper/swiper-bundle.min.js', [], '11.0', true );

    wp_enqueue_script( 'sg-fancybox-js',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox/fancybox.umd.js', [], '5', true );

    wp_enqueue_script( 'sg-main',
        SG_URI . '/assets/js/seogezegeni.js',
        [ 'jquery', 'sg-aos-js', 'sg-swiper-js', 'sg-fancybox-js' ],
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
   SEARCH FORM
   ============================================================ */
function seogezegeni_search_form( $form ) {
    $search_query = get_search_query();

    return sprintf(
        '<form role="search" method="get" class="search-form" action="%1$s">
            <label>
                <span class="screen-reader-text">%2$s</span>
                <input type="search" class="search-field" placeholder="%3$s" value="%4$s" name="s">
            </label>
            <input type="submit" class="search-submit" value="%5$s">
        </form>',
        esc_url( home_url( '/' ) ),
        esc_html__( 'Ara', 'seogezegeni' ),
        esc_attr__( 'Ara', 'seogezegeni' ),
        esc_attr( $search_query ),
        esc_attr__( 'Ara', 'seogezegeni' )
    );
}
add_filter( 'get_search_form', 'seogezegeni_search_form' );

function seogezegeni_search_block_placeholder( $block_content, $block ) {
    if ( empty( $block['blockName'] ) || 'core/search' !== $block['blockName'] ) {
        return $block_content;
    }

    $placeholder = esc_attr__( 'Ara', 'seogezegeni' );

    if ( preg_match( '/placeholder=("|\')\s*\1/', $block_content ) ) {
        return preg_replace(
            '/placeholder=("|\')\s*\1/',
            'placeholder="' . $placeholder . '"',
            $block_content,
            1
        );
    }

    if ( false !== strpos( $block_content, 'placeholder=' ) ) {
        return $block_content;
    }

    return preg_replace(
        '/(<input[^>]+class="[^"]*wp-block-search__input[^"]*"[^>]*)(>)/',
        '$1 placeholder="' . $placeholder . '"$2',
        $block_content,
        1
    );
}
add_filter( 'render_block', 'seogezegeni_search_block_placeholder', 10, 2 );

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
        'projects'    => sg_stat_option( 'sg_stat_projects', '1000' ),
        'clients'     => sg_stat_option( 'sg_stat_clients',  '20' ),
        'years'       => sg_stat_option( 'sg_stat_years',    '15' ),
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
            <div class="sg-stat-number" aria-label="<?php echo esc_attr( $a['clients'] ); ?> ekip üyesi">
                <span class="sg-counter" data-target="<?php echo esc_attr( $a['clients'] ); ?>">0</span><span>+</span>
            </div>
            <div class="sg-stat-label"><?php _e( 'Ekip Üyesi', 'seogezegeni' ); ?></div>
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
   AJAX: Native contact form handler
   ============================================================ */
if ( ! function_exists( 'sg_handle_contact' ) ) {
    function sg_handle_contact() {
        check_ajax_referer( 'sg_contact_nonce', 'sg_contact_nonce_field' );

        $name    = isset( $_POST['sg_name'] ) ? sanitize_text_field( wp_unslash( $_POST['sg_name'] ) ) : '';
        $email   = isset( $_POST['sg_email'] ) ? sanitize_email( wp_unslash( $_POST['sg_email'] ) ) : '';
        $tel     = isset( $_POST['sg_tel'] ) ? sanitize_text_field( wp_unslash( $_POST['sg_tel'] ) ) : '';
        $company = isset( $_POST['sg_company'] ) ? sanitize_text_field( wp_unslash( $_POST['sg_company'] ) ) : '';
        $website = isset( $_POST['sg_website'] ) ? esc_url_raw( wp_unslash( $_POST['sg_website'] ) ) : '';
        $raw_services = isset( $_POST['sg_services'] ) && is_array( $_POST['sg_services'] )
            ? array_map( 'sanitize_text_field', wp_unslash( $_POST['sg_services'] ) )
            : [];
        $service_options = sg_get_quote_services();
        $service_labels  = array_filter( array_map( fn( $v ) => $service_options[ $v ] ?? null, $raw_services ) );
        $service         = ! empty( $service_labels ) ? implode( ', ', $service_labels ) : '';
        $message = isset( $_POST['sg_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['sg_message'] ) ) : '';

        if ( ! $name || ! $email || ! $message ) {
            wp_send_json_error( [ 'message' => __( 'Lütfen zorunlu alanları doldurun.', 'seogezegeni' ) ] );
        }

        if ( ! is_email( $email ) ) {
            wp_send_json_error( [ 'message' => __( 'Geçerli bir e-posta adresi giriniz.', 'seogezegeni' ) ] );
        }

        $to      = get_option( 'admin_email' );
        $subject = sprintf( __( '[SEO Gezegeni] %s - İletişim Formu', 'seogezegeni' ), $name );
        $body    = sprintf(
            "Ad Soyad: %s\nE-posta: %s\nTelefon: %s\nŞirket: %s\nWeb: %s\nHizmet: %s\n\nMesaj:\n%s",
            $name,
            $email,
            $tel,
            $company,
            $website,
            $service,
            $message
        );
        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            sprintf( 'Reply-To: %s <%s>', $name, $email ),
        ];

        if ( wp_mail( $to, $subject, $body, $headers ) ) {
            wp_send_json_success( [ 'message' => __( 'Mesajınız iletildi. En kısa sürede dönüş yapacağız!', 'seogezegeni' ) ] );
        }

        wp_send_json_error( [ 'message' => __( 'Mesaj gönderilemedi. Lütfen daha sonra tekrar deneyin.', 'seogezegeni' ) ] );
    }
}
add_action( 'wp_ajax_sg_contact', 'sg_handle_contact' );
add_action( 'wp_ajax_nopriv_sg_contact', 'sg_handle_contact' );

/* ============================================================
   BREADCRUMBS
   ============================================================ */
function seogezegeni_breadcrumb() {
    if ( is_front_page() ) return;

    global $post;

    echo '<nav class="sg-breadcrumb" aria-label="' . esc_attr__( 'Gezinme yolu', 'seogezegeni' ) . '">';
    echo '<a href="' . esc_url( home_url() ) . '">' . __( 'Ana Sayfa', 'seogezegeni' ) . '</a>';
    echo '<span class="sep" aria-hidden="true">›</span>';

    $posts_page_id    = (int) get_option( 'page_for_posts' );
    $posts_page_title = $posts_page_id ? get_the_title( $posts_page_id ) : __( 'Blog', 'seogezegeni' );
    $posts_page_url   = $posts_page_id ? get_permalink( $posts_page_id ) : home_url( '/blog/' );

    if ( is_home() && ! is_front_page() ) {
        echo '<span>' . esc_html( $posts_page_title ) . '</span>';
    } elseif ( is_category() ) {
        echo '<a href="' . esc_url( $posts_page_url ) . '">' . esc_html( $posts_page_title ) . '</a>';
        echo '<span class="sep" aria-hidden="true">â€º</span>';
        echo '<span>' . single_cat_title( '', false ) . '</span>';
    } elseif ( is_tag() ) {
        echo '<a href="' . esc_url( $posts_page_url ) . '">' . esc_html( $posts_page_title ) . '</a>';
        echo '<span class="sep" aria-hidden="true">â€º</span>';
        echo '<span>' . single_tag_title( '', false ) . '</span>';
    } elseif ( is_singular( 'portfolio' ) ) {
        echo '<a href="' . esc_url( home_url( '/referanslar/' ) ) . '">' . __( 'Referanslar', 'seogezegeni' ) . '</a>';
        echo '<span class="sep" aria-hidden="true">›</span>';
        echo '<span>' . get_the_title() . '</span>';
    } elseif ( is_singular( 'post' ) ) {
        echo '<a href="' . esc_url( $posts_page_url ) . '">' . esc_html( $posts_page_title ) . '</a>';
        echo '<span class="sep" aria-hidden="true">â€º</span>';
        $cats = get_the_category();
        if ( $cats ) {
            echo '<a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_html( $cats[0]->name ) . '</a>';
            echo '<span class="sep" aria-hidden="true">›</span>';
        }
        echo '<span>' . get_the_title() . '</span>';
    } elseif ( is_page() ) {
        if ( $post && $post->post_parent ) {
            echo '<a href="' . esc_url( get_permalink( $post->post_parent ) ) . '">' . get_the_title( $post->post_parent ) . '</a>';
            echo '<span class="sep" aria-hidden="true">›</span>';
        }
        echo '<span>' . get_the_title() . '</span>';
    } elseif ( is_post_type_archive( 'portfolio' ) ) {
        echo '<span>' . __( 'Referanslar', 'seogezegeni' ) . '</span>';
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

function sg_portfolio_archive_query( $query ) {
    if ( is_admin() || ! $query->is_main_query() || ! $query->is_post_type_archive( 'portfolio' ) ) {
        return;
    }

    $query->set( 'posts_per_page', 12 );
    $query->set( 'orderby', [ 'menu_order' => 'ASC', 'date' => 'DESC' ] );
}
add_action( 'pre_get_posts', 'sg_portfolio_archive_query' );

function sg_redirect_portfolio_single_to_archive() {
    if ( is_singular( 'portfolio' ) ) {
        wp_safe_redirect( home_url( '/referanslar/' ), 301 );
        exit;
    }
}
add_action( 'template_redirect', 'sg_redirect_portfolio_single_to_archive' );

/* ============================================================
   AJAX: HERO TEKLIF FORM HANDLER
   ============================================================ */
if ( ! function_exists( 'sg_get_quote_services' ) ) :
function sg_get_quote_services() {
    return [
        'seo'                  => __( 'SEO', 'seogezegeni' ),
        'dijital-pazarlama'    => __( '360° Dijital Pazarlama', 'seogezegeni' ),
        'sosyal-medya'         => __( 'Sosyal Medya Yönetimi', 'seogezegeni' ),
        'google-meta-reklam'   => __( 'Google & Meta Reklamları', 'seogezegeni' ),
        'web-tasarim-yazilim'  => __( 'Web Tasarım ve Yazılım', 'seogezegeni' ),
        'diger'                => __( 'Diğer', 'seogezegeni' ),
    ];
}
endif;

function sg_handle_quote_ajax() {
    check_ajax_referer( 'sg_quote_nonce', 'sg_quote_nonce_field' );

    $name     = isset( $_POST['sq_name'] )    ? sanitize_text_field( wp_unslash( $_POST['sq_name'] ) )   : '';
    $phone    = isset( $_POST['sq_phone'] )   ? sanitize_text_field( wp_unslash( $_POST['sq_phone'] ) )  : '';
    $email    = isset( $_POST['sq_email'] )   ? sanitize_email( wp_unslash( $_POST['sq_email'] ) )       : '';
    $website  = isset( $_POST['sq_website'] ) ? esc_url_raw( wp_unslash( $_POST['sq_website'] ) )        : '';
    $services = isset( $_POST['sq_services'] ) && is_array( $_POST['sq_services'] )
        ? array_map( 'sanitize_text_field', wp_unslash( $_POST['sq_services'] ) )
        : [];

    if ( ! $name || ! $phone || ! $email ) {
        wp_send_json_error( [ 'message' => __( 'Lütfen zorunlu alanları doldurun.', 'seogezegeni' ) ] );
    }
    if ( ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => __( 'Geçerli bir e-posta adresi giriniz.', 'seogezegeni' ) ] );
    }

    $service_options = sg_get_quote_services();
    $service_labels  = [];
    foreach ( $services as $service ) {
        if ( isset( $service_options[ $service ] ) ) {
            $service_labels[] = $service_options[ $service ];
        }
    }
    $services_str = ! empty( $service_labels ) ? implode( ', ', $service_labels ) : '—';
    $to      = get_option( 'admin_email' );
    $subject = sprintf( __( '[SEO Gezegeni] Yeni Teklif Talebi – %s', 'seogezegeni' ), $name );
    $body    = "İsim: $name\nTelefon: $phone\nE-posta: $email\nWebsite: $website\nHizmetler: $services_str";
    $headers = [ 'Content-Type: text/plain; charset=UTF-8', "From: $name <$email>" ];

    if ( wp_mail( $to, $subject, $body, $headers ) ) {
        wp_send_json_success( [ 'message' => __( 'Talebiniz alındı! En kısa sürede size dönüş yapacağız.', 'seogezegeni' ) ] );
    } else {
        wp_send_json_error( [ 'message' => __( 'Mesaj gönderilemedi. Lütfen daha sonra tekrar deneyin.', 'seogezegeni' ) ] );
    }
}
add_action( 'wp_ajax_sg_quote',        'sg_handle_quote_ajax' );
add_action( 'wp_ajax_nopriv_sg_quote', 'sg_handle_quote_ajax' );

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

function sg_reference_logo_card( $post_id = null ) {
    if ( $post_id ) {
        $post = get_post( $post_id );
        if ( ! $post ) {
            return;
        }
        setup_postdata( $post );
    }
    ?>
    <article class="sg-portfolio-item sg-reference-logo-card" data-sg-reveal>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="sg-portfolio-img">
                <?php the_post_thumbnail( 'sg-portfolio-thumb', [ 'loading' => 'lazy', 'alt' => get_the_title() ] ); ?>
            </div>
        <?php else : ?>
            <div class="sg-portfolio-img sg-portfolio-img-placeholder">
                <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
            </div>
        <?php endif; ?>
    </article>
    <?php
    if ( $post_id ) {
        wp_reset_postdata();
    }
}

function sg_load_more_references_ajax() {
    check_ajax_referer( 'sg_nonce', 'nonce' );

    $page = isset( $_POST['page'] ) ? max( 1, absint( $_POST['page'] ) ) : 1;

    $references_query = new WP_Query( [
        'post_type'      => 'portfolio',
        'posts_per_page' => 12,
        'paged'          => $page,
        'post_status'    => 'publish',
        'orderby'        => [ 'menu_order' => 'ASC', 'date' => 'DESC' ],
    ] );

    ob_start();
    if ( $references_query->have_posts() ) {
        while ( $references_query->have_posts() ) {
            $references_query->the_post();
            sg_reference_logo_card();
        }
        wp_reset_postdata();
    }

    wp_send_json_success( [
        'html'    => ob_get_clean(),
        'page'    => $page,
        'maxPage' => (int) $references_query->max_num_pages,
    ] );
}
add_action( 'wp_ajax_sg_load_more_references', 'sg_load_more_references_ajax' );
add_action( 'wp_ajax_nopriv_sg_load_more_references', 'sg_load_more_references_ajax' );

/* ============================================================
   ADMIN – REMOVE DEFAULT JQUERY UI DATEPICKER
   ============================================================ */
function seogezegeni_admin_enqueue( $hook ) {
    if ( 'widgets.php' !== $hook ) return;
    wp_enqueue_style( 'sg-admin-style', SG_URI . '/assets/css/admin.css', [], SG_VER );
}
add_action( 'admin_enqueue_scripts', 'seogezegeni_admin_enqueue' );

function sg_is_default_portfolio_admin_order() {
    if ( ! is_admin() ) {
        return false;
    }

    $post_type = isset( $_GET['post_type'] ) ? sanitize_key( wp_unslash( $_GET['post_type'] ) ) : 'post';
    if ( 'portfolio' !== $post_type ) {
        return false;
    }

    $blocking_params = [ 's', 'orderby', 'order', 'm', 'portfolio_cat', 'portfolio_tag' ];
    foreach ( $blocking_params as $param ) {
        if ( ! empty( $_GET[ $param ] ) ) {
            return false;
        }
    }

    return true;
}

function sg_portfolio_admin_order_query( $query ) {
    global $pagenow;

    if ( ! is_admin() || 'edit.php' !== $pagenow || ! $query->is_main_query() || ! sg_is_default_portfolio_admin_order() ) {
        return;
    }

    $query->set( 'orderby', [ 'menu_order' => 'ASC', 'date' => 'DESC' ] );
}
add_action( 'pre_get_posts', 'sg_portfolio_admin_order_query' );

function sg_portfolio_sort_admin_assets( $hook ) {
    if ( 'edit.php' !== $hook || ! sg_is_default_portfolio_admin_order() ) {
        return;
    }

    $per_page = (int) get_user_option( 'edit_portfolio_per_page' );
    if ( $per_page < 1 ) {
        $per_page = 20;
    }

    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_add_inline_style(
        'common',
        '.post-type-portfolio #the-list tr.type-portfolio{cursor:move}.post-type-portfolio #the-list tr.ui-sortable-helper{background:#fff;box-shadow:0 8px 24px rgba(0,0,0,.16)}.post-type-portfolio #the-list.sg-reference-sorting-saving{opacity:.65;pointer-events:none}.sg-reference-sort-note{margin:10px 0 12px}.sg-reference-sort-status{display:inline-block;margin-left:8px;color:#646970}'
    );
    wp_add_inline_script(
        'jquery-ui-sortable',
        'window.sgPortfolioSort=' . wp_json_encode( [
            'nonce'   => wp_create_nonce( 'sg_portfolio_sort' ),
            'paged'   => isset( $_GET['paged'] ) ? max( 1, absint( $_GET['paged'] ) ) : 1,
            'perPage' => $per_page,
            'saving'  => __( 'Kaydediliyor...', 'seogezegeni' ),
            'saved'   => __( 'Sıralama kaydedildi.', 'seogezegeni' ),
            'error'   => __( 'Sıralama kaydedilemedi.', 'seogezegeni' ),
        ] ) . ';
        jQuery(function($){
            var $list = $("#the-list");
            if (!$list.length || !$list.children("tr.type-portfolio").length) {
                return;
            }

            $(".tablenav.top").after("<div class=\"notice notice-info inline sg-reference-sort-note\"><p>Referansları öne almak için satırları sürükleyip bırakın.<span class=\"sg-reference-sort-status\" aria-live=\"polite\"></span></p></div>");
            var $status = $(".sg-reference-sort-status");

            $list.sortable({
                items: "tr.type-portfolio",
                axis: "y",
                cursor: "move",
                opacity: 0.9,
                helper: function(e, row) {
                    row.children().each(function() {
                        $(this).width($(this).width());
                    });
                    return row;
                },
                update: function() {
                    var ids = $list.children("tr.type-portfolio").map(function() {
                        return this.id.replace("post-", "");
                    }).get();

                    $list.addClass("sg-reference-sorting-saving");
                    $status.text(sgPortfolioSort.saving);

                    $.post(ajaxurl, {
                        action: "sg_sort_portfolio_references",
                        nonce: sgPortfolioSort.nonce,
                        ids: ids,
                        paged: sgPortfolioSort.paged,
                        per_page: sgPortfolioSort.perPage
                    }).done(function(response) {
                        $status.text(response && response.success ? sgPortfolioSort.saved : sgPortfolioSort.error);
                    }).fail(function() {
                        $status.text(sgPortfolioSort.error);
                    }).always(function() {
                        $list.removeClass("sg-reference-sorting-saving");
                    });
                }
            });
        });'
    );
}
add_action( 'admin_enqueue_scripts', 'sg_portfolio_sort_admin_assets' );

function sg_sort_portfolio_references_ajax() {
    check_ajax_referer( 'sg_portfolio_sort', 'nonce' );

    if ( ! current_user_can( 'edit_posts' ) ) {
        wp_send_json_error();
    }

    $ids = isset( $_POST['ids'] ) && is_array( $_POST['ids'] )
        ? array_values( array_filter( array_map( 'absint', wp_unslash( $_POST['ids'] ) ) ) )
        : [];

    if ( empty( $ids ) ) {
        wp_send_json_error();
    }

    $paged    = isset( $_POST['paged'] ) ? max( 1, absint( $_POST['paged'] ) ) : 1;
    $per_page = isset( $_POST['per_page'] ) ? max( 1, absint( $_POST['per_page'] ) ) : 20;
    $offset   = ( $paged - 1 ) * $per_page;

    $all_ids = get_posts( [
        'post_type'      => 'portfolio',
        'post_status'    => [ 'publish', 'draft', 'pending', 'future', 'private' ],
        'posts_per_page' => -1,
        'fields'         => 'ids',
        'orderby'        => [ 'menu_order' => 'ASC', 'date' => 'DESC' ],
        'no_found_rows'  => true,
    ] );

    $ids     = array_values( array_intersect( $ids, $all_ids ) );
    $all_ids = array_values( array_diff( $all_ids, $ids ) );
    array_splice( $all_ids, $offset, 0, $ids );

    foreach ( $all_ids as $menu_order => $post_id ) {
        if ( current_user_can( 'edit_post', $post_id ) ) {
            wp_update_post( [
                'ID'         => $post_id,
                'menu_order' => $menu_order,
            ] );
        }
    }

    wp_send_json_success();
}
add_action( 'wp_ajax_sg_sort_portfolio_references', 'sg_sort_portfolio_references_ajax' );

/* ============================================================
   HELPER: get option with fallback
   ============================================================ */
function sg_option( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

function sg_stat_option( $key, $default = '' ) {
    $legacy_values = [
        'sg_stat_projects'      => [ '250', '234', '' ],
        'sg_stat_clients'       => [ '180', '168', '' ],
        'sg_stat_years'         => [ '8', '7', '' ],
        'sg_stat_clients_label' => [ 'Mutlu Müşteri', 'Müşteri Etiketi', '' ],
    ];

    $value = get_theme_mod( $key, $default );

    if ( isset( $legacy_values[ $key ] ) && in_array( (string) $value, $legacy_values[ $key ], true ) ) {
        return $default;
    }

    return $value;
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

/* ============================================================
   Yorum Callback
   ============================================================ */
if ( ! function_exists( 'seogezegeni_comment_callback' ) ) :
function seogezegeni_comment_callback( $comment, $args, $depth ) {
    $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
    ?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( 'sg-comment', $comment ); ?>>
        <div class="sg-comment-inner">
            <div class="sg-comment-avatar">
                <?php echo get_avatar( $comment, $args['avatar_size'], '', get_comment_author( $comment ) ); ?>
            </div>
            <div class="sg-comment-body">
                <div class="sg-comment-header">
                    <strong class="sg-comment-author"><?php echo get_comment_author_link( $comment ); ?></strong>
                    <time class="sg-comment-date" datetime="<?php comment_time( 'c' ); ?>">
                        <?php printf( __( '%1$s · %2$s', 'seogezegeni' ), get_comment_date(), get_comment_time() ); ?>
                    </time>
                </div>

                <?php if ( '0' === $comment->comment_approved ) : ?>
                    <p class="sg-comment-moderation">
                        <i class="fa-solid fa-hourglass-half" aria-hidden="true"></i>
                        <?php _e( 'Yorumunuz onay bekliyor.', 'seogezegeni' ); ?>
                    </p>
                <?php endif; ?>

                <div class="sg-comment-text">
                    <?php comment_text(); ?>
                </div>

                <div class="sg-comment-actions">
                    <?php
                    comment_reply_link( array_merge( $args, [
                        'add_below' => 'comment',
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'before'    => '',
                        'after'     => '',
                    ]), $comment );
                    ?>
                    <?php edit_comment_link( __( 'Düzenle', 'seogezegeni' ), '<span class="sg-comment-edit">', '</span>' ); ?>
                </div>
            </div>
        </div>
    <?php
}
endif;
