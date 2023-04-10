<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_pricing_table extends Widget_Base {

    public function get_name() {
        return 'topapp-pricing-table';
    }

    public function get_title() {
        return __( 'Pricing Table', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-price-table';
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
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '<span>pr</span>icing', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We have offered the <span>best </span>p<span>ricing</span> <br> to make life easier!', 'appilo' ),
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
        $this->add_control(
            'monthly_pricing_money_back',
            [
                'label' => __( 'Monthly Back Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '30 days money back guarantee!', 'appilo' ),
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
            'monthly_pricing_one_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
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
        $this->add_control(
            'monthly_pricing_one_btn_trial',
            [
                'label' => __( 'Trial Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get a free trial!', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_one_btn_trial_url',
            [
                'label' => __( 'Trial Button URL', 'appilo' ),
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
                        'monthly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_one_list_title' => __( '100 GB Disk Space', 'appilo' ),
                        'monthly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
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
            'monthly_pricing_two_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
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
        $this->add_control(
            'monthly_pricing_two_btn_trial',
            [
                'label' => __( 'Trial Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get a free trial!', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_two_btn_trial_url',
            [
                'label' => __( 'Trial Button URL', 'appilo' ),
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
                        'monthly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_two_list_title' => __( '200 GB Disk Space', 'appilo' ),
                        'monthly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
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
            'monthly_pricing_three_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
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
        $this->add_control(
            'monthly_pricing_three_btn_trial',
            [
                'label' => __( 'Trial Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get a free trial!', 'appilo' ),
            ]
        );
        $this->add_control(
            'monthly_pricing_three_btn_trial_url',
            [
                'label' => __( 'Trial Button URL', 'appilo' ),
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
                        'monthly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_three_list_title' => __( '300 GB Disk Space', 'appilo' ),
                        'monthly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
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
            'yearly_pricing_one_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
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
        $this->add_control(
            'yearly_pricing_one_btn_trial',
            [
                'label' => __( 'Trial Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get a free trial!', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_one_btn_trial_url',
            [
                'label' => __( 'Trial Button URL', 'appilo' ),
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
                        'yearly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_one_list_title' => __( '1000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_one_icon' => __( 'fas fa-check', 'appilo' ),
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
            'yearly_pricing_two_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
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
        $this->add_control(
            'yearly_pricing_two_btn_trial',
            [
                'label' => __( 'Trial Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get a free trial!', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_two_btn_trial_url',
            [
                'label' => __( 'Trial Button URL', 'appilo' ),
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
                        'yearly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_two_list_title' => __( '2000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_two_icon' => __( 'fas fa-check', 'appilo' ),
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
            'yearly_pricing_three_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
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
        $this->add_control(
            'yearly_pricing_three_btn_trial',
            [
                'label' => __( 'Trial Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get a free trial!', 'appilo' ),
            ]
        );
        $this->add_control(
            'yearly_pricing_three_btn_trial_url',
            [
                'label' => __( 'Trial Button URL', 'appilo' ),
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
                        'yearly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_three_list_title' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_three_list_title' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_three_list_title' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_three_list' => __( '3000 GB Disk Space', 'appilo' ),
                        'yearly_pricing_three_icon' => __( 'fas fa-check', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ yearly_pricing_three_list_title }}}',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Background', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
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
            'section_gradient',
            [
                'label' => __( 'Section Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Section Gradient', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .pricing-section .topapp-sec-title.style-three .title:before, 
                {{WRAPPER}} .pricing-section .topapp-sec-title.style-three h2 span:before, 
                {{WRAPPER}} .pricing-tabs .tab-buttons .boll',
            ]
        );
        $this->add_control(
            'pricing_icon',
            [
                'label' => __( 'Pricing Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_icon_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .price-block .inner-box .upper-box .icon-box, .price-block .inner-box .upper-box .icon-box i, 
                {{WRAPPER}} .price-block:nth-child(2) .inner-box .upper-box .icon-box, .price-block:nth-child(2) .inner-box .upper-box .icon-box i, 
                {{WRAPPER}} .price-block:nth-child(3) .inner-box .upper-box .icon-box, .price-block:nth-child(3) .inner-box .upper-box .icon-box i',
            ]
        );
        $this->add_control(
            'pricing_btn_hover_bg',
            [
                'label' => __( 'Pricing Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_btn_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .price-block .inner-box .lower-box .plan-btn:hover, 
                {{WRAPPER}} .price-block:nth-child(2) .inner-box .lower-box .plan-btn:hover, 
                {{WRAPPER}} .price-block:nth-child(3) .inner-box .lower-box .plan-btn:hover',
            ]
        );
        $this->add_control(
            'pricing_btn',
            [
                'label' => __( 'Pricing Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_btn_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .price-block .inner-box .lower-box .plan-btn, 
                {{WRAPPER}} .price-block:nth-child(2) .inner-box .lower-box .plan-btn, 
                {{WRAPPER}} .price-block:nth-child(3) .inner-box .lower-box .plan-btn',
            ]
        );
        $this->add_control(
            'pricing_bg',
            [
                'label' => __( 'Pricing Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .price-block .inner-box:before',
            ]
        );
        $this->add_control(
            'pricing_bg_hover',
            [
                'label' => __( 'Pricing Hover Background Elements', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Hover Elements 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/icons/pattern-18.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Hover Elements 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/icons/pattern-17.png',
                ],
            ]
        );
        $this->add_control(
            'section_patternt_bg',
            [
                'label' => __( 'Pattern Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/icons/pattern-19.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/icons/pattern-20.png',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Pricing Section -->
	<section class="pricing-section" >
		<div class="auto-container">
			<div class="topapp-sec-title centered style-three">
				<div class="title">'.$settings['section_title'].'</div>
				<h2>'.$settings['section_heading'].'</h2>
			</div>
			
			<div class="pricing-tabs tabs-box">
                    
				<!-- Title Column -->
				<div class="title-column '.$settings['button_hide'].'">
					
					<!-- Tab Btns -->
					<ul class="tab-buttons clearfix">
						<li data-tab="#prod-monthly" class="tab-btn monthly active-btn">'.$settings['monthly_title'].'</li>
						<li class="boll"><span class="round"></span></li>
						<li data-tab="#prod-yearly" class="tab-btn yearly">'.$settings['yearly_title'].'</li>
					</ul>						
					
				</div>
				
				<!--Tabs Container-->
				<div class="tabs-content">
					
					<div class="patern-layer-three paroller" data-paroller-factor="0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
					<div class="patern-layer-four paroller" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal" style="background-image: url('.$settings['pattern_bg_2']['url'].')"></div>
					
					<!--Tab-->
					<div class="tab active-tab" id="prod-monthly">
						<div class="content">
							<div class="row clearfix">
								
								<!-- Price Block -->
								<div class="price-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
										<div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_4']['url'].')"></div>
										<div class="upper-box">
											<div class="icon-box">';
                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['monthly_pricing_one_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';
											echo'</div>
											<div class="title">'.$settings['monthly_pricing_one_title'].'</div>
											<h3>'.$settings['monthly_pricing_one_price'].'</h3>
										</div>
										<div class="middle-box">
											<div class="price-title">'.$settings['monthly_pricing_one_label'].'</div>
											<ul class="price-list">';
                                                if ( $settings['monthly_pricing_one_list'] ) {
                                                    foreach (  $settings['monthly_pricing_one_list'] as $monthly_item ) {
                                                        echo '<li class="monthly-pricing-one-dyanmic'.$monthly_item['_id'].'">';\Elementor\Icons_Manager::render_icon( $monthly_item['monthly_pricing_one_icon'], [ 'aria-hidden' => 'true' ] ); echo''.$monthly_item['monthly_pricing_one_list_title'].'</li>';
                                                    }
                                                }
											echo' </ul>
										</div>
										<div class="lower-box">
											<a href="'.$settings['monthly_pricing_one_btn_url']['url'].'" class="topapp-theme-btn plan-btn">'.$settings['monthly_pricing_one_btn'].'</a>
											<a href="'.$settings['monthly_pricing_one_btn_trial_url']['url'].'" class="trial">'.$settings['monthly_pricing_one_btn_trial'].'</a>
										</div>
									</div>
								</div>
								
								<!-- Price Block -->
								<div class="price-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
										<div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_4']['url'].')"></div>
										<div class="upper-box">
											<div class="icon-box">';

                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['monthly_pricing_two_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

											echo'</div>
											<div class="title">'.$settings['monthly_pricing_two_title'].'</div>
											<h3>'.$settings['monthly_pricing_two_price'].'</h3>
										</div>
										<div class="middle-box">
											<div class="price-title">'.$settings['monthly_pricing_two_label'].'</div>
											<ul class="price-list">';
                                                if ( $settings['monthly_pricing_two_list'] ) {
                                                    foreach (  $settings['monthly_pricing_two_list'] as $monthly_item ) {
                                                        echo '<li class="monthly-pricing-two-dyanmic'.$monthly_item['_id'].'">';\Elementor\Icons_Manager::render_icon( $monthly_item['monthly_pricing_two_icon'], [ 'aria-hidden' => 'true' ] ); echo''.$monthly_item['monthly_pricing_two_list_title'].'</li>';
                                                    }
                                                }
											echo '</ul>
										</div>
										<div class="lower-box">
											<a href="'.$settings['monthly_pricing_two_btn_url']['url'].'" class="topapp-theme-btn plan-btn">'.$settings['monthly_pricing_two_btn'].'</a>
											<a href="'.$settings['monthly_pricing_two_btn_trial_url']['url'].'" class="trial">'.$settings['monthly_pricing_two_btn_trial'].'</a>
										</div>
									</div>
								</div>
								
								<!-- Price Block -->
								<div class="price-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
										<div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_4']['url'].')"></div>
										<div class="upper-box">
											<div class="icon-box">';

                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['monthly_pricing_three_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

											echo'</div>
											<div class="title">'.$settings['monthly_pricing_three_title'].'</div>
											<h3>'.$settings['monthly_pricing_three_price'].'</h3>
										</div>
										<div class="middle-box">
											<div class="price-title">'.$settings['monthly_pricing_three_label'].'</div>
											<ul class="price-list">';
                                                if ( $settings['monthly_pricing_three_list'] ) {
                                                    foreach (  $settings['monthly_pricing_three_list'] as $monthly_item ) {
                                                        echo '<li class="monthly-pricing-three-dyanmic'.$monthly_item['_id'].'">'; \Elementor\Icons_Manager::render_icon( $monthly_item['monthly_pricing_three_icon'], [ 'aria-hidden' => 'true' ] );  echo''.$monthly_item['monthly_pricing_three_list_title'].'</li>';
                                                    }
                                                }
											echo '</ul>
										</div>
										<div class="lower-box">
											<a href="'.$settings['monthly_pricing_three_btn_url']['url'].'" class="topapp-theme-btn plan-btn">'.$settings['monthly_pricing_three_btn'].'</a>
											<a href="'.$settings['monthly_pricing_three_btn_trial_url']['url'].'" class="trial">'.$settings['monthly_pricing_three_btn_trial'].'</a>
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- Guarantee -->
							<div class="guarantee"><span class="circle"></span>'.$settings['monthly_pricing_money_back'].'</div>
						
						</div>
					</div>
					
					<!--Tab-->
					<div class="tab" id="prod-yearly">
						<div class="content">
							<div class="row clearfix">
							
								<!-- Price Block -->
								<div class="price-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
										<div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_4']['url'].')"></div>
										<div class="upper-box">
											<div class="icon-box">';

                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['yearly_pricing_one_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

											echo '</div>
											<div class="title">'.$settings['yearly_pricing_one_title'].'</div>
											<h3>'.$settings['yearly_pricing_one_price'].'</h3>
										</div>
										<div class="middle-box">
											<div class="price-title">'.$settings['yearly_pricing_one_label'].'</div>
											<ul class="price-list">';
                                                if ( $settings['yearly_pricing_one_list'] ) {
                                                    foreach (  $settings['yearly_pricing_one_list'] as $yearly_item ) {
                                                        echo '<li class="yearly-pricing-one-dyanmic'.$yearly_item['_id'].'">'; \Elementor\Icons_Manager::render_icon( $yearly_item['yearly_pricing_one_icon'], [ 'aria-hidden' => 'true' ] ); echo' '.$yearly_item['yearly_pricing_one_list_title'].'</li>';
                                                    }
                                                }
											echo '</ul>
										</div>
										<div class="lower-box">
											<a href="'.$settings['yearly_pricing_one_btn_url']['url'].'" class="topapp-theme-btn plan-btn">'.$settings['yearly_pricing_one_btn'].'</a>
											<a href="'.$settings['yearly_pricing_one_btn_trial_url']['url'].'" class="trial">'.$settings['yearly_pricing_one_btn_trial'].'</a>
										</div>
									</div>
								</div>
								
								<!-- Price Block -->
								<div class="price-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
										<div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_4']['url'].')"></div>
										<div class="upper-box">
											<div class="icon-box">';

                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['yearly_pricing_two_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

											echo' </div>
											<div class="title">'.$settings['yearly_pricing_two_title'].'</div>
											<h3>'.$settings['yearly_pricing_two_price'].'</h3>
										</div>
										<div class="middle-box">
											<div class="price-title">'.$settings['yearly_pricing_two_label'].'</div>
											<ul class="price-list">';
                                                if ( $settings['yearly_pricing_two_list'] ) {
                                                    foreach (  $settings['yearly_pricing_two_list'] as $yearly_item ) {
                                                        echo '<li class="yearly-pricing-two-dyanmic'.$yearly_item['_id'].'">'; \Elementor\Icons_Manager::render_icon( $yearly_item['yearly_pricing_two_icon'], [ 'aria-hidden' => 'true' ] ); echo''.$yearly_item['yearly_pricing_two_list_title'].'</li>';
                                                    }
                                                }
											echo '</ul>
										</div>
										<div class="lower-box">
											<a href="'.$settings['yearly_pricing_two_btn_url']['url'].'" class="topapp-theme-btn plan-btn">'.$settings['yearly_pricing_two_btn'].'</a>
											<a href="'.$settings['yearly_pricing_two_btn_trial_url']['url'].'" class="trial">'.$settings['yearly_pricing_two_btn_trial'].'</a>
										</div>
									</div>
								</div>
								
								<!-- Price Block -->
								<div class="price-block col-lg-4 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
										<div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_4']['url'].')"></div>
										<div class="upper-box">
											<div class="icon-box">';

                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['yearly_pricing_three_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

										echo'	</div>
											<div class="title">'.$settings['yearly_pricing_three_title'].'</div>
											<h3>'.$settings['yearly_pricing_three_price'].'</h3>
										</div>
										<div class="middle-box">
											<div class="price-title">'.$settings['yearly_pricing_three_label'].'</div>
											<ul class="price-list">';
                                                if ( $settings['yearly_pricing_three_list'] ) {
                                                    foreach (  $settings['yearly_pricing_three_list'] as $yearly_item ) {
                                                        echo '<li class="yearly-pricing-three-dyanmic'.$yearly_item['_id'].'">'; \Elementor\Icons_Manager::render_icon( $yearly_item['yearly_pricing_three_icon'], [ 'aria-hidden' => 'true' ] ); echo''.$yearly_item['yearly_pricing_three_list_title'].'</li>';
                                                    }
                                                }
											echo '</ul>
										</div>
										<div class="lower-box">
											<a href="'.$settings['yearly_pricing_three_btn_url']['url'].'" class="topapp-theme-btn plan-btn">'.$settings['yearly_pricing_three_btn'].'</a>
											<a href="'.$settings['yearly_pricing_three_btn_trial_url']['url'].'" class="trial">'.$settings['yearly_pricing_three_btn_trial'].'</a>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Pricing Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_pricing_table );
?>