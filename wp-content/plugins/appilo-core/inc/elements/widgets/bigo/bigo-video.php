<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_video extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-Video';
		}
		
		public function get_title()
		{
			return __('Bigo Video', 'appilo');
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
				'video-content',
				[
					'label' => __('Video Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$this->add_control(
				'video_url',
				[
					'label' => esc_html__( 'Video Link', 'appilo' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => esc_html__( 'https://www.youtube.com/watch?v=XbmmI2OiMk0', 'appilo' ),
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => 'https://www.youtube.com/watch?v=XbmmI2OiMk0',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);
			$this->add_control(
				'icon',
				[
					'label' => esc_html__( 'Icon', 'appilo' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-play',
						'library' => 'fa-solid',
					],
				]
			);
			$this->add_control(
				'title', [
					'label' => esc_html__('Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Are you a dreamer?', 'appilo'),
					'label_block' => true,
				]
			);
			
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'list_text', [
					'label' => esc_html__('List Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Connect', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'list_link',
				[
					'label' => esc_html__( 'List Link', 'appilo' ),
					'type' => \Elementor\Controls_Manager::URL,
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
					'label' => esc_html__('List URL', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'list_text' => esc_html__( 'Connect', 'appilo' ),
						],
						[
							'list_text' => esc_html__( 'Achieve', 'appilo' ),
						],
						[
							'list_text' => esc_html__( 'Inspire', 'appilo' ),
						],
					],
					'title_field' => '{{{ list_text }}}',
                    'prevent_empty' => false
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'video-section-style',
				[
					'label' => __('Video Style', 'appilo'),
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
				'Icon-Color',
				[
					'label' => esc_html__('Icon Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-video-section .video-icon i' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Icon-Circle-Color',
				[
					'label' => esc_html__('Icon Circle Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-video-section .video-icon i' => 'border-color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Title-Color',
				[
					'label' => esc_html__('Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-video-section h3' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Title-Typo',
					'label' => esc_html__('Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-video-section h3',
				]
			);
			$this->add_control(
				'List-Color',
				[
					'label' => esc_html__('List Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-video-section ul li a' => 'color: {{VALUE}};',
						'{{WRAPPER}} .bigo-video-section ul li::before' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'List-Typo',
					'label' => esc_html__('List Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-video-section ul li a',
				]
			);
			$this->add_control(
				'List-Hover-Color',
				[
					'label' => esc_html__('List Hover Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-video-section ul li a:hover' => 'color: {{VALUE}};',
					],
				]
			);
			$this->end_controls_section();
			
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-video-section">
                <div class="container text-center custom-container-width">
                    <div id="lightBox-2" class="video-icon wow zoomIn">
                        <a class="video_lightbox" href="<?php echo esc_attr($settings['video_url']['url']); ?>">
							<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </a>
                    </div>
                    <?php if (!empty($settings['title'])): ?>
                    <h3><?php esc_html_e($settings['title'], 'appilo'); ?></h3>
                    <?php endif; ?>

                    <ul>
                        <?php foreach ($settings['list'] as $item): ?>
                            <li><a href="<?php echo esc_url($item['list_link']['url']); ?>"><?php esc_html_e($item['list_text'], 'appilo'); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section> <!-- bigo-video-section -->
            
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_video());
	?>