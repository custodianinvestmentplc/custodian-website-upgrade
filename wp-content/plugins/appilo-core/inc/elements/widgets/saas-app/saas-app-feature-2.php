<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_feature_2 extends Widget_Base {

   public function get_name() {
      return 'saas_app_feature_2';
   }

   public function get_title() {
      return __( 'Saas App Feature 2', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'WCA_top_content',
            [
                'label' => __('Feature 2 Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Easy To Manage your All Data
                                    By this <span>Applicaiton</span>' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Fitness create ready Application for your business and Fitness powered website' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'feature_form_shortcode',
            [
                'label' => esc_html__( 'Form Shortcode', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '' , 'appilo' ),
                'label_block' => true,
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
        $this->end_controls_section();
        $this->start_controls_section(
            'wca_tab_content',
            [
                'label' => __( 'Review Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'top_position',
            [
                'label' => esc_html__( 'Top Position', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_control(
            'left_position',
            [
                'label' => esc_html__( 'Left Position', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $repeater->add_control(
            'review_heading',
            [
                'label' => esc_html__( 'Review Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Responsive Friendly Design' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'review_info',
            [
                'label' => esc_html__( 'Review Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'review_image',
            [
                'label' => __('Review Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'review_items',
            [
                'label' => esc_html__( 'Review Items', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'review_heading' => __( 'Responsive Friendly Design', 'appilo' ),
                    ],[
                        'review_heading' => __( 'Responsive Friendly Design', 'appilo' ),
                    ],[
                        'review_heading' => __( 'Responsive Friendly Design', 'appilo' ),
                    ],[
                        'review_heading' => __( 'Responsive Friendly Design', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ review_heading }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shape_content',
            [
                'label' => __( 'Shape Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'shape_1',
            [
                'label' => __('Shape 1 Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_2',
            [
                'label' => __('Shape 2 Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_3',
            [
                'label' => __('Shape 3 Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
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
            'container_bg',
            [
                'label' => esc_html__('Container BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature.gray-bg-2' => 'background-color: {{VALUE}};',
                ],
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
                    '{{WRAPPER}} .tx-sec-title p.color-black' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title p.color-black',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Review_style',
            [
                'label' => __( 'Review Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Review_Title_color',
            [
                'label' => esc_html__('Review Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review__content h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Review_Title_typo',
                'label' => esc_html__('Review Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .review__content h3',
            ]
        );
        $this->add_control(
            'Review_info_color',
            [
                'label' => esc_html__('Review Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review__content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Review_info_typo',
                'label' => esc_html__('Review Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .review__content p',
            ]
        );
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

<!-- feature start -->
<div class="feature gray-bg-2 pt-110 pb-120 mrl-80">
    <div class="container container-1450">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tx-sec-title text-center mb-70">
                    <h2 class="title mb-35 wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                        <?php echo $settings['title'] ; ?>
                    </h2>
                    <p class="color-black wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                        <?php echo $settings['info'] ; ?>
                    </p>
                </div>
                <?php echo do_shortcode($settings['feature_form_shortcode']); ?>
                <div class="app-img mt-115 text-center wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1500ms">
                    <img src="<?php echo $settings['banner_img']['url']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="review__wrap">
    <?php
        $i = 1;
        foreach ($settings['review_items'] as $review_item){;
    ?>
        <div class="review__item item1 <?php if ($i == 1){echo 'active';}; ?> wow fadeInLeft elementor-repeater-item-<?php echo $review_item['_id'] ?>" data-wow-delay=".3s" data-wow-duration="1500ms">
            <div class="review__content">
                <h3><?php echo $review_item['review_heading']; ?></h3>
                <p><?php echo $review_item['review_info']; ?></p>
            </div>
            <div class="review__img">
                <img src="<?php echo $review_item['review_image']['url']; ?>" alt="">
            </div>
        </div>
    <?php $i++; }; ?>

    </div>
    <div class="feature__ss">
        <?php if (isset($settings['shape_1']['url'])){; ?>
        <img class="shape wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms"  src="<?php echo $settings['shape_1']['url']; ?>" alt="">
        <?php }; ?>
        <?php if (isset($settings['shape_2']['url'])){; ?>
        <img class="ss_01 wow fadeInRight" data-wow-delay=".4s" data-wow-duration="1500ms" src="<?php echo $settings['shape_2']['url']; ?>" alt="">
        <?php }; ?>
        <?php if (isset($settings['shape_3']['url'])){; ?>
        <img class="ss_02 wow fadeInRight" data-wow-delay=".6s" data-wow-duration="1500ms" src="<?php echo $settings['shape_3']['url']; ?>" alt="">
        <?php }; ?>
    </div>
</div>
<!-- feature end -->


<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_feature_2() );
?>