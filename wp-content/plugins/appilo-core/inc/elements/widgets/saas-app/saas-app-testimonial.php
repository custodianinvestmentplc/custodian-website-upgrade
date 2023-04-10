<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_testimonial extends Widget_Base {

   public function get_name() {
      return 'saas_app_testimonial';
   }

   public function get_title() {
      return __( 'Saas App Testimonial', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'testimonial_heading_content',
            [
                'label' => __('Heading Content', 'appilo'),
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
                'default' => __( 'Best Graphic Interface Through <br> Latest <span>Application</span> Showing' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'testimonial_list',
            [
                'label' => __( 'Testimonials Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
//        repeater for style 1
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'comment', [
                'label' => esc_html__( 'Testimonial Comment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment.Dislike men who are so beguiled and demoraliz worlds ed by the charms of pleasure of the moment. Lorem ipsum dolor sit amet, consectetur adipiscing elit.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'user_img',
            [
                'label' => __('User Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $repeater->add_control(
            'user_name', [
                'label' => esc_html__( 'User Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Cameron Williamson' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'user_designation', [
                'label' => esc_html__( 'User Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Ui/Ux Designer' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'user_name' => esc_html__( 'Cameron Williamson', 'appilo' ),
                    ],
                    [
                        'user_name' => esc_html__( 'Cameron Williamson', 'appilo' ),
                    ],
                    [
                        'user_name' => esc_html__( 'Cameron Williamson', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ user_name }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'testimonials_images',
            [
                'label' => __( 'Section Images', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'testimonial_img',
            [
                'label' => __('Testimonial Main Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_1',
            [
                'label' => __('Testimonial Shape 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_avatar_1',
            [
                'label' => __('Avatar 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_avatar_2',
            [
                'label' => __('Avatar 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_avatar_3',
            [
                'label' => __('Avatar 3', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_2',
            [
                'label' => __('Testimonial Shape 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_3',
            [
                'label' => __('Testimonial Shape 3', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_4',
            [
                'label' => __('Testimonial Shape 4', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_5',
            [
                'label' => __('Testimonial Shape 5', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_6',
            [
                'label' => __('Testimonial Shape 6', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_7',
            [
                'label' => __('Testimonial Shape 7', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_8',
            [
                'label' => __('Testimonial Shape 8', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'testimonial_shape_9',
            [
                'label' => __('Testimonial Shape 9', 'appilo'),
                'type' => Controls_Manager::MEDIA,
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
            'content_bg_color',
            [
                'label' => esc_html__('Content BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial.gray-bg-2' => 'background-color: {{VALUE}};',
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
        $this->end_controls_section();
        $this->start_controls_section(
            'testimonials_style__',
            [
                'label' => __( 'Testimonial Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'quote_icon_color',
            [
                'label' => esc_html__('Quote Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__item p i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'client_message_color',
            [
                'label' => esc_html__('Client Review Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__item p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_review_typo',
                'label' => esc_html__('Client Review Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .testimonial__item p',
            ]
        );
        $this->add_control(
            'Client_Name_color',
            [
                'label' => esc_html__('Client Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__author h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_Name_typo',
                'label' => esc_html__('Client Name Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .testimonial__author h4',
            ]
        );
        $this->add_control(
            'Client_Designation_color',
            [
                'label' => esc_html__('Client Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__author span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_Designation_typo',
                'label' => esc_html__('Client Designation Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .testimonial__author span',
            ]
        );
        $this->add_control(
            'active_arrow_bg',
            [
                'label' => esc_html__('Active Arrow BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__slide .owl-nav div:hover, .testimonial__slide .owl-nav div.owl-next' => 'background-color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();



    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>
<!-- testimonial start -->
<div class="testimonial gray-bg-2 mrl-80 pt-120 pb-340">
    <div class="container container-1450">
        <div class="row align-content-center">
            <div class="col-lg-6">
                <div class="tx-sec-title mb-45">

                        <span class="sub_title wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                            <?php echo $settings['subtitle']; ?>
                        </span>

                    <h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                        <?php echo $settings['title']; ?>
                    </h2>
                </div>
                <div class="testimonial__slide wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">

                <?php foreach ($settings['list'] as $item): ?>
                    <div class="testimonial__item">
                        <p><i class="fas fa-quote-left"></i>
                            <?php echo $item['comment']; ?>
                            <i class="fas fa-quote-right"></i></p>
                        <div class="testimonial__author ul_li mt-30">
                            <div class="avatar mr-20">
                                <img src="<?php echo $item['user_img']['url']; ?>" alt="">
                            </div>
                            <div class="content">
                                <h4><?php echo $item['user_name']; ?></h4>
                                <span><?php echo $item['user_designation']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial__img-wrap pos-rel">
                    <div class="testimonial__img wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['testimonial_img']['url']; ?>" alt="">
                    </div>
                    <div class="testimonial__shape" data-wow-delay=".0s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['testimonial_shape_1']['url']; ?>" alt="">
                    </div>
                    <div class="testimonial__avatar1">
                        <img src="<?php echo $settings['testimonial_avatar_1']['url']; ?>" alt="">
                    </div>
                    <div class="testimonial__avatar2 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['testimonial_avatar_2']['url']; ?>" alt="">
                    </div>
                    <div class="testimonial__avatar3">
                        <img src="<?php echo $settings['testimonial_avatar_3']['url']; ?>" alt="">
                    </div>
                    <div class="testimonial__icon wow fadeInRight" data-wow-delay=".8s" data-wow-duration="1500ms">
                        <img src="<?php echo $settings['testimonial_shape_2']['url']; ?>" alt="">
                    </div>
                    <div class="testimonial__icons">
                        <img class="icon1" src="<?php echo $settings['testimonial_shape_3']['url']; ?>" alt="">
                        <img class="icon2" src="<?php echo $settings['testimonial_shape_4']['url']; ?>" alt="">
                        <img class="icon3" src="<?php echo $settings['testimonial_shape_5']['url']; ?>" alt="">
                        <img class="icon4" src="<?php echo $settings['testimonial_shape_6']['url']; ?>" alt="">
                        <img class="icon5" src="<?php echo $settings['testimonial_shape_7']['url']; ?>" alt="">
                        <img class="icon6" src="<?php echo $settings['testimonial_shape_8']['url']; ?>" alt="">
                        <img class="icon7" src="<?php echo $settings['testimonial_shape_9']['url']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial end -->

<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_testimonial() );
?>