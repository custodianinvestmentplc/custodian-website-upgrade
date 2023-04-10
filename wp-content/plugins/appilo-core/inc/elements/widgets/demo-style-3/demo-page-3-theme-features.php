<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_theme_features extends Widget_Base {

   public function get_name() {
      return 'demo_3_theme_features';
   }

   public function get_title() {
      return __( 'Demo Page Theme Features', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'feature_content',
            [
                'label' => __('Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_title', [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Theme Features' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Buy Avarton & enjoy some exclusive features' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'theme_feature_list',
            [
                'label' => __( 'Theme Feature List', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_img',
            [
                'label' => __('Feature Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'feature_title', [
                'label' => esc_html__( 'Feature Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Slider Revolution' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Feature Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => esc_html__( 'Slider Revolution', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Elementor Header Footer Builder', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Elementor Page Builder', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Woocommerce Ready', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Support WPML multilingual', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Support Jetpack', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Video Documentation', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Unlimited Colors Option', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'buttons_style',
            [
                'label' => __('Feature Style', 'appilo'),
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

        <!-- Start of theme Feature
            ============================================= -->
        <div id="thx-theme-feature" class="thx-theme-feature-section">
            <div class="container container-1200">
                <div class="thx-section-title text-center headline">
                    <div class="sub-title">
                        <?php echo $settings['sub_title']; ?>
                    </div>
                    <h2> <?php echo $settings['title']; ?></h2>
                </div>
                <div class="thx-theme-feature-content">
                    <div class="row">

                     <?php foreach ($settings['list'] as $item):; ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="thx-theme-feature-item text-center">
                                <div class="thx-item-icon d-flex align-items-center justify-content-center">
                                    <img src="<?php echo $item['feature_img']['url']; ?>" alt="">
                                </div>
                                <div class="thx-item-text">
                                    <?php echo $item['feature_title']; ?>
                                </div>
                            </div>
                        </div>
                     <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of theme Feature
            ============================================= -->




<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_theme_features() );
?>