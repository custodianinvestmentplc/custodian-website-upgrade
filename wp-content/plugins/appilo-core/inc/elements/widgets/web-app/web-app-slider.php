<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class web_app_slider extends Widget_Base {

    public function get_name() {
        return 'web-app-slider';
    }

    public function get_title() {
        return __( 'Web App Slider', 'appilo' );
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
                'default' => __( 'Unlimited Color Option', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-banner-text h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-banner-text h1',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'app landing' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => __( 'Animate List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => __( 'with Appilo.', 'appilo' ),
                    ], [
                        'list_title' => __( 'Our Theme', 'appilo' ),
                    ], [
                        'list_title' => __( 'This App', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );
        $this->add_control(
            'animate_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-banner-text h1 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'animate_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-banner-text h1 span',
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'A better way to manage your sales, team, clients on a <b>Powerful, affordable & easy way.</b>', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-banner-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-banner-text p',
            ]
        );
        $this->add_control(
            'slider_sub',
            [
                'label' => __( 'Slide Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( ' <span>Free 07-day trial</span>
                                <span>Cancel any time</span>', 'appilo' ),
            ]
        );
        $this->add_control(
            'sub_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-banner-text .web-app-banner-slug span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-banner-text .web-app-banner-slug span',
            ]
        );
        $this->add_control(
            'slider_form',
            [
                'label' => __( 'Slider Form', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '[contact-form-7 id="39" title="Slider Form"]', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-banner-text .web-app-banner-form button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typ',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-banner-text .web-app-banner-form button',
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-banner-text .web-app-banner-form button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color_hover',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-banner-text .web-app-banner-form button:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'image1', [
                'label' => __( 'Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/banner/bv-2.png',
                ],
            ]
        );
        $this->add_control(
            'image2', [
                'label' => __( 'Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/banner/bv-3.png',
                ],
            ]
        );
        $this->add_control(
            'image3', [
                'label' => __( 'Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/banner/bv-1.png',
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
                    'url' =>  get_template_directory_uri(). '/img/combine/shape/bs3.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/shape/bs2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern BG 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/shape/bs1.png',
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
                'selector' => '{{WRAPPER}} .web-app-banner-section',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_main_bg_shape',
                'label' => __( 'Slider Main BG Shape', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .web-app-banner-section',
            ]
        );
        $this->add_responsive_control(
            'c_padding',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-banner-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .web-app-banner-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of banner section
    ============================================= -->
    <section  class="web-app-banner-section position-relative">';?>
        <span class="web-app-banner-shape shape-1 position-absolute" data-parallax='{"y" : 100, "rotateY":500}'><img src="<?php echo $settings['pattern_bg_1']['url'];?>" alt></span>
        <span class="web-app-banner-shape shape-2 position-absolute" data-parallax='{"y" : 200, "rotateY":500}'><img src="<?php echo $settings['pattern_bg_2']['url'];?>" alt></span>
        <span class="web-app-banner-shape shape-3 position-absolute" data-parallax='{"y" : 300, "rotateY":500}'><img src="<?php echo $settings['pattern_bg_3']['url'];?>" alt></span>
       <?php echo'<div class="container">
            <div class="web-app-banner-content position-relative">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="web-app-banner-text web-app-headline pera-content">
                            <h1 class="cd-headline push">'.$settings['slider_heading'].'
                              <span class="cd-words-wrapper">';
                                $index = 0;
                                if ( $settings['list'] ) {
                                    foreach ($settings['list'] as $list) {
                                        $index++;
                                        if ($index == 1){
                                            $class = 'is-visible';
                                        }else{
                                            $class = '';
                                        }
                                        echo '<b class="'.$class.'"> '.$list['list_title'].'</b>';
                                    }
                                }
    								echo'</span>
                            </h1>
                            <p>'.$settings['slider_info'].'</b>
                            </p>
                            <div class="web-app-banner-form position-relative">
                                '.do_shortcode($settings['slider_form']).'
                            </div>
                            <div class="web-app-banner-slug">
                                '.$settings['slider_sub'].'
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="web-app-banner-vector position-relative text-right">
                            <div class="web-app-banner-vector-img-1 wow zoomIn" data-wow-delay="0ms" data-wow-duration="1000ms">
                                <img src="'.$settings['image1']['url'].'" alt>
                            </div>
                            <div class="web-app-banner-vector-img-2 position-absolute">
                                <div class="web-app-banner-v-img wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1000ms">
                                    <img src="'.$settings['image2']['url'].'" alt>
                                </div>
                            </div>
                            <div class="web-app-banner-vector-img-3 position-absolute">
                                <div class="web-app-banner-v-img  wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1000ms">
                                    <img src="'.$settings['image3']['url'].'" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End of banner section
    ============================================= -->    ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new web_app_slider );
?>