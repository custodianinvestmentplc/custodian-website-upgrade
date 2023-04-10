<?php
/**
 *
 * Archive Layout 1
 *
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

			<header class="widget-title">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

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