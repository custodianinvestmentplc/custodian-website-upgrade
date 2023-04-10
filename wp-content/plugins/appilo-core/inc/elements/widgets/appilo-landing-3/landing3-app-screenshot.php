<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_Appscreenshot extends Widget_Base {

   public function get_name() {
      return 'landing3_appscreenshot';
   }

   public function get_title() {
      return __( 'App Screenshot V3', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'apl3_app_screen',
            [
                'label' => __('Appilo App Screen', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'app_screen_mokup',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .screen-mobile-image',
			]
		);
        $this->add_control(
			'app_title',
			[
				'label' => esc_html__( 'App Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true
			]
		);
        
        
        $this->add_control(
			'appgallery',
			[
				'label' => esc_html__( 'Add Screenshot', 'appilo' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'default' => [],
			]
		);
        
        $this->end_controls_section();
        $this->start_controls_section(
            'style_banner',
            [
                'label' => __('Banner Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_sclor',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3screenshot-section .title-box h1' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_link_typo',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3screenshot-section .title-box h1',
            ]
        );
        $this->end_controls_section();
        

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

    <!-- Screenshot Section -->
	<section class="apl3screenshot-section">
		<div class="container">
			
			<!-- Sec Title -->
			<div class="title-box paroller">
				<div data-paroller-factor="-0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal">
					<h1><?php echo esc_html($settings['app_title']);?></h1>
				</div>
			</div>
			

            <div class="row appScreenshotCarousel-container swiper-container">
				<div class="screen-mobile-image"></div>
				<div class="swiper-wrapper">
					<?php foreach($settings['appgallery'] as $item):?>
					    <div class="swiper-slide" style="background-image:url(<?php echo esc_url($item['url']);?>)"></div>
                    <?php endforeach;?>
				</div>
				<!-- Add Arrows -->
			</div>
			
		</div>
	</section>
	<!-- End Screenshot Section -->

<?php

    }
    

}
Plugin::instance()->widgets_manager->register_widget_type( new Landing3_Appscreenshot() );
?>