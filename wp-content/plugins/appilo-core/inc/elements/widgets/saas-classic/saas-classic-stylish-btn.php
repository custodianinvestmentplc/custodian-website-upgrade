<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_classic_stylish_btn extends Widget_Base {

    public function get_name() {
        return 'saas-classic-stylish-btn';
    }

    public function get_title() {
        return __( 'SaaS Classic Stylish Button', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-dual-button';
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
            'text_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas-classic-stylish-btn .saas_btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'text_hover_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas-classic-stylish-btn .saas_btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border_control',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas-classic-stylish-btn .saas_btn a',
            ]
        );
        $this->add_control(
            'btn_align',
            [
                'label' => __( 'Button Align', 'appilo' ),
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
            'btn_icon',
            [
                'label' => __( 'Buy Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-cloud-download-alt',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __( 'Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas-classic-stylish-btn .saas_btn a i',
            ]
        );
        $this->add_control(
            'icon_hover_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas-classic-stylish-btn .saas_btn a:hover i' => 'color: {{VALUE}}',
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
                'types' => [ 'classic', 'gradient' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas-classic-stylish-btn .saas_btn:after',
            ]
        );
        $this->add_responsive_control(
            'btn_margin',
            [
                'label' => __( 'Button Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas-classic-stylish-btn .saas_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .saas-classic-stylish-btn .saas_btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="saas-classic-stylish-btn '.$settings['btn_align'].'">
                <div class="saas_btn">
                    <a href="'.$settings['btn_url']['url'].'">';\Elementor\Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'true']); echo''.$settings['btn_text'].'</a>
                </div>
              </div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_classic_stylish_btn );
?>