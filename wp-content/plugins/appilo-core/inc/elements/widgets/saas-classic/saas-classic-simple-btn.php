<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_classic_simple_btn extends Widget_Base {

    public function get_name() {
        return 'saas-classic-simple-btn';
    }

    public function get_title() {
        return __( 'SaaS Classic Simple Button', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-button';
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
            'btn_text',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'More about the software', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_url', [
                'label' => __( 'Button Link', 'appilo' ),
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
            'btn_align',
            [
                'label' => __( 'Heading Align', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'center',
                'options' => [
                    'text-left'  => __( 'Left', 'appilo' ),
                    'text-center' => __( 'Center', 'appilo' ),
                    'text-right' => __( 'Right', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'btn_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_control(
            'text_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas-classic-simple-btn .service_read_more a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'text_hover_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas-classic-simple-btn .service_read_more a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover',
            [
                'label' => __( 'Button Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg',
                'label' => __( 'Button Hover', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas-classic-simple-btn .service_read_more a:before, .saas-classic-simple-btn .service_read_more a:after',
            ]
        );
        $this->add_responsive_control(
            'btn_margin',
            [
                'label' => __( 'Button Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas-classic-simple-btn .service_read_more' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'btn_padding',
            [
                'label' => __( 'Button Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas-classic-simple-btn .service_read_more' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo'<div class="saas-classic-simple-btn">
                <div class="service_read_more '.$settings['btn_align'].'">
                    <a href="'.$settings['btn_url']['url'].'">'.$settings['btn_text'].'</a>
                </div>
            </div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_classic_simple_btn );
?>