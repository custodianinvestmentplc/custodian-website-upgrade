<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_newsletter extends Widget_Base {

   public function get_name() {
      return 'saas_app_newsletter';
   }

   public function get_title() {
      return __( 'Saas App Newsletter', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'Newsletter_content',
            [
                'label' => __( 'Newsletter Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__( 'Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '# Why Choose App?' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Subscribed for Update' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'newsletter_shortcode', [
                'label' => esc_html__( 'Newsletter Shortcode', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'showcase_style',
            [
                'label' => __('Newsletter Style', 'appilo'),
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
            'newsletter_bg',
            [
                'label' => esc_html__('Newsletter BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newslater__wrap' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Subtitle_color',
            [
                'label' => esc_html__('Subtitle Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newslater__title span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Subtitle_typo',
                'label' => esc_html__('Subtitle Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .newslater__title span',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newslater__title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .newslater__title h2',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>

<!-- newslater start -->
<div class="newslater newslater__bg">
    <div class="container container-1450">
        <div class="newslater__wrap">
            <div class="newslater__title text-center mb-50">
                <span class="wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['subtitle']; ?></span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms"><?php echo $settings['title']; ?></h2>
            </div>
            <?php echo do_shortcode($settings['newsletter_shortcode']); ?>
        </div>
    </div>
</div>
<!-- newslater end -->

<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_newsletter() );
?>