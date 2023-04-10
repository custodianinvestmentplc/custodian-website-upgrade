<?php
/**
 * The template for displaying Page Layout six
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
<!-- start blog-single-content -->
<section class="blog-single-content section-padding">
    <div class="container">
        <div class="row blog-with-sidebar">
            <?php get_sidebar(); ?>
                <?php
                if ( is_active_sidebar('galaxy-sidebar')){ ?>
                        <div class="col col-lg-9 col-md-8 col-sm-12">
                    <?php } else{?>
                            <div class="col col-lg-12 col-md-8 col-sm-12">
                        <?php } ?>
                <div class="blog-grids">

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
            </div> <!-- end blog-content -->
        </div>
    </div> <!-- end container -->
</section>
