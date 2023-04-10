<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_app_testimonial extends Widget_Base {

    public function get_name() {
        return 'appilo_app_testimonial';
    }

    public function get_title() {
        return __( 'Appilo App Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-posts-carousel';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_heading',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sec_sub_title',
            [
                'label' => __( 'Sub Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        
        $this->add_control(
            'sec_title',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial_list_sec',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'testimonial_photo', [
                'label' => __( 'Testimonial Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/ev.png',
                ],
            ]
        );
        $repeater->add_control(
            'testimonial_title',
            [
                'label' => __( 'Testimonial Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Abekkach13', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'testimonial_info',
            [
                'label' => __( 'Testimonial Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Great Theme! Nice design, slick looking and the support has been great with any questions I have', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'testimonial_user',
            [
                'label' => __( 'Testimonial User', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'ThemeForest User', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feedback',
            [
                'label' => __( 'Feedback', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '<i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>',
                'options' => [
                    '<i></i></li>'  => __( '0 Star', 'appilo' ),
                    '<i class="fas fa-star"></i>'  => __( '1 Star', 'appilo' ),
                    '<i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>'  => __( '2 Star', 'appilo' ),
                    '<i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>'  => __( '3 Star', 'appilo' ),
                    '<i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>'  => __( '4 Star', 'appilo' ),
                    '<i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>'  => __( '5 Star', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'testimonial_list',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ testimonial_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_heading_content',
            [
                'label' => __( 'Heading Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'sub_title_h',
			[
				'label' => __( 'Sub Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'sub_heading_clr',
            [
                'label' => __( 'Sub Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-title-area .aplpg-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_heading_title',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-title-area .aplpg-subtitle',
            ]
        );
        $this->add_control(
			'hed_title_h',
			[
				'label' => __( 'Heading Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
        $this->add_control(
            'heading_clr',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-testimonial-section .aplpg-headline h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_title',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-testimonial-section .aplpg-headline h3',
            ]
        );
        $this->end_controls_section();

        
        $this->start_controls_section(
            'style_box_content',
            [
                'label' => __( 'Testimonial Box Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'top_box_style',
			[
				'label' => __( 'Main Box Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 't_main_box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 't_main_box_bg',
                'label' => __( 'Testimonial Box BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item',
            ]
        );
        $this->add_responsive_control(
            'ta_main_box_pd',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'ta_main_box_round',
            [
                'label' => __( 'Box Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
			'authore_box_info',
			[
				'label' => __( 'Authore Box Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            't_auth_box_style',
            [
                'label' =>   esc_html__( 'Authore Box BG', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-clients-content' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            't_auth_shape_icon_style',
            [
                'label' =>   esc_html__( 'Authore Box Shape', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-clients-content::before' => 'border-bottom:20px solid {{VALUE}};',
                ],
            ]
        );
       
        $this->add_responsive_control(
            'auth_box_padding',
            [
                'label' => __( 'Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-clients-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        
        $this->start_controls_section(
            'style_content',
            [
                'label' => __( 'Testimonial Content Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'test_title_styling',
			[
				'label' => __( 'Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'testimonial_title_color',
            [
                'label' => __( 'Testimonial Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-single-item .aplpg-headline h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-single-item .aplpg-headline h6',
            ]
        );
        $this->add_control(
			'test_feedback_styling',
			[
				'label' => __( 'Feedback Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'feeb_color',
            [
                'label' => __( 'Feedback Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-clients-feedback .aplpg-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_info_fonts',
                'label' => __( 'Feedback Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-clients-feedback .aplpg-pera-txt p',
            ]
        );
        $this->add_control(
			'test_pos_styling',
			[
				'label' => __( 'Position Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'testimonial_postion_color',
            [
                'label' => __( 'Position Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-clients-content .aplpg-clients-info span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_posi_fonts',
                'label' => __( 'Position Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-clients-content .aplpg-clients-info span',
            ]
        );

        $this->add_control(
			'quote_styling',
			[
				'label' => __( 'Quote Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'quote',
            [
                'label' => __( 'Quote Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-quote i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'quote_box_shadow',
                'label' => __( 'Quote Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-quote',
            ]
        );

        $this->add_control(
			'qut_icon_size',
			[
				'label' => __( 'Quote Icon Size', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-quote i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'quote_width',
			[
				'label' => __( 'Quote Width', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-quote' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'quote_height',
			[
				'label' => __( 'Quote Height', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-quote' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'quote_line_height',
			[
				'label' => __( 'Quote Lineheight', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-testimonial-slider .aplpg-single-item .aplpg-quote' => 'line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $sec_title = $settings['sec_title'];
        $sec_sub_title = $settings['sec_sub_title'];
        
    echo '
            <section class="aplpg-testimonial-section">
                <div class="aplpg-title-area">
                    <span class="aplpg-subtitle">'.esc_html($sec_sub_title).'</span>
                    <div class="aplpg-headline">
                        <h3>'.__($sec_title).'</h3>
                    </div>
                </div>
            <div class="aplpg-testimonial-slider">
                    ';
        if ( $settings['testimonial_list'] ) {
            foreach ($settings['testimonial_list'] as $testimonials) {
                echo '<div class="aplpg-single-item">
                <span class="aplpg-quote"><i class="fas fa-quote-right"></i></span>
                        <div class="aplpg-clients-feedback">
                            <div class="aplpg-star-rating">
                                <span>
                                    
                        '.$testimonials['feedback'].'
                    
                                </span> 
                            </div>
                            <div class="aplpg-pera-txt">
                                <p>'.$testimonials['testimonial_info'].'</p>
                            </div>
                        </div>
                        <div class="aplpg-clients-content">
                            <div class="aplpg-thumb-container">
                                <img src="'.$testimonials['testimonial_photo']['url'].'" alt="">
                            </div>
                            <div class="aplpg-clients-info aplpg-headline">
                                <h6>'.$testimonials['testimonial_title'].'</h6>
                                <span>'.$testimonials['testimonial_user'].'</span>
                            </div>
                            </div>
                        </div>';
            }
        }
       echo' 
                </div>

                    </div>
        </section>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_app_testimonial );
?>