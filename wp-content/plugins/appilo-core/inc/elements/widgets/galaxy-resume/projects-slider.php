<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_projects_slider extends Widget_Base {

    public function get_name() {
        return 'galaxy-projects-slider';
    }

    public function get_title() {
        return __( 'Projects Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slides';
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
            'project_title',
            [
                'label' => __( 'Project Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Winning and retaining clients', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'project_info',
            [
                'label' => __( 'Project Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We use a customized machine been to specifically designed.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'project_img', [
                'label' => __( 'Project Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/agency/projects/img-1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'project_btn',
            [
                'label' => __( 'Project Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'View', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'project_btn_icon',
            [
                'label' => __( 'Project Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'project_link',
            [
                'label' => __( 'Project Link', 'appilo' ),
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
            'projects_list',
            [
                'label' => __( 'Projects List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'project_img' => get_template_directory_uri(). '/img/galaxy/agency/projects/img-1.jpg',
                        'project_title' => __('Winning and retaining clients', 'appilo'),
                        'project_info' => __('We use a customized machine been to specifically designed.', 'appilo'),
                        'project_link' => __('#', 'appilo'),
                        'project_btn' => __('View', 'appilo'),
                        'project_btn_icon' => __('fas fa-arrow-right', 'appilo'),
                    ],
                    [
                        'project_img' => get_template_directory_uri(). '/img/galaxy/agency/projects/img-1.jpg',
                        'project_title' => __('Winning and retaining clients', 'appilo'),
                        'project_info' => __('We use a customized machine been to specifically designed.', 'appilo'),
                        'project_link' => __('#', 'appilo'),
                        'project_btn' => __('View', 'appilo'),
                        'project_btn_icon' => __('fas fa-arrow-right', 'appilo'),
                    ],
                    [
                        'project_img' => get_template_directory_uri(). '/img/galaxy/agency/projects/img-1.jpg',
                        'project_title' => __('Winning and retaining clients', 'appilo'),
                        'project_info' => __('We use a customized machine been to specifically designed.', 'appilo'),
                        'project_link' => __('#', 'appilo'),
                        'project_btn' => __('View', 'appilo'),
                        'project_btn_icon' => __('fas fa-arrow-right', 'appilo'),
                    ],
                    [
                        'project_img' => get_template_directory_uri(). '/img/galaxy/agency/projects/img-1.jpg',
                        'project_title' => __('Winning and retaining clients', 'appilo'),
                        'project_info' => __('We use a customized machine been to specifically designed.', 'appilo'),
                        'project_link' => __('#', 'appilo'),
                        'project_btn' => __('View', 'appilo'),
                        'project_btn_icon' => __('fas fa-arrow-right', 'appilo'),
                    ],
                    [
                        'project_img' => get_template_directory_uri(). '/img/galaxy/agency/projects/img-1.jpg',
                        'project_title' => __('Winning and retaining clients', 'appilo'),
                        'project_info' => __('We use a customized machine been to specifically designed.', 'appilo'),
                        'project_link' => __('#', 'appilo'),
                        'project_btn' => __('View', 'appilo'),
                        'project_btn_icon' => __('fas fa-arrow-right', 'appilo'),
                    ],
                    [
                        'project_img' => get_template_directory_uri(). '/img/galaxy/agency/projects/img-1.jpg',
                        'project_title' => __('Winning and retaining clients', 'appilo'),
                        'project_info' => __('We use a customized machine been to specifically designed.', 'appilo'),
                        'project_link' => __('#', 'appilo'),
                        'project_btn' => __('View', 'appilo'),
                        'project_btn_icon' => __('fas fa-arrow-right', 'appilo'),
                    ],
                    [
                        'project_img' => get_template_directory_uri(). '/img/galaxy/agency/projects/img-1.jpg',
                        'project_title' => __('Winning and retaining clients', 'appilo'),
                        'project_info' => __('We use a customized machine been to specifically designed.', 'appilo'),
                        'project_link' => __('#', 'appilo'),
                        'project_btn' => __('View', 'appilo'),
                        'project_btn_icon' => __('fas fa-arrow-right', 'appilo'),
                    ],

                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start of agency-projects section -->
                <section class="agency-projects">
                    <div class="agnecy-projects-slider agency-project-grids owl-carousel">';
                    if ( $settings['projects_list'] ) {
                        foreach ($settings['projects_list'] as $project) {
                            echo ' <div class="grid">
                            <div class="img-holder">
                                <img src="'.$project['project_img']['url'].'" alt>
                            </div>
                            <div class="details">
                                <h3>'.$project['project_title'].'</h3>
                                <p>'.$project['project_info'].'</p>
                                <a href="'.$project['project_link']['url'].'" class="view">'.$project['project_btn'].''; \Elementor\Icons_Manager::render_icon( $project['project_btn_icon'], [ 'aria-hidden' => 'true' ] ); echo'</a>
                            </div>
                        </div>';
                        }
                    }
                    echo'</div>
                </section>
            <!-- end of agency-projects section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_projects_slider );
?>