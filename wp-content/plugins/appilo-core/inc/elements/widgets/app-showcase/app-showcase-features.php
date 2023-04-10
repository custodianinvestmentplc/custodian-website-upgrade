<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_features extends Widget_Base {

    public function get_name() {
        return 'app-showcase-features';
    }

    public function get_title() {
        return __( 'App Showcase Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'feature_eight', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-codepen',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'feature_custom_icon', [
                'label' => __( 'Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'feature_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Branding' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay', [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. ' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_link', [
                'label' => __( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'features_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_icon' => __( 'fab fa-codepen', 'appilo' ),
                        'feature_title' => __( 'Branding', 'appilo' ),
                        'feature_info' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. ', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
	    $this->add_control(
		    'section_overflow',
		    [
			    'label' => __( 'Section Overflow', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::SWITCHER,
			    'label_on' => __( 'Show', 'appilo' ),
			    'label_off' => __( 'Hide', 'appilo' ),
			    'return_value' => 'visible',
			    'default' => 'visible',
		    ]
	    );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .feature-eight-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'section_bg', [
                'label' => __( 'BG Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/f-shape1.png',
                ],
            ]
        );
	    $this->add_control(
		    'bg_image_align',
		    [
			    'label' => __( 'Bg Image Align', 'appilo' ),
			    'type' => Controls_Manager::SLIDER,
			    'size_units' => [ 'px' ],
			    'range' => [
				    'px' => [
					    'min' => 0,
					    'max' => 1000,
					    'step' => 1,
				    ],

			    ],
			    'default' => [
				    'unit' => 'px',
				    'size' => 150,
			    ],
			    'selectors' => [
				    '{{WRAPPER}} .feature-eight-section .ei-feature-shape' => 'top: {{SIZE}}{{UNIT}};',
			    ],
		    ]
	    );
        $this->add_control(
            'feature_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-eight-section .eight-feature-box .feature-text8 h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box .feature-text8 h3',
            ]
        );
        $this->add_control(
            'feature_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-eight-section .eight-feature-box .feature-text8 p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box .feature-text8 p',
            ]
        );
		$this->add_control(
			'--icon-gradient-color-heading--',
			[
				'label' => esc_html__( 'Icon Color', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_icon_color232',
                'label' => __( 'Feature Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box .feature-icon8 i',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_icon_bg',
                'label' => __( 'Feature Icon Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box .feature-icon8 .ei-icon-bg',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_icon_hover_bg_1',
                'label' => __( 'Feature Icon Background Hover', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box .feature-icon8:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_icon_hover_bg_2',
                'label' => __( 'Feature Icon Background Hover 2', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box .feature-icon8:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_box_before',
                'label' => __( 'Feature Box Before', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} ',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_box_bg',
                'label' => __( 'Feature Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_hover_box_bg',
                'label' => __( 'Service Hover Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box:hover',
            ]
        );
        $this->add_control(
            'feature_btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-eight-section .eight-feature-box .ei-feature-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_btn_bg',
                'label' => __( 'Feature Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box .ei-feature-more',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_hover_shadow',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-eight-section .eight-feature-box:hover',
            ]
        );
        $this->add_responsive_control(
            'feature_box_padding',
            [
                'label' => __( 'Feature Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .feature-eight-section .eight-feature-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'feature_box_inner_padding',
            [
                'label' => __( 'Feature Box Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .feature-eight-section .eight-feature-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo'<!-- Start of Featured  section
    ============================================= -->
<section  class="feature-eight-section position-relative" style="overflow: '.$settings['section_overflow'].';">
    <div class="container">
        <div class="eight-feature-content">
            <div class="row justify-content-md-center">';
        if ( $settings['features_list'] ) {
            foreach ($settings['features_list'] as $features) {
                echo ' <div class="col-lg-3 col-md-6  wow fadeFromUp" data-wow-delay="' . $features['animate_delay'] . '" data-wow-duration="1500ms">
                    <div class="eight-feature-box text-center position-relative dynamic_feature' . $features['_id'] . '">
                        <div class="feature-icon8 position-relative">';
                        if (!empty($features['feature_custom_icon']['url'])) {
                            echo '<img src="' . $features['feature_custom_icon']['url'] . '" class="m-auto" alt>';
                        }

                                \Elementor\Icons_Manager::render_icon($features['feature_icon'], ['aria-hidden' => 'true']);
                            echo'<span class="ei-icon-bg"></span>
                        </div>
                        <div class="feature-text8 appeight-headline pera-content">
                            <h3>' . $features['feature_title'] . '</h3>
                            <p>' . $features['feature_info'] . '</p>
                        </div>
                        <div class="ei-feature-more">
                            <a href="' . $features['feature_link']['url'] . '"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>';
                }
            }
            echo'</div>
        </div>
    </div>
    <div class="ei-feature-shape"><img src="' . $settings['section_bg']['url'] . '" alt></div>
</section>
<!-- End of Featured section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_features );
?>