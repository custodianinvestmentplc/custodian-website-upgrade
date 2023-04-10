<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_contact_in_list extends Widget_Base {

   public function get_name() {
      return 'appilo_contact_in_list';
   }

   public function get_title() {
      return __( 'Applio Contact Info List', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() {
        return ' eicon-call-to-action';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'app_lan_ct_section',
            [
                'label' => __( 'Info Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Appilo Apps', 'appilo' ),
            ]
        );
        $this->add_control(
            'title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The New Way To Change Your Lifestyle!' , 'appilo' ),
            ]
        );

        $this->add_control(
            'map_link', [
                'label' => __( 'Map Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        
        $repeater = new \Elementor\Repeater(); 

        $repeater->add_control(
            'infoicon',
            [
                'label' => esc_html__( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );  
        $repeater->add_control(
            'con_infos', [
                'type' => Controls_Manager::TEXTAREA,
                'label' =>   esc_html__('Icon Details', 'appilo'),
                'label_block' => true,                                
            ]
        );
        $this->add_control(
            'infos',
            [
                'label' => __( 'Service Box', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ con_infos }}}',
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'info_heading_style',
            [
                'label' => esc_html__( 'Info Top Heading', 'appilo' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'sub_title_h',
			[
				'label' => __( 'Sub Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-contact-right .aplpg-title-area .aplpg-subtitle',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );
        
        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-contact-right .aplpg-title-area .aplpg-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
			'title_h',
			[
				'label' => __( 'Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-contact-right .aplpg-headline h3',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );
        
        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__( 'Title Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-contact-right .aplpg-headline h3' => 'color: {{VALUE}}',
                ],
            ]
        );
             
        $this->end_controls_section();

        $this->start_controls_section(
            'info_list_style',
            [
                'label' => esc_html__( 'Info Item Style', 'appilo' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'info_text',
			[
				'label' => __( 'Sub Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'           => 'info_item_typography',
                'label'          => esc_html__( 'Typography', 'appilo' ),
                'selector'       => '{{WRAPPER}} .aplpg-contact-section .aplpg-contact-area .aplpg-contact-right .aplpg-contact-list .aplpg-contact-item .aplpg-pera-txt p',
                'fields_options' => [
                    'typography' => [
                        'default' => 'custom',
                    ],
                ],
            ]
        );
        
        $this->add_control(
            'info_item_color',
            [
                'label'     => esc_html__( 'Info Item Color', 'appilo' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-contact-section .aplpg-contact-area .aplpg-contact-right .aplpg-contact-list .aplpg-contact-item .aplpg-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings  = $this->get_settings_for_display();
        $map_link     = $settings['map_link'];
        $title     = $settings['title'];
        $sub_title     = $settings['sub_title'];
        $infos     = $settings['infos'];
        
        ?>
        <section class="aplpg-contact-section">
            <div class="container">
                <div class="aplpg-contact-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="aplpg-map">
                                <iframe src="<?php echo $map_link;?>" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="aplpg-contact-right">
                                <div class="aplpg-title-area wow fadeInUp">
                                    <span class="aplpg-subtitle"><?php echo esc_html($sub_title);?></span>
                                    <div class="aplpg-headline">
                                        <h3><?php echo esc_html($title);?></h3>
                                    </div>
                                </div>
                                <div class="aplpg-contact-list">
                                    <?php foreach($infos as $item):?>
                                    <div class="aplpg-contact-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="aplpg-icon-wrapper">
                                        <?php \Elementor\Icons_Manager::render_icon( $item['infoicon'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </div>
                                        <div class="aplpg-pera-txt">
                                            <p><?php echo __($item['con_infos']);?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_contact_in_list );
?>