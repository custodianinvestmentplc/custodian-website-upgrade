<?php
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_startup_blog_header_bg',
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
            'element' => '.default-str-header.str-main-header',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_body_fonts_settings',
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
            'element' => '.str-home',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_menu_fonts',
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
            'element' => '.str-main-header .str-main-menu-item .str-main-navigation li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimension',
    'settings'    => 'app_startup_main_menu_padding',
    'label'       => esc_html__( 'Menu Padding', 'appilo' ),
    'description' => esc_html__( 'You can control menu padding Here.', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_startup_main_menu_bg_hover1',
    'label' => esc_html__( 'Main Menu Hover BG', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_startup_main_menu_bg_hover2',
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_startup_main_menu_bg_hover3',
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_sub_menu_fonts',
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
            'element' => '.str-main-header .str-main-menu-item .str-main-navigation .dropdown .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'dimension',
    'settings'    => 'app_startup_sub_menu_padding',
    'label'       => esc_html__( 'Sub Menu Padding', 'appilo' ),
    'description' => esc_html__( 'You can control sub menu padding Here.', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_sub_menu_hover_fonts',
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
            'element' => '.str-main-header .str-main-menu-item .str-main-navigation .dropdown .dropdown-menu li a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'app_startup_sub_menu_bg_hover',
    'label' => esc_html__( 'Sub Menu Hover BG', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_startup_main_header_bg',
    'label'       => esc_html__( 'Main Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.str-main-header .str-main-menu-item .str-main-navigation',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_startup_sticky_header_bg',
    'label'       => esc_html__( 'Sticky Header Background', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'background-color'      => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.str-sticky-menu',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
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
    'settings'     => 'app_startup_socials',
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
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'app_startup_language_switcher',
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
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'app_startup_d_lang_txt',
    'label' => esc_html__( 'Language Default', 'appilo' ),
    'description' => esc_html__( 'Name', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => 'English',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'link',
    'settings'    => 'app_startup_d_lang_lnk',
    'description' => esc_html__( 'Link', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'app_startup_d_lang_img',
    'description'    => esc_html__( 'Image', 'appilo' ),
    'section'  => 'appilo_header_styling',
    'default'  => get_template_directory_uri() . '/img/app-startup/logo/ln1.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Language List', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'priority'    => 100,
    'row_label' => [
        'value' => esc_html__( 'Language', 'appilo' ),
    ],
    'button_label' => esc_html__('"Add new language"', 'appilo' ),
    'settings'     => 'app_startup_lang',
    'default'      => [
        [
            'str_lang_txt' => esc_html__( 'English', 'appilo' ),
            'str_lang_link'  => '#',
            'str_lang_img'     => get_template_directory_uri() . '/img/app-startup/logo/ln1.png',
        ],
        [
            'str_lang_txt' => esc_html__( 'English', 'appilo' ),
            'str_lang_link'  => '#',
            'str_lang_img'     => get_template_directory_uri() . '/img/app-startup/logo/ln1.png',
        ],
        [
            'str_lang_txt' => esc_html__( 'English', 'appilo' ),
            'str_lang_link'  => '#',
            'str_lang_img'     => get_template_directory_uri() . '/img/app-startup/logo/ln1.png',
        ],
    ],
    'fields' => [
        'str_lang_txt' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Language', 'appilo' ),
            'description' => esc_html__( 'Input a language name', 'appilo' ),
            'default'     => 'English',
        ],
        'str_lang_link'  => [
            'type'        => 'link',
            'label'       => esc_html__( 'Language Link', 'appilo' ),
            'description' => esc_html__( 'Input your language link with http', 'appilo' ),
            'default'     => '#',
        ],
        'str_lang_img'  => [
            'type'        => 'image',
            'label'       => esc_html__( 'Language Image', 'appilo' ),
            'description' => esc_html__( 'Input your language image', 'appilo' ),
            'default'     => get_template_directory_uri() . '/img/app-startup/logo/ln1.png',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_icon_fonts',
    'label'       => esc_html__( 'Icon Fonts Style', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.str-main-header .str-header-top .str-social a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_icon_hover_fonts',
    'description'       => esc_html__( 'Hover Fonts Style', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.str-main-header .str-header-top .str-social a:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'textarea',
    'settings'    => 'app_startup_footer_copyright_txt',
    'label' => esc_html__( 'Footer Copyright Text', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'default'     => '© Copyright 2020. Design by <a href="#">Themexriver</a>',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_footer_copyright_txt_fonts',
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
            'element' => '.str-footer-area .str-copywright-text',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_startup_copyright_footer_bg',
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
            'element' => '.str-footer-area .str-copywright-text',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'app_startup_main_footer_bg',
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
            'element' => '.str-footer-area',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'text',
    'settings'    => 'app_startup_footer_padding',
    'label' => esc_html__( 'Footer Padding', 'appilo' ),
    'description' => esc_html__( 'Footer Padding All', 'appilo' ),
    'section'     => 'appilo_footer_options',
    'default'     => '',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_footer_socail_fonts',
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
            'element' => '.str-footer-area .footer-content .str-footer-widget .str-newslatter-widget .str-social-footer a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_footer_all_fonts_1',
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
            'element' => '.str-footer-area .footer-content .str-footer-widget .str-widget-title',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_footer_all_fonts_2',
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
            'element' => '.str-footer-area .footer-content .str-ft-about-widget p, 
            .str-footer-area .footer-content .str-footer-widget .str-newslatter-widget p, 
            .str-footer-area .footer-content .str-footer-widget .str-office-widget .str-office-icon-text p, 
            .str-footer-area .footer-content .str-footer-widget .str-office-widget .str-open-hour p, 
            .str-footer-area .footer-content .str-footer-widget .str-office-widget .str-open-hour span',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer11',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'app_startup_footer_all_fonts_3',
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
            'value'    => 'footer11',
        ),

    ),
] );
