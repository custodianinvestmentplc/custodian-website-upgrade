<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appl_element_section extends Widget_Base {

    public function get_name() {
        return 'appl-element-section';
    }

    public function get_title() {
        return __( 'Appilo Element Section', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-review';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content Section', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'brand_logo', [
                'label' => __( 'Brand Logo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/e4.png',
                ],
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Built with Elementor', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appl-element-section .element-text h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-element-section .element-text h2',
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Elementor has the fastest, most intuitive editor in WordPress.
                        Responsive Editing. Switch to mobile view, and tweak every element to make it look perfect on any device.', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_info_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appl-element-section .element-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_info_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-element-section .element-text p',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'btn_sec',
            [
                'label' => __( 'Button', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<strong>50+ </strong> <br> Premium Elements <br> For Elementor', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_text_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appl-element-section .element-text .element-bg .element_content' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_text_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-element-section .element-text .element-bg .element_content',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appl-element-section .element-text .element-bg',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_shadow',
                'label' => __( 'Button Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-element-section .element-text .element-bg',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_image',
            [
                'label' => __( 'Content Image', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'content_img_1', [
                'label' => __( 'Content Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/e3.png',
                ],
            ]
        );
        $this->add_control(
            'content_img_2', [
                'label' => __( 'Content Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/e2.png',
                ],
            ]
        );
        $this->add_control(
            'content_img_3', [
                'label' => __( 'Content Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/e1.png',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'styling',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appl-element-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
   echo '<!-- Start of element section
   ============================================= -->
<section  class="appl-element-section">
    <div class="container-fluid">
        <div class="row '.$settings['style_switcher'].'">
            <div class="col-lg-8  col-md-12">
                <div class="element-image relative-position">
                    <img src="'.$settings['content_img_1']['url'].'" alt>
                    <div class="ele-img_1" data-aos="zoom-out-right" data-aos-delay="600"><img src="'.$settings['content_img_2']['url'].'" alt></div>
                    <div class="ele-img_2" data-aos="zoom-out-left" data-aos-delay="600"><img src="'.$settings['content_img_3']['url'].'" alt></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="element-text appl-headline pera-content">
                    <div class="element_img">
                        <img src="'.$settings['brand_logo']['url'].'" alt>
                    </div>
                    <h2> '.$settings['section_title'].'</h2>
                    <p>'.$settings['section_info'].'</p>
                    <div class="element-bg relative-position  text-center">
                        <div class="element_content">'.$settings['btn_text'].'</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of element section
   ============================================= -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appl_element_section );
?>