<?php
/**
 *
 * Content Layout six
 *
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 */

?>
<div class="grid">
    <div class="entry-media">
         <?php appilo_post_thumbnail(); ?>
    </div>
    <div class="entry-title">
        <div class="tag"><?php the_tags('<span>' , '</span><span>' , '</span>');?></div>
        <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
        <div class="entry-meta">
            <ul>
                <li><?php the_author_posts_link(); ?></li>
                <li><a href="<?php echo esc_url(get_month_link(get_the_date('Y'), get_the_date('m'))); ?>"><?php the_time( 'F, j Y' ); ?></a></li>
            </ul>
        </div>
    </div>
    <div class="entry-details">
        <p><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>
    </div>
</div>