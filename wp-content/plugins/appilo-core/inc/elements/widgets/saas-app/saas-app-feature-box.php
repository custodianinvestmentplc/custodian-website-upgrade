<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_feature_box extends Widget_Base {

   public function get_name() {
      return 'saas_app_feature_box';
   }

   public function get_title() {
      return __( 'Saas App Feature Box', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'feature_box_content',
            [
                'label' => __( 'Feature Box', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => __('Icon Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $repeater->add_control(
            'icon_circle_shape',
            [
                'label' => __('Icon Circle Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,

            ]
        );
        $repeater->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'SEO Optimization' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'info', [
                'label' => esc_html__( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum este pur şi simplu
                                        mac hetă pentru text a industriei tip
                                        ografice. Lorem Ipsum a fost ma' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Feature Box List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => esc_html__( 'SEO Optimization', 'appilo' ),
                    ],
                    [
                        'title' => esc_html__( 'SMS Gateway', 'appilo' ),
                    ],
                    [
                        'title' => esc_html__( 'Payment Gateway', 'appilo' ),
                    ],
                    [
                        'title' => esc_html__( 'CDN Integration', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'Feature_style',
            [
                'label' => __('Feature Box Style', 'appilo'),
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
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__box h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .feature__box h3',
            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__box p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typo',
                'label' => esc_html__('Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .feature__box p',
            ]
        );
        $this->end_controls_section();



    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
<!-- feature start -->
<div class="feature">
    <div class="container container-1450">
        <div class="feature__box-wrap">
            <div class="row g-0">
            <?php foreach ($settings['list'] as $item):; ?>
                <div class="col-lg-3 col-md-6 feature__box-col wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                    <div class="feature__box">
                            <span class="icon">
                                <img src="<?php echo $item['icon']['url']; ?>" alt="">
                                <img class="icon_line" src="<?php echo $item['icon_circle_shape']['url']; ?>" alt="">
                            </span>
                        <h3><?php echo $item['title']; ?></h3>
                        <p><?php echo $item['info']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- feature end -->

<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_feature_box() );
?>