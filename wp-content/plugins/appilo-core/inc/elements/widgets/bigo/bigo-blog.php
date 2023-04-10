<?php
	
	namespace Elementor;
	
	use WP_Query;
	
	if (!defined('ABSPATH')) exit; // Exit if accessed directly
	
	class bigo_blog extends Widget_Base
	{
		
		public function get_name()
		{
			return 'bigo-blog';
		}
		
		public function get_title()
		{
			return __('Bigo Blog', 'appilo');
		}
		
		public function get_categories()
		{
			return ['appilo-core'];
		}
		
		public function get_icon()
		{
			return 'eicon-posts-group';
		}
		
		public function render_plain_content($instance = [])
		{
		}
		
		protected function register_controls()
		{
			
			$this->start_controls_section(
				'content_section',
				[
					'label' => __('Blog', 'appilo'),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			$this->add_control(
				'sub_title',
				[
					'label' => __('Sub Title', 'appilo'),
					'type' => Controls_Manager::TEXT,
					'default' => __('Recent Blogs', 'appilo'),
				]
			);
			$this->add_control(
				'title',
				[
					'label' => __('Title', 'appilo'),
					'type' => Controls_Manager::TEXT,
					'default' => __('Latest News & Articles', 'appilo'),
				]
			);
			$this->add_control(
				'query_type',
				[
					'label' => __('Query type', 'appilo'),
					'type' => Controls_Manager::SELECT,
					'default' => 'category',
					'options' => [
						'category' => __('Category', 'appilo'),
						'individual' => __('Individual', 'appilo'),
					],
				]
			);
			
			$this->add_control(
				'cat_query',
				[
					'label' => __('Category', 'appilo'),
					'type' => Controls_Manager::SELECT2,
					'options' => appilo_drop_cat('category'),
					'multiple' => true,
					'label_block' => true,
					'condition' => [
						'query_type' => 'category',
					],
					'default' => __('osaas', 'appilo'),
				]
			);
			
			$this->add_control(
				'id_query',
				[
					'label' => __('Posts', 'appilo'),
					'type' => Controls_Manager::SELECT2,
					'options' => appilo_drop_posts('post'),
					'multiple' => true,
					'label_block' => true,
					'condition' => [
						'query_type' => 'individual',
					],
				]
			);
			
			$this->add_control(
				'posts_per_page',
				[
					'label' => __('Posts Per Page', 'appilo'),
					'type' => Controls_Manager::NUMBER,
					'default' => 2,
				]
			);
			$this->add_control(
				'read_more',
				[
					'label' => __('Read More', 'appilo'),
					'type' => Controls_Manager::TEXT,
					'default' => __('Read More', 'appilo'),
				]
			);
			$this->add_control(
				'more_blogs',
				[
					'label' => __('More Blog', 'appilo'),
					'type' => Controls_Manager::TEXT,
					'default' => __('More Blogs', 'appilo'),
				]
			);
			$this->add_control(
				'blog_page_url',
				[
					'label' => esc_html__( 'Blog Page Link', 'appilo' ),
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
			$this->end_controls_section();
			$this->start_controls_section(
				'tab_style',
				[
					'label' => __('Blog Style', 'appilo'),
					'tab' => Controls_Manager::TAB_STYLE,
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
				'Sub_title_color',
				[
					'label' => __('Sub Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-section-title .sub-header' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_control(
			'--sub-title-bottom-border-color--heading',
                [
                    'label' => esc_html__( 'Border Color', 'appilo' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'sub-title-bottom-border-color',
					'label' => esc_html__( 'Bottom Border Color', 'appilo' ),
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} .bigo-section-title .border',
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'sub-title-typography',
					'label' => __('Sub Title Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-section-title .sub-header',
				]
			);
			$this->add_control(
				'title_color',
				[
					'label' => __('Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-section-title h2' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'title-typography',
					'label' => __('Title Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-section-title h2',
				]
			);
			$this->add_control(
				'post-title-color',
				[
					'label' => __('Post Title Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper h3' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'post-title-typography',
					'label' => __('Post Title Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper h3',
				]
			);
			$this->add_control(
				'Post-Info-color',
				[
					'label' => __('Post Info Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper p' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Post-Info-typography',
					'label' => __('Post Info Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper p',
				]
			);
			$this->add_control(
				'Read-More-color',
				[
					'label' => __('Read More Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .link' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_control(
				'Read-More-Hover-color',
				[
					'label' => __('Read More Hover Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .link:hover' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Read-More-typography',
					'label' => __('Read More Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .link',
				]
			);
			$this->add_control(
				'Author-color',
				[
					'label' => __('Author Color', 'appilo'),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .author .title' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Author-typography',
					'label' => __('Author Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .author .title',
				]
			);
			$this->add_control(
				'--meta-content-style-heading--',
				[
					'label' => esc_html__( 'Meta Content Style', 'appilo' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'meta-content-bg-color',
					'label' => esc_html__( 'Meta Content BG color', 'appilo' ),
					'types' => [ 'gradient' ],
					'selector' => '{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .share',
				]
			);
			$this->add_control(
				'meta-content-color',
				[
					'label' => esc_html__( 'Meta Color', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .share li' => 'color: {{VALUE}}',
						'{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .share li a' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'Meta-typography',
					'label' => __('Meta Typography', 'appilo'),
					'selector' => '{{WRAPPER}} .bigo-blog-section .bigo-blog-wrapper .share li',
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
			
			$per_page = $settings['posts_per_page'];
			$cat = $settings['cat_query'];
			$id = $settings['id_query'];
			
			
			if ($settings['query_type'] == 'category') {
				$query_args = array(
					'post_type' => 'post',
					'posts_per_page' => $per_page,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field' => 'term_id',
							'terms' => $cat,
						),
					),
				);
			}
			
			if ($settings['query_type'] == 'individual') {
				$query_args = array(
					'post_type' => 'post',
					'posts_per_page' => $per_page,
					'post__in' => $id,
					'orderby' => 'post__in'
				);
			}
			
			$wp_query = new WP_Query($query_args);
			
			?>
            <div class="bigo-blog-section">
                <div class="container custom-container-width">
                    <div class="bigo-section-title text-center">
                        <span class="sub-header"><?php echo esc_html__($settings['sub_title'], true); ?></span>
                        <div class="border"></div>
                        <h2><?php echo esc_html__($settings['title'], true); ?></h2>
                    </div> <!-- bigo-section-title -->
                    <div class="row">
						<?php
							if ($wp_query->have_posts()) {
								while ($wp_query->have_posts()) {
									$wp_query->the_post();
									?>
                                    
                                    <div class="col-sm-4 wow fadeInUp">
                                        <div class="bigo-blog-wrapper">
											<?php if (has_post_thumbnail()): ?>
												<?php the_post_thumbnail('full'); ?>
											<?php endif; ?>

                                            <h3><?php wp_kses(the_title(), true); ?></h3>

                                            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>

                                            <a href="<?php the_permalink(); ?>"
                                               class="link"><?php echo wp_kses($settings['read_more'], true); ?></a>

                                            <div class="author pull-right">
                                                <?php echo get_avatar(get_the_author_meta('ID'), 30, '', '', array('class'=> 'rounded-circle')); ?>
                                                <span class="title"><?php echo get_the_author_meta('display_name'); ?></span>
                                            </div>

                                            <ul class="share">
												<?php
													$categories = get_the_category();
												?>
                                                <li><i class="fa fa-tag"
                                                       aria-hidden="true"></i> <?php echo esc_html($categories[0]->name); ?>
                                                </li>

                                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2h ago</li>

                                                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-comments"
                                                                   aria-hidden="true"></i>
                                                        <?php
                                                            if ('0' == get_comments_number() || '1' == get_comments_number()){
                                                                echo esc_html(get_comments_number()) . ' Comment';
															}else{
																echo esc_html(get_comments_number()) . ' Comments';
															}
                                                        ?>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
									<?php
								}
								wp_reset_postdata();
							}
						?>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo esc_url($settings['blog_page_url']['url']); ?>"
                           class="link bigo-btn bigo-btn-default"><?php echo wp_kses($settings['more_blogs'], true) ?></a>
                    </div>
                </div>
            </div> <!-- bigo-blog-section -->
			
			
			<?php
			
		}
		
		protected function content_template()
		{
		}
		
	}
	
	Plugin::instance()->widgets_manager->register(new bigo_blog());