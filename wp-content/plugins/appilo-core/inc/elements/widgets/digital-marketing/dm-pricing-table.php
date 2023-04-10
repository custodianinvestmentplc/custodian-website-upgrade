<?php

namespace Elementor;

use Appilo_Core;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_pricing_table extends Widget_Base
{

    public function get_name()
    {
        return 'dm-pricing-table';
    }

    public function get_title()
    {
        return __('Digital Marketing Pricing Table', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'py',
            [
                'label' => __('Pricing', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Basic Plan', 'appilo'),
            ]
        );
        $this->add_control(
            'price',
            [
                'label' => __('Price', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$50', 'appilo'),
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'button',
            [
                'label' => __('Button', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Get Started', 'appilo'),
            ]
        );
        $this->add_control(
            'link',
            [
                'label' => __('Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'content',
            [
                'label' => __('Features', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('10 Pages Responsive Website', 'appilo'),
            ]
        );
        $this->add_control(
            'pricing_features',
            [
                'label' => __('Pricing Features', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'content' => '10 Pages Responsive Website',
                    ],[
                        'content' => '5 PPC Campaigns',
                    ],[
                        'content' => '10 SEO Keywords',
                    ],[
                        'content' => '5 Facebook Camplaigns',
                    ],[
                        'content' => '12 Video Camplaigns',
                    ],


                ],
                'title_field' => '{{{ content }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'icon_style',
            [
                'label' => __('Icon Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color_heading',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-icon i',
            ]
        );
        $this->add_control(
            'icon_bg_color_heading',
            [
                'label' => __( 'Icon Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-icon',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'title_style',
            [
                'label' => __( 'Title Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-plan' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-plan',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'price_style',
            [
                'label' => __( 'Price Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'pricing_color',
            [
                'label' => __('Pricing Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-amount' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'price_fonts',
                'label' => __('Pricing Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-amount',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'content_style',
            [
                'label' => __( 'Content Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-list-item li' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_fonts',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-list-item li',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'button_style',
            [
                'label' => __( 'Button Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'btn_normal_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_normal_fonts',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-btn a',
            ]
        );
        $this->add_control(
            'btn_bg',
            [
                'label' => __( 'Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-btn a' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_border_color',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-btn a:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover-bg',
            [
                'label' => __( 'Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'hover-bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-pricing-innerbox .app-dm-price-btn a:before',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'box-bg-style',
            [
                'label' => __( 'Box Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'box-bg-color',
            [
                'label' => __( 'Box Background Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'box-border-color',
            [
                'label' => __( 'Box Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-pricing-innerbox' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();



    echo '<div class="app-dm-pricing-content">
            <div class="row justify-content-center">
            
                <div class="col-lg-12 col-md-12">
                    <div class="app-dm-pricing-innerbox position-relative text-center">
                        <div class="app-dm-price-icon d-flex align-items-center justify-content-center">';

                Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);

                echo '</div>
                        <div class="app-dm-price-plan">
                           ' . $settings['title'] . '
                        </div>
                        <div class="app-dm-price-amount">
                            ' . $settings['price'] . '
                        </div>
                        <div class="app-dm-price-list-item ul-li-block">
                            <ul>';
                            if ($settings['pricing_features']) {
                                foreach ($settings['pricing_features'] as $p_features) {

                                    echo '<li>' . $p_features['content'] . '</li>';

                                }
                            }
                            echo '</ul>
                        </div>
                        <div class="app-dm-price-btn">
                            <a class="d-flex justify-content-center align-items-center" ' . get_that_link($settings['link']) . '>' . $settings['button'] . '</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>';


    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new dm_pricing_table());
?>