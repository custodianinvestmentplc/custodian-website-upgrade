<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Appilo
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
//add_filter( 'body_class','appilo_body_classes' );
//function appilo_body_classes( $classes ) {
//
//    $classes[] = 'class-name';
//
//    return $classes;
//
//}
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function appilo_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'appilo_pingback_header' );

// Appilo Custom Comment From
function appilo_comment_form( $args = array(), $post_id = null, $review = false )
{
    if ( null === $post_id )
        $post_id = get_the_ID();
    else
        $id = $post_id;
    $commenter = wp_get_current_commenter();
    $user = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';
    $args = wp_parse_args( $args );
    if ( ! isset( $args['format'] ) )
        $args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = 'html5' === $args['format'];
    $fields   =  array(
        'author' => '<div class="col-md-4"><input id="name" placeholder="'. esc_attr__( 'Your Name', 'appilo' ).'" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="col-md-4"><input id="email" placeholder="'. esc_attr__( 'Your Email', 'appilo' ).'" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url' => '<div class="col-md-4"><input id="url" placeholder="'. esc_attr__( 'Website', 'appilo' ).'" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></div>',
    );
    $required_text = sprintf( ' ' . esc_attr__('Required fields are marked %s', 'appilo'), '<span class="required">*</span>' );
    /**
     * Filter the default comment form fields.
     *
     * @since 3.0.0
     *
     * @param array $fields The default comment fields.
     */
    $appilo_col = (is_user_logged_in()) ? 'col-md-12': '';
    $fields = apply_filters( 'comment_form_default_fields', $fields );
    $defaults = array(
        'fields'               => $fields,
        'comment_field'        => '<div class="'.$appilo_col.' col-md-12"><textarea id="comments_text" placeholder="'. esc_html__( 'Comment', 'appilo' ).'" class="form-control" name="comment" cols="45" rows="3" aria-required="true"></textarea></div>',
        'must_log_in'          => '<p class="col-md-12 col-sm-12">' . sprintf( wp_kses_post(__( 'You must be <a href="%s">logged in</a> to post a comment.', 'appilo' )), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        'logged_in_as'         => '<p class="col-md-12 col-sm-12">' . sprintf( wp_kses_post(__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'appilo' )), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        'comment_notes_before' => '<p class="col-md-12 col-sm-12">' . esc_html__( 'Your email address will not be published.', 'appilo' ) . ( $req ? $required_text : '' ) . '</p>',
        'comment_notes_after'  => '',
        'id_form'              => 'comments_form',
        'id_submit'            => 'submit',
        'title_reply'          => '',
        'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'appilo' ),
        'cancel_reply_link'    => esc_html__( 'Cancel reply', 'appilo' ),
        'label_submit'         => esc_html__( 'Post Now', 'appilo' ),
        'format'               => 'xhtml',
    );
    /**
     * Filter the comment form default arguments.
     *
     * Use 'comment_form_default_fields' to filter the comment fields.
     *
     * @since 3.0.0
     *
     * @param array $defaults The default comment form arguments.
     */
    $args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );
    ?>
    <?php if ( comments_open( $post_id ) ) : ?>
    <?php
    /**
     * Fires before the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_before' );
    ?>
    <div class="default-form comment-respond" id="respond">
        <div class="title-blog-details-page"><h3><?php esc_html_e('Post comment', 'appilo');?></h3></div>
        <h4><?php comment_form_title( $args['title_reply'], $args['title_reply_to'] ); ?> <small><?php cancel_comment_reply_link( $args['cancel_reply_link'] ); ?></small></h4>
        <?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : ?>
            <?php echo wp_kses_post($args['must_log_in']); ?>
            <?php
            /**
             * Fires after the HTML-formatted 'must log in after' message in the comment form.
             *
             * @since 3.0.0
             */
            do_action( 'comment_form_must_log_in_after' );
            ?>
        <?php else : ?>
            <form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>" class="comment-form contact-form form-horizontal1"<?php echo wp_kses_post($html5) ? ' novalidate' : ''; ?>>
                <div class="row clearfix">
                    <?php
                    /**
                     * Fires at the top of the comment form, inside the <form> tag.
                     *
                     * @since 3.0.0
                     */
                    do_action( 'comment_form_top' );
                    ?>
                    <?php if ( is_user_logged_in() ) : ?>
                        <?php
                        /**
                         * Filter the 'logged in' message for the comment form for display.
                         *
                         * @since 3.0.0
                         *
                         * @param string $args['logged_in_as'] The logged-in-as HTML-formatted message.
                         * @param array  $commenter            An array containing the comment author's username, email, and URL.
                         * @param string $user_identity        If the commenter is a registered user, the display name, blank otherwise.
                         */
                        echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity );
                        ?>
                        <?php
                        /**
                         * Fires after the is_user_logged_in() check in the comment form.
                         *
                         * @since 3.0.0
                         *
                         * @param array  $commenter     An array containing the comment author's username, email, and URL.
                         * @param string $user_identity If the commenter is a registered user, the display name, blank otherwise.
                         */
                        do_action( 'comment_form_logged_in_after', $commenter, $user_identity );
                        ?>
                    <?php else : ?>
                        <?php echo wp_kses_post($args['comment_notes_before']); ?>
                        <?php
                        /**
                         * Fires before the comment fields in the comment form.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_before_fields' );
                        foreach ( (array) $args['fields'] as $name => $field ) {
                            /**
                             * Filter a comment form field for display.
                             *
                             * The dynamic portion of the filter hook, $name, refers to the name
                             * of the comment form field. Such as 'author', 'email', or 'url'.
                             *
                             * @since 3.0.0
                             *
                             * @param string $field The HTML-formatted output of the comment form field.
                             */
                            echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
                        }
                        /**
                         * Fires after the comment fields in the comment form.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_after_fields' );
                        ?>
                    <?php endif; ?>
                    <?php
                    /**
                     * Filter the content of the comment textarea field for display.
                     *
                     * @since 3.0.0
                     *
                     * @param string $args['comment_field'] The content of the comment textarea field.
                     */
                    echo apply_filters( 'comment_form_field_comment', $args['comment_field'] );
                    ?>
                    <?php echo wp_kses_post($args['comment_notes_after']); ?>
                    <div class="col col-xs-12 submit-btn">
                        <button id="<?php echo esc_attr( $args['id_submit'] ); ?>" class="appilo-thm-btn" type="submit"><span><?php echo esc_attr( $args['label_submit'] ); ?></span></button>
                    </div>
                    <?php comment_id_fields( $post_id ); ?>
                    <?php
                    /**
                     * Fires at the bottom of the comment form, inside the closing </form> tag.
                     *
                     * @since 1.5.2
                     *
                     * @param int $post_id The post ID.
                     */
                    do_action( 'comment_form', $post_id );
                    ?>
                </div>
            </form>
        <?php endif; ?>
    </div><!-- #respond -->
    <?php
    /**
     * Fires after the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_after' );
else :
    /**
     * Fires after the comment form if comments are closed.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_comments_closed' );
endif;
}

/**
 * Appilo Breadcrumb
 */

