<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_call_to_action extends Widget_Base {

    public function get_name() {
        return 'appilo-seo-call-to-action';
    }

    public function get_title() {
        return __( 'Appilo SEO Call To Action', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-click';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content Section', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'style_switcher',
            [
                'label' => __( 'Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style2',
                'options' => [
                    'flex-row-reverse'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'action_title',
            [
                'label' => __( 'Action Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Interested To<br> Get Our Featured Service', 'appilo' ),
            ]
        );
        $this->add_control(
            'action_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-cta-section .appseo-cta-content h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'action_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-cta-section .appseo-cta-content h2',
            ]
        );
        $this->add_control(
            'action_btn',
            [
                'label' => __( 'Action Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started Now', 'appilo' ),
            ]
        );
        $this->add_control(
            'action_btn_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-cta-section .appseo-cta-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'action_btn_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-cta-section .appseo-cta-btn',
            ]
        );
        $this->add_control(
            'action_btn_link', [
                'label' => __( 'Action Button Link', 'appilo' ),
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
            Group_Control_Background::get_type(),
            [
                'name' => 'action_btn_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-cta-section .appseo-cta-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'action_btn_hover_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-cta-section .appseo-btn-hover:before',
            ]
        );
        $this->add_control(
            'action_img', [
                'label' => __( 'Action Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-seo/vector/ctav.png',
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
            'enable_dot',
            [
                'label' => __( 'Dot Animation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Enable', 'appilo' ),
                'label_off' => __( 'Disable', 'appilo' ),
                'return_value' => '<div class="bubble-dotted">
                                    <span class="dotted dotted-1"></span>
                                    <span class="dotted dotted-2"></span>
                                    <span class="dotted dotted-3"></span>
                                    <span class="dotted dotted-4"></span>
                                    <span class="dotted dotted-5"></span>
                                    <span class="dotted dotted-6"></span>
                                    <span class="dotted dotted-7"></span>
                                    <span class="dotted dotted-8"></span>
                                    <span class="dotted dotted-9"></span>
                                    <span class="dotted dotted-10"></span>
                                </div>',
                'default' => '',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dot_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-cta-section .bubble-dotted .dotted',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-cta-section:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_overlay_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-cta-section .overlay-bg',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-cta-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
   echo '   <!-- Start of appseo call to action section
        ============================================= --> 
        <section  class="appseo-cta-section position-relative">
        
        '.$settings['enable_dot'].'
            
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="row '.$settings['style_switcher'].'">
                    <div class="col-lg-7">
                        <div class="appseo-cta-content">
                            <h2>'.$settings['action_title'].'</h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="appseo-call-btn-area">
                            <div class="appseo-cta-btn appseo-btn-hover text-center">
                                <a href="'.$settings['action_btn_link']['url'].'">'.$settings['action_btn'].'</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="appseo-call-vector">
                <img src="'.$settings['action_img']['url'].'" alt>
            </div>
        </section>
    <!-- End of appseo call to action  section
        ============================================= --> ';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_call_to_action );
?>