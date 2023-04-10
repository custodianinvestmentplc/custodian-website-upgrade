<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_rev_feature extends Widget_Base {

   public function get_name() {
      return 'demo_3_rev_feature';
   }

   public function get_title() {
      return __( 'Demo Page Rev Feature', 'appilo' );
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
                'label' => __('Rev Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_bg',
            [
                'label' => __('Section Image', 'appilo'),
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
                'default' => esc_html__( 'Slider Revolution' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'info', [
                'label' => esc_html__( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Added Slider Revolution' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'description', [
                'label' => esc_html__( 'Description', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Slider Revolution is more than just a WordPress slider. It helps beginner-and mid-level designers WOW their clients with pro-level visuals.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'logo_img',
            [
                'label' => __('Logo Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
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

        <!-- Start of rev feature section
	============================================= -->

        <div id="thx-rev-feature" class="thx-rev-feature-section" data-background="<?php echo $settings['section_bg']['url']; ?>">
            <div class="container container-1200">
                <div class="thx-rev-feature-content d-flex justify-content-between align-items-center">
                    <div class="thx-rev-feature-item-1 headline">
                        <div class="tag"><?php _e('Free'); ?></div>
                        <h2><?php echo $settings['title']; ?></h2>
                        <div class="name-price">
                            <?php echo $settings['info']; ?>
                        </div>
                    </div>
                    <div class="thx-rev-feature-item-2 pera-content">
                        <?php echo $settings['description']; ?>
                    </div>
                    <div class="thx-rev-feature-item-3">
                        <img src="<?php echo $settings['logo_img']['url']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End of rev feature section
            ============================================= -->

<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_rev_feature() );
?>