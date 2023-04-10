<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class circle_counter extends Widget_Base {

   public function get_name() {
      return 'circle-counter';
   }

   public function get_title() {
      return __( 'Circle Counter', 'appilo' );
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

        $this->add_control(
            'counter_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => __( '83' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'counter_number_extend', [
                'label' => __( 'Number Unit', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '%' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_responsive_control(
            'data_width',
            [
                'label' => __( 'Data Width', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'data_height',
            [
                'label' => __( 'Data Height', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'data_thickness',
            [
                'label' => __( 'Data Thickness', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
            'left_right',
            [
                'label' => __( 'Left / Right', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .counter-boxed .count-box' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'top_bottom',
            [
                'label' => __( 'Up / Down', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .counter-boxed .count-box' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'n_typo',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .counter-boxed .count-text',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'text_color',
                'label' => __( 'Text BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .counter-boxed .count-text',
            ]
        );
        $this->add_control(
            'perc_active',
            [
                'label' => __( 'Percentage Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-boxed .count-box' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'circle_active',
            [
                'label' => __( 'Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'circle_inactive',
            [
                'label' => __( 'Inactive Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of counter section
    ============================================= -->        
    <div  class="counter-boxed seo-2-headline position-relative  wow fadeFromUp" data-wow-delay="100ms" data-wow-duration="1000ms">
            <div class="graph-outer">
                <input type="text" class="dial" data-fgColor="' . $settings['circle_active'] . '" data-linecap="round" data-bgColor="' . $settings['circle_inactive'] . '" data-width="' . $settings['data_width']['size'] . '" data-height="' . $settings['data_height']['size'] . '"   value="' . $settings['counter_number'] . '" thickness="' . $settings['data_thickness']['size'] . '">
                <div class="inner-text count-box"><span class="count-text" data-stop="' . $settings['counter_number'] . '" data-speed="3500"></span>' . $settings['counter_number_extend'] . '</div>
            </div>
        </div>
<!-- End of counter section
    ============================================= --> ';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new circle_counter );
?>