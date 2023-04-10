<?php
	
	namespace Elementor;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_project extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-project';
		}
		
		public function get_title()
		{
			return __('Bigo Project', 'appilo');
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
				'Projects-cat-content',
				[
					'label' => __('Projects Category Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'cat_id', [
					'label' => esc_html__('Category ID', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('cat1', 'appilo'),
					'placeholder' => __('cat1 cat2 cat2', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'cat_name', [
					'label' => esc_html__('Category Name', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Design', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'cat_list',
				[
					'label' => esc_html__('Category List', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'cat_name' => esc_html__('Design', 'appilo'),
						],
						[
							'cat_name' => esc_html__('Market', 'appilo'),
						],
						[
							'cat_name' => esc_html__('Development', 'appilo'),
						],
						[
							'cat_name' => esc_html__('Photography', 'appilo'),
						],
					],
					'title_field' => '{{{ cat_name }}}',
				]
			);
			$this->end_controls_section();
			$this->start_controls_section(
				'Projects-content-item',
				[
					'label' => __('Projects Content', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
				'cat_id_content', [
					'label' => esc_html__('Category ID', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('cat1', 'appilo'),
					'placeholder' => __('cat1 cat2 cat2', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'content_img',
				[
					'label' => esc_html__('Project Image', 'appilo'),
					'type' => \Elementor\Controls_Manager::MEDIA,
				]
			);
			$repeater->add_control(
				'title', [
					'label' => esc_html__('Title', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Travel Marketing', 'appilo'),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'small_text', [
					'label' => esc_html__('Small Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('Boost your brand', 'appilo'),
					'label_block' => true,
				]
			);
			$this->add_control(
				'project_content',
				[
					'label' => esc_html__('Project Content', 'appilo'),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'title' => esc_html__('Travel Marketing', 'appilo'),
						],
						[
							'title' => esc_html__('Strategic Planning', 'appilo'),
						],
						[
							'title' => esc_html__('Tourism Development', 'appilo'),
						],
						[
							'title' => esc_html__('Photography', 'appilo'),
						],
						[
							'title' => esc_html__('Market Research', 'appilo'),
						],
						[
							'title' => esc_html__('Company Audit', 'appilo'),
						],
					],
					'title_field' => '{{{ title }}}',
				]
			);
			$this->add_control(
				'btn_text', [
					'label' => esc_html__('Button Text', 'appilo'),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __('All Projects', 'appilo'),
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
				'Category-Title-Color',
				[
					'label' => esc_html__('Category Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-project-section .portfolio .bigo-project-menu li' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Category-Title-Typo',
					'label' => esc_html__('Category Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-project-section .portfolio .bigo-project-menu li',
				]
			);
			$this->add_control(
				'Category-Active-Color',
				[
					'label' => esc_html__('Category Active Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-project-section .portfolio .bigo-project-menu li.active' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Title-Color',
				[
					'label' => esc_html__('Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-project-item .content h5' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Title-Typo',
					'label' => esc_html__('Title Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-project-item .content h5',
				]
			);
			$this->add_control(
				'Small-Color',
				[
					'label' => esc_html__('Small Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-project-item .content .small' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Small-Typo',
					'label' => esc_html__('Small Typography', 'appilo'),
					'selector' =>
						'{{WRAPPER}} .bigo-project-item .content .small',
				]
			);
			$this->add_control(
				'--button-color-style--heading',
				[
					'label' => esc_html__('Button Color', 'appilo'),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'button-color-gradient',
					'label' => esc_html__('Button Color', 'appilo'),
					'types' => ['gradient'],
					'selector' => '{{WRAPPER}} .bigo-btn-default',
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
				'Button-Border-Color',
				[
					'label' => esc_html__('Button Border Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-btn-default' => 'border-color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Button-Hover-Color',
				[
					'label' => esc_html__('Button Hover Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-btn-default:hover' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'Button-Hover-Border-Color',
				[
					'label' => esc_html__('Button Hover Border Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-btn-default:hover' => 'border-color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'button-hover-background',
					'label' => esc_html__('Hover Background', 'appilo'),
					'types' => ['gradient'],
					'selector' => '{{WRAPPER}} .bigo-btn-default::before',
				]
			);
			$this->end_controls_section();
			
			
		}
		
		protected function render()
		{
			
			$settings = $this->get_settings_for_display();
			?>

            <section class="bigo-project-section">
                <div class="container custom-container-width">
                    <div class="row text-center portfolio">
                        <div class="col-12">
                            <ul class="bigo-project-menu">
                                <li class="active" data-filter="*"><?php _e('All', 'appilo'); ?></li>
								<?php foreach ($settings['cat_list'] as $cat): ?>
                                    <li data-filter=".<?php echo esc_attr($cat['cat_id']); ?>"><?php echo esc_html($cat['cat_name']); ?></li>
								<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row bigo-grid gallery-wrapper">
						<?php foreach ($settings['project_content'] as $content): ?>
                            <div class="col-xl-4 bigo-grid-item mb-30 <?php echo esc_attr($content['cat_id_content']); ?>">
                                <figure class="bigo-project-item">
                                    <div class="gallery-caption">
                                        <img src="<?php echo esc_url($content['content_img']['url']); ?>" alt="">

                                        <div class="hover-view">
                                            <a href="<?php echo esc_url($content['content_img']['url']); ?>"
                                               style="outline: currentcolor none 0px;"><i class="far fa-image"></i></a>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <h5><?php esc_html_e($content['title'], 'appilo'); ?></h5>
                                        <span class="small"><?php esc_html_e($content['small_text'], 'appilo'); ?></span>
                                    </div>
                                </figure>
                            </div>
						<?php endforeach; ?>
                    </div>
					<?php if (!empty($settings['btn_text'])): ?>
                        <div class="bigo-project-btn text-center">
                            <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                               class="link bigo-btn bigo-btn-default"><?php esc_html_e($settings['btn_text']); ?></a>
                        </div>
					<?php endif; ?>
                </div>
            </section>
			
			
			<?php
		}
		
		protected function content_template()
		{
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_project());
	?>