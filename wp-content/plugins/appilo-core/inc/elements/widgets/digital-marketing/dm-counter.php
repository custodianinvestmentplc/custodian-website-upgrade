<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_counter extends Widget_Base
{

    public function get_name()
    {
        return 'dm-counter';
    }

    public function get_title()
    {
        return __('Digital Marketing Counter', 'appilo');
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
                'default' => __('Project Completed', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number', [
                'label' => __('Number', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('4500', 'appilo'),
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
        $this->add_control(
            'list',
            [
                'label' => __('Counter List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_title' => __('Project Completed', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Happy Clients', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Active Client', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Team Members', 'appilo'),
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
                    '{{WRAPPER}} .app-dm-funfact-innerbox .app-dm-funfact-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __('Number Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-funfact-innerbox .app-dm-funfact-text h3',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-funfact-innerbox .app-dm-funfact-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-funfact-innerbox .app-dm-funfact-text p',
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
                'selector' => '{{WRAPPER}} .app-dm-funfact-innerbox .app-dm-funfact-icon i',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();



        echo '<div class="app-dm-funfact-content">
                <div class="row">';

        if ($settings['list']) {
            foreach ($settings['list'] as $item) {

                echo '<div class="col-lg-3 col-md-6">
                        <div class="app-dm-funfact-innerbox text-center">
                            <div class="app-dm-funfact-icon">';

                Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']);

                echo '</div>
                            <div class="app-dm-funfact-text app-dm-headline pera-content">
                                <h3><span class="counter123">' . $item['counter_number'] . '</span></h3>
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

Plugin::instance()->widgets_manager->register_widget_type(new dm_counter());
