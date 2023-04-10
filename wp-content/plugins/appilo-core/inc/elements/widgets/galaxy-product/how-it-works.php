<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_how_it_works extends Widget_Base {

    public function get_name() {
        return 'galaxy-how-it-works';
    }

    public function get_title() {
        return __( 'How It Works', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-plus';
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
            'section_photo', [
                'label' => __( 'Section Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/product-landing/how-its-work-watchs.png',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'work_icon',
            [
                'label' => __( 'Service Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-user',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .p-landing-how-its-work-section .box .icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $repeater->add_control(
            'upload_icon', [
                'label' => __( 'Upload Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/product-landing/how-its-work-icons/icon-1.png',
                ],
            ]
        );
        $repeater->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Light Weight', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'appilo' ),
            ]
        );
        $this->add_control(
            'work_list',
            [
                'label' => __( 'Work List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'work_icon' => __( 'fas fa-user', 'appilo' ),
                        'heading' => __( 'Light Weight', 'appilo' ),
                        'info' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ heading }}}',
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start of how-its-work-section -->
                <section class="p-landing-how-its-work-section" >
                    <div class="container">
                        <div class="row content">
                            <div class="col col-md-6 offset-md-6">';

                        if ( $settings['work_list'] ) {
                            foreach ($settings['work_list'] as $works) {
                                echo' <div class="box">
                                    <div class="icon">';
                                        echo'<img src="'.$works['upload_icon']['url'].'" alt>';
                                        \Elementor\Icons_Manager::render_icon($works['work_icon'], ['aria-hidden' => 'true']);
                                        echo'<div class="line"><div class="dot"></div></div>
                                    </div>
                                    <div class="dtails">
                                        <h3>'.$works['heading'].'</h3>
                                        <p>'.$works['info'].'</p>
                                    </div>
                                </div>';
                            }
                        }
                            echo' </div>
                
                            <div class="left-watches">
                                <img class="img-fluid" src="'.$settings['section_photo']['url'].'" alt="Left Watch">
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </section>
                <!-- end of how-its-work-section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_how_it_works );
?>