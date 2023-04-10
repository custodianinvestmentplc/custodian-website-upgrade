<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_feature extends Widget_Base {

   public function get_name() {
      return 'saas_app_feature';
   }

   public function get_title() {
      return __( 'Saas App Feature', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'feature_top_content',
            [
                'label' => __('Feature Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'feature_subtitle', [
                'label' => esc_html__( 'Feature Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span># No 1</span> Trending Apps' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'feature_title', [
                'label' => __( 'Feature Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Why this App Installed <br>
                                <span>4000k</span> Customer' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_1_text',
            [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'App Features' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_1_url',
            [
                'label' => esc_html__( 'Button URL', 'plugin-name' ),
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
            'info',
            [
                'label' => esc_html__( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Increase productivity with a simple to-do app.  managing your personal budgets Urna sit placerat tellus at est odio id. Pharetra' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'tab_active',
            [
                'label' => esc_html__( 'Active Tab', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'appilo' ),
                'label_off' => esc_html__( 'No', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'feature_img',
            [
                'label' => __('Feature Logo', 'appilo'),
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
                'default' => esc_html__( 'Reguler Updates' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'feature_info',
            [
                'label' => esc_html__( 'Feature Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Bog cheeky bugger blow off only a quid grub he legged it porkies tosser young delinquent argy-bargy.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'feature_btn',
            [
                'label' => esc_html__( 'Feature Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Explore More' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'feature_btn_url',
            [
                'label' => esc_html__( 'Feature Button URL', 'plugin-name' ),
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
            'list',
            [
                'label' => esc_html__( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => __( 'Reguler Updates', 'appilo' ),
                    ],
                    [
                        'feature_title' => __( 'Reguler Updates', 'appilo' ),
                    ],
                    [
                        'feature_title' => __( 'Reguler Updates', 'appilo' ),
                    ],
                    [
                        'feature_title' => __( 'Reguler Updates', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );
        $this->add_control(
            'heading_bottom_shape',
            [
                'label' => esc_html__( 'Bottom Shape', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'exclude' => ['color', 'position', 'attachment', 'repeat', 'size'],
                'selector' => '{{WRAPPER}} .feature__item::before',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'Feature_style',
            [
                'label' => __('Feature Style', 'appilo'),
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
            'subtitle_color',
            [
                'label' => esc_html__('Subtitle Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-sec-title .sub_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Subtitle_typo',
                'label' => esc_html__('Subtitle Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title .sub_title',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-sec-title .title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title .title',
            ]
        );
        $this->add_control(
            'button_heading_style',
            [
                'label' => esc_html__( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Button_color',
            [
                'label' => esc_html__('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn__transparent .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Button_1_Background',
            [
                'label' => esc_html__('Button Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn__transparent' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Button_1_border_color',
            [
                'label' => esc_html__('Button Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__btn a' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Button_1_hover_bg_color',
            [
                'label' => esc_html__('Button Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn__transparent:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Button_typo',
                'label' => esc_html__('Button Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thm-btn__transparent .btn-wrap',
            ]
        );
        $this->add_control(
            'info_heading_style',
            [
                'label' => esc_html__( 'Information Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Info_Border_color',
            [
                'label' => esc_html__('Info Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__text' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .feature__text p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_style',
            [
                'label' => __( 'Feature Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Feature_Title_color',
            [
                'label' => esc_html__('Feature Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__item h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Feature_Title_border_bottom_color',
            [
                'label' => esc_html__('Feature Title Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__item h3::before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_Title_typo',
                'label' => esc_html__('Feature Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .feature__item h3',
            ]
        );
        $this->add_control(
            'Feature_Content_info_color',
            [
                'label' => esc_html__('Feature Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__item p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_content_info_typo',
                'label' => esc_html__('Feature Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .feature__item p',
            ]
        );
        $this->add_control(
            'Feature_Button_color',
            [
                'label' => esc_html__('Feature Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__link' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_Button_typo',
                'label' => esc_html__('Feature Button Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .feature__link',
            ]
        );
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

<!-- feature start -->
<div class="feature pt-110">
    <div class="container container-1450">
        <div class="feature__sec-title mb-45 mt-none-30">
            <div class="tx-sec-title mt-30">
                <span class="sub_title wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['feature_subtitle']; ?></span>
                <h2 class="title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1500ms"><?php echo $settings['feature_title'] ; ?></h2>
            </div>
            <div class="feature__btn mt-30 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1500ms">
            <?php if ( !empty( $settings['button_1_url']['url'] ) ){; ?>
                <a class="thm-btn thm-btn__transparent" href="<?php echo $settings['button_1_url']['url']; ?>">
                        <span class="btn-wrap">
                            <span><?php echo $settings['button_1_text']; ?></span>
                            <span><?php echo $settings['button_1_text']; ?></span>
                        </span>
                </a>
            <?php }; ?>
            </div>
            <div class="feature__text mt-30 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
                <p><?php echo $settings['info'] ; ?></p>
            </div>
        </div>
        <div class="row mt-none-30">
        <?php foreach ($settings['list'] as $item){; ?>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                <div class="feature__item wow fadeInUp <?php if ( 'yes' === $item['tab_active'] ) {echo 'active';} ?>" data-wow-delay="0s" data-wow-duration="1500ms">
                    <span class="icon"><img src="<?php echo $item['feature_img']['url']; ?>" alt=""></span>
                    <h3><?php echo $item['feature_title']; ?></h3>
                    <p><?php echo $item['feature_info']; ?></p>
                    <a class="feature__link" href="<?php echo $item['feature_btn_url']['url']; ?>"><?php echo $item['feature_btn']; ?><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        <?php }; ?>

        </div>
    </div>
</div>
<!-- feature end -->


<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_feature() );
?>