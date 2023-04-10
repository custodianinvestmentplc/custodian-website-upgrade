<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_counter extends Widget_Base {

    public function get_name() {
        return 'galaxy-counter';
    }

    public function get_title() {
        return __( 'Counter', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-number-field';
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
                'name' => 'counter_icon_color',
                'label' => __( 'Counter Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .dynamic-counter .start-count .icon i',
            ]
        );
        $this->add_control(
            'text_color',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-landing-funfact h3, {{WRAPPER}} .app-landing-funfact p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'counter_icon',
            [
                'label' => __( 'Counter Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-user',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'custom_icon', [
                'label' => __( 'Custom Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/fun-fact-icons/icon-1.png',
                ],
            ]
        );
        $repeater->add_control(
            'counter_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '879' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'counter_text', [
                'label' => __( 'Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Line' , 'appilo' ),
            ]
        );
        $this->add_control(
            'counter_list',
            [
                'label' => __( 'Counter List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_icon' => __( 'fas fa-user', 'appilo' ),
                        'counter_number' => __( '870', 'appilo' ),
                        'counter_text' => __( 'Line', 'appilo' ),
                    ],
                    [
                        'counter_icon' => __( 'fas fa-user', 'appilo' ),
                        'counter_number' => __( '870', 'appilo' ),
                        'counter_text' => __( 'Line', 'appilo' ),
                    ],
                    [
                        'counter_icon' => __( 'fas fa-user', 'appilo' ),
                        'counter_number' => __( '870', 'appilo' ),
                        'counter_text' => __( 'Line', 'appilo' ),
                    ],
                    [
                        'counter_icon' => __( 'fas fa-user', 'appilo' ),
                        'counter_number' => __( '870', 'appilo' ),
                        'counter_text' => __( 'Line', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ counter_number }}}',
            ]
        );
        $this->add_control(
            'padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mobile-counter-gap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'animated_mobile', [
                'label' => __( 'Mobile Holder', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/app-landing/fun-fact-mobile.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start app-landing-funfact -->
<section class="app-landing-funfact dynamic-counter" >
    <div class="start-count">
        <div class="row">';
        if ( $settings['counter_list'] ) {
            foreach (  $settings['counter_list'] as $counter ) {
                echo '<div class="col col-sm-3 col-6">
                        <div class="box">
                            <div class="icon">
                            <img src="'.$counter['custom_icon']['url'].'" alt>';
                                \Elementor\Icons_Manager::render_icon( $counter['counter_icon'], [ 'aria-hidden' => 'true' ] );
                            echo'</div>
                            <h3><span class="counter" data-count="'.$counter['counter_number'].'">00</span></h3>
                            <p>'.$counter['counter_text'].'</p>
                        </div>
                    </div>';
            }
        }
        echo'</div> <!-- end row -->
        <div class="row">
            <div class="col col-12">
                <div class="mobile-holder mobile-counter-gap">
                    <img src="'.$settings['animated_mobile']['url'].'" alt class="img-fluid">
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end app-landing-funfact -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_counter );
?>