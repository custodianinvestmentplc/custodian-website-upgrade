<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_footer extends Widget_Base {

   public function get_name() {
      return 'demo_3_footer';
   }

   public function get_title() {
      return __( 'Demo Page 3 Footer', 'appilo' );
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
            'design_by_text', [
                'label' => esc_html__( 'Design By Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Designed with  <i class="fas fa-heart"></i>  by themexriver' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'copyright_text', [
                'label' => esc_html__( 'Copyright Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '© 2022 Glow All rights reserved' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'social_icon',
            [
                'label' => esc_html__( 'Social Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_link',
            [
                'label' => esc_html__( 'Social Link', 'appilo' ),
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
            'list',
            [
                'label' => esc_html__( 'Social Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [

                    ],
                    [

                    ],
                    [

                    ],
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

        <!-- Start of Footer copyright section
	============================================= -->
        <div id="thx-footer-copyright" class="thx-footer-copyright-section">
            <div class="container container-1200">
                <div class="copyright-content d-flex justify-content-between align-items-center">
                    <div class="thx-copyright-text text-center">
                        <?php echo $settings['design_by_text']; ?>
                    </div>
                    <div class="copyright-social text-center">


                        <?php foreach ($settings['list'] as $item):; ?>
                        <?php if ($item['social_link']['url']):; ?>
                        <a href="<?php echo $item['social_link']['url']; ?>">
                            <?php \Elementor\Icons_Manager::render_icon( $item['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </a>
                        <?php endif; ?>

                        <?php endforeach; ?>

                    </div>
                    <div class="thx-copyright-text text-center">
                        <?php echo $settings['copyright_text']; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Footer copyright section
            ============================================= -->



        <?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_footer() );
?>