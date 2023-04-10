<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_classic_services extends Widget_Base {

    public function get_name() {
        return 'saas-classic-services';
    }

    public function get_title() {
        return __( 'SaaS Classic Services', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-info-box';
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
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'saas_two_service', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'service_upper_icon',
            [
                'label' => __( 'Upper Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-user',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'service_lower_icon',
            [
                'label' => __( 'Lower Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'service_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Faster docs. Faster deals' , 'appilo' ),
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
            'service_info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get your documents out the door fast to keep deals with automatic notifications, on-the-fly editing, and integrated.' , 'appilo' ),
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
                        'service_upper_icon' => __( 'fas fa-user', 'appilo' ),
                        'service_lower_icon' => __( 'fas fa-check', 'appilo' ),
                        'service_title' => __( 'Faster docs. Faster deals', 'appilo' ),
                        'service_info' => __( 'Get your documents out the door fast to keep deals with automatic notifications, on-the-fly editing, and integrated.', 'appilo' ),
                    ],
                    [
                        'service_upper_icon' => __( 'fas fa-user', 'appilo' ),
                        'service_lower_icon' => __( 'fas fa-check', 'appilo' ),
                        'service_title' => __( 'Faster docs. Faster deals', 'appilo' ),
                        'service_info' => __( 'Get your documents out the door fast to keep deals with automatic notifications, on-the-fly editing, and integrated.', 'appilo' ),
                    ],
                    [
                        'service_upper_icon' => __( 'fas fa-user', 'appilo' ),
                        'service_lower_icon' => __( 'fas fa-check', 'appilo' ),
                        'service_title' => __( 'Faster docs. Faster deals', 'appilo' ),
                        'service_info' => __( 'Get your documents out the door fast to keep deals with automatic notifications, on-the-fly editing, and integrated.', 'appilo' ),
                    ],
                    [
                        'service_upper_icon' => __( 'fas fa-user', 'appilo' ),
                        'service_lower_icon' => __( 'fas fa-check', 'appilo' ),
                        'service_title' => __( 'Faster docs. Faster deals', 'appilo' ),
                        'service_info' => __( 'Get your documents out the door fast to keep deals with automatic notifications, on-the-fly editing, and integrated.', 'appilo' ),
                    ],
                    [
                        'service_upper_icon' => __( 'fas fa-user', 'appilo' ),
                        'service_lower_icon' => __( 'fas fa-check', 'appilo' ),
                        'service_title' => __( 'Faster docs. Faster deals', 'appilo' ),
                        'service_info' => __( 'Get your documents out the door fast to keep deals with automatic notifications, on-the-fly editing, and integrated.', 'appilo' ),
                    ],
                    [
                        'service_upper_icon' => __( 'fas fa-user', 'appilo' ),
                        'service_lower_icon' => __( 'fas fa-check', 'appilo' ),
                        'service_title' => __( 'Faster docs. Faster deals', 'appilo' ),
                        'service_info' => __( 'Get your documents out the door fast to keep deals with automatic notifications, on-the-fly editing, and integrated.', 'appilo' ),
                    ]
                ],
                'title_field' => '{{{ service_title }}}',
            ]
        );
        $this->add_control(
            'section_btn',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Want to download this app?', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_url', [
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
        $this->add_control(
            'under_txt_color',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_read_more a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_after_arrow_heading',
            [
                'label' => esc_html__( 'Hover Arrow Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'under_txt_after_after',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .service_read_more a:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'under_txt_fonts',
                'label' => __( 'Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .service_read_more a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'under_txt_after_before',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .service_read_more a:hover:before',
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
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas_two_service_section .service_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'service_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_service_section .service_content_box .service_text_box h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'service_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_service_section .service_content_box:hover .service_text_box h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'service_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_service_section .service_content_box .service_text_box h3',
            ]
        );
        $this->add_control(
            'service_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_service_section .service_content_box .service_text_box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'service_info_hover_color',
            [
                'label' => __( 'Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_service_section .service_content_box:hover .service_text_box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'service_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_service_section .service_content_box .service_text_box p',
            ]
        );
        $this->add_control(
            'service_upper_icon_color',
            [
                'label' => __( 'Upper Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_service_section .service_content_box .service_icon_box .upper_icon i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .saas_two_service_section .service_content_box .service_icon_box .upper_icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'service_lower_icon_color',
            [
                'label' => __( 'Lower Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_service_section .service_content_box .service_icon_box .lower_icon i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .saas_two_service_section .service_content_box .service_icon_box .lower_icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'service_box_bg',
                'label' => __( 'Service Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_service_section .service_content_box:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'service_box_bg_hover',
                'label' => __( 'Service Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_service_section .service_content_box:hover:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'service_hover_box_bg',
                'label' => __( 'Service Hover Box Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_service_section .service_content_box:before',
            ]
        );
        $this->add_responsive_control(
            'service_box_padding',
            [
                'label' => __( 'Service Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas_two_service_section .service_content_box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '<section  class="saas_two_service_section">
    <div class="container">
        <div class="service_content">
            <div class="row justify-content-md-center">';

        if ( $settings['services_list'] ) {
            foreach ($settings['services_list'] as $services) {
                echo '<div class="col-lg-4 col-md-6  wow fadeFromUp" data-wow-delay="' . $services['animate_delay'] . '" data-wow-duration="1500ms">
                    <div class="service_content_box relative-position">
                        <div class="service_icon_box relative-position">
                            <div class="upper_icon">';
                \Elementor\Icons_Manager::render_icon($services['service_upper_icon'], ['aria-hidden' => 'true']);
                echo '</div>
                            <div class="lower_icon">';
                \Elementor\Icons_Manager::render_icon($services['service_lower_icon'], ['aria-hidden' => 'true']);
                echo '</div>
                        </div>
                        <div class="service_text_box saas2-headline pera-content">
                            <h3>' . $services['service_title'] . '</h3>
                            <p>' . $services['service_info'] . '</p>
                        </div>
                    </div>
                </div>';
            }
        }
    echo'</div>
        </div>
        <div class="service_read_more text-center">
            <a href="'.$settings['section_btn_url']['url'].'">'.$settings['section_btn'].'</a>
        </div>
    </div>
</section>';
    }


}
Plugin::instance()->widgets_manager->register( new saas_classic_services() );

