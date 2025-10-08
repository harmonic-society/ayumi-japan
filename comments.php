<?php
/**
 * The template for displaying comments
 *
 * @package Ayumi_Japan
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( '1' === $comment_count ) {
                printf(
                    esc_html__( '1件のコメント', 'ayumi-japan' )
                );
            } else {
                printf(
                    esc_html( _n( '%s件のコメント', '%s件のコメント', $comment_count, 'ayumi-japan' ) ),
                    number_format_i18n( $comment_count )
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 60,
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation( array(
            'prev_text' => __( '← 前のコメント', 'ayumi-japan' ),
            'next_text' => __( '次のコメント →', 'ayumi-japan' ),
        ) );
        ?>

    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php esc_html_e( 'コメントは受け付けていません。', 'ayumi-japan' ); ?></p>
    <?php endif; ?>

    <?php
    comment_form( array(
        'title_reply'          => __( 'コメントを残す', 'ayumi-japan' ),
        'title_reply_to'       => __( '%sへの返信', 'ayumi-japan' ),
        'cancel_reply_link'    => __( 'キャンセル', 'ayumi-japan' ),
        'label_submit'         => __( 'コメントを送信', 'ayumi-japan' ),
        'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . __( 'コメント', 'ayumi-japan' ) . ' <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea></p>',
        'fields'               => array(
            'author' => '<p class="comment-form-author"><label for="author">' . __( '名前', 'ayumi-japan' ) . ' <span class="required">*</span></label> ' .
                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245" required /></p>',
            'email'  => '<p class="comment-form-email"><label for="email">' . __( 'メールアドレス', 'ayumi-japan' ) . ' <span class="required">*</span></label> ' .
                        '<input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes" required /></p>',
            'url'    => '<p class="comment-form-url"><label for="url">' . __( 'ウェブサイト', 'ayumi-japan' ) . '</label> ' .
                        '<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
        ),
        'class_submit'         => 'button submit',
    ) );
    ?>

</div>

<style>
/* Comments Area Styles */
.comments-area {
    margin-top: 60px;
    padding-top: 40px;
    border-top: 3px solid var(--border-color);
}

.comments-title {
    font-size: 1.8em;
    color: var(--secondary-color);
    margin-bottom: 30px;
    font-weight: 600;
}

.comment-list {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
}

.comment-list .comment {
    margin-bottom: 30px;
    padding: 25px;
    background-color: var(--bg-light);
    border-radius: 8px;
    border-left: 4px solid var(--primary-color);
}

.comment-list .children {
    list-style: none;
    margin-left: 40px;
    margin-top: 20px;
}

.comment-author {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.comment-author .avatar {
    border-radius: 50%;
    border: 2px solid var(--border-color);
}

.comment-author .fn {
    font-weight: 600;
    color: var(--secondary-color);
    font-style: normal;
}

.comment-metadata {
    font-size: 0.9em;
    color: var(--text-secondary);
    margin-bottom: 15px;
}

.comment-metadata a {
    color: var(--text-secondary);
}

.comment-metadata a:hover {
    color: var(--primary-color);
}

.comment-content {
    color: var(--text-primary);
    line-height: 1.8;
}

.comment-content p {
    margin-bottom: 15px;
}

.reply {
    margin-top: 15px;
}

.comment-reply-link {
    display: inline-block;
    padding: 8px 20px;
    background-color: var(--primary-color);
    color: var(--bg-white);
    border-radius: 4px;
    font-size: 0.9em;
    font-weight: 500;
    transition: all 0.3s ease;
}

.comment-reply-link:hover {
    background-color: var(--accent-color);
    color: var(--bg-white);
}

/* Comment Form */
.comment-respond {
    margin-top: 40px;
    padding: 30px;
    background: linear-gradient(135deg, var(--bg-light) 0%, var(--bg-white) 100%);
    border-radius: 12px;
    border: 2px solid var(--border-color);
}

.comment-reply-title {
    font-size: 1.6em;
    color: var(--secondary-color);
    margin-bottom: 25px;
    font-weight: 600;
}

.comment-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.comment-form-author,
.comment-form-email,
.comment-form-url,
.comment-form-comment {
    display: flex;
    flex-direction: column;
}

.comment-form label {
    margin-bottom: 8px;
    font-weight: 500;
    color: var(--text-primary);
}

.comment-form .required {
    color: var(--accent-color);
}

.comment-form input[type="text"],
.comment-form input[type="email"],
.comment-form input[type="url"],
.comment-form textarea {
    padding: 12px 15px;
    border: 2px solid var(--border-color);
    border-radius: 6px;
    font-size: 1em;
    font-family: inherit;
    transition: all 0.3s ease;
}

.comment-form input[type="text"]:focus,
.comment-form input[type="email"]:focus,
.comment-form input[type="url"]:focus,
.comment-form textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.1);
}

.comment-form textarea {
    min-height: 150px;
    resize: vertical;
}

.form-submit {
    margin-top: 10px;
}

.comment-form .submit {
    padding: 12px 35px;
    font-size: 1.1em;
    cursor: pointer;
}

.no-comments {
    padding: 20px;
    background-color: var(--bg-light);
    border-radius: 8px;
    text-align: center;
    color: var(--text-secondary);
}

/* Comments Navigation */
.comment-navigation {
    display: flex;
    justify-content: space-between;
    margin: 30px 0;
    padding: 20px 0;
    border-top: 1px solid var(--border-color);
    border-bottom: 1px solid var(--border-color);
}

.comment-navigation a {
    color: var(--secondary-color);
    font-weight: 500;
}

.comment-navigation a:hover {
    color: var(--primary-color);
}

/* Responsive */
@media (max-width: 768px) {
    .comment-list .children {
        margin-left: 20px;
    }

    .comment-respond {
        padding: 20px;
    }
}
</style>
