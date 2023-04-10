<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class email_marketing_testimonial extends Widget_Base {

    public function get_name() {
        return 'email-marketing-testimonial';
    }

    public function get_title() {
        return __( 'Email Marketing Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
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
            'url', [
                'label' => __( 'Video Link', 'appilo' ),
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
            'section_image', [
                'label' => __( 'Video Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/demo-images/vp1.jpg',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'name', [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Lina Johnson' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'designation', [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Executive Manager' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Great value of money!' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“Get your documents out the door fast to keep deals moving with automatic notifications, on-the-fly editing, and integrated.”' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/tst1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'vendor_rating',
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
            'link', [
                'label' => __( 'Link', 'appilo' ),
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
            'testimonial_list',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Great value of money!', 'appilo' ),
                    ], [
                        'title' => __( 'Great value of money!', 'appilo' ),
                    ], [
                        'title' => __( 'Great value of money!', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->add_control(
            'testimonial_margin',
            [
                'label' => __( 'Testimonial Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .em-testimonial-img-text.text-center.position-relative' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'testimonial_style',
            [
                'label' => __( 'Testimonial Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'multiple' => true,
                'options' => [
                    'style_1'  => __( 'Style 1', 'appilo' ),
                    'style_2'  => __( 'Style 2', 'appilo' ),
                ],
                'default' => [ 'style_1', 'description' ],
            ]
        );
        $this->add_control(
            'name_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-testimonial-img-text .em-testimonial-text .em-testimonial-author h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'name_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-testimonial-img-text .em-testimonial-text .em-testimonial-author h4',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-testimonial-img-text .em-testimonial-text .em-testimonial-author span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-testimonial-img-text .em-testimonial-text .em-testimonial-author span',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-testimonial-img-text .em-testimonial-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-testimonial-img-text .em-testimonial-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-testimonial-img-text .em-testimonial-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .em-testimonial-img-text .em-testimonial-text p',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .em-testimonial-slider .owl-dots .owl-dot',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_active',
                'label' => __( 'Active Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .em-testimonial-slider .owl-dots .owl-dot.active',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_box_bg',
                'label' => __( 'Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .cyb-testimonial-img-text',
            ]
        );
        $this->add_control(
            'testimonial_quotes_color',
            [
                'label' => __( 'Testimonial Quotes Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .em-testimonial-img-text:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'feature_box_padding',
            [
                'label' => __( 'Box Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-testimonial-img-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-testimonial-img-text',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_h_shadow',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-testimonial-img-text:hover',
            ]
        );
        $this->add_responsive_control(
            'wrapper_padding',
            [
                'label' => __( 'Wrapper Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .em-testimonial-warp' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .em-video-testimonial-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    $style = $settings ['testimonial_style'];
    if($style == 'style_1'){
        echo '<!-- Start of Video testimonial section
    ============================================= -->          
    <section  class="em-video-testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="em-video-wrap position-relative">
                        <img src="' . $settings['section_image']['url'] . '" alt>
                        <div class="em-video-play-btn text-center position-absolute">
                            <a class="video_box" href="' . $settings['url']['url'] . '"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="em-testimonial-warp">
                        <div id="em-testimonial-slide-id" class="em-testimonial-slider owl-carousel">';
        if ( $settings['testimonial_list'] ) {
            foreach ($settings['testimonial_list'] as $testimonial) {
                $link = get_that_link( $testimonial['link']);
                echo '<div class="em-testimonial-img-text text-center position-relative">
                                <div class="em-testimonial-img position-relative">
                                    <img src="' . $testimonial['image']['url'] . '" alt>
                                </div>
                                <div class="em-testimonial-text em-headline ul-li pera-content">
                                     <h3>' . $testimonial['title'] . '</h3>
                                    <p>' . $testimonial['info'] . '</p>
                                    <ul>
                                         '.$testimonial['vendor_rating'].'
                                    </ul>
                                    <div class="em-testimonial-author">
                                        <h4><a '.$link.'>' . $testimonial['name'] . '</a></h4>
                                        <span>' . $testimonial['designation'] . '</span>
                                    </div>
                                </div>
                            </div>';
            }
        }
        echo'</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End of Video testimonial section
    ============================================= -->     ';
    }else{
        echo '<!-- Start of Video testimonial section
    ============================================= -->          
    <section  class="em-video-testimonial-section">
        <div class="container">
            <div class="row">
            
                
                <div class="col-lg-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="em-testimonial-warp">
                        <div class="em-testimonial-slider">
                        <div class="row">';

        if ( $settings['testimonial_list'] ) {
            foreach ($settings['testimonial_list'] as $testimonial) {
                $link = get_that_link( $testimonial['link']);
                echo '<div class="col-md-6">
                        <div class="em-testimonial-img-text text-center position-relative">
                                <div class="em-testimonial-img position-relative">
                                    <img src="' . $testimonial['image']['url'] . '" alt>
                                </div>
                                <div class="em-testimonial-text em-headline ul-li pera-content">
                                     <h3>' . $testimonial['title'] . '</h3>
                                    <p>' . $testimonial['info'] . '</p>
                                    <ul>
                                         '.$testimonial['vendor_rating'].'
                                    </ul>
                                    <div class="em-testimonial-author">
                                        <h4><a '.$link.'>' . $testimonial['name'] . '</a></h4>
                                        <span>' . $testimonial['designation'] . '</span>
                                    </div>
                                </div>
                        </div>
                       </div>';
            }
        }
                    echo'</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End of Video testimonial section
    ============================================= -->     ';
    }


    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new email_marketing_testimonial );
?>