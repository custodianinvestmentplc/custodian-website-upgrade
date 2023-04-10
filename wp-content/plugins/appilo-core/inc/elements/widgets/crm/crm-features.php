<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crm_features extends Widget_Base {

    public function get_name() {
        return 'crm-features';
    }

    public function get_title() {
        return __( 'CRM Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-inner-section';
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
            'section_image',
            [
                'label' => __('Section Image', 'appilo'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'style_switcher' => 'style3',
                ],
            ]
        );
        $this->add_control(
            'title_txt',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Core Features', 'appilo' ),
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
                'default' => __( 'Service Your Customers Around The World #10', 'appilo' ),
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
                'default' => __( 'A better way to manage your sales, team, clients & marketing - on a single platform. <a href="#">Powerful, affordable & easy</a>', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-core-feature-text .crm-feature-subtext' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-core-feature-text .crm-feature-subtext',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'features_info',
            [
                'label' => __( 'Feature Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Free around-the-clock technical', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_info_icon',
            [
                'label' => __( 'Info Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'feature_info_list',
            [
                'label' => __( 'Feature Info List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'features_info' =>'Free around-the-clock technical',
                    ],
                    [
                        'features_info' =>'Free around-the-clock technical',
                    ],
                    [
                        'features_info' =>'Free around-the-clock technical',
                    ],

                ],
                'title_field' => '{{{ features_info }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'fea_lists',
            [
                'label' => __( 'Feature List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_name',
            [
                'label' => __( 'Feature Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'World-class Service', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_info',
            [
                'label' => __( 'Feature Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'business with a 99.99%', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_icon',
            [
                'label' => __( 'Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-long-arrow-alt-right',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'delay',
            [
                'label' => __( 'Animation Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_box',
            [
                'label' => __( 'Feature Box List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'f_name' =>'World-class Service',
                    ],
                    [
                        'f_name' =>'World-class Service',
                    ],
                    [
                        'f_name' =>'World-class Service',
                    ],
                    [
                        'f_name' =>'World-class Service',
                    ],

                ],
                'title_field' => '{{{ f_name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_list_style',
            [
                'label' => __( 'Feature List Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'f_name_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-feature-innerbox .crm-feature-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'f_name_hover_color',
            [
                'label' => __( 'Name Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-feature-innerbox:hover .crm-feature-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_name_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-feature-innerbox .crm-feature-text h3',
            ]
        );
        $this->add_control(
            'f_info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-feature-innerbox .crm-feature-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'f_info_hover_color',
            [
                'label' => __( 'Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-feature-innerbox:hover .crm-feature-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-feature-innerbox .crm-feature-text p',
            ]
        );
        $this->add_control(
            'mbcasdsserver',
            [
                'label' => __( 'Server List Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'server_bg',
                'label' => __( 'Server BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-feature-innerbox',
            ]
        );
        $this->add_control(
            'mbcasdslogo',
            [
                'label' => __( 'Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'number_bg',
                'label' => __( 'hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-feature-innerbox:hover',
            ]
        );
        $this->add_control(
            'icon_c_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-feature-innerbox .crm-feature-icon i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crm-feature-innerbox .crm-feature-icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-feature-innerbox:hover .crm-feature-icon i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crm-feature-innerbox:hover .crm-feature-icon svg' => 'fill: {{VALUE}}',
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
                    '{{WRAPPER}} .crm-feature-innerbox .crm-feature-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mbcasdsicon',
            [
                'label' => __( 'Icon Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icona_bg',
                'label' => __( 'Server BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-feature-innerbox .crm-feature-icon',
            ]
        );
        $this->add_control(
            'mbcasdshb',
            [
                'label' => __( 'Icon Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'number_bgh',
                'label' => __( 'hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-feature-innerbox:hover .crm-feature-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Server Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-feature-innerbox',
            ]
        );
        $this->add_responsive_control(
            'server_padding',
            [
                'label' => __( 'List Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-feature-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'server_margin',
            [
                'label' => __( 'List Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-feature-innerbox' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
                    'style3' => __( 'Style 3', 'appilo' ),
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
                'selector' => '{{WRAPPER}} .crm-core-feature-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-core-feature-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of core feature section
    ============================================= -->       
    <section  class="crm-core-feature-section">
        <div class="container">
            <div class="row ' . $settings['style_switcher'] . '">
                
                <div class="col-md-6">
                    <div class="crm-core-feature-box">
                        <div class="row">';
        if ( $settings['feature_box'] ) {
            foreach ($settings['feature_box'] as $feature) {
                            echo '<div class="col-md-6">
                                <div class="crm-feature-innerbox wow fadeFromUp" data-wow-delay="'.$feature['delay'].'" data-wow-duration="1500ms">
                                    <div class="crm-feature-icon text-center">';
                                        \Elementor\Icons_Manager::render_icon($feature['f_icon'], ['aria-hidden' => 'true']);
                                    echo'</div>
                                    <div class="crm-feature-text crm-headline text-center pera-content">
                                        <h3>'.$feature['f_name'].'</h3>
                                        <p>'.$feature['f_info'].'</p>
                                    </div>
                                </div>
                            </div>';
            }
        }
                        echo'</div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="crm-core-feature-text">';

                    if ($settings['style_switcher'] == 'style3') {
                        echo '<div class="crm-core-feature-image fadeFromUp wow" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <img src="' . $settings['section_image']['url'] . '" alt>
                            </div>';
                    }
                if ($settings['style_switcher'] !== 'style3') {
                    echo '<div class="crm-section-title crm-headline">
                                <span>' . $settings['title_txt'] . '</span>
                                <h2>' . $settings['heading_txt'] . '</h2>
                            </div>
                            <div class="crm-feature-subtext">
                               ' . $settings['info_txt'] . '
                            </div>
                            <div class="crm-core-feature-list ul-li-block">
                                <ul>';
                    if ($settings['feature_info_list']) {
                        foreach ($settings['feature_info_list'] as $feature_info_list) {
                            echo ' <li>';
                            \Elementor\Icons_Manager::render_icon($feature_info_list['feature_info_icon'], ['aria-hidden' => 'true']);
                            echo '' . $feature_info_list['features_info'] . '</li>';
                        }
                    }
                        echo '</ul>
                    </div>';
                }
                    echo'</div>
                </div>
                
            </div>
        </div>
    </section>
<!-- End of core feature section
    ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crm_features );
?>