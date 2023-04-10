<?php
/**
 * The template for displaying the footer four
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

?>
<!-- start site-footer-->
<footer class="site-footer">
    <div class="container">
        <div class="row">
                <?php dynamic_sidebar( 'galaxy_footer_one' ); ?>

                <?php dynamic_sidebar( 'galaxy_footer_two' ); ?>

                <?php dynamic_sidebar( 'galaxy_footer_three' ); ?>
        </div> <!-- end row -->
    </div> <!-- end container -->
</footer>
<!-- end site-footer-->
</div>
<!-- end of page-wrapper -->