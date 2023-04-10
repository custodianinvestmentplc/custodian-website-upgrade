<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_testimonial extends Widget_Base {

    public function get_name() {
        return 'appilo-testimonial';
    }

    public function get_title() {
        return __( 'Appilo Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fab fa-autoprefixer';
    }

    protected function register_controls() {
        $this->start_controls_section(
            'section_icon',
            [
                'label' => __( 'Testimonial', 'appilo' ),
            ]
        );
        
        $this-> add_control(
          'section_title',
          [
              'label' => __('Section Title' , 'appilo'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __( 'Some Talk of Our <br /> Honorable Clients', 'appilo' ),
          ]
        );
        $this->add_control(
            'text_color',
            [
                'label' => __( 'Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-testimonial .text-box span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'client_image', [
                'label' => __( 'Client Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/testi-1-1.png',
                ],
            ]
        );
        $repeater->add_control(
            'quote_image', [
                'label' => __( 'Quote Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/testi-qoute.png',
                ],
            ]
        );
        $repeater->add_control(
            'client_title', [
                'label' => __( 'Client Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Jhon Abraham' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'client_id', [
                'label' => __( 'Client ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '0' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'client_designation', [
                'label' => __( 'Client Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'CEO' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'client_comment', [
                'label' => __( 'Client Comments', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'The number of ICOs being launched is increasing every day. The right team can help your ICO stand out from the crowd. We\'re that team.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'testimonial_active',
            [
                'label' => __( 'Make Active', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Normal', 'appilo' ),
                'return_value' => 'active',
                'default' => '',
            ]
        );
        $this->add_control(
            'testimonial_list',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                    ],[
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                    ],[
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                    ],[
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ client_title }}}',
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'client_image_box_shadow',
				'label' => esc_html__( 'Client Image Box Shadow', 'appilo' ),
				'selector' => '{{WRAPPER}} .single-testimonial .img-box img',
			]
		);
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section class="appilo-main-testimonial testimonials-style-one" >
                    <div class="container">
                      
                        <div class="title">
                            <div class="row">
                                <div class="col-md-5"></div><!-- /.col-md-5 -->
                                <div class="col-md-7">
                                    <h3>'.$settings['section_title'].'</h3>
                                </div><!-- /.col-md-7 -->
                            </div><!-- /.row -->
                        </div><!-- /.title -->';
                            if ( $settings['testimonial_list'] ) {
                                echo '<div id="testimonials-slider-pager">';
                                foreach (  $settings['testimonial_list'] as $item ) {
                                   echo '<a href="#" class="pager-item dynamic-testimonial'.$item['_id'].' '.$item['testimonial_active'].'" data-slide-index="'.$item['client_id'].'"><img src="'.$item['client_image']['url'].'" alt="'.$item['client_title'].'"/></a>';
                                }
                                echo '</div>';
                            }
                echo '   <div class="testimonials-slider">';
                                if ( $settings['testimonial_list'] ) {
                                    echo '<ul class="slider">';
                                    foreach (  $settings['testimonial_list'] as $item ) {
                                        echo '<li class="slide-item dynamic-testimonial-item'.$item['_id'].'">
                                    <div class="single-testimonial">
                                        <div class="img-box">
                                            <img src="'.$item['client_image']['url'].'" alt="'.$item['client_title'].'"/>
                                        </div><!-- /.img-box -->
                                        <div class="text-box">
                                            <img src="'.$item['quote_image']['url'].'" alt="'.$item['client_title'].'"/>
                                            <p>'.$item['client_comment'].'</p>
                                            <h3>'.$item['client_title'].'</h3 >
                                            <span>'.$item['client_designation'].'</span >
                                        </div ><!-- /.text - box-->
                                    </div ><!-- /.single - testimonial-->
                                </li >';
                                    }
                                    echo '</ul>';
                                }
                      echo'  </div><!-- /.testimonials-slider -->
                    </div><!-- /.container -->
                </section><!-- /.testimonials-style-one -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_testimonial );
?>