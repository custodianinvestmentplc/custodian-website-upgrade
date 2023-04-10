<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_team extends Widget_Base {

    public function get_name() {
        return 'topapp-team';
    }

    public function get_title() {
        return __( 'Team', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-skill-bar';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Team Section', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>Te</span>am member', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Really we have <span>an ex</span>p<span>ert</span> team <br> to develop many apps!', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'team_items',
            [
                'label' => __( 'Team Items', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'member_title', [
                'label' => __( 'Member Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Jhon Smith' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'border_style',
            [
                'label' => __( 'Border Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style-one',
                'options' => [
                    'style-one'  => __( 'Style One', 'appilo' ),
                    'style-two' => __( 'Style Two', 'appilo' ),
                    'style-three' => __( 'Style Three', 'appilo' ),
                ],
            ]
        );

        $repeater->add_control(
            'member_designation', [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Android Developer' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
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
        $repeater->add_control(
            'member_image', [
                'label' => __( 'Team Member Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/resource/team-2.png',
                ],
            ]
        );
        $repeater->add_control(
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
        $repeater->add_control(
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
        $repeater->add_control(
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
        $repeater->add_control(
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
        $this->add_control(
            'team_list',
            [
                'label' => __( 'Team List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_title' => __( 'Jhon Smith', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                        'fb_url' => __( '#', 'appilo' ),
                        'tw_url' => __( '#', 'appilo' ),
                        'dr_url' => __( '#', 'appilo' ),
                        'be_url' => __( '#', 'appilo' ),
                    ],
                    [
                        'member_title' => __( 'Jhon Smith', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                        'fb_url' => __( '#', 'appilo' ),
                        'tw_url' => __( '#', 'appilo' ),
                        'dr_url' => __( '#', 'appilo' ),
                        'be_url' => __( '#', 'appilo' ),
                    ],
                    [
                        'member_title' => __( 'Jhon Smith', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                        'fb_url' => __( '#', 'appilo' ),
                        'tw_url' => __( '#', 'appilo' ),
                        'dr_url' => __( '#', 'appilo' ),
                        'be_url' => __( '#', 'appilo' ),
                    ],
                    [
                        'member_title' => __( 'Jhon Smith', 'appilo' ),
                        'member_designation' => __( 'Android Developer', 'appilo' ),
                        'fb_url' => __( '#', 'appilo' ),
                        'tw_url' => __( '#', 'appilo' ),
                        'dr_url' => __( '#', 'appilo' ),
                        'be_url' => __( '#', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ member_title }}}',
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
// Animation Variable
        $dot_animation_3 = '<div class="ct-dot-animated">
                            <div class="ct-dot-container">
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                                <div class="ct-dot-item">
                                    <span></span>
                                </div>
                            </div>
                        </div>';
        $this->add_control(
            'dot_animation_enable_3',
            [
                'label' => __( 'Turn Dot Animation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'appilo' ),
                'label_off' => __( 'Hide', 'appilo' ),
                'return_value' => $dot_animation_3,
                'default' => '',
            ]
        );
        $this->add_control(
            'section_gradient',
            [
                'label' => __( 'Section Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Section Gradient', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .topapp-sec-title .title:before, 
                {{WRAPPER}} .topapp-sec-title h2 span:before',
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
                'selector' => '{{WRAPPER}} .team-block .inner-box .lower-content .social-boxed .social-inner',
            ]
        );
        $this->add_control(
            'border_1_gradient',
            [
                'label' => __( 'Border Style 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'border_1_background',
                'label' => __( 'Border Style 1', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .team-block .inner-box .image:before',
            ]
        );
        $this->add_control(
            'border_2_gradient',
            [
                'label' => __( 'Border Style 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'border_2_background',
                'label' => __( 'Border Style 2', 'appilo' ),
                'types' => [ 'gradient' , 'classic'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .team-block.style-two .inner-box .image:before',
            ]
        );
        $this->add_control(
            'border_3_gradient',
            [
                'label' => __( 'Border Style 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'border_3_background',
                'label' => __( 'Border Style 3', 'appilo' ),
                'types' => [ 'gradient' , 'classic'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .team-block.style-three .inner-box .image:before',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        echo '<!-- Team Section -->
        <section class="team-section" >
            <div class="auto-container">
                
               '.$settings['dot_animation_enable_3'].'
                
                <div class="topapp-sec-title centered">
                    <div class="title">'.$settings['section_title'].'</div>
                    <h2>'.$settings['section_heading'].'</h2>
                </div>
                
                <div class="topapp-team-carousel owl-carousel owl-theme">';
                    if ( $settings['team_list'] ) {
                        foreach ($settings['team_list'] as $team_member) {
                            echo '<div class="team-block ' . $team_member['border_style'] . ' dynamic-member-' . $team_member['_id'] . '">
                                <div class="inner-box">
                                    <div class="image-outer">
                                        <div class="image">
                                            <a href="' . $team_member['member_url']['url'] . '"><img src="' . $team_member['member_image']['url'] . '" alt="Member Image" /></a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3>' . $team_member['member_title'] . '</h3>
                                        <div class="designation">' . $team_member['member_designation'] . '</div>
                                        <div class="social-boxed">
                                            <div class="social-inner">
                                                <span class="share-now fas fa-share-alt"></span>';
                                                if (!empty($team_member['fb_url']['url'])) {
                                                    echo '<a href="' . $team_member['fb_url']['url'] . '"><span class="fab fa-facebook"></span></a>';
                                                }
                                                if (!empty($team_member['tw_url']['url'])) {
                                                    echo '<a href="' . $team_member['tw_url']['url'] . '"><span class="fab fa-twitter"></span></a>';
                                                }
                                                if (!empty($team_member['dr_url']['url'])) {
                                                    echo '<a href="' . $team_member['dr_url']['url'] . '"><span class="fab fa-dribbble"></span></a>';
                                                }
                                                if (!empty($team_member['be_url']['url'])) {
                                                    echo '<a href="' . $team_member['be_url']['url'] . '"><span class="fab fa-behance"></span></a>';
                                                }
                                            echo '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
               echo' </div>
                
            </div>
        </section>
	<!-- End Team Section -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_team );
?>