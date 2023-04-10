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
$seo2_footer_copyright_txt = get_theme_mod('seo2_footer_copyright_txt');

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
<section id="seo-2-footer" class="seo-2-footer-section">
    <div class="seo-2-footer-widget-wrapper position-relative">
        <div class="seo-2-footer-content-wrap">
            <div class="container">
                <div class="seo-2-footer-area">
                    <div class="row">
                        <div class="col-lg-8">
                            <?php dynamic_sidebar( 'seo2_one_footer_widget' ); ?>
                        </div>
                        <div class="col-lg-4">
                            <?php dynamic_sidebar( 'seo2_two_footer_widget' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seo-2-footer-copyright clearfix">
        <div class="container">
            <div class="seo-2-footer-copyright-menu float-left ul-li">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'copyright_menu',
                    'menu_id'        => '',
                    'depth'           => 1,
                    'container'         => 'ul',
                    'menu_class'        => '',
                    'fallback_cb'       => '',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
            <div class="seo-2-footer-copyright-text float-right">
                <?php if (!empty($seo2_footer_copyright_txt)){?>
                    <?php echo wp_kses($seo2_footer_copyright_txt, $allowed_html); ?>
                <?php } else{ ?>
                    <span>Copyright By <a href="#">Themexriver</a> - 2020</span>
                <?php }?>
            </div>
        </div>
    </div>
</section>
<!-- End of footer section
    ============================================= -->