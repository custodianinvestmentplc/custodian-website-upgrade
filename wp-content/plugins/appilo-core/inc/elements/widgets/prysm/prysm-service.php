<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class prysm_services extends Widget_Base
{

    public function get_name()
    {
        return 'prysm-services';
    }

    public function get_title()
    {
        return __('Prysm Services', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'services',
            [
                'label' => __('Services', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Business Analysis', 'appilo'),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __('Service Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'learn-more',
            [
                'label' => __('Learn More', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Learn More', 'appilo'),
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
            'service_list',
            [
                'label' => __('Service List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Business Analysis',
                    ],
                    [
                        'title' => 'Business Analysis',
                    ],
                    [
                        'title' => 'Business Analysis',
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
            'service_box_style',
            [
                'label' => __('Service Style', 'appilo'),
                'type' => Controls_Manager::SELECT,
                'default' => '4',
                'options' => [
                    '4' => __('style-1', 'appilo'),
                    '6' => __('style-2', 'appilo'),
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-headline h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_hover_color',
            [
                'label' => __('Title Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-headline a:hover h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-headline h5',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-pera-txt p',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-work-column .pr1-icon-container i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __('Icon Bakground', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-work-column .pr1-icon-container i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __('Icon Size', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .pr1-work-column .pr1-icon-container i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'learn_more_color',
            [
                'label' => __('Learn More Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-readmore-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'sbg',
            [
                'label' => __('Shape Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sbgbackground',
                'label' => __('Background', 'appilo'),
                'types' => ['classic', 'gradient'],
                'selector' =>
                    '{{WRAPPER}} .pr1-work-column',

            ]
        );
        $this->add_control(
            'box_hover_clr',
            [
                'label' => __('Box Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-work-column:hover .pr1-icon-container i' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .pr1-work-column:hover .pr1-readmore-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="row">';

        if ($settings['service_list']) {

            foreach ($settings['service_list'] as $service) {

                echo '<div class="col-lg-' . $settings['service_box_style'] . '">
                <div class="pr1-work-column wow fadeInUp">
                    <div class="pr1-icon-container">';

                Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);

                echo '</div>
                    <div class="pr1-headline">
                        <a ' . get_that_link($service['link']) . '><h5>' . $service['title'] . '</h5></a>
                    </div>
                    <div class="pr1-pera-txt">
                        <p>' . $service['info'] . '</p>
                    </div>
                    <div class="pr1-readmore-btn">
                        <a ' . get_that_link($service['link']) . '>' . $service['learn-more'] . ' <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>';

            }
        }
        echo '</div>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new prysm_services);
?>