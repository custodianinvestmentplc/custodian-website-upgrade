<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_heading extends Widget_Base {

    public function get_name() {
        return 'topapp-heading';
    }

    public function get_title() {
        return __( 'Topapp Heading', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-t-letter';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'heading_content',
            [
                'label' => __( 'Heading Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>In</span> Heading', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .topapp-heading-single .topapp-sec-title .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .topapp-heading-single .topapp-sec-title .title',
            ]
        );
        $this->add_control(
            'heading_sub',
            [
                'label' => __( 'Heading Sub', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Really we have <span>an ex</span>p<span>ert</span> heading <br> content style!', 'appilo' ),
            ]
        );
        $this->add_control(
            'sub_color',
            [
                'label' => __( 'Sub Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .topapp-heading-single .topapp-sec-title .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_fonts',
                'label' => __( 'Sub Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .topapp-heading-single .topapp-sec-title .title',
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
            'section_gradient',
            [
                'label' => __( 'Section Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Section Gradient', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .topapp-sec-title .title:before, 
                {{WRAPPER}} .topapp-sec-title h2 span:before',
            ]
        );
        $this->add_control(
            'heading_margin',
            [
                'label' => __( 'Margin', 'plugin-domain' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .topapp-sec-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo ' <section class="topapp-heading-single">
                    <div class="topapp-sec-title centered">
                        <div class="title">'.$settings['heading'].'</div>
                        <h2>'.$settings['heading_sub'].'</h2>
                    </div>
                </section>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_heading );
?>