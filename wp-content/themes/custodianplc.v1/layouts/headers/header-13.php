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

$appl_footer_purchase_txt = get_theme_mod('appl_footer_purchase_txt');
$appl_footer_purchase_img = get_theme_mod('appl_footer_purchase_img' , 'url');
$appl_footer_purchase_link = get_theme_mod('appl_footer_purchase_link' , 'url');

$appl_menu_btn_txt = get_theme_mod('appl_menu_btn_txt');
$appl_menu_btn_link = get_theme_mod('appl_menu_btn_link');

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
<?php if ($appl_footer_purchase_txt){ ?>
<a class="purchase-demo" target="_blank" href="<?php echo esc_url($appl_footer_purchase_link);?>">
    <i class="icon"><img src="<?php echo esc_url($appl_footer_purchase_img);?>" alt></i>
    <span class="ph-text">
            <?php echo wp_kses($appl_footer_purchase_txt, $allowed_html); ?>
    </span>
</a>
<?php }?>
<!-- Start of header section section
============================================= -->
<header id="appl-header" class="appl-header-section">
    <div class="container">
        <div class="header-content">
            <div class="row">
                <div class="col-md-2">
                    <div class="appl-brand-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri()?>/img/appilo-landing/logo.png" alt="Default Logo" />
                            <?php } ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main_menu_list clearfix float-right">
                        <nav class="main-navigation  clearfix ul-li">

                            <?php
                            if (1 == $multi_page_menu){
	                            wp_nav_menu( array(
		                            'theme_location' => 'main_menu',
		                            'menu_id'        => 'main-nav',
		                            'depth'           => 4,
		                            'container'         => 'ul',
		                            'menu_class'        => 'nav navbar-nav clearfix',
		                            'fallback_cb'       => '',
		                            'walker'          => new WP_Bootstrap_Navwalker(),
	                            ));
                            }elseif(2 == $multi_page_menu){
	                            wp_nav_menu( array(
		                            'theme_location' => 'multi_page_menu',
		                            'menu_id'        => 'main-nav',
		                            'depth'           => 4,
		                            'container'         => 'ul',
		                            'menu_class'        => 'nav navbar-nav clearfix',
		                            'fallback_cb'       => '',
		                            'walker'          => new WP_Bootstrap_Navwalker(),
	                            ));
                            }else{
	                            wp_nav_menu( array(
		                            'theme_location' => 'main_menu',
		                            'menu_id'        => 'main-nav',
		                            'depth'           => 4,
		                            'container'         => 'ul',
		                            'menu_class'        => 'nav navbar-nav clearfix',
		                            'fallback_cb'       => '',
		                            'walker'          => new WP_Bootstrap_Navwalker(),
	                            ));
                            }
                            ?>
                        </nav>
                        <?php if ($appl_menu_btn_txt){ ?>
                        <div class="appl_sign_up_btn text-center">
                            <a target="_blank" href="<?php echo esc_url($appl_menu_btn_link);?>"> <?php echo wp_kses($appl_menu_btn_txt, $allowed_html); ?></a>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /desktop menu -->
    <div class="appl-mobile_menu relative-position">
        <div class="appl-mobile_menu_button appl-open_mobile_menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="appl-mobile_menu_wrap">
            <div class="mobile_menu_overlay appl-open_mobile_menu"></div>
            <div class="appl-mobile_menu_content">
                <div class="appl-mobile_menu_close appl-open_mobile_menu">
                    <i class="fas fa-times-circle"></i>
                </div>
                <div class="m-brand-logo text-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                            <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                        <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri()?>/img/appilo-landing/logo.png" alt="Default Logo" />
                        <?php } ?>
                    </a>
                </div>
                <nav class="appl-mobile-main-navigation  clearfix ul-li">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main_menu',
                        'menu_id'        => 'm-main-nav',
                        'depth'           => 4,
                        'container'         => 'ul',
                        'menu_class'        => 'nav navbar-nav clearfix',
                        'fallback_cb'       => '',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- End of Header section
    ============================================= -->
