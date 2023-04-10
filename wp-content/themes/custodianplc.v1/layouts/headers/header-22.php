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

$main_logo = get_theme_mod('appilo_main_logo_settings' , 'url');
$mobile_logo = get_theme_mod('mobile_logo_control', 'url');
$svg_main_logo = get_theme_mod('appilo_svg_main_logo_settings' , 'url');

$medi_header_social = get_theme_mod('medi_header_social');
$medi_fb_link = get_theme_mod('medi_fb_link');
$medi_tw_link = get_theme_mod('medi_tw_link');
$medi_gl_link = get_theme_mod('medi_gl_link');
$medi_ln_link = get_theme_mod('medi_ln_link');
$medi_in_link = get_theme_mod('medi_in_link');

$medi_header_menu = get_theme_mod( 'medi_header_menu' );
$medi_top_header_switch = get_theme_mod( 'medi_top_header_switch' );
$medi_top_header_lang_switch = get_theme_mod( 'medi_top_header_lang_switch' );

$medi_menu_btn_txt = get_theme_mod('medi_menu_btn_txt');
$medi_menu_btn_link = get_theme_mod('medi_menu_btn_link');

$medi_top_phn = get_theme_mod('medi_top_phn');
$medi_top_mail = get_theme_mod('medi_top_mail');

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
<header id="medi-app-header" class="medi-app-main-header clearfix">
    <?php if ($medi_top_header_switch){ ?>
    <div class="medi-app-header-top clearfix">
        <div class="medi-app-header-top-social-login float-left d-flex">
            <?php if ($medi_header_social){ ?>
            <div class="medi-app-header-top-social">
                    <?php if ($medi_fb_link){?>
                        <a href="<?php echo esc_url($medi_fb_link);?>"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    <?php }?>
                    <?php if ($medi_tw_link){?>
                        <a href="<?php echo esc_url($medi_tw_link);?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <?php }?>
                    <?php if ($medi_gl_link){?>
                        <a href="<?php echo esc_url($medi_gl_link);?>"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                    <?php }?>
                    <?php if ($medi_ln_link){?>
                        <a href="<?php echo esc_url($medi_ln_link);?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                    <?php }?>
                    <?php if ($medi_in_link){?>
                        <a href="<?php echo esc_url($medi_in_link);?>"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <?php }?>
                </div> <!-- social-icon -->
            <?php }?>
            <div class="medi-app-header-top-login">
                <?php if ($medi_header_menu) { ?>
                        <?php foreach ( $medi_header_menu as $medi_header_menu_item ) { ?>
                            <span class="h-top-login"><a href="<?php echo esc_url($medi_header_menu_item['link_url']); ?>"><?php echo esc_html(print_fontawesome_icons($medi_header_menu_item['icon'])); ?><?php echo esc_html($medi_header_menu_item['link_text']); ?></a></span>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="medi-app-header-top-contact-language d-flex float-right">
            <div class="medi-app-header-top-contact">
                <?php if ($medi_top_phn){?>
                    <a href="tel:<?php echo esc_attr($medi_top_phn); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo wp_kses($medi_top_phn, $allowed_html);?></a>
                <?php }?>
                <?php if ($medi_top_mail){?>
                    <a href="mailto:<?php echo esc_attr($medi_top_mail); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo wp_kses($medi_top_mail, $allowed_html);?></a>
                <?php }?>
            </div>
            <?php if ($medi_top_header_lang_switch){?>
            <div class="medi-app-header-top-language">
                <select>
                    <option>English</option>
                    <option>Spanish</option>
                    <option>Latin</option>
                </select>
            </div>
            <?php }?>
        </div>
    </div>
    <?php }?>
    <div class="medi-app-main-menu-wrap position-relative">
        <div class="site-brand-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                    <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                    <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri()?>/img/medical/logo1.jpg" alt="Default Logo" />
                <?php } ?>
            </a>
        </div>
        <div class="medi-app-main-navigation float-left">
            <nav class="medi-app-main-navigation  clearfix ul-li">

                <?php
                if (1 == $multi_page_menu){
	                wp_nav_menu( array(
		                'theme_location' => 'main_menu',
		                'menu_id'        => 'main-nav',
		                'depth'           => 4,
		                'container'         => 'ul',
		                'menu_class'        => 'navbar-nav text-capitalize',
		                'fallback_cb'       => '',
		                'walker'          => new WP_Bootstrap_Navwalker(),
	                ));
                }elseif(2 == $multi_page_menu){
	                wp_nav_menu( array(
		                'theme_location' => 'multi_page_menu',
		                'menu_id'        => 'main-nav',
		                'depth'           => 4,
		                'container'         => 'ul',
		                'menu_class'        => 'navbar-nav text-capitalize',
		                'fallback_cb'       => '',
		                'walker'          => new WP_Bootstrap_Navwalker(),
	                ));
                }else{
	                wp_nav_menu( array(
		                'theme_location' => 'main_menu',
		                'menu_id'        => 'main-nav',
		                'depth'           => 4,
		                'container'         => 'ul',
		                'menu_class'        => 'navbar-nav text-capitalize',
		                'fallback_cb'       => '',
		                'walker'          => new WP_Bootstrap_Navwalker(),
	                ));
                }
                ?>
            </nav>
        </div>
        <div class="medi-app-side-option d-flex float-right">
            <div class="medi-app-side-btn medi-app-search-btn">
                <button><i class="fas fa-search"></i></button>
            </div>
            <?php if ( class_exists( 'woocommerce' ) ) { ?>
            <div class="medi-app-side-btn">
                <button class="cart-open-btn"><a href="<?php appilo_cart_link();?>"><i class="fas fa-shopping-cart"></i></a></button>
            </div>
            <?php } ?>
            <div class="medi-app-side-btn">
                <button class="medi-app-side-toggle"></button>
            </div>
        </div>
        <!-- Desktop Menu -->
        <div class="app-medi-mobile_menu position-relative">
            <div class="app-medi-mobile_menu_button app-medi-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="app-medi-mobile_menu_wrap">
                <div class="mobile_menu_overlay app-medi-open_mobile_menu"></div>
                <div class="app-medi-mobile_menu_content">
                    <div class="app-medi-mobile_menu_close app-medi-open_mobile_menu">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != '') { ?>
                                <img src="<?php echo esc_url( $mobile_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri()?>/img/logo-2.png" alt="Default Mobile Logo" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav class="app-medi-mobile-main-navigation  clearfix ul-li">
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
        </div>
        <!-- /Mobile-Menu -->
    </div>
</header>
<!-- search filed -->
<div class="app-medi-search-body">
    <div class="app-medi-search-form">
        <form action="<?php echo home_url( '/' );?>" class="app-medi-search-form-area">
            <input class="app-medi-search-input" type="search" id="search" value="<?php the_search_query(); ?>" placeholder="Search Here">
            <button type="submit" class="app-medi-search-btn1 search-btn">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <div class="outer-close medi-app-search-btn text-center">
            <i class="fas fa-times"></i>
        </div>
    </div>
</div>