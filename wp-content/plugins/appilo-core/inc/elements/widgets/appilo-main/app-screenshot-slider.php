<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_screenshot_slider extends Widget_Base {

    public function get_name() {
        return 'appilo-screenshot-slider';
    }

    public function get_title() {
        return __( 'Apps Screenshots Slider', 'appilo' );
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
        
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Slider Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'App ScreenShots', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_content',
            [
                'label' => __( 'Slider Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'A Private Limited is the most popular type of partnership Malta. The limited liability <br /> is, in fact, the only type of company allowed by Companies.', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'screenshots_list', [
                'label' => __( 'Screenshots List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'show_label' => false,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/slider-01.png',
                ],
            ]
        );
        $this->add_control(
            'screenshots_item',
            [
                'label' => __( 'Screenshots Item', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'screenshots_list' => __( '', 'appilo' ),
                    ],
                    [
                        'screenshots_list' => __( '', 'appilo' ),
                    ],
                    [
                        'screenshots_list' => __( '', 'appilo' ),
                    ],
                    [
                        'screenshots_list' => __( '', 'appilo' ),
                    ],
                    [
                        'screenshots_list' => __( '', 'appilo' ),
                    ],
                    [
                        'screenshots_list' => __( '', 'appilo' ),
                    ],
                    [
                        'screenshots_list' => __( '', 'appilo' ),
                    ],
                    [
                        'screenshots_list' => __( '', 'appilo' ),
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
        $this->add_control(
            'section_mobile', [
                'label' => __( 'Section Mobile BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'show_label' => false,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/iphone-moc.png',
                ],
            ]
        );
        $this->end_controls_section();

    }


    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section class="appilo-screenshot-slider">
                <section class="app-secreenshots" >
                            <div class="container">
                                <div class="appilo-sec-title text-center">
                                    <h2>'.$settings['section_title'].'</h2>
                                    <p>'.$settings['section_content'].'</p>
                                </div>
                            </div>
                            <div class="swiper-slider-area">
                                <div class="container">
                                    <div class="row appScreenshotCarousel-container swiper-container">
                                        <div class="screen-mobile-image" style="background-image: url('.$settings['section_mobile']['url'].');"></div>';
                                            if ( $settings['screenshots_item'] ) {
                                                echo '<div class="swiper-wrapper">';
                                                foreach (  $settings['screenshots_item'] as $screenshots ) {
                                                    echo '<div class="swiper-slide dynamic-screenshots'.$screenshots['_id'].'" style="background-image: url('.$screenshots['screenshots_list']['url'].')"></div>';
                                                }
                                                echo '</div>';
                                            }
                                   echo' </div>
                                </div>
                            </div>
                        </section>
                </section>';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {

    }

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_screenshot_slider );
?>