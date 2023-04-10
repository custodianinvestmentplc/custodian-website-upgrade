<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_team extends Widget_Base {

    public function get_name() {
        return 'saas-team-members';
    }

    public function get_title() {
        return __( 'SaaS Team', 'appilo' );
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
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'partner', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_title_icon',
            [
                'label' => __( 'Section Title Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-link',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our partners', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_headline',
            [
                'label' => __( 'Section Headline', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Trusted By 25,000+ Users <span>looks so awesome!!</span>', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We have spent 9 years working for one of Australia’s most recognised and successful retailers so we have many good review of works.', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'member_name',
            [
                'label' => __( 'Member Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Nicholas Thomas', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Web Developer', 'appilo' ),
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
                    'url' => get_template_directory_uri(). '/img/saas/partner/p1.jpg',
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
                        'member_name' => __( 'Phillip Macintyre', 'appilo' ),
                        'member_designation' => __( 'Web Developer', 'appilo' ),
                        'animate_delay' => __( '0ms', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Phillip Macintyre', 'appilo' ),
                        'member_designation' => __( 'Web Developer', 'appilo' ),
                        'animate_delay' => __( '300ms', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Phillip Macintyre', 'appilo' ),
                        'member_designation' => __( 'Web Developer', 'appilo' ),
                        'animate_delay' => __( '600ms', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Phillip Macintyre', 'appilo' ),
                        'member_designation' => __( 'Web Developer', 'appilo' ),
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
            'dot_animation',
            [
                'label' => __( 'Dot Animation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Deactivate', 'appilo' ),
                'return_value' => '<div class="line_animation">
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                    </div>',
                'default' => '<div class="line_animation">
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                    </div>',
            ]
        );
        $this->add_control(
            'hover_shape',
            [
                'label' => __( 'Team Hover Shape', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'hover_shape_bg',
                'label' => __( 'Hover Shape', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .partner_section .mem_img_text .mem_img_line .line_shape1, {{WRAPPER}} .partner_section .mem_img_text .mem_img_line .line_shape2',
            ]
        );
        $this->add_control(
            'glow_bg',
            [
                'label' => __( 'Team Glow BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_glow_bg',
                'label' => __( 'Team Glow BG', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .partner_section .mem_img_text .mem_pic:after',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo '<section  class="partner_section relative-position">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="section_title">
                    <div class="title_tag">
                        <div class="tag_icon text-center float-left">';
                            \Elementor\Icons_Manager::render_icon( $settings['section_title_icon'], [ 'aria-hidden' => 'true' ] );
                        echo'</div>
                        '.$settings['section_title'].'
                    </div>
                    <div class="section_title_text headline pera-content">
                        <h2>'.$settings['section_headline'].'</h2>
                    </div>
                </div>
            </div>
            <!-- /section-title -->
            <div class="col-lg-6 col-md-12">
                <div class="partner_text">
                    '.$settings['section_info'].'
                </div>
            </div>
        </div>
        <div class="partner_member">
            <div class="row">';
        if ( $settings['member_list'] ) {
            foreach ($settings['member_list'] as $members) {
                echo'<div class="col-lg-3 col-md-6  wow fadeFromLeft" data-wow-delay="'.$members['animate_delay'].'" data-wow-duration="1500ms">
                    <div class="mem_img_text">
                        <div class="mem_img_line relative-position">
                            <div class="mem_pic relative-position">
                                <img src="'.$members['member_photo']['url'].'" alt>
                                <div class="member_social ul-li">
                                    <ul>';
                                        echo'<li><a href="'.$members['social_link_1']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                                        echo'<li><a href="'.$members['social_link_2']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_2'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                                        echo'<li><a href="'.$members['social_link_3']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_3'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                                        echo'<li><a href="'.$members['social_link_4']['url'].'">';\Elementor\Icons_Manager::render_icon( $members['social_icon_4'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                                    echo'</ul>
                                </div>
                            </div>
                            <span class="line_shape1"></span>
                            <span class="line_shape2"></span>
                        </div>
                        <div class="mem_text text-center">
                            <div class="mem_name_designation headline pera-content">
                                <h4>'.$members['member_name'].'</h4>
                                <p>'.$members['member_designation'].'</p>
                            </div>
                        </div>
                    </div>
                </div>';
                 }
        }
            echo'</div>
        </div>
    </div>
    '.$settings['dot_animation'].'
</section>
            ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_team );
?>