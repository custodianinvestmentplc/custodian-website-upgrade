<?php
/**
 * Appilo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Appilo
 */

if(!defined('DEV_MODE')){
    define('DEV_MODE', true);
}

if ( ! function_exists( 'appilo_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function appilo_setup()
    {
        /**
         * Register widget area.
         *
         * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
         */
        function appilo_widgets_init()
        {
            //Default Sidebar
            register_sidebar(array(
                'name' => esc_html__('Default Sidebar', 'appilo'),
                'id' => 'default-sidebar',
                'description' => esc_html__('Add widgets here.', 'appilo'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));
            register_sidebar(array(
                'name' => esc_html__('Default Left Sidebar', 'appilo'),
                'id' => 'left-sidebar',
                'description' => esc_html__('Add widgets here.', 'appilo'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));
            register_sidebar(array(
                'name' => esc_html__('Default Right Sidebar', 'appilo'),
                'id' => 'right-sidebar',
                'description' => esc_html__('Add widgets here.', 'appilo'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));
            if (appilo_dynamic_footer_widget('footer1')) {
                //Appilo Blog Sidebar
                register_sidebar(array(
                    'name' => esc_html__('Appilo Blog Sidebar', 'appilo'),
                    'id' => 'appilo-sidebar',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<section id="%1$s" class="widget %2$s">',
                    'after_widget' => '</section>',
                    'before_title' => '<h2 class="widget-title">',
                    'after_title' => '</h2>',
                ));
                //Appilo Footer Widgets
                register_sidebar(array(
                    'name' => 'Appilo Footer Widget',
                    'id' => 'appilo_main_footer_widget',
                    'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-12 appilo-footer-widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="title"><h3>',
                    'after_title' => '</h3></div>',
                ));
            }
                //Topapp Blog Sidebar
                register_sidebar(array(
                    'name' => esc_html__('Topapp Blog Sidebar', 'appilo'),
                    'id' => 'blog-sidebar',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => ' <div class="sidebar-title"><h4>',
                    'after_title' => '</h4></div>',
                ));
            if (appilo_dynamic_footer_widget('footer2')) {
                //Topapp Footer Widgets
                register_sidebar(array(
                    'name' => esc_html__('Topapp Footer Widget', 'appilo'),
                    'id' => 'topapp-footer-widget',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="footer-column col-lg-4 col-md-6 col-sm-12 %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => ' <div class="sidebar-title"><h4>',
                    'after_title' => '</h4></div>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer3') || appilo_dynamic_footer_widget('footer4') || appilo_dynamic_footer_widget('footer5')) {
                //Galaxy Blog Sidebar
                register_sidebar(array(
                    'name' => esc_html__('Galaxy Blog Sidebar', 'appilo'),
                    'id' => 'galaxy-sidebar',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));

                //Galaxy Footer Widget
                register_sidebar(array(
                    'name' => esc_html__('Galaxy Footer Widget One', 'appilo'),
                    'id' => 'galaxy_footer_one',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="col col-sm-2 footer-logo-wrapper %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => esc_html__('Galaxy Footer Widget Two', 'appilo'),
                    'id' => 'galaxy_footer_two',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="col col-sm-7 copyright-info-wrapper %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => esc_html__('Galaxy Footer Widget Three', 'appilo'),
                    'id' => 'galaxy_footer_three',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="col col-sm-3 social-links-wrapper %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
            }
            if (class_exists('Woocommerce')) {
                // Products Landing Widget
                register_sidebar(array(
                    'name' => esc_html__('Products Landing Footer One', 'appilo'),
                    'id' => 'products_widget_footer_one',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="col-md-2 %2$s"><div class="widget">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => esc_html__('Products Landing Footer Two', 'appilo'),
                    'id' => 'products_widget_footer_two',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="col-md-2 %2$s"><div class="widget">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => esc_html__('Products Landing Footer Three', 'appilo'),
                    'id' => 'products_widget_footer_three',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="col-md-4 %2$s"><div class="widget site-map-widget">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => esc_html__('Products Landing Footer Four', 'appilo'),
                    'id' => 'products_widget_footer_four',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="col-md-4 %2$s"><div class="widget newsletter-widget">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => esc_html__('Shop Sidebar', 'appilo'),
                    'id' => 'sidebar-shop',
                    'description' => esc_html__('Add widgets here.', 'appilo'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer7')) {
                // Appilo SaaS
                register_sidebar(array(
                    'name' => 'SaaS Footer Widget',
                    'id' => 'saas_footer_widget',
                    'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 %2$s"><div class="footer_widget">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="widget_title relative-position">',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer8')) {
                // SaaS Classic
                register_sidebar(array(
                    'name' => 'SaaS Classic Footer Widget',
                    'id' => 'saas_classic_footer_widget',
                    'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-12 %2$s"><div class="s2_footer_widget clearfix ul-li-block saas2-headline">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="s2_widget_title"><span>',
                    'after_title' => '</span><i></i></h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer9')) {
                // App Showcase
                register_sidebar(array(
                    'name' => 'App Showcase Footer Widget',
                    'id' => 'app_showcase_footer_widget',
                    'before_widget' => '<div id="%1$s" class="col-lg-4 %2$s"><div class="ei-footer-widget pera-content appeight-headline ul-li-block">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="ei-widget-title">',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer10')) {
                // Appilo SEO
                register_sidebar(array(
                    'name' => 'Appilo SEO Footer Widget 1',
                    'id' => 'appilo_seo_footer_widget_1',
                    'before_widget' => '<div id="%1$s" class="col-lg-6 %2$s"><div class="appseo-footer-widget ul-li-block">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="appseo-widget-title">',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => 'Appilo SEO Footer Widget 2',
                    'id' => 'appilo_seo_footer_widget_2',
                    'before_widget' => '<div id="%1$s" class="col-lg-3 %2$s"><div class="appseo-footer-widget ul-li-block">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="appseo-widget-title">',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer11')) {
                // App Startup
                register_sidebar(array(
                    'name' => 'App Startup Footer Widgets',
                    'id' => 'app_startup_footer_widget',
                    'before_widget' => '<div id="%1$s" class="col-lg-3 %2$s"><div class="str-footer-widget str-headline pera-content">',
                    'after_widget' => '</div></div>',
                    'before_title' => ' <h3 class="str-widget-title">',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer12')) {
                // Digital Agency
                register_sidebar(array(
                    'name' => 'Digital Agency Footer Widget',
                    'id' => 'digital_agency_footer_widget',
                    'before_widget' => '<div id="%1$s" class="col-lg-4 %2$s"><div class="dia-footer-widget pera-content dia-headline ul-li-block">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="dia-widget-title">',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer16') || appilo_dynamic_footer_widget('footer15') || appilo_dynamic_footer_widget('footer14')) {
                // Cloud Hosting 1
                register_sidebar(array(
                    'name' => 'Cloud Hosting Footer Widget',
                    'id' => 'cloud_hosting_one_footer_widget',
                    'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-6 %2$s"><div class="footer-wrapper last-wrapper">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer17')) {
                // HRM
                register_sidebar(array(
                    'name' => 'HRM Footer One Widget',
                    'id' => 'hrm_one_footer_widget',
                    'before_widget' => '<div id="%1$s" class="pm-footer-widget pm-headline pera-content %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => 'HRM Footer Two Widget',
                    'id' => 'hrm_two_footer_widget',
                    'before_widget' => '<div id="%1$s" class="pm-footer-widget pm-headline pera-content %2$s"><div class="pm-footer-menu-widget ul-li-block">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer18')) {
                // CRM
                register_sidebar(array(
                    'name' => 'CRM Footer One Widget',
                    'id' => 'crm_one_footer_widget',
                    'before_widget' => '<div id="%1$s" class="crm-footer-widget crm-headline pera-content %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => 'CRM Footer Two Widget',
                    'id' => 'crm_two_footer_widget',
                    'before_widget' => '<div id="%1$s" class="crm-footer-widget crm-headline pera-content %2$s"><div class="crm-footer-menu-widget ul-li-block">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>',
                ));
            }
            if (appilo_dynamic_footer_widget('footer19')) {
                // SMM
                register_sidebar(array(
                    'name' => 'SMM Footer One Widget',
                    'id' => 'smm_one_footer_widget',
                    'before_widget' => '<div id="%1$s" class="smm-footer-widget smm-headline pera-content %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>',
                ));
                register_sidebar(array(
                    'name' => 'SMM Footer Two Widget',
                    'id' => 'smm_two_footer_widget',
                    'before_widget' => '<div id="%1$s" class="smm-footer-widget smm-headline pera-content %2$s"><div class="smm-footer-menu-widget ul-li-block">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>',
                ));
            }
        if (appilo_dynamic_footer_widget('footer20')) {
            // Software
            register_sidebar(array(
                'name' => 'Software Footer One Widget',
                'id' => 'soft_m_one_footer_widget',
                'before_widget' => '<div id="%1$s" class="soft-m-footer-widget soft-m-headline pera-content %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));
            register_sidebar(array(
                'name' => 'Software Footer Two Widget',
                'id' => 'soft_m_two_footer_widget',
                'before_widget' => '<div id="%1$s" class="soft-m-footer-widget soft-m-headline pera-content %2$s"><div class="soft-m-footer-menu-widget ul-li-block">',
                'after_widget' => '</div></div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));
        }
        if (appilo_dynamic_footer_widget('footer21')) {
            // Software
            register_sidebar(array(
                'name' => 'SEO 2 Footer One Widget',
                'id' => 'seo2_one_footer_widget',
                'before_widget' => '<div id="%1$s" class="seo-2-footer-widget seo-2-headline ul-li-block %2$s"><div class="footer-menu-widget">',
                'after_widget' => '</div></div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));
            register_sidebar(array(
                'name' => 'SEO 2 Footer Two Widget',
                'id' => 'seo2_two_footer_widget',
                'before_widget' => '<div id="%1$s" class="seo-2-footer-widget seo-2-headline ul-li-block %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ));
        }
        if (appilo_dynamic_footer_widget('footer22')) {
            // Software
            register_sidebar(array(
                'name' => 'Medical Footer Widget',
                'id' => 'medical_footer_widget',
                'before_widget' => '<div id="%1$s" class="col-lg-4 %2$s"><div class="app-medi-footer-widget app-medi-headline pera-content ul-li-block">',
                'after_widget' => '</div></div>',
                'before_title' => '<h3 class="medi-app-widget-title">',
                'after_title' => '</h3>',
            ));
        }

        }

        add_action('widgets_init', 'appilo_widgets_init');
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Appilo, use a find and replace
         * to change 'appilo' to the name of your theme in all the template files.
         */
        load_theme_textdomain('appilo', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /*
         *WooCommerce Support
         */
        add_theme_support('woocommerce');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'main_menu' => esc_html__('Main Menu', 'appilo'),
            'multi_page_menu' => esc_html__('Multi Page Menu', 'appilo'),
            'copyright_menu' => esc_html__('Copyright Menu', 'appilo'),
            'main_bottom_menu' => esc_html__('Main Bottom Menu', 'appilo'),
        ));


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('appilo_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        //add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
        /**
         * Add support for Gutenberg.
         *
         * @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
         */

        // Theme supports wide images, galleries and videos.
        add_theme_support('align-wide');

        // remove block widget support
        remove_theme_support( 'widgets-block-editor' );

        // Make specific theme colors available in the editor.
        add_theme_support('editor-color-palette', array(
            array(
                'name' => __('Light gray', 'appilo'),
                'slug' => 'light-gray',
                'color' => '#f5f5f5',
            ),
            array(
                'name' => __('Medium gray', 'appilo'),
                'slug' => 'medium-gray',
                'color' => '#999',
            ),
            array(
                'name' => __('Dark gray', 'appilo'),
                'slug' => 'dark-gray',
                'color' => '#222a36',
            ),

            array(
                'name' => __('Purple', 'appilo'),
                'slug' => 'purple',
                'color' => '#5a00f0',
            ),

            array(
                'name' => __('Dark Blue', 'appilo'),
                'slug' => 'dark-blue',
                'color' => '#28375a',
            ),

            array(
                'name' => __('Red', 'appilo'),
                'slug' => 'red',
                'color' => '#c44d58',
            ),

            array(
                'name' => __('Yellow', 'appilo'),
                'slug' => 'yellow',
                'color' => '#ecca2e',
            ),

            array(
                'name' => __('Green', 'appilo'),
                'slug' => 'green',
                'color' => '#64a500',
            ),

            array(
                'name' => __('White', 'appilo'),
                'slug' => 'white',
                'color' => '#ffffff',
            ),
        ));

        add_theme_support('editor-font-sizes', array(
            array(
                'name' => __('Small', 'appilo'),
                'size' => 14,
                'slug' => 'small'
            ),
            array(
                'name' => __('Normal', 'appilo'),
                'size' => 16,
                'slug' => 'normal'
            ),
            array(
                'name' => __('Large', 'appilo'),
                'size' => 26,
                'slug' => 'large'
            ),
            array(
                'name' => __('Huge', 'appilo'),
                'size' => 36,
                'slug' => 'huge'
            )
        ));
        add_theme_support('wp-block-styles');
        add_theme_support('editor-styles');
        add_editor_style('style-editor.css');
        add_theme_support('responsive-embeds');
    }
}

add_action( 'after_setup_theme', 'appilo_setup' );


//Theme customizer

function appilo_customize_remove( $wp_customize ) {
    //All our sections, settings, and controls will be added here

    $wp_customize->remove_section( 'colors');
    $wp_customize->remove_section( 'header_image');
    $wp_customize->remove_section( 'background_image');

}
add_action( 'customize_register', 'appilo_customize_remove' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function appilo_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'appilo_content_width', 640 );
}
add_action( 'after_setup_theme', 'appilo_content_width', 0 );

function appilo_admin_css() {
    wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'appilo_admin_css' );


/**
 * Required php files
*/
require get_template_directory() . '/css/dynamic-css.php';

require get_template_directory() . '/inc/enqueue-files.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Check if WooCommerce is activated
 */
if (class_exists('WooCommerce')) {
    require_once get_template_directory() . '/woocommerce/woo-functions.php';
}

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/tgm-init.php';

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function itsource2_header_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form-area" action="' . home_url( '/' ) . '" >
                <input class="search-input" type="search" value="' . get_search_query() . '" name="s" id="s" />
                <button type="submit" class="search-btn1">
                    <i class="fas fa-search"></i>
                </button>
            </form>';
    return $form;
}
add_filter( 'get_search_form', 'itsource2_header_search_form' );

function bigo_header_search_form() {
    ?>
    <form role="search" method="get" class="searchForm inline-block" action="<?php echo home_url( '/' ) ?>">
        <div class="form-wrapper">
            <input class="searchBar" name="s" id="s" required="" placeholder="Search" value="<?php echo get_search_query() ?>">
            <button type="submit" class="subscribeBtn">
                <i class="fas fa-angle-right" aria-hidden="true"></i>
            </button>
        </div>
    </form>
    <?php
}







