<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class beautiful_screen extends Widget_Base {

    public function get_name() {
        return 'beautiful_screen';
    }

    public function get_title() {
        return __( 'Beautiful Screen', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fab fa-autoprefixer';
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
            'screenshots_list', [
                'label' => __( 'Screenshots List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'show_label' => false,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/mockup.png',
                ],
            ]
        );
        $this->add_control(
            'section_mobile', [
                'label' => __( 'Section Mobile BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'show_label' => false,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/mockup.png',
                ],
            ]
        );

        $this->add_control(
            'screenshots_item',
            [
                'label' => __( 'Screenshots Item', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
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
       
        $this->end_controls_section();

    }


    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section class="aplpg-screenshot-area">
            <div class="container">
                <div class="aplpg-screen-slider-wrapper">
                    <div class="aplpg-slider-mockup" data-background="background-image: url('.$settings['section_mobile']['url'].');" style="background-image: url('.$settings['section_mobile']['url'].');"></div>
                    <div class="aplpg-screen-slider swiper-container">';
                    if ( $settings['screenshots_item'] ) {
                                                echo '
                        <div class="swiper-wrapper">';
                        foreach (  $settings['screenshots_item'] as $settings ) {
                        echo '<div class="swiper-slide aplpg-screen-single">
                        <img src ="'.$settings['screenshots_list']['url'].'">
                        </div>';
                             }
                        echo '</div>';
                          }
                        echo '
                    </div>
                </div>
            </div>
        </section>';

    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {

    }

}
Plugin::instance()->widgets_manager->register_widget_type( new beautiful_screen );
?>