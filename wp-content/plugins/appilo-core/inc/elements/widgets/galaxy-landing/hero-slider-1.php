<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hero_slider_one extends Widget_Base {

    public function get_name() {
        return 'galaxy-hero-slider-one';
    }

    public function get_title() {
        return __( 'Hero Slider One', 'appilo' );
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
                'default' => __( 'Power Saver System Management', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get <span>galaxy</span> App For The Best Service', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_one',
            [
                'label' => __( 'Slider Button One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Download from', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_one_icon',
            [
                'label' => __( 'Slider Button One Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'slider_btn_one_url', [
                'label' => __( 'Slider Button One Link', 'appilo' ),
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
            'slider_btn_two',
            [
                'label' => __( 'Slider Button Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Download from', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_two_icon',
            [
                'label' => __( 'Slider Button Two Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-windows',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'slider_btn_two_url', [
                'label' => __( 'Slider Button Two Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
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
                'name' => 'slider_overlay',
                'label' => __( 'Overlay Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .hero-s1:after, {{WRAPPER}} .hero-s1:before',
            ]
        );
        $this->add_control(
            'slider_bg', [
                'label' => __( 'Slider Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/app-landing/hero/hero-bg.jpg',
                ],
            ]
        );
        $this->add_control(
            'slider_element_img', [
                'label' => __( 'Slider Element Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/app-landing/hero/hero-phone.png',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start of hero -->
        <section  class="hero hero-s1 parallax" data-bg-image="'.$settings['slider_bg']['url'].'" data-speed="5">
            <div class="container">
                <div class="row">
                    <div class="col col-md-7 hero-info">
                        <h4 class="sub-title">'.$settings['slider_heading'].'</h4>
                        <h1 class="title">'.$settings['slider_info'].'</h1>
                        <div class="btns">';
                            if ( $settings['slider_btn_one_url']['url'] ) {
                                echo '<a href="' . $settings['slider_btn_one_url']['url'] . '">' . $settings['slider_btn_one'] . '';
                                \Elementor\Icons_Manager::render_icon($settings['slider_btn_one_icon'], ['aria-hidden' => 'true']);
                                echo '</a>';
                            }
                            if ( $settings['slider_btn_two_url']['url'] ) {
                                echo '<a href="' . $settings['slider_btn_two_url']['url'] . '">' . $settings['slider_btn_two'] . '';
                                \Elementor\Icons_Manager::render_icon($settings['slider_btn_two_icon'], ['aria-hidden' => 'true']);
                                echo '</a>';
                            }

                        echo'</div>
                    </div>
                    <div class="hero-phone">
                        <img src="'.$settings['slider_element_img']['url'].'" alt="Hero Phone" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hero_slider_one );
?>