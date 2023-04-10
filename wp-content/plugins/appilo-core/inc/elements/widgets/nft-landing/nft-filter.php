<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class nft_filter extends Widget_Base {

   public function get_name() {
      return 'nft_filter';
   }

   public function get_title() {
      return __( 'NFT Filter', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'nft_filter',
            [
                'label' => __('NFT Filter', 'appilo'),
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
            'title',
            [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'NFT Market Place Hot Drops', 'appilo' ),
            ]
        );

        $this->add_control(
            'after_title_img',
            [
                'label' => __('After Title Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'filter_category',
            [
                'label' => __( 'Filter Category', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'cat_name', [
                'label' => esc_html__( 'Category Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Art Collection' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'cat_id', [
                'label' => esc_html__( 'Category ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 1 , 'appilo' ),
                'placeholder' => esc_html__( 1 , 'appilo' ),
                'show_label' => true,
            ]
        );

        $this->add_control(
            'category_list',
            [
                'label' => esc_html__( 'Categories', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'cat_name' => esc_html__( 'Music', 'appilo' ),
                    ],
                    [
                        'cat_name' => esc_html__( 'Art Collection', 'appilo' ),
                    ],
                    [
                        'cat_name' => esc_html__( 'Photography', 'appilo' ),
                    ],
                    [
                        'cat_name' => esc_html__( 'Trading Card', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ cat_name }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'filter_project_list',
            [
                'label' => __( 'Filter Projects', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'filter_cat_id', [
                'label' => esc_html__( 'Category ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '1, 2, 3' , 'appilo' ),
                'placeholder' => esc_html__( '1, 2, 3 { Use Space After The Comma }' , 'appilo' ),
                'show_label' => true,
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'project_img',
            [
                'label' => __('Project Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'name', [
                'label' => esc_html__( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Space Runner' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'designation', [
                'label' => esc_html__( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '@ Kevin Funes' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'coin_icon_img',
            [
                'label' => __('Coin Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'coin_rate', [
                'label' => esc_html__( 'Coin Rare', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '0.045 ETH' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'like_icon_img',
            [
                'label' => __('Like Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'like', [
                'label' => esc_html__( 'Like', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '1.4k Like' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'button', [
                'label' => esc_html__( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Place Bid' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'button_link',
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
            ]
        );

        $this->add_control(
            'project_list',
            [
                'label' => esc_html__( 'Project List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => esc_html__( 'Space Runner', 'appilo' ),
                        'designation' => esc_html__( '@ Kevin Funes', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Space Runner', 'appilo' ),
                        'designation' => esc_html__( '@ Kevin Funes', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Space Runner', 'appilo' ),
                        'designation' => esc_html__( '@ Kevin Funes', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Space Runner', 'appilo' ),
                        'designation' => esc_html__( '@ Kevin Funes', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Space Runner', 'appilo' ),
                        'designation' => esc_html__( '@ Kevin Funes', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Space Runner', 'appilo' ),
                        'designation' => esc_html__( '@ Kevin Funes', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Space Runner', 'appilo' ),
                        'designation' => esc_html__( '@ Kevin Funes', 'appilo' ),
                    ],
                    [
                        'name' => esc_html__( 'Space Runner', 'appilo' ),
                        'designation' => esc_html__( '@ Kevin Funes', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_banner',
            [
                'label' => __('Filter Category Style', 'appilo'),
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
                    'size' => 1200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .nft-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-section-title h2',
            ]
        );
        $this->add_control(
            'category_title_color',
            [
                'label' =>   esc_html__( 'Category Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-filter-btn li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'category_title_typo',
                'label' =>   esc_html__( 'Category Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-marketplace-filter-btn li',
            ]
        );

        $this->add_control(
            'category_bg_color',
            [
                'label' =>   esc_html__( 'Category BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-filter-btn li' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'category_border_colorss',
            [
                'label' =>   esc_html__( 'Category Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-filter-btn li' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg_control',
            [
                'label' => esc_html__( 'Active Category BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'active_header_color_bg_background',
                'label' => esc_html__( 'Active Category BG Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-marketplace-filter-btn li.filtr-active',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'category_border',
                'label' => esc_html__( 'Category Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-marketplace-filter-btn li.filtr-active',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'filter_project_style',
            [
                'label' => __( 'Project Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'Name_color',
            [
                'label' =>   esc_html__( 'Name Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-items .thx-inner-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Name_typo',
                'label' =>   esc_html__( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-marketplace-items .thx-inner-text h3',
            ]
        );

        $this->add_control(
            'Designation_color',
            [
                'label' =>   esc_html__( 'Designation Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-items .thx-inner-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Designation_typo',
                'label' =>   esc_html__( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-marketplace-items .thx-inner-text p',
            ]
        );

        $this->add_control(
            'ETH_color',
            [
                'label' =>   esc_html__( 'ETH Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .market-meta a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ETH_typo',
                'label' =>   esc_html__( 'ETH Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .market-meta a',
            ]
        );

        $this->add_control(
            'Like_color',
            [
                'label' =>   esc_html__( 'Like Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .market-meta a:last-child' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Like_typo',
                'label' =>   esc_html__( 'Like Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .market-meta a:last-child',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Button_Style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
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
            'Button_color',
            [
                'label' =>   esc_html__( 'Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .thx-inner-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Button_typo',
                'label' =>   esc_html__( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .thx-inner-btn a',
            ]
        );

        $this->add_control(
            'Button_Border_color',
            [
                'label' =>   esc_html__( 'Button Border Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .thx-inner-btn a' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'button_background',
                'label' => esc_html__( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .thx-inner-btn a',
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
            'Button_hover_color',
            [
                'label' =>   esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .thx-inner-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'button_hover_background',
                'label' => esc_html__( 'Button Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-marketplace-items .thx-inner-text .thx-inner-btn a:before',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <!-- Start of market place section
    ============================================= -->
        <div id="nft-market-place" class="nft-market-place-section position-relative">
            <span class="nft-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <div class="container nft-container-1200">
                <div class="nft-section-title text-center nft-headline pera-content">
                    <h2><?php echo $settings['title']; ?> <span class="right-icon"><img src="<?php echo $settings['after_title_img']['url']; ?>"></span></h2>
                </div>
                <div class="nft-market-place-content">
                    <div class="nft-marketplace-filter-btn-area text-center">
                        <div class="nft-marketplace-filter-btn ul-li text-center">
                            <ul id="filters" class="nav-gallery">
                                <li class="filtr-button filtr-active" data-filter="all"><?php _e('All Project','appilo'); ?></li>
                                <?php foreach ($settings['category_list'] as $cat_list): ?>
                                    <li class="filtr-button" data-filter="<?php echo $cat_list['cat_id']; ?>"><?php echo $cat_list['cat_name']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="nft-marketplace-item-wrapper filtr-container row">
                        <?php foreach ($settings['project_list'] as $project) :?>
                        <div class="col-lg-3 col-sm-6 filtr-item" data-category="<?php echo $project['filter_cat_id']; ?>" data-sort="Busy streets">
                            <div class="nft-marketplace-items text-center">
                                <div class="thx-inner-item">
                                    <div class="thx-inner-img">
                                        <img src="<?php echo $project['project_img']['url']; ?>" alt="">
                                    </div>
                                    <div class="thx-inner-text nft-headline pera-content">
                                        <h3><a href="<?php echo $project['button_link']['url']; ?>"><?php echo $project['name']; ?> </a></h3>
                                        <p><a href="<?php echo $project['button_link']['url']; ?>"><?php echo $project['designation']; ?> </a></p>
                                        <div class="market-meta">
                                            <a href="<?php echo $project['button_link']['url']; ?>"><img src="<?php echo $project['coin_icon_img']['url']; ?>" alt=""> <?php echo $project['coin_rate']; ?></a>
                                            <a href="<?php echo $project['button_link']['url']; ?>"><img src="<?php echo $project['like_icon_img']['url']; ?>" alt=""> <?php echo $project['like']; ?></a>
                                        </div>
                                        <div class="thx-inner-btn">
                                            <a class="d-flex justify-content-center align-items-center" href="<?php echo $project['button_link']['url']; ?>"><?php echo $project['button']; ?></a>
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
        <!-- End of market place section
            ============================================= -->

<?php

    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new nft_filter() );
?>