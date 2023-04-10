<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_banner extends Widget_Base {

   public function get_name() {
      return 'saas_app_banner';
   }

   public function get_title() {
      return __( 'Saas App Banner', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'saas_app_shapes_content',
            [
                'label' => __('SaaS Banner Shapes', 'appilo'),
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
            'shape_8',
            [
                'label' => __('Shape 8', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'saas_app_hero_content',
            [
                'label' => __( 'Hero Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'hero_subtitle', [
                'label' => esc_html__( 'Hero Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span># No1</span> Trending Apps On Play Store' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'hero_title', [
                'label' => esc_html__( 'Hero Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Get <span class="shape">Benifit</span> By Using Trending' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'hero_title_after_text', [
                'label' => esc_html__( 'Hero Title After Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Apps' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'hero_title_after_text_shape',
            [
                'label' => __('Hero After Title Shape', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Increase productivity with a simple to-do app. app for <br>
                                    managing your personal budgets' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_1_text',
            [
                'label' => esc_html__( 'Button 1 Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Start Free Trial' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_1_url',
            [
                'label' => esc_html__( 'Button 1 URL', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_2_text',
            [
                'label' => esc_html__( 'Button 2 Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Watch Videos' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_2_url',
            [
                'label' => esc_html__( 'Button 2 URL', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'hero_image_content',
            [
                'label' => __( 'Hero Image Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'hero_image',
            [
                'label' => __('Hero Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'hero_avatar_1',
            [
                'label' => __('Avatar 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'hero_icon',
            [
                'label' => __('Hero Icon', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'hero_avatar_2',
            [
                'label' => __('Avatar 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'hero_right_content',
            [
                'label' => __( 'Hero Right Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'selling_rating_number',
            [
                'label' => esc_html__( 'Rating Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__( '5.00' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'selling_rating_text',
            [
                'label' => esc_html__( 'Rating Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Top selling Apps' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'rating_behind_line_shape',
            [
                'label' => __('Rating Behind Line Shape', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_list', [
                'label' => esc_html__( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Privacies & Terms Support' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'feature_list_icon_bg',
            [
                'label' => esc_html__('Icon BG Color', 'appilo'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__list li{{CURRENT_ITEM}}:before' => 'background-color: {{VALUE}}'
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Feature List Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_list' => __( 'privacies & Terms Support', 'appilo' ),
                    ],
                    [
                        'feature_list' => __( 'Strong Encryption System', 'appilo' ),
                    ],
                    [
                        'feature_list' => __( 'First Youtube videos Uploaded', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_list }}}',
            ]
        );
        $this->add_control(
            'countdown_number',
            [
                'label' => esc_html__( 'Countdown Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__( '30' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'after_countdown',
            [
                'label' => esc_html__( 'After Countdown', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'K+' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'countdown_text',
            [
                'label' => esc_html__( 'Countdown Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Active Install Apps' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'counter_behind_line_shape',
            [
                'label' => __('Countdown Behind Line Shape', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'saas_hero_banner_style',
            [
                'label' => __('Banner Left Style', 'appilo'),
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
                    'size' => 1450,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1450' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__subtitle' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typo',
                'label' => esc_html__('Sub Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .hero__subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .hero__title',
            ]
        );
        $this->add_control(
            'title_bottom_border_color',
            [
                'label' => esc_html__('Title Bottom Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__title .shape::before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .hero__content p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'button_Style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Button_typo',
                'label' => esc_html__('Button Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thm-btn .btn-wrap span',
            ]
        );
        $this->add_control(
            'button__1_style',
            [
                'label' => esc_html__( 'Button 1 Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Button_1_color',
            [
                'label' => esc_html__('Button 1 Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Button_1_Background',
            [
                'label' => esc_html__('Button 1 Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button__2_style',
            [
                'label' => esc_html__( 'Button 2 Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Button_2_color',
            [
                'label' => esc_html__('Button 2 Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn__transparent .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Button_2_Background',
            [
                'label' => esc_html__('Button 2 Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn__transparent' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Button_2_Border color',
            [
                'label' => esc_html__('Button 2 Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn__transparent' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Button_2_hover_color',
            [
                'label' => esc_html__('Button 2 Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn__transparent:hover .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Button_2_hover_bg_color',
            [
                'label' => esc_html__('Button 2 Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn__transparent:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'hero_right_style',
            [
                'label' => __( 'Right Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'rating__color',
            [
                'label' => esc_html__('Rating Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__top-selling-app h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'rating_typo',
                'label' => esc_html__('Rating Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .hero__top-selling-app h3',
            ]
        );
        $this->add_control(
            'rating__text_color',
            [
                'label' => esc_html__('Rating Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__top-selling-app span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'rating_text_typo',
                'label' => esc_html__('Rating Text Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .hero__top-selling-app span',
            ]
        );
        $this->add_control(
            'features_style__',
            [
                'label' => esc_html__( 'Feature Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'feature_text_color',
            [
                'label' => esc_html__('Feature Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__list li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'feature_text__typo',
                'label' => esc_html__('Feature Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .hero__list li',
            ]
        );
        $this->add_control(
            'countdown_style__',
            [
                'label' => esc_html__( 'Countdown Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Countdown_color',
            [
                'label' => esc_html__('Countdown Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__count h3 span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Countdown__typo',
                'label' => esc_html__('Countdown Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .hero__count h3 span',
            ]
        );
        $this->add_control(
            'Countdown_Text_color',
            [
                'label' => esc_html__('Countdown Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__count > span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Countdown_Text__typo',
                'label' => esc_html__('Countdown Text Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .hero__count > span',
            ]
        );
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

    <!-- hero start -->
    <div class="hero__area">
        <div class="hero__icons">
            <img class="icon1" src="<?php echo $settings['shape_1']['url']; ?>" alt="">
            <img class="icon2" src="<?php echo $settings['shape_2']['url']; ?>" alt="">
            <img class="icon3" src="<?php echo $settings['shape_3']['url']; ?>" alt="">
            <img class="icon4" src="<?php echo $settings['shape_4']['url']; ?>" alt="">
            <img class="icon5" src="<?php echo $settings['shape_5']['url']; ?>" alt="">
            <img class="icon6" src="<?php echo $settings['shape_6']['url']; ?>" alt="">
            <img class="icon7" src="<?php echo $settings['shape_7']['url']; ?>" alt="">
            <img class="icon8" src="<?php echo $settings['shape_8']['url']; ?>" alt="">
        </div>
        <div class="container container-1450">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="hero__content">
                        <span class="hero__subtitle wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><?php echo $settings['hero_subtitle']; ?></span>
                        <h3 class="hero__title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1500ms">
                            <?php echo $settings['hero_title'] ; ?>
                            <span class="icon-text">
                                    <?php echo $settings['hero_title_after_text'] ; ?>
                                    <img src="<?php echo $settings['hero_title_after_text_shape']['url'] ; ?>" alt="">
                            </span>
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1500ms">
                            <?php echo $settings['info'] ; ?>
                        </p>
                        <div class="hero__btn btns mt-25">
                            <?php if ( !empty( $settings['button_1_url']['url'] ) ){; ?>
                            <a class="thm-btn wow fadeInUp" href="<?php echo $settings['button_1_url']['url']; ?>" data-wow-delay=".6s" data-wow-duration="1500ms">
                                    <span class="btn-wrap">
                                        <span><?php echo $settings['button_1_text']; ?></span>
                                        <span><?php echo $settings['button_1_text']; ?></span>
                                    </span>
                            </a>
                            <?php }; ?>
                            <?php if ( !empty( $settings['button_2_url']['url'] ) ){; ?>
                            <a class="thm-btn thm-btn__transparent popup-video wow fadeInUp" href="<?php echo $settings['button_2_url']['url']; ?>" data-wow-delay=".8s" data-wow-duration="1500ms">
                                    <span class="btn-wrap">
                                        <span><?php echo $settings['button_2_text']; ?></span>
                                        <span><?php echo $settings['button_2_text']; ?></span>
                                    </span>
                            </a>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hero__img pos-rel">
                        <div class="wow fadeInRight" data-wow-delay=".6s" data-wow-duration="1500ms">
                            <img src="<?php echo $settings['hero_image']['url']; ?>" alt="">
                        </div>
                        <div class="hero__avatar1 wow fadeInLeft" data-wow-delay=".7s" data-wow-duration="1500ms">
                            <img src="<?php echo $settings['hero_avatar_1']['url']; ?>" alt="">
                        </div>
                        <div class="hero__icon">
                            <img src="<?php echo $settings['hero_icon']['url']; ?>" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="hero__right-wrap pos-rel">
                        <div class="hero__right">
                            <div class="hero__avatar2 wow fadeInRight" data-wow-delay=".8s" data-wow-duration="1500ms">
                                <img src="<?php echo $settings['hero_avatar_2']['url']; ?>" alt="">
                            </div>
                            <div class="hero__top-selling-app wow fadeInRight" data-wow-delay=".4s" data-wow-duration="1500ms">
                                <h3><?php echo $settings['selling_rating_number']; ?></h3>
                                <span><?php echo $settings['selling_rating_text']; ?></span>
                            </div>
                            <div class="hero__line-shape">
                                <img class="line1" src="<?php echo $settings['rating_behind_line_shape']['url']; ?>" alt="">
                            </div>
                        </div>
                        <ul class="hero__list list-unstyled wow fadeInUp"  data-wow-delay=".5s" data-wow-duration="1500ms">
                            <?php foreach ($settings['list'] as $item){; ?>
                                <li class="elementor-repeater-item-<?php echo $item['_id']; ?>"><?php echo $item['feature_list']; ?></li>
                            <?php }; ?>
                        </ul>
                        <div class="hero__count wow fadeInLeft" data-wow-delay=".6s" data-wow-duration="1500ms">
                            <h3><span class="odometer" data-count="<?php echo $settings['countdown_number']; ?>">00</span> <span class="suffix"><?php echo $settings['after_countdown']; ?></span></h3>
                            <span><?php echo $settings['countdown_text']; ?></span>

                        </div>
                        <div class="hero__line-shape">
                            <img class="line2" src="<?php echo $settings['counter_behind_line_shape']['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero end -->


<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_banner() );
?>