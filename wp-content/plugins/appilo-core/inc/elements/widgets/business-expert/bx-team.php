<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_team extends Widget_Base
{

    public function get_name()
    {
        return 'bx-team';
    }

    public function get_title()
    {
        return __('Business Expert Team', 'appilo');
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
                'default' => __('Jhon N.Holmes', 'appilo'),
            ]
        );

        $repeater->add_control(
            'team_url', [
                'label' => __('Member Link', 'appilo'),
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
            'member_designation',
            [
                'label' => __('Member Designation', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Web Developer', 'appilo'),
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
            'shape_1',
            [
                'label' => __( 'Shape 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'hover_shape',
            [
                'label' => __( 'Hover Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
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
                        'member_name' => __('Jhon N.Holmes', 'appilo'),
                    ],
                    [
                        'member_name' => __('Figg Nelson', 'appilo'),
                    ],
                    [
                        'member_name' => __('Brain Cumin', 'appilo'),
                    ],
                    [
                        'member_name' => __('Digong Marino', 'appilo'),
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
                    '{{WRAPPER}} .apbc-member-content .apbc-headline h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-member-content .apbc-headline h6',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-team-content .apbc-team-single .apbc-member-content .apbc-designation' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-team-content .apbc-team-single .apbc-member-content .apbc-designation',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Social Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-team-content .apbc-team-single .apbc-social-icons a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __('Social Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-team-content .apbc-team-single .apbc-social-icons a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'nav_btn',
            [
                'label' => __( 'Nav Button Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'active_btn',
            [
                'label' => __('Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-team-content .slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'inactive_btn',
            [
                'label' => __('Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-team-content .slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<div class="apbc-team-content">
                <div class="apbc-team-carousel">';

        if ($settings['member_list']) {
            foreach ($settings['member_list'] as $members) {

                echo '<div class="apbc-team-single">
                        <div class="apbc-img-wrapper">
                            <span class="apbc-img-shape-1">' . get_that_image($members['shape_1']) . '</span>
                            <span class="apbc-img-shape-2">' . get_that_image($members['hover_shape']) . '</span>
                            ' . get_that_image($members['member_photo']) . '
                        </div>
                        <div class="apbc-social-icons">';

                            echo '<a ' . get_that_link($members['social_link_1']) . '>';
                            Icons_Manager::render_icon($members['social_icon_1'], ['aria-hidden' => 'true']);
                            echo '</a>';
                            echo '<a ' . get_that_link($members['social_link_2']) . '>';
                            Icons_Manager::render_icon($members['social_icon_2'], ['aria-hidden' => 'true']);
                            echo '</a>';
                            echo '<a ' . get_that_link($members['social_link_3']) . '>';
                            Icons_Manager::render_icon($members['social_icon_3'], ['aria-hidden' => 'true']);
                            echo '</a>';

							echo'</div>
                        <div class="apbc-member-content">
                            <div class="apbc-headline">
                                <a ' . get_that_link($members['team_url']) . '><h6>' . $members['member_name'] . '</h6></a>
                            </div>
                            <div class="apbc-designation">
                                <span>' . $members['member_designation'] . '</span>
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

Plugin::instance()->widgets_manager->register_widget_type(new bx_team());
