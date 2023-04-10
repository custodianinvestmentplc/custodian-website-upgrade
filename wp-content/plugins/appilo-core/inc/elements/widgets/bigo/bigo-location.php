<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_location extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-location';
		}
		
		public function get_title()
		{
			return __('Bigo Location', 'appilo');
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
				'Location-content',
				[
					'label' => __('Location Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$this->add_control(
				'map_image',
				[
					'label' => esc_html__('Map Image', 'appilo'),
					'type' => \Elementor\Controls_Manager::MEDIA,
				]
			);
			
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'tooltip_title', [
					'label' => esc_html__('Tooltip Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Germany Frankfurt', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'top_bottom',
				[
					'label' => esc_html__('Top/Bottom', 'appilo'),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => ['px', '%'],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'default' => [
						'unit' => '%',
						'size' => 50,
					],
					'selectors' => [
						'{{WRAPPER}} .bigo-location-section .caption .location .tool{{CURRENT_ITEM}}' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$repeater->add_control(
				'left_right',
				[
					'label' => esc_html__('Left/Right', 'appilo'),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => ['px', '%'],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'default' => [
						'unit' => '%',
						'size' => 50,
					],
					'selectors' => [
						'{{WRAPPER}} .bigo-location-section .caption .location .tool{{CURRENT_ITEM}}' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'list',
				[
					'label' => esc_html__('Location List', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'tooltip_title' => esc_html__('Germany Frankfurt', 'appilo'),
						],
						[
							'tooltip_title' => esc_html__('Germany Frankfurt', 'appilo'),
						],
						[
							'tooltip_title' => esc_html__('Germany Frankfurt', 'appilo'),
						],
					],
					'title_field' => '{{{ tooltip_title }}}',
					'prevent_empty' => false
				]
			);
			$this->end_controls_section();
			$this->start_controls_section(
				'right_content_info',
				[
					'label' => __('Section Info', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$this->add_control(
				'sub_title', [
					'label' => esc_html__('Sub Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Our Offices', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'title', [
					'label' => esc_html__('Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('We Are WorldWide', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'info', [
					'label' => esc_html__('Info', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __('Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Per spiciatis unde omnis iste natus error', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'btn_text', [
					'label' => esc_html__('Button Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Explore Offices', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'btn_link',
				[
					'label' => esc_html__('Button Link', 'appilo'),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => esc_html__('https://your-link.com', 'appilo'),
					'options' => ['url', 'is_external', 'nofollow'],
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);
			
			$this->end_controls_section();
			
			$this->start_controls_section(
				'Map-section-style',
				[
					'label' => __('Map Style', 'appilo'),
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
				'Icon-Circle-Color',
				[
					'label' => esc_html__('Icon Circle Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-location-section .caption .location .tool' => 'color: {{VALUE}};',
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
				'--subtitle-bottom-border-color-heading--',
				[
					'label' => esc_html__( 'Sub Title Border Color', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'subtitle-bottom-border-color',
					'label' => esc_html__( 'Bottom Border Color', 'appilo' ),
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} .bigo-section-title .border',
					'separator' => 'after',
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
			$this->add_control(
				'Info-Color',
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
					'name' => 'Info-Typo',
					'label' => esc_html__('Info Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-section-title p',
				]
			);
			$this->end_controls_section();
			$this->start_controls_section(
				'Button-Style',
				[
					'label' => __('Button Style', 'appilo'),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);
			$this->start_controls_tabs('tpcnt');
                $this->start_controls_tab(
                    'tp1',
                    [
                        'label' => esc_html__('Normal', 'appilo'),
                    ]
                );
                $this->add_control(
                    '--Button-Title-Color--',
                    [
                        'label' => esc_html__( 'Button Title Color', 'appilo' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'button-title-color',
                        'label' => esc_html__( 'Button Title Color', 'appilo' ),
                        'types' => [ 'gradient' ],
                        'selector' => '{{WRAPPER}} .bigo-btn-default',
                    ]
                );
                $this->add_control(
                    'Border-Color',
                    [
                        'label' => esc_html__('Border Color', 'appilo'),
                        'type' => Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .bigo-btn-default' => 'border-color: {{VALUE}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    Group_Control_Typography::get_type(),
                    [
                        'name' => 'Button-Typo',
                        'label' => esc_html__('Button Typography', 'appilo'),
                        'selector' =>
                            '{{WRAPPER}} .bigo-btn-default',
                    ]
                );
                $this->add_control(
                    'button-border-radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'appilo' ),
                        'type' => \Elementor\Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .bigo-btn-default' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'tp2',
                    [
                        'label' => esc_html__('Hover', 'appilo'),
                    ]
                );
                $this->add_control(
                    'Hover-Border-Color',
                    [
                        'label' => esc_html__('Hover Border Color', 'appilo'),
                        'type' => Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .bigo-btn-default:hover' => 'border-color: {{VALUE}};',
                        ],
                    ]
                );
                $this->add_control(
                    'button-hover-border-radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'appilo' ),
                        'type' => \Elementor\Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .bigo-btn-default:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'button-hover-Background-color',
                        'label' => esc_html__( 'Button Background Color', 'appilo' ),
                        'types' => [ 'gradient' ],
                        'selector' => '{{WRAPPER}} .bigo-btn-default::before',
                    ]
                );
                $this->end_controls_tab();
                $this->end_controls_tabs();
			
			$this->end_controls_section();
			
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-location-section">
                <div class="container custom-container-width">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="caption">
                                <img src="<?php echo esc_url($settings['map_image']['url']) ?>" alt="">

                                <div class="location">
									<?php foreach ($settings['list'] as $item): ?>
                                        <a class="tool tool-one elementor-repeater-item-<?php echo esc_attr($item['_id']); ?>"
                                           href="#" data-toggle="tooltip"
                                           title="<?php echo esc_attr($item['tooltip_title']); ?>"><i
                                                    class="far fa-circle" aria-hidden="true"></i></a>
									<?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="bigo-location-wrapper">
                                <div class="bigo-section-title text-center">
                                    <span class="sub-header"><?php echo esc_html($settings['sub_title']); ?></span>
                                    <div class="border"></div>
                                    <h2><?php echo esc_html($settings['title']); ?></h2>

                                    <p><?php echo esc_html($settings['info']); ?></p>

                                    <div>
                                        <a class="bigo-btn bigo-btn-default"
                                           href="<?php echo esc_url($settings['btn_link']['url']); ?>"><?php echo esc_html($settings['btn_text']); ?></a>
                                    </div>
                                </div> <!-- bigo-section-title -->
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- bigo-location-section -->
			
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_location());
	?>