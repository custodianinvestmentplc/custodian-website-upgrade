<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_classic_slider extends Widget_Base {

    public function get_name() {
        return 'saas-classic-slider';
    }

    public function get_title() {
        return __( 'SaaS Classic Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-banner';
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
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Creative SAAS website', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .s2-tilte_tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .s2-tilte_tag',
            ]
        );
        $this->add_control(
            'btnbg1356267567',
            [
                'label' => __( 'Heading BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg6465267567',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .s2-tilte_tag',
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Best website for <span>SAAS</span> business', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content h1',
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Even in the most uncertain times, Help Scout keeps you connected with customers.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content p',
            ]
        );
        $this->add_control(
            'btn_1',
            [
                'label' => __( 'Button 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Try it free', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_1_icon',
            [
                'label' => __( 'Button 1 Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-cloud-download-alt',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'btn1_url', [
                'label' => __( 'Button 1 Link', 'appilo' ),
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
            'btn1_color',
            [
                'label' => __( 'Button 1 Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn1_h_color',
            [
                'label' => __( 'Button 1 Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn1:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn1_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn1',
            ]
        );
        $this->add_control(
            'btn1_b_color',
            [
                'label' => __( 'Button 1 Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn1' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btnbg135634',
            [
                'label' => __( 'Button 1 Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg6465454',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn1 i',
            ]
        );
        $this->add_control(
            'btn1_i_h_color',
            [
                'label' => __( 'Button 1 Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn1:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btnbg1356',
            [
                'label' => __( 'Button 1 Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg6465',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn1:after',
            ]
        );
        $this->add_control(
            'btn_2',
            [
                'label' => __( 'Button 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get a demo', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_2_icon',
            [
                'label' => __( 'Button 1 Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-clipboard-list',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'btn2_url', [
                'label' => __( 'Button 2 Link', 'appilo' ),
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
            'btnbg13563432',
            [
                'label' => __( 'Button 2 Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg6465454435',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn2 i',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn1_shadow',
                'label' => __( 'Button 1 Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn1:before',
            ]
        );
        $this->add_control(
            'btn2_i_h_color',
            [
                'label' => __( 'Button 2 Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn2:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn2_color',
            [
                'label' => __( 'Button 2 Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn2_h_color',
            [
                'label' => __( 'Button 2 Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn2:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn2_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn2',
            ]
        );
        $this->add_control(
            'btn2_b_color',
            [
                'label' => __( 'Button 2 Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn2' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn2_shadow',
                'label' => __( 'Button 2 Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn2:before',
            ]
        );
        $this->add_control(
            'btnbg13562',
            [
                'label' => __( 'Button 2 Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg64652',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn .sc-btn2:after',
            ]
        );
        $this->add_control(
            'btn_under_txt',
            [
                'label' => __( 'Button Under Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'No credit card required *', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_under_txt_color',
            [
                'label' => __( 'Button Under Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_under_txt_fonts',
                'label' => __( 'Button Under Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_banner_section .s2-banner_content .banner_btn span',
            ]
        );
        $this->add_control(
            'custom_content',
            [
                'label' => __( 'Custom Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Deactivate', 'appilo' ),
                'return_value' => 'active-custom-content',
                'default' => '',
            ]
        );
        $this->add_control(
            'custom_contents',
            [
                'label' => __( 'Custom Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Custom Text You can Put', 'appilo' ),
                'condition' => [
                    'custom_content' => 'active-custom-content',
                ],
            ]
        );
        $this->add_responsive_control(
            'l_r',
            [
                'label' => __( 'Left/Right', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_area .banner_mockup' => 'right: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'custom_content' => 'active-custom-content',
                ],
            ]
        );
        $this->add_responsive_control(
            't_b',
            [
                'label' => __( 'Top/Bottom', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section .s2-banner_area .banner_mockup' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'custom_content' => 'active-custom-content',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Mockup', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/saas-classic/banner/b-laptop.png',
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
            'pattern_bg_2', [
                'label' => __( 'Shape Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/saas-classic/banner/b-shape2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Shape Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/saas-classic/banner/b-shape3.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Shape Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/saas-classic/banner/b-shape4.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_main_shape_heading',
            [
                'label' => esc_html__( 'Slider Shape Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_main_shape',
                'label' => __( 'Slider Shape Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_banner_section:before',
                'exclude' => ['color'],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_main',
                'label' => __( 'Slider Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .saas_two_banner_section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas_two_banner_section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of Banner section
            ============================================= -->
<section  class="saas_two_banner_section relative-position">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="s2-banner_area relative-position">
                    <div class="s2-banner_content saas2-headline pera-content">
                        <span class="s2-tilte_tag">'.$settings['heading'].'</span>
                        <h1>'.$settings['title'].'</h1>
                        <p>'.$settings['info'].'</p>
                        <div class="banner_btn">
                        
                            <a class="sc-btn1"  href="'.$settings['btn1_url']['url'].'">'; \Elementor\Icons_Manager::render_icon($settings['btn_1_icon'], ['aria-hidden' => 'true']); echo''.$settings['btn_1'].'</a>

                            <a class="sc-btn2" href="'.$settings['btn2_url']['url'].'">'; \Elementor\Icons_Manager::render_icon($settings['btn_2_icon'], ['aria-hidden' => 'true']); echo''.$settings['btn_2'].'</a>

                            <span>'.$settings['btn_under_txt'].'</span>
                        </div>
                    </div>
                    <div class="banner_mockup">';
                        if ($settings['custom_content'] == 'active-custom-content'){
                            echo '<div class="custom-contents-shortcode">' . do_shortcode($settings['custom_contents']) . '</div>';
                        } else {
                            echo '<img src="' . $settings['pattern_bg_1']['url'] . '" alt>';
                        }
                    echo'</div>
                </div>
            </div>
        </div>
    </div>
    ';?>
    <div class="s2-banner_shape1 position-absolute" data-parallax='{"y" : 100}'><img src="<?php echo esc_url( $settings['pattern_bg_4']['url'] )?>"></div>

    <?php echo'
    <div class="s2-banner_shape2 position-absolute"><img src="'.$settings['pattern_bg_3']['url'].'"></div>
    <div class="s2-banner_shape3 position-absolute"><img src="'.$settings['pattern_bg_2']['url'].'"></div>
</section>
<!-- End of Banner section
    ============================================= -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_classic_slider );
?>