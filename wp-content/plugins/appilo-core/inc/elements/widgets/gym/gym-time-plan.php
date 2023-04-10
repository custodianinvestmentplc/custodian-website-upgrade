<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class gym_time_plan extends Widget_Base {

    public function get_name() {
        return 'gym_time_plan';
    }

    public function get_title() {
        return __( 'Gym Time Plan', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-apps';
    }

    protected function register_controls() {
        $this->start_controls_section(
            'demo_list_item',
            [
                'label' => __( 'Schedule List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'demo_name',
            [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Monday', 'appilo' ),
            ]
        );
        $this->add_control(
            'demo_list',
            [
                'label' => __( 'Demo List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'demo_name' => 'Monday',
                    ],
                    [
                        'demo_name' => 'Monday',
                    ],
                    [
                        'demo_name' => 'Monday',
                    ],
                    [
                        'demo_name' => 'Monday',
                    ],
                    [
                        'demo_name' => 'Monday',
                    ],
                    [
                        'demo_name' => 'Monday',
                    ],
                    [
                        'demo_name' => 'Monday',
                    ],
                    [
                        'demo_name' => 'Monday',
                    ],

                ],
                'title_field' => '{{{ demo_name }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'demo_lista_item',
            [
                'label' => __( 'Content List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'icon',
            [
                'label' => __( 'Service Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater2->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Cardio', 'appilo' ),
            ]
        );
        $repeater2->add_control(
            'trainer',
            [
                'label' => __( 'Trainer', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Jecob Oragson', 'appilo' ),
            ]
        );
        $repeater2->add_control(
            'time',
            [
                'label' => __( 'Time', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '10.00 - 11.00 Am', 'appilo' ),
            ]
        );
        $repeater2->add_control(
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
            'time_list',
            [
                'label' => __( 'Time List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        'title' => 'Cardio',
                    ],
                    [
                        'title' => 'Cardio',
                    ],
                    [
                        'title' => 'Cardio',
                    ],
                    [
                        'title' => 'Cardio',
                    ],
                    [
                        'title' => 'Cardio',
                    ],
                    [
                        'title' => 'Cardio',
                    ],
                    [
                        'title' => 'Cardio',
                    ],
                    [
                        'title' => 'Cardio',
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_content',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'filter_color',
            [
                'label' => __( 'Filter Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .demo-section li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'filter_fonts',
                'label' => __( 'Filter Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo-section li',
            ]
        );
        $this->add_control(
            'filter_active',
            [
                'label' => __( 'Filter Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .demo-section li.filtr-active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'filter_active_fonts',
                'label' => __( 'Filter Active Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo-section li.filtr-active',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'filter_active_bg',
                'label' => __( 'Active BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .demo-section li.filtr-active:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'active_shadow',
                'label' => __( 'Active Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo-section li.filtr-active',
            ]
        );
        $this->add_control(
            'demo_name_color',
            [
                'label' => __( 'Demo Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .demo_item .appl-page-title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'demo_name_fonts',
                'label' => __( 'Demo Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo_item .appl-page-title h3',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'demo_overlay',
                'label' => __( 'Demo Overlay', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .demo_item .demo_img_link:before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'demo_shadow',
                'label' => __( 'Demo Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo_item .demo_img_link',
            ]
        );
        $this->add_control(
            'demo_btn_color',
            [
                'label' => __( 'Demo Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .demo_item .app_btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'btn_pos',
            [
                'label' => __( 'Button Top Bottom Position', 'rexlaw-core' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                    'default' => [
                        'unit' => '%',
                        'size' => -40,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .demo_item .appl_ml_btn' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'demo_btn_fonts',
                'label' => __( 'Demo Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo_item .app_btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'demo_btn_bg',
                'label' => __( 'Demo Button BG', 'appilo' ),
                'types' => [  'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .demo_item .app_btn',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .demo-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo '<div class="app-gym-plan-tab-wrap">
        <div class="app-gym-plan-tab-btn text-center">
            <ul id="tabs" class="nav text-uppercase justify-content-center nav-tabs">';

                $index = 0;
                if ( $settings['demo_list'] ) {
                    foreach ($settings['demo_list'] as $demo) {
                        $index++;
                        if ($index == 1){
                            $cls = 'active';
                        } else {
                            $cls = '';
                        }
                        echo '<li class="nav-item"><a href="#" data-target="#' . $demo['_id'] . '" data-toggle="tab" class="nav-link text-uppercase ' . $cls . '">' . $demo['demo_name'] . '</a></li>';
            }
        }
        echo'</ul>
        </div>
        <div class="pricing-table-wrapper">
            <div id="tabsContent" class="tab-content">';

                $index2 = 0;
                if ( $settings['demo_list'] ) {
                    foreach ($settings['demo_list'] as $demo) {
                        $index2++;
                        if ($index2 == 1){
                            $cls2 = 'active show';
                        } else {
                            $cls2 = '';
                        }
                        echo '<div id="' . $demo['_id'] . '" class="tab-pane fade ' . $cls2 . '">
                    <div class="app-gym-plan-schedule position-relative">
                        <div class="row">';

                if ( $settings['time_list'] ) {
                    foreach ($settings['time_list'] as $time) {
                        echo '<div class="col-lg-3 col-sm-6">
                                <div class="app-gym-plan-schedule-inner position-relative text-center">
                                    <div class="app-gym-plan-icon">';
                    \Elementor\Icons_Manager::render_icon( $time['icon'], [ 'aria-hidden' => 'true' ] );
                               echo '</div>
                                    <div class="app-gym-plan-text app-gym-headline pera-content">
                                        <h3><a '.get_that_link($time['link']).'>'.$time['title'].'</a></h3>
                                        <p>'.$time['trainer'].'</p>
                                        <span>'.$time['time'].'</span>
                                    </div>
                                </div>
                            </div>';
                    }
                }
                      echo '  </div>
                    </div>
                </div>';
            }
        }
        echo'</div>
            </div>
        </div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new gym_time_plan );
?>