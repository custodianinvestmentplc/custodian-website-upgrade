<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_intro extends Widget_Base {

    public function get_name() {
        return 'osaas-intro';
    }

    public function get_title() {
        return __( 'Osaas Intro', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-person';
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
            'member_name',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Platform Setup & Customization', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Intro Features Video', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'team_url',
            [
                'label' => __( 'Video Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=kxPCFljwJws',
                ],
            ]
        );
        $repeater->add_control(
            'member_photo', [
                'label' => __( 'Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/combine/video-img.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'icon_title_1',
            [
                'label' => __( 'Brand Title 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'iOs Device', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'social_icon_1',
            [
                'label' => __( 'Brand Icon 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_1', [
                'label' => __( 'Brand Link 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

        $repeater->add_control(
            'icon_title_2',
            [
                'label' => __( 'Brand Title 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'iOs Device', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'social_icon_2',
            [
                'label' => __( 'Brand Icon 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_2', [
                'label' => __( 'Brand Link 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

        $repeater->add_control(
            'icon_title_3',
            [
                'label' => __( 'Brand Title 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'iOs Device', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'social_icon_3',
            [
                'label' => __( 'Brand Icon 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_3', [
                'label' => __( 'Brand Link 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

        $repeater->add_control(
            'icon_title_4',
            [
                'label' => __( 'Brand Title 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'iOs Device', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'social_icon_4',
            [
                'label' => __( 'Brand Icon 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_4', [
                'label' => __( 'Brand Link 4', 'appilo' ),
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
            'member_list',
            [
                'label' => __( 'Intro List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_designation' => __( 'Intro Features Video', 'appilo' ),
                    ],
                   [
                        'member_designation' => __( 'Intro Features Video', 'appilo' ),
                    ],
                   [
                        'member_designation' => __( 'Intro Features Video', 'appilo' ),
                    ],
                   [
                        'member_designation' => __( 'Intro Features Video', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ member_name }}}',
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
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title.style-two h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .sec-title.style-two h1',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Sub Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title.style-two .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .sec-title.style-two .title',
            ]
        );

        $this->add_control(
            'ico',
            [
                'label' => __( 'Brand Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-intro-section .content-column .app-options .app-block:hover' => 'border-color: {{VALUE}}',
                    '{{WRAPPER}} .app-osaas-intro-section .content-column .app-options .app-block .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'abh_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => ['gradient' ],
                'selector' => '{{WRAPPER}} .app-osaas-intro-section .owl-nav .owl-prev:hover, 
                {{WRAPPER}} .app-osaas-intro-section .owl-nav .owl-next:hover, 
                {{WRAPPER}} .app-osaas-video-box .overlay-box span',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '	<!-- Intro Section -->
    <section class="app-osaas-intro-section">
			<div class="app-osaas-intro-feature-carousel owl-carousel owl-theme">';
            if ( $settings['member_list'] ) {
                foreach ($settings['member_list'] as $members) {
            echo'<div class="intro-block">
					<div class="inner-box">
						<div class="row clearfix">
							<!-- Video Column -->
							<div class="video-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">
									<!--Video Box-->
									<div class="app-osaas-video-box">
										<figure class="video-image">
											'.get_that_image($members['member_photo']).'
										</figure>
										<a href="'.$members['team_url']['url'].'" class="video_box overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">
									<!-- Sec Title -->
									<div class="sec-title style-two">
										<div class="title">'.$members['member_designation'].'</div>
										<h1>'.$members['member_name'].'</h1>
									</div>
									<div class="app-options clearfix">
										<!-- App Block -->
										<div class="app-block">
											<a '.get_that_link($members['social_link_1']).' class="overlay-link"></a>
											<span class="icon">';\Elementor\Icons_Manager::render_icon( $members['social_icon_1'], [ 'aria-hidden' => 'true' ] );echo'</span>
											<h6>'.$members['icon_title_1'].'</h6>
										</div>
										<!-- App Block -->
										<div class="app-block">
											<a '.get_that_link($members['social_link_2']).' class="overlay-link"></a>
											<span class="icon">';\Elementor\Icons_Manager::render_icon( $members['social_icon_2'], [ 'aria-hidden' => 'true' ] );echo'</span>
											<h6>'.$members['icon_title_2'].'</h6>
										</div>
										<!-- App Block -->
										<div class="app-block">
											<a '.get_that_link($members['social_link_3']).' class="overlay-link"></a>
											<span class="icon">';\Elementor\Icons_Manager::render_icon( $members['social_icon_3'], [ 'aria-hidden' => 'true' ] );echo'</span>
											<h6>'.$members['icon_title_3'].'</h6>
										</div>
										<!-- App Block -->
										<div class="app-block">
											<a '.get_that_link($members['social_link_4']).' class="overlay-link"></a>
											<span class="icon">';\Elementor\Icons_Manager::render_icon( $members['social_icon_4'], [ 'aria-hidden' => 'true' ] );echo'</span>
											<h6>'.$members['icon_title_4'].'</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';
                    }
                }
                echo'</div>
	</section>
	<!-- End Intro Section -->
	';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_intro );
?>