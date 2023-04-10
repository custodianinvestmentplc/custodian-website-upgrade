<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_testimonial extends Widget_Base
{

    public function get_name()
    {
        return 'bx-testimonial';
    }

    public function get_title()
    {
        return __('Business Expert Testimonial', 'appilo');
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
                'default' => __('dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus velfacilinaaliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis Risus commodo viverra.', 'appilo'),
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
        $this->add_control(
            'testimonial_list',
            [
                'label' => __('Testimonial List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => 'Mehedi Mohammad',
                    ],
                    [
                        'name' => 'Mehedi Mohammad',
                    ],
                    [
                        'name' => 'Mehedi Mohammad',
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
                    '{{WRAPPER}} .apbc-client-content .apbc-headline h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-client-content .apbc-headline h5',
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
                    '{{WRAPPER}} .apbc-client-single .apbc-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_font',
                'label' => __('Description Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-client-single .apbc-pera-txt p',
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
                    '{{WRAPPER}} .apbc-client-feedback .apbc-client-single .apbc-client-content span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_font',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-client-feedback .apbc-client-single .apbc-client-content span',
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
                    '{{WRAPPER}} .apbc-client-feedback .slick-dots .slick-active button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_inactive_color',
            [
                'label' => __('Nav Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-client-feedback .slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="apbc-client-feedback">';

        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonial) {

                echo '<div class="apbc-client-single">
                    <div class="apbc-img-wrapper">
                        ' . get_that_image($testimonial['image']) . '
                    </div>
                    <div class="apbc-pera-txt">
                        <p>' . $testimonial['info'] . '</p>
                    </div>
                    <div class="apbc-client-content">
                        <div class="apbc-headline">
                            <h5>' . $testimonial['name'] . '</h5>
                            <span>' . $testimonial['designation'] . '</span>
                        </div>
                    </div>
                </div>';
            }
        }

        echo '</div>';



    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new bx_testimonial());
