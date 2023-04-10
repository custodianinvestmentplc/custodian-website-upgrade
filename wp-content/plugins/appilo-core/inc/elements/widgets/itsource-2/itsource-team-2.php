<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_team_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_team_2';
    }

    public function get_title()
    {
        return __('ItSource Team 2', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-scroll';
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'itsource_about_right_content',
            [
                'label' => __('Team Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Anything On Your Mind', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Tell Us Your Estimate Planning With Small Details', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'circle_shape_1',
            [
                'label' => esc_html__( 'Circle Shape 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'circle_shape_2',
            [
                'label' => esc_html__( 'Circle Shape 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'team_section_content',
            [
                'label' => esc_html__( 'Team Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        /* Start repeater */

        $repeater = new \Elementor\Repeater();
        $repeater_links = new \Elementor\Repeater();
        $repeater->add_control(
            'image',
            [
                'label' => esc_html__( 'Team Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'name',
            [
                'label' => esc_html__( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $repeater->add_control(
            'designation',
            [
                'label' => esc_html__( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'social_icon_1',
            [
                'label' => esc_html__( 'Social Icon 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_1_url',
            [
                'label' => esc_html__( 'Social Link 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'social_icon_2',
            [
                'label' => esc_html__( 'Social Icon 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_2_url',
            [
                'label' => esc_html__( 'Social Link 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'social_icon_3',
            [
                'label' => esc_html__( 'Social Icon 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_3_url',
            [
                'label' => esc_html__( 'Social Link 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'social_icon_4',
            [
                'label' => esc_html__( 'Social Icon 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_4_url',
            [
                'label' => esc_html__( 'Social Link 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'team_items',
            [
                'label' => esc_html__( 'Team Items', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'default' => [
                    [
                        'name' => esc_html__( 'Rosalina D. William', 'appilo' ),
                        'designation' => esc_html__( 'Founder', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Miradaba H. Halim', 'appilo' ),
                        'designation' => esc_html__( 'CEO', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Yellow Daddy Yanke', 'appilo' ),
                        'designation' => esc_html__( 'Designer', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Piranma H. Hilixer', 'appilo' ),
                        'designation' => esc_html__( 'Developer', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Maronda M. Makuram', 'appilo' ),
                        'designation' => esc_html__( 'Marketer', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'team_section_style',
            [
                'label' => __('Team Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__('Container Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'section_bg_color',
            [
                'label' => esc_html__('Section BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-team-section-one' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'tag_color',
            [
                'label' => esc_html__('Tag Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tag_typo',
                'label' => esc_html__('Tag Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title-style-two h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .title-style-two h2',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'team_member_style',
            [
                'label' => __('Team Member Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'image_overlay_bg',
            [
                'label' => esc_html__('Image Overlay Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-img:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'designation_color',
            [
                'label' => esc_html__('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-text .t-degi' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_typo',
                'label' => esc_html__('Designation Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-text .t-degi',
            ]
        );

        $this->add_control(
            'Name_color',
            [
                'label' => esc_html__('Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-text h3' => 'color: {{VALUE}};',
                    ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Name_typo',
                'label' => esc_html__('Name Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-text h3',
            ]
        );
        $this->add_control(
            'Social_Icon_color',
            [
                'label' => esc_html__('Social Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-text li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Social_Icon_Hover_color',
            [
                'label' => esc_html__('Social Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-text li:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'border_color',
            [
                'label' => esc_html__('Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-text:after' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-team-thx-it-member-1 .thx-it-team-thx-it-member-imgtext .thx-it-team-text h3:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();





    }

    protected function render()
    {
    $settings = $this->get_settings_for_display();

    ?>
<!-- Start of team section
============================================= -->
<div id="thx-it-team-1" class="thx-it-team-section-one">
    <div class="container container-1200">
        <div class="section-title title-style-two headline-2 text-center">
            <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
            <h2><?php echo $settings['title']; ?></h2>
        </div>
        <div class="thx-it-team-thx-it-member-1 relative-position">
        <?php
            foreach ($settings['team_items'] as $team):;
        ?>
                <div class="thx-it-team-thx-it-member-imgtext">
                    <div class="thx-it-team-img">
                        <img src="<?php echo $team['image']['url']; ?>" alt="">
                    </div>
                    <div class="thx-it-team-text headline-2 ul-li">
                        <span class="t-degi"><?php echo $team['designation']; ?></span>
                        <h3>
                            <?php echo $team['name']; ?>
                        </h3>

                        <ul>

                                <?php if (isset($team['social_icon_1'])):; ?>
                                <li>
                                <a href="<?php echo $team['social_icon_1_url']['url']; ?>">
                                    <?php \Elementor\Icons_Manager::render_icon($team['social_icon_1'], ['aria-hidden' => 'true']); ?>
                                </a>
                                </li>
                                <?php endif; ?>

                                <?php if (isset($team['social_icon_2'])):; ?>
                                <li>
                                    <a href="<?php echo $team['social_icon_2_url']['url']; ?>">
                                        <?php \Elementor\Icons_Manager::render_icon($team['social_icon_2'], ['aria-hidden' => 'true']); ?>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if (isset($team['social_icon_3'])):; ?>
                                <li>
                                    <a href="<?php echo $team['social_icon_3_url']['url']; ?>">
                                        <?php \Elementor\Icons_Manager::render_icon($team['social_icon_3'], ['aria-hidden' => 'true']); ?>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if (isset($team['social_icon_4'])):; ?>
                                <li>
                                    <a href="<?php echo $team['social_icon_4_url']['url']; ?>">
                                        <?php \Elementor\Icons_Manager::render_icon($team['social_icon_4'], ['aria-hidden' => 'true']); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                        </ul>
                    </div>
                </div>
            <?php
            endforeach;
        ?>

            <div class="circle-shape circle-shape1" data-parallax='{"x" : 70}'><img src="<?php echo $settings['circle_shape_1']['url']; ?>" alt=""></div>
            <div class="circle-shape circle-shape2" data-parallax='{"x" : -70}'><img src="<?php echo $settings['circle_shape_2']['url']; ?>" alt=""></div>
        </div>
    </div>
</div>
<!-- End of team section
    ============================================= -->

    <?php
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_team_2());
?>