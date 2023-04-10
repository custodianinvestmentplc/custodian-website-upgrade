<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_counter extends Widget_Base {

   public function get_name() {
      return 'saas_app_counter';
   }

   public function get_title() {
      return __( 'Saas App Counter', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'counter_1_content',
            [
                'label' => __('SaaS Counter 1', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'counter_1_number',
            [
                'label' => esc_html__( 'Countdown Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__( '50' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_1_suffix',
            [
                'label' => esc_html__( 'Countdown Suffix', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'K+' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_1_text',
            [
                'label' => esc_html__( 'Countdown Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Free Download' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'counter_1',
            [
                'label' => esc_html__( 'Counter 1 Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_1_text' => __( 'Free Download', 'appilo' ),
                    ],
                    [
                        'counter_1_text' => __( '3,280 avg rating', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ counter_1_text }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'brand_logo_content',
            [
                'label' => __( 'Brand Logo', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'brand_logo',
            [
                'label' => __('Brand Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'brnad_logo',
            [
                'label' => esc_html__( 'Brand Logo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [ ],[ ],[ ],[ ]
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'counter_2_content',
            [
                'label' => __('SaaS Counter 2', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'counter_2_number',
            [
                'label' => esc_html__( 'Countdown Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__( '50' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_2_suffix',
            [
                'label' => esc_html__( 'Countdown Suffix', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'K+' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_2_text',
            [
                'label' => esc_html__( 'Countdown Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Free Download' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'counter_2',
            [
                'label' => esc_html__( 'Counter 2 Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_2_text' => __( 'Free Download', 'appilo' ),
                    ],
                    [
                        'counter_2_text' => __( '3,280 avg rating', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ counter_2_text }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'counter_style',
            [
                'label' => __('Counter Style', 'appilo'),
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
            'counter_number',
            [
                'label' => esc_html__('Counter Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter__item h2 span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_number_typo',
                'label' => esc_html__('Counter Number Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .counter__item h2 span',
            ]
        );
        $this->add_control(
            'counter_title_color',
            [
                'label' => esc_html__('Counter Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter__item .saas-app-counter-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_title_typo',
                'label' => esc_html__('Counter Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .counter__item .saas-app-counter-text',
            ]
        );
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

    <!-- counter start -->
    <div class="saas-app-counter">
        <div class="container container-1450">
            <div class="counter__wrap-wrap mt-none-30">
                <div class="counter__wrap d-flex mt-30 wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                <?php foreach ($settings['counter_1'] as $counter_1){; ?>
                    <div class="counter__item">
                        <h2><span class="odometer" data-count="<?php echo $counter_1['counter_1_number']; ?>">00</span> <span class="suffix"><?php echo $counter_1['counter_1_suffix']; ?></span></h2>
                        <span class="saas-app-counter-text"><?php echo $counter_1['counter_1_text']; ?></span>
                    </div>
                <?php }; ?>
                </div>
                <div class="brand__slide mt-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                <?php foreach ($settings['brnad_logo'] as $brand_logo){; ?>
                    <div class="brand__item">
                        <img src="<?php echo $brand_logo['brand_logo']['url']; ?>" alt="">
                    </div>
                <?php }; ?>
                </div>
                <div class="counter__wrap d-flex mt-30 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
                    <?php foreach ($settings['counter_2'] as $counter_2){; ?>
                        <div class="counter__item">
                            <h2><span class="odometer" data-count="<?php echo $counter_2['counter_2_number']; ?>">00</span> <span class="suffix"><?php echo $counter_2['counter_2_suffix']; ?></span></h2>
                            <span class="saas-app-counter-text"><?php echo $counter_2['counter_2_text']; ?></span>
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->


<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_counter() );
?>