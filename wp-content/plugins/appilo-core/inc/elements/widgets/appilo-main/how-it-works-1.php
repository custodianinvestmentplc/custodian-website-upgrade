<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_how_it_works extends Widget_Base {

   public function get_name() {
      return 'appilo-how-it-works';
   }

   public function get_title() {
      return __( 'How It Works', 'appilo' );
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
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'how-it-works', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_title', [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'How does this App Work?' , 'appilo' ),
            ]
        );
        $this->add_control(
            'av_on_t', [
                'label' => __( 'Available On', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Available On' , 'appilo' ),
            ]
        );
        $this->add_control(
            'av_o_a', [
                'label' => __( 'Google Play', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'App Store' , 'appilo' ),
            ]
        );
        $this->add_control(
            'app_store', [
                'label' => __( 'App Store Link', 'appilo' ),
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
            'av_o', [
                'label' => __( 'Available On', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Available On' , 'appilo' ),
            ]
        );
        $this->add_control(
            'av_o_p', [
                'label' => __( 'Google Play', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Google Play' , 'appilo' ),
            ]
        );
        $this->add_control(
            'play_store', [
                'label' => __( 'Play Store Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
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
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_font',
                'label' => __( 'Heading Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .how-app-work-section .title h3',
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-app-work-section .title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_font',
                'label' => __( 'Title Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .how-app-work-section .single-how-app-work .text-box h4',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-app-work-section .single-how-app-work .text-box h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_font',
                'label' => __( 'Info Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .how-app-work-section .single-how-app-work .text-box p',
            ]
        );
        $this->add_control(
            'content_color',
            [
                'label' => __( 'Content Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-app-work-section .single-how-app-work .text-box p' => 'color: {{VALUE}}',
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
                'name' => 'how_works',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .how-app-work-section .single-how-app-work .icon-box .inner, 
                {{WRAPPER}} .how-app-work-section .download-btn, 
                {{WRAPPER}} .how-app-work-section .download-btn i.fab, 
                {{WRAPPER}} .how-app-work-section .download-btn span.avail, 
                {{WRAPPER}} .how-app-work-section .download-btn span.store-name, 
                {{WRAPPER}} .how-app-work-section .single-how-app-work .icon-box .inner i',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'show_label' => true,
                'selector' => '{{WRAPPER}} .how-app-work-section .single-how-app-work .icon-box .inner:hover, 
                {{WRAPPER}} .how-app-work-section .download-btn.active, {{WRAPPER}} .how-app-work-section .download-btn:hover',
            ]
        );
        $this->add_control(
            'section_bg', [
                'label' => __( 'Section Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/circle.png',
                ],
            ]
        );
        $this->add_control(
            'section_mobile', [
                'label' => __( 'Section Mobile', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/1/fature-moc.png',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow1',
                'label' => __( 'Mockup Shadow', 'appilo' ),
                'show_label' => true,
                'selector' => '{{WRAPPER}} .how-app-work-section .how-app-work-slider-wrapper',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'how_works_border',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'classic' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .how-app-work-section .how-app-work-content:before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'repeat_section',
            [
                'label' => __( 'Slides', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'works_icon', [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'works_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'List Title' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'active_item',
            [
                'label' => __( 'Active', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'deactivate',
                'options' => [
                    'active'  => __( 'Active', 'appilo' ),
                    'deactivate' => __( 'Deactivate', 'appilo' ),
                ],
            ]
        );
        $repeater->add_control(
            'works_id', [
                'label' => __( 'Works ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '0' , 'appilo' ),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'works_content', [
                'label' => __( 'Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'List Content' , 'appilo' ),
                'show_label' => false,
            ]
        );
        $repeater->add_control(
            'works_screenshot', [
                'label' => __( 'Screenshots', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'show_label' => false,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'works',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'works_title' => __( 'Make a profile', 'appilo' ),
                        'works_content' => __( 'We use a customized application tobe <br> specifically designed a testing gnose <br> to keep away for people.', 'appilo' ),
                    ],
                    [
                        'works_title' => __( 'Make a profile', 'appilo' ),
                        'works_content' => __( 'We use a customized application tobe <br> specifically designed a testing gnose <br> to keep away for people.', 'appilo' ),
                    ],
                    [
                        'works_title' => __( 'Make a profile', 'appilo' ),
                        'works_content' => __( 'We use a customized application tobe <br> specifically designed a testing gnose <br> to keep away for people.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ works_title }}}',
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        echo '<section class="how-app-work-section" ><div class="container"><div class="row">
                <div class="col-md-6 how-app-work-slider-content">
                <img src="' . $settings['section_bg']['url'] . '" class="circled-img" alt="Awesome Image"/>
                    <div class="how-app-work-slider-wrapper">
                        <div class="how-app-work-screen-mobile-image" style="background-image: url(' . $settings['section_mobile']['url'] . ');"></div>
                        <ul class="slider">';
        if ($settings['works']) {
            foreach ($settings['works'] as $slide) {
                echo '<li class="slide-item ' . $slide['_id'] . '"><img src="' . $slide['works_screenshot']['url'] . '" alt="Awesome Image"/></li>';
            }
        }
        echo '</ul></div></div>
                    <div class="col-md-6"><div class="how-app-work-content-wrap">
                        <div class="title"><h3>' . $settings['section_title'] . '</h3></div>
                            <div class="how-app-work-content" id="how-app-work-slider-pager">';

        if ($settings['works']) {

            foreach ($settings['works'] as $slide) {

                echo '<a href="#" class="pager-item ' . $slide['active_item'] . ' ' . $slide['_id'] . '" data-slide-index="' . $slide['works_id'] . '"><div class="single-how-app-work">
                                    <div class="icon-box">
                                        <div class="inner">';
                \Elementor\Icons_Manager::render_icon($slide['works_icon'], ['aria-hidden' => 'true']);
                echo '</div>
                                                    </div>
                                                        <div class="text-box">
                                                            <h4>' . $slide['works_title'] . '</h4>
                                                            <p>' . $slide['works_content'] . '</p>
                                                        </div>
                                                    </div>
                                        </a>';
            }
        }
        echo '</div>';
        if ($settings['app_store']['url']) {
            echo '<a href="' . $settings['app_store']['url'] . '" class="download-btn active">
						<i class="fab fa-apple"></i>
						<span class="inner"> <span class="avail">' . $settings['av_on_t'] . '</span> <span class="store-name">' . $settings['av_o_a'] . '</span></span>
					</a>';
        }
        if ($settings['play_store']['url']){
            echo '
					<a href="' . $settings['play_store']['url'] . '" class="download-btn">
						<i class="fab fa-google-play"></i>
						<span class="inner"><span class="avail">' . $settings['av_o'] . '</span> <span class="store-name">' . $settings['av_o_p'] . '</span></span>
					</a>';
        }
            echo '</div></div>
                </div></div></section>';
    }
    

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_how_it_works );
?>