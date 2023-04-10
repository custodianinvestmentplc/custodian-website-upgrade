<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_newsletter extends Widget_Base
	{
	 
		
		public function get_name()
		{
			return 'bigo-newsletter';
		}
		
		public function get_title()
		{
			return __('Bigo Newsletter', 'appilo');
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
				'newsletter_title', [
					'label' => esc_html__('Newsletter Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __('Signup for free <span>newsletter</span> and <span>business tips</span>', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'form_shortcode', [
					'label' => esc_html__('Form Shortcode', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => true,
				]
			);
			$this->add_control(
				'girl_img',
				[
					'label' => __('Girl Image', 'appilo'),
					'type' => Controls_Manager::MEDIA,
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'style_Newsletter',
				[
					'label' => __('Newsletter Style', 'appilo'),
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
				'Title_color',
				[
					'label' => esc_html__('Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-signup-section .bigo-contact-wrapper h3' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Title_typo',
					'label' => esc_html__('Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-signup-section .bigo-contact-wrapper h3',
				]
			);
			$this->add_control(
				'Button_color',
				[
					'label' => esc_html__('Button Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-signup-section .bigo-contact-wrapper .signupForm .form-wrapper .subscribeBtn.bigo-btn-primary' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Button-BG-Color',
				[
					'label' => esc_html__('Button-BG-Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-signup-section .bigo-contact-wrapper .signupForm .form-wrapper .subscribeBtn.bigo-btn-primary' => 'background-color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Form-BG-Color',
				[
					'label' => esc_html__('Form-BG-Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-signup-section .bigo-contact-wrapper .signupForm .form-wrapper .searchBar' => 'background-color: {{VALUE}};',
					],
				]
			);
			$this->end_controls_section();
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-signup-section">
                <div class="container custom-container-width">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="bigo-contact-wrapper">
                                <h3><?php echo wp_kses($settings['newsletter_title'], true); ?></h3>

                                <?php echo do_shortcode($settings['form_shortcode']); ?>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-5 hidden-xs">
                            <div class="caption text-right wow slideInRight">
                                <img src="<?php echo esc_url($settings['girl_img']['url']); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- bigo-signup-section -->
			
			
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_newsletter());
	?>