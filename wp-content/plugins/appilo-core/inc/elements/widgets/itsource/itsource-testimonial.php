<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_testimonial extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-testimonial';
    }

    public function get_title()
    {
        return __('iTsource Testimonial', 'appilo');
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
            'ratting',
            [
                'label' => __( 'Ratting', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 5,
                'default' => 4.8,
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
            'section_style',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-testimonial-innerbox .it-nw-testimonial-name h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-testimonial-innerbox .it-nw-testimonial-name h3',
            ]
        );
        $this->add_control(
            'designation_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-testimonial-innerbox .it-nw-testimonial-name span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_font',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-testimonial-innerbox .it-nw-testimonial-name span',
            ]
        );
        $this->add_control(
            'description_color',
            [
                'label' => __('Description Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-testimonial-innerbox .it-nw-testimonial-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_font',
                'label' => __('Description Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-testimonial-innerbox .it-nw-testimonial-text',
            ]
        );
        $this->add_control(
            'ratting_color',
            [
                'label' => __('Ratting Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-testimonial-innerbox .it-nw-testimonial-rate' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_inactive_color',
            [
                'label' => __('Nav Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nx-testimonial-slider .owl-dots .owl-dot, .it-nw-blog-slider .owl-dots .owl-dot' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_active_color',
            [
                'label' => __('Nav Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nx-testimonial-slider .owl-dots .owl-dot.active, .it-nw-blog-slider .owl-dots .owl-dot.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-nw-testimonial-innerbox',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="it-nx-testimonial-content">
				<div class="it-nx-testimonial-slider owl-carousel">';

        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonial) {

                echo '<div class="it-nw-testimonial-innerbox position-relative">
						<div class="it-nw-testimonial-img-name-rate d-flex justify-content-between">
							<div class="it-nw-testimonial-img-name d-flex">
								<div class="it-nw-testimonial-img">
									' . get_that_image($testimonial['image']) . '
								</div>
								<div class="it-nw-testimonial-name headline">
									<h3>' . $testimonial['name'] . '</h3>
									<span>' . $testimonial['designation'] . '</span>
								</div>
							</div>
							<div class="it-nw-testimonial-rate">
								<i class="fas fa-star"></i>(' . $testimonial['ratting'] . ')
							</div>
						</div>
						<div class="it-nw-testimonial-text">
							' . $testimonial['info'] . ' 
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

Plugin::instance()->widgets_manager->register_widget_type(new itsource_testimonial());
