<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_page_banner_3 extends Widget_Base {

   public function get_name() {
      return 'demo_page_banner_3';
   }

   public function get_title() {
      return __( 'Demo Page Banner 3', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'demo_banner',
            [
                'label' => __('Banner Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'mockup_img_1',
            [
                'label' => __('Mockup Image 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mockup_img_2',
            [
                'label' => __('Mockup Image 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mockup_img_3',
            [
                'label' => __('Mockup Image 3', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mockup_img_4',
            [
                'label' => __('Mockup Image 4', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mockup_img_5',
            [
                'label' => __('Mockup Image 5', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'theme_version',
            [
                'label' => esc_html__( 'Theme Version', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '1.0', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Color Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Many Website, One Solution', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Multipurpose WordPress Theme', 'appilo' ),
            ]
        );
        
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'button_text', [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Stunning Demos' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'button_link',
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
            'buttons',
            [
                'label' => esc_html__( 'Buttons', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'button_text' => esc_html__( 'Stunning Demos', 'appilo' ),
                    ],
                    [
                        'button_text' => esc_html__( 'Theme Features', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ button_text }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'buttons_style',
            [
                'label' => __('Banner Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-banner-text h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-banner-text h2',
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
                    '{{WRAPPER}} .thx-banner-text .thx-banner-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typo',
                'label' =>   esc_html__( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-banner-text .thx-banner-btn a',
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
                    '{{WRAPPER}} .thx-banner-text .thx-banner-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'button_hover_background',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .thx-banner-text .thx-banner-btn a:before',
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
        <div id="thx-banner" class="thx-banner-section position-relative">
            <div class="thx-banner-mockup ul-li-block">
                <ul class="mockup-img">
                    <li class="wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms"><img src="<?php echo $settings['mockup_img_1']['url']; ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay="800ms" data-wow-duration="1500ms"><img src="<?php echo $settings['mockup_img_2']['url']; ?>" alt=""></li>
                    <li class="wow fadeInRight" data-wow-delay="1200ms" data-wow-duration="1500ms"><img src="<?php echo $settings['mockup_img_3']['url']; ?>" alt=""></li>
                    <li class="wow fadeInUp" data-wow-delay="1600ms" data-wow-duration="1000ms"><img src="<?php echo $settings['mockup_img_4']['url']; ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay="2000ms" data-wow-duration="1500ms"><img src="<?php echo $settings['mockup_img_5']['url']; ?>" alt=""></li>
                </ul>
            </div>
            <div class="thx-banner-content">
                <div class="thx-banner-text position-relative text-center headline pera-content wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <h1><?php echo $settings['theme_version']; ?></h1>
                    <span><?php echo $settings['info']; ?></span>
                    <h2><?php echo $settings['title']; ?></h2>
                    <div class="thx-banner-btn d-flex justify-content-center">
                        <?php foreach ($settings['buttons'] as $button): ?>
                        <a href="<?php echo $button['button_link']['url']; ?>"><?php echo $button['button_text']; ?></a>
                        <?php endforeach; ?>
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
Plugin::instance()->widgets_manager->register_widget_type( new demo_page_banner_3() );
?>