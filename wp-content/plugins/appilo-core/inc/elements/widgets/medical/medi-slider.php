<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class medi_slider extends Widget_Base {

    public function get_name() {
        return 'medislider';
    }

    public function get_title() {
        return __( 'Medical Slider', 'appilo' );
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
                'default' => __( 'Providing Best Medical Service', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-banner-text h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-banner-text h1',
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Medical availability and clinical practice varies across the world due to regional differences in culture and technology.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-banner-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-banner-text p',
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Examination' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => __( 'Box List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => __( 'Examination', 'appilo' ),
                    ],
                    [
                        'list_title' => __( 'Examination', 'appilo' ),
                    ],
                    [
                        'list_title' => __( 'Examination', 'appilo' ),
                    ],
                    [
                        'list_title' => __( 'Examination', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );
        $this->add_control(
            'ic_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-banner-feature-icon-text .medi-app-banner-feature-icon i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .medi-app-banner-feature-icon-text .medi-app-banner-feature-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .medi-app-banner-feature-icon-text:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'animate_color',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-banner-feature-icon-text .medi-app-banner-feature-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'animate_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-banner-feature-icon-text .medi-app-banner-feature-text span',
            ]
        );
        $this->add_control(
            'btn1', [
                'label' => __( 'Button 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read More' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'link1', [
                'label' => __( 'Link 1', 'appilo' ),
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
            'btn2', [
                'label' => __( 'Button 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Make Appointment' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'link2', [
                'label' => __( 'Link 2', 'appilo' ),
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
                    '{{WRAPPER}} .medi-app-banner-text a' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .medi-app-banner-text a span' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typ',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-banner-text a',
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-banner-text a' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .medi-app-banner-text a span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color_hover',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-banner-text a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'image', [
                'label' => __( 'Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/medical/b-bg.jpg',
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
        $this->add_responsive_control(
            'c_padding',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .medi-app-banner-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .medi-app-banner-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();


        echo '<!-- Start of slider section
============================================= -->
<section  class="medi-app-banner-section" data-background="'.$settings['image']['url'].'">
    <div class="container">
        <div class="medi-app-banner-content position-relative">
            <div class="medi-app-banner-text app-medi-headline pera-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                <h1>'.$settings['slider_heading'].'</h1>
                <p>'.$settings['slider_info'].'</p>
                <div class="medi-app-banner-btn">';
                    if ($settings['link1']['url']) {
                        echo '<a ' . get_that_link($settings['link1']) . '>' . $settings['btn1'] . ' <span><i class="fas fa-arrow-right"></i></span></a>';
                    } if ($settings['link2']['url']) {
                        echo '<a ' . get_that_link($settings['link2']) . '>' . $settings['btn2'] . ' <span><i class="fas fa-arrow-right"></i></span></a>';
                    }
                echo'</div>
            </div>
            <div class="medi-app-banner-feature">';
                if ( $settings['list'] ) {
                    foreach ($settings['list'] as $list) {
                    echo '<div class="medi-app-banner-feature-icon-text text-center wow fadeInUp" data-wow-delay="'.appilo_animate('150').'" data-wow-duration="1000ms">
                        <div class="medi-app-banner-feature-icon">';
                        \Elementor\Icons_Manager::render_icon($list['icon'], ['aria-hidden' => 'true']);
                        echo '</div>
                        <div class="medi-app-banner-feature-text">
                            <span>'.$list['list_title'].'</span>
                        </div>
                    </div> ';
                    }
                }
            echo'</div>
        </div>
    </div>
</section>
<!-- End of slider section
============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new medi_slider );
?>