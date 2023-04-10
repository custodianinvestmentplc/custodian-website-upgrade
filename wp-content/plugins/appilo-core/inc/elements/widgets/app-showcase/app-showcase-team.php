<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_team extends Widget_Base {

    public function get_name() {
        return 'app-showcase-team-members';
    }

    public function get_title() {
        return __( 'App Showcase Team', 'appilo' );
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
                'default' => __( 'Romeo Poro', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Android Developer', 'appilo' ),
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
                    'url' => get_template_directory_uri(). '/img/app-showcase/team/tm1.png',
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
        $repeater->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Bg 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/team/msbg1.png',
                ],
            ]
        );
        $repeater->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Bg 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/team/msbg2.png',
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
                        'member_name' => __( 'Romeo Poroi', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                        'animate_delay' => __( '0ms', 'appilo' ),
                    ],
                   [
                        'member_name' => __( 'Romeo Poroi', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                        'animate_delay' => __( '300ms', 'appilo' ),
                    ],
                   [
                        'member_name' => __( 'Romeo Poroi', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                        'animate_delay' => __( '600ms', 'appilo' ),
                    ],
                   [
                        'member_name' => __( 'Romeo Poroi', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                        'animate_delay' => __( '900ms', 'appilo' ),
                    ],
                 [
                        'member_name' => __( 'Romeo Poroi', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                    ],
                 [
                        'member_name' => __( 'Romeo Poroi', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                    ],
                 [
                        'member_name' => __( 'Romeo Poroi', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                    ],
                 [
                        'member_name' => __( 'Romeo Poroi', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
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
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-social a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __( 'Icon Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sc_icon_bg',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-social a',
            ]
        );
        $this->add_control(
            'icon_hover_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-social a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_hover_bg',
            [
                'label' => __( 'Icon Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sc_icon_hover_bg',
                'label' => __( 'Icon Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-social a:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'icon_box_shadow',
                'label' => __( 'Icon Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-social a',
            ]
        );
        $this->add_control(
            'circle_color',
            [
                'label' => __( 'Border Circle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'b_circle_bg',
                'label' => __( 'Border Circle', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-img:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'team_border',
                'label' => __( 'Team Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-img:after',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-text h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-pic-text .ei-team-text p',
            ]
        );
        $this->add_control(
            'nav_icon_color',
            [
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-team-section .ei-team-content .owl-nav .owl-prev, 
                    {{WRAPPER}} .ei-team-section .ei-team-content .owl-nav .owl-next' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_as5d5_bg',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-content .owl-nav .owl-prev, 
                    {{WRAPPER}} .ei-team-section .ei-team-content .owl-nav .owl-next',
            ]
        );
        $this->add_control(
            'nav_icon_hover_color',
            [
                'label' => __( 'Nav Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-team-section .ei-team-content .owl-nav .owl-prev:hover, 
                    {{WRAPPER}} .ei-team-section .ei-team-content .owl-nav .owl-next:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_hover_bg',
                'label' => __( 'Nav Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-team-section .ei-team-content .owl-nav .owl-prev:hover, 
                    {{WRAPPER}} .ei-team-section .ei-team-content .owl-nav .owl-next:hover',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .ei-team-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo'<!-- Start of team section
    ============================================= -->
<section  class="ei-team-section">
    <div class="container">
  
        <div id="ei-team-slide" class="ei-team-content owl-carousel">';
        if ( $settings['member_list'] ) {
            foreach ($settings['member_list'] as $members) {
                echo '<div class="ei-team-pic-text wow fadeFromLeft '.$members['_id'].'" data-wow-delay="'.$members['animate_delay'].'" data-wow-duration="1500ms">
                <div class="ei-team-img position-relative">
                    <div class="team-mem-img-ei text-center position-relative">
                        <img src="'.$members['member_photo']['url'].'" alt>
                        <span class="mshape-bg shape-bg1"><img src="'.$members['pattern_bg_1']['url'].'" alt></span>
                        <span class="mshape-bg shape-bg2"><img src="'.$members['pattern_bg_2']['url'].'" alt></span>
                    </div>
                    <div class="ei-team-social">';
                        echo'<a href="'.$members['social_link_1']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_1'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a href="'.$members['social_link_2']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_2'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a href="'.$members['social_link_3']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_3'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a href="'.$members['social_link_4']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_4'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                    echo'</div>
                </div>
                <div class="ei-team-text appeight-headline text-center pera-content">
                    <h3>'.$members['member_name'].'</h3>
                    <p>'.$members['member_designation'].'</p>
                </div>
            </div> ';
            }
        }
        echo'</div>
    </div>
</section>
<!-- End  of team section
    ============================================= -->';
    }





    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_team );
?>