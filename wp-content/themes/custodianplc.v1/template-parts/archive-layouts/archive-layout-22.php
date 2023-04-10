<?php
/**
 *
 * Archive Layout Eight
 *
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 */

?>

<div class="sidebar-page-container">
    <div class="container">
        <div class="row clearfix">
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-classic">

                    <?php if ( have_posts() ) : ?>

                            <?php
                                the_archive_title( '<h1 class="sidebar-title">', '</h1>' );
                                the_archive_description( '<div class="text">', '</div>' );
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
                            get_template_part( 'layouts/content', 'layout' );

                        endwhile;

                        ?>
                        <div class="styled-pagination text-center">

                            <?php topapp_post_pagination();?>

                        </div>
                    <?php

                    else :

                        get_template_part( 'layouts/content-none', 'layout' );


                    endif;
                    ?>
                </div>
            </div>
            <!--  Sidebar -->
            <?php get_sidebar(); ?>

        </div>
    </div>
</div>