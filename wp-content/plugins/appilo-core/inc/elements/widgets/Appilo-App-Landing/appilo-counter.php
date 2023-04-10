<?php
namespace Elementor;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


class appilo_counter extends Widget_Base {

    public function get_name() {
        return 'appilo_counter';
    }

    public function get_title() {
        return __('Appilo Counter', 'appilo');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['ashelement-addons'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'about_box',
            [
                'label' => __('Intro List', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
         $repeater->add_control(
            'num',
            [
                'label' => __( 'Number', 'appilo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' =>  __('70', 'appilo'),
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' =>  __('Complete Project', 'appilo'),
            ]
        );
       
        $this->add_control(
            'box_list',
            [
                'label' => __( 'Service Box', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Counter Style', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'counter_title_style',
			[
				'label' => __( 'Counter Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-counter-column .aplpg-counter-content .aplpg-subtitle span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-counter-column .aplpg-counter-content .aplpg-subtitle span',
            ]
        );
        $this->add_control(
			'counter_num_style',
			[
				'label' => __( 'Counter Number Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'num_color',
            [
                'label' =>   esc_html__( 'Number Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-counter-column .aplpg-counter-content .aplpg-headline h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Number_typography',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-counter-column .aplpg-counter-content .aplpg-headline h2',
            ]
        );
        $this->add_control(
			'counter_icon_style',
			[
				'label' => __( 'Counter Icon Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'icon_color',
            [
                'label' =>   esc_html__( 'Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-counter-column .aplpg-icon-wrapper i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'gradient',  ],
                'selector' => '{{WRAPPER}} .aplpg-counter-column .aplpg-icon-wrapper',
            ]
        );
        $this->add_control(
			'icon_width',
			[
				'label' => __( 'Icon width', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-counter-column .aplpg-icon-wrapper' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'icon_height',
			[
				'label' => __( 'Icon Height', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-counter-column .aplpg-icon-wrapper' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'icon_line_height',
			[
				'label' => __( 'Icon Lineheight', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-counter-column .aplpg-icon-wrapper' => 'line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'icon_box_round',
			[
				'label' => __( 'Icon Box Radius', 'appilo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .aplpg-counter-column .aplpg-icon-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);



        $this->end_controls_section();
 
    }
        
    protected function render() {

    $settings = $this->get_settings();


        echo '    <section class="aplpg-counter-section">
                <div class="row">
                    ';

                if ( $settings['box_list'] ) {
                    foreach ($settings['box_list'] as $box) {

                echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="aplpg-counter-column wow fadeInUp">
                            <div class="aplpg-icon-wrapper">';
                        \Elementor\Icons_Manager::render_icon( $box['icon'], [ 'aria-hidden' => 'true' ] );
                    echo'</div>
                            <div class="aplpg-counter-content">
                                <div class="aplpg-headline">
                                    <h2 class="aplpg-counter">'.$box['num'].'</h2><span>+</span>
                                </div>
                                <div class="aplpg-subtitle">
                                    <span>'.$box['title'].'</span>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                }
        echo'
        
  
    </div>
    <section>';
}



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_counter );
?>