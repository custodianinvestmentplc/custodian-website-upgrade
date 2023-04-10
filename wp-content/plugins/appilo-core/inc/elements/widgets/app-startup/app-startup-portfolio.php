<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_portfolio extends Widget_Base {

    public function get_name() {
        return 'app-startup-portfolio';
    }

    public function get_title() {
        return __( 'App Startup Portfolio', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-gallery-masonry';
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
            'contacts',
            [
                'label' => __( 'Contact Box', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Creative Work', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'UI/UX', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'active',
            [
                'label' => __( 'Make Active', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'position-relative',
                'default' => '',
            ]
        );
        $repeater->add_control(
            'img', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/portfolio/prt1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'btn_link', [
                'label' => __( 'Button Link', 'appilo' ),
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
            'portfolio_list',
            [
                'label' => __( 'Portfolio List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'active' => __( 'position-relative', 'appilo' ),
                    ],
                    [
                        'active' => __( '', 'appilo' ),
                    ],
                    [
                        'active' => __( '', 'appilo' ),
                    ],
                    [
                        'active' => __( '', 'appilo' ),
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
            'item_over',
            [
                'label' => __( 'Over Item', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'position-relative',
                'default' => 'position-relative',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-portfolio-section .str-port-img-text .str-port-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-portfolio-section .str-port-img-text .str-port-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-portfolio-section .str-port-img-text .str-port-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-portfolio-section .str-port-img-text .str-port-text span',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-portfolio-section .str-port-img-text .str-port-text .str-port-popup' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg',
            [
                'label' => __( 'Button BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btnbg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-portfolio-section .str-port-img-text .str-port-text .str-port-popup',
            ]
        );
        $this->add_control(
            'snhaea',
            [
                'label' => __( 'Item Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_hover_bg',
                'label' => __( 'Item Hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-portfolio-section .str-port-img-text:after',
            ]
        );
        $this->add_control(
            'snwae',
            [
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav',
                'label' => __( 'Slider Nav BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-portfolio-section .str-portfolio-area .owl-nav .owl-next, {{WRAPPER}} .str-portfolio-section .str-portfolio-area .owl-nav .owl-prev',
            ]
        );
        $this->add_control(
            'snhghhg',
            [
                'label' => __( 'Slider Nav Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_nav_hover',
                'label' => __( 'Slider Nav Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-portfolio-section .str-portfolio-area .owl-nav .owl-prev:hover, {{WRAPPER}} .str-portfolio-section .str-portfolio-area .owl-nav .owl-next:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-portfolio-section:after',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo '        <!-- Start of Portfolio section
            ============================================= -->
            <section  class="str-portfolio-section '.$settings['item_over'].'">
                <div class="container">
                    <div id="str-protfolio-slide" class="str-portfolio-area owl-carousel">';
                if ( $settings['portfolio_list'] ) {
                    foreach ($settings['portfolio_list'] as $portfolio) {
                        echo '<div class="str-port-img-text '.$portfolio['active'].'">
                            <div class="str-port-img">
                                <img src="'.$portfolio['img']['url'].'" alt>
                            </div>
                            <div class="str-port-text text-center str-headline">
                                <h3>'.$portfolio['title'].'</h3>
                                <span>'.$portfolio['info'].'</span>
                                <div class="str-port-popup">
                                    <a href="'.$portfolio['btn_link']['url'].'"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>';
                    }
                }
                    echo'</div>
                </div>
            </section>
        <!-- End o fPortfolio section
            ============================================= --> ';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_portfolio );
?>