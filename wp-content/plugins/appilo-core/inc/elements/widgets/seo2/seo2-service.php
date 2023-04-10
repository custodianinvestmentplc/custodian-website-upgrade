<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class seo2_services extends Widget_Base {

    public function get_name() {
        return 'seo2-services';
    }

    public function get_title() {
        return __( 'SEO 2 Services', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
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
            'services',
            [
                'label' => __( 'Services', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'SEO Consultancy', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Service Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'icon_img', [
                'label' => __( 'Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/seo2/ser-icon-2.png',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read More', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'service_list',
            [
                'label' => __( 'Service List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'animate_delay' => '00ms',
                    ],
                    [
                        'animate_delay' => '300ms',
                    ],
                    [
                        'animate_delay' => '600ms',
                    ],

                ],
                'title_field' => '{{{ title }}}',
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
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-text p',
            ]
        );
        $this->add_control(
            'rm_color',
            [
                'label' => __( 'Read More Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-text .seo-2-service-btn span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rm_fonts',
                'label' => __( 'Read More Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-text .seo-2-service-btn span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'more_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [  'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-text .seo-2-service-btn i:after',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-icon i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'icon_box_shadow',
                'label' => __( 'Icon Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .seo-2-service-innerbox .seo-2-service-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .seo-2-service-innerbox',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .seo-2-service-innerbox',
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seo-2-service-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seo-2-service-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
      echo '<!-- Start of service section
    ============================================= --> 
    <section id="seo-2-service" class="seo-2-service-section">
        <div class="container">
            <div class="seo-2-service-content">
                <div class="row justify-content-center">';

            if ( $settings['service_list'] ) {
                foreach ($settings['service_list'] as $service) {
                    echo '<div id="' . $service['_id'] . '" class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="' . $service['animate_delay'] . '" data-wow-duration="1000ms">
                        <div class="seo-2-service-innerbox text-center">
                            <div class="seo-2-service-icon">';
                            if ($service['icon']) {
                                \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
                            }
                            if ($service['icon_img']['url']){
                                     echo '<img src="' . $service['icon_img']['url'] . '" alt>';
                            }
                            echo '</div>
                            <div class="seo-2-service-text seo-2-headline pera-content">
                                <h3><a '.get_that_link($service['link']).'>' . $service['title'] . '</a></h3>
                                <p>' . $service['info'] . '</p>
                                <div class="seo-2-service-btn position-relative ">
                                    <a '.get_that_link($service['link']).'><i class="fas fa-plus"></i> <span>' . $service['btn'] . '</span></a>
                                </div>
                            </div>
                        </div>
                    </div>';
                            }
                        }
            echo'</div>
            </div>
        </div>
    </section>
<!-- End of service section
    ============================================= -->  
';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new seo2_services );
?>