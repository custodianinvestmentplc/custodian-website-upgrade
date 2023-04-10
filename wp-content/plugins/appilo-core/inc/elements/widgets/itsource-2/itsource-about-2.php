<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_about_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_about_2';
    }

    public function get_title()
    {
        return __('ItSource About 2', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-scroll';
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'about_left_content',
            [
                'label' => __('ItSource About Images', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'select_About_style',
            [
                'label' => esc_html__('About Style', 'appilo'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1' => esc_html__('Style 1', 'appilo'),
                    'style_2' => esc_html__('Style 2', 'appilo'),
                ],
            ]
        );
        $this->add_control(
            'main_img',
            [
                'label' => __('Main Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'circle_img_1',
            [
                'label' => __('Circle Image 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'select_About_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'circle_img_2',
            [
                'label' => __('Circle Image 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'select_About_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'itsource_about_right_content',
            [
                'label' => __('ITsource About Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('About US', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Stay Up To Running Stay Protected', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your business to streamline workflow.', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__('Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your business to streamline
									workflow, and increase productivity. No matter the business, pure as
								has you covered with industry compliant solutions.', 'appilo'),
                'label_block' => true,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'appilo'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'icon_color',
            [
                'label' => esc_html__('Icon Color', 'appilo'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} i' => 'color: {{VALUE}}'
                ],
            ]
        );
        $repeater->add_control(
            'feature_title', [
                'label' => esc_html__('Feature Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Tracking System', 'appilo'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'feature_info', [
                'label' => esc_html__('Feature Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Our vertical solutions expertise allows your business.', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('About Features', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => __('Tracking System', 'appilo'),
                    ],
                    [
                        'feature_title' => __('Growth Business', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );
        $this->add_control(
            'about_btn_1', [
                'label' => esc_html__('About Button 1', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Learn About Us', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'about_btn_1_url',
            [
                'label' => esc_html__('About Button 1 URL', 'appilo'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'appilo'),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'about_btn_2', [
                'label' => esc_html__('About Button 2', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Team', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'about_btn_2_url',
            [
                'label' => esc_html__('About Button 2 URL', 'appilo'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'appilo'),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'about_counter_content',
            [
                'label' => __( 'About Counter Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
            'counter_bg',
            [
                'label' => esc_html__('Counter BG', 'appilo'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}'
                ],
            ]
        );
        $repeater->add_control(
            'counter_number', [
                'label' => esc_html__('Counter Number', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('25', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_heading', [
                'label' => esc_html__('Counter Heading', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Years Of Experiences', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_read_more', [
                'label' => esc_html__('Button Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Read More', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_read_more_url',
            [
                'label' => esc_html__('Button URL', 'appilo'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'appilo'),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_icon',
            [
                'label' => esc_html__('Icon', 'appilo'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'about_counter',
            [
                'label' => esc_html__('About Counter', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_heading' => __('Years Of Experience', 'appilo'),
                    ],
                    [
                        'counter_heading' => __('Country Coverage', 'appilo'),
                    ],
                    [
                        'counter_heading' => __('Team Members', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ counter_heading }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_about',
            [
                'label' => __('About Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__('Container Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'tag_color',
            [
                'label' => esc_html__('Tag Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .site-tag' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .title-style-two .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tag_typo',
                'label' => esc_html__('Tag Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title .site-tag , {{WRAPPER}} .title-style-two .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title h2 , {{WRAPPER}} .thx-it-about-section-2 .section-title h2',
            ]
        );
        $this->add_control(
            'Sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .sub-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .title-style-two .sub-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Sub_title_left_border_color',
            [
                'label' => esc_html__('Sub Title Left Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .sub-text:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Sub_title_typo',
                'label' => esc_html__('Sub Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .title-style-two .sub-text',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => esc_html__('Information Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .thx-it-about-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => esc_html__('Information Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .thx-it-about-text-item-1 .thx-it-about-text p',
            ]
        );
        $this->add_control(
            'Feature_title_color',
            [
                'label' => esc_html__('Feature Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_title_typo',
                'label' => esc_html__('Feature Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4 , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4',
            ]
        );
        $this->add_control(
            'Feature_Info_color',
            [
                'label' => esc_html__('Feature Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_Info_typo',
                'label' => esc_html__('Feature Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_style',
            [
                'label' => __('Button Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Button Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typo',
                'label' => esc_html__('Button Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child',
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label' => esc_html__('Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'second_btn_color',
            [
                'label' => esc_html__('Second Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:last-child' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:last-child' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'second_btn_circle_color',
            [
                'label' => esc_html__('Second Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:last-child:before' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'about_counter_style',
            [
                'label' => __( 'About Counter Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'select_About_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'counter_number_color',
            [
                'label' => esc_html__('Counter Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .it-location-counter h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_number_typo',
                'label' => esc_html__('Counter Number Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .it-location-counter h3',
            ]
        );
        $this->add_control(
            'counter_Heading_color',
            [
                'label' => esc_html__('Counter Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_Heading_typo',
                'label' => esc_html__('Counter Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item p',
            ]
        );
        $this->add_control(
            'counter_Read_more_color',
            [
                'label' => esc_html__('Read More Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .thx-it-about-counter-hover a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_Read_More_typo',
                'label' => esc_html__('Read More Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .thx-it-about-counter-hover a',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>

        <?php
            if ($settings['select_About_style'] == "style_1") {
        ?>
        <!-- Start of About section
	============================================= -->
        <div id="about" class="thx-it-about-section-1">
            <div class="container container-1200">
                <div class="thx-it-about-content-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="thx-it-about-img relative-position">
                                <div class="thx-it-about-main-img">
                                    <img src="<?php echo $settings['main_img']['url']; ?>" alt="">
                                </div>
                                <div class="thx-it-about-circle-img-1 wow fadeInLeft" data-wow-delay="0ms"
                                     data-wow-duration="1500ms">
                                    <img src="<?php echo $settings['circle_img_1']['url']; ?>" alt="">
                                </div>
                                <div class="thx-it-about-circle-img-2 wow fadeInRight" data-wow-delay="0ms">
                                    <img src="<?php echo $settings['circle_img_2']['url']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="thx-it-about-text-item-1">
                                <div class="section-title title-style-one headline-1">
                                    <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                                    <h2><?php echo $settings['title']; ?></h2>
                                    <h3 class="sub-text"><?php echo $settings['sub_title']; ?></h3>
                                </div>
                                <div class="thx-it-about-text pera-content">
                                    <p><?php echo $settings['info']; ?></p>
                                </div>
                                <div class="thx-it-about-feature">
                                    <?php foreach ($settings['list'] as $item):; ?>
                                        <div class="thx-it-about-thx-it-feature-item">
                                            <div class="thx-it-about-thx-it-feature-icon float-left elementor-repeater-item-<?php echo $item['_id']; ?>">
                                                <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
                                            </div>
                                            <div class="thx-it-about-thx-it-feature-text headline-1 pera-content">
                                                <h4><?php echo $item['feature_title']; ?></h4>
                                                <p><?php echo $item['feature_info']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="ab-btn">
                                    <?php if ($settings['about_btn_1_url']['url']):; ?>
                                        <a href="<?php echo $settings['about_btn_1_url']['url']; ?>"><?php echo $settings['about_btn_1']; ?><span></span></a>
                                    <?php endif; ?>

                                    <?php if ($settings['about_btn_2_url']['url']):; ?>
                                        <a href="<?php echo $settings['about_btn_2_url']['url']; ?>"><?php echo $settings['about_btn_2']; ?> </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of About section
            ============================================= -->
    <?php
        }
        else{
    ?>
    <!-- Start of About  section
============================================= -->
    <div id="thx-it-about-2" class="thx-it-about-section-2 relative-position">
        <div class="container container-1200">
            <div class="row">
                <div class="col-md-12">
                    <div class="thx-it-about-text-item-1 relative-position">
                        <div class="section-title title-style-two headline-2">
                            <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                            <h2><?php echo $settings['title']; ?></h2>
                            <h3 class="sub-text"><?php echo $settings['sub_title']; ?></h3>
                        </div>
                        <div class="thx-it-about-text pera-content">
                            <p><?php echo $settings['info']; ?></p>
                        </div>
                        <div class="thx-it-about-feature">
                            <?php foreach ($settings['list'] as $item):; ?>
                                <div class="thx-it-about-thx-it-feature-item">
                                    <div class="thx-it-about-thx-it-feature-icon float-left elementor-repeater-item-<?php echo $item['_id']; ?>">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
                                    </div>
                                    <div class="thx-it-about-thx-it-feature-text headline-1 pera-content">
                                        <h4><?php echo $item['feature_title']; ?></h4>
                                        <p><?php echo $item['feature_info']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="ab-btn">
                            <?php if ($settings['about_btn_1_url']['url']):; ?>
                                <a href="<?php echo $settings['about_btn_1_url']['url']; ?>"><?php echo $settings['about_btn_1']; ?><span></span></a>
                            <?php endif; ?>

                            <?php if ($settings['about_btn_2_url']['url']):; ?>
                                <a href="<?php echo $settings['about_btn_2_url']['url']; ?>"><?php echo $settings['about_btn_2']; ?> </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thx-it-about-side-img wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
            <img src="<?php echo $settings['main_img']['url']; ?>" alt="">
        </div>
        <div class="thx-it-about-counter">
            <?php foreach ($settings['about_counter'] as  $counter):; ?>
            <div class="thx-it-about-counter-item relative-position pera-content elementor-repeater-item-<?php echo $counter['_id']; ?>">
                <div class="thx-it-about-counter-text float-left">
                    <div class="it-location-counter headline-2">
                        <h3><b class="counter"><?php echo $counter['counter_number']; ?></b><span>+</span></h3>
                    </div>
                    <p><?php echo $counter['counter_heading']; ?></p>
                </div>
                <div class="thx-it-about-counter-hover float-right">
                    <a href="<?php echo $counter['counter_read_more_url']['url']; ?> "><?php echo $counter['counter_read_more']; ?> <i class="flaticon-right-arrow"></i></a>
                    <div class="count-icon-bg">
                        <?php \Elementor\Icons_Manager::render_icon( $counter['counter_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End of About  section
        ============================================= -->

        <?php
        }
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_about_2());
?>