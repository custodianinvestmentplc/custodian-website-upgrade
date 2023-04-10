<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class testimonial_two extends Widget_Base {

    public function get_name() {
        return 'galaxy-testimonial-two';
    }

    public function get_title() {
        return __( 'Testimonial Style Two', 'appilo' );
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
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Chairman, Kollol Company LTD.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'vendor_rating',
            [
                'label' => __( 'Vendor Rating', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '  <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>', 'appilo' ),
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
                    [
                        'vendor_name' => __( 'Tahira Sharif', 'appilo' ),
                        'vendor_info' => __( 'Chairman, Kollol Company LTD.', 'appilo' ),
                        'vendor_comment' => __( '“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blinds  and Separated they live in Bookmarks grove right at the coast of the Semantics, language ocean.”', 'appilo' ),
                        'vendor_image' => get_template_directory_uri(). '/img/galaxy/app-landing/testimonials/img-1.jpg',
                    ],
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
        $this->add_control(
            'margin',
            [
                'label' => __( 'Content Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .agency-testimonials .agency-testimonial-single .box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'style_switcher_1',
            [
                'label' => __( 'Style Switcher', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'multiple' => true,
                'options' => [
                    'style1'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
                'default' => 'style1',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    $style = $settings['style_switcher_1'];
if($style == 'style1'){


        echo '<!-- start of agency-testimonials section -->
                <section class="agency-testimonials galaxy" >        
                        <div class="row">
                            <div class="col col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <div class="agency-testimonial-slider dots-style1 owl-carousel">';

                            if ( $settings['testimonials_list'] ) {
                                foreach ($settings['testimonials_list'] as $testimonials) {
                                    echo'<div class="box">
                                        <div class="client-pic">
                                            <img src="'.$testimonials['vendor_image']['url'].'" alt>
                                        </div>
                                        <div class="client-quote">
                                            <div class="rating">
                                                '.$testimonials['vendor_rating'].'
                                            </div>
                                            <p>'.$testimonials['vendor_comment'].'</p>
                                        </div>
                                        <div class="client-info">
                                            <h5>'.$testimonials['vendor_name'].'</h5>
                                            <span>'.$testimonials['vendor_info'].'</span>
                                        </div>
                                    </div>';
                                        }
                                    }
                               echo' </div>
                            </div>
                        </div> <!-- end row -->
                </section>
            <!-- end of agency-testimonials section -->';
        }else{
    echo '<!-- start of agency-testimonials section -->
<section class="agency-testimonials" >        
   <div class="agency-testimonial-single dots-style1">
     <div class="row">';

    if ( $settings['testimonials_list'] ) {
        foreach ($settings['testimonials_list'] as $testimonials) {
            echo'<div class="col-md-4">
                    <div class="box">
                            <div class="client-pic">
                                <img src="'.$testimonials['vendor_image']['url'].'" alt>
                            </div>
                            <div class="client-quote">
                                <div class="rating">
                                    '.$testimonials['vendor_rating'].'
                                </div>
                                <p>'.$testimonials['vendor_comment'].'</p>
                            </div>
                            <div class="client-info">
                                <h5>'.$testimonials['vendor_name'].'</h5>
                                <span>'.$testimonials['vendor_info'].'</span>
                            </div>
                        </div>
                     </div>';
                }
            }

    echo' </div>
    </div>
</section>
<!-- end of agency-testimonials section -->';

}


    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new testimonial_two );
?>