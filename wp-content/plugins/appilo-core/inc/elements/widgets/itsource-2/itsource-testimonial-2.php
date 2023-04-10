<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_testimonial_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_testimonial_2';
    }

    public function get_title()
    {
        return __('ItSource Testimonial 2', 'appilo');
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
            'testimonial_heading_content',
            [
                'label' => __('Testimonial Heading Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Testimonials', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('What Our Clients
									Want To Say', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your busines
									to streamline workflow.', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__('Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your business to streamline
										workflow, and increase productivity. No matter the business, pure as
									has you covered with industry compliant solutions.', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial_content',
            [
                'label' => esc_html__( 'Testimonial Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        /* Start repeater */

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'testi_1',
            [
                'label' => esc_html__( 'Is Show Testimonial 1?', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        /* End repeater */
        $repeater->add_control(
            'user_img_1',
            [
                'label' => esc_html__( 'User Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                'testi_1' => 'yes',
                ],
            ]
        );

        $repeater->add_control(
            'comment_1',
            [
                'label' => esc_html__('Content', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your goal to
													streamline workflow, and increase productivity. No
												matter the business.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_1' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'name_1',
            [
                'label' => esc_html__('Name', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Rosalina D.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_1' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'designation_1',
            [
                'label' => esc_html__('Designation', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Founder Or Coxer Co.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_1' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'testi_2',
            [
                'label' => esc_html__( 'Is Show Testimonial 2?', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'user_img_2',
            [
                'label' => esc_html__( 'User Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'testi_2' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'content_bg_img_2',
            [
                'label' => esc_html__( 'Content BG Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'testi_2' => 'yes',
                ],
            ]
        );

        $repeater->add_control(
            'comment_2',
            [
                'label' => esc_html__('Content', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your goal to
													streamline workflow, and increase productivity. No
												matter the business.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_2' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'name_2',
            [
                'label' => esc_html__('Name', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Rosalina D.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_2' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'designation_2',
            [
                'label' => esc_html__('Designation', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Founder Or Coxer Co.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_2' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'testi_3',
            [
                'label' => esc_html__( 'Is Show Testimonial 3?', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'user_img_3',
            [
                'label' => esc_html__( 'User Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'testi_3' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'content_bg_img_3',
            [
                'label' => esc_html__( 'Content BG Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'testi_3' => 'yes',
                ],
            ]
        );

        $repeater->add_control(
            'comment_3',
            [
                'label' => esc_html__('Content', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your goal to
													streamline workflow, and increase productivity. No
												matter the business.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_3' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'name_3',
            [
                'label' => esc_html__('Name', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Rosalina D.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_3' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'designation_3',
            [
                'label' => esc_html__('Designation', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Founder Or Coxer Co.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'testi_3' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Testimonial Items', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'newsletter_content',
            [
                'label' => __( 'Newsletter Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
        'newsletter_bg',
            [
            'label' => esc_html__( 'Newsletter BG', 'appilo' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'subscribe_subtitle',
            [
                'label' => esc_html__('Subscribe Sub Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Subscribe Now', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'subscribe_title',
            [
                'label' => esc_html__('Subscribe Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get Newsletter', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'subscribe_form_shortcode',
            [
                'label' => esc_html__('Subscribe Form Shortcode', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'team_section_style',
            [
                'label' => __('testimonial Style', 'appilo'),
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
            'section_bg_color',
            [
                'label' => esc_html__('Section BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-testimonial-section .thx-it-testimonial-area-content' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'tag_color',
            [
                'label' => esc_html__('Tag Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title-style-two .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tag_typo',
                'label' => esc_html__('Tag Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .title-style-two .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-testimonial-section .thx-it-testimonial-content .thx-it-testimonial-text .section-title .thx-main-heading' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-testimonial-section .thx-it-testimonial-content .thx-it-testimonial-text .section-title .thx-main-heading',
            ]
        );
        $this->add_control(
            'sub_Heading_color',
            [
                'label' => esc_html__('Sub Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-testimonial-section .thx-it-testimonial-content .thx-it-testimonial-text .section-title .sub-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Sub_Heading_typo',
                'label' => esc_html__('Sub Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-testimonial-section .thx-it-testimonial-content .thx-it-testimonial-text .section-title .sub-text',
            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-testimonial-section .thx-it-testimonial-content .thx-it-testimonial-text .testi-text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-testimonial-section .thx-it-testimonial-content .thx-it-testimonial-text .testi-text p',
            ]
        );
        $this->add_control(
            'testimonial_content_heading',
            [
                'label' => esc_html__( 'Testimonial Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Comment_typo',
                'label' => esc_html__('Comment Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-testimonial-slide-item .thx-it-testimonial-img-text .testi-text p',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Name_typo',
                'label' => esc_html__('Name Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-testimonial-slide-item .thx-it-testimonial-img-text .testi-text .testi-name',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Designation_typo',
                'label' => esc_html__('Designation Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-testimonial-slide-item:nth-child(1) .thx-it-testimonial-img-text .test-degi',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Subscribe_style',
            [
                'label' => __('Subscribe Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Subscribe_tag_title_color',
            [
                'label' => esc_html__('Tag Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-section-2 .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Subscribe_tag_title_typo',
                'label' => esc_html__('Tag Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-newslatter-section-2 .site-tag',
            ]
        );
        $this->add_control(
            'Subscribe_title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-newslatter-section-2 .section-title .thx-newsletter-header' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Subscribe_title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-newslatter-section-2 .section-title .thx-newsletter-header',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
    $settings = $this->get_settings_for_display();
    ?>

<!-- Start of Testimonial section
    ============================================= -->
<div id="testimonial" class="thx-it-testimonial-section">
    <div class="thx-it-testimonial-area-content">
        <div class="container container-1200">
            <div class="thx-it-testimonial-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thx-it-testimonial-text">
                            <div class="section-title title-style-two headline-2">
                                <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                                <h2 class="thx-main-heading">
                                    <?php echo $settings['title']; ?>
                                </h2>
                                <h3 class="sub-text">
                                    <?php echo $settings['sub_title']; ?>
                                </h3>
                            </div>
                            <div class="testi-text pera-content">
                                <p>
                                    <?php echo $settings['info']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="thx-it-testimonial-slide" class="thx-it-testimonial-slide-section owl-carousel">
                            <?php foreach ($settings['list'] as $item):; ?>
                            <div class="thx-it-testimonial-item-list">
                                <?php if ( 'yes' == $item['testi_1']):; ?>
                                <div class="thx-it-testimonial-slide-item">
                                    <div class="thx-it-testimonial-img-text">
                                        <div class="testi-img">
                                            <img src="<?php echo $item['user_img_1']['url']; ?>" alt="">
                                        </div>
                                        <div class="testi-text headline-2 pera-content" data-background="">
                                            <p><?php echo $item['comment_1']; ?></p>
                                            <h4 class="testi-name float-left"><?php echo $item['name_1']; ?></h4>
                                            <span class="test-degi"><?php echo $item['designation_1']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <?php if ( 'yes' == $item['testi_2']):; ?>
                                <div class="thx-it-testimonial-slide-item">
                                    <div class="thx-it-testimonial-img-text">
                                        <div class="testi-img">
                                            <img src="<?php echo $item['user_img_2']['url']; ?>" alt="">
                                        </div>
                                        <div class="testi-text headline-2 pera-content" data-background="<?php echo $item['content_bg_img_2']['url']; ?>">
                                            <p><?php echo $item['comment_2']; ?></p>
                                            <h4 class="testi-name float-left"><?php echo $item['name_2']; ?></h4>
                                            <span class="test-degi"><?php echo $item['designation_2']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <?php if ( 'yes' == $item['testi_3']):; ?>
                                <div class="thx-it-testimonial-slide-item">
                                    <div class="thx-it-testimonial-img-text">
                                        <div class="testi-img">
                                            <img src="<?php echo $item['user_img_3']['url']; ?>" alt="">
                                        </div>
                                        <div class="testi-text headline-2 pera-content" data-background="<?php echo $item['content_bg_img_3']['url']; ?>">
                                            <p><?php echo $item['comment_3']; ?></p>
                                            <h4 class="testi-name float-left"><?php echo $item['name_3']; ?></h4>
                                            <span class="test-degi"><?php echo $item['designation_3']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="thx-it-newslatter-2" class="thx-it-newslatter-section-2 relative-position" data-background="<?php echo $settings['newsletter_bg']['url']; ?>">
        <div class="background_overlay"></div>
        <div class="container container-1200">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title title-style-two headline-2">
                        <span class="site-tag"><?php echo $settings['subscribe_subtitle']; ?></span>
                        <h2 class="thx-newsletter-header"><?php echo $settings['subscribe_title']; ?></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="thx-it-newslatter-form">
                        <?php echo do_shortcode($settings['subscribe_form_shortcode']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Testimonial section
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

Plugin::instance()->widgets_manager->register_widget_type(new itsource_testimonial_2());
?>