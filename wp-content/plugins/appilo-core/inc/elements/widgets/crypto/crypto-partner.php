<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_partner extends Widget_Base {

   public function get_name() {
      return 'crypto_partner';
   }

   public function get_title() {
      return __( 'Crypto Partner', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_partner',
            [
                'label' => __('Partner Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'partner_img',
            [
                'label' => __('Partner Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'partner_site_url',
            [
                'label' => esc_html__( 'Partner URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Partner List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [

                    ],
                    [

                    ],[

                    ],[

                    ],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_tabutton',
            [
                'label' => __('Partner Background', 'appilo'),
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
                    '{{WRAPPER}} .crypto-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'bg_color',
            [
                'label' =>   esc_html__( 'Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-partner-content' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of partner section
     ============================================= -->
        <div id="cr-partner" class="cr-partner-section">
            <div class="container crypto-container-1200">
                <div class="cr-partner-content">
                    <div class="cr-partner-slide owl-carousel">
                        <?php
                            foreach (  $settings['list'] as $item ) :;
                        ?>
                        <div class="cr-parner-img">
                            <a href="<?php echo $item['partner_site_url']['url'] ?>"><img src="<?php echo $item['partner_img']['url']; ?>" alt=""></a>
                        </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of partner section
            ============================================= -->

<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_partner() );
?>