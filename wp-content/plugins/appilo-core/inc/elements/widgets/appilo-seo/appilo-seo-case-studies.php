<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_case_studie extends Widget_Base {

    public function get_name() {
        return 'appilo-seo-case-studie';
    }

    public function get_title() {
        return __( 'Appilo SEO Case Studies', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slider-device';
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
            'case_studies',
            [
                'label' => __( 'Case Studies', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Universal Services - Heatprofing', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'photo', [
                'label' => __( 'Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-seo/case/cs1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'designation',
            [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'MARKETING, SEO', 'appilo' ),
            ]
        );
        $this->add_control(
            'study_list',
            [
                'label' => __( 'Study List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Universal Services - Heatprofing', 'appilo' ),
                        'designation' => __( 'MARKETING, SEO', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Universal Services - Heatprofing', 'appilo' ),
                        'designation' => __( 'MARKETING, SEO', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Universal Services - Heatprofing', 'appilo' ),
                        'designation' => __( 'MARKETING, SEO', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Universal Services - Heatprofing', 'appilo' ),
                        'designation' => __( 'MARKETING, SEO', 'appilo' ),
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
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-case-study-img-text .appseo-case-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-case-study-img-text:hover .appseo-case-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-case-study-img-text .appseo-case-text h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-case-study-img-text .appseo-case-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'des_hover_color',
            [
                'label' => __( 'Designation Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-case-study-img-text:hover .appseo-case-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-case-study-img-text .appseo-case-text span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'overlay_bg',
                'label' => __( 'Overlay Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-case-study-img-text .appseo-case-img:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-case-study-img-text .appseo-case-text',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_hover_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-case-study-img-text:hover .appseo-case-text',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Section Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-case-study-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-case-study-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Start of case study section
        ============================================= --> 
        <section  class="appseo-case-study-section">
             <div class="appseo-case-study-content">';
        if ( $settings['study_list'] ) {
            foreach ($settings['study_list'] as $study) {
                echo '<div class="appseo-case-study-img-text position-relative ' . $study['_id'] . '">
                    <div class="appseo-case-img">
                        <img src="' . $study['photo']['url'] . '" alt>
                    </div>
                    <div class="appseo-case-text appseo-headline">
                        <span>' . $study['designation'] . '</span>
                        <h3>' . $study['title'] . '</h3>
                    </div>
                </div>';
            }
        }
           echo' </div>
        </section>
    <!-- End of case study section
        ============================================= -->           ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_case_studie );
?>