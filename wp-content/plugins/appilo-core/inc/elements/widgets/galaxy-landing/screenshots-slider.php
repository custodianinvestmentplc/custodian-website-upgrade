<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class screenshots_slider extends Widget_Base {

    public function get_name() {
        return 'galaxy-screenshots-slider';
    }

    public function get_title() {
        return __( 'Screenshots Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slides';
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
                'default' => __( 'screenshots', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'screenshots_item', [
                'label' => __( 'Screenshot', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/app-landing/screenshot-slider/img-1.jpg',
                ],
            ]
        );
        $this->add_control(
            'screenshots',
            [
                'label' => __( 'Screenshots List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'screenshots_item' => get_template_directory_uri(). '/img/galaxy/app-landing/screenshot-slider/img-1.jpg',
                    ],
                    [
                        'screenshots_item' => get_template_directory_uri(). '/img/galaxy/app-landing/screenshot-slider/img-2.jpg',
                    ],
                    [
                        'screenshots_item' => get_template_directory_uri(). '/img/galaxy/app-landing/screenshot-slider/img-3.jpg',
                    ],
                    [
                        'screenshots_item' => get_template_directory_uri(). '/img/galaxy/app-landing/screenshot-slider/img-4.jpg',
                    ],
                    [
                        'screenshots_item' => get_template_directory_uri(). '/img/galaxy/app-landing/screenshot-slider/img-5.jpg',
                    ],
                    [
                        'screenshots_item' => get_template_directory_uri(). '/img/galaxy/app-landing/screenshot-slider/img-6.jpg',
                    ],
                    [
                        'screenshots_item' => get_template_directory_uri(). '/img/galaxy/app-landing/screenshot-slider/img-7.jpg',
                    ],
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start app-screenshot -->
                <section class="app-screenshot" >
                      <div class="row content">
                        <div class="col col-12">
                            <div class="app-screenshot-slider-outer">
                                <div class="app-screenshot-slider owl-carousel">';
                                    if ( $settings['screenshots'] ) {
                                        foreach ($settings['screenshots'] as $screenshot) {
                                            echo '<div>
                                                    <img src="'.$screenshot['screenshots_item']['url'].'" alt="'.$screenshot['_id'].'">
                                                </div>';
                                        }
                                    }
                                echo'</div>
                                <div class="mockup">
                                    <div class="top"></div>
                                    <div class="left"></div>
                                    <div class="right"></div>
                                    <div class="bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- end app-screenshot -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new screenshots_slider );
?>