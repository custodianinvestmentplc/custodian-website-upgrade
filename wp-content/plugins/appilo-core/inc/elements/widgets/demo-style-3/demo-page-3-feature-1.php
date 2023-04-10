<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_feature_1 extends Widget_Base {

   public function get_name() {
      return 'demo_3_feature_1';
   }

   public function get_title() {
      return __( 'Demo Page Feature 1', 'appilo' );
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
                'default' => esc_html__( 'Added Slider Revolution' , 'appilo' ),
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
                        'feature_text' => esc_html__( 'Added Slider Revolution', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Tutor LMS Plugin', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Elementor Page builder', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Extra care of Elite Author', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Woocommerce Ready', 'appilo' ),
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
        $this->add_control(
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-feature-item-1 .thx-feature-inner-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-feature-item-1 .thx-feature-inner-text',
            ]
        );
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of thx feature 1 section
	============================================= -->
        <div id="thx-feature-1" class="thx-feature-section-1">
            <div class="container container-1200">
                <div class="thx-feature-content-1 d-flex">
                    <?php foreach ($settings['feature_content'] as $items): ?>
                    <div class="thx-feature-item-1 d-flex align-items-center">
                        <div class="thx-feature-inner-icon">
                            <img src="<?php echo $items['feature_logo']['url']; ?>" alt="">
                        </div>
                        <div class="thx-feature-inner-text">
                            <?php echo $items['feature_text']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End of thx feature section
            ============================================= -->



<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_feature_1() );
?>