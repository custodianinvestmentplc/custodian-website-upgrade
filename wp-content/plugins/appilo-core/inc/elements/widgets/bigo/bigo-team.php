<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_team extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-team';
		}
		
		public function get_title()
		{
			return __('Bigo Team', 'appilo');
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
				'Team-content',
				[
					'label' => __('Team Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			$this->add_control(
				'sub_title', [
					'label' => esc_html__('Sub Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('LeaderShip', 'appilo'),
					'label_block' => true,
				]
			);
			
			$this->add_control(
				'title', [
					'label' => esc_html__('Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Meet The Team', 'appilo'),
					'label_block' => true,
				]
			);
			
			$this->add_control(
				'--team-content-heading--',
				[
					'label' => esc_html__('Team Content', 'appilo'),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'team_image',
				[
					'label' => esc_html__('Team Member Image', 'appilo'),
					'type' => \Elementor\Controls_Manager::MEDIA,
				]
			);
			
			$repeater->add_control(
				'name', [
					'label' => esc_html__('Name', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Andrew Garfield', 'appilo'),
					'label_block' => true,
				]
			);
			
			$repeater->add_control(
				'designation', [
					'label' => esc_html__('Name', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('IT Consultant', 'appilo'),
					'label_block' => true,
				]
			);
			
			$repeater->add_control(
				'social_icon_switcher_1',
				[
					'label' => esc_html__('Show Social Icon 1', 'appilo'),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__('Show', 'appilo'),
					'label_off' => esc_html__('Hide', 'appilo'),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			
			$repeater->add_control(
				'social_icon_1',
				[
					'label' => esc_html__('Social Icon 1', 'appilo'),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fab fa-facebook-f',
						'library' => 'fa-brand',
					],
					'condition' => [
						'social_icon_switcher_1' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_profile_link_1',
				[
					'label' => esc_html__('Social Link 1', 'appilo'),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => ['url', 'is_external', 'nofollow'],
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
					'condition' => [
						'social_icon_switcher_1' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_icon_switcher_2',
				[
					'label' => esc_html__('Show Social Icon 2', 'appilo'),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__('Show', 'appilo'),
					'label_off' => esc_html__('Hide', 'appilo'),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			
			$repeater->add_control(
				'social_icon_2',
				[
					'label' => esc_html__('Social Icon 2', 'appilo'),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fab fa-twitter',
						'library' => 'fa-brand',
					],
					'condition' => [
						'social_icon_switcher_2' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_profile_link_2',
				[
					'label' => esc_html__('Social Link 2', 'appilo'),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => ['url', 'is_external', 'nofollow'],
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
					'condition' => [
						'social_icon_switcher_2' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_icon_switcher_3',
				[
					'label' => esc_html__('Show Social Icon 3', 'appilo'),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__('Show', 'appilo'),
					'label_off' => esc_html__('Hide', 'appilo'),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			
			$repeater->add_control(
				'social_icon_3',
				[
					'label' => esc_html__('Social Icon 3', 'appilo'),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fab fa-instagram',
						'library' => 'fa-brand',
					],
					'condition' => [
						'social_icon_switcher_3' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_profile_link_3',
				[
					'label' => esc_html__('Social Link 3', 'appilo'),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => ['url', 'is_external', 'nofollow'],
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
					'condition' => [
						'social_icon_switcher_3' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_icon_switcher_4',
				[
					'label' => esc_html__('Show Social Icon 4', 'appilo'),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__('Show', 'appilo'),
					'label_off' => esc_html__('Hide', 'appilo'),
					'return_value' => 'yes',
					'default' => '',
				]
			);
			
			$repeater->add_control(
				'social_icon_4',
				[
					'label' => esc_html__('Social Icon 4', 'appilo'),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fab fa-facebook-f',
						'library' => 'fa-brand',
					],
					'condition' => [
						'social_icon_switcher_4' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_profile_link_4',
				[
					'label' => esc_html__('Social Link 4', 'appilo'),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => ['url', 'is_external', 'nofollow'],
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
					'condition' => [
						'social_icon_switcher_4' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_icon_switcher_5',
				[
					'label' => esc_html__('Show Social Icon 5', 'appilo'),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__('Show', 'appilo'),
					'label_off' => esc_html__('Hide', 'appilo'),
					'return_value' => 'yes',
					'default' => '',
				]
			);
			
			$repeater->add_control(
				'social_icon_5',
				[
					'label' => esc_html__('Social Icon 5', 'appilo'),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fab fa-facebook-f',
						'library' => 'fa-brand',
					],
					'condition' => [
						'social_icon_switcher_5' => 'yes',
					],
				]
			);
			
			$repeater->add_control(
				'social_profile_link_5',
				[
					'label' => esc_html__('Social Link 5', 'appilo'),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => ['url', 'is_external', 'nofollow'],
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
					'condition' => [
						'social_icon_switcher_5' => 'yes',
					],
				]
			);
			
			$this->add_control(
				'list',
				[
					'label' => esc_html__('Team List', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'name' => esc_html__('Andrew Garfield', 'appilo'),
						],
						[
							'name' => esc_html__('Emma Stone', 'appilo'),
						],
						[
							'name' => esc_html__('Samuel Jackson', 'appilo'),
						],
						[
							'name' => esc_html__('Andrew Garfield', 'appilo'),
						],
						[
							'name' => esc_html__('Emma Stone', 'appilo'),
						],
						[
							'name' => esc_html__('Samuel Jackson', 'appilo'),
						],
					],
					'title_field' => '{{{ name }}}',
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'Section-style',
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
				'Sub-Title-Color',
				[
					'label' => esc_html__('Sub Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-section-title .sub-header' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Sub-Title-Typo',
					'label' => esc_html__('Sub Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-section-title .sub-header',
				]
			);
			$this->add_control(
			'--subtitle-bottom-border-Color--Heading',
                [
                    'label' => esc_html__( 'Bottom Border Color', 'appilo' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
		    );
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'Sub-Title-Border-Color',
					'label' => esc_html__( 'Sub Title Bottom Border Color', 'appilo' ),
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} .bigo-section-title .border',
				]
			);
			$this->add_control(
				'Title-Color',
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
					'name' => 'Title-Typo',
					'label' => esc_html__('Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-section-title h2',
				]
			);
			$this->end_controls_section();
			$this->start_controls_section(
				'team_style_1',
				[
					'label' => __( 'Team Style', 'appilo' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);
			$this->add_control(
				'Name-Color',
				[
					'label' => esc_html__('Name Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-team-section .bigo-team-wrapper .bigo-team-person .content h4 a' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Name-Typo',
					'label' => esc_html__('Name Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-team-section .bigo-team-wrapper .bigo-team-person .content h4 a',
				]
			);
			$this->add_control(
				'Designation-Color',
				[
					'label' => esc_html__('Designation Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-team-section .bigo-team-wrapper .bigo-team-person .content .position' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Designation-Typo',
					'label' => esc_html__('Designation Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-team-section .bigo-team-wrapper .bigo-team-person .content .position',
				]
			);
			$this->add_control(
				'Social-Icon-Color',
				[
					'label' => esc_html__('Social Icon Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-team-section .bigo-team-wrapper .bigo-team-person .hover-icon li i' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Social-Icon-Hover-Color',
				[
					'label' => esc_html__('Social Icon Hover Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-team-section .bigo-team-wrapper .bigo-team-person .hover-icon li i:hover' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'background-overlay-heading',
				[
					'label' => esc_html__( 'Background Overlay', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background-overlay',
                    'label' => esc_html__( 'Background Overlay', 'appilo' ),
                    'types' => [ 'gradient' ],
                    'selector' => '{{WRAPPER}} .bigo-team-section .bigo-team-wrapper .bigo-team-person::before',
                ]
		    );
			
			$this->add_control(
				'slide-nav-style-heading',
				[
					'label' => esc_html__( 'Slide Nav Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'slider-nav-Color',
				[
					'label' => esc_html__('Slide Nav Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-team-section .bigo-team-carousel .owl-nav .owl-prev, .bigo-team-section .bigo-team-carousel .owl-nav .owl-next' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'slider-Dot-Color',
				[
					'label' => esc_html__('Slide Dot Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-team-section .bigo-team-carousel .owl-dots .owl-dot.active span' => 'background: {{VALUE}};',
					],
				]
			);
			$this->end_controls_section();
			
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-team-section">
                <div class="container text-center custom-container-width">
                    <div class="bigo-section-title">
                        <span class="sub-header"><?php echo wp_kses($settings['sub_title'], true); ?></span>
                        <div class="border"></div>
                        <h2><?php echo wp_kses($settings['title'], true); ?></h2>
                    </div> <!-- bigo-section-title -->

                    <div class="bigo-team-carousel owl-carousel owl-theme">
						<?php foreach ($settings['list'] as $item): ?>
                            <div class="bigo-team-wrapper item">
                                <div class="bigo-team-person">
									<?php if (!empty($item['team_image']['url'])): ?>
                                        <img src="<?php echo esc_url($item['team_image']['url']); ?>" alt="">
									<?php endif; ?>

                                    <div class="content">
                                        <h4><a href="#"><?php echo wp_kses($item['name'], true); ?></a></h4>
                                        <span class="position"><?php echo wp_kses($item['designation'], true); ?></span>
                                    </div>

                                    <ul class="hover-icon">
										
										<?php if ('yes' === $item['social_icon_switcher_1']): ?>
                                            <li>
                                                <a href="<?php echo esc_url($item['social_profile_link_1']['url']); ?>">
													<?php \Elementor\Icons_Manager::render_icon($item['social_icon_1'], ['aria-hidden' => 'true']); ?>
                                                </a>
                                            </li>
										<?php endif; ?>
										
										<?php if ('yes' === $item['social_icon_switcher_2']): ?>
                                            <li>
                                                <a href="<?php echo esc_url($item['social_profile_link_2']['url']); ?>">
													<?php \Elementor\Icons_Manager::render_icon($item['social_icon_2'], ['aria-hidden' => 'true']); ?>
                                                </a>
                                            </li>
										<?php endif; ?>
										
										<?php if ('yes' === $item['social_icon_switcher_3']): ?>
                                            <li>
                                                <a href="<?php echo esc_url($item['social_profile_link_3']['url']); ?>">
													<?php \Elementor\Icons_Manager::render_icon($item['social_icon_3'], ['aria-hidden' => 'true']); ?>
                                                </a>
                                            </li>
										<?php endif; ?>
										
										<?php if ('yes' === $item['social_icon_switcher_4']): ?>
                                            <li>
                                                <a href="<?php echo esc_url($item['social_profile_link_4']['url']); ?>">
													<?php \Elementor\Icons_Manager::render_icon($item['social_icon_4'], ['aria-hidden' => 'true']); ?>
                                                </a>
                                            </li>
										<?php endif; ?>
										
										<?php if ('yes' === $item['social_icon_switcher_5']): ?>
                                            <li>
                                                <a href="<?php echo esc_url($item['social_profile_link_5']['url']); ?>">
													<?php \Elementor\Icons_Manager::render_icon($item['social_icon_5'], ['aria-hidden' => 'true']); ?>
                                                </a>
                                            </li>
										<?php endif; ?>

                                    </ul>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
            </section> <!-- bigo-team-section -->
			
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_team());
	?>