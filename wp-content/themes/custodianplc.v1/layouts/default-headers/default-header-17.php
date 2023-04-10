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

$hrm_menu_btn_txt = get_theme_mod('hrm_menu_btn_txt');
$hrm_menu_btn_link = get_theme_mod('hrm_menu_btn_link');

$hrm_menu_support_txt = get_theme_mod('hrm_menu_support_txt');
$hrm_menu_support_mail = get_theme_mod('hrm_menu_support_mail');

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

<header id="pm-header" class="hrm-default-header pm-main-header header-type-one position-relative">
    <div class="container">
        <div class="pm-main-header-content clearfix">
            <div class="pm-logo float-left">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri()?>/img/hrm/logo/logo1.png" alt="Default Logo" />
                    <?php } ?>
                </a>
            </div>
            <?php if(!empty($hrm_menu_support_txt | $hrm_menu_support_mail)){ ?>
            <div class="pm-header-support d-inline-block position-relative">
                <span><?php echo wp_kses($hrm_menu_support_txt, $allowed_html);?></span>
                <a href="mailto:<?php echo esc_url($hrm_menu_support_mail);?>"><?php echo wp_kses($hrm_menu_support_mail, $allowed_html);?></a>
            </div>
            <?php }?>
            <div class="pm-main-menu-item float-right">
                <?php if ($hrm_menu_btn_link){ ?>
                    <div class="pm-header-btn text-center text-capitalize float-right">
                        <a href="<?php echo esc_url($hrm_menu_btn_link)?>"><?php echo wp_kses($hrm_menu_btn_txt, $allowed_html)?></a>
                    </div>
                <?php }?>
                <nav class="pm-main-navigation float-right clearfix ul-li">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'menu_id'        => 'main-nav',
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
        <!-- /desktop menu -->
        <div class="pm-mobile_menu relative-position">
            <div class="pm-mobile_menu_button pm-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="pm-mobile_menu_wrap">
                <div class="mobile_menu_overlay pm-open_mobile_menu"></div>
                <div class="pm-mobile_menu_content">
                    <div class="pm-mobile_menu_close pm-open_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != '') { ?>
                                <img src="<?php echo esc_url( $mobile_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri()?>/img/hrm/logo/f-logo1.png" alt="Default Mobile Logo" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav class="pm-mobile-main-navigation  clearfix ul-li">
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
</header>
<!-- End of Header section
    ============================================= -->