<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_btn extends Widget_Base
{

    public function get_name()
    {
        return 'seo-agency-btn';
    }

    public function get_title()
    {
        return __('SEO Agency Button', 'appilo');
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
                'label' => __('Button', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('contact Now', 'appilo'),
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
                    '{{WRAPPER}} .apldg2-achivement-btn' => 'justify-content: {{VALUE}};',
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
                    '{{WRAPPER}} .apldg2-achivement-btn a' => 'width: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .apldg2-achivement-btn a' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'btn_c',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-achivement-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_background',
            [
                'label' => __('Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-achivement-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_t',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-achivement-btn a',
            ]
        );
        $this->add_control(
            'hover_style',
            [
                'label' => __( 'Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-achivement-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'ab_background',
                'label' => __('Background', 'appilo'),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-achivement-btn a::before',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __('Border Radius', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .apldg2-achivement-btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>

        <div class="apldg2-achivement-btn wow fadeInUp" data-wow-delay="0.2s">
            <a href="<?php echo esc_url($settings['btn_url']['url']);?>"><?php echo esc_html($settings['btn_text']); ?></a>
        </div>

        <?php
    }




    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_btn());
?>