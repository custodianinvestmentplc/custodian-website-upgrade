<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_pricing_table extends Widget_Base
{

    public function get_name()
    {
        return 'resume_pricing_table';
    }

    public function get_title()
    {
        return __('Resume/CV Pricing Table', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'hero_shapes',
            [
                'label' => __('Shapes', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'shape_1',
            [
                'label' => __( 'Shape 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_2',
            [
                'label' => __( 'Shape 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'pricing_texts',
            [
                'label' => __( 'Text Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Pricing', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Reasonable Pricing Plan', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'tab_lists',
            [
                'label' => __( 'Pricing List', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'pricing_active',
            [
                'label' => __( 'Active Plan', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'sign',
            [
                'label' => __( 'Sign', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => __( '59', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Pricing Plan', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Starter Plan', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'details',
            [
                'label' => __( 'Plan Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul>
                                    <li>1 Home Page</li>
                                    <li>2 Home Page Design</li>
                                    <li>Unlimited Inner Page</li>
                                    <li>50 Elements</li>
                                    <li>Support</li>
                                    <li>Vector Design</li>
							    </ul>', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'paln_button',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Purchase Now', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'plan_url',
            [
                'label' => __( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'pricing_tabs',
            [
                'label' => __('Pricing list', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Starter Plan',
                    ],[
                        'title' => 'Starter Plan',
                    ],[
                        'title' => 'Starter Plan',
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_bg_style',
            [
                'label' => __('Section Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __('Section Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'section_top_border_color',
            [
                'label' => __('Top Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area:before' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_bottom_border_color',
            [
                'label' => __('Bottom Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area:after' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
            [
                'label' => __('Content Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'subtitle_color',
            [
                'label' => __('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'label' => __( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-title',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Information Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Information Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-text',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'pricing_style',
            [
                'label' => __( 'Pricing Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sing_color',
            [
                'label' => __('Sign Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing h2 sup' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sign_typo',
                'label' => __('Sign Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing h2 sup',
            ]
        );
        $this->add_control(
            'price_color',
            [
                'label' => __('Price Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'price_typo',
                'label' => __('Price Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing h2',
            ]
        );
        $this->add_control(
            'price_title_color',
            [
                'label' => __('Price Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'price_title_typo',
                'label' => __('Price Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing h3',
            ]
        );
        $this->add_control(
            'plan_info_color',
            [
                'label' => __('Plan Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'paln_info_typo',
                'label' => __('Plan Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing ul li',
            ]
        );
        $this->add_control(
            'button_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_hover_typo',
                'label' => __('Button Hover Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing a',
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_hover_color',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing a:before',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'active_pricing_table',
            [
                'label' => __( 'Active Tab Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sing_active_color',
            [
                'label' => __('Price Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing.active h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_active_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing.active h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'info_active_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing.active ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'active_tab_button__color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing.active a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'active_tab_btn_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-pricing-area .apihu-port-single-pricing.active a',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $shape1 = $settings['shape_1']['url'];
        $shape2 = $settings['shape_2']['url'];
        $sub_title = $settings['sub_title'];
        $title = $settings['title'];
        $info = $settings['info'];
        ?>
        <!-- Pricing Start -->
        <div class="apihu-port-pricing-area">
            <img class="apihu-port-pricing-shape-left" src="<?php echo $shape1; ?>" alt="Pricing Area Shape left">
            <img class="apihu-port-pricing-shape-right" src="<?php echo $shape2; ?>" alt="Pricing Area Shape right">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="apihu-port-section-heading">
                            <p class="apihu-port-section-subtitle"><?php echo $sub_title; ?></p>
                            <h2 class="apihu-port-section-title"><?php echo $title; ?></h2>
                            <p class="apihu-port-section-text">
                                <?php echo $info; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <?php
                        foreach ($settings['pricing_tabs'] as $pricing){

                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="apihu-port-single-pricing <?php if('yes' == $pricing['pricing_active']){echo esc_attr('active');} ?> wow fadeInUp" data-wow-delay="0.4s">
                            <h2> <sup><?php echo $pricing['sign']; ?></sup><?php echo $pricing['price']; ?></h2>
                            <h3><?php echo $pricing['title']; ?></h3>
                                <?php echo $pricing['details']; ?>
                            <a href="<?php echo $pricing['plan_url']['url']; ?>" <?php echo $pricing['plan_url']['is_external'] ? ' target="_blank"' : ''; ?>>
                                <?php echo $pricing['paln_button']; ?> <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <?php
                        };
                    ?>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_pricing_table());
