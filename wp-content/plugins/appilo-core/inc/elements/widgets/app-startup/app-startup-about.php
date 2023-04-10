<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_about extends Widget_Base {

    public function get_name() {
        return 'app-startup-about';
    }

    public function get_title() {
        return __( 'App Startup About', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-text-field';
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
            'title_txt',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'About us', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Work with us to get the best services.', 'appilo' ),
            ]
        );
        $this->add_control(
            'about_txt',
            [
                'label' => __( 'About', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $this->add_control(
            'details_txt',
            [
                'label' => __( 'Details', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting. Lorem Ipsum is simply dummy text of the printing and typ esetting industry is simply dummy text', 'appilo' ),
            ]
        );
        $this->add_control(
            'list_txt',
            [
                'label' => __( 'List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<li>Qhen an unknown printer took a galley of type.</li>
                                    <li>It was popularised in the 1960s with the release.</li>
                                    <li>Aldus PageMaker including versions.</li>', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_txt',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Go to our team', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_icon',
            [
                'label' => __( 'Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'btn_link', [
                'label' => __( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'about_img',
            [
                'label' => __( 'About Images', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'about_img_1', [
                'label' => __( 'About Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/shape/abs.png',
                ],
            ]
        );
        $this->add_control(
            'about_img_2', [
                'label' => __( 'About Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/about/ab-logo.png',
                ],
            ]
        );
        $this->add_control(
            'about_img_3', [
                'label' => __( 'About Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/about/ab1.png',
                ],
            ]
        );
        $this->add_control(
            'about_img_4', [
                'label' => __( 'About Image 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/about/ab2.png',
                ],
            ]
        );
        $this->add_control(
            'about_img_5', [
                'label' => __( 'About Image 5', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/about/ab3.png',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_box',
            [
                'label' => __( 'Feature Box', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Best customer support', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-settings',
                    'library' => 'appilo-icons-2',
                ],
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'f_title' => __( 'Best customer support', 'appilo' ),
                    ],
                    [
                        'f_title' => __( 'Best customer support', 'appilo' ),
                    ],
                    [
                        'f_title' => __( 'Best customer support', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ f_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'progress_box',
            [
                'label' => __( 'Progress', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'p_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Marketing', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'p_id',
            [
                'label' => __( 'ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'p_percentage',
            [
                'label' => __( 'Percentage', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '75', 'appilo' ),
            ]
        );
        $this->add_control(
            'progress_list',
            [
                'label' => __( 'Progress List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'p_percentage' => __( '75', 'appilo' ),
                        'p_id' => __( '1', 'appilo' ),
                    ],
                    [
                        'p_percentage' => __( '81', 'appilo' ),
                        'p_id' => __( '2', 'appilo' ),
                    ],
                    [
                        'p_percentage' => __( '90', 'appilo' ),
                        'p_id' => __( '3', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ p_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_style',
            [
                'label' => __( 'Feature Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'f_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-feature-box .str-about-feature-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-about-section .str-about-feature-box .str-about-feature-text h3',
            ]
        );
        $this->add_control(
            'f_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-feature-box .str-about-feature-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
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
                    'size' => 45,
                ],
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-feature-box .str-about-feature-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'f_icon_bg',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-about-section .str-about-feature-area .col-lg-4 .str-about-feature-icon',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'f_box_bg',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-about-section .str-about-feature-area .col-lg-4 .str-about-feature-box',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'progress_style',
            [
                'label' => __( 'Progress Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'p_tp_color',
            [
                'label' => __( 'Tooltip Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-content .str-progress-area .barfiller .tip' => 'color: {{VALUE}}',
                ],
            ]
        );
		$this->add_control(
			'tooltip_bg_color',
			[
				'label' => __( 'Tooltip BG Color', 'appilo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .str-about-section .str-about-content .str-progress-area .barfiller .tip' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .str-about-section .str-about-content .str-progress-area .barfiller .tip:after' => 'border-top-color: {{VALUE}}',
				],
				'separator' => 'after',
			]
		);
        $this->add_control(
            'p_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-content .str-progress-area h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'p_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-about-section .str-about-content .str-progress-area h3',
            ]
        );
		$this->add_control(
			'--inactive-progress-bg-color--',
			[
				'label' => esc_html__( 'Inactive Progress BG Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'p_bg_unfill',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-about-section .str-about-content .str-progress-area .barfiller',
            ]
        );
		$this->add_control(
			'--active-progress-bg-color-heading--',
			[
				'label' => esc_html__( 'Active Progress BG Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'p_bg_fill',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} #str-about-section-container-id.str-about-section .str-about-content .str-progress-area .barfiller .fill',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
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
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-section-title .str-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-section-title .str-title-tag',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_after_bg',
                'label' => __( 'After BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-section-title h2:before',
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-section-title h2',
            ]
        );
        $this->add_control(
            'about_color',
            [
                'label' => __( 'About Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-content .str-about-textarea' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'about_fonts',
                'label' => __( 'About Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-about-section .str-about-content .str-about-textarea',
            ]
        );
        $this->add_control(
            'details_color',
            [
                'label' => __( 'Details Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-content .str-about-details' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'details_fonts',
                'label' => __( 'Details Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-about-section .str-about-content .str-about-details',
            ]
        );
        $this->add_control(
            'list_color',
            [
                'label' => __( 'List Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-content .str-about-list li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'list_icon_color',
            [
                'label' => __( 'List Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-about-section .str-about-content .str-about-list li:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'list_fonts',
                'label' => __( 'List Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-about-section .str-about-content .str-about-list',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_icon_color',
            [
                'label' => __( 'Button Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-btn i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_after',
                'label' => __( 'Button After BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-btn:before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-btn',
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Section Background Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Bg 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/shape/vs1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Bg 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/shape/vs2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern Bg 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/shape/vs3.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-about-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-about-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of About Us section
            ============================================= -->
            <section id="str-about-section-container-id"  class="str-about-section position-relative">
                <div class="str-aboutbg1 position-absolute"><img src="' . $settings['pattern_bg_1']['url'] . '" alt></div>
                <div class="str-aboutbg2 position-absolute"><img src="' . $settings['pattern_bg_1']['url'] . '" alt></div>
                <div class="str-aboutbg3 position-absolute"><img src="' . $settings['pattern_bg_1']['url'] . '" alt></div>
                <div class="container">
                    <div class="str-about-content">
                        <div class="row ' . $settings['style_switcher'] . '">
                            <div class="col-lg-5">
                                <div class="str-about-text wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="str-section-title text-left str-title-left str-headline">
                                        <span class="str-title-tag">' . $settings['title_txt'] . '</span>
                                        <h2>' . $settings['heading_txt'] . '</h2>
                                    </div>
                                    <div class="str-about-textarea">
                                        ' . $settings['about_txt'] . '
                                    </div>
                                    <div class="str-about-details">
                                       ' . $settings['details_txt'] . '
                                    </div>
                                    <div class="str-about-list ul-li-block">
                                        <ul>
                                            ' . $settings['list_txt'] . '
                                        </ul>
                                    </div>
                                    <a class="str-btn d-inline-block" href="' . $settings['btn_link']['url'] . '">' . $settings['btn_txt'] . ''; \Elementor\Icons_Manager::render_icon( $settings['btn_icon'], [ 'aria-hidden' => 'true' ] ); echo'</a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="str-about-img position-relative wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="str-about-shape"><img src="' . $settings['about_img_1']['url'] . '" alt></div>
                                    <div class="str-about-logo"><img src="' . $settings['about_img_2']['url'] . '" alt></div>
                                    <div class="str-about-img-field">
                                        <div class="str-about-pic">
                                            <img src="' . $settings['about_img_3']['url'] . '" alt>
                                        </div>
                                        <div class="str-progress-area str-headline">';
                                    if ( $settings['progress_list'] ) {
                                        foreach ($settings['progress_list'] as $progress) {
                                            echo ' <h3>'.$progress['p_title'].'</h3>
                                            <div id="progress'.$progress['p_id'].'" class="barfiller">
                                                <div class="tipWrap"><span class="tip"></span></div>
                                                <span class="fill" data-percentage="'.$progress['p_percentage'].'"></span>
                                            </div>';
                                        }
                                    }
                                        echo'</div>
                                    </div>
                                    <div class="str-about-img-field">
                                        <div class="str-about-pic">
                                            <img src="' . $settings['about_img_4']['url'] . '" alt>
                                        </div>
                                        <div class="str-about-pic">
                                            <img src="' . $settings['about_img_5']['url'] . '" alt>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="str-about-feature-area">
                            <div class="row">';
                        if ( $settings['feature_list'] ) {
                            foreach ($settings['feature_list'] as $feature) {
                                echo '<div class="col-lg-4 '.$feature['_id'].'">
                                    <div class="str-about-feature-box clearfix wow fadeFromLeft" data-wow-delay="'.$feature['f_animate_delay'].'" data-wow-duration="1500ms">
                                        <div class="str-about-feature-icon text-center float-left">';
                                             \Elementor\Icons_Manager::render_icon( $feature['f_icon'], [ 'aria-hidden' => 'true' ] );
                                        echo'</div>
                                        <div class="str-about-feature-text str-headline">
                                            <h3>'.$feature['f_title'].'</h3>
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                            echo'</div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- End of About Ud section
            ============================================= --> ';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_about );
?>