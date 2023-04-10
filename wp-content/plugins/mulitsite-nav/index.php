<?php
/**
 * Plugin Name:       MultiSite Shared Navigation
 * Plugin URI:        https://themexriver.com
 * Description:       Multi Site Shared Menu wordpress global menu.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      5.6
 * Author:            Themexriver
 * Author URI:        https://themexriver.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       msnav
 * Domain Path:       /languages
 */

// Security
if (!defined('WPINC')){
    die;
}

if (!class_exists('Msnav_Main_Class')) :

    /**
     * Main Msnav_Main_Class Class
     *
     */
    final class Msnav_Main_Class {

        /** Singleton *************************************************************/

        private static $instance;

        /**
         * Main Msnav_Main_Class Instance
         *
         * Insures that only one instance of Msnav_Main_Class exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         */
        public static function instance()
        {

            if (!isset(self::$instance) && !(self::$instance instanceof Msnav_Main_Class)) {

                self::$instance = new Msnav_Main_Class;

                self::$instance->setup_constants();

                self::$instance->hooks();

                self::$instance->includes();

            }
            return self::$instance;
        }

        /**
         * Throw error on object clone
         *
         * The whole idea of the singleton design pattern is that there is a single
         * object therefore, we don't want the object to be cloned.
         */
        public function __clone() {
            // Cloning instances of the class is forbidden
            _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'msnav'), '1.0.0');
        }

        /**
         * Disable unserializing of the class
         *
         */
        public function __wakeup() {
            // Unserializing instances of the class is forbidden
            _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'msnav'), '1.0.0');
        }

        /**
         * Setup plugin constants
         *
         */
        private function setup_constants()
        {

            // Plugin version
            if (!defined('MSNAV_VERSION')) {
                define('MSNAV_VERSION', '1.0.0');
            }

            // Plugin Folder Path
            if (!defined('MSNAV_PLUGIN_DIR')) {
                define('MSNAV_PLUGIN_DIR', plugin_dir_path(__FILE__));
            }

            // Plugin Inc Folder Path
            if (!defined('MSNAV_PLUGIN_INC_DIR')) {
                define('MSNAV_PLUGIN_INC_DIR', plugin_dir_path(__FILE__) . 'inc/');
            }
            // Plugin Inc Folder Path
            if (!defined('MSNAV_PLUGIN_HELPER_DIR')) {
                define('MSNAV_PLUGIN_HELPER_DIR', plugin_dir_path(__FILE__) . 'helper/');
            }

            // Plugin Folder URL
            if (!defined('MSNAV_PLUGIN_URL')) {
                define('MSNAV_PLUGIN_URL', plugin_dir_url(__FILE__));
            }


        }

        private function hooks() {
            add_action('wp_enqueue_scripts' ,  array($this, 'msnav_enqueue_scripts'), 99999);
            add_action('elementor/widgets/widgets_registered', array($this, 'msnav_elementor_elements'), 10);
        }

        public function msnav_enqueue_scripts(){
            wp_enqueue_style('msnav-main' , MSNAV_PLUGIN_URL . 'assets/style.css');
        }

        public function msnav_elementor_elements(){
            require_once MSNAV_PLUGIN_INC_DIR . 'widgets/menu-list.php';
        }

        /**
         * Include required files
         *
         */
        private function includes() {


            require_once MSNAV_PLUGIN_INC_DIR . 'index.php';
            if ( is_multisite() ) {
                require_once MSNAV_PLUGIN_HELPER_DIR . 'index.php';
            }
        }



    }

endif; // End if class_exists check


function MsNavInit()
{
    return Msnav_Main_Class::instance();
}

MsNavInit();