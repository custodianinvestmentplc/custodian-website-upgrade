<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_demo_list extends Widget_Base {

   public function get_name() {
      return 'demo_3_demo_list';
   }

   public function get_title() {
      return __( 'Demo Page Demo List', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'filter_content',
            [
                'label' => __('Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'All Demos' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '03 Stunning Demos' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'demo_category',
            [
                'label' => __( 'Demo Category', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'cat_title', [
                'label' => esc_html__( 'Category Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Business' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'cat_id', [
                'label' => esc_html__( 'Category ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '1' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'category_list',
            [
                'label' => esc_html__( 'Category List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'cat_title' => esc_html__( 'Business', 'appilo' ),
                    ],
                    [
                        'cat_title' => esc_html__( 'Agency', 'appilo' ),
                    ],
                    [
                        'cat_title' => esc_html__( 'Insurance', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ cat_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'demo_content_',
            [
                'label' => __( 'Demo Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'demo_id', [
                'label' => esc_html__( 'Demo Id', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '1' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'label', [
                'label' => esc_html__( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'New' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'demo_name', [
                'label' => esc_html__( 'Demo Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Business' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'demo_bottom_position',
            [
                'label' => esc_html__( 'Bottom Position', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 190,
                ],
                'selectors' => [
                    '{{WRAPPER}} .thx-page-item-inner{{CURRENT_ITEM}} .page-name' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_control(
            'demo_Left_position',
            [
                'label' => esc_html__( 'Left Position', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -70,
                ],
                'selectors' => [
                    '{{WRAPPER}} .thx-page-item-inner{{CURRENT_ITEM}} .page-name' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_control(
            'demo_shado_name', [
                'label' => esc_html__( 'Demo Shadow Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Business' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'demo_img_2',
            [
                'label' => __('Demo Image 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'demo_img_1',
            [
                'label' => __('Demo Image 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'cat_name', [
                'label' => esc_html__( 'Category Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Consulting' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'one_page_btn_text', [
                'label' => esc_html__( 'One Page Btn Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'One Page' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'one_page_btn_link',
            [
                'label' => esc_html__( 'One Page Btn Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'multi_page_btn_text', [
                'label' => esc_html__( 'Multi Page Btn Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Multi Page' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'multi_page_btn_link',
            [
                'label' => esc_html__( 'Multi Page Btn Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
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
            'demo_content',
            [
                'label' => esc_html__( 'Demo List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'demo_name' => esc_html__( 'Business', 'appilo' ),
                    ],
                    [
                        'demo_name' => esc_html__( 'Agency', 'appilo' ),
                    ],
                    [
                        'demo_name' => esc_html__( 'Insurance', 'appilo' ),
                    ],
                    [
                        'demo_name' => esc_html__( 'Coming Soon', 'appilo' ),
                    ],
                    [
                        'demo_name' => esc_html__( 'Coming Soon', 'appilo' ),
                    ],
                    [
                        'demo_name' => esc_html__( 'Coming Soon', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ demo_name }}}',
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'buttons_style',
            [
                'label' => __('Feature Style', 'appilo'),
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

        <!-- Start of Demo section
            ============================================= -->
        <div id="thx-demo-pages" class="thx-demo-pages-section">
            <div class="container container-1200">
                <div class="thx-section-title text-center headline">
                    <div class="sub-title">
                        <?php echo $settings['sub_title']; ?>
                    </div>
                    <h2><?php echo $settings['title']; ?></h2>
                </div>
            </div>
            <div class="thx-demo-pages-content">
                <div class="thx-page-filter-btn ul-li text-center">
                    <ul id="filters" class="nav-gallery">
                        <li class="filtr-button filtr-active" data-filter="all">All</li>
                    <?php foreach ($settings['category_list'] as $cat):; ?>
                        <li class="filtr-button" data-filter="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_title']; ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <div class="thx-page-item-wrapper filtr-container row">

                    <?php foreach ($settings['demo_content'] as $demo_content):; ?>
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="<?php echo $demo_content['demo_id']; ?>" data-sort="Busy streets">
                        <div class="thx-page-item-inner position-relative <?php echo 'elementor-repeater-item-'.$demo_content['_id']; ?>">
                            <div class="dot-style"><i></i><i></i><i></i></div>
                            <?php if ($demo_content['label']):; ?>
                            <div class="thx-label"><?php echo $demo_content['label']; ?></div>
                            <?php endif; ?>
                            <span class="page-name"><?php echo $demo_content['demo_shado_name']; ?></span>
                            <div class="thx-page-img-wrapper d-flex position-relative justify-content-end">
                                <div class="thx-page-img1">
                                    <img src="<?php echo $demo_content['demo_img_1']['url']; ?>" alt="">
                                </div>
                                <div class="thx-page-img2 position-absolute">
                                    <img src="<?php echo $demo_content['demo_img_2']['url']; ?>" alt="">
                                </div>
                            </div>
                            <div class="thx-page-text headline">
                                <h3><?php echo $demo_content['demo_name']; ?></h3>
                                <span><?php echo $demo_content['cat_name']; ?></span>
                            </div>
                            <div class="thx-page-link">

                                <?php
                                    $target_blank_1 = $demo_content['one_page_btn_link']['is_external'] ? '_blank': '';
                                    $target_blank_2 = $demo_content['multi_page_btn_link']['is_external'] ? '_blank': '';

                                ?>

                                <?php if ( $demo_content['one_page_btn_link']['url'] ):; ?>
                                <a target="<?php echo $target_blank_1; ?>" class="d-flex justify-content-center align-items-center" href="<?php echo $demo_content['one_page_btn_link']['url']; ?>"><?php echo $demo_content['one_page_btn_text']; ?></a>
                                <?php endif; ?>

                                <?php if ( $demo_content['multi_page_btn_link']['url'] ):; ?>
                                <a target="<?php echo $target_blank_2; ?>" class="d-flex justify-content-center align-items-center" href="<?php echo $demo_content['multi_page_btn_link']['url']; ?>"><?php echo $demo_content['multi_page_btn_text']; ?></a>
                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!-- End of Demo learning section
            ============================================= -->




<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_demo_list() );
?>