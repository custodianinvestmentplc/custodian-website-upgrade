<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_author_support extends Widget_Base {

   public function get_name() {
      return 'demo_3_author_support';
   }

   public function get_title() {
      return __( 'Demo Page Author Support', 'appilo' );
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_img',
            [
                'label' => __('Support Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'How Can We Help You?' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'support_text', [
                'label' => esc_html__( 'Support Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Open a ticket for Support' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'support_link',
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
                'label' => esc_html__( 'Author Support', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'How Can We Help You?', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Detailed Documentation', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Looking for customization?', 'appilo' ),
                    ],
                ],

                'title_field' => '{{{ title }}}',
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

        <!-- Start of Author support section
        ============================================= -->
        <div id="thx-author-support" class="thx-author-support-section" data-background="<?php echo $settings['section_bg']['url']; ?>">
            <div class="container container-1200">
                <div class="row">

                <?php foreach ($settings['list'] as $item):; ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="thx-author-innerbox text-center">
                            <div class="thx-item-icon">
                                <img src="<?php echo $item['list_img']['url']; ?>" alt="">
                            </div>
                            <div class="thx-item-text headline">
                                <h3><?php echo $item['title']; ?></h3>
                                <a href="<?php echo $item['support_link']['url']; ?>"><?php echo $item['support_text']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!-- End of Author support section
            ============================================= -->



<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_author_support() );
?>