<?php
/**
 * Ozel sayfa sablonlari icin ortak "panelden duzenlenebilir icerik" motoru.
 *
 * Her sayfa sg_pf_register() ile kendini tanitir:
 *   'meta'     => post meta anahtari
 *   'input'    => POST dizisi adi
 *   'title'    => meta kutusu basligi
 *   'match'    => callable( WP_Post ): bool   (kutunun gorunecegi sayfa)
 *   'fields'   => callable(): array           (sekmeler => alanlar)
 *   'defaults' => callable(): array           (varsayilan icerik)
 *
 * Alan tipleri: text | textarea | paras | lines | icon | repeater
 *  - paras : bos satirla ayrilan paragraflar
 *  - lines : her satir bir madde
 * Bos birakilan alan varsayilan degere doner.
 */

defined( 'ABSPATH' ) || exit;

function &sg_pf_registry() {
    static $registry = [];
    return $registry;
}

function sg_pf_register( $id, array $cfg ) {
    $registry        =& sg_pf_registry();
    $registry[ $id ] = $cfg;
}

function sg_pf_cfg( $id ) {
    $registry =& sg_pf_registry();
    return $registry[ $id ] ?? null;
}

function sg_pf_field_index( $cfg ) {
    $index = [];
    foreach ( call_user_func( $cfg['fields'] ) as $tab ) {
        foreach ( $tab['fields'] as $key => $field ) {
            $index[ $key ] = $field;
        }
    }
    return $index;
}

/* ============================================================
   DONUSUMLER (varsayilan/kayitli <-> form degeri)
   ============================================================ */
function sg_pf_text_to_form( $value, $type ) {
    if ( 'paras' === $type ) {
        return implode( "\n\n", (array) $value );
    }
    if ( 'lines' === $type ) {
        return implode( "\n", (array) $value );
    }
    return (string) $value;
}

function sg_pf_form_to_text( $value, $type ) {
    $value = (string) $value;
    if ( 'paras' === $type ) {
        $parts = preg_split( '/\R\s*\R/u', trim( $value ) );
        return array_values( array_filter( array_map( 'trim', $parts ), 'strlen' ) );
    }
    if ( 'lines' === $type ) {
        return array_values( array_filter( array_map( 'trim', preg_split( '/\R/u', $value ) ), 'strlen' ) );
    }
    return trim( $value );
}

/** Varsayilan/sablon satirini form satirina cevirir. */
function sg_pf_row_to_form( $row, $field ) {
    $out = [];
    foreach ( $field['sub'] as $sub ) {
        if ( ! empty( $field['shape'] ) ) {
            $pos = array_search( $sub['id'], $field['shape'], true );
            $raw = false === $pos ? '' : ( $row[ $pos ] ?? '' );
        } else {
            $raw = $row[ $sub['id'] ] ?? '';
        }
        $out[ $sub['id'] ] = sg_pf_text_to_form( $raw, $sub['type'] );
    }
    return $out;
}

/** Form satirini sablonun bekledigi yapiya cevirir. */
function sg_pf_row_from_form( $row, $field ) {
    $out = [];
    foreach ( $field['sub'] as $sub ) {
        $out[ $sub['id'] ] = sg_pf_form_to_text( $row[ $sub['id'] ] ?? '', $sub['type'] );
    }
    if ( ! empty( $field['shape'] ) ) {
        $pos = [];
        foreach ( $field['shape'] as $id ) {
            $pos[] = $out[ $id ];
        }
        return $pos;
    }
    return $out;
}

/* ============================================================
   ICERIK OKUMA
   ============================================================ */
