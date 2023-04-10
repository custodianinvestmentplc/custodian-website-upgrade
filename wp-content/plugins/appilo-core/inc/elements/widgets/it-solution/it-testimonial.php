<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class it_testimonial extends Widget_Base {

    public function get_name() {
        return 'it-testimonial';
    }

    public function get_title() {
        return __( 'It Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'name', [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Lina Johnson' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'designation', [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Executive Manager' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“Get your documents out the door fast to keep deals moving with automatic notifications, on-the-fly editing, and integrated.”' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/tst1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
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
                        'name' => __( 'Lina Johnson', 'appilo' ),
                    ],
                    [
                        'name' => __( 'Lina Johnson', 'appilo' ),
                    ],
                    [
                        'name' => __( 'Lina Johnson', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'name_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-testimonial-innerbox .it-up-testi-author h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'name_colorh',
            [
                'label' => __( 'Name Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-testimonial-innerbox .it-up-testi-author h4:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'name_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-testimonial-innerbox .it-up-testi-author h4',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-testimonial-innerbox .it-up-testi-author span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-testimonial-innerbox .it-up-testi-author span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-testimonial-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-testimonial-text p',
            ]
        );
        $this->add_control(
            'nahaaa',
            [
                'label' => __( 'Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_baa',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-testimonial-pink .it-up-testi-author:before, 
                {{WRAPPER}} .it-up-testimonial-innerbox .quote-sign',
            ]
        );
        $this->add_control(
            'nav_border',
            [
                'label' => __( 'Nav Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-testimonial-slider-wrap .owl-dots .owl-dot:before' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'naha',
            [
                'label' => __( 'Nav Background Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_b',
                'label' => __( 'Nav Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-testimonial-slider-wrap .owl-dots .owl-dot',
            ]
        );
        $this->add_control(
            'baga',
            [
                'label' => __( 'Box Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'box_bg',
                'label' => __( 'Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-testimonial-innerbox',
            ]
        );
        $this->add_control(
            'bagah',
            [
                'label' => __( 'Box Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'box_bgh',
                'label' => __( 'Box Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-testimonial-innerbox:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-testimonial-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-testimonial-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_h_shadow',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-testimonial-innerbox:hover',
            ]
        );
        $this->add_responsive_control(
            'wrapper_margin',
            [
                'label' => __( 'Wrapper Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-up-testimonial-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '<!-- Start of testimonial section
	============================================= -->
	<section  class="it-up-testimonial-section">
			<div class="it-up-testimonial-content position-relative">
				<div class="it-up-testimonial-slider-wrap owl-carousel">';
        if ( $settings['testimonial_list'] ) {
            $index = 0;
            foreach ($settings['testimonial_list'] as $testimonial) {
                $index++;
                if ($index == 1){
                    $class = 'it-up-testimonial-green';
                }elseif ($index == 2){
                    $class = 'it-up-testimonial-blue';
                }else{
                    $class = 'it-up-testimonial-pink';
                }
					echo'<div class="it-up-testimonial-innerbox '.$class.' text-center">
						<div class="it-up-testimonial-img-wrap position-relative">
							<div class="it-up-testimonial-img">
								<img src="' . $testimonial['image']['url'] . '">
							</div>
							<span class="quote-sign">“</span>
						</div>
						<div class="it-up-testimonial-text pera-content headline-1">
							<p>' . $testimonial['info'] . '</p>
							<div class="it-up-testi-author position-relative">
								<h4><a '. get_that_link( $testimonial['link']).'>' . $testimonial['name'] . '</a></h4>
								<span>' . $testimonial['designation'] . '</span>
							</div>
						</div>
					</div>';
            }
        }
				echo'</div>
			</div>
	</section>		
<!-- End of testimonial section
	============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new it_testimonial );
?>