<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_project extends Widget_Base
{

    public function get_name()
    {
        return 'seo_agency_project';
    }

    public function get_title()
    {
        return __('SEO Agency Project', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-apps';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'project_content',
            [
                'label' => __( 'Project Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __('Project Subtitle', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Appilo Project', 'appilo'),
                'label_block' => __('true', 'appilo'),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Project Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Appilo work Showcase', 'appilo'),
                'label_block' => __('true', 'appilo'),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __('Project Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', 'appilo'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'category_list_item',
            [
                'label' => __('Project Tab List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'cat_title',
            [
                'label' => __('Tab Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('UI/UX Design', 'appilo'),
            ]
        );
        $repeater->add_control(
            'cat_id',
            [
                'label' => __('Tab ID', 'appilo'),
                'type' => Controls_Manager::NUMBER,
                'default' => __('1', 'appilo'),
            ]
        );
        $this->add_control(
            'demo_cat_list',
            [
                'label' => __('Tab List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'cat_title' => __('All Project', 'appilo'),
                        'cat_id' => __('1', 'appilo'),
                    ], [
                        'cat_title' => __('Email Marketing', 'appilo'),
                        'cat_id' => __('2', 'appilo'),
                    ], [
                        'cat_title' => __('Business Research', 'appilo'),
                        'cat_id' => __('3', 'appilo'),
                    ],[
                        'cat_title' => __('SEO Marketing', 'appilo'),
                        'cat_id' => __('4', 'appilo'),
                    ],[
                        'cat_title' => __('Digital Marketing', 'appilo'),
                        'cat_id' => __('5', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ cat_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'demo_list_item',
            [
                'label' => __('Tab Sliders 1', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tab_id_1',
            [
                'label' => __('Tab ID', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('1', 'appilo'),
                'placeholder' => __('1', 'appilo'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'image_1', [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'slider_subtitle',
            [
                'label' => __('Sub Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'btn_link_1', [
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
            'slider_list_1',
            [
                'label' => __('Slider List 1', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slider_title' => 'Business Research',
                    ], [
                        'slider_title' => 'Business Research',
                    ], [
                        'slider_title' => 'Business Research',
                    ],
                ],
                'title_field' => '{{{ slider_title }}}',
            ]
        );
        $this->end_controls_section();
        /*Tab 2 Slider*/
        $this->start_controls_section(
            'demo_list_item_2',
            [
                'label' => __('Tab Sliders 2', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tab_id_2',
            [
                'label' => __('Tab ID', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('2', 'appilo'),
                'placeholder' => __('2', 'appilo'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'image_2', [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'slider_subtitle_2',
            [
                'label' => __('Subtitle', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_title_2',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'btn_link_2', [
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
            'slider_list_2',
            [
                'label' => __('Slider List 2', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slider_title' => 'UI/UX Design',
                    ], [
                        'slider_title' => 'Website Design',
                    ], [
                        'slider_title' => 'Digital Marketing',
                    ],
                ],
                'title_field' => '{{{ slider_title_2 }}}',
            ]
        );
        $this->end_controls_section();
        /*Tab 3 Slider*/
        $this->start_controls_section(
            'demo_list_item_3',
            [
                'label' => __('Tab Sliders 3', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tab_id_3',
            [
                'label' => __('Tab ID', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('3', 'appilo'),
                'placeholder' => __('3', 'appilo'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'image_3', [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'slider_subtitle_3',
            [
                'label' => __('Subtitle', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_title_3',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'btn_link_3', [
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
            'slider_list_3',
            [
                'label' => __('Slider List 3', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slider_title' => 'UI/UX Design',
                    ], [
                        'slider_title' => 'Website Design',
                    ], [
                        'slider_title' => 'Digital Marketing',
                    ],
                ],
                'title_field' => '{{{ slider_title_3 }}}',
            ]
        );
        $this->end_controls_section();
        /*Tab 4 Slider*/
        $this->start_controls_section(
            'demo_list_item_4',
            [
                'label' => __('Tab Sliders 4', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tab_id_4',
            [
                'label' => __('Tab ID', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('4', 'appilo'),
                'placeholder' => __('4', 'appilo'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'image_4', [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'slider_subtitle_4',
            [
                'label' => __('Sub Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_title_4',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'btn_link_4', [
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
            'slider_list_4',
            [
                'label' => __('Slider List 4', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slider_title' => 'UI/UX Design',
                    ], [
                        'slider_title' => 'Website Design',
                    ], [
                        'slider_title' => 'Digital Marketing',
                    ],
                ],
                'title_field' => '{{{ slider_title_4 }}}',
            ]
        );
        $this->end_controls_section();
        /*Tab 5 Slider*/
        $this->start_controls_section(
            'demo_list_item_5',
            [
                'label' => __('Tab Sliders 5', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tab_id_5',
            [
                'label' => __('Tab ID', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('5', 'appilo'),
                'placeholder' => __('5', 'appilo'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'image_5', [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'slider_subtitle_5',
            [
                'label' => __('Sub Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_title_5',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Business Research', 'appilo'),
            ]
        );
        $repeater->add_control(
            'btn_link_5', [
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
            'slider_list_5',
            [
                'label' => __('Slider List 5', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slider_title' => 'UI/UX Design',
                    ], [
                        'slider_title' => 'Website Design',
                    ], [
                        'slider_title' => 'Digital Marketing',
                    ],
                ],
                'title_field' => '{{{ slider_title_5 }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'project_content_style',
            [
                'label' => __( 'Project Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'subtitle_color',
            [
                'label' => __('Subtitle Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-title-area .apldg2-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typo',
                'label' => __('Sub Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-title-area .apldg2-subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-title-area .apldg2-headline h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-title-area .apldg2-headline h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-title-area .apldg2-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-title-area .apldg2-pera-txt p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'tab_style_content',
            [
                'label' => __('Tab Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Active Tab', 'xltab' ),
            ]
        );
        $this->add_control(
            'active_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-nav ul li a.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'active_fonts',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-project-nav ul li a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'active_bg',
                'label' => __('Active Bg', 'appilo'),
                'types' => ['gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-project-nav ul li a::before',
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Inactive Tab', 'xltab' ),
            ]
        );
        $this->add_control(
            'inactive_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-nav ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'slider_content_style',
            [
                'label' => __( 'Slider Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'slider_subtitle_color',
            [
                'label' => __('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .b-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'slider_subtitle_typo',
                'label' => __('Sub Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .b-subtitle',
            ]
        );
        $this->add_control(
            'slider_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .apldg2-headline h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'slider_title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .apldg2-headline h5',
            ]
        );
        $this->add_control(
            'title_hover_color',
            [
                'label' => __('Title Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .apldg2-headline h5:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_more_options',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .apldg2-readmore-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .apldg2-readmore-btn a',
            ]
        );
        $this->add_control(
            'btn_hover_more_options',
            [
                'label' => __( 'Button Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .apldg2-readmore-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .single-item .apldg2-blog-bottom .apldg2-readmore-btn a::before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'nav_style',
            [
                'label' => __( 'Slider Nav Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'nav_active_color',
            [
                'label' => __('Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .slick-dots li.slick-active' => 'border-color: {{VALUE}}',
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_inactive_color',
            [
                'label' => __('Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-project-area .apldg2-project-wrapper .apldg2-project-slider .slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Project Area -->
        <div class="apldg2-project-area">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="apldg2-title-area wow fadeInUp">
                            <span class="apldg2-subtitle"><?php echo esc_html($settings['sub_title']) ?></span>
                            <div class="apldg2-headline">
                                <h3><?php echo esc_html($settings['title']) ?></h3>
                            </div>
                            <div class="apldg2-pera-txt">
                                <p><?php echo esc_html($settings['info']) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-end">
                        <div class="apldg2-project-nav">
                            <ul class="nav nav-pills">

                                <?php
                                        $i = 0;
                                    foreach ($settings['demo_cat_list'] as $demo_category):

                                        $i++;
                                        if($i == 1){
                                            $active = 'active';
                                        }else{
                                            $active = '';
                                        }
                                ?>
                                    <li><a class="<?php echo $active; ?>" data-toggle="pill" href="#<?php echo $demo_category['cat_id']; ?>"><?php echo $demo_category['cat_title']; ?></a></li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="apldg2-project-wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="<?php echo $settings['tab_id_1']; ?>">
                            <div class="apldg2-project-slider row">
                                <?php
                                    foreach ($settings['slider_list_1'] as $sliders):
                                ?>
                                <div class="single-item col-md-6">
                                    <div class="thumb-wrapper">
                                        <img src="<?php echo $sliders['image_1']['url'];?>" alt="">
                                    </div>
                                    <div class="apldg2-blog-bottom">
                                        <div class="blog-left">
                                            <a href="<?php echo $sliders['slider_btn_link_1']['url']; ?>"><span class="b-subtitle"><?php echo $sliders['slider_subtitle']; ?></span></a>
                                            <div class="apldg2-headline">
                                                <a href="<?php echo $sliders['slider_btn_link_1']['url']; ?>"><h5><?php echo $sliders['slider_title']; ?></h5></a>
                                            </div>
                                        </div>
                                        <div class="apldg2-readmore-btn">
                                            <a href="<?php echo $sliders['slider_btn_link_1']['url']; ?>"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endforeach;
                                ?>    

                            </div>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $settings['tab_id_2']; ?>">
                            <div class="apldg2-project-slider row">
                                <?php
                                    foreach ($settings['slider_list_2'] as $sliders_2):
                                ?>
                                <div class="single-item col-md-6">
                                    <div class="thumb-wrapper">
                                        <img src="<?php echo $sliders_2['image_2']['url'];?>" alt="">
                                    </div>
                                    <div class="apldg2-blog-bottom">
                                        <div class="blog-left">
                                            <a href="<?php echo $sliders_2['btn_link_2']['url'];?>"><span class="b-subtitle"><?php echo $sliders_2['slider_subtitle_2'];?></span></a>
                                            <div class="apldg2-headline">
                                                <a href="<?php echo $sliders_2['btn_link_2']['url'];?>"><h5><?php echo $sliders_2['slider_title_2'];?></h5></a>
                                            </div>
                                        </div>
                                        <div class="apldg2-readmore-btn">
                                            <a href="<?php echo $sliders_2['btn_link_2']['url'];?>"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endforeach;
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $settings['tab_id_3']; ?>">
                            <div class="apldg2-project-slider row">
                                <?php
                                    foreach ($settings['slider_list_3'] as $sliders_3):
                                ?>
                                <div class="single-item col-md-6">
                                    <div class="thumb-wrapper">
                                        <img src="<?php echo $sliders_3['image_3']['url'];?>" alt="">
                                    </div>
                                    <div class="apldg2-blog-bottom">
                                        <div class="blog-left">
                                            <a href="<?php echo $sliders_3['btn_link_3']['url'];?>"><span class="b-subtitle"><?php echo $sliders_3['slider_subtitle_3'];?></span></a>
                                            <div class="apldg2-headline">
                                                <a href="<?php echo $sliders_3['btn_link_3']['url'];?>"><h5><?php echo $sliders_3['slider_title_3'];?></h5></a>
                                            </div>
                                        </div>
                                        <div class="apldg2-readmore-btn">
                                            <a href="<?php echo $sliders_3['btn_link_3']['url'];?>"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endforeach;
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $settings['tab_id_4']; ?>">
                            <div class="apldg2-project-slider row">
                                <?php
                                    foreach ($settings['slider_list_4'] as $sliders_4):
                                ?>
                                <div class="single-item col-md-6">
                                    <div class="thumb-wrapper">
                                        <img src="<?php echo $sliders_4['image_4']['url'];?>" alt="">
                                    </div>
                                    <div class="apldg2-blog-bottom">
                                        <div class="blog-left">
                                            <a href="#"><span class="b-subtitle"><?php echo $sliders_4['slider_subtitle_4'];?></span></a>
                                            <div class="apldg2-headline">
                                                <a href="#"><h5><?php echo $sliders_4['slider_title_4'];?></h5></a>
                                            </div>
                                        </div>
                                        <div class="apldg2-readmore-btn">
                                            <a href="<?php echo $sliders_4['btn_link_4']['url'];?>"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endforeach;
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $settings['tab_id_5']; ?>">
                            <div class="apldg2-project-slider row">
                                <?php
                                    foreach ($settings['slider_list_5'] as $sliders_5):
                                ?>
                                <div class="single-item col-md-6">
                                    <div class="thumb-wrapper">
                                        <img src="<?php echo $sliders_5['image_5']['url'];?>" alt="">
                                    </div>
                                    <div class="apldg2-blog-bottom">
                                        <div class="blog-left">
                                            <a href="#"><span class="b-subtitle"><?php echo $sliders_5['slider_subtitle_5'];?></span></a>
                                            <div class="apldg2-headline">
                                                <a href="#"><h5><?php echo $sliders_5['slider_title_5'];?></h5></a>
                                            </div>
                                        </div>
                                        <div class="apldg2-readmore-btn">
                                            <a href="<?php echo $sliders_5['btn_link_5']['url'];?>"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Project Area End -->


<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_project());
?>