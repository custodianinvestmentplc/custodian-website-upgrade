<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_banner extends Widget_Base {

    public function get_name() {
        return 'app_banner';
    }

    public function get_title() {
        return __( 'App Banner', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-image-rollover';
    }

    protected function register_controls() {

         $this->start_controls_section(
            'about_box',
            [
                'label' => __('Banner List', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'banner_main_bg',
            [
                'label' => __( 'Banner Main Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'banner_title',
            [
                'label' => __( 'Banner Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Your Business Finding SEO Solutions', 'appilo' ),
                'label_block' => true,
            ]
        );        
        $repeater->add_control(
            'banner_text',
            [
                'label' => __( 'Banner Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Welcome To Appilo', 'appilo' ),
            ]
        );        
        $repeater->add_control(
            'happy_text',
            [
                'label' => __( 'Happy clients', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Welcome To Appilo', 'appilo' ),
            ]
        );
        

        $repeater->add_control(
            'scroll_down_txt',
            [
                'label' => __( 'Scroll Down Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        
        $repeater->add_control(
            'slider_form',
            [
                'label' => __( 'Slider Form', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'mobile_mockup',
            [
                'label' => __( 'Mobile Mockup Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'client_bg',
            [
                'label' => __( 'Client Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'dot_img',
            [
                'label' => __( 'Dot Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
     
        $this->add_control(
            'box_list',
            [
                'label' => __( 'Service Box', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'default' => [
                    [
                        'name' => __( 'It Consultancy', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'social_icon',
            [
                'label' => __('Social Icon', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__( 'List Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'icon_link', [
                'label'       => esc_html__( 'Icon Link', 'appilo' ),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'socials',
            [
                'label'       => __( 'Add Icon', 'appilo' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
            ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
            'banner_section_style',
            [
                'label' => __( 'Banner Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'banner_title_style',
			[
				'label' => __( 'Banner Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __( 'Typography', 'appilo' ),
				'selector' => '{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-slide-left h1',
			]
		);
        $this->add_control(
			'title_color',
			[
				'label' => __( 'Title Color', 'appilo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-slide-left h1' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'bottom_space',
			[
				'label' => __( 'Title Bottom Space', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-slide-left h1' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'banner_text_style',
			[
				'label' => __( 'Banner Text Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'text_typography',
				'label' => __( 'Typography', 'appilo' ),
				'selector' => '{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-slide-left p',
			]
		);
        $this->add_control(
			'text_color',
			[
				'label' => __( 'Text Color', 'appilo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-slide-left p' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'text_bottom_space',
			[
				'label' => __( 'Text Bottom Space', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-slide-left p' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'button_style',
			[
				'label' => __( 'Button Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
				'label' => __( 'Typography', 'appilo' ),
				'selector' => '{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-slide-left .aplpg-slider-form button',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'appilo' ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-slide-left .aplpg-slider-form button',
			]
		);
       
        
        $this->end_controls_section();

        $this->start_controls_section(
            'social_style',
            [
                'label' => __( 'Social Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'icon_color',
			[
				'label' => __( 'Icon Color', 'appilo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-social-left .aplpg-social-links a' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'icon_bg_color',
			[
				'label' => __( 'Icon Background Color', 'appilo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-social-left .aplpg-social-links a' => 'background: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => __( 'Border', 'appilo' ),
				'selector' => '{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-social-left .aplpg-social-links a',
			]
		);
        $this->add_control(
			'icon_width',
			[
				'label' => __( 'Icon width', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-social-left .aplpg-social-links a' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'icon_height',
			[
				'label' => __( 'Icon Height', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-social-left .aplpg-social-links a' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'icon_line_height',
			[
				'label' => __( 'Icon Lineheight', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-hero-slider-area .aplpg-hero-single-slide .aplpg-social-left .aplpg-social-links a' => 'line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $box_list = $settings['box_list'];
        $socials = $settings['socials'];
        ?>

        <div class="aplpg-hero-slider-area" id="aplpg_banner">
            <?php foreach($box_list as $list):?>
			<div class="aplpg-hero-single-slide" data-background="<?php echo esc_url($list['banner_main_bg']['url']);?>">
				<div class="aplpg-social-left">
					<div class="aplpg-social-links">
                        <?php foreach($socials as $icon):?>
						    <a href="<?php echo esc_url($icon['icon_link']['url']);?>"><?php \Elementor\Icons_Manager::render_icon( $icon['icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                        <?php endforeach;?>
					</div>
					<div class="aplpg-scroll-btn">
						<a href="#Howworks"><i class="fas fa-arrow-left"></i><?php echo esc_html($list['scroll_down_txt']);?></a>
					</div>
				</div>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7">
							<div class="aplpg-slide-left">
								<div class="aplpg-headline">
									<h1><?php echo esc_html($list['banner_title']);?></h1>
								</div>
								<div class="aplpg-pera-txt">
									<p><?php echo __($list['banner_text']);?></p>
								</div>
								<div class="aplpg-slider-form">
									<?php echo do_shortcode($list['slider_form']);?>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="aplpg-mobile-mockup">
								<img src="<?php echo esc_url($list['mobile_mockup']['url']);?>" alt="<?php echo esc_attr($list['banner_title']);?>">
								<div class="aplpg-clients-count">
									<div class="aplpg-headline">
										<h6><?php echo esc_html($list['happy_text']);?></h6>
									</div>
									<div class="aplpg-clients-thumb">
										<img src="<?php echo esc_url($list['client_bg']['url']);?>" alt="<?php echo esc_attr($list['banner_title']);?>">
									</div>
								</div>
								<span class="aplpg-dot-object">
									<img src="<?php echo esc_url($list['dot_img']['url']);?>" alt="<?php echo esc_attr($list['banner_title']);?>">
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php endforeach;?>
		</div>
    
<?php 

    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_banner );
?>