<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_testimonial extends Widget_Base {

    public function get_name() {
        return 'toapp-testimonial';
    }

    public function get_title() {
        return __( 'Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-editor-quote';
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
              'default' => __( '<span>Te</span>stimonials', 'appilo' ),
          ]
        );
        $this-> add_control(
          'section_heading',
          [
              'label' => __('Section Heading' , 'appilo'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __( 'Clients choice us because our app<span>lication is the best!', 'appilo' ),
          ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'client_image', [
                'label' => __( 'Client Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri().'/img/topapp/resource/author-thumb-2.jpg',
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
            'client_icons',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-square',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'client_comment', [
                'label' => __( 'Client Comments', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“ Lorem Ipsum is simply dummy text of the printing and type <br> setting industry. Lorem Ipsum has been the industrys stan  <br> dard dummy text ever since. ”' , 'appilo' ),
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
                        'client_id' => __( '0', 'appilo' ),
                        'testimonial_active' => __( 'active', 'appilo' ),
                        'client_designation' => __( 'CEO', 'appilo' ),
                        'client_comment' => __( 'The number of ICOs being launched is increasing every day. The right team can help your ICO stand out from the crowd. We\'re that team.', 'appilo' ),
                    ],
                    [
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                        'client_id' => __( '1', 'appilo' ),
                        'client_designation' => __( 'CEO', 'appilo' ),
                        'client_comment' => __( 'The number of ICOs being launched is increasing every day. The right team can help your ICO stand out from the crowd. We\'re that team.', 'appilo' ),
                    ],
                    [
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                        'client_id' => __( '2', 'appilo' ),
                        'client_designation' => __( 'CEO', 'appilo' ),
                        'client_comment' => __( 'The number of ICOs being launched is increasing every day. The right team can help your ICO stand out from the crowd. We\'re that team.', 'appilo' ),
                    ],
                    [
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                        'client_id' => __( '3', 'appilo' ),
                        'client_designation' => __( 'CEO', 'appilo' ),
                        'client_comment' => __( 'The number of ICOs being launched is increasing every day. The right team can help your ICO stand out from the crowd. We\'re that team.', 'appilo' ),
                    ],
                    [
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                        'client_id' => __( '4', 'appilo' ),
                        'client_designation' => __( 'CEO', 'appilo' ),
                        'client_comment' => __( 'The number of ICOs being launched is increasing every day. The right team can help your ICO stand out from the crowd. We\'re that team.', 'appilo' ),
                    ],
                    [
                        'client_title' => __( 'Jhon Abraham', 'appilo' ),
                        'client_id' => __( '5', 'appilo' ),
                        'client_designation' => __( 'CEO', 'appilo' ),
                        'client_comment' => __( 'The number of ICOs being launched is increasing every day. The right team can help your ICO stand out from the crowd. We\'re that team.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ client_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Background', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_gradient',
            [
                'label' => __( 'Section Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Section Gradient', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .testimonials-thumbs-carousel .sec-title.style-four .title:before, 
                {{WRAPPER}} .testimonials-thumbs-carousel .sec-title.style-four h2 span:before',
            ]
        );
        $this->add_control(
            'section_patternt_bg',
            [
                'label' => __( 'Pattern Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_patternt',
                'label' => __( 'Section Gradient', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .testimonial-block .inner-box .slide-info:before',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-9.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Testimonials Section -->
    <section class="testimonials-thumbs-carousel" >
    	<div class="auto-container">
        	
			<!-- Carousel Wrapper -->
			<div id="carousel-thumb" class="carousel slide carousel-thumbnails" data-ride="carousel">
				<div class="row clearfix">
				
					<div class="pagers-column col-lg-6 col-md-12 col-sm-12">
						<div class="pattern-layer" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
						<!-- Controls-->
						<ol class="carousel-indicators">';
                            if ( $settings['testimonial_list'] ) {
                                foreach ($settings['testimonial_list'] as $testimonial_item) {
                                    echo '<li data-target="#carousel-thumb" data-slide-to="' . $testimonial_item['client_id'] . '" class="' . $testimonial_item['testimonial_active'] . ' dynamic-testimonial-thumb'.$testimonial_item['_id'] .'"> <div class="image img-circle"><img src="'.$testimonial_item['client_image']['url'].'" alt="Client Image Thumb"></div></li>';
                                }
                            }
                        echo'</ol>
					</div>
				
					<div class="carousel-column col-lg-6 col-md-12 col-sm-12">
						<div class="topapp-sec-title style-four">
							<div class="title">'.$settings['section_title'].'</div>
							<h2>'.$settings['section_heading'].'</span></h2>
						</div>
						<!-- Slides -->
						<div class="carousel-inner" role="listbox">';

                            if ( $settings['testimonial_list'] ) {
                                foreach (  $settings['testimonial_list'] as $testimonial_item ) {
                                    echo'<div class="carousel-item ' . $testimonial_item['testimonial_active'] . ' dynamic-testimonial-list'.$testimonial_item['_id'] .'">
                                            <div class="testimonial-block">
                                                <div class="inner-box">
                                                    <div class="author-image">
                                                        <span class="social-icon">';\Elementor\Icons_Manager::render_icon( $testimonial_item['client_icons'], [ 'aria-hidden' => 'true' ] );echo'</span>
                                                        <img src="'.$testimonial_item['client_image']['url'].'" alt="Client Image" />
                                                    </div>
                                                    <div class="quote-icon icons-right-quote-sign"></div>
                                                    <div class="slide-text">'.$testimonial_item['client_comment'].'</div>
                                                    <div class="slide-info">
                                                        <h4 class="author-title">'.$testimonial_item['client_title'].'</h4>
                                                        <div class="designation">'.$testimonial_item['client_designation'].'</div>
                                                    </div>
                                                </div>
                                            </div>
							            </div>';
                                }
                            }

					echo'	<a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						
					</div>
					
				</div>
			</div>
			    
        </div>
    </section>
	<!-- End Testimonials Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_testimonial );
?>