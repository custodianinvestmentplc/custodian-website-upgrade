<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_testimonial extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-testimonial';
		}
		
		public function get_title()
		{
			return __('Bigo Testimonial', 'appilo');
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
				'Testimonial-content',
				[
					'label' => __('Testimonial Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'sign_img',
				[
					'label' => esc_html__('Sign Image', 'appilo'),
					'type' => \Elementor\Controls_Manager::MEDIA,
				]
			);
			$repeater->add_control(
				'comment', [
					'label' => esc_html__('Comment', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __('“ Ut enim ad minima veniam, quis nostrum exercitationem ullam cor poris suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui. “', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'name', [
					'label' => esc_html__('Name', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Alexis Sanchez', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'Designation', [
					'label' => esc_html__('Designation', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Porto Inc', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'list',
				[
					'label' => esc_html__('Portfolio List', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'name' => esc_html__('Alexis Sanchez', 'appilo'),
						],
						[
							'name' => esc_html__('Alexis Sanchez', 'appilo'),
						],
					],
					'title_field' => '{{{ name }}}',
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'section-style',
				[
					'label' => __('Section Style', 'appilo'),
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
				'Comment-Color',
				[
					'label' => esc_html__('Comment Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-testimonial-section #bigo-testimonial-carousel .carousel-inner p' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Comment-Typo',
					'label' => esc_html__('Comment Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-testimonial-section #bigo-testimonial-carousel .carousel-inner p',
				]
			);
			$this->add_control(
				'--bottom-border-color---',
				[
					'label' => esc_html__( 'Comment Bottom Border Color', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'comment-bottom_border_background',
                    'label' => esc_html__( 'Bottom Border Background', 'textdomain' ),
                    'types' => [ 'gradient' ],
                    'selector' => '{{WRAPPER}} .bigo-testimonial-section #bigo-testimonial-carousel .carousel-inner .title::before',
                    'separator' => 'after',
                ]
		    );
			
			$this->add_control(
				'Title-Color',
				[
					'label' => esc_html__('Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-testimonial-section #bigo-testimonial-carousel .carousel-inner .title h5' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Title-Typo',
					'label' => esc_html__('Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-testimonial-section #bigo-testimonial-carousel .carousel-inner .title h5',
				]
			);
			$this->add_control(
				'Designation-Color',
				[
					'label' => esc_html__('Designation Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-testimonial-section #bigo-testimonial-carousel .carousel-inner .title .position' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Designation-Typo',
					'label' => esc_html__('Designation Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-testimonial-section #bigo-testimonial-carousel .carousel-inner .title .position',
				]
			);
			$this->add_control(
				'--button-arrow-style--heading',
				[
					'label' => esc_html__('Arrow Style', 'appilo'),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'Arrow-Color',
				[
					'label' => esc_html__('Arrow Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-testimonial-slide .owl-nav div' => 'color: {{VALUE}};',
					],
				]
			);
			$this->end_controls_section();
			
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-testimonial-section">
                <div class="container text-center custom-container-width">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div id="bigo-testimonial-carousel" class="bigo-testimonial-slide owl-carousel ">
                                <?php foreach ($settings['list'] as $item): ?>
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <img src="<?php echo esc_url($item['sign_img']['url']); ?>" alt="">
    
                                            <p><?php esc_html_e($item['comment'], 'appilo'); ?></p>
    
                                            <div class="title">
                                                <h5><?php esc_html_e($item['name'], 'appilo'); ?></h5>
                                                <span class="position"><?php esc_html_e($item['Designation'], 'appilo'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- bigo-testimonial-section -->
			
			
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_testimonial());
	?>