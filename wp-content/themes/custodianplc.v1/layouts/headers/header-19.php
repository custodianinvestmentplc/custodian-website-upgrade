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
$mobile_logo = get_theme_mod('mobile_logo_control', 'url');

$smm_menu_btn_txt = get_theme_mod('smm_menu_btn_txt');
$smm_menu_btn_link = get_theme_mod('smm_menu_btn_link');

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
<!-- Start of header section
    ============================================= -->
<header id="smm-header" class="smm-main-header header-type-three">
    <div class="container">
        <div class="smm-main-header-content position-relative clearfix">
            <div class="smm-logo float-left">
                <a class="smm-logo-1" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri()?>/img/smm/logo/logo1.png" alt="Default Logo" />
                    <?php } ?>
                </a>
            </div>
            <div class="smm-main-menu-item">
                <nav class="smm-main-navigation float-left clearfix ul-li">

                    <?php
                    if (1 == $multi_page_menu){
	                    wp_nav_menu( array(
		                    'theme_location' => 'main_menu',
		                    'menu_id'        => 'main-nav',
		                    'depth'           => 4,
		                    'container'         => 'ul',
		                    'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                    'fallback_cb'       => '',
		                    'walker'          => new WP_Bootstrap_Navwalker(),
	                    ));
                    }elseif(2 == $multi_page_menu){
	                    wp_nav_menu( array(
		                    'theme_location' => 'multi_page_menu',
		                    'menu_id'        => 'main-nav',
		                    'depth'           => 4,
		                    'container'         => 'ul',
		                    'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                    'fallback_cb'       => '',
		                    'walker'          => new WP_Bootstrap_Navwalker(),
	                    ));
                    }else{
	                    wp_nav_menu( array(
		                    'theme_location' => 'main_menu',
		                    'menu_id'        => 'main-nav',
		                    'depth'           => 4,
		                    'container'         => 'ul',
		                    'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                    'fallback_cb'       => '',
		                    'walker'          => new WP_Bootstrap_Navwalker(),
	                    ));
                    }
                    ?>
                </nav>
                <?php if ($smm_menu_btn_link){ ?>
                    <div class="smm-header-btn text-center text-capitalize float-right">
                        <a href="<?php echo esc_url($smm_menu_btn_link)?>"><?php echo wp_kses($smm_menu_btn_txt, $allowed_html)?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- /desktop menu -->
        <div class="smm-mobile_menu position-relative">
            <div class="smm-mobile_menu_button smm-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="smm-mobile_menu_wrap">
                <div class="mobile_menu_overlay smm-open_mobile_menu"></div>
                <div class="smm-mobile_menu_content">
                    <div class="smm-mobile_menu_close smm-open_mobile_menu">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != '') { ?>
                                <img src="<?php echo esc_url( $mobile_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri()?>/img/smm/logo/f-logo1.png" alt="Default Mobile Logo" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav class="smm-mobile-main-navigation  clearfix ul-li">
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
</header>
<!-- End of header section
    ============================================= -->
