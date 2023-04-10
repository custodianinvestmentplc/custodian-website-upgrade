<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ch3_slider extends Widget_Base {

    public function get_name() {
        return 'cloud-hosting-slider-3';
    }

    public function get_title() {
        return __( 'Cloud Hosting Slider 3', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-banner';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'slide_1',
            [
                'label' => __( 'Slide 1', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            's1_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We are hosting', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_heading1',
            [
                'label' => __( 'Heading 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Start with a .com', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_heading2',
            [
                'label' => __( 'Heading 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get online with the world’s <br> most popular domain.', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br> do eiusmod tempor incididunt ut labore et dolore magna <br> aliqua. Ut enim ad minim veniam.', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_pricing_starting',
            [
                'label' => __( 'Pricing Starting', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Starting at $2.99', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '$2.95', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_period',
            [
                'label' => __( 'Price Period', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '/month*', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_btn_link',
            [
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
            's1_slide_image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/cloud-hosting/slider/slider-5.jpg',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'slide_2',
            [
                'label' => __( 'Slide 2', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            's2_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We are hosting', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_heading1',
            [
                'label' => __( 'Heading 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Start with a .com', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_heading2',
            [
                'label' => __( 'Heading 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get online with the world’s <br> most popular domain.', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br> do eiusmod tempor incididunt ut labore et dolore magna <br> aliqua. Ut enim ad minim veniam.', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_pricing_starting',
            [
                'label' => __( 'Pricing Starting', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Starting at $7.99', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '$7.95', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_period',
            [
                'label' => __( 'Price Period', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '/month*', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_btn_link',
            [
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
            's2_slide_image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/cloud-hosting/slider/slider-6.jpg',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'heading1_color',
            [
                'label' => __( 'Heading 1 Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .content-box .ex-small-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'heading2_color',
            [
                'label' => __( 'Heading 2 Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .large-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .content-box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'medium_color',
            [
                'label' => __( 'Medium Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .content-box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'large_color',
            [
                'label' => __( 'Large Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .medium-text .big-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'itabra',
            [
                'label' => __( 'Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'i_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .content-box',
            ]
        );
        $this->add_responsive_control(
            'i_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .content-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'price_color',
            [
                'label' => __( 'Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .medium-text .big-text .theme-color' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'period_color',
            [
                'label' => __( 'Time Period Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .medium-text .big-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary',
            ]
        );
        $this->add_control(
            'btn',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_shadow',
                'label' => __( 'Button Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary',
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_hover_fonts',
                'label' => __( 'Button Hover Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary:hover',
            ]
        );
        $this->add_control(
            'btn_h',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_h_bg',
                'label' => __( 'Button Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_h_shadow',
                'label' => __( 'Button Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary:hover',
            ]
        );
        $this->add_control(
            'content_box',
            [
                'label' => __( 'Box Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'content_bg',
                'label' => __( 'Content BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-slider-section .content-box',
            ]
        );
        $this->add_control(
            'nav_t',
            [
                'label' => __( 'Nav Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tparrows.preview2 .tp-arr-titleholder' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'nav_t_fonts',
                'label' => __( 'Nav Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .tparrows.preview2 .tp-arr-titleholder',
            ]
        );
        $this->add_control(
            'nav',
            [
                'label' => __( 'Navigation Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_ma_bg',
                'label' => __( 'Navigation BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .tparrows.preview2',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $target1 = $settings['s1_btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow1 = $settings['s1_btn_link']['nofollow'] ? ' rel="nofollow"' : '';
        $target2 = $settings['s2_btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow2 = $settings['s2_btn_link']['nofollow'] ? ' rel="nofollow"' : '';

echo    '<!-- Start of banner section
============================================= -->
<section  class="host-app-slider-section">

    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="'.$settings['s1_slide_image']['url'].'" data-delay="8000"  data-saveperformance="off"  data-title="'.$settings['s1_title'].'">
                    <!-- MAIN IMAGE -->
                    <img src="'.$settings['s1_slide_image']['url'].'"  alt  data-bgposition="top bottom" data-kenburns="on" data-duration="8000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-bgpositionend="bottom center">


                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption lfb ltt"
                    data-x="100"
                    data-y="120"
                    data-speed="1800"
                    data-start="1500"
                    data-easing="Power4.easeOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-end="7500"
                    data-endspeed="1800"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 3;">
                    <div class="content-box">
                        <span class="ex-small-text">'.$settings['s1_heading1'].'</span>
                        <h1 class="large-text text-left">'.$settings['s1_heading2'].'</h1>
                        <p>'.$settings['s1_info'].'</p>

                        <div class="price medium-text text-left">'.$settings['s1_pricing_starting'].' <br> <span class="big-text"><span class="theme-color">'.$settings['s1_price'].'</span>'.$settings['s1_period'].'</span></div>

                        <div class="link-button pull-right">
                           <a '.$target1 . $nofollow1.' href="'.$settings['s1_btn_link']['url'].'" class="btn btn-primary">'.$settings['s1_btn'].' <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> 
                    </div> <!-- content-box -->
                </div>
            </li>

            <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="'.$settings['s2_slide_image']['url'].'" data-delay="8000"  data-saveperformance="off"  data-title="'.$settings['s2_title'].'">
                <!-- MAIN IMAGE -->
                <img src="'.$settings['s2_slide_image']['url'].'"  alt  data-bgposition="top bottom" data-kenburns="on" data-duration="8000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-bgpositionend="bottom center">


                <!-- LAYER NR. 1 -->
                <div class="tp-caption lfb ltt"
                data-x="100"
                data-y="120"
                data-speed="1800"
                data-start="1500"
                data-easing="Power4.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.1"
                data-end="7500"
                data-endspeed="1800"
                data-endeasing="Power4.easeIn"
                style="z-index: 3;">
                <div class="content-box">
                    <span class="ex-small-text">'.$settings['s2_heading1'].'</span>
                    <h1 class="large-text text-left">'.$settings['s2_heading2'].'</h1>
                    <p>'.$settings['s2_info'].'</p>

                    <div class="price medium-text text-left">'.$settings['s2_pricing_starting'].' <br> <span class="big-text"><span class="theme-color">'.$settings['s2_price'].'</span>'.$settings['s2_period'].'</span></div>

                    <div class="link-button pull-right">
                         <a '.$target2 . $nofollow2.' href="'.$settings['s2_btn_link']['url'].'" class="btn btn-primary">'.$settings['s2_btn'].' <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div> 
                </div> <!-- content-box -->
            </div>
        </li>
    </ul>
</div>
</div>
</section> <!-- slider-section -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new ch3_slider );
?>