<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_counter extends Widget_Base
{

    public function get_name()
    {
        return 'seo-agency-counter';
    }

    public function get_title()
    {
        return __('Seo Agency Counter', 'appilo');
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
            'counter_number',
            [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 100000,
                'step' => 1,
                'default' => 10,
            ]
        );
        $repeater->add_control(
            'unit', [
                'label' => __('Counter Unit', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('+', 'appilo'),
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
                        'counter_title' => __('Happy Clients', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Running Project', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Business Idea', 'appilo'),
                    ],
                    [
                        'counter_title' => __('Support Team', 'appilo'),
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
                    '{{WRAPPER}} .apldg2-achivement .apldg2-achivement-right .achivement-column .ac-content .apldg2-headline h3' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .apldg2-achivement .apldg2-achivement-right .achivement-column .ac-content .apldg2-headline span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __('Number Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-achivement .apldg2-achivement-right .achivement-column .ac-content .apldg2-headline h3',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-achivement .apldg2-achivement-right .achivement-column .ac-content .ac-subtitle span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-achivement .apldg2-achivement-right .achivement-column .ac-content .ac-subtitle span',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'icon-style',
            [
                'label' => __('Icon Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-achivement .apldg2-achivement-right .achivement-column .icon-wrapper span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __('Icon Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-achivement .apldg2-achivement-right .achivement-column .icon-wrapper span' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'content-bg',
            [
                'label' => __( 'Content Background', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'item-bg',
            [
                'label' => __('Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-achivement .apldg2-achivement-right .achivement-column .ac-content' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="apldg2-achivement">
            <div class="apldg2-achivement-right">
                <div class="row">
                    <?php
                    foreach ($settings['list'] as $item):
                    ?>
                    <div class="col-sm-6">
                        <div class="achivement-column">
                            <div class="icon-wrapper">
                                <span>
                                    <?php Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
                                </span>
                            </div>
                            <div class="ac-content">
                                <div class="apldg2-headline">
                                    <h3 class="counterup"><?php echo esc_html($item['counter_number']); ?></h3><span><?php echo esc_html($item['unit']); ?></span>
                                </div>
                                <div class="ac-subtitle">
                                    <span><?php echo esc_html($item['counter_title']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endforeach;
                ?>
                </div>
            </div>
        </div>

        <?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_counter());
