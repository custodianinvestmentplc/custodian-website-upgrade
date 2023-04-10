<!doctype html>
<html <?php language_attributes(); ?>>
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

$menu_btn_txt_10 = get_theme_mod('appilo_menu_button_text_settings_10');
$menu_btn_link_10 = get_theme_mod('appilo_menu_button_link_settings_10', 'url');

$appilo_seo_socials = get_theme_mod('appilo_seo_socials');
$appilo_seo_header_side_content = get_theme_mod('appilo_seo_header_side_content');
$appilo_seo_header_side_copyright = get_theme_mod('appilo_seo_header_side_copyright');
$appilo_seo_header_side_social_title = get_theme_mod('appilo_seo_header_side_social_title');
$appilo_seo_header_side_enable = get_theme_mod('appilo_seo_header_side_enable');

$allowed_html = [
    'a' => [
        'href' => [],
        'title' => [],
    ],
    'span' => [],
    'br' => [],
    'b' => [],
    'em' => [],
    'strong' => [],
];

if(get_post_meta(get_the_ID(), 'appilo_meta', true)) {
	$header_menu_meta = get_post_meta(get_the_ID(), 'appilo_meta', true);
} else {
	$header_menu_meta = array();
}
if( array_key_exists( 'multi_page_menu', $header_menu_meta )) {
	$multi_page_menu = $header_menu_meta['multi_page_menu'];
} else {
	$multi_page_menu = '';
}
?>
<body <?php body_class('appseo-home'); ?> data-spy="scroll" data-target=".appseo-main-navigation" data-offset="50">


<!-- Start of header section
    ============================================= -->
<header id="appseo-header" class="appseo-main-header">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="appseo-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                            <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                        <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri()?>/img/appilo-seo/logo/logo1.png" alt="Default Logo" />
                        <?php } ?>
                    </a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="appseo-menu-wrapper float-right">
                    <nav class="appseo-main-navigation clearfix ul-li">

                        <?php
                        if (1 == $multi_page_menu){
	                        wp_nav_menu( array(
		                        'theme_location' => 'main_menu',
		                        'menu_id'        => 'appseo-main-nav',
		                        'depth'           => 4,
		                        'container'         => 'ul',
		                        'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                        'fallback_cb'       => '',
		                        'walker'          => new WP_Bootstrap_Navwalker(),
	                        ) );
                        }elseif(2 == $multi_page_menu){
	                        wp_nav_menu( array(
		                        'theme_location' => 'multi_page_menu',
		                        'menu_id'        => 'appseo-main-nav',
		                        'depth'           => 4,
		                        'container'         => 'ul',
		                        'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                        'fallback_cb'       => '',
		                        'walker'          => new WP_Bootstrap_Navwalker(),
	                        ) );
                        }else{
	                        wp_nav_menu( array(
		                        'theme_location' => 'main_menu',
		                        'menu_id'        => 'appseo-main-nav',
		                        'depth'           => 4,
		                        'container'         => 'ul',
		                        'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                        'fallback_cb'       => '',
		                        'walker'          => new WP_Bootstrap_Navwalker(),
	                        ) );
                        }
                        ?>
                    </nav>

            <?php if ($appilo_seo_header_side_enable) { ?>
                    <div class="appseo-sidebar-button">
                        <div class="sidebar-appseo-toggle open_side_area">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="wide_side_inner">
                        <div class="side_overlay open_side_area"></div>
                        <div class="side_inner_content text-center">
                            <div class="close_btn open_side_area">Back <i class="fas fa-arrow-right"></i></div>
                            <div class="side_inner_logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri()?>/img/appilo-seo/logo/logo1.png" alt="Default Logo" />
                                    <?php } ?>
                                </a>
                            </div>
                            <p>
                                <?php echo wp_kses( $appilo_seo_header_side_content, $allowed_html ); ?>
                            </p>
                            <div class="side_contact">
                                <div class="social_widget ul-li appseo-headline relative-position">
                                    <h3> <?php echo wp_kses( $appilo_seo_header_side_social_title, $allowed_html ); ?></h3>
                                    <ul>
                                        <?php if( $appilo_seo_socials) {
                                            foreach ($appilo_seo_socials as $appilo_seo_social) : ?>
                                                <li><a href="<?php echo esc_url($appilo_seo_social['social_link']); ?>"><i class="<?php echo esc_attr($appilo_seo_social['icon_class']); ?>"></i></a></li>
                                            <?php
                                            endforeach;
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="side_copywright">
                                <?php echo wp_kses( $appilo_seo_header_side_copyright, $allowed_html ); ?>
                            </div>
                        </div>
                    </div>
                <?php }?>
                    <!-- /sidebar -->
                    <?php if( $menu_btn_txt_10 ){ ?>
                    <div class="header-button text-center appseo-btn-hover text-uppercase">
                        <a href="<?php echo esc_url( $menu_btn_link_10 ); ?>"><?php echo esc_html( $menu_btn_txt_10 ); ?></a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- //desktop menu -->
        <div class="appseo-mobile_menu relative-position">
            <div class="appseo-mobile_menu_button appseo-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="appseo-mobile_menu_wrap">
                <div class="mobile_menu_overlay appseo-open_mobile_menu"></div>
                <div class="appseo-mobile_menu_content">
                    <div class="appseo-mobile_menu_close appseo-open_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri()?>/img/appilo-seo/logo/logo1.png" alt="Default Logo" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav class="appseo-mobile-main-navigation  clearfix ul-li">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'menu_id'        => 'main-nav',
                            'depth'           => 4,
                            'container'         => 'ul',
                            'menu_class'        => 'navbar-nav text-capitalize clearfix',
                            'fallback_cb'       => '',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
</header>
<!-- End of header section
    ============================================= -->