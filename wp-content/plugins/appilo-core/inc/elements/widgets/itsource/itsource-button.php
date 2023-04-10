<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_btn extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-btn';
    }

    public function get_title()
    {
        return __('iTsource Button', 'appilo');
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
                'label' => __('iTsource Button', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Consultation', 'appilo'),
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
            'button_align',
            [
                'label' => __( 'Alignment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'plugin-domain' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'plugin-domain' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'plugin-domain' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
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
        $this->start_controls_tabs('content_normal');

        $this->start_controls_tab(
            'normal',
            [
                'label' => esc_html__('Normal', 'appilo'),
            ]
        );
        $normal_selector = '{{WRAPPER}} .osaas-btn-style-five';
        $this->add_control(
            'btn_c',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_t',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-btn a',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'ab_background',
                'label' => __('Background', 'appilo'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .it-nw-btn a',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'ab_border',
                'label' => __('Border', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-btn a',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __('Border Radius', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .it-nw-btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'padding',
            [
                'label' => __('Padding', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .it-nw-btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_bg_c',
            [
                'label' => __('Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-btn a i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'hover',
            [
                'label' => esc_html__('Hover', 'appilo'),
            ]
        );
        $hover_selector = '{{WRAPPER}} .osaas-btn-style-five:hover';
        $this->add_control(
            'btn_ch',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_th',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-btn a:hover',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'abh_background',
                'label' => __('Background', 'appilo'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .it-nw-btn a:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'abh_border',
                'label' => __('Border', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-btn a:hover',
            ]
        );
        $this->add_responsive_control(
            'borderh_radius',
            [
                'label' => __('Border Radius', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .it-nw-btn a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'icon_bg_ch',
            [
                'label' => __('Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-btn a:hover i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="it-nw-btn" style="text-align:'.$settings['button_align'].'">
                    <a class="justify-content-center align-items-center" '.get_that_link($settings['btn_url']).' > '.$settings['btn_text'].'';

        Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'true']);

            echo ' </a>
               </div>';
    }




    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_btn);
?>