<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_classic_features extends Widget_Base {

    public function get_name() {
        return 'saas-classic-features';
    }

    public function get_title() {
        return __( 'SaaS Classic Features', 'appilo' );
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
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'saas_two_feature', 'appilo' ),
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
                'default' => __( 'Software development' , 'appilo' ),
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
            'feature_info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Create stunning, effective sales documents with custom-designed theme & template.' , 'appilo' ),
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
                        'feature_icon' => __( 'fab fa-codepen', 'appilo' ),
                        'feature_title' => __( 'Software development', 'appilo' ),
                        'feature_info' => __( 'Create stunning, effective sales documents with custom-designed theme & template.', 'appilo' ),
                    ],
                    [
                        'feature_icon' => __( 'fab fa-codepen', 'appilo' ),
                        'feature_title' => __( 'Software development', 'appilo' ),
                        'feature_info' => __( 'Create stunning, effective sales documents with custom-designed theme & template.', 'appilo' ),
                    ],
                    [
                        'feature_icon' => __( 'fab fa-codepen', 'appilo' ),
                        'feature_title' => __( 'Software development', 'appilo' ),
                        'feature_info' => __( 'Create stunning, effective sales documents with custom-designed theme & template.', 'appilo' ),
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
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas_two_feature_section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list .s2-feature_text_box h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list:hover .s2-feature_text_box h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list .s2-feature_text_box h3',
            ]
        );
        $this->add_control(
            'feature_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list .s2-feature_text_box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_info_hover_color',
            [
                'label' => __( 'Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list:hover .s2-feature_text_box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list .s2-feature_text_box p',
            ]
        );
        $this->add_control(
            'feature_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_icon_bg',
                'label' => __( 'Feature Icon Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_icon',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_box_before',
                'label' => __( 'Feature Box Before', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-grean:before',
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
                'selector' => '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list',
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
                'selector' => '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list:hover',
            ]
        );
        $this->add_responsive_control(
            'feature_box_padding',
            [
                'label' => __( 'Feature Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas_two_feature_section .s2-feature_right .s2-feature_list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo'<section  class="saas_two_feature_section">
        <div class="s2-feature_content">
                <!-- /feature left content -->
                    <div class="s2-feature_right">';
                    if ( $settings['features_list'] ) {
                        foreach ($settings['features_list'] as $features) {
                        echo '<div class="s2-feature_list s2-grean wow fadeFromUp" data-wow-delay="' . $features['animate_delay'] . '" data-wow-duration="1500ms">
                                    <div class="s2-feature_icon text-center relative-position">';
                                        \Elementor\Icons_Manager::render_icon($features['feature_icon'], ['aria-hidden' => 'true']);
                                    echo'</div>
                                    <div class="s2-feature_text_box saas2-headline pera-content">
                                        <h3>' . $features['feature_title'] . '</h3>
                                        <p>' . $features['feature_info'] . '</p>
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
Plugin::instance()->widgets_manager->register_widget_type( new saas_classic_features );
?>