<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class appl2_testimonial extends Widget_Base
{

    public function get_name()
    {
        return 'appl2-testimonial';
    }

    public function get_title()
    {
        return __('Appl2 Testimonial', 'appilo');
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
                'label' => __('Testimonial List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'testimonial_photo', [
                'label' => __('Testimonial Photo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'testimonial_title',
            [
                'label' => __('Testimonial Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Reviews', 'appilo'),
            ]
        );
        $repeater->add_control(
            'testimonial_info',
            [
                'label' => __('Testimonial Info', 'appilo'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __('They have been great at replying and assinting with some of the iisues that everybody runs into with a new theme.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'testimonial_user',
            [
                'label' => __('Testimonial User', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Witter Chicago.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'feedback',
            [
                'label' => __('Testimonial Feedback', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('for Support', 'appilo'),
            ]
        );

        $this->add_control(
            'testimonial_list',
            [
                'label' => __('Testimonial List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'testimonial_user' => 'Witter Chicago.',
                    ],
                    [
                        'testimonial_user' => 'Witter Chicago.',
                    ],
                    [
                        'testimonial_user' => 'Witter Chicago.',
                    ],
                    [
                        'testimonial_user' => 'Witter Chicago.',
                    ],
                    [
                        'testimonial_user' => 'Witter Chicago.',
                    ],
                ],
                'title_field' => '{{{ testimonial_user }}}',
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
        $this->add_control(
            'testimonial_title_color',
            [
                'label' => __('Testimonial Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-review-slider-area .apl-slider-top h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_title_fonts',
                'label' => __('Testimonial Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-review-slider-area .apl-slider-top h4',
            ]
        );
        $this->add_control(
            'testimonial_info_color',
            [
                'label' => __('Testimonial Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-review-slider-area .apl-slider-txt p, {{WRAPPER}} .apl-review-slider-area .apl-slider-bottom span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_info_fonts',
                'label' => __('Testimonial Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-review-slider-area .apl-slider-txt p, {{WRAPPER}} .apl-review-slider-area .apl-slider-bottom span',
            ]
        );
        $this->add_control(
            'testimonial_user_color',
            [
                'label' => __('Testimonial User Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-review-slider-area .apl-slider-bottom h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_user_fonts',
                'label' => __('Testimonial User Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-review-slider-area .apl-slider-bottom h5',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 't_box_shadow',
                'label' => __('Testimonial Box Shadow', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-review-slider-area .apl-single-item',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 't_box_bg',
                'label' => __('Testimonial Box BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-review-slider-area .apl-single-item',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_active',
                'label' => __('Nav Active', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-review-slider-area .slick-arrow:hover, {{WRAPPER}} .apl-review-slider-area .slick-arrow:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_gen',
                'label' => __('Nav Normal', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-review-slider-area .slick-arrow',
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="apl-review-slider-area">
            <div class="apl-review-slider">';
        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonials) {
                echo '<div class="apl-single-item ' . $testimonials['_id'] . '">
                    <div class="apl-slider-top">
                        <span>' . get_that_image($testimonials['testimonial_photo']) . '</span>
                        <h4>' . $testimonials['testimonial_title'] . '</h4>
                    </div>
                    <div class="apl-slider-txt">
                        <p>' . $testimonials['testimonial_info'] . '</p>
                    </div>
                    <div class="apl-slider-bottom">
                        <h5>' . $testimonials['testimonial_user'] . '</h5>
                        <span> ' . $testimonials['feedback'] . '</span>
                    </div>
                </div>';
            }
        }
        echo ' </div>
        </div>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new appl2_testimonial);
?>