<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_screenshots_slider extends Widget_Base {

    public function get_name() {
        return 'app-showcase-screenshots-slider';
    }

    public function get_title() {
        return __( 'App Showcase Screenshots Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slider-full-screen';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content Section', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'screenshots_items',
            [
                'label' => __( 'Screenshots Items', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'screenshots_image', [
                'label' => __( 'Screenshots Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/screenshoot/screenshot01.png',
                ],
            ]
        );

        $this->add_control(
            'screenshots',
            [
                'label' => __( 'Screenshots', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'screenshots_image' => '',
                    ],[
                        'screenshots_image' => '',
                    ],[
                        'screenshots_image' => '',
                    ],[
                        'screenshots_image' => '',
                    ],[
                        'screenshots_image' => '',
                    ],[
                        'screenshots_image' => '',
                    ],

                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Background', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_pattern_bg',
            [
                'label' => __( 'Mobile Mockup', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'mob_bg',
                'label' => __( 'Mobile Background', 'appilo' ),
                'types' => [ 'classic' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-screenshots-section .ei-screen-mobile-image',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/ss-shape1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/ss-shape2.png',
                ],
            ]
        );
        $this->add_control(
            'nav_hide',
            [
                'label' => __( 'Hide/Show Nav', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'd-block',
                'options' => [
                    'd-block'  => __( 'Show', 'appilo' ),
                    'd-none' => __( 'Hide', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-screenshots-section .banner-navigation .swiper-button-next, 
                {{WRAPPER}} .ei-screenshots-section .banner-navigation .swiper-button-prev' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_2a5s_bg',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-screenshots-section .banner-navigation .swiper-button-next, 
                {{WRAPPER}} .ei-screenshots-section .banner-navigation .swiper-button-prev',
            ]
        );
        $this->add_control(
            'icon_hover_color',
            [
                'label' => __( 'Nav Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-screenshots-section .banner-navigation .swiper-button-next:hover, 
                {{WRAPPER}} .ei-screenshots-section .banner-navigation .swiper-button-prev:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_hover_bg',
                'label' => __( 'Nav Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-screenshots-section .banner-navigation .swiper-button-next:hover, 
                {{WRAPPER}} .ei-screenshots-section .banner-navigation .swiper-button-prev:hover',
            ]
        );
        $this->add_responsive_control(
            'nav_margin',
            [
                'label' => __( 'Nav Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .ei-screenshots-section .banner-navigation' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .ei-screenshots-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
    echo '<!-- Start of screen-shoot section
    ============================================= -->
<section  class="ei-screenshots-section position-relative">
    <div class="container">
        
        <div class="row ei-appScreenshotCarousel-container swiper-container">
            <div class="ei-screen-mobile-image"></div>
            <div class="swiper-wrapper">';

        if ( $settings['screenshots'] ) {
            foreach ($settings['screenshots'] as $screenshot_item) {
                echo '<div class="swiper-slide dynamic-screenshots-'.$screenshot_item['_id'].'" style="background-image:url('.$screenshot_item['screenshots_image']['url'].'"></div>';
            }
        }
            echo'</div>
            <!-- Add Arrows -->
        </div>
        <!-- Navigations -->
        <div class="banner-navigation '.$settings['nav_hide'].'">
            <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
            <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
        </div>
    </div>
    <div class="screenshoot-vector screenshoot-shape1 position-absolute"> <img src="'.$settings['pattern_bg_1']['url'].'" alt></div>
    <div class="screenshoot-vector screenshoot-shape2 position-absolute"> <img src="'.$settings['pattern_bg_2']['url'].'" alt></div>
</section>
<!-- End of screen-shoot section
    ============================================= -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_screenshots_slider );
?>