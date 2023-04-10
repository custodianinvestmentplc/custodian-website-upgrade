<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_app_pricing extends Widget_Base {

   public function get_name() {
      return 'saas_app_pricing';
   }

   public function get_title() {
      return __( 'Saas App Pricing', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'pricing_top_content',
            [
                'label' => __('Heading Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__( 'Subtitle', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span># No 1</span> Trending Apps' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Easy To <span>Manage</span> your All Data By this Applicaiton' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'pricing_list_content',
            [
                'label' => __( 'Pricing Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
//        repeater for style 1
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'is_tab_active',
            [
                'label' => esc_html__( 'Is Pricing Active', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Active', 'appilo' ),
                'label_off' => esc_html__( 'Inactive', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'pricing_plan_name', [
                'label' => esc_html__( 'Plan Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Advanced Plan' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'pricing_plan_img',
            [
                'label' => __('Pricing Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'price', [
                'label' => esc_html__( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '29.00' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'time', [
                'label' => esc_html__( 'Time', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'USD Per Month' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'sub_info', [
                'label' => esc_html__( 'Sub Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '* Generally we deliver the beta website with working days*' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'package_details', [
                'label' => esc_html__( 'Pricing Details', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul class="pricing__list list-unstyled mt-45">
                                    <li>Domain (Free for first year)</li>
                                    <li>User Management System</li>
                                    <li>Hosting (Free first year <span>1 GB</span>)</li>
                                    <li>Order Management System </li>
                                    <li>Custom Plugin Development</li>
                                    <li> Responsive Design</li>
                                </ul>' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'package_button_text', [
                'label' => esc_html__( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started Free' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'package_button_url',
            [
                'label' => esc_html__( 'Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
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
            'pricing',
            [
                'label' => esc_html__( 'Pricing List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'pricing_plan_name' => esc_html__( 'Advanced Plan', 'appilo' ),
                    ],
                    [
                        'pricing_plan_name' => esc_html__( 'Advanced Plan', 'appilo' ),
                    ],
                    [
                        'pricing_plan_name' => esc_html__( 'Advanced Plan', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ pricing_plan_name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'pricing_top_style',
            [
                'label' => __('Top Style', 'appilo'),
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
                    'size' => 1450,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1450' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Subtitle Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-sec-title .sub_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Subtitle_typo',
                'label' => esc_html__('Subtitle Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title .sub_title',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-sec-title .title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .tx-sec-title .title',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'pricing_table_style',
            [
                'label' => __( 'Pricing Table Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Inactive_tab_style',
            [
                'label' => esc_html__( 'Inactive Tab Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'inactive_tab_plan_color',
            [
                'label' => esc_html__('Inactive Plan Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__plan' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'inactive_tab_Pricing_color',
            [
                'label' => esc_html__('Inactive Plan Pricing Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__price .price' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'inactive_Pricing_duration_color',
            [
                'label' => esc_html__('Inactive Pricing Duration Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__price .time' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'inactive_Pricing_subInfo_color',
            [
                'label' => esc_html__('Inactive Plan Sub Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__single p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'inactive_Pricing_details_color',
            [
                'label' => esc_html__('Inactive Plan Details Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__list li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Inactive_btn_bg_color',
            [
                'label' => esc_html__('Inactive Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_tab_style',
            [
                'label' => esc_html__( 'Active Tab Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'active_tab_BG',
            [
                'label' => esc_html__('Active Tab BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__single::before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_tab_plan_color',
            [
                'label' => esc_html__('Active Plan Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__single.active .pricing__plan' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tab_plan_title_typo',
                'label' => esc_html__('Plan Title Typo', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .pricing__plan',
            ]
        );
        $this->add_control(
            'active_tab_Pricing_color',
            [
                'label' => esc_html__('Active Plan Pricing Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__single.active .pricing__price span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tab_plan_Pricing_typo',
                'label' => esc_html__('Pricing Typo', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .pricing__price .price',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Pricing_duration_typo',
                'label' => esc_html__('Pricing Duration Typo', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .pricing__price .time',
            ]
        );
        $this->add_control(
            'active_Pricing_subInfo_color',
            [
                'label' => esc_html__('Active Plan Sub Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__single.active p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Pricing_sub_info_typo',
                'label' => esc_html__('Pricing Sub Info Typo', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .pricing__single p',
            ]
        );
        $this->add_control(
            'active_Pricing_details_color',
            [
                'label' => esc_html__('Active Plan Details Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__single.active .pricing__list li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_details_before__icon_color',
            [
                'label' => esc_html__('Pricing Details Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__list li::before' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Pricing_Details_typo',
                'label' => esc_html__('Pricing Details Typo', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .pricing__list li',
            ]
        );
        $this->add_control(
            'active_btn_bg_color',
            [
                'label' => esc_html__('Active Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing__single.active .thm-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_btn_text_color',
            [
                'label' => esc_html__('Active Button Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thm-btn .btn-wrap span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_text_typo',
                'label' => esc_html__('Button Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .pricing__btn .thm-btn',
            ]
        );
        $this->end_controls_section();



    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>
<!-- pricing start -->
<div class="pricing pt-120 pb-120">
    <div class="container maxw_1390 container-1450">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tx-sec-title text-center mb-45">

                        <span class="sub_title wow fadeInUp">
                            <?php echo $settings['subtitle']; ?>
                        </span>
                    <h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                        <?php echo $settings['title']; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-none-30">
        <?php foreach ($settings['pricing'] as $pricing):; ?>
        <?php
            if ( $pricing['is_tab_active'] == "yes"){
                $active = "active";
            }else{
                $active = "";
            }
        ?>
            <div class="col-lg-4 col-md-6 mt-30">
                <div class="pricing__single text-center <?php echo $active; ?> wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
                    <h4 class="pricing__plan"><?php echo $pricing['pricing_plan_name']; ?></h4>
                    <span class="icon"><img src="<?php echo $pricing['pricing_plan_img']['url']; ?>" alt=""></span>
                    <h3 class="pricing__price">
                        <span class="price"><?php echo $pricing['price']; ?></span>
                        <span class="time"><?php echo $pricing['time']; ?></span>
                    </h3>
                    <?php if (isset($pricing['sub_info'])):; ?>
                        <p><?php echo $pricing['sub_info']; ?></p>
                    <?php endif; ?>
                    <?php echo $pricing['package_details']; ?>
                    <div class="pricing__btn mt-55">
                        <a class="thm-btn" href="<?php echo $pricing['package_button_url']['url']; ?>">
                                <span class="btn-wrap">
                                    <span><?php echo $pricing['package_button_text']; ?></span>
                                    <span><?php echo $pricing['package_button_text']; ?></span>
                                </span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- pricing end -->

<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_app_pricing() );
?>