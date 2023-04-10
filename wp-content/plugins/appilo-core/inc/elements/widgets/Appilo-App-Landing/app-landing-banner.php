<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_landing_banner extends Widget_Base {

    public function get_name() {
        return 'app_landing_banner';
    }

    public function get_title() {
        return __( 'app_landing_banner', 'appilo' );
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
                'default' => __( 'Your Business Finding SEO Solutions', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-banner-content .seo-2-banner-text h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .seo-2-banner-content .seo-2-banner-text h1',
            ]
        );
        $this->add_control(
            'slider_sub',
            [
                'label' => __( 'Slide Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Welcome To Appilo', 'appilo' ),
            ]
        );
        $this->add_control(
            'sub_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-banner-content .seo-2-banner-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .seo-2-banner-content .seo-2-banner-text span',
            ]
        );
        $this->add_control(
            'slider_form',
            [
                'label' => __( 'Slider Form', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '[contact-form-7 id="63" title="Banner Form"]', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-banner-content .banner-input-field button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typ',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .seo-2-banner-content .banner-input-field button',
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-banner-content .banner-input-field button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color_hover',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-banner-content .banner-input-field button:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'image1', [
                'label' => __( 'Content Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/seo2/banner/bn-vector.png',
                ],
            ]
        );
        $this->add_control(
            'banner', [
                'label' => __( 'Banner', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/seo2/banner/bn-bg.png',
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
            'pattern_bg_1', [
                'label' => __( 'Pattern BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/seo2/banner/bn-sh1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/seo2/banner/bn-sh2.png',
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
                'selector' => '{{WRAPPER}} .seo-2-banner-section',
            ]
        );
        $this->add_responsive_control(
            'c_padding',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seo-2-banner-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .seo-2-banner-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of banner section
    ============================================= -->
    <section id="seo-2-banner" class="seo-2-banner-section position-relative" data-background="'.$settings['banner']['url'].'">
        <span class="seo-2-banner-shape position-absolute shape1"><img src="'.$settings['pattern_bg_1']['url'].'" alt></span>
        <span class="seo-2-banner-shape position-absolute  shape2"><img src="'.$settings['pattern_bg_2']['url'].'" alt></span>
        <div class="container">
            <div class="seo-2-banner-content text-center">
                <div class="seo-2-banner-text seo-2-headline wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <span>'.$settings['slider_sub'].'</span>
                    <h1>'.$settings['slider_heading'].'</h1>
                </div>
                <div class="seo-2-banner-form wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                    '.do_shortcode($settings['slider_form']).'
                </div>
            </div>
        </div>
        <div class="seo-2-banner-vector text-center">
            <img src="'.$settings['image1']['url'].'" alt>
        </div>
    </section>
<!-- End of banner section
    ============================================= -->




            <!-- Hero Slider Area -->
        <section class="aplpg-hero-slider-area" id="aplpg_banner">
            <div class="aplpg-hero-single-slide" data-background="'.$settings['banner']['url'].'">
                <div class="aplpg-social-left">
                    <div class="aplpg-social-links">
                        <a href="#">';
                        \Elementor\Icons_Manager::render_icon( $box['icon'], [ 'aria-hidden' => 'true' ] );
                        echo '</a>
                       
                    </div>
                    <div class="aplpg-scroll-btn">
                        <a href="#works">';
                        \Elementor\Icons_Manager::render_icon( $box['icon'], [ 'aria-hidden' => 'true' ] );
                      echo '  Scroll Down</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="aplpg-slide-left">
                                <div class="aplpg-headline">
                                    <h1>G'.$settings['slider_sub'].'</h1>
                                </div>
                                <div class="aplpg-pera-txt">
                                    <p>'.$settings['slider_heading'].'</p>
                                </div>
                                <div class="aplpg-slider-form">
                                    <form action="#">
                                        <input type="email" placeholder="Enter Your Email">
                                        <button type="submit">Subscribe Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="aplpg-mobile-mockup">
                                <img src="'.$settings['pattern_bg_1']['url'].'">
                                <div class="aplpg-clients-count">
                                    <div class="aplpg-headline">
                                        <h6>Happy clients</h6>
                                    </div>
                                    <div class="aplpg-clients-thumb">
                                        <img src="'.$settings['pattern_bg_2']['url'].'">
                                    </div>
                                </div>
                                <span class="aplpg-dot-object">
                                    <img src="'.$settings['image1']['url'].'">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Slider End -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_landing_banner );
?>