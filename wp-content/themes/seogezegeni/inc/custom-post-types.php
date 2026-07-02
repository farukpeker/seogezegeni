<?php
/**
 * SEO Gezegeni – Custom Post Types & Taxonomies
 */

defined( 'ABSPATH' ) || exit;

/* ============================================================
   CPT: Portfolio (Referanslar)
   ============================================================ */
function seogezegeni_register_portfolio() {
    $labels = [
        'name'               => _x( 'Referanslar',      'post type genel adı',     'seogezegeni' ),
        'singular_name'      => _x( 'Referans',         'post type tekil adı',     'seogezegeni' ),
        'menu_name'          => __( 'Referanslar',                                  'seogezegeni' ),
        'name_admin_bar'     => __( 'Referans',                                     'seogezegeni' ),
        'add_new'            => __( 'Yeni Ekle',                                     'seogezegeni' ),
        'add_new_item'       => __( 'Yeni Referans Ekle',                            'seogezegeni' ),
        'new_item'           => __( 'Yeni Referans',                                 'seogezegeni' ),
        'edit_item'          => __( 'Referansı Düzenle',                             'seogezegeni' ),
        'view_item'          => __( 'Referansı Görüntüle',                           'seogezegeni' ),
        'all_items'          => __( 'Tüm Referanslar',                               'seogezegeni' ),
        'search_items'       => __( 'Referans Ara',                                  'seogezegeni' ),
        'not_found'          => __( 'Referans bulunamadı.',                          'seogezegeni' ),
        'not_found_in_trash' => __( 'Çöp kutusunda referans bulunamadı.',            'seogezegeni' ),
    ];

    register_post_type( 'portfolio', [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => [ 'slug' => 'referans', 'with_front' => false ],
        'capability_type'    => 'post',
        'has_archive'        => 'referanslar',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'show_in_rest'       => true,
    ]);
}
add_action( 'init', 'seogezegeni_register_portfolio' );

/* ============================================================
   TAXONOMY: Portfolio Category (Portföy Kategorisi)
   ============================================================ */
function seogezegeni_register_portfolio_taxonomy() {
    $labels = [
        'name'              => _x( 'Portföy Kategorileri', 'taksonomi genel adı', 'seogezegeni' ),
        'singular_name'     => _x( 'Portföy Kategorisi',  'taksonomi tekil adı', 'seogezegeni' ),
        'search_items'      => __( 'Kategori Ara',                                'seogezegeni' ),
        'all_items'         => __( 'Tüm Kategoriler',                             'seogezegeni' ),
        'parent_item'       => __( 'Üst Kategori',                                'seogezegeni' ),
        'parent_item_colon' => __( 'Üst Kategori:',                               'seogezegeni' ),
        'edit_item'         => __( 'Kategoriyi Düzenle',                          'seogezegeni' ),
        'update_item'       => __( 'Kategoriyi Güncelle',                         'seogezegeni' ),
        'add_new_item'      => __( 'Yeni Kategori Ekle',                          'seogezegeni' ),
        'new_item_name'     => __( 'Yeni Kategori Adı',                           'seogezegeni' ),
        'menu_name'         => __( 'Kategoriler',                                 'seogezegeni' ),
    ];

    register_taxonomy( 'portfolio_cat', [ 'portfolio' ], [
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'portfolio-kategori' ],
        'show_in_rest'      => true,
    ]);
}
add_action( 'init', 'seogezegeni_register_portfolio_taxonomy' );

/* ============================================================
   TAXONOMY: Portfolio Tag (Portföy Etiketi)
   ============================================================ */
function seogezegeni_register_portfolio_tags() {
    register_taxonomy( 'portfolio_tag', [ 'portfolio' ], [
        'labels'       => [
            'name'          => _x( 'Portföy Etiketleri', 'taksonomi genel adı', 'seogezegeni' ),
            'singular_name' => _x( 'Portföy Etiketi',    'taksonomi tekil adı', 'seogezegeni' ),
            'add_new_item'  => __( 'Yeni Etiket Ekle',                          'seogezegeni' ),
            'menu_name'     => __( 'Etiketler',                                 'seogezegeni' ),
        ],
        'hierarchical'      => false,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'portfolio-etiket' ],
        'show_in_rest'      => true,
    ]);
}
add_action( 'init', 'seogezegeni_register_portfolio_tags' );

/* ============================================================
   CPT: Testimonials (Müşteri Yorumları)
   ============================================================ */
function seogezegeni_register_testimonials() {
    register_post_type( 'testimonial', [
        'labels' => [
            'name'          => __( 'Müşteri Yorumları', 'seogezegeni' ),
            'singular_name' => __( 'Yorum',            'seogezegeni' ),
            'add_new_item'  => __( 'Yeni Yorum Ekle',  'seogezegeni' ),
            'menu_name'     => __( 'Yorumlar',          'seogezegeni' ),
        ],
        'public'          => false,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'menu_icon'       => 'dashicons-format-quote',
        'supports'        => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'show_in_rest'    => true,
        'menu_position'   => 6,
    ]);
}
add_action( 'init', 'seogezegeni_register_testimonials' );

/* ============================================================
   META BOXES: Portfolio Details
   ============================================================ */
