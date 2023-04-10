<?php
// Override Elementor Heading Elements

add_action('elementor/element/heading/section_title_style/before_section_start', function ($element, $args) {
    /** @var \Elementor\Element_Base $element */
    $element->start_controls_section(
        'text_style',
        [
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            'label' => __('Custom Style', 'appilo'),
        ]
    );
    $element->add_control(
        'text_gra',
        [
            'label' => __('Text Gradient', 'appilo'),
            'type' => \Elementor\Controls_Manager::HEADING,
        ]
    );
    $element->add_control(
        'text_transparent',
        [
            'label' => __('Transparent', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'appilo-text-gradient',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'text_gradient',
            'label' => __('Text Gradient', 'appilo'),
            'types' => ['gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}} .elementor-heading-title',
        ]
    );
    $element->end_controls_section();
}, 10, 2);

// Override Elementor Counter Elements

add_action('elementor/element/counter/section_number/before_section_start', function ($element, $args) {
    /** @var \Elementor\Element_Base $element */
    $element->start_controls_section(
        'counter_style',
        [
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            'label' => __('Custom Style', 'appilo'),
        ]
    );
    $element->add_control(
        'counter_gra',
        [
            'label' => __('Counter Gradient', 'appilo'),
            'type' => \Elementor\Controls_Manager::HEADING,
        ]
    );
    $element->add_control(
        'counter_transparent',
        [
            'label' => __('Transparent', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'appilo-counter-gradient',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'counter_gradient',
            'label' => __('Text Gradient', 'appilo'),
            'types' => ['gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}} .elementor-counter-number-wrapper',
        ]
    );
    $element->end_controls_section();
}, 10, 2);

// Override Elementor Image Elements

add_action('elementor/element/image/section_style_image/before_section_start', function ($element, $args) {
    /** @var \Elementor\Element_Base $element */
    $element->start_controls_section(
        'image_style',
        [
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            'label' => __('Custom Animation', 'appilo'),
        ]
    );
    $element->add_control(
        'image_animation',
        [
            'label' => __('Image Animation', 'appilo'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'none',
            'options' => [
                'none-animation' => __('None', 'appilo'),
                'man-updown' => __('Man UpDown', 'appilo'),
                'IT_animation_1' => __('Left/Right', 'appilo'),
                'IT_animation_2' => __('Up/Down', 'appilo'),
                'IT_animation_3' => __('Spinning', 'appilo'),
                'IT_animation_4' => __('Random', 'appilo'),
                'IT_animation_5' => __('Block', 'appilo'),
                'rotate-anim' => __('Rotate Anim', 'appilo'),
                'icon-bounce' => __('Bounce', 'appilo'),
            ],
            'prefix_class' => '',
        ]
    );
    $element->add_control(
        'image_hover_animation',
        [
            'label' => __('Hover Animation', 'appilo'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'none',
            'options' => [
                'none-hover-animation' => __('None', 'appilo'),
                'flip-animation' => __('Flip Animation', 'appilo'),
            ],
            'prefix_class' => '',
        ]
    );
    $element->add_control(
        'hover_light',
        [
            'label' => __('Hover Light', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'medi-app-hover-img',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->add_control(
        'tilt_animation',
        [
            'label' => __('Tilt Animation', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'osaas-tilt-animation',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->add_control(
        'data_animation',
        [
            'label' => __('Data Animation', 'appilo'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'none-data-animation',
            'options' => [
                'none-data-animation' => __('None', 'appilo'),
                'it-data-animation-1' => __('Data Animation 1', 'appilo'),
                'it-data-animation-2' => __('Data Animation 2', 'appilo'),
                'it-data-animation-3' => __('Data Animation 3', 'appilo'),
                'it-data-animation-4' => __('Data Animation 4', 'appilo'),
            ],
            'prefix_class' => '',
        ]
    );
    $element->add_control(
        'in_view',
        [
            'label' => __('InView Animation', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'js-inview-animation',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->add_responsive_control(
        'inview_l',
        [
            'label' => __('Left/Right', 'appilo'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px', '%'],
            'range' => [
                'px' => [
                    'min' => -1000,
                    'max' => 1000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => -100,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}}.js-inview-animation .elementor-image' => 'left: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'in_view' => 'js-inview-animation',
            ],
        ]
    );
    $element->add_responsive_control(
        'inview_u',
        [
            'label' => __('Top/Bottom', 'appilo'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px', '%'],
            'range' => [
                'px' => [
                    'min' => -1000,
                    'max' => 1000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => -100,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}}.js-inview-animation .elementor-image' => 'top: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'in_view' => 'js-inview-animation',
            ],
        ]
    );
    $element->add_responsive_control(
        'inview_lv',
        [
            'label' => __('InView Left/Right', 'appilo'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px', '%'],
            'range' => [
                'px' => [
                    'min' => -1000,
                    'max' => 1000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => -100,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}}.js-inview-animation .elementor-image.now-in-view' => 'left: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'in_view' => 'js-inview-animation',
            ],
        ]
    );
    $element->add_responsive_control(
        'inview_uv',
        [
            'label' => __('InView Top/Bottom', 'appilo'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px', '%'],
            'range' => [
                'px' => [
                    'min' => -1000,
                    'max' => 1000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => -100,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}}.js-inview-animation .elementor-image.now-in-view' => 'top: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'in_view' => 'js-inview-animation',
            ],
        ]
    );


    $element->end_controls_section();
}, 10, 2);

// Override Elementor Icon List Elements

add_action('elementor/element/icon-list/section_icon_style/before_section_start', function ($element, $args) {
    /** @var \Elementor\Element_Base $element */
    $element->start_controls_section(
        'atext_style',
        [
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            'label' => __('Custom Style', 'appilo'),
        ]
    );
    $element->add_control(
        'atext_gra',
        [
            'label' => __('Icon Background', 'appilo'),
            'type' => \Elementor\Controls_Manager::HEADING,
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'ico_bg',
            'label' => __('Icon Background', 'appilo'),
            'types' => ['classic', 'gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}} .elementor-icon-list-icon i',
        ]
    );
    $element->end_controls_section();
}, 10, 2);
// Override Elementor Icon List Elements

add_action('elementor/element/button/section_style/before_section_start', function ($element, $args) {
    /** @var \Elementor\Element_Base $element */
    $element->start_controls_section(
        'aatext_style',
        [
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            'label' => __('Custom Style', 'appilo'),
        ]
    );
    $element->start_controls_tabs('button_style');

    $element->start_controls_tab(
        'button_normal',
        [
            'label' => __('Normal', 'appilo'),
        ]
    );
    $element->add_control(
        'atext_gra',
        [
            'label' => __('Button Background', 'appilo'),
            'type' => \Elementor\Controls_Manager::HEADING,
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'btn_bg',
            'label' => __('Button Background', 'appilo'),
            'types' => ['gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}} .elementor-button',
        ]
    );
    $element->end_controls_tab();

    $element->start_controls_tab(
        'button_hover',
        [
            'label' => __('Hover', 'appilo'),
        ]
    );

    $element->add_control(
        'afatext_gra',
        [
            'label' => __('Hover Background', 'appilo'),
            'type' => \Elementor\Controls_Manager::HEADING,
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'btnh_bg',
            'label' => __('Button Background', 'appilo'),
            'types' => ['gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}} .elementor-button:hover, {{WRAPPER}} .elementor-button:focus',
        ]
    );
    $element->end_controls_tab();

    $element->end_controls_tabs();

    $element->end_controls_section();
}, 10, 2);

// Override Elementor Icon List Elements

add_action('elementor/element/icon/section_style_icon/before_section_start', function ($element, $args) {
    /** @var \Elementor\Element_Base $element */
    $element->start_controls_section(
        'aatext_style',
        [
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            'label' => __('Custom Style', 'appilo'),
        ]
    );
    $element->add_control(
        'icon_light_box',
        [
            'label' => __('Turn On LightBox', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'appilo-icon-lightbox',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->start_controls_tabs('button_style');

    $element->start_controls_tab(
        'button_normal',
        [
            'label' => __('Normal', 'appilo'),
        ]
    );

    $element->add_control(
        'icon_gradient',
        [
            'label' => __('Icon Gradient', 'appilo'),
            'type' => \Elementor\Controls_Manager::HEADING,
        ]
    );
    $element->add_control(
        'icon_gradient_1',
        [
            'label' => __('Turn On Icon Gradient', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'icon-gradient',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'gradient_icon',
            'label' => __('Icon Gradient', 'appilo'),
            'types' => ['gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}}.icon-gradient .elementor-icon-wrapper .elementor-icon i',
        ]
    );
    $element->add_control(
        'atext_gra',
        [
            'label' => __('Icon Background Gradient', 'appilo'),
            'type' => \Elementor\Controls_Manager::HEADING,
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'btn_bg',
            'label' => __('Icon Background', 'appilo'),
            'types' => ['gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}}.elementor-view-stacked .elementor-icon',
        ]
    );
    $element->end_controls_tab();

    $element->start_controls_tab(
        'button_hover',
        [
            'label' => __('Hover', 'appilo'),
        ]
    );

    $element->add_control(
        'afatext_gra',
        [
            'label' => __('Hover Background', 'appilo'),
            'type' => \Elementor\Controls_Manager::HEADING,
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'btnh_bg',
            'label' => __('Button Background', 'appilo'),
            'types' => ['gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}}.elementor-view-stacked .elementor-icon:hover',
        ]
    );
    $element->end_controls_tab();

    $element->end_controls_tabs();

    $element->end_controls_section();
}, 10, 2);


// Override Elementor Section Advance Tab

add_action('elementor/element/after_section_end', function ($element, $section_id, $args) {
    /** @var \Elementor\Element_Base $element */
    if ('section' === $element->get_name() && 'section_custom_css_pro' === $section_id) {

        $element->start_controls_section(
            'sticky_section',
            [
                'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
                'label' => __('Sticky Section', 'appilo'),
            ]
        );

        $element->add_control(
            'header_sticky',
            [
                'label' => __('Sticky Section', 'appilo'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'appilo'),
                'label_off' => __('No', 'appilo'),
                'return_value' => 'appilo-sticky',
                'default' => 'false',
                'prefix_class' => '',
            ]
        );
        $element->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'sticky_bg',
                'label' => __('Background', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}}.appilo-sticky.app-res-sticky-menu',
                'condition' => [
                    'header_sticky' => 'appilo-sticky',
                ],
            ]
        );
        $element->end_controls_section();
        $element->start_controls_section(
            '_section_position',
            [
                'label' => __('Positioning', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
            ]
        );

        $element->add_responsive_control(
            '_element_width',
            [
                'label' => __('Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => __('Default', 'appilo'),
                    'inherit' => __('Full Width', 'appilo') . ' (100%)',
                    'auto' => __('Inline', 'appilo') . ' (auto)',
                    'initial' => __('Custom', 'appilo'),
                ],
                'selectors_dictionary' => [
                    'inherit' => '100%',
                ],
                'prefix_class' => 'elementor-widget%s__width-',
                'selectors' => [
                    '{{WRAPPER}}' => 'width: {{VALUE}}; max-width: {{VALUE}}',
                ],
            ]
        );

        $element->add_responsive_control(
            '_element_custom_width',
            [
                'label' => __('Custom Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'condition' => [
                    '_element_width' => 'initial',
                ],
                'device_args' => [
                    \Elementor\Controls_Stack::RESPONSIVE_TABLET => [
                        'condition' => [
                            '_element_width_tablet' => ['initial'],
                        ],
                    ],
                    \Elementor\Controls_Stack::RESPONSIVE_MOBILE => [
                        'condition' => [
                            '_element_width_mobile' => ['initial'],
                        ],
                    ],
                ],
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    '{{WRAPPER}}' => 'width: {{SIZE}}{{UNIT}}; max-width: {{SIZE}}{{UNIT}}',
                ],
            ]
        );

        $element->add_responsive_control(
            '_element_vertical_align',
            [
                'label' => __('Vertical Align', 'appilo'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __('Start', 'appilo'),
                        'icon' => 'eicon-v-align-top',
                    ],
                    'center' => [
                        'title' => __('Center', 'appilo'),
                        'icon' => 'eicon-v-align-middle',
                    ],
                    'flex-end' => [
                        'title' => __('End', 'appilo'),
                        'icon' => 'eicon-v-align-bottom',
                    ],
                ],
                'condition' => [
                    '_element_width!' => '',
                    '_position' => '',
                ],
                'selectors' => [
                    '{{WRAPPER}}' => 'align-self: {{VALUE}}',
                ],
            ]
        );

        $element->add_control(
            '_position_description',
            [
                'raw' => '<strong>' . __('Please note!', 'appilo') . '</strong> ' . __('Custom positioning is not considered best practice for responsive web design and should not be used too frequently.', 'appilo'),
                'type' => \Elementor\Controls_Manager::RAW_HTML,
                'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
                'render_type' => 'ui',
                'condition' => [
                    '_position!' => '',
                ],
            ]
        );

        $element->add_control(
            '_position',
            [
                'label' => __('Position', 'appilo'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => __('Default', 'appilo'),
                    'absolute' => __('Absolute', 'appilo'),
                    'fixed' => __('Fixed', 'appilo'),
                ],
                'prefix_class' => 'elementor-',
                'frontend_available' => true,
            ]
        );

        $start = is_rtl() ? __('Right', 'appilo') : __('Left', 'appilo');
        $end = !is_rtl() ? __('Right', 'appilo') : __('Left', 'appilo');

        $element->add_control(
            '_offset_orientation_h',
            [
                'label' => __('Horizontal Orientation', 'appilo'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'toggle' => false,
                'default' => 'start',
                'options' => [
                    'start' => [
                        'title' => $start,
                        'icon' => 'eicon-h-align-left',
                    ],
                    'end' => [
                        'title' => $end,
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'classes' => 'elementor-control-start-end',
                'render_type' => 'ui',
                'condition' => [
                    '_position!' => '',
                ],
            ]
        );

        $element->add_responsive_control(
            '_offset_x',
            [
                'label' => __('Offset', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                    'vw' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                    'vh' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                ],
                'default' => [
                    'size' => '0',
                ],
                'size_units' => ['px', '%', 'vw', 'vh'],
                'selectors' => [
                    'body:not(.rtl) {{WRAPPER}}' => 'left: {{SIZE}}{{UNIT}}',
                    'body.rtl {{WRAPPER}}' => 'right: {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    '_offset_orientation_h!' => 'end',
                    '_position!' => '',
                ],
            ]
        );

        $element->add_responsive_control(
            '_offset_x_end',
            [
                'label' => __('Offset', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 0.1,
                    ],
                    '%' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                    'vw' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                    'vh' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                ],
                'default' => [
                    'size' => '0',
                ],
                'size_units' => ['px', '%', 'vw', 'vh'],
                'selectors' => [
                    'body:not(.rtl) {{WRAPPER}}' => 'right: {{SIZE}}{{UNIT}}',
                    'body.rtl {{WRAPPER}}' => 'left: {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    '_offset_orientation_h' => 'end',
                    '_position!' => '',
                ],
            ]
        );

        $element->add_responsive_control(
            '_offset_orientation_v',
            [
                'label' => __('Vertical Orientation', 'appilo'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'toggle' => false,
                'default' => 'start',
                'options' => [
                    'start' => [
                        'title' => __('Top', 'appilo'),
                        'icon' => 'eicon-v-align-top',
                    ],
                    'end' => [
                        'title' => __('Bottom', 'appilo'),
                        'icon' => 'eicon-v-align-bottom',
                    ],
                ],
                'render_type' => 'ui',
                'condition' => [
                    '_position!' => '',
                ],
            ]
        );

        $element->add_responsive_control(
            '_offset_y',
            [
                'label' => __('Offset', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                    'vh' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                    'vw' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                ],
                'size_units' => ['px', '%', 'vh', 'vw'],
                'default' => [
                    'size' => '0',
                ],
                'selectors' => [
                    '{{WRAPPER}}' => 'top: {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    '_offset_orientation_v!' => 'end',
                    '_position!' => '',
                ],
            ]
        );

        $element->add_responsive_control(
            '_offset_y_end',
            [
                'label' => __('Offset', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                    'vh' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                    'vw' => [
                        'min' => -200,
                        'max' => 200,
                    ],
                ],
                'size_units' => ['px', '%', 'vh', 'vw'],
                'default' => [
                    'size' => '0',
                ],
                'selectors' => [
                    '{{WRAPPER}}' => 'bottom: {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    '_offset_orientation_v' => 'end',
                    '_position!' => '',
                ],
            ]
        );

        $element->end_controls_section();
    }
}, 10, 3);
// Override Elementor Icon Elements

add_action('elementor/element/icon-box/section_style_icon/before_section_start', function ($element, $args) {
    /** @var \Elementor\Element_Base $element */
    $element->start_controls_section(
        'aatext_style',
        [
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            'label' => __('Appilo Settings', 'appilo'),
        ]
    );
    $element->add_control(
        'icon_light_box',
        [
            'label' => __('Turn On LightBox', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'appilo-icon-lightbox',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'box_shadow',
            'label' => __('Box Shadow', 'appilo'),
            'selector' => '{{WRAPPER}}.elementor-view-stacked .elementor-icon',
        ]
    );
    $element->add_control(
        'icon_bg_gradient',
        [
            'label' => __('Turn On Icon BG Gradient', 'appilo'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'appilo'),
            'label_off' => __('No', 'appilo'),
            'return_value' => 'icon-bg-gradient',
            'default' => 'false',
            'prefix_class' => '',
        ]
    );
    $element->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'gradient_bg_icon',
            'label' => __('Icon BG Gradient', 'appilo'),
            'types' => ['gradient'],
            'show_label' => true,
            'separator' => 'after',
            'selector' => '{{WRAPPER}}.icon-bg-gradient .elementor-icon-box-wrapper .elementor-icon-box-icon .elementor-icon',
        ]
    );
    $element->add_control(
        'iconBox_border_radius',
        [
            'label' => __('Border Radius', 'appilo'),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}} .elementor-icon-box-wrapper .elementor-icon-box-icon .elementor-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $element->end_controls_section();
}, 10, 2);


function get_that_link($link)
{
    $url = $link['url'] ? 'href=' . esc_url($link['url']) . '' : '';
    $ext = $link['is_external'] ? 'target= _blank' : '';
    $nofollow = $link['nofollow'] ? 'rel="nofollow"' : '';
    $link = $url . ' ' . $ext . ' ' . $nofollow;
    return $link;
}

//wp_get_attachment_image($logo['logo']['id'], 'full')

function appilo_menu_selector()
{
    $menus = wp_get_nav_menus();
    $items = array();
    $i = 0;
    foreach ($menus as $menu) {
        if ($i == 0) {
            $default = $menu->slug;
            $i++;
        }
        $items[$menu->slug] = $menu->name;
    }
    return $items;
}

function get_that_image($source)
{
    if ($source['url']) {
        return '<img src="' . esc_url($source['url']) . '" alt="' . get_bloginfo('name') . '">';
    }

}

function appilo_animate($delay)
{
    $animate_delay = $delay ? $delay : '150';
    static $animate_duration = 2;
    $animate_duration++;
    return $animate_duration * $animate_delay . 'ms';

}

function get_multi_list($settings, $tag)
{
    $feature = $settings;
    if (!empty($feature)) {
        $content_decode = json_decode($feature, true);
        foreach ($content_decode as $value) {
            echo "<$tag>" . $value['content_list'] . "</$tag>";
        }
    }
}

function appilo_breadcrumb_elements()
{
    echo '<div class="appilo-breadcrumb-elements">';
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo ' <i class="fas fa-angle-double-right"></i> ';
        the_category(' &bull; ');
        if (is_single()) {
            echo ' <i class="fas fa-angle-double-right"></i> ';
            the_title();
        }
    } elseif (is_page()) {
        echo '<i class="fas fa-angle-double-right"></i>';
        echo the_title();
    } elseif (is_search()) {
        echo '<i class="fas fa-angle-double-right"></i> Search Results for...';
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
    echo '</div>';
}