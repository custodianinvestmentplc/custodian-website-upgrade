<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_engineers extends Widget_Base {

    public function get_name() {
        return 'osaas-engineers';
    }

    public function get_title() {
        return __( 'Osaas Engineers', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
    }

    protected function register_controls() {
        $this->start_controls_section(
            'features_tab',
            [
                'label' => __( 'Engineers', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Miranda H. Hall', 'appilo' ),
            ]
        );

       $repeater->add_control(
            'info',
            [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Support Engineer', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __( 'Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/smm/team/tm1.jpg',
                ],
            ]
        );
        $this->add_control(
            'service_list',
            [
                'label' => __( 'Engineer List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Miranda H. Hall', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Miranda H. Hall', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Miranda H. Hall', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Miranda H. Hall', 'appilo' ),
                    ],


                ],
                'title_field' => '{{{ title }}}',
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
                    '{{WRAPPER}} .app-osaas-engineer-block .inner-box .content .name' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-engineer-block .inner-box .content .name',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-engineer-block .inner-box .content .designation' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .app-osaas-engineer-block .inner-box .check, 
                    {{WRAPPER}} .app-osaas-engineer-block .inner-box .owl-dots .owl-dot' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-engineer-block .inner-box .content .designation',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo '<!-- Engineer Block -->
            <div class="app-osaas-engineer-block">
                <div class="inner-box">
                    <div class="check flaticon-tick-1"></div>
                    <div class="app-osaas-single-item-carousel owl-carousel owl-theme">';

              if ($settings['service_list']) {
                  foreach ($settings['service_list'] as $service) {
              echo '<div class="content">
                            <div class="image">
                                ' . get_that_image($service['image']) . '
                            </div>
                            <div class="designation">' . $service['title'] . '</div>
                            <div class="name">' . $service['info'] . '</div>
                        </div>';
                  }
              }
              echo '</div>
                </div>
            </div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_engineers );
?>