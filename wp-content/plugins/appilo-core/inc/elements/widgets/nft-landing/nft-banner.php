<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class nft_banner extends Widget_Base {

   public function get_name() {
      return 'nft_banner';
   }

   public function get_title() {
      return __( 'NFT Banner', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'nft_banner',
            [
                'label' => __('NFT Banner Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
            'shape_5',
            [
                'label' => __('Shape 5', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_6',
            [
                'label' => __('Shape 6', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_7',
            [
                'label' => __('Shape 7', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => esc_html__( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Collect Digital Rare Art Discover Buy', 'appilo' ),
            ]
        );
        $this->add_control(
            'color_heading',
            [
                'label' => esc_html__( 'Color Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'NFTs.', 'appilo' ),
            ]
        );
        $this->add_control(
            'color_text_circle_img_heading',
            [
                'label' => esc_html__( 'Color Text Circle Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'color_text_circle_img',
                'label' => esc_html__( 'Color Text Circle Image', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .nft-banner-content .nft-banner-text h1 span:before',
                'exclude' => ['color'],

            ]
        );
        $this->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Digital Marketplace fr cryptocurrency Collectable and none Fungitable tokend (NFTs) buy,sell dan discover exclusive Digital arts', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Discover Collection', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_url',
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
        $this->end_controls_section();
        $this->start_controls_section(
            'style_banner',
            [
                'label' => __('Banner Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__('Container Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
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
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-banner-content .nft-banner-text h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-banner-content .nft-banner-text h1',
            ]
        );
        $this->add_control(
            'color_heading_control',
            [
                'label' => esc_html__( 'Color Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'header_color_text_background',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-banner-content .nft-banner-text h1 span',
            ]
        );
        
        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Information Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-banner-content .nft-banner-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' =>   esc_html__( 'Information Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-banner-content .nft-banner-text p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'banner_btn_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('btn_tab_style');
        $this->start_controls_tab(
            'btn_normal',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' =>   esc_html__( 'Button Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'button_background',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-btn a',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typo',
                'label' =>   esc_html__( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-btn a',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'btn_hover',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );

        $this->add_control(
            'button_text_hover_color',
            [
                'label' =>   esc_html__( 'Button Text Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'button_hover_background',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-btn a:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of Banner section
    ============================================= -->
        <div id="nft-banner" class="nft-banner-section position-relative">
            <span class="nft-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <span class="nft-shape3 position-absolute"><img src="<?php echo $settings['shape_3']['url']; ?>" alt=""></span>
            <span class="nft-shape4 position-absolute" data-parallax='{"x" : -250}'><img src="<?php echo $settings['shape_4']['url']; ?>" alt=""></span>
            <span class="nft-shape5 position-absolute" data-parallax='{"y" : 100, "rotateY":500}'><img src="<?php echo $settings['shape_5']['url']; ?>" alt=""></span>
            <div class="container nft-container-1200">
                <div class="nft-banner-content position-relative">
                    <div class="nft-banner-text nft-headline pera-content  position-relative">
                        <span class="nft-shape2 position-absolute"><img src="<?php echo $settings['shape_2']['url']; ?>" alt=""></span>
                        <h1 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <?php echo $settings['heading']; ?> <span><?php echo $settings['color_heading']; ?></span>
                        </h1>
                        <p class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <?php echo $settings['description']; ?>
                        </p>
                        <div class="nft-btn wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                            <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['button_url']['url']; ?>"><?php echo $settings['button_text']; ?></a>
                        </div>
                    </div>
                    <div class="nft-banner-img position-absolute">
                        <img data-tilt data-tilt-max="10" src="<?php echo $settings['banner_img']['url']; ?>" alt="">
                        <span class="img-shape position-absolute"><img src="<?php echo $settings['shape_6']['url']; ?>" alt=""></span>
                        <span class="img-shape2 position-absolute"><img src="<?php echo $settings['shape_7']['url']; ?>" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Banner section
            ============================================= -->

<?php

    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new nft_banner() );
?>