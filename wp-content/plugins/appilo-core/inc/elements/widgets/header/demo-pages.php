<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_pages extends Widget_Base {

   public function get_name() {
      return 'demo_pages';
   }

   public function get_title() {
      return __( 'Demo Pages', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-header' ];
	}
   public function get_icon() { 
        return 'eicon-nav-menu';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Demo Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Pre-Built Demos Collection', 'appilo' ),
            ]
        );
        $this->add_control(
            'sub_heading',
            [
                'label' => __( 'Sub Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'SaaSio comes with a beautiful collection of modern, easily importable, and highly customizable demo layouts.', 'appilo' ),
            ]
        );
        $this->end_controls_section();

	    $this->start_controls_section(
		    '__demo_list_repeat',
		    [
			    'label' => __( 'Demo List', 'appilo' ),
			    'tab' => Controls_Manager::TAB_CONTENT,
		    ]
	    );
	    $repeater = new Repeater();
	    $repeater->add_control(
		    'badge',
		    [
			    'label' => __( 'Badge', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::TEXT,
			    'default' => __( 'New', 'appilo' ),
		    ]
	    );
	    $repeater->add_control(
		    'img',
		    [
			    'label' => __( 'Demo Image', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::MEDIA,
			    'default' => [
				    'url' => \Elementor\Utils::get_placeholder_image_src(),
			    ],
		    ]
	    );
	    $repeater->add_control(
		    'onepage_text',
		    [
			    'label' => __( 'One page Text', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::TEXT,
			    'default' => __( 'One Page', 'appilo' ),
		    ]
	    );
	    $repeater->add_control(
		    'onepage',
		    [
			    'label' => __( 'One Page Link', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::URL,
			    'show_external' => true,
			    'default' => [
				    'url' => '#',
				    'is_external' => true,
				    'nofollow' => true,
			    ],
		    ]
	    );
	    $repeater->add_control(
		    'multipage_text',
		    [
			    'label' => __( 'Multi Page Text', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::TEXT,
			    'default' => __( 'Multi Pages', 'appilo' ),
		    ]
	    );
	    $repeater->add_control(
		    'multipage',
		    [
			    'label' => __( 'Multi Page Link', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::URL,
			    'show_external' => true,
			    'default' => [
				    'url' => '#',
				    'is_external' => true,
				    'nofollow' => true,
			    ],
		    ]
	    );
	    $repeater->add_control(
		    'demo_name',
		    [
			    'label' => __( 'Demo Name', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::TEXT,
			    'default' => __( 'Demo Name', 'appilo' ),
		    ]
	    );
	    $this->add_control(
		    'demo_list',
		    [
			    'label' => __('Demo list', 'appilo'),
			    'type' => Controls_Manager::REPEATER,
			    'fields' => $repeater->get_controls(),
			    'default' => [
				    [
					    'demo_name' => 'Main Demo',
				    ],[
					    'demo_name' => 'Main Demo',
				    ],[
					    'demo_name' => 'Main Demo',
				    ],[
					    'demo_name' => 'Main Demo',
				    ],

			    ],
			    'title_field' => '{{{ demo_name }}}',
		    ]
	    );
	    $this->end_controls_section();

        $this->start_controls_section(
            'menu_style',
            [
                'label' => __( 'Color & Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
	    $this->add_control(
		    'heading_color',
		    [
			    'label' => __( 'Heading Color', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::COLOR,
			    'selectors' => [
				    '{{WRAPPER}} .demo-page-landing .demo-title h2' => 'color: {{VALUE}}',
			    ],
		    ]
	    );
	    $this->add_group_control(
		    \Elementor\Group_Control_Typography::get_type(),
		    [
			    'name' => 'heading_typography',
			    'label' => __( 'Heading Typography', 'appilo' ),
			    'selector' => '{{WRAPPER}} .demo-page-landing .demo-title h2',
		    ]
	    );
	    $this->add_control(
		    'sub_heading_color',
		    [
			    'label' => __( 'Sub Heading Color', 'appilo' ),
			    'type' => \Elementor\Controls_Manager::COLOR,
			    'selectors' => [
				    '{{WRAPPER}} .demo-page-landing .demo-title p' => 'color: {{VALUE}}',
			    ],
		    ]
	    );
	    $this->add_group_control(
		    \Elementor\Group_Control_Typography::get_type(),
		    [
			    'name' => 'sub_heading_typography',
			    'label' => __( 'Sub Heading Typography', 'appilo' ),
			    'selector' => '{{WRAPPER}} .demo-page-landing .demo-title p',
		    ]
	    );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $heading = $settings['heading'];
        $sub_heading = $settings['sub_heading'];

        ?>

	    <div class="demo-page-landing">
		    <div class="side-demo-close side-demo"><i class="fas fa-times"></i></div>
		    <div class="demo-title text-center">
			    <h2><?php echo $heading; ?></h2>
			    <p><?php echo $sub_heading; ?></p>
		    </div>
		    <div class="demo-page-landing-wrap sa-demo-bar justify-content-center">

			    <?php
			    foreach ($settings['demo_list'] as $list):
			    ?>
			    <div class="sa-demo-bar-item">
				    <div class="sa-demo-bar-item-inner">
					    <span class="demo-label position-absolute"><?php echo $list['badge']; ?></span>
					    <img alt="Demo" src="<?php echo $list['img']['url']; ?>" alt="">
					    <div class="sa-demo-bar-holder">
						    <div class="sa-demo-btn-group">
							    <a class="btn btn-default" href="<?php echo $list['onepage']['url']; ?>" target="_blank"><?php echo $list['onepage_text']; ?></a>

                                <?php
                                if (!empty($list['multipage_text'])){
                                ?>
                                <a class="btn btn-default" href="<?php echo $list['multipage']['url']; ?>" target="_blank"><?php echo $list['multipage_text']; ?></a>

							    <?php
                                }
							    ?>
						    </div>
					    </div>
				    </div>
				    <h6><?php echo $list['demo_name']; ?></h6>
			    </div>
			    <?php
				    endforeach;
			    ?>

		    </div>
	    </div>



	    <?php

   }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_pages() );
?>