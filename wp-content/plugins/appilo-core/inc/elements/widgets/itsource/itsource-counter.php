<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_counter extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-counter';
    }

    public function get_title()
    {
        return __('iTsource Counter', 'appilo');
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

        $repeater = new Repeater();

        $repeater->add_control(
            'counter_title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Happy Clients', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number', [
                'label' => __('Number', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('8776', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-light-bulb',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'number_unit', [
                'label' => __('Number Unit', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('+', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => __('Counter List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_title' => __('Happy Clients', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Running Project', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Employees', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Annual Turnover', 'appilo'),
                    ],


                ],
                'title_field' => '{{{ counter_title }}}',
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
                    '{{WRAPPER}} .it-nw-fun-fact-innerbox .it-nw-fun-fact-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __('Number Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-fun-fact-innerbox .it-nw-fun-fact-text h3',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-fun-fact-innerbox .it-nw-fun-fact-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-fun-fact-innerbox .it-nw-fun-fact-text p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'icon-style',
            [
                'label' => __('Icon', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color_heading',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __('Icon Color', 'appilo'),
                'types' => ['gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-nw-fun-fact-icon i',
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __('Icon Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-fun-fact-innerbox .it-nw-fun-fact-icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'counter_bg',
            [
                'label' => __('Counter Background', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'content_bg',
            [
                'label' => __('Content Top Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-fun-fact-content' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'content_bottom_bg',
            [
                'label' => __('Content Bottom Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'count_bottom_content_bg',
                'label' => __('Content Bg', 'appilo'),
                'types' => ['gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-nw-fun-fact-content:after',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<div class="it-nw-fun-fact-content position-relative">
				<div class="row">';

        if ($settings['list']) {
            foreach ($settings['list'] as $item) {

                echo '<div class="col-lg-3 col-md-6">
						<div class="it-nw-fun-fact-innerbox d-flex align-items-center">
							<div class="it-nw-fun-fact-icon d-flex justify-content-center align-items-center">';

                Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']);

                echo '</div>
							<div class="it-nw-fun-fact-text headline pera-content">
							    <h3><span class="odometer" data-count="' . $item['counter_number'] . '"></span>' . $item['number_unit'] . '</h3>
								<p>' . $item['counter_title'] . '</p>
							</div>
						</div>
					</div>';
            }
        }
        echo '</div>
			</div>';

    }

 

    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_counter());
