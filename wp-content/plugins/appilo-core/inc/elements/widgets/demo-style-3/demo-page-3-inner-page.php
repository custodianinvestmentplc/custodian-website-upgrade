<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_inner_pages extends Widget_Base {

   public function get_name() {
      return 'demo_3_inner_pages';
   }

   public function get_title() {
      return __( 'Demo Page 3 Inner Pages', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'inner_content',
            [
                'label' => __('Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __('Section BG image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'sub_title', [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Inner Pages' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Essential Inner & Blog pages' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'inner_img',
            [
                'label' => __('Inner Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Inner Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_text' => esc_html__( 'Added Slider Revolution', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Tutor LMS Plugin', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Elementor Page builder', 'appilo' ),
                    ],
                ],

            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'inner_style',
            [
                'label' => __('Inner Style', 'appilo'),
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
        <!-- Start of Inner Page
            ============================================= -->
        <div id="thx-inner-page" class="thx-inner-page-section position-relative">
            <div class="container container-1200">
                <div class="thx-inner-page-content" data-background="<?php echo $settings['section_bg']['url']; ?>">
                    <div class="thx-section-title text-center headline">
                        <div class="sub-title">
                            <?php echo $settings['sub_title']; ?>
                        </div>
                        <h2><?php echo $settings['title']; ?></h2>
                    </div>
                    <div class="inner-page-slider-area">
                        <div class="inner-page-slider">
                            <?php foreach ($settings['list'] as $item):; ?>
                            <div class="inner-page-slide-item-wrap">
                                <div class="inner-page-slide-item">
                                    <img src="<?php echo $item['inner_img']['url']; ?>" alt="">
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Inner Page
            ============================================= -->





<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_inner_pages() );
?>