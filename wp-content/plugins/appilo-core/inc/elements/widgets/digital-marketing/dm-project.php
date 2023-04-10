<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_project extends Widget_Base
{

    public function get_name()
    {
        return 'dm_project';
    }

    public function get_title()
    {
        return __('Digital Marketing Project', 'appilo');
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
                        'cat_title' => __('UI/UX Design', 'appilo'),
                        'cat_id' => __('1', 'appilo'),
                    ], [
                        'cat_title' => __('Website Design', 'appilo'),
                        'cat_id' => __('2', 'appilo'),
                    ], [
                        'cat_title' => __('Digital Marketing', 'appilo'),
                        'cat_id' => __('3', 'appilo'),
                    ],[
                        'cat_title' => __('Web Development', 'appilo'),
                        'cat_id' => __('4', 'appilo'),
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
            'slider_title_1',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('App landing 01 (Main demo)', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_desc_1',
            [
                'label' => __('Description', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __(' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ecenas accumsan lacus vel fa', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_features_1',
            [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul><li>Digital project planning and resourcing Worlds</li>
                                       <li>Creative project planning and resourcing</li>
                                       <li>Let your audience about your brand</li>
                                  </ul>', 'appilo' ),
                'placeholder' => __( 'Type your features here', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'slider_btn_1',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Multi Demo', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_btn_link_1', [
                'label' => __('Button Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'http://appilo.themexriver.net/main',
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
                        'slider_title' => 'UI/UX Design',
                    ], [
                        'slider_title' => 'Website Design',
                    ], [
                        'slider_title' => 'Digital Marketing',
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
            'slider_title_2',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('App landing 01 (Main demo)', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_desc_2',
            [
                'label' => __('Description', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ecenas accumsan lacus vel fa', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_features_2',
            [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul><li>Digital project planning and resourcing Worlds</li>
                                       <li>Creative project planning and resourcing</li>
                                       <li>Let your audience about your brand</li>
                                  </ul>', 'appilo' ),
                'placeholder' => __( 'Type your features here', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'slider_btn_2',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Multi Demo', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_btn_link_2', [
                'label' => __('Button Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'http://appilo.themexriver.net/main',
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
                'title_field' => '{{{ slider_title }}}',
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
            'slider_title_3',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('App landing 01 (Main demo)', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_desc_3',
            [
                'label' => __('Description', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ecenas accumsan lacus vel fa', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_features_3',
            [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul><li>Digital project planning and resourcing Worlds</li>
                                       <li>Creative project planning and resourcing</li>
                                       <li>Let your audience about your brand</li>
                                  </ul>', 'appilo' ),
                'placeholder' => __( 'Type your features here', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'slider_btn_3',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Multi Demo', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_btn_link_3', [
                'label' => __('Button Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'http://appilo.themexriver.net/main',
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
                'title_field' => '{{{ slider_title }}}',
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
            'slider_title_4',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('App landing 01 (Main demo)', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_desc_4',
            [
                'label' => __('Description', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ecenas accumsan lacus vel fa', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_features_4',
            [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul><li>Digital project planning and resourcing Worlds</li>
                                       <li>Creative project planning and resourcing</li>
                                       <li>Let your audience about your brand</li>
                                  </ul>', 'appilo' ),
                'placeholder' => __( 'Type your features here', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'slider_btn_4',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Multi Demo', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_btn_link_4', [
                'label' => __('Button Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'http://appilo.themexriver.net/main',
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
                'title_field' => '{{{ slider_title }}}',
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
                    '{{WRAPPER}} .app-dm-projct-tab-btn li a.active.show' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'active_fonts',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-projct-tab-btn li a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'active_bg',
                'label' => __('Active Bg', 'appilo'),
                'types' => ['gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-dm-projct-tab-btn li a.active.show',
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
                    '{{WRAPPER}} .app-dm-projct-tab-btn li a' => 'color: {{VALUE}}',
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
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-project-slider-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-project-slider-text h3',
            ]
        );
        $this->add_control(
            'desc_color',
            [
                'label' => __('Description Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-project-slider-text p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .app-dm-project-slider-text ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'desc_typo',
                'label' => __('Description Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-project-slider-text p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_style',
            [
                'label' => __( 'Slider Button Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typo',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-btn a',
            ]
        );
        $this->add_control(
            'btn_shape_color',
            [
                'label' => __('Button Shape Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __('Button Bg', 'appilo'),
                'types' => ['gradient'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-dm-btn a',
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();



        echo '<div class="app-dm-project-tab-slider-content">
                    <div class="app-dm-projct-tab-btn text-center">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">';
                if ($settings['demo_cat_list']) {
                    $index = 0;
                    foreach ($settings['demo_cat_list'] as $demo_category) {
                        $index++;
                        if ($index == 1){
                            $active = 'active';
                            $show = 'show';
                        }else{
                            $active = '';
                            $show = '';
                        }
                        echo '<li class="nav-item"><a href="#" data-target="#'.$demo_category['cat_id'].'" data-toggle="tab" class="nav-link text-capitalize '.$active.' '.$show.'">'.$demo_category['cat_title'].'</a></li>';
                    }
                }
                echo '</ul>
                    </div>
                    <div class="app-dm-project-tab-inner-content">
                        <div class="tab-content" id="myTabContent">';

                        echo '<!--Tab 1 Sliders-->
                            <div class="tab-pane fade show active" id="'.$settings['tab_id_1'].'" role="tabpanel" aria-labelledby="home-tab">
                                <div class="app-dm-project-slider-wrapper">
                                    <div class="app-dm-project-slider-area">';

                        if ($settings['slider_list_1']){
                            foreach ($settings['slider_list_1'] as $sliders){

                            echo'<div class="app-dm-project-slider-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="app-dm-project-img">
                                                        ' . get_that_image($sliders['image_1']) . '
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="app-dm-project-slider-text app-dm-headline pera-content ul-li-block">
                                                        <h3>'.$sliders['slider_title_1'].'</h3>
                                                        <p>'.$sliders['slider_desc_1'].'</p>
                                                        
                                                            '.$sliders['slider_features_1'].'
                                                            
                                                        <div class="app-dm-btn">
                                                            <a class="d-flex justify-content-center align-items-center" ' . get_that_link($sliders['slider_btn_link_1']) . '>'.$sliders['slider_btn_1'].' <i class="flaticon-right-arrow"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                            }
                        }
                            echo'</div>
                                </div>
                            </div>';
                            
                        echo' <!--Tab 2 Sliders-->
                            <div class="tab-pane fade" id="'.$settings['tab_id_2'].'" role="tabpanel" aria-labelledby="home-tab">
                                <div class="app-dm-project-slider-wrapper">
                                    <div class="app-dm-project-slider-area">';

                        if ($settings['slider_list_2']){
                            foreach ($settings['slider_list_2'] as $sliders_2){

                            echo'<div class="app-dm-project-slider-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="app-dm-project-img">
                                                        ' . get_that_image($sliders_2['image_2']) . '
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="app-dm-project-slider-text app-dm-headline pera-content ul-li-block">
                                                        <h3>'.$sliders_2['slider_title_2'].'</h3>
                                                        <p>'.$sliders_2['slider_desc_2'].'</p>
                                                        <ul>
                                                            '.$sliders_2['slider_features_2'].'
                                                        </ul>
                                                        <div class="app-dm-btn">
                                                            <a class="d-flex justify-content-center align-items-center" ' . get_that_link($sliders_2['btn_link_2']) . '>'.$sliders_2['slider_btn_2'].' <i class="flaticon-right-arrow"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                            }
                        }
                            echo'</div>
                                </div>
                            </div>';

                        echo' <!--Tab 3 Sliders-->
                            <div class="tab-pane fade" id="'.$settings['tab_id_3'].'" role="tabpanel" aria-labelledby="home-tab">
                                <div class="app-dm-project-slider-wrapper">
                                    <div class="app-dm-project-slider-area">';

                        if ($settings['slider_list_3']){
                            foreach ($settings['slider_list_3'] as $sliders_3){

                            echo'<div class="app-dm-project-slider-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="app-dm-project-img">
                                                        ' . get_that_image($sliders_3['image_3']) . '
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="app-dm-project-slider-text app-dm-headline pera-content ul-li-block">
                                                        <h3>'.$sliders_3['slider_title_3'].'</h3>
                                                        <p>'.$sliders_3['slider_desc_3'].'</p>
                                                        <ul>
                                                            '.$sliders_3['slider_features_3'].'
                                                        </ul>
                                                        <div class="app-dm-btn">
                                                            <a class="d-flex justify-content-center align-items-center" ' . get_that_link($sliders_3['btn_link_3']) . '>'.$sliders_3['slider_btn_3'].' <i class="flaticon-right-arrow"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                            }
                        }
                            echo'</div>
                                </div>
                            </div>';

                        echo' <!--Tab 4 Sliders-->
                            <div class="tab-pane fade" id="'.$settings['tab_id_4'].'" role="tabpanel" aria-labelledby="home-tab">
                                <div class="app-dm-project-slider-wrapper">
                                    <div class="app-dm-project-slider-area">';

                        if ($settings['slider_list_4']){
                            foreach ($settings['slider_list_4'] as $sliders_4){

                            echo'<div class="app-dm-project-slider-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="app-dm-project-img">
                                                        ' . get_that_image($sliders_4['image_4']) . '
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="app-dm-project-slider-text app-dm-headline pera-content ul-li-block">
                                                        <h3>'.$sliders_4['slider_title_4'].'</h3>
                                                        <p>'.$sliders_4['slider_desc_4'].'</p>
                                                        <ul>
                                                            '.$sliders_4['slider_features_4'].'
                                                        </ul>
                                                        <div class="app-dm-btn">
                                                            <a class="d-flex justify-content-center align-items-center" ' . get_that_link($sliders_4['btn_link_4']) . '>'.$sliders_4['slider_btn_4'].' <i class="flaticon-right-arrow"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                            }
                        }
                            echo'</div>
                                </div>
                            </div>';


                            
                            
                            
                            
                            
                     echo '</div>
                    </div>
                </div>';

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new dm_project());
?>