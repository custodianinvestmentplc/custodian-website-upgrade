<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_testimonial extends Widget_Base {

    public function get_name() {
        return 'saas-testimonial';
    }

    public function get_title() {
        return __( 'SaaS Testimonial', 'appilo' );
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
                'default' => __( 'Nepoli Dewan', 'appilo' ),
            ]
        );

        $repeater->add_control(
            'vendor_comment',
            [
                'label' => __( 'Vendor Comment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Lorem ipsum dolor sit amet consecter tony adipiscing elitsed do eiusmodi tempor roar incididunt ut laboreet dolore magna as the opposed to using. Type of partnership or Malta. The limited todot liability.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'vendor_info',
            [
                'label' => __( 'Vendor Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'SEO Manager', 'appilo' ),
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
                    'url' => get_template_directory_uri(). '/img/saas/testimonial/tst1.png',
                ],
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
            'testimonials_list',
            [
                'label' => __( 'Testimonials List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'vendor_name' => __( 'Nepoli Dewan', 'appilo' ),
                        'vendor_info' => __( 'SEO Manager', 'appilo' ),
                        'vendor_comment' => __( 'Lorem ipsum dolor sit amet consecter tony adipiscing elitsed do eiusmodi tempor roar incididunt ut laboreet dolore magna as the opposed to using. Type of partnership or Malta. The limited todot liability.', 'appilo' ),
                        'vendor_image' => get_template_directory_uri(). '/img/saas/testimonial/tst1.png',
                    ],
                    [
                        'vendor_name' => __( 'Nepoli Dewan', 'appilo' ),
                        'vendor_info' => __( 'SEO Manager', 'appilo' ),
                        'vendor_comment' => __( 'Lorem ipsum dolor sit amet consecter tony adipiscing elitsed do eiusmodi tempor roar incididunt ut laboreet dolore magna as the opposed to using. Type of partnership or Malta. The limited todot liability.', 'appilo' ),
                        'vendor_image' => get_template_directory_uri(). '/img/saas/testimonial/tst1.png',
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
            'hover_testi',
            [
                'label' => __( 'Testimonial Hover', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_hover',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .testimonial_content .testimonial_text:before',
            ]
        );
        $this->add_control(
            'testi_bg',
            [
                'label' => __( 'Testimonial Left BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_left_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .testimonial_indicator',
            ]
        );
        $this->add_control(
            'testi_nav',
            [
                'label' => __( 'Testimonial Nav Hover', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_nav',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .testimonial_slider .carousel-control-prev:hover, 
                                {{WRAPPER}} .testimonial_slider .carousel-control-next:hover',
            ]
        );
        $this->add_control(
            'testi_nav_icon_color',
            [
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial_slider .carousel-control-prev, .testimonial_slider .carousel-control-next' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo'<section  class="testimonial_section">
    <div class="container">
        <!-- /section-title -->
        <div  class="testimonial_slider">
            <div id="testimonial_slide" class="carousel slide" data-ride="carousel">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="testimonial_indicator relative-position">
                            <ol class="carousel-indicators">';

                            if ( $settings['testimonials_list'] ) {
                                foreach ($settings['testimonials_list'] as $testimonials) {
                               echo' <li data-target="#testimonial_slide" data-slide-to="'.$testimonials['client_id'].'" class="'.$testimonials['testimonial_active'].'">
                                    <img src="'.$testimonials['vendor_image']['url'].'" alt>
                                </li>';
                                    }
                                }

                            echo'</ol>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="carousel_preview">
                            <div class="carousel-inner relative-position">';
                        if ( $settings['testimonials_list'] ) {
                            foreach ($settings['testimonials_list'] as $testimonials) {
                               echo'<div class="carousel-item '.$testimonials['testimonial_active'].'">
                                    <div class="testimonial_content">
                                        <div class="testimonial_text relative-position pera-content">
                                            <p>'.$testimonials['vendor_comment'].'</p>
                                            <div class="testimonial_rating ul-li">
                                                <ul>
                                                    '.$testimonials['vendor_rating'].'
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="qoute_mark relative-position"></div>
                                        <div class="testimonial_name_designation">
                                            <div class="testimonial_img float-left">
                                                <img src="'.$testimonials['vendor_image']['url'].'" alt>
                                            </div>
                                            <div class="testimonial_meta headline pera-content">
                                                <h4>'.$testimonials['vendor_name'].'</h4>
                                                <p>'.$testimonials['vendor_info'].'</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /slide item -->';
                                }
                            }
                            echo'</div>
                            <a class="carousel-control-prev" href="#testimonial_slide" role="button" data-slide="prev"></a>
                            <a class="carousel-control-next" href="#testimonial_slide" role="button" data-slide="next"></a>
                            <!-- /carosel arrow -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_testimonial );
?>