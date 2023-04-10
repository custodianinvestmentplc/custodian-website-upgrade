<?php
/**
 * Template part for displaying related posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 */
?>

<div class="title-blog-details-page">
    <h3>Related News</h3>
</div><!-- /.title-blog-details-page -->
<div class="row recent-news-wrapper">
    <?php
    $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
    if( $related ) foreach( $related as $post ) {
    setup_postdata($post); ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-recent-post">
            <div class="img-box related-post-img">
                <?php appilo_post_thumbnail(); ?>
            </div><!-- /.img-box -->
            <div class="text-box">
                <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                <a href="<?php echo esc_url(get_month_link(get_the_date('Y'), get_the_date('m'))); ?>" class="date"><?php the_time( 'jS F, Y' ); ?> </a>
            </div><!-- /.text-box -->
        </div><!-- /.single-recent-post -->
    </div><!-- /.col-md-4 -->
    <?php }
    wp_reset_postdata(); ?>
</div><!-- /.row -->