<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_feature_content_two extends Widget_Base {

   public function get_name() {
      return 'appilo-feature-content-two';
   }

   public function get_title() {
      return __( 'Feature Content Two', 'appilo' );
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
            'feature_icon',
            [
                'label' => __( 'Section Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
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
            Group_Control_Background::get_type(),
            [
                'name' => 'color_section',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .features-style-one .feature-style-content > i',
            ]
        );

        $this->add_control(
            'feature_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Responsive Design for All <br/> Devices with Quality', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .features-style-one .feature-style-content h3',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .features-style-one .feature-style-content h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_content',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'In order to design a mobile app that is going to be module <br/> downloaded and accessed frequently by users, you need <br/> offer an experience that isn’t available elsewhere. Often <br/> businesses get caught up.', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .features-style-one .feature-style-content p',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .features-style-one .feature-style-content p' => 'color: {{VALUE}}',
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
                    '{{WRAPPER}} .features-style-one .feature-style-content a.more' => 'color: {{VALUE}}',
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
            'feature_image', [
                'label' => __( 'Feature Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/responsive-moc.png',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section class="features-style-one" >
                    <div class="container">
                        <div class="row '.$settings['style_switcher'].'">
                        <div class="col-md-6">
                                <img src="'.$settings['feature_image']['url'].'" alt="Awesome Image"/>
                            </div>
                            <div class="col-md-6">
                            <div class="feature-style-content">';
                            \Elementor\Icons_Manager::render_icon( $settings['feature_icon'], [ 'aria-hidden' => 'true' ] );
					        echo '
					        <h3>'.$settings['feature_title'].'</h3>
					        <p>'.$settings['feature_content'].'</p>';

                            if ($settings['feature_btn_url']['url']):
					        echo '<a href="'.$settings['feature_btn_url']['url'].'" class="more">'.$settings['feature_btn'].''; \Elementor\Icons_Manager::render_icon( $settings['feature_btn_icon'], [ 'aria-hidden' => 'true' ] ); echo '</a>';
				            endif;
					        echo' </div>
			    </div>
            </div>
        </div>
    </section>';
    }

    



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_feature_content_two );
?>