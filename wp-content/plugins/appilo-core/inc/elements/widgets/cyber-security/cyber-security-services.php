<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class cyber_security_services extends Widget_Base {

    public function get_name() {
        return 'cyber-security-services';
    }

    public function get_title() {
        return __( 'Cyber Security Services', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-codepen',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'feature_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Threat Intelligence' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Take decisive action with the frontline intelligence.' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay', [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_txt', [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'More' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_icon',
            [
                'label' => __( 'Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-chevron-right',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'link', [
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
            'features_list',
            [
                'label' => __( 'Service List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => __( 'Threat Intelligence', 'appilo' ),
                    ], [
                        'feature_title' => __( 'Threat Intelligence', 'appilo' ),
                    ], [
                        'feature_title' => __( 'Threat Intelligence', 'appilo' ),
                    ], [
                        'feature_title' => __( 'Threat Intelligence', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
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
            'feature_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox:hover .cyb-service-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text h3',
            ]
        );
        $this->add_control(
            'feature_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_info_hover_color',
            [
                'label' => __( 'Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox:hover .cyb-service-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text p',
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
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-icon svg' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text .cyb-feature-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __( 'Button Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text .cyb-feature-more',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text .cyb-feature-more' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_btn_h_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text .cyb-feature-more:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_h_border',
                'label' => __( 'Button Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text .cyb-feature-more:hover',
            ]
        );
        $this->add_responsive_control(
            'border_h_radius',
            [
                'label' => __( 'Border Hover Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text .cyb-feature-more:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-service-innerbox',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_box_bg',
                'label' => __( 'Feature Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .cyb-service-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_h_shadow',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-service-innerbox:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_hover_box_bg',
                'label' => __( 'Service Hover Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .cyb-service-innerbox:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_hover_box_a_bg',
                'label' => __( 'Service Hover Box After', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .cyb-service-innerbox:before',
            ]
        );
        $this->add_responsive_control(
            'feature_box_padding',
            [
                'label' => __( 'Feature Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_wrapper',
            [
                'label' => __( 'Section Wrapper', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-section .cyb-service-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .cyb-service-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of Service section
    ============================================= -->    
    <section  class="cyb-service-section">
            <div class="cyb-service-content">
            <div class="container">
                <div class="row">';
                    if ( $settings['features_list'] ) {
                        foreach ($settings['features_list'] as $features) {
                            $link = get_that_link( $features['link']);
                        echo '<div class="col-lg-3 col-md-6  wow fadeFromUp" data-wow-delay="' . $features['animate_delay'] . '" data-wow-duration="1500ms">
                        <div class="cyb-service-innerbox">
                            <div class="cyb-service-icon">';
                          \Elementor\Icons_Manager::render_icon($features['feature_icon'], ['aria-hidden' => 'true']);
                        echo'</div>
                            <div class="cyb-service-text cyb-headline pera-content">
                                <h3><a '.$link.'>' . $features['feature_title'] . '</a></h3>
                                <p>' . $features['feature_info'] . '</p>
                                <a class="cyb-feature-more text-center" '.$link.'>' . $features['btn_txt'] . ' ';
                             \Elementor\Icons_Manager::render_icon($features['btn_icon'], ['aria-hidden' => 'true']);
                            echo'</a>
                            </div>
                        </div>
                    </div>';
                            }
                        }
        echo'</div>
            </div>
        </div>
    </section>
<!-- End of Service section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new cyber_security_services );
?>