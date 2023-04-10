<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_contact extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-contact';
		}
		
		public function get_title()
		{
			return __('Bigo Contact', 'appilo');
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
					'default' => __('Contact Us', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'title', [
					'label' => esc_html__('Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Let’s Get In Touch', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'description', [
					'label' => esc_html__('Description', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __('<p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Perspiciatis unde omnis <br> iste natus error sit voluptatem accusantium doloremque laudantium.</p>
', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'button_1_text', [
					'label' => esc_html__('Button 1 Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Drop us a line', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'button_1_link',
				[
					'label' => esc_html__( 'Button 1 Link', 'appilo' ),
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
				'button_2_text', [
					'label' => esc_html__('Button 2 Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Career Here', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'button_2_link',
				[
					'label' => esc_html__( 'Button 2 Link', 'appilo' ),
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
				'google_map_api', [
					'label' => esc_html__('Google Map Api Key', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __('https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'form_title', [
					'label' => esc_html__('Form Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Send Mail', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'contact_form_shortcode', [
					'label' => esc_html__('Form Shortcode', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
                    'label_block' => true,
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'style_Contact',
				[
					'label' => __('Contact Style', 'appilo'),
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
				'SUb-Title_color',
				[
					'label' => esc_html__('Sub Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-section-title .sub-header' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Bottom-border-Style',
				[
					'label' => esc_html__( 'Border Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'Border-Color',
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} .bigo-section-title .border',
					'separator' => 'after',
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'SUb-Title_typo',
					'label' => esc_html__('Sub Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-section-title .sub-header',
				]
			);
			$this->add_control(
				'Title_color',
				[
					'label' => esc_html__('Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-section-title h2' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Title_typo',
					'label' => esc_html__('Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-section-title h2',
				]
			);
			$this->add_control(
				'Info-color',
				[
					'label' => esc_html__('Info Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-section-title p' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Info-typo',
					'label' => esc_html__('Info Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-section-title p',
				]
			);
			$this->add_control(
				'Button-Style',
				[
					'label' => esc_html__( 'Button Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'Button_color',
				[
					'label' => esc_html__('Button Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-btn-primary' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Button-typo',
					'label' => esc_html__('Button Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-btn-primary',
				]
			);
			$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'button-background',
                    'types' => [ 'gradient' ],
                    'selector' => '{{WRAPPER}} .bigo-btn-primary',
                ]
		    );
			$this->add_control(
				'Button-Hover-Style',
				[
					'label' => esc_html__( 'Button Hover Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'Button_Hover-color',
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
                    'name' => 'button-hover-background',
                    'types' => [ 'gradient' ],
                    'selector' => '{{WRAPPER}} .bigo-btn-primary::before',
                ]
            );
			$this->end_controls_section();
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-contact-section">
                <div class="container container_max_width">
                    <div class="bigo-section-title text-center">
                        <span class="sub-header"><?php echo esc_html($settings['sub_title']); ?></span>
                        <div class="border"></div>
                        <h2><?php echo esc_html($settings['title']); ?></h2>
                        <p>
	                        <?php echo wp_kses($settings['description'], true); ?>
                        </p>
                        
                        <div class="bigo-button">
                            <?php if ($settings['button_1_text']): ?>
                                <a href="<?php echo esc_url($settings['button_1_link']['url']); ?>" class="bigo-btn bigo-btn-primary"><?php echo esc_html($settings['button_1_text']); ?></a>
                            <?php endif; ?>
			                <?php if ($settings['button_2_text']): ?>
                                <a href="<?php echo esc_url($settings['button_2_link']['url']); ?>" class="bigo-btn bigo-btn-primary"><?php echo esc_html($settings['button_2_text']); ?></a>
			                <?php endif; ?>
                        </div>
                    </div> <!-- bigo-section-title -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="546" height="477" id="gmap_canvas" src="<?php echo $settings['google_map_api']; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bigo-form-section">
                                <h3><?php echo esc_html($settings['form_title']); ?></h3>
								<?php if(!empty($settings['contact_form_shortcode'])): ?>
                                <?php echo do_shortcode($settings['contact_form_shortcode']); ?>
								<?php endif; ?>
                            </div> <!-- mail-section -->
                        </div>
                    </div>
                </div>
            </section> <!-- bigo-contact-section -->
            
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_contact());
	?>

