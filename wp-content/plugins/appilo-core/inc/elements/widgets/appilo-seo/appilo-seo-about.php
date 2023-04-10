<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_about extends Widget_Base {

    public function get_name() {
        return 'appilo-seo-about';
    }

    public function get_title() {
        return __( 'Appilo SEO About', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fas fa-th-large';
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
            'headline',
            [
                'label' => __( 'Headline', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'About Digital Agency', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-section-title2 p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-section-title2 p',
            ]
        );
        $this->add_control(
            'before_bg',
            [
                'label' => __( 'Text Before', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg1',
                'label' => __( 'Style BG 1', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-section-title2 p:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg2',
                'label' => __( 'Style BG 2', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-section-title2 p:after',
            ]
        );
        $this->add_control(
            'headline_txt',
            [
                'label' => __( 'Headline Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Grow Your Business with SEO Agency', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_txt_color',
            [
                'label' => __( 'Headline Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-section-title2 h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_txt_fonts',
                'label' => __( 'Headline Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-section-title2 h2',
            ]
        );
        $this->add_control(
            'info_txt',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Praesent sollicitudin felis a ornare volutpat. Nullam mal tor, id lacinia massa purus feugiat nunc. Pellentes iue lig pellentesque, gravida nisi ac, facilisis sapien. Donec leoi tas a metus eu, efficitur sodales.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_txt_color',
            [
                'label' => __( 'Info Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-about-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt_fonts',
                'label' => __( 'Info Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-about-text',
            ]
        );
        $this->add_control(
            'quote_txt',
            [
                'label' => __( 'Quote Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“2019 Has Taken New Leap With Many Old SEO Strategies Now Work Anymore. ”', 'appilo' ),
            ]
        );
        $this->add_control(
            'quote_icon',
            [
                'label' => __( 'Quote Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-quote',
                    'library' => 'appilo-icons-2',
                ],
            ]
        );
        $this->add_control(
            'quote_txt_color',
            [
                'label' => __( 'Quote Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-about-quote .quote-text-about, 
                    {{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-about-quote .quote-icon-about i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'quote_txt_fonts',
                'label' => __( 'Info Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-about-quote .quote-text-about',
            ]
        );
        $this->add_control(
            'section_btn',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Learn More', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-about-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Info Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-about-btn',
            ]
        );
        $this->add_control(
            'section_btn_url', [
                'label' => __( 'Section Button Link', 'appilo' ),
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
            'btn_bg_label',
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
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-about-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg',
                'label' => __( 'Button Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-about-section .appseo-about-content .appseo-btn-hover:before',
            ]
        );
        $this->add_control(
            'section_image_1', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/vector/abs.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Section BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-about-section:before',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-about-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of service section
        ============================================= --> 
        <section  class="appseo-about-section position-relative">
            <div class="container">
                <div class="abou-area-content  position-relative">
                    <div class="appseo-about-img  wow fadeFromLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <img src="'.$settings['section_image_1']['url'].'" alt>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="appseo-about-content  wow fadeFromRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="appseo-section-title2 appseo-headline pera-content">
                                    <p> '.$settings['headline'].'</p>
                                    <h2>'.$settings['headline_txt'].'</h2>
                                </div>
                                <div class="appseo-about-text">
                                   '.$settings['info_txt'].'
                                </div>
                                <div class="appseo-about-quote">
                                    <div class="quote-icon-about">';
                                            \Elementor\Icons_Manager::render_icon( $settings['quote_icon'], [ 'aria-hidden' => 'true' ] );
                                            echo '</div>
                                            <div class="quote-text-about">
                                               '.$settings['quote_txt'].'
                                            </div>
                                        </div>
                                        <div class="appseo-about-btn text-center appseo-btn-hover text-uppercase">
                                            <a href="'.$settings['section_btn_url']['url'].'">'.$settings['section_btn'].'</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
    <!-- Start of service section
        ============================================= -->     ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_about );
?>