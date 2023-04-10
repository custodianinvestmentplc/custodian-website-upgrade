<?php
/**
 * The template for displaying Page Layout Two
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Appilo
 */

?>

    <div class="sidebar-page-container">
        <div class="container">
            <div class="row clearfix">
                    <?php
                    if ( is_active_sidebar('blog-sidebar')){ ?>
                        <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <?php } else{?>
                        <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <?php } ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'layouts/content-page', 'layout');

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
                      </div>
                <!--  Sidebar -->
                <?php get_sidebar(); ?>
                </div>
            </div>
    </div>

