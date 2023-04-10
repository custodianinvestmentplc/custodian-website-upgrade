<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class web_app_testimonial extends Widget_Base {

    public function get_name() {
        return 'web-app-testimonial';
    }

    public function get_title() {
        return __( 'Web App Testimonial', 'appilo' );
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
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our client’s testimonials  <span>for company progress</span>', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-section-title h2',
            ]
        );
        $this->add_control(
            'section_image', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/tst2.png',
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
            'info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their jobs.' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/tst1.jpg',
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
                        'name' => __( 'Alex D. Denz', 'appilo' ),
                    ],
                     [
                        'name' => __( 'Alex D. Denz', 'appilo' ),
                    ],
                     [
                        'name' => __( 'Alex D. Denz', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ name }}}',
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
            'name_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-text .web-app-testimonial-author h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'name_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-text .web-app-testimonial-author h4',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-text .web-app-testimonial-author span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-text .web-app-testimonial-author span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-text p',
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
                'selector' => '{{WRAPPER}} .web-app-testimonial-section .web-app-testimonial-slider-wrap .owl-dots .owl-dot',
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
                'selector' => '{{WRAPPER}} .web-app-testimonial-section .web-app-testimonial-slider-wrap .owl-dots .owl-dot.active',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Image Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'img_border',
                'label' => __( 'Image Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-img',
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .web-app-testimonial-img-text .web-app-testimonial-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .web-app-testimonial-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of testimonial section
    ============================================= -->
    <section  class="web-app-testimonial-section position-relative">
        <span class="web-app-testimonial-side-img  wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
            <img src="'.$settings['section_image']['url'].'" alt>
        </span>
        <div class="container">
            <div class="web-app-textimonial-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="web-app-section-title web-app-headline  wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <h2>'.$settings['section_title'].'</h2>
                        </div>
                        <div id="web-app-testimoial-slide" class="web-app-testimonial-slider-wrap owl-carousel position-relative  wow fadeFromRight" data-wow-delay="600ms" data-wow-duration="1000ms">';
                    if ( $settings['testimonial_list'] ) {
                        foreach ($settings['testimonial_list'] as $testimonial) {
                            $link = get_that_link( $testimonial['link']);
                        echo '<div class="web-app-testimonial-img-text  position-relative">
                                <div class="web-app-testimonial-img position-relative">
                                     <img src="' . $testimonial['image']['url'] . '" alt>
                                </div>
                                <div class="web-app-testimonial-text web-app-headline  pera-content">
                                    <p>' . $testimonial['info'] . '</p>
                                    <div class="web-app-testimonial-author">
                                        <h4><a '.$link.'>' . $testimonial['name'] . '</a></h4>
                                        <span>' . $testimonial['designation'] . '</span>
                                    </div>
                                </div>
                            </div>';
                            }
                        }
            echo'       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End of testimonial section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new web_app_testimonial );
?>