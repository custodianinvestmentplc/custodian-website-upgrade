<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crm_services extends Widget_Base {

    public function get_name() {
        return 'crm-services';
    }

    public function get_title() {
        return __( 'CRM Services', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-sitemap';
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
            'title_txt',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Deploy and scale seamlessly', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-section-title span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-section-title span',
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Optimized Configuration Process Your Team Save', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-section-title h2',
            ]
        );
        $this->add_control(
            'info_txt',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'A better way to manage your sales, team, clients & marketing - on a single platform. Powerful, affordable & easy', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-about-section .crm-about-text-wrap .crm-about-subtext' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-about-section .crm-about-text-wrap .crm-about-subtext',
            ]
        );
        $this->add_control(
            'section_image', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/crm/shape/ab-vector.png',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_box',
            [
                'label' => __( 'Process Step', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            's_number',
            [
                'label' => __( 'Service Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '01', 'appilo' ),
            ]
        );
        $repeater->add_control(
            's_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Block Storage', 'appilo' ),
            ]
        );
        $repeater->add_control(
            's_icon',
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
            's_info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Collect metrics on visibility, monitor Droplet performance, and receive alerts when problems arise', 'appilo' ),
            ]
        );
        $this->add_control(
            'service_list',
            [
                'label' => __( 'Service List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        's_number' => __( '01', 'appilo' ),
                    ],
                    [
                        's_number' => __( '02', 'appilo' ),
                    ],
                    [
                        's_number' => __( '03', 'appilo' ),
                    ],
                    [
                        's_number' => __( '04', 'appilo' ),
                    ],
                    [
                        's_number' => __( '05', 'appilo' ),
                    ],
                    [
                        's_number' => __( '06', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ s_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_styles',
            [
                'label' => __( 'Services Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            's_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 's_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-text h3',
            ]
        );
        $this->add_control(
            's_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 's_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-text p',
            ]
        );
        $this->add_control(
            's_num_color_c',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-serial' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 's_num_fonts',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-serial',
            ]
        );
        $this->add_control(
            'mbcasdnys',
            [
                'label' => __( 'Number Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'number_bg',
                'label' => __( 'Number BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-serial',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'number_shadow',
                'label' => __( 'Number Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-serial',
            ]
        );
        $this->add_control(
            's_icon_c_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-serial i' => 'color: {{VALUE}}',
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
                    '{{WRAPPER}} .crm-about-section .crm-about-list-wrapper .crm-about-serial i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mbcasds',
            [
                'label' => __( 'Service Box Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'step_bg',
                'label' => __( 'Service List BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-about-list-wrapper',
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
                'name' => 'main_bg_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-about-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-about-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo '<!-- Start of About section
    ============================================= -->
    <section  class="crm-about-section">
        <div class="container">
            <div class="crm-about-wrap">
                <div class="row ' . $settings['style_switcher'] . '">
                    <div class="col-lg-6 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="crm-about-text-wrap">
                            <div class="crm-section-title crm-headline">
                                <span>' . $settings['title_txt'] . '</span>
                                <h2>' . $settings['heading_txt'] . '</h2>
                            </div>
                            <div class="crm-about-subtext">
                                ' . $settings['info_txt'] . '
                            </div>
                            <div id="crm-about-scroll" class="crm-about-item-list">';
                        if ( $settings['service_list'] ) {
                            foreach ($settings['service_list'] as $service) {
                                echo '<div class="crm-about-list-wrapper crm-headline pera-content">
                                    <div class="crm-about-serial text-center float-left">';
                                        if ($service['s_number']) {
                                            echo '' . $service['s_number'] . '';
                                        }
                                        if ($service['s_icon']) {
                                            \Elementor\Icons_Manager::render_icon($service['s_icon'], ['aria-hidden' => 'true']);
                                        }
                                    echo'</div>
                                    <div class="crm-about-text">
                                        <h3>'.$service['s_title'].'</h3>
                                        <p>'.$service['s_info'].'</p>
                                    </div>
                                </div>';
                            }
                        }
                            echo'</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crm-about-img position-relative">
                            <img src="' . $settings['section_image']['url'] . '" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End of About logo section
    ============================================= --> ';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crm_services );
?>