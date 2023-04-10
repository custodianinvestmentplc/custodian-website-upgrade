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
$app_startup_socials = get_theme_mod('app_startup_socials');
$app_startup_langs = get_theme_mod('app_startup_lang');
$app_startup_d_lang_txt = get_theme_mod('app_startup_d_lang_txt');
$app_startup_d_lang_lnk = get_theme_mod('app_startup_d_lang_lnk', 'url');
$app_startup_d_lang_img = get_theme_mod('app_startup_d_lang_img', 'url');

$app_startup_language_switcher = get_theme_mod('app_startup_language_switcher');

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
<header id="str-header-main" class="str-main-header">
    <div class="container">
        <div class="str-header-content position-relative">

            <div class="str-header-top clearfix">
                <?php if ($app_startup_language_switcher){ ?>
                <div class="str-language float-right ul-li-block">
                    <a href="<?php echo esc_url( $app_startup_d_lang_lnk ); ?>"><img src="<?php echo esc_url( $app_startup_d_lang_img ); ?>" alt><?php echo esc_html($app_startup_d_lang_txt); ?> </a>
                    <ul>
                        <?php if( $app_startup_langs) {
                            foreach ($app_startup_langs as $app_startup_lang) : ?>
                                <li><a href="<?php echo esc_url($app_startup_lang['str_lang_link']); ?>"><img src="<?php echo esc_url( $app_startup_lang['str_lang_img'] ); ?>" alt><?php echo esc_html($app_startup_lang['str_lang_txt']); ?> </a></li>
                            <?php
                            endforeach;
                        }
                        ?>
                    </ul>
                </div>
                <?php } ?>
                <div class="str-social float-right">
                    <?php if( $app_startup_socials) {
                        foreach ($app_startup_socials as $app_startup_social) : ?>
                           <a href="<?php echo esc_url($app_startup_social['social_link']); ?>"><i class="<?php echo esc_attr($app_startup_social['icon_class']); ?>"></i></a>
                        <?php
                        endforeach;
                    }
                    ?>
                </div>
            </div>

            <div class="str-main-menu">
                <div class="row">
                    <div class="col-md-2">
                        <div class="str-brand-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                    <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                                <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                    <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri()?>/img/app-startup/logo/logo1.png" alt="Default Logo" />
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="str-main-menu-item clearfix float-right">
                            <nav class="str-main-navigation  clearfix ul-li">

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
	                                ) );
                                }elseif(2 == $multi_page_menu){
	                                wp_nav_menu( array(
		                                'theme_location' => 'multi_page_menu',
		                                'menu_id'        => 'main-nav',
		                                'depth'           => 4,
		                                'container'         => 'ul',
		                                'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                                'fallback_cb'       => '',
		                                'walker'          => new WP_Bootstrap_Navwalker(),
	                                ) );
                                }else{
	                                wp_nav_menu( array(
		                                'theme_location' => 'main_menu',
		                                'menu_id'        => 'main-nav',
		                                'depth'           => 4,
		                                'container'         => 'ul',
		                                'menu_class'        => 'navbar-nav text-capitalize clearfix',
		                                'fallback_cb'       => '',
		                                'walker'          => new WP_Bootstrap_Navwalker(),
	                                ) );
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- desktop-menu -->
        <div class="str-mobile_menu relative-position">
            <div class="str-mobile_menu_button str-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="str-mobile_menu_wrap">
                <div class="mobile_menu_overlay str-open_mobile_menu"></div>
                <div class="str-mobile_menu_content">
                    <div class="str-mobile_menu_close str-open_mobile_menu">
                        <img src="<?php echo get_template_directory_uri()?>/img/app-startup/logo/cls.png" alt>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri()?>/img/app-startup/logo/logo1.png" alt="Default Logo" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav class="str-mobile-main-navigation  clearfix ul-li">
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
        </div>
</header>
<!-- End of header section
    ============================================= -->
