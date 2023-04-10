<?php
/**
 *
 * Single Layout five
 *
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Appilo
 */
?>
<!-- start blog-single-content -->
<section class="blog-single-content section-padding">
    <div class="container">
        <div class="row blog-with-sidebar">
            <?php get_sidebar(); ?>
                    <div class="col col-lg-9 col-md-8 col-sm-12">
                    <?php
                        while ( have_posts() ) :
                        the_post();

                        get_template_part( 'layouts/single-post', 'layout');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                        endwhile; // End of the loop.
                    ?>
                    </div>
                </div>
            </div> <!-- end container -->
</section>
<!-- end blog-single-content -->