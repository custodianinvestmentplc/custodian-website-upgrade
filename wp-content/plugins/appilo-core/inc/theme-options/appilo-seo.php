<?php
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_seo_blog_header_bg',
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
            'element' => '.appseo-main-header.appseo-default-header',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_body_fonts_settings',
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
            'element' => '.appseo-home',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appilo_seo_blog_gradient_2',
    'description' => esc_html__( 'Background Gradient 1', 'appilo' ),
    'section'     => 'appilo_blog_bg_control',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_menu_button_text_settings_10',
    'label'    => esc_html__( 'Change Menu Button', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => 'Contact Us',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'appilo_menu_button_link_settings_10',
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appilo_seo_menu_btn_bg1',
    'label' => esc_html__( 'Button Background', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appilo_seo_menu_btn_bg2',
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appilo_seo_menu_btn_bg_hover',
    'description' => esc_html__( 'Button Hover Background', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'appilo_seo_menu_btn_height',
    'description' => esc_html__( 'Button Height', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'appilo_seo_menu_btn_width',
    'description' => esc_html__( 'Button Width', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_menu_btn_fonts',
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
    ],
    'transport'   => 'auto',
    'priority' => 100,
    'output'      => [
        [
            'element' => '.appseo-main-header .header-button a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_menu_fonts',
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
            'element' => '.appseo-main-header .appseo-main-navigation li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_sub_menu_fonts',
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
            'element' => '.appseo-main-header .appseo-main-navigation .dropdown .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'appilo_seo_sub_menu_bg_hover',
    'description' => esc_html__( 'Sub Menu Hover BG', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_seo_main_header_bg',
    'label'       => esc_html__( 'Main Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appseo-main-header',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_seo_sticky_header_bg',
    'label'       => esc_html__( 'Sticky Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appseo-sticky-header-overlay',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'appilo_seo_header_side_enable',
    'label'       => esc_html__( 'Enable Slide Bar', 'appilo' ),
    'section'     => 'appilo_header_styling',
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
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'appilo_seo_header_side_social_title',
    'label' => esc_html__( 'Header Side Social Title', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => 'Follow Us On:',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Social Icons', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'priority'    => 100,
    'row_label' => [
        'value' => esc_html__( 'Social Icon', 'appilo' ),
    ],
    'button_label' => esc_html__('"Add new Social"', 'appilo' ),
    'settings'     => 'appilo_seo_socials',
    'default'      => [
        [
            'icon_class' => esc_html__( 'fab fa-facebook-f', 'appilo' ),
            'social_link'  => '#',
        ],
        [
            'icon_class' => esc_html__( 'fab fa-behance', 'appilo' ),
            'social_link'  => '#',
        ],
        [
            'icon_class' => esc_html__( 'fab fa-linkedin', 'appilo' ),
            'social_link'  => '#',
        ],
        [
            'icon_class' => esc_html__( 'fab fa-twitter', 'appilo' ),
            'social_link'  => '#',
        ],
    ],
    'fields' => [
        'icon_class' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Icon Class', 'appilo' ),
            'description' => esc_html__( 'Input any free icon class from fontawesome', 'appilo' ),
            'default'     => '',
        ],
        'social_link'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Social Link', 'appilo' ),
            'description' => esc_html__( 'Input your social link with http', 'appilo' ),
            'default'     => '',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_icon_fonts',
    'label'       => esc_html__( 'Icon Fonts Style', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appseo-home .side_inner_content .side_contact .social_widget li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'appilo_seo_header_side_content',
    'label' => esc_html__( 'Header Side Content', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => 'BDLP is one of the leading multi-disciplinary law firms in Dhaka, Bangladesh managed by lawyers in and around Dhaka. The law firm is one of the top law firms in Dhaka and represents both foreign and local clients.',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'appilo_seo_header_side_copyright',
    'label' => esc_html__( 'Header Side Copyright', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '© Copyright 2020. Design by Themexriver',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'appilo_seo_footer_copyright_txt',
    'label' => esc_html__( 'Footer Copyright Text', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => '© Copyright 2020. Design by <a href="#">Themexriver</a>',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_footer_copyright_txt_fonts',
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
            'element' => '.ei-footer-copyright p, .ei-footer-copyright a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'appilo_seo_footer_border',
    'label' => esc_html__( 'Footer Border', 'appilo' ),
    'description' => esc_html__( 'Footer Border Style', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'appilo_seo_footer_border_color',
    'description' => esc_html__( 'Footer Border Color', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_seo_main_footer_bg',
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
            'element' => '.appseo-footer-area-section:before',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'appilo_seo_footer_padding',
    'label' => esc_html__( 'Footer Padding', 'appilo' ),
    'description' => esc_html__( 'Footer Padding All', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_footer_copyright_menu_fonts',
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
            'element' => '.appseo-footer-widget .menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Social Icons', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority'    => 100,
    'row_label' => [
        'value' => esc_html__( 'Social Icon', 'appilo' ),
    ],
    'button_label' => esc_html__('"Add new Social"', 'appilo' ),
    'settings'     => 'appilo_footer_seo_socials',
    'default'      => [
        [
            'icon_class' => esc_html__( 'fab fa-facebook-f', 'appilo' ),
            'social_link'  => '#',
        ],
        [
            'icon_class' => esc_html__( 'fab fa-behance', 'appilo' ),
            'social_link'  => '#',
        ],
        [
            'icon_class' => esc_html__( 'fab fa-linkedin', 'appilo' ),
            'social_link'  => '#',
        ],
        [
            'icon_class' => esc_html__( 'fab fa-twitter', 'appilo' ),
            'social_link'  => '#',
        ],
    ],
    'fields' => [
        'icon_class' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Icon Class', 'appilo' ),
            'description' => esc_html__( 'Input any free icon class from fontawesome', 'appilo' ),
            'default'     => '',
        ],
        'social_link'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Social Link', 'appilo' ),
            'description' => esc_html__( 'Input your social link with http', 'appilo' ),
            'default'     => '',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_seo_main_footer_bg',
    'label'       => esc_html__( 'Footer Social Background Control', 'appilo' ),
    'description' => esc_html__( 'Change Footer Social All Background Here', 'appilo' ),
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
            'element' => '.appseo-copyright .appseo-footer-social a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_footer_socail_fonts',
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
            'element' => '.appseo-copyright .appseo-footer-social a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_footer_all_fonts_1',
    'label'       => esc_html__( 'Footer All Fonts Control', 'appilo' ),
    'description'       => esc_html__( 'Footer Widget Title', 'appilo' ),
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
            'element' => '.appseo-footer-widget .appseo-widget-title',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_footer_all_fonts_2',
    'description'       => esc_html__( 'Footer Widget Text', 'appilo' ),
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
            'element' => '.appseo-footer-widget .footer-logo-widget .appseo-footer-about p,
            .appseo-footer-widget .footer-logo-widget .appseo-footer-about span,
            .appseo-footer-widget .footer-logo-widget .appseo-footer-about strong',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_seo_footer_all_fonts_3',
    'description'       => esc_html__( 'Footer Widget Menu', 'appilo' ),
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
            'element' => '.ei-footer-widget ul li a, .ei-footer-widget ul li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'image',
    'settings'    => 'appilo_seo_footer_bg_img',
    'label' => esc_html__( 'Footer Background', 'appilo' ),
    'description' => esc_html__( 'Change Footer Background', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => get_template_directory_uri().'/img/appilo-seo/banner/fob.png',
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer10',
        ),

    ),
] );