<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appl_testimonial extends Widget_Base {

    public function get_name() {
        return 'appl-testimonial';
    }

    public function get_title() {
        return __( 'Appilo Landing Testimonial', 'appilo' );
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
        
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial_list_sec',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'testimonial_photo', [
                'label' => __( 'Testimonial Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/ev.png',
                ],
            ]
        );
        $repeater->add_control(
            'testimonial_title',
            [
                'label' => __( 'Testimonial Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Abekkach13', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'testimonial_info',
            [
                'label' => __( 'Testimonial Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Great Theme! Nice design, slick looking and the support has been great with any questions I have', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'testimonial_user',
            [
                'label' => __( 'Testimonial User', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'ThemeForest User', 'appilo' ),
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
            'testimonial_list',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'testimonial_title' => 'Abekkach13',
                    ],
                    [
                        'testimonial_title' => 'Abekkach13',
                    ],
                    [
                        'testimonial_title' => 'Abekkach13',
                    ],
                    [
                        'testimonial_title' => 'Abekkach13',
                    ],
                    [
                        'testimonial_title' => 'Abekkach13',
                    ],
                    [
                        'testimonial_title' => 'Abekkach13',
                    ],

                ],
                'title_field' => '{{{ testimonial_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_content',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'testimonial_title_color',
            [
                'label' => __( 'Testimonial Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review-inner-box .buyer-inner .buyer-name-degi .buyer-name' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_title_fonts',
                'label' => __( 'Testimonial Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .review-inner-box .buyer-inner .buyer-name-degi .buyer-name',
            ]
        );
        $this->add_control(
            'testimonial_info_color',
            [
                'label' => __( 'Testimonial Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review-inner-box .review-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_info_fonts',
                'label' => __( 'Testimonial Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .review-inner-box .review-text',
            ]
        );
        $this->add_control(
            'testimonial_user_color',
            [
                'label' => __( 'Testimonial User Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review-inner-box .buyer-inner .buyer-name-degi .buyer-degi' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_user_fonts',
                'label' => __( 'Testimonial User Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .review-inner-box .buyer-inner .buyer-name-degi .buyer-degi',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 't_box_shadow',
                'label' => __( 'Testimonial Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .review-inner-box',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 't_box_bg',
                'label' => __( 'Testimonial Box BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .review-inner-box',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_active',
                'label' => __( 'Nav Active', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .review-slide-area.owl-carousel .owl-dots .owl-dot.active',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_gen',
                'label' => __( 'Nav Normal', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .review-slide-area.owl-carousel .owl-dots .owl-dot',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appl-review-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of Reviews section
    ============================================= -->
<section  class="appl-review-section">
    <div class="container">
        <div id="ln-review-slide" class="review-slide-area owl-carousel">';
        if ( $settings['testimonial_list'] ) {
            foreach ($settings['testimonial_list'] as $testimonials) {
                echo '<div class="review-inner-box '.$testimonials['_id'].'">
                <div class="review-rate ul-li">
                    <ul>
                        '.$testimonials['feedback'].'
                    </ul>
                </div>
                <div class="review-text">
                   '.$testimonials['testimonial_info'].'
                </div>
                <div class="buyer-inner">
                    <div class="buyer-thumb float-left">
                        <img src="'.$testimonials['testimonial_photo']['url'].'" alt>
                    </div>
                    <div class="buyer-name-degi">
                        <span class="buyer-name">'.$testimonials['testimonial_title'].'</span>
                        <span class="buyer-degi">'.$testimonials['testimonial_user'].'</span>
                    </div>
                </div>
            </div>';
            }
        }
       echo' </div>
    </div>
</section>
<!-- End of Reviews section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appl_testimonial );
?>