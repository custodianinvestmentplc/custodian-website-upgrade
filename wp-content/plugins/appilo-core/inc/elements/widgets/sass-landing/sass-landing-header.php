<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class sass_landing_header extends Widget_Base
{

    public function get_name()
    {
        return 'sass-landing-header';
    }

    public function get_title()
    {
        return __('Sass Header', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-banner';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {
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
            'button_text_1',
            [
                'label' => __('Button Text 1', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Login',
            ]
        );
        $this->add_control(
            'button_link_1',
            [
                'label' => esc_html__( 'Button Link 1', 'appilo' ),
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
            'button_text_2',
            [
                'label' => __('Button Text 2', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Start Free Trial',
            ]
        );
        $this->add_control(
            'button_link_2',
            [
                'label' => esc_html__( 'Button Link 2', 'appilo' ),
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
                    'size' => 1590,
                ],
                'selectors' => [
                    '{{WRAPPER}} .maxw_1450' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sticky_header_bg_color',
            [
                'label' => esc_html__( 'Sticky Header BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-header.uk-active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'main_nav_color',
            [
                'label' => esc_html__( 'Main Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-main-menu ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'main_nav_hover_color',
            [
                'label' => esc_html__( 'Main Nav Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-main-menu ul li:hover > a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Main Nav Typo', 'appilo' ),
                'name' => 'main_nav_typography',
                'selector' => '{{WRAPPER}} .sl-main-menu ul li a',
            ]
        );
        $this->add_control(
            'dropdown_nav_color',
            [
                'label' => esc_html__( 'Dropdown Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-main-menu ul li .submenu li a' => 'color: {{VALUE}}',
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
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Button Typo', 'appilo' ),
                'name' => 'btn_typography',
                'selector' => '{{WRAPPER}} .sl-btn',
            ]
        );
        $this->add_control(
            'btn__1_color',
            [
                'label' => esc_html__( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-btn .btn-wrap span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .sl-btn' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn__1_bg',
                'label' => esc_html__( 'Button BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .sl-btn',
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
            'btn_1_hover_color',
            [
                'label' => esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sl-btn:hover .btn-wrap span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover1_1_bg',
                'label' => esc_html__( 'Button Hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .sl-btn:hover',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        
        <!-- header start -->
        <header class="sl-header" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
            <div class="container maxw_1450">
                <div class="header__main">
                    <div class="header__logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo $settings['logo']['url']; ?>" alt="">
                        </a>
                    </div>
                    <div class="sl-main-menu__wrap ul_li navbar navbar-expand-lg">
                        <nav class="sl-main-menu collapse navbar-collapse">
                            <?php
                            echo  str_replace( ['dropdown-menu'], ['submenu'] ,wp_nav_menu( array(
                                'echo' => false,
                                'menu' => $settings['main_nav'],
                                'walker'  => new \WP_Bootstrap_Navwalker(),
                                'items_wrap' =>'<ul>%3$s</ul>'
                            ) ));
                            ?>
                        </nav>
                    </div>
                    <div class="header__button ul_li">
                        <?php
                            if ($settings['button_link_2']['url']):
                        ?>
                        <a class="sl-btn" href="<?php echo $settings['button_link_2']['url']; ?>">
                            <span class="btn-wrap">
                                <span><?php echo $settings['button_text_2']; ?></span>
                                <span><?php echo $settings['button_text_2']; ?></span>
                            </span>
                        </a>
                        <?php endif; ?>
                        <div class="hamburger_menu d-lg-none">
                            <a href="javascript:void(0);" class="active">
                                <div class="icon">
                                    <i class="far fa-bars"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header start -->
        
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <div class="header-mobile-search">
                    <form role="search" method="get" action="#">
                        <input type="text" placeholder="Search Keywords">
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
                <?php
                echo  str_replace( ['dropdown-menu'], ['submenu'] ,wp_nav_menu( array(
                    'echo' => false,
                    'menu' => $settings['main_m_nav'],
                    'walker'  => new \WP_Bootstrap_Navwalker(),
                    'items_wrap' =>'<ul id="mobile-menu-active">%3$s</ul>'
                ) ));
                ?>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->

        <?php

    }


}

Plugin::instance()->widgets_manager->register_widget_type(new sass_landing_header());
