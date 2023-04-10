<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_testimonial extends Widget_Base
{

    public function get_name()
    {
        return 'dm-testimonial';
    }

    public function get_title()
    {
        return __('Digital Marketing Testimonial', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-blockquote';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'testi_lists',
            [
                'label' => __('Testimonial List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'name',
            [
                'label' => __('Name', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Barbara Smith', 'appilo'),
            ]
        );
        $repeater->add_control(
            'designation',
            [
                'label' => __('Designation', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Managing Director', 'appilo'),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'ratting',
            [
                'label' => __( 'Ratting', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '<li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>',
                'options' => [
                    '<li><i class="fas fa-star"></i></li>'  => __( '1 Star', 'appilo' ),

                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>' => __( '2 Star', 'appilo' ),

                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>' => __( '3 Star', 'appilo' ),

                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>' => __( '4 Star', 'appilo' ),

                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>' => __( '5 Star', 'appilo' ),
                ],
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label' => __('Link', 'appilo'),
                'type' => Controls_Manager::URL,
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
                'label' => __('Testimonial List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => 'Barbara Smith',
                    ],
                    [
                        'name' => 'Barbara Smith',
                    ],
                    [
                        'name' => 'Barbara Smith',
                    ],
                    [
                        'name' => 'Barbara Smith',
                    ],

                ],
                'title_field' => '{{{name}}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'title_style',
            [
                'label' => __('Title Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-testimonial-slider-item .app-dm-testi-designation-ratting .app-dm-testi-name-degi h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-testimonial-slider-item .app-dm-testi-designation-ratting .app-dm-testi-name-degi h3',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'desc_style',
            [
                'label' => __( 'Description Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'description_color',
            [
                'label' => __('Description Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-testimonial-slider-item p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_font',
                'label' => __('Description Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-testimonial-slider-item p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'desig_style',
            [
                'label' => __( 'Designation Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'designation_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-testimonial-slider-item .app-dm-testi-designation-ratting .app-dm-testi-name-degi span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_font',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-testimonial-slider-item .app-dm-testi-designation-ratting .app-dm-testi-name-degi span',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'img-border-style',
            [
                'label' => __( 'Image Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'img_border_color',
            [
                'label' => __('Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-testimonial-slider-item .app-dm-testimonial-img' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'slider-nav',
            [
                'label' => __( 'Slider Nav Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'nav_active_color',
            [
                'label' => __('Nav Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-testimonial-slider .owl-dots .owl-dot.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_inactive_color',
            [
                'label' => __('Nav Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-testimonial-slider .owl-dots .owl-dot' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="app-dm-testimonial-content">
                    <div class="app-dm-testimonial-slider owl-carousel">';

        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonial) {

                echo '<div class="app-dm-testimonial-slider-item position-relative">
                            <div class="app-dm-testimonial-img">
                                ' . get_that_image($testimonial['image']) . '
                            </div>
                            <div class="app-dm-testimonial-text pera-content app-dm-headline">
                                <p>' . $testimonial['info'] . '</p>
                                <div class="app-dm-testi-designation-ratting d-flex justify-content-between align-items-center">
                                    <div class="app-dm-testi-name-degi">
                                        <h3><a ' . get_that_link($testimonial['link']) . '>' . $testimonial['name'] . '</a></h3>
                                        <span>' . $testimonial['designation'] . '</span>
                                    </div>
                                    <div class="app-dm-testi-rate ul-li">
                                        <ul>
                                            
                                            ' . $testimonial['ratting'] . '
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>';
            }
        }

        echo '</div>
                </div>';



    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new dm_testimonial());
