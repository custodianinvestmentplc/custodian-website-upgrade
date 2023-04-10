<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appl_counter extends Widget_Base {

   public function get_name() {
      return 'appl-counter';
   }

   public function get_title() {
      return __( 'Appilo Landing Counter', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
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
            'counter_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '6,129' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'counter_suffix', [
                'label' => __( 'Suffix', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '+' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'counter_text', [
                'label' => __( 'Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Sales' , 'appilo' ),
                'label_block' => true,
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
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'counter_fonts',
                'label' => __( 'Counter Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-product-counter .theme-dynamic-counter h1',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'counter_suffix_fonts',
                'label' => __( 'Suffix Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-product-counter .theme-dynamic-counter span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'gradient_color',
                'label' => __( 'Main Color', 'appilo' ),
                'types' => [  'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appl-product-counter .theme-dynamic-counter h1, {{WRAPPER}} .appl-product-counter .theme-dynamic-counter .plus',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'api_sales',
            [
                'label' => __( 'Envato Sales', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'envato_api', [
                'label' => __( 'API', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'c0KnuA176IYMs5BX8PNJRjMFPrFIQQm8' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'envato_username', [
                'label' => __( 'Username', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'themexriver' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $envato_api_key =  $settings['envato_api'];
        $envato_username =  $settings['envato_username'];
        //API

            $personal_token = "$envato_api_key";
//set header for API
            $personal_token   = 'Bearer ' .$personal_token;
            $api_header   = array();
            $api_header[] = 'Content-length: 0';
            $api_header[] = 'Content-type: application/json; ch_themearset=utf-8';
            $api_header[] = 'Authorization: ' . $personal_token;

            $user_id = "$envato_username";
            $api_url = 'https://api.envato.com/v1/market/user:'.$user_id.'.json';

//START GET DATA FROM API
            $api_init_item = curl_init();

            curl_setopt($api_init_item, CURLOPT_URL, $api_url );
            curl_setopt( $api_init_item, CURLOPT_HTTPHEADER, $api_header );
            curl_setopt( $api_init_item, CURLOPT_SSL_VERIFYPEER, false );
            curl_setopt($api_init_item, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt( $api_init_item, CURLOPT_CONNECTTIMEOUT, 5 );
            curl_setopt( $api_init_item, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

            $api_item_results = curl_exec($api_init_item);
            $api_item_results = json_decode($api_item_results, true);

            $total_sale = $api_item_results['user'];
            $total_sale[] = $total_sale;
            $total_sale = $total_sale['sales'];



        echo '
        <section  class="appl-product-counter">
                <div class="theme-dynamic-counter text-center">
                    <h1 class="counter">' . $settings['counter_number'] . ' '.$total_sale.' </h1><span class="plus">' . $settings['counter_suffix'] . '  </span><span>' . $settings['counter_text'] . '</span>
                </div>
        </section>
        ';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appl_counter );
?>