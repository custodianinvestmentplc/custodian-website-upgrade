<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_team extends Widget_Base {

    public function get_name() {
        return 'app-startup-team';
    }

    public function get_title() {
        return __( 'App Startup Team', 'appilo' );
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
                'default' => __( 'Andrea Luies', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Head in Design', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_info',
            [
                'label' => __( 'Member Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'As a app web crawler to expertiy, I help to do organiiozat top of creature.', 'appilo' ),
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
                    'url' => get_template_directory_uri(). '/img/app-startup/team/tm1.jpg',
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
                    ],
                    [
                        'animate_delay' => __( '300ms', 'appilo' ),
                    ],
                    [
                        'animate_delay' => __( '600ms', 'appilo' ),
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
                    '{{WRAPPER}} .str-team-img-text .str-team-text h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_h_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-team-img-text:hover .str-team-text h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-team-img-text:hover .str-team-text h4',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-team-img-text:hover .str-team-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-team-img-text:hover .str-team-text span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-team-img-text .str-team-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'iconas_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-team-img-text .str-team-text .str-social-team a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-team-img-text .str-team-text .str-social-team a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'infobg',
            [
                'label' => __( 'Info BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'info_bg',
                'label' => __( 'Info BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .str-team-img-text:hover .str-team-text',
            ]
        );
        $this->add_control(
            'info_normal',
            [
                'label' => __( 'Team BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_bg',
                'label' => __( 'Team BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .str-team-img-text .str-team-text',
            ]
        );
        $this->add_control(
            'sn',
            [
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav',
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-team-section .str-team-member-item .owl-nav .owl-prev, {{WRAPPER}} .str-team-section .str-team-member-item .owl-nav .owl-next',
            ]
        );
        $this->add_control(
            'snh',
            [
                'label' => __( 'Slider Nav Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav_hover',
                'label' => __( 'Slider Nav Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-team-section .str-team-member-item .owl-nav .owl-prev:hover, {{WRAPPER}} .str-team-section .str-team-member-item .owl-nav .owl-next:hover',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-team-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo ' <!-- Start of member  section
            ============================================= -->
            <section  class="str-team-section">
                <div class="container">
                    <div class="str-team-content">
                        <div id="str-team-slide" class="str-team-member-item owl-carousel">';
                        if ( $settings['member_list'] ) {
                            foreach ($settings['member_list'] as $members) {
                                echo '<div class="str-team-img-text position-relative wow fadeFromLeft '.$members['_id'].'" data-wow-delay="'.$members['animate_delay'].'" data-wow-duration="1500ms">
                                <div class="str-team-img">
                                    <img src="'.$members['member_photo']['url'].'" alt>
                                </div>
                                <div class="str-team-text text-center str-headline pera-content">
                                    <h4>'.$members['member_name'].'</h4>
                                    <span>'.$members['member_designation'].'</span>
                                    <p>'.$members['member_info'].'</p>
                                    <div class="str-social-team">';
                                        echo'<a href="'.$members['social_link_1']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_1'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                                        echo'<a href="'.$members['social_link_2']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_2'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                                        echo'<a href="'.$members['social_link_3']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_3'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                                        echo'<a href="'.$members['social_link_4']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_4'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                                    echo'</div>
                                </div>
                            </div>';
                            }
                        }
                        echo'</div>
                    </div>
                </div>
            </section>
        <!-- End of member  section
            ============================================= --> ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_team );
?>