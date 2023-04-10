<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crm_server_list extends Widget_Base {

    public function get_name() {
        return 'crm-server-list';
    }

    public function get_title() {
        return __( 'CRM Server List', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-table';
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
            'ser_lists',
            [
                'label' => __( 'Server List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'name',
            [
                'label' => __( 'Server Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Amsterdam, Netherlands', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'name_code',
            [
                'label' => __( 'Name Code', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'ams2', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'test',
            [
                'label' => __( 'Test', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Test Speed', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-long-arrow-alt-right',
                    'library' => 'solid',
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
        $repeater->add_control(
            'delay',
            [
                'label' => __( 'Animation Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms', 'appilo' ),
            ]
        );
        $this->add_control(
            'server_list',
            [
                'label' => __( 'Server List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],
                    [
                        'link' =>'#',
                    ],

                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'server_list_style',
            [
                'label' => __( 'Server List Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            's_name_code',
            [
                'label' => __( 'Name Code Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a .crm-server-code' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            's_name_hover_code',
            [
                'label' => __( 'Name Code Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a:hover .crm-server-code' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 's_name_code_fonts',
                'label' => __( 'Name Code Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-server-list-item li a .crm-server-code',
            ]
        );
        $this->add_control(
            's_name',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            's_name_hover',
            [
                'label' => __( 'Name Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 's_name_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-server-list-item li a',
            ]
        );
        $this->add_control(
            's_test',
            [
                'label' => __( 'Test Speed Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a .crm-server-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            's_test_hover',
            [
                'label' => __( 'Test Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a:hover .crm-server-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 's_test_fonts',
                'label' => __( 'Test Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-server-list-item li a .crm-server-text',
            ]
        );
        $this->add_control(
            'mbcasdsserver',
            [
                'label' => __( 'Server List Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'server_bg',
                'label' => __( 'Server BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-server-list-item li a',
            ]
        );
        $this->add_control(
            'mbcasdslogo',
            [
                'label' => __( 'Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'number_bg',
                'label' => __( 'hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-server-list-item li a:after',
            ]
        );
        $this->add_control(
            'icon_c_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a .crm-server-text i' => 'color: {{VALUE}}',
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
                    '{{WRAPPER}} .crm-server-list-item li a .crm-server-text i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Server Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-server-list-item li a:hover',
            ]
        );
        $this->add_responsive_control(
            'server_padding',
            [
                'label' => __( 'List Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'server_margin',
            [
                'label' => __( 'List Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-server-list-item li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Section Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-server-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-server-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Start of servers section
    ============================================= -->           
    <section  class="crm-server-section">
        <div class="container">
            <div class="crm-server-list-item ul-li-block">
                <ul>';
        if ( $settings['server_list'] ) {
            foreach ($settings['server_list'] as $server) {
                $server_link = get_that_link($server['link']);
                echo '<li class="wow fadeFromLeft" data-wow-delay="'.$server['delay'].'" data-wow-duration="1500ms">
                        <a '.$server_link.'>
                            <span class="crm-server-code float-left text-uppercase">'.$server['name_code'].'</span>
                            '.$server['name'].'
                            <span class="crm-server-text float-right">'.$server['test'].' '; \Elementor\Icons_Manager::render_icon($server['icon'], ['aria-hidden' => 'true']); echo'</span>
                        </a>
                    </li>';
            }
        }
                echo'</ul>
            </div>
        </div>
    </section>
<!-- End of servers section
    ============================================= --> ';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crm_server_list );
?>