<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_platform extends Widget_Base {

   public function get_name() {
      return 'osaas-platform';
   }

   public function get_title() {
      return __( 'Osaas Platform', 'appilo' );
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
                'label' => __('Platform Tab', 'appilo'),
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
                'default' =>  __('Intro & Product Production', 'appilo'),
            ]
        );
        $repeater->add_control(
            'a_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('Take Your Users <span>In One Platform.</span>', 'appilo'),
            ]
        );
        $repeater->add_control(
            'a_info',
            [
                'label' => __( 'Tab Info', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('The <span>Data Transfer Project</span> was launched in <span>2020</span> to create an open-source, service-to-service data portability platform so that all individuals across the web could easily move their data between <span>online service</span> providers whenever they want.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'a_img',
            [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/platform-icon.png',
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
                        'tab_title' => __( 'Intro & Product Production', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'About This Software', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Intro & Product Production', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Intro & Product Production', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ tab_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_tabutton',
            [
                'label' => __('Tab Nav Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'atb',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-platform-app-osaas-intro-section .platform-tabs .tab-btns .tab-btn',
            ]
        );
        $this->add_control(
            'abtc',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-platform-app-osaas-intro-section .platform-tabs .tab-btns .tab-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'aaabbbb_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .app-osaas-platform-app-osaas-intro-section .platform-tabs .tab-btns .tab-btn',
            ]
        );
        $this->add_control(
            'abtca',
            [
                'label' =>   esc_html__( 'Title Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-platform-app-osaas-intro-section .platform-tabs .tab-btns .tab-btn.active-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'abtcaa',
            [
                'label' =>   esc_html__( 'Circle Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-platform-app-osaas-intro-section .platform-tabs .tab-btns .tab-btn:before' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'bbox_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-platform-app-osaas-intro-section .platform-tabs .tab-btns .tab-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bboxa_shadow',
                'label' => __( 'Box Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-platform-app-osaas-intro-section .platform-tabs .tab-btns .tab-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bboxaa_shadow',
                'label' => __( 'Box Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-platform-app-osaas-intro-section .platform-tabs .tab-btns .tab-btn:hover',
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
        $this->add_control(
            'ataac',
            [
                'label' =>   esc_html__( 'Icon BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .platform-tab-content .inner-content .icon-outer .icon-box' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'ataaca',
            [
                'label' =>   esc_html__( 'Icon Dot 1 Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .platform-tab-content .inner-content .icon-outer .circles-layer:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'ataacaa',
            [
                'label' =>   esc_html__( 'Icon Dot 2 Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .platform-tab-content .inner-content .icon-outer .circles-layer:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'at',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .sec-title h1',
            ]
        );

        $this->add_control(
            'atc',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'aat',
                'label' =>   esc_html__( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .sec-title .title',
            ]
        );

        $this->add_control(
            'atcaa',
            [
                'label' =>   esc_html__( 'Sub Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title .title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ain',
                'label' =>   esc_html__( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .platform-tab-content .inner-content .text',
            ]
        );

        $this->add_control(
            'ainc',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .platform-tab-content .inner-content .text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'ab_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .platform-tab-content .inner-content',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .platform-tab-content .inner-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .platform-tab-content .inner-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .platform-tab-content .inner-content',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'ab_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .platform-tab-content .inner-content',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
echo '	
	<!-- Platform Intro Section -->
    <section class="app-osaas-platform-app-osaas-intro-section">
        	
            <!-- Platform Tabs -->
            <div class="platform-tabs app-osaas-tabs-box">
                <div class="row clearfix">
                	<!--Column-->
                    <div class="buttons-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							<!--Tab Btns-->
							<ul class="tab-btns tab-buttons clearfix">';
                $index = 0;
                if ( $settings['box_list'] ) {
                    foreach ($settings['box_list'] as $box) {
                        $index++;
                        if ($index == 1){
                            $class = 'active-btn';
                        }else{
                            $class = '';
                        }

                echo '<li data-tab="#'.$box['_id'].'" class="tab-btn '.$class.'"><span>'.$box['tab_title'].'</span></li>';
                        }
                    }
                    echo'</ul>
						</div>
                    </div>
                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<!--Tabs Container-->
							<div class="tabs-content">';
                    $index2 = 0;
                    if ( $settings['box_list'] ) {
                        foreach ($settings['box_list'] as $box) {
                            $index2++;
                            if ($index2 == 1){
                                $class2 = 'active-tab';
                            }else{
                                $class2 = '';
                            }
                echo '<div class="tab '.$class2.'" id="'.$box['_id'].'">
									<div class="content">
										<div class="platform-tab-content">
											<div class="inner-content">
												<span class="big-icon">
                                                              '.get_that_image($box['a_img']).'
                                                         </span>
												<div class="icon-outer">
													<div class="circles-layer"></div>
													<div class="icon-box">
														<span class="icon">
                                                              '.get_that_image($box['a_img']).'
                                                          </span>
													</div>
												</div>
												<!-- Sec Title -->
												<div class="sec-title">
													<div class="title">'.$box['tab_title'].'</div>
													<h1>'.$box['a_title'].'</h1>
												</div>
												<div class="text">'.$box['a_info'].'</div>
											</div>
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
	<!-- End Platform Intro Section -->
	';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_platform );
?>