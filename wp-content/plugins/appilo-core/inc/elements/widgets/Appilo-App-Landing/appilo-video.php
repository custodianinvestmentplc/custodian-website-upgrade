<?php
namespace Elementor;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


class appilo_video extends Widget_Base {

    public function get_name() {
        return 'appilo_video';
    }

    public function get_title() {
        return __('Appilo Video', 'appilo');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['ashelement-addons'];
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
            'thumb', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,                
                'label' =>   esc_html__('Thumbnail', 'niobis'),
            ]
        );

        $this->add_control(
            'video_icon',
            [
                'label' => __( 'Video Play Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-play',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'video_url', [
                'label' => __( 'Video URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '//www.youtube.com/watch?v=7-7knsP2n5w',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'video_style',
            [
                'label' => __( 'Video Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'video_style_head',
			[
				'label' => __( 'Video Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
			'video_image_round',
			[
				'label' => __( 'Video Image Round', 'appilo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .aplpg-video-section .aplpg-video-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'icon_color',
			[
				'label' => __( 'Icon Color', 'appilo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .aplpg-video-section .aplpg-video-content .aplpg-video-btn a' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'play_btn_bg',
                'label' => __( 'Video Play Button Style', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .aplpg-video-section .aplpg-video-content .aplpg-video-btn a',
            ]
        );
        $this->add_control(
			'play_btn_width',
			[
				'label' => __( 'Play Button Width', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-video-section .aplpg-video-content .aplpg-video-btn a' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'play_btn_height',
			[
				'label' => __( 'Play Button Height', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-video-section .aplpg-video-content .aplpg-video-btn a' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'play_btn_line_height',
			[
				'label' => __( 'Play Button Lineheight', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-video-section .aplpg-video-content .aplpg-video-btn a' => 'line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();

    }

    protected function render() {
         $settings = $this->get_settings_for_display();
                 
        $img = wp_get_attachment_image( $settings['thumb']['id'], 'full');            
        $target = $settings['video_url']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['video_url']['nofollow'] ? ' rel="nofollow"' : '';


              
        echo '

  
        <div class="aplpg-video-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
  <div class="aplpg-video-content">
                            <img '.$img.'
                            <div class="aplpg-video-btn">
                                <a href="'.$settings['video_url']['url'].'" ' . $target . $nofollow . ' class="">'; \Elementor\Icons_Manager::render_icon( $settings['video_icon'], [ 'aria-hidden' => 'true' ] ); 
                                echo '</a>
                            </div>
                        </div>
           </div>
                </div>
            </div>
        </div>';

}




    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_video );
?>