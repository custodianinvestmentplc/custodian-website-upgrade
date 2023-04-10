<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_progress extends Widget_Base {

    public function get_name() {
        return 'app-startup-progress';
    }

    public function get_title() {
        return __( 'App Startup Progress', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-counter-circle';
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
            'contacts',
            [
                'label' => __( 'Contact Box', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Setup workframe', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet consectetur adipiscing.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-settings',
                    'library' => 'appilo-icons-2',
                ],
            ]
        );
        $repeater->add_control(
            'btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Setup Now', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'btn_link', [
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
        $repeater->add_control(
            'btn_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-right-arrow',
                    'library' => 'appilo-icons-2',
                ],
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
        $this->add_control(
            'progress_list',
            [
                'label' => __( 'Progress List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'animate_delay' => __( '00ms', 'appilo' ),
                    ],
                    [
                        'animate_delay' => __( '300ms', 'appilo' ),
                    ],
                    [
                        'animate_delay' => __( '600ms', 'appilo' ),
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
                    '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-text p',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-text .str-btn, 
                    {{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-text .str-btn i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_font',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-text .str-btn',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-icon i' => 'color: {{VALUE}}',
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
                    'size' => 45,
                ],
                'selectors' => [
                    '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'border_color_round',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-icon .str-icon-border, 
                    {{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-icon' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'border_right_round',
            [
                'label' => __( 'Border Right Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-icon .str-icon-border' => 'border-right-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'snh',
            [
                'label' => __( 'Border Dot BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'border_dot',
                'label' => __( 'Border Dot BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-icon .str-icon-border .work-circle-shape',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-icon .icon-inner-shadow, 
                {{WRAPPER}} .str-work-process-section .str-work-icon-text .str-work-icon .str-icon-border .work-circle-shape',
            ]
        );
        $this->add_control(
            'boxb',
            [
                'label' => __( 'Box Before BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'box_before_bg',
                'label' => __( 'Box Before BG', 'appilo' ),
                'types' => [ 'classic' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-work-process-section .str-work-process-content .col-lg-4:nth-child(2) .str-work-icon-text:before',
            ]
        );
        $this->add_control(
            'boxa',
            [
                'label' => __( 'Box After BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'box_after_bg',
                'label' => __( 'Box After BG', 'appilo' ),
                'types' => [ 'classic' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-work-process-section .str-work-process-content .col-lg-4:nth-child(3) .str-work-icon-text:before',
            ]
        );
        $this->add_responsive_control(
            'item_padding_asdas',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-work-process-section .str-work-process-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .str-work-process-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of Work process section section
            ============================================= -->
            <section  class="str-work-process-section">
                <div class="container">
                    <div class="str-work-process-content">
                        <div class="row">';
                    if ( $settings['progress_list'] ) {
                        foreach ($settings['progress_list'] as $progress) {
                            echo '<div class="col-lg-4 ' . $progress['_id'] . '">
                                <div class="str-work-icon-text text-center wow fadeFromUp" data-wow-delay="' . $progress['animate_delay'] . '" data-wow-duration="1500ms">
                                    <div class="str-work-icon">
                                        <div class="str-icon-border"> <span class="work-circle-shape"></span></div>
                                        <div class="icon-inner-shadow"></div>';
                                            \Elementor\Icons_Manager::render_icon($progress['icon'], ['aria-hidden' => 'true']);
                                    echo'</div>
                                    <div class="str-work-text str-headline pera-content">
                                        <h3>' . $progress['title'] . '</h3>
                                        <p>' . $progress['info'] . '</p>
                                        <a class="str-btn d-inline-block" href="' . $progress['btn_link']['url'] . '">' . $progress['btn'] . '';\Elementor\Icons_Manager::render_icon($progress['btn_icon'], ['aria-hidden' => 'true']); echo '</a>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                        echo'</div>
                    </div>
                </div>
            </section>
        <!-- End of Work process  section
            ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_progress );
?>