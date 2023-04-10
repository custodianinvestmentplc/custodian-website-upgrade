<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hero_slider_two extends Widget_Base {

    public function get_name() {
        return 'galaxy-hero-slider-two';
    }

    public function get_title() {
        return __( 'Hero Slider Two', 'appilo' );
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
                'default' => __( 'Awesome Quality Of Management', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get Service Of <span>Galaxy.</span> For Best', 'appilo' ),
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
        $this->add_control(
            'slider_btn_one',
            [
                'label' => __( 'Slider Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Discover us', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_bg',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'button_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .agency-btn-s1',
            ]
        );
        $this->add_control(
            'btn_hover_bg',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'button_hover_bg',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .agency-btn-s1:before',
            ]
        );
        $this->add_control(
            'slider_btn_one_icon',
            [
                'label' => __( 'Slider Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-angle-down',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'slider_btn_one_url', [
                'label' => __( 'Slider Button Link', 'appilo' ),
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
        $this->add_control(
            'slider_overlay_sep',
            [
                'label' => __( 'Overlay Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_overlay',
                'label' => __( 'Overlay Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .hero-s2:before',
            ]
        );
        $this->add_control(
            'slider_bg', [
                'label' => __( 'Slider Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/agency/hero-bg.jpg',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '  <!-- start of hero -->
                    <section class="hero hero-s2 parallax" data-bg-image="'.$settings['slider_bg']['url'].'" data-speed="3">
                        <div class="container">
                            <div class="row">
                                <div class="col col-md-9 hero-info">
                                    <h4 class="sub-title">'.$settings['slider_heading'].'</h4>
                                    <h1 class="title">'.$settings['slider_info'].' <span class="agency-typed-element animate-typing"
                                                                                      data-animate-loop="true"
                                                                                      data-type-speed="200"
                                                                                      data-type-delay="200"
                                                                                      data-remove-speed="50"
                                                                                      data-remove-delay="500"
                                                                                      data-cursor-speed="200">
                                                                                       '.$settings['typed_element'].'
                                                                                    </span></h1>
                                    <a href="'.$settings['slider_btn_one_url']['url'].'" class="agency-btn-s1">'.$settings['slider_btn_one'].' <span>';\Elementor\Icons_Manager::render_icon( $settings['slider_btn_one_icon'], [ 'aria-hidden' => 'true' ] );echo'</span></a>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- end of hero slider -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hero_slider_two );
?>