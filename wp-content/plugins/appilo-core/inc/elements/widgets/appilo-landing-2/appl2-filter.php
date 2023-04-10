<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class appl2_filter extends Widget_Base
{

    public function get_name()
    {
        return 'appl2-filter';
    }

    public function get_title()
    {
        return __('Appl2 Filter', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-apps';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'category_list_item',
            [
                'label' => __('Demo Category List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'cat_title',
            [
                'label' => __('Category Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('SaaS', 'appilo'),
            ]
        );
        $repeater->add_control(
            'cat_id',
            [
                'label' => __('Category ID', 'appilo'),
                'type' => Controls_Manager::NUMBER,
                'default' => __('1', 'appilo'),
            ]
        );
        $this->add_control(
            'demo_cat_list',
            [
                'label' => __('Demo Category List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'cat_title' => __('SaaS', 'appilo'),
                    ], [
                        'cat_title' => __('App Landing', 'appilo'),
                    ], [
                        'cat_title' => __('Agency', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ cat_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'demo_list_item',
            [
                'label' => __('Demo List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'demo_photo', [
                'label' => __('Demo Photo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'demo_name',
            [
                'label' => __('Demo Name', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('App landing 01 (Main demo)', 'appilo'),
            ]
        );
        $repeater->add_control(
            'demo_cat_id',
            [
                'label' => __('Demo Category ID', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('1', 'appilo'),
                'placeholder' => __('1, 2, 3', 'appilo'),
            ]
        );
        $repeater->add_control(
            'demo_btn',
            [
                'label' => __('Demo Button', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('One Pages', 'appilo'),
            ]
        );
        $repeater->add_control(
            'demo_link', [
                'label' => __('Demo Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'http://appilo.themexriver.net/main',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'demo_btn_2',
            [
                'label' => __('Demo Button 2', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Multi Pages', 'appilo'),
            ]
        );
        $repeater->add_control(
            'demo_link_2', [
                'label' => __('Demo Link 2', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'http://appilo.themexriver.net/main',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'badge_photo', [
                'label' => __('Badge Photo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'availability',
            [
                'label' => __('Availability', 'appilo'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Coming Soon', 'appilo'),
                'label_off' => __('Available', 'appilo'),
                'return_value' => 'demo-coming-soon',
                'default' => '',
            ]
        );
        $this->add_control(
            'demo_list',
            [
                'label' => __('Demo List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ], [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],
                ],
                'title_field' => '{{{ demo_name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_content',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'filter_color',
            [
                'label' => __('Filter Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-demo-preview .apl-filter-navigation ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'filter_fonts',
                'label' => __('Filter Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-filter-navigation ul li',
            ]
        );
        $this->add_control(
            'filter_active',
            [
                'label' => __('Filter Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-demo-preview .apl-filter-navigation ul li.apl-active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'filter_active_bg',
                'label' => __('Active BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-filter-navigation ul li.apl-active',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'active_shadow',
                'label' => __('Active Shadow', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-filter-navigation ul li.apl-active',
            ]
        );
        $this->add_control(
            'demo_name_color',
            [
                'label' => __('Demo Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-demo-preview .apl-thumb-title h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'demo_name_fonts',
                'label' => __('Demo Name Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-thumb-title h4',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'demo_overlay',
                'label' => __('Demo Overlay', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-thumb-container::after',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'demo_shadow',
                'label' => __('Demo Shadow', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-thumb-container',
            ]
        );
        $this->add_control(
            'demo_btn_color',
            [
                'label' => __('Demo Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-demo-preview .apl-thumb-container .apl-thumb-btns a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'demo_btn_fonts',
                'label' => __('Demo Button Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-thumb-container .apl-thumb-btns a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'demo_btn_bg',
                'label' => __('Demo Button BG', 'appilo'),
                'types' => ['gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-thumb-container .apl-thumb-btns a',
            ]
        );
        $this->add_control(
            'demo_btn_color2',
            [
                'label' => __('Demo Button Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl-demo-preview .apl-thumb-container .apl-thumb-btns a.active, 
                    {{WRAPPER}} .apl-demo-preview .apl-thumb-container .apl-thumb-btns a:nth-child(1)' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'demo_btn_b2g',
                'label' => __('Demo Button BG', 'appilo'),
                'types' => ['gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apl-demo-preview .apl-thumb-container .apl-thumb-btns a.active',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __('Section Padding', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .apl-demo-preview .apl-demo-column' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<!-- Start of demo section
 ============================================= -->
    <section class="appl2-demo-filter">
        <div class="apl-demo-preview">
            <div class="apl-filter-navigation" id="filter-1">
             <ul>';
        if ($settings['demo_cat_list']) {
            echo '<li class="apl-filter-btn apl-active" data-filter="all">All</li>';
            foreach ($settings['demo_cat_list'] as $demo_category) {
                echo '<li id="' . $demo_category['_id'] . '" class="apl-filter-btn ' . $cls . '" data-filter="' . $demo_category['cat_id'] . '">' . $demo_category['cat_title'] . '</li>';
            }
        }
        echo '</ul>
             </div>
                <div class="row filter-container apl-filter-1">';
        if ($settings['demo_list']) {
            foreach ($settings['demo_list'] as $demo) {
                $demo_link_1 = get_that_link($demo['demo_link']);
                $demo_link_2 = get_that_link($demo['demo_link_2']);

                echo '<div id="' . $demo['_id'] . '" class="col-lg-4 col-md-6 filtr-item" data-category="' . $demo['demo_cat_id'] . '">
                        <div class="apl-demo-column ' . $demo['availability'] . ' text-center wow fadeInUp">
                            <div class="apl-thumb-container">
                                <span class="apl-badge">' . get_that_image($demo['badge_photo']) . '</span>
                                ' . get_that_image($demo['demo_photo']) . '
                                <div class="apl-thumb-btns">
                                    <div class="apl-btns-container">';
                if (!empty($demo['demo_btn'])) {
                    if (empty($demo['demo_btn_2'])){
                        $class = "landing-page-2-btn-bg";
                        echo '<a class='. $class .' ' . $demo_link_1 . '>' . $demo['demo_btn'] . '</a>';
                    }else{
                        echo '<a ' . $demo_link_1 . '>' . $demo['demo_btn'] . '</a>';
                    }
                }
                if (!empty($demo['demo_btn_2'])) {
                    echo '<a ' . $demo_link_2 . '>' . $demo['demo_btn_2'] . '</a>';
                }
                echo '</div>
                                </div>
                            </div>
                            <div class="apl-thumb-title">
                                <h4><a ' . $demo_link_1 . '>' . $demo['demo_name'] . '</a></h4>
                            </div>
                        </div>
                    </div>';
            }
        }
        echo '</div>
            </div>
    </section>
<!-- End of demo section
    ============================================= -->';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new appl2_filter());
?>