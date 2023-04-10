<?php

/*
 * All Elementor Init
 * Author & Copyright: themexriver
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!class_exists('Appilo_Core')) {
        final class Appilo_Core {

            /*
             * Minimum Elementor Version
            */
            const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

            /*
             * Minimum PHP Version
            */
            const MINIMUM_PHP_VERSION = '7.0';

            //Control
            const LIST_CONTROL = 'appilo_lists_control';

            /*
               * Instance
              */
            private static $instance;

            public static function instance() {

                if (!isset(self::$instance) && !(self::$instance instanceof Appilo_Core)) {

                    self::$instance = new Appilo_Core;

                    self::$instance->setup_constants();

                    self::$instance->hooks();

                    self::$instance->includes();

                }
                return self::$instance;
            }

            public function includes() {
                $elementor_functions = glob(APPILO_ELEMENTOR_PATH.'widget-functions/*.php');

                //Loop through the array that glob returned.
                foreach($elementor_functions as $file){
                    require_once $file;
                }
            }

            public function __clone() {
                // Cloning instances of the class is forbidden
                _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'appilo'), APPILO_CORE_VERSION);
            }

            /**
             * Disable unserializing of the class
             *
             */
            public function __wakeup() {
                // Unserializing instances of the class is forbidden
                _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'appilo'), APPILO_CORE_VERSION);
            }

            private function setup_constants() {
                define( 'APPILO_ELEMENTOR_URL', plugins_url( '/', __FILE__ ) );
                define( 'APPILO_ELEMENTOR_PATH', plugin_dir_path( __FILE__ ) );
            }

            /*
             * Main Appilo Core plugin Class Constructor
            */
            private function hooks() {

                add_action('plugins_loaded', [$this, 'init']);

                add_action('elementor/editor/before_enqueue_scripts', array($this, 'register_elementor_editor_style'), 10);

                add_action('elementor/frontend/after_enqueue_styles', array($this, 'register_elementor_style'), 10);

                add_action('elementor/frontend/after_enqueue_scripts', array($this, 'register_frontend_scripts'), 10);

                add_action('elementor/init', array($this, 'add_elementor_category'), 10);
                add_action('elementor/widgets/widgets_registered', array($this, 'appilo_elementor_elements'), 10);
                add_filter( 'elementor/icons_manager/additional_tabs', array($this, 'appilo_custom_icons_tabs' ), 10);
                add_action('elementor/controls/controls_registered', array($this, 'init_controls'), 10);

                add_action('template_redirect', function () {
                    $instance = \Elementor\Plugin::$instance->templates_manager->get_source('local');
                    remove_action('template_redirect', [$instance, 'block_template_frontend']);
                }, 9);

            }

            public function register_frontend_scripts() {
                wp_enqueue_script('appilo-elementor-editor', APPILO_ASSETS_FILE . 'assets/js/elementor-editor.js', array('jquery'), APPILO_CORE_VERSION, true);
            }

            public function register_elementor_editor_style() {
                wp_enqueue_style('appilo-elementor-custom-editor', APPILO_ASSETS_FILE . 'assets/css/elementor-custom-editor.css', array(), APPILO_CORE_VERSION);
            }

            public function register_elementor_style() {
                wp_enqueue_style('appilo-elementor-frontend', APPILO_ASSETS_FILE . 'assets/css/elementor-editor.css');
            }

            public function add_elementor_category() {
                \Elementor\Plugin::instance()->elements_manager->add_category(
                    'appilo-core',
                    [
                        'title'  => 'Appilo Core',
                        'icon' => 'font'
                    ],
                    1
                );
                \Elementor\Plugin::instance()->elements_manager->add_category(
                    'appilo-footer',
                    [
                        'title'  => 'Appilo Footer',
                        'icon' => 'font'
                    ],
                    1
                );
                \Elementor\Plugin::instance()->elements_manager->add_category(
                    'appilo-header',
                    [
                        'title'  => 'Appilo Header',
                        'icon' => 'font'
                    ],
                    1
                );
            }

            public function appilo_custom_icons_tabs( $tabs = array() ) {

                $tabs['appilo-icons-1'] = array(
                    'name' => 'appilo-icons-1',
                    'label' => __( 'Appilo Icons v1', 'appilo' ),
                    'url' =>  APPILO_ASSETS_FILE . 'assets/flaticon1/flaticon.css',
                    'prefix' => 'flaticon-',
                    'displayPrefix' => 'icon-v1',
                    'labelIcon' => 'flaticon-dashboard',
                    'ver' => '3.0.1',
                    'native' => true,
                    'fetchJson' => APPILO_ASSETS_FILE . 'assets/flaticon1/icons-1.json',
                );
                $tabs['appilo-icons-2'] = array(
                    'name' => 'appilo-icons-2',
                    'label' => __( 'Appilo Icons v2', 'appilo' ),
                    'url' =>  APPILO_ASSETS_FILE . 'assets/appilo-icons-2/style.css',
                    'prefix' => 'appilo-icon-',
                    'displayPrefix' => 'appilo-icon-v2',
                    'labelIcon' => 'appilo-icon-visibility',
                    'ver' => '3.0.1',
                    'native' => true,
                    'fetchJson' => APPILO_ASSETS_FILE . 'assets/appilo-icons-2/icons-2.json',
                );
                $tabs['appilo-icons-3'] = array(
                    'name' => 'appilo-icons-3',
                    'label' => __( 'Appilo Icons v3', 'appilo' ),
                    'url' =>  APPILO_ASSETS_FILE . 'assets/appilo-icons-3/css/flaticon.css',
                    'prefix' => 'flaticon-',
                    'displayPrefix' => 'icon-v3',
                    'labelIcon' => 'flaticon-accept',
                    'ver' => '3.0.1',
                    'native' => true,
                    'fetchJson' => APPILO_ASSETS_FILE . 'assets/appilo-icons-3/icons-3.json',
                );
                $tabs['appilo-icons-4'] = array(
                    'name' => 'appilo-icons-4',
                    'label' => __( 'Appilo Icons v4', 'appilo' ),
                    'url' =>  APPILO_ASSETS_FILE . 'assets/appilo-icons-3/css/elegenticon.css',
                    'prefix' => '',
                    'displayPrefix' => 'icon-v4',
                    'labelIcon' => 'icon_search',
                    'ver' => '3.0.1',
                    'native' => true,
                    'fetchJson' => APPILO_ASSETS_FILE . 'assets/appilo-icons-3/icons-4.json',
                );
                $tabs['appilo-icons-5'] = array(
                    'name' => 'appilo-icons-5',
                    'label' => __( 'Appilo Icons v5', 'appilo' ),
                    'url' =>  APPILO_ASSETS_FILE . 'assets/appilo-icons-4/css/flaticon.css',
                    'prefix' => 'flaticon-',
                    'displayPrefix' => 'icon-v5',
                    'labelIcon' => 'flaticon-dumbbell',
                    'ver' => '3.0.1',
                    'native' => true,
                    'fetchJson' => APPILO_ASSETS_FILE . 'assets/appilo-icons-4/icons-4-1.json',
                );
                $tabs['appilo-icons-6'] = array(
                    'name' => 'appilo-icons-6',
                    'label' => __( 'Appilo Icons v6', 'appilo' ),
                    'url' =>  APPILO_ASSETS_FILE . 'assets/appilo-icons-6/css/flaticon.css',
                    'prefix' => 'appilo-v6-',
                    'displayPrefix' => 'icon-v6',
                    'labelIcon' => 'appilo-v6-botanic',
                    'ver' => '3.0.1',
                    'native' => true,
                    'fetchJson' => APPILO_ASSETS_FILE . 'assets/appilo-icons-6/icons.json',
                );

                return $tabs;
            }

            public function appilo_elementor_elements(){
                $custom_widget_list = glob(APPILO_ELEMENTOR_PATH.'widgets/*/*.php');

                //Loop through the array that glob returned.
                foreach($custom_widget_list as $custom_widget){
                    require_once $custom_widget;
                }
            }

            //Register Control
            public function init_controls()
            {

                require_once(APPILO_INC_FILE . '/inc/controls/class-control-list.php');

                $controls_manager = \Elementor\Plugin::$instance->controls_manager;

                $controls_manager->register_control(self::LIST_CONTROL, new Appilo_Lists_Control());
            }

            /*
             * Initialize the plugin
            */
            public function init()
            {
                // Check if Elementor installed and activated
                if (!did_action('elementor/loaded')) {
                    add_action('admin_notices', [$this, 'admin_notice_missing_main_plugin']);
                    return;
                }

                // Check for required Elementor version
                if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
                    add_action('admin_notices', [$this, 'admin_notice_minimum_elementor_version']);
                    return;
                }

                // Check for required PHP version
                if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
                    add_action('admin_notices', [$this, 'admin_notice_minimum_php_version']);
                    return;
                }

            }

            /*
             * Admin notice
             * Warning when the site doesn't have Elementor installed or activated.
            */
            public function admin_notice_missing_main_plugin()
            {
                if (isset($_GET['activate'])) unset($_GET['activate']);
                $message = sprintf(
                /* translators: 1: Plugin name 2: Elementor */
                    esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'appilo'),
                    '<strong>' . esc_html__('Appilo Core', 'appilo') . '</strong>',
                    '<strong>' . esc_html__('Elementor', 'appilo') . '</strong>'
                );
                printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
            }

            /*
             * Admin notice
             * Warning when the site doesn't have a minimum required Elementor version.
            */
            public function admin_notice_minimum_elementor_version()
            {
                if (isset($_GET['activate'])) unset($_GET['activate']);
                $message = sprintf(
                /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
                    esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'appilo'),
                    '<strong>' . esc_html__('Appilo Core', 'appilo') . '</strong>',
                    '<strong>' . esc_html__('Elementor', 'appilo') . '</strong>',
                    self::MINIMUM_ELEMENTOR_VERSION
                );
                printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
            }

            /*
             * Admin notice
             * Warning when the site doesn't have a minimum required PHP version.
            */
            public function admin_notice_minimum_php_version()
            {
                if (isset($_GET['activate'])) unset($_GET['activate']);
                $message = sprintf(
                /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
                    esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'appilo'),
                    '<strong>' . esc_html__('Appilo Core', 'appilo') . '</strong>',
                    '<strong>' . esc_html__('PHP', 'appilo') . '</strong>',
                    self::MINIMUM_PHP_VERSION
                );
                printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
            }


        } //end class

    function Appilo_Core_Run() {
        return Appilo_Core::instance();
    }
    Appilo_Core_Run();
}
