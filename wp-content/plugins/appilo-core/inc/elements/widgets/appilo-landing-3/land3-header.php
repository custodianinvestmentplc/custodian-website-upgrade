<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Land3_Header extends Widget_Base {

   public function get_name() {
      return 'land3_header';
   }

   public function get_title() {
      return __( 'Appilo Landing 3 Header', 'appilo' );
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
            'logo_mobile',
            [
                'label' => __('Choose Custom Mobile Logo', 'appilo'),
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
            'button2_text',
            [
                'label' => __('Button Two Text', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'button2_link',
            [
                'label' => esc_html__( 'Button Two Link', 'appilo' ),
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
        
        $this->add_control(
            'main_nav_color',
            [
                'label' => esc_html__( 'Main Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-menu .navigation > li > a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'main_nav_hover_color',
            [
                'label' => esc_html__( 'Main Nav Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-menu .navigation > li > a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Main Nav Typo', 'appilo' ),
                'name' => 'main_nav_typography',
                'selector' => '{{WRAPPER}} .apl3-main-menu .navigation > li > a',
            ]
        );
        
        $this->add_control(
            'dropdown_nav_color',
            [
                'label' => esc_html__( 'Dropdown Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-menu .navigation > li > ul > li:hover > a' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_control(
			'button1_st',
			[
				'label' => esc_html__( 'Button 1 Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'btn_color',
            [
                'label' => esc_html__( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-header .apl3-header-upper .outer-box .login-btn li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hv_color',
            [
                'label' => esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-header .apl3-header-upper .outer-box .login-btn li a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Button Typo', 'appilo' ),
                'name' => 'btn_typography',
                'selector' => '{{WRAPPER}} .apl3-main-header .apl3-header-upper .outer-box .login-btn li a',
            ]
        );
        $this->add_control(
			'button2_st',
			[
				'label' => esc_html__( 'Button 2 Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'btn2_color',
            [
                'label' => esc_html__( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-header .apl3-header-upper .outer-box .login-btn li:last-child a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn2-bg_color',
            [
                'label' => esc_html__( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-header .apl3-header-upper .outer-box .login-btn li:last-child a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn2_hv_color',
            [
                'label' => esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-header .apl3-header-upper .outer-box .login-btn li:last-child a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn2_hv_bg_color',
            [
                'label' => esc_html__( 'Button Hover BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-header .apl3-header-upper .outer-box .login-btn li:last-child a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Button Typo', 'appilo' ),
                'name' => 'btn2_typography',
                'selector' => '{{WRAPPER}} .apl3-main-header .apl3-header-upper .outer-box .login-btn li a',
            ]
        );
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
       <!-- Main Header-->
        <header class="apl3-main-header">
            
            <!-- Header Upper -->
            <div class="apl3-header-upper">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        
                        <!-- Logo Box -->
                        <div class="pull-left logo-box">
                            <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $settings['logo']['url']; ?>" alt=""></a></div>
                        </div>
                        
                        <!-- Nav Outer -->
                        <div class="nav-outer clearfix">
                            
                            <!-- Mobile Navigation Toggler For Mobile -->
                            <div class="mobile-nav-toggler"><span class="icon icon fa fa-bars"></span></div>
                            <!-- End Mobile Navigation Toggler For Mobile -->
                            
                            <!-- Main Menu -->
                            <nav class="apl3-main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse scroll-nav collapse clearfix" id="navbarSupportedContent">
                                <?php
                                    echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                                        'echo' => false,
                                        'menu' => $settings['main_nav'],
                                        'walker'  => new \WP_Bootstrap_Navwalker(),
                                        'items_wrap' =>'<ul class="navigation clearfix">%3$s</ul>'
                                    ) ));
                                    ?>
                                </div>
                                
                            </nav>
                            
                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">
                                <ul class="login-btn">
                                    <?php if(!empty($settings['button_text'])):?>
                                    <li><a href="<?php echo esc_url($settings['button_link']['url']);?>"><?php echo esc_html($settings['button_text']);?></a></li>
                                    <?php endif;?>

                                    <?php if(!empty($settings['button2_text'])):?>
                                    <li><a href="<?php echo esc_url($settings['button2_link']['url']);?>"><?php echo esc_html($settings['button2_text']);?></a></li>
                                    <?php endif;?>
                                </ul>
                            </div>
                        
                        </div>
                    
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
            
            <!-- Mobile Menu  -->
            <div class="apl3-mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fas fa-times"></span></div>
                
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($settings['logo_mobile']['url']);?>" alt="" title=""></a></div>
                    
                    <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                </nav>
            </div><!-- End Mobile Menu -->
            
        </header>
        <!--End Main Header -->


        <?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new Land3_Header() );
?>