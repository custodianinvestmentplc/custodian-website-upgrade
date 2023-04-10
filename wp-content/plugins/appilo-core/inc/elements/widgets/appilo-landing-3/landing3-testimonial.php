<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_Testimonial extends Widget_Base {

   public function get_name() {
      return 'landing3_testimonial';
   }

   public function get_title() {
      return __( 'Appilo Lading V3 Testimonial', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'apl3_test_feature',
            [
                'label' => __('Testimonial Feature', 'appilo'),
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
			'authore_img',
			[
				'label' => esc_html__( 'Authore Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true
			]
		);
        $this->add_control(
			'shape',
			[
				'label' => esc_html__( 'Shape', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true
			]
		);
        
        $repeater = new Repeater();
        $repeater->add_control(
			'authorre_img',
			[
				'label' => esc_html__( 'Authore Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $repeater->add_control(
			'authore_name',
			[
				'label' => esc_html__( 'Authore Name', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'feedback',
			[
				'label' => esc_html__( 'Feedback', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
        $repeater->add_control(
			'sop_1',
			[
				'label' => esc_html__( 'Social Icon 1', 'appilo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $repeater->add_control(
			'sop_link',
			[
				'label' => esc_html__( 'Social Link 1', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $repeater->add_control(
			'sop_2',
			[
				'label' => esc_html__( 'Social Icon 2', 'appilo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $repeater->add_control(
			'sop2_link',
			[
				'label' => esc_html__( 'Social Link 2', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $repeater->add_control(
			'sop_3',
			[
				'label' => esc_html__( 'Social Icon 3', 'appilo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $repeater->add_control(
			'sop3_link',
			[
				'label' => esc_html__( 'Social Link 3', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $repeater->add_control(
			'sop_4',
			[
				'label' => esc_html__( 'Social Icon 4', 'appilo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $repeater->add_control(
			'sop4_link',
			[
				'label' => esc_html__( 'Social Link 4', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        
        $this->add_control(
            'testimonials',
            [
                'label' => __('Add Testimonials Item', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
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
            'test_auth_clr',
            [
                'label' =>   esc_html__( 'Authore Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-testimonial-block h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_typo',
                'label' =>   esc_html__( 'Authore Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-testimonial-block h3',
            ]
        );
        $this->add_control(
			'feature_txt_st',
			[
				'label' => esc_html__( 'Feedback Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'feedback_color',
            [
                'label' =>   esc_html__( 'Feedback Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-testimonial-block .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_text_typo',
                'label' =>   esc_html__( 'Feature Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-testimonial-block .text',
            ]
        );
        $this->add_control(
			'icon_style',
			[
				'label' => esc_html__( 'Social Icon', 'appilo' ),
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
                    '{{WRAPPER}} .apl3-testimonial-block .social-box li a' => 'color: {{VALUE}}; border-color:{{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_hover_color',
            [
                'label' =>   esc_html__( 'Icon Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-testimonial-block .social-box li a:hover' => 'color: {{VALUE}}; border-color:{{VALUE}}',
                ],
            ]
        );
        $this->add_control(
			'nav_style',
			[
				'label' => esc_html__( 'Nav Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'navbackground',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .apl3-testimonial-section .owl-nav .owl-next, .apl3-testimonial-section .owl-nav .owl-prev:hover',
			]
		);
        
        $this->end_controls_section();
        

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

   <!-- Testimonial Section -->
	<section class="apl3-testimonial-section">
		<div class="shape-one" style="background-image:url(<?php echo esc_url($settings['authore_img']['url']);?>)"></div>
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="apl3-sec-title centered">
				<div class="title"><?php echo esc_html($settings['subtitle']);?></div>
				<h2><?php echo __($settings['title']);?></h2>
			</div>
			
			<div class="single-item-carousel owl-carousel owl-theme">
                <?php foreach($settings['testimonials'] as $item):?>
				<!-- Testimonial Block -->
				<div class="apl3-testimonial-block">
					<div class="inner-box">
						<div class="row clearfix">
						
							<!-- Content Column -->
							<div class="content-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="text"><?php echo __($item['feedback']);?></div>
									<h3><?php echo esc_html($item['authore_name']);?></h3>
									<!-- Social Box -->
									<ul class="social-box">
                                        <?php if(!empty($item['sop_1']) && $item['sop_link']['url']):?>
										    <li><a href="<?php echo esc_url($item['sop_link']['url']);?>"><?php \Elementor\Icons_Manager::render_icon( $item['sop_1'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                        <?php endif;?>

                                        <?php if(!empty($item['sop_2']) && $item['sop2_link']['url']):?>
										    <li><a href="<?php echo esc_url($item['sop2_link']['url']);?>"><?php \Elementor\Icons_Manager::render_icon( $item['sop_2'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                        <?php endif;?>
                                        
                                        <?php if(!empty($item['sop_3']) && $item['sop3_link']['url']):?>
										    <li><a href="<?php echo esc_url($item['sop3_link']['url']);?>"><?php \Elementor\Icons_Manager::render_icon( $item['sop_3'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                        <?php endif;?>

                                        <?php if(!empty($item['sop_4']) && $item['sop4_link']['url']):?>
										    <li><a href="<?php echo esc_url($item['sop4_link']['url']);?>"><?php \Elementor\Icons_Manager::render_icon( $item['sop_4'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                        <?php endif;?>
									</ul>
								</div>
							</div>
							
							<!-- Image Column -->
							<div class="image-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="shape-one" style="background-image:url(<?php echo esc_url($settings['shape']['url']);?>)"></div>
									<div class="image">
										<img src="<?php echo esc_url($item['authorre_img']['url']);?>" alt="" />
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
                <?php endforeach;?>
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Section -->

<?php

    }
    

}
Plugin::instance()->widgets_manager->register_widget_type( new Landing3_Testimonial() );
?>