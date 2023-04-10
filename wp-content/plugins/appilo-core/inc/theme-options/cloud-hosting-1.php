<?php
//Top Header
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'ch1_top_header_switch',
    'label'       => esc_html__( 'Top Header', 'appilo' ),
    'description'       => esc_html__( 'Enable and disable top header', 'appilo' ),
    'section'     => 'appilo_top_header_styling',
    'default'     => '1',
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'ch1_top_phn',
    'label'    => __( 'Phone', 'appilo' ),
    'section'  => 'appilo_top_header_styling',
    'default'  => 'phone: +84 962 216 601',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'ch1_top_mail',
    'label'    => __( 'Email', 'appilo' ),
    'section'  => 'appilo_top_header_styling',
    'default'  => 'mail: support@cloudhost.com',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Header Menu', 'appilo' ),
    'section'     => 'appilo_top_header_styling',
    'priority'    => 100,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Menu', 'appilo' ),
    ],
    'button_label' => esc_html__('"Add New Menu" ', 'appilo' ),
    'settings'     => 'ch1_header_menu',
    'default'      => [
        [
            'link_text' => esc_html__( 'Login', 'appilo' ),
            'link_url'  => '#',
            'icon'  => 'fa fa-lock',
        ],
        [
            'link_text' => esc_html__( 'Register', 'appilo' ),
            'link_url'  => '#',
            'icon'  => '',
        ],
    ],
    'fields' => [
        'link_text' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Menu Name', 'appilo' ),
            'description' => esc_html__( 'The name of the menu', 'appilo' ),
            'default'     => '',
        ],
        'icon' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Icon', 'appilo' ),
            'description' => esc_html__( 'use fontawesome class name here', 'appilo' ),
            'default'     => '',
        ],
        'link_url'  => [
            'type'        => 'link',
            'label'       => esc_html__( 'Menu Link', 'appilo' ),
            'description' => esc_html__( 'The url of the menu', 'appilo' ),
            'default'     => '',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_top_header_icon_color',
    'label'       => esc_html__( 'Change Top Header Icon Color', 'appilo' ),
    'section'     => 'appilo_top_header_styling',
    'default'     => [
        'font-size'      => '',
        'color'         => '',
    ],
    'priority'    => 20,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.host-app-header-section .top-bar .header-right-bar .social-icon li a i, 
            .host-app-header-section .top-bar .header-left-bar .contact-wrapper li i, 
            .host-app-header-section .top-bar .header-right-bar .access li i',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_top_header_icon_hover_color',
    'label'       => esc_html__( 'Top Header Icon Hover Color', 'appilo' ),
    'section'     => 'appilo_top_header_styling',
    'default'     => [
        'font-size'      => '',
        'color'         => '',
    ],
    'priority'    => 20,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.host-app-header-section .top-bar .header-right-bar .social-icon li a:hover i, 
            .host-app-header-section .top-bar .header-left-bar .contact-wrapper li:hover i, 
            .host-app-header-section .top-bar .header-right-bar .access li:hover i',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
//Header
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch1_header_logo_bg',
    'label'       => esc_html__( 'Header Logo BG', 'appilo' ),
    'description' => esc_html__( 'Change page header logo background', 'appilo' ),
    'section'     => 'appilo_logo_options',
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
            'element' => '.host-app-header-section .navbar::before',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch1_blog_header_bg',
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
            'element' => '.ch1-default-header.ch1-header-section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch1_blog_header_bg_padding',
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
            'element' => '.ch1-default-header.ch1-header-section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
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
    'settings'    => 'ch_header_social',
    'label'       => esc_html__( 'Header Social', 'appilo' ),
    'description'       => esc_html__( 'Enable and disable header social', 'appilo' ),
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'ch_footer_social',
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
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch_fb_link',
    'description'    => __( 'Facebook', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch_tw_link',
    'description'    => __( 'Twitter', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch_gl_link',
    'description'    => __( 'Google', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch_ln_link',
    'description'    => __( 'Linkedin', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch_in_link',
    'description'    => __( 'Instagram', 'appilo' ),
    'section'  => 'cloud_hosting_social_links',
    'default'  => '#',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_body_fonts_settings',
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
            'element' => '.homePageOne.app-host',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'ch1_menu_btn_txt',
    'label'    => esc_html__( 'Change Menu Button Text', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'ch1_menu_btn_link',
    'label'    => esc_html__( 'Change Menu Button Link', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'ch1_menu_btn_shadow',
    'label' => esc_html__( 'Menu Button Shadow', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '#c76708',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch1_menu_btn_bg',
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch1_menu_btn_padding',
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_menu_fonts',
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch1_main_menu_margin',
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch1_menu_btn_hiver_bg',
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_menu_hover_fonts',
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
            'value'    => 'header14',
        ),

    ),
] );
//Header Menu
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_main_menu_fonts',
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
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li a, 
            .host-app-header-section .top-bar .header-right-bar .access li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_main_menu_hover_fonts',
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
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li a:hover, 
            .host-app-header-section .navbar .navbar-collapse .navbar-nav li.active a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch1_main_menu_padding',
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
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch1_main_menu_margin',
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
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_sub_menu_fonts',
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch1_sub_menu_padding',
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_sub_menu_hover_fonts',
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
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch1_sub_menu_bg_hover',
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
            'element' => '.host-app-header-section .navbar .navbar-collapse .navbar-nav li .dropdown-menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch1_sticky_header_bg',
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
            'value'    => 'header14',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'ch1_footer_copyright_txt',
    'label' => esc_html__( 'Footer Copyright Text', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => '© 2020 <span>appilo</span> All rights reserved',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_footer_copyright_txt_fonts',
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
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch1_copyright_footer_bg',
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
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch1_footer_c_padding',
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
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_footer_menu_fonts',
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
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_footer_menu_h_fonts',
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
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_footer_widget_title',
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
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'ch1_footer_widget_text',
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
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'ch1_main_footer_bg',
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
            'value'    => 'footer14',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimensions',
    'settings'    => 'ch1_footer_bg_padding',
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
            'value'    => 'footer14',
        ),

    ),
] );