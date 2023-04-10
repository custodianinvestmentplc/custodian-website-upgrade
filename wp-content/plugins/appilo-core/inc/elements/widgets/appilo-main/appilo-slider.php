<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_banner_slider extends Widget_Base {

    public function get_name() {
        return 'appilo-banner-slider';
    }

    public function get_title() {
        return __( 'Appilo Banner Slider', 'appilo' );
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
                'default' => __( 'Awesome App for Your Modern Lifestyle', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-static .banner-content h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-static .banner-content h3',
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Increase productivity with a simple to-do app. app for <br> managing your personal budgets', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-static .banner-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-static .banner-content p',
            ]
        );
        $this->add_control(
            'btn_1',
            [
                'label' => __( 'Button 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Download App', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn1_url', [
                'label' => __( 'Button 1 Link', 'appilo' ),
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
            'btn1_color',
            [
                'label' => __( 'Button 1 Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-btn.appilo-thm-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn1_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .slider-btn.appilo-thm-btn',
            ]
        );
        $this->add_control(
            'btnbg1356',
            [
                'label' => __( 'Button 1 Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg6465',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .slider-btn.appilo-thm-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_box_shadow2',
                'label' => __( 'Button Shadow', 'appilo' ),
                'show_label' => true,
                'selector' => '{{WRAPPER}} .banner-static .banner-content .slider-btn.appilo-thm-btn',
            ]
        );
        $this->add_control(
            'btn_2',
            [
                'label' => __( 'Button 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Discover More', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn2_url', [
                'label' => __( 'Button 2 Link', 'appilo' ),
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
            'btn2_color',
            [
                'label' => __( 'Button 2 Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-btn.appilo-thm-btn.borderd' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn2_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .slider-btn.appilo-thm-btn.borderd',
            ]
        );
        $this->add_control(
            'btnbg13562',
            [
                'label' => __( 'Button 2 Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn2_h_color',
            [
                'label' => __( 'Button 2 Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-static .banner-content .appilo-thm-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg646523',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .slider-btn.appilo-thm-btn.borderd',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_box_shadow',
                'label' => __( 'Button Shadow', 'appilo' ),
                'show_label' => true,
                'selector' => '{{WRAPPER}} .banner-static .banner-content .slider-btn.appilo-thm-btn.borderd:hover',
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Mobile Mockup', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/1/slider-moc.png',
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
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_main',
                'label' => __( 'Slider Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .banner-static',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .banner-static' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<section class="banner-static" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-content">
                        <h3>'.$settings['heading'].'</h3>
                        <p>'.$settings['info'].'</p>

                            <a href="'.$settings['btn1_url']['url'].'" class="slider-btn appilo-thm-btn">
                                    <span>'.$settings['btn_1'].'</span>
                            </a>

                            <a href="'.$settings['btn2_url']['url'].'" class="slider-btn appilo-thm-btn borderd">
                                    <span>'.$settings['btn_2'].'</span>
                            </a>
                        

                    </div><!-- /.banner-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-12">
                    <div class="banner-moc-box clearfix">
                        <img src="'.$settings['pattern_bg_2']['url'].'" alt class="float-right" />
                    </div><!-- /.banner-moc-box -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.banner-static -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_banner_slider );
?>