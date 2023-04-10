<?php
/**
 *
 * Single Layout One
 *
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Appilo
 */
?>
<section class="blog-list blog-style-two blog-details-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="has-right-sidebar">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'layouts/single-post', 'layout');


                        get_template_part( 'template-parts/related-post-layouts/related-post');
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>