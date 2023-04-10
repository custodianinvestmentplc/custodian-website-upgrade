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

$seo2_menu_btn_txt = get_theme_mod('seo2_menu_btn_txt');
$seo2_menu_btn_link = get_theme_mod('seo2_menu_btn_link');
$seo2_header_language = get_theme_mod('seo2_header_language');

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
<!-- Start of header section
    ============================================= -->
<header id="seo-2-header" class="seo-2-main-header">
    <div class="container">
        <div class="seo-2-header-content-wrap position-relative">
            <div class="seo-2-main-header-content clearfix">
                <div class="seo-2-brand-logo float-left">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                            <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                        <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri()?>/img/logo-2.png" alt="Default Logo" />
                        <?php } ?>
                    </a>
                </div>
                <div class="seo-2-main-menu-item float-right">
                    <nav class="seo-2-main-navigation  clearfix ul-li">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'menu_id'        => 'main-nav',
                            'depth'           => 4,
                            'container'         => 'ul',
                            'menu_class'        => 'navbar-nav text-capitalize',
                            'fallback_cb'       => '',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </nav>
                    <?php if ($seo2_menu_btn_link){ ?>
                        <div class="seo-2-header-btn text-center text-capitalize float-right">
                            <a href="<?php echo esc_url($seo2_menu_btn_link)?>"><?php echo wp_kses($seo2_menu_btn_txt, $allowed_html)?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Desktop Menu -->
            <div class="seo-2-mobile_menu position-relative">
                <div class="seo-2-mobile_menu_button seo-2-open_mobile_menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="seo-2-mobile_menu_wrap">
                    <div class="mobile_menu_overlay seo-2-open_mobile_menu"></div>
                    <div class="seo-2-mobile_menu_content">
                        <div class="seo-2-mobile_menu_close seo-2-open_mobile_menu">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="m-brand-logo text-center">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                    <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                                <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                    <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri()?>/img/logo-2.png" alt="Default Logo" />
                                <?php } ?>
                            </a>
                        </div>
                        <nav class="seo-2-mobile-main-navigation  clearfix ul-li">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                                'menu_id'        => 'm-main-nav',
                                'depth'           => 4,
                                'container'         => 'ul',
                                'menu_class'        => 'navbar-nav text-capitalize clearfix',
                                'fallback_cb'       => '',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
                <!-- /Mobile-Menu -->
            </div>
        </div>
    </div>
</header>

<!-- End of header section
    ============================================= -->
<!-- Start of banner section
    ============================================= -->
<section id="seo-2-banner" class="seo-2-banner-section seo2-default-header position-relative" data-background="<?php echo get_template_directory_uri()?>/img/seo2/banner/bn-bg.png">
    <span class="seo-2-banner-shape position-absolute shape1"><img src="<?php echo get_template_directory_uri()?>/img/seo2/banner/bn-sh1.png" alt></span>
    <span class="seo-2-banner-shape position-absolute  shape2"><img src="<?php echo get_template_directory_uri()?>/img/seo2/banner/bn-sh2.png" alt></span>
    <div class="container">
        <div class="seo-2-banner-content text-center">
            <div class="seo-2-banner-text seo-2-headline wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                <h1><?php wp_title('');?></h1>
                <div class="breadcumb">
                    <?php apppilo_the_breadcrumb(); ?>
                </div><!-- /.breadcumb -->
            </div>
        </div>
    </div>

</section>
<!-- End of banner section
    ============================================= -->