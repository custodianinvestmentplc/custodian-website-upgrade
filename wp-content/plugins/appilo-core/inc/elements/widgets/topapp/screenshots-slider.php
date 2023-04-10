<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_screenshots_slider extends Widget_Base {

    public function get_name() {
        return 'topapp-screenshots-slider';
    }

    public function get_title() {
        return __( 'Screenshots Slider', 'appilo' );
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
                    'url' => get_template_directory_uri(). '/img/topapp/resource/slider-01.jpg',
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
                        'screenshots_image' => get_template_directory_uri(). '/img/topapp/resource/slider-01.jpg',
                    ],
                    [
                        'screenshots_image' => get_template_directory_uri(). '/img/topapp/resource/slider-02.jpg',
                    ],
                    [
                        'screenshots_image' => get_template_directory_uri(). '/img/topapp/resource/slider-03.jpg',
                    ],
                    [
                        'screenshots_image' => get_template_directory_uri(). '/img/topapp/resource/slider-04.jpg',
                    ],
                    [
                        'screenshots_image' => get_template_directory_uri(). '/img/topapp/resource/slider-05.jpg',
                    ],
                    [
                        'screenshots_image' => get_template_directory_uri(). '/img/topapp/resource/slider-01.jpg',
                    ],
                    [
                        'screenshots_image' => get_template_directory_uri(). '/img/topapp/resource/slider-02.jpg',
                    ],
                    [
                        'screenshots_image' => get_template_directory_uri(). '/img/topapp/resource/slider-03.jpg',
                    ],
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
            'z_index_1',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
                    'dia-zindex--4'  => __( 'z-index--4', 'appilo' ),
                    'dia-zindex--3'  => __( 'z-index--3', 'appilo' ),
                    'dia-zindex--2'  => __( 'z-index--2', 'appilo' ),
                    'dia-zindex--1'  => __( 'z-index--1', 'appilo' ),
                    'dia-zindex-0'  => __( 'z-index-0', 'appilo' ),
                    'dia-zindex-auto'  => __( 'z-index-auto', 'appilo' ),
                    'dia-zindex-1'  => __( 'z-index-1', 'appilo' ),
                    'dia-zindex-2'  => __( 'z-index-2', 'appilo' ),
                    'dia-zindex-3'  => __( 'z-index-3', 'appilo' ),
                    'dia-zindex-4'  => __( 'z-index-4', 'appilo' ),
                    'dia-zindex-5'  => __( 'z-index-5', 'appilo' ),
                    'dia-zindex-6'  => __( 'z-index-6', 'appilo' ),
                    'dia-zindex-7'  => __( 'z-index-7', 'appilo' ),
                    'dia-zindex-8'  => __( 'z-index-8', 'appilo' ),
                    'dia-zindex-9'  => __( 'z-index-9', 'appilo' ),
                    'dia-zindex-10'  => __( 'z-index-10', 'appilo' ),
                    'dia-zindex-11'  => __( 'z-index-11', 'appilo' ),
                    'dia-zindex-22'  => __( 'z-index-22', 'appilo' ),
                    'dia-zindex-33'  => __( 'z-index-33', 'appilo' ),
                    'dia-zindex-44'  => __( 'z-index-44', 'appilo' ),
                    'dia-zindex-55'  => __( 'z-index-55', 'appilo' ),
                    'dia-zindex-66'  => __( 'z-index-66', 'appilo' ),
                    'dia-zindex-77'  => __( 'z-index-77', 'appilo' ),
                    'dia-zindex-88'  => __( 'z-index-88', 'appilo' ),
                    'dia-zindex-99'  => __( 'z-index-99', 'appilo' ),
                    'dia-zindex-111'  => __( 'z-index-111', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation .swiper-button-next, 
                    {{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation .swiper-button-prev' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_6sad_bg',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation .swiper-button-next, 
                    {{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation .swiper-button-prev',
            ]
        );
        $this->add_control(
            'icon_hover_color',
            [
                'label' => __( 'Nav Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation .swiper-button-next:hover, 
                    {{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation .swiper-button-prev:hover' => 'color: {{VALUE}}',
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
                'selector' => '{{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation .swiper-button-prev:hover, 
                {{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation .swiper-button-next:hover',
            ]
        );
        $this->add_responsive_control(
            'nav_margin',
            [
                'label' => __( 'Nav Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .topapp-screenshot-slider .screenshots-section .banner-navigation' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'section_patternt_bg',
            [
                'label' => __( 'Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Mobile Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/resource/mobile-1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/ss-shape1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/ss-shape2.png',
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
                    '{{WRAPPER}} .topapp-screenshot-slider .screenshots-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_margin',
            [
                'label' => __( 'Section Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .topapp-screenshot-slider .screenshots-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        echo '<!-- Screenshots Section -->
	            <section class="topapp-screenshot-slider">
                    <section class="screenshots-section">
                        <div class="container">
                                                       
                            <div class="row appScreenshotCarousel-container swiper-container">
                                <div class="screen-mobile-image" style="background-image:url('.$settings['pattern_bg_1']['url'].')"></div>
                                <div class="swiper-wrapper">';

                                if ( $settings['screenshots'] ) {
                                    foreach (  $settings['screenshots'] as $screenshot_item ) {
                                                echo'<div class="swiper-slide dynamic-screenshots-'.$screenshot_item['_id'].'" style="background-image:url('.$screenshot_item['screenshots_image']['url'].')"></div>';
                                        }
                                    }

                               echo' </div>
                                <!-- Add Arrows -->
                            </div>
                            <!-- Navigations -->
                            <div class="banner-navigation '.$settings['z_index_1'].' '.$settings['nav_hide'].'">
                                <div class="swiper-button-prev"><span class="fas fa-angle-left"></span></div>
                                <div class="swiper-button-next"><span class="fas fa-angle-right"></span></div>
                            </div>
                        </div>
                    </section>
                    <div class="screenshoot-vector screenshoot-shape1 position-absolute"> <img src="'.$settings['pattern_bg_2']['url'].'" alt></div>
                    <div class="screenshoot-vector screenshoot-shape2 position-absolute"> <img src="'.$settings['pattern_bg_3']['url'].'" alt></div>       
                </section>
                <!-- End Screenshots Section -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_screenshots_slider );
?>