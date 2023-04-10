<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_Step extends Widget_Base {

   public function get_name() {
      return 'landing3_step';
   }

   public function get_title() {
      return __( 'Appilo Lading V3 Step', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'apl3_app_step',
            [
                'label' => __('Appilo Step', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true
			]
		);
        $this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'shape-imgbackground',
				'label' => esc_html__( 'Background', 'appilo' ),
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .step-block .block-inner .icon-box',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'shape-shv-imgbackground',
				'label' => esc_html__( 'Background', 'appilo' ),
				'types' => [ 'classic' ],
				'exclude' => [ 'color' ],
				'selector' => '{{WRAPPER}} .step-block .block-inner .icon-box::before',
			]
		);
        $repeater = new Repeater();
        $repeater->add_control(
			'feature_icon',
			[
				'label' => esc_html__( 'Feature Icon', 'appilo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $repeater->add_control(
			'feature_title',
			[
				'label' => esc_html__( 'Feature Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'feature_txt',
			[
				'label' => esc_html__( 'Feature Text', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
        $repeater->add_control(
			'feature_link',
			[
				'label' => esc_html__( 'Feature Link', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $this->add_control(
            'features',
            [
                'label' => __('Add Feature Item', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );
        $this->add_control(
			'step_img',
			[
				'label' => esc_html__( 'Step Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'clock_img',
			[
				'label' => esc_html__( 'Clock Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'time_img',
			[
				'label' => esc_html__( 'Time Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
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
			'section_bg_se',
			[
				'label' => esc_html__( 'Section Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'section_bg_clr',
            [
                'label' =>   esc_html__( 'Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl2-steps-section' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
			'subheading_st',
			[
				'label' => esc_html__( 'Sub Heading Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'sub_heading_color',
            [
                'label' =>   esc_html__( 'Sub Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-sec-title .title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_heading_typo',
                'label' =>   esc_html__( 'Sub Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-sec-title .title',
            ]
        );
        $this->add_control(
			'heading_st',
			[
				'label' => esc_html__( 'Heading Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-sec-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-sec-title h2',
            ]
        );
        $this->add_control(
			'desc_st',
			[
				'label' => esc_html__( 'Desc Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Information Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section.land3-banner .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' =>   esc_html__( 'Information Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section.land3-banner .text',
            ]
        );
        $this->add_control(
			'social_icon_st',
			[
				'label' => esc_html__( 'Social Icon Style', 'appilo' ),
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
                    '{{WRAPPER}} .step-block .block-inner .icon-box .icon' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
			'feature_title_st',
			[
				'label' => esc_html__( 'Feature Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'ft_title_color',
            [
                'label' =>   esc_html__( 'Feature Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .step-block .block-inner h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'ft_title_hv_color',
            [
                'label' =>   esc_html__( 'Feature Title Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .step-block .block-inner h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_typo',
                'label' =>   esc_html__( 'Feature Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .step-block .block-inner h3',
            ]
        );
        $this->add_control(
			'feature_txt_st',
			[
				'label' => esc_html__( 'Feature Text Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'ft_txt_color',
            [
                'label' =>   esc_html__( 'Feature Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .step-block .block-inner .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_text_typo',
                'label' =>   esc_html__( 'Feature Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .step-block .block-inner .text',
            ]
        );
        $this->end_controls_section();
        

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

    <!-- Steps Section -->
	<section class="apl2-steps-section" id="services">
		<div class="container">
			<div class="row clearfix">
			
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="apl3-sec-title">
							<div class="title"><?php echo esc_html($settings['subtitle']);?></div>
							<h2><?php echo __($settings['title']);?></h2>
							<div class="text"><?php echo __($settings['description']);?></div>
						</div>
						
						<?php foreach($settings['features'] as $item):?>
						<!-- Step Block -->
						<div class="step-block">
							<div class="block-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<span class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon( $item['feature_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </span>
								</div>
								<h3><a href="<?php echo esc_url($item['feature_link']['url']);?>"><?php echo esc_html($item['feature_title']);?></a></h3>
								<div class="text"><?php echo __($item['feature_txt']);?></div>
							</div>
						</div>
						<?php endforeach;?>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-1">

						<div class="image" data-depth="0.10">
							<img src="<?php echo esc_url($settings['step_img']['url']);?>" alt="" />
						</div>

						<div class="clock-image" data-depth="0.30">
							<img src="<?php echo esc_url($settings['clock_img']['url']);?>" alt="" />
						</div>

						<div class="time-image" data-depth="0.20">
							<img src="<?php echo esc_url($settings['time_img']['url']);?>" alt="" />
						</div>
                        
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Steps Section -->

<?php

    }
    

}
Plugin::instance()->widgets_manager->register_widget_type( new Landing3_Step() );
?>