<?php
/**
 *
 * Search Content Layout Two
 *
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 */

?>

<!-- News Block Two -->
<div class="news-block-two" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="inner-box">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <a href="<?php the_permalink(); ?>"><?php appilo_post_thumbnail(); ?></a>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                    <ul class="post-meta">
                        <li><span class="icon icons-calendar-2"></span><?php the_time( 'F j, Y' ); ?></li>
                        <li><span class="icon icons-user-4"></span><?php the_author_posts_link(); ?></li>
                    </ul>
                    <div class="text"><?php echo wp_trim_words( get_the_content(), 15, '..' ); ?></div>
                    <a class="read-more" href="<?php the_permalink(); ?>"><span class="icon fas fa-angle-right"></span> &nbsp; Read More</a>
                </div>
            </div>

        </div>
    </div>
</div>