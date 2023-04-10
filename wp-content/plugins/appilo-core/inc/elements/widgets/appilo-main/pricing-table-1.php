<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_pricing_table extends Widget_Base {

   public function get_name() {
      return 'appilo-pricing-table';
   }

   public function get_title() {
      return __( 'Pricing Table', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'fab fa-autoprefixer';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'pricing', 'appilo' ),
            ]
        );
        $this->add_control(
            'button_hide',
            [
                'label' => __( 'Hide Button', 'appilo' ),
                'description' => __( 'Turn of the button to use single pricing', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'd-none',
                'default' => '',
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __( 'Color Control', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_color',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .pricing-section .switch.on .slider, 
                {{WRAPPER}} .pricing-section .single-pricing.popular, 
                {{WRAPPER}} .pricing-section .single-pricing p.price, 
                {{WRAPPER}} .appilo-thm-btn, 
                {{WRAPPER}} .pricing-section .switch.off .slider',
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pricing_button_box_shadow',
				'label' => esc_html__( 'Pricing Button Box Shadow', 'appilo' ),
				'selector' => '{{WRAPPER}} .pricing-section .single-pricing.popular .appilo-thm-btn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pricing_button_hover_box_shadow',
				'label' => esc_html__( 'Pricing Button Hover Box Shadow', 'appilo' ),
				'selector' => '{{WRAPPER}} .pricing-section .single-pricing a.appilo-thm-btn:hover',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_font',
                'label' => __( 'Title Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .pricing-section .single-pricing h3.title',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-section .single-pricing h3.title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'price_font',
                'label' => __( 'Price Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .pricing-section .single-pricing p.price',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'label_font',
                'label' => __( 'Label Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .pricing-section .single-pricing p.price-label',
            ]
        );
        $this->add_control(
            'label_color',
            [
                'label' => __( 'Label Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-section .single-pricing p.price-label' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_font',
                'label' => __( 'Feature Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .pricing-section .single-pricing ul.list-item li',
            ]
        );
        $this->add_control(
            'feature_color',
            [
                'label' => __( 'Feature Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-section .single-pricing ul.list-item li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'monthly_section',
            [
                'label' => __( 'Monthly', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'monthly_title',
            [
                'label' => __( 'Monthly Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Monthly', 'appilo' ),
            ]
        );
        // Monthly Pricing One
        $this->add_control(
            'monthly_pricing_one',
            [
                'label' => __( 'Monthly Pricing Table One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'dh1',
            [
                'label' => __( 'Hide Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'd-none',
                'default' => '',
            ]
        );
        $this->add_control(
            'monthly_pricing_one_make_popular',
            [
                'label' => __( 'Make Featured', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Popular', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'popular',
                'default' => '',
            ]
        );
        $this->add_control(
            'monthly_pricing_one_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Personal', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_one_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$11', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_one_label',
            [
                'label' => __( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Limited Access', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_one_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_one_btn_url',
            [
                'label' => __( 'Buy Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'monthly_pricing_one_icon', [
                'label' => __( 'List Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'label_block' => true,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'monthly_pricing_one_list_title', [
                'label' => __( 'List Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '100 GB Disk Space' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'monthly_pricing_one_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ monthly_pricing_one_list_title }}}',
            ]
        );

        // Monthly Pricing Two
        $this->add_control(
            'monthly_pricing_two',
            [
                'label' => __( 'Monthly Pricing Table Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'dh2',
            [
                'label' => __( 'Hide Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'd-none',
                'default' => '',
            ]
        );
        $this->add_control(
            'monthly_pricing_two_make_popular',
            [
                'label' => __( 'Make Featured', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Popular', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'popular',
                'default' => 'popular',
            ]
        );
        $this->add_control(
            'monthly_pricing_two_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Business', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_two_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$22', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_two_label',
            [
                'label' => __( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Limited Access', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_two_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_two_btn_url',
            [
                'label' => __( 'Buy Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'monthly_pricing_two_icon', [
                'label' => __( 'List Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'label_block' => true,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'monthly_pricing_two_list_title', [
                'label' => __( 'List Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '200 GB Disk Space' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'monthly_pricing_two_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ monthly_pricing_two_list_title }}}',
            ]
        );

        // Monthly Pricing Three
        $this->add_control(
            'monthly_pricing_three',
            [
                'label' => __( 'Monthly Pricing Table Three', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'dh3',
            [
                'label' => __( 'Hide Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'd-none',
                'default' => '',
            ]
        );
        $this->add_control(
            'monthly_pricing_three_make_popular',
            [
                'label' => __( 'Make Featured', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Popular', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'popular',
                'default' => '',
            ]
        );
        $this->add_control(
            'monthly_pricing_three_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Enterprise', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_three_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$33', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_three_label',
            [
                'label' => __( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Unlimited Access', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_three_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_three_btn_url',
            [
                'label' => __( 'Buy Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'monthly_pricing_three_icon', [
                'label' => __( 'List Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'label_block' => true,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'monthly_pricing_three_list_title', [
                'label' => __( 'List Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300 GB Disk Space' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'monthly_pricing_three_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ monthly_pricing_three_list_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'yearly_section',
            [
                'label' => __( 'Yearly', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'yearly_title',
            [
                'label' => __( 'Yearly Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Yearly', 'appilo' ),
            ]
        );

        // Yearly Pricing One
        $this->add_control(
            'yearly_pricing_one',
            [
                'label' => __( 'Yearly Pricing Table One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'dh4',
            [
                'label' => __( 'Hide Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'd-none',
                'default' => '',
            ]
        );
        $this->add_control(
            'yearly_pricing_one_make_popular',
            [
                'label' => __( 'Make Featured', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Popular', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'popular',
                'default' => '',
            ]
        );
        $this->add_control(
            'yearly_pricing_one_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Personal', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_one_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$111', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_one_label',
            [
                'label' => __( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Limited Access', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_one_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_one_btn_url',
            [
                'label' => __( 'Buy Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'yearly_pricing_one_icon', [
                'label' => __( 'List Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'label_block' => true,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'yearly_pricing_one_list_title', [
                'label' => __( 'List Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1000 GB Disk Space' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'yearly_pricing_one_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ yearly_pricing_one_list_title }}}',
            ]
        );

        // Yearly Pricing Two
        $this->add_control(
            'yearly_pricing_two',
            [
                'label' => __( 'Yearly Pricing Table Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'dh5',
            [
                'label' => __( 'Hide Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'd-none',
                'default' => '',
            ]
        );
        $this->add_control(
            'yearly_pricing_two_make_popular',
            [
                'label' => __( 'Make Featured', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Popular', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'popular',
                'default' => 'popular',
            ]
        );
        $this->add_control(
            'yearly_pricing_two_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Business', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_two_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$222', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_two_label',
            [
                'label' => __( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Limited Access', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_two_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_two_btn_url',
            [
                'label' => __( 'Buy Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'yearly_pricing_two_icon', [
                'label' => __( 'List Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'label_block' => true,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'yearly_pricing_two_list_title', [
                'label' => __( 'List Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '2000 GB Disk Space' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'yearly_pricing_two_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ yearly_pricing_two_list_title }}}',
            ]
        );

        // Yearly Pricing Three
        $this->add_control(
            'yearly_pricing_three',
            [
                'label' => __( 'Yearly Pricing Table Three', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'dh6',
            [
                'label' => __( 'Hide Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => 'd-none',
                'default' => '',
            ]
        );
        $this->add_control(
            'yearly_pricing_three_make_popular',
            [
                'label' => __( 'Make Featured', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Popular', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'popular',
                'default' => '',
            ]
        );
        $this->add_control(
            'yearly_pricing_three_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Enterprise', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_three_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$333', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_three_label',
            [
                'label' => __( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Unlimited Access', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_three_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_three_btn_url',
            [
                'label' => __( 'Buy Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'yearly_pricing_three_icon', [
                'label' => __( 'List Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'label_block' => true,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'yearly_pricing_three_list_title', [
                'label' => __( 'List Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '3000 GB Disk Space' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'yearly_pricing_three_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'yearly_pricing_three_list_title' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_three_list_title' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_three_list_title' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_three_list_title' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_three_list_title' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fa fa-check', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ yearly_pricing_three_list_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section class="appilo-main-pricing pricing-section" >
            <div class="container">
                <ul class="list-inline text-center switch-toggler-list '.$settings['button_hide'].'" role="tablist" id="switch-toggle-tab">
                    <li class="month active"><a href="#" >'.$settings['monthly_title'].'</a></li>
                    <li>
                        <!-- Rounded switch -->
                        <label class="switch on">
                            <span class="slider round"></span>
                        </label>
                    </li>
                    <li class="year"><a href="#">'.$settings['yearly_title'].'</a></li>
                </ul><!-- /.list-inline -->
                <div class="tabed-content">
                    <div id="month">
                        <div class="row pricing-row justify-content-center">
                            <div class="col-md-4 col-sm-6 col-xs-12 '.$settings['dh1'].'">
                                <div class="single-pricing text-center '.$settings['monthly_pricing_one_make_popular'].'">
                                    <div class="inner">
                                        <h3 class="title">'.$settings['monthly_pricing_one_title'].'</h3><!-- /.title -->
                                        <p class="price">'.$settings['monthly_pricing_one_price'].'</p><!-- /.price -->
                                        <p class="price-label">'.$settings['monthly_pricing_one_label'].'</p><!-- /.label -->';

                                            if ( $settings['monthly_pricing_one_list'] ) {
                                                echo '<ul class="list-item">';
                                                foreach (  $settings['monthly_pricing_one_list'] as $monthly_item ) {
                                                    echo '<li class="monthly-pricing-one-dyanmic'.$monthly_item['_id'].'">';\Elementor\Icons_Manager::render_icon( $monthly_item['monthly_pricing_one_icon'], [ 'aria-hidden' => 'true' ] ); echo''.$monthly_item['monthly_pricing_one_list_title'].'</li>';
                                                }
                                                echo '</ul><!-- /.list-item -->';
                                            }
                                        echo '<a href="'.$settings['monthly_pricing_one_btn_url']['url'].'" class="appilo-thm-btn borderd"><span>'.$settings['monthly_pricing_one_btn'].'</span></a>
                                    </div><!-- /.inner -->
                                </div><!-- /.single-pricing -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-12 '.$settings['dh2'].'">
                                <div class="single-pricing text-center '.$settings['monthly_pricing_two_make_popular'].'">
                                    <div class="inner">
                                        <h3 class="title">'.$settings['monthly_pricing_two_title'].'</h3><!-- /.title -->
                                        <p class="price">'.$settings['monthly_pricing_two_price'].'</p><!-- /.price -->
                                        <p class="price-label">'.$settings['monthly_pricing_two_label'].'</p><!-- /.label -->';

                                            if ( $settings['monthly_pricing_two_list'] ) {
                                                echo '<ul class="list-item">';
                                                foreach (  $settings['monthly_pricing_two_list'] as $monthly_item ) {
                                                    echo '<li class="monthly-pricing-two-dyanmic'.$monthly_item['_id'].'">';\Elementor\Icons_Manager::render_icon( $monthly_item['monthly_pricing_two_icon'], [ 'aria-hidden' => 'true' ] );  echo' '.$monthly_item['monthly_pricing_two_list_title'].'</li>';
                                                }
                                                echo '</ul><!-- /.list-item -->';
                                            }

                                        echo'
                                        <a href="'.$settings['monthly_pricing_two_btn_url']['url'].'" class="appilo-thm-btn borderd"><span>'.$settings['monthly_pricing_two_btn'].'</span></a>
                                    </div><!-- /.inner -->
                                </div><!-- /.single-pricing -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-12 '.$settings['dh3'].'">
                                <div class="single-pricing text-center '.$settings['monthly_pricing_three_make_popular'].'">
                                    <div class="inner">
                                        <h3 class="title">'.$settings['monthly_pricing_three_title'].'</h3><!-- /.title -->
                                        <p class="price">'.$settings['monthly_pricing_three_price'].'</p><!-- /.price -->
                                        <p class="price-label">'.$settings['monthly_pricing_three_label'].'</p><!-- /.label -->';

                                            if ( $settings['monthly_pricing_three_list'] ) {
                                                echo '<ul class="list-item">';
                                                foreach (  $settings['monthly_pricing_three_list'] as $monthly_item ) {
                                                    echo '<li class="monthly-pricing-three-dyanmic'.$monthly_item['_id'].'">'; \Elementor\Icons_Manager::render_icon( $monthly_item['monthly_pricing_three_icon'], [ 'aria-hidden' => 'true' ] );  echo''.$monthly_item['monthly_pricing_three_list_title'].'</li>';
                                                }
                                                echo '</ul><!-- /.list-item -->';
                                            }

                                        echo'
                                        <a href="'.$settings['monthly_pricing_three_btn_url']['url'].'" class="appilo-thm-btn borderd"><span>'.$settings['monthly_pricing_three_btn'].'</span></a>
                                    </div><!-- /.inner -->
                                </div><!-- /.single-pricing -->
                            </div><!-- /.col-md-4 -->
                        </div><!-- /.row -->
                    </div><!-- /#month -->
                    <div id="year">';
                      echo '                     
                        <div class="row pricing-row justify-content-center">
                            <div class="col-md-4 col-sm-6 col-xs-12 '.$settings['dh4'].'">
                                <div class="single-pricing text-center '.$settings['yearly_pricing_one_make_popular'].'">
                                    <div class="inner">
                                        <h3 class="title">'.$settings['yearly_pricing_one_title'].'</h3><!-- /.title -->
                                        <p class="price">'.$settings['yearly_pricing_one_price'].'</p><!-- /.price -->
                                        <p class="price-label">'.$settings['yearly_pricing_one_label'].'</p><!-- /.label -->';

                                                if ( $settings['yearly_pricing_one_list'] ) {
                                                    echo '<ul class="list-item">';
                                                    foreach (  $settings['yearly_pricing_one_list'] as $yearly_item ) {
                                                        echo '<li class="yearly-pricing-one-dyanmic'.$yearly_item['_id'].'">'; \Elementor\Icons_Manager::render_icon( $yearly_item['yearly_pricing_one_icon'], [ 'aria-hidden' => 'true' ] ); echo' '.$yearly_item['yearly_pricing_one_list_title'].'</li>';
                                                    }
                                                    echo '</ul><!-- /.list-item -->';
                                                }

                                        echo'
                                        <a href="'.$settings['yearly_pricing_one_btn_url']['url'].'" class="appilo-thm-btn borderd"><span>'.$settings['yearly_pricing_one_btn'].'</span></a>
                                    </div><!-- /.inner -->
                                </div><!-- /.single-pricing -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-12 '.$settings['dh5'].'">
                                <div class="single-pricing text-center '.$settings['yearly_pricing_two_make_popular'].'">
                                    <div class="inner">
                                        <h3 class="title">'.$settings['yearly_pricing_two_title'].'</h3><!-- /.title -->
                                        <p class="price">'.$settings['yearly_pricing_two_price'].'</p><!-- /.price -->
                                        <p class="price-label">'.$settings['yearly_pricing_two_label'].'</p><!-- /.label -->';

                                            if ( $settings['yearly_pricing_two_list'] ) {
                                                echo '<ul class="list-item">';
                                                foreach (  $settings['yearly_pricing_two_list'] as $yearly_item ) {
                                                    echo '<li class="yearly-pricing-two-dyanmic'.$yearly_item['_id'].'">'; \Elementor\Icons_Manager::render_icon( $yearly_item['yearly_pricing_two_icon'], [ 'aria-hidden' => 'true' ] ); echo''.$yearly_item['yearly_pricing_two_list_title'].'</li>';
                                                }
                                                echo '</ul><!-- /.list-item -->';
                                            }

                                    echo'
                                        <a href="'.$settings['yearly_pricing_two_btn_url']['url'].'" class="appilo-thm-btn borderd"><span>'.$settings['yearly_pricing_two_btn'].'</span></a>
                                    </div><!-- /.inner -->
                                </div><!-- /.single-pricing -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-12 '.$settings['dh6'].'">
                                <div class="single-pricing text-center '.$settings['yearly_pricing_three_make_popular'].'">
                                    <div class="inner">
                                        <h3 class="title">'.$settings['yearly_pricing_three_title'].'</h3><!-- /.title -->
                                        <p class="price">'.$settings['yearly_pricing_three_price'].'</p><!-- /.price -->
                                        <p class="price-label">'.$settings['yearly_pricing_three_label'].'</p><!-- /.label -->';

                                            if ( $settings['yearly_pricing_three_list'] ) {
                                                echo '<ul class="list-item">';
                                                foreach (  $settings['yearly_pricing_three_list'] as $yearly_item ) {
                                                    echo '<li class="yearly-pricing-three-dyanmic'.$yearly_item['_id'].'">'; \Elementor\Icons_Manager::render_icon( $yearly_item['yearly_pricing_three_icon'], [ 'aria-hidden' => 'true' ] ); echo''.$yearly_item['yearly_pricing_three_list_title'].'</li>';
                                                }
                                                echo '</ul><!-- /.list-item -->';
                                            }

                                        echo'
                                        <a href="'.$settings['yearly_pricing_three_btn_url']['url'].'" class="appilo-thm-btn borderd"><span>'.$settings['yearly_pricing_three_btn'].'</span></a>
                                    </div><!-- /.inner -->
                                </div><!-- /.single-pricing -->
                            </div><!-- /.col-md-4 -->
                        </div><!-- /.row -->
                    </div><!-- /#year -->
                </div><!-- /.tabed-content -->
            </div><!-- /.container -->
        </section><!-- /.pricing-section -->';
    }

    



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_pricing_table );
?>