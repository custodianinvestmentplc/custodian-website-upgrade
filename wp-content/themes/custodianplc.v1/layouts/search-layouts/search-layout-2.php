<?php
/**
 *
 * Search Layout Two
 *
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Appilo
 */


?>


    <div class="sidebar-page-container">
    <div class="auto-container">
    <div class="row clearfix">
    <div class="content-side col-lg-8 col-md-12 col-sm-12">
    <div class="blog-classic">

		<?php if ( have_posts() ) : ?>

				<h1 class="sidebar-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'appilo' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'layouts/content-search', 'layout' );

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
