<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class medi_process extends Widget_Base {

    public function get_name() {
        return 'medi-process';
    }

    public function get_title() {
        return __( 'Medical Process', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-image-rollover';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'list_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '01' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Make Payment & Get Service' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'list_info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'A hospital is a health care institution providing us with specialized medical and nursing me.', 'appilo' ),
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
            'list',
            [
                'label' => __( 'Process List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_number' => __( '01', 'appilo' ),
                    ],
                    [
                        'list_number' => __( '02', 'appilo' ),
                    ],
                    [
                        'list_number' => __( '03', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ list_title }}}',
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
            'tc',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-process-step-item .medi-app-process-step-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'tt',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-process-step-item .medi-app-process-step-text h3',
            ]
        );
        $this->add_control(
            'ic',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-process-step-item .medi-app-process-step-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'it',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .medi-app-process-step-item .medi-app-process-step-text p',
            ]
        );
        $this->add_responsive_control(
            'c_padding',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .medi-app-process-step-item .medi-app-process-step-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'nubg',
            [
                'label' => __( 'Number Background', 'appilo' ),
                'type' => Controls_Manager::HEADING,
            ]
        );
        $this->add_control(
            'nc',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .medi-app-process-step-item .medi-app-process-number' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .medi-app-process-step-item:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'num_bg',
                'label' => __( 'Number Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .medi-app-process-step-item .medi-app-process-number, 
                {{WRAPPER}} .medi-app-process-step-item:after',
            ]
        );
        $this->add_responsive_control(
            'itbg',
            [
                'label' => __( 'Process Background', 'appilo' ),
                'type' => Controls_Manager::HEADING,
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
                'selector' => '{{WRAPPER}} .medi-app-process-step-item .medi-app-process-step-text',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .medi-app-process-step-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of App medi process section
    ============================================= -->                     
    <section  class="app-medi-process-section">
            <div class="app-medi-process-content">
                <div class="app-medi-process-text">
                    <div class="medi-app-process-step">';
                if ( $settings['list'] ) {
                    foreach ($settings['list'] as $list) {
                    echo '<div class="medi-app-process-step-item position-relative d-flex wow fadeFromUp" data-wow-delay="'.appilo_animate('50').'" data-wow-duration="1000ms">
                            <div class="medi-app-process-number text-center">
                                '.$list['list_number'].'
                            </div>
                            <div class="medi-app-process-step-text app-medi-headline pera-content position-relative">
                                <h3><a ' . get_that_link($list['link']) . '>'.$list['list_title'].'</a></h3>
                                <p>'.$list['list_info'].'</p>
                            </div>
                        </div>';
                    }
                }
            echo'</div>
                </div>
            </div>
    </section>
<!-- End of  App medi process section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new medi_process );
?>