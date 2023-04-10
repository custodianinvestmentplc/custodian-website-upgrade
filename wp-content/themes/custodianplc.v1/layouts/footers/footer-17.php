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
<footer id="pm-footer" class="pm-footer-section">
    <div class="container">
        <div class="pm-footer-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <?php dynamic_sidebar( 'hrm_one_footer_widget' ); ?>
                </div>
                <div class="col-lg-8 col-md-12">
                        <?php dynamic_sidebar( 'hrm_two_footer_widget' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="pm-footer-copyright">
        <div class="container">
            <div class="pm-copyright-content position-relative">
                <div class="pm-footer-copyright-menu ul-li-block">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'copyright_menu',
                            'container'        => 'ul',
                        ) );
                    ?>
                </div>
                <div class="up">
                    <a href="#" class="pm-scrollup text-center"><i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- End of author sale section
    ============================================= -->