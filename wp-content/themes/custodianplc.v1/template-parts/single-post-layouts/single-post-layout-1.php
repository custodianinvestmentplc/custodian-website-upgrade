<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 */

?>
<div class="single-blog-post-style-two">
    <div class="img-box">
        <?php appilo_post_thumbnail(); ?>
    </div><!-- /.img-box -->
    <div class="text-box">
        <h3><?php the_title(); ?></h3>
        <div class="meta-info">
            <?php esc_html_e( 'By:' , 'appilo'); ?> <?php the_author_posts_link(); ?>
                                <span class="sep">/</span>
                                <?php the_category( ', ' ); ?>
                                <span class="sep">/</span>
                                <?php comments_popup_link( 'No Comments »', '1 Comment »', '% Comments »' ); ?>
        </div><!-- /.meta-info -->
        <p><?php the_content();?></p>
        <br>
        <div class="tags-box">
            <ul class="tags-list">
                <li>
                    <li><?php the_tags('<span class="labled">Tags: </span>' , '' , '');?></li>
                </li>
            </ul><!-- /.tags-list -->
        </div><!-- /.tags-box -->
        <br />
        <div class="social-box">
            <h4>Share this:</h4>
            <ul class="social-list">
                <li class="facebook"><a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                <li class="twitter"><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li class="pinterest"><a href="https://pinterest.com/pin/create/bookmarklet/?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fab fa-pinterest"></i>Pinterest</a></li>
                <li class="email"><a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fas fa-envelope"></i>Mail to Friends</a></li>
            </ul><!-- /.social-list -->
        </div><!-- /.social-box -->
    </div><!-- /.text-box -->
</div><!-- /.single-blog-post-style-two -->