<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_scroller extends Widget_Base {

    public function get_name() {
        return 'app-showcase-scroller';
    }

    public function get_title() {
        return __( 'App Showcase Scroller', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-arrow-down';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'style_switcher',
            [
                'label' => __( 'Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style2',
                'options' => [
                    'flex-row-reverse'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'headline',
            [
                'label' => __( 'Headline', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'How this app is working?', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title .eg-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag',
            ]
        );
        $this->add_control(
            'headline_txt',
            [
                'label' => __( 'Headline Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'This app is working by', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_txt_color',
            [
                'label' => __( 'Headline Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_txt_fonts',
                'label' => __( 'Headline Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title h2',
            ]
        );
        $this->add_control(
            'subhead_txt',
            [
                'label' => __( 'Subhead Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'some steps!', 'appilo' ),
            ]
        );
        $this->add_control(
            'subhead_txt_color',
            [
                'label' => __( 'Subhead Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title h2 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subhead_txt_fonts',
                'label' => __( 'Subhead Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title h2 span',
            ]
        );
        $this->add_responsive_control(
            'headline_margin',
            [
                'label' => __( 'Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'headline_width',
            [
                'label' => __( 'Headline Width', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 490,
                ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'headline_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'align_title5',
            [
                'label' => __( 'Title Alignment', 'appilo' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'appilo' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'eicon-text-align-right',
                    ],

                ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title.appeight-headline' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'shape_display',
            [
                'label' => __( 'Shape Display', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'd-block',
                'options' => [
                    'd-none'  => __( 'Hide', 'appilo' ),
                    'd-block' => __( 'Show', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'before_bg',
            [
                'label' => __( 'Text Before', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg1',
                'label' => __( 'Style BG 1', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(1)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg2',
                'label' => __( 'Style BG 2', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(2)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg3',
                'label' => __( 'Style BG 3', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(3)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg4',
                'label' => __( 'Style BG 4', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(4)',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'scroller_section',
            [
                'label' => __( 'Scroller', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'scroll_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'scroll_icon', [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                        'value' => 'flaticon-verified-user',
                        'library' => 'appilo-icons-1',
                ],
            ]
        );
        $repeater->add_control(
            'scroll_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Make a profile' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'scroll_info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjusting.' , 'appilo' ),
            ]
        );
        $this->add_control(
            'scroller_list',
            [
                'label' => __( 'Scroller List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'scroll_number' => __( '1', 'appilo' ),
                        'scroll_title' => __( 'Make a profile', 'appilo' ),
                        'scroll_info' => __( 'As a app web crawler expert, I help organizations adjusting.', 'appilo' ),
                    ],
                    [
                        'scroll_number' => __( '2', 'appilo' ),
                        'scroll_title' => __( 'Make a profile', 'appilo' ),
                        'scroll_info' => __( 'As a app web crawler expert, I help organizations adjusting.', 'appilo' ),
                    ],
                    [
                        'scroll_number' => __( '3', 'appilo' ),
                        'scroll_title' => __( 'Make a profile', 'appilo' ),
                        'scroll_info' => __( 'As a app web crawler expert, I help organizations adjusting.', 'appilo' ),
                    ],
                    [
                        'scroll_number' => __( '4', 'appilo' ),
                        'scroll_title' => __( 'Make a profile', 'appilo' ),
                        'scroll_info' => __( 'As a app web crawler expert, I help organizations adjusting.', 'appilo' ),
                    ],
                    [
                        'scroll_number' => __( '5', 'appilo' ),
                        'scroll_title' => __( 'Make a profile', 'appilo' ),
                        'scroll_info' => __( 'As a app web crawler expert, I help organizations adjusting.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ scroll_title }}}',
            ]
        );
        $this->add_control(
            'mockup_img', [
                'label' => __( 'Mockup Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/mockup/hw.gif',
                ],
            ]
        );
        $this->add_control(
            'z_index_4',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
                    'dia-zindex--4'  => __( 'z-index--4', 'appilo' ),
                    'dia-zindex--3'  => __( 'z-index--3', 'appilo' ),
                    'dia-zindex--2'  => __( 'z-index--2', 'appilo' ),
                    'dia-zindex--1'  => __( 'z-index--1', 'appilo' ),
                    'dia-zindex-0'  => __( 'z-index-0', 'appilo' ),
                    'dia-zindex-auto'  => __( 'z-index-auto', 'appilo' ),
                    'dia-zindex-1'  => __( 'z-index-1', 'appilo' ),
                    'dia-zindex-2'  => __( 'z-index-2', 'appilo' ),
                    'dia-zindex-3'  => __( 'z-index-3', 'appilo' ),
                    'dia-zindex-4'  => __( 'z-index-4', 'appilo' ),
                    'dia-zindex-5'  => __( 'z-index-5', 'appilo' ),
                    'dia-zindex-6'  => __( 'z-index-6', 'appilo' ),
                    'dia-zindex-7'  => __( 'z-index-7', 'appilo' ),
                    'dia-zindex-8'  => __( 'z-index-8', 'appilo' ),
                    'dia-zindex-9'  => __( 'z-index-9', 'appilo' ),
                    'dia-zindex-10'  => __( 'z-index-10', 'appilo' ),
                    'dia-zindex-11'  => __( 'z-index-11', 'appilo' ),
                    'dia-zindex-22'  => __( 'z-index-22', 'appilo' ),
                    'dia-zindex-33'  => __( 'z-index-33', 'appilo' ),
                    'dia-zindex-44'  => __( 'z-index-44', 'appilo' ),
                    'dia-zindex-55'  => __( 'z-index-55', 'appilo' ),
                    'dia-zindex-66'  => __( 'z-index-66', 'appilo' ),
                    'dia-zindex-77'  => __( 'z-index-77', 'appilo' ),
                    'dia-zindex-88'  => __( 'z-index-88', 'appilo' ),
                    'dia-zindex-99'  => __( 'z-index-99', 'appilo' ),
                    'dia-zindex-111'  => __( 'z-index-111', 'appilo' ),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'scroller_icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', 'em' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .eg-how-work-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sbg7',
            [
                'label' => __( 'Scroller Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'scroller_icon_color',
                'label' => __( 'Scroller Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .eg-how-work-icon i',
            ]
        );
        $this->add_control(
            'sbg6',
            [
                'label' => __( 'Scroller Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'scroller_icon_hover_color',
                'label' => __( 'Scroller Icon Hover Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text:hover .eg-how-work-icon i',
            ]
        );
        $this->add_control(
            'sbg1',
            [
                'label' => __( 'Scroller Icon BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'scroller_icon_bg',
                'label' => __( 'Scroller Icon BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .eg-how-work-icon:after',
            ]
        );
        $this->add_control(
            'scroller_number_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .scroller-no' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'scroller_number_hover_color',
            [
                'label' => __( 'Number Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text:hover .scroller-no' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'scroller_number_fonts',
                'label' => __( 'Scroller Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .scroller-no',
            ]
        );
        $this->add_control(
            'scroller_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .eg-how-work-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'scroller_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .eg-how-work-text h3',
            ]
        );
        $this->add_control(
            'scroller_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .eg-how-work-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'info_padding',
            [
                'label' => __( 'Info Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .eg-how-work-text p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'scroller_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text .eg-how-work-text p',
            ]
        );
        $this->add_control(
            'add_responsive_control',
            [
                'label' => __( 'Scroller Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sbg2',
            [
                'label' => __( 'Scroller BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'scroller_box_bg',
                'label' => __( 'Scroller Box BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .eg-how-work-icon-text',
            ]
        );
        $this->add_responsive_control(
            'scroller_border_width',
            [
                'label' => __( 'Border Width', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 13,
                ],
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sbbg3',
            [
                'label' => __( 'Scroller Border BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'scroller_border',
                'label' => __( 'Scroller Border', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'scroller_border2',
                'label' => __( 'Scroller Border', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-how-work-section .ei-how-work-content-item .mCSB_scrollTools .mCSB_draggerRail',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/hws.png',
                ],
            ]
        );
        $this->add_control(
            'z_index_1',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
                    'dia-zindex--4'  => __( 'z-index--4', 'appilo' ),
                    'dia-zindex--3'  => __( 'z-index--3', 'appilo' ),
                    'dia-zindex--2'  => __( 'z-index--2', 'appilo' ),
                    'dia-zindex--1'  => __( 'z-index--1', 'appilo' ),
                    'dia-zindex-0'  => __( 'z-index-0', 'appilo' ),
                    'dia-zindex-auto'  => __( 'z-index-auto', 'appilo' ),
                    'dia-zindex-1'  => __( 'z-index-1', 'appilo' ),
                    'dia-zindex-2'  => __( 'z-index-2', 'appilo' ),
                    'dia-zindex-3'  => __( 'z-index-3', 'appilo' ),
                    'dia-zindex-4'  => __( 'z-index-4', 'appilo' ),
                    'dia-zindex-5'  => __( 'z-index-5', 'appilo' ),
                    'dia-zindex-6'  => __( 'z-index-6', 'appilo' ),
                    'dia-zindex-7'  => __( 'z-index-7', 'appilo' ),
                    'dia-zindex-8'  => __( 'z-index-8', 'appilo' ),
                    'dia-zindex-9'  => __( 'z-index-9', 'appilo' ),
                    'dia-zindex-10'  => __( 'z-index-10', 'appilo' ),
                    'dia-zindex-11'  => __( 'z-index-11', 'appilo' ),
                    'dia-zindex-22'  => __( 'z-index-22', 'appilo' ),
                    'dia-zindex-33'  => __( 'z-index-33', 'appilo' ),
                    'dia-zindex-44'  => __( 'z-index-44', 'appilo' ),
                    'dia-zindex-55'  => __( 'z-index-55', 'appilo' ),
                    'dia-zindex-66'  => __( 'z-index-66', 'appilo' ),
                    'dia-zindex-77'  => __( 'z-index-77', 'appilo' ),
                    'dia-zindex-88'  => __( 'z-index-88', 'appilo' ),
                    'dia-zindex-99'  => __( 'z-index-99', 'appilo' ),
                    'dia-zindex-111'  => __( 'z-index-111', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fc1.png',
                ],
            ]
        );
        $this->add_control(
            'z_index_2',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
                    'dia-zindex--4'  => __( 'z-index--4', 'appilo' ),
                    'dia-zindex--3'  => __( 'z-index--3', 'appilo' ),
                    'dia-zindex--2'  => __( 'z-index--2', 'appilo' ),
                    'dia-zindex--1'  => __( 'z-index--1', 'appilo' ),
                    'dia-zindex-0'  => __( 'z-index-0', 'appilo' ),
                    'dia-zindex-auto'  => __( 'z-index-auto', 'appilo' ),
                    'dia-zindex-1'  => __( 'z-index-1', 'appilo' ),
                    'dia-zindex-2'  => __( 'z-index-2', 'appilo' ),
                    'dia-zindex-3'  => __( 'z-index-3', 'appilo' ),
                    'dia-zindex-4'  => __( 'z-index-4', 'appilo' ),
                    'dia-zindex-5'  => __( 'z-index-5', 'appilo' ),
                    'dia-zindex-6'  => __( 'z-index-6', 'appilo' ),
                    'dia-zindex-7'  => __( 'z-index-7', 'appilo' ),
                    'dia-zindex-8'  => __( 'z-index-8', 'appilo' ),
                    'dia-zindex-9'  => __( 'z-index-9', 'appilo' ),
                    'dia-zindex-10'  => __( 'z-index-10', 'appilo' ),
                    'dia-zindex-11'  => __( 'z-index-11', 'appilo' ),
                    'dia-zindex-22'  => __( 'z-index-22', 'appilo' ),
                    'dia-zindex-33'  => __( 'z-index-33', 'appilo' ),
                    'dia-zindex-44'  => __( 'z-index-44', 'appilo' ),
                    'dia-zindex-55'  => __( 'z-index-55', 'appilo' ),
                    'dia-zindex-66'  => __( 'z-index-66', 'appilo' ),
                    'dia-zindex-77'  => __( 'z-index-77', 'appilo' ),
                    'dia-zindex-88'  => __( 'z-index-88', 'appilo' ),
                    'dia-zindex-99'  => __( 'z-index-99', 'appilo' ),
                    'dia-zindex-111'  => __( 'z-index-111', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern BG 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fc2.png',
                ],
            ]
        );
        $this->add_control(
            'z_index_3',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
                    'dia-zindex--4'  => __( 'z-index--4', 'appilo' ),
                    'dia-zindex--3'  => __( 'z-index--3', 'appilo' ),
                    'dia-zindex--2'  => __( 'z-index--2', 'appilo' ),
                    'dia-zindex--1'  => __( 'z-index--1', 'appilo' ),
                    'dia-zindex-0'  => __( 'z-index-0', 'appilo' ),
                    'dia-zindex-auto'  => __( 'z-index-auto', 'appilo' ),
                    'dia-zindex-1'  => __( 'z-index-1', 'appilo' ),
                    'dia-zindex-2'  => __( 'z-index-2', 'appilo' ),
                    'dia-zindex-3'  => __( 'z-index-3', 'appilo' ),
                    'dia-zindex-4'  => __( 'z-index-4', 'appilo' ),
                    'dia-zindex-5'  => __( 'z-index-5', 'appilo' ),
                    'dia-zindex-6'  => __( 'z-index-6', 'appilo' ),
                    'dia-zindex-7'  => __( 'z-index-7', 'appilo' ),
                    'dia-zindex-8'  => __( 'z-index-8', 'appilo' ),
                    'dia-zindex-9'  => __( 'z-index-9', 'appilo' ),
                    'dia-zindex-10'  => __( 'z-index-10', 'appilo' ),
                    'dia-zindex-11'  => __( 'z-index-11', 'appilo' ),
                    'dia-zindex-22'  => __( 'z-index-22', 'appilo' ),
                    'dia-zindex-33'  => __( 'z-index-33', 'appilo' ),
                    'dia-zindex-44'  => __( 'z-index-44', 'appilo' ),
                    'dia-zindex-55'  => __( 'z-index-55', 'appilo' ),
                    'dia-zindex-66'  => __( 'z-index-66', 'appilo' ),
                    'dia-zindex-77'  => __( 'z-index-77', 'appilo' ),
                    'dia-zindex-88'  => __( 'z-index-88', 'appilo' ),
                    'dia-zindex-99'  => __( 'z-index-99', 'appilo' ),
                    'dia-zindex-111'  => __( 'z-index-111', 'appilo' ),
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eg-how-work-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mbg4',
            [
                'label' => __( 'Section Main BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_main_bg',
                'label' => __( 'Section Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-how-work-section',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Start of How work  section
    ============================================= -->
<section  class="eg-how-work-section position-relative">
    <div class="how-work-bg-shape '.$settings['z_index_1'].' position-absolute"><img src="'.$settings['pattern_bg_1']['url'].'" alt></div>
    <div class="container">
        <div class="row  '.$settings['style_switcher'].'">
            <div class="col-lg-7">
                <div class="ei-how-work-content-item wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="eight-section-title appeight-headline pera-content">
                                    <span class="eg-title-tag shape'.$settings['shape_display'].'">
                                        '.$settings['headline'].' <i class="square-shape '.$settings['shape_display'].'"><i></i><i></i> <i></i> <i></i> </i>
                                    </span>
                            <h2>'.$settings['headline_txt'].'
                                <span>'.$settings['subhead_txt'].'</span></h2>
                        </div>
                    <!-- /title -->
                    <div id="how-workscrollbar" class="how-work-scroller">
                        <div class="eg-how-work-content">';
                if ( $settings['scroller_list'] ) {
                    foreach ($settings['scroller_list'] as $scroll) {
                     echo ' <div class="eg-how-work-icon-text position-relative">
                                <span class="scroller-no">'.$scroll['scroll_number'].'</span>
                                <div class="eg-how-work-icon float-left text-center">';
                                    \Elementor\Icons_Manager::render_icon( $scroll['scroll_icon'], [ 'aria-hidden' => 'true' ] );
                                echo'</div>
                                <div class="eg-how-work-text appeight-headline pera-content">
                                    <h3>'.$scroll['scroll_title'].'</h3>
                                    <p>'.$scroll['scroll_info'].'</p>
                                </div>
                            </div>';
                        }
                    }
                        echo'</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="how-work-mockup position-relative wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="hw-mockup-img '.$settings['z_index_4'].'">
                        <img src="'.$settings['mockup_img']['url'].'" alt>
                    </div>';?>
                    <div class="hw-shape1 position-absolute <?php echo $settings['z_index_2'];?>" data-parallax='{"x" : 40}'><img src="<?php echo $settings['pattern_bg_2']['url']?>" alt></div>
                    <div class="hw-shape2 position-absolute <?php echo $settings['z_index_3'];?>" data-parallax='{"x" : -30}'><img src="<?php echo $settings['pattern_bg_3']['url']?>" alt></div>
               <?php  echo'</div>
            </div>
        </div>
    </div>
</section>
<!-- End  of How work  section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_scroller );
?>