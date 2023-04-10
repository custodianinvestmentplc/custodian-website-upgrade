<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crm_screen_slider extends Widget_Base {

    public function get_name() {
        return 'crm-screen-slider';
    }

    public function get_title() {
        return __( 'CRM Screen Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-slider';
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
            'screen_lists',
            [
                'label' => __( 'Screen List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'screen', [
                'label' => __( 'Screen', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/crm/screen/fp1.jpg',
                ],
            ]
        );
        $this->add_control(
            'screen_list',
            [
                'label' => __( 'Screen List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'screen' => get_template_directory_uri(). '/img/crm/screen/fp1.jpg',
                    ],
                    [
                        'screen' => get_template_directory_uri(). '/img/crm/screen/fp1.jpg',
                    ],
                    [
                        'screen' => get_template_directory_uri(). '/img/crm/screen/fp1.jpg',
                    ],

                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'screen_list_style',
            [
                'label' => __( 'Screen List Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-nav .owl-prev, 
                    {{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-nav .owl-next' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-nav .owl-prev:hover, 
                    {{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-nav .owl-next:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mbcasdslogo',
            [
                'label' => __( 'Nav Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_bg',
                'label' => __( 'Nav BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-nav .owl-prev, 
                {{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-nav .owl-next',
            ]
        );
        $this->add_control(
            'mbcasdslogo_h',
            [
                'label' => __( 'Nav Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_h_bg',
                'label' => __( 'Nav Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-nav .owl-prev:hover, 
                {{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-nav .owl-next:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Steps Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .owl-item img',
            ]
        );
        $this->add_responsive_control(
            'item_padding',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-screen-section .crm-screen-slider-wrap .crm-screen-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Section Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-screen-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-screen-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of screen section
    ============================================= -->
    <section  class="crm-screen-section">
        <div class="container">
            <div id="crm-screen-slider" class="crm-screen-slider-wrap text-center owl-carousel">';
            if ( $settings['screen_list'] ) {
                foreach ($settings['screen_list'] as $screen) {
                    echo '<div class="crm-screen-img">
                                <img src="' . $screen['screen']['url'] . '" alt>
                            </div>';
                }
            }
            echo'</div>
        </div>
    </section>';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crm_screen_slider );
?>