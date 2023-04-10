<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class parallax_video extends Widget_Base {

    public function get_name() {
        return 'galaxy-parallax-video';
    }

    public function get_title() {
        return __( 'Parallax Video', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slider-video';
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
            'parallax_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>Take quick</span> overview of this <span>App</span>', 'appilo' ),
            ]
        );
        $this->add_control(
            'parallax_style',
            [
                'label' => __( 'Parallax Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'app-landing-cta',
                'options' => [
                    'app-landing-cta'  => __( 'Faq Style One', 'appilo' ),
                    'product-landing-cta' => __( 'Faq Style Two', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'video_url', [
                'label' => __( 'Video Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=Q3hQLhJOHO0',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start app-landing-cta -->
            <section class="'.$settings['parallax_style'].'">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6 offset-sm-3">
                            <a href="'.$settings['video_url']['url'].'" class="video-play"><i class="fas fa-play"></i></a>
                            <h2>'.$settings['parallax_title'].'</h2>
                        </div>
                    </div>
                </div>
            </section>
        <!-- end app-landing-cta -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new parallax_video );
?>