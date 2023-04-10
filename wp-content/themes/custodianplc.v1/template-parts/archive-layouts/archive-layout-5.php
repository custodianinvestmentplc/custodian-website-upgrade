<?php
/**
 *
 * Archive Layout 6
 *
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                <div class="blog-grids">

                    <?php if ( have_posts() ) : ?>

                        <?php
                        the_archive_title( '<h3 class="sidebar-title mb-2">', '</h3>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'layouts/content', 'layout');

                        endwhile;
                        ?>
                        <div class="pagination-wrapper">
                            <?php galaxy_post_pagination();?>
                        </div>
                    <?php
                    else :

                        get_template_part( 'layouts/content-none', 'layout' );

                    endif;
                    ?>

                </div>
            </div> <!-- end blog-content -->
        </div>
    </div> <!-- end container -->
</section>