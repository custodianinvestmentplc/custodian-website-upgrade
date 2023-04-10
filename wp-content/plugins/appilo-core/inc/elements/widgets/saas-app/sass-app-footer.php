<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_app_footer extends Widget_Base
{

    public function get_name()
    {
        return 'sass_app_footer';
    }

    public function get_title()
    {
        return __('Saas App Footer', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-post';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'about_widget',
            [
                'label' => __('About', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'widget_1',
            [
                'label' => esc_html__( 'Show Widget 1', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'a_widget_title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('About Us', 'appilo'),
                'label_block' => true,
            ]

        );

        $this->add_control(
            'about_content', [
                'label' => __('Content', 'appilo'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __('The world’s first and largest digital marketplace for crypto collectibles and non-fungible tokens (NFTs). Buy, sell, and discover exclusive digital items.', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'info_location', [
                'label' => __('Location', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('254 Lillian Blvd, Holbrook', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info_phone', [
                'label' => __('Phone', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('1-800-654-3210', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'marketplace_widget',
            [
                'label' => __('Marketplace', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'widget_2',
            [
                'label' => esc_html__( 'Show Widget 2', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'm_widget_title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Marketplace', 'appilo'),
                'label_block' => true,
            ]

        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'm_text',
			[
				'label' => esc_html__( 'Text', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Collectibles', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your text here', 'plugin-name' ),
                'label_block' => true,
			]
		);

		$repeater->add_control(
			'm_link',
			[
				'label' => esc_html__( 'Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'm_items',
			[
				'label' => esc_html__( 'Marketplace', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'm_text' => esc_html__( 'Collectibles', 'plugin-name' ),
						'm_link' => esc_html__( '#', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ m_text }}}',
			]
		);
        
        
        $this->end_controls_section();

        $this->start_controls_section(
            'my_account_widget',
            [
                'label' => __('My Account', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'widget_3',
            [
                'label' => esc_html__( 'Show Widget 3', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'ac_widget_title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('My Account', 'appilo'),
                'label_block' => true,
            ]

        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'a_text',
			[
				'label' => esc_html__( 'Text', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Author', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your text here', 'plugin-name' ),
                'label_block' => true,
			]
		);

		$repeater->add_control(
			'a_link',
			[
				'label' => esc_html__( 'Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => false,
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'a_items',
			[
				'label' => esc_html__( 'My Account', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'm_text' => esc_html__( 'Author', 'plugin-name' ),
						'm_link' => esc_html__( '#', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ a_text }}}',
			]
		);
        
        $this->end_controls_section();

        $this->start_controls_section(
            'recent_post',
            [
                'label' => __('Recent Post', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'widget_4',
            [
                'label' => esc_html__( 'Show Widget 4', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'r_widget_title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Recent Post', 'appilo'),
                'label_block' => true,
            ]

        );
        
        $this->add_control(
			'post_count',
			[
				'label' => esc_html__( 'Post Count', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10,
				'step' => 1,
				'default' => 3,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'footer_bottom_section',
            [
                'label' => __('Fotoer Bottom', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'footer_bottom',
            [
                'label' => esc_html__( 'Show Footer Botttom', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
			'logo',
			[
				'label' => esc_html__( 'Logo', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);

        $this->add_control(
			'copyright_text',
			[
				'label' => esc_html__( 'Copyright Text', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Copyright © 2022 Theme. All Rights Reserved.', 'plugin-name' ),
				'placeholder' => esc_html__( 'Type your copyright here', 'plugin-name' ),
			]
		);

        $repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
			'social_icon',
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
			'social_link',
			[
				'label' => esc_html__( 'Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'socials',
			[
				'label' => esc_html__( 'Scoial', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);


        $this->end_controls_section();


        $this->start_controls_section(
            'shape_section',
            [
                'label' => __('Shape', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'shape1',
			[
				'label' => esc_html__( 'Shape One', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'shape2',
			[
				'label' => esc_html__( 'Shape Two', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'shape3',
			[
				'label' => esc_html__( 'Shape Three', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'shape4',
			[
				'label' => esc_html__( 'Shape Four', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'shape5',
			[
				'label' => esc_html__( 'Shape Five', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
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
            'container_max_width',
            [
                'label' => esc_html__( 'Container Width', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
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
                    'size' => 1450,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1450' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_control(
            'footer_bg_color',
            [
                'label' => __('Footer BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-footer' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__widget > h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .footer__widget > h3',
            ]
        );

        $this->add_control(
			'content_option',
			[
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__widget .content' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_typo',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .footer__widget .content',
            ]
        );

        $this->add_control(
			'info_option',
			[
				'label' => esc_html__( 'Info', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'i_text_color',
            [
                'label' => __('Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__widget-info li' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'i_text_icon_bg_color',
            [
                'label' => __('Text Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__widget-info li i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'i_text_icon_color',
            [
                'label' => __('Text Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__widget-info li i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'i_text_typo',
                'label' => __('Text Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .footer__widget-info li',
            ]
        );


        $this->add_control(
			'link_option',
			[
				'label' => esc_html__( 'Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'link_color',
            [
                'label' => __('link Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__links li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'link_color_hover',
            [
                'label' => __('link Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__links li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'link_typo',
                'label' => __('Text Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .footer__links li a',
            ]
        );

        $this->add_control(
			'post_options',
			[
				'label' => esc_html__( 'Post', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'post_date_color',
            [
                'label' => __('Post Date Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__post-item .post-content span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'post_date_typo',
                'label' => __('Post Date Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .footer__post-item .post-content span',
            ]
        );

        $this->add_control(
			'p_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'post_title_color',
            [
                'label' => __('Post Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__post-item .post-content h3 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_title_hover_color',
            [
                'label' => __('Post Title Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__post-item .post-content h3 a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'post_title_typo',
                'label' => __('Post Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .footer__post-item .post-content h3',
            ]
        );

        $this->add_control(
			'footer_bottom_options',
			[
				'label' => esc_html__( 'Footer Bottom', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'footer_bottom_bg_color',
            [
                'label' => __('Footer Bottom BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__bottom-wrap' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'copyright_options',
			[
				'label' => esc_html__( 'Copyright', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'copyright_text_color',
            [
                'label' => __('Copyright Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__copyright p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'copyright_link_color',
            [
                'label' => __('Copyright Link Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__copyright p a' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'copyright_text_typo',
                'label' => __('Copyright Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .footer__copyright p',
            ]
        );
        
        $this->add_control(
			'social_options',
			[
				'label' => esc_html__( 'Social', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'social_icon_color',
            [
                'label' => __('Scoail Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__social li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'social_icon_hover_color',
            [
                'label' => __('Scoail Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__social li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'social_icon_bg_color',
            [
                'label' => __('Scoail Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__social li a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'social_icon_bg_hover_color',
            [
                'label' => __('Scoail Icon BG Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer__social li a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        
        <!-- footer start -->
        <footer class="sl-footer pos-rel pt-100 gray-bg-3">
            <div class="container container-1450">
                <div class="row pb-100 mt-none-30">

                    <?php if ( 'yes' === $settings['widget_1'] ) : ?>
                    <div class="col-lg-4 col-md-6 footer__widget-col mt-30">
                        <div class="footer__widget">
                            <?php if(!empty($settings['a_widget_title'])): ?>
                            <h3><?php echo esc_html($settings['a_widget_title']); ?></h3>
                            <?php endif; ?>

                            <?php if(!empty($settings['about_content'])): ?>
                            <div class="content">
                                <?php echo $settings['about_content']; ?>
                            </div>
                            <?php endif; ?>

                            <ul class="footer__widget-info list-unstyled mt-35">
                                <?php if(!empty($settings['info_location'])): ?>
                                <li><i class="far fa-map-marker-alt"></i><?php echo esc_html($settings['info_location']); ?></li>
                                <?php endif; ?>

                                <?php if(!empty($settings['info_phone'])): ?>
                                <li><i class="far fa-phone"></i><?php echo esc_html($settings['info_phone']); ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ( 'yes' === $settings['widget_2'] ) : ?>
                    <div class="col-lg-2 col-md-6 footer__widget-col mt-30">
                        <div class="footer__widget">

                            <?php if(!empty($settings['m_widget_title'])): ?>
                            <h3><?php echo esc_html($settings['m_widget_title']); ?></h3>
                            <?php endif; ?>
                            
                            <ul class="footer__links list-unstyled">
                                <?php foreach($settings['m_items'] as $m_item): ?>
                                <li><a href="<?php echo esc_url($m_item['m_link']['url']); ?>"><?php echo esc_html($m_item['m_text']); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ( 'yes' === $settings['widget_3'] ) : ?>
                    <div class="col-lg-2 col-md-6 footer__widget-col mt-30">
                        <div class="footer__widget">
                            <?php if(!empty($settings['ac_widget_title'])): ?>
                            <h3><?php echo esc_html($settings['ac_widget_title']); ?></h3>
                            <?php endif; ?>
                            
                            <ul class="footer__links list-unstyled">
                                <?php foreach($settings['a_items'] as $m_item): ?>
                                <li><a href="<?php echo esc_url($m_item['a_link']); ?>"><?php echo esc_html($m_item['a_text']); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ( 'yes' === $settings['widget_4'] ) : ?>
                    <div class="col-lg-4 col-md-6 footer__widget-col mt-30">
                        <div class="footer__widget">

                            <?php if(!empty($settings['r_widget_title'])): ?>
                            <h3><?php echo esc_html($settings['r_widget_title']); ?></h3>
                            <?php endif; ?>


                            <div class="footer__post">

                                <?php
                                $post_count = $settings['post_count'];
                                
                                 $recent_post = new \WP_Query( array(
                                        'post_type'           => 'post',
                                        'posts_per_page'      => $post_count,
                                        'ignore_sticky_posts' => true
                                    ) );

                                while ( $recent_post->have_posts() ) : $recent_post->the_post();
                                ?>
                                
                                <div class="footer__post-item">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="post-thumb">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"><img src="<?php the_post_thumbnail_url( 'thumbnail' ) ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>"></a>
                                    </div>
                                    <?php endif; ?>

                                    <div class="post-content">
                                        <span><?php echo esc_html( get_the_date() ); ?></span>
                                        <h3 class="border-effect-2"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a></h3>
                                    </div>
                                </div>

                                <?php endwhile; wp_reset_postdata();?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ( 'yes' === $settings['footer_bottom'] ) : ?>
            <div class="footer__bottom-wrap">
                <div class="container maxw_1300">
                    <div class="footer__bottom">
                        <?php if(!empty($settings['logo'])): ?>
                        <div class="footer__logo mt-15">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $settings['logo']['url']; ?>" alt="logo"></a>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($settings['copyright_text'])): ?>
                        <div class="footer__copyright mt-15">
                            <p><?php echo $settings['copyright_text']; ?></p>
                        </div>
                        <?php endif; ?>

                        <ul class="footer__social list-unstyled mt-15">
                            <?php foreach($settings['socials'] as $social): ?>
                            <li><a href="<?php echo esc_url($social['social_link']['url']); ?>">
                            <?php Icons_Manager::render_icon( $social['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </a></li>
                            <?php endforeach; ?>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <span class="footer__shape"></span>
            <div class="footer__shape-icon">
                
                <?php if(!empty($settings['shape1']['url'])): ?>
                <img class="shape1" src="<?php echo $settings['shape1']['url']; ?>" alt="shape">
                <?php endif; ?>
                
                <?php if(!empty($settings['shape2']['url'])): ?>
                <img class="shape2" src="<?php echo $settings['shape2']['url']; ?>" alt="shape">
                <?php endif; ?>
                
                <?php if(!empty($settings['shape3']['url'])): ?>
                <img class="shape3" src="<?php echo $settings['shape3']['url']; ?>" alt="shape">
                <?php endif; ?>
                
                <?php if(!empty($settings['shape4']['url'])): ?>
                <img class="shape4" src="<?php echo $settings['shape4']['url']; ?>" alt="shape">
                <?php endif; ?>
                
                <?php if(!empty($settings['shape5']['url'])): ?>
                <img class="shape5" src="<?php echo $settings['shape5']['url']; ?>" alt="shape">
                <?php endif; ?>
                
            </div>
        </footer>
        <!-- footer end -->

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_app_footer());
