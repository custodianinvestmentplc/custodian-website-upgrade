<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class nft_header extends Widget_Base {

   public function get_name() {
      return 'nft_header';
   }

   public function get_title() {
      return __( 'NFT Header', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'Header_content',
            [
                'label' => __('Header Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'logo',
            [
                'label' => __('Choose Custom Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'main_nav',
            [
                'label' => __('Main Menu', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  appilo_menu_selector(),
                'multiple' => false,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'main_m_nav',
            [
                'label' => __('Mobile Menu', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  appilo_menu_selector(),
                'multiple' => false,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label' => __('Button Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button_link',
            [
                'label' => esc_html__( 'Button Link', 'appilo' ),
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
            'btn_icon',
            [
                'label' => __('Button Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'Header_container_style',
            [
                'label' => __('Header Container Style', 'appilo'),
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
                    '{{WRAPPER}} .nft-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'Header_bottom_border_color_heading',
            [
                'label' => esc_html__( 'Header Bottom Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'Header_bottom_border_color_',
                'label' => esc_html__( 'Header Bottom Border Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-header-section:after',
            ]
        );
        $this->add_control(
            'main_nav_color',
            [
                'label' => esc_html__( 'Main Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-main-navigation li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'main_nav_hover_color',
            [
                'label' => esc_html__( 'Main Nav Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-main-navigation li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Main Nav Typo', 'appilo' ),
                'name' => 'main_nav_typography',
                'selector' => '{{WRAPPER}} .nft-main-navigation li a',
            ]
        );
        $this->add_control(
            'main_nav_Icon_color',
            [
                'label' => esc_html__( 'Main Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-header-section .dropdown:after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dropdown_nav_color',
            [
                'label' => esc_html__( 'Dropdown Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-header-section .dropdown-menu a' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_control(
            'mobile_menu_style',
            [
                'label' => esc_html__( 'Mobile Menu Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Mobile_Nav_button_color',
            [
                'label' => esc_html__( 'Mobile Nav Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-mobile_menu_button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Mobile_Nav_BG_color',
            [
                'label' => esc_html__( 'Mobile Nav BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-mobile_menu_content' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Mobile_Nav_color',
            [
                'label' => esc_html__( 'Mobile Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-mobile_menu_content .nft-mobile-main-navigation .navbar-nav li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Mobile_Nav_dropdown_color',
            [
                'label' => esc_html__( 'Mobile Dropdown Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-mobile_menu .nft-mobile_menu_content .nft-mobile-main-navigation .navbar-nav .dropdown-menu li a' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'header_btn_style',
            [
                'label' => __( 'Header Button Style', 'appilo' ),
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
            'btn_color',
            [
                'label' => esc_html__( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-header-section .nft-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Button Typo', 'appilo' ),
                'name' => 'btn_typography',
                'selector' => '{{WRAPPER}} .nft-header-section .nft-btn a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => esc_html__( 'Button BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-header-section .nft-btn a',
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
            'btn_hover_color',
            [
                'label' => esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-header-section .nft-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg',
                'label' => esc_html__( 'Button Hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-header-section .nft-btn a:hover',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();


?>
        <!-- Start of Header section
    ============================================= -->
        <header id="nft-header" class="nft-header-section">
            <div class="container nft-container-1200">
                <div class="nft-main-navigation-wrapper d-flex justify-content-between position-relative">
                    <div class="nft-brand-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo $settings['logo']['url']; ?>" alt="">
                        </a>
                    </div>
                    <div class="nft-navigation-menu d-flex align-items-center">
                        <nav class="nft-main-navigation  clearfix ul-li">
                            <?php
                            echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                                'echo' => false,
                                'menu' => $settings['main_nav'],
                                'walker'  => new \WP_Bootstrap_Navwalker(),
                                'items_wrap' =>'<ul id="nft-main-nav" class="nav navbar-nav clearfix">%3$s</ul>'
                            ) ));
                            ?>
                        </nav>
                        <div class="nft-btn text-center">
                            <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['button_link']['url']; ?>">
                                <img src="<?php echo $settings['btn_icon']['url']; ?>" alt=""><?php echo $settings['button_text']; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="nft-mobile_menu position-relative">
                    <div class="nft-mobile_menu_button nft-open_mobile_menu">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="nft-mobile_menu_wrap">
                        <div class="mobile_menu_overlay nft-open_mobile_menu"></div>
                        <div class="nft-mobile_menu_content">
                            <div class="nft-mobile_menu_close nft-open_mobile_menu">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="m-brand-logo text-center">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo $settings['logo']['url']; ?>" alt="">
                                </a>
                            </div>
                            <nav class="nft-mobile-main-navigation  clearfix ul-li">
                                <?php
                                echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                                    'echo' => false,
                                    'menu' => $settings['main_m_nav'],
                                    'walker'  => new \WP_Bootstrap_Navwalker(),
                                    'items_wrap' =>'<ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">%3$s</ul>'
                                ) ));
                                ?>

                            </nav>
                        </div>
                    </div>
                    <!-- /Mobile-Menu -->
                </div>
        </header>
        <!-- End of Header section
            ============================================= -->


        <?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new nft_header() );
?>