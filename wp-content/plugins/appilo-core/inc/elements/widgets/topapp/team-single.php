<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_team_single extends Widget_Base {

    public function get_name() {
        return 'topapp-team-single';
    }

    public function get_title() {
        return __( 'Team Single', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-person';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'team_items',
            [
                'label' => __( 'Member Info', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'member_title', [
                'label' => __( 'Member Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Jhon Smith' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'member_designation', [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Android Developer' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'member_url', [
                'label' => __( 'Team Member URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'member_image', [
                'label' => __( 'Team Member Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/single/team-1-1.png',
                ],
            ]
        );
        $this->add_control(
            'fb_url', [
                'label' => __( 'Facebook URL', 'appilo' ),
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
            'tw_url', [
                'label' => __( 'Twitter URL', 'appilo' ),
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
            'dr_url', [
                'label' => __( 'Dribble URL', 'appilo' ),
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
            'be_url', [
                'label' => __( 'Behance URL', 'appilo' ),
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
        $this->add_control(
            'social_share',
            [
                'label' => __( 'Social Share', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'share_background',
                'label' => __( 'Social Share', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .team-single .team-content .team-single-content .social-boxed .social-inner',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        echo '<!-- Team Section -->         
                        <div class="team-single">
                                <div class="team-content centered">
                                        <div class="image">
                                            <a href="' . $settings['member_url']['url'] . '"><img src="' . $settings['member_image']['url'] . '" alt="Member Image" /></a>
                                        </div>                         
                                    <div class="team-single-content">
                                        <h3>' . $settings['member_title'] . '</h3>
                                        <div class="designation">' . $settings['member_designation'] . '</div>
                                        <div class="social-boxed">
                                            <div class="social-inner">
                                                <span class="share-now fas fa-share-alt"></span>';
                                                    if (!empty($settings['fb_url']['url'])) {
                                                        echo '<a href="' . $settings['fb_url']['url'] . '"><span class="fab fa-facebook"></span></a>';
                                                    }
                                                    if (!empty($settings['tw_url']['url'])) {
                                                        echo '<a href="' . $settings['tw_url']['url'] . '"><span class="fab fa-twitter"></span></a>';
                                                    }
                                                    if (!empty($settings['dr_url']['url'])) {
                                                        echo '<a href="' . $settings['dr_url']['url'] . '"><span class="fab fa-dribbble"></span></a>';
                                                    }
                                                    if (!empty($settings['be_url']['url'])) {
                                                        echo '<a href="' . $settings['be_url']['url'] . '"><span class="fab fa-behance"></span></a>';
                                                    }
                                    echo '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
	<!-- End Team Section -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_team_single );
?>