function apppilo_the_breadcrumb() {
    if (!is_home()) {
        echo '<a href="'.home_url('home').'">';
        echo "</a>";
        if (is_category() || is_single()) {
            the_category("<i class='fa fa-angle-right'></i>");
            if (is_single()) {
                echo "<i class='fa fa-angle-right'></i>";
                echo '<span>';
                echo the_title();
                echo '</span>';
            }
        } elseif (is_page()) {
            echo '<span>';
            echo the_title();
            echo '</span>';
        }
    }
}

/**
 * Topapp Breadcrumb
 */

function topapp_the_breadcrumb() {
    if (!is_home()) {
        echo '<a href="';
        echo home_url('home');
        echo '">';
        echo "</a>";
        if (is_category() || is_single()) {
            the_category("<span class='fas fa-angle-right'></span>");
            if (is_single()) {
                echo " <span class='fas fa-angle-right'></span> ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
}

/**
 * Galaxy Breadcrumb
 */

function galaxy_the_breadcrumb() {
    echo '<li><a href="';
    echo home_url();
    echo '">';
    bloginfo('name');
    $sep = "<span class='fas fa-angle-double-right'></span>";
    echo '</a></li>' . $sep;
    if (is_category() || is_single()) {
        the_category("<span class='fas fa-angle-double-right'></span>");
        if (is_single()) {
            echo " <span class='fas fa-angle-double-right'></span> ";
            echo '<li><a href="'.get_post_permalink().'">';
            the_title();
            echo '</a></li>';
        }
    } elseif (is_page()) {
        echo the_title();
    }
}

// Appilo Pagination
function appilo_the_pagination($args = array(), $echo = 1)
{

    global $wp_query;

    $default =  array('base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ), 'format' => '?paged=%#%', 'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages, 'next_text' => '&raquo;', 'prev_text' => '&laquo;', 'type'=>'list','add_args' => false);

    $args = wp_parse_args($args, $default);


    $pagination = str_replace("<ul class='page-numbers'", '<ul class="pagination"', paginate_links($args) );

    if(paginate_links(array_merge(array('type'=>'array'),$args)))
    {
        if($echo) echo wp_kses_post($pagination);
        return $pagination;
    }
}

/**
 * Topapp Pagination
 */

if ( ! function_exists( 'post_pagination' ) ) :
    function topapp_post_pagination() {
        global $wp_query;
        $pager = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'type' => 'list',
            'next_text' => '<span class="fas fa-angle-right"></span>',
            'prev_text' => '<span class="fas fa-angle-left"></span>',
        ) );
    }
endif;

/**
 * Galaxy Pagination
 */

function galaxy_post_pagination() {

    global $wp_query;

    if ( $wp_query->max_num_pages <= 1 ) return;

    $big = 999999999; // need an unlikely integer

    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'next_text' => '<i class="fas fa-angle-double-right"></i>',
        'prev_text' => '<i class="fas fa-angle-double-left"></i>',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pg-pagination">';
        foreach ( $pages as $page ) {
            echo '<li>'.$page.'</li>';
        }
        echo '</ul>';

    }
}

// Topapp Comment Form

function topapp_comment_form( $args = array(), $post_id = null, $review = false )
{
    if ( null === $post_id )
        $post_id = get_the_ID();
    else
        $id = $post_id;
    $commenter = wp_get_current_commenter();
    $user = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';
    $args = wp_parse_args( $args );
    if ( ! isset( $args['format'] ) )
        $args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = 'html5' === $args['format'];
    $fields   =  array(
        'author' => '<div class="col-lg-4 col-md-4 col-sm-4 form-group"><input id="name" placeholder="'. esc_attr__( 'Your Name', 'appilo' ).'" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="col-lg-4 col-md-4 col-sm-4 form-group"><input id="email" placeholder="'. esc_attr__( 'Your Email', 'appilo' ).'" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url' => '<div class="col-lg-4 col-md-4 col-sm-4 form-group"><input id="url" placeholder="'. esc_attr__( 'Website', 'appilo' ).'" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></div>',
    );
    $required_text = sprintf( ' ' . esc_attr__('Required fields are marked %s', 'appilo'), '<span class="required">*</span>' );
    /**
     * Filter the default comment form fields.
     *
     * @since 3.0.0
     *
     * @param array $fields The default comment fields.
     */
    $topapp_col = (is_user_logged_in()) ? 'col-md-12': '';
    $fields = apply_filters( 'comment_form_default_fields', $fields );
    $defaults = array(
        'fields'               => $fields,
        'comment_field'        => '<div class="'.$topapp_col.' col-lg-12 col-md-12 col-sm-12 form-group"><textarea id="comments_text" placeholder="'. esc_html__( 'Comment', 'appilo' ).'" class="form-control" name="comment" cols="45" rows="3" aria-required="true"></textarea></div>',
        'must_log_in'          => '<p class="col-lg-12 col-md-12 col-sm-12 group-text">' . sprintf( wp_kses_post(__( 'You must be <a href="%s">logged in</a> to post a comment.', 'appilo' )), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        'logged_in_as'         => '<p class="col-lg-12 col-md-12 col-sm-12 group-text">' . sprintf( wp_kses_post(__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'appilo' )), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        'comment_notes_before' => '<p class="col-lg-12 col-md-12 col-sm-12 group-text">' . esc_html__( 'Your email address will not be published.', 'appilo' ) . ( $req ? $required_text : '' ) . '</p>',
        'comment_notes_after'  => '',
        'id_form'              => 'comments_form',
        'id_submit'            => 'submit',
        'title_reply'          => '',
        'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'appilo' ),
        'cancel_reply_link'    => esc_html__( 'Cancel reply', 'appilo' ),
        'label_submit'         => esc_html__( 'Post Comment', 'appilo' ),
        'format'               => 'xhtml',
    );
    /**
     * Filter the comment form default arguments.
     *
     * Use 'comment_form_default_fields' to filter the comment fields.
     *
     * @since 3.0.0
     *
     * @param array $defaults The default comment form arguments.
     */
    $args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );
    ?>
    <?php if ( comments_open( $post_id ) ) : ?>
    <?php
    /**
     * Fires before the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_before' );
    ?>
    <div class="default-form comment-respond" id="respond">
        <div class="group-title"><h4><?php esc_html_e('Post comment', 'appilo');?></h4></div>
        <h4><?php comment_form_title( $args['title_reply'], $args['title_reply_to'] ); ?> <small><?php cancel_comment_reply_link( $args['cancel_reply_link'] ); ?></small></h4>
        <?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : ?>
            <?php echo wp_kses_post($args['must_log_in']); ?>
            <?php
            /**
             * Fires after the HTML-formatted 'must log in after' message in the comment form.
             *
             * @since 3.0.0
             */
            do_action( 'comment_form_must_log_in_after' );
            ?>
        <?php else : ?>
            <form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>" class="comment-form contact-form form-horizontal1"<?php echo wp_kses_post($html5) ? ' novalidate' : ''; ?>>
                <div class="row clearfix">
                    <?php
                    /**
                     * Fires at the top of the comment form, inside the <form> tag.
                     *
                     * @since 3.0.0
                     */
                    do_action( 'comment_form_top' );
                    ?>
                    <?php if ( is_user_logged_in() ) : ?>
                        <?php
                        /**
                         * Filter the 'logged in' message for the comment form for display.
                         *
                         * @since 3.0.0
                         *
                         * @param string $args['logged_in_as'] The logged-in-as HTML-formatted message.
                         * @param array  $commenter            An array containing the comment author's username, email, and URL.
                         * @param string $user_identity        If the commenter is a registered user, the display name, blank otherwise.
                         */
                        echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity );
                        ?>
                        <?php
                        /**
                         * Fires after the is_user_logged_in() check in the comment form.
                         *
                         * @since 3.0.0
                         *
                         * @param array  $commenter     An array containing the comment author's username, email, and URL.
                         * @param string $user_identity If the commenter is a registered user, the display name, blank otherwise.
                         */
                        do_action( 'comment_form_logged_in_after', $commenter, $user_identity );
                        ?>
                    <?php else : ?>
                        <?php echo wp_kses_post($args['comment_notes_before']); ?>
                        <?php
                        /**
                         * Fires before the comment fields in the comment form.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_before_fields' );
                        foreach ( (array) $args['fields'] as $name => $field ) {
                            /**
                             * Filter a comment form field for display.
                             *
                             * The dynamic portion of the filter hook, $name, refers to the name
                             * of the comment form field. Such as 'author', 'email', or 'url'.
                             *
                             * @since 3.0.0
                             *
                             * @param string $field The HTML-formatted output of the comment form field.
                             */
                            echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
                        }
                        /**
                         * Fires after the comment fields in the comment form.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_after_fields' );
                        ?>
                    <?php endif; ?>
                    <?php
                    /**
                     * Filter the content of the comment textarea field for display.
                     *
                     * @since 3.0.0
                     *
                     * @param string $args['comment_field'] The content of the comment textarea field.
                     */
                    echo apply_filters( 'comment_form_field_comment', $args['comment_field'] );
                    ?>
                    <?php echo wp_kses_post($args['comment_notes_after']); ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                        <button id="<?php echo esc_attr( $args['id_submit'] ); ?>" class="theme-btn btn-style-one" type="submit"><span><?php echo esc_attr( $args['label_submit'] ); ?></span></button>
                    </div>
                    <?php comment_id_fields( $post_id ); ?>
                    <?php
                    /**
                     * Fires at the bottom of the comment form, inside the closing </form> tag.
                     *
                     * @since 1.5.2
                     *
                     * @param int $post_id The post ID.
                     */
                    do_action( 'comment_form', $post_id );
                    ?>
                </div>
            </form>
        <?php endif; ?>
    </div><!-- #respond -->
    <?php
    /**
     * Fires after the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_after' );
else:
    /**
     * Fires after the comment form if comments are closed.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_comments_closed' );
endif;
}

function topapp_comments_list($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <div class="comment-box" <?php comment_class(); ?> id="dynamic-comment-<?php comment_ID() ?>">
        <div class="comment">

            <div class="author-thumb">
                <a href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>"><?php get_avatar_url($comment->comment_ID)?>
                    <?php $user = wp_get_current_user(); if ( $user ) :?>
                        <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="Avatar"/>
                    <?php endif; ?></a>
            </div>
            <div class="comment-inner clearfix">
                <?php if ($comment->comment_approved == '0') : ?>
                    <div class="text"><?php esc_html('Your comment is awaiting moderation.') ?></div><br />
                <?php endif; ?>
                <div class="comment-info clearfix"><strong><?php printf(__('%s', 'appilo'), get_comment_author_link()) ?></strong><div class="comment-time"> <?php printf(__('%1$s', 'appilo'), get_comment_date(), get_comment_time()) ?> </div></div>

                <div class="text">
                    <?php comment_text(); ?>
                </div>
                <div class="comment-reply">
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
            </div>
        </div>
    </div>
<?php
}

// Galaxy Form
function galaxy_comment_form( $args = array(), $post_id = null, $review = false )
{
    if ( null === $post_id )
        $post_id = get_the_ID();
    else
        $id = $post_id;
    $commenter = wp_get_current_commenter();
    $user = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';
    $args = wp_parse_args( $args );
    if ( ! isset( $args['format'] ) )
        $args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = 'html5' === $args['format'];
    $fields   =  array(
        'author' => '<div class="col-lg-4 col-md-4 col-sm-4 form-group"><input id="name" placeholder="'. esc_attr__( 'Your Name', 'appilo' ).'" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="col-lg-4 col-md-4 col-sm-4 form-group"><input id="email" placeholder="'. esc_attr__( 'Your Email', 'appilo' ).'" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url' => '<div class="col-lg-4 col-md-4 col-sm-4 form-group"><input id="url" placeholder="'. esc_attr__( 'Website', 'appilo' ).'" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></div>',
    );
    /**
     * Filter the default comment form fields.
     *
     * @since 3.0.0
     *
     * @param array $fields The default comment fields.
     */
    $topapp_col = (is_user_logged_in()) ? 'col-md-12': '';
    $fields = apply_filters( 'comment_form_default_fields', $fields );
    $defaults = array(
        'fields'               => $fields,
        'comment_field'        => '<div class="'.$topapp_col.' col-lg-12 col-md-12 col-sm-12 form-group"><textarea id="comments_text" placeholder="'. esc_html__( 'Comment', 'appilo' ).'" class="form-control" name="comment" cols="45" rows="3" aria-required="true"></textarea></div>',
        'must_log_in'          => '<p class="col-lg-12 col-md-12 col-sm-12 group-text">' . sprintf( wp_kses_post(__( 'You must be <a href="%s">logged in</a> to post a comment.', 'appilo' )), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        'logged_in_as'         => '<p class="col-lg-12 col-md-12 col-sm-12 group-text">' . sprintf( wp_kses_post(__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'appilo' )), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
        'id_form'              => 'comments_form',
        'id_submit'            => 'submit',
        'title_reply'          => '',
        'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'appilo' ),
        'cancel_reply_link'    => esc_html__( 'Cancel reply', 'appilo' ),
        'label_submit'         => esc_html__( 'Submit', 'appilo' ),
        'format'               => 'xhtml',
    );
    /**
     * Filter the comment form default arguments.
     *
     * Use 'comment_form_default_fields' to filter the comment fields.
     *
     * @since 3.0.0
     *
     * @param array $defaults The default comment form arguments.
     */
    $args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );
    ?>
    <?php if ( comments_open( $post_id ) ) : ?>
    <?php
    /**
     * Fires before the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_before' );
    ?>
    <div class="comment-respond" id="respond">
        <h3><?php esc_html_e('Post your comment', 'appilo');?></h3>
        <h3><?php comment_form_title( $args['title_reply'], $args['title_reply_to'] ); ?> <small><?php cancel_comment_reply_link( $args['cancel_reply_link'] ); ?></small></h3>
        <?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : ?>
            <?php echo wp_kses_post($args['must_log_in']); ?>
            <?php
            /**
             * Fires after the HTML-formatted 'must log in after' message in the comment form.
             *
             * @since 3.0.0
             */
            do_action( 'comment_form_must_log_in_after' );
            ?>
        <?php else : ?>
            <form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>" class="clearfix"<?php echo wp_kses_post($html5) ? ' novalidate' : ''; ?>>
                <div class="row">
                    <?php
                    /**
                     * Fires at the top of the comment form, inside the <form> tag.
                     *
                     * @since 3.0.0
                     */
                    do_action( 'comment_form_top' );
                    ?>
                    <?php if ( is_user_logged_in() ) : ?>
                        <?php
                        /**
                         * Filter the 'logged in' message for the comment form for display.
                         *
                         * @since 3.0.0
                         *
                         * @param string $args['logged_in_as'] The logged-in-as HTML-formatted message.
                         * @param array  $commenter            An array containing the comment author's username, email, and URL.
                         * @param string $user_identity        If the commenter is a registered user, the display name, blank otherwise.
                         */
                        echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity );
                        ?>
                        <?php
                        /**
                         * Fires after the is_user_logged_in() check in the comment form.
                         *
                         * @since 3.0.0
                         *
                         * @param array  $commenter     An array containing the comment author's username, email, and URL.
                         * @param string $user_identity If the commenter is a registered user, the display name, blank otherwise.
                         */
                        do_action( 'comment_form_logged_in_after', $commenter, $user_identity );
                        ?>
                    <?php else : ?>
                        <?php echo wp_kses_post($args['comment_notes_before']); ?>
                        <?php
                        /**
                         * Fires before the comment fields in the comment form.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_before_fields' );
                        foreach ( (array) $args['fields'] as $name => $field ) {
                            /**
                             * Filter a comment form field for display.
                             *
                             * The dynamic portion of the filter hook, $name, refers to the name
                             * of the comment form field. Such as 'author', 'email', or 'url'.
                             *
                             * @since 3.0.0
                             *
                             * @param string $field The HTML-formatted output of the comment form field.
                             */
                            echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
                        }
                        /**
                         * Fires after the comment fields in the comment form.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_after_fields' );
                        ?>
                    <?php endif; ?>
                    <?php
                    /**
                     * Filter the content of the comment textarea field for display.
                     *
                     * @since 3.0.0
                     *
                     * @param string $args['comment_field'] The content of the comment textarea field.
                     */
                    echo apply_filters( 'comment_form_field_comment', $args['comment_field'] );
                    ?>
                    <?php echo wp_kses_post($args['comment_notes_after']); ?>
                    <div class="comment-respond-submit">
                        <button id="<?php echo esc_attr( $args['id_submit'] ); ?>" class="btn theme-btn" type="submit"><span><?php echo esc_attr( $args['label_submit'] ); ?></span></button>
                    </div>
                    <?php comment_id_fields( $post_id ); ?>
                    <?php
                    /**
                     * Fires at the bottom of the comment form, inside the closing </form> tag.
                     *
                     * @since 1.5.2
                     *
                     * @param int $post_id The post ID.
                     */
                    do_action( 'comment_form', $post_id );
                    ?>
                </div>
            </form>
        <?php endif; ?>
    </div><!-- #respond -->
    <?php
    /**
     * Fires after the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_after' );
else:
    /**
     * Fires after the comment form if comments are closed.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_comments_closed' );
endif;
}

function galaxy_comments_list($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <li id="dynamic-comment-<?php comment_ID() ?>">
        <div class="article">

            <div class="author-pic mr-5">

                    <?php $user = wp_get_current_user(); if ( $user ) :?>
                        <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="<?php printf(__('%s', 'appilo'), get_comment_author_link()) ?>"/>
                    <?php endif; ?>
            </div>
            <div class="details">
                <?php if ($comment->comment_approved == '0') : ?>
                    <div class="text"><?php esc_html('Your comment is awaiting moderation.') ?></div><br />
                <?php endif; ?>
                <div class="author-meta">
                    <div class="name"><h4><?php printf(__('%s', 'appilo'), get_comment_author_link()) ?></h4></div>
                    <div class="date"><span><?php printf(__('%1$s', 'appilo'), get_comment_date(), get_comment_time()) ?></span></div>
                </div>
                <div class="comment-content">
                    <?php comment_text(); ?>
                </div>
                <div class="replay">
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
            </div>
        </div>
    </li>
    <?php
}

function appilo_dynamic_template($appilo_template_path){

    $theme_layout_options = get_theme_mod('theme_layout_settings', 'layout1');

    $template_number = preg_replace('/\D/', '', $theme_layout_options);

    $template_path = get_template_part($appilo_template_path, $template_number);

    return $template_path;
}
function appilo_dynamic_header_template($appilo_header_template_path){

    $theme_layout_options = get_theme_mod('theme_header_builder', 'header1');
    $builder_switch = get_theme_mod('header_builder_switch');

    $template_number = preg_replace('/\D/', '', $theme_layout_options);

    if ($builder_switch) {
        $template_path = appilo_render_header();
    }else{
        $template_path = get_template_part($appilo_header_template_path, $template_number);
    }
    return $template_path;
}
function appilo_dynamic_footer_template($appilo_footer_template_path){

    $theme_layout_options = get_theme_mod('theme_footer_builder', 'footer1');
    $builder_switch = get_theme_mod('footer_builder_switch');

    $template_number = preg_replace('/\D/', '', $theme_layout_options);

    if ($builder_switch) {
        $template_path = appilo_render_footer();
    }else{
        $template_path = get_template_part($appilo_footer_template_path, $template_number);
    }

    return $template_path;
}
function appilo_dynamic_footer_widget($footer_number){

    $theme_layout_options = get_theme_mod('theme_footer_builder', 'footer1');

    return $theme_layout_options == $footer_number;
}

add_action( 'wp_body_open', 'appilo_add_wp_body_action' );
function appilo_add_wp_body_action() {
    $preloader_enable = get_theme_mod('appilo_preloader_switch');
    $top_to_scroll = get_theme_mod('appilo_top_to_scroll');


    if ($preloader_enable){
        echo ' <div id="dia-preloader"></div>';
    }
    if ($top_to_scroll){
    echo '<div class="up">
            <a href="#" class="dia-scrollup text-center"><i class="fas fa-angle-up"></i></a>
        </div>';
    }
}
//Dynamic Body Class
function appilo_dynamic_body(){

    $theme_layout_options = get_theme_mod('theme_layout_settings', 'layout1');

    $dynamic_body_class = [
        [
            'ltr' => 'appilo-main',
            'rtl' => 'appilo-main-rtl',
            'layout' => 'layout1',
            'id' => '',
        ],
        [
            'ltr' => 'topapp-main',
            'rtl' => '',
            'layout' => 'layout2',
            'id' => '',
        ],
        [
            'ltr' => 'app-landing-home galaxy blog-single-page',
            'rtl' => '',
            'layout' => 'layout3',
            'id' => 'home',
        ],
        [
            'ltr' => 'blog-single-page galaxy home-agency home-with-side-menu',
            'rtl' => '',
            'layout' => 'layout4',
            'id' => 'home',
        ],
        [
            'ltr' => 'blog-single-page galaxy home-cv home-with-side-menu',
            'rtl' => '',
            'layout' => 'layout5',
            'id' => 'home',
        ],
        [
            'ltr' => 'blog-single-page galaxy product-landing-home',
            'rtl' => '',
            'layout' => 'layout6',
            'id' => 'home',
        ],
        [
            'ltr' => 'appilo-saas',
            'rtl' => '',
            'layout' => 'layout7',
            'id' => 'home',
        ],
        [
            'ltr' => 'appilo-saas-classic',
            'rtl' => 'appilo-saas-classic-rtl appilo-saas-classic',
            'layout' => 'layout8',
            'id' => '',
        ],
        [
            'ltr' => 'app-eight-home',
            'rtl' => 'app-eight-home-rtl',
            'layout' => 'layout9',
            'id' => '',
        ],
        [
            'ltr' => 'appseo-home',
            'rtl' => '',
            'layout' => 'layout10',
            'id' => '',
        ],
        [
            'ltr' => 'str-home',
            'rtl' => '',
            'layout' => 'layout11',
            'id' => '',
        ],
        [
            'ltr' => 'dia-home',
            'rtl' => 'dia-home-rtl',
            'layout' => 'layout12',
            'id' => '',
        ],
        [
            'ltr' => 'appl',
            'rtl' => '',
            'layout' => 'layout13',
            'id' => '',
        ],
        [
            'ltr' => 'homePageOne app-host login-box',
            'rtl' => '',
            'layout' => 'layout14',
            'id' => '',
        ],
        [
            'ltr' => 'homePageTwo app-host',
            'rtl' => '',
            'layout' => 'layout15',
            'id' => '',
        ],
        [
            'ltr' => 'homePageThree app-host',
            'rtl' => '',
            'layout' => 'layout16',
            'id' => '',
        ],
        [
            'ltr' => 'pm-home',
            'rtl' => '',
            'layout' => 'layout17',
            'id' => '',
        ],
        [
            'ltr' => 'crm-home',
            'rtl' => '',
            'layout' => 'layout18',
            'id' => '',
        ],
        [
            'ltr' => 'smm-home',
            'rtl' => '',
            'layout' => 'layout19',
            'id' => '',
        ],
        [
            'ltr' => 'soft-m-home',
            'rtl' => '',
            'layout' => 'layout20',
            'id' => '',
        ],
        [
            'ltr' => 'seo-2-home',
            'rtl' => '',
            'layout' => 'layout21',
            'id' => '',
        ],
        [
            'ltr' => 'app-medi',
            'rtl' => '',
            'layout' => 'layout22',
            'id' => '',
        ],
        [
            'ltr' => 'appilo-default-body-class',
            'rtl' => '',
            'layout' => 'layout23',
            'id' => '',
        ],
    ];
    foreach ($dynamic_body_class as $class) {

        $layout = $class['layout'];
        $ltr_class = $class['ltr'];
        $rtl_class = $class['rtl'];
        $id = $class['id'];

        if ($theme_layout_options == $layout) {
        ?>
        <body
            <?php

            if (is_rtl()) {
                body_class($rtl_class);
            } elseif(is_page_template('layouts/demo-page-layout-3.php')) {
                body_class('appilo-demo-page-style-3');
            }else{
                body_class($ltr_class);
            }

            ?> id="<?php echo $id;?>" data-spy="scroll" data-target="nav" data-offset="50">
        <?php }
    }
}

/**
 * add class to widget
 *
 *
 */

