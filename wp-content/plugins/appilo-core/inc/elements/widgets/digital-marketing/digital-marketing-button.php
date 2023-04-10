<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_marketing_btn extends Widget_Base
{

    public function get_name()
    {
        return 'dm-btn';
    }

    public function get_title()
    {
        return __('Digital Marketing Button', 'appilo');
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
                    '{{WRAPPER}} .app-dm-btn' => 'justify-content: {{VALUE}};',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 170,
                ],
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a' => 'width: {{SIZE}}{{UNIT}};',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 55,
                ],
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'btn_c',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_t',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-btn a',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'ab_background',
                'label' => __('Background', 'appilo'),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-btn a',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __('Border Radius', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'btn_shape_color',
            [
                'label' => __('Button Shape Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="app-dm-btn d-flex" >
                <a class="d-flex justify-content-center align-items-center" '.get_that_link($settings['btn_url']).'> '.$settings['btn_text'].'';
        Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'true']);
                echo '</a>
            </div>';
    }




    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new dm_marketing_btn);
?>