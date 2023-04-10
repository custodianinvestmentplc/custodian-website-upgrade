<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_fun_facts extends Widget_Base {

   public function get_name() {
      return 'appilo-fun-facts';
   }

   public function get_title() {
      return __( 'Fun Facts Counter', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'fab fa-autoprefixer';
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
            'section_color',
            [
                'label' => __( 'Color Control', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'funfacts_color',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .fun-fact .single-fun-fact span.counter',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'num_typo',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .fun-fact .single-fun-fact span.counter',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'txt_typo',
                'label' => __( 'Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .fun-fact .single-fun-fact p',
            ]
        );
        $this->add_control(
            'text_color',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .fun-fact .single-fun-fact p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'counter_number', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'List Title' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'counter_details', [
                'label' => __( 'Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'List Content' , 'appilo' ),
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
                        'counter_number' => __( '1265', 'appilo' ),
                        'counter_details' => __( 'Downloads', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '580', 'appilo' ),
                        'counter_details' => __( 'Users', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '1000', 'appilo' ),
                        'counter_details' => __( '5 Star Rating', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '900', 'appilo' ),
                        'counter_details' => __( 'Likes', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ counter_details }}}',
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section class="fun-fact" > <div class="container"><div class="row justify-content-md-center">';

        if ( $settings['list'] ) {
            foreach (  $settings['list'] as $item ) {
                echo '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"><div class="single-fun-fact">';
                echo '<p><span class="counter counter-dynamic' . $item['_id'] . '">' . $item['counter_number'] . '</span>'. $item['counter_details'] . '</p>';
                echo '</div></div>';
            }
        }
        echo '</div></div><div class="separator"></div></section>';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_fun_facts );
?>