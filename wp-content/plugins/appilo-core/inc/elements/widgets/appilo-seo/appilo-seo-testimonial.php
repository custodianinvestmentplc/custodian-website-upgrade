<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_testimonial extends Widget_Base {

    public function get_name() {
        return 'appilo-seo-testimonial';
    }

    public function get_title() {
        return __( 'Appilo SEO Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fas fa-quote-right';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
            'testimonials',
            [
                'label' => __( 'Testimonials', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'client_name',
            [
                'label' => __( 'Client Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Thomash Smith', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'client_designation',
            [
                'label' => __( 'Client Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Project Manager', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'client_info',
            [
                'label' => __( 'Client Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“  Per inceptos himenaeos. Sed vel arcu vitae ex tincidunt dit a id lorem.Class aptent taciti sociosqu  ad litora torquent per conub ia nostra,   ”', 'appilo' ),
            ]
        );
        $this->add_control(
            'client_list',
            [
                'label' => __( 'Client List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'client_name' => __( 'Thomash Smith', 'appilo' ),
                        'client_designation' => __( 'Project Manager', 'appilo' ),
                        'client_info' => __( '“  Per inceptos himenaeos. Sed vel arcu vitae ex tincidunt dit a id lorem.Class aptent taciti sociosqu  ad litora torquent per conub ia nostra,   ”', 'appilo' ),
                    ],
                    [
                        'client_name' => __( 'Thomash Smith', 'appilo' ),
                        'client_designation' => __( 'Project Manager', 'appilo' ),
                        'client_info' => __( '“  Per inceptos himenaeos. Sed vel arcu vitae ex tincidunt dit a id lorem.Class aptent taciti sociosqu  ad litora torquent per conub ia nostra,   ”', 'appilo' ),
                    ],
                    [
                        'client_name' => __( 'Thomash Smith', 'appilo' ),
                        'client_designation' => __( 'Project Manager', 'appilo' ),
                        'client_info' => __( '“  Per inceptos himenaeos. Sed vel arcu vitae ex tincidunt dit a id lorem.Class aptent taciti sociosqu  ad litora torquent per conub ia nostra,   ”', 'appilo' ),
                    ],
                    [
                        'client_name' => __( 'Thomash Smith', 'appilo' ),
                        'client_designation' => __( 'Project Manager', 'appilo' ),
                        'client_info' => __( '“  Per inceptos himenaeos. Sed vel arcu vitae ex tincidunt dit a id lorem.Class aptent taciti sociosqu  ad litora torquent per conub ia nostra,   ”', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ client_name }}}',
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
            'border_color',
            [
                'label' => __( 'Active Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-trigger:before' => 'border-top-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'active_border',
                'label' => __( 'Active Border Shape', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-quote:before',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-trigger .appseo-testi-name-degi h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_active_color',
            [
                'label' => __( 'Title Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-trigger .appseo-testi-name-degi.slick-current.slick-center h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-trigger .appseo-testi-name-degi h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-trigger .appseo-testi-name-degi span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'des_active_color',
            [
                'label' => __( 'Designation Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-trigger .appseo-testi-name-degi.slick-current.slick-center span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-trigger .appseo-testi-name-degi span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-testimonial-content .appseo-testimonial-text',
            ]
        );

        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-seo/shape/tst-shape.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Section Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-testimonial-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-testimonial-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '    <!-- Start of testimonial section
        ============================================= --> 
        <section  class="appseo-testimonial-section position-relative">
            <div class="container">
                <div class="appseo-testimonial-content">
                    <div id="appseo-testimonial-id" class="appseo-testimonial-quote">';
                if ( $settings['client_list'] ) {
                    foreach ($settings['client_list'] as $clients) {
                        echo '<div  class="appseo-testimonial-text text-center ' . $clients['_id'] . '">
                                ' . $clients['client_info'] . '
                            </div>';
                    }
                }
                    echo'</div>
                    <div id="testimonial-appseo-name" class="appseo-testimonial-trigger">';
            if ( $settings['client_list'] ) {
                foreach ($settings['client_list'] as $clients) {
                    echo '<div class="appseo-testi-name-degi appseo-headline ' . $clients['_id'] . '">
                                <h3>' . $clients['client_name'] . '</h3>
                                <span>' . $clients['client_designation'] . '</span>
                            </div>';
                    }
                }
                    echo'</div>
                </div>
            </div>
            <div class="testi-circle-shape"><img src="' . $settings['pattern_bg_1']['url'] . '" alt></div>
        </section>
    <!-- End of testimonial section
        ============================================= -->  ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_testimonial );
?>