<?php
/**
 * The template for displaying the footer 11
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */


$app_startup_footer_copyright_txt = get_theme_mod('app_startup_footer_copyright_txt');


$allowed_html = [
    'a' => [
        'href' => [],
        'title' => [],
    ],
    'br' => [],
    'em' => [],
    'strong' => [],
];
?>
<!-- Start of footer  section
    ============================================= -->
<footer id="str-footer" class="str-footer-area">
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <?php dynamic_sidebar( 'app_startup_footer_widget' ); ?>
            </div>
        </div>
    </div>
    <div class="str-copywright-text text-center">
        <?php if (!empty($app_startup_footer_copyright_txt)){?>
            <?php echo wp_kses($app_startup_footer_copyright_txt , $allowed_html);?>
        <?php } else{ ?>
            2020 © All rights reserved by  <a href="#">Themexriver</a>
        <?php }?>
    </div>
</footer>
<!-- End of footer  section
    ============================================= -->