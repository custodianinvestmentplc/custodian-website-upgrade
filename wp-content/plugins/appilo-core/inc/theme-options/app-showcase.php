<?php
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_body_fonts_settings',
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
            'element' => '.app-eight-home, .app-eight-home-rtl',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_showcase_blog_gradient_1',
    'description' => esc_html__( 'Background Gradient 1', 'appilo' ),
    'section'     => 'appilo_blog_bg_control',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_showcase_blog_gradient_2',
    'description' => esc_html__( 'Background Gradient 1', 'appilo' ),
    'section'     => 'appilo_blog_bg_control',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_menu_button_text_settings_9',
    'label'    => esc_html__( 'Change Menu Button', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => 'SignIn',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'appilo_menu_button_link_settings_9',
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_showcase_menu_btn_bg',
    'description' => esc_html__( 'Button Background', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_showcase_menu_btn_bg_hover',
    'description' => esc_html__( 'Button Hover Background', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'app_showcase_menu_btn_height',
    'description' => esc_html__( 'Button Height', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'app_showcase_menu_btn_width',
    'description' => esc_html__( 'Button Width', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'app_showcase_menu_btn_padding',
    'description' => esc_html__( 'Button Padding', 'appilo' ),
    'section'     => 'appilo_menu_button_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_menu_btn_fonts',
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
            'element' => '.main-header-eight .appheader-content .sign-up-btn-eight a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_menu_fonts',
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
            'element' => '.main-header-eight .appheader-content .navigation-eight li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_showcase_main_menu_before',
    'label'       => esc_html__( 'Menu Before Control', 'appilo' ),
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
            'element' => '.main-header-eight .appheader-content .navigation-eight li a:after',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_sub_menu_fonts',
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
            'element' => '.main-header-eight .appheader-content .dropdown .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_showcase_main_header_bg',
    'label'       => esc_html__( 'Main Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.main-header-eight',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_showcase_sticky_header_bg',
    'label'       => esc_html__( 'Sticky Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.main-header-eight.eisticky-menu-bg-overlay',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Social Icons 11', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'priority'    => 100,
    'row_label' => [
        'value' => esc_html__( 'Social Icon', 'appilo' ),
    ],
    'button_label' => esc_html__('"Add new Social"', 'appilo' ),
    'settings'     => 'app_showcase_socials',
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
            'type'        => 'select',
            'label'       => esc_html__( 'Icon', 'appilo' ),
            'description' => esc_html__( 'use fontawesome class name here', 'appilo' ),
            'choices'     => get_fontawesome_icons()
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
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_icon_fonts',
    'label'       => esc_html__( 'Icon Fonts Style', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.main-header-eight .appheader-content .h-eight-social li',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_showcase_top_1',
    'label' => esc_html__( 'Top Scroll BG', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_showcase_top_2',
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'app_showcase_footer_copyright_txt',
    'label' => esc_html__( 'Footer Copyright Text', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => '© 2020 <a href="#">Themexriver</a>',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_footer_copyright_txt_fonts',
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
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_showcase_copyright_bg',
    'label'       => esc_html__( 'Copyright Background Control', 'appilo' ),
    'description' => esc_html__( 'Change All Background Here', 'appilo' ),
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
            'element' => '.ei-footer-copyright',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'app_showcase_footer_border',
    'label' => esc_html__( 'Footer Border', 'appilo' ),
    'description' => esc_html__( 'Footer Border Style', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_showcase_footer_border_color',
    'description' => esc_html__( 'Footer Border Color', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_showcase_main_footer_bg',
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
            'element' => 'section#ei-footer',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'app_showcase_footer_padding',
    'label' => esc_html__( 'Footer Padding', 'appilo' ),
    'description' => esc_html__( 'Footer Padding All', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_footer_copyright_menu_fonts',
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
            'element' => '.ei-footer-copyright .ei-copyright-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_showcase_main_footer_bg',
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
            'element' => '.ei-footer-widget .ei-footer-social a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_footer_socail_fonts',
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
            'element' => '.ei-footer-widget .ei-footer-social a:nth-child(1), 
            .ei-footer-widget .ei-footer-social a:nth-child(2), 
            .ei-footer-widget .ei-footer-social a:nth-child(3), 
            .ei-footer-widget .ei-footer-social a:nth-child(4), 
            .ei-footer-widget h4 i',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_footer_all_fonts_1',
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
            'element' => '.ei-footer-widget .ei-widget-title',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_footer_all_fonts_2',
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
            'element' => '.ei-footer-widget p, 
            .ei-footer-widget h4 span, 
            .ei-footer-widget h4',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_showcase_footer_all_fonts_3',
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
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'image',
    'settings'    => 'app_showcase_footer_animate_bg_1',
    'label' => esc_html__( 'Footer Background', 'appilo' ),
    'description' => esc_html__( 'Change Footer Animate Background Shape 1', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => get_template_directory_uri().'/img/app-showcase/shape/fo-shape1.png',
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'image',
    'settings'    => 'app_showcase_footer_animate_bg_2',
    'description' => esc_html__( 'Change Footer Animate Background Shape 2', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => get_template_directory_uri().'/img/app-showcase/shape/fo-shape2.png',
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'image',
    'settings'    => 'app_showcase_footer_animate_bg_3',
    'description' => esc_html__( 'Change Footer Animate Background Map', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'priority' => 100,
    'default'     => get_template_directory_uri().'/img/app-showcase/shape/eimap.png',
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_showcase_main_footer_bg11',
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
            'element' => '.ei-footer-section',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer9',
        ),

    ),
] );