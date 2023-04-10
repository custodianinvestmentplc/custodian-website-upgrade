<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_features_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_features_2';
    }

    public function get_title()
    {
        return __('ItSource Features 2', 'appilo');
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
            'Service_location_content',
            [
                'label' => __('Service Location', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'select_Feature_style',
            [
                'label' => esc_html__('Feature Style', 'appilo'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1' => esc_html__('Style 1', 'appilo'),
                    'style_2' => esc_html__('Style 2', 'appilo'),
                ],
            ]
        );
        $this->add_control(
            'section_bg_heading',
            [
                'label' => esc_html__('Section BG Image', 'appilo'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'appilo'),
                'types' => ['classic'],
                'selector' => '{{WRAPPER}} .thx-it-feature-section:before',
                'exclude' => ['color'],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'map_style',
            [
                'label' => esc_html__('Show Elements', 'appilo'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_1' => esc_html__('Style 1', 'appilo'),
                    'style_2' => esc_html__('Style 2', 'appilo'),
                ],
                'default' => ['style_1'],
            ]
        );
        $repeater->add_control(
            'item_top_position',
            [
                'label' => esc_html__('Top', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .it-maplocation{{CURRENT_ITEM}}' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_control(
            'item_right_position',
            [
                'label' => esc_html__('Right', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .it-maplocation{{CURRENT_ITEM}}' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_control(
            'indicator_color',
            [
                'label' => esc_html__('Indicator Color', 'appilo'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}'
                ],
                'condition' => [
                    'map_style' => 'style_1',
                ],
            ]
        );
        $repeater->add_control(
            'number', [
                'label' => esc_html__('Number', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('10', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'map_style' => 'style_1',
                ],
            ]
        );
        $repeater->add_control(
            'heading', [
                'label' => esc_html__('Heading', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Country Coverage.', 'appilo'),
                'show_label' => true,
                'condition' => [
                    'map_style' => 'style_1',
                ],
            ]
        );

//        style 2 controls

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Choose Image', 'appilo'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'map_style' => 'style_2',
                ],
            ]
        );
        $repeater->add_control(
            'number_2', [
                'label' => esc_html__('Number', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('10', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'map_style' => 'style_2',
                ],
            ]
        );
        $repeater->add_control(
            'heading_2', [
                'label' => esc_html__('Heading', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Country Coverage.', 'appilo'),
                'show_label' => true,
                'condition' => [
                    'map_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('Service Map Indicatores', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                    ], [
                    ], [
                    ], [
                    ], [
                    ], [
                    ], [
                    ],
                ],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
//        Style 2 controls
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'slide_images',
            [
                'label' => esc_html__( 'Slide Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'list_style_2',
            [
                'label' => esc_html__( 'Slider List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                    ],
                    [
                    ],
                    [
                    ],[
                    ],
                ],
                'condition' => [
                    'select_Feature_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'tag_title_2', [
                'label' => esc_html__('Title Tag', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Cyber Security.', 'appilo'),
                'show_label' => true,
                'condition' => [
                    'select_Feature_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'title_2', [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Info Backup & Recovery.', 'appilo'),
                'show_label' => true,
                'condition' => [
                    'select_Feature_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'right_banner_images',
            [
                'label' => esc_html__( 'Right Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'select_Feature_style' => 'style_2',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'itsource_Service_right_content',
            [
                'label' => __('ITsource Service Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Features', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Managed IT Services For Your Industry.', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your business to streamline workflow.', 'appilo'),
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
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'feature_title', [
                'label' => esc_html__('Feature Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Cross-Industry Expertise', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'feature_content',
            [
                'label' => esc_html__('Feature Content', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => esc_html__('Cross-Industry Expertise', 'appilo'),
                    ],
                    [
                        'feature_title' => esc_html__('Dedicated IT Solution', 'appilo'),
                    ],
                    [
                        'feature_title' => esc_html__('Expertise & Leadership', 'appilo'),
                    ],
                    [
                        'feature_title' => esc_html__('10+ Team Members', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_service',
            [
                'label' => __('Service Style', 'appilo'),
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
            'section_bg',
            [
                'label' => esc_html__('Section Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-feature-section-two' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Feature_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'content_top',
            [
                'label' => esc_html__( 'Top', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .thx-it-feature-content-2' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'tag_color',
            [
                'label' => esc_html__('Tag Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .site-tag' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-feature-content-2 .thx-it-feature-two-content .section-title .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tag_typo',
                'label' => esc_html__('Tag Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title .site-tag , {{WRAPPER}} .thx-it-feature-content-2 .thx-it-feature-two-content .section-title .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-feature-content-2 .thx-it-feature-two-content .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title h2 , {{WRAPPER}} .thx-it-feature-content-2 .thx-it-feature-two-content .section-title h2',
            ]
        );
        $this->add_control(
            'Sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .sub-text' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Sub_title_left_border_color',
            [
                'label' => esc_html__('Sub Title Left Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .sub-text:before' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                'select_Feature_style' => 'style_1',
            ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Sub_title_typo',
                'label' => esc_html__('Sub Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .section-title .sub-text',
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => esc_html__('Information Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-feature-text-content .thx-it-about-text p' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => esc_html__('Information Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .thx-it-feature-text-content .thx-it-about-text p',
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Feature_title_color',
            [
                'label' => esc_html__('Feature Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-feature-text-content .thx-it-feature-list-item li' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_title_typo',
                'label' => esc_html__('Feature Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .thx-it-feature-text-content .thx-it-feature-list-item li',
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Feature_icon_color',
            [
                'label' => esc_html__('Feature Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-feature-text-content .thx-it-feature-list-item li i' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Feature_icon_Hover_color',
            [
                'label' => esc_html__('Feature Icon Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-feature-text-content .thx-it-feature-list-item li:hover i' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Feature_icon_border_color',
            [
                'label' => esc_html__('Feature Icon Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-feature-text-content .thx-it-feature-list-item li i' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Feature_icon_hover_bg_color',
            [
                'label' => esc_html__('Feature Icon Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-feature-text-content .thx-it-feature-list-item li:hover i' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Feature_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>

        <?php
            if ($settings['select_Feature_style'] == "style_1") {
        ?>
            <!-- Start of Feature section
        ============================================= -->
            <div id="feature" class="thx-it-feature-section relative-position">
                <div class="container container-1200">
                    <div class="thx-it-feature-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="thx-it-feature-map-content relative-position">
                                    <?php foreach ($settings['list'] as $item): ?>
                                        <?php if ($item['map_style'] == 'style_1') { ?>
                                            <div class="it-maplocation elementor-repeater-item-<?php echo $item['_id']; ?>">
                                                <div class="it-location-iiner pera-content">
                                                    <div class="it-location-counter headline-1">
                                                        <h3><?php echo $item['number']; ?><span>+</span></h3>
                                                    </div>
                                                    <p><?php echo $item['heading']; ?></p>
                                                </div>
                                                <div class="it-thx-it-feature-indicatior relative-position elementor-repeater-item-<?php echo $item['_id']; ?>">
                                                    <div class="it-indicator-border1"></div>
                                                    <div class="it-indicator-border2"></div>
                                                </div>
                                            </div>

                                        <?php } elseif ($item['map_style'] == 'style_2') {
                                            ; ?>

                                            <div class="it-maplocation it-src-2-shadow-none elementor-repeater-item-<?php echo $item['_id']; ?>">
                                                <div class="it-location-iiner pera-content">
                                                    <div class="it-location-counter headline-1">
                                                        <h3><?php echo $item['number_2']; ?><span>+</span></h3>
                                                    </div>
                                                    <p><?php echo $item['heading_2']; ?></p>
                                                </div>
                                                <div class="it-maplocation-img">
                                                    <img src="<?php echo $item['image']['url']; ?>" alt="">
                                                </div>
                                            </div>

                                        <?php } else { ?>
                                            <div class="it-maplocation elementor-repeater-item-<?php echo $item['_id']; ?>">
                                                <div class="it-location-iiner pera-content">
                                                    <div class="it-location-counter headline-1">
                                                        <h3><?php echo $item['number']; ?><span>+</span></h3>
                                                    </div>
                                                    <p><?php echo $item['heading']; ?></p>
                                                </div>
                                                <div class="it-thx-it-feature-indicatior relative-position elementor-repeater-item-<?php echo $item['_id']; ?>">
                                                    <div class="it-indicator-border1"></div>
                                                    <div class="it-indicator-border2"></div>
                                                </div>
                                            </div>
                                        <?php }; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- /map content -->
                            <div class="col-lg-6 col-md-12">
                                <div class="thx-it-feature-text-content">
                                    <div class="section-title title-style-one headline-1">
                                        <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                                        <h2><?php echo $settings['title']; ?></h2>
                                        <h3 class="sub-text"><?php echo $settings['sub_title']; ?></h3>
                                    </div>
                                    <div class="thx-it-about-text pera-content">
                                        <p><?php echo $settings['info']; ?></p>
                                    </div>
                                    <div class="thx-it-feature-list-item ul-li clearfix">
                                        <ul>
                                            <?php foreach ($settings['feature_content'] as $features_content):; ?>
                                                <li>
                                                    <i class="fas fa-check"></i> <?php echo $features_content['feature_title']; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Feature section
                ============================================= -->
        <?php
        } else {
        ?>
        <!-- Start of Feature  section
            ============================================= -->
        <div id="thx-it-feature-2" class="thx-it-feature-section-two">
            <div class="thx-it-feature-content-2 container-1200">
                <div id="thx-it-feature-slide" class="thx-it-feature-slide-item owl-carousel wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <?php foreach ($settings['list_style_2'] as $item): ?>
                    <div class="f-slide-item">
                        <img src="<?php echo $item['slide_images']['url']; ?>" alt="">
                    </div>
                <?php endforeach; ?>
                </div>
                <div class="thx-it-feature-two-content relative-position text-center wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="section-title title-style-two headline-2">
                        <span class="site-tag"><?php echo $settings['tag_title_2']; ?></span>
                        <h2><?php echo $settings['title_2']; ?></h2>
                    </div>
                    <div class="news-thx-it-service-icon">
                        <img src="<?php echo $settings['right_banner_images']['url']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Feature section
            ============================================= -->
        <?php
        }
        ?>

        <?php
    }
    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_features_2());
?>