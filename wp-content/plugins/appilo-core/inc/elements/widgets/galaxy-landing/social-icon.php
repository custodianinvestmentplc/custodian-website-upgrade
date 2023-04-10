<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_social_icon extends Widget_Base {

    public function get_name() {
        return 'galaxy-social-icon';
    }

    public function get_title() {
        return __( 'Social Icon', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-integration';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-social-media-section .social-links li a:hover, {{WRAPPER}} .app-social-media-section .social-links li:first-child a',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'social_icon',
            [
                'label' => __( 'Counter Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook',
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
                        'counter_icon' => __( 'fab fa-facebook', 'appilo' ),
                        'social_link' => __( '#', 'appilo' ),
                    ],
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start app-social-media-section -->
                <section class="app-social-media-section">
                    <ul class="social-links">';
                        if ( $settings['social_list'] ) {
                            foreach ($settings['social_list'] as $socials) {
                                echo'<li><a href="'.$socials['social_link']['url'].'">';\Elementor\Icons_Manager::render_icon( $socials['social_icon'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                            }
                        }
                    echo'</ul>
                </section>
            <!-- end app-social-media-section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_social_icon );
?>