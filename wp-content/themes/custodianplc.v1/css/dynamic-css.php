<?php
/**
 *  Add Dynamic css to header
 *  @version	2.2
 *  @author		Themexriver
 *  @URI		http://themexriver.com
 */


function appilo_dynamic_css() {
    ?>
<?php

    $theme_layout_style = get_theme_mod('theme_layout_settings', 'layout1');
    $sticky_enable = get_theme_mod('appilo_sticky_switch', '2');

    $main_logo_svg_width = get_theme_mod('appilo_svg_main_logo_width_settings', '60px');
    $main_logo_svg_width_mob = get_theme_mod('appilo_svg_main_logo_width_settings_mob', '60px');
    $main_logo_svg_height = get_theme_mod('appilo_svg_main_logo_height_settings', 'auto');
    $main_logo_svg_height_mob = get_theme_mod('appilo_svg_main_logo_height_settings_mob', 'auto');

    //Appilo Main
    $appilo_footer_bg = get_theme_mod('appilo_footer_bg_settings' , 'url');
    $appilo_theme_main_color_1 = get_theme_mod('theme_main_color_1');
    $appilo_theme_main_color_2 = get_theme_mod('theme_main_color_2');
    $appilo_theme_main_color = get_theme_mod('theme_main_color');
    $appilo_theme_sticky_color = get_theme_mod('theme_sticky_header_color');
    $appilo_theme_color_switch = get_theme_mod('solid_gradient');

    //Topapp Main
    $nav_hover_1 = get_theme_mod('nav_border_color_1');
    $nav_hover_2 = get_theme_mod('nav_border_color_2');

    $sub_menu_hover = get_theme_mod('sub_menu_background');


    $menu_bt_1 = get_theme_mod('menu_btn_1');
    $menu_bt_2 = get_theme_mod('menu_btn_2');

    $subscribe_btn_1 = get_theme_mod('subscribe_btn_2_color_1');
    $subscribe_btn_2 = get_theme_mod('subscribe_btn_2_color_2');

    $scroll_top = get_theme_mod('scroll_top_background');
    $scroll_top_hover = get_theme_mod('scroll_top_hover_background');


    $galaxy_app_color_1 = get_theme_mod('galaxy_app_primary_color_1');
    $galaxy_app_color_2 = get_theme_mod('galaxy_app_primary_color_2');

    $galaxy_agency_color_1 = get_theme_mod('galaxy_agency_primary_color_1');
    $galaxy_agency_color_2 = get_theme_mod('galaxy_agency_primary_color_2');

    $galaxy_cv_color_1 = get_theme_mod('galaxy_cv_primary_color_1');
    $galaxy_cv_color_2 = get_theme_mod('galaxy_cv_primary_color_2');

    $galaxy_product_footer_color = get_theme_mod('galaxy_product_footer_color');

    $galaxy_product_color_1 = get_theme_mod('galaxy_product_primary_color_1');
    $galaxy_product_color_2 = get_theme_mod('galaxy_product_primary_color_2');

    $saas_footer_main_bg = get_theme_mod('saas_footer_main_ng');
    $saas_sticky_bg = get_theme_mod('saas_sticky_main_bg');
    $saas_menu_btn_bg = get_theme_mod('saas_menu_btn_bg');
    $saas_menu_btn_txt = get_theme_mod('saas_menu_btn_txt');
    $saas_primary_bg_1 = get_theme_mod('saas_primary_bg_1');
    $saas_primary_bg_2 = get_theme_mod('saas_primary_bg_2');

    $saas_classic_menu_after_before = get_theme_mod('saas_classic_menu_after_before');

    $saas_classic_top_1 = get_theme_mod('saas_classic_top_1');
    $saas_classic_top_2 = get_theme_mod('saas_classic_top_2');

    $app_showcase_menu_btn_bg = get_theme_mod('app_showcase_menu_btn_bg');
    $app_showcase_menu_btn_hover_bg = get_theme_mod('app_showcase_menu_btn_bg_hover');
    $app_showcase_menu_btn_height = get_theme_mod('app_showcase_menu_btn_height');
    $app_showcase_menu_btn_width = get_theme_mod('app_showcase_menu_btn_width');
    $app_showcase_menu_btn_padding = get_theme_mod('app_showcase_menu_btn_padding');

    $appilo_blog_details_bg = get_theme_mod('appilo_blog_details_bg');
    $app_showcase_blog_gradient_1 = get_theme_mod('app_showcase_blog_gradient_1');
    $app_showcase_blog_gradient_2 = get_theme_mod('app_showcase_blog_gradient_2');

    $app_showcase_footer_border = get_theme_mod('app_showcase_footer_border');
    $app_showcase_footer_border_color = get_theme_mod('app_showcase_footer_border_color');
    $app_showcase_footer_padding = get_theme_mod('app_showcase_footer_padding');

    $app_showcase_top_1 = get_theme_mod('app_showcase_top_1');
    $app_showcase_top_2 = get_theme_mod('app_showcase_top_2');


    $appilo_seo_btn_bg1 = get_theme_mod('appilo_seo_menu_btn_bg1');
    $appilo_seo_btn_bg2 = get_theme_mod('appilo_seo_menu_btn_bg2');
    $appilo_seo_menu_btn_height = get_theme_mod('appilo_seo_menu_btn_height');
    $appilo_seo_menu_btn_width = get_theme_mod('appilo_seo_menu_btn_width');
    $appilo_seo_menu_btn_bg_hover = get_theme_mod('appilo_seo_menu_btn_bg_hover');
    $appilo_seo_sub_menu_bg_hover = get_theme_mod('appilo_seo_sub_menu_bg_hover');

    $app_startup_footer_padding = get_theme_mod('app_startup_footer_padding');
    $app_startup_sub_menu_bg_hover = get_theme_mod('app_startup_sub_menu_bg_hover');
    $app_startup_main_menu_bg_hover1 = get_theme_mod('app_startup_main_menu_bg_hover1');
    $app_startup_main_menu_bg_hover2 = get_theme_mod('app_startup_main_menu_bg_hover2');
    $app_startup_main_menu_bg_hover3 = get_theme_mod('app_startup_main_menu_bg_hover3');
    $app_startup_main_menu_padding = get_theme_mod('app_startup_main_menu_padding');
    $app_startup_sub_menu_padding = get_theme_mod('app_startup_sub_menu_padding');

    $dia_menu_padding = get_theme_mod('dia_main_menu_padding');
    $dia_sub_menu_padding = get_theme_mod('dia_sub_main_menu_padding');
    $dia_main_menu_bg_hover1 = get_theme_mod('dia_main_menu_bg_hover1');
    $dia_main_menu_bg_hover2 = get_theme_mod('dia_main_menu_bg_hover2');
    $dia_main_menu_bg_hover3 = get_theme_mod('dia_main_menu_bg_hover3');
    $dia_footer_padding = get_theme_mod('dia_footer_padding');
    $dia_copyright_footer_border = get_theme_mod('dia_copyright_footer_border');

    $appl_main_menu_bg_hover1 = get_theme_mod('appl_main_menu_bg_hover1');
    $appl_main_menu_bg_hover2 = get_theme_mod('appl_main_menu_bg_hover2');

    $appl_menu_btn_bg1 = get_theme_mod('appl_menu_btn_bg1');
    $appl_menu_btn_bg2 = get_theme_mod('appl_menu_btn_bg2');

    $ch1_menu_btn_shadow = get_theme_mod('ch1_menu_btn_shadow');

?>
    <style>
    .svg-main-logo {
        width: <?php echo esc_html( $main_logo_svg_width ); ?>;
        height: <?php echo esc_html( $main_logo_svg_height ); ?>;
    }
    @media screen and (max-width: 991px){
        .svg-main-logo {
            width: <?php echo esc_html( $main_logo_svg_width_mob ); ?>;
            height: <?php echo esc_html( $main_logo_svg_height_mob ); ?>;
        }
    }

     <?php if ($theme_layout_style == 'layout1'):?>
    <?php if ( $appilo_footer_bg != 'http://url' && $appilo_footer_bg != 'url'  && $appilo_footer_bg != '') { ?>
        .appilo-footer {
            background: transparent url(<?php echo esc_url( $appilo_footer_bg ); ?>) center top no-repeat;
            background-size: cover;
        }
    <?php } else { ?>
        /*Footer Default BG*/
    <?php } ?>
        <?php if ($appilo_theme_color_switch == 'gradient'):?>
        .home-page-one .sign-up-btn a:hover , .appilo-footer .subscribe-section .wpcf7 ,
        .appilo-footer .subscribe-section .wpcf7-submit ,
        .appilo-scroll-to-top ,
        .header-navigation .container .right-side-box a:hover ,
        .appilo-preloader ,
        .appilo-footer .widget-title:after,
        .appilo-footer .sign-up-btn a:hover,
        .inner-banner:before {
            background: linear-gradient(to right, <?php echo esc_attr( $appilo_theme_main_color_1 ); ?> 0%, <?php echo esc_attr( $appilo_theme_main_color_2 ); ?> 98%, <?php echo esc_attr( $appilo_theme_main_color_2 ); ?> 100%);
        }

    .appilo-footer .appilo-footer-widget .social a:hover{
            background: linear-gradient(to right, <?php echo esc_attr( $appilo_theme_main_color_1 ); ?> 0%, <?php echo esc_attr( $appilo_theme_main_color_2 ); ?> 98%, <?php echo esc_attr( $appilo_theme_main_color_2 ); ?> 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    .appilo-footer .appilo-footer-widget .tweets-widget .owl-theme .owl-nav [class*=owl-] {
            background: <?php echo esc_attr( $appilo_theme_main_color_1 ); ?>;
        }

    .appilo-footer .appilo-footer-widget .tweets-widget .single-tweet > a ,
    .appilo-footer .appilo-footer-widget.tweets-widget .single-tweet p i{
            color: <?php echo esc_attr( $appilo_theme_main_color_1 ); ?>;
        }
        .testimonials-slider .bx-wrapper .bx-controls-direction a:hover ,
        .home-page-one .header-navigation.stricky-fixed ul.navigation-box > li.active > a,
        .home-page-one .header-navigation.stricky-fixed ul.navigation-box > li.current > a,
        .home-page-one .header-navigation.stricky-fixed ul.navigation-box > li > a:active,
        .home-page-one .header-navigation.stricky-fixed ul.navigation-box > li > a:focus,
        .home-page-one .header-navigation.stricky-fixed ul.navigation-box > li:hover > a ,
        .home-page-one .navbar-default .navbar-nav>li>a:focus,
        .home-page-one .navbar-default .navbar-nav>li>a:hover,
        .appilo-footer .appilo-footer-widget .menu li a:hover{
            color: <?php echo esc_attr( $appilo_theme_main_color_2 ); ?>;
        }
        .home-page-one .header-navigation ul.navigation-box > li > .sub-menu li:hover > a,
        .appilo-main .widget .tagcloud a:hover,
        .blog-details-page .single-blog-post-style-two .text-box .tags-box ul li a:hover{
            background: <?php echo esc_attr( $appilo_theme_main_color_2 ); ?>;
        }
        <?php endif;?>
        <?php if ($appilo_theme_color_switch == 'solid'):?>
        .appilo-footer .subscribe-section .wpcf7 ,
        .appilo-footer .subscribe-section .wpcf7-submit ,
        .appilo-scroll-to-top ,
        .header-navigation .container .right-side-box a:hover ,
        .appilo-preloader ,
        .appilo-main .widget .tagcloud a:hover,
        .appilo-footer .widget-title:after,
        .blog-details-page .single-blog-post-style-two .text-box .tags-box ul li a:hover,
        .home-page-one .sign-up-btn a:hover,
        .inner-banner:before {
            background: <?php echo esc_attr( $appilo_theme_main_color ); ?>;
        }
        .appilo-footer .subscribe-section .wpcf7-submit{
            border: 1px solid #fff;
        }
        .appilo-footer .appilo-footer-widget .social a:hover ,
        .appilo-footer .appilo-footer-widget .social a:hover{
         color: <?php echo esc_attr( $appilo_theme_main_color ); ?>;
        -webkit-text-fill-color: currentColor;
        }
        .testimonials-slider .bx-wrapper .bx-controls-direction a ,
        .appilo-footer .appilo-footer-widget .tweets-widget .single-tweet > a ,
        .appilo-footer .appilo-footer-widget .tweets-widget .single-tweet p i ,
        .header-navigation.stricky-fixed ul.navigation-box > li.active > a,
        .header-navigation.stricky-fixed ul.navigation-box > li.current > a,
        .header-navigation.stricky-fixed ul.navigation-box > li > a:active,
        .header-navigation.stricky-fixed ul.navigation-box > li > a:focus,
        .header-navigation.stricky-fixed ul.navigation-box > li:hover > a,
        .appilo-footer .appilo-footer-widget .menu li a:hover{
            color: <?php echo esc_attr( $appilo_theme_main_color ); ?>;
        }
        .appilo-footer .appilo-footer-widget .tweets-widget .owl-theme .owl-nav [class*=owl-] ,
        .header-navigation ul.navigation-box > li > .sub-menu li:hover > a{
            background: <?php echo esc_attr( $appilo_theme_main_color ); ?>;
        }
    <?php endif;?>
    .home-page-one.menu-bg-overlay {
        background: <?php echo esc_attr( $appilo_theme_sticky_color ); ?>;
    }
     <?php endif;?>

    <?php if(is_admin_bar_showing()):?>
        .main-header-eight{
            top: 52px;
        }
        .main-header-eight.eisticky-menu-bg-overlay{
            top: 32px;
        }
    <?php endif;?>

    <?php if ($theme_layout_style == 'layout2'):?>
     /*Topapp Dynamic Css*/
        .topapp-main .main-menu .navigation > li > a:before{
            background-image: linear-gradient(to right, <?php echo esc_attr($nav_hover_1);?> 0%, <?php echo esc_attr($nav_hover_2);?> 100%);
        }
        .topapp-main .btn-style-one{
            background-image: linear-gradient(to right, <?php echo esc_attr($menu_bt_1);?> 0%, <?php echo esc_attr($menu_bt_2);?> 100%);
        }
        .topapp-main .btn-style-one:hover{
            background-image: linear-gradient(to right, <?php echo esc_attr($menu_bt_2);?> 0%, <?php echo esc_attr($menu_bt_1);?> 100%);
        }
        .topapp-main .main-menu .navigation > li > ul > li:hover > a{
            background: <?php echo esc_attr($sub_menu_hover);?>;
        }
        .topapp-main .footer-sub-submit{
            background-image: linear-gradient(to right, <?php echo esc_attr($subscribe_btn_1);?> 0%, <?php echo esc_attr($subscribe_btn_2);?> 100%) !important;
        }
        .topapp-main .footer-sub-submit:hover{
            background-image: linear-gradient(to right, <?php echo esc_attr($subscribe_btn_2);?> 0%, <?php echo esc_attr($subscribe_btn_1);?> 100%) !important;
        }
        .topapp-scroll-to-top{
            background: <?php echo esc_attr($scroll_top);?>;
        }
        .topapp-scroll-to-top:hover{
            background: <?php echo esc_attr($scroll_top_hover);?>;
        }
    <?php endif;?>
     <?php if ($theme_layout_style == 'layout3'):?>
     .agency-blog-grids .grid:before,
     .app-btn-s1{
          background: -webkit-gradient(linear, left top, right top, from(<?php echo esc_attr( $galaxy_app_color_1 ); ?>), to(<?php echo esc_attr( $galaxy_app_color_2 ); ?>));
     }
     .app-contact-section .contact-block .contact-form .submit-btn .app-btn-s1:before{
         background: -webkit-gradient(linear, left top, right top, from(<?php echo esc_attr( $galaxy_app_color_2 ); ?>), to(<?php echo esc_attr( $galaxy_app_color_1 ); ?>));
     }
     <?php endif;?>

     <?php if ($theme_layout_style == 'layout4'):?>
     .agency-blog-grids .grid:before,
     .app-btn-s1,
     .header-style-2 nav.sticky{
         background: -webkit-gradient(linear, left top, right top, from(<?php echo esc_attr( $galaxy_agency_color_1 ); ?>), to(<?php echo esc_attr( $galaxy_agency_color_2 ); ?>));
     }
     .app-contact-section .contact-block .contact-form .submit-btn .app-btn-s1:before{
         background: -webkit-gradient(linear, left top, right top, from(<?php echo esc_attr( $galaxy_agency_color_2 ); ?>), to(<?php echo esc_attr( $galaxy_agency_color_1 ); ?>));
     }
     .galaxy .owl-nav .owl-prev:hover, .owl-nav .owl-next:hover{
         background: <?php echo esc_attr( $galaxy_agency_color_1 ); ?>;
     }
     <?php endif;?>

     <?php if ($theme_layout_style == 'layout5'):?>
     .agency-blog-grids .grid:before,
     .app-btn-s1,
     .header-style-2 nav.sticky{
         background: -webkit-gradient(linear, left top, right top, from(<?php echo esc_attr( $galaxy_cv_color_1 ); ?>), to(<?php echo esc_attr( $galaxy_cv_color_2 ); ?>));
     }
     .app-contact-section .contact-block .contact-form .submit-btn .app-btn-s1:before{
         background: -webkit-gradient(linear, left top, right top, from(<?php echo esc_attr( $galaxy_cv_color_2 ); ?>), to(<?php echo esc_attr( $galaxy_cv_color_1 ); ?>));
     }
     .galaxy .owl-nav .owl-prev:hover, .owl-nav .owl-next:hover{
         background: <?php echo esc_attr( $galaxy_cv_color_1 ); ?>;
     }
     .menu-after-slider ul li a:after{
         background: <?php echo esc_attr( $galaxy_cv_color_1 ); ?>;
     }
     <?php endif;?>
        <?php if (class_exists('WooCommerce')){
            if (is_product()){?>
            .woocommerce ul.products.columns-3 li.product {
                width: 100%;
                padding: 0px 20px;
            }

    <?php }
        }?>
     <?php if ($theme_layout_style == 'layout6'):?>
         .product-landing-footer:before{
             background-color: <?php echo esc_attr( $galaxy_product_footer_color ); ?>;
         }
     .product-landing-footer {
         background: url(<?php echo esc_url( $galaxy_product_footer_color ); ?>) center center/cover no-repeat local;
     }
     .newsletter-section .sub-form button,
     .product-landing-footer .newsletter-widget form .btn,
     .agency-blog-grids .grid:before{
         background: -webkit-gradient(linear, left top, right top, from(<?php echo esc_attr( $galaxy_product_color_1 ); ?>), to(<?php echo esc_attr( $galaxy_product_color_2 ); ?>));
     }
     .galaxy .owl-nav .owl-prev:hover, .owl-nav .owl-next:hover{
         background: <?php echo esc_attr( $galaxy_product_color_1 ); ?>;
     }
     .site-header #navbar > ul > .current-menu-item > a {
         color: <?php echo esc_attr( $galaxy_product_color_2 ); ?>;
     }
     .product-landing-pg-header #navbar > ul > li > a:before{
         background: <?php echo esc_attr( $galaxy_product_color_2 ); ?>;
     }
     <?php endif;?>
     <?php if ($sticky_enable): ?>
         .topapp-main .main-header.fixed-header {
             display: none;
         }
        .home-page-one .menu-bg-overlay{
            display: none;
        }
         .header-navigation.stricky-fixed {
             display: none;
         }
         .galaxy .sticky {
             display: none !important;
         }
        .menu-bg-overlay {
            display: none;
        }
        .saas_two_main_header.saas_2-menu-bg-overlay {
            display: none;
        }
        .main-header-eight.eisticky-menu-bg-overlay{
             display: none;
         }
        .appseo-main-header.appseo-sticky-header-overlay{
            display: none;
        }
        .dia-main-header.dia-sticky-menu {
            display: none;
        }
        .appl-sticky-menu {
            display: none;
        }
        .host-app-header-section .navbar.sticky{
            display: none;
        }
        .pm-main-header.pm-sticky-menu{
            display: none;
        }
        .soft-m-sticky-menu{
            display: none;
        }
        .hrm-sticky-menu{
            display: none;
        }
        .crm-sticky-menu{
            display: none;
        }
     <?php endif;?>
    <?php if ($theme_layout_style == 'layout7'):?>
    .footer_section {
        background-color: <?php echo esc_attr( $saas_footer_main_bg ); ?>;
    }
    .menu-bg-overlay {
        background-color: <?php echo esc_attr( $saas_sticky_bg ); ?>;
    }
    .sign_up_btn {
        background-color: <?php echo esc_attr( $saas_menu_btn_bg ); ?>;
    }
    .sign_up_btn {
        color: <?php echo esc_attr( $saas_menu_btn_txt ); ?>;
    }
    .newslatter_content {
        background-image: linear-gradient(-115deg, <?php echo esc_attr( $saas_primary_bg_1 ); ?> 0%, <?php echo esc_attr( $saas_primary_bg_2 ); ?> 100%);
    }
    .newslatter_content .newslatter-form .nws-button button {
        background-image: linear-gradient(-38deg, <?php echo esc_attr( $saas_primary_bg_1 ); ?> 0%, <?php echo esc_attr( $saas_primary_bg_2 ); ?> 100%);
    }
    .newslatter_content .newslatter-form .nws-button button:hover {
        background-image: linear-gradient(-38deg, <?php echo esc_attr( $saas_primary_bg_2 ); ?> 0%, <?php echo esc_attr( $saas_primary_bg_1 ); ?> 100%);
    }
    .scrollup {
        background-image: linear-gradient(-38deg, <?php echo esc_attr( $saas_primary_bg_2 ); ?> 0%, <?php echo esc_attr( $saas_primary_bg_1 ); ?> 100%);
    }
    .widget_title:after {
        background-image: linear-gradient(116deg, <?php echo esc_attr( $saas_primary_bg_2 ); ?> 0%, <?php echo esc_attr( $saas_primary_bg_1 ); ?> 100%);
    }
    .footer_widget .footer_social li:hover i {
        background-image: linear-gradient(-38deg, <?php echo esc_attr( $saas_primary_bg_1 ); ?> 0%, <?php echo esc_attr( $saas_primary_bg_1 ); ?> 100%);
    }
    .footer_widget .menu li:before {
        background-image: linear-gradient(116deg, <?php echo esc_attr( $saas_primary_bg_2 ); ?> 0%, <?php echo esc_attr( $saas_primary_bg_1 ); ?> 100%);
    }
    <?php endif;?>
    <?php if ($theme_layout_style == 'layout8'):?>
    .saas_two_main_header .dropdown .dropdown-menu {
        border-color: <?php echo esc_attr( $saas_classic_menu_after_before ); ?>;
    }
    .saas_two_main_header .s2-main-navigation .navbar-nav li a:before,
    .saas_two_main_header .dropdown .dropdown-menu li a:after {
        background-color: <?php echo esc_attr( $saas_classic_menu_after_before ); ?>;
    }
    .saas-classic-scrollup {
        background-image: linear-gradient(-45deg, <?php echo esc_attr( $saas_classic_top_1 ); ?> 32%, <?php echo esc_attr( $saas_classic_top_2 ); ?> 100%);
    }
    <?php endif;?>
    <?php if ($theme_layout_style == 'layout9'):?>
        .main-header-eight .appheader-content .sign-up-btn-eight{
            background: <?php echo esc_attr( $app_showcase_menu_btn_bg ); ?>;
        }
        .main-header-eight .appheader-content .sign-up-btn-eight{
            height: <?php echo esc_attr( $app_showcase_menu_btn_height ); ?>;
            width: <?php echo esc_attr( $app_showcase_menu_btn_width ); ?>;
            padding: <?php echo esc_attr( $app_showcase_menu_btn_padding ); ?>;
        }
        .main-header-eight .appheader-content .sign-up-btn-eight:hover{
            background: <?php echo esc_attr( $app_showcase_menu_btn_hover_bg ); ?>;
        }
        .ei-scrollup{
            background-image: linear-gradient(-45deg, <?php echo esc_attr( $app_showcase_top_1 ); ?> 32%, <?php echo esc_attr( $app_showcase_top_2 ); ?> 100%);
        }
    .eight-banner-section.ei-default-header:after{
        <?php if ($appilo_blog_details_bg){; ?>
        background-image: url('<?php echo esc_url( $appilo_blog_details_bg ); ?>');
        <?php }; ?>
    }
    .eight-banner-section.ei-default-header{
        background: linear-gradient(to right, <?php echo esc_attr( $app_showcase_blog_gradient_1 ); ?>, <?php echo esc_attr( $app_showcase_blog_gradient_2 ); ?>);
    }
    .ei-footer-copyright .ei-footer-copyright-content{
        border-top: <?php echo esc_html( $app_showcase_footer_border ); ?>;
        border-color: <?php echo esc_html( $app_showcase_footer_border_color ); ?>;
    }
    .ei-footer-section{
        padding: <?php echo esc_html( $app_showcase_footer_padding ); ?>;
    }
    <?php endif;?>

    <?php if ($theme_layout_style == 'layout10'):?>
        .appseo-main-header .header-button{
            height: <?php echo esc_attr( $appilo_seo_menu_btn_height ); ?>;
            width: <?php echo esc_attr( $appilo_seo_menu_btn_width ); ?>;
            background-image: linear-gradient(45deg, <?php echo esc_attr( $appilo_seo_btn_bg1 ); ?> 15%, <?php echo esc_attr( $appilo_seo_btn_bg2 ); ?> 100%);
        }
        .appseo-menu-wrapper .appseo-btn-hover:before{
            background-color: <?php echo esc_attr( $appilo_seo_menu_btn_bg_hover ); ?>;
        }
    .appseo-main-header .appseo-main-navigation .dropdown .dropdown-menu li a:hover{
        background-color: <?php echo esc_attr( $appilo_seo_sub_menu_bg_hover ); ?>;
    }
    <?php endif;?>
    <?php if ($theme_layout_style == 'layout11'):?>
        .str-footer-area {
            padding: <?php echo esc_attr( $app_startup_footer_padding); ?>;
        }
        .str-main-header .str-main-menu-item .str-main-navigation li a{
            padding: <?php echo esc_attr( $app_startup_main_menu_padding ); ?>;
        }
        .str-main-header .str-main-menu-item .str-main-navigation .dropdown .dropdown-menu li a{
            padding: <?php echo esc_attr( $app_startup_sub_menu_padding ); ?>;
        }
        .str-main-header .str-main-menu-item .str-main-navigation .dropdown .dropdown-menu li a:hover{
            background-color: <?php echo esc_attr( $app_startup_sub_menu_bg_hover ); ?>;
        }
        .str-main-header .str-main-menu-item .str-main-navigation li a:after{
            background-image: linear-gradient(125deg, <?php echo esc_attr( $app_startup_main_menu_bg_hover1 ); ?> 0%, <?php echo esc_attr( $app_startup_main_menu_bg_hover2 ); ?> 49%, <?php echo esc_attr( $app_startup_main_menu_bg_hover3 ); ?> 100%);
        }
    <?php endif;?>

    <?php if ($theme_layout_style == 'layout12'):?>
    .dia-main-header .dia-main-navigation li a {
        padding: <?php echo esc_attr( $dia_menu_padding ); ?>;
    }
    .dia-main-header .dropdown .dropdown-menu li a {
        padding: <?php echo esc_attr( $dia_sub_menu_padding ); ?>;
    }
    .dia-footer-section {
        padding: <?php echo esc_attr( $dia_footer_padding ); ?>;
    }
    .dia-main-header .dia-main-navigation li a:before {
        background-image: linear-gradient(81deg, <?php echo esc_attr( $dia_main_menu_bg_hover1 ); ?> 0%, <?php echo esc_attr( $dia_main_menu_bg_hover2 ); ?> 75%, <?php echo esc_attr( $dia_main_menu_bg_hover3 ); ?> 100%);
    }
    .dia-footer-copyright .dia-footer-copyright-content{
        border-color: <?php echo esc_attr( $dia_copyright_footer_border ); ?>;
    }
    <?php endif;?>

    <?php if ($theme_layout_style == 'layout13'):?>

    .appl-header-section .navbar-nav li a:before {
        background: linear-gradient(30deg, <?php echo esc_attr( $appl_main_menu_bg_hover1 ); ?> 0%, <?php echo esc_attr( $appl_main_menu_bg_hover2 ); ?> 100%);
    }
    .appl-header-section .appl_sign_up_btn {
        background: linear-gradient(30deg, <?php echo esc_attr( $appl_menu_btn_bg1 ); ?> 0%, <?php echo esc_attr( $appl_menu_btn_bg2 ); ?> 100%);
    }
    <?php endif;?>
    <?php if ($theme_layout_style == 'layout14'):?>
    .host-app-header-section .navbar .chat-box .btn-primary {
        box-shadow: 0 5px <?php echo esc_attr( $ch1_menu_btn_shadow ); ?>;
    }
    <?php endif;?>
    </style>
<?php }
add_action('wp_head', 'appilo_dynamic_css');

function appilo_customizer_styles() { ?>
    <style>
        .customize-control-title {
            font-weight: 700;
            border-radius: 10px;
            line-height: 40px;
            background: linear-gradient(to right, #6541c1 0%, #d43396 98%, #d43396 100%);
            color: #fff;
            margin-bottom: 10px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(239,66,70,0.30);
        }
        #customize-outer-theme-controls .accordion-section-title, #customize-theme-controls .accordion-section-title{
            padding: 20px 10px;
        }
        #customize-controls .current-panel .control-section>h3.accordion-section-title {
            padding: 15px;
        }
        #customize-controls .control-section .accordion-section-title:hover{
            color: #ffffff;
            background: linear-gradient(to right, #6541c1 0%, #d43396 98%, #d43396 100%);
        }
        #customize-controls .description {
            color: #088afd;
        }
        #customize-theme-controls .control-section {
            border: none;
            padding: 2px 0px;
        }
    </style>
    <?php
}
add_action( 'customize_controls_print_styles', 'appilo_customizer_styles', 999 );
?>