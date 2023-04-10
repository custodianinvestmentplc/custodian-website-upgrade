<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_testimonial extends Widget_Base
{

    public function get_name()
    {
        return 'resume_testimonial';
    }

    public function get_title()
    {
        return __('Resume/CV Testimonial', 'appilo');
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
            'testimonial_texts',
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
                'default' => __( 'Testimonial', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'What’s Our Customer Say', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
viverra maecenas accumsan lacus vel facilisis.', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial_content',
            [
                'label' => __( 'Testimonials', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'comment',
            [
                'label' => __( 'Comment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum cumsan lacus vel facilisis.’’', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'name',
            [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Jonah D. Kwon', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'designation',
            [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'CEO / Founder', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'image',
            [
                'label' => __( 'Author Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
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
                            <li><i class="far fa-star"></i></li>',
                'options' => [
                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>'  => __( '1 Star', 'plugin-domain' ),

                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>' => __( '2 Star', 'plugin-domain' ),

                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>' => __( '3 Star', 'plugin-domain' ),

                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>' => __( '4 Star', 'plugin-domain' ),

                    '<li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>' => __( '5 Star', 'plugin-domain' ),
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
                        'name' => 'Jonah D. Kwon',
                    ],
                    [
                        'name' => 'Jonah D. Kwon',
                    ],
                    [
                        'name' => 'Jonah D. Kwon',
                    ],

                ],
                'title_field' => '{{{ name }}}',
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
                    '{{WRAPPER}} .apihu-port-testimonial-area' => 'background: {{VALUE}}',
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
                    '{{WRAPPER}} .apihu-port-testimonial-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $this->add_control(
            'info_color',
            [
                'label' => __('Information Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Information Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-text',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial_style',
            [
                'label' => __( 'Testimonial Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'comment_color',
            [
                'label' => __('Comment Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial .apihu-port-testimonial-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'comment_typo',
                'label' => __('Comment Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial .apihu-port-testimonial-text',
            ]
        );
        $this->add_control(
            'name_color',
            [
                'label' => __('Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial .apihu-port-testimonial-meta .apihu-port-testimonial-meta-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Name_typo',
                'label' => __('Name Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial .apihu-port-testimonial-meta .apihu-port-testimonial-meta-text h3',
            ]
        );
        $this->add_control(
            'Designation_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial .apihu-port-testimonial-meta .apihu-port-testimonial-meta-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Designation_typo',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial .apihu-port-testimonial-meta .apihu-port-testimonial-meta-text p',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testi_box_bg',
            [
                'label' => __( 'Testimonial Box Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            '__testimonial_box_bg',
            [
                'label' => __( 'Testimonial Box Bg', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'testimonail_box_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'testimonial_box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial',
            ]
        );
        $this->add_control(
            '__testimonial_box_meta_bg',
            [
                'label' => __( 'Testimonial Meta Bg', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'testimonail_box_meta_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-single-testimonial .apihu-port-testimonial-meta',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial_arrow_style',
            [
                'label' => __( 'Arrow Style', 'appilo' ),
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
            'nav_icon_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-testimonial-slider .owl-nav .owl-prev, .apihu-port-testimonial-area .apihu-port-testimonial-slider .owl-nav .owl-next' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_bg_color',
            [
                'label' => __('Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-testimonial-slider .owl-nav .owl-prev, .apihu-port-testimonial-area .apihu-port-testimonial-slider .owl-nav .owl-next' => 'background: {{VALUE}}',
                ],
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
            'nav_icon_hover_color',
            [
                'label' => __('Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-testimonial-slider .owl-nav .owl-prev:hover, .apihu-port-testimonial-area .apihu-port-testimonial-slider .owl-nav .owl-next:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'arrow__hover_background',
            'label' => __( 'Background', 'appilo' ),
            'types' => [ 'gradient' ],
            'selector' => '{{WRAPPER}} .apihu-port-testimonial-area .apihu-port-testimonial-slider .owl-nav .owl-prev:hover, .apihu-port-testimonial-area .apihu-port-testimonial-slider .owl-nav .owl-next:hover',
        ]
    );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $sub_title = $settings['sub_title'];
        $title = $settings['title'];
        $info = $settings['info'];
        ?>

        <!-- Testimonial Start -->
        <div class="apihu-port-testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center-md">
                        <div class="apihu-port-section-heading">
                            <p class="apihu-port-section-subtitle"><?php echo $sub_title; ?></p>
                            <h2 class="apihu-port-section-title"><?php echo $title; ?></h2>
                            <p class="apihu-port-section-text">
                                <?php echo $info; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="apihu-port-testimonial-slider owl-carousel">
                            <?php
                                foreach ($settings['testimonial_list'] as $testiminial):
                            ?>

                            <div class="apihu-port-single-testimonial">
                                <ul class="apihu-port-testimonial-ratings">
                                    <?php echo $testiminial['ratting']; ?>
                                </ul>
                                <p class="apihu-port-testimonial-text"><?php echo $testiminial['comment']; ?></p>
                                <div class="apihu-port-testimonial-meta">
                                    <div class="apihu-port-testimonial-meta-text">
                                        <h3><?php echo $testiminial['name']; ?></h3>
                                        <p><?php echo $testiminial['designation']; ?></p>
                                    </div>
                                    <div class="apihu-port-testimonial-meta-img">
                                        <img src="<?php echo $testiminial['image']['url']; ?>" alt="Testimonial Author">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_testimonial());
