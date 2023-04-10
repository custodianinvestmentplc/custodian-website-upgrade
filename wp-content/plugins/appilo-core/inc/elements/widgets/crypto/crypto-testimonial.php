<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_testimonial extends Widget_Base {

   public function get_name() {
      return 'crypto_testimonial';
   }

   public function get_title() {
      return __( 'Crypto Testimonial', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_testimonial',
            [
                'label' => __('Testimonial Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'See Whats Our Clients Say’s About Us', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'quote_img',
            [
                'label' => __('Quote Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'comment',
            [
                'label' => esc_html__( 'Comment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '“You might wonder why a designer would choose to use lorem ipsum text instead of a few paragraphs in English or their native language. Why not just copy and paste a page from an old book or lyrics from a famous song”', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'client_img',
            [
                'label' => __('Client Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'name',
            [
                'label' => esc_html__( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Marielle Wigington', 'appilo' ),
            ]
        );

        $repeater->add_control(
            'designation',
            [
                'label' => esc_html__( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Los Angeles. CA', 'appilo' ),
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Comments List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => esc_html__( 'Marielle Wigington', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Marielle Wigington', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Marielle Wigington', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_testimonial',
            [
                'label' => __('Testimonial Style', 'appilo'),
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
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-testimonial-section .cr-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__( 'Title Typo', 'appilo' ),
                'selector' => '{{WRAPPER}} .cr-testimonial-section .cr-section-title h2',
            ]
        );

        $this->add_control(
            'testimonial_box_bg_color',
            [
                'label' =>   esc_html__( 'Testimonial Box Background', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-testimonial-innerbox .thx-inner-item' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'comment_color',
            [
                'label' =>   esc_html__( 'Comment Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-testimonial-innerbox .thx-inner-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Comment Typo', 'appilo' ),
                'name' => 'comment_typography',
                'selector' => '{{WRAPPER}} .cr-testimonial-innerbox .thx-inner-text',
            ]
        );
        $this->add_control(
            'name_color',
            [
                'label' =>   esc_html__( 'Name Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-testimonial-innerbox .thx-author-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Name Typo', 'appilo' ),
                'name' => 'Name_typography',
                'selector' => '{{WRAPPER}} .cr-testimonial-innerbox .thx-author-text h3',
            ]
        );

        $this->add_control(
            'designation_color',
            [
                'label' =>   esc_html__( 'Designation Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-testimonial-innerbox .thx-author-text span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Designation Typo', 'appilo' ),
                'name' => 'Designation_typography',
                'selector' => '{{WRAPPER}} .cr-testimonial-innerbox .thx-author-text span',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>

        <!-- Start of testimonial section
    ============================================= -->
        <div id="cr-testimonial" class="cr-testimonial-section">
            <div class="container crypto-container-1200">
                <div class="cr-section-title cr-headline wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h2><?php echo $settings['title']; ?></h2>
                </div>
                <div class="cr-testimonial-content">
                    <div class="row">

                        <?php foreach ($settings['list'] as $item ): ?>

                        <div class="col-lg-4 wow fadeFromUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="cr-testimonial-innerbox text-center">
                                <div class="thx-inner-item">
                                    <div class="thx-inner-icon">
                                        <img src="<?php echo $item['quote_img']['url']; ?>">
                                    </div>
                                    <div class="thx-inner-text">
                                        <?php echo $item['comment']; ?>
                                    </div>
                                    <div class="thx-inner-author d-flex align-items-center justify-content-center">
                                        <div class="thx-author-img">
                                            <img src="<?php echo $item['client_img']['url']; ?>" alt="">
                                        </div>
                                        <div class="thx-author-text cr-headline">
                                            <h3><?php echo $item['name']; ?></h3>
                                            <span><?php echo $item['designation']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of testimonial section
            ============================================= -->

<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_testimonial() );
?>