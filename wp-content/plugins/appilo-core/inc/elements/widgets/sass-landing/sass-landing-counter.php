<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_counter extends Widget_Base
{

    public function get_name()
    {
        return 'seo-landing-counter';
    }

    public function get_title()
    {
        return __('Sass Counter', 'appilo');
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

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_item', [
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Get partners and brand advocates to post your content.' , 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'items',
			[
				'label' => esc_html__( 'List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_item' => esc_html__( 'Get partners and brand advocates to post your content.', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ list_item }}}',
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
			'counter_title', [
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Active Team' , 'plugin-name' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'count', [
				'label' => esc_html__( 'Count', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '45' , 'plugin-name' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'suffix', [
				'label' => esc_html__( 'Suffix', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'k+' , 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'counters',
			[
				'label' => esc_html__( 'Counter', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'counter_title' => esc_html__( 'Active Team', 'plugin-name' ),
						'count' => esc_html__( '45', 'plugin-name' ),
						'suffix' => esc_html__( 'k+', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ counter_title }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'image_section',
            [
                'label' => __('Image', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
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
			'st_h',
			[
				'label' => esc_html__( 'Section Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
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

        
		$this->add_control(
			'list_h',
			[
				'label' => esc_html__( 'List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'list_color',
            [
                'label' => __('List Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-counter-list li' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'list_icon_color',
            [
                'label' => __('List Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-counter-list li::before' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'list_typo',
                'label' => __('List Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-counter-list li',
            ]
        );

        $this->add_control(
			'counter_h',
			[
				'label' => esc_html__( 'Counter', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'c_active_bg_color',
            [
                'label' => __('Active BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-counter-single:hover' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .sl-counter-single.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_control(
			'c_active_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


        $this->add_control(
            'c_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-counter-single > span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'c_title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-counter-single > span',
            ]
        );

        $this->add_control(
			'c_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'c_count_color',
            [
                'label' => __('Count Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-counter-single h2' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'c_count_typo',
                'label' => __('Count Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-counter-single h2',
            ]
        );
        
        
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>

        <div class="sl-counter">
            <div class="container maxw_1300">
                <div class="row align-items-center mt-none-30">
                    <div class="col-lg-6 mt-30">
                        <div class="sl-counter-content">
                            <div class="sl-sec-title mb-40">
                                <?php if(!empty($settings['subtitle'])): ?>
                                <h5 class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['subtitle']; ?></h5>
                                <?php endif; ?>

                                <?php if(!empty($settings['title'])): ?>
                                <h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms"><?php echo $settings['title']; ?></h2>
                                <?php endif; ?>

                                <?php if(!empty($settings['content'])): ?>
                                <div class="content wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
                                    <?php echo $settings['content']; ?>
                                </div>
                                <?php endif; ?>
                            </div>

                            <ul class="sl-counter-list wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1500ms">
                                <?php foreach($settings['items'] as $item): ?>
                                <li><?php echo esc_html($item['list_item']); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            
                            <div class="sl-counter-wrap ul_li mt-30 wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1500ms">
                                <?php foreach($settings['counters'] as $counter): ?>
                                <div class="sl-counter-single mt-30 <?php if('yes' == $counter['active']){ echo esc_attr('active');} ?>">
                                    <span><?php echo esc_html($counter['counter_title']); ?></span>

                                    <h2><span class="odometer" data-count="<?php echo $counter['count']; ?>">00</span> <span class="suffix"><?php echo $counter['suffix']; ?></span></h2>
                                    
                                </div>
                                <?php endforeach; ?>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 mt-30">
                        <?php if(!empty($settings['image']['url'])): ?>
                        <div class="sl-counter-img wow fadeInRight" data-wow-delay="0s" data-wow-duration="1500ms">
                            <img src="<?php echo $settings['image']['url'] ?>" alt="">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_counter());
