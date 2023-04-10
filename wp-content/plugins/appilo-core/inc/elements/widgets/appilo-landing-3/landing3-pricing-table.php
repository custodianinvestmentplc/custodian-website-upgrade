<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_Pricing extends Widget_Base {

   public function get_name() {
      return 'landing3_pricing';
   }

   public function get_title() {
      return __( 'Appilo Lading V3 Pricing', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'apl3_pricing_info',
            [
                'label' => __('Pricing Content', 'appilo'),
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
                'label_block' => true
			]
		);
		$this->add_control(
			'tab_month',
			[
				'label' => esc_html__( 'Monthly Tab', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true
			]
		);
		$this->add_control(
			'tab_yr',
			[
				'label' => esc_html__( 'Yearly Tab', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true
			]
		);
        $repeater = new Repeater();
        $repeater->add_control(
			'is_populer',
			[
				'label' => esc_html__( 'Is Populer', 'appilo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'YES', 'appilo' ),
				'label_off' => esc_html__( 'NO', 'appilo' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
        $repeater->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'txt',
			[
				'label' => esc_html__( 'Text', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
        $repeater->add_control(
			'price',
			[
				'label' => esc_html__( 'Price', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'period',
			[
				'label' => esc_html__( 'Period', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'btn_label',
			[
				'label' => esc_html__( 'Button Label', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'btn_link',
			[
				'label' => esc_html__( 'Button Link', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $repeater->add_control(
			'pricing_list',
			[
				'label' => esc_html__( 'Pricing List', 'appilo' ),
				'description' => esc_html__( 'Support Only List Item ul', 'appilo' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);
        
        $this->add_control(
            'pricingsmonthly',
            [
                'label' => __('Add Monthly Pricing Item', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
			'is_populer',
			[
				'label' => esc_html__( 'Is Populer', 'appilo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'YES', 'appilo' ),
				'label_off' => esc_html__( 'NO', 'appilo' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
        $repeater->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'txt',
			[
				'label' => esc_html__( 'Text', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
        $repeater->add_control(
			'price',
			[
				'label' => esc_html__( 'Price', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'period',
			[
				'label' => esc_html__( 'Period', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'btn_label',
			[
				'label' => esc_html__( 'Button Label', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        $repeater->add_control(
			'btn_link',
			[
				'label' => esc_html__( 'Button Link', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $repeater->add_control(
			'pricing_list',
			[
				'label' => esc_html__( 'Pricing List', 'appilo' ),
				'description' => esc_html__( 'Support Only List Item ul', 'appilo' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);
        
        $this->add_control(
            'pricingsyearly',
            [
                'label' => __('Add Yearly Pricing Item', 'appilo'),
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
			'desc_txt_st',
			[
				'label' => esc_html__( 'Description Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'description_color',
            [
                'label' =>   esc_html__( 'Description Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-sec-title .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_text_typo',
                'label' =>   esc_html__( 'Desc Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-sec-title .text',
            ]
        );

        $this->add_control(
			'pricing_tab_style',
			[
				'label' => esc_html__( 'Tab Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'tab___color',
            [
                'label' =>   esc_html__( 'Tab Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-pricing-tabs .tab-buttons .tab-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'tab_bg__color',
            [
                'label' =>   esc_html__( 'Tab BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-pricing-tabs .tab-buttons .tab-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'tab_active__color',
            [
                'label' =>   esc_html__( 'Tab Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-pricing-tabs .tab-buttons .tab-btn:hover, .apl3-pricing-tabs .tab-buttons .tab-btn.active-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_bg_color',
            [
                'label' =>   esc_html__( 'Tab Active BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-pricing-tabs .tab-buttons .tab-btn:hover, .apl3-pricing-tabs .tab-buttons .tab-btn.active-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_tb_typo',
                'label' =>   esc_html__( 'Tab Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-pricing-tabs .tab-buttons .tab-btn',
            ]
        );
        $this->add_control(
			'pricing_info_style',
			[
				'label' => esc_html__( 'Pricing Ttile Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'title__color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block .inner-box h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'title_active_color',
            [
                'label' =>   esc_html__( 'Title Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block.active .inner-box h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_pricing_typo',
                'label' =>   esc_html__( 'Pricing Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-price-block .inner-box h2',
            ]
        );
        $this->add_control(
			'pricing_txt_style',
			[
				'label' => esc_html__( 'Pricing Text Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'txt__color',
            [
                'label' =>   esc_html__( 'Pricing Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block .inner-box .text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'txt_active_color',
            [
                'label' =>   esc_html__( 'Pricing Text Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block.active .inner-box .text' => 'color: {{VALUE}};',
                ],
            ]
        );
        
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_pricing_txt_typo',
                'label' =>   esc_html__( 'Pricing Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-price-block .inner-box .text',
            ]
        );
        $this->add_control(
			'pricing_price_style',
			[
				'label' => esc_html__( 'Pricing Price Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'price__color',
            [
                'label' =>   esc_html__( 'Pricing Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block .inner-box .price' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'price_active_color',
            [
                'label' =>   esc_html__( 'Pricing Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block.active .inner-box .price' => 'color: {{VALUE}};',
                ],
            ]
        );
        
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_pricing_price_typo',
                'label' =>   esc_html__( 'Pricing Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-price-block .inner-box .price',
            ]
        );
        $this->add_control(
			'pricing_priod_style',
			[
				'label' => esc_html__( 'Pricing Priod Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'preiod__color',
            [
                'label' =>   esc_html__( 'Priod Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block .inner-box .price span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
			'pricing_btn_style',
			[
				'label' => esc_html__( 'Pricing Button Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'price_btn_color',
            [
                'label' =>   esc_html__( 'Pricing Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block .inner-box .plan' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'price_btn_bg_color',
            [
                'label' =>   esc_html__( 'Pricing Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block .inner-box .plan' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'price_btn_ac_color',
            [
                'label' =>   esc_html__( 'Pricing Button Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block.active .inner-box .plan' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'price_btn_active_bg_color',
            [
                'label' =>   esc_html__( 'Pricing Button Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block.active .inner-box .plan' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_pricing_btn_typo',
                'label' =>   esc_html__( 'Pricing Btn Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-price-block .inner-box .plan',
            ]
        );
        $this->add_control(
			'pricing_list_style',
			[
				'label' => esc_html__( 'Pricing List Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'price_list_color',
            [
                'label' =>   esc_html__( 'Pricing List Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block .option-list li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'price_list_cion_color',
            [
                'label' =>   esc_html__( 'Pricing Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block .option-list li:before' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ft_pricing_list_typo',
                'label' =>   esc_html__( 'Pricing List Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-price-block .option-list li',
            ]
        );
        $this->add_control(
			'pricing_active_style',
			[
				'label' => esc_html__( 'Active Pricing Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'act_pricing_bg_color',
            [
                'label' =>   esc_html__( 'Pricing BG Active Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-price-block.active .inner-box .upper-box' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

   <!-- Pricing Section -->
	<section class="apl3-pricing-section" id="price">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="apl3-sec-title centered">
				<div class="title"><?php echo esc_html($settings['subtitle']);?></div>
				<h2><?php echo __($settings['title']);?></h2>
				<div class="text"><?php echo __($settings['description']);?></div>
			</div>
			
			<div class="apl3-pricing-tabs tabs-box">
                
				<!-- Tab Buttons -->
				<div class="buttons-outer">
					<ul class="tab-buttons clearfix">
						<li data-tab="#prod-yearly" class="tab-btn active-btn"><?php echo esc_html($settings['tab_yr']);?></li>
						<li data-tab="#prod-monthly" class="tab-btn"><?php echo esc_html($settings['tab_month']);?></li>
					</ul>
				</div>
				
				<!--Tabs Container-->
				<div class="tabs-content">
					
					<!-- Tab -->
					<div class="tab active-tab" id="prod-yearly">
						<div class="content">
							<div class="row clearfix">
								<?php foreach($settings['pricingsyearly'] as $item):?>							
								<!-- Price Block -->
								<div class="apl3-price-block <?php if('yes' == $item['is_populer']){echo esc_attr('active');}?> col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="upper-box">
											<h2><?php echo esc_html($item['title']);?></h2>
											<div class="text"><?php echo esc_html($item['txt']);?></div>
											<div class="price"><?php echo esc_html($item['price']);?><span><?php echo esc_html($item['period']);?></span></div>
											<div class="plan"><a href="<?php echo esc_url($item['btn_link']['url']);?>"><?php echo esc_html($item['btn_label']);?></a></div>
										</div>
										<div class="lower-box">
											<div class="option-list">
												<?php echo __($item['pricing_list']);?>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach;?>
							</div>
						</div>
					</div>
					
					<!-- Tab -->
					<div class="tab" id="prod-monthly">
						<div class="content">
							<div class="row clearfix">
								
								<?php foreach($settings['pricingsmonthly'] as $pmitem):?>							
								<!-- Price Block -->
								<div class="apl3-price-block <?php if('yes' == $pmitem['is_populer']){echo esc_attr('active');}?>  col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="upper-box">
											<h2><?php echo esc_html($pmitem['title']);?></h2>
											<div class="text"><?php echo esc_html($pmitem['txt']);?></div>
											<div class="price"><?php echo esc_html($pmitem['price']);?><span><?php echo esc_html($pmitem['period']);?></span></div>
											<div class="plan"><a href="<?php echo esc_url($pmitem['btn_link']['url']);?>"><?php echo esc_html($pmitem['btn_label']);?></a></div>
										</div>
										<div class="lower-box">
											<div class="option-list">
												<?php echo __($pmitem['pricing_list']);?>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach;?>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Pricing Section -->

<?php

    }
    

}
Plugin::instance()->widgets_manager->register_widget_type( new Landing3_Pricing() );
?>