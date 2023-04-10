<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ch1_hosting_services_tabs extends Widget_Base {

    public function get_name() {
        return 'cloud-hosting-services-tabs';
    }

    public function get_title() {
        return __( 'Cloud Hosting Services', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-tabs';
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
                'default' => __( 'Shared Hosting', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'category_name',
            [
                'label' => __( 'Category Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Shared', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'category_id',
            [
                'label' => __( 'Category ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'shared', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'details',
            [
                'label' => __( 'Details', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( ' <li> Dedicated IP</li>
                                    <li> SSL Certificate</li>
                                    <li> Domain Privacy</li>
                                    <li> Site Backup Pro</li>
                                    <li> Renewal Price</li>
                                    <li> Available CPUs</li>', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The web is the most powerful resource on the planet, and we\'re here to help you harness it. Cloud Sites includes our renowned 24/7 support so you can always get the help you need, right when you need it.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_icon_img', [
                'label' => __( 'Feature Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/cloud-hosting/service-hosting.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'sm_txt',
            [
                'label' => __( 'Small Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Cost starts at $7.99', 'appilo' ),
            ]
        );
        $this->add_control(
            'service_list',
            [
                'label' => __( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Shared Hosting', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Shared Hosting', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Shared Hosting', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Shared Hosting', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Shared Hosting', 'appilo' ),
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
            'service_style',
            [
                'label' => __( 'Services Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'simple',
                'options' => [
                    'simple'  => __( 'Simple', 'appilo' ),
                    'modern' => __( 'Modern', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content .content-wrapper h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content .content-wrapper h3',
            ]
        );
        $this->add_control(
            'sm_title_color',
            [
                'label' => __( 'Sub Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content .content-wrapper .small-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_fonts',
                'label' => __( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content .content-wrapper .small-text',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content p',
            ]
        );
        $this->add_control(
            'details_color',
            [
                'label' => __( 'Details Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content .content-wrapper .detail-wrapper .detail li, 
                    {{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content .content-wrapper .detail-wrapper .detail li:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'details_fonts',
                'label' => __( 'Details Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content .content-wrapper .detail-wrapper .detail li',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link',
            ]
        );
        $this->add_control(
            'btn_h_color',
            [
                'label' => __( 'Button Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_h_fonts',
                'label' => __( 'Button Active Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link.active',
            ]
        );
        $this->add_control(
            'bbr',
            [
                'label' => __( 'Button Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __( 'Button Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link',
            ]
        );
        $this->add_responsive_control(
            'btn_border_radius',
            [
                'label' => __( 'Button Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'bb',
            [
                'label' => __( 'Button BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link',
            ]
        );
        $this->add_responsive_control(
            'btn_padding',
            [
                'label' => __( 'Button Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_shadow',
                'label' => __( 'Button Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_ac_shadow',
                'label' => __( 'Button Active Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li .nav-link.active',
            ]
        );
        $this->add_responsive_control(
            'btn_margin',
            [
                'label' => __( 'Button Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'fibr',
            [
                'label' => __( 'Service Item Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'service_item_border',
                'label' => __( 'Service Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content',
            ]
        );
        $this->add_responsive_control(
            'Service_item_border_radius',
            [
                'label' => __( 'Item Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'service_item_shadow',
                'label' => __( 'Service Item Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content',
            ]
        );
        $this->add_control(
            'fib',
            [
                'label' => __( 'Service Item BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'service_item_bg',
                'label' => __( 'Service Item BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content',
            ]
        );
        $this->add_responsive_control(
            'service_item_padding',
            [
                'label' => __( 'Service Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .tab-content .tab-pane .service-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'nav_border',
                'label' => __( 'Nav Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs',
            ]
        );
        $this->add_responsive_control(
            'nav_margin',
            [
                'label' => __( 'Nav Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'faaib',
            [
                'label' => __( 'Nav BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'navbg',
                'label' => __( 'Nav BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-service-section .service-wrapper .nav-tabs',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-service-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $service_style = $settings['service_style'];

echo '<section   class="host-app-service-section">
    <div class="container text-center">
        <div class="row">';
        if ( $service_style == 'simple' ) {
            echo'<div class="col-md-12">';
        }
        if ( $service_style == 'modern' ) {
            echo '<div class="col-xs-12">';
        }
        echo '<div class="service-wrapper">';
        if ( $service_style == 'modern' ) {
            echo '<div class="row"><div class="col-md-3">';
        }
        if ( $settings['service_list'] ) {
            $index2 = 0;
            echo'<ul id="tabs" class="nav nav-tabs text-center">';
            foreach ($settings['service_list'] as $service) {
                $index2++;
                if ($index2 == 1){
                    $class2 = 'active';
                }else{
                    $class2 = '';
                }
                echo '<li class="nav-item" ><a class="nav-link '.$class2.' btn-primary" href="#" data-target="#'.$service['category_id'].'"  data-toggle="tab">'.$service['category_name'].'</a></li>';
            }
            echo '</ul>';
        }
        if ( $service_style == 'modern' ) {
            echo '</div><!-- col-md-3 -->';
            echo '<div class="col-md-9">';
        }
        if ( $settings['service_list'] ) {
            $index = 0;
         echo '<div id="tabsContent" class="tab-content">';
            foreach ($settings['service_list'] as $service) {
                $index++;
                if ($index == 1){
                    $class = 'show active';
                }else{
                    $class = '';
                }
        echo'<div class="tab-pane '.$class.' fade" id="'.$service['category_id'].'">
            <div class="service-content text-left">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <span class="caption"><img src=" ' . $service['feature_icon_img']['url'] . '" alt></span>
                            </div>

                            <div class="col-sm-6">
                                <div class="content-wrapper">
                                    <h3>'.$service['title'].'</h3>
                                    <span class="small-text">'.$service['sm_txt'].'</span>

                                    <div class="detail-wrapper">
                                        <ul class="detail">
                                            '.$service['details'].'
                                        </ul>
                           
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <p>'.$service['info'].'</p>
                    </div>
                </div>
            </div>
        </div>';
            }
            echo '</div><!-- tab content -->';
            if ( $service_style == 'modern' ) {
                echo '</div><!-- col-md-9 -->';
            }
        }
            if ( $service_style == 'modern' ) {
                echo '</div><!-- row -->';
            }
                echo'</div><!-- service wrapper -->
            </div><!-- col-md/xs-12 -->
        </div><!-- row -->
    </div><!-- container -->
</section> <!-- service-section -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new ch1_hosting_services_tabs );
?>