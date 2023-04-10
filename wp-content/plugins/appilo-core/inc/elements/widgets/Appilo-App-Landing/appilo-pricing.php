<?php
namespace Elementor;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


class appilo_pricing extends Widget_Base {

    public function get_name() {
        return 'appilo_pricing';
    }

    public function get_title() {
        return __('Appilo Pricing', 'appilo');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['ashelement-addons'];
    }

    protected function register_controls() {



        $this->start_controls_section(
            'about_box',
            [
                'label' => __('Intro List', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'populer',
			[
				'label' => __( 'Populer ON/OFF', 'appilo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'ON', 'appilo' ),
				'label_off' => __( 'OFF', 'appilo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $repeater->add_control(
            'price', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Price', 'appilo'),
                'label_block' => true,                                
            ]
        );

        $repeater->add_control(
            'month', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Month', 'appilo'),
                'label_block' => true,                                
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' =>  __('It Consultancy', 'appilo'),
            ]
        );
        $repeater->add_control(
            'popular-package',
            [
                'label' => __( 'Popular Package', 'appilo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' =>  __('It Consultancy', 'appilo'),
            ]
        );

        $repeater->add_control(
            'block-content',
            [
                'label' => __( 'Content', 'appilo' ),
                'type' => Controls_Manager::WYSIWYG,
            
            ]
        );


        $repeater->add_control(
            'button',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' =>  __('Learn More', 'appilo'),
            ]
        );


        $repeater->add_control(
            'link',
            [
                'label' =>   esc_html__( 'Link', 'appilo' ),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'box_list',
            [
                'label' => __( 'Service Box', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Pricing Table Style', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'p_title_styles',
			[
				'label' => __( 'Pricing Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-pricing-list-content .aplpg-headline h6' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-pricing-list-content .aplpg-headline h6',
            ]
        );
        $this->add_control(
			'p_price_styles',
			[
				'label' => __( 'Pricing Price Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
      $this->add_control(
            'price_color',
            [
                'label' =>   esc_html__( 'Price Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-top h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'price_typography',
                'label' =>   esc_html__( 'Price Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-top h3',
            ]
        );
        $this->add_control(
			'p_month_styles',
			[
				'label' => __( 'Pricing Month Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
      $this->add_control(
            'month_color',
            [
                'label' =>   esc_html__( 'Price Month', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-top span.aplpg-subtitle' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'month_typography',
                'label' =>   esc_html__( 'Month Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-top span.aplpg-subtitle',
            ]
        );
        $this->add_control(
			'p_info_styles',
			[
				'label' => __( 'Pricing List Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'list_color',
            [
                'label' =>   esc_html__( 'Price Month', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-pricing-list-content ul li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'list_typography',
                'label' =>   esc_html__( 'List Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-pricing-list-content ul li',
            ]
        );        

        $this->end_controls_section();


        $this->start_controls_section(
            'pricing_box_section',
            [
                'label' => __( 'Pricing Box', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'p_box_styles',
			[
				'label' => __( 'Pricing Box Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'fta_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'populer_fta_background',
                'label' => __( 'Populer Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .aplpg-pricing-column.popular-package',
            ]
        );

        $this->add_responsive_control(
            'p_box_padding',
            [
                'label'      => esc_html__( 'Border Padding', 'datanext-extension' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
			'p_shape__styles',
			[
				'label' => __( 'Pricing Shape Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->start_controls_tabs( '_pricing_shape_nm' );

        $this->start_controls_tab(
            '_shape_normal__normal',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'before_bg_color',
                'label'    => __( 'Before Shape Background', 'appilo' ),
                'types'    => ['classic', 'gradient'],
                'exclude'  => ['image'],
                'selector' => '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-top::before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'after_shape_bg_color',
                'label'    => __( 'After Shape Background', 'appilo' ),
                'types'    => ['classic', 'gradient'],
                'exclude'  => ['image'],
                'selector' => '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-top .aplpg-triangle-shape::after',
            ]
        );
        
        $this->end_controls_tab();

        $this->start_controls_tab(
            '_appilo_shaoe_populer',
            [
                'label' => esc_html__( 'Populer', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'populer_before_bg_color',
                'label'    => __( 'Before Shape Background', 'appilo' ),
                'types'    => ['classic', 'gradient'],
                'exclude'  => ['image'],
                'selector' => '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column.popular-package .aplpg-pricing-top::before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'     => 'populer_after_shape_bg_color',
                'label'    => __( 'After Shape Background', 'appilo' ),
                'types'    => ['classic', 'gradient'],
                'exclude'  => ['image'],
                'selector' => '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column.popular-package .aplpg-pricing-top .aplpg-triangle-shape::after',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();       
        $this->end_controls_section();

        $this->start_controls_section(
            'btn_style',
            [
                'label' => __( 'Button Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $item_selector = '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-list-content .aplpg-pricing-btn a';
        $this->start_controls_tabs('btn_tab');

        $this->start_controls_tab(
            'btn_normal',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'bt',
                'label' =>   esc_html__( 'Typography', 'appilo' ),
                'selector' => $item_selector,
            ]
        );

        $this->add_control(
            'bc',
            [
                'label' =>   esc_html__( 'Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-list-content .aplpg-pricing-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background121',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => $item_selector,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => $item_selector,
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    $item_selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
         $this->start_controls_tab(
            'btn_hover',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $item_selector_hover = '{{WRAPPER}} .aplpg-pricing-content .aplpg-pricing-column .aplpg-pricing-list-content .aplpg-pricing-btn a:hover';
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'h_bt',
                'label' =>   esc_html__( 'Typography', 'appilo' ),
                'selector' => $item_selector_hover,
            ]
        );

        $this->add_control(
            'h_bc',
            [
                'label' =>   esc_html__( 'Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $item_selector_hover => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'h_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => $item_selector_hover,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'h_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => $item_selector_hover,
            ]
        );
        $this->add_responsive_control(
            'h_border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    $item_selector_hover => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_section();
 
    }
        
    protected function render() {

    $settings = $this->get_settings();


        echo ' <div class="aplpg-pricing-content">
                    <div class="row justify-content-center">';

        if ( $settings['box_list'] ) {
            foreach ($settings['box_list'] as $box) {
                $populer_cls = '';
            if('yes' == $box['populer']){
                $populer_cls = 'popular-package';
            }

        echo '<div class="col-lg-4 col-md-6">
                            <div class="aplpg-pricing-column '.esc_attr($populer_cls).'">
                                <div class="aplpg-pricing-top aplpg-headline">
                                    <h3>'.$box['price'].'/</h3>
                                    <span class="aplpg-subtitle">'.$box['month'].'</span>
                                    <span class="aplpg-triangle-shape"></span>
                                    <span class="aplpg-second-title">'.$box['popular-package'].'</span>
                                </div>
                                <div class="aplpg-pricing-list-content">
                                    <div class="aplpg-headline">
                                        <h6>'.$box['title'].'</h6>
                                    </div>
                                    <ul>
                                        <li>'.$box['block-content'].'</li>
                                    </ul>
                                    <div class="aplpg-pricing-btn">
                                        <a href="' . $box['link']['url'] . '">'.$box['button'].'</a>
                                    </div>
                                </div>
                                </div>
                            </div>';
                    }
                }
        echo'</div>
                </div>
';

}




    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_pricing );
?>