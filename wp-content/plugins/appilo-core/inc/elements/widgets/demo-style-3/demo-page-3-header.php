<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_header extends Widget_Base {

   public function get_name() {
      return 'demo_3_header';
   }

   public function get_title() {
      return __( 'Demo Page 3 Header', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
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
                'default' => __('Purchase Now', 'appilo'),
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
        $this->end_controls_section();





    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>


        <!-- Start of header section
	============================================= -->
        <header id="header-id" class="thx-header-section">
            <div class="thx-header-wrapper d-flex justify-content-between align-items-center">
                <div class="thx-site-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo $settings['logo']['url']; ?>" alt="">
                    </a>
                </div>
                <div class="thx-landing-menu-item ul-li">
                    <nav class="main-navigation">
                        <?php
                        echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                            'echo' => false,
                            'menu' => $settings['main_nav'],
                            'walker'  => new \WP_Bootstrap_Navwalker(),
                            'items_wrap' =>'<ul>%3$s</ul>'
                        ) ));
                        ?>
                    </nav>
                </div>
                <div class="thx-header-btn">
                    <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['button_link']['url']; ?>">
                        <?php echo $settings['button_text']; ?><i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="mobile_menu position-relative">
                <div class="mobile_menu_button thx_open_mobile_menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="mobile_menu_wrap">
                    <div class="mobile_menu_overlay thx_open_mobile_menu"></div>
                    <div class="mobile_menu_content">
                        <div class="mobile_menu_close thx_open_mobile_menu">
                            <i class="fas fa-times"></i>
                        </div>
                        <!--                        section mobile-->
                        <div class="m-brand-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo $settings['logo']['url']; ?>" alt="">
                            </a>
                        </div>
                        <nav class="mobile-main-navigation  clearfix ul-li">
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
            </div>
            <!-- /Mobile-Menu -->
        </header>
        <!-- Start of header section
            ============================================= -->




        <?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_header() );
?>