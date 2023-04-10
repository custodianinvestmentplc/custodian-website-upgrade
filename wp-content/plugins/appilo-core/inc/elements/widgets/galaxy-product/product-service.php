<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_product_services extends Widget_Base {

    public function get_name() {
        return 'galaxy-product-services';
    }

    public function get_title() {
        return __( 'Product Services', 'appilo' );
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
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'All Day Services', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'For all the ways you work out with Your Comfort', 'appilo' ),
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'button_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .product-landing-btn',
            ]
        );
        $this->add_control(
            'btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Learn more', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_url', [
                'label' => __( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'button_hover_bg',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .product-landing-btn:before',
            ]
        );
        $this->add_control(
            'section_photo', [
                'label' => __( 'Section Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/product-landing/services-watch.png',
                ],
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
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .product-landing-services .services .icon i' => 'color: {{VALUE}}',
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
                'default' => __( 'Heat Proof <br>Sensor', 'appilo' ),
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
                        'heading' => __( 'Heat Proof <br>Sensor', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ heading }}}',
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start of product-landing-services section -->
                <section class="product-landing-services" id="services">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-6 offset-md-6">
                                <div class="product-landing-section-title">
                                    <span class="sub-title">'.$settings['section_title'].'</span>
                                    <h2>'.$settings['section_info'].'</h2>
                                </div> <!-- end section-title -->
                                <div class="services">';

                                if ( $settings['services_list'] ) {
                                    foreach ($settings['services_list'] as $service) {
                                        echo ' <div class="grid">
                                        <div class="icon">';
                                            echo '' . $service['custom_icon'] . '';
                                            \Elementor\Icons_Manager::render_icon($service['service_icon'], ['aria-hidden' => 'true']);
                                        echo'</div>
                                        <h3>' . $service['heading'] . '</h3>
                                    </div>';
                                    }
                                }
                                    echo'<a href="' . $settings['btn_url']['url'] . '" class="product-landing-btn">' . $settings['btn'] . '</a>
                                </div>
                            </div>
                            <div class="services-watch">
                                <img class="img-fluid" src="' . $settings['section_photo']['url'] . '" alt="Service Watch">
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </section>
            <!-- end of product-landing-services section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_product_services );
?>