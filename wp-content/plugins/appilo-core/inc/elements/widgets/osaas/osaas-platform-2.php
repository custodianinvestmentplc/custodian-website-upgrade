<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_platform2 extends Widget_Base {

   public function get_name() {
      return 'osaas-platform2';
   }

   public function get_title() {
      return __( 'Osaas Platform 2', 'appilo' );
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
                'label' => __('Platform Tab 2', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'tab_title',
            [
                'label' => __( 'Tab Title', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('Messanger', 'appilo'),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-messenger',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'a_img',
            [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/platform-1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'a_img2',
            [
                'label' => __('Image 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/platform-2.png',
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
                        'tab_title' => __( 'Messanger', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Messanger', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Messanger', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Messanger', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Messanger', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Messanger', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Messanger', 'appilo' ),
                    ],
                    [
                        'tab_title' => __( 'Messanger', 'appilo' ),
                    ],


                ],
                'title_field' => '{{{ tab_title }}}',
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
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-platform-section .platform-tabs .tab-btns .tab-btn',
            ]
        );
        $this->add_control(
            'abtc',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-platform-section .platform-tabs .tab-btns .tab-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'abtcaa',
            [
                'label' =>   esc_html__( 'Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-platform-section .platform-tabs .tab-btns .tab-btn .icon' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'aaabbbb_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .app-osaas-platform-section .platform-tabs .tab-btns .tab-btn .icon',
            ]
        );
        $this->add_control(
            'abtca',
            [
                'label' =>   esc_html__( 'Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-platform-section .platform-tabs .tab-btns .tab-btn.active-btn .icon' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'aaabbbab_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .app-osaas-platform-section .platform-tabs .tab-btns .tab-btn.active-btn .icon',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

    echo '	<!-- Platform Section -->
	<section class="app-osaas-platform-section">
		
			<!-- Platform Info Tabs -->
			<div class="platform-info-tabs">
				<!-- Platform Tabs -->
				<div class="platform-tabs app-osaas-tabs-box">
				
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
							<span class="icon">';
                          \Elementor\Icons_Manager::render_icon($box['icon'], ['aria-hidden' => 'true']);
                          echo '</span><br>
							'.$box['tab_title'].'
						</li>';
                        }
                    }
                    echo'</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						';
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
							<div class="content">
								<div class="image">
									'.get_that_image($box['a_img']).'
								</div>
								<div class="image-two">
									'.get_that_image($box['a_img2']).'
								</div>
							</div>
						</div>';
                        }
                    }
                    echo'</div>
				</div>
			</div>
			
	</section>
	<!-- End Platform Section -->
	';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_platform2 );
?>