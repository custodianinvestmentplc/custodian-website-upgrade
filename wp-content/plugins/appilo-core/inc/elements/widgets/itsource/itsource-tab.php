<?php
	
	namespace Elementor;
	
	use Appilo_Core;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class itsource_tab extends Widget_Base
	{
		
		public function get_name()
		{
			return 'itsource-tab';
		}
		
		public function get_title()
		{
			return __('iTsource Tabs', 'appilo');
		}
		
		public function get_categories()
		{
			return ['appilo-core'];
		}
		
		public function get_icon()
		{
			return 'eicon-sitemap';
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
		protected function register_controls()
		{
			
			
			$this->start_controls_section(
				'pm',
				[
					'label' => __('Tabs', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$repeater = new Repeater();
			$repeater->add_control(
				'tab_title',
				[
					'label' => __('Tab Title', 'appilo'),
					'type' => Controls_Manager::TEXT,
					'default' => __('Company History', 'appilo'),
				]
			);
			$repeater->add_control(
				'tab_desc',
				[
					'label' => __('Tab Description', 'appilo'),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __('Company History popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard my company,

', 'appilo'),
				]
			);
			$repeater->add_control(
				'tab_feature',
				[
					'label' => __('Features', 'appilo'),
					'type' => Appilo_Core::LIST_CONTROL,
				]
			);
			$this->add_control(
				'tab_list',
				[
					'label' => __('Tab List', 'appilo'),
					'type' => Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'tab_title' => 'Company History',
						],
						[
							'tab_title' => 'Our Mission',
						],
						[
							'tab_title' => 'Our Vision',
						],
					
					],
					'title_field' => '{{{ tab_title }}}',
				]
			);
			$this->end_controls_section();
			
			
			$this->start_controls_section(
				'section_style',
				[
					'label' => __('Style', 'appilo'),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);
			
			$this->add_control(
				'tab_active_title_color',
				[
					'label' => __('Tab Active Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .it-nw-about-tab-btn .nav-tabs .nav-link.active' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_control(
				'tab_inactive_title_color',
				[
					'label' => __('Tab Inactive Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .it-nw-about-tab-btn li a' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'tab_title_typography',
					'label' => __('Tab Title Font', 'appilo'),
					'selector' => '{{WRAPPER}} .it-nw-about-tab-btn li a',
				]
			);
			
			$this->add_control(
				'tab_active_bg',
				[
					'label' => __('Tab Active Background', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .it-nw-about-tab-btn .nav-tabs .nav-link.active' => 'background-color: {{VALUE}}',
					],
				]
			);
			$this->add_control(
				'tab_inactive_bg',
				[
					'label' => __('Tab Inactive Background', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .it-nw-about-tab-btn li a' => 'background-color: {{VALUE}}',
					],
				]
			);
			$this->add_control(
				'desc_color',
				[
					'label' => __('Description Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .it-nw-about-tab-content p' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'desc_typography',
					'label' => __('Description Font', 'appilo'),
					'selector' => '{{WRAPPER}} .it-nw-about-tab-content p',
				]
			);
			$this->add_control(
				'feature_color',
				[
					'label' => __('Features Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .it-nw-about-tab-content li' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'feature_typography',
					'label' => __('Features Font', 'plugin-domain'),
					'selector' => '{{WRAPPER}} .it-nw-about-tab-content li',
				]
			);
			$this->add_control(
				'feature_icon_color',
				[
					'label' => __('Features Icon Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .it-nw-about-tab-content li::before' => 'color: {{VALUE}}',
					],
				]
			);
			
			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'box_shadow',
					'label' => __('Tab Button Shadow', 'appilo'),
					'selector' => '{{WRAPPER}} .it-nw-about-tab-btn li a',
				]
			);
			$this->end_controls_section();
		}
		
		protected function render()
		{
			$settings = $this->get_settings_for_display();

//  Start Tab Section
			
			echo '<div class="it-nw-about-tab-wrapper">
							<div class="it-nw-about-tab-btn">
								<ul id="tabs" class="nav text-capitalize nav-tabs">';
			
			if ($settings['tab_list']) {
				
				$i = 0;
				
				foreach ($settings['tab_list'] as $tab) {
					
					$i++;
					
					if ($i == 1) {
						$active = 'active';
						$show = 'show';
					} else {
						$active = '';
						$show = '';
					}
					
					
					echo '<li class="nav-item"><a href="#" data-target="#' . $tab['_id'] . '" data-toggle="tab" class="nav-link text-capitalize ' . $active . ' ' . $show . '">' . $tab['tab_title'] . '</a></li>';
					
				}
			}
			echo '</ul>
							</div>
							<div class="it-nw-about-tab-content ul-li-block pera-content">
								<div id="tabsContent" class="tab-content">';
			
			if ($settings['tab_list']) {
				
				$i = 0;
				
				foreach ($settings['tab_list'] as $tab) {
					
					$i++;
					
					if ($i == 1) {
						$active = 'active';
						$show = 'show';
					} else {
						$active = '';
						$show = '';
					}
					
					echo '<div id="' . $tab['_id'] . '" class="tab-pane fade ' . $active . ' ' . $show . '">
										<div class="it-nw-about-tab-content">
											<p>' . $tab['tab_desc'] . '</p>
											<ul>';
					
					get_multi_list($tab['tab_feature'], 'li');
					
					echo '</ul>
										</div>
									</div>';
					
				}
			}
			echo '</div>
							</div>
							
						</div>';
			
			
		}

		
		protected function content_template()
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new itsource_tab());