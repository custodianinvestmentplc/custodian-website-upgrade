<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
global $pagenow;

function appilo_welcome_page(){
    require_once 'appilo-welcome.php';
}

function appilo_documentations_page(){
    require_once 'appilo-documentations.php';
}


function appilo_admin_menu(){
    if ( current_user_can( 'edit_theme_options' ) ) {
        add_menu_page( 'Appilo', 'Appilo', 'administrator', 'appilo-admin-menu', 'appilo_welcome_page', 'dashicons-smiley', 4 );
        add_submenu_page( 'appilo-admin-menu', 'appilo', esc_html__('Welcome','appilo'), 'administrator', 'appilo-admin-menu', 'appilo_welcome_page' );
         add_submenu_page('appilo-admin-menu', 'Theme Options', 'Theme Options', 'manage_options', 'customize.php' );

         add_submenu_page( 'appilo-admin-menu', esc_html__( 'Demo Import', 'appilo' ), esc_html__( 'Demo Import', 'appilo' ), 'administrator', 'appilo-demo-importer',  'appilo_demo_importer_function');
        add_submenu_page( 'appilo-admin-menu', 'Appilo', esc_html__('Documentations','appilo'), 'administrator', 'appilo-documentations', 'appilo_documentations_page' );
    }
}
add_action( 'admin_menu', 'appilo_admin_menu' );

function appilo_demo_importer_function(){
    admin_url( 'admin.php?page=appilo-demo-importer' );
}

// if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {

// 	wp_redirect(admin_url("admin.php?page=appilo-documentations"));

// }