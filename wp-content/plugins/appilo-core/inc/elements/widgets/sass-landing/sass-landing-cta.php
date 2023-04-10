<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_cta extends Widget_Base
{

    public function get_name()
    {
        return 'seo-landing-cta';
    }

    public function get_title()
    {
        return __('Sass CTA', 'appilo');
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

        $this->end_controls_section();


        $this->start_controls_section(
            'button_section',
            [
                'label' => __('Button', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'btn_1_heading',
			[
				'label' => esc_html__( 'Button One', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'active',
			[
				'label' => esc_html__( 'Video', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'your-plugin' ),
				'label_off' => esc_html__( 'Hide', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);



        $this->add_control(
            'btn_text',
            [
                'label'       => __( 'Text', 'appilo' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Watch Video', 'appilo' ),
                'placeholder' => __( 'Type button text here', 'appilo' ),
                'label_block' => true,
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $this->add_control(
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
        
        $this->add_control(
			'btn_2',
			[
				'label' => esc_html__( 'Button Two', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        
        $this->add_control(
            'btn_text2',
            [
                'label'       => __( 'Text', 'appilo' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Download Now', 'appilo' ),
                'placeholder' => __( 'Type button text here', 'appilo' ),
                'label_block' => true,
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $this->add_control(
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

        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
            [
                'label' => __('Content Style', 'appilo'),
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
        $this->end_controls_section();

        $this->start_controls_section(
            'button_style',
            [
                'label' => __('Button Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        
		$this->add_control(
			'btn_1',
			[
				'label' => esc_html__( 'Button One', 'plugin-name' ),
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
				'label' => esc_html__( 'Button Two', 'plugin-name' ),
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
            'button_border_color',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-two' => 'border-color: {{VALUE}};',
                ],
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
            'button_border_color_hover',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .sl-btn-two' => 'border-color: {{VALUE}};',
                ],
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
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        
        <div class="sl-cta ul_li wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
            <div class="sl-sec-title mt-20">
                <?php if(!empty($settings['subtitle'])): ?>
                <h5 class="subtitle"><?php echo $settings['subtitle']; ?></h5>
                <?php endif; ?>

                <?php if(!empty($settings['title'])): ?>
                <h2 class="title"><?php echo $settings['title']; ?></h2>
                <?php endif; ?>
            </div>
            <div class="sl-cta-btn btns">

                <?php if(!empty($settings['btn_text'])): ?>
                <a class="sl-btn sl-btn-one <?php if('yes' == $settings['active']){ echo esc_attr('sl-popup-video');} ?>" href="<?php echo esc_url($settings['btn_link']['url']); ?>">
                    <span class="btn-wrap">
                        <span><?php echo esc_html($settings['btn_text']); ?></span>
                        <span><?php echo esc_html($settings['btn_text']); ?></span>
                    </span>
                </a>
                <?php endif; ?>

                <?php if(!empty($settings['btn_text2'])): ?>
                <a class="sl-btn sl-btn-two" href="<?php echo esc_url($settings['btn_link2']['url']); ?>">
                    <span class="btn-wrap">
                        <span><?php echo esc_html($settings['btn_text2']); ?></span>
                        <span><?php echo esc_html($settings['btn_text2']); ?></span>
                    </span>
                </a>
                <?php endif; ?>

            </div>
        </div>

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_cta());
