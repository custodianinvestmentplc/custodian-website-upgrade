<?php
/**
 * Customizer Configuration
 */
Kirki::add_config( 'appilo_customizer', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'appilo_theme_settings', array(
    'priority'    => 1,
    'title'       => esc_html__( 'Theme Settings', 'appilo' ),
    'description' => esc_html__( 'Manage Theme Global Settings', 'appilo' ),
    
) );
Kirki::add_panel( 'appilo_header_settings', array(
    'priority'    => 2,
    'title'       => esc_html__( 'Header Settings', 'appilo' ),
    'description' => esc_html__( 'Manage Theme Header', 'appilo' ),
    
) );
Kirki::add_panel( 'appilo_slider_settings', array(
    'priority'    => 3,
    'title'       => esc_html__( 'Slider Settings', 'appilo' ),
    'description' => esc_html__( 'Manage Theme Slider', 'appilo' ),
    
) );
Kirki::add_panel( 'appilo_theme_layout', array(
    'priority'    => 4,
    'title'       => esc_html__( 'Theme Layout', 'appilo' ),
    'description' => esc_html__( 'Manage Theme Layout Settings', 'appilo' ),
    
) );
Kirki::add_panel( 'appilo_footer_settings', array(
    'priority'    => 5,
    'title'       => esc_html__( 'Footer Settings', 'appilo' ),
    'description' => esc_html__( 'Manage Footer Settings', 'appilo' ),
    
) );

