<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_btn extends Widget_Base
{

    public function get_name()
    {
        return 'resume_btn';
    }

    public function get_title()
    {
        return __('Resume/CV Button', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-dual-button';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Button', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __("Let's Chat", 'appilo'),
            ]
        );
        $this->add_control(
            'btn_url', [
                'label' => __('Button Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_responsive_control(
            'btn_align',
            [
                'label' => __( 'Button Alignment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'flex-start' => __( 'Left', 'appilo' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'flex-start',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-header-cta' => 'justify-content: {{VALUE}};',
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
            'btn_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-header-cta a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'btn_c',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-header-cta a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_background',
            [
                'label' => __('Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-header-cta a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_t',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-header-cta a',
            ]
        );
        $this->add_control(
            'hover_style',
            [
                'label' => __( 'Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-header-cta a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'ab_background',
                'label' => __('Background', 'appilo'),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-header-cta a:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-header-cta a:hover',
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>


            <div class="apihu-port-header-cta">
                <a href="<?php echo esc_url($settings['btn_url']['url']);?>"><?php echo esc_html($settings['btn_text']); ?> <i class="fas fa-comment-dots"></i></a>
            </div>



        <?php
    }




    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_btn());
?>