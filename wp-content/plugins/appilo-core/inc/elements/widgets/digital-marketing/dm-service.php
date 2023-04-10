<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_service extends Widget_Base
{

    public function get_name()
    {
        return 'dm-service';
    }

    public function get_title()
    {
        return __('Digital Marketing Service', 'appilo');
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
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Website Development', 'appilo'),
            ]
        );
        $this->add_control(
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
        $this->add_control(
            'link-icon',
            [
                'label' => __('Link Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-right-arrow-forward',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
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
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('tpcnt');

        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-service-item-innerbox .app-dm-service-item-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-service-item-innerbox .app-dm-service-item-text h3',
            ]
        );
        $this->add_control(
            'icon_color_heading',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-service-item-innerbox .app-dm-service-item-icon i, .app-dm-service-item-innerbox .more-btn i',
            ]
        );
        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_control(
            'link_icon_bg',
            [
                'label' => __('Link Icon Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-service-item-innerbox .more-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'box-bg',
            [
                'label' => __('Service Box Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-service-item-innerbox' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );

        $this->add_control(
            'hover_title_color',
            [
                'label' => __('Hover Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-service-item-innerbox:hover h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'hover_icon_color_heading',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'hover-icon_color',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-service-item-innerbox:hover .app-dm-service-item-icon i',
            ]
        );
        $this->add_control(
            'hover_link_icon_color_heading',
            [
                'label' => __( 'Link Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'hover-link-icon_color',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-service-item-innerbox:hover .more-btn i',
            ]
        );
        $this->add_control(
            'hrereegr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_control(
            'hover_link_icon_bg',
            [
                'label' => __('Link Icon Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-service-item-innerbox:hover .more-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'hover_box_bg',
            [
                'label' => __( 'Box Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'hover-box-bg-grad',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-service-item-innerbox .hover-overlay',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="app-dm-service-item-innerbox position-relative">
                    <span class="hover-overlay"></span>
                    <div class="app-dm-service-item-icon">';
                Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);
                echo '</div>
                    <div class="app-dm-service-item-text app-dm-headline">
                        <h3><a ' . get_that_link($settings['service_url']) . '>' . $settings['title'] . '</a></h3>
                        <a class="more-btn text-center" ' . get_that_link($settings['service_url']) . '>';
        Icons_Manager::render_icon($settings['link-icon'], ['aria-hidden' => 'true']);
                echo '</a>
                    </div>
                </div>';


    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new dm_service());