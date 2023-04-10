<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class cyber_security_features extends Widget_Base {

    public function get_name() {
        return 'cyber-security-features';
    }

    public function get_title() {
        return __( 'Cyber Security Features', 'appilo' );
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
                'label' => __( 'Feature Icon', 'appilo' ),
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
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Network Security' , 'appilo' ),
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
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => __( 'Network Security', 'appilo' ),
                    ], [
                        'feature_title' => __( 'Network Security', 'appilo' ),
                    ], [
                        'feature_title' => __( 'Network Security', 'appilo' ),
                    ], [
                        'feature_title' => __( 'Network Security', 'appilo' ),
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
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-icon-text .cyb-banner-feature-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-hover-content .cyb-banner-feature-hover-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-icon-text .cyb-banner-feature-text h3',
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
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-icon-text .cyb-banner-feature-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-icon-text .cyb-banner-feature-icon svg' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-icon-text .cyb-banner-feature-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-icon-text .cyb-banner-feature-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-icon-text .cyb-banner-feature-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_h_size',
            [
                'label' => __( 'Icon Hover Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-hover-content .cyb-banner-feature-hover-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-hover-content .cyb-banner-feature-hover-icon svg' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-hover-content .cyb-banner-feature-hover-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-hover-content .cyb-banner-feature-hover-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-hover-content .cyb-banner-feature-hover-icon i, 
                    {{WRAPPER}} .cyb-banner-feature-innerbox .cyb-banner-feature-more a' => 'color: {{VALUE}}',
                ],
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
                'selector' => '{{WRAPPER}} .cyb-banner-feature-innerbox',
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
                'selector' => '{{WRAPPER}} .cyb-banner-feature-innerbox:hover',
            ]
        );
        $this->add_responsive_control(
            'feature_box_padding',
            [
                'label' => __( 'Feature Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-banner-feature-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .cyb_features_section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo '<section  class="cyb_features_section">
<div class="cyb-banner-feature-box">
        <div class="row">';
                    if ( $settings['features_list'] ) {
                        foreach ($settings['features_list'] as $features) {
                            $link = get_that_link( $features['link']);
                        echo '<div class="col-lg-3 col-md-6 wow fadeFromUp" data-wow-delay="' . $features['animate_delay'] . '" data-wow-duration="1500ms">
                <div class="cyb-banner-feature-innerbox position-relative cyb-headline">
                    <div class="cyb-banner-feature-icon-text text-center">
                        <div class="cyb-banner-feature-icon">';
                             \Elementor\Icons_Manager::render_icon($features['feature_icon'], ['aria-hidden' => 'true']);
                            echo'</div>
                        <div class="cyb-banner-feature-text">
                            <h3><a '.$link.'>' . $features['feature_title'] . '</a></h3>
                        </div>
                    </div>
                    <div class="cyb-banner-feature-hover-content">
                        <div class="cyb-banner-feature-hover-icon">';
                          \Elementor\Icons_Manager::render_icon($features['feature_icon'], ['aria-hidden' => 'true']);
                        echo'</div>
                        <div class="cyb-banner-feature-hover-text">
                            <h3><a '.$link.'>' . $features['feature_title'] . '</a></h3>
                        </div>
                    </div>
                    <div class="cyb-banner-feature-more">
                        <a '.$link.'>';
                             \Elementor\Icons_Manager::render_icon($features['btn_icon'], ['aria-hidden' => 'true']);
                            echo'</a>
                    </div>
                </div>
            </div>';
                            }
                        }
        echo'</div>
    </div>
</section>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new cyber_security_features );
?>