<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_progress_bar extends Widget_Base {

    public function get_name() {
        return 'galaxy-progress-bar';
    }

    public function get_title() {
        return __( 'Progress Bar', 'appilo' );
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
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'progress_bg',
                'label' => __( 'Progress Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .progress-bar-s1 .progress-bar',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'skill_name',
            [
                'label' => __( 'WordPress', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'James Powel', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'skill_number',
            [
                'label' => __( 'Percentage', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '95', 'appilo' ),
            ]
        );
        $this->add_control(
            'skills_list',
            [
                'label' => __( 'Skills List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'skill_name' => __( 'WordPress', 'appilo' ),
                        'skill_number' => __( '95', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'WordPress', 'appilo' ),
                        'skill_number' => __( '95', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'WordPress', 'appilo' ),
                        'skill_number' => __( '95', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'WordPress', 'appilo' ),
                        'skill_number' => __( '95', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'WordPress', 'appilo' ),
                        'skill_number' => __( '95', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ skill_name }}}',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start app-tem-members -->
            <section class="app-tem-members">
                <div class="skill-row">
                        <div class="progress-bar-s1">';
                            if ( $settings['skills_list'] ) {
                                foreach ($settings['skills_list'] as $skills) {
                                echo' <div class="skill">
                                                <h6>'.$skills['skill_name'].'</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" data-percent="'.$skills['skill_number'].'"></div>
                                                </div>
                                            </div>';
                                        }
                                    }
                        echo'</div>
                    </div>
              </section>
            <!-- end app-tem-members -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_progress_bar );
?>