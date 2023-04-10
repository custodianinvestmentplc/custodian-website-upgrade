<?php
/**
 * Template Name: Home Page Layout
 *
 * @package WordPress
 * @subpackage Appilo
 * @since Appilo 2.2
 */

 get_template_part('layouts/header', 'layouts');



while ( have_posts() ) :
    the_post();

        get_template_part('layouts/content-page', 'layout');

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile; // End of the loop.


get_footer();