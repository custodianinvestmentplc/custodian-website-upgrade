<?php
//Header
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_menu_button_text_settings_7',
    'label'    => esc_html__( 'Change Menu Button Text', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => 'Sign In',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'appilo_menu_button_link_settings_7',
    'label'    => esc_html__( 'Change Menu Button Link', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
// Header Color Control
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_primary_bg_1',
    'label'       => __( 'Primary Background', 'appilo' ),
    'description' => esc_html__( 'Change Theme Primary Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '#0478e9',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_primary_bg_2',
    'section'     => 'appilo_color_control',
    'default'     => '#20fdee',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_sticky_main_bg',
    'label'       => __( 'Sticky Background', 'appilo' ),
    'description' => esc_html__( 'Change Theme Sticky Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '#000',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_menu_btn_bg',
    'label'       => __( 'Menu Button Background', 'appilo' ),
    'description' => esc_html__( 'Change Menu Button Background', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '#30f8ef',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_menu_btn_txt',
    'description' => esc_html__( 'Change Menu Button Text Color', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '#000',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
//Font Control
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_body_fonts_settings',
    'label'       => esc_html__( 'Change Body Fonts', 'appilo' ),
    'section'     => 'appilo_fonts_control',
    'choices' => [
        'fonts' => [
            'google' => [ 'popularity', 30 ],
        ],
    ],
    'default'     => [
        'font-family'    => 'Roboto',
        'font-size'      => '16px',
        'color'         => '',
        'line-height'    => '1.4',
        'font-weight'    => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appilo-saas',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_menu_fonts_settings',
    'label'       => esc_html__( 'Change Menu Fonts', 'appilo' ),
    'section'     => 'appilo_fonts_control',
    'choices' => [
        'fonts' => [
            'google' => [ 'popularity', 30 ],
        ],
    ],
    'default'     => [
        'font-family'    => 'Poppins',
        'font-size'      => '16px',
        'color'         => '#fff',
        'line-height'    => '',
        'font-weight'    => '600',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appilo-saas .main-navigation .navbar-nav li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_sub_menu_fonts_settings',
    'label'       => esc_html__( 'Change Sub Menu Fonts', 'appilo' ),
    'section'     => 'appilo_fonts_control',
    'choices' => [
        'fonts' => [
            'google' => [ 'popularity', 30 ],
        ],
    ],
    'default'     => [
        'font-family'    => 'Poppins',
        'font-size'      => '14px',
        'color'         => '#000',
        'line-height'    => '',
        'font-weight'    => '600',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appilo-saas .main-navigation .dropdown > .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_mob_menu_fonts_settings',
    'label'       => esc_html__( 'Change Mobile Menu Fonts', 'appilo' ),
    'section'     => 'appilo_fonts_control',
    'choices' => [
        'fonts' => [
            'google' => [ 'popularity', 30 ],
        ],
    ],
    'default'     => [
        'font-family'    => 'Poppins',
        'font-size'      => '14px',
        'color'         => '#000',
        'line-height'    => '',
        'font-weight'    => '400',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appilo-saas .mobile_menu_content .main-navigation .navbar-nav li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_headline_fonts_settings',
    'label'       => esc_html__( 'Change Heading Fonts', 'appilo' ),
    'section'     => 'appilo_fonts_control',
    'choices' => [
        'fonts' => [
            'google' => [ 'popularity', 30 ],
        ],
    ],
    'default'     => [
        'font-family'    => 'Poppins',
        'font-size'      => '',
        'color'         => '',
        'line-height'    => '',
        'font-weight'    => '',
    ],
    'priority'    => 20,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.headline h1, .headline h2, .headline h3, .headline h4, .headline h5, .headline h6',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header7',
        ),

    ),
] );

//Footer Control
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'saas_footer_copyright_settings',
    'label'    => esc_html__( 'Change Footer Text here', 'appilo' ),
    'section'  => 'appilo_footer_copyright',
    'default'  => '© 2020, appilo Theme by Themexriver Team | Privacy Policy | Sitemap',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'saas_copyright_all_text_settings',
    'label'    => esc_html__( 'Change Copyright All Reserved Text', 'appilo' ),
    'section'  => 'appilo_footer_copyright',
    'default'  => 'All Right Reserved',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_subscribe_form_bg',
    'label'    => esc_html__( 'Change Subscribe background here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas/featured/nv.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_subscribe_form_animate_img_1',
    'label'    => esc_html__( 'Change Subscribe background animate image', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas/cloud-2.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_subscribe_form_animate_img_2',
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas/cloud-5.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_subscribe_form_animate_img_3',
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas/cloud-6.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'saas_footer_subscribe_title_settings',
    'label'    => esc_html__( 'Change Footer Subscribe form title here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_html__('Subscription' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'saas_footer_subscribe_info_settings',
    'label'    => esc_html__( 'Change Footer Subscribe form info here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_html__('Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut.' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'saas_footer_subscribe_form_settings',
    'label'    => esc_html__( 'Change Footer Subscribe form shortcode here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_attr__('[contact-form-7 id="31" title="Footer Subs Form"]' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );

// Footer Color Control
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_modern_footer_socail_fonts',
    'description'       => esc_html__( 'Fonts Style', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => [
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.footer_widget .footer_social li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'saas_modern_footer_bg_padding',
    'label'       => esc_html__( 'Footer Padding', 'appilo' ),
    'description' => esc_html__( 'Control Footer Padding', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.footer_section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_modern_footer_all_fonts_2',
    'description'       => esc_html__( 'Footer Widget Text', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => [
        'font-family'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.footer_widget .footer_text, .footer_address li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_modern_footer_all_fonts_3',
    'description'       => esc_html__( 'Footer Widget Menu', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => [
        'font-family'      => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.footer_widget .menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_modern_footer_bg',
    'label'       => esc_html__( 'Footer Main', 'appilo' ),
    'description' => esc_html__( 'Change footer main background', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'background-color'      => '',
        'background-image'      => '',
        'background-repeat'     => '',
        'background-position'   => '',
        'background-size'       => '',
        'background-attachment' => '',
    ],
    'priority' => 100,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.footer_section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer7',
        ),

    ),
] );