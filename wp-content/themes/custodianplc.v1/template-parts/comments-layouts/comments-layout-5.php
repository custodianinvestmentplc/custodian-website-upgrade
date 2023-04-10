<?php
/**
 *
 *
 * The template for displaying Comments Layout five
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php $protocol = is_ssl() ? 'https://' : 'http://';?>
<div itemscope itemtype="<?php echo esc_attr($protocol);?>schema.org/Comment" id="comments" class="comments">
    <?php if ( have_comments() ) : ?>

            <ol>
                <?php
                wp_list_comments(
                        array(
                            'callback' => 'galaxy_comments_list',
                            'style'     => 'ol',
                        )

                );
                ?>
            </ol>

            <?php
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
                <nav class="navigation comment-navigation clearfix" role="navigation">
                    <h1 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'appilo' ); ?></h1>
                    <div class="nav-previous float-left"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'appilo' ) ); ?></div>
                    <div class="nav-next float-right"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'appilo' ) ); ?></div>
                </nav><!-- .comment-navigation -->
            <?php endif; // Check for comment navigation ?>
            <?php if ( ! comments_open() && get_comments_number() ) : ?>
                <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'appilo' ); ?></p>
            <?php endif; ?>

    <?php endif;?>

    <?php if ( comments_open()) : ?>
        <!-- Comment Form -->
        <div class="comment-respond">
            <!-- Heading -->
                <?php galaxy_comment_form(); ?>
        </div>
    <?php endif; ?>

</div><!-- #comments -->