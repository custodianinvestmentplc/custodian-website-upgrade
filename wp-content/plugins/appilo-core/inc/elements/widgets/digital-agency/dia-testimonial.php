<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class dia_testimonial extends Widget_Base {

    public function get_name() {
        return 'dia-testimonial';
    }

    public function get_title() {
        return __( 'Digital Agency Testimonial', 'appilo' );
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
              'default' => __( 'Client’s Testimonials', 'appilo' ),
          ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sec_title_color',
                'label' => __( 'Section Title Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-testimonial-section .dia-section-title span',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-testimonial-section .dia-section-title span',
            ]
        );
        $this-> add_control(
          'section_heading',
          [
              'label' => __('Section Heading' , 'appilo'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __( 'Client’s review for our work satisfaction.', 'appilo' ),
          ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-testimonial-section .dia-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-testimonial-section .dia-section-title h2',
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
                    'url' => get_template_directory_uri().'/img/digital-agency/testimonial/tst1.png',
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
            'client_comment', [
                'label' => __( 'Client Comments', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Give your team the ability to quickly create, send, and track docs within an approval system that works for everyone. And will be very easy to work with appilo that workflow will work only for your benefit. From to quickly create, send, and track docs within an approval.' , 'appilo' ),
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
            'ct_i_color',
            [
                'label' => __( 'Comment Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-testimonial-section .carousel-inner .dia-testimonial_text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_i_fonts',
                'label' => __( 'Comment Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-testimonial-section .carousel-inner .dia-testimonial_text p',
            ]
        );
        $this->add_control(
            'ct_t_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-testimonial-section .carousel-inner .dia-testimonial_meta h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_t_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-testimonial-section .carousel-inner .dia-testimonial_meta h4',
            ]
        );
        $this->add_control(
            'ct_d_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-testimonial-section .carousel-inner .dia-testimonial_meta p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ct_d_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-testimonial-section .carousel-inner .dia-testimonial_meta p',
            ]
        );
        $this->add_control(
            'ct_quote_color',
            [
                'label' => __( 'Quote Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-testimonial-section .dia-testimonial_slider-area:after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'ct_img_color',
            [
                'label' => __( 'Client Image BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-testimonial-section .carousel-indicators li' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'ct_img_active_color',
            [
                'label' => __( 'Client Active Image BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-testimonial-section .carousel-indicators li.active' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dot_bg',
            [
                'label' => __( 'Nav Dot Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_dot1',
                'label' => __( 'Dot BG 1', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-testimonial_indicator-dot .carousel-indicators2 li',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_dot2',
                'label' => __( 'Dot BG 2', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-testimonial_indicator-dot .carousel-indicators2 li:after',
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
                'selector' => '{{WRAPPER}} .dia-testimonial-section .carousel-inner .carousel-item',
            ]
        );
        $this->add_responsive_control(
            't_item_padding',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .dia-testimonial-section .carousel-inner .carousel-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .dia-testimonial-section',
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
                    'url' => get_template_directory_uri(). '/img/digital-agency/shape/tsts1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/shape/tbg1.png',
                ],
            ]
        );
        $this->add_control(
            'z_index_1',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
                    'dia-zindex-0'  => __( 'z-index-0', 'appilo' ),
                    'dia-zindex-auto'  => __( 'z-index-auto', 'appilo' ),
                    'dia-zindex-1'  => __( 'z-index-1', 'appilo' ),
                    'dia-zindex-2'  => __( 'z-index-2', 'appilo' ),
                    'dia-zindex-3'  => __( 'z-index-3', 'appilo' ),
                    'dia-zindex-4'  => __( 'z-index-4', 'appilo' ),
                    'dia-zindex-5'  => __( 'z-index-5', 'appilo' ),
                    'dia-zindex-6'  => __( 'z-index-6', 'appilo' ),
                    'dia-zindex-7'  => __( 'z-index-7', 'appilo' ),
                    'dia-zindex-8'  => __( 'z-index-8', 'appilo' ),
                    'dia-zindex-9'  => __( 'z-index-9', 'appilo' ),
                    'dia-zindex-10'  => __( 'z-index-10', 'appilo' ),
                    'dia-zindex-11'  => __( 'z-index-11', 'appilo' ),
                    'dia-zindex-22'  => __( 'z-index-22', 'appilo' ),
                    'dia-zindex-33'  => __( 'z-index-33', 'appilo' ),
                    'dia-zindex-44'  => __( 'z-index-44', 'appilo' ),
                    'dia-zindex-55'  => __( 'z-index-55', 'appilo' ),
                    'dia-zindex-66'  => __( 'z-index-66', 'appilo' ),
                    'dia-zindex-77'  => __( 'z-index-77', 'appilo' ),
                    'dia-zindex-88'  => __( 'z-index-88', 'appilo' ),
                    'dia-zindex-99'  => __( 'z-index-99', 'appilo' ),
                    'dia-zindex-111'  => __( 'z-index-111', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/shape/tbg2.png',
                ],
            ]
        );
        $this->add_control(
            'z_index_2',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
                    'dia-zindex-0'  => __( 'z-index-0', 'appilo' ),
                    'dia-zindex-auto'  => __( 'z-index-auto', 'appilo' ),
                    'dia-zindex-1'  => __( 'z-index-1', 'appilo' ),
                    'dia-zindex-2'  => __( 'z-index-2', 'appilo' ),
                    'dia-zindex-3'  => __( 'z-index-3', 'appilo' ),
                    'dia-zindex-4'  => __( 'z-index-4', 'appilo' ),
                    'dia-zindex-5'  => __( 'z-index-5', 'appilo' ),
                    'dia-zindex-6'  => __( 'z-index-6', 'appilo' ),
                    'dia-zindex-7'  => __( 'z-index-7', 'appilo' ),
                    'dia-zindex-8'  => __( 'z-index-8', 'appilo' ),
                    'dia-zindex-9'  => __( 'z-index-9', 'appilo' ),
                    'dia-zindex-10'  => __( 'z-index-10', 'appilo' ),
                    'dia-zindex-11'  => __( 'z-index-11', 'appilo' ),
                    'dia-zindex-22'  => __( 'z-index-22', 'appilo' ),
                    'dia-zindex-33'  => __( 'z-index-33', 'appilo' ),
                    'dia-zindex-44'  => __( 'z-index-44', 'appilo' ),
                    'dia-zindex-55'  => __( 'z-index-55', 'appilo' ),
                    'dia-zindex-66'  => __( 'z-index-66', 'appilo' ),
                    'dia-zindex-77'  => __( 'z-index-77', 'appilo' ),
                    'dia-zindex-88'  => __( 'z-index-88', 'appilo' ),
                    'dia-zindex-99'  => __( 'z-index-99', 'appilo' ),
                    'dia-zindex-111'  => __( 'z-index-111', 'appilo' ),
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '    <!-- Start of testimonial section
        ============================================= -->
        <section  class="dia-testimonial-section position-relative">';?>
            <div class="tst-side-shape position-absolute" data-parallax='{"y" : 50}'> <img src="<?php echo esc_url($settings['pattern_bg_1']['url'])?>" alt></div>
            <?php echo'<div class="container">
                        <div class="dia-section-title text-center text-capitalize dia-headline">
                            <span>'.$settings['section_title'].'</span>
                            <h2>'.$settings['section_heading'].'</h2>
                        </div>
                <div  class="dia-testimonial_slider-area position-relative">
                    <div class="test-shape1 position-absolute wow fadeFromRight '.$settings['z_index_1'].'" data-wow-delay="300ms" data-wow-duration="1500ms"> <img src="'.$settings['pattern_bg_2']['url'].'" alt></div>
                    <div class="test-shape2 position-absolute wow fadeFromLeft '.$settings['z_index_2'].'" data-wow-delay="300ms" data-wow-duration="1500ms"> <img src="'.$settings['pattern_bg_3']['url'].'" alt></div>
                    <div id="dia-testimonial_slide" class="carousel slide" data-ride="carousel" >
                        <div class="dia-testimonial_indicator relative-position">
                            <ol class="carousel-indicators">';
                            if ( $settings['testimonial_list'] ) {
                                foreach ($settings['testimonial_list'] as $testimonial_item) {
                                    echo '<li data-target="#dia-testimonial_slide" data-slide-to="' . $testimonial_item['client_id'] . '" class="' . $testimonial_item['testimonial_active'] . '">
                                    <img src="'.$testimonial_item['client_image']['url'].'" alt>
                                </li>';
                                }
                            }
                            echo'</ol>
                        </div>
                        <div class="carousel_preview">
                            <div class="carousel-inner relative-position">';
                        if ( $settings['testimonial_list'] ) {
                            foreach ($settings['testimonial_list'] as $testimonial_item) {
                echo '<div class="carousel-item ' . $testimonial_item['testimonial_active'] . '">
                                    <div class="dia-testimonial_content">
                                        <div class="dia-testimonial_rating ul-li">
                                            <ul>
                                                ' . $testimonial_item['feedback'] . '
                                            </ul>
                                        </div>
                                        <div class="dia-testimonial_text relative-position pera-content dia-headline">
                                            <p>' . $testimonial_item['client_comment'] . '</p>
                                        </div>
                                        <div class="qoute_mark relative-position"></div>
                                        <div class="dia-testimonial_name_designation">
                                            <div class="dia-testimonial_meta dia-headline pera-content">
                                                <h4>' . $testimonial_item['client_title'] . '</h4>
                                                <p>' . $testimonial_item['client_designation'] . '</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /slide item -->';
                                }
                            }
                           echo'</div>
                        </div>
                        <div class="dia-testimonial_indicator-dot">
                            <ol class="carousel-indicators2">';
            if ( $settings['testimonial_list'] ) {
                foreach ($settings['testimonial_list'] as $testimonial_item) {
                echo '<li data-target="#dia-testimonial_slide" data-slide-to="' . $testimonial_item['client_id'] . '" class="' . $testimonial_item['testimonial_active'] . '"></li>';
                    }
                }
                            echo'</ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of testimonial section
        ============================================= --> ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new dia_testimonial );
?>