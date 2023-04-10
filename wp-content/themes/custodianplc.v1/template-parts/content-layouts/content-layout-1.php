<?php
/**
 *
 * Content Layout One
 *
 * Template part for displaying posts
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
        <a href="<?php echo esc_url(get_month_link(get_the_date('Y'), get_the_date('m'))); ?>" class="date"><?php the_time( 'jS F, Y' ); ?> </a>
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <p><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>
        <div class="meta-info">
            <?php esc_html_e( 'By:' , 'appilo'); ?> <?php the_author_posts_link(); ?>
            <span class="sep">/</span>
            <?php the_category( ', ' ); ?>
            <span class="sep">/</span>
            <?php comments_popup_link( 'No Comments »', '1 Comment »', '% Comments »' ); ?>
        </div><!-- /.meta-info -->
        <a href="<?php the_permalink()?>" class="read-more"><span>Read More</span></a>
    </div><!-- /.text-box -->
</div><!-- /.single-blog-post-style-two -->
<?php wp_link_pages(); ?>