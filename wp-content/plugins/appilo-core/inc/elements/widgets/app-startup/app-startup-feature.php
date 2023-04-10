<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_feature extends Widget_Base {

    public function get_name() {
        return 'app-startup-feature';
    }

    public function get_title() {
        return __( 'App Startup Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-posts-masonry';
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
            'features',
            [
                'label' => __( 'Features', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Data Analysis', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<li>Data research</li>
                                <li> Market analysis</li>
                                <li>Business strategy </li>', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'feature_icon_img', [
                'label' => __( 'Feature Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/icon/f-icon1.png',
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
                        'title' => __( 'Data Analysis', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Data Analysis', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Data Analysis', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Data Analysis', 'appilo' ),
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
                    '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-text h3',
            ]
        );
        $this->add_control(
            'ta',
            [
                'label' => __( 'Title After', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_after',
                'label' => __( 'Title After', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-content .owl-stage-outer:nth-child(1) .owl-item .str-feature-text h3:before',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-text .str-feature-list, 
                    {{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-text .str-feature-list li:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-text .str-feature-list',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-feature-box .str-hover-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'bbr',
            [
                'label' => __( 'Button Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __( 'Button Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-feature-box .str-hover-icon',
            ]
        );
        $this->add_responsive_control(
            'btn_border_radius',
            [
                'label' => __( 'Button Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .str-feature-box .str-hover-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'bb',
            [
                'label' => __( 'Button BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
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
                'selector' => '{{WRAPPER}} .str-feature-box .str-hover-icon',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-icon i' => 'color: {{VALUE}}',
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
                    'size' => 55,
                ],
                'selectors' => [
                    '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'ibra',
            [
                'label' => __( 'Icon Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'icon_border',
                'label' => __( 'Icon Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-icon',
            ]
        );
        $this->add_responsive_control(
            'icon_bg_border_radius',
            [
                'label' => __( 'Icon Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'ib',
            [
                'label' => __( 'Icon BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text .str-feature-icon',
            ]
        );
        $this->add_control(
            'sn',
            [
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav',
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-content .owl-nav .owl-prev, {{WRAPPER}} .str-feature-section .str-feature-content .owl-nav .owl-next',
            ]
        );
        $this->add_control(
            'snh',
            [
                'label' => __( 'Slider Nav Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav_hover',
                'label' => __( 'Slider Nav Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-content .owl-nav .owl-prev:hover, {{WRAPPER}} .str-feature-section .str-feature-content .owl-nav .owl-next:hover',
            ]
        );
        $this->add_control(
            'fibr',
            [
                'label' => __( 'Feature Item Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'feature_item_border',
                'label' => __( 'Feature Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text',
            ]
        );
        $this->add_responsive_control(
            'feature_item_border_radius',
            [
                'label' => __( 'Feature Item Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .str-feature-section .str-feature-icon-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'feature_item_shadow',
                'label' => __( 'Feature Item Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text',
            ]
        );
        $this->add_control(
            'fib',
            [
                'label' => __( 'Feature Item BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_item_bg',
                'label' => __( 'Feature Item BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text',
            ]
        );
        $this->add_control(
            'fibh',
            [
                'label' => __( 'Feature Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_hover_bg',
                'label' => __( 'Feature Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text:hover',
            ]
        );
        $this->add_control(
            'fibhb',
            [
                'label' => __( 'Feature Hover Before BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_hover_before',
                'label' => __( 'Feature Hover Before BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text:before',
            ]
        );
        $this->add_control(
            'fibha',
            [
                'label' => __( 'Feature Hover After BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_hover_after',
                'label' => __( 'Feature Hover After BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-feature-section .str-feature-icon-text:after',
            ]
        );
        $this->add_responsive_control(
            'feature_item_padding',
            [
                'label' => __( 'Feature Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-feature-section .str-feature-icon-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_margin',
            [
                'label' => __( 'Section Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-feature-section .str-feature-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .str-feature-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo ' <!-- Start of feature section
            ============================================= -->
            <section  class="str-feature-section">
                <div class="container">
                    <div id="str-slide" class="str-feature-content owl-carousel">';
                if ( $settings['feature_list'] ) {
                    foreach ($settings['feature_list'] as $feature) {
                echo '<div class="str-feature-box wow fadeFromUp '.$feature['_id'].'" data-wow-delay="'.$feature['animate_delay'].'" data-wow-duration="1500ms">
                            <div class="str-hover-icon text-center"><i class="fas fa-plus"></i></div>
                            <div class="str-feature-icon-text text-center">
                                <div class="str-feature-icon">';

                                        \Elementor\Icons_Manager::render_icon($feature['feature_icon'], ['aria-hidden' => 'true']);
                                        if($feature['feature_icon_img']['url']) {
                                            echo '<img src="' . $feature['feature_icon_img']['url'] . '" alt>';
                                        }

                                echo'</div>
                                <div class="str-feature-text str-headline">
                                    <h3>'.$feature['title'].'</h3>
                                    <div class="str-feature-list ul-li-block">
                                        <ul>
                                           '.$feature['info'].'
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                }
                   echo'</div>
                </div>
            </section>
        <!-- End of feature section
            ============================================= -->  ';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_feature );
?>