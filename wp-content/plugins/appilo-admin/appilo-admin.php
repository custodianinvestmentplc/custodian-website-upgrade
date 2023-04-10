<?php

/**
 * Plugin Name:       Appilo Admin
 * Plugin URI:        https://themexriver.com
 * Description:       Appilo admin features included
 * Version:           6.2.1
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Themexriver
 * Author URI:        https://themexriver.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       appilo-admin
 * Domain Path:       /languages
 */

define( 'APPILO_COMPANION_DIR', plugin_dir_path( __FILE__ ) );

if (file_exists( APPILO_COMPANION_DIR . '/admin/admin-init.php')) {
    require_once APPILO_COMPANION_DIR . '/admin/admin-init.php';
}

if (file_exists( APPILO_COMPANION_DIR . '/admin/license-manager/Appilo.php')) {
    require_once APPILO_COMPANION_DIR . '/admin/license-manager/Appilo.php';
}