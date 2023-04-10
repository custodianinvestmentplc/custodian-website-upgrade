<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_portfolio extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-portfolio';
    }

    public function get_title()
    {
        return __('iTsource Portfolio', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-gallery-masonry';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'contacts',
            [
                'label' => __('Contact Box', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Our Wonderful Gallery', 'appilo'),
            ]
        );
        $repeater->add_control(
            'project_url', [
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
        $repeater->add_control(
            'designation',
            [
                'label' => __('Designation', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('It Consultancy', 'appilo'),
            ]
        );
        $repeater->add_control(
            'img', [
                'label' => __('Project Photo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'img_overlay', [
                'label' => __('Image Overlay', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-joomla',
                    'library' => 'brand',
                ],
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
            'portfolio_list',
            [
                'label' => __('Portfolio List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __('Our Wonderful Gallery', 'appilo'),
                    ],
                    [
                        'title' => __('Our Wonderful Gallery', 'appilo'),
                    ],
                    [
                        'title' => __('Our Wonderful Gallery', 'appilo'),
                    ],
                    [
                        'title' => __('Our Wonderful Gallery', 'appilo'),
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
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-project-innerbox .it-nw-project-inner-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-project-innerbox .it-nw-project-inner-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-project-innerbox .it-nw-project-inner-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-project-innerbox .it-nw-project-inner-text span',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-project-innerbox .it-nw-project-link a i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
        'btn_bg',
        [
            'label' => __('Button Background', 'appilo'),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
        ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btnbg',
                'label' => __('Button BG', 'appilo'),
                'types' => ['gradient'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-nw-project-innerbox .it-nw-project-link a',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'section_vvdg',
            [
                'label' => __( 'Slider Nav Button', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'slider_nav_btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-project-slider-area .owl-next, .it-nw-project-slider-area .owl-prev' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'slider_nav_btn_bg',
            [
                'label' => __('Button Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-project-slider-area .owl-next, .it-nw-project-slider-area .owl-prev' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();



    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


//        Start Portfolio Section


        echo '<div class="it-nw-project-content">
                <div class="it-nw-project-slider-area owl-carousel">';

            if ($settings['portfolio_list']) {
                foreach ($settings['portfolio_list'] as $portfolio) {

                    echo '<div class="it-nw-project-innerbox position-relative" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="it-nw-project-inner-img">
                                ' . get_that_image($portfolio['img']) . '
                            </div>
                            <div class="it-nw-project-innerbox-img-overlay">
                            ' . get_that_image($portfolio['img_overlay']) . '
                            </div>
                            <div class="it-nw-project-inner-text position-absolute headline">
                                <span>' . $portfolio['designation'] . '</span>
                                <h3><a ' . get_that_link($portfolio['project_url']) . '>' . $portfolio['title'] . '</a></h3>
                            </div>
                            <div class="it-nw-project-link">
                                <a class="d-flex align-items-center justify-content-center" ' . get_that_link($portfolio['project_url']) . '>';
                            Icons_Manager::render_icon($portfolio['icon'], ['aria-hidden' => 'true']);
                            echo '</a>
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

Plugin::instance()->widgets_manager->register_widget_type(new itsource_portfolio());