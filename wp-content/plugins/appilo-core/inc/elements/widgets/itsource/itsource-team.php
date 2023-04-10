<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_team extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-team';
    }

    public function get_title()
    {
        return __('iTsource Team', 'appilo');
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
                'default' => __('Digong Marino', 'appilo'),
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
        $repeater->add_control(
            'hover_shape',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
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
                        'member_name' => __('Rebecca Tylor', 'appilo'),
                    ],
                    [
                        'member_name' => __('Digong Marino', 'appilo'),
                    ],
                    [
                        'member_name' => __('Sana Gelarijon', 'appilo'),
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
                    '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-text h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-text span',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Social Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-social a i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __('Social Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-social a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_hed',
            [
                'label' => __('Footer Icon', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'footer_icon_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-text .it-nw-tm-link a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __('Footer Icon Background', 'appilo'),
                'types' => ['gradient'],
                'selector' => '{{WRAPPER}} .it-nw-tm-link a',
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
                'selector' => '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-text',
            ]
        );
        $this->add_control(
            'border-radius-img',
            [
                'label' => __( 'Image Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'border-radius',
            [
                'label' => __( 'Inner Box Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-nw-team-innerbox .it-nw-team-text',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<div class="it-nw-team-content">
				<div class="row">';

        if ($settings['member_list']) {
            foreach ($settings['member_list'] as $members) {

                echo '<div class="col-lg-3 col-md-6" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="it-nw-team-innerbox">
							<div class="it-nw-team-img position-relative">
								' . get_that_image($members['member_photo']) . '
								<span class="it-nw-tm-shape position-absolute">
								    ' . get_that_image($members['hover_shape']) . '
								</span>
								<div class="it-nw-team-social text-center">';

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
							    </div>
							<div class="it-nw-team-text headline text-center">
								<h3><a ' . get_that_link($members['team_url']) . '>' . $members['member_name'] . '</a></h3>
								<span>' . $members['member_designation'] . '</span>
								<div class="it-nw-tm-link">
									<a class="d-flex justify-content-center align-items-center" ' . get_that_link($members['team_url']) . '><i class="fas fa-plus"></i></a>
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

Plugin::instance()->widgets_manager->register_widget_type(new itsource_team);
