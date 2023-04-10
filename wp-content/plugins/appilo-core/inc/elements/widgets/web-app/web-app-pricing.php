<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class web_app_pricing extends Widget_Base {

    public function get_name() {
        return 'web-app-pricing';
    }

    public function get_title() {
        return __( 'Web App Pricing', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'monthly_tab',
            [
                'label' => __( 'Monthly Lists', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'monthly_plan',
            [
                'label' => __( 'Table Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Monthly Plan', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'm_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Personal', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'm_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => __( '49', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'm_currency',
            [
                'label' => __( 'Currency', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '$', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'm_plan',
            [
                'label' => __( 'Plan', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Yearly Plan', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'm_features',
            [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '  <li>1 GB SSD Storage</li>
                                    <li>50 GB Data Transfer</li>
                                    <li>512 MB Ram Limit</li>
                                    <li>20 Entry Process</li>
                                    <li>20 MB/s I/O Limit</li>
                                    <li>10 Emails, Database</li>
                                    <li>Single Website</li>
                                    <li>Free SSl certificate</li>', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'm_btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Buy Now', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'm_link', [
                'label' => __( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'monthly_list',
            [
                'label' => __( 'Monthly List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'm_title' => __( 'Personal', 'appilo' ),
                    ],
                    [
                        'm_title' => __( 'Personal', 'appilo' ),
                    ],
                    [
                        'm_title' => __( 'Personal', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ m_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'yearly_tab',
            [
                'label' => __( 'Yearly Lists', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'yearly_plan',
            [
                'label' => __( 'Table Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Yearly Plan', 'appilo' ),
            ]
        );

        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'y_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Personal', 'appilo' ),
            ]
        );
        $repeater2->add_control(
            'y_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => __( '49', 'appilo' ),
            ]
        );
        $repeater2->add_control(
            'y_currency',
            [
                'label' => __( 'Currency', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '$', 'appilo' ),
            ]
        );
        $repeater2->add_control(
            'y_plan',
            [
                'label' => __( 'Plan', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Yearly Plan', 'appilo' ),
            ]
        );
        $repeater2->add_control(
            'y_features',
            [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '  <li>1 GB SSD Storage</li>
                                    <li>50 GB Data Transfer</li>
                                    <li>512 MB Ram Limit</li>
                                    <li>20 Entry Process</li>
                                    <li>20 MB/s I/O Limit</li>
                                    <li>10 Emails, Database</li>
                                    <li>Single Website</li>
                                    <li>Free SSl certificate</li>', 'appilo' ),
            ]
        );
        $repeater2->add_control(
            'y_btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Buy Now', 'appilo' ),
            ]
        );
        $repeater2->add_control(
            'y_link', [
                'label' => __( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'yearly_list',
            [
                'label' => __( 'Yearly List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'y_title' => __( 'Personal', 'appilo' ),
                    ],
                    [
                        'y_title' => __( 'Personal', 'appilo' ),
                    ],
                    [
                        'y_title' => __( 'Personal', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ y_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'item_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'nav_color',
            [
                'label' => __( 'Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan-item .web-app-pricing-plan-tab-btn li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .web-app-pricing-plan-item .web-app-pricing-plan-tab-btn li a',
            ]
        );
        $this->add_control(
            'nava_color',
            [
                'label' => __( 'Nav Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan-item .web-app-pricing-plan-tab-btn li a.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nava_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .web-app-pricing-plan-item .web-app-pricing-plan-tab-btn li a.active',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'nav_fonts',
                'label' => __( 'Nav Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan-item .web-app-pricing-plan-tab-btn li a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'nav_shadow',
                'label' => __( 'Nav Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan-item .web-app-pricing-plan-tab-btn li a',
            ]
        );
        $this->start_controls_tabs('hover_normal');

        $this->start_controls_tab(
            'style_normal_tab',
            [
                'label' => __( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan .web-app-pricing-title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan .web-app-pricing-title h3',
            ]
        );
        $this->add_control(
            'p_color',
            [
                'label' => __( 'Plan Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan .web-app-pricing-title span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'p_fonts',
                'label' => __( 'Plan Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan .web-app-pricing-title span',
            ]
        );
        $this->add_control(
            'pr_color',
            [
                'label' => __( 'Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan .web-app-pricing-price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'pr_fonts',
                'label' => __( 'Price Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan .web-app-pricing-price',
            ]
        );
        $this->add_control(
            'f_color',
            [
                'label' => __( 'Features Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan .web-app-pricing-content li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_fonts',
                'label' => __( 'Features Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan .web-app-pricing-content li',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan .web-app-price-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan .web-app-price-btn a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .web-app-pricing-plan .web-app-price-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __( 'Button Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan .web-app-price-btn',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan .web-app-price-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .web-app-pricing-plan',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'i_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan',
            ]
        );
        $this->add_responsive_control(
            'item_radius',
            [
                'label' => __( 'Item Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'style_hover_tab',
            [
                'label' => __( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'h_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan:hover .web-app-pricing-title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'h_p_color',
            [
                'label' => __( 'Plan Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan:hover .web-app-pricing-title span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'h_pr_color',
            [
                'label' => __( 'Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan:hover .web-app-pricing-price' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'h_f_color',
            [
                'label' => __( 'Features Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan:hover .web-app-pricing-content li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'h_btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan:hover .web-app-price-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'h_btn_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .web-app-pricing-plan:hover .web-app-price-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'h_btn_border',
                'label' => __( 'Button Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan:hover .web-app-price-btn',
            ]
        );
        $this->add_responsive_control(
            'h_border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan:hover .web-app-price-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'h_box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'h_item_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .web-app-pricing-plan:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'h_i_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-pricing-plan:hover',
            ]
        );
        $this->add_responsive_control(
            'h_item_radius',
            [
                'label' => __( 'Item Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'sec_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'wra_padding',
            [
                'label' => __( 'Wrapper Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-plan-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Section Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .web-app-pricing-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-pricing-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $delay = 100;
        $animate_delay = .1;

        $delay2 = 50;
        $animate_delay2 = .1;

echo '<!-- Start of  pricing section
    ============================================= -->
    <section  class="web-app-pricing-section">
        <div class="container">
            <div class="web-app-pricing-plan-item">
                <div class="web-app-pricing-plan-tab-btn ul-li text-center clearfix">
                    <ul id="tabs" class="nav text-uppercase nav-tabs">
                        <li class="nav-item"><a href="#" data-target="#yearly" data-toggle="tab" class="nav-link text-capitalize active">'.$settings['yearly_plan'].' </a></li>
                        <li class="nav-item"><a href="#" data-target="#monthly" data-toggle="tab" class="nav-link text-capitalize">'.$settings['monthly_plan'].'</a></li>
                    </ul>
                </div>
                <div id="tabsContent" class="tab-content">
                    <div id="yearly" class="tab-pane fade active show">
                        <div class="row justify-content-center">';

                        if ( $settings['monthly_list'] ) {
                            foreach ($settings['monthly_list'] as $monthly) {
                                $animate_delay++;
                    echo '<div class="col-lg-4 col-md-6  wow fadeFromUp" data-wow-delay="'.$animate_delay*$delay.'ms" data-wow-duration="1000ms">
                                <div class="web-app-pricing-plan web-app-headline text-center ul-li-block">
                                    <div class="web-app-pricing-title">
                                        <h3>' . $monthly['m_title'] . '</h3>
                                        <span>' . $monthly['m_plan'] . '</span>
                                    </div>
                                    <div class="web-app-pricing-price">
                                        <span> ' . $monthly['m_currency'] . '</span> ' . $monthly['m_price'] . '
                                    </div>
                                    <div class="web-app-pricing-content clearfix">
                                        <ul>
                                           ' . $monthly['m_features'] . '
                                        </ul>
                                    </div>
                                    <div class="web-app-price-btn text-capitalize">
                                        <a  '.get_that_link( $monthly['m_link']).'>' . $monthly['m_btn'] . '</a>
                                    </div>
                                </div>
                              </div>';
                                    }
                                }
                        echo'</div>
                    </div>
                    <div id="monthly" class="tab-pane fade ">
                        <div class="row justify-content-center">';

                        if ( $settings['yearly_list'] ) {
                            foreach ($settings['yearly_list'] as $yearly) {
                                $animate_delay2++;
                        echo '<div class="col-lg-4 col-md-6  wow fadeFromUp" data-wow-delay="'.$animate_delay2*$delay2.'ms" data-wow-duration="1000ms">
                                <div class="web-app-pricing-plan web-app-headline text-center ul-li-block">
                                    <div class="web-app-pricing-title">
                                        <h3>' . $yearly['y_title'] . '</h3>
                                        <span>' . $yearly['y_plan'] . '</span>
                                    </div>
                                    <div class="web-app-pricing-price">
                                        <span> ' . $yearly['y_currency'] . '</span> ' . $yearly['y_price'] . '
                                    </div>
                                    <div class="web-app-pricing-content clearfix">
                                        <ul>
                                           ' . $yearly['y_features'] . '
                                        </ul>
                                    </div>
                                    <div class="web-app-price-btn text-capitalize">
                                        <a  '.get_that_link( $yearly['y_link']).'>' . $yearly['y_btn'] . '</a>
                                    </div>
                                </div>
                              </div>';
                                    }
                                }
                        echo'</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End of pricing section
    ============================================= -->
';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new web_app_pricing );
?>