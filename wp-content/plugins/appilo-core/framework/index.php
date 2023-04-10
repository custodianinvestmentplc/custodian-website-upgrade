<?php
//Codestar Init

function appilo_framework_init() {
    require_once APPILO_INC_FILE .'framework/codestar-framework/codestar-framework.php';
    //require_once APPILO_INC_FILE .'framework/config/options.php';
    require_once APPILO_INC_FILE .'framework/config/postmeta.php';
}
add_action( 'plugins_loaded', 'appilo_framework_init' );

function appilo_get_options($id){
    $options = get_option( '_appilo_options' );
    if (isset($options[$id])) {
        return $options[$id];
    }
}