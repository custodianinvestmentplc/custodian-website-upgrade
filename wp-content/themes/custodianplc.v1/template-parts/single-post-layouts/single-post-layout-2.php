<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 */

?>
    <div class="inner-box">
        <div class="image">
            <?php appilo_post_thumbnail();?>
        </div>
        <!-- Content Column -->
        <div class="lower-content">
            <ul class="post-meta">
                <li><?php the_time( 'F j, Y' ); ?></li>
                <li>by <span><?php the_author_posts_link(); ?></span></li>
            </ul>
            <div class="text">
                <?php the_content();?>
            </div>
        </div>
    </div>

    <!-- Post Share Options -->
    <div class="post-share-options">
        <div class="post-share-inner clearfix">
            <div class="float-left post-tags"><?php the_tags('<span>Tags: </span>' , '' , '')?></div>

            <ul class="float-right social-links clearfix">
                <li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>" class="fab fa-facebook"></a></li>
                <li class="twitter"><a target="_blank" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" class="fab fa-twitter"></a></li>
                <li class="dribble"><a target="_blank" href="#" class="fab fa-dribbble"></a></li>
            </ul>

        </div>
    </div>

    <!-- New Posts previous code-->
    <!--<div class="new-posts">
        <div class="clearfix">
            <a class="prev-post float-left" href="<?php /*previous_posts_link(''); */?>"><span class="fas fa-angle-double-left"></span> Previous Post</a>
            <a class="next-post float-right" href="<?php /*next_posts_link(''); */?>">Next Post <span class="fas fa-angle-double-right"></span></a>
        </div>
    </div>-->
<!-- New Posts New code-->
<div class="new-posts">
    <div class="clearfix">
        <div class="prev-post float-left">
            <span class="fas fa-angle-double-left"></span> <?php previous_post_link('%link','Previous Post'); ?>
        </div>
        <div class="next-post float-right">
            <?php next_post_link( '%link','Next Post'); ?> <span class="fas fa-angle-double-right"></span>
        </div>
    </div>
</div>