<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_live_price extends Widget_Base {

   public function get_name() {
      return 'crypto_live_price';
   }

   public function get_title() {
      return __( 'Crypto Live Price', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_content',
            [
                'label' => __('Live Price Content', 'appilo'),
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
            'shape_3',
            [
                'label' => __('Shape 3', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_4',
            [
                'label' => __('Shape 4', 'appilo'),
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
                'default' => esc_html__( 'Live Price', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Crypto Live Market Price', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'When someone creates a template and asks for feedback on it, they don\'t want the people reviewing it to get distracted.', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'coin_img',
            [
                'label' => __('Coin Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'coin_name',
            [
                'label' => esc_html__( 'Coin Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Bitcoin', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'coin_currency_name',
            [
                'label' => esc_html__( 'Currency Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( '<select>
                                                <option>USD</option>
                                                <option>CAD</option>
                                                <option>EUR</option>
                                               </select>', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'coin_currency_value',
            [
                'label' => esc_html__( 'Currency Value', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '3,074.0', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'coin_changing_info_1',
            [
                'label' => esc_html__( 'Coin Changing Info 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Change 1h', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'coin_changing_info_1_value',
            [
                'label' => esc_html__( 'Coin Changing Value 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '0.56', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'coin_changing_info_2',
            [
                'label' => esc_html__( 'Coin Changing Info 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Change 24h', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'coin_changing_info_2_value',
            [
                'label' => esc_html__( 'Coin Changing Value 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '4.59', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'coin_changing_info_3',
            [
                'label' => esc_html__( 'Coin Changing Info 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Last 7d', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'coin_changing_info_3_value',
            [
                'label' => esc_html__( 'Coin Changing Value 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '6.59', 'appilo' ),
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Live Pricing Box', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'coin_name' => esc_html__( 'Ethereum', 'appilo' ),
                    ],
                    [
                        'coin_name' => esc_html__( 'Bitcoin', 'appilo' ),
                    ],
                    [
                        'coin_name' => esc_html__( 'Binance Coin', 'appilo' ),
                    ],
                    [
                        'coin_name' => esc_html__( 'USD Coin', 'appilo' ),
                    ],
                    [
                        'coin_name' => esc_html__( 'Cardano', 'appilo' ),
                    ],
                    [
                        'coin_name' => esc_html__( 'Tether', 'appilo' ),
                    ],


                ],
                'title_field' => '{{{ coin_name }}}',
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'More Currency', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_url',
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
            'feature_right_content',
            [
                'label' => __( 'Feature Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'feature_sub_heading',
            [
                'label' => esc_html__( 'Sub Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Glow Feature', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_heading',
            [
                'label' => esc_html__( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'The most Trusted and Secure Cryptocurrency Platform', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_content',
            [
                'label' => esc_html__( 'Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'The main reason for using lorem ipsum text is that it keeps people from focusing on the actual text.', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_button',
            [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Explore More', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_button_url',
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
            'style_live_price',
            [
                'label' => __('Live Price Content Style', 'appilo'),
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
                    '{{WRAPPER}} .cr-section-title.text-center p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Info Typo', 'appilo' ),
                'name' => 'Info_typography',
                'selector' => '{{WRAPPER}} .cr-section-title.text-center p',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'pricing_box_style',
            [
                'label' => __( 'Pricing Box Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'box_bg_color',
            [
                'label' =>   esc_html__( 'Box Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-live-market-innerbox-item' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'icon_bg_color',
            [
                'label' =>   esc_html__( 'Icon Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-live-market-innerbox-item .thx-inner-icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'coin_title_color',
            [
                'label' =>   esc_html__( 'Coin Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-live-market-innerbox-item .thx-inner-title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Coin Title Typo', 'appilo' ),
                'name' => 'coin_title_typography',
                'selector' => '{{WRAPPER}} .cr-live-market-innerbox-item .thx-inner-title h3',
            ]
        );
        $this->add_control(
            'coin_currency_dropdown_color',
            [
                'label' =>   esc_html__( 'Coin Currency Dropdown Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-live-market-innerbox-item .thx-live-item select' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'coin_info_color',
            [
                'label' =>   esc_html__( 'Coin Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-live-market-innerbox-item .thx-live-item' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Coin Info Typo', 'appilo' ),
                'name' => 'coin_Info_typography',
                'selector' => '{{WRAPPER}} .cr-live-market-innerbox-item .thx-live-item',
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'section_style_1',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcfuynt');
        $this->start_controls_tab(
            'btn_normal',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );

        $this->add_control(
            'btn_colorr',
            [
                'label' =>   esc_html__( 'Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_backgroundd',
            [
                'label' =>   esc_html__( 'Button Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-btn a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'button_typographyy',
                'selector' => '{{WRAPPER}} .cr-btn a',
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp22',
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
                    '{{WRAPPER}} .cr-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_background_hover',
            [
                'label' =>   esc_html__( 'Button Hover Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-btn a:hover' => 'background-color: {{VALUE}};',
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

        <!-- Start of live market section
        ============================================= -->
        <div id="cr-live-market" class="cr-live-market-section position-relative">
            <span class="cr-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <span class="cr-shape2 position-absolute"><img src="<?php echo $settings['shape_2']['url']; ?>" alt=""></span>
            <span class="cr-shape3 position-absolute"><img src="<?php echo $settings['shape_3']['url']; ?>" alt=""></span>
            <div class="container crypto-container-1200">
                <div class="cr-section-title cr-headline text-center wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <span><?php echo $settings['sub_title']; ?></span>
                    <h2><?php echo $settings['title']; ?></h2>
                    <p><?php echo $settings['info']; ?></p>
                </div>
                <div class="cr-live-market-content position-relative">
                    <span class="cr-shape4 position-absolute"><img src="<?php echo $settings['shape_4']['url']; ?>" alt=""></span>
                    <div class="row justify-content-center">

                    <?php foreach (  $settings['list'] as $item ): ?>

                        <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="cr-live-market-innerbox-item position-relative cr-headline pera-content">
                                <div class="thx-inner-item">
                                    <div class="thx-inner-icon-ttitle d-flex align-items-center">
                                        <div class="thx-inner-icon d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $item['coin_img']['url']; ?>" alt="">
                                        </div>
                                        <div class="thx-inner-title">
                                            <h3><?php echo $item['coin_name']; ?></h3>
                                        </div>
                                    </div>
                                    <div class="thx-inner-content d-flex position-relative">
                                        <div class="thx-live-item position-relative">
                                            <div class="lm-title">
                                                <?php
                                                   echo $item['coin_currency_name'];
                                                ?>
                                            </div>
                                            <div class="lm-value">
                                                <?php
                                                    echo $item['coin_currency_value'];
                                                ?>
                                            </div>
                                        </div>
                                        <div class="thx-live-item position-relative  price-up">
                                            <div class="lm-title">
                                                <?php echo $item['coin_changing_info_1']; ?>
                                            </div>
                                            <div class="lm-value">
                                                <span><?php echo $item['coin_changing_info_1_value']; ?></span>
                                            </div>
                                        </div>
                                        <div class="thx-live-item position-relative  price-down">
                                            <div class="lm-title">
                                                <?php echo $item['coin_changing_info_2']; ?>
                                            </div>
                                            <div class="lm-value">
                                                <span><?php echo $item['coin_changing_info_2_value']; ?></span>
                                            </div>
                                        </div>
                                        <div class="thx-live-item position-relative price-down">
                                            <div class="lm-title">
                                                <?php echo $item['coin_changing_info_3']; ?>
                                            </div>
                                            <div class="lm-value">
                                                <span><?php echo $item['coin_changing_info_3_value']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     <?php endforeach; ?>

                    </div>
                    <div class="cr-btn d-flex justify-content-center wow fadeFromUp" data-wow-delay="1400ms" data-wow-duration="1500ms">
                        <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['button_url']['url']; ?>"><?php echo $settings['button_text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of live market section
            ============================================= -->

<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_live_price() );
?>