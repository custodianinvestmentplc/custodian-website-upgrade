<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hrm_service extends Widget_Base {

    public function get_name() {
        return 'hrm-service';
    }

    public function get_title() {
        return __( 'HRM Service', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-info-box';
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
            'feature_box',
            [
                'label' => __( 'Service Item', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Manage Sales', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our visual sales pipeline', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_image', [
                'label' => __( 'Feature Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/icon/f3.png',
                ],
            ]
        );
        $repeater->add_control(
            'f_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'f_details',
            [
                'label' => __( 'Details', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( ' <li>Easily customize your sales</li>
                                    <li>Keep track of hours worked in</li>
                                    <li>Our mobile apps let you access</li>
                                    <li>Best CRM software of 2019</li>
                                    <li>Top 7 web productivity tools</li>', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Services List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'f_heading' => __( 'Manage Sales', 'appilo' ),
                    ],
                    [
                        'f_heading' => __( 'Manage Sales', 'appilo' ),
                    ],
                    [
                        'f_heading' => __( 'Manage Sales', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ f_heading }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_styles',
            [
                'label' => __( 'Service Item Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'f_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-innerbox .pm-feature-top .pm-feature-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-innerbox .pm-feature-top .pm-feature-text h3',
            ]
        );
        $this->add_control(
            'f_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-innerbox .pm-feature-top .pm-feature-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-innerbox .pm-feature-top .pm-feature-text p',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'header_border',
                'label' => __( 'Header Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-innerbox .pm-feature-top',
            ]
        );
        $this->add_control(
            'f_details_color',
            [
                'label' => __( 'Details Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-innerbox .pm-feature-list li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_details_fonts',
                'label' => __( 'Details Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-innerbox .pm-feature-list li',
            ]
        );
        $this->add_control(
            'f_details_icon_color',
            [
                'label' => __( 'Details Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-innerbox .pm-feature-list li:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'f_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-innerbox .pm-feature-top .pm-feature-icon i' => 'color: {{VALUE}}',
                ],
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
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-innerbox .pm-feature-top .pm-feature-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_h_shadow',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-innerbox:hover',
            ]
        );
        $this->add_responsive_control(
            'item_padding',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_border',
                'label' => __( 'Service Box Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_h_border',
                'label' => __( 'Service Box Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-innerbox:hover',
            ]
        );
        $this->add_control(
            'mbcasd',
            [
                'label' => __( 'Service Box BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_color',
                'label' => __( 'Main  BG', 'appilo' ),
                'types' => [ 'classic' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-feature-innerbox',
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
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_se_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-feature-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '   <!-- Start of feature section
        ============================================= -->
        <section  class="pm-feature-section">
                <div class="pm-feature-cpntent">
                    <div class="row justify-content-center">';
        if ( $settings['feature_list'] ) {
            foreach ($settings['feature_list'] as $feature) {
                echo '<div class="col-lg-4 col-md-6 wow fadeFromLeft" data-wow-delay="' . $feature['f_animate_delay'] . '" data-wow-duration="1500ms">
                            <div class="pm-feature-innerbox pm-headline pera-content">
                                <div class="pm-feature-top clearfix">
                                    <div class="pm-feature-icon float-left">';
                                if($feature['f_image']['url']) {
                                    echo '<img src="' . $feature['f_image']['url'] . '" alt>';
                                } if($feature['f_icon']) {
                                    \Elementor\Icons_Manager::render_icon($feature['f_icon'], ['aria-hidden' => 'true']);
                                }
                         echo '</div>
                                    <div class="pm-feature-text">
                                        <h3> ' . $feature['f_heading'] . '</h3>
                                        <p> ' . $feature['f_info'] . '</p>
                                    </div>
                                </div>
                                <div class="pm-feature-list ul-li-block">
                                    <ul>
                                         ' . $feature['f_details'] . '
                                    </ul>
                                </div>
                            </div>
                        </div>';
                    }
                }
                echo'</div>
            </div>
        </section>
    <!-- End of feature section
        ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hrm_service );
?>