<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_tab extends Widget_Base
{

    public function get_name()
    {
        return 'seo-landing-tab';
    }

    public function get_title()
    {
        return __('Sass Tab', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-banner';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'active',
			[
				'label' => esc_html__( 'Active', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'your-plugin' ),
				'label_off' => esc_html__( 'Hide', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $repeater->add_control(
			'tab_nav_options',
			[
				'label' => esc_html__( 'Tab Nav', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$repeater->add_control(
			'tab_icon',
			[
				'label' => esc_html__( 'Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);
        
		$repeater->add_control(
			'tab_title', [
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'plugin-name' ),
				'label_block' => true,
			]
		);

        $repeater->add_control(
			'tab_content_options',
			[
				'label' => esc_html__( 'Tab Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $repeater->add_control(
			'image_shape',
			[
				'label' => esc_html__( 'Shape', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $repeater->add_control(
			'tab_content_title', [
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Best Graphic Interface Through Latest Application Showing' , 'plugin-name' ),
				'label_block' => true,
			]
		);

        $repeater->add_control(
			'info_option1',
			[
				'label' => esc_html__( 'Info One', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'info_1',
			[
				'label' => esc_html__( 'Info One Show/Hide', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'your-plugin' ),
				'label_off' => esc_html__( 'Hide', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        
        $repeater->add_control(
			'i_icon1',
			[
				'label' => esc_html__( 'Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

        $repeater->add_control(
			'i_title1',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Set your personalized spending budget', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $repeater->add_control(
			'i_content1',
			[
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Rhoncus dignissim habitant viverra mollis. Semper ullamcorper ac
                pharetra, commodo mauris. Fringilla.', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your content here', 'plugin-name' ),
			]
		);
        
        $repeater->add_control(
			'info_option2',
			[
				'label' => esc_html__( 'Info Two', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'info_2',
			[
				'label' => esc_html__( 'Info Two Show/Hide', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'your-plugin' ),
				'label_off' => esc_html__( 'Hide', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        
        $repeater->add_control(
			'i_icon2',
			[
				'label' => esc_html__( 'Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

        $repeater->add_control(
			'i_title2',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'user Friendly user Interface Design Layout', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $repeater->add_control(
			'i_content2',
			[
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Rhoncus dignissim habitant viverra mollis. Semper ullamcorper ac
                pharetra, commodo mauris. Fringilla.', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your content here', 'plugin-name' ),
			]
		);

        $repeater->add_control(
			'info_option3',
			[
				'label' => esc_html__( 'Info Three', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'info_3',
			[
				'label' => esc_html__( 'Info Three Show/Hide', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'your-plugin' ),
				'label_off' => esc_html__( 'Hide', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        
        $repeater->add_control(
			'i_icon3',
			[
				'label' => esc_html__( 'Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

        $repeater->add_control(
			'i_title3',
			[
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Made With Powerful Programming Language', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your title here', 'plugin-name' ),
			]
		);
        $repeater->add_control(
			'i_content3',
			[
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Rhoncus dignissim habitant viverra mollis. Semper ullamcorper ac
                pharetra, commodo mauris. Fringilla.', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your content here', 'plugin-name' ),
			]
		);


		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'tab_title' => esc_html__( 'Internal Feedback', 'plugin-name' ),
						'tab_content_title' => esc_html__( 'Best Graphic Interface Through Latest Application Showing', 'plugin-name' ),
						'i_title1' => esc_html__( 'Set your personalized spending budget', 'plugin-name' ),
						'i_content1' => esc_html__( 'Rhoncus dignissim habitant viverra mollis. Semper ullamcorper ac pharetra, commodo mauris. Fringilla.', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ tab_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'tab_style',
            [
                'label' => __('Tab Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_responsive_control(
		    'tab_margin',
		    [
		        'label'      => esc_html__( 'Tab Margin', 'xpress-core' ),
		        'type'       => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', '%', 'em' ],
		        'selectors'  => [
		            '{{WRAPPER}} .sl-tab-nav' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		    ]
		);
        

        $this->add_control(
            'tab_border_color',
            [
                'label' => __('Tab Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-tab-nav > ul' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'tab_title_color',
            [
                'label' => __('Tab Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-tab-nav > ul .nav-item .nav-link h5' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tab_title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-tab-nav > ul .nav-item .nav-link h5',
            ]
        );

		$this->add_control(
            'tab_active_bg_color',
            [
                'label' => __('Tab Active BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-tab-nav > ul .nav-item .nav-link.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
		
        $this->end_controls_section();


		$this->start_controls_section(
            'content_style',
            [
                'label' => __('Content Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-sec-title .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_bottom_border_color',
            [
                'label' => __('Title Bottom Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-sec-title .title span::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-sec-title .title',
            ]
        );

		$this->add_control(
			'info_options',
			[
				'label' => esc_html__( 'Info Options', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
            'i_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-tab-info-item .content h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'i_title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-tab-info-item .content h3',
            ]
        );

		$this->add_control(
			'i_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
            'i_content_color',
            [
                'label' => __('Content Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-tab-info-item .text' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'i_content_typo',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-tab-info-item .text',
            ]
        );

		$this->add_control(
			'a_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
            'i_active_border_color',
            [
                'label' => __('Active Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-tab-info-item.active .content' => 'border-color: {{VALUE}}',
                    '{{WRAPPER}} .sl-tab-info-item:hover .content' => 'border-color: {{VALUE}}',
                ],
            ]
        );
		$this->add_control(
            'i_active_bg_color',
            [
                'label' => __('Active BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-tab-info-item.active .content' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .sl-tab-info-item:hover .content' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        
        <div class="sl-tab-section">
            <div class="container maxw_1300">
				<div class="sl-tab-nav">
					<ul class="nav nav-tabs wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms" id="myTab" role="tablist">

						<?php 
						$i = 0;
						foreach($settings['tabs'] as $tab): 
							$i++;
						?>
						<li class="nav-item">
							<a class="nav-link <?php if('yes' == $tab['active']){ echo esc_attr('active');} ?>" id="<?php echo $tab['_id']. $i; ?>" data-toggle="tab" href="#<?php echo $tab['_id'] ?>" role="tab" aria-controls="home" aria-selected="true">
							<div class="sl-tab-item">

								<span class="icon">
									<?php Icons_Manager::render_icon( $tab['tab_icon'], [ 'aria-hidden' => 'true' ] ); ?>
								</span>

								<?php if(!empty($tab['tab_title'])): ?>
								<h5><?php echo esc_html($tab['tab_title']); ?></h5>
								<?php endif; ?>
							</div>
								
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

                <div class="tab-content" id="myTabContent">

                    <?php 
                    $i = 0;
                    foreach($settings['tabs'] as $tab): 
                        $i++;
                    ?>
                    <div class="tab-pane fade <?php if('yes' == $tab['active']){ echo esc_attr('show active');} ?>" id="<?php echo $tab['_id'] ?>" role="tabpanel" aria-labelledby="<?php echo $tab['_id']. $i; ?>">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
								<div class="sl-tab-img-wrap pos-rel wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms">
									<?php if(!empty($tab['image']['url'])): ?>
									<div class="sl-tab-img">
										<img src="<?php echo $tab['image']['url']; ?>" alt="image">
									</div>
									<?php endif; ?>

									<?php if(!empty($tab['image_shape']['url'])): ?>
									<div class="sl-tab-img-shape">
										<img src="<?php echo $tab['image_shape']['url']; ?>" alt="image">
									</div>
									<?php endif; ?>
								</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sl-sec-title mb-40">
                                    <?php if(!empty($tab['tab_content_title'])): ?>
                                    <h2 class="title wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $tab['tab_content_title']; ?></h2>
                                    <?php endif; ?>
                                </div>

                                <div class="sl-tab-info-wrap">
									<?php if ( 'yes' === $tab['info_1'] ) : ?>
                                    <div class="sl-tab-info-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1500ms">
                                        <?php if(!empty($tab['i_icon1'])): ?>
                                        <span class="icon">
                                        <?php Icons_Manager::render_icon( $tab['i_icon1'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </span>
                                        <?php endif; ?>

                                        <div class="content">
                                            <?php if(!empty($tab['i_title1'])): ?>
                                            <h3><?php echo $tab['i_title1']; ?></h3>
                                            <?php endif; ?>

                                            <?php if(!empty($tab['i_content1'])): ?>
											<div class="text">
                                                <?php echo $tab['i_content1']; ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									<?php endif; ?>

									<?php if ( 'yes' === $tab['info_2'] ) : ?>
                                    <div class="sl-tab-info-item active wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1500ms">
                                        <?php if(!empty($tab['i_icon2'])): ?>
                                        <span class="icon">
                                        <?php Icons_Manager::render_icon( $tab['i_icon2'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </span>
                                        <?php endif; ?>

                                        <div class="content">
                                            <?php if(!empty($tab['i_title2'])): ?>
                                            <h3><?php echo $tab['i_title2']; ?></h3>
                                            <?php endif; ?>

                                            <?php if(!empty($tab['i_content2'])): ?>
                                            <div class="text">
                                                <?php echo $tab['i_content2']; ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									<?php endif; ?>

									<?php if ( 'yes' === $tab['info_3'] ) : ?>
                                    <div class="sl-tab-info-item wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
                                        <?php if(!empty($tab['i_icon3'])): ?>
                                        <span class="icon">
                                        <?php Icons_Manager::render_icon( $tab['i_icon3'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </span>
                                        <?php endif; ?>

                                        <div class="content">
                                            <?php if(!empty($tab['i_title3'])): ?>
                                            <h3><?php echo $tab['i_title3']; ?></h3>
                                            <?php endif; ?>

                                            <?php if(!empty($tab['i_content3'])): ?>
											<div class="text">
                                                <?php echo $tab['i_content3']; ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_tab());
