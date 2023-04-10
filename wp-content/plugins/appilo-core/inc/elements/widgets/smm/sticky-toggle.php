<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class smm_toggle extends Widget_Base
{

    public function get_name()
    {
        return 'smm-toggle';
    }

    public function get_title()
    {
        return __('SMM Toggle', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-menu-bar';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'toggle_open',
            [
                'label' => __('Toggle Open Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $this->add_control(
            'toggle_close',
            [
                'label' => __('Toggle Close Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $this->add_control(
            'logo', [
                'label' => __('Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'logo_link', [
                'label' => __('Logo Link', 'appilo'),
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
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyert et eirmod tempor invidunt ut labore et ert dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et cer justo duo dolores et berr ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor.', 'appilo'),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sm-side_inner_content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'bottom_txt',
            [
                'label' => __('Bottom Text', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Copyright By @ ThemeXriver', 'appilo'),
            ]
        );
        $this->add_control(
            'bottom_txt_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sm-side_inner_content .side_copywright' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'image_lists',
            [
                'label' => __('Image List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'gallery_title',
            [
                'label' => __('Gallery Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Our Gallery', 'appilo'),
            ]
        );
        $this->add_control(
            'gallery_title_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sm-side_inner_content .side_contact .smm-sidebar-gallary h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'image', [
                'label' => __('Image', 'appilo'),
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
            'image_list',
            [
                'label' => __('Image Gallery', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],

                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'social_lists',
            [
                'label' => __('Social List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'social_title',
            [
                'label' => __('Social List Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Follow Us On:', 'appilo'),
            ]
        );
        $this->add_control(
            'social_title_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sm-side_inner_content .side_contact .social_widget h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            's_icon',
            [
                'label' => __('Social Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            's_link', [
                'label' => __('Social Link', 'appilo'),
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
            'social_list',
            [
                'label' => __('Social List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        's_link' => '#',
                    ],
                    [
                        's_link' => '#',
                    ],
                    [
                        's_link' => '#',
                    ],
                    [
                        's_link' => '#',
                    ],

                ],
            ]
        );

        $this->add_control(
            'social_icon_color',
            [
                'label' => __('Social Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sm-side_inner_content .side_contact .social_widget li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __('Icon BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .sm-side_inner_content .side_contact .social_widget li',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'sidebar_style',
            [
                'label' => __('Sidebar Style', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'mbcasdslogo',
            [
                'label' => __('Sidebar Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sb_bg',
                'label' => __('Sidebar BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .smm-sidebar-inner.wide_side_on .sm-side_inner_content',
            ]
        );
        $this->add_responsive_control(
            'sb_visibility',
            [
                'label' => __('Visibility', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 4,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .smm-sidebar-inner.wide_side_on .sm-side_inner_content' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'style_switcher_1',
            [
                'label' => __('Style Switcher', 'appilo'),
                'type' => Controls_Manager::SELECT,
                'multiple' => true,
                'options' => [
                    'style1' => __('Style 1', 'appilo'),
                    'style2' => __('Style 2', 'appilo'),
                ],
                'default' => 'style1',
            ]
        );
        $this->add_control(
            'toggle_open_color',
            [
                'label' => __('Toggle Open Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .smm-side-bar-toggle i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'toggle_open_font',
                'label' => __('Toggle Open Font', 'plugin-domain'),
                'selector' => '{{WRAPPER}} .smm-side-bar-toggle i',
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __('Toggle Open Border', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'toggle_border1',
                'label' => __('Toggle Border Radius', 'appilo'),
                'selector' => '{{WRAPPER}} .smm-side-bar-toggle:before',
            ]
        );
        $this->add_responsive_control(
            'toggle_border_radius1',
            [
                'label' => __('Toggle Border Radius', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mbcb',
            [
                'label' => __('Toggle Open Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'toggle_bg',
                'label' => __('Toggle BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .smm-side-bar-toggle:before',
            ]
        );
        $this->add_responsive_control(
            'toggle_bg_width',
            [
                'label' => __('Background Width', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle:before' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'toggle_bg_height',
            [
                'label' => __('Background Height', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle:before' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'toggle_sb_positions',
            [
                'label' => __('Background Top Position', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle:before' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'toggle_bottom_positions',
            [
                'label' => __('Background Bottom Position', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle:before' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'toggle_b_bg',
                'label' => __('Toggle Bottom BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .smm-side-bar-toggle',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'toggle_border',
                'label' => __('Toggle Border', 'appilo'),
                'selector' => '{{WRAPPER}} .smm-side-bar-toggle',
            ]
        );
        $this->add_responsive_control(
            'toggle_border_radius',
            [
                'label' => __('Toggle Border Radus', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'toggle_close_color',
            [
                'label' => __('Toggle Close Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sm-side_inner_content .close_btn svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .sm-side_inner_content .close_btn i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'asad',
            [
                'label' => __('Toggle Close Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'toggle_c_bg',
                'label' => __('Toggle BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .sm-side_inner_content .close_btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'toggle_ch_bg',
                'label' => __('Toggle BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .sm-side_inner_content .close_btn:hover',
            ]
        );
        $this->add_responsive_control(
            'z_index',
            [
                'label' => __('Z-Index', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 10,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle' => 'z-index: {{SIZE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sb_positions',
            [
                'label' => __('Position up/down', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sb_positions_l',
            [
                'label' => __('Position left/right', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .smm-side-bar-toggle' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'overlay',
                'label' => __('Overlay BG', 'appilo'),
                'types' => ['classic', 'gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .smm-sidebar-inner .side_overlay',
            ]
        );
        $this->add_responsive_control(
            'section_margin',
            [
                'label' => __('Section Margin', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .smm-sidebar-toggle-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __('Section Padding', 'appilo'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .smm-sidebar-toggle-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $style = $settings['style_switcher_1'];
        if ($style == 'style1') {
            echo '<!-- Start toggle section
        ============================================= -->        
        <div  class="smm-sidebar-toggle-section">
            <div class="smm-side-bar-toggle smm-side-toggle-btn">';
            Icons_Manager::render_icon($settings['toggle_open'], ['aria-hidden' => 'true']);
            echo '</div>
            <div class="smm-sidebar-inner">
                <div class="side_overlay smm-side-toggle-btn"></div>
                <div class="sm-side_inner_content">
                    <div class="close_btn smm-side-toggle-btn">';
            Icons_Manager::render_icon($settings['toggle_close'], ['aria-hidden' => 'true']);
            echo '</div>
                    <div class="side_inner_logo">
                        <a class="smm-logo-1" ' . get_that_link($settings['logo_link']) . '>
                                <img src="' . $settings['logo']['url'] . '" alt />
                        </a>
                    </div>
                    <p>
                        ' . $settings['info'] . '
                    </p>
                    <div class="side_contact">
                        <div class="smm-sidebar-gallary clearfix ul-li">
                            <h3> ' . $settings['gallery_title'] . '</h3>
                            <ul>';
            if ($settings['image_list']) {
                foreach ($settings['image_list'] as $image) {
                    $image_link = get_that_link($image['link']);
                    echo '<li><a ' . $image_link . '><img src="' . $image['image']['url'] . '" alt></a></li>';
                }
            }
            echo '</ul>
                        </div>

                        <div class="social_widget ul-li smm-headline relative-position">
                            <h3> ' . $settings['social_title'] . '</h3>
                            <ul>';
            if ($settings['social_list']) {
                foreach ($settings['social_list'] as $social) {
                    $social_link = get_that_link($social['s_link']);
                    echo '<li class="h-fb"><a ' . $social_link . '>';
                    Icons_Manager::render_icon($social['s_icon'], ['aria-hidden' => 'true']);
                    echo '</a></li>';
                }
            }
            echo '</ul>
                        </div>
                        <div class="side_copywright text-center">
                            ' . $settings['bottom_txt'] . '
                        </div>
                    </div>
                </div>
            </div>
            </div>
    <!-- End of Brand logo section
        ============================================= -->';
        } else {
            echo '<!-- Start toggle section
        ============================================= -->        
        <div  class="smm-sidebar-toggle-section">
            <div class="smm-side-bar-toggle smm-side-toggle-btn prysm-side-bar-toggle">';
            Icons_Manager::render_icon($settings['toggle_open'], ['aria-hidden' => 'true']);
            echo '</div>
            <div class="smm-sidebar-inner">
                <div class="side_overlay smm-side-toggle-btn"></div>
                <div class="sm-side_inner_content">
                    <div class="close_btn smm-side-toggle-btn">';
            Icons_Manager::render_icon($settings['toggle_close'], ['aria-hidden' => 'true']);
            echo '</div>
                    <div class="side_inner_logo">
                        <a class="smm-logo-1" ' . get_that_link($settings['logo_link']) . '>
                                <img src="' . $settings['logo']['url'] . '" alt />
                        </a>
                    </div>
                    <p>
                        ' . $settings['info'] . '
                    </p>
                    <div class="side_contact">
                        <div class="smm-sidebar-gallary clearfix ul-li">
                            <h3> ' . $settings['gallery_title'] . '</h3>
                            <ul>';
            if ($settings['image_list']) {
                foreach ($settings['image_list'] as $image) {
                    $image_link = get_that_link($image['link']);
                    echo '<li><a ' . $image_link . '><img src="' . $image['image']['url'] . '" alt></a></li>';
                }
            }
            echo '</ul>
                        </div>

                        <div class="social_widget ul-li smm-headline relative-position">
                            <h3> ' . $settings['social_title'] . '</h3>
                            <ul>';
            if ($settings['social_list']) {
                foreach ($settings['social_list'] as $social) {
                    $social_link = get_that_link($social['s_link']);
                    echo '<li class="h-fb"><a ' . $social_link . '>';
                    Icons_Manager::render_icon($social['s_icon'], ['aria-hidden' => 'true']);
                    echo '</a></li>';
                }
            }
            echo '</ul>
                        </div>
                        <div class="side_copywright text-center">
                            ' . $settings['bottom_txt'] . '
                        </div>
                    </div>
                </div>
            </div>
            </div>
    <!-- End of Brand logo section
        ============================================= -->';
        }

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new smm_toggle);
?>