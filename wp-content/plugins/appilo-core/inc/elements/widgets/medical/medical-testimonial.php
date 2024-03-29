<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class medi_testimonial extends Widget_Base {

    public function get_name() {
        return 'medi-testimonial';
    }

    public function get_title() {
        return __( 'Medical Testimonial', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
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
            'name', [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Lina Johnson' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'designation', [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Executive Manager' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Easily organize your infrastructure with Projects. And with Teams, everyone can get their own account, with just the privileges they need to do their jobs.' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/tst1.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __( 'Link', 'appilo' ),
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
            'testimonial_list',
            [
                'label' => __( 'Testimonial List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => __( 'Alex D. Denz', 'appilo' ),
                    ],
                     [
                        'name' => __( 'Alex D. Denz', 'appilo' ),
                    ],
                     [
                        'name' => __( 'Alex D. Denz', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ name }}}',
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
            'name_color',
            [
                'label' => __( 'Name Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-testimonial-slider .app-medi-testimonial-quote .app-medi-testimonial-author .app-medi-test-author-text h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'name_fonts',
                'label' => __( 'Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-medi-testimonial-slider .app-medi-testimonial-quote .app-medi-testimonial-author .app-medi-test-author-text h4',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-testimonial-slider .app-medi-testimonial-quote .app-medi-testimonial-author .app-medi-test-author-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-medi-testimonial-slider .app-medi-testimonial-quote .app-medi-testimonial-author .app-medi-test-author-text span',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-testimonial-slider .app-medi-testimonial-quote p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-medi-testimonial-slider .app-medi-testimonial-quote p',
            ]
        );

        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .app-medi-testimonial-slider' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-medi-testimonial-slider',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .app-medi-testimonial-slider' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<!-- Start of testimonial section
    ============================================= -->
    <div  class="medical-testimonial-section position-relative">
        <div class="app-medi-testimonial-slider owl-carousel wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1000ms">';
                    if ( $settings['testimonial_list'] ) {
                        foreach ($settings['testimonial_list'] as $testimonial) {
                            $link = get_that_link( $testimonial['link']);
                        echo '<div class="app-medi-testimonial-quote app-medi-headline pera-content">
                                <p>' . $testimonial['info'] . '</p>
                                <div class="app-medi-testimonial-author">
                                    <div class="app-medi-test-author-img float-left">
                                        <img src="' . $testimonial['image']['url'] . '" alt>
                                    </div>
                                    <div class="app-medi-test-author-text">
                                        <h4><a '.$link.'>' . $testimonial['name'] . '</a></h4>
                                        <span>' . $testimonial['designation'] . '</span>
                                    </div>
                                </div>
                                <span class="app-medi-icon-bg">
                                    <svg height="512pt" viewBox="0 -21 512.00017 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m510.636719 334.027344c-18.019531-53.3125-9.445313-104.96875-8.789063-108.710938 3.042969-13.519531 4.5625-27.4375 4.511719-41.375-.285156-80.5625-51.808594-150.996094-128.207031-175.261718-3.941406-1.25-8.164063.929687-9.421875 4.875-1.253907 3.949218.929687 8.164062 4.878906 9.421874 70.167969 22.285157 117.488281 86.996094 117.75 161.019532.046875 12.867187-1.359375 25.710937-4.179687 38.183594-.023438.109374-.046876.21875-.066407.328124-.425781 2.363282-10.222656 58.523438 9.316407 116.324219 1.195312 3.542969.511718 7.238281-1.882813 10.136719-2.402344 2.910156-6.070313 4.347656-9.8125 3.832031-15.835937-2.15625-29.527344-6.296875-40.699219-12.304687-16.015625-8.613282-35.03125-9.359375-50.875-1.996094-23.410156 10.882812-48.46875 16.167969-74.539062 15.695312-44.171875-.792968-85.773438-18.648437-117.144532-50.277343-31.367187-31.625-48.890624-73.375-49.335937-117.554688-.453125-45.082031 16.59375-87.695312 48-119.992187 31.34375-32.230469 73.332031-50.460938 118.230469-51.339844 8.800781-.171875 17.644531.324219 26.28125 1.476562 4.097656.554688 7.875-2.339843 8.421875-6.445312s-2.339844-7.878906-6.445313-8.425781c-9.386718-1.25-18.992187-1.785157-28.550781-1.6015628-48.871094.9531248-94.574219 20.7968748-128.691406 55.8789058-14.046875 14.445313-25.449219 30.789063-33.984375 48.4375-41.464844 7.839844-79.257813 29.910157-106.480469 62.210938-27.753906 32.933594-43.125 75.007812-43.28125 118.480469-.050781 13.9375 1.46875 27.859375 4.511719 41.378906.660156 3.742187 9.238281 55.371094-8.789063 108.707031-2.855469 8.445313-1.164062 17.601563 4.523438 24.488282 5.730469 6.945312 14.480469 10.367187 23.40625 9.148437 17.621093-2.402344 33.023437-7.097656 45.777343-13.957031 11.875-6.390625 25.875-6.988282 37.449219-1.605469 24.449219 11.367187 55.261719 17.089844 81.128907 17.089844 29.121093 0 58.050781-8.101563 83.679687-21.914063 24.804687-13.367187 46.613281-32.578125 63.074219-55.554687 2.414062-3.367188 1.640625-8.054688-1.726563-10.464844-3.367187-2.414063-8.054687-1.636719-10.464843 1.726563-15.140626 21.132812-35.195313 38.796874-58 51.085937-23.53125 12.6875-50.101563 19.644531-76.828126 20.125-26.042968.46875-51.132812-4.8125-74.539062-15.695313-15.839844-7.367187-34.859375-6.617187-50.875 1.996094-11.167969 6.007813-24.863281 10.148438-40.703125 12.304688-3.738281.511718-7.40625-.921875-9.8125-3.832032-2.390625-2.898437-3.078125-6.59375-1.878906-10.136718 19.488281-57.65625 9.800781-113.628906 9.316406-116.308594-.019531-.113281-.042969-.230469-.066406-.34375-2.820313-12.472656-4.226563-25.320312-4.183594-38.1875.144531-39.957031 14.261719-78.621094 39.75-108.867188 22.8125-27.066406 53.703125-46.316406 87.863281-54.949218-7.519531 20.621094-11.339844 42.640625-11.113281 65.238281.488281 48.105469 19.554687 93.550781 53.6875 127.964844 34.136719 34.414062 79.417969 54.710937 127.523437 54.710937 29.804688 0 56.679688-5.722656 81.132813-17.089844 11.574219-5.382812 25.574219-4.78125 37.445313 1.601563 12.757812 6.863281 28.160156 11.558594 45.78125 13.960937 8.921874 1.210938 17.671874-2.207031 23.40625-9.148437 5.683593-6.886719 7.375-16.042969 4.519531-24.488281zm0 0"/><path d="m268.054688 128.160156h-23.625c-15.414063 0-27.957032 12.542969-27.957032 27.957032v28.257812c0 15.417969 12.542969 27.960938 28 27.960938h.003906c.214844 0 11.988282.105468 17.386719 11.105468 2.75 5.609375 4.523438 11.644532 5.261719 17.933594.941406 8.03125 5.792969 16.394531 18.527344 16.394531 6.460937 0 12.421875-3.351562 15.855468-9.152343 10.183594-17.226563 19.890626-46.605469 8.304688-88.765626-5.132812-18.660156-22.300781-31.691406-41.757812-31.691406zm20.539062 112.820313c-1.1875 2.003906-3.0625 1.851562-3.8125 1.691406-.921875-.195313-2.503906-.851563-2.761719-3.046875-.9375-7.980469-3.1875-15.648438-6.691406-22.792969-9.410156-19.179687-29.609375-19.5-30.863281-19.5-.011719 0-.023438 0-.035156 0-7.144532 0-12.957032-5.8125-12.957032-12.957031v-28.257812c0-7.144532 5.8125-12.957032 12.957032-12.957032h23.625c12.722656 0 23.949218 8.496094 27.292968 20.664063 8.183594 29.777343 5.910156 55.738281-6.753906 77.15625zm0 0"/><path d="m328.390625 156.117188v28.257812c0 15.417969 12.542969 27.960938 27.9375 27.960938.492187.003906 12.140625.273437 17.453125 11.105468 2.753906 5.609375 4.523438 11.644532 5.261719 17.933594.941406 8.03125 6.488281 16.394531 18.527343 16.394531 6.464844 0 12.425782-3.351562 15.859376-9.152343 10.183593-17.222657 19.890624-46.605469 8.300781-88.765626-5.128907-18.65625-22.296875-31.691406-41.753907-31.691406h-23.625c-15.417968 0-27.960937 12.542969-27.960937 27.957032zm15 0c0-7.144532 5.816406-12.957032 12.960937-12.957032h23.625c12.722657 0 23.945313 8.496094 27.289063 20.667969 8.183594 29.773437 5.914063 55.734375-6.75 77.152344-1.1875 2.003906-3.066406 1.851562-3.816406 1.691406-.917969-.195313-2.5-.851563-2.757813-3.046875-.9375-7.980469-3.1875-15.652344-6.691406-22.792969-9.414062-19.179687-29.613281-19.5-30.863281-19.5-.015625 0-.027344 0-.035157 0-7.148437 0-12.960937-5.8125-12.960937-12.957031zm0 0"/></svg>
                                </span>
                            </div>';
                    }
                }
    echo'</div>
    </div>
<!-- End of testimonial section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new medi_testimonial );
?>