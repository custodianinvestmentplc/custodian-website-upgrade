<?php
//Header
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_header_bg',
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
            'element' => '.soft-m-main-header',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_default_header_bg',
    'label'       => esc_html__( 'Default Header BG', 'appilo' ),
    'description' => esc_html__( 'Change default header background', 'appilo' ),
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
            'element' => '.soft-m-default-header.soft-m-main-header',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_sticky_header_bg',
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
            'element' => '.soft-m-sticky-menu',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_body_fonts_settings',
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
            'element' => '.soft-m-home',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'soft_m_menu_btn_txt',
    'label'    => esc_html__( 'Change Menu Button Text', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => 'Get 7Days Trail',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'soft_m_menu_btn_link',
    'label'    => esc_html__( 'Change Menu Button Link', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_menu_btn_bg',
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
            'element' => '.soft-m-main-header .soft-m-header-btn',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_menu_btn_border',
    'label'       => esc_html__( 'Menu Button Border', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => [
        'border-top'    => '',
        'border-bottom' => '',
        'border-left'   => '',
        'border-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.soft-m-main-header .soft-m-header-btn',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_menu_btn_height_width',
    'label'       => esc_html__( 'Menu Button width/height', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => [
        'width'    => '',
        'height' => '',
    ],
    'output'      => [
        [
            'element' => '.soft-m-main-header .soft-m-header-btn',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_menu_fonts',
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
            'element' => '.soft-m-main-header .soft-m-header-btn a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_main_menu_margin',
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
            'element' => '.soft-m-main-header .soft-m-header-btn',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_menu_btn_hiver_bg',
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
            'element' => '.soft-m-main-header .soft-m-header-btn:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
//Header Menu
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'soft_m_header_language',
    'label'       => esc_html__( 'Turn ON/OFF Language', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '1',
    'priority'    => 100,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_main_menu_fonts',
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
            'element' => '.soft-m-main-header .soft-m-main-navigation li a, 
            .soft-m-main-header .dropdown:after',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_header_styling',
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
            'element' => '.soft-m-main-header .soft-m-main-navigation li:hover a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_menu_hiver_bg',
    'label'       => esc_html__( 'Menu Hover After', 'appilo' ),
    'description' => esc_html__( 'Change Menu Hover After', 'appilo' ),
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
            'element' => '.soft-m-main-header .soft-m-main-navigation li a:before',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_main_menu_padding',
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
            'element' => '.soft-m-main-header .soft-m-main-navigation li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_main_menu_margin',
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
            'element' => '.soft-m-main-header .soft-m-main-navigation li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_sub_menu_fonts',
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
            'element' => '.soft-m-main-header .dropdown .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_sub_menu_padding',
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
            'element' => '.soft-m-main-header .dropdown .dropdown-menu li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_sub_menu_hover_fonts',
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
            'element' => '.soft-m-main-header .dropdown .dropdown-menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_sub_menu_bg_hover',
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
            'element' => '.soft-m-main-header .dropdown .dropdown-menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_copyright_footer_bg',
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
            'element' => '.soft-m-footer-copyright',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_footer_c_padding',
    'label'       => esc_html__( 'Footer Copyright Padding', 'appilo' ),
    'description' => esc_html__( 'Control Footer Copyright Padding', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.soft-m-footer-copyright',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_footer_menu_fonts',
    'label'       => esc_html__( 'Footer Menu Fonts', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'font-family'    => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.soft-m-footer-section .soft-m-footer-widget .soft-m-footer-menu-widget a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_footer_menu_h_fonts',
    'label'       => esc_html__( 'Footer Menu Hover Fonts', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'font-family'    => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.soft-m-footer-section .soft-m-footer-widget .soft-m-footer-menu-widget a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_footer_widget_title',
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
            'element' => '.soft-m-footer-section .soft-m-footer-widget .widget-title',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_footer_widget_text',
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
            'element' => '.soft-m-footer-section .soft-m-footer-widget p, .soft-m-footer-section .soft-m-footer-widget .soft-m-footer-support a, 
            .soft-m-footer-section .soft-m-footer-widget .soft-m-footer-support span, .soft-m-footer-copyright .soft-m-footer-copyright-menu a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_main_footer_bg',
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
            'element' => '.soft-m-footer-section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_footer_bg_padding',
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
            'element' => '.soft-m-footer-section .soft-m-footer-wrapper',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'soft_m_btn_border',
    'label'       => esc_html__( 'Button Border', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => [
        'border-top'    => '',
        'border-bottom' => '',
        'border-left'   => '',
        'border-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.soft-m-footer-section .soft-footer-btn',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'soft_m_btn_color',
    'label'       => esc_html__( 'Footer Button Color', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => [
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.soft-m-footer-section .soft-footer-btn a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'soft_m_btn_m_bg',
    'label'       => esc_html__( 'Button Background Control', 'appilo' ),
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
            'element' => '.soft-m-footer-section .soft-footer-btn, .soft-m-subs button, .soft-m-banner-subscribe-form button',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer20',
        ),

    ),
] );