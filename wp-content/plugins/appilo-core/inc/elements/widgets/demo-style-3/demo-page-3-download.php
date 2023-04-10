<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_download extends Widget_Base {

   public function get_name() {
      return 'demo_3_download';
   }

   public function get_title() {
      return __( 'Demo Page 3 Download', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'page_speed_content',
            [
                'label' => __('Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __('Section BG Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'author_logo',
            [
                'label' => __('Author Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Download Glow	WordPress Now!' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'sub_title', [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'A single license includes free lifetime updates!' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'download_text', [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Buy for only $49' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'download_link',
            [
                'label' => esc_html__( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
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
            'envato_logo',
            [
                'label' => __('Button Before Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'start_content_style',
            [
                'label' => __('Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__( 'Container Width', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
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

        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();



?>

        <!-- Start of Download section
            ============================================= -->
        <div id="thx-download" class="thx-download-section position-relative">
            <span class="section-bg position-absolute"><img src="<?php echo $settings['section_bg']['url']; ?>" alt=""></span>
            <div class="container container-1200">
                <div class="thx-download-content">
                    <div class="thx-download-logo text-center">
                        <img src="<?php echo $settings['author_logo']['url']; ?>" alt="">
                    </div>
                    <div class="thx-download-text text-center">
                        <h2><?php echo $settings['title']; ?></h2>
                        <p><?php echo $settings['sub_title']; ?></p>
                        <div class="thx-download-btn d-flex justify-content-center">
                            <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['download_link']['url']; ?>"><img src="<?php echo $settings['envato_logo']['url']; ?>" alt=""><?php echo $settings['download_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Download section
            ============================================= -->



<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_download() );
?>