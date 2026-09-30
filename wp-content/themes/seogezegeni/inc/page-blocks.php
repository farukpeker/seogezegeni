<?php
/**
 * Hizmet sayfalari icin ortak bolum parcalari (cikti yardimcilari).
 * Tum metinler sg_pf_inline() ile guvenle basilir (**kalin**, *italik*).
 */

defined( 'ABSPATH' ) || exit;

/** Tik isaretli liste. */
function sg_pb_check_list( $items, $class = 'sg-seo-ai-list' ) {
    echo '<div class="' . esc_attr( $class ) . '">';
    foreach ( (array) $items as $item ) {
        echo '<div><i class="fa-solid fa-check" aria-hidden="true"></i>' . sg_pf_inline( $item ) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    echo '</div>';
}

/** Uyari isaretli liste (sorunlar, hatalar). */
function sg_pb_warn_list( $items ) {
    echo '<div class="sg-seo-ai-list is-warn">';
    foreach ( (array) $items as $item ) {
        echo '<div><i class="fa-solid fa-triangle-exclamation" aria-hidden="true"></i>' . sg_pf_inline( $item ) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    echo '</div>';
}

/** Numarali kart liste. */
function sg_pb_numbered( $items ) {
    echo '<ol class="sg-seo-neden-list">';
    foreach ( (array) $items as $item ) {
        echo '<li><span>' . sg_pf_inline( $item ) . '</span></li>'; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    echo '</ol>';
}

/** Dikey numarali cizelge. */
function sg_pb_vtl( $items ) {
    echo '<ol class="sg-dp-vtl">';
    foreach ( (array) $items as $item ) {
        echo '<li><span>' . sg_pf_inline( $item ) . '</span></li>'; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    echo '</ol>';
}

/** KPI / metrik karolari (2 kolon). */
function sg_pb_kpis( $items ) {
    echo '<div class="sg-dp-kpis">';
    foreach ( (array) $items as $item ) {
        echo '<div><span>' . sg_pf_inline( $item ) . '</span></div>'; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    echo '</div>';
}

/** Vurgu kutusu. */
function sg_pb_callout( $paras ) {
    if ( empty( $paras ) ) {
        return;
    }
    echo '<div class="sg-dp-callout">';
    sg_seo_p( $paras );
    echo '</div>';
}

/** Ikonlu baslikli kart (detay semasi: icon,title,paras,list_intro,list,closing). */
function sg_pb_card( $card, $tag = 'h3' ) {
    $tag = in_array( $tag, [ 'h2', 'h3', 'h4' ], true ) ? $tag : 'h3';
    echo '<article class="sg-dp-card" data-sg-reveal><header>';
    if ( ! empty( $card['icon'] ) ) {
        echo '<i class="' . esc_attr( $card['icon'] ) . '" aria-hidden="true"></i>';
    }
    echo '<' . $tag . '>' . esc_html( $card['title'] ) . '</' . $tag . '></header>'; // phpcs:ignore WordPress.Security.EscapeOutput
    sg_seo_p( $card['paras'] ?? [] );
    if ( ! empty( $card['list'] ) ) {
        if ( ! empty( $card['list_intro'] ) ) {
            echo '<p><strong>' . sg_pf_inline( $card['list_intro'] ) . '</strong></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
        }
        sg_pb_check_list( $card['list'] );
    }
    sg_seo_p( $card['closing'] ?? [] );
    echo '</article>';
}

/**
 * Sekmeli panel. $items: detay semasi. $prefix: benzersiz kimlik oneki.
 * $tag: panel basligi etiketi (h2 | h3).
 */
function sg_pb_tabs( $items, $prefix, $tag = 'h3', $label = '', $class = '' ) {
    $tag = in_array( $tag, [ 'h2', 'h3' ], true ) ? $tag : 'h3';
    echo '<div class="sg-dp-tabs' . ( $class ? ' ' . esc_attr( $class ) : '' ) . '" data-sg-tabs data-sg-reveal>';
    echo '<div class="sg-dp-tablist" role="tablist" aria-orientation="vertical" aria-label="' . esc_attr( $label ) . '">';
    foreach ( $items as $i => $item ) {
        $active = 0 === $i;
        printf(
            '<button type="button" role="tab" class="sg-dp-tab%1$s" id="%2$s-tab-%3$d" aria-selected="%4$s" aria-controls="%2$s-panel-%3$d" tabindex="%5$s">',
            $active ? ' is-active' : '',
            esc_attr( $prefix ),
            (int) $i,
            $active ? 'true' : 'false',
            $active ? '0' : '-1'
        );
        if ( ! empty( $item['icon'] ) ) {
            echo '<i class="' . esc_attr( $item['icon'] ) . '" aria-hidden="true"></i>';
        }
        echo '<span>' . esc_html( $item['title'] ) . '</span><i class="fa-solid fa-chevron-right sg-dp-tab-arrow" aria-hidden="true"></i></button>';
    }
    echo '</div><div class="sg-dp-tabpanels">';
    foreach ( $items as $i => $item ) {
        $has_side = ! empty( $item['list'] );
        printf(
            '<div class="sg-dp-tabpanel%1$s" role="tabpanel" id="%2$s-panel-%3$d" aria-labelledby="%2$s-tab-%3$d">',
            0 === $i ? ' is-active' : '',
            esc_attr( $prefix ),
            (int) $i
        );
        echo '<' . $tag . '>' . esc_html( $item['title'] ) . '</' . $tag . '>'; // phpcs:ignore WordPress.Security.EscapeOutput
        echo '<div class="sg-dp-tabpanel-body' . ( $has_side ? ' has-side' : '' ) . '"><div class="sg-seo-detail-text">';
        sg_seo_p( $item['paras'] ?? [] );
        sg_seo_p( $item['closing'] ?? [] );
        echo '</div>';
        if ( $has_side ) {
            echo '<div class="sg-seo-detail-side">';
            if ( ! empty( $item['list_intro'] ) ) {
                echo '<p><strong>' . sg_pf_inline( $item['list_intro'] ) . '</strong></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
            }
            sg_pb_check_list( $item['list'] );
            echo '</div>';
        }
        echo '</div></div>';
    }
    echo '</div></div>';
}

/** Ozel akordiyon (esit kutular, panel satirin altinda). $items: icon,title,text */
function sg_pb_acc( $items, $prefix ) {
    echo '<div class="sg-seo-acc" data-sg-acc>';
    foreach ( $items as $i => $item ) {
        $row_start = (int) floor( $i / 2 ) * 10;
        $col       = $i % 2;
        printf(
            '<button type="button" class="sg-seo-acc-item" id="%1$s-btn-%2$d" aria-expanded="false" aria-controls="%1$s-panel-%2$d" style="--od:%3$d;--om:%4$d;" data-sg-reveal>',
            esc_attr( $prefix ),
            (int) $i,
            $row_start + $col,
            $i * 2
        );
        echo '<i class="sg-detail-icon ' . esc_attr( $item['icon'] ) . '" aria-hidden="true"></i>';
        echo '<span class="sg-detail-title">' . esc_html( $item['title'] ) . '</span><i class="fa-solid fa-plus sg-detail-toggle" aria-hidden="true"></i></button>';
        printf(
            '<div class="sg-seo-acc-panel" id="%1$s-panel-%2$d" role="region" aria-labelledby="%1$s-btn-%2$d" style="--od:%3$d;--om:%4$d;"><p>%5$s</p></div>',
            esc_attr( $prefix ),
            (int) $i,
            $row_start + 5,
            $i * 2 + 1,
            sg_pf_inline( $item['text'] ) // phpcs:ignore WordPress.Security.EscapeOutput
        );
    }
    echo '</div>';
}

/** Kart seklinde adim cizelgesi. $steps: [baslik, aciklama] */
function sg_pb_steps( $steps, $cols = null ) {
    echo '<div class="sg-seo-timeline is-stepper is-cards" style="--cols:' . (int) ( $cols ? $cols : count( $steps ) ) . ';">';
    foreach ( $steps as $index => $step ) {
        echo '<article class="sg-seo-step" data-sg-reveal><span>' . esc_html( sprintf( '%02d', $index + 1 ) ) . '</span><div>';
        echo '<h3>' . esc_html( $step[0] ) . '</h3>';
        if ( ! empty( $step[1] ) ) {
            echo '<p>' . sg_pf_inline( $step[1] ) . '</p>'; // phpcs:ignore WordPress.Security.EscapeOutput
        }
        echo '</div></article>';
    }
    echo '</div>';
}

/** Icerik kartlari (metrik-kart gorunumu). $cards: icon,title,text */
function sg_pb_metric_cards( $cards ) {
    echo '<div class="sg-seo-metric-grid is-cols-3">';
    foreach ( $cards as $card ) {
        echo '<article class="sg-seo-metric-card" data-sg-reveal><i class="' . esc_attr( $card['icon'] ) . '" aria-hidden="true"></i>';
        echo '<h3>' . esc_html( $card['title'] ) . '</h3><p>' . sg_pf_inline( $card['text'] ) . '</p></article>'; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    echo '</div>';
}

/** Numarali kutu izgarasi (adimlar, karsilastirma ogeleri). */
function sg_pb_numbered_grid( $items, $cols = 3 ) {
    echo '<ol class="sg-gm-grid is-cols-' . (int) $cols . '">';
    foreach ( array_values( (array) $items ) as $i => $item ) {
        echo '<li><b>' . sprintf( '%02d', $i + 1 ) . '</b><span>' . sg_pf_inline( $item ) . '</span></li>'; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    echo '</ol>';
}

/** Tek sutunlu akordiyon: kart satiri, icerik hemen altinda acilir. $items: detay semasi. */
function sg_pb_stack_acc( $items, $prefix ) {
    echo '<div class="sg-sa" data-sg-stack>';
    foreach ( array_values( $items ) as $i => $item ) {
        $open     = 0 === $i;
        $has_side = ! empty( $item['list'] );
        echo '<div class="sg-sa-item' . ( $open ? ' is-open' : '' ) . '" data-sg-reveal>';
        printf(
            '<button type="button" class="sg-sa-head" id="%1$s-h-%2$d" aria-expanded="%3$s" aria-controls="%1$s-p-%2$d">',
            esc_attr( $prefix ),
            (int) $i,
            $open ? 'true' : 'false'
        );
        if ( ! empty( $item['icon'] ) ) {
            echo '<i class="sg-sa-icon ' . esc_attr( $item['icon'] ) . '" aria-hidden="true"></i>';
        }
        echo '<span class="sg-sa-title">' . esc_html( $item['title'] ) . '</span><i class="fa-solid fa-plus sg-sa-toggle" aria-hidden="true"></i></button>';
        printf( '<div class="sg-sa-panel" id="%1$s-p-%2$d" role="region" aria-labelledby="%1$s-h-%2$d"><div class="sg-sa-inner">', esc_attr( $prefix ), (int) $i );
        echo '<div class="sg-sa-body' . ( $has_side ? ' has-side' : '' ) . '"><div class="sg-seo-detail-text">';
        sg_seo_p( $item['paras'] ?? [] );
        sg_seo_p( $item['closing'] ?? [] );
        echo '</div>';
        if ( $has_side ) {
            echo '<div class="sg-seo-detail-side">';
            if ( ! empty( $item['list_intro'] ) ) {
                echo '<p><strong>' . sg_pf_inline( $item['list_intro'] ) . '</strong></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
            }
            sg_pb_check_list( $item['list'] );
            echo '</div>';
        }
        echo '</div></div></div></div>';
    }
    echo '</div>';
}