Kirki::add_section( 'appilo_preloader_control', array(
    'title'          => esc_html__( 'Turn ON/OFF Preloader', 'appilo' ),
    'description'    => esc_html__( 'Control the preloader', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
    'priority'       => 1,
    
) );
Kirki::add_section( 'appilo_scroll_top_control', array(
    'title'          => esc_html__( 'Top To Scroll', 'appilo' ),
    'description'    => esc_html__( 'Control the top to scroll', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
    'priority'       => 1,

) );
Kirki::add_section( 'appilo_mouse_cursor_control', array(
    'title'          => esc_html__( 'Mouse Cursor', 'appilo' ),
    'description'    => esc_html__( 'Control Mouse Cursor Style', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
    'priority'       => 1,

) );
Kirki::add_section( 'appilo_fonts_control', array(
    'title'          => esc_html__( 'Theme Fonts Change', 'appilo' ),
    'description'    => esc_html__( 'Change theme all fonts', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
    'priority'       => 2,

) );
Kirki::add_section( 'appilo_heading_fonts_control', array(
    'title'          => esc_html__( 'Theme Heading Fonts Change', 'appilo' ),
    'description'    => esc_html__( 'Change theme all heading fonts', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
    'priority'       => 3,

) );
Kirki::add_section( 'appilo_color_control', array(
    'title'          => esc_html__( 'Theme Primary Color', 'appilo' ),
    'description'    => esc_html__( 'Change theme all color here', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
    'priority'       => 4,

) );
Kirki::add_section( 'appilo_blog_bg_control', array(
    'title'          => esc_html__( 'Theme Blog Background', 'appilo' ),
    'description'    => esc_html__( 'Change theme blog and details page bg', 'appilo' ),
    'panel'          => 'appilo_theme_settings',
    'priority'       => 5,

) );
Kirki::add_section( 'appilo_sticky_header_control', array(
    'title'          => esc_html__( 'Turn ON/OFF Sticky', 'appilo' ),
    'description'    => esc_html__( 'Sticky header turn on/off', 'appilo' ),
    'panel'          => 'appilo_header_settings',
    'priority'       => 3,

) );
Kirki::add_section( 'appilo_header_styling', array(
    'title'          => esc_html__( 'Header Styling', 'appilo' ),
    'description'    => esc_html__( 'Change header all style here', 'appilo' ),
    'panel'          => 'appilo_header_settings',
    'priority'       => 4,

) );
Kirki::add_section( 'appilo_top_header_styling', array(
    'title'          => esc_html__( 'Top Header', 'appilo' ),
    'description'    => esc_html__( 'Change top header all style here', 'appilo' ),
    'panel'          => 'appilo_header_settings',
    'priority'       => 5,

) );
Kirki::add_section( 'appilo_layout_builder', array(
    'title'          => esc_html__( 'Theme Layout Size', 'appilo' ),
    'description'    => esc_html__( 'Select theme layout', 'appilo' ),
    'panel'          => 'appilo_theme_layout',
    'priority'       => 1,
    
) );
Kirki::add_section( 'appilo_header_builder', array(
    'title'          => esc_html__( 'Theme Header Builder', 'appilo' ),
    'description'    => esc_html__( 'Select theme header', 'appilo' ),
    'panel'          => 'appilo_theme_layout',
    'priority'       => 2,
    
) );
Kirki::add_section( 'appilo_footer_builder', array(
    'title'          => esc_html__( 'Theme Footer Builder', 'appilo' ),
    'description'    => esc_html__( 'Select theme footer', 'appilo' ),
    'panel'          => 'appilo_theme_layout',
    'priority'       => 3,
    
) );
Kirki::add_section( 'appilo_elementor_builder', array(
    'title'          => esc_html__( 'Appilo Theme Builder', 'appilo' ),
    'description'    => esc_html__( 'Select options to build theme', 'appilo' ),
    'panel'          => 'appilo_theme_layout',
    'priority'       => 4,

) );
Kirki::add_section( 'appilo_footer_copyright', array(
    'title'          => esc_html__( 'Footer Copyright', 'appilo' ),
    'description'    => esc_html__( 'Change footer copyright', 'appilo' ),
    'panel'          => 'appilo_footer_settings',
    'priority'       => 5,

) );
Kirki::add_section( 'appilo_footer_options', array(
    'title'          => esc_html__( 'Footer Style', 'appilo' ),
    'description'    => esc_html__( 'Change footer background and other info', 'appilo' ),
    'panel'          => 'appilo_footer_settings',
    'priority'       => 1,

) );
Kirki::add_section( 'appilo_subscribe_options', array(
    'title'          => esc_html__( 'Subscribe Form', 'appilo' ),
    'description'    => esc_html__( 'Change footer subscribe form.', 'appilo' ),
    'panel'          => 'appilo_footer_settings',
    'priority'       => 2,

) );
Kirki::add_section( 'appilo_logo_settings', array(
    'title'          => esc_html__( 'Logo', 'appilo' ),
    'description'    => esc_html__( 'Change main logo here.', 'appilo' ),
    'panel'          => 'appilo_slider_settings',
    'priority'       => 150,
    
) );
Kirki::add_section( 'appilo_slider_options', array(
    'title'          => esc_html__( 'Sliders', 'appilo' ),
    'description'    => esc_html__( 'Change main slider here.', 'appilo' ),
    'panel'          => 'appilo_slider_settings',
    'priority'       => 1,
    
) );
Kirki::add_section( 'appilo_menu_button_options', array(
    'title'          => esc_html__( 'Menu Button', 'appilo' ),
    'description'    => esc_html__( 'Change menu button here.', 'appilo' ),
    'panel'          => 'appilo_header_settings',
    'priority'       => 2,
    
) );
Kirki::add_section( 'appilo_menu_style', array(
    'title'          => esc_html__( 'Menu Style', 'appilo' ),
    'description'    => esc_html__( 'Change menu style here.', 'appilo' ),
    'panel'          => 'appilo_header_settings',
    'priority'       => 3,
) );
Kirki::add_section( 'appilo_logo_options', array(
    'title'          => esc_html__( 'Logo Settings', 'appilo' ),
    'description'    => esc_html__( 'Change logo settings here.', 'appilo' ),
    'panel'          => 'appilo_header_settings',
    'priority'       => 1,
    
) );

Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'appilo_main_logo_settings',
    'label'    => esc_html__( 'Change Main Logo Here', 'appilo' ),
    'section'  => 'appilo_logo_options',
    'default'  => get_template_directory_uri() . '/img/logo.png',
    'priority' => 100,
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'appilo_svg_main_logo_settings',
    'label'    => esc_html__( 'Change SVG Main Logo Here', 'appilo' ),
    'section'  => 'appilo_logo_options',
    'default'  => '',
    'priority' => 100,
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_svg_main_logo_width_settings',
    'label'    => esc_html__( 'Change SVG width', 'appilo' ),
    'section'  => 'appilo_logo_options',
    'default'  => '60px',
    'priority' => 100,
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_svg_main_logo_width_settings_mob',
    'description'    => esc_html__( 'Change SVG width In Mobile', 'appilo' ),
    'section'  => 'appilo_logo_options',
    'default'  => '60px',
    'priority' => 100,
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_svg_main_logo_height_settings',
    'label'    => esc_html__( 'Change SVG height', 'appilo' ),
    'section'  => 'appilo_logo_options',
    'default'  => 'auto',
    'priority' => 100,
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_svg_main_logo_height_settings_mob',
    'description'    => esc_html__( 'Change SVG height In Mobile', 'appilo' ),
    'section'  => 'appilo_logo_options',
    'default'  => 'auto',
    'priority' => 100,
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'appilo_sticky_logo_settings',
    'label'    => esc_html__( 'Change Sticky Logo Here', 'appilo' ),
    'section'  => 'appilo_logo_options',
    'default'  => get_template_directory_uri() . '/img/logo-2.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );

Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'appilo_footer_copyright_settings_2',
    'label'    => esc_html__( 'Change Footer Text here', 'appilo' ),
    'section'  => 'appilo_footer_copyright',
    'default'  => '© 2018, appilo Theme by Themexriver Team',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_layout_settings',
            'operator' => '==',
            'value'    => 'layout2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'appilo_footer_copyright_settings',
    'label'    => esc_html__( 'Change Footer Text here', 'appilo' ),
    'section'  => 'appilo_footer_copyright',
    'default'  => '© 2018, appilo Theme by Themexriver Team',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_copyright_all_text_settings',
    'label'    => esc_html__( 'Change Copyright All Reserved Text', 'appilo' ),
    'section'  => 'appilo_footer_copyright',
    'default'  => 'All Right Reserved',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'appilo_blog_details_bg',
    'label'    => esc_html__( 'Change Blog Details BG', 'appilo' ),
    'section'  => 'appilo_blog_bg_control',
    'default'  => get_template_directory_uri() . '/img/1/blog-details-1-1.jpg',
    'priority' => 100,
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Copyright Menu', 'appilo' ),
    'section'     => 'appilo_footer_copyright',
    'priority'    => 100,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Menu', 'appilo' ),
    ],
    'button_label' => esc_html__('"Add New Menu" ', 'appilo' ),
    'settings'     => 'footer_copyright_menu',
    'default'      => [
        [
            'link_text' => esc_html__( 'Privacy Policy', 'appilo' ),
            'link_url'  => '#',
        ],
        [
            'link_text' => esc_html__( 'Site Map', 'appilo' ),
            'link_url'  => '#',
        ],
    ],
    'fields' => [
        'link_text' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Menu Name', 'appilo' ),
            'description' => esc_html__( 'The name of the menu', 'appilo' ),
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
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'appilo_body_custom_class',
    'label'    => esc_html__( 'Change Appilo Custom Body Class', 'appilo' ),
    'section'  => 'appilo_fonts_control',
    'default'  => '',
    'priority' => 9,
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'theme_fonts_settings',
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
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.appilo-main',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'theme_head_fonts_settings',
    'label'       => esc_html__( 'Change Heading Fonts', 'appilo' ),
    'section'     => 'appilo_heading_fonts_control',
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
            'element' => '.appilo-main h1, .appilo-main h2, .appilo-main h3, .appilo-main h4, .appilo-main h5, 
            .appilo-main h6',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_body_bg',
    'label'       => esc_html__( 'Body BG', 'appilo' ),
    'description' => esc_html__( 'Change body background', 'appilo' ),
    'section'     => 'appilo_color_control',
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
            'element' => 'body',
        ],
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'radio-buttonset',
    'settings'    => 'solid_gradient',
    'label'       => esc_html__( 'Select Color Type', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => 'gradient',
    'priority'    => 1,
    'choices'     => [
        'gradient' => esc_html__( 'Gradient Color', 'appilo' ),
        'solid'   => esc_html__( 'Solid Color', 'appilo' ),
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'theme_main_color',
    'label'       => __( 'Theme Solid Color', 'appilo' ),
    'description' => esc_html__( 'Change Theme Solid Color', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
            'setting'  => 'solid_gradient',
            'operator' => '==',
            'value'    => 'solid',
        ),
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),
    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'theme_main_color_1',
    'label'       => __( 'Theme Gradient Left', 'appilo' ),
    'description' => esc_html__( 'Change Theme Gradient Color Left', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
            'setting'  => 'solid_gradient',
            'operator' => '==',
            'value'    => 'gradient',
        ),
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),
    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'theme_main_color_2',
    'label'       => __( 'Theme Gradient Right', 'appilo' ),
    'description' => esc_html__( 'Change Theme Gradient Color Right', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
            'setting'  => 'solid_gradient',
            'operator' => '==',
            'value'    => 'gradient',
        ),
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'color',
    'settings'    => 'theme_sticky_header_color',
    'label'       => __( 'Theme Sticky Header Background', 'appilo' ),
    'description' => esc_html__( 'Change Theme sticky header bg', 'appilo' ),
    'section'     => 'appilo_color_control',
    'default'     => '',
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_menu_button_text_settings',
    'label'    => esc_html__( 'Change Menu Button Text', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => 'Download',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_menu_button_text_settings_2',
    'label'    => esc_html__( 'Change Menu Button Text', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => 'Download',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_layout_settings',
            'operator' => '==',
            'value'    => 'layout2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'appilo_menu_button_link_settings',
    'label'    => esc_html__( 'Change Menu Button Link', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'link',
    'settings' => 'appilo_menu_button_link_settings_2',
    'label'    => esc_html__( 'Change Menu Button Link', 'appilo' ),
    'section'  => 'appilo_menu_button_options',
    'default'  => '#',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_layout_settings',
            'operator' => '==',
            'value'    => 'layout2',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_main_menu_fonts_settings',
    'label'       => esc_html__( 'Change Main Menu Fonts', 'appilo' ),
    'section'     => 'appilo_menu_style',
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
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.home-page-one .navbar-nav .nav-link',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_main_menu_active_fonts_hover_settings',
    'label'       => esc_html__( 'Menu Hover and active one Fonts', 'appilo' ),
    'section'     => 'appilo_menu_style',
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
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.home-page-one .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_main_menu_active_fonts_settings',
    'label'       => esc_html__( 'Change Main Menu active Fonts', 'appilo' ),
    'section'     => 'appilo_menu_style',
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
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.home-page-one.menu-bg-overlay .navbar-nav .nav-link.active, .home-page-one.menu-bg-overlay .navbar-nav .nav-link:hover',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),
    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_main_sub_menu_fonts_settings',
    'label'       => esc_html__( 'Change Sub Menu Fonts', 'appilo' ),
    'section'     => 'appilo_menu_style',
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
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.home-page-one .navbar-expand-lg .navbar-nav .dropdown-menu li a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),
    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_main_sub_menu_bg',
    'label'       => esc_html__( 'Sub Menu Background', 'appilo' ),
    'description' => esc_html__( 'Change sub menu background', 'appilo' ),
    'section'     => 'appilo_menu_style',
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
            'element' => '.home-page-one .navbar-expand-lg .navbar-nav .dropdown-menu li:hover a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_main_sub_menu_hover_fonts_settings',
    'label'       => esc_html__( 'Change Sub Menu Hover Fonts', 'appilo' ),
    'section'     => 'appilo_menu_style',
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
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.home-page-one .navbar-expand-lg .navbar-nav .dropdown-menu li:hover a',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_header_builder',
            'operator' => '==',
            'value'    => 'header1',
        ),
    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'appilo_preloader_switch',
    'label'       => esc_html__( 'Turn ON/OFF Preloader', 'appilo' ),
    'section'     => 'appilo_preloader_control',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'hrm_preloader',
    'label'       => esc_html__( 'Change Preloader', 'appilo' ),
    'description' => esc_html__( 'Change you preloader', 'appilo' ),
    'section'     => 'appilo_preloader_control',
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
            'element' => 'div#dia-preloader'
        ],
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'appilo_sticky_switch',
    'label'       => esc_html__( 'Turn ON/OFF Sticky', 'appilo' ),
    'section'     => 'appilo_sticky_header_control',
    'default'     => '2',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'appilo_menu_toggle_color',
    'label'       => esc_html__( 'Change Toggle Color', 'appilo' ),
    'description' => esc_html__( 'Change Theme Toggle Color', 'appilo' ),
    'section'     => 'appilo_header_styling',
    'default'     => [
        'font-size'      => '',
        'color'         => '',
    ],
    'priority'    => 20,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.pm-mobile_menu_button, .s2_mobile_menu_button',
        ],
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'image',
    'settings' => 'appilo_footer_bg_settings',
    'label'    => esc_html__( 'Change Footer background here', 'appilo' ),
    'section'  => 'appilo_footer_options',
    'default'  => get_template_directory_uri() . '/img/1footer-bg.png',
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_footer_bg_con',
    'label'    => esc_html__( 'Change Footer background here', 'appilo' ),
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
            'element' => '.appilo-footer',
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'appilo_footer_subscribe_switch',
    'label'       => esc_html__( 'Turn ON/OFF Subscribe', 'appilo' ),
    'section'     => 'appilo_subscribe_options',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'text',
    'settings' => 'appilo_footer_subscribe_title_settings',
    'label'    => esc_html__( 'Change Footer Subscribe form title here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_html__('Subscribe to Our Newsletter' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'appilo_footer_subscribe_info_settings',
    'label'    => esc_html__( 'Change Footer Subscribe form info here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_html__('A Private Limited is the most popular type of partnership Malta. The limited liability is, in fact, the only type of company allowed by Companies.' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'     => 'textarea',
    'settings' => 'appilo_footer_subscribe_form_settings',
    'label'    => esc_html__( 'Change Footer Subscribe form shortcode here', 'appilo' ),
    'section'  => 'appilo_subscribe_options',
    'default'  => esc_attr__('[contact-form-7 id="64" title="Subscribe"]' , 'appilo'),
    'priority' => 100,
    'required'    => array(
        array(
            'setting'  => 'theme_footer_builder',
            'operator' => '==',
            'value'    => 'footer1',
        ),

    ),
] );
// Theme Layout
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'select',
    'settings'    => 'theme_layout_settings',
    'label'       => esc_html__( 'Select Theme Layout', 'appilo' ),
    'section'     => 'appilo_layout_builder',
    'default'     => 'layout1',
    'placeholder' => esc_html__( 'Select a layout', 'appilo' ),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => [
        'layout1' => esc_html__( 'Main Appilo', 'appilo' ),
        'layout2' => esc_html__( 'Topapp', 'appilo' ),
        'layout3' => esc_html__( 'Galaxy App Landing', 'appilo' ),
        'layout4' => esc_html__( 'Galaxy Agency', 'appilo' ),
        'layout5' => esc_html__( 'Galaxy Resume', 'appilo' ),
        'layout6' => esc_html__( 'Galaxy Product Landing', 'appilo' ),
        'layout7' => esc_html__( 'Appilo SaaS', 'appilo' ),
        'layout8' => esc_html__( 'SaaS Classic', 'appilo' ),
        'layout9' => esc_html__( 'App Showcase', 'appilo' ),
        'layout10' => esc_html__( 'Appilo SEO', 'appilo' ),
        'layout11' => esc_html__( 'App Startup', 'appilo' ),
        'layout12' => esc_html__( 'Digital Agency', 'appilo' ),
        'layout13' => esc_html__( 'Appilo Landing', 'appilo' ),
        'layout14' => esc_html__( 'Cloud Host 01', 'appilo' ),
        'layout15' => esc_html__( 'Cloud Host 02', 'appilo' ),
        'layout16' => esc_html__( 'Cloud Host 03', 'appilo' ),
        'layout17' => esc_html__( 'HR Management', 'appilo' ),
        'layout18' => esc_html__( 'CRM', 'appilo' ),
        'layout19' => esc_html__( 'SMM', 'appilo' ),
        'layout20' => esc_html__( 'Appilo Software', 'appilo' ),
        'layout21' => esc_html__( 'Appilo SEO 2', 'appilo' ),
        'layout22' => esc_html__( 'Appilo Medical', 'appilo' ),
        'layout23' => esc_html__( 'Default Body Class', 'appilo' ),
    ],
] );
// Theme header builder
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'select',
    'settings'    => 'theme_header_builder',
    'label'       => esc_html__( 'Select Header Layout', 'appilo' ),
    'section'     => 'appilo_header_builder',
    'default'     => 'header1',
    'placeholder' => esc_html__( 'Select a header', 'appilo' ),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => [
        'header1' => esc_html__( 'Header 1', 'appilo' ),
        'header2' => esc_html__( 'Header 2', 'appilo' ),
        'header3' => esc_html__( 'Header 3', 'appilo' ),
        'header4' => esc_html__( 'Header 4', 'appilo' ),
        'header5' => esc_html__( 'Header 5', 'appilo' ),
        'header6' => esc_html__( 'Header 6', 'appilo' ),
        'header7' => esc_html__( 'Header 7', 'appilo' ),
        'header8' => esc_html__( 'Header 8', 'appilo' ),
        'header9' => esc_html__( 'Header 9', 'appilo' ),
        'header10' => esc_html__( 'Header 10', 'appilo' ),
        'header11' => esc_html__( 'Header 11', 'appilo' ),
        'header12' => esc_html__( 'Header 12', 'appilo' ),
        'header13' => esc_html__( 'Header 13', 'appilo' ),
        'header14' => esc_html__( 'Header 14', 'appilo' ),
        'header15' => esc_html__( 'Header 15', 'appilo' ),
        'header16' => esc_html__( 'Header 16', 'appilo' ),
        'header17' => esc_html__( 'Header 17', 'appilo' ),
        'header18' => esc_html__( 'Header 18', 'appilo' ),
        'header19' => esc_html__( 'Header 19', 'appilo' ),
        'header20' => esc_html__( 'Header 20', 'appilo' ),
        'header21' => esc_html__( 'Header 21', 'appilo' ),
        'header22' => esc_html__( 'Header 22', 'appilo' ),
    ],
] );
// Theme header builder
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'select',
    'settings'    => 'theme_footer_builder',
    'label'       => esc_html__( 'Select Footer Layout', 'appilo' ),
    'section'     => 'appilo_footer_builder',
    'default'     => 'footer1',
    'placeholder' => esc_html__( 'Select footer', 'appilo' ),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => [
        'footer1' => esc_html__( 'Footer 1', 'appilo' ),
        'footer2' => esc_html__( 'Footer 2', 'appilo' ),
        'footer3' => esc_html__( 'Footer 3', 'appilo' ),
        'footer4' => esc_html__( 'Footer 4', 'appilo' ),
        'footer5' => esc_html__( 'Footer 5', 'appilo' ),
        'footer6' => esc_html__( 'Footer 6', 'appilo' ),
        'footer7' => esc_html__( 'Footer 7', 'appilo' ),
        'footer8' => esc_html__( 'Footer 8', 'appilo' ),
        'footer9' => esc_html__( 'Footer 9', 'appilo' ),
        'footer10' => esc_html__( 'Footer 10', 'appilo' ),
        'footer11' => esc_html__( 'Footer 11', 'appilo' ),
        'footer12' => esc_html__( 'Footer 12', 'appilo' ),
        'footer13' => esc_html__( 'Footer 13', 'appilo' ),
        'footer14' => esc_html__( 'Footer 14', 'appilo' ),
        'footer15' => esc_html__( 'Footer 15', 'appilo' ),
        'footer16' => esc_html__( 'Footer 16', 'appilo' ),
        'footer17' => esc_html__( 'Footer 17', 'appilo' ),
        'footer18' => esc_html__( 'Footer 18', 'appilo' ),
        'footer19' => esc_html__( 'Footer 19', 'appilo' ),
        'footer20' => esc_html__( 'Footer 20', 'appilo' ),
        'footer21' => esc_html__( 'Footer 21', 'appilo' ),
        'footer22' => esc_html__( 'Footer 22', 'appilo' ),
    ],
] );

