<?php
/**
 * The home page header 2 for our theme
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

$appilo_menu_button_text_2 = get_theme_mod('appilo_menu_button_text_settings_2');
$appilo_menu_button_link_2 = get_theme_mod('appilo_menu_button_link_settings_2' , 'url');


$allowed_html = [
    'a' => [
        'href' => [],
        'title' => [],
    ],
    'br' => [],
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


    <div class="page-wrapper">
        <!-- Main Header-->
        <header class="main-header">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="float-left logo-box">
                            <div class="logo">
                                <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($main_logo)?>" alt="Logo"></a>
                                <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt></a>
                                <?php } else{ ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/topapp/logo.png" alt="Logo Default"></a>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon fas fa-align-justify"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">

                                    <?php
                                    if (1 == $multi_page_menu){
	                                    wp_nav_menu( array(
		                                    'theme_location' => 'main_menu',
		                                    'depth'           => 4,
		                                    'menu_class'        => 'navigation clearfix',
		                                    'fallback_cb'     => '',
		                                    'walker'          => new WP_Bootstrap_Navwalker(),
	                                    ) );
                                    }elseif(2 == $multi_page_menu){
	                                    wp_nav_menu( array(
		                                    'theme_location' => 'multi_page_menu',
		                                    'depth'           => 4,
		                                    'menu_class'        => 'navigation clearfix',
		                                    'fallback_cb'     => '',
		                                    'walker'          => new WP_Bootstrap_Navwalker(),
	                                    ) );
                                    }else{
	                                    wp_nav_menu( array(
		                                    'theme_location' => 'main_menu',
		                                    'depth'           => 4,
		                                    'menu_class'        => 'navigation clearfix',
		                                    'fallback_cb'     => '',
		                                    'walker'          => new WP_Bootstrap_Navwalker(),
	                                    ) );
                                    }
                                    ?>
                                </div>

                            </nav>
                            <?php if ($appilo_menu_button_text_2):?>
                                <div class="outer-box">
                                    <a href="<?php echo esc_url( $appilo_menu_button_link_2 ); ?>" class="topapp-theme-btn btn-style-one"><span class="txt"><?php echo esc_html( $appilo_menu_button_text_2 ); ?></span></a>
                                </div>
                            <?php endif;?>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->



            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fas fa-times"></span></div>

                <nav class="menu-box">
                    <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != ''){ ?>
                        <div class="nav-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($mobile_logo)?>" alt="Mobile Logo"></a></div>
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <div class="nav-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt></a></div>
                    <?php } else{?>
                        <div class="nav-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri().'/img/topapp/logo-2.png';?>" alt="Mobile Logo"></a></div>
                    <?php } ?>
                    <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                    <?php if ($appilo_menu_button_text_2){ ?>
                        <div class="outer-box topapp-mobile-btn">
                            <a href="<?php echo esc_url( $appilo_menu_button_link_2 ); ?>" class="topapp-theme-btn btn-style-one"><span class="txt"><?php echo esc_html( $appilo_menu_button_text_2 ); ?></span></a>
                        </div>
                    <?php }?>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!--End Main Header -->
    </div>