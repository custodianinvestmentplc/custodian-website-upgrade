<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_search extends Widget_Base {

   public function get_name() {
      return 'appilo-search';
   }

   public function get_title() {
      return __( 'Appilo Search', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-header' ];
	}
   public function get_icon() { 
        return 'eicon-nav-menu';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Appilo Search', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
            'align',
            [
                'label' => __( 'Alignment', 'appilo' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'appilo' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .appilo-search-elements .search-box-btn' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'anav_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appilo-search-elements .search-box-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        echo '<div class="appilo-search-elements">
              <div class="search-box-btn app-osaas-search-box-outer"><span class="icon fas fa-search"></span></div>
               <!-- Search Popup -->
                <div class="search-popup">
                    <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
                    <button class="close-search"><span class="fa fa-arrow-up"></span></button>
                    <form role="search" id="searchform" method="get" action="'.home_url( '/' ).'">
                        <div class="form-group">
                            <input type="search" name="search-field" value="'.the_search_query().'" placeholder="Search Here" required="">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- End Header Search -->
             </div>';
   }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_search );
?>