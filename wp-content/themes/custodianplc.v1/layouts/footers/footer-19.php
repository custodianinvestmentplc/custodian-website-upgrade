<?php
/**
 * The template for displaying the footer 12
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

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

<!-- Start of footer section
    ============================================= -->
<footer id="smm-footer" class="smm-footer-section">
    <div class="container">
        <div class="smm-footer-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <?php dynamic_sidebar( 'smm_one_footer_widget' ); ?>
                </div>
                <div class="col-lg-8 col-md-12">
                    <?php dynamic_sidebar( 'smm_two_footer_widget' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="smm-footer-copyright">
        <div class="container">
            <div class="smm-copyright-content position-relative">
                <div class="smm-footer-copyright-menu">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'copyright_menu',
                        'container'        => 'ul',
                    ) );
                    ?>
                </div>
                <div class="up">
                    <a href="#" class="smm-scrollup text-center"><i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of footer section
    ============================================= -->