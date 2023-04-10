<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class gym_testimonial extends Widget_Base {

    public function get_name() {
        return 'gym-testimonial';
    }

    public function get_title() {
        return __( 'Gym Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'qut_image', [
                'label' => __( 'Quote Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/gym_qut.png',
                ],
            ]
        );
        $repeater->add_control(
            'info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“Lehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui offi cia deserunt mollit anim”' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'name', [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Lina Johnson' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'designation', [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Executive Manager' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/tst-ah2.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'shape-1', [
                'label' => __( 'Shape 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/tst-sh1.png',
                ],
            ]
        );
        $repeater->add_control(
            'shape-2', [
                'label' => __( 'Shape 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/tst-sh2.png',
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
            'testimonial_list',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Johnson Doe', 'appilo' ),
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
            'name_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-testimonial-wrap .app-gym-testimonial-author h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'name_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-testimonial-wrap .app-gym-testimonial-author h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-testimonial-wrap .app-gym-testimonial-author span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-testimonial-wrap .app-gym-testimonial-author span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-testimonial-wrap .app-gym-testimonial-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-testimonial-wrap .app-gym-testimonial-text p',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_border',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-gym-testimonial-slider .owl-dots',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_active',
                'label' => __( 'Active Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-gym-testimonial-slider .owl-dots .owl-dot.active',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_box_bg',
                'label' => __( 'Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-gym-testimonial-wrap',
            ]
        );
        $this->end_controls_section();
    }


    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="app-gym-testimonial-content">
                    <div class="app-gym-testimonial-slider owl-carousel">';
        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonial) {
                $link = get_that_link($testimonial['link']);
                echo '<div class="app-gym-testimonial-innerbox">
                            <div class="app-gym-testimonial-wrap position-relative">
                                <div class="app-gym-testimonial-icon position-relative text-center">
                                    <img src="' . $testimonial['qut_image']['url'] . '" alt="">
                                </div>
                                <div class="app-gym-testimonial-text text-center pera-content app-gym-headline">
                                    <p>' . $testimonial['info'] . '</p>
                                    <div class="app-gym-testimonial-author">
                                        <h3><a ' . $link . '>' . $testimonial['name'] . '</a></h3>
                                        <span>' . $testimonial['designation'] . '</span>
                                    </div>
                                    <div class="app-gym-testimonial-img-wrapper position-relative">
                                        <span class="app-gym-tst-shape1 position-absolute"><img src="' . $testimonial['shape-1']['url'] . '" alt=""></span>
                                        <span class="app-gym-tst-shape2 position-absolute"><img src="' . $testimonial['shape-2']['url'] . '" alt=""></span>
                                        <div class="app-gym-testimonial-img">
                                            <img src="' . $testimonial['image']['url'] . '">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
            }
        }
        echo '</div>
                </div>';

    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new gym_testimonial );
?>