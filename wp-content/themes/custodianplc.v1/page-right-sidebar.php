<?php
/**
 * Template Name: Right Sidebar
 *
 * @package WordPress
 * @subpackage Appilo
 * @since Appilo 2.2
 */

get_header();

?>

    <section class="blog-list blog-style-two blog-details-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="has-right-sidebar">


                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'layouts/content-page', 'layout' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>


                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

<?php
get_footer();