<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class how_it_works_button extends Widget_Base {

   public function get_name() {
      return 'how_it_works_button';
   }

   public function get_title() {
      return __( 'Applio Landing CTA', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() {
        return ' eicon-call-to-action';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'app_lan_ct_section',
            [
                'label' => __( 'Applio Landing CTA Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'apps_img',
			[
				'label' => __( 'Choose BG Image', 'appilo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Appilo Apps', 'appilo' ),
            ]
        );
        $this->add_control(
            'title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The New Way To Change Your Lifestyle!' , 'appilo' ),
            ]
        );
        $this->add_control(
            'app_icon',
            [
                'label' => esc_html__( 'App Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );  
        $this->add_control(
            'app_txt_1', [
                'label' => __( 'Appale Stor Text 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'app_txt_2', [
                'label' => __( 'Appale Stor Text 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
			'app_url',
			[
				'label' => __( 'App Download Link', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://www.apple.com/app-store/', 'appilo' ),
			]
		);
        $this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'play_icon',
            [
                'label' => esc_html__( 'Playstore Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );  
        $this->add_control(
            'store_txt_1', [
                'label' => __( 'Play Stor Text 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'store_txt_2', [
                'label' => __( 'Play Stor Text 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        
        $this->add_control(
			'store_url',
			[
				'label' => __( 'App Download Link', 'appilo' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://play.google.com/store/apps', 'appilo' ),
			]
		);
        
        $this->end_controls_section();

        $this->start_controls_section(
            'cta_text_style',
            [
                'label' => esc_html__( 'Text Style', 'appilo' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
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
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-title-area .aplpg-subtitle',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );
        
        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-title-area .aplpg-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
			'title_stl',
			[
				'label' => __( 'Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-title-area h3',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-title-area h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'store_button_style',
            [
                'label' => esc_html__( 'Playstore Button Style', 'appilo' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'btn_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn span:first-child',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'btn_txt_2_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn span',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );

        $this->start_controls_tabs( '_slide_button_1' );
        $this->start_controls_tab(
            '_appilo_btn__normal',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_tex_app_1_color',
            [
                'label'     => esc_html__( 'Text 1 Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn span:first-child' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_tex_app_2_color',
            [
                'label'     => esc_html__( 'Text 2 Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'btn_bg_color',
                'label'    => __( 'Background', 'appilo' ),
                'types'    => ['classic', 'gradient'],
                'exclude'  => ['image'],
                'selector' => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn',
            ]
        );
        $this->add_responsive_control(
            'btn_border_radious',
            [
                'label'      => esc_html__( 'Border Radius', 'appilo' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn',
            ]
        );
        $this->add_responsive_control(
            'btn_padding',
            [
                'label'      => esc_html__( 'Padding', 'appilo' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            '_appilo_btn_hover',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_tex_app_1_hover_color',
            [
                'label'     => esc_html__( 'Text 1 Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn:hover span:first-child' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_tex_app_2_hover_color',
            [
                'label'     => esc_html__( 'Text 2 Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn:hover span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'btn_hover_bg_color',
                'label'    => __( 'Background', 'appilo' ),
                'types'    => ['classic', 'gradient'],
                'exclude'  => ['image'],
                'selector' => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn:hover',
            ]
        );
        $this->add_responsive_control(
            'btn_hover_border_radious',
            [
                'label'      => esc_html__( 'Border Radius', 'appilo' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_hover_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn:hover',
            ]
        );
        $this->add_responsive_control(
            'btn_hover_padding',
            [
                'label'      => esc_html__( 'Border Radius', 'appilo' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-google-btn:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();       
        $this->end_controls_section();

        $this->start_controls_section(
            'app_button_style',
            [
                'label' => esc_html__( 'App Store Button Style', 'appilo' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'app_btn_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn span:first-child',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'app_btn_txt_2_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn span',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );

        $this->start_controls_tabs( '_app_slide_button_1' );
        $this->start_controls_tab(
            '_app_appilo_btn__normal',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'app_btn_tex_app_1_color',
            [
                'label'     => esc_html__( 'Text 1 Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn span:first-child' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'app_btn_tex_app_2_color',
            [
                'label'     => esc_html__( 'Text 2 Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'app_btn_bg_color',
                'label'    => __( 'Background', 'appilo' ),
                'types'    => ['classic', 'gradient'],
                'exclude'  => ['image'],
                'selector' => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn',
            ]
        );
        $this->add_responsive_control(
            'app_btn_border_radious',
            [
                'label'      => esc_html__( 'Border Radius', 'appilo' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'app_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn',
            ]
        );
        $this->add_responsive_control(
            'app_btn_padding',
            [
                'label'      => esc_html__( 'Padding', 'appilo' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            '_app_appilo_btn_hover',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'app_btn_tex_app_1_hover_color',
            [
                'label'     => esc_html__( 'Text 1 Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn:hover span:first-child' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'app_btn_tex_app_2_hover_color',
            [
                'label'     => esc_html__( 'Text 2 Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn:hover span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'app_btn_hover_bg_color',
                'label'    => __( 'Background', 'appilo' ),
                'types'    => ['classic', 'gradient'],
                'exclude'  => ['image'],
                'selector' => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn:hover',
            ]
        );
        $this->add_responsive_control(
            'app_btn_hover_border_radious',
            [
                'label'      => esc_html__( 'Border Radius', 'appilo' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'app_btn_hover_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn:hover',
            ]
        );
        $this->add_responsive_control(
            'app_btn_hover_padding',
            [
                'label'      => esc_html__( 'Border Radius', 'appilo' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-apps-section .aplpg-apps-content .aplpg-apple-btn:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();       
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings  = $this->get_settings_for_display();
        $apps_img     = $settings['apps_img']['url'];
        $sub_title = $settings['sub_title'];
        $title     = $settings['title'];
        $app_txt_1     = $settings['app_txt_1'];
        $app_txt_2     = $settings['app_txt_2'];
        $app_url     = $settings['app_url'];
        $store_txt_1   = $settings['store_txt_1'];
        $store_txt_2   = $settings['store_txt_2'];
        $store_url     = $settings['store_url'];

        $target_app   = $app_url['is_external'] ? ' target="_blank"' : '';
        $nofollow_app = $app_url['nofollow'] ? ' rel="nofollow"' : '';
        
        $target_play   = $store_url['is_external'] ? ' target="_blank"' : '';
        $nofollow_play = $store_url['nofollow'] ? ' rel="nofollow"' : '';
        
        ?>
            <div class="aplpg-apps-section">
				<div class="aplpg-apps-content" data-background="<?php echo esc_url($apps_img);?>">
					<div class="aplpg-title-area text-center">
						<span class="aplpg-subtitle"><?php echo esc_html($sub_title);?></span>
						<div class="aplpg-headline">
							<h3><?php echo esc_html($title);?></h3>
						</div>
					</div>
					<div class="aplpg-apps-btns">
                        <?php if($store_url['url']):?>
						<a <?php echo esc_attr($target_play); echo esc_attr($nofollow_play); ?> href="<?php echo esc_url($store_url['url']);?>" class="aplpg-google-btn">
							<div class="aplpg-icon-wrapper">
                                <?php \Elementor\Icons_Manager::render_icon( $settings['play_icon'], [ 'aria-hidden' => 'true' ] ); ?>
							</div>
							<div class="aplpg-apps-btn-content">
								<span><?php echo esc_html($store_txt_1);?></span>
								<span><?php echo esc_html($store_txt_2);?></span>
							</div>
						</a>
                        <?php endif;?>
                        <?php if($app_url['url']):?>
						<a href="<?php echo esc_url($app_url['url']);?>" <?php echo esc_attr($target_app); echo esc_attr($nofollow_app); ?> class="aplpg-apple-btn">
							<div class="aplpg-icon-wrapper">
                                <?php \Elementor\Icons_Manager::render_icon( $settings['app_icon'], [ 'aria-hidden' => 'true' ] ); ?>
							</div>
							<div class="aplpg-apps-btn-content">
								<span><?php echo esc_html($app_txt_1);?></span>
								<span><?php echo esc_html($app_txt_2);?></span>
							</div>
						</a>
                        <?php endif;?>
					</div>
				</div>
            </div>
        <?php
    }
    

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new how_it_works_button );
?>