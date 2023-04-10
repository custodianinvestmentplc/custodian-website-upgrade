<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = '_msnav';

    //
    // Create options
    CSF::createOptions( $prefix, array(
        'framework_title' => 'MultiSite Navigation',
        'menu_title' => 'MultiSite Navigation',
        'menu_slug'  => 'masnav_options',
        'menu_type'  => 'submenu',
        'menu_parent'  => 'themes.php',
        'ajax_save'  => false,
    ) );

    //
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Get Navigation',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'set_menu',
                'type'  => 'switcher',
                'title' => 'Toggle To Active Menu',
            ),
            array(
                'id'    => 'get_site_list',
                'type'  => 'select',
                'chosen' => true,
                'title' => 'Get Site List',
                'options'     => get_multi_sites(),
                'dependency'=> array('set_menu', '==', 'true' ),
            ),
//            array(
//                'id'    => 'get_location_list',
//                'type'  => 'select',
//                'chosen' => true,
//                'title' => 'Get Location List',
//                'options'     => get_menu_location(),
//                'dependency'=> array('set_menu', '==', 'true' ),
//            ),
//
//            array(
//                'id'    => 'set_menu_list',
//                'type'  => 'select',
//                'chosen' => true,
//                'title' => 'Select Menu List',
//                'options'     => get_global_menu('nav_menu'),
//                'dependency'=> array('set_menu', '==', 'true' ),
//            ),
//            array(
//                'id'    => 'set_post_type_list',
//                'type'  => 'select',
//                'chosen' => true,
//                'title' => 'Select Post Type List',
//                'options'     => msnav_get_post_types(),
//                'dependency'=> array('set_menu', '==', 'true' ),
//            ),
//            array(
//                'id'    => 'set_menu_template',
//                'type'  => 'select',
//                'chosen' => true,
//                'title' => 'Select Menu Template List',
//                'options'     => get_mega_menu_template('appilo_megamenu'),
//                'dependency'=> array('set_menu', '==', 'true' ),
//            ),

        )
    ) );

}