// Theme Elementor builder
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'header_builder_switch',
    'label'       => esc_html__( 'Turn ON/OFF Header Builder', 'appilo' ),
    'section'     => 'appilo_elementor_builder',
    'default'     => '',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'select',
    'settings'    => 'elementor_header',
    'label'       => esc_html__( 'Select Header Elementor Template', 'appilo' ),
    'section'     => 'appilo_elementor_builder',
    'default'     => '',
    'placeholder' => esc_html__( 'Select a header', 'appilo' ),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => appilo_post_type('appilo_template'),
    'required'    => array(
        array(
            'setting'  => 'header_builder_switch',
            'operator' => '==',
            'value'    => 1,
        ),

    ),
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'footer_builder_switch',
    'label'       => esc_html__( 'Turn ON/OFF Footer Builder', 'appilo' ),
    'section'     => 'appilo_elementor_builder',
    'default'     => '',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'select',
    'settings'    => 'elementor_footer',
    'label'       => esc_html__( 'Select Footer Elementor Template', 'appilo' ),
    'section'     => 'appilo_elementor_builder',
    'default'     => '',
    'placeholder' => esc_html__( 'Select a footer', 'appilo' ),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => appilo_post_type('appilo_template'),
    'required'    => array(
        array(
            'setting'  => 'footer_builder_switch',
            'operator' => '==',
            'value'    => 1,
        ),

    ),
] );
// 404 page
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => '404_page_switch',
    'label'       => esc_html__( 'Turn ON/OFF 404 page Builder', 'appilo' ),
    'section'     => 'appilo_elementor_builder',
    'default'     => '',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'select',
    'settings'    => '404_page_template',
    'label'       => esc_html__( 'Select 404 Elementor Template', 'appilo' ),
    'section'     => 'appilo_elementor_builder',
    'default'     => '',
    'placeholder' => esc_html__( 'Select 404 page', 'appilo' ),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => appilo_post_type('elementor_library'),
    'required'    => array(
        array(
            'setting'  => '404_page_switch',
            'operator' => '==',
            'value'    => 1,
        ),

    ),
] );
//Scroll Top
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'appilo_top_to_scroll',
    'label'       => esc_html__( 'Turn ON/OFF Scroll Top', 'appilo' ),
    'section'     => 'appilo_scroll_top_control',
    'default'     => '',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'scroll_top_icon',
    'description'       => esc_html__( 'Scroll Top Icon', 'appilo' ),
    'section'     => 'appilo_scroll_top_control',
    'priority' => 100,
    'default'     => [
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.dia-scrollup i',
        ],
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'typography',
    'settings'    => 'scroll_top_icon_h',
    'description'       => esc_html__( 'Scroll Top Icon Hover', 'appilo' ),
    'section'     => 'appilo_scroll_top_control',
    'priority' => 100,
    'default'     => [
        'font-size'      => '',
        'color'          => '',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.dia-scrollup:hover i',
        ],
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_scroll_top_bg',
    'label'       => esc_html__( 'Scroll To Top', 'appilo' ),
    'description' => esc_html__( 'Change scroll to top background', 'appilo' ),
    'section'     => 'appilo_scroll_top_control',
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
            'element' => '.dia-scrollup',
        ],
    ],
] );
Kirki::add_field( 'appilo_customizer', [
    'type'        => 'background',
    'settings'    => 'appilo_scroll_top_hover_bg',
    'label'       => esc_html__( 'Scroll To Top Hover', 'appilo' ),
    'description' => esc_html__( 'Change scroll to top hover background', 'appilo' ),
    'section'     => 'appilo_scroll_top_control',
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
            'element' => '.dia-scrollup:hover',
        ],
    ],
] );

Kirki::add_field( 'appilo_customizer', [
    'type'        => 'switch',
    'settings'    => 'appilo_mouse_cursor',
    'label'       => esc_html__( 'Mouse Cursor', 'appilo' ),
    'section'     => 'appilo_mouse_cursor_control',
    'default'     => '',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'appilo' ),
        'off' => esc_html__( 'Disable', 'appilo' ),
    ],
] );