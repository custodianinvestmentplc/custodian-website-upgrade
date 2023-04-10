<?php
/**
 *
 * Search Layout One
 *
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Appilo
 */

?>

    <section class="blog-list blog-style-two">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="has-right-sidebar">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'appilo' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
                get_template_part( 'layouts/content', 'layout');

			endwhile;
            ?>
            <div class="blog-post-pagination">
                <?php appilo_the_pagination(); ?>
            </div>
        <?php

		else :

            get_template_part( 'layouts/content-none', 'layout' );

        endif;
		?>

                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
