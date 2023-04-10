<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hrm_testimonial extends Widget_Base {

    public function get_name() {
        return 'hrm-testimonial';
    }

    public function get_title() {
        return __( 'HRM Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-editor-quote';
    }

    protected function register_controls() {
        $this->start_controls_section(
            'section_starts',
            [
                'label' => __( 'Section', 'appilo' ),
            ]
        );
        
        $this-> add_control(
          'section_title',
          [
              'label' => __('Section Title' , 'appilo'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __( 'Testimonials', 'appilo' ),
          ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-testimonial-section .pm-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-testimonial-section .pm-title-tag',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sec_title_bg',
                'label' => __( 'Section Title BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-testimonial-section .pm-title-tag',
            ]
        );

        $this-> add_control(
          'section_heading',
          [
              'label' => __('Section Heading' , 'appilo'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __( 'See What’s Going With Our Clients', 'appilo' ),
          ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-testimonial-section .pm-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-testimonial-section .pm-section-title h2',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonials_left',
            [
                'label' => __( 'Testimonials Left', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'client_image', [
                'label' => __( 'Client Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri().'/img/hrm/tst1.png',
                ],
            ]
        );
        $repeater->add_control(
            'client_title', [
                'label' => __( 'Client Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Hilix B. Browni' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'client_comment', [
                'label' => __( 'Client Comments', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Free CRM system for your sales team with all the essential tools sales funnel, pipeline management, sales reports.' , 'appilo' ),
                'label_block' => true,
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
        $this->add_control(
            'testimonial_list',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'client_title' => __( 'Hilix B. Browni', 'appilo' ),
                    ],
                    [
                        'client_title' => __( 'Hilix B. Browni', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ client_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'testimonials_right',
            [
                'label' => __( 'Testimonials Right', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'r_client_image', [
                'label' => __( 'Client Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri().'/img/hrm/tst1.png',
                ],
            ]
        );
        $repeater->add_control(
            'r_client_title', [
                'label' => __( 'Client Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Hilix B. Browni' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'r_client_comment', [
                'label' => __( 'Client Comments', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Free CRM system for your sales team with all the essential tools sales funnel, pipeline management, sales reports.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'r_feedback',
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
        $this->add_control(
            'r_testimonial_list',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'r_client_title' => __( 'Hilix B. Browni', 'appilo' ),
                    ],
                    [
                        'r_client_title' => __( 'Hilix B. Browni', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ r_client_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Testimonial Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'ct_i_color',
            [
                'label' => __( 'Comment Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-testimonial-inner .pm-testimonial-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_i_fonts',
                'label' => __( 'Comment Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-testimonial-inner .pm-testimonial-text',
            ]
        );
        $this->add_control(
            'ct_t_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-testimonial-inner .pm-testimonial-author .pm-author-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_t_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-testimonial-inner .pm-testimonial-author .pm-author-text h3',
            ]
        );
        $this->add_control(
            'test_item_control',
            [
                'label' => __( 'Testimonial Item', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 't_item_bg',
                'label' => __( 'Item BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-testimonial-inner',
            ]
        );
        $this->add_responsive_control(
            't_item_padding',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-testimonial-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Item Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-testimonial-inner',
            ]
        );
        $this->add_control(
            'msb',
            [
                'label' => __( 'Main Section Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Section BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-testimonial-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-testimonial-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/hrm/tbg.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo ' <!-- Start of testimonial  section
        ============================================= -->        
        <section  class="pm-testimonial-section position-relative">
            <div class="pm-testimonial-bg position-absolute text-center"> <img src="'.$settings['pattern_bg_1']['url'].'" alt></div>
            <div class="container">
                <div class="pm-testimonial-content">
                    <div class="row">
                        <div class="col-md-4 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">';
                if ( $settings['testimonial_list'] ) {
                    foreach ($settings['testimonial_list'] as $testimonial_item) {
                echo '<div class="pm-testimonial-inner  dynamic-hrm-testimonial' . $testimonial_item['_id'] . '">
                                <div class="pm-testimonial-text">
                                    ' . $testimonial_item['client_comment'] . '
                                </div>
                                <div class="pm-testimonial-author">
                                    <div class="pm-testimonial-img float-left">
                                        <img src="'.$testimonial_item['client_image']['url'].'" alt>
                                    </div>
                                    <div class="pm-author-text pm-headline ul-li">
                                        <h3>' . $testimonial_item['client_title'] . '</h3>
                                        <ul>
                                           ' . $testimonial_item['feedback'] . '
                                        </ul>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                       echo' </div>
                        <div class="col-md-4 wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="pm-testimonial-text-item position-relative">
                                <div class="pm-section-title pm-headline text-center">
                                    <span class="pm-title-tag">'.$settings['section_title'].'</span>
                                    <h2>'.$settings['section_heading'].'</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">';
                if ( $settings['r_testimonial_list'] ) {
                    foreach ($settings['r_testimonial_list'] as $r_testimonial_item) {
                echo '<div class="pm-testimonial-inner dynamic-hrm-testimonial' . $r_testimonial_item['_id'] . '">
                                <div class="pm-testimonial-text">
                                    ' . $r_testimonial_item['r_client_comment'] . '
                                </div>
                                <div class="pm-testimonial-author">
                                    <div class="pm-testimonial-img float-left">
                                        <img src="'.$r_testimonial_item['r_client_image']['url'].'" alt>
                                    </div>
                                    <div class="pm-author-text pm-headline ul-li">
                                        <h3>' . $r_testimonial_item['r_client_title'] . '</h3>
                                        <ul>
                                           ' . $r_testimonial_item['r_feedback'] . '
                                        </ul>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                       echo' </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of testimonial  section
        ============================================= --> ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hrm_testimonial );
?>