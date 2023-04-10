<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_slider extends Widget_Base {

    public function get_name() {
        return 'app-startup-slider';
    }

    public function get_title() {
        return __( 'App Startup Slider', 'appilo' );
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
            'pattern_bg_1', [
                'label' => __( 'Slider BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/banner/bn.png',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'slides',
            [
                'label' => __( 'Slides', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We help clients solve complex problems ', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our Activate suite of business apps gives your people the tools they Lorem ipsum dolor sit amet, consectetur.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_icon',
            [
                'label' => __( 'Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-right-arrow',
                    'library' => 'appilo-icons-2',
                ],
            ]
        );
        $repeater->add_control(
            'btn',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read More', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_code',
            [
                'label' => __( 'Button ShortCode', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_link', [
                'label' => __( 'Button Link', 'appilo' ),
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
            'slide_list',
            [
                'label' => __( 'Slide List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'heading' => __( 'We help clients solve complex problems', 'appilo' ),
                        'info' => __( 'Our Activate suite of business apps gives your people the tools they Lorem ipsum dolor sit amet, consectetur.', 'appilo' ),
                    ],
                    [
                        'heading' => __( 'We help clients solve complex problems', 'appilo' ),
                        'info' => __( 'Our Activate suite of business apps gives your people the tools they Lorem ipsum dolor sit amet, consectetur.', 'appilo' ),
                    ],
                    [
                        'heading' => __( 'We help clients solve complex problems', 'appilo' ),
                        'info' => __( 'Our Activate suite of business apps gives your people the tools they Lorem ipsum dolor sit amet, consectetur.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ heading }}}',
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
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-banner-slide-area .owl-item.active .str-banner-content h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-banner-slide-area .owl-item.active .str-banner-content h1',
            ]
        );
        $this->add_control(
            'ha',
            [
                'label' => __( 'Heading After', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'heading_after',
                'label' => __( 'Heading After', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-banner-slide-area .str-banner-content h1:after',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-banner-slide-area .owl-item.active .str-banner-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-text p',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-banner-slide-area .str-banner-content a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-banner-slide-area .str-banner-content a',
            ]
        );
        $this->add_control(
            'bb',
            [
                'label' => __( 'Button BG', 'appilo' ),
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
                'selector' => '{{WRAPPER}} .str-banner-slide-area .str-banner-content a',
            ]
        );
        $this->add_control(
            'bbh',
            [
                'label' => __( 'Button Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg_hover',
                'label' => __( 'Button Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-banner-slide-area .str-banner-content a:after',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-banner-slide-area .str-banner-content a i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
                'selectors' => [
                    '{{WRAPPER}} .str-banner-slide-area .str-banner-content a i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'ib',
            [
                'label' => __( 'Icon BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-banner-slide-area .str-banner-content a i',
            ]
        );
        $this->add_control(
            'ihb',
            [
                'label' => __( 'Icon Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg_hover',
                'label' => __( 'Icon Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-banner-slide-area .str-banner-content a:hover i',
            ]
        );
        $this->add_control(
            'sn',
            [
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav',
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-banner-slide-area .owl-nav .owl-next, {{WRAPPER}} .str-banner-slide-area .owl-nav .owl-prev',
            ]
        );
        $this->add_control(
            'snh',
            [
                'label' => __( 'Slider Nav Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav_hover',
                'label' => __( 'Slider Nav Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-banner-slide-area .owl-nav .owl-next:hover, {{WRAPPER}} .str-banner-slide-area .owl-nav .owl-prev:hover',
            ]
        );
        $this->add_control(
            'smb',
            [
                'label' => __( 'Slider BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_main_bg',
                'label' => __( 'Slider BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-banner-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-banner-slide-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

      echo '<!-- Start of banner section
            ============================================= -->
            <section  class="str-banner-section" data-background="'.$settings['pattern_bg_1']['url'].'">
                <div class="container">
                    <div id="str-banner-slide" class="str-banner-slide-area owl-carousel">';
                    if ( $settings['slide_list'] ) {
                        foreach ($settings['slide_list'] as $slide) {
                            echo '<div class="str-banner-content str-headline pera-content '.$slide['_id'].'">
                            <h1>'.$slide['heading'].'</h1>
                            <p>'.$slide['info'].'</p>';
                            if (empty($slide['btn'])) {
                                echo '<div class="custom-shortcode-btn">';
                                echo '' . do_shortcode($slide['btn_code']) . '</div>';
                            }else {
                                echo '<a class="d-block text-center" href="' . $slide['btn_link']['url'] . '">';
                                \Elementor\Icons_Manager::render_icon($slide['btn_icon'], ['aria-hidden' => 'true']);
                                echo '' . $slide['btn'] . '</a>';
                            }
                            echo'</div>';
                        }
                    }
                    echo'</div>
                </div>
            </section>
<!-- End of banner section
    ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_slider );
?>