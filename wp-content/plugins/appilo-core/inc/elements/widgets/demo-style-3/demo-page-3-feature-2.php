<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_feature_2 extends Widget_Base {

   public function get_name() {
      return 'demo_3_feature_2';
   }

   public function get_title() {
      return __( 'Demo Page Feature 2', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'demo_banner',
            [
                'label' => __('Feature Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_logo',
            [
                'label' => __('Feature Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'feature_text', [
                'label' => esc_html__( 'Feature Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'One Click Install' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'feature_content',
            [
                'label' => esc_html__( 'Feature Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_text' => esc_html__( 'One Click Install', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'No coding required', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Easy to customize', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Regular Update', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_text }}}',
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
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of Feature section 2
            ============================================= -->
        <div id="thx-feature-2" class="thx-feature-section-2">
            <div class="container container-1200">
                <div class="thx-feature-content-2">
                    <div class="row">
        <?php foreach ($settings['feature_content'] as $items): ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="thx-feature-item-2 d-flex align-items-center">
                                <div class="thx-feature-inner-icon d-flex align-items-center justify-content-center">
                                    <img src="<?php echo $items['feature_logo']['url']; ?>" alt="<?php echo $items['feature_logo']['alt']; ?>">
                                </div>
                                <div class="thx-feature-inner-text">
                                    <?php echo $items['feature_text']; ?>
                                </div>
                            </div>
                        </div>
        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Feature section 2
            ============================================= -->



<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_feature_2() );
?>