<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class appl2_countdown extends Widget_Base
{

    public function get_name()
    {
        return 'appl2-countdown';
    }

    public function get_title()
    {
        return __('Appl2 Countdown', 'appilo');
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
            'countdown_date', [
                'label' => __('Date', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('8/28/2021', 'appilo'),
                'placeholder' => __('8/28/2021', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'countdown_hour', [
                'label' => __('Hour', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('12:00:00', 'appilo'),
                'placeholder' => __('12:00:00', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __('Color Control', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'timer_color',
            [
                'label' => __('Timer Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-countdown ul li span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_suffix_fonts',
                'label' => __('Number Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-countdown ul li span',
            ]
        );
        $this->add_control(
            'text_color',
            [
                'label' => __('Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-countdown ul li p, {{WRAPPER}} .apl-countdown ul li.seperator' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter1_suffix_fonts',
                'label' => __('Text Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-countdown ul li p',
            ]
        );
        $this->add_responsive_control(
            'menu_align',
            [
                'label' => __('Alignment', 'appilo'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'appilo'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'appilo'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'appilo'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .apl-countdown ul' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        echo '
        <section  class="appl2-countdown-timer">
        <div class="appl2-countdown-date d-none" data-date="' . $settings['countdown_date'] . ' ' . $settings['countdown_hour'] . '"></div>
                 <div class="apl-countdown wow fadeInDown">
                            <ul>
                                <li>
                                    <span class="days">00</span>
                                    <p class="days_ref">days</p>
                                </li>
                                <li class="seperator">:</li>
                                <li>
                                    <span class="hours">00</span>
                                    <p class="hours_ref">hours</p>
                                </li>
                                <li class="seperator">:</li>
                                <li>
                                    <span class="minutes">00</span>
                                    <p class="minutes_ref">minutes</p>
                                </li>
                                <li class="seperator">:</li>
                                <li>
                                    <span class="seconds">00</span>
                                    <p class="seconds_ref">seconds</p>
                                </li>
                            </ul>
                        </div>
        </section>
        ';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new appl2_countdown);
?>