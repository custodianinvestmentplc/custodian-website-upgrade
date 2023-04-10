<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class nft_feature extends Widget_Base {

   public function get_name() {
      return 'nft_feature';
   }

   public function get_title() {
      return __( 'NFT Feature', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'feature_content',
            [
                'label' => __('Content', 'appilo'),
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
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'The most trusted NFTs exchange', 'appilo' ),
            ]
        );
        $this->add_control(
            'before_title_img',
            [
                'label' => __('Before Title Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
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
            'feature_title',
            [
                'label' => esc_html__( 'Feature Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Secure Storage', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_info',
            [
                'label' => esc_html__( 'Feature Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'The cold storage wallets are kept in geographically isolated locations at anonymous combinations of latitudes isolated locations longitudes.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_button_text',
            [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Explore More', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_button_link',
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
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => esc_html__( 'Secure Storage', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Low Rates High Income', 'appilo' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Industry Best Practices', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_style',
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
                    '{{WRAPPER}} .nft-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .nft-section-title h2',

            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-section-title p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typography',
                'label' =>   esc_html__( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-section-title p',

            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_content_style',
            [
                'label' => __( 'Feature Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'box_bg_color',
            [
                'label' =>   esc_html__( 'Box Bg Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'feature_title_color',
            [
                'label' =>   esc_html__( 'Feature Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Feature Title Typo', 'appilo' ),
                'name' => 'feature_title_typo',
                'selector' => '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-title h3',
            ]
        );
        $this->add_control(
            'Info_title_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Info Typo', 'appilo' ),
                'name' => 'Info_title_typo',
                'selector' => '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-text p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'slide_button_style',
            [
                'label' => __( 'Slide Button Style', 'appilo' ),
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
            'button_color',
            [
                'label' =>   esc_html__( 'Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-text .nft-btn-2 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Button Typo', 'appilo' ),
                'name' => 'feature_Button_typo',
                'selector' => '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-text .nft-btn-2 a',
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
                'selector' => '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-text .nft-btn-2 a',
            ]
        );
        $this->add_control(
            'btn_border_color',
            [
                'label' =>   esc_html__( 'Button Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-text .nft-btn-2 a' => 'border-color: {{VALUE}};',
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
                    '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-text .nft-btn-2 a:hover' => 'color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .nft-feature-inner-item .thx-inner-item .thx-inner-text .nft-btn-2 a:before',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of Feature section
            ============================================= -->
        <div id="nft-feature" class="nft-feature-section position-relative">
            <span class="nft-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <span class="nft-shape2 position-absolute" data-parallax='{"y" : 100, "rotateY":500}'><img src="<?php echo $settings['shape_2']['url']; ?>" alt=""></span>
            <div class="container nft-container-1200">
                <div class="nft-section-title text-center  nft-headline pera-content">
                    <h2><span class="left-icon"><img src="<?php echo $settings['before_title_img']['url']; ?>"></span><?php echo $settings['title']; ?> <span class="right-icon"><img src="<?php echo $settings['after_title_img']['url']; ?>"></span></h2>
                    <p><?php echo $settings['info']; ?></p>
                </div>
                <div class="nft-feature-content">
                    <div class="row">
                        <?php foreach ($settings['list'] as $item): ?>
                        <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="nft-feature-inner-item">
                                <div class="thx-inner-item">
                                    <div class="thx-inner-icon-ttitle d-flex align-items-center nft-headline">
                                        <div class="thx-inner-icon">
                                            <img src="<?php echo $item['feature_img']['url']; ?>" alt="">
                                        </div>
                                        <div class="thx-inner-title">
                                            <h3><?php echo $item['feature_title']; ?></h3>
                                        </div>
                                    </div>
                                    <div class="thx-inner-text pera-content">
                                        <p><?php echo $item['feature_info']; ?></p>
                                        <div class="nft-btn-2">
                                            <a class="d-flex justify-content-center align-items-center" href="<?php echo $item['feature_button_link']['url']; ?>"><?php echo $item['feature_button_text']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Feature section
            ============================================= -->

<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new nft_feature() );
?>