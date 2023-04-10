<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class web_app_about extends Widget_Base {

    public function get_name() {
        return 'web-app-about';
    }

    public function get_title() {
        return __( 'Web App About', 'appilo' );
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
                'default' => __( 'Web page coloring <span>awesome option.</span>', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-section-title h2',
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-about-text-img .web-app-about-text .web-app-about-txt-content' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-about-text-img .web-app-about-text .web-app-about-txt-content',
            ]
        );
        $this->add_control(
            'btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Download this app', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-download',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'link', [
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
            'slider_btn_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-about-text-img .web-app-about-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typ',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-about-text-img .web-app-about-btn',
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-about-text-img .web-app-about-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color_hover',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-about-text-img .web-app-about-btn:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'image1', [
                'label' => __( 'Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/w-abt1.png',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'shadow1',
                'label' => __( 'Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-about-text-img.web-app-about-left-img .web-app-about-img-content .web-about-img-1',
            ]
        );
        $this->add_control(
            'image2', [
                'label' => __( 'Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/w-abt2.png',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'shadow',
                'label' => __( 'Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-about-text-img.web-app-about-left-img .web-app-about-img-content .web-about-img-2',
            ]
        );
        $this->add_responsive_control(
            'l_r',
            [
                'label' => __( 'Image Left / Right', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-about-text-img.web-app-about-left-img .web-app-about-img-content .web-about-img-2' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'u_d',
            [
                'label' => __( 'Image Up / Down', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-about-text-img.web-app-about-left-img .web-app-about-img-content .web-about-img-2' => 'top: {{SIZE}}{{UNIT}};',
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
            'style_switcher',
            [
                'label' => __( 'Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style2',
                'options' => [
                    'flex-row-reverse'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_main_bg',
                'label' => __( 'Slider Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .web-app-about-section',
            ]
        );
        $this->add_responsive_control(
            'img_padding',
            [
                'label' => __( 'Image Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-about-text-img.web-app-about-left-img .web-app-about-img-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'c_padding',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-about-text-img .web-app-about-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .web-app-about-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of about section
    ============================================= -->
    <section  class="web-app-about-section">
        <div class="container">
            <div class="web-app-about-text-img  web-app-about-left-img">
                <div class="row '.$settings['style_switcher'].'">
                    <div class="col-lg-5">
                        <div class="web-app-about-text web-app-headline pera-content">
                            <div class="web-app-section-title web-app-headline wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                                <h2>'.$settings['slider_heading'].'</h2>
                            </div>
                            <div class="web-app-about-txt-content wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1000ms">'.$settings['slider_info'].'</div>
                            <a class="web-app-about-btn text-center wow fadeFromUp" data-wow-delay="900ms" data-wow-duration="1000ms" '.get_that_link($settings['link']).'>'.$settings['btn'].''; \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);echo'</a>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeFromRight" data-wow-delay="600ms" data-wow-duration="1000ms">
                        <div class="web-app-about-img-content position-relative">
                            <div class="web-about-img-1">
                                <img src="'.$settings['image1']['url'].'" alt>
                            </div>';?>
                            <div class="web-about-img-2 position-absolute" data-parallax='{"x" : 50}'>
                                <?php echo'<div class="web-about-img-wrap">
                                    <img src="'.$settings['image2']['url'].'" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
<!-- End of about section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new web_app_about );
?>