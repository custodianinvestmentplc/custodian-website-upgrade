<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_testimonial extends Widget_Base {

    public function get_name() {
        return 'app-startup-testimonial';
    }

    public function get_title() {
        return __( 'App Startup Testimonial', 'appilo' );
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
        $this-> add_control(
          'section_title',
          [
              'label' => __('Section Title' , 'appilo'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __( 'Our awesome features', 'appilo' ),
          ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-section-title .str-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-section-title .str-title-tag',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_after',
                'label' => __( 'Title After', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-section-title h2:before',
            ]
        );
        $this-> add_control(
          'section_heading',
          [
              'label' => __('Section Heading' , 'appilo'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __( 'We can give the best facilites for you!', 'appilo' ),
          ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-testimonial_section .carousel_preview .str-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-testimonial_section .carousel_preview .str-section-title h2',
            ]
        );
        $this-> add_control(
          'section_info',
          [
              'label' => __('Section Info' , 'appilo'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
          ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-testimonial_section .carousel_preview .str-section-title p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-testimonial_section .carousel_preview .str-section-title p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'testimonials_section',
            [
                'label' => __( 'Testimonials', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'client_image', [
                'label' => __( 'Client Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri().'/img/app-startup/testimonial/tst1.png',
                ],
            ]
        );
        $repeater->add_control(
            'client_title', [
                'label' => __( 'Client Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Nepoli Dewan' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'client_id', [
                'label' => __( 'Client ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '0' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'client_designation', [
                'label' => __( 'Client Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'SEO Manager' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'client_comment_heading', [
                'label' => __( 'Client Comments Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Best Designing Agency' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'client_comment', [
                'label' => __( 'Client Comments', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significace of internet promoting. placeholder text for use in your graphic, print.Lorem Ipsum is simply dummy text of the printing and typesetting has been the industrys standard dummy.' , 'appilo' ),
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
        $repeater->add_control(
            'testimonial_active',
            [
                'label' => __( 'Make Active', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'active',
                'default' => '',
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
                        'client_id' => __( '0', 'appilo' ),
                        'testimonial_active' => __( 'active', 'appilo' ),
                    ],
                    [
                        'client_id' => __( '1', 'appilo' ),
                    ],
                    [
                        'client_id' => __( '2', 'appilo' ),
                    ],
                    [
                        'client_id' => __( '3', 'appilo' ),
                    ],
                    [
                        'client_id' => __( '4', 'appilo' ),
                    ],
                    [
                        'client_id' => __( '5', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ client_title }}}',
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
            'ct_h_color',
            [
                'label' => __( 'Comment Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-testimonial_content .str-testimonial_text h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_h_fonts',
                'label' => __( 'Comment Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-testimonial_content .str-testimonial_text h4',
            ]
        );
        $this->add_control(
            'ct_i_color',
            [
                'label' => __( 'Comment Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-testimonial_content .str-testimonial_text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_i_fonts',
                'label' => __( 'Comment Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-testimonial_content .str-testimonial_text p',
            ]
        );
        $this->add_control(
            'ct_t_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-testimonial_name_designation .str-testimonial_meta h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_t_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-testimonial_name_designation .str-testimonial_meta h4',
            ]
        );
        $this->add_control(
            'ct_d_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-testimonial_name_designation .str-testimonial_meta p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_d_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-testimonial_name_designation .str-testimonial_meta p',
            ]
        );
        $this->add_control(
            'ct_img_color',
            [
                'label' => __( 'Client Image BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-testimonial_name_designation .str-testimonial_img' => 'border-color: {{VALUE}}',
                ],
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
                'selector' => '{{WRAPPER}} .str-testimonial_section',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_pattern_bg',
                'label' => __( 'Section Pattern BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-testimonial_indicator',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-testimonial_section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-startup/shape/tst-shape.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo '<!-- Start of str-testimonial section
        ============================================= -->
        <section  class="str-testimonial_section">
            <div class="str-tst-vector"> <img src="'.$settings['pattern_bg_1']['url'].'"></div>
            <div class="container">
                <div  class="str-testimonial_slider">
                    <div id="str-testimonial_slide" class="carousel slide" data-ride="carousel" >
                        <div class="row '.$settings['style_switcher'].'">
                            <div class="col-lg-6 col-md-12">
                                <div class="str-testimonial_indicator relative-position">
                                    <ol class="carousel-indicators">';
                                if ( $settings['testimonial_list'] ) {
                                    foreach ($settings['testimonial_list'] as $testimonial_item) {
                                    echo '<li data-target="#str-testimonial_slide" data-slide-to="' . $testimonial_item['client_id'] . '" class="' . $testimonial_item['testimonial_active'] . ' '.$testimonial_item['_id'] .'">
                                            <img src="'.$testimonial_item['client_image']['url'].'" alt>
                                        </li>';
                                        }
                                    }
                                   echo'</ol>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="carousel_preview">
                                
                                    <div class="str-section-title text-left str-title-left pera-content str-headline">
                                        <span class="str-title-tag">'.$settings['section_title'].'</span>
                                        <h2>'.$settings['section_heading'].'</h2>
                                        <p>'.$settings['section_info'].'</p>
                                    </div>
                                    
                                    <div class="carousel-inner relative-position">';

                                if ( $settings['testimonial_list'] ) {
                                    foreach ($settings['testimonial_list'] as $testimonial_item) {
                                        echo '<div class="carousel-item ' . $testimonial_item['testimonial_active'] . ' '.$testimonial_item['_id'] .'">
                                            <div class="str-testimonial_content">
                                                <div class="str-testimonial_rating ul-li">
                                                    <ul>
                                                       '.$testimonial_item['feedback'].'
                                                    </ul>
                                                </div>
                                                <div class="str-testimonial_text relative-position pera-content str-headline">
                                                    <h4>'.$testimonial_item['client_comment_heading'].'</h4>
                                                    <p>'.$testimonial_item['client_comment'].'</p>
                                                </div>
                                                <div class="qoute_mark relative-position"></div>
                                                <div class="str-testimonial_name_designation">
                                                    <div class="str-testimonial_img float-left">
                                                        <img src="'.$testimonial_item['client_image']['url'].'" alt="">
                                                    </div>
                                                    <div class="str-testimonial_meta str-headline pera-content">
                                                        <h4>'.$testimonial_item['client_title'].'</h4>
                                                        <p>'.$testimonial_item['client_designation'].'</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                }
                                   echo'</div>
                                </div>
                                <div class="str-testimonial_indicator-dot">
                                    <ol class="carousel-indicators2">';
                                        if ( $settings['testimonial_list'] ) {
                                            foreach ($settings['testimonial_list'] as $testimonial_item) {
                                                echo '<li data-target="#str-testimonial_slide" data-slide-to="' . $testimonial_item['client_id'] . '" class="' . $testimonial_item['testimonial_active'] . ' '.$testimonial_item['_id'] .'"></li>';
                                            }
                                        }
                                    echo'</ol>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of str-testimonial section
        ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_testimonial );
?>