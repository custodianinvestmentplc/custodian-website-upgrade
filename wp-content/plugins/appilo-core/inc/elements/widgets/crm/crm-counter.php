<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crm_counter extends Widget_Base {

   public function get_name() {
      return 'crm-counter';
   }

   public function get_title() {
      return __( 'CRM Counter', 'appilo' );
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
                'default' => __( 'Active Users' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '295' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number_extend', [
                'label' => __( 'Number Unit', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'K+' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number_default', [
                'label' => __( 'Number Default', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00' , 'appilo' ),
                'label_block' => true,
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
                        'counter_number' => __( '264', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '223', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '856', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '295', 'appilo' ),
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
                    '{{WRAPPER}} .crm-counter-text-icon p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-counter-text-icon p',
            ]
        );

        $this->add_control(
            'number_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-counter-text-icon .odometer' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-counter-text-icon .odometer',
            ]
        );
        $this->add_control(
            'number_suff_color',
            [
                'label' => __( 'Suffix Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-counter-text-icon strong' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'number_suff_typo',
                'label' => __( 'Suffix Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-counter-text-icon strong',
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-counter-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mbca',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bga_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-counter-text-icon:after',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-counter-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'section_shadow',
                'label' => __( 'Section Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-counter-wrapper',
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
                'selector' => '{{WRAPPER}} .crm-counter-wrapper',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of counter section
    ============================================= -->        
    <section  class="crm-counter-section">
        <div class="container">
            <div class="crm-counter-wrapper">
                <div class="row">';
            if ( $settings['list'] ) {
                foreach ($settings['list'] as $item) {
                    echo'<div class="col-lg-3 col-md-6 crm-counter-dynamic' . $item['_id'] . '">
                        <div class="crm-counter-text-icon position-relative text-center pera-content">
                            <span class="odometer" data-count="' . $item['counter_number'] . '">' . $item['counter_number_default'] . '</span><strong>' . $item['counter_number_extend'] . '</strong>
                            <p>' . $item['counter_title'] . '</p>
                        </div>
                    </div>';
                }
            }
                echo'</div>
            </div>
        </div>
    </section>
<!-- End of counter section
    ============================================= --> ';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crm_counter );
?>