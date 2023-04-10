<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Landing3_Newslater extends Widget_Base {

   public function get_name() {
      return 'landing3_newslater';
   }

   public function get_title() {
      return __( 'Appilo Lading V3 Newslater', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'apl3_newslater',
            [
                'label' => __('Appilo Newslater Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
        
        $this->add_control(
			'form_shortcode',
			[
				'label' => esc_html__( 'Form Shortcode', 'appilo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
        
        
        $this->end_controls_section();
        $this->start_controls_section(
            'style_banner',
            [
                'label' => __('Banner Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'section_bg_st',
			[
				'label' => esc_html__( 'Sectiong BG Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'section_bg_cl',
            [
                'label' =>   esc_html__( 'Section Background Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-newsletter-section' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
			'heading_st',
			[
				'label' => esc_html__( 'Heading Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-newsletter-section .title-column h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-newsletter-section .title-column h2',
            ]
        );
        $this->add_control(
			'button_st',
			[
				'label' => esc_html__( 'Button Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'btn_color',
            [
                'label' =>   esc_html__( 'Button Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-newsletter-form .form-group button' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color',
            [
                'label' =>   esc_html__( 'Button BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-newsletter-form .form-group button' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hv_color',
            [
                'label' =>   esc_html__( 'Button Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-newsletter-form .form-group button:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_hv_color',
            [
                'label' =>   esc_html__( 'Button BG Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-newsletter-form .form-group button:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typo',
                'label' =>   esc_html__( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apl3-newsletter-form .form-group button',
            ]
        );
        
        $this->end_controls_section();
        

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

    <!-- Newsletter Section -->
        <section class="apl3-newsletter-section">
            <div class="auto-container">
                <div class="row clearfix">
                
                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2><?php echo __($settings['title']);?></h2>
                        </div>
                    </div>
                    
                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="apl3-newsletter-form">
                                <div class="form-group">
                                    <?php echo do_shortcode( $settings['form_shortcode'] );?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Newsletter Section -->

<?php

    }
    

}
Plugin::instance()->widgets_manager->register_widget_type( new Landing3_Newslater() );
?>