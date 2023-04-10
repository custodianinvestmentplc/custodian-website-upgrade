<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class dia_fun_facts extends Widget_Base {

   public function get_name() {
      return 'dia-fun-facts';
   }

   public function get_title() {
      return __( 'Digital Agency Counter', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
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
            'counter_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Client' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '50' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number_extend', [
                'label' => __( 'Number Unit', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'K' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number_default', [
                'label' => __( 'Number Default', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '0' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_details', [
                'label' => __( 'Details', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We are focused on specific goals of our client with multiple outcomes towards profits.' , 'appilo' ),
                'show_label' => false,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => __( 'Counter List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_title' => __( 'Clients', 'appilo' ),
                        'counter_number' => __( '28', 'appilo' ),
                        'counter_number_extend' => __( 'K', 'appilo' ),
                        'counter_number_default' => __( '0', 'appilo' ),
                        'counter_details' => __( 'We are focused on specific goals of our client with multiple outcomes towards profits.', 'appilo' ),
                    ],
                    [
                        'counter_title' => __( 'Clients', 'appilo' ),
                        'counter_number' => __( '28', 'appilo' ),
                        'counter_number_extend' => __( 'K', 'appilo' ),
                        'counter_number_default' => __( '0', 'appilo' ),
                        'counter_details' => __( 'We are focused on specific goals of our client with multiple outcomes towards profits.', 'appilo' ),
                    ],
                    [
                        'counter_title' => __( 'Clients', 'appilo' ),
                        'counter_number' => __( '28', 'appilo' ),
                        'counter_number_extend' => __( 'K', 'appilo' ),
                        'counter_number_default' => __( '0', 'appilo' ),
                        'counter_details' => __( 'We are focused on specific goals of our client with multiple outcomes towards profits.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ counter_title }}}',
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __( 'Color Control', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-counter .fun-fact-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-counter .col-lg-4 .dia-fun-fact-item .fun-fact-tag',
            ]
        );

        $this->add_control(
            'number_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-item .fun-fact-number h3 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-item .fun-fact-number',
            ]
        );
        $this->add_control(
            'number_suff_color',
            [
                'label' => __( 'Suffix Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-item .fun-fact-number span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'number_suff_typo',
                'label' => __( 'Suffix Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-item .fun-fact-number span',
            ]
        );

        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-item p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-item p',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .dia-fun-fact-section .dia-fun-fact-counter' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo ' <!-- Start of Fun fact section
        ============================================= -->           
        <section  class="dia-fun-fact-section">
            <div class="container">
                <div class="dia-fun-fact-content">
                    <div class="dia-fun-fact-counter">
                        <div class="row">';
                    if ( $settings['list'] ) {
                        foreach ($settings['list'] as $item) {
                            echo '<div class="col-lg-4 col-md-4 counter-dynamic' . $item['_id'] . '">
                                <div class="dia-fun-fact-item dia-headline pera-content text-center">
                                    <span class="fun-fact-tag text-uppercase">' . $item['counter_title'] . '</span>
                                    <div class="fun-fact-number d-flex">
                                        <h3 class="odometer" data-count="' . $item['counter_number'] . '">' . $item['counter_number_default'] . '</h3><span>' . $item['counter_number_extend'] . '</span>
                                    </div>
                                    <p>'. $item['counter_details'] . '</p>
                                </div>
                            </div>';
                        }
                    }
                        echo '</div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Fun fact section
        ============================================= -->  
';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new dia_fun_facts );
?>