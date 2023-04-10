<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_portfolio extends Widget_Base
{

    public function get_name()
    {
        return 'resume_portfolio';
    }

    public function get_title()
    {
        return __('Resume/CV Portfolio', 'appilo');
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
                'label' => __( 'Shape', 'appilo' ),
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
                'default' => __( 'Portfolio', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'My Creative Wroks', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'service_lists',
            [
                'label' => __( 'Tab List', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'all_tab_title',
            [
                'label' => __( 'All Works', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'All Works', 'appilo' ),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            '_tab_title',
            [
                'label' => __( 'Tab Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Web Development', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'tab_id',
            [
                'label' => __( 'ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'webdev', 'appilo' ),
            ]
        );
        $this->add_control(
            'tab_list',
            [
                'label' => __('Tab list', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        '_tab_title' => 'Web Development',
                    ],[
                        '_tab_title' => 'UI/UX Design',
                    ],[
                        '_tab_title' => 'Branding Design',
                    ],

                ],
                'title_field' => '{{{ _tab_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'tab__content_lists',
            [
                'label' => __( 'Tab Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            '_content_id',
            [
                'label' => __( 'ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'webdev', 'appilo' ),
            ]
        );
        $repeater->add_control(
            '_category',
            [
                'label' => __( 'Category', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Product Design', 'appilo' ),
            ]
        );
        $repeater->add_control(
            '_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'The Services Provide for Web Design', 'appilo' ),
            ]
        );
        $repeater->add_control(
            '_description',
            [
                'label' => __( 'Description', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Disse ultrices gravida. Risus comod viverra maecenas accumsan Lacus vel facilisis.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            '_btn_text',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Explore More', 'appilo' ),
            ]
        );
        $repeater->add_control(
            '_btn_url',
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
        $repeater->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'tab_content',
            [
                'label' => __('Tab Content', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        '_title' => 'The Services Provide for Web Design',
                    ],[
                        '_title' => 'The Services Provide for App Development',
                    ],[
                        '_title' => 'The Services Provide for Web Development',
                    ],[
                        '_title' => 'The Services Provide for Marketing',
                    ],

                ],
                'title_field' => '{{{ _title }}}',
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
                    '{{WRAPPER}} .apihu-port-portfolio-area' => 'background: {{VALUE}}',
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
                    '{{WRAPPER}} .apihu-port-portfolio-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'tab_nav_style',
            [
                'label' => __( 'Tav Nav Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'nav_title_color',
            [
                'label' => __('Nav Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-portfolio-navigation ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'service_title_typo',
                'label' => __('Nav Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-portfolio-navigation ul li',
            ]
        );
        $this->add_control(
            'service_info_color',
            [
                'label' => __('Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-portfolio-navigation ul' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'nav_box_shadow',
                'label' => __( 'Nav Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-portfolio-navigation ul',
            ]
        );
        $this->add_control(
            'tab_nav_hover_style',
            [
                'label' => __( 'Nav Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'nav_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient'],
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-portfolio-navigation ul li:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'nav_hover_box_shadow',
                'label' => __( 'Nav Hover Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-portfolio-navigation ul li:hover',
            ]
        );
        $this->add_control(
            'tab_active_nav_hover_style',
            [
                'label' => __( 'Active Nav Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'active_nav_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient'],
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-portfolio-navigation ul li.active',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'active_nav_hover_box_shadow',
                'label' => __( 'Nav Hover Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-portfolio-navigation ul li.active',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'portfolio_content_style',
            [
                'label' => __( 'Portfolio Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'content_category_color',
            [
                'label' => __('Category Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_category_typo',
                'label' => __('Category Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio span',
            ]
        );
        $this->add_control(
            'content_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio h3',
            ]
        );
        $this->add_control(
            'content_info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_info_typo',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio p',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'btn_style',
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
            'service_content_btn_color_',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_btn_typo',
                'label' => __('Button Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'portfolio_content_btn_background_',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'content_btn_box_shadow',
                'label' => __( 'Button Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio a',
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
        'service_content_btn_hover_color_',
        [
            'label' => __('Button Hover Color', 'appilo'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio a:hover' => 'color: {{VALUE}}',
            ],
        ]
    );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'service_content_btn_hover_background_',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio a:before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'content_btn_hover_box_shadow',
                'label' => __( 'Button Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-portfolio-area .apihu-port-single-portfolio a:before',
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
        $sub_title = $settings['sub_title'];
        $title = $settings['title'];
        ?>
        <!-- Portfolio Start -->
        <div class="apihu-port-portfolio-area" id="apihu-port-portfolio">
            <img class="apihu-port-portfolio-shape" src="<?php echo $shape1; ?>" alt="">

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
                    <div class="col-xl-12 text-center">
                        <div class="apihu-port-portfolio-navigation">
                            <ul>
                                <li class="active" data-filter="*"><?php echo $settings['all_tab_title']; ?></li>
                            <?php
                                foreach ($settings['tab_list'] as $tab):;
                                ?>
                                    <li data-filter=".<?php echo $tab['tab_id']; ?>"><?php echo $tab['_tab_title']; ?></li>
                                <?php
                                    endforeach;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row apihu-port-portfolio-grid">
                    <?php
                        foreach ($settings['tab_content'] as $tab_content):
                    ?>
                    <div class="col-xl-6 col-lg-6 col-md-6 apihu-port-portfolio-item <?php echo $tab_content['_content_id']; ?>">
                        <div class="apihu-port-single-portfolio">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <span><?php echo $tab_content['_category']; ?></span>
                                    <h3><?php echo $tab_content['_title']; ?></h3>
                                    <p><?php echo $tab_content['_description']; ?></p>
                                    <a href="<?php echo $tab_content['_btn_url']['url']; ?>"><?php echo $tab_content['_btn_text']; ?> <i class="fas fa-plus"></i></a>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="apihu-port-portfolio-img">
                                        <img src="<?php echo $tab_content['image']['url']; ?>" alt="<?php echo $tab_content['image']['alt']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!-- Portfolio End -->


<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_portfolio());
