<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_project extends Widget_Base
{

    public function get_name()
    {
        return 'bx-project';
    }

    public function get_title()
    {
        return __('Business Expert Project', 'appilo');
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
                'label' => __('Project', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'img',
            [
                'label' => __('Choose Image', 'appilo'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Marketing Data Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Banking Solution', 'appilo'),
            ]
        );
        $repeater->add_control(
            'service_url', [
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
                'label' => __('Project List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Marketing Data Research',
                    ],
                    [
                        'title' => 'Marketing Data Research',
                    ],
                    [
                        'title' => 'Marketing Data Research',
                    ],
                    [
                        'title' => 'Marketing Data Research',
                    ],
                    [
                        'title' => 'Marketing Data Research',
                    ],
                    [
                        'title' => 'Marketing Data Research',
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Title & Info Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content .apbc-pr-left h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content .apbc-pr-left h5',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content .apbc-pr-left span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content .apbc-pr-left span',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'icon_style',
            [
                'label' => __('Icon Style', 'webangon'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'icon_normal',
            [
                'label' => esc_html__('Normal', 'xltab'),
            ]
        );
        $this->add_control(
            'icon-color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content .apbc-readmore-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon-bg',
            [
                'label' => __('Icon Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content .apbc-readmore-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'icon_hover',
            [
                'label' => esc_html__('Hover', 'xltab'),
            ]
        );
        $this->add_control(
            'icon-hover-color',
            [
                'label' => __('Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content .apbc-readmore-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon-hover-bg',
            [
                'label' => __('Icon Hover Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content .apbc-readmore-btn a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'content_bg',
            [
                'label' => __('Hover Content Background', 'webangon'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'hover_content_bg',
            [
                'label' => __('Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-bottom-content .apbc-pr-column .apbc-pr-content' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<div class="apbc-bottom-content">
                <div class="row">';

        if ($settings['service_list']) {
            $index = 0;
            foreach ($settings['service_list'] as $service) {
                $index++;
                if ($index == 1) {
                    $class = 7;
                } elseif ($index == 2) {
                    $class = 5;
                } else {
                    $class = 4;
                }

                echo '<div class="col-lg-' . $class . ' col-md-' . $class . '">
                        <div class="apbc-pr-column wow  fadeInUp">
                            <div class="apbc-img-wrapper">
                               ' . get_that_image($service['img']) . '
                            </div>
                            <div class="apbc-pr-content">
                                <div class="apbc-pr-left">
                                    <a ' . get_that_link($service['service_url']) . '><h5>' . $service['title'] . '</h5></a>
                                    <a ' . get_that_link($service['service_url']) . '><span>' . $service['info'] . '</span></a>
                                </div>
                                <div class="apbc-readmore-btn">
                                    <a ' . get_that_link($service['service_url']) . '><i class="fas fa-arrow-right"></i></a>
                                </div>
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

Plugin::instance()->widgets_manager->register_widget_type(new bx_project());