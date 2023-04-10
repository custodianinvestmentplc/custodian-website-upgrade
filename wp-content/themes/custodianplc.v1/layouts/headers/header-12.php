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
<!-- Start of header section
    ============================================= -->
<header id="dia-header" class="dia-main-header">
    <div class="container">
        <div class="dia-main-header-content clearfix">
            <div class="dia-logo float-left">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri()?>/img/digital-agency/logo/logo.png" alt="Default Logo" />
                    <?php } ?>
                </a>
            </div>
            <div class="dia-main-menu-item float-right">
                <nav class="dia-main-navigation dia-link-menu clearfix ul-li">

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
            </div>
        </div>
        <!-- /desktop menu -->
        <div class="dia-mobile_menu relative-position">
            <div class="dia-mobile_menu_button dia-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="dia-mobile_menu_wrap">
                <div class="mobile_menu_overlay dia-open_mobile_menu"></div>
                <div class="dia-mobile_menu_content">
                    <div class="dia-mobile_menu_close dia-open_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri()?>/img/digital-agency/logo/logo.png" alt="Default Logo" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav class="dia-mobile-main-navigation dia-link-menu  clearfix ul-li">
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
            <!-- /mobile-menu -->
        </div>
</header>
<!-- End of header section
    ============================================= -->
