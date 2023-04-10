<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

$favicon = get_theme_mod('favicon_logo_control');
$main_logo = get_theme_mod('appilo_main_logo_settings' , 'url');
$svg_main_logo = get_theme_mod('appilo_svg_main_logo_settings' , 'url');
$mobile_logo = get_theme_mod('mobile_logo_control', 'url');

$ch2_header_social = get_theme_mod('ch2_header_social');
$ch2_fb_link = get_theme_mod('ch2_fb_link');
$ch2_tw_link = get_theme_mod('ch2_tw_link');
$ch2_gl_link = get_theme_mod('ch2_gl_link');
$ch2_ln_link = get_theme_mod('ch2_ln_link');
$ch2_in_link = get_theme_mod('ch2_in_link');

$ch2_header_menu = get_theme_mod( 'ch2_header_menu' );
$ch2_top_header_switch = get_theme_mod( 'ch2_top_header_switch' );
$ch2_bottom_header = get_theme_mod( 'ch2_bottom_header' );

$ch2_menu_btn_txt = get_theme_mod('ch2_menu_btn_txt');
$ch2_menu_btn_link = get_theme_mod('ch2_menu_btn_link');

$ch2_top_phn = get_theme_mod('ch2_top_phn');
$ch2_top_mail = get_theme_mod('ch2_top_mail');

$allowed_html = [
    'a' => [
        'href' => [],
        'title' => [],
    ],
    'span' => [],
    'br' => [],
    'b' => [],
    'em' => [],
    'i' => [
        'class' => [],
    ],
    'strong' => [],
];
?>
<!-- Start of header section section
============================================= -->
<header class="host-app-header-section">
    <?php if ($ch2_top_header_switch){ ?>
        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="header-left-bar">
                            <ul class="contact-wrapper">
                                <?php if ($ch2_top_phn){?>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo wp_kses($ch2_top_phn, $allowed_html);?></li>
                                <?php }?>
                                <?php if ($ch2_top_mail){?>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo wp_kses($ch2_top_mail, $allowed_html);?></li>
                                <?php }?>
                            </ul>
                        </div> <!-- header-left-bar -->
                    </div>

                    <div class="col-sm-6">
                        <div class="header-right-bar text-right">
                            <?php if ($ch2_header_social){ ?>
                                <ul class="social-icon inline-block">
                                    <?php if ($ch2_fb_link){?>
                                        <li><a href="<?php echo esc_url($ch2_fb_link);?>"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <?php }?>
                                    <?php if ($ch2_tw_link){?>
                                        <li><a href="<?php echo esc_url($ch2_tw_link);?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <?php }?>
                                    <?php if ($ch2_gl_link){?>
                                        <li><a href="<?php echo esc_url($ch2_gl_link);?>"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                    <?php }?>
                                    <?php if ($ch2_ln_link){?>
                                        <li><a href="<?php echo esc_url($ch2_ln_link);?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                    <?php }?>
                                    <?php if ($ch2_in_link){?>
                                        <li><a href="<?php echo esc_url($ch2_in_link);?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <?php }?>
                                </ul> <!-- social-icon -->
                            <?php }?>
                            <?php if ($ch2_header_menu):?>
                                <ul class="access inline-block">
                                    <?php foreach( $ch2_header_menu as $ch2_header_menu_item ) : ?>
                                        <li><i class="<?php echo esc_html($ch2_header_menu_item['icon']); ?>" aria-hidden="true"></i></li>
                                        <li><a href="<?php echo esc_url($ch2_header_menu_item['link_url']); ?>"><?php echo esc_html($ch2_header_menu_item['link_text']); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif;?>
                        </div> <!-- header-right-bar -->
                    </div>
                </div> <!-- top-bar -->
            </div>
        </div> <!-- top-bar -->
    <?php } ?>

    <nav class="navbar navbar-inverse hidden-sm hidden-xs  position-relative">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri()?>/img/cloud-hosting/logo.png" alt="Default Logo" />
                    <?php } ?>
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'menu_id'        => 'main-nav',
                    'depth'           => 4,
                    'container'         => 'ul',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => '',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ));
                ?>

                <?php if ($ch2_menu_btn_link){ ?>
                    <div class="chat-box inline-block">
                        <button  onclick="window.location.href='<?php echo esc_url($ch2_menu_btn_link)?>';" class="btn btn-primary"><?php echo wp_kses($ch2_menu_btn_txt, $allowed_html)?></button>
                    </div>
                <?php }?>
            </div><!--/.nav-collapse -->
        </div> <!-- container -->
    </nav>

    <?php if ($ch2_bottom_header){ ?>
        <div class="feature hidden-sm hidden-xs">
            <div class="container">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main_bottom_menu',
                    'menu_id'        => 'main-bottom-nav',
                    'depth'           => 4,
                    'container'         => 'ul',
                    'menu_class'        => 'feature-wrapper text-center',
                    'fallback_cb'       => '',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </div> <!-- feature -->
    <?php } ?>

</header> <!-- header-section -->
<!-- End of Header section
    ============================================= -->