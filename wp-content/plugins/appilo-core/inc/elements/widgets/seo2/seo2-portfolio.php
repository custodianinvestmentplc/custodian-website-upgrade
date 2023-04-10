<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class seo2_portfolio extends Widget_Base {

    public function get_name() {
        return 'seo2-portfolio';
    }

    public function get_title() {
        return __( 'SEO 2 Portfolio', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
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
            'services',
            [
                'label' => __( 'Portfolio', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'img', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/seo2/port1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __( 'Link', 'appilo' ),
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
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_sstyle',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seo-2-portfolio-img-text .seo-2-portfolio-text a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'more_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [  'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .seo-2-portfolio-img-text .seo-2-portfolio-text',
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
                'selector' => '{{WRAPPER}} .seo-2-portfolio-img-text .seo-2-portfolio-img:before',
            ]
        );
        $this->add_responsive_control(
            'inner_margin',
            [
                'label' => __( 'Inner Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seo-2-portfolio-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seo-2-portfolio-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'nav_style',
            [
                'label' => __( 'Nav Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_responsive_control(
            'left_right',
            [
                'label' => __( 'Left / Right', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .seo-2-portfolio-content .owl-nav' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'top_bottom',
            [
                'label' => __( 'Up / Down', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .seo-2-portfolio-content .owl-nav' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of portfolio section
    ============================================= --> 
    <div  class="seo-2-portfolio-section position-relative">
                <div class="seo-2-portfolio-content owl-carousel">';

            if ( $settings['portfolio_list'] ) {
                foreach ($settings['portfolio_list'] as $portfolio) {
                    echo '<div class="seo-2-portfolio-slider">
                        <div class="seo-2-portfolio-img-text position-relative">
                            <div class="seo-2-portfolio-img position-relative">
                            <img src="' . $portfolio['img']['url'] . '" alt>';
                            echo '</div>
                            <div class="seo-2-portfolio-text text-center">
                                <a '.get_that_link($portfolio['link']).'><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>';
                            }
                        }
            echo'</div>
    </div>
<!-- End of portfolio section
    ============================================= --> ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new seo2_portfolio );
?>