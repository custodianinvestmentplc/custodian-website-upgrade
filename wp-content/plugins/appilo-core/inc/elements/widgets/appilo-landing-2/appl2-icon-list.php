<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class appl2_icon_list extends Widget_Base
{

    public function get_name()
    {
        return 'appl2-icon-list';
    }

    public function get_title()
    {
        return __('Appl2 Icon List', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-posts-carousel';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'testimonial_list_sec',
            [
                'label' => __('Gallery List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Coming Soon', 'appilo'),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-play',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'link',
            [
                'label' => __('Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'testimonial_list',
            [
                'label' => __('Icon List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __('Content Marketing', 'appilo'),
                    ],
                    [
                        'title' => __('Content Marketing', 'appilo'),
                    ],
                    [
                        'title' => __('Content Marketing', 'appilo'),
                    ],
                    [
                        'title' => __('Content Marketing', 'appilo'),
                    ],
                    [
                        'title' => __('Content Marketing', 'appilo'),
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_content',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'text_typ',
                'label' => __('Text Font', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-video-tutorial .apl-video-column h6',
            ]
        );
        $this->add_control(
            'text_color',
            [
                'label' => __('Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-video-tutorial .apl-video-column h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-video-tutorial .apl-video-column span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __('Icon Size', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .apl-video-tutorial .apl-video-column span' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_gen',
                'label' => __('Nav Normal', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-video-tutorial .apl-video-column',
            ]
        );

        $this->add_control(
            'text_color2',
            [
                'label' => __('Text Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-video-tutorial .apl-video-column:hover h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_color2',
            [
                'label' => __('Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-video-tutorial .apl-video-column:hover span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_genaa',
                'label' => __('Nav Normal', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-video-tutorial .apl-video-column:hover',
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ' <!-- Video Tutorial -->
        <section class="apl-video-tutorial" id="video">
                <div class="row">';
        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonials) {
                echo '<div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="apl-video-column wow fadeInUp">
                            <a ' . get_that_link($testimonials['link']) . '>
                                <span>';
                Icons_Manager::render_icon($testimonials['icon'], ['aria-hidden' => 'true']);
                echo '</span>
                                <h6>' . $testimonials['title'] . '</h6>
                            </a>
                        </div>
                    </div>';
            }
        }
        echo '</div>
        </section>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new appl2_icon_list);
?>