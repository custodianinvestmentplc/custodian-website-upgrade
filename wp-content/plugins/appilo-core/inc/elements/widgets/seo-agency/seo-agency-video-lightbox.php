<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_video_lightbox extends Widget_Base
{

    public function get_name()
    {
        return 'seo-agency-video-lightbox-btn';
    }

    public function get_title()
    {
        return __('SEO Agency Video Lightbox', 'appilo');
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
                    '{{WRAPPER}} .apldg2-git .apldg2-git-left a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'bg-color',
            [
                'label' => __('Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-git .apldg2-git-left a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>

        <div class="apldg2-git">
            <div class="apldg2-git-left">
                <a href="<?php echo esc_url($settings['btn_link']['url']); ?>" class="apldg2-video-popup"><i class="fas fa-play"></i></a>
            </div>
        </div>

        <?php
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_video_lightbox());
