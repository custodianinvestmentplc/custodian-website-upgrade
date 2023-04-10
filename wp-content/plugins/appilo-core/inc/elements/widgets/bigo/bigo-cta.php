<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_cta extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-cta';
		}
		
		public function get_title()
		{
			return __('Bigo CTA', 'appilo');
		}
		
		public function get_categories()
		{
			return ['appilo-core'];
		}
		
		public function get_icon()
		{
			return 'eicon-scroll';
		}
		
		protected function register_controls()
		{
			
			$this->start_controls_section(
				'section_content',
				[
					'label' => __('Section Content', 'appilo'),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);
			$this->add_control(
				'sub_title', [
					'label' => esc_html__('Sub Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__('What We Do best', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'title', [
					'label' => esc_html__('Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __('Being a favorite brand is more <br>valuable than just being a Famous one', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'description', [
					'label' => esc_html__('Description', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __('Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Perspiciatis unde omnis <br> iste natus error sit voluptatem accusantium doloremque laudantium.', 'appilo'),
					'label_block' => true,
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'cta_content',
				[
					'label' => __('CTA Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'logo',
				[
					'label' => __('Choose Brand Logo', 'appilo'),
					'type' => Controls_Manager::MEDIA,
				]
			);
			$repeater->add_control(
				'logo_hover',
				[
					'label' => __('Hover Brand Logo', 'appilo'),
					'type' => Controls_Manager::MEDIA,
				]
			);
			$repeater->add_control(
				'brand_title', [
					'label' => esc_html__('Brand Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__('Brand Identity', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'brand_info', [
					'label' => esc_html__('Brand Info', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'cta_hover_list', [
					'label' => esc_html__('CTA Hover List', 'appilo'),
					'type' => \Elementor\Controls_Manager::WYSIWYG,
					'default' => __('<ul class="option">
                                        <li><a href="#">Email Marketing</a></li>
                                        <li><a href="#">Social Media Marketing</a></li>
                                        <li><a href="#">Display Marketing</a></li>
                                        <li><a href="#">Email Marketing</a></li>
                                        <li><a href="#">Social Media Marketing</a></li>
                                        <li><a href="#">Display Marketing</a></li>
                                    </ul>', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'hover-background-image',
					'types' => [ 'classic' ],
					'selector' => '{{WRAPPER}} .bigo-cta-section .bigo-cta-wrapper .hover-content{{CURRENT_ITEM}}',
                    'exclude' => ['color'],
				]
			);
			$this->add_control(
				'list',
				[
					'label' => esc_html__('CTA List', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'brand_title' => __('Brand Identity', 'appilo'),
						],
						[
							'brand_title' => __('Design', 'appilo'),
						],
						[
							'brand_title' => __('Development', 'appilo'),
						],
					],
					'title_field' => '{{{ brand_title }}}',
					'prevent_empty' => false
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'style_about',
				[
					'label' => __('About Style', 'appilo'),
					'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				]
			);
			$this->add_responsive_control(
				'container_max_width',
				[
					'label' => esc_html__('Container Width', 'appilo'),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => ['px', '%'],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1920,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 1200,
					],
					'selectors' => [
						'{{WRAPPER}} .custom-container-width' => 'max-width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'tag_color',
				[
					'label' => esc_html__('Tag Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .section-title .site-tag' => 'color: {{VALUE}};',
						'{{WRAPPER}} .title-style-two .site-tag' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Tag_typo',
					'label' => esc_html__('Tag Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .section-title .site-tag , {{WRAPPER}} .title-style-two .site-tag',
				]
			);
			$this->add_control(
				'Heading_color',
				[
					'label' => esc_html__('Heading Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .section-title h2' => 'color: {{VALUE}};',
						'{{WRAPPER}} .thx-it-about-section-2 .section-title h2' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Heading_typo',
					'label' => esc_html__('Heading Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .section-title h2 , {{WRAPPER}} .thx-it-about-section-2 .section-title h2',
				]
			);
			$this->add_control(
				'Sub_title_color',
				[
					'label' => esc_html__('Sub Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .section-title .sub-text' => 'color: {{VALUE}};',
						'{{WRAPPER}} .title-style-two .sub-text' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Sub_title_left_border_color',
				[
					'label' => esc_html__('Sub Title Left Border Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .section-title .sub-text:before' => 'background-color: {{VALUE}};',
					],
				]
			);
			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Sub_title_typo',
					'label' => esc_html__('Sub Title Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .title-style-two .sub-text',
				]
			);
			$this->add_control(
				'info_color',
				[
					'label' => esc_html__('Information Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-text-item-1 .thx-it-about-text p' => 'color: {{VALUE}};',
					],
				]
			);
			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'info_typo',
					'label' => esc_html__('Information Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .thx-it-about-text-item-1 .thx-it-about-text p',
				]
			);
			$this->add_control(
				'Feature_title_color',
				[
					'label' => esc_html__('Feature Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4' => 'color: {{VALUE}};',
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4' => 'color: {{VALUE}};',
					],
				]
			);
			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Feature_title_typo',
					'label' => esc_html__('Feature Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4 , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4',
				]
			);
			$this->add_control(
				'Feature_Info_color',
				[
					'label' => esc_html__('Feature Info Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p' => 'color: {{VALUE}};',
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p' => 'color: {{VALUE}};',
					],
				]
			);
			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Feature_Info_typo',
					'label' => esc_html__('Feature Info Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p',
				]
			);
			$this->end_controls_section();
			$this->start_controls_section(
				'btn_style',
				[
					'label' => __('Button Style', 'appilo'),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);
			$this->add_control(
				'button_text_color',
				[
					'label' => esc_html__('Button Text Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child' => 'color: {{VALUE}};',
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child' => 'color: {{VALUE}};',
					],
				]
			);
			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'button_typo',
					'label' => esc_html__('Button Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child',
				]
			);
			
			$this->add_control(
				'button_bg_color',
				[
					'label' => esc_html__('Button BG Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child' => 'background: {{VALUE}};',
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child' => 'background: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'second_btn_color',
				[
					'label' => esc_html__('Second Button Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:last-child' => 'color: {{VALUE}};',
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:last-child' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'second_btn_circle_color',
				[
					'label' => esc_html__('Second Button BG Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:last-child:before' => 'background: {{VALUE}};',
					],
				]
			);
			$this->end_controls_section();
			$this->start_controls_section(
				'about_counter_style',
				[
					'label' => __('About Counter Style', 'appilo'),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'select_About_style' => 'style_2',
					],
				]
			);
			$this->add_control(
				'counter_number_color',
				[
					'label' => esc_html__('Counter Number Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .it-location-counter h3' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'counter_number_typo',
					'label' => esc_html__('Counter Number Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .it-location-counter h3',
				]
			);
			$this->add_control(
				'counter_Heading_color',
				[
					'label' => esc_html__('Counter Heading Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item p' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'counter_Heading_typo',
					'label' => esc_html__('Counter Heading Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item p',
				]
			);
			$this->add_control(
				'counter_Read_more_color',
				[
					'label' => esc_html__('Read More Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .thx-it-about-counter-hover a' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'counter_Read_More_typo',
					'label' => esc_html__('Read More Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .thx-it-about-counter-hover a',
				]
			);
			$this->end_controls_section();
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section id="bigo-cta-section" class="bigo-cta-section bigo-section-padding">
                <div class="container custom-container-width">
                    <div class="bigo-section-title text-center">
                        <span class="sub-header"><?php esc_html_e($settings['sub_title'], 'appilo'); ?></span>
                        <div class="border"></div>
                        <h2><?php echo __($settings['title'], 'appilo'); ?></h2>
                        <p><?php _e($settings['description'], 'appilo'); ?></p>
                    </div> <!-- bigo-section-title -->

                    <div class="row">
						<?php
                            $i = 0;
                            foreach ($settings['list'] as $item):
                            $i++;
                        ?>
                            <div class="col-sm-4">
                                <div class="bigo-cta-wrapper">
									<?php if (!empty($item['logo']['url'])): ?>
                                        <img src="<?php echo esc_url($item['logo']['url']); ?>" alt="">
									<?php endif; ?>
                                    <h3><?php esc_html_e($item['brand_title'], 'appilo'); ?></h3>
                                    <p><?php esc_html_e($item['brand_info'], 'appilo'); ?></p>

                                    <a href="#" class="open-link open-link-<?php echo $i; ?> pull-right">
                                        <i class="fas fa-plus" aria-hidden="true"></i>
                                    </a>

                                    <div class="hover-content hover-content-<?php echo $i; ?> elementor-repeater-item-<?php echo $item['_id']; ?>">
										<?php if (!empty($item['logo_hover']['url'])): ?>
                                            <img src="<?php echo esc_url($item['logo_hover']['url']); ?>" alt="">
										<?php endif; ?>
                                        <h3><?php esc_html_e($item['brand_title'], 'appilo'); ?></h3>
										
										<?php echo $item['cta_hover_list']; ?>

                                        <a href="#" class="close-link close-link-<?php echo $i; ?> pull-right">
                                            <i class="fas fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
						<?php endforeach; ?>

                    </div>
                </div>
            </section> <!-- bigo-cta-section -->
			
			
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_cta());
	?>