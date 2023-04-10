<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class prysm_case_studie extends Widget_Base
{

    public function get_name()
    {
        return 'prysm-studie';
    }

    public function get_title()
    {
        return __('Prysm Case Studies', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-slider-device';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'case_studies',
            [
                'label' => __('Case Studies', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Business Consulting', 'appilo'),
            ]
        );
        $repeater->add_control(
            'photo', [
                'label' => __('Photo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __('Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'study_list',
            [
                'label' => __('Study List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __('Business Consulting', 'appilo'),
                    ],
                    [
                        'title' => __('Business Consulting', 'appilo'),
                    ],
                    [
                        'title' => __('Business Consulting', 'appilo'),
                    ],

                ],
                'title_field' => '{{{ title }}}',
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
                    '{{WRAPPER}} .pr1-pf-column .pr1-pf-overlay a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-pf-column .pr1-pf-overlay a',
            ]
        );
        $this->add_control(
            'overlay_bg_c',
            [
                'label' => __('Overlay Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'overlay_bg',
                'label' => __('Overlay Background', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pr1-pf-column .pr1-pf-overlay',
            ]
        );
        $this->add_control(
            'case_box_bg_head',
            [
                'label' => __('Background Border Color', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'case_box_bg',
                'label' => __('Background', 'appilo'),
                'types' => ['gradient'],
                'selector' => '{{WRAPPER}} .pr1-pf-column .pr1-img-container',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<div class="pr1-portfolio-content">
                    <div class="row">';

        if ($settings['study_list']) {
            foreach ($settings['study_list'] as $study) {


                echo '<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="pr1-pf-column wow fadeInUp" data-wow-delay="0.1s">
                                <div class="pr1-img-container">
                                    <div class="pr1-img-wrapper">
                                        <img src="' . $study['photo']['url'] . '" alt="">
                                    </div>
                                </div>
                                <div class="pr1-pf-overlay">
                                    <a ' . get_that_link($study['link']) . '>
                                        <i class="fas fa-link"></i>
                                        <span>' . $study['title'] . '</span>
                                    </a>
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

Plugin::instance()->widgets_manager->register_widget_type(new prysm_case_studie);
?>