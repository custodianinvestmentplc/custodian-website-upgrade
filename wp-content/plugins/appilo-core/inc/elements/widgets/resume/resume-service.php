<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_service extends Widget_Base
{

    public function get_name()
    {
        return 'resume_service';
    }

    public function get_title()
    {
        return __('Resume/CV Service', 'appilo');
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
            'service_texts',
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
                'default' => __( 'What We Do', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'We are Optimists who Love to
work Together.', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'service_lists',
            [
                'label' => __( 'Service List', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'service_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-network',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'service_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'App Development', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'service_info',
            [
                'label' => __( 'Tab Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'I throw myself down among the tall grass by the stream as I lie close to the earth.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'service_btn',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read More', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'service_btn_url',
            [
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
            'service_list',
            [
                'label' => __('Service list', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_title' => 'App Development',
                    ],[
                        'service_title' => 'Web Development',
                    ],[
                        'service_title' => 'UI/UX Design',
                    ],[
                        'service_title' => 'Digital Marketing',
                    ],

                ],
                'title_field' => '{{{ service_title }}}',
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
                'default' => __( 'Load More', 'appilo' ),
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
            'section_bg_style',
            [
                'label' => __('Section Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __('Section Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-service-area' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-service-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
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
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'label' => __( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-title',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'service_style',
            [
                'label' => __( 'Service Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'service_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service .apihu-port-single-service-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'service_title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service .apihu-port-single-service-title',
            ]
        );
        $this->add_control(
            'service_info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service .apihu-port-single-service-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service .apihu-port-single-service-text',
            ]
        );
        $this->add_control(
            'service_content_btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service .apihu-port-single-service-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'service_btn_info_typo',
                'label' => __('Button Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service .apihu-port-single-service-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'service_btn_background_',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service .apihu-port-single-service-btn',
            ]
        );
        $this->add_control(
            '_service_btn_hover_bg_heading',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'service_btn_hover_background_',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service .apihu-port-single-service-btn:before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'service_box_style',
            [
                'label' => __( 'Service Box Style', 'appilo' ),
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
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'service_box_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service',
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'service_box_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-single-service::before',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->end_controls_section();

        $this->start_controls_section(
            'btn_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'service_content_btn_color_',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-service-area .apihu-port-service-load-more-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'service_content_btn_background_',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-service-load-more-btn a',
            ]
        );
        $this->add_control(
            '__service_btn_hover_heading',
            [
                'label' => __( 'Button Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'service_content_btn_hover_color_',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-service-area .apihu-port-service-load-more-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'service_content_btn_hover_background_',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-service-area .apihu-port-service-load-more-btn a:before',
            ]
        );
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
        ?>
        <!-- Service Start -->
        <div class="apihu-port-service-area" id="apihu-port-feature">
            <img class="apihu-port-service-shape-1" src="<?php echo $shape1; ?>" alt="Service Shape">
            <img class="apihu-port-service-shape-2" src="<?php echo $shape2; ?>" alt="Service Shape">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="apihu-port-section-heading">
                            <p class="apihu-port-section-subtitle"><?php echo $sub_title; ?></p>
                            <h2 class="apihu-port-section-title"><?php echo $title; ?></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php
                    foreach ($settings['service_list'] as $service):
                    ?>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="apihu-port-single-service wow fadeInUp" data-wow-delay="0.2s">
                            <div class="apihu-port-service-icon-box">
                                <?php \Elementor\Icons_Manager::render_icon( $service['service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </div>
                            <h3 class="apihu-port-single-service-title"><?php echo $service['service_title']; ?></h3>
                            <p class="apihu-port-single-service-text"><?php echo $service['service_info']; ?></p>
                            <a class="apihu-port-single-service-btn" href="<?php echo $service['service_btn_url']['url']; ?> "><?php echo $service['service_btn']; ?> <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                <?php
                  endforeach;
                ?>


                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="apihu-port-service-load-more-btn">
                            <a href="<?php echo $btn_url; ?>"><?php echo $btn_text; ?><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_service());
