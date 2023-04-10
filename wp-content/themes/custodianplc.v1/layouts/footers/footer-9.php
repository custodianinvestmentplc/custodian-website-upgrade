<?php
/**
 * The template for displaying the footer nine
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

$app_showcase_footer_animate_bg_1 = get_theme_mod('app_showcase_footer_animate_bg_1', 'url');
$app_showcase_footer_animate_bg_2 = get_theme_mod('app_showcase_footer_animate_bg_2', 'url');
$app_showcase_footer_animate_bg_3 = get_theme_mod('app_showcase_footer_animate_bg_3', 'url');
$app_showcase_footer_copyright_txt = get_theme_mod('app_showcase_footer_copyright_txt');


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

<!-- Start of Footer  section
    ============================================= -->
<section id="ei-footer" class="ei-footer-section position-relative">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar( 'app_showcase_footer_widget' ); ?>
        </div>
    </div>
    <div class="ei-footer-copyright">
        <div class="container">
            <div class="ei-footer-copyright-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ei-copyright-text">
                            <p>
                                <?php if (!empty($app_showcase_footer_copyright_txt)){?>
                                <?php echo wp_kses($app_showcase_footer_copyright_txt, $allowed_html); ?>
                                <?php } else{ ?>
                                    © 2020 <a href="#">Themexriver</a>
                                <?php }?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="ei-copyright-menu ul-li-block">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'copyright_menu',
                                'menu_id'        => '',
                                'depth'           => 4,
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
    </div>
    <div class="ei-footer-shape1 position-absolute" data-parallax='{"x" : 60}'><img src="<?php echo esc_url( $app_showcase_footer_animate_bg_1 );?>" alt></div>
    <div class="ei-footer-shape2 position-absolute" data-parallax='{"y" : 60}'><img src="<?php echo esc_url( $app_showcase_footer_animate_bg_2 );?>" alt></div>
    <div class="ei-footer-shape3 position-absolute"><img src="<?php echo esc_url( $app_showcase_footer_animate_bg_3 );?>" alt></div>
</section>
<!-- End of Footer  section
    ============================================= -->