<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class medi_service extends Widget_Base {

    public function get_name() {
        return 'medi-service';
    }

    public function get_title() {
        return __( 'Medical Service', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
    }

    protected function register_controls() {
        
        $this->start_controls_section(
            'features_tab',
            [
                'label' => __( 'Services Lists', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Anykind Lab Test Option', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_icon', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Hospital is health care institution providing patient treatment with specialized', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'd_list',
            [
                'label' => __( 'Details', 'appilo' ),
                'type' => \Appilo_Core::LIST_CONTROL,
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
                        'title' => __( 'Anykind Lab Test Option', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Anykind Lab Test Option', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Anykind Lab Test Option', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Anykind Lab Test Option', 'appilo' ),
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
                    '{{WRAPPER}} .medi-app-service-innerbox .app-medi-service-title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-service-innerbox .app-medi-service-title h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-service-innerbox .app-medi-service-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-service-innerbox .app-medi-service-text p',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-service-innerbox .medi-app-service-icon i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .medi-app-service-content .owl-dots .owl-dot.active' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .medi-app-service-innerbox .medi-app-service-icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Tick_icon_color',
            [
                'label' => __( 'Tick Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-service-innerbox .app-medi-service-text li:before' => 'color: {{VALUE}}',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 90,
                ],
                'selectors' => [
                    '{{WRAPPER}} .medi-app-service-innerbox .medi-app-service-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .medi-app-service-innerbox .medi-app-service-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-service-innerbox',
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
                'selector' => '{{WRAPPER}} .medi-app-service-innerbox',
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .medi-app-service-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'wra_padding',
            [
                'label' => __( 'Wrapper Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .medi-app-service-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-service-innerbox',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of feature section
    ============================================= -->
   <div  class="medi-app-service-content owl-carousel">';

            if ( $settings['service_list'] ) {
                foreach ($settings['service_list'] as $service) {
             echo '<div class="medi-app-service-innerbox wow fadeFromUp" data-wow-delay="'.appilo_animate('50').'" data-wow-duration="1000ms">
                    <div class="medi-app-service-icon-title clearfix">
                        <div class="medi-app-service-icon float-left">';
                                if($service['icon']) {
                                    \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
                                } if ($service['feature_icon']['url']) {
                                    echo '<img src="' . $service['feature_icon']['url'] . '" alt>';
                                }
                            echo'</div>
                        <div class="app-medi-service-title app-medi-headline">
                            <h3><a '.get_that_link( $service['link']).'>' . $service['title'] . '</a></h3>
                        </div>
                    </div>
                    <div class="app-medi-service-text pera-content ul-li-block">
                        <p>' . $service['info'] . '</p>
                        <ul>';
                            get_multi_list($service['d_list'], 'li');
                     echo'</ul>
                    </div>
                </div>';
                }
            }
            echo'</div>
<!-- End of feature section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new medi_service );
?>