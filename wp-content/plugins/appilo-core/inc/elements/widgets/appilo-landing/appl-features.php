<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appl_features extends Widget_Base {

    public function get_name() {
        return 'appl-features';
    }

    public function get_title() {
        return __( 'Appilo Landing Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-gallery-justified';
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
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Features', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-section .area-title span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_heading_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-section .area-title span',
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Why you will
                                choose <strong>appil</strong><span>o</span>?', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_title_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-section .area-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_title_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-section .area-title h2',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_before_bg',
                'label' => __( 'Before BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .feature-section .area-title h2:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_after_bg',
                'label' => __( 'After BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .feature-section .area-title h2:after',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_list_sec',
            [
                'label' => __( 'Features List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_photo', [
                'label' => __( 'Feature Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/f1.png',
                ],
            ]
        );
        $repeater->add_control(
            'feature_title',
            [
                'label' => __( 'Feature Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Easy to Customize', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_info',
            [
                'label' => __( 'Feature Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Well structured and easy to customize <br>
                            code. Spend less time to customize.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => 'Easy to Customize',
                    ],
                    [
                        'feature_title' => 'Easy to Customize',
                    ],
                    [
                        'feature_title' => 'Easy to Customize',
                    ],
                    [
                        'feature_title' => 'Easy to Customize',
                    ],
                    [
                        'feature_title' => 'Easy to Customize',
                    ],
                    [
                        'feature_title' => 'Easy to Customize',
                    ],

                ],
                'title_field' => '{{{ feature_title }}}',
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
            'feature_title_color',
            [
                'label' => __( 'Feature Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appl-feature-content h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_title_h_color',
            [
                'label' => __( 'Feature Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appl-feature-content:hover h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_fonts',
                'label' => __( 'Feature Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-feature-content h3',
            ]
        );
        $this->add_control(
            'feature_info_color',
            [
                'label' => __( 'Feature Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appl-feature-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_info_h_color',
            [
                'label' => __( 'Feature Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appl-feature-content:hover p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_info_fonts',
                'label' => __( 'Feature Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-feature-content p',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'f_box_h_shadow',
                'label' => __( 'Feature Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-feature-content:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'f_box_h_bg',
                'label' => __( 'Feature Box Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appl-feature-content:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_main_shadow',
                'label' => __( 'Main Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .feature-content-item',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_boxes_bg',
                'label' => __( 'All Box', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .feature-content-item',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [  'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-feature-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .app-feature-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of feature section
    ============================================= -->
<section  class="app-feature-section">
    <div class="container">
        <div class="area-title appl-headline text-center pera-content">
            <span>'.$settings['section_heading'].'</span>
            <h2>'.$settings['section_title'].'</h2>
        </div>
        <div class="feature-content-item">
            <div class="row">';
                    if ( $settings['feature_list'] ) {
                        foreach ($settings['feature_list'] as $feature) {
                            echo '<div class="col-lg-4 col-sm-6 '.$feature['_id'].'" data-aos="fade-left" data-aos-delay="'.$feature['animate_delay'].'">
                                <div class="appl-feature-content appl-headline pera-content">
                                    <img src="'.$feature['feature_photo']['url'].'" alt>
                                    <h3>'.$feature['feature_title'].'</h3>
                                    <p>'.$feature['feature_info'].'</p>
                                </div>
                            </div>
                            <!-- /feature-item -->';
                        }
                    }
            echo'</div>
        </div>
    </div>
</section>
<!-- End of feature section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appl_features );
?>