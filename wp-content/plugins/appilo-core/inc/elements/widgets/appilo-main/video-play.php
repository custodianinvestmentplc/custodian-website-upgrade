<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_video_play extends Widget_Base {

   public function get_name() {
      return 'appilo-video-play';
   }

   public function get_title() {
      return __( 'Video Play', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'fab fa-autoprefixer';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_color',
            [
                'label' => __( 'Color Control', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'video_bg',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appilo-video-box a.video-btn i',
            ]
        );
        $this->add_control(
            'overlay_bg',
            [
                'label' => __( 'Overlay Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'video_overlay_bg',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appilo-video-box:before',
            ]
        );
        $this->add_control(
            'video_icon',
            [
                'label' => __( 'Video Play Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-play',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'video_title',
            [
                'label' => __( 'Video Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Watch a Quick Tutorial', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_font',
                'label' => __( 'Title Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .appilo-video-box h3',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appilo-video-box h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'video_url', [
                'label' => __( 'Video URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '//www.youtube.com/watch?v=7-7knsP2n5w',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'video_bg', [
                'label' => __( 'Video Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/video-bg.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $target = $settings['video_url']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['video_url']['nofollow'] ? ' rel="nofollow"' : '';
        echo '<section  class="appilo-video-box" style="background: #D9378B url('.$settings['video_bg']['url'].') center center no-repeat fixed; background-size: cover;">
                <div class="container text-center">
                    <h3>'.$settings['video_title'].'</h3>
                    <a href="'.$settings['video_url']['url'].'" ' . $target . $nofollow . ' class="video-popup video-btn hvr-pulse">'; \Elementor\Icons_Manager::render_icon( $settings['video_icon'], [ 'aria-hidden' => 'true' ] ); echo '</a>
                </div>
            </section>';
    }

    



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_video_play );
?>