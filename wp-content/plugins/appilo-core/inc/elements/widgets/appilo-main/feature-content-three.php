<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_feature_content_three extends Widget_Base {

   public function get_name() {
      return 'appilo-feature-content-three';
   }

   public function get_title() {
      return __( 'Feature Content Three', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'fab fa-autoprefixer';
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
            'style_switcher',
            [
                'label' => __( 'Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style2',
                'options' => [
                    'flex-row-reverse'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
            ]
        );

        $this->add_control(
            'feature_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Designed & Worked <br/> by the Latest Integration', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .intigration-section h3',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .intigration-section h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_content',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'A Private Limited is the most popular type of partnership <br/> Malta. The limited liabilityis, in fact, the only type of the <br/> company allowed by Companies.', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .intigration-section p',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .intigration-section p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_btn',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Discover', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .intigration-section a.more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_btn_icon',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-angle-right',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'feature_btn_url', [
                'label' => __( 'Feature Button Link', 'appilo' ),
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
            'feature_image_1', [
                'label' => __( 'Feature Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/intigration-1-1.png',
                ],
            ]
        );
        $this->add_control(
            'feature_image_2', [
                'label' => __( 'Feature Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/intigration-1-2.png',
                ],
            ]
        );
        $this->add_control(
            'feature_image_3', [
                'label' => __( 'Feature Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/intigration-1-3.png',
                ],
            ]
        );
        $this->add_control(
            'feature_image_4', [
                'label' => __( 'Feature Image 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/intigration-1-4.png',
                ],
            ]
        );
        $this->add_control(
            'feature_image_5', [
                'label' => __( 'Feature Image 5', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/intigration-1-5.png',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'feature_image_box_shadow',
				'label' => esc_html__( 'Feature Image Box Shadow', 'appilo' ),
				'selector' => '{{WRAPPER}} .intigration-section .intigration-img-box img:hover',
			]
		);
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section class="intigration-section" >
                    <div class="container">
                        <div class="row '.$settings['style_switcher'].'">
                            <div class="col-md-5">
                                <div class="intigration-content">
                                    <h3>'.$settings['feature_title'].'</h3>
                                    <p>'.$settings['feature_content'].'</p>
                                    <a href="'.$settings['feature_btn_url']['url'].'" class="more">'.$settings['feature_btn'].''; \Elementor\Icons_Manager::render_icon( $settings['feature_btn_icon'], [ 'aria-hidden' => 'true' ] ); echo'</a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="intigration-img-box text-right">
                                    <img src="'.$settings['feature_image_1']['url'].'" alt="Awesome Image"/>
                                    <img src="'.$settings['feature_image_2']['url'].'" alt="Awesome Image"/>
                                    <img src="'.$settings['feature_image_3']['url'].'" alt="Awesome Image"/>
                                    <img src="'.$settings['feature_image_4']['url'].'" alt="Awesome Image"/>
                                    <img src="'.$settings['feature_image_5']['url'].'" alt="Awesome Image"/>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>';
    }

    



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_feature_content_three );
?>