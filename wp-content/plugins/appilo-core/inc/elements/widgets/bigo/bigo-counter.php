<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_counter extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-counter';
		}
		
		public function get_title()
		{
			return __('Bigo Counter', 'appilo');
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
				'Counter-content',
				[
					'label' => __('Counter Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'counter_img',
				[
					'label' => esc_html__('Counter Image', 'appilo'),
					'type' => \Elementor\Controls_Manager::MEDIA,
				]
			);
			$repeater->add_control(
				'icon',
				[
					'label' => esc_html__( 'Icon', 'appilo' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'description' => __('Remove Counter Image For Visible Icon'),
					'default' => [
						'value' => 'icon-v3 flaticon-team',
						'library' => 'icon-v3',
					],
				]
			);
			$repeater->add_control(
				'counter_prefix', [
					'label' => esc_html__('Counter Prefix', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'counter_number', [
					'label' => esc_html__('Counter Number', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('2145', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'counter_suffix', [
					'label' => esc_html__('Counter Suffix', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'counter_text', [
					'label' => esc_html__('Counter Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Happy Clients', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'list',
				[
					'label' => esc_html__('Counter List', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'counter_text' => esc_html__('Happy Clients', 'appilo'),
						],
						[
							'counter_text' => esc_html__('Successful Projects', 'appilo'),
						],
						[
							'counter_text' => esc_html__('Capital Boost', 'appilo'),
						],
						[
							'counter_text' => esc_html__('Worldwide Offices', 'appilo'),
						],
					],
					'title_field' => '{{{ counter_text }}}',
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'Counter-style',
				[
					'label' => __('Counter Style', 'appilo'),
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
						'size' => 1170,
					],
					'selectors' => [
						'{{WRAPPER}} .custom-container-width' => 'max-width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'Countdown-Color',
				[
					'label' => esc_html__('Countdown Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-counting-section .bigo-counting-pusher .bigo-counting-wrapper .content .count-description' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Countdown-Typo',
					'label' => esc_html__('Countdown Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-counting-section .bigo-counting-pusher .bigo-counting-wrapper .content .count-description',
				]
			);
			$this->add_control(
				'Text-Color',
				[
					'label' => esc_html__('Text Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-counting-section .bigo-counting-pusher .bigo-counting-wrapper .content p' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Text-Typo',
					'label' => esc_html__('Text Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-counting-section .bigo-counting-pusher .bigo-counting-wrapper .content p',
				]
			);
			$this->end_controls_section();
			
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-counting-section">
                <div class="container text-center custom-container-width">
                    <div class="bigo-counting-pusher">
						<?php foreach ($settings['list'] as $item): ?>
                            <div class="bigo-counting-wrapper">
								<?php if (!empty($item['counter_img']['url'])) { ?>
                                    <span class="icon"><img src="<?php echo esc_url($item['counter_img']['url']); ?>" alt=""></span>
								<?php }else{ ?>
                                    <span class="icon">
									    <?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </span>
                                <?php } ?>
                                <div class="content inline-block text-left">
                                    <div class="count-description inline-block">
										<?php echo wp_kses($item['counter_prefix'], true); ?><span class="timer"><?php echo wp_kses($item['counter_number'], true); ?></span><?php echo wp_kses($item['counter_suffix'], true); ?>
                                    </div>
                                    <p><?php echo wp_kses($item['counter_text'], true); ?></p>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
            </section> <!-- bigo-counting-section -->
			
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_counter());
	?>