function sg_pf_content( $id, $post_id ) {
    $cfg    = sg_pf_cfg( $id );
    $data   = call_user_func( $cfg['defaults'] );
    $saved  = get_post_meta( $post_id, $cfg['meta'], true );
    $saved  = is_array( $saved ) ? $saved : [];

    foreach ( sg_pf_field_index( $cfg ) as $key => $field ) {
        if ( empty( $saved[ $key ] ) ) {
            continue;
        }
        if ( 'repeater' === $field['type'] ) {
            $rows = [];
            foreach ( (array) $saved[ $key ] as $row ) {
                $converted = sg_pf_row_from_form( (array) $row, $field );
                if ( array_filter( $converted, static function ( $v ) { return ! empty( $v ); } ) ) {
                    $rows[] = $converted;
                }
            }
            if ( $rows ) {
                $data[ $key ] = $rows;
            }
        } else {
            $value = sg_pf_form_to_text( $saved[ $key ], $field['type'] );
            if ( $value ) {
                $data[ $key ] = $value;
            }
        }
    }
    return $data;
}

/** "t_" on ekli anahtarlari $seo_text tarzi tek dizide toplar. */
function sg_pf_split_text( array $data ) {
    $data['seo_text'] = [];
    foreach ( array_keys( $data ) as $key ) {
        if ( 0 === strpos( $key, 't_' ) ) {
            $data['seo_text'][ substr( $key, 2 ) ] = $data[ $key ];
            unset( $data[ $key ] );
        }
    }
    return $data;
}

/** Govde metni: guvenli kacis + **kalin** ve *italik* bicimlendirme. */
function sg_pf_inline( $text ) {
    $text = esc_html( $text );
    $text = preg_replace( '/\*\*(.+?)\*\*/us', '<strong>$1</strong>', $text );
    return preg_replace( '/\*(.+?)\*/us', '<em>$1</em>', $text );
}

/** Paragraf yazdirir. */
function sg_seo_p( $texts, $attrs = '' ) {
    foreach ( (array) $texts as $text ) {
        printf( '<p%s>%s</p>' . "\n", $attrs ? ' ' . $attrs : '', sg_pf_inline( $text ) ); // phpcs:ignore WordPress.Security.EscapeOutput
    }
}

/** Basliktaki *vurgulu* kismi accent span'ine cevirir (guvenli). */
function sg_pf_heading( $text ) {
    $text = esc_html( $text );
    return preg_replace( '/\*(.+?)\*/u', '<span class="text-accent">$1</span>', $text );
}

/* ============================================================
   META KUTUSU
   ============================================================ */
function sg_pf_matches( $cfg, $post ) {
    return $post && 'page' === $post->post_type && call_user_func( $cfg['match'], $post );
}

function sg_pf_add_meta_boxes( $post_type, $post ) {
    $registry =& sg_pf_registry();
    foreach ( $registry as $id => $cfg ) {
        if ( sg_pf_matches( $cfg, $post ) ) {
            add_meta_box( 'sg_pf_' . $id, $cfg['title'], 'sg_pf_render_meta_box', 'page', 'normal', 'high', [ 'id' => $id ] );
        }
    }
}
add_action( 'add_meta_boxes', 'sg_pf_add_meta_boxes', 10, 2 );

function sg_pf_admin_assets( $hook ) {
    if ( ! in_array( $hook, [ 'post.php', 'post-new.php' ], true ) ) {
        return;
    }
    $post     = get_post();
    $registry =& sg_pf_registry();
    foreach ( $registry as $cfg ) {
        if ( sg_pf_matches( $cfg, $post ) ) {
            wp_enqueue_script( 'jquery-ui-sortable' );
            wp_add_inline_style( 'wp-admin', sg_pf_admin_css() );
            wp_add_inline_script( 'jquery-ui-sortable', sg_pf_admin_js(), 'after' );
            return;
        }
    }
}
add_action( 'admin_enqueue_scripts', 'sg_pf_admin_assets' );

