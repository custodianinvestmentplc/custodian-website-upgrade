<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = '_msnav_options';

    // Create profile options
    CSF::createNavMenuOptions( $prefix, array(
        'data_type' => 'unserialize', // The type of the database save options. `serialize` or `unserialize`
    ) );

    //
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Select Elementor Template as Menu',
        'fields' => array(
            // A text field
            array(
                'id'    => 'multi_set_menu',
                'type'  => 'switcher',
                'title' => 'Toggle To Active Menu',
            ),
            array(
                'id'    => 'multi_menu_template',
                'type'  => 'select',
                'title' => 'Select Menu Template List',
                'options'     => get_mega_menu_template('appilo_megamenu'),
                'chosen' => true,
                'dependency'=> array('multi_set_menu', '==', 'true' ),
            ),

        )
    ) );

}