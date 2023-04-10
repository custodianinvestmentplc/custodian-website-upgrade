<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_about_counter extends Widget_Base
{

    public function get_name()
    {
        return 'bx-about-counter';
    }

    public function get_title()
    {
        return __('Business Expert About Counter', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-number-field';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'counter_number', [
                'label' => __('Number', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('18', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'counter_title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('YEARS OF EXPERIENCE <br> We Just Achived', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
            [
                'label' => __('Title And Number', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'number_color',
            [
                'label' => __('Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-about-left .apbc-countarea .apbc-headline h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __('Number Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-about-left .apbc-countarea .apbc-headline h2',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-about-left .apbc-countarea .apbc-exp span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-about-left .apbc-countarea .apbc-exp span',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'background-style',
            [
                'label' => __('Background & Border', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bg_color',
            [
                'label' => __('Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-about-left .apbc-countarea' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'border_color',
            [
                'label' => __('Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-about-left .apbc-countarea::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="apbc-about-left">
                <div class="apbc-countarea wow fadeInUp">
                    <div class="apbc-headline">
                        <h2><span class="apbc-counterup">' . $settings['counter_number'] . '</span><sup>+</sup></h2>
                    </div>
                    <div class="apbc-exp">
                        <span>' . $settings['counter_title'] . '</span>
                    </div>
                </div>
                </div>';

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new bx_about_counter());
