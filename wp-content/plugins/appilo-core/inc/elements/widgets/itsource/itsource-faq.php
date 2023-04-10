<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_faq extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-faq';
    }

    public function get_title()
    {
        return __('iTsource FAQ', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-posts-group';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'faq_items',
            [
                'label' => __('FAQ Items', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'faq_title', [
                'label' => __('FAQ Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('What do I do when my computer crashes?', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'faq_content', [
                'label' => __('FAQ Content', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('publishes across a variety of platforms, and the great majority of our external content is available here on McKinsey.com. This includes articles, white papers, reports, videos, and podcasts.', 'appilo'),
                'show_label' => true,
            ]
        );

        $this->add_control(
            'faq_list',
            [
                'label' => __('FAQ List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_title' => __('What do I do when my computer crashes?', 'appilo'),
                        'faq_content' => __('publishes across a variety of platforms, and the great majority of our external content is available here on McKinsey.com. This includes articles, white papers, reports, videos, and podcasts.', 'appilo'),
                    ],
                    [
                        'faq_title' => __('How can I clean my keyboard?', 'appilo'),
                        'faq_content' => __('publishes across a variety of platforms, and the great majority of our external content is available here on McKinsey.com. This includes articles, white papers, reports, videos, and podcasts.', 'appilo'),
                    ],
                    [
                        'faq_title' => __('How do I obtain permission to republish an article?', 'appilo'),
                        'faq_content' => __('publishes across a variety of platforms, and the great majority of our external content is available here on McKinsey.com. This includes articles, white papers, reports, videos, and podcasts.', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ faq_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-faq-content .faq_title:not(.collapsed), .it-nw-faq-content .faq_title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-nw-faq-content .faq_title:not(.collapsed), .it-nw-faq-content .faq_title',
            ]
        );
        $this->add_control(
            'icon_active_color',
            [
                'label' => __('Icon Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-faq-content .faq_title:not(.collapsed)::after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_inactive_color',
            [
                'label' => __('Icon Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-faq-content .faq_title::after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-faq-content .faq-body' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typography',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-nw-faq-content .faq-body',
            ]
        );
        $this->add_control(
            'border_color',
            [
                'label' => __('Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-faq-content .accordion,{{WRAPPER}} .it-nw-faq-content .faq_title:not(.collapsed), .it-nw-faq-content .faq_title' => 'border-color: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

//Start Blog section

        echo '<div class="it-nw-faq-content">
            <div class="row">
                <div class="col" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="accordion" id="accordionExample">';

        if ($settings['faq_list']) {
            $index = 0;
            foreach ($settings['faq_list'] as $faq_item) {
                $index++;
                if ($index == 1) {
                    $class = 'show';
                    $class2 = '';
                    $class3 = 'active';
                } else {
                    $class = '';
                    $class2 = 'collapsed';
                    $class3 = '';
                }
                echo '<div class="faq_area faq_area1 ' . $class3 . '">
                            <div class="faq-header" id="heading' . $faq_item['_id'] . '">
                                <h3>
                                    <button class="faq_title ' . $class2 . '" type="button" data-toggle="collapse" data-target="#collapse' . $faq_item['_id'] . '" aria-expanded="true" aria-controls="collapse' . $faq_item['_id'] . '">
                                        ' . $faq_item['faq_title'] . '
                                    </button>
                                </h3>
                            </div>
                            <div id="collapse' . $faq_item['_id'] . '" class="collapse ' . $class . '" aria-labelledby="heading' . $faq_item['_id'] . '" data-parent="#accordionExample">
                                <div class="faq-body">
                                    ' . $faq_item['faq_content'] . '
                                </div>
                            </div>
                        </div>';
            }
        }
        echo '</div>
                </div>
            </div>
		</div>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_faq());