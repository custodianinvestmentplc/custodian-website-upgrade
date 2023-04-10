<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_testimonial extends Widget_Base {

   public function get_name() {
      return 'osaas-testimonial';
   }

   public function get_title() {
      return __( 'Osaas Testimonial', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'serv_tab',
            [
                'label' => __('Testimonial', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'name',
            [
                'label' => __( 'Name', 'appilo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' =>  __('Ethen H. Hunt', 'appilo'),
            ]
        );
        $repeater->add_control(
            'des',
            [
                'label' => __( 'Designation', 'appilo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' =>  __('CEO of Mirax Shop & Clothing', 'appilo'),
            ]
        );
        $repeater->add_control(
            'comment',
            [
                'label' => __( 'Comment', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('“ Meet our world famous support team. They are fast, they are smart, and they will help you out any time day or night! Our Support Heroes are here for you 24/7. Supercharge your website and social media profiles. ”', 'appilo'),
            ]
        );
        $repeater->add_control(
            'photo', [
                'label' => __( 'Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/smm/team/tm1.jpg',
                ],
            ]
        );
        $this->add_control(
            'box_list',
            [
                'label' => __( 'Tab List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'default' => [
                    [
                        'name' => __( 'Ethen H. Hunt', 'appilo' ),
                    ],
                    [
                        'name' => __( 'Ethen H. Hunt', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_tabutton',
            [
                'label' => __('Tab Nav Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'atb',
                'label' =>   esc_html__( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-testimonial-section .clients-tabs .tab-btns .tab-btn',
            ]
        );
        $this->add_control(
            'abtc',
            [
                'label' =>   esc_html__( 'Name Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-testimonial-section .clients-tabs .tab-btns .tab-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'atbaaa',
                'label' =>   esc_html__( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-testimonial-section .clients-tabs .tab-btns .tab-btn span',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'atba',
                'label' =>   esc_html__( 'Comment Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-testimonial-section .text',
            ]
        );
        $this->add_control(
            'abtca',
            [
                'label' =>   esc_html__( 'Comment Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-testimonial-section .text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'abtcaaa',
            [
                'label' =>   esc_html__( 'Primary Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-testimonial-section .clients-tabs .tab-btns .tab-btn span' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .app-osaas-testimonial-section .clients-tabs .tab-btns .tab-btn:before, 
                    {{WRAPPER}} .app-osaas-testimonial-section .text:before' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .app-osaas-testimonial-section .clients-tabs .tab-btns .tab-btn:after' => 'border-top-color: {{VALUE}};',
                ],
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
                    '{{WRAPPER}} .app-osaas-testimonial-section .clients-tabs' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'style',
            [
                'label' => __( 'Template', 'appilo' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'osaas-testi-left-img' => [
                        'title' => __( 'Left Image', 'appilo' ),
                        'icon' => 'eicon-image-before-after',
                    ],
                    'osaas-testi-center-img' => [
                        'title' => __( 'Center Image', 'appilo' ),
                        'icon' => 'eicon-info-box',
                    ],
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

    echo '<!-- Testimonial Section -->
	<section class="app-osaas-testimonial-section">

        <div class="clients-info-tabs">
            <!-- Clients Tabs -->
            <div class="clients-tabs app-osaas-tabs-box '.$settings['style'].'">
                <div class="tabs-content">';
                    $index2 = 0;
                    if ( $settings['box_list'] ) {
                        foreach ($settings['box_list'] as $box) {
                            $index2++;
                            if ($index2 == 1){
                                $class2 = 'active-tab';
                            }else{
                                $class2 = '';
                            }
                echo '<div class="tab '.$class2.'" id="'.$box['_id'].'">
                            <div class="osaas-clnt-img">'.get_that_image($box['photo']).'</div>
                        <div class="text">'.$box['comment'].'</div>
                    </div>';
                        }
                    }
              echo'</div>
                
                <!--Tab Btns-->
                <ul class="tab-btns tab-buttons clearfix">';
                $index = 0;
                if ( $settings['box_list'] ) {
                    foreach ($settings['box_list'] as $box) {
                        $index++;
                        if ($index == 1){
                            $class = 'active-btn';
                        }else{
                            $class = '';
                        }

                echo '<li data-tab="#'.$box['_id'].'" class="tab-btn '.$class.'">
                        '.$box['name'].'
                        <span>'.$box['des'].'</span>
                    </li>';
                        }
                    }
                    echo'</ul>
                
            </div>
        </div>

	</section>
	<!-- End Testimonial Section -->';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_testimonial );
?>