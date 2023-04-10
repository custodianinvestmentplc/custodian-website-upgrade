<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_wca extends Widget_Base
{

    public function get_name()
    {
        return 'seo-landing-wca';
    }

    public function get_title()
    {
        return __('Sass WCA', 'appilo');
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
            'images_section',
            [
                'label' => __('Images', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'ss_img',
            [
                'label' => __( 'Image One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'ss_img2',
            [
                'label' => __( 'Image Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'ss_img3',
            [
                'label' => __( 'Image Three', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'ss_img4',
            [
                'label' => __( 'Image Four', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'icon1',
            [
                'label' => __( 'Icon One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'icon2',
            [
                'label' => __( 'Icon Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'icon3',
            [
                'label' => __( 'Icon Three', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle', [
                'label' => __('Sub Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Type you subtitle here', 'appilo'),
                'label_block' => true,
            ]

        );
        $this->add_control(
            'title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Type you title here', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'content', [
                'label' => __('Content', 'appilo'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __('Increase productivity with a simple to-do app. budgets app
                Urna sit placerat tellus at est odio id. Pharetra', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
			'info_section',
			[
				'label' => esc_html__( 'Info Box One', 'appilo' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'box_number1', [
				'label' => esc_html__( 'Number', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#01' , 'appilo' ),
				'label_block' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'appilo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

		$repeater->add_control(
			'i_title', [
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hashtag targeting' , 'appilo' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'i_content', [
				'label' => esc_html__( 'Content', 'appilo' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Attract relevant users using specific hashtags.' , 'appilo' ),
				'show_label' => false,
			]
		);

		$this->add_control(
			'items',
			[
				'label' => esc_html__( 'Info Box', 'appilo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'i_title' => esc_html__( 'Hashtag targeting', 'appilo' ),
						'i_content' => esc_html__( 'Attract relevant users using specific hashtags.', 'appilo' ),
					],
				],
				'title_field' => '{{{ i_title }}}',
			]
		);

        
        $this->end_controls_section();

        $this->start_controls_section(
			'info_section2',
			[
				'label' => esc_html__( 'Info Box Two', 'appilo' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'box_number2', [
				'label' => esc_html__( 'Number', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#02' , 'appilo' ),
				'label_block' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'icon2',
			[
				'label' => esc_html__( 'Icon', 'appilo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

		$repeater->add_control(
			'i_title2', [
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hashtag targeting' , 'appilo' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'i_content2', [
				'label' => esc_html__( 'Content', 'appilo' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Attract relevant users using specific hashtags.' , 'appilo' ),
				'show_label' => false,
			]
		);

		$this->add_control(
			'items2',
			[
				'label' => esc_html__( 'Info Box', 'appilo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'i_title2' => esc_html__( 'Track Growth level', 'appilo' ),
						'i_content2' => esc_html__( 'Attract relevant users using specific hashtags.', 'appilo' ),
					],
				],
				'title_field' => '{{{ i_title2 }}}',
			]
		);

        
        $this->end_controls_section();

        $this->start_controls_section(
			'counter_section',
			[
				'label' => esc_html__( 'Counter', 'appilo' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'counter_title', [
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Active users' , 'appilo' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'counter_number', [
				'label' => esc_html__( 'Number', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '50' , 'appilo' ),
			]
		);
		$repeater->add_control(
			'counter_suffix', [
				'label' => esc_html__( 'Suffix', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'k+' , 'appilo' ),
			]
		);

		$this->add_control(
			'counters',
			[
				'label' => esc_html__( 'Counter', 'appilo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'counter_title' => esc_html__( 'Active users', 'appilo' ),
						'counter_number' => esc_html__( '50', 'appilo' ),
						'counter_suffix' => esc_html__( 'k+', 'appilo' ),
					],
				],
				'title_field' => '{{{ counter_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
            [
                'label' => __('Section Title Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
		    'text_align',
		    [
		        'label'       => esc_html__('Text Align', 'xpress-core'),
		        'type'        => Controls_Manager::CHOOSE,
		        'label_block' => false,

		        'options' => [
		            'left' => [
		                'title' => __('Left', 'xpress-core'),
		                'icon'  => 'eicon-text-align-left',
		            ],

		            'center' => [
		                'title' => __('Center', 'xpress-core'),
		                'icon'  => 'eicon-text-align-center',
		            ],

		            'right' => [
		                'title' => __('Right', 'xpress-core'),
		                'icon'  => 'eicon-text-align-right',
		            ],
		        ],

		        'devices' => ['desktop', 'tablet', 'mobile'],

		        'selectors' => [
		            '{{WRAPPER}} .sl-sec-title' => 'text-align: {{VALUE}};',
		        ],

		    ]
		);

		$this->add_responsive_control(
		    'wrapper_margin',
		    [
		        'label'      => esc_html__( 'Wrapper Margin', 'xpress-core' ),
		        'type'       => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', '%', 'em' ],
		        'selectors'  => [
		            '{{WRAPPER}} .sl-sec-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		    ]
		);
       
        $this->add_control(
            'subtitle_color',
            [
                'label' => __('Subtitle Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-sec-title .subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typo',
                'label' => __('SubTitle Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-sec-title .subtitle',
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
            'content_color',
            [
                'label' => __('Content Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-sec-title .content' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_typo',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-sec-title .content',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'info_box_style',
            [
                'label' => __('Info Box', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'border_color',
            [
                'label' => __('Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-wca-box' => 'border-color: {{VALUE}}',
                    '{{WRAPPER}} .sl-wca-box .sl-wca-box-number' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'number_option',
			[
				'label' => esc_html__( 'Number', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'number_color',
            [
                'label' => __('Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-wca-box .sl-wca-box-number' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __('Number Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-wca-box .sl-wca-box-number',
            ]
        );

        $this->add_control(
			'icon_option',
			[
				'label' => esc_html__( 'Icon', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'icon_bg_color1',
            [
                'label' => __('Icon BG Color One', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-wca-box-item:nth-child(1) .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg_color2',
            [
                'label' => __('Icon BG Color Two', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-wca-box-item:nth-child(2) .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg_color3',
            [
                'label' => __('Icon BG Color Three', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-wca-box2 .sl-wca-box-item:nth-child(1) .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg_color4',
            [
                'label' => __('Icon BG Color Four', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-wca-box2 .sl-wca-box-item:nth-child(2) .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
			'title_option',
			[
				'label' => esc_html__( 'Title', 'appilo' ),
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
                    '{{WRAPPER}} .sl-wca-box-item h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'i_title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-wca-box-item h3',
            ]
        );

        $this->add_control(
			'content_option',
			[
				'label' => esc_html__( 'Content', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'i_content_color',
            [
                'label' => __('Content Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-wca-box-item .text' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'i_content_typo',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-wca-box-item .text',
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'counter_style',
            [
                'label' => __('Info Box', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'c_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-counter-item .counter_title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'c_title_typo',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-counter-item .counter_title',
            ]
        );

        $this->add_control(
			'counter_number_option',
			[
				'label' => esc_html__( 'Content', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'c_number_color',
            [
                'label' => __('Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-counter-item h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'c_number_typo',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-counter-item h3',
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        
        <div class="sl-wca position-relative">
            <div class="sl-wca-wrap">
                <div class="container maxw_1300">
                    <div class="row align-items-center mt-none-50">
                        <div class="col-lg-6">
                            <div class="sl-wca-images mt-50">
                                <?php if(!empty($settings['ss_img']['url'])): ?>
                                <img class="sl-img-main wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms" src="<?php echo $settings['ss_img']['url']; ?>" alt="img">
                                <?php endif; ?>

                                <?php if(!empty($settings['ss_img2']['url'])): ?>
                                <div class="sl-img2 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms">
                                    <img src="<?php echo $settings['ss_img2']['url']; ?>" alt="img">
                                </div>
                                <?php endif; ?>

                                <?php if(!empty($settings['ss_img3']['url'])): ?>
                                <div class="sl-img3 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1500ms">
                                    <img src="<?php echo $settings['ss_img3']['url']; ?>" alt="img">
                                </div>
                                <?php endif; ?>
                                
                                <?php if(!empty($settings['ss_img4']['url'])): ?>
                                <div class="sl-img4 wow fadeInRight" data-wow-delay=".6s" data-wow-duration="1500ms">
                                    <img src="<?php echo $settings['ss_img4']['url']; ?>" alt="img">
                                </div>
                                <?php endif; ?>

                                <div class="sl-wca-shape"></div>

                                <div class="sl-wca-icon">
                                    <?php if(!empty($settings['icon1']['url'])): ?>
                                    <img class="icon1" src="<?php echo $settings['icon1']['url']; ?>" alt="">
                                    <?php endif; ?>

                                    <?php if(!empty($settings['icon2']['url'])): ?>
                                    <img class="icon2" src="<?php echo $settings['icon2']['url']; ?>" alt="">
                                    <?php endif; ?>

                                    <?php if(!empty($settings['icon3']['url'])): ?>
                                    <img class="icon3" src="<?php echo $settings['icon3']['url']; ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sl-wca-content mt-50">
                                <div class="sl-sec-title">
                                    <?php if(!empty($settings['subtitle'])): ?>
                                    <h5 class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['subtitle']; ?></h5>
                                    <?php endif; ?>

                                    <?php if(!empty($settings['title'])): ?>
                                    <h2 class="title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1500ms"><?php echo $settings['title']; ?></h2>
                                    <?php endif; ?>

                                    <?php if(!empty($settings['content'])): ?>
                                    <div class="content wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1500ms">
                                        <?php echo $settings['content']; ?>
                                    </div> 
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sl-wca-box pos-rel wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
                                            <?php foreach($settings['items'] as $item): ?>
                                            <div class="sl-wca-box-item d-flex">
                                                <div class="icon">
                                                    <?php Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                </div>
                                                <div class="content">
                                                    <?php if(!empty($item['i_title'])): ?>
                                                    <h3><?php echo $item['i_title']; ?></h3>
                                                    <?php endif; ?>
                                                    
                                                    <?php if(!empty($item['i_content'])): ?>
                                                    <div class="text">
                                                        <?php echo $item['i_content']; ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                            <?php if(!empty($settings['box_number1'])): ?>
                                            <span class="sl-wca-box-number"><?php echo esc_html($settings['box_number1']); ?></span>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sl-wca-box sl-wca-box2 pos-rel wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1500ms">
                                            <?php foreach($settings['items2'] as $item2): ?>
                                            <div class="sl-wca-box-item d-flex">
                                                <div class="icon">
                                                    <?php Icons_Manager::render_icon( $item2['icon2'], [ 'aria-hidden' => 'true' ] ); ?>
                                                </div>
                                                <div class="content">
                                                    <?php if(!empty($item2['i_title2'])): ?>
                                                    <h3><?php echo $item2['i_title2']; ?></h3>
                                                    <?php endif; ?>
                                                    
                                                    <?php if(!empty($item2['i_content2'])): ?>
                                                    <div class="text">
                                                        <?php echo $item2['i_content2']; ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>

                                            <?php if(!empty($settings['box_number2'])): ?>
                                            <span class="sl-wca-box-number"><?php echo esc_html($settings['box_number2']); ?></span>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="sl-coutner ul_li wow fadeInUp mt-50">
                                    <?php  foreach($settings['counters'] as $counter): ?>
                                    <div class="sl-counter-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1500ms">
                                        <?php if(!empty($counter['counter_title'])): ?>
                                        <span class="counter_title"><?php echo esc_html($counter['counter_title']) ?></span>
                                        <?php endif; ?>

                                        <?php if(!empty($counter['counter_number'])): ?>
                                            <h3><span class="odometer" data-count="<?php echo esc_html($counter['counter_number']); ?>">00</span> <span class="suffix"><?php echo esc_html($counter['counter_suffix']); ?></span></h3>
                                        <?php endif; ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_wca());
