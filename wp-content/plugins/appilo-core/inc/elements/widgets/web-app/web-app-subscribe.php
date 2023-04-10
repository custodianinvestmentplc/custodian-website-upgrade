<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class web_app_subscribe extends Widget_Base {

    public function get_name() {
        return 'web-app-subscribe';
    }

    public function get_title() {
        return __( 'Web App Newsletter', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-image-rollover';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'slider_heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get the latest update of appilo app   <span>Subscribe Now!</span>', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-newslatter-wrap .web-app-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-newslatter-wrap .web-app-section-title h2',
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-newslatter-wrap .web-app-section-title p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-newslatter-wrap .web-app-section-title p',
            ]
        );
        $this->add_control(
            'slider_form',
            [
                'label' => __( 'Form', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '[contact-form-7 id="85" title="Newsletter"]', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-newslatter-wrap .web-app-newslatter-form button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typ',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-newslatter-wrap .web-app-newslatter-form button',
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-newslatter-wrap .web-app-newslatter-form button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color_hover',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-newslatter-wrap .web-app-newslatter-form button:hover' => 'background-color: {{VALUE}}',
                ],
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
            'image', [
                'label' => __( 'BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/wn-bg.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_main_bg',
                'label' => __( 'Slider Main BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .web-app-newslatter-section',
            ]
        );
        $this->add_responsive_control(
            'c_padding',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-newslatter-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-newslatter-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of  newslatter section
    ============================================= -->                
    <section  class="web-app-newslatter-section">
        <div class="web-app-newslatter-content position-relative">
            <span class="web-app-newslatter-bg position-absolute"><img src="'.$settings['image']['url'].'" alt></span>
            <div class="container">
                <div class="web-app-newslatter-wrap">
                    <div class="web-app-section-title text-center pera-content web-app-headline">
                        <h2>'.$settings['slider_heading'].'</h2>
                        <p>'.$settings['slider_info'].'</p>
                    </div>
                    <div class="web-app-newslatter-form position-relative">
                        '.do_shortcode($settings['slider_form']).'
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End of  newslatter section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new web_app_subscribe );
?>