<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_pricing extends Widget_Base {

    public function get_name() {
        return 'appilo-seo-pricing';
    }

    public function get_title() {
        return __( 'Appilo SEO Pricing', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-price-table';
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
            'pricing_sec',
            [
                'label' => __( 'Pricing Table', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'table_img', [
                'label' => __( 'Table Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/vector/pv2.png',
                ],
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'title_after', [
                'label' => __( 'Title After', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/shape/ps1.png',
                ],
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '600ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'currency',
            [
                'label' => __( 'Currency', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '120.99', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'time',
            [
                'label' => __( 'Pricing Time', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Monthly Package', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( ' <li>26 Keyword</li>
                                    <li>240 - Man Hour</li>
                                    <li>Free 10 Email Address</li>
                                    <li>Email Support</li>', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'pricing_btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Choose Plan', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'pricing_btn_link',
            [
                'label' => __( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'pricing_list',
            [
                'label' => __( 'Pricing List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Standard Plan', 'appilo' ),
                        'price' => __( '80.99', 'appilo' ),

                    ],
                    [
                        'title' => __( 'Economy Plan', 'appilo' ),
                        'price' => __( '120.99', 'appilo' ),

                    ],
                    [
                        'title' => __( 'Executive Plan', 'appilo' ),
                        'price' => __( '169.99', 'appilo' ),

                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-price-title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-price-title h3',
            ]
        );
        $this->add_control(
            'price_color',
            [
                'label' => __( 'Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-price strong' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'price_fonts',
                'label' => __( 'Price Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-price strong',
            ]
        );
        $this->add_control(
            'currency_color',
            [
                'label' => __( 'Currency Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-price span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'currency_fonts',
                'label' => __( 'Currency Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-price span',
            ]
        );
        $this->add_control(
            'time_color',
            [
                'label' => __( 'Time Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-module span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'time_fonts',
                'label' => __( 'Time Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-module span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-list ul' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-list ul',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box .appseo-pricing-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-btn-hover:before',
            ]
        );
        $this->add_control(
            'p_btn_color',
            [
                'label' => __( 'Popular Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box.popular-appseo .appseo-pricing-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'p_btn_bg',
                'label' => __( 'Popular Button BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box.popular-appseo .appseo-pricing-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'p_btn_hover_bg',
                'label' => __( 'Popular Button Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-pricing-section .popular-appseo .appseo-btn-hover:before',
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'inner_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_after',
                'label' => __( 'After Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-pricing-section .appseo-pricing-inner-box:after',
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
                'selector' => '{{WRAPPER}} .appseo-pricing-section:after',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-pricing-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of pricing section
        ============================================= --> 
        <section  class="appseo-pricing-section">
            <div class="container">
                <div class="appseo-pricing-item">
                    <div class="row justify-content-center">';
        if ( $settings['pricing_list'] ) {
            foreach ($settings['pricing_list'] as $table) {
                echo '<div class="col-lg-4 wow fadeFromLeft '.$table['_id'].'" data-wow-delay="'.$table['animate_delay'].'" data-wow-duration="1500ms">
                            <div class="appseo-pricing-inner-box text-center '.$table['popular'].'">
                                <div class="appseo-pricing-img">
                                    <img src="'.$table['table_img']['url'].'" alt>
                                </div>
                                <div class="appseo-pricing-text appseo-headline">
                                    <div class="appseo-pricing-price-title">
                                        <h3>'.$table['title'].'</h3>
                                    </div>
                                    <div class="appseo-pricing-shape text-center">
                                        <img src="'.$table['title_after']['url'].'" alt>
                                    </div>
                                    <div class="appseo-pricing-price">
                                        <span>'.$table['currency'].'</span><strong>'.$table['price'].'</strong>
                                    </div> 
                                    <div class="appseo-pricing-module">
                                        <span>'.$table['time'].'</span>
                                    </div>
                                    <div class="appseo-pricing-list text-center ul-li-block">
                                        <ul>
                                            '.$table['info'].'
                                        </ul>
                                    </div>
                                    <div class="appseo-pricing-btn appseo-btn-hover text-center">
                                        <a href="'.$table['pricing_btn_link']['url'].'">'.$table['pricing_btn'].'</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
            }
        }
                    echo'</div>
                </div>
            </div>
        </section>
    <!-- End of pricing section
        ============================================= -->   ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_pricing );
?>