<?php
/**
 *
 * Sidebar Layout Two
 *
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}
?>

<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="topapp-sidebar padding-left">
	    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
    </aside>
</div>