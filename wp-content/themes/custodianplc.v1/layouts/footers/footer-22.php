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
$medi_footer_copyright_txt = get_theme_mod('medi_footer_copyright_txt');

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
<footer id="app-medi-footer" class="app-medi-footer position-relative">
    <div class="medi-app-background_overlay"></div>
    <div class="container">
        <div class="medi-app-footer-widget-content">
            <div class="row">
                <?php dynamic_sidebar( 'medical_footer_widget' ); ?>
            </div>
        </div>
    </div>
    <div class="app-medi-footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="app-medi-copyright-text">
                        <?php if (!empty($medi_footer_copyright_txt)){?>
                            <?php echo wp_kses($medi_footer_copyright_txt, $allowed_html); ?>
                        <?php } else{ ?>
                            <span>Copyright By <a href="#">Themexriver</a> - 2020</span>
                        <?php }?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app-medi-footer-menu ul-li">
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
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of footer section
    ============================================= -->