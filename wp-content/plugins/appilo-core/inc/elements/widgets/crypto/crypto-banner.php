<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_banner extends Widget_Base {

   public function get_name() {
      return 'crypto_banner';
   }

   public function get_title() {
      return __( 'Crypto Banner', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_banner',
            [
                'label' => __('Banner Content', 'appilo'),
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
            'heading',
            [
                'label' => esc_html__( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Trusted & Secure Trading', 'appilo' ),
            ]
        );
        $this->add_control(
            'color_heading',
            [
                'label' => esc_html__( 'Color Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Crypto', 'appilo' ),
            ]
        );
        $this->add_control(
            'bellow_heading',
            [
                'label' => esc_html__( 'Below Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Wallet', 'appilo' ),
            ]
        );
        $this->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'You might wonder why a designer would choose to use Morem text Paragraphs in English or their native language.', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_url',
            [
                'label' => esc_html__( 'Button URL', 'appilo' ),
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
            'video_play_text',
            [
                'label' => esc_html__( 'Video Play Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'How It Work', 'appilo' ),
            ]
        );

        $this->add_control(
            'video_play_url',
            [
                'label' => esc_html__( 'Video Play URL', 'appilo' ),
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
            'style_tabutton',
            [
                'label' => __('Tab Button Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cripto-banner-text h1',
            ]
        );
        $this->add_control(
            'color_heading_color',
            [
                'label' =>   esc_html__( 'Color Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text h1 span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'below_heading_border_color',
            [
                'label' =>   esc_html__( 'Below Heading Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text h1 b:before,{{WRAPPER}} .cripto-banner-text h1 b:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Information Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' =>   esc_html__( 'Information Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cripto-banner-text p',
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
                    '{{WRAPPER}} .cripto-banner-text .cr-banner-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' =>   esc_html__( 'Button Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text .cr-banner-btn a' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typo',
                'label' =>   esc_html__( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cripto-banner-text .cr-banner-btn a',
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
                    '{{WRAPPER}} .cripto-banner-text .cr-banner-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_bg_hover_color',
            [
                'label' =>   esc_html__( 'Button Hover Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text .cr-banner-btn a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->start_controls_tabs('play_btn_tab_style');
        $this->start_controls_tab(
            'play_btn_normal',
            [
                'label' => esc_html__( 'Play Button Style', 'appilo' ),
            ]
        );
        $this->add_control(
            'play_button_text_color',
            [
                'label' =>   esc_html__( 'Play Button Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text .cr-banner-video-btn a span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'play_button_typo',
                'label' =>   esc_html__( 'Play Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cripto-banner-text .cr-banner-video-btn a span',
            ]
        );

        $this->add_control(
            'play_button_icon_color',
            [
                'label' =>   esc_html__( 'Play Button Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text .cr-banner-video-btn i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'play_button_border_color',
            [
                'label' =>   esc_html__( 'Play Button Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cripto-banner-text .cr-banner-video-btn i' => 'border-color: {{VALUE}};',
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

        <!-- Start of Banner section
        ============================================= -->
        <section id="cripto-banner" class="cripto-banner-section position-relative" data-background="<?php echo $settings['banner_img']['url']; ?>">
            <span class="cr-banner-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <span class="cr-banner-shape2 position-absolute"><img src="<?php echo $settings['shape_2']['url']; ?>" alt=""></span>
            <span class="cr-banner-shape3 position-absolute"><img src="<?php echo $settings['shape_3']['url']; ?>" alt=""></span>
            <span class="cr-banner-shape4 position-absolute"><img src="<?php echo $settings['shape_4']['url']; ?>" alt=""></span>
            <span class="cr-banner-shape5 position-absolute"><img src="<?php echo $settings['shape_5']['url']; ?>" alt=""></span>
            <span class="cr-banner-shape6 position-absolute"><img src="<?php echo $settings['shape_6']['url']; ?>" alt=""></span>
            <div class="container">
                <div class="cripto-banner-text cr-headline pera-content">
                    <h1 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <?php echo $settings['heading']; ?> <span><?php echo $settings['color_heading']; ?></span>
                        <b><?php echo $settings['bellow_heading']; ?></b>
                    </h1>
                    <p class="wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms"><?php echo $settings['description']; ?></p>
                    <div class="banner-btn wow fadeFromUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="cr-banner-btn-wrapper d-flex  align-items-center">
                            <div class="cr-banner-btn">
                                <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['button_url']['url']; ?>"><?php echo $settings['button_text']; ?></a>
                            </div>
                            <div class="cr-banner-video-btn">
                                <a class="cr_banner_video_box" href="<?php echo $settings['video_play_url']['url']; ?>">
                                    <i class="fas fa-play"></i>
                                    <span><?php echo $settings['video_play_text']; ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Banner section
            ============================================= -->

<?php

    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_banner() );
?>