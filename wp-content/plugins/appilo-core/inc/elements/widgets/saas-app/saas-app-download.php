<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_download extends Widget_Base {

   public function get_name() {
      return 'saas_app_download';
   }

   public function get_title() {
      return __( 'Saas App Download', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'download_left_content',
            [
                'label' => __('Download Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__( 'Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span># Why</span> Choose App?' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'App is <span>Available</span> Free <br> On Google Store' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Increase productivity with a simple to-do app. app for <br> managing your personal budgets' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'download_button_list',
            [
                'label' => __( 'Download Button Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
//        repeater for style 1
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'download_img',
            [
                'label' => __('Download Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'download_link',
            [
                'label' => esc_html__( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
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
                'label' => esc_html__( 'Download Button List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                    ],
                    [
                    ],
                ],

            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'download_section_right_content',
            [
                'label' => __( 'Section Images', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'mobile_img',
            [
                'label' => __('Mobile Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'app_img',
            [
                'label' => __('App Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'right_content_bg',
            [
                'label' => esc_html__('Right Content BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__app-bg::after' => 'background-color: {{VALUE}};',
                ],
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
            'Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-sec-title p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title p',
            ]
        );
        $this->end_controls_section();



    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>
<!-- feature start -->
<div class="feature pt-55">
    <div class="feature-bg feature__app-bg mrl-80">
        <div class="container container-1450">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="feature__left pt-90 pb-90">
                        <div class="tx-sec-title mb-20">
                            <span class="sub_title wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['subtitle']; ?></span>
                            <h2 class="title mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                                <?php echo $settings['title'] ; ?>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1500ms">
                                <?php echo $settings['info'] ; ?>
                            </p>
                        </div>
                        <div class="apps ul_li mt-15">
                            <?php foreach ($settings['list'] as $item):; ?>
                            <a class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1500ms" href="<?php echo $item['download_link']['url']; ?>">
                                <img src="<?php echo $item['download_img']['url']; ?>" alt="">
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature__app wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0s">
                        <img  src="<?php echo $settings['mobile_img']['url']; ?>" alt="" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature__app-ss wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms">
        <img src="<?php echo $settings['app_img']['url']; ?>" alt="">
    </div>
</div>
<!-- feature end -->

<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_download() );
?>