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

$appilo_menu_button_text_8 = get_theme_mod('appilo_menu_button_text_settings_8');
$appilo_menu_button_link_8 = get_theme_mod('appilo_menu_button_link_settings_8' , 'url');

$allowed_html = [
    'a' => [
        'href' => [],
        'title' => [],
    ],
    'span' => [],
    'br' => [],
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
<header id="header_main" class="saas_two_main_header">
    <div class="container">
        <div class="s_main_menu">
            <div class="row">
                <div class="col-md-2">
                    <div class="brand_logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/saas-classic/logo/logo.png" alt="Default Logo" />
                            <?php } ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main_menu_list clearfix float-right">
                        <nav class="s2-main-navigation  clearfix ul-li">

                            <?php
                            if (1 == $multi_page_menu){
	                            wp_nav_menu( array(
		                            'theme_location' => 'main_menu',
		                            'menu_id'        => 'main-nav',
		                            'depth'           => 4,
		                            'container'     => 'ul',
		                            'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                            'fallback_cb'   => false,
		                            'walker'          => new WP_Bootstrap_Navwalker(),
	                            ) );
                            }elseif(2 == $multi_page_menu){
	                            wp_nav_menu( array(
		                            'theme_location' => 'multi_page_menu',
		                            'menu_id'        => 'main-nav',
		                            'depth'           => 4,
		                            'container'     => 'ul',
		                            'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                            'fallback_cb'   => false,
		                            'walker'          => new WP_Bootstrap_Navwalker(),
	                            ) );
                            }else{
	                            wp_nav_menu( array(
		                            'theme_location' => 'main_menu',
		                            'menu_id'        => 'main-nav',
		                            'depth'           => 4,
		                            'container'     => 'ul',
		                            'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                            'fallback_cb'   => false,
		                            'walker'          => new WP_Bootstrap_Navwalker(),
	                            ) );
                            }
                            ?>
                        </nav>
                        <?php if ($appilo_menu_button_text_8):?>
                            <div class="saas_sign_up_btn text-center">
                                <a href="<?php echo esc_url( $appilo_menu_button_link_8 ); ?>"> <?php echo wp_kses( $appilo_menu_button_text_8, $allowed_html ); ?></a>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <!-- //desktop menu -->
        <div class="s2-mobile_menu relative-position">
            <div class="s2_mobile_menu_button s2_open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="s2_mobile_menu_wrap">
                <div class="s2_mobile_menu_overlay s2_open_mobile_menu"></div>
                <div class="s2_mobile_menu_content">
                    <div class="s2_mobile_menu_close s2_open_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != '') { ?>
                                <img src="<?php echo esc_url( $mobile_logo ); ?>" alt="Main Mobile Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/saas-classic/logo/logo.png" alt="Default Mobile Logo" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav class="s2_main-navigation  clearfix ul-li">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'menu_id'        => 'main-nav',
                            'depth'           => 4,
                            'container'     => 'ul',
                            'menu_class'        => 'navbar-nav text-capitalize clearfix',
                            'fallback_cb'   => false,
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
