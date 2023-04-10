<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_slider extends Widget_Base {

    public function get_name() {
        return 'appilo-seo-slider';
    }

    public function get_title() {
        return __( 'Appilo SEO Slider', 'appilo' );
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
                'default' => __( 'Digital Products to', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-banner-section .appseo-banner-content h1',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Sell Online' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'visible_txt',
            [
                'label' => __( 'Visible Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'is-not-visible',
                'options' => [
                    'is-visible'  => __( 'Visible', 'appilo' ),
                    'is-not-visible'  => __( 'Not Visible', 'appilo' ),
                ],
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
                        'list_title' => __( 'Sell Online', 'appilo' ),
                    ], [
                        'list_title' => __( 'Promote Website', 'appilo' ),
                    ], [
                        'list_title' => __( 'Boost  Sell', 'appilo' ),
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
                    '{{WRAPPER}} .appseo-banner-section .cd-headline.rotate-3 b' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'animate_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-banner-section .cd-headline.rotate-3 b',
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Ensuring the best return on investment for your', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-banner-section .appseo-banner-content p',
            ]
        );
        $this->add_control(
            'slider_call_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-phone-call',
                    'library' => 'appilo-icons-2',
                ],
            ]
        );
        $this->add_control(
            'slider_call_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-call-action .call-action-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'slider_call_icon_size',
            [
                'label' => __( 'Slider Call Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 40,
                ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-call-action .call-action-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'slider_call_text',
            [
                'label' => __( 'Call Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>call Us: </span>8 800 2563 123', 'appilo' ),
            ]
        );
        $this->add_control(
            'call_text_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-call-action .call-action-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'call_text_color2',
            [
                'label' => __( 'Color 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-call-action .call-action-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'call_text_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-call-action .call-action-text',
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
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-btn .qut-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_1_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-btn .qut-btn a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_1_bg',
                'label' => __( 'Button 1 BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-btn .qut-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_1_hover_bg',
                'label' => __( 'Button 1 Hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-btn-hover:before',
            ]
        );

        $this->add_control(
            'slider_btn_icon',
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
            'slider_btn_url_2', [
                'label' => __( 'Slider Button Two Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=kxPCFljwJws',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'button_color_2',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-btn .banner-video-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_2_bg',
                'label' => __( 'Button 2 BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-btn .banner-video-btn:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_2_round_bg',
                'label' => __( 'Button 2 Round BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-banner-section .appseo-banner-content .banner-btn .banner-video-btn:before',
            ]
        );
        $this->add_control(
            'banner_image', [
                'label' => __( 'Banner Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/banner/bv1.png',
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
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/shape/bs1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/shape/bs3.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern BG 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/shape/bs2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Pattern BG 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/shape/bs4.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_main_bg',
                'label' => __( 'Slider Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-banner-section',
            ]
        );
        $this->add_responsive_control(
            'slider_content_width',
            [
                'label' => __( 'Slider Content Width', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 480,
                ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-banner-section .appseo-banner-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of Banner section
    ============================================= -->
<section  class="appseo-banner-section position-relative">
    <div class="container">
        <div  class="appseo-banner-content appseo-headline pera-content">
            <h1 class="cd-headline letters rotate-3">
                '.$settings['slider_heading'].'
                        <span class="cd-words-wrapper">';
                            if ( $settings['list'] ) {
                                foreach ($settings['list'] as $list) {
                                    echo '<b class="'.$list['visible_txt'].'">'.$list['list_title'].'</b>';
                                }
                            }
                        echo'</span> </h1>
            <p>'.$settings['slider_info'].'</p>
            <div class="banner-call-action">
                <div class="call-action-icon float-left">';
                    \Elementor\Icons_Manager::render_icon( $settings['slider_call_icon'], [ 'aria-hidden' => 'true' ] );
                echo'</div>
                <div class="call-action-text text-uppercase">
                    '.$settings['slider_call_text'].'
                </div>
            </div>
            <div class="banner-btn">';
            if ($settings['slider_btn_1']){
                echo'<div class="qut-btn appseo-btn-hover text-uppercase text-center">
                    <a href="'.$settings['slider_btn_url_1']['url'].'">'.$settings['slider_btn_1'].'</a>
                </div>';
                }
                echo'<div class="banner-video-btn text-center">
                    <a href="'.$settings['slider_btn_url_2']['url'].'" class="appilo_seo_video_popup overlay-box">';\Elementor\Icons_Manager::render_icon( $settings['slider_btn_icon'], [ 'aria-hidden' => 'true' ] );echo'</a>
                    <i class="video-border"></i>
                </div>
            </div>
        </div>
    </div>';?>
    <div class="banner-shape appseo-banner-shape1"><img src="<?php echo esc_url($settings['pattern_bg_1']['url'])?>" alt></div>
    <div class="banner-shape appseo-banner-shape2" data-parallax='{"y" : 100, "rotateY":500}'><img src="<?php echo esc_url($settings['pattern_bg_2']['url'])?>" alt></div>
    <div class="banner-shape appseo-banner-shape3"><img src="<?php echo esc_url($settings['pattern_bg_3']['url'])?>" alt></div>
    <div class="banner-shape appseo-banner-shape4" data-parallax='{"x" : 100}'><img src="<?php echo esc_url($settings['pattern_bg_4']['url'])?>" alt></div>
    <div class="banner-shape appseo-banner-vector"><img src="<?php echo esc_url($settings['banner_image']['url'])?>" alt></div>
</section>
<?php
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_slider );
?>