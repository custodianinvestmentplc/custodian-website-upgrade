<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_banner extends Widget_Base
{

    public function get_name()
    {
        return 'resume_banner';
    }

    public function get_title()
    {
        return __('Resume/CV Banner', 'appilo');
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
        $this->add_control(
            'shape_3',
            [
                'label' => __( 'Shape 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_4',
            [
                'label' => __( 'Shape 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'hero_texts',
            [
                'label' => __( 'Text Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'name',
            [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Ramon', 'appilo' ),
            ]
        );
        $this->add_control(
            'sub_heading',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Welcome to My World', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Hi I’m Jon', 'appilo' ),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'type_name',
            [
                'label' => __( 'Type Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Ramon', 'appilo' ),
            ]
        );
        $this->add_control(
            'typer_list',
            [
                'label' => __('Typer List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'type_name' => 'Ramon',
                    ],[
                        'type_name' => 'Porter',
                    ],[
                        'type_name' => 'Walter',
                    ],

                ],
                'title_field' => '{{{ type_name }}}',
            ]
        );
        $this->add_control(
            'designation',
            [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Product Designer', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'appilo' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'button_content',
            [
                'label' => __( 'Button', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'btn1_text',
            [
                'label' => __( 'Button 1 Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Hire Me', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn1_url',
            [
                'label' => __( 'Button 1 Link', 'appilo' ),
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
            'btn2_text',
            [
                'label' => __( 'Button 2 Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Download CV', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn2_url',
            [
                'label' => __( 'Button 2 Link', 'appilo' ),
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
            'user_img_content',
            [
                'label' => __( 'User Image', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'social_icon_content',
            [
                'label' => __( 'Social Icon', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'social1_icon',
            [
                'label' => __( 'Icon 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'social1_url',
            [
                'label' => __( 'Social 1 Link', 'appilo' ),
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
            'social2_icon',
            [
                'label' => __( 'Icon 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'social2_url',
            [
                'label' => __( 'Social 2 Link', 'appilo' ),
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
            'social3_icon',
            [
                'label' => __( 'Icon 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-instagram',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'social3_url',
            [
                'label' => __( 'Social 3 Link', 'appilo' ),
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
                'label' => __('Section Background', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Background', 'plugin-domain' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-hero-area',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'text_style',
            [
                'label' => __('Text Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'name_color',
            [
                'label' => __('Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-side-style-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'name_typography',
                'label' => __( 'Name Typography', 'plugin-domain' ),
                'selector' => '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-side-style-text',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'name_text_shadow',
                'label' => __( 'Name Text Shadow', 'plugin-domain' ),
                'selector' => '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-side-style-text',
            ]
        );
        $this->add_control(
            'sub_title_color',
            [
                'label' => __('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_fonts',
                'label' => __('Sub Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'typer_title_color',
            [
                'label' => __('Typer Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-title .apihu-port-hero-title-color' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-title',
            ]
        );
        $this->add_control(
            'designation_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-title .apihu-port-hero-title-small-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_fonts',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-title .apihu-port-hero-title-small-text',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-text',
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
            '_btn_1_style',
            [
                'label' => __('Button 1', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_1_color',
            [
                'label' => __('Button 1 Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.apihu-port-primary-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_1_fonts',
                'label' => __('Button 1 Typography', 'appilo'),
                'selector' => '{{WRAPPER}} a.apihu-port-primary-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_1_bg',
                'label' => __('Background Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} a.apihu-port-primary-btn:before',

            ]
        );
        $this->add_control(
            '_btn_2_style',
            [
                'label' => __('Button 2', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_2_color',
            [
                'label' => __('Button 2 Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-btn-white' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_2_fonts',
                'label' => __('Button 1 Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-btn-white',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_2_bg',
                'label' => __('Background Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-btn-white',

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
            '_btn_1_hover_style',
            [
                'label' => __('Button 1', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_1_hover_color',
            [
                'label' => __('Button 1 Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.apihu-port-primary-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_1_hover_bg',
                'label' => __('Background Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} a.apihu-port-primary-btn:hover',

            ]
        );
        $this->add_control(
            '_btn_2_hover_style',
            [
                'label' => __('Button 2', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_2_hover_color',
            [
                'label' => __('Button 2 Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-btn-white:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_2_hover_bg',
                'label' => __('Background Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-btn-white:before',

            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'social_style',
            [
                'label' => __( 'Social Icon Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcncst');
        $this->start_controls_tab(
            'tpcs1',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'social_icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-social ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'social_icon_size',
            [
                'label' => __('Social Icon Size', 'appilo'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-social ul li a' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'teesp2',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'social_icon_hover_color',
            [
                'label' => __('Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-social ul li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'social_icon_hover_bg',
                'label' => __('Background Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .apihu-port-hero-area .apihu-port-hero-social ul li a:hover',

            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>

        <!-- Hero Start -->
        <div class="apihu-port-hero-area" id="apihu-port-hero">

            <!-- Hero bg shape -->
            <img class="apihu-port-hero-shape-1" src="<?php echo esc_url($settings['shape_1']['url']); ?>" alt="Shape">
            <img class="apihu-port-hero-shape-2" src="<?php echo esc_url($settings['shape_2']['url']); ?>" alt="Shape">
            <img class="apihu-port-hero-shape-3" src="<?php echo esc_url($settings['shape_3']['url']); ?>" alt="Shape">
            <img class="apihu-port-hero-shape-4" src="<?php echo esc_url($settings['shape_4']['url']); ?>" alt="Shape">

            <span class="apihu-port-hero-side-style-text"><?php echo esc_html($settings['name']); ?></span>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="apihu-port-hero-left">
                            <p class="apihu-port-hero-subtitle wow slideInDown"><?php echo esc_html($settings['sub_heading']); ?></p>
                            <h1 class="apihu-port-hero-title cd-headline clip is-full-width"><?php echo esc_html($settings['heading']); ?> <span class="apihu-port-hero-title-color cd-words-wrapper">
                             <?php
                             $i = 0;
                                foreach ($settings['typer_list'] as $typer):;
                                    $i++;
                                if ($i == 1){
                                    $is_visiable = 'is-visible';
                                }else{
                                    $is_visiable = '';
                                }
                             ?>
								<b class="<?php echo $is_visiable; ?>"><?php echo __($typer['type_name']); ?></b>

                             <?php
                                endforeach;
                             ?>
							</span>
                                <span class="apihu-port-hero-title-small-text"><?php echo esc_html($settings['designation']); ?></span>
                            </h1>
                            <p class="apihu-port-hero-text wow slideInUp"><?php echo __($settings['info']); ?></p>
                            <ul class="apihu-port-hero-btn-wrap wow slideInUp">
                                <li><a class="apihu-port-primary-btn apihu-port-hero-btn-gradient" href="<?php echo esc_url($settings['btn1_url']['url']); ?>"><?php echo esc_html($settings['btn1_text']); ?></a></li>
                                <li><a class="apihu-port-secondary-btn apihu-port-hero-btn-white" href="<?php echo esc_url($settings['btn2_url']['url']); ?>"><?php echo esc_html($settings['btn2_text']); ?> <i class="fas fa-download"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!-- hero area social -->
                        <div class="apihu-port-hero-social">
                            <ul>
                                <li><a href="<?php echo esc_url($settings['social1_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['social1_icon'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                <li><a href="<?php echo esc_url($settings['social2_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['social2_icon'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                <li><a href="<?php echo esc_url($settings['social3_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['social3_icon'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                            </ul>
                        </div>
                        <div class="apihu-port-hero-right wow slideInRight">
                            <div id="apihu-port-hero-right-img" class="apihu-port-hero-right-img">
                                <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="<?php echo $settings['image']['alt']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_banner());
