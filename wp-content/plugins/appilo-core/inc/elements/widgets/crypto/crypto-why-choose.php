<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_why_choose extends Widget_Base {

   public function get_name() {
      return 'crypto_why_choose';
   }

   public function get_title() {
      return __( 'Crypto Why Choose', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_why_choose_content',
            [
                'label' => __('Why Choose Content', 'appilo'),
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
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Why Choose Us', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'We’ve Built A Platform To Buy & Sell Shares', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'The main reason for using lorem ipsum text is that it keeps people from focusing on the actual text.', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'item_img',
            [
                'label' => __('Item Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'item_title',
            [
                'label' => esc_html__( 'Item Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Secure User Data', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'item_info',
            [
                'label' => esc_html__( 'Item Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'The main reason for using lorem ipsum text is that it keeps people from focusing on the actual text.', 'appilo' ),
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Item List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'item_title' => esc_html__( 'Secure User Data', 'appilo' ),
                    ],
                    [
                        'item_title' => esc_html__( 'Big Data Insights', 'appilo' ),
                    ],


                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );
        $this->add_control(
            'banner_img',
            [
                'label' => __('Right Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'style_why_chose_us_style',
            [
                'label' => __('Live Price Content Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__( 'Container Width', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
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
                    '{{WRAPPER}} .crypto-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_color',
            [
                'label' =>   esc_html__( 'Sub Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_border_color',
            [
                'label' =>   esc_html__( 'Sub Title Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title span:before, .cr-section-title span:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Sub Title Typo', 'appilo' ),
                'name' => 'sub_title_typography',
                'selector' => '{{WRAPPER}} .cr-section-title span',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Title Typo', 'appilo' ),
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .cr-section-title h2',
            ]
        );

        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Info Typo', 'appilo' ),
                'name' => 'Info_typography',
                'selector' => '{{WRAPPER}} .cr-section-title p',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_box_style',
            [
                'label' => __( 'Content Box Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Icon_bg_color',
            [
                'label' =>   esc_html__( 'Icon Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-why-choose-item .thx-inner-icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'box_title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-why-choose-item .thx-inner-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Title Typo', 'appilo' ),
                'name' => 'Box_title_typography',
                'selector' => '{{WRAPPER}} .cr-why-choose-item .thx-inner-text h3',
            ]
        );
        $this->add_control(
            'box_info_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-why-choose-item .thx-inner-text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Box Info Typo', 'appilo' ),
                'name' => 'Box_Info_typography',
                'selector' => '{{WRAPPER}} .cr-why-choose-item .thx-inner-text p',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
        <!-- Start of why choose us section
            ============================================= -->
        <div id="cr-why-choose" class="cr-why-choose-section position-relative">
            <span class="cr-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <span class="cr-shape2 position-absolute"><img src="<?php echo $settings['shape_2']['url']; ?>" alt=""></span>
            <div class="container crypto-container-1200">
                <div class="cr-why-choose-content">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="cr-why-choose-text-area cr-headline pera-content">
                                <div class="cr-section-title cr-headline wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <span><?php echo $settings['sub_title']; ?></span>
                                    <h2><?php echo $settings['title']; ?></h2>
                                    <p><?php echo $settings['info']; ?></p>
                                </div>
                                <div class="cr-why-choose-item-wrapper">

                                    <?php foreach (  $settings['list'] as $item ) : ?>

                                    <div class="cr-why-choose-item cr-headline pera-content wow fadeFromUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="thx-inner-item d-flex align-items-center">
                                            <div class="thx-inner-icon d-flex align-items-center justify-content-center">
                                                <img src="<?php echo $item['item_img']['url']; ?>" alt="">
                                            </div>
                                            <div class="thx-inner-text">
                                                <h3><?php echo $item['item_title']; ?></h3>
                                                <p><?php echo $item['item_info']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 wow fadeFromRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="cr-why-choose-img">
                                <img src="<?php echo $settings['banner_img']['url']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of why choose us section
            ============================================= -->


<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_why_choose() );
?>