<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_slider extends Widget_Base {

    public function get_name() {
        return 'app-showcase-slider';
    }

    public function get_title() {
        return __( 'App Showcase Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-image-rollover';
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
            'slider_heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The new website for', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section .eight-banner-content h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-banner-section .eight-banner-content h1',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'app landing' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => __( 'Animate List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => __( 'app landing', 'appilo' ),
                    ], [
                        'list_title' => __( 'showcase', 'appilo' ),
                    ], [
                        'list_title' => __( 'screenshoot', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );
        $this->add_control(
            'animate_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section .eight-banner-content h1 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'animate_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-banner-section .eight-banner-content h1 span',
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Appilo is the best software platform for running an internet business.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section .eight-banner-content .info' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-banner-section .eight-banner-content .info',
            ]
        );
        $this->add_control(
            'feedback',
            [
                'label' => __( 'Feedback', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '<li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>',
                'options' => [
                    '<li><i></i></li>'  => __( '0 Star', 'appilo' ),
                    '<li><i class="fas fa-star"></i></li>'  => __( '1 Star', 'appilo' ),
                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>'  => __( '2 Star', 'appilo' ),
                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>'  => __( '3 Star', 'appilo' ),
                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>'  => __( '4 Star', 'appilo' ),
                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>'  => __( '5 Star', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'review_txt',
            [
                'label' => __( 'Review Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '(based on <span>1,256 task</span> reviews)', 'appilo' ),
            ]
        );
        $this->add_control(
            'review_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section .eight-banner-content .ei-banner-review p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'review_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-banner-section .eight-banner-content .ei-banner-review p',
            ]
        );
        $this->add_control(
            'slider_btn_1',
            [
                'label' => __( 'Slider Button 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Start Now', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-power-off',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'slider_btn_icon_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section .eight-banner-content .banner-content-box .ei-banner-btn a:nth-child(1) i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'slider_btn_url_1', [
                'label' => __( 'Slider Button One Link', 'appilo' ),
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
            'btn_1_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} eight-banner-section .eight-banner-content .banner-content-box .ei-banner-btn a:nth-child(1)' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_1_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} eight-banner-section .eight-banner-content .banner-content-box .ei-banner-btn a:nth-child(1)',
            ]
        );
        $this->add_control(
            'button_bg_color_1',
            [
                'label' => __( 'Button One Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section .eight-banner-content .banner-content-box .ei-banner-btn a:nth-child(1)' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color_1_hover',
            [
                'label' => __( 'Button One Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section .eight-banner-content .banner-content-box .ei-banner-btn a:nth-child(1):hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'slider_btn_2',
            [
                'label' => __( 'Slider Button 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>or</span> try it for free', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_url_2', [
                'label' => __( 'Slider Button Two Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_2_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} eight-banner-section .eight-banner-content .banner-content-box .ei-banner-btn a:nth-child(2)',
            ]
        );
        $this->add_control(
            'button_color_2',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section .eight-banner-content .banner-content-box .ei-banner-btn a:nth-child(2)' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mockup_image', [
                'label' => __( 'Mockup Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/mockup/bm1.png',
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
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/shape/b-shapeup.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/shape/b-shapemiddle.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern BG 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/shape/b-shapemiddle.png',
                ],
            ]
        );
        $this->add_control(
            'slider_bg_wave',
            [
                'label' => __( 'Slider BG Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_main_bg_shape',
                'label' =>  __( 'Slider Main BG Shape', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .eight-banner-section .waveWrapper .waveWrapperInner',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eight-banner-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Start of Banner section
    	============================================= -->
    	<section  class="eight-banner-section position-relative">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12">
    					<div class="eight-banner-content">
    						<div class="banner-content-box appeight-headline pera-content">
    							<h1 class="cd-headline clip is-full-width">
    								'.$settings['slider_heading'].'
    								<span class="cd-words-wrapper">';
                                if ( $settings['list'] ) {
                                    $index = 0;
                                    foreach ($settings['list'] as $list) {
                                        $index++;
                                        if ($index == 1){
                                            $class = 'is-visible';
                                        }else{
                                            $class = '';
                                        }
                                        echo '<b class="'.$class.'">'.$list['list_title'].'</b>';
                                    }
                                }
    								echo'</span>
    							</h1>
    							<p class="info">'.$settings['slider_info'].'</p>

    							<div class="ei-banner-btn">';

                                if (!empty($settings['slider_btn_1'])) {
                                    echo'<a href="'.$settings['slider_btn_url_1']['url'].'">';\Elementor\Icons_Manager::render_icon( $settings['slider_btn_icon'], [ 'aria-hidden' => 'true' ] ); echo''.$settings['slider_btn_1'].'</a>';
                                }

                                if (!empty($settings['slider_btn_2'])) {
                                 echo'<a href="'.$settings['slider_btn_url_2']['url'].'">'.$settings['slider_btn_2'].'</a>';
                                }

                                echo'</div>

    							<div class="ei-banner-review pera-content ul-li">
    								<ul>
    									'.$settings['feedback'].'
    								</ul>
    								<p>'.$settings['review_txt'].'</p>
    							</div>
    						</div>
    						<div class="ei-banner-mbl-mockup wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
    							<img src="'.$settings['mockup_image']['url'].'" alt>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="waveWrapper waveAnimation">
    			<div class="waveWrapperInner bgTop">
    				<div class="wave waveTop" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
    			</div>
    			<div class="waveWrapperInner bgMiddle">
    				<div class="wave waveMiddle" style="background-image: url('.$settings['pattern_bg_2']['url'].')"></div>
    			</div>
    			<div class="waveWrapperInner bgBottom">
    				<div class="wave waveBottom" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
    			</div>
    		</div>
    	</section>
    <!-- End of Banner section
    	============================================= --> ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_slider );
?>