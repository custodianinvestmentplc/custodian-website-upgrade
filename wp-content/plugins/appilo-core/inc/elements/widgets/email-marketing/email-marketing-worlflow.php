<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class email_marketing_workflow extends Widget_Base {

    public function get_name() {
        return 'email-marketing-workflow';
    }

    public function get_title() {
        return __( 'Email Marketing Workflow', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-codepen',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'feature_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Messaging encryption' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Unlike email, conversations in appilo are easy to follow. And they’re more conversations.' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay', [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_txt', [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '+' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_icon',
            [
                'label' => __( 'Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
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
            'features_list',
            [
                'label' => __( 'Workflow List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => __( 'Messaging encryption', 'appilo' ),
                    ],[
                        'feature_title' => __( 'Messaging encryption', 'appilo' ),
                    ],[
                        'feature_title' => __( 'Messaging encryption', 'appilo' ),
                    ],[
                        'feature_title' => __( 'Messaging encryption', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
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
            'feature_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text .em-workflow-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text:hover .em-workflow-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-workflow-icon-text .em-workflow-text h3',
            ]
        );
        $this->add_control(
            'feature_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-service-innerbox .cyb-service-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_info_hover_color',
            [
                'label' => __( 'Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text:hover .em-workflow-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-workflow-icon-text .em-workflow-text p',
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
                    '{{WRAPPER}} .em-workflow-icon-text .em-workflow-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .em-workflow-icon-text .em-workflow-icon svg' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .em-workflow-icon-text .em-workflow-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text .em-workflow-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .em-workflow-icon-text .em-workflow-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .em-workflow-icon-text .em-workflow-icon',
            ]
        );
        $this->add_control(
            'feature_icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text:hover .em-workflow-icon svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .em-workflow-icon-text:hover .em-workflow-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_h_bg',
                'label' => __( 'Icon Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .em-workflow-icon-text:hover .em-workflow-icon',
            ]
        );
        $this->add_control(
            'feature_btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text .em-workflow-hover a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .em-workflow-icon-text .em-workflow-hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-workflow-icon-text',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-workflow-icon-text',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_box_bg',
                'label' => __( 'Feature Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .em-workflow-icon-text',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_h_shadow',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-workflow-icon-text:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'h_border',
                'label' => __( 'Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-workflow-icon-text:hover',
            ]
        );
        $this->add_responsive_control(
            'border_h_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_hover_box_bg',
                'label' => __( 'Service Hover Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .em-workflow-icon-text:hover',
            ]
        );
        $this->add_responsive_control(
            'feature_box_padding',
            [
                'label' => __( 'Feature Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-icon-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_wrapper',
            [
                'label' => __( 'Section Wrapper', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .em-workflow-section .em-workflow-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .em-workflow-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of workflow section
    ============================================= -->
    <section  class="em-workflow-section">
        <div class="container">
            <div class="em-workflow-content">
                <div class="row">';
                    if ( $settings['features_list'] ) {
                        foreach ($settings['features_list'] as $features) {
                            $link = get_that_link( $features['link']);
                        echo '<div class="col-lg-3 col-md-6  wow fadeFromUp" data-wow-delay="' . $features['animate_delay'] . '" data-wow-duration="1500ms">
                       <div class="em-workflow-icon-text text-center position-relative">
                           <div class="em-workflow-icon em-headline pera-content text-center">';
                          \Elementor\Icons_Manager::render_icon($features['feature_icon'], ['aria-hidden' => 'true']);
                        echo'</div>
                           <div class="em-workflow-text">
                               <h3><a '.$link.'>' . $features['feature_title'] . '</a></h3>
                               <p>' . $features['feature_info'] . '</p>
                               <div class="em-workflow-hover">
                                   <a '.$link.'>' . $features['btn_txt'] . ' ';
                             \Elementor\Icons_Manager::render_icon($features['btn_icon'], ['aria-hidden' => 'true']);
                            echo'</a>
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
<!-- End of workflow section
    ============================================= --> ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new email_marketing_workflow );
?>