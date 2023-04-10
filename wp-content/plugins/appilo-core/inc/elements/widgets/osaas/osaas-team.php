<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_team extends Widget_Base {

    public function get_name() {
        return 'osaas-members';
    }

    public function get_title() {
        return __( 'Osaas Team', 'appilo' );
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
                'label' => __( 'Member Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Miranda H. Kelian', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Founder & CEO', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'team_url',
            [
                'label' => __( 'Team Link', 'appilo' ),
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
            'member_photo', [
                'label' => __( 'Member Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/smm/team/tm1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_1',
            [
                'label' => __( 'Social Icon 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_1', [
                'label' => __( 'Social Link 1', 'appilo' ),
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
            'social_icon_2',
            [
                'label' => __( 'Social Icon 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-behance',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_2', [
                'label' => __( 'Social Link 2', 'appilo' ),
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
            'social_icon_3',
            [
                'label' => __( 'Social Icon 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_3', [
                'label' => __( 'Social Link 3', 'appilo' ),
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
                'label' => __( 'Member List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __( 'Miranda H. Kelian', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Miranda H. Kelian', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Miranda H. Kelian', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Miranda H. Kelian', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Miranda H. Kelian', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Miranda H. Kelian', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Miranda H. Kelian', 'appilo' ),
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
                    '{{WRAPPER}} .app-osaas-team-block .inner-box h2 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-team-block .inner-box h2 a',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-team-block .inner-box .designation' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-team-block .inner-box .designation',
            ]
        );
        $this->add_control(
            'contact_icon_color',
            [
                'label' => __( 'Contact Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-team-block .inner-box .content .social-outer-box .social-boxed .social-box li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'contact_icon_h_color',
            [
                'label' => __( 'Hover Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-team-block .inner-box .content .social-outer-box .social-boxed .social-box li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'cassa',
            [
                'label' => __( 'Primary Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-team-block .inner-box .content .social-outer-box .plus, 
                    {{WRAPPER}} .app-osaas-team-block .inner-box .content .circle-two, 
                    {{WRAPPER}} .app-osaas-team-section .owl-dots .owl-dot.active, 
                    {{WRAPPER}} .app-osaas-team-section .owl-dots .owl-dot:hover, 
                    {{WRAPPER}} .app-osaas-team-block .inner-box:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'label' => __( 'Box Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-team-block .inner-box',
            ]
        );
        $this->add_control(
            'social_bg',
            [
                'label' => __( 'Team Social BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_socials_bg',
                'label' => __( 'Team Social BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .app-osaas-team-block .inner-box .content .social-outer-box .social-boxed .social-box li.behance a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_social_bg',
                'label' => __( 'Team Social BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .app-osaas-team-block .inner-box .content .social-outer-box .social-boxed .social-box li.behance a:hover',
            ]
        );
        $this->add_control(
            'main_bg',
            [
                'label' => __( 'Team Box BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_main_bg',
                'label' => __( 'Team Box BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .app-osaas-team-block .inner-box',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_main_hover_bg',
                'label' => __( 'Team Box Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .app-osaas-team-block .inner-box:hover',
            ]
        );
        $this->add_responsive_control(
            'wrapper_margin',
            [
                'label' => __( 'Wrapper Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-team-block' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '	<!-- Team Section -->
	<section class="app-osaas-team-section">		
			<div class="app-osaas-three-item-carousel owl-carousel owl-theme">';
        if ( $settings['member_list'] ) {
            foreach ($settings['member_list'] as $members) {
            echo'<div class="app-osaas-team-block">
					<div class="inner-box">
						<div class="content">
							<div class="circle-one"></div>
							<div class="circle-two"></div>
							<div class="designation">'.$members['member_designation'].'</div>
							<div class="image">
								<a '.get_that_link($members['team_url']).'>'.get_that_image($members['member_photo']).'</a>
							</div>
							<h2><a href="team.html">'.$members['member_name'].'</a></h2>
							<div class="social-outer-box">
								<div class="plus fa fa-plus"></div>
								<div class="social-boxed">
									<ul class="social-box">';

                        echo'<li class="facebook"><a '. get_that_link($members['social_link_1']) .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                        echo'<li class="twitter"><a '. get_that_link($members['social_link_2']) .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_2'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';
                        echo'<li class="behance"><a '. get_that_link($members['social_link_3']) .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_3'], [ 'aria-hidden' => 'true' ] );echo'</a></li>';

                        echo'</ul>
								</div>
							</div>
						</div>
					</div>
				</div>';
            }
        }
        echo'</div>
	</section>
	<!-- End Team Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_team );
?>