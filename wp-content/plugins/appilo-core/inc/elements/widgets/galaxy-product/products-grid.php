<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_products_grid extends Widget_Base {

   public function get_name() {
      return 'galaxy-products-grid';
   }

   public function get_title() {
      return __( 'Products Grid', 'appilo' );
   }
   public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-product-images';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Products Grid', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'post_number',
            [
                'label' => __( 'Number Of Post', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '3', 'appilo' ),
            ]
        );
        $this->add_control(
            'post_category',
            [
                'label' => __( 'Post Category', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'appilo' ),
            ]
        );
        $this->add_control(
            'read_more',
            [
                'label' => __( 'Read More', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Buy today', 'appilo' ),
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
                echo '<!-- start of product-section section -->
                    <section class="product-section" >
                        <div class="container">
                            <div class="row product-grids">';
                            echo'<div class="col col-md-4 col-6">
                                    <div class="grid">
                                        <div class="img-holder">
                                            <img src="'.get_template_directory_uri().'/img/galaxy/product-landing/products/img-1.jpg" alt class="img-fluid">
                                        </div>
                                        <div class="product-details">
                                            <h3>Galaxy Watch 0.1</h3>
                                            <p>White and silver combination watch with Aluminium white case</p>
                                            <span class="price">From $120</span>
                                            <a href="#" class="product-landing-btn-s2">'.$settings['read_more'].'</a>
                                        </div>
                                    </div>
                                </div>';
                        echo'</div> <!-- end row -->
                        </div> <!-- end container -->
                    </section>
                <!-- end of product-section section -->';
    }



    protected function content_template() {

    }

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_products_grid );
?>