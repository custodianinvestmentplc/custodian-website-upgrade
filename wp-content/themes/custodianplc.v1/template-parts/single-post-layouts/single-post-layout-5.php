<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 */

?>

<div class="post">
    <div class="post-title-meta">
        <h2><?php the_title(); ?></h2>
        <ul class="meta-info">
            <li><a href="">By: </a><?php the_author_posts_link(); ?></li>
            <li><a href="#"><i class="fas fa-clock"></i> <?php the_time( 'F, j Y' ); ?></a></li>
            <li><a href="#"><i class="fas fa-comments"></i> <?php comments_popup_link( 'No Comments', '1 Comment', '% Comments' ); ?></a></li>
        </ul>
    </div>
    <div class="post-body">
           <?php appilo_post_thumbnail(); ?>
        <p><?php the_content(); ?></p>
    </div>
</div> <!-- end post -->

<div class="tag-share">
    <div>
        <?php the_tags('<span>Tags: </span><ul class="tag"><li>' , ' </li><li>' , '</li></ul>');?>
    </div>
    <div>
        <span>Share:</span>
        <ul class="share">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</div> <!-- end tag-share -->