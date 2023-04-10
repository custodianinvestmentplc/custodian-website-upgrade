<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_case_study extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-case-study';
		}
		
		public function get_title()
		{
			return __('Bigo Case Study', 'appilo');
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
				'case_stydy_content',
				[
					'label' => __('Case Study Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'image',
				[
					'label' => __('Slider Image', 'appilo'),
					'type' => Controls_Manager::MEDIA,
				]
			);
			$repeater->add_control(
				'title', [
					'label' => esc_html__('Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('RIPS SEWED, BRAND <br> LOVE REAPED', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'small_text', [
					'label' => esc_html__('Small Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Reebok Inc', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'button_text', [
					'label' => esc_html__('Button Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('View Case Study', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'button_link',
				[
					'label' => esc_html__( 'Button Link', 'appilo' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);
			
			$this->add_control(
				'list',
				[
					'label' => esc_html__('Case Study List', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
						],
						[
						],
						[
						],
						[
						],
					],
					'prevent_empty' => false
				]
			);
			$this->add_control(
				'show_pagination',
				[
					'label' => esc_html__( 'Show Pagination', 'appilo' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'appilo' ),
					'label_off' => esc_html__( 'Hide', 'appilo' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'case_study_style',
				[
					'label' => __('Case Study Style', 'appilo'),
					'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				]
			);
			$this->add_control(
				'Title_color',
				[
					'label' => esc_html__('Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-slide .caption .content h4' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Title_typo',
					'label' => esc_html__('Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-slide .caption .content h4',
				]
			);
			$this->add_control(
				'Small_Text_color',
				[
					'label' => esc_html__('Small Text Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-slide .caption .content .small' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Small_Text_typo',
					'label' => esc_html__('Small Text Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-slide .caption .content .small',
				]
			);
			$this->add_control(
				'Button_Title_color',
				[
					'label' => esc_html__('Button Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-slide .caption .content .bigo-btn' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Button_Title_typo',
					'label' => esc_html__('Button Title Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-slide .caption .content .bigo-btn',
				]
			);
			$this->add_control(
				'Button_BG_color',
				[
					'label' => esc_html__('Button BG Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-slide .caption .content .bigo-btn' => 'background-color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'button-border-radius',
				[
					'label' => esc_html__( 'Button Border Radius', 'appilo' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bigo-btn-primary' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'button_hover_style_heading',
				[
					'label' => __( 'Button Hover Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'Button_Hover_color',
				[
					'label' => esc_html__('Button Hover Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-btn-primary:hover' => 'color: {{VALUE}} !important;',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'btn_hover_background',
					'label' => esc_html__( 'Background', 'appilo' ),
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} .bigo-btn-primary::before',
				]
			);
			$this->add_control(
				'button_nav_style_heading',
				[
					'label' => __( 'Button Nav Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'Nav_Arrow_color',
				[
					'label' => esc_html__('Nav Arrow Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-button-prev, .bigo-creative-slider .swiper-container .swiper-button-next' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Nav_Bullet_Icon_color',
				[
					'label' => esc_html__('Nav Bullet Icon Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-creative-slider .swiper-container .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'color: {{VALUE}};',
					],
				]
			);
			$this->end_controls_section();
			
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-creative-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($settings['list'] as $item ): ?>
                        <div class="swiper-slide">
                            <div class="caption">
                                <?php if (!empty($item['image']['url'])): ?>
                                    <img src="<?php echo esc_url($item['image']['url']); ?>" alt="">
                                <?php endif; ?>
                                <div class="content">
                                    <h4><?php echo $item['title']; ?></h4>
                                    <span class="small"><?php echo $item['small_text']; ?></span>

                                    <?php if (!empty( $item['button_text'] )): ?>
                                    <a class="bigo-btn bigo-btn-primary pull-right" href="<?php echo $item['button_link']['url']; ?>">
                                        <?php echo $item['button_text']; ?> <i class="far fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                    <?php if ('yes' === $settings['show_pagination']): ?>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"><i class="icon-v4 arrow_carrot-left" aria-hidden="true"></i></div>
                    <div class="swiper-button-next"><i class="icon-v4 arrow_carrot-right" aria-hidden="true"></i></div>
                    <?php endif; ?>
                </div>
            </section> <!-- bigo-creative-slider -->
			
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_case_study());
	?>