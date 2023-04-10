<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_testimonial extends Widget_Base {

   public function get_name() {
      return 'demo_3_testimonial';
   }

   public function get_title() {
      return __( 'Demo Page Testimonial', 'appilo' );
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
            'sub_title', [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Testimonials' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '18k+ Clients Reviews' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'review_row_1',
            [
                'label' => __( 'Right To Left Review', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'envato_icon',
            [
                'label' => __('Envato Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'client_review', [
                'label' => esc_html__( 'Client Review', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'very Good support, He Helped me with everything and answer all my questions' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'author', [
                'label' => esc_html__( 'Author', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>Mt_Rezk</span> - Authore' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'right_to_left',
            [
                'label' => esc_html__( 'Client Reviews', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'author' => __( '<span>Mt_Rezk</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>jesse-envato-2000</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>NCBDS</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>andrahernest</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>fandyyz</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>bongochoice</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>TopFlightJay</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>andde</span> - Authore', 'appilo' ),
                    ],
                ],

                'title_field' => '{{{ author }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'review_row_2',
            [
                'label' => __( 'Left To Right Review', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'envato_icon',
            [
                'label' => __('Envato Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'client_review', [
                'label' => esc_html__( 'Client Review', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'very Good support, He Helped me with everything and answer all my questions' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'author', [
                'label' => esc_html__( 'Author', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>Mt_Rezk</span> - Authore' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'left_to_right',
            [
                'label' => esc_html__( 'Client Reviews', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'author' => __( '<span>Mt_Rezk</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>jesse-envato-2000</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>NCBDS</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>andrahernest</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>fandyyz</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>bongochoice</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>TopFlightJay</span> - Authore', 'appilo' ),
                    ],
                    [
                        'author' => __( '<span>andde</span> - Authore', 'appilo' ),
                    ],
                ],

                'title_field' => '{{{ author }}}',
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

        <!-- Start of Testimonial section
     ============================================= -->
        <div id="thx-testimonial" class="thx-testimonial-section">
            <div class="container container-1200">
                <div class="thx-section-title headline">
                    <div class="sub-title">
                        <?php echo $settings['sub_title']; ?>
                    </div>
                    <h2><?php echo $settings['title']; ?></h2>
                </div>
            </div>
            <div class="thx-testimonial-review-wrapper">
                <div class="thx-testimonial-review-area clearfix d-flex">

                <?php foreach ($settings['right_to_left'] as $right_to_left):; ?>
                    <div class="thx-testimonial-review-item d-flex">
                        <div class="thx-item-img">
                            <img src="<?php echo $right_to_left['envato_icon']['url']; ?>" alt="">
                        </div>
                        <div class="thx-item-text ul-li">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="qut-text">
                                <?php echo $right_to_left['client_review']; ?>
                            </div>
                            <div class="author"><?php echo $right_to_left['author']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>

                <div class="thx-testimonial-review-area-2 clearfix d-flex">

                <?php foreach ($settings['left_to_right'] as $left_to_right):; ?>
                    <div class="thx-testimonial-review-item d-flex">
                        <div class="thx-item-img">
                            <img src="<?php echo $left_to_right['envato_icon']['url']; ?>" alt="">
                        </div>
                        <div class="thx-item-text ul-li">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="qut-text">
                                <?php echo $left_to_right['client_review']; ?>
                            </div>
                            <div class="author"><?php echo $left_to_right['author']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>

            </div>
        </div>
        <!-- End of Testimonial section
            ============================================= -->




<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_testimonial() );
?>