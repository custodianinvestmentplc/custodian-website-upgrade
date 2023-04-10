<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_approach extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-approach';
		}
		
		public function get_title()
		{
			return __('Bigo Approach', 'appilo');
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
				'approach_content',
				[
					'label' => __('Approach Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$this->add_control(
				'sub_title', [
					'label' => esc_html__('Sub Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Our Approach', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'title', [
					'label' => esc_html__('Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Making Infamous Brands People’s <br> Favorite Brand', 'appilo'),
					'label_block' => true,
				]
			);
			
			$this->add_control(
				'--tab_content_heading--',
				[
					'label' => __( 'Tab Content', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'tab_title', [
					'label' => esc_html__('Tab Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Project Planning', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'info_title', [
					'label' => esc_html__('Info Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Project Planning', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'info_description', [
					'label' => esc_html__('Info Description', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'info_list', [
					'label' => esc_html__('Info List', 'appilo'),
					'type' => \Elementor\Controls_Manager::WYSIWYG,
					'default' => __(' <ul class="list-detail">
                                            <li> Et quasi architecto beatae vitae.</li>
                                            <li> Dicta sunt explicabo.</li>
                                            <li> Nemo enim ipsam voluptatem quia voluptas.</li>
                                        </ul>', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'background',
					'label' => esc_html__( 'Background', 'appilo' ),
					'types' => [ 'classic' ],
					'selector' => '{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .tab-content',
				]
			);
			$this->add_control(
				'list',
				[
					'label' => esc_html__('Tab List', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'tab_title' => esc_html__( 'Project Planning', 'appilo' ),
						],
					],
					'title_field' => '{{{ tab_title }}}',
				]
			);
			$this->end_controls_section();
			
			$this->start_controls_section(
				'approach_style',
				[
					'label' => __('Approach Style', 'appilo'),
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
				'Sub_Title_color',
				[
					'label' => esc_html__('Sub Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-section-title .sub-header' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'--sub-title-bottom-border-heading',
				[
					'label' => __( 'Border Bottom Color', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'border-cottom-gradient-color',
					'label' => esc_html__( 'Background', 'appilo' ),
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} .bigo-section-title .border',
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Sub_Title_typo',
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
				'--tab-pane_style_heading',
				[
					'label' => __( 'Tab Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'Tab-Title-Color',
				[
					'label' => esc_html__('Tab Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .nav-tabs li a' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Tab-Active-Title-Color',
				[
					'label' => esc_html__('Tab Active Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .nav-tabs .nav-item .nav-link.active' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Tab-Title-Typography',
					'label' => esc_html__('Tab Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .nav-tabs li a',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'tab_background',
					'label' => esc_html__( 'Background', 'appilo' ),
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .nav-tabs .nav-item .nav-link.active',
				]
			);
			$this->add_control(
				'--tab-content_style_heading',
				[
					'label' => __( 'Tab Content Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'Tab-Info-Title_color',
				[
					'label' => esc_html__('Tab Info Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .tab-content .wrapper-content h3' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Tab-Info-Title_typo',
					'label' => esc_html__('Tab Info Title Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .tab-content .wrapper-content h3',
				]
			);
			$this->add_control(
				'Tab-description-color',
				[
					'label' => esc_html__('Tab Description Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .tab-content .wrapper-content p' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Tab-description_typo',
					'label' => esc_html__('Tab Description Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .tab-content .wrapper-content p',
				]
			);
			$this->add_control(
				'Tab-List-color',
				[
					'label' => esc_html__('Tab List Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .tab-content .wrapper-content .list-detail li' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Tab-List_typo',
					'label' => esc_html__('Tab List Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-operation-section .bigo-operation-wrapper .tab-content .wrapper-content .list-detail li',
				]
			);
			$this->end_controls_section();
			
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-operation-section">
                <div class="container custom-container-width">
                    <div class="bigo-section-title text-center">
                        <span class="sub-header"><?php echo wp_kses($settings['sub_title'], true); ?></span>
                        <div class="border"></div>
                        <h2><?php echo wp_kses($settings['title'], true); ?></h2>
                    </div> <!-- bigo-section-title -->

                    <div class="bigo-operation-wrapper">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                                    <?php $i = 0; ?>
                                    <?php foreach ($settings['list'] as $item): $i++?>
                                        <li class="nav-item wow fadeInDown">
                                            <a class="nav-link <?php if (1 == $i) echo esc_attr('active'); ?>" id="<?php echo esc_attr($item['_id']); ?>-tab" data-toggle="pill" href="#<?php echo esc_attr($item['_id']); ?>" role="tab" aria-controls="<?php echo esc_attr($item['_id']); ?>" aria-selected="true"><?php echo wp_kses($item['tab_title'], true); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="col-md-8">
                                <div class="tab-content wow fadeInRight" id="pills-tabContent">
                                    <?php $i = 0; ?>
                                    <?php foreach ($settings['list'] as $item): $i++?>
                                        <div class="tab-pane fade <?php if (1 == $i) echo esc_attr('show active'); ?> " id="<?php echo esc_attr($item['_id']); ?>" role="tabpanel" aria-labelledby="<?php echo esc_attr($item['_id']); ?>-tab">
                                            <div class="wrapper-content">
                                                <h3><?php echo wp_kses($item['info_title'], true); ?></h3>
                                                <p><?php echo wp_kses($item['info_description'], true); ?></p>
												<?php echo wp_kses($item['info_list'], true); ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div> <!-- bigo-operation-wrapper -->
                </div>
            </section> <!-- bigo-operation-section -->
            
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_approach());
	?>