<?php

namespace Elementor;

use Appilo_Core;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class prysm_pricing_table extends Widget_Base
{

    public function get_name()
    {
        return 'prysm-pricing-table';
    }

    public function get_title()
    {
        return __('Prysm Pricing Table', 'appilo');
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
            'pm',
            [
                'label' => __('Monthly', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $this->add_control(
            'monthly_title',
            [
                'label' => __('Table Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Monthly', 'appilo'),
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Primary Plan', 'appilo'),
            ]
        );
        $repeater->add_control(
            'price',
            [
                'label' => __('Price', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$99', 'appilo'),
            ]
        );
        $repeater->add_control(
            'unit',
            [
                'label' => __('Unit', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Monthly', 'appilo'),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'd_list',
            [
                'label' => __('Features', 'appilo'),
                'type' => Appilo_Core::LIST_CONTROL,
            ]
        );
        $repeater->add_control(
            'button',
            [
                'label' => __('Button', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Get Started', 'appilo'),
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
            'monthly_list',
            [
                'label' => __('Monthly Table', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Primary Plan',
                    ],
                    [
                        'title' => 'Basic Plan',
                    ],
                    [
                        'title' => 'Premium Plan',
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'py',
            [
                'label' => __('Yearly', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $this->add_control(
            'yearly_title',
            [
                'label' => __('Table Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Yearly', 'appilo'),
            ]
        );
        $repeater->add_control(
            'ytitle',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Primary Plan', 'appilo'),
            ]
        );
        $repeater->add_control(
            'yprice',
            [
                'label' => __('Price', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$99', 'appilo'),
            ]
        );
        $repeater->add_control(
            'yunit',
            [
                'label' => __('Unit', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Monthly', 'appilo'),
            ]
        );
        $repeater->add_control(
            'yicon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'yd_list',
            [
                'label' => __('Features', 'appilo'),
                'type' => Appilo_Core::LIST_CONTROL,
            ]
        );
        $repeater->add_control(
            'ybutton',
            [
                'label' => __('Button', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Get Started', 'appilo'),
            ]
        );
        $repeater->add_control(
            'ylink', [
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
            'yearly_list',
            [
                'label' => __('Yearly Table', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'ytitle' => 'Primary Plan',
                    ],
                    [
                        'ytitle' => 'Basic Plan',
                    ],
                    [
                        'ytitle' => 'Premium Plan',
                    ],

                ],
                'title_field' => '{{{ ytitle }}}',
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
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __('Icon Bakground', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-icon i' => 'background-color: {{VALUE}}',
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
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_hover_bg',
            [
                'label' => __('Icon Hover Bakground', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column:hover .pr1-tab-icon i' => 'background-color: {{VALUE}}',
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
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-headline h5',
            ]
        );
        $this->add_control(
            'pricing_color',
            [
                'label' => __('Pricing Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-tab-price.pr1-headline h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'unit_color',
            [
                'label' => __('Unit Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-tab-price.pr1-headline h2 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-features li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'info_icon_color',
            [
                'label' => __('Info Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-features li::before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-features li',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color',
            [
                'label' => __('Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'btn_border_clr',
                'label' => __('Button Border', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-btn a',
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg',
            [
                'label' => __('Button Hover BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-btn a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'btn_hover_border',
                'label' => __('Button Hover Border', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column .pr1-tab-btn a:hover',
            ]
        );
        $this->add_control(
            'sbg',
            [
                'label' => __('Box Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sbgbackground',
                'label' => __('Background', 'appilo'),
                'types' => ['classic'],
                'selector' =>
                    '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column',

            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __('Box Shadow', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-pricing-tab .tab-content .pr1-tab-column',
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<div class="pr1-pricing-tab wow fadeInDown">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pr1-pricing-nav text-center">
                        <ul class="nav">
                            <li><a class="active" data-toggle="pill" href="#tab_monthly">' . $settings['monthly_title'] . '</a></li>
                            <li><a data-toggle="pill" href="#tab_yearly">' . $settings['yearly_title'] . '</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_monthly">
                            <div class="row">';

        if ($settings['monthly_list']) {

            foreach ($settings['monthly_list'] as $monthly) {

                echo '<div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="pr1-tab-column">
                                        <span class="pr1-tab-icon">';

                Icons_Manager::render_icon($monthly['icon'], ['aria-hidden' => 'true']);
                echo '</span>
                                        <div class="pr1-headline">
                                            <h5>' . $monthly['title'] . ' </h5>
                                        </div>
                                        <div class="pr1-tab-price pr1-headline">
                                            <h2>' . $monthly['price'] . ' / <span>' . $monthly['unit'] . '</span></h2>
                                        </div>
                                        <div class="pr1-tab-features">
                                            <ul>';

                get_multi_list($monthly['d_list'], 'li');

                echo '</ul>
                                        </div>
                                        <div class="pr1-tab-btn">
                                            <a ' . get_that_link($monthly['link']) . '>' . $monthly['button'] . '</a>
                                        </div>
                                    </div>
                                </div>';

            }
        }
        echo '</div>
                        </div>
                        <div class="tab-pane fade" id="tab_yearly">
                            <div class="row">';

        if ($settings['yearly_list']) {

            foreach ($settings['yearly_list'] as $yearly) {

                echo '<div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="pr1-tab-column">
                                        <span class="pr1-tab-icon">';

                Icons_Manager::render_icon($yearly['yicon'], ['aria-hidden' => 'true']);
                echo '</span>
                                        <div class="pr1-headline">
                                            <h5>' . $yearly['ytitle'] . '</h5>
                                        </div>
                                        <div class="pr1-tab-price pr1-headline">
                                            <h2>' . $yearly['yprice'] . ' / <span>' . $yearly['yunit'] . '</span></h2>
                                        </div>
                                        <div class="pr1-tab-features">
                                            <ul>';

                get_multi_list($yearly['yd_list'], 'li');

                echo '</ul>
                                        </div>
                                        <div class="pr1-tab-btn">
                                            <a ' . get_that_link($yearly['ylink']) . '>' . $yearly['ybutton'] . '</a>
                                        </div>
                                    </div>
                                </div>';

            }
        }
        echo '</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new prysm_pricing_table);
?>