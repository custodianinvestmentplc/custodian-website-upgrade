<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_services extends Widget_Base {

    public function get_name() {
        return 'galaxy-services';
    }

    public function get_title() {
        return __( 'Services', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-time-line';
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
            'icon_color_sep',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __( 'Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .agency-services .grid .icon i',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'service_icon',
            [
                'label' => __( 'Service Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-user',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'custom_icon',
            [
                'label' => __( 'Custom SVG Path', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'HTML Developer', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We use a customized machine been to specifically designed to test diagnose any and all automotive.', 'appilo' ),
            ]
        );
        $this->add_control(
            'services_list',
            [
                'label' => __( 'Service List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_icon' => __( 'fas fa-user', 'appilo' ),
                        'heading' => __( 'HTML Developer', 'appilo' ),
                        'info' => __( 'We use a customized machine been to specifically designed to test diagnose any and all automotive.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ heading }}}',
            ]
        );
        $this->add_control(
            'service_bg',
            [
                'label' => __( 'Service Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg',
                'label' => __( 'Service Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .agency-services .grid:before, {{WRAPPER}} .agency-services .grid:after',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start of agency-services section -->
                    <section class="agency-services" id="services">
                            <div class="row agency-services-grids">';
                            if ( $settings['services_list'] ) {
                                foreach (  $settings['services_list'] as $service ) {
                                        echo ' <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="grid">
                                            <div class="icon">';
                                        echo '' . $service['custom_icon'] . '';
                                        \Elementor\Icons_Manager::render_icon($service['service_icon'], ['aria-hidden' => 'true']);
                                        echo '</div>
                                            <h3>' . $service['heading'] . '</h3>
                                            <p>' . $service['info'] . '</p>
                                        </div>
                                        </div>';
                                        }
                                    }
                          echo'  </div> <!-- end row -->
                    </section>
                <!-- end of agency-services section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_services );
?>