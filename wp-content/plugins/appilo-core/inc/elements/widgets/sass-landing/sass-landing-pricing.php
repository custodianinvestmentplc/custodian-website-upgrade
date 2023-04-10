<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_pricing extends Widget_Base
{

    public function get_name()
    {
        return 'seo-landing-pricing';
    }

    public function get_title()
    {
        return __('Sass Pricing', 'appilo');
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
            'count_section',
            [
                'label' => __('Counter', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        

        $this->add_control(
            'count', [
                'label' => __('Counter Number', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('450', 'appilo'),
                'label_block' => true,
            ]

        );

        $this->add_control(
            'suffix', [
                'label' => __('Counter Number', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('k+', 'appilo'),
                'label_block' => true,
            ]

        );
        
        $this->add_control(
            'count_title', [
                'label' => __('Counter Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Customer Purchase Our Plan', 'appilo'),
                'label_block' => true,
            ]

        );

        $this->add_control(
			'count_shape',
			[
				'label' => esc_html__( 'Count Shape Image', 'appilo' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
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
				'label' => esc_html__( 'Choose Image', 'appilo' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Section Title', 'appilo'),
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
            'pricing_section',
            [
                'label' => __('Pricing', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'active',
			[
				'label' => esc_html__( 'Active', 'appilo' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'appilo' ),
				'label_off' => esc_html__( 'Hide', 'appilo' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $repeater->add_control(
			'pricing_table_one',
			[
				'label' => esc_html__( 'Pricing Table One', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

        $repeater->add_control(
			'active_block1',
			[
				'label' => esc_html__( 'Active Block', 'appilo' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'appilo' ),
				'label_off' => esc_html__( 'Hide', 'appilo' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $repeater->add_control(
            'pricing_nav', [
                'label' => __('Pricing Nav', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('02', 'appilo'),
                'label_block' => true,
            ]
        );
        
        
        $repeater->add_control(
            'price', [
                'label' => __('Price', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$29', 'appilo'),
                'label_block' => false,
            ]
        );
        $repeater->add_control(
            'month', [
                'label' => __('Month', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('/m', 'appilo'),
                'label_block' => false,
            ]
        );

        $repeater->add_control(
            'price_sub_title', [
                'label' => __('Price Sub Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Perfect for startup', 'appilo'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
			'price_img',
			[
				'label' => esc_html__( 'Price Image', 'plugin-name' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

        
        $repeater->add_control(
            'pricing_title', [
                'label' => __('Price Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('What,s Included', 'appilo'),
                'label_block' => true,
            ]
        );
        
		$repeater->add_control(
			'price_list',
			[
				'label' => esc_html__( 'Price List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your price list here', 'plugin-name' ),
			]
		);

        $repeater->add_control(
			'btn_options',
			[
				'label' => esc_html__( 'Button', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);


        $repeater->add_control(
            'btn_text',
            [
                'label'       => __( 'Text', 'appilo' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'See Our Work', 'appilo' ),
                'placeholder' => __( 'Type button text here', 'appilo' ),
                'label_block' => true,
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'btn_link',
            [
                'label'       => __( 'Link', 'appilo' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://elementor.com/', 'appilo' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
            ]
        );

        $repeater->add_control(
            'price_text',
            [
                'label'       => __( 'Price Text', 'appilo' ),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => __( 'See Our Work', 'appilo' ),
                'placeholder' => __( 'No creadit card required', 'appilo' ),
                'label_block' => true,
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );
        
        $repeater->add_control(
			'pricing_table_two',
			[
				'label' => esc_html__( 'Pricing Table Two', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

        $repeater->add_control(
			'active_block2',
			[
				'label' => esc_html__( 'Active Block', 'appilo' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'appilo' ),
				'label_off' => esc_html__( 'Hide', 'appilo' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $repeater->add_control(
            'price2', [
                'label' => __('Price', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('$29', 'appilo'),
                'label_block' => false,
            ]
        );
        $repeater->add_control(
            'month2', [
                'label' => __('Month', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('/m', 'appilo'),
                'label_block' => false,
            ]
        );

        $repeater->add_control(
            'price_sub_title2', [
                'label' => __('Price Sub Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Perfect for startup', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
			'price_img2',
			[
				'label' => esc_html__( 'Price Image', 'plugin-name' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);
        $repeater->add_control(
            'pricing_title2', [
                'label' => __('Price Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('What,s Included', 'appilo'),
                'label_block' => true,
            ]
        );
        
		$repeater->add_control(
			'price_list2',
			[
				'label' => esc_html__( 'Price List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your price list here', 'plugin-name' ),
			]
		);

        $repeater->add_control(
			'btn_options2',
			[
				'label' => esc_html__( 'Button', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);


        $repeater->add_control(
            'btn_text2',
            [
                'label'       => __( 'Text', 'appilo' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'See Our Work', 'appilo' ),
                'placeholder' => __( 'Type button text here', 'appilo' ),
                'label_block' => true,
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'btn_link2',
            [
                'label'       => __( 'Link', 'appilo' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://elementor.com/', 'appilo' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
            ]
        );

        $repeater->add_control(
            'price_text2',
            [
                'label'       => __( 'Price Text', 'appilo' ),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => __( 'See Our Work', 'appilo' ),
                'placeholder' => __( 'No creadit card required', 'appilo' ),
                'label_block' => true,
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

		$this->add_control(
			'lists',
			[
				'label' => esc_html__( 'Pricing List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'pricing_nav' => esc_html__( '02', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ pricing_nav }}}',
			]
		);
        
    
        $this->end_controls_section();

        $this->start_controls_section(
            'sec_title_style',
            [
                'label' => __('Section Title', 'appilo'),
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
            'counter_style',
            [
                'label' => __('Coutner', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'count_color',
            [
                'label' => __('Count Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-count h2' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'count_typo',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-pricing-count h2',
            ]
        );

        $this->add_control(
			'c_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


        $this->add_control(
            'count_text_color',
            [
                'label' => __('Count Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-count > span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'count_text_typo',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-pricing-count > span',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'pricing_style',
            [
                'label' => __('Pricing', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'nav_options',
			[
				'label' => esc_html__( 'Pricing Nav', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

        $this->add_control(
            'nav_bg_color',
            [
                'label' => __('Nav BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-nav' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_border_color',
            [
                'label' => __('Nav Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-nav' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_text_color',
            [
                'label' => __('Nav Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-nav .nav-item .nav-link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_active_text_color',
            [
                'label' => __('Nav Active Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-nav .nav-item .nav-link.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_active_bg_color',
            [
                'label' => __('Nav Active BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-nav .nav-item .nav-link.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'nav_typo',
                'label' => __('Nav Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-pricing-nav .nav-item .nav-link',
            ]
        );

        $this->add_control(
			'pricing_options',
			[
				'label' => esc_html__( 'Pricing Block', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'block_bg_color_1',
            [
                'label' => __('Block BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'block_bg_color',
            [
                'label' => __('Block Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-item' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'active_block_color',
            [
                'label' => __('Active Block BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-item active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_control(
            'price_color',
            [
                'label' => __('Price Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-price .price' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'price_typo',
                'label' => __('Price Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-pricing-price .price',
            ]
        );

        $this->add_control(
			'pm_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        
        $this->add_control(
            'month_color',
            [
                'label' => __('Month Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-price .price span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'month_typo',
                'label' => __('Month Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-pricing-price .price span',
            ]
        );

        $this->add_control(
			'text_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'text_color',
            [
                'label' => __('Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-pricing-item .sl-pricing-price > span' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .sl-pricing-item .sl-pricing-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'text_typo',
                'label' => __('Text Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-pricing-title',
            ]
        );

        $this->add_control(
			'list_options',
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
                    '{{WRAPPER}} .sl-pricing-list ul li' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'list_typo',
                'label' => __('Text Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-pricing-list ul li',
            ]
        );


        $this->add_control(
			'btn_options',
			[
				'label' => esc_html__( 'Button', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'button_style1',
			[
				'label' => esc_html__( 'Button Active', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
         
        $this->add_responsive_control(
            'button_border_radius1',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-one' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography1',
                'label' => __('Typography', 'appilo'),
                'selector' => '
                    {{WRAPPER}} .sl-btn-one',
            ]
        );

        $this->start_controls_tabs( '_tabs_buttons-' );

        $this->start_controls_tab(
            '_tab_button_normal',
            [
                'label' => __( 'Normal', 'appilo' ),
            ]
        );

        $this->add_control(
            'button_color',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-one .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-one' => 'background-color: {{VALUE}};',
                ],
            ]
        );
       
        $this->end_controls_tab();

        $this->start_controls_tab(
            'button_hover',
            [
                'label' => __( 'Hover', 'appilo' ),
            ]
        );

        $this->add_control(
            'button_hover_color',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-one:hover .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_bg_color',
            [
                'label' => __( 'Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-one:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
			'button_style2',
			[
				'label' => esc_html__( 'Button Default', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
         
        $this->add_responsive_control(
            'button_border_radius2',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-two' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography2',
                'label' => __('Typography', 'appilo'),
                'selector' => '
                    {{WRAPPER}} .sl-btn-two',
            ]
        );

        $this->start_controls_tabs( '_tabs_buttons-2' );

        $this->start_controls_tab(
            '_tab_button_normal2',
            [
                'label' => __( 'Normal', 'appilo' ),
            ]
        );

        $this->add_control(
            'button_color2',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-two .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color2',
            [
                'label' => __( 'Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-two' => 'background-color: {{VALUE}};',
                ],
            ]
        );
       
        $this->end_controls_tab();

        $this->start_controls_tab(
            'button_hover2',
            [
                'label' => __( 'Hover', 'appilo' ),
            ]
        );

        $this->add_control(
            'button_hover_color2',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-two:hover .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_bg_color2',
            [
                'label' => __( 'Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-two:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        
        $this->add_control(
			'b_text_option',
			[
				'label' => esc_html__( 'Text', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'b_text_color',
            [
                'label' => __('Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-price-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'b_text_typo',
                'label' => __('Text Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-price-text',
            ]
        );

        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        
        <div class="sl-pricing">
            <div class="container maxw_1300">
                <div class="row mt-none-30">
                    <div class="col-lg-5 mt-30">
                        <div class="sl-pricing-left">
                            <?php if(!empty($settings['count'])): ?>
                            <div class="sl-pricing-count wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                                <h2><span class="odometer" data-count="<?php echo $settings['count']; ?>">00</span> <span class="suffix"><?php echo $settings['suffix']; ?></span></h2>

                                <?php if(!empty($settings['count_title'])): ?>
                                <span><?php echo $settings['count_title']; ?></span>
                                <?php endif; ?>

                                <img src="<?php echo $settings['count_shape']['url']; ?>" alt="img">
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['image']['url'])): ?>
                            <div class="sl-pricing-img mt-60 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['image']['url']; ?>" alt="img">
                            </div>
                            <?php endif; ?>

                        </div>
                        
                    </div>
                    <div class="col-lg-7 mt-30">
                        <div class="sl-sec-title mb-65">
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
                        <div class="sl-pricing-wrap">
                            <ul class="sl-pricing-nav nav nav-tabs wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms" id="myTab" role="tablist">
                                <?php
                                $i = 0;
                                foreach($settings['lists'] as $list): 
                                    $i++;
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if('yes' == $list['active']){ echo esc_attr('active');}?>" id="<?php echo $list['_id']. $i; ?>" data-toggle="tab" href="#<?php echo $list['_id'] ?>" role="tab" aria-controls="home" aria-selected="true"><?php echo esc_html($list['pricing_nav']); ?></a>
                                </li>
                                <?php endforeach; ?>

                            </ul>
                            <div class="sl-pricing-content tab-content" id="myTabContent">

                                <?php
                                $i = 0;
                                foreach($settings['lists'] as $list): 
                                    $i++;
                                ?>
                                <div class="tab-pane fade <?php if('yes' == $list['active']){ echo esc_attr('show active');}?>" id="<?php echo $list['_id'] ?>" role="tabpanel" aria-labelledby="<?php echo $list['_id']. $i; ?>">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="sl-pricing-item <?php if('yes' == $list['active_block1']){ echo esc_attr('active');}?> wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1500ms">
                                                <div class="sl-pricing-head">
                                                    <div class="sl-pricing-price">
                                                        
                                                        <?php if(!empty($list['price'])): ?>
                                                        <h3 class="price"><?php echo esc_html($list['price']); ?> <span><?php echo esc_html($list['month']); ?></span></h3>
                                                        <?php endif; ?>

                                                        <?php if(!empty($list['price_sub_title'])): ?>
                                                        <span><?php echo esc_html($list['price_sub_title']); ?></span>
                                                        <?php endif; ?>
                                                    </div>

                                                    <?php if(!empty($list['price_img']['url'])): ?>
                                                    <div class="sl-pricing-image">
                                                        <img src="<?php echo $list['price_img']['url']; ?>" alt="">
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if(!empty($list['pricing_title'])): ?>
                                                <div class="sl-pricing-title">
                                                    <?php echo $list['pricing_title']; ?>
                                                </div>
                                                <?php endif; ?>
                                                
                                                <?php if(!empty($list['price_list'])): ?>
                                                <div class="sl-pricing-list">
                                                    <?php echo $list['price_list']; ?>
                                                </div>
                                                <?php endif; ?>

                                                <?php if(!empty($list['btn_text'])): ?>
                                                <div class="sl-pricing-btn">
                                                    <a class="sl-btn sl-btn-one" href="<?php echo esc_url($list['btn_link']['url']); ?>">
                                                        <span class="btn-wrap">
                                                            <span><?php echo esc_html($list['btn_text']); ?></span>
                                                            <span><?php echo esc_html($list['btn_text']); ?></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <?php endif; ?>

                                                <?php if(!empty($list['price_text'])): ?>
                                                <div class="sl-price-text">
                                                    <?php echo esc_html($list['price_text']); ?>
                                                </div>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="sl-pricing-item sl-pricing-item2 <?php if('yes' == $list['active_block2']){ echo esc_attr('active');}?> wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1500ms">
                                                <div class="sl-pricing-head">
                                                    <div class="sl-pricing-price">
                                                        
                                                        <?php if(!empty($list['price2'])): ?>
                                                        <h3 class="price"><?php echo esc_html($list['price2']); ?> <span><?php echo esc_html($list['month2']); ?></span></h3>
                                                        <?php endif; ?>

                                                        <?php if(!empty($list['price_sub_title'])): ?>
                                                        <span><?php echo esc_html($list['price_sub_title']); ?></span>
                                                        <?php endif; ?>
                                                    </div>

                                                    <?php if(!empty($list['price_img2']['url'])): ?>
                                                    <div class="sl-pricing-image">
                                                        <img src="<?php echo $list['price_img2']['url']; ?>" alt="">
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if(!empty($list['pricing_title2'])): ?>
                                                <div class="sl-pricing-title">
                                                    <?php echo $list['pricing_title2']; ?>
                                                </div>
                                                <?php endif; ?>
                                                
                                                <?php if(!empty($list['price_list2'])): ?>
                                                <div class="sl-pricing-list">
                                                    <?php echo $list['price_list2']; ?>
                                                </div>
                                                <?php endif; ?>

                                                <?php if(!empty($list['btn_text2'])): ?>
                                                <div class="sl-pricing-btn">
                                                    <a class="sl-btn sl-btn-two" href="<?php echo esc_url($list['btn_link2']['url']); ?>">
                                                        <span class="btn-wrap">
                                                            <span><?php echo esc_html($list['btn_text2']); ?></span>
                                                            <span><?php echo esc_html($list['btn_text2']); ?></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <?php endif; ?>

                                                <?php if(!empty($list['price_text2'])): ?>
                                                <div class="sl-price-text">
                                                    <?php echo esc_html($list['price_text2']); ?>
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
                </div>
            </div>
        </div>

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_pricing());


