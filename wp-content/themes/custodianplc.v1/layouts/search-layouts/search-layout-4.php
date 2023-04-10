<?php
/**
 *
 * Search Layout four
 *
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

