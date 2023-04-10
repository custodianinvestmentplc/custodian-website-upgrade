<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class email_marketing_pricing extends Widget_Base {

    public function get_name() {
        return 'email-marketing-pricing';
    }

    public function get_title() {
        return __( 'Email Marketing Pricing', 'appilo' );
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
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'price_image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/demo-images/pi1.png',
                ],
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'STARTUP' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'price', [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$49' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'features', [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<li>Hire Unlimited Times</li>
                                    <li>Newest Features</li>
                                    <li>Monitor Activity</li>
                                    <li>File Handover</li>' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'popular',
            [
                'label' => __( 'Popular', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Popular', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'em-popular-price',
                'default' => '',
            ]
        );
        $repeater->add_control(
            'badge', [
                'label' => __( 'Badge', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/demo-images/em-p-badge.png',
                ],
                'condition' => [
                    'popular' => 'em-popular-price',
                ],
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
                'default' => __( 'Choose Plan' , 'appilo' ),
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
            'price_list',
            [
                'label' => __( 'Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'STARTUP', 'appilo' ),
                    ],[
                        'title' => __( 'BUSINESS', 'appilo' ),
                        'popular' => 'em-popular-price',
                    ],[
                        'title' => __( 'ENTERPRISE', 'appilo' ),
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
            'feature_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-plan-name h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item:hover .em-pricing-plan-name h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-pricing-plan-item .em-pricing-plan-name h4',
            ]
        );
        $this->add_control(
            'feature_info_color',
            [
                'label' => __( 'Features Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-plan-list ul' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_info_hover_color',
            [
                'label' => __( 'Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item:hover .em-pricing-plan-list ul' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-pricing-plan-item .em-pricing-plan-list ul',
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
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-icon svg, {{WRAPPER}} .em-pricing-plan-item .em-pricing-icon img' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-icon svg, {{WRAPPER}} .em-pricing-plan-item .em-pricing-icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item:hover .em-pricing-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .em-pricing-plan-item:hover .em-pricing-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __( 'Button Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-pricing-plan-item .em-pricing-btn',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_btn_h_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item .em-pricing-btn:hover a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_h_border',
                'label' => __( 'Button Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-pricing-plan-item .em-pricing-btn:hover',
            ]
        );
        $this->add_responsive_control(
            'border_h_radius',
            [
                'label' => __( 'Border Hover Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}.em-pricing-plan-item .em-pricing-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-pricing-plan-item',
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
                'selector' => '{{WRAPPER}} .em-pricing-plan-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_h_shadow',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-pricing-plan-item:hover',
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
                'selector' => '{{WRAPPER}} .em-pricing-plan-item:hover',
            ]
        );
        $this->add_responsive_control(
            'feature_box_padding',
            [
                'label' => __( 'Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .em-pricing-plan-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .em-pricing-section .em-pricing-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .em-pricing-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of pricing section
    ============================================= -->
    <section  class="em-pricing-section">
        <div class="container">
            <div class="em-pricing-content">
                <div class="row justify-content-center">';
                    if ( $settings['price_list'] ) {
                        foreach ($settings['price_list'] as $price_item) {
                            $link = get_that_link( $price_item['link']);
                        echo '<div class="col-lg-4 col-md-6 em-no-padding">
                        <div class="em-pricing-plan-item  ' . $price_item['popular'] . ' text-center em-headline ul-li-block">
                            <span class="em-popular-badge position-absolute"><img src="' . $price_item['badge']['url'] . '" alt></span>
                            <div class="em-pricing-icon">';
                                if($price_item['icon']) {
                                    \Elementor\Icons_Manager::render_icon($price_item['icon'], ['aria-hidden' => 'true']);
                                } if ($price_item['price_image']['url']) {
                                    echo '<img src="' . $price_item['price_image']['url'] . '" alt>';
                                }
                            echo'</div>
                            <div class="em-pricing-plan-name text-uppercase">
                                <h4>' . $price_item['title'] . '</h4>
                            </div>
                            <div class="em-pricing-price">
                                <h3>' . $price_item['price'] . '</h3>
                            </div>
                            <div class="em-pricing-plan-list">
                                <ul>
                                    ' . $price_item['features'] . '
                                </ul>
                            </div>
                            <div class="em-pricing-btn">
                                <a '.$link.'>' . $price_item['btn_txt'] . '</a>
                            </div>
                        </div>
                    </div>';
                            }
                        }
        echo'</div>
            </div>
        </div>
    </section>
<!-- End of pricing section
    ============================================= -->
';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new email_marketing_pricing );
?>