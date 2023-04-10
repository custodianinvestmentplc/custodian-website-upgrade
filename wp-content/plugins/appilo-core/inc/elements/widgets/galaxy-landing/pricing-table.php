<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_pricing_table extends Widget_Base {

   public function get_name() {
      return 'galaxy-pricing-table';
   }

   public function get_title() {
      return __( 'Pricing Table', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-price-list';
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
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_bg',
                'label' => __( 'Pricing Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-pricing-grids .grid-inner:before, {{WRAPPER}} .app-landing-pricing .slider, {{WRAPPER}} .app-btn-s1',
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
            'monthly_pricing_table',
            [
                'label' => __( 'Monthly Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'monthly_pricing_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Personal', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'monthly_pricing_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$12', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'monthly_pricing_label',
            [
                'label' => __( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Limited Access', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'monthly_pricing_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started Now', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'monthly_pricing_btn_url',
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
        $repeater->add_control(
            'monthly_pricing_features', [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '  <li><span>100 MB </span>Disk Space</li>
                                    <li><span>2 Subdo </span>mains</li>
                                    <li><span>5 Email </span>Accounts</li>
                                    <li><span>1 Year </span>License</li>
                                    <li>Phone &amp; Mail Support</li>' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'monthly_pricing_list',
            [
                'label' => __( 'Pricing List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'monthly_pricing_title' => __( 'Personal', 'appilo' ),
                        'monthly_pricing_price' => __( '$12', 'appilo' ),
                        'monthly_pricing_label' => __( 'Limited Access', 'appilo' ),
                        'monthly_pricing_btn' => __( 'Get Started Now', 'appilo' ),
                        'monthly_pricing_btn_url' => __( '#', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_title' => __( 'Personal', 'appilo' ),
                        'monthly_pricing_price' => __( '$12', 'appilo' ),
                        'monthly_pricing_label' => __( 'Limited Access', 'appilo' ),
                        'monthly_pricing_btn' => __( 'Get Started Now', 'appilo' ),
                        'monthly_pricing_btn_url' => __( '#', 'appilo' ),
                    ],
                    [
                        'monthly_pricing_title' => __( 'Personal', 'appilo' ),
                        'monthly_pricing_price' => __( '$12', 'appilo' ),
                        'monthly_pricing_label' => __( 'Limited Access', 'appilo' ),
                        'monthly_pricing_btn' => __( 'Get Started Now', 'appilo' ),
                        'monthly_pricing_btn_url' => __( '#', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ monthly_pricing_title }}}',
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
            'yearly_pricing_table',
            [
                'label' => __( 'Yearly Pricing Table', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'yearly_pricing_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Personal', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'yearly_pricing_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$12', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'yearly_pricing_label',
            [
                'label' => __( 'Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Limited Access', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'yearly_pricing_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started Now', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'yearly_pricing_btn_url',
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
        $repeater->add_control(
            'yearly_pricing_features', [
                'label' => __( 'Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '  <li><span>100 MB </span>Disk Space</li>
                                    <li><span>2 Subdo </span>mains</li>
                                    <li><span>5 Email </span>Accounts</li>
                                    <li><span>1 Year </span>License</li>
                                    <li>Phone &amp; Mail Support</li>' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'yearly_pricing_list',
            [
                'label' => __( 'Pricing List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'yearly_pricing_title' => __( 'Personal', 'appilo' ),
                        'yearly_pricing_price' => __( '$22', 'appilo' ),
                        'yearly_pricing_label' => __( 'Limited Access', 'appilo' ),
                        'yearly_pricing_btn' => __( 'Get Started Now', 'appilo' ),
                        'yearly_pricing_btn_url' => __( '#', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_title' => __( 'Personal', 'appilo' ),
                        'yearly_pricing_price' => __( '$22', 'appilo' ),
                        'yearly_pricing_label' => __( 'Limited Access', 'appilo' ),
                        'yearly_pricing_btn' => __( 'Get Started Now', 'appilo' ),
                        'yearly_pricing_btn_url' => __( '#', 'appilo' ),
                    ],
                    [
                        'yearly_pricing_title' => __( 'Personal', 'appilo' ),
                        'yearly_pricing_price' => __( '$22', 'appilo' ),
                        'yearly_pricing_label' => __( 'Limited Access', 'appilo' ),
                        'yearly_pricing_btn' => __( 'Get Started Now', 'appilo' ),
                        'yearly_pricing_btn_url' => __( '#', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ yearly_pricing_title }}}',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start app-landing-pricing -->
                    <section class="app-landing-pricing" >
                            <div class="content">
                                    <div class="switcher-wrapper">
                                        <div class="tablist">
                                            <span class="active">'.$settings['monthly_title'].'</span>
                                            <span>'.$settings['yearly_title'].'</span>
                                        </div>
                                        <div class="switch">
                                            <div class="slider round"></div>
                                        </div>
                                    </div>
                    
                                    <div class="pricing-tab">
                                        <div class="app-pricing-grids active-grids">';
                                            if ( $settings['monthly_pricing_list'] ) {
                                                foreach (  $settings['monthly_pricing_list'] as $monthly_item ) {
                                                    echo '<div class="grid">
                                                            <div class="grid-inner">
                                                                <div class="pricing-header">
                                                                    <span class="package">'.$monthly_item['monthly_pricing_title'].'</span>
                                                                    <h3 class="price">'.$monthly_item['monthly_pricing_price'].'</h3>
                                                                    <span class="access">'.$monthly_item['monthly_pricing_label'].'</span>
                                                                </div>
                                                                <div class="pricing-details">
                                                                    <ul>
                                                                        '.$monthly_item['monthly_pricing_features'].'
                                                                    </ul>
                                                                    <a href="'.$monthly_item['monthly_pricing_btn_url']['url'].'" class="app-btn-s1 get-started">'.$monthly_item['monthly_pricing_btn'].'</a>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    }
                                                }
                                        echo'</div>
                                        <div class="app-pricing-grids">';
                                        if ( $settings['yearly_pricing_list'] ) {
                                            foreach (  $settings['yearly_pricing_list'] as $yearly_item ) {
                                                echo '<div class="grid">
                                                        <div class="grid-inner">
                                                            <div class="pricing-header">
                                                                <span class="package">'.$yearly_item['yearly_pricing_title'].'</span>
                                                                <h3 class="price">'.$yearly_item['yearly_pricing_price'].'</h3>
                                                                <span class="access">'.$yearly_item['yearly_pricing_label'].'</span>
                                                            </div>
                                                            <div class="pricing-details">
                                                                <ul>
                                                                    '.$yearly_item['yearly_pricing_features'].'
                                                                </ul>
                                                                <a href="'.$yearly_item['yearly_pricing_btn_url']['url'].'" class="app-btn-s1 get-started">'.$yearly_item['yearly_pricing_btn'].'</a>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                }
                                            }
                                        echo'</div>
                                    </div> <!-- end pricing-tab -->
                             </div> <!-- end row -->
                    </section>
                <!-- start app-landing-pricing -->';
    }

    



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_pricing_table );
?>