<?php
/**
 * Template Name: Inner Page
 *
 * @package WordPress
 * @subpackage Appilo
 * @since Appilo 2.2
 */

get_header();?>

<div class="full-width-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col col-lg-12 col-md-12 col-sm-12">

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
    </div>
</div>

<?php
get_footer();