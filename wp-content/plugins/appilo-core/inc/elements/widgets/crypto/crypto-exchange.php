<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_exchange extends Widget_Base {

   public function get_name() {
      return 'crypto_exchange';
   }

   public function get_title() {
      return __( 'Crypto Exchange', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_exchange_content',
            [
                'label' => __('Exchange Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'shape_1',
            [
                'label' => __('Shape 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_2',
            [
                'label' => __('Shape 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Why Choose Us', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'We’ve Built A Platform To Buy & Sell Shares', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'The main reason for using lorem ipsum text is that it keeps people from focusing on the actual text.', 'appilo' ),
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

        $this->end_controls_section();
        $this->start_controls_section(
            'btc_calculator',
            [
                'label' => __( 'Calculator', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'usd_image',
            [
                'label' => __('USD Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'btc_image',
            [
                'label' => __('BTC Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );


        $this->end_controls_section();


        $this->start_controls_section(
            'style_exchange_style',
            [
                'label' => __('Exchange Style', 'appilo'),
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
            'sub_title_color',
            [
                'label' =>   esc_html__( 'Sub Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_border_color',
            [
                'label' =>   esc_html__( 'Sub Title Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title span:before, .cr-section-title span:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Sub Title Typo', 'appilo' ),
                'name' => 'sub_title_typography',
                'selector' => '{{WRAPPER}} .cr-section-title span',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Title Typo', 'appilo' ),
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .cr-section-title h2',
            ]
        );

        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Info Typo', 'appilo' ),
                'name' => 'Info_typography',
                'selector' => '{{WRAPPER}} .cr-section-title p',
            ]
        );
        $this->end_controls_section();



    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
        <!-- Start of exchange section
     ============================================= -->
        <div id="cr-exchange" class="cr-exchange-section position-relative">
            <span class="cr-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <span class="cr-shape2 position-absolute"><img src="<?php echo $settings['shape_2']['url']; ?>" alt=""></span>
            <div class="container crypto-container-1200">
                <div class="cr-exchange-content">
                    <div class="row">
                        <div class="col-lg-6 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="cr-exchange-img">
                                <img src="<?php echo $settings['banner_img']['url']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="cr-exchange-text">
                                <div class="cr-section-title cr-headline">
                                    <span><?php echo $settings['sub_title']; ?></span>
                                    <h2><?php echo $settings['title']; ?></h2>
                                    <p><?php echo $settings['info']; ?></p>
                                </div>
                                <div class="cr-exchange-calculator">
                                    <div class="cr-calculator-input-wrapper">
                                        <form action="#">
                                            <div class="cr-calculator-input d-flex position-relative">
                                                <label><?php _e('Amount','appilo'); ?></label>
                                                <input type="number" name="usd" class="currencyField" placeholder="15000">
                                                <div class="calculator-currency d-flex align-items-center">
                                                    <span class="currency-flag"><img src="<?php echo $settings['usd_image']['url']; ?>" alt=""></span>
                                                    <span><?php _e('USD'); ?></span>
                                                </div>
                                            </div>
                                            <div class="cr-calculator-input d-flex position-relative">
                                                <label><?php _e('Get'); ?></label>
                                                <input type="number" name="btc" class="currencyField" placeholder=".0165">
                                                <div class="calculator-currency d-flex align-items-center">
                                                    <span class="currency-flag"><img src="<?php echo $settings['btc_image']['url']; ?>" alt=""></span>
                                                    <span><?php _e('BTC'); ?></span>
                                                </div>
                                            </div>
                                            <button type="submit"><?php _e('Purchase Now'); ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of exchange section
            ============================================= -->


<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_exchange() );
?>