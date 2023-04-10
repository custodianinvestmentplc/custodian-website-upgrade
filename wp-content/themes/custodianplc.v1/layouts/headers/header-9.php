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

$menu_btn_txt_9 = get_theme_mod('appilo_menu_button_text_settings_9');
$menu_btn_link_9 = get_theme_mod('appilo_menu_button_link_settings_9', 'url');

$app_showcase_socials = get_theme_mod('app_showcase_socials');

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
<header id="header-eight" class="main-header-eight">
    <div class="appheader-content">
        <div class="site-logo float-left">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                    <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                    <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri()?>/img/app-showcase/logo/logo1.png" alt="Default Logo" />
                <?php } ?>
            </a>
        </div>
        <nav class="navigation-eight ul-li">

            <?php
            if (1 == $multi_page_menu){
	            wp_nav_menu( array(
		            'theme_location' => 'main_menu',
		            'menu_id'        => '',
		            'depth'           => 4,
		            'container'         => 'ul',
		            'menu_class'        => '',
		            'fallback_cb'       => '',
		            'walker'          => new WP_Bootstrap_Navwalker(),
	            ) );
            }elseif(2 == $multi_page_menu){
	            wp_nav_menu( array(
		            'theme_location' => 'multi_page_menu',
		            'menu_id'        => '',
		            'depth'           => 4,
		            'container'         => 'ul',
		            'menu_class'        => '',
		            'fallback_cb'       => '',
		            'walker'          => new WP_Bootstrap_Navwalker(),
	            ) );
            }else{
	            wp_nav_menu( array(
		            'theme_location' => 'main_menu',
		            'menu_id'        => '',
		            'depth'           => 4,
		            'container'         => 'ul',
		            'menu_class'        => '',
		            'fallback_cb'       => '',
		            'walker'          => new WP_Bootstrap_Navwalker(),
	            ) );
            }
            ?>
        </nav>
        <div class="h-eight-social ul-li float-right clearfix">
            <ul>
                    <?php if( $app_showcase_socials) {
                        foreach ($app_showcase_socials as $app_showcase_social) : ?>
                        <li><a href="<?php echo esc_url($app_showcase_social['social_link']); ?>"><?php echo esc_html(print_fontawesome_icons($app_showcase_social['icon_class'])); ?></a></li>
                    <?php
                        endforeach;
                    }
                    ?>
            </ul>
        </div>
        <?php if ($menu_btn_txt_9){ ?>
        <div class="sign-up-btn-eight text-center float-right clearfix">
            <a href="<?php echo esc_url($menu_btn_link_9); ?>"><?php echo esc_html($menu_btn_txt_9); ?></a>
        </div>
        <?php }?>
    </div>
    <!-- /desktop-menu -->
    <div class="appi-ei-mobile_menu relative-position">
        <div class="appi-ei-mobile_menu_button appi-ei-open_mobile_menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="appi-ei-mobile_menu_wrap">
            <div class="mobile_menu_overlay appi-ei-open_mobile_menu"></div>
            <div class="appi-ei-mobile_menu_content">
                <div class="appi-ei-mobile_menu_close appi-ei-open_mobile_menu">
                    <i class="far fa-times-circle"></i>
                </div>
                <div class="m-brand-logo text-center">
                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri()?>/img/app-showcase/logo/f-logo.png" alt="Default Logo" />
                    <?php } ?>
                </div>
                <nav class="appi-ei-mobile-main-navigation  clearfix ul-li">
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
        <!-- /mobile-menu -->
</header>
<!-- End of header section
    ============================================= -->
