<?php
/**
 * The template for displaying the footer six
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

?>
<!-- start footer -->
<footer class="product-landing-footer" id="contact">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar( 'products_widget_footer_one' ); ?>
            <?php dynamic_sidebar( 'products_widget_footer_two' ); ?>
            <?php dynamic_sidebar( 'products_widget_footer_three' ); ?>
            <?php dynamic_sidebar( 'products_widget_footer_four' ); ?>
        </div> <!-- end row -->
    </div> <!-- end container -->
</footer>
<!-- end footer -->
</div>
<!-- end of page-wrapper -->