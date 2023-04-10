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

$app_social_lists = get_theme_mod( 'galaxy_app_social_header_list' );
$app_social_switch = get_theme_mod( 'app_social_switcher' );
$app_language = get_theme_mod( 'app_language_switcher' );
$app_lang_lists = get_theme_mod( 'galaxy_app_header_lang_list' );
$app_lang_default_image = get_theme_mod( 'galaxy_app_lang_default_image', 'url' );
$app_lang_default_link = get_theme_mod( 'galaxy_app_lang_default_link' );

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


<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- Start header -->
    <header class="site-header header-style-1">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo-header-style" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo">
                        <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/galaxy/logo.png" alt="Default Logo"/>
                        <?php } ?>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="fas fa-times"></i></button>
	                <?php
                        if (1 == $multi_page_menu){
                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                                'menu_id'        => '',
                                'depth'           => 4,
                                'container'         => 'ul',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => '',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );
                        }elseif(2 == $multi_page_menu){
                            wp_nav_menu( array(
                                'theme_location' => 'multi_page_menu',
                                'menu_id'        => '',
                                'depth'           => 4,
                                'container'         => 'ul',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => '',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );
                        }else{
                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                                'menu_id'        => '',
                                'depth'           => 4,
                                'container'         => 'ul',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => '',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );
                        }
	                ?>
                </div><!-- end of nav-collapse -->

                <div class="lang-social navbar-right">
                    <div class="lang">
                        <?php if ($app_language):?>
                            <a href="<?php echo esc_url($app_lang_default_link); ?>"><img src="<?php echo esc_url($app_lang_default_image); ?>" alt></a>
                        <ul>
                            <?php if ($app_lang_lists): foreach( $app_lang_lists as $app_lang ) : ?>
                                <li><a href="<?php echo esc_url($app_lang['lang_url']); ?>"><img src="<?php echo esc_url(wp_get_attachment_url($app_lang['lang_icon'])); ?>"> <?php echo esc_html($app_lang['lang_name']); ?></a></li>
                            <?php endforeach; endif;?>
                        </ul>
                        <?php endif;?>
                    </div>
                    <div class="social-links-wrapper">
                        <?php if ($app_social_switch): ?>
                        <ul class="social-links">
                            <?php if ($app_social_lists): foreach( $app_social_lists as $app_socials ) : ?>
                                <li><a href="<?php echo esc_url($app_socials['social_url']); ?>"><i class="fab <?php echo esc_html($app_socials['icon_name']); ?>"></i></a></li>
                            <?php endforeach; endif;?>
                        </ul>
                       <?php endif;?>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->
