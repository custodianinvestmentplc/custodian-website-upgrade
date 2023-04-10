<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_newsletter_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_newsletter_2';
    }

    public function get_title()
    {
        return __('ItSource Newsletter 2', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-scroll';
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'itsource_Newsletter_content',
            [
                'label' => __('ITsource Newsletter Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Subcribe Now', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get Newsletter', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'newsletter_form_shortcode',
            [
                'label' => esc_html__('Newsletter Form Shortcode', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'newsletter_left_info',
            [
                'label' => __( 'Left Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'left_sub_title',
            [
                'label' => esc_html__('Sub Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get In Touch', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'left_title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('We Have An IT Departments', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__('Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('No matter the business, pure as has you cover with industry compliant solutions.', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label' => esc_html__('Button Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Contact Us Now', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_link',
            [
                'label' => esc_html__( 'Button Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'newsletter_right_info',
            [
                'label' => __( 'Right Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'right_sub_title',
            [
                'label' => esc_html__('Sub Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Cyber Security', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'right_title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Info Backup & Recovery', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'right_backup_image',
            [
                'label' => esc_html__( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-saas',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_newsletter',
            [
                'label' => __('Newsletter Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__('Container Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'section_bg_heading',
            [
                'label' => esc_html__( 'Section BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .thx-it-newslatter-section:before',
                'exclude' => ['image' ],
            ]
        );
        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_control(
            'tag_color',
            [
                'label' => esc_html__('Tag Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-newsletter-heading .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tag_typo',
                'label' => esc_html__('Tag Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .thx-newsletter-heading .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-newsletter-heading h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-newsletter-heading h2',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'newsletter_left_style',
            [
                'label' => __( 'Left Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bg_color',
            [
                'label' => esc_html__('BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'left_subtitle_color',
            [
                'label' => esc_html__('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'left_sub_title_typo',
                'label' => esc_html__('Sub Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 .site-tag',
            ]
        );
        $this->add_control(
            'left_title_Color',
            [
                'label' => esc_html__('Left Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Left_Title_typo',
                'label' => esc_html__('Left Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 h2',
            ]
        );
        $this->add_control(
            'left_info_color',
            [
                'label' => esc_html__('Left Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Left_Info_typo',
                'label' => esc_html__('Left Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 p',
            ]
        );
        $this->add_control(
            'left_btn_color',
            [
                'label' => esc_html__('Left Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 .news-cntc-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Left_btn_typo',
                'label' => esc_html__('Left Button Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 .news-cntc-btn a',
            ]
        );
        $this->add_control(
            'left_btn_bg_color',
            [
                'label' => esc_html__('Left Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item1 .news-cntc-btn a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'newsletter_Right_style',
            [
                'label' => __( 'Right Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Right_bg_color',
            [
                'label' => esc_html__('Right BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item2' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Right_subtitle_color',
            [
                'label' => esc_html__('Right Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-thx-it-service-item2 .section-title .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Right_sub_title_typo',
                'label' => esc_html__('Right Sub Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .news-thx-it-service-item2 .section-title .site-tag',
            ]
        );
        $this->add_control(
            'Right_title_Color',
            [
                'label' => esc_html__('Right Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item2 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Right_Title_typo',
                'label' => esc_html__('Right Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-newslatter-service .news-thx-it-service-item2 .section-title h2',
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>

        <!-- Start of newsLatter section
            ============================================= -->
        <div id="newslatter" class="thx-it-newslatter-section relative-position ">
            <div class="container container-1200">
                <div class="thx-it-newslatter-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-title title-style-one headline-1 thx-newsletter-heading">
                                <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                                <h2><?php echo $settings['title']; ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="thx-it-newslatter-form">
                                <?php echo do_shortcode($settings['newsletter_form_shortcode']); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /subscribe form -->
                    <div class="thx-it-newslatter-service">
                        <div class="thx-it-newslatter-thx-it-service-item news-thx-it-service-item1 pera-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="section-title title-style-one headline-1">
                                <span class="site-tag"><?php echo $settings['left_sub_title']; ?></span>
                                <h2><?php echo $settings['left_title']; ?></h2>
                            </div>
                            <p><?php echo $settings['info']; ?></p>
                            <div class="news-cntc-btn text-center">
                                <a href="<?php echo $settings['button_link']['url']; ?>"><?php echo $settings['button_text']; ?> <span></span></a>
                            </div>
                        </div>
                        <div class="thx-it-newslatter-thx-it-service-item news-thx-it-service-item2 relative-position text-center wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="section-title title-style-one headline-1">
                                <span class="site-tag"><?php echo $settings['right_sub_title']; ?></span>
                                <h2><?php echo $settings['right_title']; ?></h2>
                            </div>
                            <div class="news-thx-it-service-icon">
                                <img src="<?php echo $settings['right_backup_image']['url']; ?>" alt="">
                            </div>
                            <div class="news-icon-bg">
                                <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of newsLatter section
            ============================================= -->

        <?php
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_newsletter_2());
?>