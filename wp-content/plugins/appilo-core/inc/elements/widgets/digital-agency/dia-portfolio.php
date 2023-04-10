<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class dia_portfolio extends Widget_Base {

    public function get_name() {
        return 'dia-portfolio';
    }

    public function get_title() {
        return __( 'Digital Agency Portfolio', 'appilo' );
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
                'label' => __( 'Portfolio', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Out Sourcing Philippines', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'photo', [
                'label' => __( 'Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/portfolio/port1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'designation',
            [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'UI/UX Design', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'project_url', [
                'label' => __( 'Project URL', 'appilo' ),
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
            'study_list',
            [
                'label' => __( 'Portfolio List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Out Sourcing Philippines', 'appilo' ),
                        'designation' => __( 'UI/UX Design', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Out Sourcing Philippines', 'appilo' ),
                        'designation' => __( 'UI/UX Design', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Out Sourcing Philippines', 'appilo' ),
                        'designation' => __( 'UI/UX Design', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Out Sourcing Philippines', 'appilo' ),
                        'designation' => __( 'UI/UX Design', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Out Sourcing Philippines', 'appilo' ),
                        'designation' => __( 'UI/UX Design', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Out Sourcing Philippines', 'appilo' ),
                        'designation' => __( 'UI/UX Design', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Out Sourcing Philippines', 'appilo' ),
                        'designation' => __( 'UI/UX Design', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->add_control(
            'view_btn',
            [
                'label' => __( 'View All', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'View All', 'appilo' ),
            ]
        );
        $this->add_control(
            'view_btn_url', [
                'label' => __( 'View All URL', 'appilo' ),
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
            'view_btn_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-port-more a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'view_btn_bg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-port-more a',
            ]
        );
        $this->add_control(
            'view_btn_color_hover',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-port-more:hover a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'view_btn_bg_hover',
                'label' => __( 'Button Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-port-more a:before',
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
                    '{{WRAPPER}} .dia-portfolio-img-text .dia-portfolio-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-portfolio-img-text:hover h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_after',
                'label' => __( 'Title After', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-portfolio-img-text .dia-portfolio-text h3:before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-portfolio-img-text .dia-portfolio-text h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-portfolio-img-text .dia-portfolio-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'des_hover_color',
            [
                'label' => __( 'Designation Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-portfolio-img-text:hover span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-portfolio-img-text .dia-portfolio-text span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'overlay_bg',
                'label' => __( 'Overlay Background', 'appilo' ),
                'types' => [ 'classic','gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-portfolio-img-text .dia-portfolio-img:after',
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
                'selector' => '{{WRAPPER}} .dia-portfolio-img-text',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bg_hover',
                'label' => __( 'Item Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-portfolio-img-text:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'item_shadow',
                'label' => __( 'Item Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-portfolio-img-text:hover',
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
                'selector' => '{{WRAPPER}} .dia-portfolio-img-text:hover',
            ]
        );
        $this->add_control(
            'nav_icon_color',
            [
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-portfolio-slide-area .owl-nav .owl-prev, {{WRAPPER}} .dia-portfolio-slide-area .owl-nav .owl-next' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_sad12_bg',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-portfolio-slide-area .owl-nav .owl-prev, {{WRAPPER}} .dia-portfolio-slide-area .owl-nav .owl-next',
            ]
        );
        $this->add_control(
            'nav_icon_hover_color',
            [
                'label' => __( 'Nav Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-portfolio-slide-area .owl-nav .owl-prev:hover, {{WRAPPER}} .dia-portfolio-slide-area .owl-nav .owl-next:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_hover_bg',
                'label' => __( 'Nav Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-portfolio-slide-area .owl-nav .owl-prev:before, {{WRAPPER}} .dia-portfolio-slide-area .owl-nav .owl-next:before',
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
                'selector' => '{{WRAPPER}} .dia-portfolio-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .dia-portfolio-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

 echo '<!-- Start of Experience section
        ============================================= -->
        <section  class="dia-portfolio-section">
            <div class="dia-portfolio-content">
                <div id="dia-portfolio-slider" class="dia-portfolio-slide-area owl-carousel">';
        if ( $settings['study_list'] ) {
            foreach ($settings['study_list'] as $study) {
                echo '<div class="dia-portfolio-img-text ' . $study['_id'] . '">
                        <div class="dia-portfolio-img">
                            <img src="' . $study['photo']['url'] . '" alt>
                        </div>
                        <div class="dia-portfolio-text dia-headline text-center">
                            <h3><a href="' . $study['project_url']['url'] . '">' . $study['title'] . '</a></h3>
                            <span>' . $study['designation'] . '</span>
                        </div>
                    </div>';
                    }
                }
           echo' </div>';
                if($settings['view_btn']) {
                    echo '<div class="dia-port-more text-center">
                    <a class="d-block text-center" href="' . $settings['view_btn_url']['url'] . '">' . $settings['view_btn'] . '</a>
                </div>';
                }
            echo'</div>
        </section>
    <!-- End of Experience section
        ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new dia_portfolio );
?>