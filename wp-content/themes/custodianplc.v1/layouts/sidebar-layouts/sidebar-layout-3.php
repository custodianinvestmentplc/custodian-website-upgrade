<?php
/**
 *
 * Sidebar Layout Three
 *
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

if ( ! is_active_sidebar( 'galaxy-sidebar' ) ) {
    return;
}
?>

<div class="blog-sidebar col col-lg-3 col-md-4 col-sm-12">
    <?php dynamic_sidebar( 'galaxy-sidebar' ); ?>
</div>

