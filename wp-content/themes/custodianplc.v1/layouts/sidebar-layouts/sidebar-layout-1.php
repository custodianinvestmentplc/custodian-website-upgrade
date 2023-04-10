<?php
/**
 *
 * Sidebar Layout One
 *
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

if ( ! is_active_sidebar( 'appilo-sidebar' ) ) {
    return;
}
?>

<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="sidebar sidebar-right">
        <?php dynamic_sidebar( 'appilo-sidebar' ); ?>
    </div>
</div>
