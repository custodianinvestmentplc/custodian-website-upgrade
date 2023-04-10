<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ch1_testimonial extends Widget_Base {

    public function get_name() {
        return 'cloud-hosting-testimonial';
    }

    public function get_title() {
        return __( 'Cloud Hosting Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-posts-carousel';
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
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'testimonial', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'vendor_name',
            [
                'label' => __( 'Vendor Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Anna Kendrick', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'active',
            [
                'label' => __( 'Active', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Inactive', 'appilo' ),
                'return_value' => 'active',
                'default' => 'active',
            ]
        );
        $repeater->add_control(
            'vendor_comment_title',
            [
                'label' => __( 'Vendor Comment Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '“Awesome Support!”', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'vendor_comment',
            [
                'label' => __( 'Vendor Comment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Perspiciatis unde omnis iste natus error sit vo luptatem accusantium doloremque laudantium, totam rem aperiam.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'vendor_info',
            [
                'label' => __( 'Vendor Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Ceo, Hosting', 'appilo' ),
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
            'vendor_image', [
                'label' => __( 'Vendor Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/cloud-hosting/review/r1.jpg',
                ],
            ]
        );
        $this->add_control(
            'testimonials_list',
            [
                'label' => __( 'Testimonials List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'vendor_name' => __( 'Anna Kendrick', 'appilo' ),
                    ],
                    [
                        'vendor_name' => __( 'Clavin harris', 'appilo' ),
                    ],
                    [
                        'vendor_name' => __( 'Anna Kendrick', 'appilo' ),
                    ],
                    [
                        'vendor_name' => __( 'Clavin harris', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ vendor_name }}}',
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
            'te_style',
            [
                'label' => __( 'Testimonial Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'simple',
                'options' => [
                    'simple'  => __( 'Simple', 'appilo' ),
                    'modern' => __( 'Modern', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'ibra',
            [
                'label' => __( 'Image Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'img_border',
                'label' => __( 'Image Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper .carousel-image img, 
                {{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper .caption img',
            ]
        );
        $this->add_responsive_control(
            'img_border_radius',
            [
                'label' => __( 'Image Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper .carousel-image img, 
                    {{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper .caption img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper h3, 
                    {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper h3, 
                {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper h3',
            ]
        );
        $this->add_control(
            'co_title_color',
            [
                'label' => __( 'Comment Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'co_title_fonts',
                'label' => __( 'Comment Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper h3',
            ]
        );
        $this->add_control(
            'testimonial_icon',
            [
                'label' => __( 'Testimonial Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_icon_be',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper h3::before',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper .position, 
                    {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper .position' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper .position, 
                {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper .position',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper p, 
                    {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper p, 
                {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper p',
            ]
        );
        $this->add_control(
            'hover_testi',
            [
                'label' => __( 'Testimonial Item Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_item_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper::before, 
                {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper',
            ]
        );
        $this->add_responsive_control(
            'item_padding',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper, 
                    {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'itabra',
            [
                'label' => __( 'Item Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper, 
                {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper',
            ]
        );
        $this->add_responsive_control(
            'item_border_radius',
            [
                'label' => __( 'Item Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-review-section .review-carousel .review-wrapper, 
                {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .carousel-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'testi_nav',
            [
                'label' => __( 'Testimonial Nav', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_nav',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .host-app-review-section .review-carousel .owl-dots .owl-dot, 
                {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .owl-dots .owl-dot',
            ]
        );
        $this->add_control(
            'testi_nav_a',
            [
                'label' => __( 'Testimonial Nav Active', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_nav_a',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .host-app-review-section .review-carousel .owl-dots .owl-dot.active, 
                {{WRAPPER}} .host-app-testimonial-section #testimonial-carousel-two .owl-dots .owl-dot.active',
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $testimonial_style = $settings['te_style'];

    if ( $testimonial_style == 'simple' ) {
        echo '<section  class="host-app-review-section">
    <div class="container text-center">
        <div class="review-carousel owl-carousel owl-theme">';
        if ($settings['testimonials_list']) {
            foreach ($settings['testimonials_list'] as $testimonials) {
                echo '<div class="review-wrapper item dynamic-id-' . $testimonials['_id'] . '">
                <span class="caption"><img src="' . $testimonials['vendor_image']['url'] . '" alt></span>
                <h3>' . $testimonials['vendor_name'] . '</h3>
                <span class="position">' . $testimonials['vendor_info'] . '</span>
                
                <ul class="review">
                     ' . $testimonials['vendor_rating'] . '
                </ul>

                <p>' . $testimonials['vendor_comment'] . '</p>
            </div>';
            }
        }
        echo '</div> <!-- review-container -->
    </div>
</section> <!-- review-section -->';
    }
    if ( $testimonial_style == 'modern' ) {
echo '<section  class="host-app-testimonial-section">
        <div class="container">
           <div id="testimonial-carousel-two" class="testimonial-slider-two owl-carousel">';
        if ($settings['testimonials_list']) {
            foreach ($settings['testimonials_list'] as $testimonials) {
                echo ' <div class="carousel-wrapper dynamic-id-' . $testimonials['_id'] . '">
                    <span class="carousel-image"><img src="' . $testimonials['vendor_image']['url'] . '" alt></span>
                    <h3>' . $testimonials['vendor_comment_title'] . '</h3>
                    <p>' . $testimonials['vendor_comment'] . '</p>
                    <span class="title">' . $testimonials['vendor_name'] . '</span>
                    <span class="position">' . $testimonials['vendor_info'] . '</span>
                </div> <!-- carousel-wrapper -->';
            }
        }
                echo'</div>
            </div>
        </div>
    </section>';
    }
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new ch1_testimonial );
?>