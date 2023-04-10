<?php
/**
 * The home page header for our theme
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
$sticky_logo = get_theme_mod('appilo_sticky_logo_settings' , 'url');


$appilo_menu_button_text = get_theme_mod('appilo_menu_button_text_settings');
$appilo_menu_button_link = get_theme_mod('appilo_menu_button_link_settings' , 'url');

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


<header class="header home-page-one">
    <div class="container">
        <div class="appilo-menu clearfix">
            <nav class="navbar navbar-expand-lg navbar-custom navbar-light">

                <a class="navbar-brand mr-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" class="default-logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo default-logo" alt="SVG Logo">
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Default Logo" class="default-logo" />
                    <?php } ?>
                    <?php if ( $sticky_logo != 'http://url' && $sticky_logo != 'url'  && $sticky_logo != '') { ?>
                        <img src="<?php echo esc_url( $sticky_logo ); ?>" alt="Sticky Logo" class="stick-logo" />
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-2.png" alt="Default Logo" class="stick-logo" />
                    <?php } ?>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse navbar-nav" id="navbarToggler">
                    <?php
                    if (1 == $multi_page_menu){
	                    wp_nav_menu( array(
		                    'theme_location' => 'main_menu',
		                    'menu_id'        => '',
		                    'depth'           => 4,
		                    'container'         => 'ul',
		                    'menu_class'        => 'ml-auto',
		                    'fallback_cb'       => '',
		                    'walker'          => new WP_Bootstrap_Navwalker(),
	                    ) );
                    }elseif(2 == $multi_page_menu){
	                    wp_nav_menu( array(
		                    'theme_location' => 'multi_page_menu',
		                    'menu_id'        => '',
		                    'depth'           => 4,
		                    'container'         => 'ul',
		                    'menu_class'        => 'ml-auto',
		                    'fallback_cb'       => '',
		                    'walker'          => new WP_Bootstrap_Navwalker(),
	                    ) );
                    }else{
	                    wp_nav_menu( array(
		                    'theme_location' => 'main_menu',
		                    'menu_id'        => '',
		                    'depth'           => 4,
		                    'container'         => 'ul',
		                    'menu_class'        => 'ml-auto',
		                    'fallback_cb'       => '',
		                    'walker'          => new WP_Bootstrap_Navwalker(),
	                    ) );
                    }
                    ?>
                </div>
                <?php if ($appilo_menu_button_text):?>
                    <div class="sign-up-btn">
                        <a href="<?php echo esc_url( $appilo_menu_button_link ); ?>" class="sign-btn"><?php echo esc_html( $appilo_menu_button_text ); ?></a>
                    </div><!-- /.right-side-box -->
                <?php endif;?>
            </nav>
        </div>
    </div>
</header><!-- /.header -->
