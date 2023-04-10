<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class seo_agency_progress_bar extends Widget_Base {

    public function get_name() {
        return 'seo-agency-progress-bar';
    }

    public function get_title() {
        return __( 'SEO Agency Progress Bar', 'appilo' );
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
                'default' => __( 'Email Marketing', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'skill_number',
            [
                'label' => __( 'Percentage', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '90%', 'appilo' ),
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
                        'skill_name' => __( 'Email Marketing', 'appilo' ),
                        'skill_number' => __( '90', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'Business Analysis', 'appilo' ),
                        'skill_number' => __( '80', 'appilo' ),
                    ],
                    [
                        'skill_name' => __( 'SEO Marketing', 'appilo' ),
                        'skill_number' => __( '50', 'appilo' ),
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
                    '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-right .apldg2-skills-content .apldg2-progress-item .apldg2-headline h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-right .apldg2-skills-content .apldg2-progress-item .apldg2-headline h6',
            ]
        );
        $this->add_control(
            'progress_color',
            [
                'label' => __( 'Progress Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-right .apldg2-skills-content .apldg2-progress-wrapper .progress-bar .progress' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-right .apldg2-skills-content .apldg2-progress-wrapper .progress-bar-seo-agency .progress::after' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-right .apldg2-skills-content .apldg2-progress-wrapper .progress-bar-seo-agency .progress span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'progress_bar_bg',
            [
                'label' => __( 'Progress Bar Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-right .apldg2-skills-content .apldg2-progress-wrapper .progress-bar-seo-agency' => 'background-color: {{VALUE}}',
                ],
            ]
        );



        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>
        <div class="apldg2-skills-area">
            <div class="apldg2-skills-right">
                <div class="apldg2-skills-content">
                    <?php foreach ($settings['skills_list'] as $skills): ?>
                    <div class="apldg2-progress-item">
                        <div class="apldg2-headline">
                            <h6><?php echo esc_html($skills['skill_name']); ?></h6>
                        </div>
                        <div class="apldg2-progress-wrapper">
                            <div class="progress-bar-seo-agency">
                                <div class="progress" data-percent="<?php echo $skills['skill_number']; ?>" data-color="<?php echo $settings['progress_color']; ?>">
                                    <span><?php echo $skills['skill_number']; ?>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

<?php

    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new seo_agency_progress_bar() );
?>