<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_offer extends Widget_Base {

   public function get_name() {
      return 'crypto_offer';
   }

   public function get_title() {
      return __( 'Crypto Offer', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_offer_content',
            [
                'label' => __('Offer Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __('Section Background', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'right_img',
            [
                'label' => __('Banner Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'Special Offer-30% off For This Month', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'The main reason for using lorem ipsum text is that it keeps people.', 'appilo'),
            ]
        );
        $this->add_control(
            'countdown_date',
            [
                'label' => esc_html__( 'Countdown Date', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '2023/8/24', 'appilo'),
                'placeholder' => esc_html__('2023/8/24', 'appilo'),
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Join & Buy Token Now', 'appilo'),
            ]
        );
        $this->add_control(
            'button_link',
            [
                'label' => esc_html__( 'Button Link', 'appilo' ),
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
        $this->end_controls_section();


        $this->start_controls_section(
            'offer_style',
            [
                'label' => __('Offer Style', 'appilo'),
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
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-offer-text-wrapper h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Title Typo', 'appilo' ),
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .cr-offer-text-wrapper h2',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-offer-text-wrapper .cr_orrer_info' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Info Typo', 'appilo' ),
                'name' => 'Info_typography',
                'selector' => '{{WRAPPER}} .cr-offer-text-wrapper .cr_orrer_info',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_countdown_style',
            [
                'label' => __( 'Countdown Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'countdown_bg',
            [
                'label' =>   esc_html__( 'Countdown Box BG', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-offer-text-wrapper .coming-countdown li' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'time_color',
            [
                'label' =>   esc_html__( 'Time Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-offer-text-wrapper .coming-countdown li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'button_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_text_color',
            [
                'label' =>   esc_html__( 'Button Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-offer-text-wrapper .cr-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_background_color',
            [
                'label' =>   esc_html__( 'Button Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-offer-text-wrapper .cr-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Button Typo', 'appilo' ),
                'name' => 'Button_typography',
                'selector' => '{{WRAPPER}} .cr-offer-text-wrapper .cr-btn a',
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );

        $this->add_control(
            'btn_hover_color',
            [
                'label' =>   esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-offer-text-wrapper .cr-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_background_color',
            [
                'label' =>   esc_html__( 'Button Hover Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-offer-text-wrapper .cr-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
        <!-- Start of Offer section
    ============================================= -->
        <div id="cr-offer" class="cr-offer-section position-relative" data-background="<?php echo $settings['section_bg']['url']; ?>">
            <span class="cr-offer-img position-absolute"><img src="<?php echo $settings['right_img']['url']; ?>" alt=""></span>
            <div class="container crypto-container-1200">
                <div class="cr-offer-content">
                    <div class="row">
                        <div class="col-lg-6 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="cr-offer-text-wrapper cr-headline pera-content">
                                <h2><?php echo $settings['title']; ?></h2>
                                <p class="cr_orrer_info"><?php echo $settings['info']; ?></p>
                                <div class="coming-countdown ul-li">
                                    <ul class="countdown_timer clearfix" data-countdown="<?php echo $settings['countdown_date']; ?>"></ul>
                                </div>
                                <div class="cr-btn">
                                    <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['button_link']['url']; ?>"><?php echo $settings['button_text']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Offer section
            ============================================= -->


<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_offer() );
?>