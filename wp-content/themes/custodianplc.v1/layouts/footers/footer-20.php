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

<!-- Start of Footer section
    ============================================= -->
<section id="soft-m-footer" class="soft-m-footer-section">
    <div class="soft-m-footer-content">
        <div class="container">
            <div class="soft-m-footer-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <?php dynamic_sidebar( 'soft_m_one_footer_widget' ); ?>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <?php dynamic_sidebar( 'soft_m_two_footer_widget' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Footer section
    ============================================= -->