<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_testimonial extends Widget_Base {

    public function get_name() {
        return 'app-showcase-testimonial';
    }

    public function get_title() {
        return __( 'App Showcase Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fas fa-quote-right';
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
            'headline',
            [
                'label' => __( 'Headline', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Fetaured services', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title .eg-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag',
            ]
        );
        $this->add_control(
            'headline_txt',
            [
                'label' => __( 'Headline Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Why you will choose', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_txt_color',
            [
                'label' => __( 'Headline Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_txt_fonts',
                'label' => __( 'Headline Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title h2',
            ]
        );
        $this->add_control(
            'subhead_txt',
            [
                'label' => __( 'Subhead Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'our software?', 'appilo' ),
            ]
        );
        $this->add_control(
            'subhead_txt_color',
            [
                'label' => __( 'Subhead Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title h2 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subhead_txt_fonts',
                'label' => __( 'Subhead Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title h2 span',
            ]
        );
        $this->add_control(
            'info_txt',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a SAAS web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_txt_color',
            [
                'label' => __( 'Info Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt_fonts',
                'label' => __( 'Info Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title p',
            ]
        );
        $this->add_responsive_control(
            'headline_margin',
            [
                'label' => __( 'Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'headline_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'align_title5',
            [
                'label' => __( 'Title Alignment', 'appilo' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'appilo' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'eicon-text-align-right',
                    ],

                ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title.appeight-headline' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'headline_width',
            [
                'label' => __( 'Headline Width', 'appilo' ),
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
                    'size' => 490,
                ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'shape_display',
            [
                'label' => __( 'Shape Display', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'd-block',
                'options' => [
                    'd-none'  => __( 'Hide', 'appilo' ),
                    'd-block' => __( 'Show', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'before_bg',
            [
                'label' => __( 'Text Before', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg1',
                'label' => __( 'Style BG 1', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(1)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg2',
                'label' => __( 'Style BG 2', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(2)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg3',
                'label' => __( 'Style BG 3', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(3)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg4',
                'label' => __( 'Style BG 4', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(4)',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'testimonials',
            [
                'label' => __( 'Testimonials', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'client_name',
            [
                'label' => __( 'Client Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Liana Zhu', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'client_designation',
            [
                'label' => __( 'Client Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Senior Director', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'client_info',
            [
                'label' => __( 'Client Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $repeater->add_control(
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

        $repeater->add_control(
            'client_photo', [
                'label' => __( 'Client Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/testimonial/tst1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'quote_icon',
            [
                'label' => __( 'Quote Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-quote-right',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'client_list',
            [
                'label' => __( 'Client List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'client_name' => __( 'Liana Zhu', 'appilo' ),
                        'client_designation' => __( 'Senior Director', 'appilo' ),
                        'client_info' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
                    ],
                    [
                        'client_name' => __( 'Liana Zhu', 'appilo' ),
                        'client_designation' => __( 'Senior Director', 'appilo' ),
                        'client_info' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
                    ],
                    [
                        'client_name' => __( 'Liana Zhu', 'appilo' ),
                        'client_designation' => __( 'Senior Director', 'appilo' ),
                        'client_info' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
                    ],
                    [
                        'client_name' => __( 'Liana Zhu', 'appilo' ),
                        'client_designation' => __( 'Senior Director', 'appilo' ),
                        'client_info' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ client_name }}}',
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
            'photo_bg',
            [
                'label' => __( 'Photo Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'photo_bg_1',
                'label' => __( 'Photo Background 1', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'photo_bg_2',
                'label' => __( 'Photo Background 2', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text .ei-testimonial-img:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'photo_bg_3',
                'label' => __( 'Photo Background 3', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text .ei-testimonial-img:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'photo_bg_4',
                'label' => __( 'Photo Background 4', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text .ei-testimonial-text .ei-testimonial-name h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text .ei-testimonial-text .ei-testimonial-name h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text .ei-testimonial-text .ei-testimonial-name span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text .ei-testimonial-text .ei-testimonial-name span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text .ei-testimonial-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-testimonial-section .ei-testimonial-img-text .ei-testimonial-text p',
            ]
        );
        $this->add_control(
            'bg_border_circle',
            [
                'label' => __( 'Round Image Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-testimonial-section .testimonial-floatingimg li' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_as25_bg',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} #testimonial-scroller .owl-dot',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_hover_bg',
                'label' => __( 'Nav Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} #testimonial-scroller .owl-dot.active',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/background/tbg.jpg',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .ei-testimonial-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
 echo '<!-- Start of Testimonial section
    ============================================= -->
<section  class="ei-testimonial-section position-relative" data-background="' . $settings['pattern_bg_1']['url'] . '">
    <div class="container">
        <div class="eight-section-title appeight-headline pera-content">
   				<span class="eg-title-tag shape'.$settings['shape_display'].'">
    					'.$settings['headline'].' <i class="square-shape '.$settings['shape_display'].'"><i></i><i></i> <i></i> <i></i> </i>
    				</span>
            <h2>'.$settings['headline_txt'].'
                <span>'.$settings['subhead_txt'].'</span></h2>
            <p>'.$settings['info_txt'].'</p>
        </div>
        <!-- /title -->
        <div class="ei-testimonial-content">
            <div id="testimonial-scroller" class="testimonial-scroller-area owl-carousel">';
        if ( $settings['client_list'] ) {
            foreach ($settings['client_list'] as $clients) {
                echo '<div class="ei-testimonial-img-text position-relative dynamic-client'.$clients['_id'].'">
                    <div class="test--quote-icon">';
                        \Elementor\Icons_Manager::render_icon( $clients['quote_icon'], [ 'aria-hidden' => 'true' ] );
                    echo'</div>
                    <div class="ei-testimonial-img float-left text-center">
                        <img src="' . $clients['client_photo']['url'] . '" alt>
                    </div>
                    <div class="ei-testimonial-text">
                        <div class="ei-testimonial-name appeight-headline pera-content">
                            <h3>' . $clients['client_name'] . '</h3>
                            <span>' . $clients['client_designation'] . '</span>
                        </div>
                        <p>' . $clients['client_info'] . '</p>
                        <div class="ei-testi-rate ul-li clearfix">
                            <ul>
                                ' . $clients['feedback'] . '
                            </ul>
                        </div>
                    </div>
                </div>';
                }
            }
           echo' </div>
        </div>
    </div>
    <div class="testimonial-floatingimg testimonial-float-img1 ul-li-block">
        <ul>';
        if ( $settings['client_list'] ) {
            foreach ($settings['client_list'] as $clients) {
                echo '<li><img src="' . $clients['client_photo']['url'] . '" alt></li>';
            }
        }
        echo'</ul>
    </div>
    <div class="testimonial-floatingimg testimonial-float-img2 ul-li-block">
        <ul>';
        if ( $settings['client_list'] ) {
            foreach ($settings['client_list'] as $clients) {
                echo '<li><img src="' . $clients['client_photo']['url'] . '" alt></li>';
            }
        }
        echo'</ul>
    </div>
</section>
<!-- End of Testimonial section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_testimonial );
?>