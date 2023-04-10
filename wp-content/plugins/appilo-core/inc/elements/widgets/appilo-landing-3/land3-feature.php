<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_Feature extends Widget_Base {

   public function get_name() {
      return 'landing3_feature';
   }

   public function get_title() {
      return __( 'Appilo Lading V3 Feature', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'apl3_app_feature',
            [
                'label' => __('Appilo Feature', 'appilo'),
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
        
        $repeater = new Repeater();
        $repeater->add_control(
			'feature_img',
			[
				'label' => esc_html__( 'Feature Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
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
			'readmore_txt',
			[
				'label' => esc_html__( 'Read More', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
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
			'feature_bg_img',
			[
				'label' => esc_html__( 'Feature BG', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'feature_img',
			[
				'label' => esc_html__( 'Feature Image', 'appilo' ),
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
                    '{{WRAPPER}} .feature-block .inner-box h4 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'ft_title_hv_color',
            [
                'label' =>   esc_html__( 'Feature Title Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-block .inner-box h4 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_typo',
                'label' =>   esc_html__( 'Feature Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-block .inner-box h4',
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
                    '{{WRAPPER}} .feature-block .inner-box .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_text_typo',
                'label' =>   esc_html__( 'Feature Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-block .inner-box .text',
            ]
        );
        $this->add_control(
			'feature_link_st',
			[
				'label' => esc_html__( 'Feature Link Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'ft_link_color',
            [
                'label' =>   esc_html__( 'Feature Link Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-block .inner-box .read-more' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'ft_link_hover_color',
            [
                'label' =>   esc_html__( 'Feature Link Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-block .inner-box .read-more:hover, .feature-block .inner-box .read-more:hover::before' => 'color: {{VALUE}}; border-color:{{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_link_typo',
                'label' =>   esc_html__( 'Feature Link Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-block .inner-box .read-more',
            ]
        );
        $this->end_controls_section();
        

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

   <!-- Feature Section -->
	<section class="apl3feature-section" id="feature">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="apl3-sec-title centered">
				<div class="title"><?php echo esc_html($settings['subtitle']);?></div>
				<h2><?php echo __($settings['title']);?></h2>
				<div class="text"><?php echo __($settings['description']);?></div>
			</div>
			
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="shape-one" style="background-image:url(<?php echo esc_url($settings['feature_bg_img']['url']);?>)"></div>
						<div class="image">
							<img src="<?php echo esc_url($settings['feature_img']['url']);?>" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
						<?php foreach($settings['features'] as $item):?>
							<!-- Feature Block -->
							<div class="feature-block col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon"><img src="<?php echo esc_url($item['feature_img']['url']);?>" alt="" /></span>
									<h4><a href="<?php echo esc_url($item['feature_link']['url']);?>"><?php echo esc_html($item['feature_title']);?></a></h4>
									<div class="text"><?php echo __($item['feature_txt']);?></div>
									<a href="<?php echo esc_url($item['feature_link']['url']);?>" class="read-more"><?php echo esc_html($item['readmore_txt']);?></a>
								</div>
							</div>
							<?php endforeach;?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Feature Section -->

<?php

    }
    

}
Plugin::instance()->widgets_manager->register_widget_type( new Landing3_Feature() );
?>