function appilo_widget_class( $instance, $widget ) {
    if ( !isset($instance['classes']) )
        $instance['classes'] = null;
    $row = '';
    $row .= "Class:\t<input type='text' name='widget-{$widget->id_base}[{$widget->number}][classes]' id='widget-{$widget->id_base}-{$widget->number}-classes' class='widefat' value='{$instance['classes']}'/>\n";
    $row .= "</p>\n";

    echo $row;
    return $instance;
}
add_filter('widget_form_callback', 'appilo_widget_class', 10, 2);function appilo_widget_class_update( $instance, $new_instance ) {
    $instance['classes'] = $new_instance['classes'];
    return $instance;
}
add_filter( 'widget_update_callback', 'appilo_widget_class_update', 10, 2 );
function appilo_widget_class_parmas( $params ) {
    global $wp_registered_widgets;
    $widget_id    = $params[0]['widget_id'];
    $widget_obj    = $wp_registered_widgets[$widget_id];
    $widget_opt    = get_option($widget_obj['callback'][0]->option_name);
    $widget_num    = $widget_obj['params'][0]['number'];

    if ( isset($widget_opt[$widget_num]['classes']) && !empty($widget_opt[$widget_num]['classes']) )
        $params[0]['before_widget'] = preg_replace( '/class="/', "class=\"{$widget_opt[$widget_num]['classes']} ", $params[0]['before_widget'], 1 );
    return $params;
}
add_filter( 'dynamic_sidebar_params', 'appilo_widget_class_parmas' );

function appilo_cart_link(){
    $cart_page = get_page_by_title('Cart');
    $cart_page = get_option( 'woocommerce_cart_page_id', $cart_page->ID );
    return esc_url( get_page_link( $cart_page ) ) ;
}