<?php
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'image',
    'settings'    => 'favicon_logo_control',
    'label'       => esc_html__( 'Favicon', 'appilo' ),
    'description' => esc_html__( 'Change Favicon Here.', 'appilo' ),
    'section'     => 'appilo_logo_options',
    'default'     => get_template_directory_uri() . '/img/topapp/favicon.png',
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'image',
    'settings'    => 'mobile_logo_control',
    'label'       => esc_html__( 'Mobile Logo', 'appilo' ),
    'description' => esc_html__( 'Change Mobile Logo Here.', 'appilo' ),
    'section'     => 'appilo_logo_options',
    'default'     => get_template_directory_uri() . '/img/logo.png',
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'body_fonts_settings',
    'label'       => esc_html__( 'Change Body Fonts', 'appilo' ),
    'section'     => 'appilo_fonts_control',
    'choices' => [
        'fonts' => [
            'google' => [ 'popularity', 30 ],
        ],
    ],
    'default'     => [
        'font-family'    => '',
        'font-size'      => '',
        'color'         => '',
        'line-height'    => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.topapp-main',
        ],
    ],
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'heading_font_settings',
    'label'       => esc_html__( 'H1, H2, H3, H4, H5, H6', 'appilo' ),
    'section'     => 'appilo_heading_fonts_control',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'line-height'    => '',
    ],
    'priority'    => 2,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.topapp-main h1,.topapp-main h2,.topapp-main h3,.topapp-main h4,.topapp-main h5,.topapp-main h6',
        ],
    ],
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );


//404 Settings
Kirki::add_section( 'topapp_error_controls', array(
    'title'          => esc_html__( '404 Controls', 'appilo' ),
    'description'    => esc_html__( 'Change 404 Controls Here', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
) );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'image',
    'settings'    => 'error_bg',
    'label'       => esc_html__( '404 Page Background', 'appilo' ),
    'description' => esc_html__( 'Change 404 Style Here', 'appilo' ),
    'section'     => 'topapp_error_controls',
    'default'     => get_template_directory_uri() . '/img/topapp/gallery/error_bg.png',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );

// Color Controls
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'nav_border_color_1',
    'label'       => esc_html__( 'Main Menu Hover', 'appilo' ),
    'description' => esc_html__( 'Change Main Nav Hover', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'nav_border_color_2',
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'sub_menu_background',
    'label'       => esc_html__( 'Sub Menu Hover', 'appilo' ),
    'description' => esc_html__( 'Change Sub Menu Hover Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'menu_btn_1',
    'label'       => esc_html__( 'Menu Button Color', 'appilo' ),
    'description' => esc_html__( 'Change Menu Button Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'menu_btn_2',
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'subscribe_btn_color',
    'label'       => esc_html__( 'Subscribe Button', 'appilo' ),
    'description' => esc_html__( 'Change Subscribe Button Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'subscribe_btn_2_color_1',
    'label'       => esc_html__( 'Subscribe Button 2', 'appilo' ),
    'description' => esc_html__( 'Change Subscribe Button 2 Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'subscribe_btn_2_color_2',
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'topapp_main_header_background',
    'label'       => esc_html__( 'Main Header Background', 'appilo' ),
    'description' => esc_html__( 'Change main header Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.topapp-main .main-header',
        ],
    ],
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'sticky_background',
    'label'       => esc_html__( 'Sticky Background', 'appilo' ),
    'description' => esc_html__( 'Change Sticky Header Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.topapp-main .main-header.fixed-header',
        ],
    ],
    'required'    => array(
        array(
             'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'footer_background',
    'label'       => esc_html__( 'Footer Background', 'appilo' ),
    'description' => esc_html__( 'Change Footer Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.topapp-main .main-footer',
        ],
    ],
    'required'    => array(
        array(
           'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer2',
        ),

    ),
] );