<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_woocommerce extends Widget_Base {

   public function get_name() {
      return 'demo_3_woocommerce';
   }

   public function get_title() {
      return __( 'Demo Page Woocommerce', 'appilo' );
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
            'banner_img',
            [
                'label' => __('Banner Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'circle_shape',
            [
                'label' => __('Circle Shape', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'sub_title', [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Woocommerce Ready' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Ultimate Shopping!' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'WooCommerce Ready theme. We provide all the tools you need to start selling online.' , 'appilo' ),
                'label_block' => true,
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
                'label' => esc_html__( 'Feature Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Shop' , 'appilo' ),
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
                        'feature_title' => esc_html__( 'Shop', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Shopping Cart', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Check Out', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'buttons_style_',
            [
                'label' => __('Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'container_max_widthh',
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

        <!-- Start of Woo Commerce section
            ============================================= -->
        <div id="thx-woo-commerce" class="thx-woo-commerce-section" data-background="<?php echo $settings['section_bg']['url']; ?>">
            <div class="container container-1200">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="thx-woo-commerce-img position-relative">
                            <div class="thx-woo-commerce-img-wrap wow fadeInLeft" data-wow-delay="1500ms" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['banner_img']['url']; ?>" alt="">
                            </div>
                            <div class="circle-shape wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['circle_shape']['url']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thx-woo-commerce-text wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="thx-section-title  headline">
                                <div class="sub-title">
                                    <?php echo $settings['sub_title']; ?>
                                </div>
                                <h2><?php echo $settings['title']; ?></h2>
                                <p><?php echo $settings['info']; ?> </p>
                            </div>
                            <div class="thx-woo-commerce-feature d-flex justify-content-between">

                            <?php foreach ($settings['list'] as $item):; ?>
                                <div class="thx-woo-commerce-feature-item text-center">
                                    <div class="thx-item-icon d-flex align-items-center justify-content-center">
                                        <img src="<?php echo $item['feature_img']['url']; ?>" alt="">
                                    </div>
                                    <div class="thx-item-text">
                                        <?php echo $item['feature_title']; ?>
                                    </div>
                                </div>
                             <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Woo Commerce section
            ============================================= -->




<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_woocommerce() );
?>