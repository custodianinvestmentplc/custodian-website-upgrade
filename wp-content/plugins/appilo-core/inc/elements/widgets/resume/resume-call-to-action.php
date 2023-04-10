<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_cta extends Widget_Base
{

    public function get_name()
    {
        return 'resume_cta';
    }

    public function get_title()
    {
        return __('Resume/CV Call To Action', 'appilo');
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
            'hero_shapes',
            [
                'label' => __('Shapes', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'shape_1',
            [
                'label' => __( 'Shape 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_2',
            [
                'label' => __( 'Shape 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            '_texts_info',
            [
                'label' => __( 'Text Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get It Touch', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Have a Project on Your Mind', 'appilo' ),
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'btn_section',
            [
                'label' => __( 'Button', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Contact Me +', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label' => __( 'Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'cta_img',
            [
                'label' => __('Image', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Right Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_bg_style_1',
            [
                'label' => __('Section Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_bg_2',
            [
                'label' => __('Section Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-cta-area' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_padding_3',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-cta-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_style_4',
            [
                'label' => __('Content Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'subtitle_color',
            [
                'label' => __('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-cta-area .apihu-port-cta-content-wrap .apihu-port-cta-content-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'label' => __( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-cta-area .apihu-port-cta-content-wrap .apihu-port-cta-content-text p',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-cta-area .apihu-port-cta-content-wrap .apihu-port-cta-content-text h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-cta-area .apihu-port-cta-content-wrap .apihu-port-cta-content-text h2',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'gta_btn_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-cta-area .apihu-port-cta-content-wrap .apihu-port-cta-content-text a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-cta-area .apihu-port-cta-content-wrap .apihu-port-cta-content-text a:before',
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-cta-area .apihu-port-cta-content-wrap .apihu-port-cta-content-text a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn__hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-cta-area .apihu-port-cta-content-wrap .apihu-port-cta-content-text a:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $shape1 = $settings['shape_1']['url'];
        $shape2 = $settings['shape_2']['url'];
        $sub_title = $settings['sub_title'];
        $title = $settings['title'];
        $btn_text = $settings['btn_text'];
        $btn_url = $settings['btn_url']['url'];
        $image = $settings['image']['url'];
        ?>

        <!-- CTA Start -->
        <div class="apihu-port-cta-area">
            <img class="apihu-port-cta-shape" src="<?php echo $shape1; ?>" alt="Cta shape">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="apihu-port-cta-content-wrap">

                            <img class="apihu-port-cta-container-shape" src="<?php echo $shape2; ?>" alt="Cta container shape">

                            <div class="row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="apihu-port-cta-content-text">
                                        <p><?php echo $sub_title; ?></p>
                                        <h2><?php echo $title; ?></h2>
                                        <a href="<?php echo $btn_url; ?>"><?php echo $btn_text; ?></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="apihu-port-cta-content-img">
                                        <img src="<?php echo $image; ?>" alt="Call to action area">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA End -->


<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_cta());
