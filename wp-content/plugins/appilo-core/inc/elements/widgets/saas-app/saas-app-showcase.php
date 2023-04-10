<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_showcase extends Widget_Base {

   public function get_name() {
      return 'saas_app_showcase';
   }

   public function get_title() {
      return __( 'Saas App Showcase', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'showcase_content',
            [
                'label' => __( 'Showcase Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__( 'Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '<span># No 1</span> Trending Apps' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Easy To <span>Manage</span> your All Data By this Applicaiton' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'showcase_img_1',
            [
                'label' => __('Showcase Image 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $this->add_control(
            'showcase_img_2',
            [
                'label' => __('Showcase Image 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $this->add_control(
            'showcase_img_3',
            [
                'label' => __('Showcase Image 3', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $this->add_control(
            'showcase_img_4',
            [
                'label' => __('Showcase Image 4', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $this->add_control(
            'showcase_img_5',
            [
                'label' => __('Showcase Image 5', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $this->add_control(
            'showcase_img_6',
            [
                'label' => __('Showcase Image 6', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $this->add_control(
            'showcase_bg_circle_line',
            [
                'label' => __('Background Circle Shape', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'showcase_style',
            [
                'label' => __('Showcase Style', 'appilo'),
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
            'Subtitle_color',
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
                'name' => 'Title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title .title',
            ]
        );
        $this->end_controls_section();



    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>

<!-- showcase start -->
<div class="showcase pos-rel pt-120 pb-120">
    <div class="container container-1450">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tx-sec-title mb-45 text-center">

                        <span class="sub_title wow fadeInUp">
                            <?php echo $settings['subtitle']; ?>
                        </span>

                    <h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                        <?php echo $settings['title']; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row pos-rel">
            <div class="col-lg-4 col-md-6">
                <div class="showcase__img pos-rel">
                    <div class="showcase__img1 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['showcase_img_1']['url']; ?>" alt="">
                    </div>
                    <div class="showcase__img2 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['showcase_img_2']['url']; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="showcase__img pos-rel">
                    <div class="showcase__img3 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['showcase_img_3']['url']; ?>" alt="">
                    </div>
                    <div class="showcase__img4 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['showcase_img_4']['url']; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="showcase__img pos-rel">
                    <div class="showcase__img5 wow fadeInRight" data-wow-delay="0s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['showcase_img_5']['url']; ?>" alt="">
                    </div>
                    <div class="showcase__img6 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['showcase_img_6']['url']; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="showcase__shape">
                <img src="<?php echo $settings['showcase_bg_circle_line']['url']; ?>" alt="">
            </div>
        </div>
    </div>
</div>
<!-- showcase end -->

<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_showcase() );
?>