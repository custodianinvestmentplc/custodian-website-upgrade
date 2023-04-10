<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_info extends Widget_Base
{

    public function get_name()
    {
        return 'seo-landing-info';
    }

    public function get_title()
    {
        return __('Sass Info', 'appilo');
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
        $this->add_control(
			'icon1',
			[
				'label' => esc_html__( 'Icon One', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'icon2',
			[
				'label' => esc_html__( 'Icon Two', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'icon3',
			[
				'label' => esc_html__( 'Icon Three', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'icon4',
			[
				'label' => esc_html__( 'Icon Four', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
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
            'list_section',
            [
                'label' => __('List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
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
						'list_item' => esc_html__( 'Who\'s using key features & See who\'s slipping away', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ list_item }}}',
			]
		);
        
        $this->end_controls_section();

        $this->start_controls_section(
            'review_section',
            [
                'label' => __('Review', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        
        $this->add_control(
            'ru_number', [
                'label' => __('User', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('2M', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'ru_suffix', [
                'label' => __('User Suffix', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('+', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'ru_user', [
                'label' => __('User Text', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Monthly user', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'review_text', [
                'label' => __('Review Text', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('5.0 Average', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->add_control(
			'rating',
			[
				'label' => esc_html__( 'Rating', 'appilo' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 5,
				'step' => 1,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
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
            'list_style',
            [
                'label' => __('List', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
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
                    '{{WRAPPER}} .sl-counter-list li:before' => 'color: {{VALUE}}',
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

        $this->end_controls_section();

        $this->start_controls_section(
            'review_style',
            [
                'label' => __('Review', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'r_bg_color',
            [
                'label' => __('User BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-review-user' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'r_border_color',
            [
                'label' => __('User Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-review-user' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'user_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


        $this->add_control(
            'r_number_color',
            [
                'label' => __('Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-review-user h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __('Number Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-review-user h3',
            ]
        );

        $this->add_control(
			'u_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'r_user_color',
            [
                'label' => __('User Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-review-user > span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'r_user_typo',
                'label' => __('User Text Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-review-user > span',
            ]
        );
        $this->add_control(
			'r_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'rating_bg_color',
            [
                'label' => __('Rating BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-review-rating' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'rating_border_color',
            [
                'label' => __('Rating Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-review-rating' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'r_text_color',
            [
                'label' => __('Rating Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-review-text' => 'color: {{VALUE}}',
                ],
            ]
        );
       
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'r_text_typo',
                'label' => __('Rating Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-review-text',
            ]
        );

        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>

        <div class="sl-info">
            <div class="container maxw_1300">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="sl-info-image wow fadeInleft" data-wow-delay="0s" data-wow-duration="1500ms">
                            <?php if(!empty($settings['image']['url'])): ?>
                            <img src="<?php echo $settings['image']['url']; ?>" alt="image">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sl-info-content pl-70">
                            <div class="sl-sec-title mb-35">
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
                            
                            <div class="sl-review-wrap ul_li wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1500ms">
                                <div class="sl-review-user ul_li mt-15">
                                    <?php if(!empty($settings['ru_number'])): ?>
                                    <h3><?php echo esc_html($settings['ru_number']); ?> <span><?php echo esc_html($settings['ru_suffix']); ?></span></h3>
                                    <?php endif; ?>

                                    <?php if(!empty($settings['ru_user'])): ?>
                                    <span><?php echo $settings['ru_user']; ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="sl-review ul_li mt-15">
                                    <?php if(!empty($settings['review_text'])): ?>
                                    <span class="sl-review-text"><?php echo esc_html($settings['review_text']); ?></span>
                                    <?php endif; ?>

                                    <div class="sl-review-rating">
                                        <?php for( $i = 0; $i < $settings['rating']; $i++): ?>
                                            <span class="fa fa-star"></span>
                                        <?php endfor;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sl-info-icons">
                <?php if(!empty($settings['icon1'])): ?>
                <img class="icon1" src="<?php echo $settings['icon1']['url']; ?>" alt="image">
                <?php endif; ?>

                <?php if(!empty($settings['icon2'])): ?>
                <img class="icon2" src="<?php echo $settings['icon2']['url']; ?>" alt="image">
                <?php endif; ?>

                <?php if(!empty($settings['icon3'])): ?>
                <img class="icon3" src="<?php echo $settings['icon3']['url']; ?>" alt="image">
                <?php endif; ?>

                <?php if(!empty($settings['icon4'])): ?>
                <img class="icon4" src="<?php echo $settings['icon4']['url']; ?>" alt="image">
                <?php endif; ?>
            </div>
        </div>
        

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_info());
