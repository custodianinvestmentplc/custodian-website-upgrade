<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bx_progress_bar extends Widget_Base {

    public function get_name() {
        return 'bx-progress-bar';
    }

    public function get_title() {
        return __( 'Business Expert Progress Bar', 'appilo' );
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
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'skill_name',
            [
                'label' => __( 'Progress Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Investment Plan', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'skill_number',
            [
                'label' => __( 'Percentage', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '95%', 'appilo' ),
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
                        'skill_name' => __( 'Investment Plan', 'appilo' ),
                        'skill_number' => __( '80', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'Banking Solution', 'appilo' ),
                        'skill_number' => __( '90', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'Mutual Solution', 'appilo' ),
                        'skill_number' => __( '70', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'Investment Plan', 'appilo' ),
                        'skill_number' => __( '80', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ skill_name }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_tsc',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-progress-item .apbc-headline h6' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .apbc-skills-section .apbc-skills-right .progress-bar .progress span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apbc-progress-item .apbc-headline h6',
            ]
        );
        $this->add_control(
            'progress_color',
            [
                'label' => __( 'Progress Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-skills-section .apbc-skills-right .progress-bar-vb .progress-dx::after' => 'border-bottom-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'progress_bar_bg',
            [
                'label' => __( 'Progress Bar Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-skills-section .apbc-skills-right .progress-bar-vb' => 'background-color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();


        echo '<div class="apbc-skills-section">  
                <div class="apbc-skills-right">';

                if ( $settings['skills_list'] ) {
                    foreach ($settings['skills_list'] as $skills) {

                    echo' <div class="apbc-progress-item">
                    <div class="apbc-headline">
                        <h6>'.$skills['skill_name'].'</h6>
                    </div>
                    <div class="apbc-progress-wrapper">
                        <div class="progress-bar-vb">
                            <div class="progress-dx" data-percent="'.$skills['skill_number'].'" data-color="'. $settings['progress_color'].'">
                                <span>'.$skills['skill_number'].'%</span>
                            </div>
                        </div>
                    </div>
                </div>';
                }
            }
        echo'</div>
        </div>';


    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new bx_progress_bar() );
?>