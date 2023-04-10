<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class cyber_security_pricing extends Widget_Base {

    public function get_name() {
        return 'cyber-security-pricing';
    }

    public function get_title() {
        return __( 'Cyber Security Pricing', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-codepen',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'feature_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Threat Intelligence' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'price', [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$20' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'features', [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<li class="pt-checked">Up to 5 Web Pages</li>
                                    <li class="pt-checked">Meta Description Optimization</li>
                                    <li class="pt-unchecked">Baseline Ranking Report</li>
                                    <li class="pt-unchecked">Initial Backlink Analysis</li>
                                    <li class="pt-unchecked">10 Keyword Optimization</li>' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay', [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_txt', [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Try it now' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_icon',
            [
                'label' => __( 'Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-cloud-download-alt',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
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
            'features_list',
            [
                'label' => __( 'Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => __( 'Standard', 'appilo' ),
                    ],[
                        'feature_title' => __( 'Standard', 'appilo' ),
                    ],[
                        'feature_title' => __( 'Standard', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
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
            'feature_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_price .cyb-pricing_text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item:hover .cyb-pricing_price .cyb-pricing_text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_price .cyb-pricing_text span',
            ]
        );
        $this->add_control(
            'feature_info_color',
            [
                'label' => __( 'Features Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_list ul' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_info_hover_color',
            [
                'label' => __( 'Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item:hover .cyb-pricing_list ul' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_list ul',
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
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_price .pricing_icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_price .pricing_icon svg' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_price .pricing_icon svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_price .pricing_icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_price .pricing_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item:hover .cyb-pricing_price .pricing_icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .cyb-pricing_item:hover .cyb-pricing_price .pricing_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __( 'Button Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_btn a',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_btn_h_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_h_border',
                'label' => __( 'Button Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_btn a:hover',
            ]
        );
        $this->add_responsive_control(
            'border_h_radius',
            [
                'label' => __( 'Border Hover Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item .cyb-pricing_btn a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-pricing_item',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_box_bg',
                'label' => __( 'Feature Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .cyb-pricing_item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_h_shadow',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-pricing_item:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_hover_box_bg',
                'label' => __( 'Service Hover Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .cyb-pricing_item:hover',
            ]
        );
        $this->add_responsive_control(
            'feature_box_padding',
            [
                'label' => __( 'Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing_item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_wrapper',
            [
                'label' => __( 'Section Wrapper', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-pricing-section .cyb-pricing-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .cyb-pricing-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of Pricing section
    ============================================= -->
    <section  class="cyb-pricing-section">
        <div class="container">
            <div class="cyb-pricing-content">
                <div class="row justify-content-center">';
                    if ( $settings['features_list'] ) {
                        foreach ($settings['features_list'] as $features) {
                            $link = get_that_link( $features['link']);
                        echo '<div class="col-lg-4 col-md-6">
                        <div class="cyb-pricing_item wow fadeFromUp" data-wow-delay="' . $features['animate_delay'] . '" data-wow-duration="1500ms">
                            <div class="cyb-pricing_price relative-position clearfix">
                                <div class="pricing_icon  text-center">';
                                \Elementor\Icons_Manager::render_icon($features['feature_icon'], ['aria-hidden' => 'true']);
                            echo'</div>
                                <div class="cyb-pricing_text text-center">
                                    <span>' . $features['feature_title'] . '</span>
                                    <strong>' . $features['price'] . '</strong>
                                </div>
                            </div>
                            <div class="cyb-pricing_list ul-li-block">
                                <ul>
                                    ' . $features['features'] . '
                                </ul>
                            </div>
                            <div class="cyb-pricing_btn">
                                <a '.$link.'>';\Elementor\Icons_Manager::render_icon($features['btn_icon'], ['aria-hidden' => 'true']);echo'' . $features['btn_txt'] . ' </a>
                            </div>
                        </div>
                    </div>';
                            }
                        }
        echo'</div>
            </div>
        </div>
    </section>
<!-- ENd of Pricing section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new cyber_security_pricing );
?>