function sg_pf_render_field_input( $name, $type, $label, $value ) {
    $label_html = '<label>' . esc_html( $label ) . '</label>';
    switch ( $type ) {
        case 'text':
        case 'icon':
            $extra = 'icon' === $type ? ' placeholder="fa-solid fa-check"' : '';
            return '<p class="sg-seo-f">' . $label_html . '<input type="text" class="widefat" name="' . esc_attr( $name ) . '" value="' . esc_attr( $value ) . '"' . $extra . '></p>';
        case 'textarea':
            return '<p class="sg-seo-f">' . $label_html . '<textarea class="widefat" rows="3" name="' . esc_attr( $name ) . '">' . esc_textarea( $value ) . '</textarea></p>';
        case 'lines':
            return '<p class="sg-seo-f">' . $label_html . '<textarea class="widefat" rows="6" name="' . esc_attr( $name ) . '">' . esc_textarea( $value ) . '</textarea></p>';
        default: // paras
            return '<p class="sg-seo-f">' . $label_html . '<textarea class="widefat" rows="8" name="' . esc_attr( $name ) . '">' . esc_textarea( $value ) . '</textarea></p>';
    }
}

function sg_pf_render_row( $cfg, $key, $field, $index, $form_row ) {
    $title = $form_row[ $field['title'] ] ?? '';
    echo '<details class="sg-seo-row"><summary><span class="dashicons dashicons-menu sg-seo-handle" title="Sürükleyerek sırala"></span>';
    echo '<strong class="sg-seo-row-title" data-empty="' . esc_attr( 'Yeni ' . lcfirst( $field['item'] ) ) . '">' . esc_html( $title ) . '</strong>';
    echo '<button type="button" class="button-link button-link-delete sg-seo-del">Sil</button></summary><div class="sg-seo-row-body">';
    foreach ( $field['sub'] as $sub ) {
        $name = $cfg['input'] . '[' . $key . '][' . $index . '][' . $sub['id'] . ']';
        echo sg_pf_render_field_input( $name, $sub['type'], $sub['label'], $form_row[ $sub['id'] ] ?? '' ); // phpcs:ignore WordPress.Security.EscapeOutput
    }
    echo '</div></details>';
}

function sg_pf_render_meta_box( $post, $box ) {
    $id  = $box['args']['id'];
    $cfg = sg_pf_cfg( $id );
    wp_nonce_field( 'sg_pf_save_' . $id, 'sg_pf_nonce_' . $id );

    $defaults = call_user_func( $cfg['defaults'] );
    $saved    = get_post_meta( $post->ID, $cfg['meta'], true );
    $saved    = is_array( $saved ) ? $saved : [];
    $tabs     = call_user_func( $cfg['fields'] );

    echo '<div class="sg-seo-box">';
    echo '<p class="description">Alanlar sayfadaki mevcut metinlerle dolu gelir. Bir alanı tamamen boşaltıp kaydederseniz varsayılan metne döner. Başlıklarda <code>*yıldız*</code> içine alınan kısım yeşil vurgulanır. Metinlerde <code>**kalın**</code> ve <code>*italik*</code> yazabilirsiniz.</p>';
    echo '<h2 class="nav-tab-wrapper sg-seo-tabs">';
    $first = true;
    foreach ( $tabs as $tab_id => $tab ) {
        printf( '<a href="#" class="nav-tab%s" data-tab="%s">%s</a>', $first ? ' nav-tab-active' : '', esc_attr( $tab_id ), esc_html( $tab['label'] ) );
        $first = false;
    }
    echo '</h2>';

    $first = true;
    foreach ( $tabs as $tab_id => $tab ) {
        echo '<div class="sg-seo-panel" data-panel="' . esc_attr( $tab_id ) . '"' . ( $first ? '' : ' hidden' ) . '>';
        $first = false;
        foreach ( $tab['fields'] as $key => $field ) {
            echo '<div class="sg-seo-block"><h3>' . esc_html( $field['label'] ) . '</h3>';

            if ( 'repeater' === $field['type'] ) {
                if ( isset( $saved[ $key ] ) && is_array( $saved[ $key ] ) && $saved[ $key ] ) {
                    $rows = array_values( $saved[ $key ] );
                } else {
                    $rows = array_map( static function ( $r ) use ( $field ) {
                        return sg_pf_row_to_form( $r, $field );
                    }, (array) ( $defaults[ $key ] ?? [] ) );
                }
                echo '<div class="sg-seo-rows" data-key="' . esc_attr( $key ) . '">';
                foreach ( $rows as $i => $row ) {
                    sg_pf_render_row( $cfg, $key, $field, $i, (array) $row );
                }
                echo '</div>';
                echo '<template class="sg-seo-tpl">';
                sg_pf_render_row( $cfg, $key, $field, '__i__', [] );
                echo '</template>';
                echo '<p><button type="button" class="button sg-seo-add">+ ' . esc_html( $field['item'] ) . ' ekle</button></p>';
            } else {
                $default = $defaults[ $key ] ?? '';
                $value   = isset( $saved[ $key ] ) && '' !== trim( (string) $saved[ $key ] )
                    ? (string) $saved[ $key ]
                    : sg_pf_text_to_form( $default, $field['type'] );
                echo sg_pf_render_field_input( $cfg['input'] . '[' . $key . ']', $field['type'], 'Metin', $value ); // phpcs:ignore WordPress.Security.EscapeOutput
            }
            echo '</div>';
        }
        echo '</div>';
    }
    echo '</div>';
}

