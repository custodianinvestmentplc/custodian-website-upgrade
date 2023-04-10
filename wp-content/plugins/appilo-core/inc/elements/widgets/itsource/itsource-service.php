<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_services extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-services';
    }

    public function get_title()
    {
        return __('iTsource Services', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'services',
            [
                'label' => __('Services', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Data Structuring', 'appilo'),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __('Service Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-project',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'read-more',
            [
                'label' => __('Read More', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Read More', 'appilo'),
            ]
        );
        $repeater->add_control(
            'link', [
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
            'service_list',
            [
                'label' => __('Service List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Data Structuring',
                    ],
                    [
                        'title' => 'Managed IT Services',
                    ],
                    [
                        'title' => 'Web Development',
                    ],[
                        'title' => 'Marketing Strategy',
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'service_box_style',
            [
                'label' => __('Service Style', 'appilo'),
                'type' => Controls_Manager::SELECT,
                'default' => '3',
                'options' => [
                    '3' => __('style-1', 'appilo'),
                    '6' => __('style-2', 'appilo'),
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-text p',
            ]
        );
        $this->add_control(
            'icon_color_head',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __('Icon Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-icon i',

            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __('Icon Size', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
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
                    '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __('Icon Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bgbg',
                'label' => __('Background', 'appilo'),
                'types' => ['classic',],
                'selector' =>
                    '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-icon',

            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'icon_box_shadow',
                'label' => __( 'Icon Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-icon',
            ]
        );
        $this->add_control(
            'icon_h_bg',
            [
                'label' => __('Icon Hover Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_h_bgbg',
                'label' => __('Background', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-icon:after',

            ]
        );
        $this->add_control(
            'icon_h_cg',
            [
                'label' => __('Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_h_color',
                'label' => __('Icon Hover Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .it-nw-service-innerbox:hover .it-nw-service-inner-icon i',

            ]
        );
        $this->add_control(
            'sbg',
            [
                'label' => __('Service Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sbgbackground',
                'label' => __('Background', 'appilo'),
                'types' => ['classic',],
                'selector' =>
                    '{{WRAPPER}} .it-nw-service-innerbox',

            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-nw-service-innerbox',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-text a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __('Button Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-service-innerbox .it-nw-service-inner-text a',
            ]
        );
        $this->add_control(
            'margin',
            [
                'label' => __( 'Margin', 'plugin-domain' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-nw-service-innerbox' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="it-nw-service-lower-wrapper">
				<div class="row">';

        if ($settings['service_list']) {
            foreach ($settings['service_list'] as $service) {

                echo '<div class="col-lg-' . $settings['service_box_style'] . ' col-md-6" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="it-nw-service-innerbox position-relative">
							<div class="it-nw-service-inner-icon d-flex justify-content-center align-items-center">';

                Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);

                echo '</div>
							<div class="it-nw-service-inner-text headline pera-content">
								<h3>' . $service['title'] . '</h3>
								<p>' . $service['info'] . '</p>
								<a ' . get_that_link($service['link']) . '>' . $service['read-more'] . ' <i class="fas fa-arrow-right"></i></a>
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

Plugin::instance()->widgets_manager->register_widget_type(new itsource_services());
