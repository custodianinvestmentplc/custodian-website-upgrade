<?php
namespace Elementor;

use WP_Bootstrap_Navwalker;if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hero_slider_three extends Widget_Base {

    public function get_name() {
        return 'galaxy-hero-slider-three';
    }

    public function get_title() {
        return __( 'Hero Slider Three', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slider-device';
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
                'default' => __( 'home', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_heading',
            [
                'label' => __( 'Slider Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Hi, This is Noah', 'appilo' ),
            ]
        );
        $this->add_control(
            'person_photo', [
                'label' => __( 'Person Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/cv/me.jpg',
                ],
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Slider Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Web', 'appilo' ),
            ]
        );
        $this->add_control(
            'typed_element',
            [
                'label' => __( 'Typed Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'website|
                                  popular|
                                  responsive|', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'social_icon',
            [
                'label' => __( 'Social Icon', 'appilo' ),
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

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'overlay_hero',
                'label' => __( 'Overlay Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '.home-cv .hero:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'photo_bg',
                'label' => __( 'Photo Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '.home-cv .hero .personal-pic:before',
            ]
        );
        $this->add_control(
            'slider_bg', [
                'label' => __( 'Slider Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/cv/hero-bg.jpg',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo'<!-- start of hero -->
                <section class="hero agency-hero parallax" data-bg-image="'.$settings['slider_bg']['url'].'" data-speed="3">
                    <div class="container">
                        <div class="row">
                            <div class="personal-pic">
                                <img src="'.$settings['person_photo']['url'].'" alt class="img-fluid">
                            </div>
                            <h2>'.$settings['slider_heading'].'</h2>
                            <div>
                                <h1>'.$settings['slider_info'].'
                                    <span class="cv-typed-element animate-typing"
                                          data-animate-loop="true"
                                          data-type-speed="200"
                                          data-type-delay="200"
                                          data-remove-speed="50"
                                          data-remove-delay="500"
                                          data-cursor-speed="200">
                                                '.$settings['typed_element'].'
                                          </span>
                                </h1>
                            </div>
                            <ul class="social-links">';
                                if ( $settings['social_list'] ) {
                                    foreach ($settings['social_list'] as $socials) {
                                        echo'<li><a href="'.$socials['social_link']['url'].'">';\Elementor\Icons_Manager::render_icon( $socials['social_icon'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                                    }
                                }
                            echo'</ul>
                        </div>
                    </div> <!-- end container -->
                </section>
            <!-- end of hero slider -->';
{ ?>
    <div class="menu-after-slider">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-collapse collapse navigation-holder">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'menu_id'        => '',
                            'depth'           => 4,
                            'container'     => 'ul',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'   => false,
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );?>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </div>
   <?php }
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hero_slider_three );
?>
