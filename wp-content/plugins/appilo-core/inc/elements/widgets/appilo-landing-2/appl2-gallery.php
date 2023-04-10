<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class appl2_gallery extends Widget_Base
{

    public function get_name()
    {
        return 'appl2-gallery';
    }

    public function get_title()
    {
        return __('Appl2 Gallery', 'appilo');
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
            'testimonial_photo', [
                'label' => __('Gallery Photo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'testimonial_list',
            [
                'label' => __('Gallery List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'testimonial_photo' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'testimonial_photo' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'testimonial_photo' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'testimonial_photo' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'testimonial_photo' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                ],
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
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'counter_suffix_fonts',
                'label' => __('Item Shadow', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-gallery-slider .apl-single-gallery-item',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_active',
                'label' => __('Nav Active', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-gallery-slider .slick-dots li button',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_gen',
                'label' => __('Nav Normal', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-gallery-slider .slick-dots li.slick-active button',
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '  <div class="apl-gallery-slider wow fadeInDown">';
        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonials) {
                echo '<div class="apl-single-gallery-item">
                    ' . get_that_image($testimonials['testimonial_photo']) . '
                </div>';
            }
        }
        echo '</div>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new appl2_gallery);
?>