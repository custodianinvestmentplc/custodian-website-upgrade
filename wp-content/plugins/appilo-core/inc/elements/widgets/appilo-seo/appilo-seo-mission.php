<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_mission extends Widget_Base {

    public function get_name() {
        return 'appilo-seo-mission';
    }

    public function get_title() {
        return __( 'Appilo SEO Mission', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-posts-ticker';
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
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Create unique websites', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-section-title2 p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-section-title2 p',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'heading_before',
                'label' => __( 'Heading Before', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-section-title2 p:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'heading_after',
                'label' => __( 'Heading After', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-section-title2 p:after',
            ]
        );
        $this->add_control(
            'headline',
            [
                'label' => __( 'Headline', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Mission to Change Marketing View', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-section-title2 h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-section-title2 h2',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'missions',
            [
                'label' => __( 'Missions', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Modern UI/UX', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Mission Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-phone-call',
                    'library' => 'appilo-icons-2',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Praesent sollicitudin felis a ornare volut tor, id lacinia massa purus nunc.', 'appilo' ),
            ]
        );
        $this->add_control(
            'missions_list',
            [
                'label' => __( 'Missions List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Modern UI/UX', 'appilo' ),
                        'info' => __( 'Praesent sollicitudin felis a ornare volut tor, id lacinia massa purus nunc.', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Modern UI/UX', 'appilo' ),
                        'info' => __( 'Praesent sollicitudin felis a ornare volut tor, id lacinia massa purus nunc.', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Modern UI/UX', 'appilo' ),
                        'info' => __( 'Praesent sollicitudin felis a ornare volut tor, id lacinia massa purus nunc.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->add_control(
            'section_img', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/vector/mv.png',
                ],
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
                    '{{WRAPPER}} .appseo-mission-area-text .appseo-mission-area-item .appseo-mission-item-content .appseo-mission-area-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-mission-area-text .appseo-mission-area-item .appseo-mission-item-content .appseo-mission-area-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-mission-area-text .appseo-mission-area-item .appseo-mission-item-content .appseo-mission-area-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-mission-area-text .appseo-mission-area-item .appseo-mission-item-content .appseo-mission-area-text p',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-mission-area-text .appseo-mission-area-item .appseo-mission-item-content .appseo-mission-item-icon i' => 'color: {{VALUE}}',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-mission-area-text .appseo-mission-area-item .appseo-mission-item-content .appseo-mission-item-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-mission-area-text .appseo-mission-area-item .appseo-mission-item-content .appseo-mission-item-icon:before',
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
                'selector' => '{{WRAPPER}} .appseo-mission-area-section',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg1',
                'label' => __( 'Section Background 1', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-mission-area-section:after',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-mission-area-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

      echo '<!-- Start of appseo-mission section
        ============================================= --> 
        <section  class="appseo-mission-area-section position-relative">
            <div class="appseo-mission-vector"><img src="'.$settings['section_img']['url'].'" alt></div>
            <div class="container">
                <div class="appseo-mission-area-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="appseo-mission-area-text">
                                <div class="appseo-section-title2 appseo-headline pera-content">
                                    <p>'.$settings['heading'].'</p>
                                    <h2>'.$settings['headline'].'</h2>
                                </div>
                                <div class="appseo-mission-area-item  wow fadeFromUp" data-wow-delay="00ms" data-wow-duration="1500ms">';
                            if ( $settings['missions_list'] ) {
                                foreach ($settings['missions_list'] as $mission) {
                                    echo '<div class="appseo-mission-item-content  wow fadeFromUp '.$mission['_id'].'" data-wow-delay="'.$mission['animate_delay'].'" data-wow-duration="1500ms">
                                        <div class="appseo-mission-item-icon">';
                                            \Elementor\Icons_Manager::render_icon( $mission['icon'], [ 'aria-hidden' => 'true' ] );
                                        echo'</div>
                                        <div class="appseo-mission-area-text appseo-headline pera-content">
                                            <h3>'.$mission['title'].'</h3>
                                            <p>'.$mission['info'].'</p>
                                        </div>
                                    </div>';
                                    }
                                }
                                echo'</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of appseo-mission section
        ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_mission );
?>