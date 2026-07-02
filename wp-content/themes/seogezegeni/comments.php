<?php
/**
 * comments.php – Yorum Şablonu
 */
if ( post_password_required() ) {
    echo '<p class="sg-comments-protected">' . __( 'Bu içerik parola korumalıdır. Yorumları görmek için parolayı girin.', 'seogezegeni' ) . '</p>';
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>

        <h2 class="comments-title">
            <?php
            $count = get_comments_number();
            if ( $count === '1' ) {
                printf( __( '1 Yorum — <span>%s</span>', 'seogezegeni' ), get_the_title() );
            } else {
                printf( _n( '%1$s Yorum — <span>%2$s</span>', '%1$s Yorum — <span>%2$s</span>', $count, 'seogezegeni' ), number_format_i18n($count), get_the_title() );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments([
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 56,
                'callback'    => 'seogezegeni_comment_callback',
            ]);
            ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav class="sg-comment-nav">
                <div><?php previous_comments_link( __( '&larr; Önceki yorumlar', 'seogezegeni' ) ); ?></div>
                <div><?php next_comments_link( __( 'Sonraki yorumlar &rarr;', 'seogezegeni' ) ); ?></div>
            </nav>
        <?php endif; ?>

    <?php else : ?>

        <?php if ( ! comments_open() ) : ?>
            <p class="sg-comments-closed">
                <i class="fa-solid fa-lock" aria-hidden="true"></i>
                <?php _e( 'Bu yazı için yorumlar kapalı.', 'seogezegeni' ); ?>
            </p>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    comment_form([
        'title_reply'          => __( 'Yorum Yaz', 'seogezegeni' ),
        'title_reply_to'       => __( '%s için yanıt yaz', 'seogezegeni' ),
        'cancel_reply_link'    => __( 'İptal', 'seogezegeni' ),
        'label_submit'         => __( 'Yorum Gönder', 'seogezegeni' ),
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
        'class_form'           => 'comment-form',
        'class_submit'         => 'submit sg-btn sg-btn-accent',
        'fields'               => [
            'author' => '<p class="comment-form-author"><label for="author">' . __( 'Ad *', 'seogezegeni' ) . '</label><input id="author" name="author" type="text" required autocomplete="name" /></p>',
            'email'  => '<p class="comment-form-email"><label for="email">' . __( 'E-posta *', 'seogezegeni' ) . '</label><input id="email" name="email" type="email" required autocomplete="email" /></p>',
            'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Web sitesi', 'seogezegeni' ) . '</label><input id="url" name="url" type="url" autocomplete="url" /></p>',
        ],
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Yorum *', 'seogezegeni' ) . '</label><textarea id="comment" name="comment" rows="5" required></textarea></p>',
    ]);
    ?>

</div><!-- #comments -->