/* ============================================================
   KAYDETME
   ============================================================ */
function sg_pf_save( $post_id ) {
    $registry =& sg_pf_registry();
    foreach ( $registry as $id => $cfg ) {
        $nonce_field = 'sg_pf_nonce_' . $id;
        if ( ! isset( $_POST[ $nonce_field ] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST[ $nonce_field ] ) ), 'sg_pf_save_' . $id ) ) {
            continue;
        }
        if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) || ! current_user_can( 'edit_post', $post_id ) ) {
            continue;
        }
        $input = isset( $_POST[ $cfg['input'] ] ) && is_array( $_POST[ $cfg['input'] ] ) ? wp_unslash( $_POST[ $cfg['input'] ] ) : []; // phpcs:ignore WordPress.Security.ValidatedSanitizedInput
        $clean = [];

        foreach ( sg_pf_field_index( $cfg ) as $key => $field ) {
            if ( ! isset( $input[ $key ] ) ) {
                continue;
            }
            if ( 'repeater' === $field['type'] ) {
                $rows = [];
                foreach ( (array) $input[ $key ] as $row ) {
                    if ( ! is_array( $row ) ) {
                        continue;
                    }
                    $clean_row = [];
                    foreach ( $field['sub'] as $sub ) {
                        $v = isset( $row[ $sub['id'] ] ) ? (string) $row[ $sub['id'] ] : '';
                        $clean_row[ $sub['id'] ] = 'icon' === $sub['type']
                            ? trim( preg_replace( '/[^a-z0-9\- ]/i', '', $v ) )
                            : sanitize_textarea_field( $v );
                    }
                    if ( implode( '', $clean_row ) !== '' ) {
                        $rows[] = $clean_row;
                    }
                }
                $clean[ $key ] = $rows;
            } else {
                $clean[ $key ] = sanitize_textarea_field( (string) $input[ $key ] );
            }
        }
        update_post_meta( $post_id, $cfg['meta'], wp_slash( $clean ) );
    }
}
add_action( 'save_post_page', 'sg_pf_save' );

/* ============================================================
   ADMIN CSS / JS
   ============================================================ */
