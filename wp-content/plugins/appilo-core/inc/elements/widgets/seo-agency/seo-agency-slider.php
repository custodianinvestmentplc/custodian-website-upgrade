<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_slider extends Widget_Base
{

    public function get_name()
    {
        return 'seo-agency-slider';
    }

    public function get_title()
    {
        return __('Seo Agency Slider', 'appilo');
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
            'slider_content',
            [
                'label' => __( 'Slider Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sliderbg',
            [
                'label' => __( 'Slider Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape1',
            [
                'label' => __( 'Shape 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape2',
            [
                'label' => __( 'Shape 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape3',
            [
                'label' => __( 'Shape 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'scrooldown',
            [
                'label' => __( 'Scroll Down Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Scroll Down', 'appilo' ),
            ]
        );

        $this->add_control(
            'scrooldownid',
            [
                'label' => __( 'Scroll Down ID', 'appilo' ),
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
            'slider-right-img',
            [
                'label' => __( 'Slider Right Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'slider_social_section',
            [
                'label' => __( 'Social Icon', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'social_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_url',
            [
                'label' => __( 'Social Url', 'appilo' ),
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
            'social_list',
            [
                'label' => __( 'Social List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'social_icon' => [
                                'value' => 'fab fa-facebook-f',
                                'library' => 'solid',
                        ],
                    ],
                    [
                        'social_icon' => [
                            'value' => 'fab fa-twitter',
                            'library' => 'solid',
                        ],
                    ],
                    [
                        'social_icon' => [
                            'value' => 'fab fa-instagram',
                            'library' => 'solid',
                        ],
                    ],

                ],
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'slider',
            [
                'label' => __('Slider', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'slider_bg',
            [
                'label' => __( 'Background Shape', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'slider_title',
            [
                'label' => __('Slider Title', 'appilo'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __('Powerful digital marketing Simplified', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. maecenas accumsan lacus vel facilisis.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_btn_1',
            [
                'label' => __('Button Title 1', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Getting Started', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_btn_1_url', [
                'label' => __('Button Link 1', 'appilo'),
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
            'slider_btn_2',
            [
                'label' => __('Button Title 2', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('About Us', 'appilo'),
            ]
        );
        $repeater->add_control(
            'slider_btn_2_url', [
                'label' => __('Button Link 2', 'appilo'),
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
            'slider_list',
            [
                'label' => __('Slider List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Powerful digital marketing Simplified',
                    ],[
                        'title' => 'Powerful digital marketing Simplified',
                    ],[
                        'title' => 'Powerful digital marketing Simplified',
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'slide_style',
            [
                'label' => __('Slide Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-headline h1.hero-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-headline h1.hero-title',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-pera-txt p',
            ]
        );
        $this->add_control(
            'slide_btn_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'icon_normal',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'btn-color-1',
            [
                'label' => __('Button Color 1', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.apldg2-primary-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_1_typo',
                'label' => __( 'Button Typography 1', 'appilo' ),
                'selector' => '{{WRAPPER}} a.apldg2-primary-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_normal_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} a.apldg2-primary-btn',
            ]
        );
        $this->add_control(
            'slide_btn_2_heading',
            [
                'label' => __( 'Button Style 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn-color-2',
            [
                'label' => __('Button Color 2', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-slider .single-item .hero-btns .apldg2-secondary-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_2_typo',
                'label' => __( 'Button Typography 2', 'appilo' ),
                'selector' => '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-slider .single-item .hero-btns .apldg2-secondary-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_normal_background_2',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-slider .single-item .hero-btns .apldg2-secondary-btn',
            ]
        );
        $this->add_control(
            'btn-border-color-1',
            [
                'label' => __('Button Border Color 2', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-slider .single-item .hero-btns .apldg2-secondary-btn' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'icon_hover',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );

        $this->add_control(
            'btn-color-1-hover',
            [
                'label' => __('Button Hover Color 1', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.apldg2-primary-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_1',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} a.apldg2-primary-btn::before',
            ]
        );

        $this->add_control(
            'slide_btn_2_heading_hover',
            [
                'label' => __( 'Button Style 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn-color-2-hover',
            [
                'label' => __('Button Hover Color 2', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.apldg2-secondary-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn-color-2-hover-bg-color',
            [
                'label' => __('Button Hover BG Color 2', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.apldg2-secondary-btn:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn-color-2-hover-border-color',
            [
                'label' => __('Button Hover Border 2', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.apldg2-secondary-btn:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'slider_dot_style',
            [
                'label' => __( 'Slider Dot Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'slider_active_dot_color',
            [
                'label' => __('Active Dot Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-slider .slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-slider .slick-dots li.slick-active' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'slider_inactive_dot_color',
            [
                'label' => __('Inactive Dot Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-slider .slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
            'social-style',
            [
                'label' => __( 'Social Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'social_icon_color',
            [
                'label' => __('Social Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-social .social-icons a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'social_border_color',
            [
                'label' => __('Social Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-social .social-icons a' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'social-icon-hover-heading',
            [
                'label' => __( 'Social Icon Hover Options', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'social_icon_hover_color',
            [
                'label' => __('Social Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-social .social-icons a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'social_icon_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-social .social-icons a::before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'scroll_down_btn',
            [
                'label' => __( 'Scroll Down Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'scroll_down_btn_color',
            [
                'label' => __('Scroll Down Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-social .apldg2-scroll-next a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'scroll_down_typography',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apldg2-hero-section .apldg2-hero-social .apldg2-scroll-next a',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $sliderBg = $settings['sliderbg'];
        $shape1 = $settings['shape1'];
        $shape2 = $settings['shape2'];
        $shape3 = $settings['shape3'];
        $scrooldown = $settings['scrooldown'];
        $scrooldownid = $settings['scrooldownid'];
        $sliderRightImg = $settings['slider-right-img'];

        ?>

        <!-- Hero Section -->
        <div class="apldg2-hero-section" data-background="<?php echo esc_url($sliderBg['url']); ?>">
            <span class="apldg2-right-shape"><img src="<?php echo esc_url($shape1['url']); ?>" alt=""></span>
            <span class="apldg2-slider-shape-2"><img src="<?php echo esc_url($shape2['url']); ?>" alt=""></span>
            <span class="apldg2-slider-shape-3"><img src="<?php echo esc_url($shape3['url']); ?>" alt=""></span>
            <div class="apldg2-hero-social">
                <div class="social-icons">
                    <?php
                        foreach ($settings['social_list'] as  $social):
                            ?>
                            <a href="<?php echo esc_url($social['social_url']['url']) ?>">
                     <?php \Elementor\Icons_Manager::render_icon( $social['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </a>
                        <?php
                        endforeach;
                    ?>
                </div>
                <div class="apldg2-scroll-next">
                    <a href="<?php echo esc_url($scrooldownid['url']); ?>"><?php echo esc_html($scrooldown); ?><span><i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 align-self-center">
                        <div class="apldg2-hero-slider">
                            <?php
                                foreach ($settings['slider_list'] as $slider):
                            ?>
                            <div class="single-item">
                                <span class="bg-shape"><img src="<?php echo esc_url($slider['slider_bg']['url']); ?>" alt=""></span>
                                <div class="apldg2-headline">
                                    <h1 class="hero-title"><?php echo __($slider['slider_title']); ?></h1>
                                </div>
                                <div class="apldg2-pera-txt">
                                    <p><?php echo esc_html($slider['slider_info']); ?></p>
                                </div>
                                <div class="hero-btns">
                                    <a href="<?php echo esc_url($slider['slider_btn_1_url']['url']); ?>" class="apldg2-primary-btn"><?php echo esc_html($slider['slider_btn_1']); ?></a>
                                    <a href="<?php echo esc_url($slider['slider_btn_2_url']['url']); ?>" class="apldg2-secondary-btn"><?php echo esc_html($slider['slider_btn_2']); ?></a>
                                </div>
                            </div>
                            <?php
                                endforeach;
                            ?>

                        </div>
                    </div>
                    <div class="col-lg-5 align-self-end">
                        <div class="apldg2-hero-right">
                            <img src="<?php echo esc_url($sliderRightImg['url']); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section End -->

        <?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_slider());