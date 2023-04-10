<?php
namespace Elementor;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


class get_started extends Widget_Base {

    public function get_name() {
        return 'get_started';
    }

    public function get_title() {
        return __('Get Started', 'appilo');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['ashelement-addons'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'about_box',
            [
                'label' => __('Intro List', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'description',
            [
                'label' => __( 'Description', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('ut labore et dolore magna aliqua. se ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'appilo'),
            ]
        );
        $this->add_control(
            'box_list',
            [
                'label' => __( 'Service Box', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'default' => [
                    [
                        'name' => __( 'It Consultancy', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Style Section', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );



        $this->add_control(
            'description_color',
            [
                'label' =>   esc_html__( 'description Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr3-pera-txt p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'label' =>   esc_html__( 'description Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pr3-pera-txt p',
            ]
        );





        $this->add_control(
            'icon_color',
            [
                'label' =>   esc_html__( 'Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr3-service-content .pr3-service-column .pr3-icon-wrapper i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'gradient',  ],
                'selector' => '{{WRAPPER}} .pr3-service-content .pr3-service-column .pr3-icon-wrapper i',
            ]
        );



        $this->end_controls_section();
 
    }
        
    protected function render() {

    $settings = $this->get_settings();


        echo '        <section class="aplpg-contact-section">
            <div class="container">
                <div class="aplpg-contact-area">
                    <div class="row">
                      
                       
                            <div class="aplpg-contact-right">';

        if ( $settings['box_list'] ) {
            foreach ($settings['box_list'] as $box) {

        echo '<div class="aplpg-contact-list">
                                    <div class="aplpg-contact-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="aplpg-icon-wrapper">';

               \Elementor\Icons_Manager::render_icon( $box['icon'], [ 'aria-hidden' => 'true' ] );

                echo' </div>
                        <div class="aplpg-pera-txt">
                            <p>'.$box['description'].'</p>
                        </div>
                    </div>
                </div>';
                    }
                }
        echo'   </div>
                      
                    </div>
                </div>
            </div>
        </section>';
}




    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new get_started );
?>