<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_features extends Widget_Base
{

    public function get_name()
    {
        return 'dm-features';
    }

    public function get_title()
    {
        return __('Digital Marketing Features', 'appilo');
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
                'label' => __('Features', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Great Experiences', 'appilo'),
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
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Tempor ipsum dolor sit amet loremimsu, consectetuiscing elit, sed do eiusmod.', 'appilo'),
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
                'label' => __('Features List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Great Experiences',
                    ],
                    [
                        'title' => 'Reference for Result',
                    ],
                    [
                        'title' => 'Experience Team',
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
                    '{{WRAPPER}} .app-dm-feature-innerbox .app-dm-feature-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-feature-innerbox .app-dm-feature-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-feature-text.app-dm-headline.pera-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-feature-text.app-dm-headline.pera-content p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'icon_style',
            [
                'label' => __( 'Icon Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('tpcnt');

        $this->start_controls_tab(
            'icon_normal',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
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
                    '{{WRAPPER}} .app-dm-feature-innerbox .app-dm-feature-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_color_head',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __('Icon Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .app-dm-feature-innerbox .app-dm-feature-icon i',

            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __('Icon Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bgbg',
                'label' => __('Background', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .app-dm-feature-innerbox .app-dm-feature-icon',

            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'icon_hover',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );
        $this->add_control(
            'icon_hover_color_head',
            [
                'label' => __('Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_hgggcolor',
                'label' => __('Icon Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .app-dm-feature-innerbox:hover .app-dm-feature-icon i',

            ]
        );
        $this->add_control(
            'icon_hover_bg',
            [
                'label' => __('Icon Hover Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_hover_bgbg',
                'label' => __('Background', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .app-dm-feature-innerbox .app-dm-feature-icon:before',

            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();


        $this->start_controls_section(
            'link_icon_style',
            [
                'label' => __( 'Link Icon Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcndfet');

        $this->start_controls_tab(
            'tp12',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'link_icon_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-feature-innerbox .more-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'link_icon_bg',
            [
                'label' => __('Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-feature-innerbox .more-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tp22',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );
        $this->add_control(
            'icon_hover_color_heading',
            [
                'label' => __('Hover Color', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'link_icon_hover_color',
                'label' => __('Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .app-dm-feature-innerbox .more-btn:hover a i',

            ]
        );
        $this->add_control(
            'icon_hover_bg_color_heading',
            [
                'label' => __('Hover Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'link_icon_hover_bgbg',
                'label' => __('Background', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .app-dm-feature-innerbox .more-btn:hover a',

            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();



        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        echo '<div class="app-dm-feature-content">
                    <div class="row justify-content-center">';

        if ($settings['service_list']) {
            foreach ($settings['service_list'] as $service) {

                echo '<div class="col-lg-4 col-md-6">
                    <div class="app-dm-feature-innerbox position-relative">
                        <span class="more-btn position-absolute text-center"><a ' . get_that_link($service['service_url']) . '><i class="flaticon-double-chevron"></i></a></span>
                        <div class="app-dm-feature-icon position-relative text-center">';

                Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);

                echo '</div>
                        <div class="app-dm-feature-text app-dm-headline pera-content">
                            <h3>' . $service['title'] . '</h3>
                            <p>' . $service['info'] . '</p>
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

Plugin::instance()->widgets_manager->register_widget_type(new dm_features());