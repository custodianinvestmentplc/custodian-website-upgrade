<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_Appscreen extends Widget_Base {

   public function get_name() {
      return 'landing3_appscreen';
   }

   public function get_title() {
      return __( 'Appilo Lading V3 App Screen', 'appilo' );
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
        
        $repeater = new Repeater();
        $repeater->add_control(
			'app_screen',
			[
				'label' => esc_html__( 'App Screen Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
            'appscreens',
            [
                'label' => __('Add App Screen', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );
        $this->add_control(
			'app_st_se',
			[
				'label' => esc_html__( 'App Store', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
			'appstor_img',
			[
				'label' => esc_html__( 'App Store Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'appstor_link',
			[
				'label' => esc_html__( 'App Store Link', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $this->add_control(
			'play_st_se',
			[
				'label' => esc_html__( 'Play Store', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
			'playstor_img',
			[
				'label' => esc_html__( 'Play Store Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'playstor_link',
			[
				'label' => esc_html__( 'Play Store Link', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $this->end_controls_section();
        

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

    <!-- Apps Section -->
	<section class="pl3-apps-section">
		<div class="container">
			<div class="inner-container">
				<div class="apl3-app-carousel owl-carousel owl-theme">
                    <?php foreach($settings['appscreens'] as $item):?>
					<div class="slide">
						<div class="image">
							<img src="<?php echo esc_url($item['app_screen']['url']);?>" alt="" />
						</div>
					</div>
					<?php endforeach;?>
				</div>
				<div class="apps-button">
					<a href="<?php echo esc_url($settings['appstor_link']['url']);?>"><img src="<?php echo esc_url($settings['appstor_img']['url']);?>" alt="" /></a>
					<a href="<?php echo esc_url($settings['playstor_link']['url']);?>"><img src="<?php echo esc_url($settings['playstor_img']['url']);?>" alt="" /></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Apps Section -->

<?php

    }
    

}
Plugin::instance()->widgets_manager->register_widget_type( new Landing3_Appscreen() );
?>