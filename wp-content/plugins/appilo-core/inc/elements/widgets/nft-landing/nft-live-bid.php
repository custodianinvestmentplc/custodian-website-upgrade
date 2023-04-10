<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class nft_live_bid extends Widget_Base {

   public function get_name() {
      return 'nft_live_bid';
   }

   public function get_title() {
      return __( 'NFT Live Bid', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'bid_content',
            [
                'label' => __('Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Your All live Bids', 'appilo' ),
            ]
        );
        $this->add_control(
            'after_title_img',
            [
                'label' => __('After Title Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Secure, Rewarding, Lowest Fees and Unlimited Rewards. We Have it all to provide the best experience to buy your first Bitcoin.', 'appilo' ),
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
        $this->end_controls_section();
        $this->start_controls_section(
            'bid_content_slider',
            [
                'label' => __( 'Biding Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'bid_title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Diamond Horses Art #57', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'love',
            [
                'label' => esc_html__( 'Like', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '22', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'author_img',
            [
                'label' => __('Author Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'author',
            [
                'label' => esc_html__( 'Author', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '@ Kevin Funes', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'ending_time',
            [
                'label' => esc_html__( 'Ending Time', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '2022/8/24', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'flore_price',
            [
                'label' => esc_html__( 'Flore Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Floor Price:', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'eth_value',
            [
                'label' => esc_html__( 'ETH Value', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '8.803 ETH', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'bid_button',
            [
                'label' => esc_html__( 'Bid Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Place a Bid', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'bid_button_link',
            [
                'label' => esc_html__( 'Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $repeater->add_control(
            'bid_banner_img',
            [
                'label' => __('Banner Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Bidding List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'bid_title' => esc_html__( 'Diamond Horses Art #57', 'appilo' ),
                    ],
                    [
                        'bid_title' => esc_html__( 'Diamond Horses Art #57', 'appilo' ),
                    ],
                    [
                        'bid_title' => esc_html__( 'Diamond Horses Art #57', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ bid_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_styles',
            [
                'label' => __('Content Style', 'appilo'),
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
                    '{{WRAPPER}} .nft-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-section-title.text-center.nft-headline.pera-content h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .nft-section-title.text-center.nft-headline.pera-content h2',

            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-section-title.text-center.nft-headline.pera-content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typography',
                'label' =>   esc_html__( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-section-title.text-center.nft-headline.pera-content p',

            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_content_style',
            [
                'label' => __( 'Bidding Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bid_title_color',
            [
                'label' =>   esc_html__( 'Bid Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-inner-title-text .thx-inner-title h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Bid Title Typo', 'appilo' ),
                'name' => 'bid_title_typo',
                'selector' => '{{WRAPPER}} .nft-live-bid-items .thx-inner-title-text .thx-inner-title h3',
            ]
        );
        $this->add_control(
            'author_color',
            [
                'label' =>   esc_html__( 'Author Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-inner-author .author-text a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Author Typo', 'appilo' ),
                'name' => 'Author_typo_typo',
                'selector' => '{{WRAPPER}} .nft-live-bid-items .thx-inner-author .author-text a',
            ]
        );
        $this->add_control(
            'project_ending_color',
            [
                'label' =>   esc_html__( 'Project Timer Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-inner-countdown h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Project Timer Title Typo', 'appilo' ),
                'name' => 'project_ending_typo',
                'selector' => '{{WRAPPER}} .nft-live-bid-items .thx-inner-countdown h3',
            ]
        );
        $this->add_control(
            'count_down_color',
            [
                'label' =>   esc_html__( 'Countdown Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-inner-countdown .coming-countdown li strong, {{WRAPPER}} .nft-live-bid-items .thx-inner-countdown .coming-countdown li span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'count_down_border_color',
            [
                'label' =>   esc_html__( 'Countdown Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-inner-countdown .coming-countdown li' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'floor_price_color',
            [
                'label' =>   esc_html__( 'Floor Price Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-floor-price h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Floor Price Text Typo', 'appilo' ),
                'name' => 'floor_price_typo',
                'selector' => '{{WRAPPER}} .nft-live-bid-items .thx-floor-price h3',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'bid_button_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnte');
        $this->start_controls_tab(
            'tpsf1',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_colors',
            [
                'label' =>   esc_html__( 'Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-floor-price a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Button Typo', 'appilo' ),
                'name' => 'feature_Button_typo_',
                'selector' => '{{WRAPPER}} .nft-live-bid-items .thx-floor-price a',
            ]
        );
        $this->add_control(
            'button_bg',
            [
                'label' => esc_html__( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg_grad',
                'label' => esc_html__( 'Button BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-live-bid-items .thx-floor-price a',
            ]
        );
        $this->add_control(
            'btn_border_color',
            [
                'label' =>   esc_html__( 'Button Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-floor-price a' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2s',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_hover_color',
            [
                'label' =>   esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-items .thx-floor-price a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg_heading',
            [
                'label' => esc_html__( 'Button Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg_color',
                'label' => esc_html__( 'Button Hover Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-live-bid-items .thx-floor-price a:before',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'slide_button_style',
            [
                'label' => __( 'Slide Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'slide_button__color',
            [
                'label' =>   esc_html__( 'Slide Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-live-bid-slider .owl-dots .owl-dot' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'slide_btn_active_color',
                'label' => esc_html__( 'Slide Button Active Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-live-bid-slider .owl-dots .owl-dot:before',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of Live Bid section
            ============================================= -->
        <div id="nft-live-bid" class="nft-live-bid-section">
            <div class="container nft-container-1200">
                <div class="nft-section-title text-center  nft-headline pera-content">
                    <h2><?php echo $settings['title']; ?> <span class="right-icon"><img src="<?php echo $settings['after_title_img']['url']; ?>"></span></h2>
                    <p><?php echo $settings['info']; ?></p>
                </div>
                <div class="nft-live-bid-content position-relative">
                    <span class="nft-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
                    <span class="nft-shape2 position-absolute"><img src="<?php echo $settings['shape_2']['url']; ?>" alt=""></span>
                    <div class="nft-live-bid-slider owl-carousel">
                        <?php foreach ($settings['list'] as $item): ?>
                        <div class="nft-live-bid-items d-flex">
                            <div class="thx-inner-item nft-headline">
                                <div class="thx-inner-title-text d-flex justify-content-between">
                                    <div class="thx-inner-title">
                                        <h3><a href="<?php echo $item['bid_button_link']['url']; ?>"><?php echo $item['bid_title']; ?></a></h3>
                                    </div>
                                    <div class="thx-inner-social d-flex">
                                        <?php if ($item['love']): ?>
                                        <div class="nft-heart-count d-flex align-items-center justify-content-center">
                                            <i class="fas fa-heart"></i> <?php echo $item['love']; ?>
                                        </div>
                                        <?php endif; ?>

                                        <div class="nft-social-share d-flex align-items-center justify-content-center">
                                            <i class="fas fa-share-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="thx-inner-author d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="<?php echo $item['author_img']['url']; ?>" alt="">
                                    </div>
                                    <div class="author-text nft-headline">
                                        <span><?php _e('Created By', 'appilo'); ?></span>
                                        <a href="<?php echo $item['bid_button_link']['url']; ?>"><?php echo $item['author']; ?></a>
                                    </div>
                                </div>
                                <div class="thx-inner-countdown">
                                    <h3><?php _e('Project\'s Ending:', 'appilo'); ?></h3>
                                    <div class="coming-countdown ul-li">
                                        <ul class="countdown_timer clearfix" data-countdown="<?php echo $item['ending_time']; ?>"></ul>
                                    </div>
                                </div>
                                <div class="thx-floor-price">
                                    <h3><?php echo $item['flore_price']; ?></h3>
                                    <div class="thx-floor-price-btn d-flex">
                                        <a class="d-flex justify-content-center align-items-center" href="<?php echo $item['bid_button_link']['url']; ?>"><?php echo $item['eth_value']; ?></a>
                                        <a class="d-flex justify-content-center align-items-center" href="<?php echo $item['bid_button_link']['url']; ?>"><?php echo $item['bid_button']; ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="nft-live-bid-img">
                                <img src="<?php echo $item['bid_banner_img']['url']; ?>" alt="">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Live Bid section
            ============================================= -->

<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new nft_live_bid() );
?>