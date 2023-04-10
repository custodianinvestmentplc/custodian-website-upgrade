<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class nft_top_creator extends Widget_Base {

   public function get_name() {
      return 'nft_top_creator';
   }

   public function get_title() {
      return __( 'NFT Top Creator', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'nft_catector_content',
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
                'default' => esc_html__( 'Top Creator this Week', 'appilo' ),
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
            'user_img',
            [
                'label' => __('User Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'name',
            [
                'label' => esc_html__( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Brooklyn Simmons', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'designation',
            [
                'label' => esc_html__( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '@ Kevin Funes', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'profile_link',
            [
                'label' => esc_html__( 'Profile URL', 'appilo' ),
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
            'coin_value',
            [
                'label' => esc_html__( 'Coin Value', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '8,12.05 ETH', 'appilo' ),
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => esc_html__( 'Brooklyn Simmons', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Brooklyn Simmons', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Brooklyn Simmons', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Brooklyn Simmons', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Brooklyn Simmons', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Brooklyn Simmons', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_tabutton',
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
            'icon_color_heading',
            [
                'label' => esc_html__( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'Icon_color',
                'label' => esc_html__( 'Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-top-creator-section .carousel_nav button i',
            ]
        );
        $this->add_control(
            'icon_BG_color_heading',
            [
                'label' => esc_html__( 'Icon BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'Icon_BG_color',
                'label' => esc_html__( 'Icon BG Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-top-creator-section .carousel_nav button',
            ]
        );

        $this->add_control(
            'icon_border_color',
            [
                'label' =>   esc_html__( 'Icon Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-top-creator-section .carousel_nav button' => 'border-color: {{VALUE}};',
                ],
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
            'hover_icon_color_heading',
            [
                'label' => esc_html__( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'Icon_hover_color',
                'label' => esc_html__( 'Icon Hover Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-top-creator-section .carousel_nav button:hover i',
            ]
        );
        $this->add_control(
            'hover_bg_color_heading',
            [
                'label' => esc_html__( 'Hover BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'Icon_hover_bg_color',
                'label' => esc_html__( 'Icon Hover BG Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-top-creator-section .carousel_nav button:before',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'creator_style',
            [
                'label' => __( 'Creator Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'box_bg_color',
            [
                'label' =>   esc_html__( 'Box BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-top-creator-slider-item .thx-inner-item' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Name_color',
            [
                'label' =>   esc_html__( 'Name Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-top-creator-slider-item .thx-inner-item .thx-inner-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Name Typography', 'appilo' ),
                'name' => 'Name_typography',
                'selector' => '{{WRAPPER}} .nft-top-creator-slider-item .thx-inner-item .thx-inner-text h3',
            ]
        );
        $this->add_control(
            'Designation_color',
            [
                'label' =>   esc_html__( 'Designation Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-top-creator-slider-item .thx-inner-item .thx-inner-text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Designation Typography', 'appilo' ),
                'name' => 'Designation_typography',
                'selector' => '{{WRAPPER}} .nft-top-creator-slider-item .thx-inner-item .thx-inner-text p',
            ]
        );
        $this->add_control(
            'Coin_color',
            [
                'label' =>   esc_html__( 'Coin Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-top-creator-slider-item .thx-inner-item .thx-inner-text span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Coin Typography', 'appilo' ),
                'name' => 'Coin_typography',
                'selector' => '{{WRAPPER}} .nft-top-creator-slider-item .thx-inner-item .thx-inner-text span',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of Top Creator section
    ============================================= -->
        <div id="nft-top-creator" class="nft-top-creator-section">
            <div class="container nft-container-1200">
                <div class="nft-top-content d-flex justify-content-between">
                    <div class="nft-section-title  nft-headline pera-content">
                        <h2><?php echo esc_html($settings['title']); ?> <span class="right-icon"><img src="<?php echo esc_url($settings['after_title_img']['url']); ?>"></span></h2>
                        <p><?php echo esc_html($settings['info']); ?> </p>
                    </div>
                    <div class="carousel_nav clearfix">
                        <button type="button" class="main_left_arrow2"><i class="fas fa-arrow-left"></i></button>
                        <button type="button" class="main_right_arrow2"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="nft-top-creator-content">
                    <div class="nft-top-creator-slider">
                        <?php foreach ($settings['list'] as $item): ?>
                        <div class="thx-slider-inner wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="nft-top-creator-slider-item">
                                <div class="thx-inner-item d-flex align-items-center position-relative">
                                    <div class="thx-link">
                                        <a href="#">...</a>
                                    </div>
                                    <div class="thx-inner-img">
                                        <img src="<?php echo esc_url($item['user_img']['url']); ?>" alt="">
                                    </div>
                                    <div class="thx-inner-text nft-headline pera-content">
                                        <h3><a href="<?php echo esc_url($item['profile_link']['url']); ?>"><?php echo esc_html($item['name']); ?></a></h3>
                                        <p><a href="<?php echo esc_url($item['profile_link']['url']); ?>"><?php echo esc_html($item['designation']); ?></a></p>
                                        <span><img src="<?php echo esc_url($item['coin_img']['url']); ?>" alt=""><?php echo esc_html($item['coin_value']); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Top Creator section
            ============================================= -->

<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new nft_top_creator() );
?>