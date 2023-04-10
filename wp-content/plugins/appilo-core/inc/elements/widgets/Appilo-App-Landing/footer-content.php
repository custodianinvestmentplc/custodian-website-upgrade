<?php
namespace Elementor;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly



class footer_content extends Widget_Base {

    public function get_name() {
        return 'footer_content';
    }

    public function get_title() {
        return __('Footer Content', 'niobis');
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
                'label' => __('Intro List', 'niobis'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'thepack'),
                'label_block' => true,                              
            ]
        );
 
        $repeater->add_control(
            'url', [
                'type' => Controls_Manager::URL,
                'label' =>   esc_html__('Link', 'thepack'),                              
            ]
        );

        $this->add_control(
            'box_list',
            [
                'label' => __( 'Service Box', 'niobis' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'default' => [
                    [
                        'name' => __( 'It Consultancy', 'niobis' ),
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
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'niobis' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-footer-widget .aplpg-footer-links ul li a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' =>   esc_html__( 'Title Typography', 'niobis' ),
                'selector' => '{{WRAPPER}} .aplpg-footer-widget .aplpg-footer-links ul li a',
            ]
        );
        $this->add_control(
			'line_height',
			[
				'label' => __( 'Lineheight', 'appilo' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .aplpg-footer-widget .aplpg-footer-links ul li' => 'line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);


        $this->end_controls_section();
 
    }
        
    protected function render() {

    $settings = $this->get_settings();


        echo '<div class="aplpg-footer-widget" data-wow-delay="0.4s">
             ';

        if ( $settings['box_list'] ) {
            foreach ($settings['box_list'] as $box) {

        echo '<div class="aplpg-footer-links">
                                        <ul>
                                        <li><a href="#">'.$box['label'].'</a></li>
                                        </ul>
            </div>';
                    }
                }
        echo'
</div>
                    ';
}



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new footer_content );
?>