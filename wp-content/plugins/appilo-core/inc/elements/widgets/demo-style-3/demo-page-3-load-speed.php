<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_load_speed extends Widget_Base {

   public function get_name() {
      return 'demo_3_load_speed';
   }

   public function get_title() {
      return __( 'Demo Page Load Speed', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'page_speed_content',
            [
                'label' => __('Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_bg',
            [
                'label' => __('Section BG Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Fast Loading Speed Optimized for Your Website.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'sub_title', [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Avarton is optimized to be fast & highly performant by having	a good structure and well-written code.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'theme_feature_list',
            [
                'label' => __( 'Page Speed Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'speed_number', [
                'label' => esc_html__( 'Page Speed Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '90' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tread_mark',
            [
                'label' => __('Tread Mark Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'speed_below_text', [
                'label' => esc_html__( 'Speed Below Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'PageSpeed Score' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Page Speed Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'speed_below_text' => esc_html__( 'PageSpeed Score', 'appilo' ),
                    ],
                    [
                        'speed_below_text' => esc_html__( 'YSlow Score', 'appilo' ),
                    ],
                    [
                        'speed_below_text' => esc_html__( 'Faster Than', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ speed_below_text }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'buttons_style',
            [
                'label' => __('Style', 'appilo'),
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
                    '{{WRAPPER}} .container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();



?>

        <!-- Start of Load Speed
            ============================================= -->
        <div id="thx-load-speed" class="thx-load-speed-section" data-background="<?php echo $settings['section_bg']['url']; ?>">
            <div class="container container-1200">
                <div class="thx-load-speed-content">
                    <div class="thx-load-speed-title text-center headline">
                        <h3><?php echo $settings['title']; ?> </h3>
                        <p><?php echo $settings['sub_title']; ?></p>
                    </div>
                    <div class="thx-load-circle">
                        <div class="row">

                            <?php foreach ($settings['list'] as $item):; ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="counter-boxed headline position-relative">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#5e80da" data-bgColor="#424245" data-width="215" data-height="215" data-linecap="normal"  value="<?php echo $item['speed_number']; ?>" thickness="0.09">
                                        <div class="thx-inner-text thx-count-box"><span class="thx-count-text" data-stop="<?php echo $item['speed_number']; ?>" data-speed="3500"></span>%</div>
                                        <div class="tread-mark"><img src="<?php echo $item['tread_mark']['url']; ?>" alt=""></div>
                                        <h3><?php echo $item['speed_below_text']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Load Speed
            ============================================= -->




<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_load_speed() );
?>