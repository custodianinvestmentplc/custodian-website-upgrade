<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_slider extends Widget_Base
{

    public function get_name()
    {
        return 'bx-slider';
    }

    public function get_title()
    {
        return __('Business Expert Slider', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'slider',
            [
                'label' => __('Slider', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'img',
            [
                'label' => __( 'Slider Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'shape-1',
            [
                'label' => __( 'Shape 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'shape-2',
            [
                'label' => __( 'Shape 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'heading',
            [
                'label' => __('Heading', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('The largets Business Expert Company!', 'appilo'),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. <br>Risus commodo viverra maecenas accumsan lacus vel facilisis', 'appilo'),
            ]
        );
        $repeater->add_control(
            'btn_title',
            [
                'label' => __('Button Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Our Service', 'appilo'),
            ]
        );
        $repeater->add_control(
            'btn_url', [
                'label' => __('Button Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'slider_list',
            [
                'label' => __('Slider List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'The largets Business Expert Company!',
                    ],[
                        'title' => 'The largets Business Expert Company!',
                    ],[
                        'title' => 'The largets Business Expert Company!',
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->add_control(
            'instagram_url', [
                'label' => __('Instagram Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'twitter_url', [
                'label' => __('Twitter Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'facebook_url', [
                'label' => __('Facebook Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-left .apbc-headline h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-left .apbc-headline h1',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-left .apbc-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-left .apbc-pera-txt p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_style',
            [
                'label' => __( 'Button Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'icon_normal',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'btn-color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .apbc-primary-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon-bg',
            [
                'label' => __('Button Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .apbc-primary-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'icon_hover',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );$this->add_control(
        'icon-hover-color',
        [
            'label' => __('Hover Color', 'appilo'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-left .apbc-primary-btn a:hover' => 'color: {{VALUE}}',
            ],
        ]
    );
        $this->add_control(
            'icon-hover-bg',
            [
                'label' => __('Hover Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-left .apbc-primary-btn a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btnBorderColor',
            [
                'label' => __('Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-left .apbc-primary-btn a:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'btn-style',
            [
                'label' => __( 'Social Text Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcndfet');
        $this->start_controls_tab(
            'tp12',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'social_text_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-social ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'social_typo',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-social ul li a',
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'tp22',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );
        $this->add_control(
            'socialTextHover',
            [
                'label' => __('Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .apbc-single-item .apbc-slide-social ul li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'slider_navigate_btn',
            [
                'label' => __( 'Slide Button', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'inactive_color',
            [
                'label' => __('Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .apbc-hero-slider .slick-dots li.slick-active' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'active_color',
            [
                'label' => __('inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-hero-slider .slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<!-- Hero Slider Area -->
		<div class="apbc-hero-slider" id="apbc_banner">';

        if ($settings['slider_list']) {
            foreach ($settings['slider_list'] as $slider) {

                echo '<div class="apbc-single-item" data-background="'. $slider['img']['url'] .'">
				<span class="apbc-slide-shape-1">
				'. get_that_image($slider['shape-1']) .'
				</span>
				<span class="apbc-slide-shape-2">
				'. get_that_image($slider['shape-2']) .'
				</span>
				<div class="apbc-slide-social">
					<ul>
						<li><a ' . get_that_link($settings['instagram_url']) . '>Instagram</a></li>
						<li><a ' . get_that_link($settings['twitter_url']) . '>Twitter</a></li>
						<li><a ' . get_that_link($settings['facebook_url']) . '>Facebook</a></li>
					</ul>					
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="apbc-slide-left">
								<div class="apbc-headline">
									<h1>' . $slider['heading'] . '</h1>
								</div>
								<div class="apbc-pera-txt">
									<p>' . $slider['info'] . '</p>
								</div>
								<div class="apbc-primary-btn">
									<a ' . get_that_link($slider['btn_url']) . '>' . $slider['btn_title'] . ' <span><i class="fas fa-arrow-right"></i></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>';
            }
        }
        echo '</div>
		<!-- Hero Slider End -->';



    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new bx_slider());