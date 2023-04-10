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

$ch1_footer_copyright_txt = get_theme_mod('ch1_footer_copyright_txt');
$ch1_footer_txt = get_theme_mod('ch1_footer_txt');
$ch_footer_social = get_theme_mod('ch_footer_social');
$ch_fb_link = get_theme_mod('ch_fb_link');
$ch_tw_link = get_theme_mod('ch_tw_link');
$ch_gl_link = get_theme_mod('ch_gl_link');
$ch_ln_link = get_theme_mod('ch_ln_link');
$ch_in_link = get_theme_mod('ch_in_link');


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
<footer class="host-app-footer-section">
    <div class="footer-container">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar( 'cloud_hosting_one_footer_widget' ); ?>

            </div>
        </div>
    </div> <!-- footer-container -->

    <div class="copy-right">
        <div class="container">
            <p> <?php if (!empty($ch1_footer_copyright_txt)){?>
                    <?php echo wp_kses($ch1_footer_copyright_txt, $allowed_html); ?>
                <?php } else{ ?>
                    © 2020 <span>appilo</span> All rights reserved
                <?php }?>
            </p>
            <?php if ($ch_footer_social){ ?>
            <ul class="social-icon text-right">
                <?php if ($ch_fb_link){?>
                <li><a href="<?php echo esc_url($ch_fb_link);?>"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <?php }?>
                <?php if ($ch_tw_link){?>
                <li><a href="<?php echo esc_url($ch_tw_link);?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <?php }?>
                <?php if ($ch_gl_link){?>
                <li><a href="<?php echo esc_url($ch_gl_link);?>"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                <?php }?>
                <?php if ($ch_ln_link){?>
                <li><a href="<?php echo esc_url($ch_ln_link);?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                <?php }?>
                <?php if ($ch_in_link){?>
                <li><a href="<?php echo esc_url($ch_in_link);?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <?php }?>
            </ul> <!-- social-icon -->
            <?php }?>
        </div>
    </div> <!-- copy-right -->
</footer> <!-- footer-section -->
<!-- End of author sale section
    ============================================= -->

<!-- Off-Canvas View Only -->
<span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>
<div id="offcanvas-menu" class="visible-xs visible-sm">
    <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'main_menu',
                'menu_id'        => 'main-nav',
                'depth'          => 4,
                'container'      => 'ul',
                'menu_class'     => 'menu-wrapper',
                'fallback_cb'    => '',
                'walker'         => new WP_Bootstrap_Navwalker(),
            ));
        ?>
</div>
<!-- Off-Canvas View Only -->