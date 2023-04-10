<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_platform_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_platform_2';
    }

    public function get_title()
    {
        return __('ItSource Platform 2', 'appilo');
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
            'about_platform_content',
            [
                'label' => __('ItSource Platform Images', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_img',
            [
                'label' => __('Section Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'laptop_mockup',
            [
                'label' => __('Laptop Mockup', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Platform', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('We Deliver Core Solution.', 'appilo'),
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'progress_title', [
                'label' => esc_html__('Progress Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Using Cross Platform', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'progress_info', [
                'label' => esc_html__('Progress Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'appilo'),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'data_value', [
                'label' => esc_html__('Data Value', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('70', 'appilo'),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'data_percent', [
                'label' => esc_html__('Data Percent', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('%', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('Platform Features', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'progress_title' => __('Using Cross Platform', 'appilo'),
                        'data_value' => __('80', 'appilo'),
                    ],
                    [
                        'progress_title' => __('Easy To Useable Framework', 'appilo'),
                        'data_value' => __('65', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ progress_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_platform',
            [
                'label' => __('Platform Style', 'appilo'),
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
                    '{{WRAPPER}} .title-style-two .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-platform-section .thx-it-platform-content .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    ' {{WRAPPER}} .thx-it-platform-section .thx-it-platform-content .section-title h2',
            ]
        );
        $this->add_control(
            'Sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
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
        $this->end_controls_section();
        $this->start_controls_section(
            'platform_feature_counter_style',
            [
                'label' => __( 'Feature Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'number_color',
            [
                'label' => esc_html__('Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .its-counter-boxed .count-box .count-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .its-counter-boxed .count-box' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Feature_title_color',
            [
                'label' => esc_html__('Feature Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-platform-section .thx-it-platform-content .thx-it-platform-progress-item .thx-it-platform-progress-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_title_typo',
                'label' => esc_html__('Feature Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-platform-section .thx-it-platform-content .thx-it-platform-progress-item .thx-it-platform-progress-text h3',
            ]
        );
        $this->add_control(
            'Feature_Info_color',
            [
                'label' => esc_html__('Feature Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-platform-section .thx-it-platform-content .thx-it-platform-progress-item .thx-it-platform-progress-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_Info_typo',
                'label' => esc_html__('Feature Info Typography', 'appilo'),
                'selector' =>
                    ' {{WRAPPER}} .thx-it-platform-section .thx-it-platform-content .thx-it-platform-progress-item .thx-it-platform-progress-text p',
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {

    $settings = $this->get_settings_for_display();
    ?>

    <!-- Start of Platform section
============================================= -->
    <div id="platform" class="thx-it-platform-section relative-position" data-background="<?php echo $settings['section_img']['url']; ?>">
        <div class="background_overlay"></div>
        <div class="laptop-mockup" data-parallax='{"x" : -70}'> <img src="<?php echo $settings['laptop_mockup']['url']; ?>" alt=""></div>
        <div class="container container-1200">
            <div class="row">
                <div class="col-md-12">
                    <div class="thx-it-platform-content">
                        <div class="section-title title-style-two headline-2">
                            <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                            <h2><?php echo $settings['title']; ?></h2>
                            <h3 class="sub-text"><?php echo $settings['sub_title']; ?></h3>
                        </div>
                        <div class="thx-it-platform-progress">
                            <?php foreach ($settings['list'] as $item){; ?>
                            <div class="thx-it-platform-progress-item headline-2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="its-counter-boxed text-center headline position-relative">
                                    <div class="graph-outer">
                                        <input type="text" class="thx-it_2-dial" data-fgColor="#92d3d7" data-bgColor="#ffffff38" data-width="130" data-height="130" data-linecap="round"  value="<?php echo $item['data_value']; ?>" >
                                        <div class="inner-text count-box"><span class="count-text" data-stop="<?php echo $item['data_value']; ?>" data-speed="3500"></span><?php echo $item['data_percent']; ?></div>
                                    </div>
                                </div>
                                <div class="thx-it-platform-progress-text">
                                    <h3><?php echo $item['progress_title']; ?></h3>
                                    <p><?php echo $item['progress_info']; ?></p>
                                </div>
                            </div>
                            <?php }; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End  of Platform section
        ============================================= -->

    <?php
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_platform_2());
?>