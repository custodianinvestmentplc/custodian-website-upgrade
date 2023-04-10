<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_roadmap extends Widget_Base {

   public function get_name() {
      return 'crypto_roadmap';
   }

   public function get_title() {
      return __( 'Crypto Roadmap', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_roadmap_content',
            [
                'label' => __('Roadmap Content', 'appilo'),
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
        $this->add_control(
            'shape_5',
            [
                'label' => __('Shape 5', 'appilo'),
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
                'default' => esc_html__( 'Roadmap', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'The timeline of our Business', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $this->add_control(
            'roadmap_line_img',
            [
                'label' => __('Roadmap Line Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'roadmap_shape_1',
            [
                'label' => __('Roadmap Shape 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'roadmap_shape_2',
            [
                'label' => __('Roadmap Shape 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'roadmap_year',
            [
                'label' => esc_html__( 'Roadmap Year', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '2007', 'appilo' ),
            ]
        );

        $repeater->add_control(
            'roadmap_title',
            [
                'label' => esc_html__( 'Roadmap Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Blockchain', 'appilo' ),
            ]
        );

        $repeater->add_control(
            'roadmap_date',
            [
                'label' => esc_html__( 'Roadmap Date', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '24.07.2017', 'appilo' ),
            ]
        );

        $repeater->add_control(
            'roadmap_info',
            [
                'label' => esc_html__( 'Roadmap Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'In publishing and graphic design, Lorem used to demonstrate the visual form of relying on meaningful content.', 'appilo' ),
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Roadmap List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'roadmap_year' => esc_html__( '2007', 'appilo' ),
                        'roadmap_title' => esc_html__( 'Blockchain', 'appilo' ),
                        'roadmap_date' => esc_html__( '24.07.2017', 'appilo' ),
                        'roadmap_info' => esc_html__( 'In publishing and graphic design, Lorem used to demonstrate the visual form of relying on meaningful content.', 'appilo' ),
                    ],
                    [
                        'roadmap_year' => esc_html__( '2007', 'appilo' ),
                        'roadmap_title' => esc_html__( 'Token Bridge', 'appilo' ),
                        'roadmap_date' => esc_html__( '24.07.2017', 'appilo' ),
                        'roadmap_info' => esc_html__( 'In publishing and graphic design, Lorem used to demonstrate the visual form of relying on meaningful content.', 'appilo' ),
                    ],
                    [
                        'roadmap_year' => esc_html__( '2007', 'appilo' ),
                        'roadmap_title' => esc_html__( 'Times', 'appilo' ),
                        'roadmap_date' => esc_html__( '24.07.2017', 'appilo' ),
                        'roadmap_info' => esc_html__( 'In publishing and graphic design, Lorem used to demonstrate the visual form of relying on meaningful content.', 'appilo' ),
                    ],
                    [
                        'roadmap_year' => esc_html__( '2007', 'appilo' ),
                        'roadmap_title' => esc_html__( 'IP Stars', 'appilo' ),
                        'roadmap_date' => esc_html__( '24.07.2017', 'appilo' ),
                        'roadmap_info' => esc_html__( 'In publishing and graphic design, Lorem used to demonstrate the visual form of relying on meaningful content.', 'appilo' ),
                    ],
                    [
                        'roadmap_year' => esc_html__( '2007', 'appilo' ),
                        'roadmap_title' => esc_html__( 'Circle', 'appilo' ),
                        'roadmap_date' => esc_html__( '24.07.2017', 'appilo' ),
                        'roadmap_info' => esc_html__( 'In publishing and graphic design, Lorem used to demonstrate the visual form of relying on meaningful content.', 'appilo' ),
                    ],


                ],
                'title_field' => '{{{ roadmap_title }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'roadmap_content_style',
            [
                'label' => __('Roadmap Content Style', 'appilo'),
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
        $this->end_controls_section();

        $this->start_controls_section(
            'roadmap_box_style',
            [
                'label' => __( 'Roadmap Box Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'box_bg_color',
            [
                'label' =>   esc_html__( 'Box Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-roadmap-history-steps .cr-roadmap-item-text' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'box_title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-roadmap-history-steps .cr-roadmap-item-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Title Typo', 'appilo' ),
                'name' => 'Box_title_typography',
                'selector' => '{{WRAPPER}} .cr-roadmap-history-steps .cr-roadmap-item-text h3',
            ]
        );

        $this->add_control(
            'box_info_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-roadmap-history-steps .cr-roadmap-item-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Box Info Typo', 'appilo' ),
                'name' => 'Box_Info_typography',
                'selector' => '{{WRAPPER}} .cr-roadmap-history-steps .cr-roadmap-item-text',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
        <!-- Start of Roadmap section
    ============================================= -->
        <div id="cr-roadmap" class="cr-roadmap-section position-relative">
            <span class="cr-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <span class="cr-shape2 position-absolute"><img src="<?php echo $settings['shape_2']['url']; ?>" alt=""></span>
            <span class="cr-shape3 position-absolute"><img src="<?php echo $settings['shape_3']['url']; ?>" alt=""></span>
            <div class="container crypto-container-1200">
                <div class="cr-section-title cr-headline text-center">
                    <span><?php echo $settings['sub_title']; ?></span>
                    <h2><?php echo $settings['title']; ?></h2>
                </div>
                <div class="cr-roadmap-content position-relative">
                    <span class="cr-shape4 position-absolute"><img src="<?php echo $settings['shape_4']['url']; ?>" alt=""></span>
                    <span class="cr-shape5 position-absolute"><img src="<?php echo $settings['shape_5']['url']; ?>" alt=""></span>
                    <div class="cr-roadmap-line position-absolute">
                        <img src="<?php echo $settings['roadmap_line_img']['url']; ?>" alt="">
                    </div>
                    <div class="road-map-history">

                        <?php foreach ($settings['list'] as $item): ?>
                        <div class="cr-roadmap-history-steps clearfix  wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="cr-roadmap-history-item-area position-relative clearfix">
                                <div class="cr-roadmap-history-inner-item headline pera-content position-relative">
                                    <div class="cr-roadmap-item-text cr-headline pera-content">
                                        <span class="rd-shape1 position-absolute"><img src="<?php echo $item['roadmap_shape_1']['url']; ?>" alt=""></span>
                                        <span class="rd-shape2 position-absolute"><img src="<?php echo $item['roadmap_shape_2']['url']; ?>" alt=""></span>
                                        <div class="cr-roadmap-year"><?php echo $item['roadmap_year']; ?></div>
                                        <h3><?php echo $item['roadmap_title']; ?></h3>
                                        <span><?php echo $item['roadmap_date']; ?></span>
                                        <p><?php echo $item['roadmap_info']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Roadmap section
            ============================================= -->


<?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_roadmap() );
?>