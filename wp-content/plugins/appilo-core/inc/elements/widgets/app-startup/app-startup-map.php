<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_map extends Widget_Base {

    public function get_name() {
        return 'app-startup-map';
    }

    public function get_title() {
        return __( 'App Startup Map', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-google-maps';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        

        $this->add_control(
            'office_title',
            [
                'label' => __( 'Office Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Appilo', 'appilo' ),
            ]
        );

        $this->add_control(
            'office_add',
            [
                'label' => __( 'Address', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'NewYork office', 'appilo' ),
            ]
        );
        $this->add_control(
            'map_url', [
                'label' => __( 'Map URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'https://maps.google.com/maps?q=newyork&amp;ie=UTF8&amp;iwloc=&amp;output=embed',
            ]
        );
        $this->add_control(
            'map_marker', [
                'label' => __( 'Map Marker', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/logo/mapng.png',
                ],
            ]
        );
        $this->add_responsive_control(
            'map_marker_left_right',
            [
                'label' => __( 'Left/Right', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 30,
                ],
                'selectors' => [
                    '{{WRAPPER}} .str-maplocation' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'map_marker_top_bottom',
            [
                'label' => __( 'Top/Bottom', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 40,
                ],
                'selectors' => [
                    '{{WRAPPER}} .str-maplocation' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo '<div  class="google-map-area position-relative">
            <div class="earth3dmap-com">
                <iframe id="iframemap" src="'.$settings['map_url'].'" width="100%" height="280" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="str-maplocation">
                <div class="str-location-iiner str-headline pera-content">
                    <div class="str-location-counter float-left">
                        <img src="'.$settings['map_marker']['url'].'" alt> 
                    </div>
                    <h4>'.$settings['office_title'].'</h4>
                    <p>'.$settings['office_add'].'</p>
                </div>
                <div class="str-feature-indicatior relative-posstrion">
                    <div class="str-indicator-border1"></div>
                    <div class="str-indicator-border2"></div>
                </div>
            </div>
        </div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_map );
?>