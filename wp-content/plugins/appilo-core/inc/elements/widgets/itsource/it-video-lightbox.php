<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class it_video_lightbox extends Widget_Base
{

    public function get_name()
    {
        return 'it-video-lightbox-btn';
    }

    public function get_title()
    {
        return __('iT Video Lightbox', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-play';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'video_lightbox',
            [
                'label' => __('Video Lightbox', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-play',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'btn_link', [
                'label' => __('Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=6zsr22OeF2I',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'icon_style',
            [
                'label' => __('Icon Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon-color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-why-choose-video-play' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'background_color',
            [
                'label' => __( 'Background Color', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'backgroundgtet',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .it-nw-why-choose-video-play',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'wave_color',
            [
                'label' => __( 'Wave Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'wave-color',
            [
                'label' => __('Wave Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-why-choose-video-play .video_btn_border' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

    echo '<div class="it-nw-why-choose-video-play position-absolute">
            <a class="it_source_video_box" '.get_that_link($settings['btn_link']).'>';

        Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);

            echo ' <span class="video_btn_border border_wrap-1"></span>
                <span class="video_btn_border border_wrap-2"></span>
            </a>
        </div>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new it_video_lightbox());
