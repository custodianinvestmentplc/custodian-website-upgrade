<?php
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'galaxy_app_heading_font_settings',
    'label'       => esc_html__( 'H1, H2, H3, H4, H5, H6', 'appilo' ),
    'section'     => 'appilo_heading_fonts_control',
    'default'     => [
        'font-family'    => 'Montserrat',
        'variant'        => '',
        'color'        => '',
        'font-size'      => '',
        'line-height'        => '',
    ],
    'priority'    => 2,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.galaxy h1, .galaxy h2, .galaxy h3, .galaxy h4, .galaxy h5, .galaxy h6',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'galaxy_app_body_fonts_settings',
    'label'       => esc_html__( 'Change Body Fonts', 'appilo' ),
    'section'     => 'appilo_fonts_control',
    'default'     => [
        'font-family'    => 'Arimo',
        'font-size'      => '',
        'variant'        => '',
        'color'         => '',
        'line-height'        => '',
    ],
    'priority'    => 1,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.galaxy',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );

Kirki::add_section( 'galaxy_app_header_social', array(
    'title'          => esc_html__( 'Header Social Link', 'appilo' ),
    'description'    => esc_html__( 'Change header social link', 'appilo' ),
    'panel'          => 'appilo_header_settings',
    'priority'       => 150,

) );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'app_social_switcher',
    'label'       => esc_html__( 'Turn ON/OFF Socials', 'appilo' ),
    'section'     => 'galaxy_app_header_social',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Social Link', 'appilo' ),
    'section'     => 'galaxy_app_header_social',
    'priority'    => 100,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Social List', 'appilo' ),
    ],
    'button_label' => esc_html__('"Add New Menu" ', 'appilo' ),
    'settings'     => 'galaxy_app_social_header_list',
    'fields' => [
        'icon_name' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Icon Class', 'appilo' ),
            'description' => esc_html__( 'Pick a icon class name from <a target="_blank" href="https://fontawesome.com/icons?d=gallery&m=free">here</a>', 'appilo' ),
            'default'     => '',
        ],
        'social_url'  => [
            'type'        => 'link',
            'label'       => esc_html__( 'Social Link', 'appilo' ),
            'description' => esc_html__( 'Put a url to the field', 'appilo' ),
            'default'     => '',
        ],
    ],
    'default'      => [
        [
            'icon_name' => esc_html__( 'fa-facebook', 'appilo' ),
            'social_url'  => '#',
        ],
        [
            'icon_name' => esc_html__( 'fa-twitter', 'appilo' ),
            'social_url'  => '#',
        ],
        [
            'icon_name' => esc_html__( 'fa-behance', 'appilo' ),
            'social_url'  => '#',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );

Kirki::add_section( 'galaxy_app_lang_section', array(
    'title'          => esc_html__( 'Language', 'appilo' ),
    'description'    => esc_html__( 'Change header language settings', 'appilo' ),
    'panel'          => 'appilo_header_settings',
    'priority'       => 150,

) );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'app_language_switcher',
    'label'       => esc_html__( 'Turn ON/OFF Language', 'appilo' ),
    'section'     => 'galaxy_app_lang_section',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'image',
    'settings'    => 'galaxy_app_lang_default_image',
    'label' => esc_html__( 'Language Default', 'appilo' ),
    'section'     => 'galaxy_app_lang_section',
    'default'     => get_template_directory_uri() . '/img/galaxy/app-landing/lang/img-1.png',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'link',
    'settings'    => 'galaxy_app_lang_default_link',
    'section'     => 'galaxy_app_lang_section',
    'default'     => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Language listing', 'appilo' ),
    'section'     => 'galaxy_app_lang_section',
    'priority'    => 100,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Language List', 'appilo' ),
    ],
    'button_label' => esc_html__('"Add New Language" ', 'appilo' ),
    'settings'     => 'galaxy_app_header_lang_list',
    'fields' => [
        'lang_name' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Language Name', 'appilo' ),
            'description' => esc_html__( 'Type a name of language', 'appilo' ),
            'default'     => 'EN',
        ],
        'lang_icon' => [
            'type'        => 'image',
            'label'       => esc_html__( 'Language Icon', 'appilo' ),
            'description' => esc_html__( 'Select a language icon', 'appilo' ),
            'default'     => get_template_directory_uri() . '/img/galaxy/app-landing/lang/img-1.png',
        ],
        'lang_url'  => [
            'type'        => 'link',
            'label'       => esc_html__( 'Language Link', 'appilo' ),
            'description' => esc_html__( 'Put a url to the field', 'appilo' ),
            'default'     => '#',
        ],
    ],
    'default'      => [
        [
            'lang_name' => esc_html__( 'EN', 'appilo' ),
            'lang_url'  => '#',
            'lang_icon'  => get_template_directory_uri() . '/img/galaxy/app-landing/lang/img-1.png',
        ],
        [
            'lang_name' => esc_html__( 'EN', 'appilo' ),
            'lang_url'  => '#',
            'lang_icon'  => get_template_directory_uri() . '/img/galaxy/app-landing/lang/img-1.png',
        ],
        [
            'lang_name' => esc_html__( 'EN', 'appilo' ),
            'lang_url'  => '#',
            'lang_icon'  => get_template_directory_uri() . '/img/galaxy/app-landing/lang/img-1.png',
        ],

    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'galaxy_app_primary_color_1',
    'label' => esc_html__( 'Theme Primary Color', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '#30d4ba',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'galaxy_app_primary_color_2',
    'section'     => 'appilo_color_control',
    'default'     => '#4273f0',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header3',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'galaxy_app_footer_color',
    'label'       => esc_html__( 'Footer Background', 'appilo' ),
    'description' => esc_html__( 'Change Footer Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => [
        'background-color'      => '#30d4ba',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.galaxy .site-footer',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer3',
        ),

    ),
] );