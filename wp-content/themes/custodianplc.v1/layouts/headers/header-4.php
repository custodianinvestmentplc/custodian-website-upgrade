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
    <header class="site-header header-style-2">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
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
			                'container'     => 'ul',
			                'menu_class'        => 'nav navbar-nav',
			                'fallback_cb'   => false,
			                'walker'          => new WP_Bootstrap_Navwalker(),
		                ) );
	                }elseif(2 == $multi_page_menu){
		                wp_nav_menu( array(
			                'theme_location' => 'multi_page_menu',
			                'menu_id'        => '',
			                'depth'           => 4,
			                'container'     => 'ul',
			                'menu_class'        => 'nav navbar-nav',
			                'fallback_cb'   => false,
			                'walker'          => new WP_Bootstrap_Navwalker(),
		                ) );
	                }else{
		                wp_nav_menu( array(
			                'theme_location' => 'main_menu',
			                'menu_id'        => '',
			                'depth'           => 4,
			                'container'     => 'ul',
			                'menu_class'        => 'nav navbar-nav',
			                'fallback_cb'   => false,
			                'walker'          => new WP_Bootstrap_Navwalker(),
		                ) );
	                }
	                ?>
                </div><!-- end of nav-collapse -->

                <div class="side-menu">
                    <button class="btn side-menu-open-btn"><i class="fi fas fa-align-justify"></i></button>
                    <div class="side-menu-inner">
                        <button class="btn side-menu-close-btn"><i class="fas fa-times"></i></button>
                        <div class="logo">
                            <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/galaxy/logo.png" alt="Default Logo"/>
                            <?php } ?>
                        </div>
                    </div>
                </div>  <!-- end side menu -->

            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->