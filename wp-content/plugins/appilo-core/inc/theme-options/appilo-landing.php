<?php
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appl_blog_header_bg',
    'label'       => esc_html__( 'Blog Header BG', 'appilo' ),
    'description' => esc_html__( 'Change page header background', 'appilo' ),
    'section'     => 'appilo_blog_bg_control',
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
            'element' => '.appl-default-header.appl-header-section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'appl_blog_header_bg_padding',
    'label'       => esc_html__( 'Blog Header Padding', 'kirki' ),
    'description' => esc_html__( 'Control Blog Header Padding', 'kirki' ),
    'section'     => 'appilo_blog_bg_control',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '15px',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.appl-default-header.appl-header-section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appl_body_fonts_settings',
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
            'element' => '.appl',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'appl_menu_btn_txt',
    'label'    => esc_html__( 'Change Menu Button Text', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '<i class="fas fa-shopping-cart"></i>Buy Appilo now',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'appl_menu_btn_link',
    'label'    => esc_html__( 'Change Menu Button Link', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => 'https://themeforest.net/item/appilo-app-landing-wordpress-theme/22358661',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings' => 'appl_menu_btn_font',
    'label'    => esc_html__( 'Change Menu Button Font', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'priority' => 100,
    'default'     => [
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appl-header-section .appl_sign_up_btn a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appl_menu_btn_bg1',
    'label' => esc_html__( 'Menu Button BG', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appl_menu_btn_bg2',
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appl_menu_fonts',
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
            'element' => '.appl-header-section .navbar-nav li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'appl_main_menu_padding',
    'label'       => esc_html__( 'Header Main Padding', 'kirki' ),
    'description' => esc_html__( 'Header Main Padding', 'kirki' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'padding-top'    => '',
        'padding-bottom' => '',
        'padding-left'   => '',
        'padding-right'  => '',
    ],
    'output'      => [
        [
            'element' => '.appl-header-section .navbar-nav li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appl_main_menu_bg_hover1',
    'label' => esc_html__( 'Main Menu Hover BG', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appl_main_menu_bg_hover2',
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appl_sub_menu_fonts',
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
            'element' => '.appl-header-section .main-navigation .dropdown .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'appl_sub_menu_padding',
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
            'element' => '.appl-header-section .main-navigation .dropdown .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appl_sub_menu_hover_fonts',
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
            'element' => '.appl-header-section .main-navigation .dropdown .dropdown-menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appl_sub_menu_bg_hover',
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
            'element' => '.appl-header-section .main-navigation .dropdown .dropdown-menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appl_sticky_header_bg',
    'label'       => esc_html__( 'Sticky Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appl-sticky-menu',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'appl_footer_copyright_txt',
    'label' => esc_html__( 'Footer Text', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => 'Designed with <i class="fas fa-heart"></i> by <a target="_blank" href="https://themexriver.com">themexriver</a>',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'appl_footer_copyright_txt',
    'label' => esc_html__( 'Footer Copyright Text', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => '© 2020 <span>appilo</span> All rights reserved',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appl_footer_copyright_txt_fonts',
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
            'element' => '.copyright-text, .copyright-text a, .copyright-text span',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appl_copyright_footer_bg',
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
            'element' => '.copyright-text',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'appl_footer_purchase_txt',
    'label' => esc_html__( 'Purchase Text', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => 'Purchase',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings'    => 'appl_footer_purchase_img',
    'label' => esc_html__( 'Purchase Image', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'  => get_template_directory_uri() . '/img/appilo-landing/envato.svg',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appl_footer_purchase_img_bg',
    'label' => esc_html__( 'Purchase Image BG', 'appilo' ),
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
            'element' => '.purchase-demo i',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),
    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'link',
    'settings'    => 'appl_footer_purchase_link',
    'label' => esc_html__( 'Purchase Link', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => 'https://themeforest.net/item/appilo-app-landing-wordpress-theme/22358661',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appl_purchase_fonts',
    'label'       => esc_html__( 'Purchase Fonts', 'appilo' ),
    'section'     => 'appilo_footer_options',
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
            'element' => '.purchase-demo .ph-text',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appl_purchase_bg',
    'label'       => esc_html__( 'Purchase Button', 'appilo' ),
    'description' => esc_html__( 'Change purchase button background', 'appilo' ),
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
            'element' => '.purchase-demo:before, .purchase-demo:after',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer13',
        ),
    ),
] );
