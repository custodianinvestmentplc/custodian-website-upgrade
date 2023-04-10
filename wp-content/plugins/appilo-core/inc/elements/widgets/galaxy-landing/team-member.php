<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_team_member extends Widget_Base {

    public function get_name() {
        return 'galaxy-team-member';
    }

    public function get_title() {
        return __( 'Team Member', 'appilo' );
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
            'member_name',
            [
                'label' => __( 'Member Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'James Powel', 'appilo' ),
            ]
        );
        $this->add_control(
            'member_designation',
            [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'App Developer', 'appilo' ),
            ]
        );
        $this->add_control(
            'member_photo', [
                'label' => __( 'Member Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/app-landing/team/img-1.jpg',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'social_icon',
            [
                'label' => __( 'Social Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link', [
                'label' => __( 'Social Link', 'appilo' ),
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
            'social_list',
            [
                'label' => __( 'Social List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'social_icon' => __( 'fab fa-facebook', 'appilo' ),
                        'social_link' => __( '#', 'appilo' ),
                    ],
                    [
                        'social_icon' => __( 'fab fa-twitter', 'appilo' ),
                        'social_link' => __( '#', 'appilo' ),
                    ],
                    [
                        'social_icon' => __( 'fab fa-apple', 'appilo' ),
                        'social_link' => __( '#', 'appilo' ),
                    ],
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start app-tem-members -->
                <section class="app-tem-members">
                        <div class="content app-team-grids">
                                <div class="grid">
                                    <div class="img-holder">
                                        <img src="'.$settings['member_photo']['url'].'" alt class="img-fluid">
                                    </div>
                                    <div class="details">
                                        <h3>'.$settings['member_name'].'</h3>
                                        <span class="post">'.$settings['member_designation'].'</span>
                                        <ul class="social-links">';
                                            if ( $settings['social_list'] ) {
                                                foreach ($settings['social_list'] as $socials) {
                                                    echo'<li><a href="'.$socials['social_link']['url'].'">';\Elementor\Icons_Manager::render_icon( $socials['social_icon'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                                                    }
                                            }
                                        echo'</ul>
                                    </div>
                                </div>
                        </div>
                </section>
            <!-- end app-tem-members -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_team_member );
?>