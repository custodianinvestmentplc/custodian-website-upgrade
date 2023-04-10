<?php
/**
 * The Index Layout four
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 *
 */

?>

<!-- start blog-single-content -->
<section class="blog-single-content section-padding">
    <div class="container">
        <div class="row blog-with-sidebar">
            <?php get_sidebar(); ?>
            <div class="col col-lg-9 col-md-8 col-sm-12">
                <div class="blog-grids">

                        <?php
                        if ( have_posts() ) :

                            if ( is_home() && ! is_front_page() ) :
                                ?>

                            <?php
                            endif;
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
                                ?>
                            <?php
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

