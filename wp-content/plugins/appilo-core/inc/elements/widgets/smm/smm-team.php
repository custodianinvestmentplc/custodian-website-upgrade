<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class smm_team extends Widget_Base {

    public function get_name() {
        return 'smm-members';
    }

    public function get_title() {
        return __( 'SMM Team', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-person';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'member_name',
            [
                'label' => __( 'Member Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Alex D. Darilin', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Founder', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'team_url',
            [
                'label' => __( 'Team Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '0ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_photo', [
                'label' => __( 'Member Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/smm/team/tm1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_1',
            [
                'label' => __( 'Social Icon 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_1', [
                'label' => __( 'Social Link 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
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
                'label' => __( 'Social Icon 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-behance',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_2', [
                'label' => __( 'Social Link 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
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
                'label' => __( 'Social Icon 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_3', [
                'label' => __( 'Social Link 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_4',
            [
                'label' => __( 'Social Icon 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_4', [
                'label' => __( 'Social Link 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
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
                'label' => __( 'Member List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'animate_delay' => __( '0ms', 'appilo' ),
                    ],[
                        'animate_delay' => __( '300ms', 'appilo' ),
                    ],[
                        'animate_delay' => __( '600ms', 'appilo' ),
                    ],[
                        'animate_delay' => __( '900ms', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-team-innerbox .smm-team-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_h_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-team-innerbox:hover .smm-team-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-team-innerbox .smm-team-text h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-team-innerbox .smm-team-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'des_h_color',
            [
                'label' => __( 'Designation Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-team-innerbox:hover .smm-team-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-team-innerbox .smm-team-text span',
            ]
        );
        $this->add_control(
            'contact_icon_color',
            [
                'label' => __( 'Contact Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-team-innerbox .smm-team-img .smm-member-social a i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'contact_icon_h_color',
            [
                'label' => __( 'Hover Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-team-innerbox .smm-team-img .smm-member-social a:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'label' => __( 'Image Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-team-innerbox .smm-team-img img',
            ]
        );
        $this->add_control(
            'social_bg',
            [
                'label' => __( 'Team Social BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_socials_bg',
                'label' => __( 'Team Social BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .smm-team-innerbox .smm-team-img .smm-member-social a, 
                {{WRAPPER}} .smm-team-innerbox .smm-team-img:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_social_bg',
                'label' => __( 'Team Social BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .smm-team-innerbox .smm-team-img .smm-member-social a:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-team-innerbox',
            ]
        );
        $this->add_control(
            'main_bg',
            [
                'label' => __( 'Team Box BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_main_bg',
                'label' => __( 'Team Box BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .smm-team-innerbox',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_main_hover_bg',
                'label' => __( 'Team Box Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .smm-team-innerbox:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Section Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .smm-team-section',
            ]
        );
        $this->add_responsive_control(
            'wrapper_margin',
            [
                'label' => __( 'Wrapper Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .smm-team-member-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .smm-team-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of Team section
    ============================================= -->         
    <section  class="smm-team-section">
        <div class="container">
            <div class="smm-team-member-wrapper">
                <div class="row">';
        if ( $settings['member_list'] ) {
            foreach ($settings['member_list'] as $members) {

                $team_url = get_that_link($members['team_url']);
                $social_url_1 = get_that_link($members['social_link_1']);
                $social_url_2 = get_that_link($members['social_link_2']);
                $social_url_3 = get_that_link($members['social_link_3']);
                $social_url_4 = get_that_link($members['social_link_4']);

            echo'<div class="col-lg-3 col-md-6  wow fadeFromUp" data-wow-delay="'.$members['animate_delay'].'" data-wow-duration="1500ms">
                        <div class="smm-team-innerbox text-center">
                            <div class="smm-team-img position-relative">
                                <img src="'.$members['member_photo']['url'].'" alt>
                                <div class="smm-member-social">';
                        echo'<a '. $social_url_1 .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_1'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a '. $social_url_2 .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_2'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a '. $social_url_3 .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_3'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a '. $social_url_4 .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_4'], [ 'aria-hidden' => 'true' ] );echo'</a>';

                        echo'</div>
                            </div>
                            <div class="smm-team-text smm-headline">
                                <span>'.$members['member_designation'].'</span>
                                <h3><a '.$team_url.'>'.$members['member_name'].'</a></h3>
                            </div>
                        </div>
                    </div>';
            }
        }
        echo'</div>
            </div>
        </div>
    </section>
<!-- End of Team section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new smm_team );
?>