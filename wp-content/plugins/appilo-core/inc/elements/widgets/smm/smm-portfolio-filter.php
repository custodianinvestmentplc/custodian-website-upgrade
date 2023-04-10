<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class smm_portfolio_filter extends Widget_Base {

    public function get_name() {
        return 'smm-portfolio-filter';
    }

    public function get_title() {
        return __( 'SMM Portfolio Filter', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-apps';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'category_list_item',
            [
                'label' => __( 'Portfolio Category List', 'appilo' ),
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
        $repeater->add_control(
            'active_cat',
            [
                'label' => __( 'Active Category', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Activate', 'appilo' ),
                'label_off' => __( 'Deactivate', 'appilo' ),
                'return_value' => 'active',
                'default' => '',
            ]
        );
        $this->add_control(
            'portfolio_cat_list',
            [
                'label' => __( 'Portfolio Category List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'cat_title' => __('All', 'appilo'),
                        'cat_id' => __('all', 'appilo'),
                    ],
                    [
                        'cat_title' => __('Graphic Design', 'appilo'),
                        'cat_id' => __('1', 'appilo'),
                    ],
                    [
                        'cat_title' => __('Web Design', 'appilo'),
                        'cat_id' => __('2', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ cat_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'portfolio_list_item',
            [
                'label' => __( 'Portfolio List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'portfolio_photo', [
                'label' => __( 'Portfolio Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/smm/case/sm-cs1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'portfolio_name',
            [
                'label' => __( 'Portfolio Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Paid Search Advertising', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'portfolio_info',
            [
                'label' => __( 'Portfolio Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetu r adipisicing elit, sed do eiusmod', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'portfolio_cat_id',
            [
                'label' => __( 'Portfolio Category ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'overlay_show',
            [
                'label' => __( 'Overlay Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Hide', 'appilo' ),
                'label_off' => __( 'Show', 'appilo' ),
                'return_value' => 'smm-filter-overlay-control',
                'default' => '',
            ]
        );
        $repeater->add_control(
            'portfolio_link', [
                'label' => __( 'Portfolio Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'portfolio_list',
            [
                'label' => __( 'Portfolio List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'portfolio_name' => 'Paid Search Advertising',
                        'portfolio_cat_id' => '1',
                    ],[
                        'portfolio_name' => 'Paid Search Advertising',
                        'portfolio_cat_id' => '2',
                    ],[
                        'portfolio_name' => 'Paid Search Advertising',
                        'portfolio_cat_id' => '1',
                    ],
                ],
                'title_field' => '{{{ portfolio_name }}}',
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
                    '{{WRAPPER}} .smm-case-tab .nav-gallery li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'filter_active_color',
            [
                'label' => __( 'Filter Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-case-tab .nav-gallery li.active' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .smm-case-tab .nav-gallery li:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'filter_fonts',
                'label' => __( 'Filter Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-case-tab .nav-gallery li',
            ]
        );
        $this->add_control(
            'filter_active',
            [
                'label' => __( 'Filter Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-case-tab .nav-gallery li.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'active_shadow',
                'label' => __( 'Tab Category Bar Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-case-tab',
            ]
        );
        $this->add_control(
            'portfolio_name_color',
            [
                'label' => __( 'Portfolio Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-case-innerbox .smm-case-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'portfolio_name_fonts',
                'label' => __( 'Portfolio Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-case-innerbox .smm-case-text h3',
            ]
        );
        $this->add_control(
            'portfolio_info_color',
            [
                'label' => __( 'Portfolio Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-case-innerbox .smm-case-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'portfolio_info_fonts',
                'label' => __( 'Portfolio Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-case-innerbox .smm-case-text p',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'portfolio_overlay',
                'label' => __( 'Portfolio Overlay', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .smm-case-innerbox:before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'portfolio_shadow',
                'label' => __( 'Portfolio Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-case-innerbox',
            ]
        );
        $this->add_control(
            'portfolio_btn_color',
            [
                'label' => __( 'Portfolio Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-case-innerbox .smm-case-popup a svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'portfolio_btn_bg',
                'label' => __( 'Portfolio Button BG', 'appilo' ),
                'types' => [  'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .smm-case-innerbox .smm-case-popup',
            ]
        );
        $this->add_responsive_control(
            'tab_bar_padding',
            [
                'label' => __( 'Tab Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .smm-case-tab' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'item_margin',
            [
                'label' => __( 'Item Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .smm-filter-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .smm-case-study-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '<!-- Start of Case study section
    ============================================= -->
    <section id="smm-case-study" class="smm-case-study-section">
        <div class="container">
            <div class="smm-case-tab text-center clearfix ul-li">
             <ul id="filters" class="nav-gallery  text-center">';

                if ( $settings['portfolio_cat_list'] ) {
                    foreach ($settings['portfolio_cat_list'] as $portfolio_category) {
                        echo '<li id="' . $portfolio_category['_id'] . '" class="filtr-button ' . $portfolio_category['active_cat'] . '" data-filter="' . $portfolio_category['cat_id'] . '">' . $portfolio_category['cat_title'] . ' </li>';
                    }
                }
                echo'</ul>
        </div>
        <div class="filtr-container row">';
        if ( $settings['portfolio_list'] ) {
            foreach ($settings['portfolio_list'] as $portfolio) {

                $portfolio_link = get_that_link($portfolio['portfolio_link']);

                echo '<div id="' . $portfolio['_id'] . '" class="col-lg-4 col-sm-6 filtr-item smm-filter-item" data-category="' . $portfolio['portfolio_cat_id'] . '" data-sort="Busy streets">
                <div class="smm-case-innerbox ' . $portfolio['overlay_show'] . ' position-relative">
                    <div class="smm-case-img">
                        <img src="' . $portfolio['portfolio_photo']['url'] . '" alt>
                    </div>
                    <div class="smm-case-text smm-headline pera-content">
                        <h3><a '.$portfolio_link.'>' . $portfolio['portfolio_name'] . '</a></h3>
                        <p>' . $portfolio['portfolio_info'] . '</p>
                    </div>
                    <div class="smm-case-popup">
                        <a class="smm-video-box" href="' . $portfolio['portfolio_photo']['url'] . '">'.file_get_contents(get_template_directory_uri()."/img/smm/icon/plus.svg").'</a>
                    </div>
                </div>
            </div>';
            }
        }
        echo'</div>
    </div>
</section>
<!-- End of Case study section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new smm_portfolio_filter );
?>