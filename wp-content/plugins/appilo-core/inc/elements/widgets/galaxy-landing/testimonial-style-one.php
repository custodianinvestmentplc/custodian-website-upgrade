<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class testimonial_one extends Widget_Base {

    public function get_name() {
        return 'galaxy-testimonial-one';
    }

    public function get_title() {
        return __( 'Testimonial Style One', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-posts-carousel';
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
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'testimonials', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'vendor_name',
            [
                'label' => __( 'Vendor Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Tahira Sharif', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'vendor_comment',
            [
                'label' => __( 'Vendor Comment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blinds  and Separated they live in Bookmarks grove right at the coast of the Semantics, language ocean.”', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'vendor_info',
            [
                'label' => __( 'Vendor Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Chairman, Kollol Company LTD.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'vendor_image', [
                'label' => __( 'Vendor Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/app-landing/testimonials/img-1.jpg',
                ],
            ]
        );
        $this->add_control(
            'testimonials_list',
            [
                'label' => __( 'Testimonials List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'vendor_name' => __( 'Tahira Sharif', 'appilo' ),
                        'vendor_info' => __( 'Chairman, Kollol Company LTD.', 'appilo' ),
                        'vendor_comment' => __( '“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blinds  and Separated they live in Bookmarks grove right at the coast of the Semantics, language ocean.”', 'appilo' ),
                        'vendor_image' => get_template_directory_uri(). '/img/galaxy/app-landing/testimonials/img-1.jpg',
                    ],
                ],
                'title_field' => '{{{ vendor_name }}}',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start app-landing-testimonials -->
            <section class="app-landing-testimonials"  >
                    <div class="content">
                            <div class="app-landing-testimonials-slider dots-style1 owl-carousel">';
                        if ( $settings['testimonials_list'] ) {
                            foreach ($settings['testimonials_list'] as $testimonials) {
                            echo'<div class="box">
                                    <div class="client-quote">
                                        <p>'.$testimonials['vendor_comment'].'</p>
                                    </div>
                                    <div class="client-info">
                                        <div class="img-holder">
                                            <img src="'.$testimonials['vendor_image']['url'].'" alt="'.$testimonials['vendor_name'].'">
                                        </div>
                                        <div class="client-details">
                                            <h5>'.$testimonials['vendor_name'].'</h5>
                                            <span>'.$testimonials['vendor_info'].'</span>
                                        </div>
                                    </div>
                                </div>';
                                }
                            }
                            echo'</div> <!-- end app-landing-testimonials-slider -->
                    </div> <!-- end content -->
            </section>
<!-- end app-landing-testimonials -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new testimonial_one );
?>