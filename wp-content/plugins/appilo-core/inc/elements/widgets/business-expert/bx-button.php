<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_btn extends Widget_Base
{

    public function get_name()
    {
        return 'bx-btn';
    }

    public function get_title()
    {
        return __('Business Expert Button', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-dual-button';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Digital Marketing Button', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('More Service', 'appilo'),
            ]
        );
        $this->add_control(
            'btn_url', [
                'label' => __('Button Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'btn_icon',
            [
                'label' => __('Button Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_responsive_control(
            'btn_align',
            [
                'label' => __( 'Button Alignment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'flex-start' => __( 'Left', 'appilo' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'flex-start',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_style',
            [
                'label' => __('Button Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'width',
            [
                'label' => __( 'Button Width', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],

                ],
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'height',
            [
                'label' => __( 'Button Height', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],

                ],
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'btn_c',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_t',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-primary-btn a',
            ]
        );
        $this->add_control(
        'btn_hover_c',
        [
            'label' => __('Hover Color', 'appilo'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .apbc-primary-btn a:hover' => 'color: {{VALUE}}',
            ],
        ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __('Border Radius', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_tsc_bg',
            [
                'label' => __( 'Button Background', 'webangon' ),
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
            'btn_bg',
            [
                'label' => __('Button Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a' => 'background-color: {{VALUE}}',
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
            'btn_bg_hover',
            [
                'label' => __('Button Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_icon_style',
            [
                'label' => __( 'Icon Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_Bg_color',
            [
                'label' => __('Icon Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_hover_color',
            [
                'label' => __('Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_Bg_hover_color',
            [
                'label' => __('Icon Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-primary-btn a:hover i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<div class="apbc-primary-btn wow fadeInUp" data-wow-delay="0.5s">
                    <a '.get_that_link($settings['btn_url']).'>'.$settings['btn_text'].'';
        Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'true']);
                echo '</a>
                </div>';
    }




    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new bx_btn());
?>