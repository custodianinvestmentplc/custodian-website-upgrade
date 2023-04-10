<?php
//Header
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch3_header_bg',
    'label'       => esc_html__( 'Header BG', 'appilo' ),
    'description' => esc_html__( 'Change header background', 'appilo' ),
    'section'     => 'appilo_header_styling',
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
            'element' => '.homePageTwo .host-app-header-section .navbar',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch3_sticky_header_bg',
    'label'       => esc_html__( 'Sticky Header BG', 'appilo' ),
    'description' => esc_html__( 'Change Sticky header background', 'appilo' ),
    'section'     => 'appilo_header_styling',
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
            'element' => '.host-app-header-section .navbar.sticky',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_section( 'cloud_hosting_social_links', array(
    'title'          => esc_html__( 'Social Links', 'appilo' ),
    'description'    => esc_html__( 'Change social links', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
) );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'ch3_footer_social',
    'label'       => esc_html__( 'Footer Social', 'appilo' ),
    'description'       => esc_html__( 'Enable and disable Footer social', 'appilo' ),
    'section'     => 'cloud_hosting_social_links',
    'default'     => '1',
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch3_fb_link',
    'description'    => __( 'Facebook', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch3_tw_link',
    'description'    => __( 'Twitter', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch3_gl_link',
    'description'    => __( 'Google', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch3_ln_link',
    'description'    => __( 'Linkedin', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch3_in_link',
    'description'    => __( 'Instagram', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_body_fonts_settings',
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
            'element' => '.homePageThree.app-host',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'ch3_menu_btn_txt',
    'label'    => esc_html__( 'Change Menu Button Text', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch3_menu_btn_link',
    'label'    => esc_html__( 'Change Menu Button Link', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'ch3_menu_btn_shadow',
    'label' => esc_html__( 'Menu Button Shadow', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '#c76708',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch3_menu_btn_bg',
    'label'       => esc_html__( 'Menu Button BG', 'appilo' ),
    'description' => esc_html__( 'Change Menu Button Background', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
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
            'element' => '.host-app-header-section .navbar .chat-box .btn-primary',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch3_menu_btn_padding',
    'label'       => esc_html__( 'Menu Button Padding', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.host-app-header-section .navbar .chat-box .btn-primary',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_menu_fonts',
    'label'       => esc_html__( 'Menu Button Fonts', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.host-app-header-section .navbar .chat-box .btn-primary',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch3_main_menu_margin',
    'label'       => esc_html__( 'Menu Button Margin', 'appilo' ),
    'description' => esc_html__( 'Header Main Margin', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => [
        'margin-top'    => '',
        'margin-bottom' => '',
        'margin-left'   => '',
        'margin-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.host-app-header-section .navbar .chat-box .btn-primary',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch3_menu_btn_hiver_bg',
    'label'       => esc_html__( 'Menu Button Hover BG', 'appilo' ),
    'description' => esc_html__( 'Change Menu Button Hover Background', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
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
            'element' => '.host-app-header-section .navbar .chat-box .btn-primary:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_menu_hover_fonts',
    'label'       => esc_html__( 'Main Menu Hover Fonts', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => [
        'font-family'    => '',
        'variant'        => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.host-app-header-section .navbar .chat-box .btn-primary:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
//Header Menu
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_main_menu_fonts',
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
            'element' => '.homePageThree .host-app-header-section .navbar .navbar-collapse .navbar-nav li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_main_menu_hover_fonts',
    'label'       => esc_html__( 'Main Menu Hover Fonts', 'appilo' ),
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
            'element' => '.homePageThree .host-app-header-section .navbar .navbar-collapse .navbar-nav li.active a,
            .homePageThree .host-app-header-section .navbar .navbar-collapse .navbar-nav li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch3_main_menu_padding',
    'label'       => esc_html__( 'Main Menu Padding', 'appilo' ),
    'description' => esc_html__( 'You can control main menu padding Here.', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.homePageThree .host-app-header-section .navbar .navbar-collapse .navbar-nav li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch3_main_menu_margin',
    'label'       => esc_html__( 'Main Menu Margin', 'appilo' ),
    'description' => esc_html__( 'You can control main menu margin Here.', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'margin-top'    => '',
        'margin-bottom' => '',
        'margin-left'   => '',
        'margin-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.homePageThree .host-app-header-section .navbar .navbar-collapse .navbar-nav li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_sub_menu_fonts',
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
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch3_sub_menu_padding',
    'label'       => esc_html__( 'Sub Menu Padding', 'appilo' ),
    'description' => esc_html__( 'You can control sub menu padding Here.', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li .dropdown-menu li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_sub_menu_hover_fonts',
    'label'       => esc_html__( 'Sub Menu Hover Fonts', 'appilo' ),
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
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li .dropdown-menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch3_sub_menu_bg_hover',
    'label'       => esc_html__( 'Sub Menu Hover Background', 'appilo' ),
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
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li .dropdown-menu',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch3_sticky_header_bg',
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
            'element' => '.host-app-header-section .navbar.sticky',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header16',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'ch3_footer_copyright_txt',
    'label' => esc_html__( 'Footer Copyright Text', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => '© 2020 <span>appilo</span> All rights reserved',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_footer_copyright_txt_fonts',
    'description'       => esc_html__( 'Fonts Style', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'priority' => 100,
    'default'     => [
        'font-family'      => '',
        'variant'      => '',
        'line-height'      => '',
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.host-app-footer-section .copy-right p',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch3_copyright_footer_bg',
    'label'       => esc_html__( 'Footer Copyright Background Control', 'appilo' ),
    'description' => esc_html__( 'Change Footer Copyright All Background Here', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
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
            'element' => '.host-app-footer-section .copy-right',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch3_footer_c_padding',
    'label'       => esc_html__( 'Footer Copyright Padding', 'kirki' ),
    'description' => esc_html__( 'Control Footer Copyright Padding', 'kirki' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.host-app-footer-section .copy-right',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_footer_menu_fonts',
    'label'       => esc_html__( 'Footer Menu Fonts', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'font-family'    => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.host-app-footer-section .footer-container .footer-wrapper .menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_footer_menu_h_fonts',
    'label'       => esc_html__( 'Footer Menu Hover Fonts', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'font-family'    => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.host-app-footer-section .footer-container .footer-wrapper .menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_footer_widget_title',
    'label'       => esc_html__( 'Footer Fonts Control', 'appilo' ),
    'description'       => esc_html__( 'Footer Widget Title', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => [
        'font-family'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.host-app-footer-section .footer-container .footer-wrapper h3',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch3_footer_widget_text',
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
            'element' => '.host-app-footer-section .footer-container .footer-wrapper p, 
            .host-app-footer-section .footer-container .footer-wrapper .contact-wrapper li span',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch3_main_footer_bg',
    'label'       => esc_html__( 'Footer Main Background Control', 'appilo' ),
    'description' => esc_html__( 'Change Footer Main All Background Here', 'appilo' ),
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
            'element' => '.host-app-footer-section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch3_footer_bg_padding',
    'label'       => esc_html__( 'Footer Padding', 'kirki' ),
    'description' => esc_html__( 'Control Footer Padding', 'kirki' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.host-app-footer-section .footer-container',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer16',
        ),

    ),
] );