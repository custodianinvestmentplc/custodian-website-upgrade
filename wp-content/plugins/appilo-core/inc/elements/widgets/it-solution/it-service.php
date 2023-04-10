<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class it_service extends Widget_Base {

   public function get_name() {
      return 'it-service';
   }

   public function get_title() {
      return __( 'IT Service', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'serv_tab',
            [
                'label' => __('Service Tab', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'tab_title',
            [
                'label' => __( 'Tab Title', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('Marketing', 'appilo'),
            ]
        );
        $repeater->add_control(
            'a_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('Explore our range of bespoke software for the marketing.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'd_list',
            [
                'label' => __( 'Details', 'appilo' ),
                'type' => \Appilo_Core::LIST_CONTROL,
            ]
        );
        $repeater->add_control(
            'a_img',
            [
                'label' => __('Image 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/ser-tab1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'a_img2',
            [
                'label' => __('Image 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/tab-icon1.png',
                ],
            ]
        );
        $repeater->add_control(
            'btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('Check Details <i aria-hidden="true" class="fas fa-arrow-right"></i>', 'appilo'),
            ]
        );
        $repeater->add_control(
            'a_link',
            [
                'label' =>   esc_html__( 'Link', 'appilo' ),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'box_list',
            [
                'label' => __( 'Tab List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'default' => [
                    [
                        'tab_title' => __( 'Marketing', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Web Designing', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Web Development', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ tab_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_tabutton',
            [
                'label' => __('Tab Button Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'atb',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-service-tab-btn .nav-tabs .nav-link',
            ]
        );
        $this->add_control(
            'abtc',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-service-tab-btn .nav-tabs .nav-link' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'aaabbbb_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .it-up-service-tab-btn .nav-tabs:before',
            ]
        );
        $this->add_control(
            'abtca',
            [
                'label' =>   esc_html__( 'Title Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-service-tab-btn .nav-tabs .nav-link' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'aaabb_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .it-up-service-tab-btn .nav-tabs .nav-link:before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bbox_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-service-tab-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'abb_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .it-up-service-tab-btn',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'style_ta',
            [
                'label' => __('Tab Content Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'at',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-service-tab-text h3',
            ]
        );

        $this->add_control(
            'atc',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-service-tab-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ain',
                'label' =>   esc_html__( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-service-tab-text li',
            ]
        );

        $this->add_control(
            'ainc',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-service-tab-text li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'ab_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-service-tab-wrap',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-up-service-tab-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-up-service-tab-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-service-tab-wrap',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'ab_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .it-up-service-tab-wrap',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_btn',
            [
                'label' => __('Button Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $item_selector = '{{WRAPPER}} .it-up-service-tab-text .it-up-ser-btn';

        $this->add_responsive_control(
            'btn_w',
            [
                'label' => __( 'Button width', 'ashelement' ),
                'type' =>  Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],

                ],
                'size_units' => [ 'px', '%'],
                'selectors' => [
                    $item_selector => 'width: {{SIZE}}{{UNIT}};',
                ],

            ]
        );
        $this->add_responsive_control(
            'btn_h',
            [
                'label' => __( 'Button Height', 'ashelement' ),
                'type' =>  Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],

                ],
                'size_units' => [ 'px', '%'],
                'selectors' => [
                    $item_selector => 'height: {{SIZE}}{{UNIT}};',
                ],

            ]
        );
        $this->add_responsive_control(
            'btn_padding',
            [
                'label' => __( 'Button Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    $item_selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs('btn_tab');

        $this->start_controls_tab(
            'btn_normal',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'bt',
                'label' =>   esc_html__( 'Typography', 'appilo' ),
                'selector' => $item_selector,
            ]
        );

        $this->add_control(
            'bc',
            [
                'label' =>   esc_html__( 'Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $item_selector => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bbbackground',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => $item_selector,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bbborder',
                'label' => __( 'Border', 'appilo' ),
                'selector' => $item_selector,
            ]
        );
        $this->add_responsive_control(
            'bbborder_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    $item_selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'btn_hover',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $item_selector_hover = '{{WRAPPER}} .it-up-service-tab-text .it-up-ser-btn:hover';
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'h_bt',
                'label' =>   esc_html__( 'Typography', 'appilo' ),
                'selector' => $item_selector_hover,
            ]
        );

        $this->add_control(
            'h_bc',
            [
                'label' =>   esc_html__( 'Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $item_selector_hover => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bbh_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => $item_selector_hover,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bbh_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => $item_selector_hover,
            ]
        );
        $this->add_responsive_control(
            'bbh_border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    $item_selector_hover => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'sec_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-up-service-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        echo '<!-- Start of service section
	============================================= -->
	<section id="it-up-service" class="it-up-service-section position-relative">
		
			<div class="it-up-service-content">
				<div class="row">
					<div class="col-lg-3">
						<div class="it-up-service-tab-btn">
							<ul id="tabs" class="nav text-capitalize nav-tabs">';
        $index = 0;
        if ( $settings['box_list'] ) {
            foreach ($settings['box_list'] as $box) {
                $index++;
                if ($index == 1){
                    $class = 'active';
                }else{
                    $class = '';
                }

                echo '<li class="nav-item"><a href="#" data-target="#'.$box['_id'].'" data-toggle="tab" class="nav-link text-capitalize '.$class.'">'.$box['tab_title'].'</a></li>';
                        }
                    }
                    echo'</ul>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="it-up-service-tab-content">
                                <div id="tabsContent" class="tab-content">';
                $index2 = 0;
                if ( $settings['box_list'] ) {
                    foreach ($settings['box_list'] as $box) {
                        $index2++;
                        if ($index2 == 1){
                            $class2 = 'active show';
                        }else{
                            $class2 = '';
                        }
                echo '<div id="'.$box['_id'].'" class="tab-pane fade '.$class2.'">
									<div class="it-up-service-tab-wrap clearfix">
										<div class="it-up-service-tab-text position-relative float-left ul-li-block headline-1">
											<h3>'.$box['a_title'].'</h3>
											<ul>';
                                                get_multi_list($box['d_list'], 'li');
                                         echo'</ul>
                                            <a class="it-up-ser-btn" '.get_that_link($box['a_link']).'>'.$box['btn'].'</a>
											<span class="it-up-tab-icon position-absolute">
											   '.get_that_image($box['a_img2']).'
											</span>
										</div>
										<div class="it-up-service-img float-right">
											'.get_that_image($box['a_img']).'
										</div>
									</div>
								</div>';
                        }
                    }
                    echo'</div>
						</div>
					</div>
				</div>
			</div>

	</section>
<!-- End of service section
	============================================= -->';

    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new it_service );
?>