<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_app_block_two extends Widget_Base {

    public function get_name() {
        return 'topapp-app-block-two';
    }

    public function get_title() {
        return __( 'App Block Two', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-handle';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'icon_lib',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Bug free responsive app with high performence speed!', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry.', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read more', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_url', [
                'label' => __( 'Feature Button Link', 'appilo' ),
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
            'section_image_1', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/resource/app-2.png',
                ],
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
// Animation Variable
        $dot_animation_2 = '<div class="ct-dot-animated">
                            <div class="ct-dot-container">
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                            </div>
                        </div>';
        $this->add_control(
            'dot_animation_enable_2',
            [
                'label' => __( 'Turn Dot Animation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => $dot_animation_2,
                'default' => '',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dot_animation_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .ct-dot-animated .ct-dot-item:nth-child(1) span, 
                {{WRAPPER}} .ct-dot-animated .ct-dot-item:nth-child(2) span, 
                {{WRAPPER}} .ct-dot-animated .ct-dot-item:nth-child(3) span, 
                {{WRAPPER}} .ct-dot-animated .ct-dot-item:nth-child(4) span, 
                {{WRAPPER}} .ct-dot-animated .ct-dot-item:nth-child(5) span',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_text',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-block .inner-box .content-column h3',
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-block .inner-box .content-column h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_text',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-block .inner-box .content-column .text',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-block .inner-box .content-column .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_style',
            [
                'label' => __( 'Icon Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-block .inner-box .content-column .icon, 
                    {{WRAPPER}} .app-block .inner-box .content-column .feature_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_background',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-block .inner-box .content-column .icon-box, 
                {{WRAPPER}} .app-block.style-two .inner-box .content-column .icon-box:before, 
                {{WRAPPER}} .app-block.style-two .inner-box .content-column .icon-box:after',
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
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .btn-style-four',
            ]
        );
        $this->add_control(
            'button_hover_style',
            [
                'label' => __( 'Button Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_1',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .btn-style-four:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_2',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .btn-style-four:after',
            ]
        );
        $this->add_control(
            'button_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn-style-four' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo '<!-- Apps Section -->
                <section class="apps-section" >
                    <div class="auto-container">
                        '.$settings['dot_animation_enable_2'].'
                        <!-- App Block -->
			<div class="app-block style-two">
				<div class="inner-box">
					<div class="row clearfix">
					
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="icon-box">
                                        
                                           <span class="feature_icon">';
                                               \Elementor\Icons_Manager::render_icon( $settings['icon_lib'], [ 'aria-hidden' => 'true' ] );
                                        echo'</span>
								</div>
								<h3>'.$settings['section_heading'].'</h3>
								<div class="text">'.$settings['section_info'].'</div>';
                                if (!empty($settings['section_btn_url']['url'])) {
                                    echo '<a href="' . $settings['section_btn_url']['url'] . '" class="topapp-theme-btn btn-style-four"><span class="txt">' . $settings['section_btn'] . '</span></a>';
                                }
							echo '</div>
						</div>
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image titlt" data-tilt data-tilt-max="8">
									<a href="'.$settings['section_image_1']['url'].'" class="app-2 lightbox-image-2"><img src="'.$settings['section_image_1']['url'].'" alt="Section Image oNe" /></a>
								</div>
								
							</div>
						</div>
					
					</div>
				</div>
			</div>
                        </div>
                        </section>
			<!-- End App Block -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_app_block_two );
?>