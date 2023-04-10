<?php
/**
 * The Index Layout Ten
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appv
 */

?>
    <div class="sidebar-page-container">
        <div class="container">
            <div class="row clearfix">
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-classic">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
<!--					<h1 class="sidebar-title">--><?php //single_post_title(); ?><!--</h1>-->
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'layouts/content', 'layout' );

			endwhile; ?>

                <div class="styled-pagination text-center">

                        <?php topapp_post_pagination();?>

                </div>

		<?php else :

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


