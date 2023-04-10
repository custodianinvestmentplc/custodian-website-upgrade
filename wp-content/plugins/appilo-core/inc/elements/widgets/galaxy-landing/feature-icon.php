<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_feature_icon extends Widget_Base {

    public function get_name() {
        return 'galaxy-feature-icon';
    }

    public function get_title() {
        return __( 'Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-call-to-action';
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
            'features_icon',
            [
                'label' => __( 'Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'custom_icon',
            [
                'label' => __( 'Custom SVG Path', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'features_icon_color',
                'label' => __( 'Feature Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .dynamic-feature .app-landing-features .feature .icon i',
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Auto Install system', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'appilo' ),
            ]
        );
        $this->add_control(
            'border_bottom',
            [
                'label' => __( 'Box Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'center',
                'options' => [
                    ''  => __( 'Border', 'appilo' ),
                    'border-bottom-0' => __( 'None', 'appilo' ),
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="dynamic-feature">
                 <div class="app-landing-features">
                   <div class="feature '.$settings['border_bottom'].'">
                            <div class="icon">';
                                    echo''.$settings['custom_icon'].'';
                                    \Elementor\Icons_Manager::render_icon( $settings['features_icon'], [ 'aria-hidden' => 'true' ] );
                        echo '</div>
                            <div class="details">
                                <h3>'.$settings['heading'].'</h3>
                                <p>'.$settings['info'].'</p>
                            </div>
                      </div>
                  </div>
                </div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_feature_icon );
?>