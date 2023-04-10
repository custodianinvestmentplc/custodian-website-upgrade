<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_banner extends Widget_Base
{

    public function get_name()
    {
        return 'seo-landing-banner';
    }

    public function get_title()
    {
        return __('Sass Banner', 'appilo');
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
            'banner_image',
            [
                'label' => __( 'Banner Background Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'ss_img',
            [
                'label' => __( 'Banner Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'ss_img2',
            [
                'label' => __( 'Banner Image Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'ss_img3',
            [
                'label' => __( 'Banner Image Three', 'appilo' ),
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
                'default' => __('# No1 Trending Apps On Play Store', 'appilo'),
                'label_block' => true,
            ]

        );
        $this->add_control(
            'title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Save time working with Appilo Zone', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'content', [
                'label' => __('Content', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Increase productivity with a simple to-do app. app for
                managing your personal budgets', 'appilo'),
                'label_block' => true,
            ]
        );

        $this->add_control(
			'button1',
			[
				'label' => esc_html__( 'Button One', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'btn_text1',
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

        $this->add_control(
            'btn_link1',
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
			'button2',
			[
				'label' => esc_html__( 'Button Two', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
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
            'list_section',
            [
                'label' => __('List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $repeater = new Repeater();

        $repeater->add_control(
            'list_item', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __(' No credit card required', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'lists',
            [
                'label' => __('Lists', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_item' => __('No credit card required', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ list_item }}}',
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
            'subtitle_color',
            [
                'label' => __('Subtitle Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-banner-content span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typo',
                'label' => __('SubTitle Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-banner-content span',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-banner-content h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_bottom_border_color',
            [
                'label' => __('Title Bottom Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-banner-content .title > span::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-banner-content h2',
            ]
        );

        $this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-banner-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_typo',
                'label' => __('Content Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .sl-banner-content p',
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
			'button_style1',
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

        $this->end_controls_section();



        $this->start_controls_section(
            'list_style',
            [
                'label' => __('List Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'list_color',
            [
                'label' => __( 'List Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-banner-list li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'list_typography',
                'label' => __('Typography', 'appilo'),
                'selector' => '
                    {{WRAPPER}} .sl-banner-list li',
            ]
        );


        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        
        ?>
        
        <div class="sl-banner">
            <div class="bg_img sl-banner-height d-flex align-items-center" style="background-image: url(<?php echo $settings['banner_image']['url']; ?>)">
                <div class="container maxw_1450">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sl-banner-content">
                                <?php if(!empty($settings['subtitle'])): ?>
                                <span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['subtitle']; ?></span>
                                <?php endif; ?>

                                <?php if(!empty($settings['title'])): ?>
                                <h2 class="title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1500ms"><?php echo $settings['title']; ?></h2>
                                <?php endif; ?>

                                <?php if(!empty($settings['content'])): ?>
                                <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1500ms"><?php echo $settings['content']; ?></p>
                                <?php endif; ?>

                                <div class="sl-banner-btn btns mt-20">

                                    <?php if(!empty($settings['btn_text1'])): ?>
                                    <a class="sl-btn sl-btn-one wow fadeInUp" href="<?php echo esc_url($settings['btn_link1']['url']); ?>" data-wow-delay=".6s" data-wow-duration="1500ms">
                                        <span class="btn-wrap">
                                            <span><?php echo esc_html($settings['btn_text1']); ?></span>
                                            <span><?php echo esc_html($settings['btn_text1']); ?></span>
                                        </span>
                                    </a>
                                    <?php endif; ?>

                                    <?php if(!empty($settings['btn_text2'])): ?>
                                    <a class="sl-btn sl-btn-white sl-btn-two sl-popup-video wow fadeInUp" href="<?php echo esc_url($settings['btn_link2']['url']); ?>" data-wow-delay=".8s" data-wow-duration="1500ms">
                                        <span class="btn-wrap">
                                            <span><?php echo esc_html($settings['btn_text2']); ?></span>
                                            <span><?php echo esc_html($settings['btn_text2']); ?></span>
                                        </span>
                                    </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="sl-banner-list wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                                <?php foreach($settings['lists'] as $list): ?>
                                <li><?php echo esc_html($list['list_item']); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="sl-banner-img-wrap">
                            <?php if(!empty($settings['ss_img']['url'])): ?>
                            <div class="sl-banner-img wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['ss_img']['url']; ?>" alt="img">
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['ss_img2']['url'])): ?>
                            <div class="sl-banner-img2 wow fadeInLeft" data-wow-delay=".6s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['ss_img2']['url']; ?>" alt="img">
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['ss_img3']['url'])): ?>
                            <div class="sl-banner-img3 wow fadeInDown" data-wow-delay=".7s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['ss_img3']['url']; ?>" alt="img">
                            </div>
                            <?php endif; ?>

                        </div>

                        <div class="sl-banner-icon">

                            <?php if(!empty($settings['icon1']['url'])): ?>
                            <div class="sl-banner-icon1 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['icon1']['url']; ?>" alt="img">
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['icon2']['url'])): ?>
                            <div class="sl-banner-icon2">
                                <img src="<?php echo $settings['icon2']['url']; ?>" alt="img">
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['icon3']['url'])): ?>
                            <div class="sl-banner-icon3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['icon3']['url']; ?>" alt="img">
                            </div>
                            <?php endif; ?>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_banner());
