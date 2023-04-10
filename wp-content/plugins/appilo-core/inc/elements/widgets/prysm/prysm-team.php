<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class prysm_team extends Widget_Base
{

    public function get_name()
    {
        return 'prysm-team';
    }

    public function get_title()
    {
        return __('Prysm Team', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-person';
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

        $repeater = new Repeater();
        $repeater->add_control(
            'member_name',
            [
                'label' => __('Member Name', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Rebecca Tylor', 'appilo'),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __('Member Designation', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Consultant', 'appilo'),
            ]
        );
        $repeater->add_control(
            'member_photo', [
                'label' => __('Member Photo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_1',
            [
                'label' => __('Social Icon 1', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_1', [
                'label' => __('Social Link 1', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_2',
            [
                'label' => __('Social Icon 2', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-behance',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_2', [
                'label' => __('Social Link 2', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_3',
            [
                'label' => __('Social Icon 3', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_3', [
                'label' => __('Social Link 3', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'team_btn',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Explore More', 'appilo'),
            ]
        );
        $repeater->add_control(
            'team_url', [
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
            'member_list',
            [
                'label' => __('Member List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __('Rebecca Tylor', 'appilo'),
                    ],
                    [
                        'member_name' => __('Rebecca Tylor', 'appilo'),
                    ],
                    [
                        'member_name' => __('Rebecca Tylor', 'appilo'),
                    ],
                    [
                        'member_name' => __('Rebecca Tylor', 'appilo'),
                    ],
                    [
                        'member_name' => __('Rebecca Tylor', 'appilo'),
                    ],
                    [
                        'member_name' => __('Rebecca Tylor', 'appilo'),
                    ],

                ],
                'title_field' => '{{{ member_name }}}',
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
            'des_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-team-slider .pr1-team-single .pr1-team-slider-right span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-team-slider .pr1-team-single .pr1-team-slider-right span',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-team-slider .pr1-team-single .pr1-team-slider-right .pr1-team-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-team-slider .pr1-team-single .pr1-team-slider-right .pr1-team-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_hed',
            [
                'label' => __('Button Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __('Button Background', 'appilo'),
                'types' => ['classic'],
                'selector' => '{{WRAPPER}} .pr1-team-slider .pr1-team-single .pr1-team-slider-right .pr1-team-btn a',
            ]
        );
        $this->add_control(
            'btn_hover_bg_',
            [
                'label' => __('Button Hover Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_h_bg',
                'label' => __('Button Background', 'appilo'),
                'types' => ['classic'],
                'selector' => '{{WRAPPER}} .pr1-team-slider .pr1-team-single .pr1-team-slider-right .pr1-team-btn a:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __('Button Border', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-team-slider .pr1-team-single .pr1-team-slider-right .pr1-team-btn a',
            ]
        );
        $this->add_control(
            'iconas_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-team-social a i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __('Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-team-social a i:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'info_normal',
            [
                'label' => __('Team BG', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_bg',
                'label' => __('Team BG', 'appilo'),
                'types' => ['classic'],
                'selector' => '{{WRAPPER}} .pr1-team-slider .pr1-team-single.slick-slide',
            ]
        );
        $this->add_control(
            'sn',
            [
                'label' => __('Slider Nav BG', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav',
                'label' => __('Slider Nav BG', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pr1-team-slider .slick-dots li button',
            ]
        );
        $this->add_control(
            'slider_nav_active_head',
            [
                'label' => __('Slider Nav Active', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav_active',
                'label' => __('Slider Nav Active', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pr1-team-slider .slick-dots li.slick-active button',
            ]
        );
        $this->add_control(
            'img_overlay_bg_',
            [
                'label' => __('Image Overlay', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'img_overlay',
                'label' => __('image overlay', 'appilo'),
                'types' => ['classic'],
                'selector' => '{{WRAPPER}} .pr1-team-slider .pr1-team-single .pr1-team-slider-left .pr1-team-thumb .pr1-team-social',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<!-- Team Section -->
        <section class="pr1-team-section">

                <div class="pr1-team-content">
                    <div class="pr1-team-slider">';
        if ($settings['member_list']) {
            foreach ($settings['member_list'] as $members) {
                echo '<div class="pr1-team-single">
                            <div class="pr1-team-slider-left">
                                <div class="pr1-team-thumb">
                                    <div class="pr1-team-social">';
                echo '<a href="' . $members['social_link_1']['url'] . '">';
                Icons_Manager::render_icon($members['social_icon_1'], ['aria-hidden' => 'true']);
                echo '</a>';
                echo '<a href="' . $members['social_link_2']['url'] . '">';
                Icons_Manager::render_icon($members['social_icon_2'], ['aria-hidden' => 'true']);
                echo '</a>';
                echo '<a href="' . $members['social_link_3']['url'] . '">';
                Icons_Manager::render_icon($members['social_icon_3'], ['aria-hidden' => 'true']);
                echo '</a>';
                echo '</div>
                                    ' . get_that_image($members['member_photo']) . '
                                </div>
                            </div>
                            <div class="pr1-team-slider-right text-center">
                                <div class="pr1-headline">
                                    <a href="#"><h5>' . $members['member_name'] . '</h5></a>
                                    <span>' . $members['member_designation'] . '</span>
                                </div>
                                <div class="pr1-team-btn">
                                    <a ' . get_that_link($members['team_url']) . '>' . $members['team_btn'] . '</a>
                                </div>
                            </div>
                        </div>';
            }
        }
        echo '</div>
                </div>
        </section>
        <!-- Team Section End -->';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new prysm_team);
?>