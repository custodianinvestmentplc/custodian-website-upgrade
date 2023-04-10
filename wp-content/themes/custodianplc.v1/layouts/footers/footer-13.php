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

$appl_footer_copyright_txt = get_theme_mod('appl_footer_copyright_txt');
$appl_footer_txt = get_theme_mod('appl_footer_txt');


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
<section id="page-show" class="page-showcase relative-position">
    <div class="page-list">
        <div class="copyright-text clearfix">
            <div class="container">
                <div class="col-lg-6 col-sm-12 float-left pera-content">
                    <p class="designed-by">
                        <?php if (!empty($appl_footer_txt)){?>
                            <?php echo wp_kses($appl_footer_txt, $allowed_html); ?>
                        <?php } else{ ?>
                            Designed with <i class="fas fa-heart"></i> by <a target="_blank" href="https://themexriver.com">themexriver</a>
                        <?php }?>
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12 float-right pera-content">
                    <p class="copyright-content text-right">
                        <?php if (!empty($appl_footer_copyright_txt)){?>
                            <?php echo wp_kses($appl_footer_copyright_txt, $allowed_html); ?>
                        <?php } else{ ?>
                            © 2020 <span>appilo</span> All rights reserved
                        <?php }?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of author sale section
    ============================================= -->