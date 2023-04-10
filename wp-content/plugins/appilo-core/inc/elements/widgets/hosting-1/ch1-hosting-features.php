<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ch1_hosting_features extends Widget_Base {

    public function get_name() {
        return 'cloud-hosting-features';
    }

    public function get_title() {
        return __( 'Cloud Hosting Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-posts-masonry';
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
            'features',
            [
                'label' => __( 'Features', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '100% Up time guranteed', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Do eiusmod tempor incididunt ut labore magna hobe na', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'feature_icon_img', [
                'label' => __( 'Feature Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/cloud-hosting/information/i1.png',
                ],
            ]
        );
        $repeater->add_control(
            'btn_txt',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'See how it works', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_icon',
            [
                'label' => __( 'Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-angle-right',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'btn_link',
            [
                'label' => __( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Secure and Fast Loading', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Secure and Fast Loading', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Secure and Fast Loading', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ title }}}',
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
            'feature_style',
            [
                'label' => __( 'Features Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'simple',
                'options' => [
                    'simple'  => __( 'Simple', 'appilo' ),
                    'slider' => __( 'Slider', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper p',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper .link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper .link',
            ]
        );
        $this->add_control(
            'btn_h_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper .link:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_h_fonts',
                'label' => __( 'Button Hover Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper .link:hover',
            ]
        );
        $this->add_control(
            'bbr',
            [
                'label' => __( 'Button Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __( 'Button Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper .link',
            ]
        );
        $this->add_responsive_control(
            'btn_border_radius',
            [
                'label' => __( 'Button Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper .link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper .link',
            ]
        );
        $this->add_responsive_control(
            'btn_padding',
            [
                'label' => __( 'Button Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper .link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper .caption i' => 'color: {{VALUE}}',
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
                    'size' => 129,
                ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper .caption i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'ibra',
            [
                'label' => __( 'Icon Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'icon_border',
                'label' => __( 'Icon Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper .caption i',
            ]
        );
        $this->add_responsive_control(
            'icon_border_radius',
            [
                'label' => __( 'Icon Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper .caption i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper .caption i',
            ]
        );
        $this->add_responsive_control(
            'icon_padding',
            [
                'label' => __( 'Icon Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper .caption i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
                'name' => 'slider_nav_bas',
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-information-section .owl-dots .owl-dot',
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
                'selector' => '{{WRAPPER}} .host-app-information-section .owl-dots .owl-dot.active',
            ]
        );
        $this->add_control(
            'fibr',
            [
                'label' => __( 'Feature Item Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'feature_item_border',
                'label' => __( 'Feature Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper',
            ]
        );
        $this->add_responsive_control(
            'feature_item_border_radius',
            [
                'label' => __( 'Item Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'feature_item_shadow',
                'label' => __( 'Feature Item Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper',
            ]
        );
        $this->add_control(
            'fib',
            [
                'label' => __( 'Feature Item BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_item_bg',
                'label' => __( 'Feature Item BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-information-section .information-wrapper',
            ]
        );
        $this->add_responsive_control(
            'feature_item_padding',
            [
                'label' => __( 'Feature Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section .information-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-information-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $feature_style = $settings['feature_style'];
echo '<section  class="host-app-information-section">
    <div class="container text-center">';
        if ( $feature_style == 'simple' ) {
            echo '<div class="row justify-content-center">';
        }
        if ( $feature_style == 'slider' ) {
            echo '<div class="information-carousel owl-carousel">';
        }
        if ( $settings['feature_list'] ) {
            foreach ($settings['feature_list'] as $feature) {
                if ( $feature_style == 'simple' ) {
                    echo '<div class="col-lg-4 col-md-6">';
                }
                if ( $feature_style == 'slider' ) {
                    echo '<div class="item">';
                }
                echo'<div class="information-wrapper">
                    <span class="caption">';
                        \Elementor\Icons_Manager::render_icon($feature['feature_icon'], ['aria-hidden' => 'true']);
                        if($feature['feature_icon_img']['url']) {
                            echo '<img src="' . $feature['feature_icon_img']['url'] . '" alt>';
                        }
                   echo' </span>
                    <h3>'.$feature['title'].'</h3>
                    <p> '.$feature['info'].'</p>
                    <a class="link" href="'.$feature['btn_link']['url'].'">'.$feature['btn_txt'].' '; \Elementor\Icons_Manager::render_icon($feature['btn_icon'], ['aria-hidden' => 'true']); echo'</a>
                </div> <!-- information-wrapper -->
            </div>';
            }
        }
echo' </div>
    </div>
</section> <!-- information-section -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new ch1_hosting_features );
?>