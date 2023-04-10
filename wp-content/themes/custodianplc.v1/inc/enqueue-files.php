<?php

/*
 *
 * Theme Version Function
 *
*/
function appilo_theme_version(){
    $appilotheme = wp_get_theme();
    $appilo_version = esc_html($appilotheme->get( 'Version' ));
    return $appilo_version;
}
/**
 * Enqueue scripts and styles.
 */
function appilo_scripts() {

    // Main Style of Appilo
    wp_enqueue_style( 'appilo-style', get_stylesheet_uri() );
    wp_enqueue_style( 'appilo-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', '', appilo_theme_version() );
    wp_style_add_data( 'appilo-bootstrap', 'rtl', 'replace' );
    wp_enqueue_style( 'app-showcase-icons', get_template_directory_uri() . '/css/plugins/appilo-icons-2/style.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-flaticon', get_template_directory_uri() . '/css/plugins/flaticon1/flaticon.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-icon-v3-1', get_template_directory_uri() . '/css/plugins/appilo-icons-3/css/flaticon.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-icon-v4-1', get_template_directory_uri() . '/css/plugins/appilo-icons-4/css/flaticon.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-icon-v3-2', get_template_directory_uri() . '/css/plugins/appilo-icons-3/css/elegenticon.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-fontawesome-min', get_template_directory_uri() . '/css/plugins/fontawesome-5/css/fontawesome-all.min.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-fontawesome-5', get_template_directory_uri() . '/css/plugins/fontawesome-5/css/fontawesome-pro-all.v5.15.min.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-fontawesome-5-2', get_template_directory_uri() . '/css/plugins/fontawesome-5/css/fontawesome-pro-v5.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-library', get_template_directory_uri() . '/css/appilo-library.css', '', appilo_theme_version() );
    wp_enqueue_style( 'appilo-woocommerce', get_template_directory_uri() . '/woocommerce/woocommerce.css', '', appilo_theme_version() );
    wp_enqueue_style( 'appilo-main', get_template_directory_uri() . '/css/appilo.css', '', appilo_theme_version() );
    wp_style_add_data( 'appilo-main', 'rtl', 'replace' );
    wp_enqueue_style( 'appilo-theme-style', get_template_directory_uri() . '/css/appilo-theme-style.css', '', appilo_theme_version() );
    wp_enqueue_style( 'saas-classic', get_template_directory_uri() . '/css/saas-classic.css', '', appilo_theme_version() );
    wp_style_add_data( 'saas-classic', 'rtl', 'replace' );
    wp_enqueue_style( 'app-showcase', get_template_directory_uri() . '/css/app-showcase.css', '', appilo_theme_version() );
    wp_style_add_data( 'app-showcase', 'rtl', 'replace' );
    wp_enqueue_style( 'digital-agency', get_template_directory_uri() . '/css/digital-agency.css', '', appilo_theme_version() );
    wp_style_add_data( 'digital-agency', 'rtl', 'replace' );
    wp_enqueue_style( 'gym-style', get_template_directory_uri() . '/css/gym-style.css', '', appilo_theme_version() );
    wp_enqueue_style( 'apl2-style', get_template_directory_uri() . '/css/apl2-style.css', '', appilo_theme_version() );
    wp_enqueue_style( 'prysm-style', get_template_directory_uri() . '/css/prysm.css', '', appilo_theme_version() );
    wp_enqueue_style( 'itsource-style', get_template_directory_uri() . '/css/itsource-style.css', '', appilo_theme_version() );
    wp_enqueue_style( 'digital-marketing', get_template_directory_uri() . '/css/digital-marketing.css', '', appilo_theme_version() );
    wp_enqueue_style( 'business-expert', get_template_directory_uri() . '/css/business-expert.css', '', appilo_theme_version() );
    wp_enqueue_style( 'appilo-applanding', get_template_directory_uri() . '/css/appilo-applanding.css', '', appilo_theme_version() );
    wp_enqueue_style( 'SEO-agency', get_template_directory_uri() . '/css/seo-agency.css', '', appilo_theme_version() );
    wp_enqueue_style( 'appilo-resume', get_template_directory_uri() . '/css/appilo-resume.css', '', appilo_theme_version() );
    wp_enqueue_style( 'demo-pages', get_template_directory_uri() . '/css/demo-page.css', '', appilo_theme_version() );
    wp_enqueue_style( 'crypto-css', get_template_directory_uri() . '/css/crypto.css', '', appilo_theme_version() );
    wp_enqueue_style( 'nft-landing-css', get_template_directory_uri() . '/css/nft-landing.css', '', appilo_theme_version() );
    wp_enqueue_style( 'app3-landing', get_template_directory_uri() . '/css/app3-landing.css', '', appilo_theme_version() );
    wp_enqueue_style( 'metisMenu', get_template_directory_uri() . '/css/metisMenu.css', '', appilo_theme_version() );
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/css/uikit.min.css', '', appilo_theme_version() );
    wp_enqueue_style( 'sass-landing', get_template_directory_uri() . '/css/sass-landing.css', '', appilo_theme_version() );
    wp_enqueue_style( 'appilo-animate-css', get_template_directory_uri() . '/css/animate.min.css', '', appilo_theme_version() );
    wp_enqueue_style( 'saas-app', get_template_directory_uri() . '/css/saas-app.css', '', appilo_theme_version() );
    wp_enqueue_style( 'bigo-style', get_template_directory_uri() . '/css/bigo-style.css', '', appilo_theme_version() );

//    Enqueue styles for Demo page 3
    if (is_page_template('layouts/demo-page-layout-3.php')){
        wp_dequeue_style('appilo-bootstrap');
//        wp_dequeue_style('appilo-fontawesome-min');
        wp_enqueue_style( 'bootstrap-v5', get_template_directory_uri() . '/css/bootstrap.v5.css', '', appilo_theme_version() );
//        wp_enqueue_style( 'fontawesome-pro-v5', get_template_directory_uri() . '/css/plugins/fontawesome-5/css/fontawesome-pro-all.v5.15.min.css', '', appilo_theme_version() );
        wp_enqueue_style( 'appilo-demo-page-3', get_template_directory_uri() . '/css/appilo-demo-page-3.css', '', appilo_theme_version() );

    }
    wp_enqueue_style( 'itsouce-2', get_template_directory_uri() . '/css/itsource-2.css', '', appilo_theme_version() );



    // Start Enqueue JS Script
    // Main Script
    wp_enqueue_script( 'appilo-js-plugin', get_template_directory_uri() . '/js/appilo-js-plugin.js', array(), appilo_theme_version(), true );
    wp_enqueue_script( 'appilo-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), appilo_theme_version(), true );
    wp_enqueue_script( 'appilo-swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), appilo_theme_version(), true );
    wp_enqueue_script( 'appilo-woocommerce', get_template_directory_uri() . '/woocommerce/woocommerce.js', array(), appilo_theme_version(), true );
    wp_enqueue_script( 'appilo-theme-custom', get_template_directory_uri() . '/js/appilo-theme-custom.min.js', array(), appilo_theme_version(), true );
    wp_enqueue_script( 'knob-js', get_template_directory_uri() . '/js/knob.js', array(), appilo_theme_version(), true );
    wp_enqueue_script( 'appilo-typeit', get_template_directory_uri() . '/js/typeit.js', array(), appilo_theme_version(), true );
    wp_enqueue_script('appilo-core-main' , get_template_directory_uri() . '/js/main.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('appilo-gym' , get_template_directory_uri() . '/js/gym.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('app_landing_2' , get_template_directory_uri() . '/js/app-landing-2.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('app-land-scripts-new' , get_template_directory_uri() . '/js/app-land-scripts.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('prysm' , get_template_directory_uri() . '/js/prysm.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('itsource' , get_template_directory_uri() . '/js/itsource.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('digital-marketing' , get_template_directory_uri() . '/js/digital-marketing.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('business-expert' , get_template_directory_uri() . '/js/business-expert.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('seo-agency' , get_template_directory_uri() . '/js/seo-agency.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('appilo-resume' , get_template_directory_uri() . '/js/appilo-resume.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('appilo-demo-page' , get_template_directory_uri() . '/js/demo-page.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('countdown-js' , get_template_directory_uri() . '/js/countdown.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('crypto-js' , get_template_directory_uri() . '/js/crypto.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('nft-landing-js' , get_template_directory_uri() . '/js/nft-landing.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('app2-landing-js' , get_template_directory_uri() . '/js/app2-landing-scripts.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('itsource-2' , get_template_directory_uri() . '/js/itsource-2.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('metisMenu' , get_template_directory_uri() . '/js/metisMenu.min.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('uikit' , get_template_directory_uri() . '/js/uikit.min.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('sass-landing' , get_template_directory_uri() . '/js/sass-landing.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('saas-app' , get_template_directory_uri() . '/js/saas-app.js', array(),  appilo_theme_version(), true);
    wp_enqueue_script('bigo-js' , get_template_directory_uri() . '/js/bigo.js', array(),  appilo_theme_version(), true);

    //    Enqueue Script for Demo page 3
    if (is_page_template('layouts/demo-page-layout-3.php')){
        wp_dequeue_script('appilo-bootstrap');

        wp_enqueue_script('bootstrap-min-v5' , get_template_directory_uri() . '/js/bootstrap.min.v5.js', array(),  appilo_theme_version(), true);

        wp_enqueue_script('appilo-demo-page-3-js' , get_template_directory_uri() . '/js/appilo-demo-page-3.js', array(),  appilo_theme_version(), true);
    }


//    Mouse Cursor style
    $mouse_cursor = get_theme_mod('appilo_mouse_cursor');
    if ($mouse_cursor){
        wp_enqueue_style( 'custom-cursor-css', get_template_directory_uri() . '/css/custom-cursor-style.css', '', appilo_theme_version() );

        wp_enqueue_script('gsap-for-cursor' , '//cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js', array(),  appilo_theme_version(), true);

        wp_enqueue_script('custom-cursor' , get_template_directory_uri() . '/js/custom-cursor.js', array(),  appilo_theme_version(), true);

    }
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'appilo_scripts' );