function sg_pf_admin_css() {
    return '
    .sg-seo-box .sg-seo-tabs{margin:14px 0 0;padding-bottom:0}
    .sg-seo-panel{padding:14px 4px}
    .sg-seo-block{margin-bottom:26px;padding:14px 16px;background:#f6f7f7;border:1px solid #dcdcde;border-radius:4px}
    .sg-seo-block>h3{margin:0 0 10px;font-size:14px}
    .sg-seo-f{margin:0 0 12px}
    .sg-seo-f label{display:block;font-weight:600;margin-bottom:4px}
    .sg-seo-row{background:#fff;border:1px solid #dcdcde;border-radius:4px;margin-bottom:6px}
    .sg-seo-row>summary{display:flex;align-items:center;gap:8px;padding:8px 10px;cursor:pointer}
    .sg-seo-row-title{flex:1}
    .sg-seo-row-title:empty:before{content:attr(data-empty);color:#787c82;font-weight:400}
    .sg-seo-handle{cursor:move;color:#787c82}
    .sg-seo-row-body{padding:6px 14px 2px;border-top:1px solid #f0f0f1}
    .sg-seo-row.ui-sortable-helper{box-shadow:0 4px 12px rgba(0,0,0,.15)}
    ';
}

function sg_pf_admin_js() {
    return <<<'JS'
jQuery(function ($) {
    var $box = $('.sg-seo-box');
    if (!$box.length) return;

    $box.on('click', '.sg-seo-tabs .nav-tab', function (e) {
        e.preventDefault();
        var id = $(this).data('tab');
        var $scope = $(this).closest('.sg-seo-box');
        $scope.find('.nav-tab').removeClass('nav-tab-active');
        $(this).addClass('nav-tab-active');
        $scope.find('.sg-seo-panel').attr('hidden', true).filter('[data-panel="' + id + '"]').removeAttr('hidden');
    });

    $box.find('.sg-seo-rows').sortable({ handle: '.sg-seo-handle', axis: 'y', tolerance: 'pointer' });

    $box.on('click', '.sg-seo-add', function () {
        var $block = $(this).closest('.sg-seo-block');
        var $rows  = $block.find('.sg-seo-rows');
        var idx    = Date.now() + '' + $rows.children().length;
        var html   = $block.find('.sg-seo-tpl').html().replace(/__i__/g, idx);
        var $row   = $(html).attr('open', true);
        $rows.append($row);
        $row.find('input,textarea').first().focus();
    });

    $box.on('click', '.sg-seo-del', function (e) {
        e.preventDefault();
        e.stopPropagation();
        if (window.confirm('Bu öğe silinsin mi?')) $(this).closest('.sg-seo-row').remove();
    });

    $box.on('input', '.sg-seo-row-body input[type=text], .sg-seo-row-body textarea', function () {
        var $row = $(this).closest('.sg-seo-row');
        var $titleField = $row.find('.sg-seo-row-body [name$="[title]"], .sg-seo-row-body [name$="[a]"], .sg-seo-row-body [name$="[value]"], .sg-seo-row-body [name$="[text]"]').first();
        if ($titleField[0] === this) $row.find('.sg-seo-row-title').text(this.value);
    });
});
JS;
}

/* ============================================================
   SEO TITLE / META DESCRIPTION (alanlari tanimli sayfalar icin)
   ============================================================ */
function sg_pf_current_cfg() {
    if ( ! is_page() ) {
        return null;
    }
    $post     = get_queried_object();
    $registry =& sg_pf_registry();
    foreach ( $registry as $id => $cfg ) {
        if ( $post && call_user_func( $cfg['match'], $post ) ) {
            return [ $id, $post ];
        }
    }
    return null;
}

function sg_pf_document_title( $title ) {
    $found = sg_pf_current_cfg();
    if ( $found ) {
        $data = sg_pf_content( $found[0], $found[1]->ID );
        if ( ! empty( $data['seo_title'] ) ) {
            return $data['seo_title'];
        }
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'sg_pf_document_title', 20 );

function sg_pf_meta_description() {
    $found = sg_pf_current_cfg();
    if ( $found ) {
        $data = sg_pf_content( $found[0], $found[1]->ID );
        if ( ! empty( $data['meta_desc'] ) ) {
            echo '<meta name="description" content="' . esc_attr( $data['meta_desc'] ) . '">' . "
";
        }
    }
}
add_action( 'wp_head', 'sg_pf_meta_description', 1 );
