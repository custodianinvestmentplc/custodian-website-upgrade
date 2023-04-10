<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Appilo
 */

?>

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    <div class="container">
    <div class="row clearfix">

    <!--Content Side-->
    <div class="content-side col-lg-8 col-md-12 col-sm-12">
    <div class="blog-detail">

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
       <?php get_sidebar();?>
    </div>
    </div>
    </div>

