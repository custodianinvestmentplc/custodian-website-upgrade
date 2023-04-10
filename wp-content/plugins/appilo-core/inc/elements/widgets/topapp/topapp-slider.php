<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_banner_slider extends Widget_Base {

    public function get_name() {
        return 'topapp-banner-slider';
    }

    public function get_title() {
        return __( 'Topapp Banner Slider', 'appilo' );
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
        
        $this->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get connect to other. <br> Just ask Topapp', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section .content-column h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section .content-column h1',
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Access to opportunities for career advancement and <br> professional growth relies heavily on connections.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section .content-column .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section .content-column .text',
            ]
        );
        $this->add_control(
            'form',
            [
                'label' => __( 'Form Shortcodes', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '[contact-form-7 id="650" title="Banner Form"]', 'appilo' ),
            ]
        );
        $this->add_control(
            'form_info',
            [
                'label' => __( 'Form Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '*We will give a trial download link to your mail address', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn-style-two' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .btn-style-two',
            ]
        );
        $this->add_control(
            'btnbg1356',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg6465',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .btn-style-two',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg64689',
                'label' => __( 'Button Background Before', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .btn-style-two:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg64656567',
                'label' => __( 'Button Background After', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .btn-style-two:after',
            ]
        );
        $this->add_control(
            'form_info_color',
            [
                'label' => __( 'Form Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section .content-column .address' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'form_info_fonts',
                'label' => __( 'Form Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section .content-column .address',
            ]
        );
        $this->add_control(
            'turn_off_btn',
            [
                'label' => __( 'Video Button Disable', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'd-none',
                'default' => '',
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Video Play BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/resource/video.jpg',
                ],
            ]
        );
        $this->add_control(
            'btn_url', [
                'label' => __( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=kxPCFljwJws',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Slider BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/background/banner-bg.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'mob_slide',
            [
                'label' => __( 'Mobile Slide', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'slide_no1',
            [
                'label' => __( 'Slide Number 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1', 'appilo' ),
            ]
        );
        $this->add_control(
            'num1_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.one' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'num1_fonts',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.one',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slide_num_bg1',
                'label' => __( 'Number BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.one',
            ]
        );
        $this->add_control(
            'mob_slide_1', [
                'label' => __( 'Mobile Slide 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/resource/search.png',
                ],
            ]
        );
        $this->add_control(
            'mob_slide_e_1', [
                'label' => __( 'Mobile Slide Element 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/resource/play.png',
                ],
            ]
        );
        $this->add_control(
            'slide_no2',
            [
                'label' => __( 'Slide Number 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '2', 'appilo' ),
            ]
        );
        $this->add_control(
            'num2_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.two' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'num2_fonts',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.two',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slide_num_bg2',
                'label' => __( 'Number BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.two',
            ]
        );
        $this->add_control(
            'mob_slide_2', [
                'label' => __( 'Mobile Slide 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/resource/screenshot01.png',
                ],
            ]
        );
        $this->add_control(
            'mob_slide_e_2', [
                'label' => __( 'Mobile Slide Element 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/icons/heart.png',
                ],
            ]
        );
        $this->add_control(
            'slide_no3',
            [
                'label' => __( 'Slide Number 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '3', 'appilo' ),
            ]
        );
        $this->add_control(
            'num3_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.three' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'num3_fonts',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.three',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slide_num_bg3',
                'label' => __( 'Number BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .pager.three',
            ]
        );
        $this->add_control(
            'mob_slide_3', [
                'label' => __( 'Mobile Slide 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/resource/slider-05.png',
                ],
            ]
        );
        $this->add_control(
            'mob_slide_e_3', [
                'label' => __( 'Mobile Slide Element 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/icons/plus.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Mobile Mockup', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/resource/mobile.png',
                ],
            ]
        );
        $this->add_control(
            'ha44534',
            [
                'label' => __( 'Mobile Pattern', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'mob_pattern',
                'label' => __( 'Mobile Pattern', 'appilo' ),
                'types' => [ 'classic' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .banner-section .carousel-column .inner-column .pager-box .inner-box:before',
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
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .banner-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '    <!--Banner Section-->
    <section class="banner-section" >
        <div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
        <div class="bg-layer" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h1>'.$settings['heading'].'</h1>
                        <div class="text">'.$settings['info'].'</div>
                        <div class="newsletter-form">
                            '.do_shortcode($settings['form']).'
                        </div>
                        <div class="address">'.$settings['form_info'].'</div>
                        <!--Video Box-->
                        <div class="video-box '.$settings['turn_off_btn'].' wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="video-image">
                                <img src="'.$settings['pattern_bg_2']['url'].'" alt>
                            </figure>
                            <a href="'.$settings['btn_url']['url'].'" class="top-app-lightbox-image overlay-box"><span class="fas fa-play">
                            <i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <div class="slider-outer">

                            <!-- Custom Pager -->
                            <div class="pager-box">
                                <div class="inner-box">
                                    <div class="banner-pager clearfix" id="banner-pager">
                                        <a class="pager one wow zoomIn" data-wow-delay="100ms" data-wow-duration="1500ms" data-slide-index="0" href=""><div class="image img-circle">'.$settings['slide_no1'].'</div></a>
                                        <a class="pager two wow zoomIn" data-wow-delay="200ms" data-wow-duration="1500ms" data-slide-index="1" href=""><div class="image img-circle">'.$settings['slide_no2'].'</div></a>
                                        <a class="pager three wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" data-slide-index="2" href=""><div class="image img-circle">'.$settings['slide_no3'].'</div></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Column / Slides -->
                            <div class="slides-box" style="background-image: url('.$settings['pattern_bg_3']['url'].')">
                                <div class="inner-box">

                                    <div class="banner-slider">

                                        <div class="slide-item">
                                            <div class="image">
                                                <img src="'.$settings['mob_slide_1']['url'].'" alt/>
                                            </div>
                                        </div>

                                        <div class="slide-item">
                                            <div class="image">
                                                <img src="'.$settings['mob_slide_2']['url'].'" alt />
                                            </div>
                                        </div>

                                        <div class="slide-item">
                                            <div class="image">
                                                <img src="'.$settings['mob_slide_3']['url'].'" alt />
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="mobile-small-image">
                                    <img src="'.$settings['mob_slide_e_1']['url'].'" alt />
                                </div>

                                <div class="heart-image-icon">
                                    <img src="'.$settings['mob_slide_e_2']['url'].'" alt />
                                </div>

                                <div class="plus-small-image">
                                    <img src="'.$settings['mob_slide_e_3']['url'].'" alt />
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Banner Section-->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_banner_slider );
?>