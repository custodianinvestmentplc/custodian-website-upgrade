<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_cta_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_cta_2';
    }

    public function get_title()
    {
        return __('ItSource CTA 2', 'appilo');
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
            'itsource_about_right_content',
            [
                'label' => __('CTA Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Anything On Your Mind', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Tell Us Your Estimate Planning With Small Details', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'about_btn_1', [
                'label' => esc_html__('CTA Button 1', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Learn About Us', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'about_btn_1_url',
            [
                'label' => esc_html__('CTA Button 1 URL', 'appilo'),
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
        $this->add_control(
            'about_btn_2', [
                'label' => esc_html__('CTA Button 2', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Team', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'about_btn_2_url',
            [
                'label' => esc_html__('CTA Button 2 URL', 'appilo'),
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
        $this->add_control(
            'icon_top',
            [
                'label' => esc_html__('Icon Top', 'appilo'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'icon_bottom',
            [
                'label' => esc_html__('Icon Bottom', 'appilo'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_CTA',
            [
                'label' => __('CTA Style', 'appilo'),
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
            'container_BG',
            [
                'label' => esc_html__('Container BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-call-to-action-2 .call-to-content-2' => 'background-color: {{VALUE}};',
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
                    '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .title-style-two h2',
            ]
        );
        $this->add_control(
            'Icon_color',
            [
                'label' => esc_html__('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-call-to-action-2 .call-to-content-2 .call-icon-bg i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_style',
            [
                'label' => __('Button Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Button Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-call-to-action-2 .call-to-content-2 .call-to-text .call-btn a:first-child' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typo',
                'label' => esc_html__('Button Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-call-to-action-2 .call-to-content-2 .call-to-text .call-btn a:first-child',
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label' => esc_html__('Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-call-to-action-2 .call-to-content-2 .call-to-text .call-btn a:first-child' => 'background: {{VALUE}};',
                    ],
            ]
        );
        $this->add_control(
            'second_btn_color',
            [
                'label' => esc_html__('Second Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-call-to-action-2 .call-to-content-2 .call-to-text .call-btn a:last-child' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'second_btn_circle_color',
            [
                'label' => esc_html__('Second Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-call-to-action-2 .call-to-content-2 .call-to-text .call-btn a:last-child:before' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {
    $settings = $this->get_settings_for_display();
    ?>
        <!-- Start of Call to Action  section
            ============================================= -->
        <div id="cta-2" class="thx-it-call-to-action-2">
            <div class="container container-1200">
                <div class="call-to-content-2 relative-position">
                    <div class="call-to-text">
                        <div class="section-title title-style-two headline-2 text-center">
                            <span class="site-tag"><?php echo $settings['tag_title']; ?></span>
                            <h2><?php echo $settings['title']; ?></h2>
                        </div>
                        <div class="call-btn">
                            <?php if ($settings['about_btn_1_url']['url']):; ?>
                                <a href="<?php echo $settings['about_btn_1_url']['url']; ?>"><?php echo $settings['about_btn_1']; ?><span></span></a>
                            <?php endif; ?>

                            <?php if ($settings['about_btn_2_url']['url']):; ?>
                                <a href="<?php echo $settings['about_btn_2_url']['url']; ?>"><?php echo $settings['about_btn_2']; ?> </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="call-icon-bg icon-bg1">
                        <?php \Elementor\Icons_Manager::render_icon($settings['icon_top'], ['aria-hidden' => 'true']); ?>
                    </div>
                    <div class="call-icon-bg icon-bg2">
                        <?php \Elementor\Icons_Manager::render_icon($settings['icon_bottom'], ['aria-hidden' => 'true']); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Call to Action
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

Plugin::instance()->widgets_manager->register_widget_type(new itsource_cta_2());
?>