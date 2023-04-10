<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_section_heading extends Widget_Base {

    public function get_name() {
        return 'saas-section-heading';
    }

    public function get_title() {
        return __( 'SaaS Section Heading', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-editor-h2';
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
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section_title .title_tag .tag_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'header_icon',
            [
                'label' => __( 'Header Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-gem',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'title_icon_bg',
            [
                'label' => __( 'Title Icon BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Title Icon BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .section_title .title_tag .tag_icon',
            ]
        );
        $this->add_control(
            'title_bg',
            [
                'label' => __( 'Title BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_main_bg',
                'label' => __( 'Title BG', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'selector' => '{{WRAPPER}} .section_title .title_tag',
            ]
        );
        $this->add_control(
            'header_txt',
            [
                'label' => __( 'Header Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Client’s testimonials', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_margin',
            [
                'label' => __( 'Margin', 'plugin-domain' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .section_title .title_tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo'<div class="section_title text-center">
            <div class="title_tag">
                <div class="tag_icon float-left">';
                    \Elementor\Icons_Manager::render_icon($settings['header_icon'], ['aria-hidden' => 'true']);
                echo'</div>
                '.$settings['header_txt'].'
            </div>
        </div>
        <!-- /section-title -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_section_heading );
?>