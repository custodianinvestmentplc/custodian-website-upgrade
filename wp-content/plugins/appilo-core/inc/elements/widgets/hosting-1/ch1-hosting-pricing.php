<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ch1_hosting_pricing extends Widget_Base {

    public function get_name() {
        return 'cloud-hosting-pricing';
    }

    public function get_title() {
        return __( 'Cloud Hosting Pricing', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-price-table';
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
            'pricing_tables',
            [
                'label' => __( 'Pricing Table', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Starter', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'premium',
            [
                'label' => __( 'Pro/Standard', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Pro', 'appilo' ),
                'label_off' => __( 'Standard', 'appilo' ),
                'return_value' => 'premium-wrapper',
                'default' => 'premium-wrapper',
            ]
        );
        $repeater->add_control(
            'features',
            [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( ' <li class="success">100 GB Disk Space</li>
                                    <li class="success"> 1 SUB-DOMAIN</li>
                                    <li class="success">5 E-MAIL ACCOUNTS</li>
                                    <li class="danger">24/7 SUPPORT</li>
                                    <li class="danger">Control Panel</li>', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'currency',
            [
                'label' => __( 'Currency', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '11.99', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'pricing_icon',
            [
                'label' => __( 'Pricing Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'pricing_icon_img', [
                'label' => __( 'Pricing Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/cloud-hosting/price/i1.png',
                ],
            ]
        );
        $repeater->add_control(
            'btn_txt',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Sign up', 'appilo' ),
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
            'pricing_list',
            [
                'label' => __( 'Pricing List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Starter', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Basic', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Premium', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Enterprise', 'appilo' ),
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
            'pricing_style',
            [
                'label' => __( 'Pricings Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'modern',
                'options' => [
                    'modern'  => __( 'Modern', 'appilo' ),
                    'simple' => __( 'Simple', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head .option' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head .option',
            ]
        );
        $this->add_control(
            'fibsdaas',
            [
                'label' => __( 'Title BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_title_h_bg',
                'label' => __( 'Title BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head .option',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'title_border',
                'label' => __( 'Title Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head .option',
            ]
        );
        $this->add_responsive_control(
            'title_border_radius',
            [
                'label' => __( 'Title Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head .option' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_padding',
            [
                'label' => __( 'Title Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head .option' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'price_color',
            [
                'label' => __( 'Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head .amount' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'price_fonts',
                'label' => __( 'Price Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head .amount',
            ]
        );
        $this->add_control(
            'feature_color',
            [
                'label' => __( 'Features Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .feature li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_fonts',
                'label' => __( 'Features Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .feature li',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn',
            ]
        );
        $this->add_control(
            'btn_h_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_h_fonts',
                'label' => __( 'Button Hover Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn:hover',
            ]
        );
        $this->add_control(
            'bbasdsad',
            [
                'label' => __( 'Button Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hv_bg',
                'label' => __( 'Button Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn:hover',
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
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn',
            ]
        );
        $this->add_responsive_control(
            'btn_border_radius',
            [
                'label' => __( 'Button Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_shadow',
                'label' => __( 'Button Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .btn',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .first-priceing-table .priceing-wrapper .header i' => 'color: {{VALUE}}',
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
                    'size' => 70,
                ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .first-priceing-table .priceing-wrapper .header i' => 'font-size: {{SIZE}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .host-app-priceing-section .first-priceing-table .priceing-wrapper .header i',
            ]
        );
        $this->add_responsive_control(
            'icon_border_radius',
            [
                'label' => __( 'Icon Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .first-priceing-table .priceing-wrapper .header i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .host-app-priceing-section .first-priceing-table .priceing-wrapper .header i',
            ]
        );
        $this->add_responsive_control(
            'icon_margin',
            [
                'label' => __( 'Icon Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .header i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_padding',
            [
                'label' => __( 'Icon Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .header i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'fibr',
            [
                'label' => __( 'Pricing Item Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'pricing_item_border',
                'label' => __( 'Pricing Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper',
            ]
        );
        $this->add_responsive_control(
            'pricing_item_border_radius',
            [
                'label' => __( 'Item Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'pricing_item_shadow',
                'label' => __( 'Pricing Item Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper',
            ]
        );
        $this->add_control(
            'fibas',
            [
                'label' => __( 'Pricing Item Header BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_item_h_bg',
                'label' => __( 'Pricing Item Header BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content .priceing-head, 
                {{WRAPPER}} .host-app-priceing-section .priceing-wrapper .header',
            ]
        );
        $this->add_control(
            'fib',
            [
                'label' => __( 'Pricing Item BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_item_bg',
                'label' => __( 'Pricing Item BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper .priceing-content',
            ]
        );
        $this->add_responsive_control(
            'pricing_item_padding',
            [
                'label' => __( 'Pricing Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'item_shadow',
                'label' => __( 'Item Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper',
            ]
        );
        $this->add_responsive_control(
            'section_margin',
            [
                'label' => __( 'Section Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-priceing-section .priceing-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .host-app-priceing-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $pricing_style = $settings['pricing_style'];

    echo '<section  class="host-app-priceing-section">
    <div class="container">';
        if ( $pricing_style == 'modern' ) {
            echo '<div class="first-priceing-table">';
        }if ( $pricing_style == 'simple' ) {
            echo '<div class="second-priceing-table text-center">';
        }
            echo'<div class="row">';
        if ( $settings['pricing_list'] ) {
            foreach ($settings['pricing_list'] as $pricing) {
                    if ( $pricing_style == 'modern' ) {
                        echo '<div class="col-md-6 col-lg-3 no-padding">';
                    }if ( $pricing_style == 'simple' ) {
                        echo '<div class="col-md-4">';
                    }
                if ( $pricing_style == 'modern' ) {
                    echo'<div class="priceing-wrapper '.$pricing['premium'].' first-wrapper text-center">';
                }if ( $pricing_style == 'simple' ) {
                    echo '<div class="priceing-wrapper '.$pricing['premium'].'">';
                }
                       echo' <div class="header">';
                        \Elementor\Icons_Manager::render_icon($pricing['pricing_icon'], ['aria-hidden' => 'true']);
                        if($pricing['pricing_icon_img']['url']) {
                            echo '<img src="' . $pricing['pricing_icon_img']['url'] . '" alt>';
                        }
                   echo'</div>
                        <div class="priceing-content">
                            <div class="priceing-head">
                                <span class="amount"><sub>'.$pricing['currency'].'</sub>'.$pricing['price'].'</span><br>
                                <span class="option">'.$pricing['title'].'</span>
                            </div> <!-- priceing-head -->

                            <ul class="feature">
                                '.$pricing['features'].'
                            </ul> <!-- feature -->';?>

                            <button onclick="window.location.href='<?php echo $pricing['btn_link']['url'];?>';" type="button" class="btn btn-primary" data-toggle="button"><?php echo $pricing['btn_txt'];?></button>
                       <?php echo '</div> <!-- priceing-content -->
                    </div>
                </div>';
            }
        }
            echo'</div>
            </div>
        </div> <!-- first-priceing-table -->
</section> <!-- priceing-section -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new ch1_hosting_pricing );
?>