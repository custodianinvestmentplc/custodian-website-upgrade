<?php
//Header
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'appilo_menu_button_text_settings_8',
    'label'    => esc_html__( 'Change Menu Button', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '<i class="fas fa-user"></i> Free sign up',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'appilo_menu_button_link_settings_8',
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'saas_classic_menu_btn_height',
    'label'       => esc_html__( 'Menu Button Height', 'appilo' ),
    'description' => esc_html__( 'You can control menu button height Here.', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => [
        'width'    => '',
        'height' => '',
    ],
    'output'      => [
        [
            'element' => '.saas_two_main_header .saas_sign_up_btn',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'saas_classic_menu_btn_br',
    'label'       => esc_html__( 'Menu Button Border Radius', 'appilo' ),
    'description' => esc_html__( 'You can control menu button border radius Here.', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => [
        'border-top-left-radius'    => '',
        'border-top-right-radius' => '',
        'border-bottom-right-radius' => '',
        'border-bottom-left-radius' => '',
    ],
    'output'      => [
        [
            'element' => '.saas_two_main_header .saas_sign_up_btn',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_menu_btn_bg',
    'label'       => esc_html__( 'Button Background', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
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
            'element' => '.saas_two_main_header .saas_sign_up_btn',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_menu_btn_h_bg',
    'label'       => esc_html__( 'Button Hover Background', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
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
            'element' => '.saas_two_main_header .saas_sign_up_btn:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_menu_btn_fonts',
    'section'     => 'appilo_menu_button_options',
    'choices' => [
        'fonts' => [
            'google' => [ 'popularity', 30 ],
        ],
    ],
    'default'     => [
        'font-family'    => '',
        'font-size'      => '',
        'color'         => '',
        'font-weight'    => '',
        'line-height'    => '',
    ],
    'transport'   => 'auto',
    'priority' => 100,
    'output'      => [
        [
            'element' => '.saas_two_main_header .saas_sign_up_btn a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_main_header_bg',
    'label'       => esc_html__( 'Main Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
        'background-image'      => '',
        'background-repeat'     => '',
        'background-position'   => '',
        'background-size'       => '',
        'background-attachment' => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_two_main_header',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_sticky_header_bg',
    'label'       => esc_html__( 'Sticky Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
        'background-image'      => '',
        'background-repeat'     => '',
        'background-position'   => '',
        'background-size'       => '',
        'background-attachment' => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_2-menu-bg-overlay',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_menu_fonts',
    'label'       => esc_html__( 'Main Menu Fonts', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_two_main_header .s2-main-navigation .navbar-nav li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_menu_hover_fonts',
    'description'       => esc_html__( 'Main Menu Hover Fonts', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_two_main_header .s2-main-navigation .navbar-nav li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_mob_menu_fonts',
    'label'       => esc_html__( 'Main Mobile Menu Fonts', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.s2_mobile_menu_content .s2_main-navigation .navbar-nav li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_sub_mob_menu_fonts',
    'label'       => esc_html__( 'Main Mobile Sub Menu Fonts', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.s2_mobile_menu_content .s2_main-navigation .dropdown .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_classic_menu_after_before',
    'label' => esc_html__( 'Menu After/Before', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_sub_menu_fonts',
    'label'       => esc_html__( 'Sub Menu Fonts', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_two_main_header .dropdown .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_sub_menu_hover_fonts',
    'description'       => esc_html__( 'Sub Menu Hover Fonts', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_two_main_header .dropdown .dropdown-menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
//Font Control
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_body_fonts_settings',
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
        'font-weight'    => '',
    ],
    'priority'    => 20,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appilo-saas-classic',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_body_bg',
    'label'       => esc_html__( 'Body Background Control', 'appilo' ),
    'section'     => 'appilo_fonts_control',
    'default'     => [
        'background-color'      => '',
        'background-image'      => '',
        'background-repeat'     => '',
        'background-position'   => '',
        'background-size'       => '',
        'background-attachment' => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appilo-saas-classic',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_headline_fonts_settings',
    'label'       => esc_html__( 'Change Heading Fonts', 'appilo' ),
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
        'font-weight'    => '',
    ],
    'priority'    => 20,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas2-headline h1, .saas2-headline h2, .saas2-headline h3, .saas2-headline h4, .saas2-headline h5, .saas2-headline h6',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header8',
        ),

    ),
] );

//Footer Control
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_footer_copyright_bg',
    'label'       => esc_html__( 'Copyright Background Control', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'priority'    => 100,
    'output'      => [
        [
            'element' => '.s2-copyright',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'saas_classic_footer_copyright_settings',
    'label'    => esc_html__( 'Change Footer Text here', 'appilo' ),
    'section'  => 'appilo_footer_copyright',
    'default'  => '2020 © All rights reserved by <a href="#">Themexriver</a>',
    'priority'    => 50,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'saas_classic_footer_copyright_fonts',
    'label'       => esc_html__( 'Change Copyright Fonts', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
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
        'font-weight'    => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.s2-copyright',
        ],
    ],
    'priority'    => 30,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'saas_classic_footer_subscribe_switch',
    'label'       => esc_html__( 'Turn ON/OFF Subscribe', 'appilo' ),
    'section'     => 'appilo_subscribe_options',
    'default'     => '2',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_classic_subscribe_form_bg',
    'label'    => esc_html__( 'Subscribe background here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas-classic/banner/nb.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_footer_newsletter_bg',
    'label'       => esc_html__( 'Newsletter Background Control', 'appilo' ),
    'section'     => 'appilo_subscribe_options',
    'default'     => [
        'background-color'      => '',
        'background-image'      => '',
        'background-repeat'     => '',
        'background-position'   => '',
        'background-size'       => '',
        'background-attachment' => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_two_footer_section .s2-newslatter_section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_footer_newsletter_btn_bg',
    'label'       => esc_html__( 'Newsletter Background Control', 'appilo' ),
    'section'     => 'appilo_subscribe_options',
    'default'     => [
        'background-color'      => '',
        'background-image'      => '',
        'background-repeat'     => '',
        'background-position'   => '',
        'background-size'       => '',
        'background-attachment' => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_two_footer_section .s2-newslatter_section button',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_classic_footer_newsletter_btn_bg',
    'label' => esc_html__( 'Newsletter Button Background', 'appilo' ),
    'section'     => 'appilo_subscribe_options',
    'default'     => '',
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_classic_subscribe_form_animate_img_3',
    'label'    => esc_html__( 'Background animate image', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas-classic/cloud-2.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_classic_subscribe_form_animate_img_4',
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas-classic/cloud-5.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_classic_subscribe_form_circle_img_1',
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas-classic/banner/ns.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'saas_classic_subscribe_form_circle_img_2',
    'section'  => 'appilo_subscribe_options',
    'default'  => get_template_directory_uri() . '/img/saas-classic/banner/ns2.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'saas_classic_footer_subscribe_title_settings',
    'label'    => esc_html__( 'Form title here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_html__('Subscribe now!' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'saas_classic_footer_subscribe_info_settings',
    'label'    => esc_html__( 'Form info here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_html__('Get the latest update.' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'saas_classic_footer_subscribe_form_settings',
    'label'    => esc_html__( 'Form shortcode here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_attr__('[contact-form-7 id="23" title="Footer Subscribe Now"]' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );

// Footer Color Control
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_classic_top_1',
    'label' => esc_html__( 'Scroll Top Background', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'saas_classic_top_2',
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'saas_classic_footer_bg',
    'label'       => esc_html__( 'Footer Background Control', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'background-color'      => '',
        'background-image'      => '',
        'background-repeat'     => '',
        'background-position'   => '',
        'background-size'       => '',
        'background-attachment' => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.saas_two_footer_section:before, .saas_two_footer_section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'saas_classic_footer_margin',
    'label'       => esc_html__( 'Footer Margin Control', 'appilo' ),
    'description' => esc_html__( 'You can control your footer margin.', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'margin-top'    => '',
        'margin-right' => '',
        'margin-bottom' => '',
        'margin-left' => '',
    ],
    'output'      => [
        [
            'element' => '.saas_two_footer_section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'saas_classic_footer_padding',
    'label'       => esc_html__( 'Footer Padding Control', 'appilo' ),
    'description' => esc_html__( 'You can control your footer padding.', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'padding-top'    => '',
        'padding-right' => '',
        'padding-bottom' => '',
        'padding-left' => '',
    ],
    'output'      => [
        [
            'element' => '.saas_two_footer_section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer8',
        ),

    ),
] );