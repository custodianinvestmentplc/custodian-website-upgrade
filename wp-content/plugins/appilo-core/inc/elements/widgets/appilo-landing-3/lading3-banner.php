<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_Banner extends Widget_Base {

   public function get_name() {
      return 'landing3_banner';
   }

   public function get_title() {
      return __( 'Appilo Lading V3 Banner', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'apl3_banner',
            [
                'label' => __('Appilo Landing Banner', 'appilo'),
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
            'heading',
            [
                'label' => esc_html__( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Collect Digital Rare Art Discover Buy', 'appilo' ),
                'label_block' => true
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
        $repeater = new Repeater();
        $repeater->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $repeater->add_control(
			'icon_link',
			[
				'label' => esc_html__( 'ICon Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);
        $this->add_control(
            'social_icons',
            [
                'label' => __('Add Social Icon', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
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

        $this->add_control(
			'section_bg_se',
			[
				'label' => esc_html__( 'Section Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'section_bg_clr',
            [
                'label' =>   esc_html__( 'Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section.land3-banner' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
			'heading_st',
			[
				'label' => esc_html__( 'Heading Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section.land3-banner h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section.land3-banner h1',
            ]
        );
        $this->add_control(
			'desc_st',
			[
				'label' => esc_html__( 'Desc Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Information Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section.land3-banner .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' =>   esc_html__( 'Information Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .banner-section.land3-banner .text',
            ]
        );
        $this->add_control(
			'social_icon_st',
			[
				'label' => esc_html__( 'Social Icon Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'icon_color',
            [
                'label' =>   esc_html__( 'Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section.land3-banner .social-nav a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'icon_hv_color',
            [
                'label' =>   esc_html__( 'Icon Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-section.land3-banner .social-nav a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Banner Section -->
	<section class="banner-section land3-banner" id="demos">
		<div class="shape-one" style="background-image:url(<?php echo esc_url($settings['shape_1']['url']);?>)"></div>
		<div class="shape-two" style="background-image:url(<?php echo esc_url($settings['shape_2']['url']);?>)"></div>
		<div class="shape-three" style="background-image:url(<?php echo esc_url($settings['shape_3']['url']);?>)"></div>
		<div class="shape-four" style="background-image:url(<?php echo esc_url($settings['shape_4']['url']);?>)"></div>
		<!-- Ct Dot Animated -->
		<div class="pl3-pl3-ct-dot-animated">
			<div class="pl3-dot-container">
				<div class="pl3-ct-dot-item">
					<span></span>
				</div>
				<div class="pl3-ct-dot-item">
					<span></span>
				</div>
				<div class="pl3-ct-dot-item">
					<span></span>
				</div>
			</div>
		</div>
		
		<div class="auto-container">
			<h1 class="variable-text"><?php echo __($settings['heading']);?></h1>
			<div class="text"><?php echo __($settings['description']);?></div>
			<div class="social-nav">
                <?php foreach($settings['social_icons'] as $icon):?>
				    <a href="<?php echo esc_url($icon['icon_link']['url']);?>">
                <?php \Elementor\Icons_Manager::render_icon( $icon['icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                <?php endforeach;?>
			</div>
		</div>
	</section>
	<!-- End Banner Section -->

<?php

    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Landing3_Banner() );
?>