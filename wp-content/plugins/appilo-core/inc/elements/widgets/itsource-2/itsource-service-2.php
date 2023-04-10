<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_service_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_service_2';
    }

    public function get_title()
    {
        return __('ItSource Service 2', 'appilo');
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
            'itsource_service_content',
            [
                'label' => __('ITsource Service Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'select_Services_style',
            [
                'label' => esc_html__('Services Style', 'appilo'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1' => esc_html__('Style 1', 'appilo'),
                    'style_2' => esc_html__('Style 2', 'appilo'),
                ],
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Services', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('What We Do Here', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__('Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our vertical solutions expertise allows your business to streamline workflow, and increase productivity. No matter the business, pure as has you covered with industry compliant solutions.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'it_service_2_content',
            [
                'label' => __( 'Service Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'appilo'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );

        $repeater->add_control(
            'number', [
                'label' => esc_html__('Number', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('01', 'appilo'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'feature_title', [
                'label' => esc_html__('Feature Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Connect To Existing Identity Systems', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'feature_info', [
                'label' => esc_html__('Feature Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Our vertical solutions expertise allows your business workflow, and increase.', 'appilo'),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'button_text', [
                'label' => esc_html__('Button Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Read More', 'appilo'),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'service_url',
            [
                'label' => esc_html__( 'Service Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('Service Features', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => __('Connect To Existing Identity Systems', 'appilo'),
                    ],
                    [
                        'feature_title' => __('Processing Activity & Privacy Roles', 'appilo'),
                    ],
                    [
                        'feature_title' => __('User & System Credentials', 'appilo'),
                    ],
                    [
                        'feature_title' => __('Consent Flagged Authorization', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );
//        Style 2

        $this->end_controls_section();
        $this->start_controls_section(
            'service_bottom_content',
            [
                'label' => __( 'Service Bottom Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'service_bottom_text', [
                'label' => esc_html__('Bottom Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Stop wasting time and money on technology.', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'service_bottom_link_text', [
                'label' => esc_html__('Bottom Link Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Explore our company.', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'service_bottom_url',
            [
                'label' => esc_html__('Link URL', 'appilo'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'appilo'),
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
            'style_about',
            [
                'label' => __('About Style', 'appilo'),
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
                'label' => esc_html__('Section Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-section' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'tag_color',
            [
                'label' => esc_html__('Tag Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title-style-one .site-tag' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .title-style-one .site-tag ,
                    {{WRAPPER}} .title-style-two .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title-style-one h2' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .title-style-two h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .title-style-one h2 , {{WRAPPER}} .title-style-two h2',
            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title-text' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title-text',
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'service_content_style',
            [
                'label' => __( 'Service Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Number_color',
            [
                'label' => esc_html__('Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-item-no' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Number_typo',
                'label' => esc_html__('Number Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-item-no',
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Icon_color',
            [
                'label' => esc_html__('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-icon i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-icon i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Icon_bg_color',
            [
                'label' => esc_html__('Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-icon' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Icon_botton_border_color',
            [
                'label' => esc_html__('Icon Bottom Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-text:before' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'feature_content_title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-text h3' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-text h3 , {{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text h3',
            ]
        );
        $this->add_control(
            'feature_content_Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-text p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'feature_Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-text p , {{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text p',
            ]
        );
        $this->add_control(
            'read_more_color',
            [
                'label' => esc_html__('Read More Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_2',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Read_More_typo',
                'label' => esc_html__('Read More Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text a',
                'condition' => [
                    'select_Services_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'feature_Link_arrow_color__',
            [
                'label' => esc_html__('Link Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-more a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text a i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'feature_Link_arrow_Hover_color',
            [
                'label' => esc_html__('Link Arrow Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-item-list .thx-it-service-icon-text:hover .thx-it-service-more a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'button_hover_color',
            [
                'label' => esc_html__('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text a:hover' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'button_hover_bg_color',
            [
                'label' => esc_html__('Button Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-section-2 .thx-it-service-content-2 .thx-it-service-icon-text .thx-it-service-text a:after' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_Services_style' => 'style_2',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_style',
            [
                'label' => __('Service Footer Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'select_Services_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'footer_bg_color',
            [
                'label' => esc_html__('Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-cta' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'footer_text_color',
            [
                'label' => esc_html__('Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-cta p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'footer_text_typo',
                'label' => esc_html__('Text Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .thx-it-service-cta p',
            ]
        );

        $this->add_control(
            'Linked_text_color',
            [
                'label' => esc_html__('Linked Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-service-cta p a' => 'color: {{VALUE}};',
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
        if ($settings['select_Services_style'] == "style_1") {
        ?>
        <!-- Start of Service section
            ============================================= -->
        <div id="service" class="thx-it-service-section">
            <div class="container container-1200">
                <div class="thx-it-service-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-title title-style-one headline-1">
                                <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                                <h2><?php echo $settings['title']; ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="section-title-text">
                                <?php echo $settings['info']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- section title -->
                    <div class="thx-it-service-item-list">
                        <div class="row">
                        <?php foreach ($settings['list'] as $item){; ?>
                            <div class="col-lg-3  col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="thx-it-service-icon-text relative-position">
                                    <div class="thx-it-service-icon text-center">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
                                    </div>
                                    <div class="thx-it-service-item-no text-center position-absolute">
                                        <?php echo $item['number']; ?>
                                    </div>
                                    <div class="thx-it-service-text headline-1 text-center pera-content relative-position">
                                        <h3><?php echo $item['feature_title']; ?></h3>
                                        <p><?php echo $item['feature_info']; ?></p>
                                    </div>
                                    <div class="thx-it-service-more text-center">
                                        <a href="<?php echo $item['service_url']['url']; ?>"><i class="flaticon-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($settings['service_bottom_text']):; ?>
        <div class="thx-it-service-cta text-center pera-content">
            <p><?php echo $settings['service_bottom_text']; ?> <a href="<?php echo $settings['service_bottom_url']['url']; ?>"><?php echo $settings['service_bottom_link_text']; ?></a></p>
        </div>
        <?php endif; ?>
        <!-- End of Service section
            ============================================= -->
<?php }else{ ?>
        <!-- Start of service  section
============================================= -->
        <div id="thx-it-service-2" class="thx-it-service-section-2">
            <div class="container container-1200">
                <div class="section-title title-style-two headline-2 text-center">
                    <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                    <h2><?php echo $settings['title']; ?></h2>
                </div>
                <!-- /section title -->
                <div class="thx-it-service-content-2">
                    <div class="row">
                    <?php foreach ($settings['list'] as $item){; ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="thx-it-service-icon-text wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="thx-it-service-icon float-left">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
                                </div>
                                <div class="thx-it-service-text pera-content headline-2">
                                    <h3><?php echo $item['feature_title']; ?></h3>
                                    <p><?php echo $item['feature_info']; ?></p>
                                    <a href="<?php echo $item['service_url']['url']; ?>"><?php echo $item['button_text']; ?> <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of service  section
            ============================================= -->

        <?php
        }
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_service_2());
?>