<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class web_app_features extends Widget_Base {

    public function get_name() {
        return 'web-app-features';
    }

    public function get_title() {
        return __( 'Web App Features', 'appilo' );
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
            'features_tab',
            [
                'label' => __( 'Features Lists', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Unlimited Color Option', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_icon', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/icon/f-icon1.png',
                ],
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Seamlessly aggregate pandemic for leadership through functionalized & information technology.', 'appilo' ),
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
                'label' => __( 'Social List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Unlimited Color Option', 'appilo' ),
                    ],[
                        'title' => __( 'Easily Managable', 'appilo' ),
                    ],[
                        'title' => __( 'Powerful Idea', 'appilo' ),
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
                    '{{WRAPPER}} .web-app-feature-innerbox .web-app-feature-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-feature-innerbox .web-app-feature-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-feature-innerbox .web-app-feature-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-feature-innerbox .web-app-feature-text p',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-feature-innerbox .web-app-f-icon-box i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .web-app-feature-innerbox .web-app-f-icon-box svg' => 'fill: {{VALUE}}',
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
                    '{{WRAPPER}} .web-app-feature-innerbox .web-app-f-icon-box i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .web-app-feature-innerbox .web-app-f-icon-box svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-feature-innerbox',
            ]
        );
        $this->add_control(
            'icon_bg_1', [
                'label' => __( 'Animate BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/shape/f-sh1.png',
                ],
            ]
        );$this->add_control(
            'icon_bg_2', [
                'label' => __( 'Animate BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/shape/f-sh2.png',
                ],
            ]
        );
        $this->add_control(
            'icon_bg_3', [
                'label' => __( 'Animate BG 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/shape/f-sh3.png',
                ],
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
                'selector' => '{{WRAPPER}} .web-app-feature-innerbox',
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-feature-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .web-app-feature-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-feature-content',
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
                'selector' => '{{WRAPPER}} .web-app-feature-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-feature-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $delay = 150;
        $animate_delay = .1;

    echo '<!-- Start of feature section
    ============================================= -->
    <section  class="web-app-feature-section">
        <div class="container">
            <div class="web-app-feature-content">
                <div class="row justify-content-center">';

            if ( $settings['service_list'] ) {
                foreach ($settings['service_list'] as $service) {
                    $animate_delay++;
             echo '<div id="' . $service['_id'] . '" class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="'.$animate_delay*$delay.'ms" data-wow-duration="1000ms">
                        <div class="web-app-feature-innerbox">
                            <div class="web-app-feature-icon position-relative">
                                <span class="web-app-f-shape position-absolute shape1"><img src="' . $settings['icon_bg_1']['url'] . '" alt></span>
                                <span class="web-app-f-shape position-absolute shape2"><img src="' . $settings['icon_bg_2']['url'] . '" alt></span>
                                <span class="web-app-f-shape position-absolute shape3"><img src="' . $settings['icon_bg_3']['url'] . '" alt></span>
                                <div class="web-app-f-icon-box">';
                                if($service['icon']) {
                                    \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
                                } if ($service['feature_icon']['url']) {
                                    echo '<img src="' . $service['feature_icon']['url'] . '" alt>';
                                }
                            echo'</div>
                                </div>
                            <div class="web-app-feature-text web-app-headline pera-content">
                                <h3><a '.get_that_link( $service['link']).'>' . $service['title'] . '</a></h3>
                                <p>' . $service['info'] . '</p>
                            </div>
                        </div>
                    </div>';
                }
            }
            echo'</div>
            </div>
        </div>
    </section>
<!-- End of feature section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new web_app_features );
?>