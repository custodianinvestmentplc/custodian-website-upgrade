<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_portfolio_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_portfolio_2';
    }

    public function get_title()
    {
        return __('ItSource Portfolio 2', 'appilo');
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
            'itsource_Portfolio_content',
            [
                'label' => __('ITsource Portfolio Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'select_Portfolio_style',
            [
                'label' => esc_html__('Portfolio Style', 'appilo'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1' => esc_html__('Style 1', 'appilo'),
                    'style_2' => esc_html__('Style 2', 'appilo'),
                ],
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Portfolio', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Great Case Study', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__('Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your business to streamline workflow, and increase productivity. No matter the business, pure as has you covered with industry compliant solutions.', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'it_portfolio_details',
            [
                'label' => __( 'Portfolio Details', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'portfolio_img',
            [
                'label' => esc_html__( 'Portfolio Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'shape_1',
            [
                'label' => esc_html__( 'Shape 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'shape_2',
            [
                'label' => esc_html__( 'Shape 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'brand_logo',
            [
                'label' => esc_html__( 'Brand Logo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'tag', [
                'label' => esc_html__('Tag', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Idea & Technology', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('App & Virtual Reality', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'portfolio_link',
            [
                'label' => esc_html__( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
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
            'list',
            [
                'label' => esc_html__('Portfolio List', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __('App & Virtual Reality', 'appilo'),
                    ],
                    [
                        'title' => __('Power Secutiry Panel', 'appilo'),
                    ],
                    [
                        'title' => __('Yovo Antivirus & Data', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_Portfolio',
            [
                'label' => __('Portfolio Style', 'appilo'),
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
            'section_bg_heading',
            [
                'label' => esc_html__( 'Section BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'select_Portfolio_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .thx-it-portfolio-section:before',
                'exclude' => ['image' ],
                'condition' => [
                    'select_Portfolio_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_control(
            'tag_color',
            [
                'label' => esc_html__('Tag Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title-style-one .site-tag' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-portfolio-section-2 .section-title .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tag_typo',
                'label' => esc_html__('Tag Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .title-style-one .site-tag, 
                {{WRAPPER}} .thx-it-portfolio-section-2 .section-title .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-portfolio-section .section-title h2' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .title-style-two h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-portfolio-section .section-title h2, {{WRAPPER}} .title-style-two h2',
            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-portfolio-section .section-title-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .section-title-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-portfolio-section .section-title-text, {{WRAPPER}} .section-title-text',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Portfolio_content_style',
            [
                'label' => __( 'Portfolio Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'text_bg_color',
            [
                'label' => esc_html__('Text BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-portfolio-text' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-portfolio-section-2 .thx-it-portfolio-slide-area .thx-it-portfolio-text' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Brand_Logo_BG_color',
            [
                'label' => esc_html__('Brand Logo BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-portfolio-text .thx-it-portfolio-favicon' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Tag_Color',
            [
                'label' => esc_html__('Tag Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-portfolio-text .thx-it-portfolio-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tag_typo',
                'label' => esc_html__('Tag Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-portfolio-text .thx-it-portfolio-tag',
            ]
        );
        $this->add_control(
            'Title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-portfolio-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-portfolio-text h3',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'arrow_button_style',
            [
                'label' => __( 'Arrow Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'select_Portfolio_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg_color',
            [
                'label' => esc_html__('Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-portfolio-section-2 .thx-it-portfolio-slide-area .owl-next:hover,
                     .thx-it-portfolio-section-2 .thx-it-portfolio-slide-area .owl-prev:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>
        <?php
            if ($settings['select_Portfolio_style'] == "style_1") {
        ?>
        <!-- Start of portfolio section
	============================================= -->
        <div id="portfolio" class="thx-it-portfolio-section relative-position">
            <div class="container container-1200">
                <div class="thx-it-portfolio-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-title title-style-one headline-1">
                                <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                                <h2><?php echo $settings['title']; ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="section-title-text">
                                <?php echo $settings['info']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- section title -->
                    <div class="thx-it-portfolio-item-content">
                        <div class="row">
                            <!-- /portfolio item -->
                        <?php foreach ($settings['list'] as $item){; ?>
                            <div class="col-lg-4">
                                <div class="thx-it-portfolio-img-text wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="thx-it-portfolio-img relative-position">
                                        <img src="<?php echo $item['portfolio_img']['url']; ?>" alt="">
                                        <div class="p-shape thx-it-portfolio-pattern1"><img src="<?php echo $item['shape_1']['url']; ?>" alt=""></div>
                                        <div class="p-shape thx-it-portfolio-pattern2"><img src="<?php echo $item['shape_2']['url']; ?>" alt=""></div>
                                    </div>
                                    <div class="thx-it-portfolio-text relative-position headline-1">
                                        <div class="thx-it-portfolio-favicon text-center">
                                            <img src="<?php echo $item['brand_logo']['url']; ?>" alt="">
                                        </div>
                                        <span class="thx-it-portfolio-tag"><?php echo $item['tag']; ?></span>
                                        <h3><a href="<?php echo $item['portfolio_link']['url']; ?>"><?php echo $item['title']; ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of portfolio section
            ============================================= -->
        <?php
            }else{
        ?>
        <!-- Start of portfolio section
    ============================================= -->
        <div id="thx-it-portfolio-2" class="thx-it-portfolio-section-2">
            <div class="container container-1200">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-title title-style-two headline-2">
                            <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                            <h2><?php echo $settings['title']; ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="section-title-text">
                            <?php echo $settings['info']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="thx-it-portfolio-slide" class="thx-it-portfolio-slide-area owl-carousel">
            <?php foreach ($settings['list'] as $item){; ?>
                <div class="thx-it-portfolio-img-text">
                    <div class="thx-it-portfolio-img relative-position">
                        <img src="<?php echo $item['portfolio_img']['url']; ?>" alt="">
                        <div class="p-shape thx-it-portfolio-pattern1"><img src="<?php echo $item['shape_1']['url']; ?>" alt=""></div>
                        <div class="p-shape thx-it-portfolio-pattern2"><img src="<?php echo $item['shape_2']['url']; ?>" alt=""></div>
                    </div>
                    <div class="thx-it-portfolio-text relative-position headline-2">
                        <div class="thx-it-portfolio-favicon text-center">
                            <img src="<?php echo $item['brand_logo']['url']; ?>" alt="">
                        </div>
                        <span class="thx-it-portfolio-tag"><?php echo $item['tag']; ?></span>
                        <h3><a href="<?php echo $item['portfolio_link']['url']; ?>"><?php echo $item['title']; ?></a></h3>
                    </div>
                </div>
            <?php }; ?>
            </div>
        </div>
        <!-- End of Platform section
            ============================================= -->
        <?php
            }
        ?>
        <?php
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_portfolio_2());
?>