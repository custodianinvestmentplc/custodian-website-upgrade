<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class cyber_security_testimonial extends Widget_Base {

    public function get_name() {
        return 'cyber-security-testimonial';
    }

    public function get_title() {
        return __( 'Cyber Security Testimonial', 'appilo' );
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
            'animate_delay', [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook',
                    'library' => 'brand',
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
                    ], [
                        'title' => __( 'Great value of money!', 'appilo' ),
                    ], [
                        'title' => __( 'Great value of money!', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
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
            'style_switcher_1',
            [
                'label' => __( 'Style Switcher', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'multiple' => true,
                'options' => [
                    'style1'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
                'default' => 'style1',
            ]
        );
        $this->add_control(
            'name_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-auhtor-name h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'name_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-auhtor-name h4',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-auhtor-name span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-auhtor-name span',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-text p',
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-img .testimonial-from i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-img .testimonial-from svg' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-img .testimonial-from svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-img .testimonial-from svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-img .testimonial-from i, 
                    {{WRAPPER}} .cyb-testimonial-img-text .cyb-testimonial-img-author .cyb-testimonial-img .testimonial-from' => 'color: {{VALUE}}',
                ],
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
                'selector' => '{{WRAPPER}} .cyb-testimonial-slider .owl-dots .owl-dot',
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
                'selector' => '{{WRAPPER}} .cyb-testimonial-slider .owl-dots .owl-dot.active',
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
                    '{{WRAPPER}} .cyb-testimonial-section .cyb-testimonial-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .cyb-testimonial-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'margin',
            [
                'label' => __( 'Content Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .cyb-testimonial-img-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    $style = $settings['style_switcher_1'];
    if($style == 'style1'){

        echo '<!-- Start of testimonial section
    ============================================= -->         
    <section  class="cyb-testimonial-section position-relative">
        <div class="container">
            <div class="cyb-testimonial-content">
                <div id="cyb-testimonial-id" class="cyb-testimonial-slider owl-carousel">';
        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonial) {
                $link = get_that_link($testimonial['link']);
                echo '<div class="cyb-testimonial-img-text cyb-headline pera-content wow fadeFromUp " data-wow-delay="' . $testimonial['animate_delay'] . '" data-wow-duration="1500ms">
                        <div class="cyb-testimonial-img-author clearfix">
                            <div class="cyb-testimonial-img float-left position-relative">
                                <img src="' . $testimonial['image']['url'] . '" alt>
                                <div class="testimonial-from">';
                \Elementor\Icons_Manager::render_icon($testimonial['icon'], ['aria-hidden' => 'true']);
                echo '</div>
                            </div>
                            <div class="cyb-testimonial-auhtor-name">
                                <h4><a ' . $link . '>' . $testimonial['name'] . '</a></h4>
                                <span>' . $testimonial['designation'] . '</span>
                            </div> 
                        </div>
                        <div class="cyb-testimonial-text">
                            <h3>' . $testimonial['title'] . '</h3>
                            <p>' . $testimonial['info'] . '</p>
                        </div> 
                    </div>';
            }
        }
        echo '</div>
            </div>
        </div>
    </section>
<!-- End of testimonial section
    ============================================= -->  ';
    }else{
        echo '<!-- Start of testimonial section
    ============================================= -->         
    <section  class="cyb-testimonial-section position-relative">
        <div class="container">
           
            <div class="cyb-testimonial-content">
                <div class="cyb-testimonial-single">
                 <div class="row">';
        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonial) {
                $link = get_that_link($testimonial['link']);
                echo '<div class="col-md-4">
                        <div class="cyb-testimonial-img-text cyb-headline pera-content wow fadeFromUp" data-wow-delay="' . $testimonial['animate_delay'] . '" data-wow-duration="1500ms">
                            <div class="cyb-testimonial-img-author clearfix">
                                <div class="cyb-testimonial-img float-left position-relative">
                                    <img src="' . $testimonial['image']['url'] . '" alt>
                                    <div class="testimonial-from">';
                    \Elementor\Icons_Manager::render_icon($testimonial['icon'], ['aria-hidden' => 'true']);
                    echo '</div>
                                </div>
                                <div class="cyb-testimonial-auhtor-name">
                                    <h4><a ' . $link . '>' . $testimonial['name'] . '</a></h4>
                                    <span>' . $testimonial['designation'] . '</span>
                                </div> 
                            </div>
                            <div class="cyb-testimonial-text">
                                <h3>' . $testimonial['title'] . '</h3>
                                <p>' . $testimonial['info'] . '</p>
                            </div> 
                        </div>
                    </div>
                    ';
            }
        }
        echo '</div>
            </div>
        </div>
        </div>
    </section>
<!-- End of testimonial section
    ============================================= -->  ';
    }
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new cyber_security_testimonial );
?>