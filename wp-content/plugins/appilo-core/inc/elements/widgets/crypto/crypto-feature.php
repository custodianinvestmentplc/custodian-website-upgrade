<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_feature extends Widget_Base {

   public function get_name() {
      return 'crypto_feature';
   }

   public function get_title() {
      return __( 'Crypto Feature', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_feature',
            [
                'label' => __('Feature Content', 'appilo'),
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
            'shape_3',
            [
                'label' => __('Shape 3', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape_4',
            [
                'label' => __('Shape 4', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'feature_box_img',
            [
                'label' => __('Feature Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'feature_box_heading',
            [
                'label' => esc_html__( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Easy To Transfer', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_box_description',
            [
                'label' => esc_html__( 'Description', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Keeps people from focusing on want the people reviewing it to get example, look for typos.', 'appilo' ),
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Feature Box', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_box_heading' => esc_html__( 'Easy To Transfer', 'appilo' ),
                        'feature_box_description' => esc_html__( 'Keeps people from focusing on want the people reviewing it to get example, look for typos.', 'appilo' ),
                    ],
                    [
                        'feature_box_heading' => esc_html__( 'Easy To Transfer', 'appilo' ),
                        'feature_box_description' => esc_html__( 'Keeps people from focusing on want the people reviewing it to get example, look for typos.', 'appilo' ),
                    ],
                    [
                        'feature_box_heading' => esc_html__( 'Easy To Transfer', 'appilo' ),
                        'feature_box_description' => esc_html__( 'Keeps people from focusing on want the people reviewing it to get example, look for typos.', 'appilo' ),
                    ],
                    [
                        'feature_box_heading' => esc_html__( 'Easy To Transfer', 'appilo' ),
                        'feature_box_description' => esc_html__( 'Keeps people from focusing on want the people reviewing it to get example, look for typos.', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ feature_box_heading }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_right_content',
            [
                'label' => __( 'Feature Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'feature_sub_heading',
            [
                'label' => esc_html__( 'Sub Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Glow Feature', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_heading',
            [
                'label' => esc_html__( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'The most Trusted and Secure Cryptocurrency Platform', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_content',
            [
                'label' => esc_html__( 'Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'The main reason for using lorem ipsum text is that it keeps people from focusing on the actual text.', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_button',
            [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Explore More', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_button_url',
            [
                'label' => esc_html__( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'style_tabutton',
            [
                'label' => __('Feature Box Style', 'appilo'),
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
            'bg_color',
            [
                'label' =>   esc_html__( 'Box Background', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-item-innerbox .thx-inner-item' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'icon_bg_color',
            [
                'label' =>   esc_html__( 'Icon Background', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-item-innerbox .thx-inner-item .thx-inner-icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-item-innerbox .thx-inner-item .thx-inner-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .cr-feature-item-innerbox .thx-inner-item .thx-inner-text h3',
            ]
        );
        $this->add_control(
            'Info_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-item-innerbox .thx-inner-item .thx-inner-text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Info_typography',
                'selector' => '{{WRAPPER}} .cr-feature-item-innerbox .thx-inner-item .thx-inner-text p',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_right_content_style',
            [
                'label' => __( 'Feature Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Sub_title_color',
            [
                'label' =>   esc_html__( 'Sub Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Sub_title_typography',
                'selector' => '{{WRAPPER}} .cr-section-title span',
            ]
        );

        $this->add_control(
            'Sub_title_border_color',
            [
                'label' =>   esc_html__( 'Sub Title Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title span:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'right_title_color',
            [
                'label' =>   esc_html__( 'Right Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'right_title_typography',
                'selector' => '{{WRAPPER}} .cr-section-title h2',
            ]
        );

        $this->add_control(
            'right_info_color',
            [
                'label' =>   esc_html__( 'Right Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-text-wrapper .cr-feature-text-area p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'right_Info_typography',
                'selector' => '{{WRAPPER}} .cr-feature-text-wrapper .cr-feature-text-area p',
            ]
        );

        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );

        $this->add_control(
            'btn_color',
            [
                'label' =>   esc_html__( 'Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-text-area .cr-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_background',
            [
                'label' =>   esc_html__( 'Button Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-text-area .cr-btn a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'selector' => '{{WRAPPER}} .cr-feature-text-area .cr-btn a',
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );

        $this->add_control(
            'btn_hover_color',
            [
                'label' =>   esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-text-area .cr-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_background_hover',
            [
                'label' =>   esc_html__( 'Button Hover Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-feature-text-area .cr-btn a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();



        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $shape_1 = $settings['shape_1']['url'];
        $shape_2 = $settings['shape_2']['url'];
        $shape_3 = $settings['shape_3']['url'];
        $shape_4 = $settings['shape_4']['url'];
?>

        <!-- Start of Feature section
    ============================================= -->
        <div id="cr-feature" class="cr-feature-section position-relative">
            <span class="cr-shape1 position-absolute"><img src="<?php echo $shape_1; ?>" alt=""></span>
            <span class="cr-shape2 position-absolute"><img src="<?php echo $shape_2; ?>" alt=""></span>
            <span class="cr-shape3 position-absolute"><img src="<?php echo $shape_3; ?>" alt=""></span>
            <span class="cr-shape4 position-absolute"><img src="<?php echo $shape_4; ?>" alt=""></span>
            <div class="container crypto-container-1200">
                <div class="cr-feature-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cr-feature-item-wrapper">
                                <div class="row">

                                <?php
                                    foreach (  $settings['list'] as $item ) :;
                                ?>
                                    <div class="col-md-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="cr-feature-item-innerbox">
                                            <div class="thx-inner-item">
                                                <div class="thx-inner-icon d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo $item['feature_box_img']['url']; ?>" alt="">
                                                </div>
                                                <div class="thx-inner-text cr-headline pera-content">
                                                    <h3><?php echo $item['feature_box_heading']; ?></h3>
                                                    <p><?php echo $item['feature_box_description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                    endforeach;
                                ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="cr-feature-text-wrapper cr-headline pera-content">
                                <div class="cr-section-title cr-headline">
                                    <span><?php echo $settings['feature_sub_heading']; ?></span>
                                    <h2><?php echo $settings['feature_heading']; ?></h2>
                                </div>
                                <div class="cr-feature-text-area">
                                    <p><?php echo $settings['feature_content']; ?></p>
                                    <div class="cr-btn">
                                        <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['feature_button_url']['url']; ?>"><?php echo $settings['feature_button']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Feature section
            ============================================= -->

<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_feature() );
?>