function sg_portfolio_meta_boxes() {
    add_meta_box(
        'sg_portfolio_details',
        __( 'Proje Detayları', 'seogezegeni' ),
        'sg_portfolio_meta_callback',
        'portfolio',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'sg_portfolio_meta_boxes' );

function sg_portfolio_meta_callback( $post ) {
    wp_nonce_field( 'sg_portfolio_save', 'sg_portfolio_nonce' );
    $client   = get_post_meta( $post->ID, '_sg_client',   true );
    $duration = get_post_meta( $post->ID, '_sg_duration', true );
    $result   = get_post_meta( $post->ID, '_sg_result',   true );
    $url      = get_post_meta( $post->ID, '_sg_url',      true );
    ?>
    <table class="form-table" style="width:100%">
        <tr>
            <th><?php _e( 'Müşteri Adı', 'seogezegeni' ); ?></th>
            <td><input type="text" name="sg_client" value="<?php echo esc_attr( $client ); ?>" class="widefat"></td>
        </tr>
        <tr>
            <th><?php _e( 'Proje Süresi', 'seogezegeni' ); ?></th>
            <td><input type="text" name="sg_duration" value="<?php echo esc_attr( $duration ); ?>" class="widefat" placeholder="örn: 3 Ay"></td>
        </tr>
        <tr>
            <th><?php _e( 'Sonuç / Başarı', 'seogezegeni' ); ?></th>
            <td><input type="text" name="sg_result" value="<?php echo esc_attr( $result ); ?>" class="widefat" placeholder="örn: %320 Organik Trafik Artışı"></td>
        </tr>
        <tr>
            <th><?php _e( 'Proje URL', 'seogezegeni' ); ?></th>
            <td><input type="url" name="sg_url" value="<?php echo esc_url( $url ); ?>" class="widefat" placeholder="https://"></td>
        </tr>
    </table>
    <?php
}

function sg_portfolio_meta_save( $post_id ) {
    if (
        ! isset( $_POST['sg_portfolio_nonce'] ) ||
        ! wp_verify_nonce( $_POST['sg_portfolio_nonce'], 'sg_portfolio_save' ) ||
        ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) ||
        ! current_user_can( 'edit_post', $post_id )
    ) return;

    $fields = [ 'sg_client', 'sg_duration', 'sg_result' ];
    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, '_' . $field, sanitize_text_field( wp_unslash( $_POST[ $field ] ) ) );
        }
    }
    if ( isset( $_POST['sg_url'] ) ) {
        update_post_meta( $post_id, '_sg_url', esc_url_raw( wp_unslash( $_POST['sg_url'] ) ) );
    }
}
add_action( 'save_post_portfolio', 'sg_portfolio_meta_save' );

/* ============================================================
   META BOXES: Testimonial Details
   ============================================================ */
function sg_testimonial_meta_box() {
    add_meta_box(
        'sg_tes_details',
        __( 'Yorum Detayları', 'seogezegeni' ),
        'sg_tes_meta_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'sg_testimonial_meta_box' );

function sg_tes_meta_callback( $post ) {
    wp_nonce_field( 'sg_tes_save', 'sg_tes_nonce' );
    $role    = get_post_meta( $post->ID, '_sg_tes_role',    true );
    $company = get_post_meta( $post->ID, '_sg_tes_company', true );
    $rating  = get_post_meta( $post->ID, '_sg_tes_rating',  true ) ?: '5';
    ?>
    <table class="form-table">
        <tr>
            <th><?php _e( 'Unvan / Pozisyon', 'seogezegeni' ); ?></th>
            <td><input type="text" name="sg_tes_role" value="<?php echo esc_attr( $role ); ?>" class="widefat"></td>
        </tr>
        <tr>
            <th><?php _e( 'Şirket Adı', 'seogezegeni' ); ?></th>
            <td><input type="text" name="sg_tes_company" value="<?php echo esc_attr( $company ); ?>" class="widefat"></td>
        </tr>
        <tr>
            <th><?php _e( 'Puan (1-5)', 'seogezegeni' ); ?></th>
            <td>
                <select name="sg_tes_rating" class="widefat">
                    <?php for ( $i = 5; $i >= 1; $i-- ) : ?>
                        <option value="<?php echo $i; ?>" <?php selected( $rating, $i ); ?>><?php echo $i; ?> Yıldız</option>
                    <?php endfor; ?>
                </select>
            </td>
        </tr>
    </table>
    <?php
}

function sg_tes_meta_save( $post_id ) {
    if (
        ! isset( $_POST['sg_tes_nonce'] ) ||
        ! wp_verify_nonce( $_POST['sg_tes_nonce'], 'sg_tes_save' ) ||
        ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) ||
        ! current_user_can( 'edit_post', $post_id )
    ) return;

    foreach ( [ 'sg_tes_role', 'sg_tes_company', 'sg_tes_rating' ] as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, '_' . $field, sanitize_text_field( wp_unslash( $_POST[ $field ] ) ) );
        }
    }
}
add_action( 'save_post_testimonial', 'sg_tes_meta_save' );

/* ============================================================
   FLUSH REWRITE RULES on activation
   ============================================================ */
function seogezegeni_flush_rewrites() {
    seogezegeni_register_portfolio();
    seogezegeni_register_testimonials();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'seogezegeni_flush_rewrites' );
register_activation_hook( __FILE__, 'seogezegeni_flush_rewrites' );
