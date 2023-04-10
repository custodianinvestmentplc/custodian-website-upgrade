<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_filter_showcase extends Widget_Base {

    public function get_name() {
        return 'demo-filter-showcase';
    }

    public function get_title() {
        return __( 'Demo Filter Showcase', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-apps';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'category_list_item',
            [
                'label' => __( 'Demo Category List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'cat_title',
            [
                'label' => __( 'Category Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'cat_id',
            [
                'label' => __( 'Category ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'all', 'appilo' ),
            ]
        );
        $this->add_control(
            'demo_cat_list',
            [
                'label' => __( 'Demo Category List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'cat_title' => __('All', 'appilo'),
                    ],[
                        'cat_title' => __('App Landing', 'appilo'),
                    ],[
                        'cat_title' => __('Agency', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ cat_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'demo_list_item',
            [
                'label' => __( 'Demo List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'demo_photo', [
                'label' => __( 'Demo Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/demo/d1.png',
                ],
            ]
        );
        $repeater->add_control(
            'demo_name',
            [
                'label' => __( 'Demo Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'App landing 01 (Main demo)', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'demo_cat_id',
            [
                'label' => __( 'Demo Category ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'demo_btn',
            [
                'label' => __( 'Demo Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Launch Demo', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'demo_link', [
                'label' => __( 'Demo Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'http://appilo.themexriver.net/main',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'demo_btn_2',
            [
                'label' => __( 'Demo Button 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Multi Demo', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'demo_link_2', [
                'label' => __( 'Demo Link 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'http://appilo.themexriver.net/main',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'badge_photo', [
                'label' => __( 'Badge Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/appilo-landing/badge.png',
                ],
            ]
        );
        $repeater->add_control(
            'availability',
            [
                'label' => __( 'Availability', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Coming Soon', 'appilo' ),
                'label_off' => __( 'Available', 'appilo' ),
                'return_value' => 'demo-coming-soon',
                'default' => '',
            ]
        );
        $this->add_control(
            'demo_list',
            [
                'label' => __( 'Demo List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],[
                        'demo_name' => 'App landing 01 (Main demo)',
                    ],
                ],
                'title_field' => '{{{ demo_name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_content',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'filter_color',
            [
                'label' => __( 'Filter Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .demo-section li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'filter_fonts',
                'label' => __( 'Filter Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo-section li',
            ]
        );
        $this->add_control(
            'filter_active',
            [
                'label' => __( 'Filter Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .demo-section li.filtr-active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'filter_active_fonts',
                'label' => __( 'Filter Active Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo-section li.filtr-active',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'filter_active_bg',
                'label' => __( 'Active BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .demo-section li.filtr-active:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'active_shadow',
                'label' => __( 'Active Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo-section li.filtr-active',
            ]
        );
        $this->add_control(
            'demo_name_color',
            [
                'label' => __( 'Demo Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .demo_item .appl-page-title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'demo_name_fonts',
                'label' => __( 'Demo Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo_item .appl-page-title h3',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'demo_overlay',
                'label' => __( 'Demo Overlay', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .demo_item .demo_img_link:before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'demo_shadow',
                'label' => __( 'Demo Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo_item .demo_img_link',
            ]
        );
        $this->add_control(
            'demo_btn_color',
            [
                'label' => __( 'Demo Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .demo_item .app_btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'btn_pos',
            [
                'label' => __( 'Button Top Bottom Position', 'rexlaw-core' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                    'default' => [
                        'unit' => '%',
                        'size' => -40,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .demo_item .appl_ml_btn' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'demo_btn_fonts',
                'label' => __( 'Demo Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .demo_item .app_btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'demo_btn_bg',
                'label' => __( 'Demo Button BG', 'appilo' ),
                'types' => [  'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .demo_item .app_btn',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .demo-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '<!-- Start of demo section
 ============================================= -->
<section  class="demo-section">
    <div class="container">
        <div class="demo-filter-button">
            <div class="page-tab-button ul-li">
                <ul id="filters" class="nav-gallery text-center">';

                $index = 0;
                if ( $settings['demo_cat_list'] ) {
                    foreach ($settings['demo_cat_list'] as $demo_category) {
                        $index++;
                        if ($index == 1){
                            $cls = 'filtr-active';
                        } else {
                            $cls = '';
                        }
                        echo '<li id="' . $demo_category['_id'] . '" class="filtr-button ' . $cls . '" data-filter="' . $demo_category['cat_id'] . '">' . $demo_category['cat_title'] . ' </li>';
                    }
                }
                echo'</ul>
            </div>
        </div>
        <div  class="demo_item filtr-container row">';
        if ( $settings['demo_list'] ) {
            foreach ($settings['demo_list'] as $demo) {
                $demo_link_1 = get_that_link($demo['demo_link']);
                $demo_link_2 = get_that_link($demo['demo_link_2']);

                echo '<div id="' . $demo['_id'] . '" class="col-lg-4 col-sm-6 filtr-item" data-category="' . $demo['demo_cat_id'] . '" data-sort="Busy streets">
                <div class="page-title-link">
                    <div class="demo_img_link position-relative">
                        <img class="demo-image ' . $demo['availability'] . '" src="' . $demo['demo_photo']['url'] . '" alt>';
                        if($demo['demo_link']['url']) {
                            echo '<div class="app_btn gradiant-bg text-center ' . $demo['availability'] . '">
                            <a ' . $demo_link_1 . '> ' . $demo['demo_btn'] . '</a>
                        </div>';
                        }if ($demo['demo_link_2']['url']) {
                        echo '<div class="app_btn appl_ml_btn gradiant-bg text-center ' . $demo['availability'] . '">
                            <a ' . $demo_link_2 . '> ' . $demo['demo_btn_2'] . '</a>
                        </div>';
                        }
                        echo'<div class="badge_view">
                                <img src="' . $demo['badge_photo']['url'] . '" alt>
                        </div>
                    </div>
                    <div class="appl-page-title appl-headline text-center">
                        <h3>' . $demo['demo_name'] . '</h3>
                    </div>
                </div>
            </div>
            <!-- /end of page -->';
            }
        }
        echo'</div>
    </div>
</section>
<!-- End of demo section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_filter_showcase );
?>