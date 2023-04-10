<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appl_mockup_view extends Widget_Base {

    public function get_name() {
        return 'appl-mockup-view';
    }

    public function get_title() {
        return __( 'Appilo Mockup View', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-section';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content Section', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '# Fully Responsive and Retina Ready', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .device-mockup-content h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .device-mockup-content h2',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_image',
            [
                'label' => __( 'Content Image', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'content_img_1', [
                'label' => __( 'Content Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/tree.png',
                ],
            ]
        );
        $this->add_control(
            'content_img_2', [
                'label' => __( 'Content Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/laptop.png',
                ],
            ]
        );
        $this->add_control(
            'content_img_3', [
                'label' => __( 'Content Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/mobile.png',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'flying_animation',
            [
                'label' => __( 'Flying Elements Image', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'flying_animation_1', [
                'label' => __( 'Flying Animation Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/shape/dot1.png',
                ],
            ]
        );
        $this->add_control(
            'flying_animation_2', [
                'label' => __( 'Flying Animation Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/shape/dot2.png',
                ],
            ]
        );
        $this->add_control(
            'flying_animation_3', [
                'label' => __( 'Flying Animation Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/shape/dot3.png',
                ],
            ]
        );
        $this->add_control(
            'flying_animation_4', [
                'label' => __( 'Flying Animation Image 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/shape/line1.png',
                ],
            ]
        );
        $this->add_control(
            'flying_animation_5', [
                'label' => __( 'Flying Animation Image 5', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/shape/triangle2.png',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'styling',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_overlay',
                'label' => __( 'Overlay BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .device-mockup-section:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .device-mockup-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .device-mockup-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
   echo '<!-- Start of device mock up
    ============================================= -->
<div  class="device-mockup-area relative-position">

    <div  class="device-mockup-section">
        <div class="device-mockup-content text-center">
            <h2>'.$settings['section_title'].'</h2>
        </div>
        <span class="anim-img shape-style-5 position-absolute">
                <img src="'.$settings['flying_animation_1']['url'].'" alt>
            </span>
        <span class="anim-img shape-style-7 position-absolute">
                <img src="'.$settings['flying_animation_2']['url'].'" alt>
            </span>
        <span class="anim-img shape-style-8 position-absolute">
                <img src="'.$settings['flying_animation_3']['url'].'" alt>
            </span>
        <span class="anim-img shape-style-6 position-absolute">
                <img src="'.$settings['flying_animation_4']['url'].'" alt>
            </span>
        <span class="anim-img shape-style-9 position-absolute">
                <img src="'.$settings['flying_animation_5']['url'].'" alt>
            </span>
    </div>
    
    <div class="tree-img position-absolute" data-aos="zoom-out-right" data-aos-delay="500">
        <img src="'.$settings['content_img_1']['url'].'" alt>
    </div>
    <div class="laptop-img position-absolute">
        <img src="'.$settings['content_img_2']['url'].'" alt>
    </div>
    <div class="mobile-img position-absolute" data-aos="zoom-out-left" data-aos-delay="600">
        <img src="'.$settings['content_img_3']['url'].'" alt>
    </div>
</div>
<!-- End of device mock up
    ============================================= -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appl_mockup_view );
?>