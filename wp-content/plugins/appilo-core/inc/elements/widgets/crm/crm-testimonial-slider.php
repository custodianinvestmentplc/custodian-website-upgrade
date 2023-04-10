<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crm_testimonial_slider extends Widget_Base {

    public function get_name() {
        return 'crm-testimonial-slider';
    }

    public function get_title() {
        return __( 'CRM Testimonial Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-blockquote';
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
            'testi_lists',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'name',
            [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Alex D. Denz', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'designation',
            [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Founder, Alex Co', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their and we’re running a jobs. Our hosting costs 
                                have decreased by over 90% and we’re running at about 25% of our capacity 
                                allowing us to quickly scale.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/crm/tst1.jpg',
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
                        'name' => 'Alex D. Denz',
                    ],
                    [
                        'name' => 'Alex D. Denz',
                    ],
                    [
                        'name' => 'Alex D. Denz',
                    ],

                ],
                'title_field' => '{{{name}}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testi_list_style',
            [
                'label' => __( 'Testimonial List Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .crm-testimonial-text .crm-testi-author h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .crm-testimonial-text .crm-testi-author h3',
            ]
        );
        $this->add_control(
            'mbdescasdslogo',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'des_bg',
                'label' => __( 'Des BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .crm-testimonial-text .crm-testi-author span',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .crm-testimonial-text .crm-testi-author span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .crm-testimonial-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .crm-testimonial-text p',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .owl-nav .owl-prev, 
                    {{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .owl-nav .owl-next' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .owl-nav .owl-prev:hover, 
                    {{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .owl-nav .owl-next:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mbcasdslogo',
            [
                'label' => __( 'Nav Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_bg',
                'label' => __( 'Nav BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .owl-nav .owl-prev, 
                    {{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .owl-nav .owl-next',
            ]
        );
        $this->add_control(
            'mbcasdslogo_h',
            [
                'label' => __( 'Nav Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_h_bg',
                'label' => __( 'Nav Hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .owl-nav .owl-prev:after, 
                    {{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .owl-nav .owl-next:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'label' => __( 'Image Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .crm-testimonial-img',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Image Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-testimonial-section .crm-testimonial-area .crm-testimonial-img',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Section Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'section_image', [
                'label' => __( 'Section BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/crm/shape/crm-map.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-testimonial-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-testimonial-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Start of testimonial section
    ============================================= -->        
    <section  class="crm-testimonial-section position-relative">
        <span class="crm-testimonial-bg position-absolute text-center"> <img src="' . $settings['section_image']['url'] . '" alt></span>
        <div class="container">
            <div class="crm-testimonial-wrapper">
                <div id="crm-testimonial-id" class="crm-testimonial-area owl-carousel">';
        if ( $settings['testimonial_list'] ) {
            foreach ($settings['testimonial_list'] as $testimonial) {

                echo '<div class="crm-testimonial-content text-center">
                        <div class="crm-testimonial-img">
                            <img src="' . $testimonial['image']['url'] . '" alt>
                        </div>
                        <div class="crm-testimonial-text pera-content crm-headline">
                            <p>' . $testimonial['info'] . '</p>
                            <div class="crm-testi-author">
                                <h3>' . $testimonial['name'] . '</h3>
                                <span>' . $testimonial['designation'] . '</span>
                            </div>
                        </div>
                    </div>';
            }
        }

        echo'</div>
            </div>
        </div>
    </section>
<!-- End of testimonial section
    ============================================= --> ';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crm_testimonial_slider );
?>